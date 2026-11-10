<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uso Interno | SIAgroBD - CONABIO</title>
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('images/siagro-favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body>
    <x-navbar />
    <main class="container content-container py-4">
        <div class="mediateca-hero">
            <a href="{{ route('home') }}" class="btn-back">
                <i class="bi bi-arrow-left"></i> Volver al inicio
            </a>
            <h1 class="fw-bold mb-2 display-6">Interfaces de Uso Interno</h1>
            <p class="mb-0 fs-6" style="max-width: 860px;">
                Módulos de administración, descarga completa de datos no oscurecidos y consola de API restringidos para el equipo técnico y de investigación de CONABIO.
            </p>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-12 col-md-4">
                <a href="https://siagro.conabio.gob.mx/colectas_gef_interna/registro/" target="_blank" class="internal-access-card">
                    <div>
                        <div class="access-avatar avatar-admin">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                        <h3 class="access-title">Registro de uso interno</h3>
                        <p class="access-desc">
                            Acceso administrativo para la carga, validación y gestión de registros internos de colectas del proyecto GEF.
                        </p>
                    </div>
                    <div class="btn-access-action">
                        <span>Iniciar sesión</span>
                        <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://siagro.conabio.gob.mx/colectas_gef_interna/download/" target="_blank" class="internal-access-card">
                    <div>
                        <div class="access-avatar avatar-download">
                            <i class="bi bi-cloud-arrow-down-fill"></i>
                        </div>
                        <h3 class="access-title">Descarga de datos de uso interno</h3>
                        <p class="access-desc">
                            Descarga de bases de datos completas sin restricciones de oscurecimiento geográfico para análisis científico.
                        </p>
                    </div>
                    <div class="btn-access-action">
                        <span>Acceder a descargas</span>
                        <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://colectas_gef_interna-siagro.conabio.gob.mx/graphiql" target="_blank" class="internal-access-card">
                    <div>
                        <div class="access-avatar avatar-api">
                            <i class="bi bi-terminal-fill"></i>
                        </div>
                        <h3 class="access-title">API de uso interno</h3>
                        <p class="access-desc">
                            Interfaz de desarrollo GraphiQL para pruebas, consultas personalizadas y consumo de datos mediante endpoints GraphQL.
                        </p>
                    </div>
                    <div class="btn-access-action">
                        <span>Abrir GraphiQL</span>
                        <i class="bi bi-box-arrow-up-right"></i>
                    </div>
                </a>
            </div>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
