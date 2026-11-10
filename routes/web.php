<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DescargasController;

Route::get('/', function () {return view('index');})->name('home');

Route::get('/index', function () {return redirect()->route('home');});

Route::get('/contenido-materiales', function () {return view('materiales');})->name('materiales');

Route::get('/materiales-tecnicos', function () {return view('materiales_tecnicos');})->name('materiales.tecnicos');

Route::get('/bases-de-datos', function () {return view('bases_de_datos');})->name('bases.datos');

Route::get('/especies', function () {return view('especies');})->name('especies');

Route::get('/aplicaciones', function () {return view('aplicaciones');})->name('aplicaciones');

Route::get('/acerca-de', function () {return view('acerca_de');})->name('acerca');

Route::get('/registro', function () {return view('registro');})->name('registro');

Route::get('/uso_interno', function () {return view('uso_interno');})->name('uso_interno');

Route::get('/forma_citar', function () {return view('contacto');})->name('forma_citar');

Route::get('/herramientas', function () {return view('herramientas');})->name('herramientas');

Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

Route::get('/descargas/{modulo}', [DescargasController::class, 'show'])->name('descargas.show');

Route::get('/descargas/{modulo}/exportar', [DescargasController::class, 'exportar'])->name('descargas.exportar');

Route::get('/proxy/enciclovida/conteo', function (Request $request) {
    $queryString = $request->getQueryString();
    $targetUrl = 'https://api.enciclovida.mx/v2/especies/conteo' . ($queryString ? '?' . $queryString : '');
    try {
        $response = Http::withoutVerifying()
            ->withHeaders([
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)',
                'Referer'    => 'https://siagro.conabio.gob.mx/',
                'Accept'     => 'application/json',
            ])
            ->timeout(10)
            ->get($targetUrl);
        if ($response->successful()) {
            return response($response->body(), 200)->header('Content-Type', 'application/json');
        }
        return response($response->body(), $response->status())->header('Content-Type', 'application/json');
    } catch (\Throwable $e) {
        try {
            $context = stream_context_create([
                "ssl" => [
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                ],
                "http" => [
                    "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)\r\n" .
                                "Referer: https://siagro.conabio.gob.mx/\r\n" .
                                "Accept: application/json\r\n",
                    "timeout" => 10
                ]
            ]);
            $result = @file_get_contents($targetUrl, false, $context);
            if ($result !== false) {
                return response($result, 200)->header('Content-Type', 'application/json');
            }
        } catch (\Throwable $ex) {}
        return response()->json([
            'error'       => true,
            'mensaje_php' => $e->getMessage(),
            'url_probada' => $targetUrl
        ], 500);
    }
});

