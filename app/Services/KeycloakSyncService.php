<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class KeycloakSyncService
{
    private function getAdminToken(string $instancia, string $adminUser, string $adminPass): ?string
    {
        $url = "https://{$instancia}-siagro.conabio.gob.mx/auth/realms/{$instancia}/protocol/openid-connect/token";
        $response = Http::withoutVerifying()
            ->asForm()
            ->timeout(15)
            ->post($url, [
                'username'   => $adminUser,
                'password'   => $adminPass,
                'client_id'  => 'zendro_graphql-server',
                'grant_type' => 'password',
            ]);
        if ($response->successful()) {
            return $response->json('access_token');
        }
        Log::error("Keycloak auth falló en instancia [{$instancia}]", [
            'status' => $response->status(),
            'body'   => $response->body(),
        ]);
        return null;
    }


    public function userExistsInAnyInstance(string $usuario, string $correo): bool
    {
        $instances = config('services.siagro_instances', []);
        foreach ($instances as $instancia => $creds) {
            $token = $this->getAdminToken($instancia, $creds['username'], $creds['password']);
            if (!$token) {
                throw new \RuntimeException("No se pudo autenticar con la instancia {$instancia}");
            }
            $baseUrl = "https://{$instancia}-siagro.conabio.gob.mx/auth/admin/realms/{$instancia}/users";
            $resUser = Http::withoutVerifying()
                ->withToken($token)
                ->timeout(15)
                ->get($baseUrl, ['username' => $usuario]);
            if ($resUser->successful()) {
                foreach ($resUser->json() ?? [] as $u) {
                    if (isset($u['username']) && strcasecmp($u['username'], $usuario) === 0) {
                        return true;
                    }
                }
            }
            $resEmail = Http::withoutVerifying()
                ->withToken($token)
                ->timeout(15)
                ->get($baseUrl, ['email' => $correo]);
            if ($resEmail->successful()) {
                foreach ($resEmail->json() ?? [] as $u) {
                    if (isset($u['email']) && strcasecmp($u['email'], $correo) === 0) {
                        return true;
                    }
                }
            }
        }
        return false;
    }


    public function createUserInAllInstances(array $userData): int
    {
        $instances = config('services.siagro_instances', []);
        foreach ($instances as $instancia => $creds) {
            $token = $this->getAdminToken($instancia, $creds['username'], $creds['password']);
            if (!$token) {
                return 500;
            }
            $url = "https://{$instancia}-siagro.conabio.gob.mx/auth/admin/realms/{$instancia}/users";
            $payload = [
                'firstName'   => $userData['nombre'],
                'lastName'    => $userData['apellidos'],
                'email'       => $userData['correo'],
                'enabled'     => true,
                'username'    => $userData['usuario'],
                'credentials' => [
                    [
                        'type'      => 'password',
                        'value'     => $userData['contrasena_plana'],
                        'temporary' => false,
                    ],
                ],
                'attributes'  => [
                    'institucion' => (string) ($userData['institucion'] ?? ''),
                    'estado'      => (string) ($userData['estado'] ?? ''),
                    'pais'        => (string) $userData['pais'],
                    'uso'         => (string) $userData['uso'],
                ],
            ];
            $response = Http::withoutVerifying()
                ->withToken($token)
                ->acceptJson()
                ->timeout(15)
                ->post($url, $payload);

            if ($response->status() === 409) {
                return 409;
            }
            if ($response->status() !== 201) {
                Log::error("Error al crear usuario en Keycloak [{$instancia}]", [
                    'status' => $response->status(),
                    'body'   => $response->body(),
                ]);
                return 500;
            }
        }
        return 201;
    }


     public function findUserIdsInAllInstances(string $usuario, string $correo): ?array
    {
        $instances = config('services.siagro_instances', []);
        $ids = [];
        foreach ($instances as $instancia => $creds) {
            $token = $this->getAdminToken($instancia, $creds['username'], $creds['password']);
            if (!$token) {
                throw new \RuntimeException("No se pudo autenticar con la instancia {$instancia}");
            }
            $baseUrl = "https://{$instancia}-siagro.conabio.gob.mx/auth/admin/realms/{$instancia}/users";
            $response = Http::withoutVerifying()
                ->withToken($token)
                ->timeout(15)
                ->get($baseUrl, ['username' => $usuario]);
            if (!$response->successful()) {
                Log::error("Error consultando usuario en Keycloak [{$instancia}]", [
                    'status' => $response->status(),
                ]);
                return null;
            }
            $matchedId = null;
            foreach ($response->json() ?? [] as $u) {
                if (
                    isset($u['username'], $u['email'], $u['id']) &&
                    strcasecmp($u['username'], $usuario) === 0 &&
                    strcasecmp($u['email'], $correo) === 0
                ) {
                    $matchedId = $u['id'];
                    break;
                }
            }
            if (!$matchedId) {
                return null;
            }
            $ids[$instancia] = $matchedId;
        }
        return $ids;
    }


    public function resetPasswordInAllInstances(array $userIdsByInstance, string $nuevaContrasena): int
    {
        $instances = config('services.siagro_instances', []);
        foreach ($userIdsByInstance as $instancia => $userId) {
            $creds = $instances[$instancia] ?? null;
            if (!$creds) {
                return 500;
            }
            $token = $this->getAdminToken($instancia, $creds['username'], $creds['password']);
            if (!$token) {
                return 500;
            }
            $url = "https://{$instancia}-siagro.conabio.gob.mx/auth/admin/realms/{$instancia}/users/{$userId}/reset-password";
            $response = Http::withoutVerifying()
                ->withToken($token)
                ->acceptJson()
                ->timeout(15)
                ->put($url, [
                    'type'      => 'password',
                    'value'     => $nuevaContrasena,
                    'temporary' => false,
                ]);
            if ($response->status() !== 204) {
                Log::error("Error cambiando contraseña en Keycloak [{$instancia}]", [
                    'status' => $response->status(),
                    'body'   => $response->body(),
                ]);
                return $response->status() === 409 ? 409 : 500;
            }
        }

        return 204;
    }
}
