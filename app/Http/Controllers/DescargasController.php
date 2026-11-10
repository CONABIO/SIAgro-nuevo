<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DescargasController extends Controller
{
    public function show($modulo)
    {
        $vistasValidas = ['focales', 'colectas', 'canastas', 'maices'];
        if (!in_array($modulo, $vistasValidas)) {
            abort(404);
        }
        $proyectosMaices = [
            'todos' => 'Todos los proyectos',
            'FY001' => 'FY001 - Base de datos de colecciones de maíces nativos, teocintles y Tripsacum de México',
            'FZ001' => 'FZ001 - Estudio de la diversidad genética y su distribución de los maíces criollos y sus parientes silvestres en Michoacán',
            'FZ002' => 'FZ002 - Conocimiento de la diversidad y distribución actual del maíz nativo y sus parientes silvestres en México',
            'FZ003' => 'FZ003 - Diversidad y distribución altitudinal de maíces nativos en la región de los Loxicha, Sierra Madre del Sur Oaxaca',
            'FZ007' => 'FZ007 - Monitoreo y recolección de la diversidad de razas de maíz criollo en la región de la Huasteca en México para complementar las colecciones de los Bancos de germoplasma de INIFAP y CIMMYT',
            'FZ014' => 'FZ014 - Colecta de maíces nativos en regiones estratégicas de la Península de Yucatán',
            'FZ015' => 'FZ015 - Conocimiento de la diversidad y distribución actual del maíz nativo en Nuevo León',
            'FZ016' => 'FZ016 - Conocimiento de la diversidad y distribución actual del maíz nativo y sus parientes silvestres en México, segunda etapa 2008-2009',
            'FZ018' => 'FZ018 - Conocimiento de la diversidad y distribución actual del maíz nativo y Tripsacum en el estado de Tamaulipas',
            'FZ023' => 'FZ023 - Estudio de la diversidad de maíz en la región costa de Michoacán y áreas adyacentes de Jalisco y Colima',
            'Z003'  => 'Z003 - Donación de la base de datos resultado del diagnóstico de la diversidad de maíces nativos, su agroecosistema y sus parientes silvestres en La Chinantla',
            'Papigochic' => 'Z004 - Donación de la base de datos resultado del diagnóstico de la diversidad de maíces nativos, su agroecosistema y sus parientes silvestres presentes en Papigochic y su zona de influencia',
            'Z005'  => 'Z005 - Catálogo de maíces nativos generada en la tesis El sistema milpa y sus recursos fitogenéticos en Santa María Tlahuitoltepec, Oaxaca',
            'Z006'  => 'Z006 - Donación de la base de datos del Dr. Ortega Paczka resultados de la computarización de datos de colecta de muestras de maíz y otros cultivos asociados de diferentes regiones de México',
            'NM002' => 'NM002 - Conservación in situ y mejoramiento participativo de los maíces nativos y sus parientes silvestres en Oaxaca'
        ];
        $taxonesMaices = [];
        if ($modulo === 'maices') {
            try {
                $query = json_encode([
                    'query' => '{
                        taxons(pagination:{limit:1000} order:{field:taxon order:ASC}){
                            taxon_id
                            taxon
                            estatus
                        }
                    }'
                ]);
                $options = [
                    'http' => [
                        'header'  => "Content-Type: application/json\r\nAccept: application/json\r\n",
                        'method'  => 'POST',
                        'content' => $query,
                        'timeout' => 5
                    ],
                    'ssl' => [
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                    ]
                ];
                $context = stream_context_create($options);
                $response = @file_get_contents('https://maices-siagro.conabio.gob.mx/graphql', false, $context);
                if ($response) {
                    $json = json_decode($response, true);
                    $taxonesMaices = $json['data']['taxons'] ?? [];
                }
            } catch (\Exception $e) {
                $taxonesMaices = [];
            }
        }
        return view("descargas.{$modulo}", compact('modulo', 'proyectosMaices', 'taxonesMaices'));
    }

    public function exportar(Request $request, $modulo)
    {
        $nombreArchivo = "{$modulo}.csv";
        if ($modulo === 'canastas' && $request->has('tipo')) {
            $tipo = $request->input('tipo');
            if ($tipo === 'recetarios') $nombreArchivo = "recetarios_canastas.csv";
            elseif ($tipo === 'menus') $nombreArchivo = "menus_canastas.csv";
            elseif ($tipo === 'frases') $nombreArchivo = "frases_canastas.csv";
            else $nombreArchivo = "canastas.csv";
        }

        if ($modulo === 'maices' && $request->input('tipo') === 'metodos') {
            $nombreArchivo = "metodos_maices.csv";
        }
        $rutas = [
            app_path("datasets/{$modulo}/{$nombreArchivo}"),
            app_path("datasets/{$modulo}/" . ucfirst($modulo) . ".csv"),
            storage_path("app/datasets/{$modulo}/{$nombreArchivo}"),
            base_path("{$modulo}/download/tabla/{$nombreArchivo}"),
            base_path("codigo_siagro_completo/{$modulo}/download/tabla/{$nombreArchivo}")
        ];
        $archivoCsv = null;
        foreach ($rutas as $ruta) {
            if (file_exists($ruta)) {
                $archivoCsv = $ruta;
                break;
            }
        }
        if (!$archivoCsv) {
            dd("Error: No se encontró el archivo {$nombreArchivo}. Revisa que esté dentro de app/datasets/{$modulo}/");
        }
        try {
            $ip = $request->ip();
            $hoy = now()->setTimezone('America/Mexico_City')->format('Y-m-d H:i:s');
            $ultimoId = DB::table('monitoreo.descarga')->max('id_descarga') ?? 0;
            DB::table('monitoreo.descarga')->insert([
                'id_descarga' => $ultimoId + 1,
                'nombre_bd'   => $modulo,
                'IP'          => $ip,
                'fecha'       => $hoy,
                'pais'        => 'México',
                'estado'      => (string)$request->input('estado', ''),
                'ciudad'      => (string)$request->input('municipio', '')
            ]);
        } catch (\Exception $e) {
        }
        $selectedColumns = [];
        if ($request->has('selectedOptions') && !empty($request->input('selectedOptions'))) {
            $selectedColumns = array_filter(explode(',', $request->input('selectedOptions')));
        } elseif ($request->has('headerCsv') && !empty($request->input('headerCsv'))) {
            $selectedColumns = array_filter(explode(',', $request->input('headerCsv')));
        } else {
            foreach ($request->all() as $key => $val) {
                if (!in_array($key, ['tipo', 'estado', 'proyecto', 'taxon_selected', 'razas', 'selectedOptions', 'headerCsv', 'option'])) {
                    if (is_array($val)) {
                        $selectedColumns = array_merge($selectedColumns, $val);
                    } else {
                        $selectedColumns[] = $val;
                    }
                }
            }
        }
        $filtroEstado    = trim((string)$request->input('estado', 'Todos'));
        $filtroMunicipio = trim((string)$request->input('municipio', 'todos'));
        $filtroProyecto  = trim((string)$request->input('proyecto', 'todos'));
        $filtroTaxon     = trim((string)$request->input('taxon_selected', $request->input('razas', 'todos')));
        $nombreDescarga = "{$modulo}_" . date('Ymd_His') . ".csv";
        return response()->streamDownload(function () use ($archivoCsv, $selectedColumns, $filtroEstado, $filtroMunicipio, $filtroProyecto, $filtroTaxon) {
            $handle = fopen($archivoCsv, 'r');
            $output = fopen('php://output', 'w');
            fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

            $headers = fgetcsv($handle);
            if (!$headers) {
                fclose($handle);
                fclose($output);
                return;
            }
            $indicesExportar = [];
            $headersExportar = [];
            if (empty($selectedColumns)) {
                $indicesExportar = array_keys($headers);
                $headersExportar = $headers;
            } else {
                foreach ($headers as $index => $colName) {
                    $colLimpia = trim($colName);
                    foreach ($selectedColumns as $sel) {
                        $selLimpia = trim(last(explode('.', $sel)));
                        if (strcasecmp($colLimpia, $selLimpia) === 0) {
                            $indicesExportar[] = $index;
                            $headersExportar[] = $colName;
                            break;
                        }
                    }
                }
            }
            fputcsv($output, !empty($headersExportar) ? $headersExportar : $headers);
            $idxEstado = false;
            $idxMunicipio = false;
            $idxProyecto = false;
            $idxTaxon = false;
            foreach ($headers as $i => $h) {
                $hLow = strtolower(trim($h));
                if ($hLow === 'estado') $idxEstado = $i;
                if ($hLow === 'municipio') $idxMunicipio = $i;
                if ($hLow === 'proyecto' || $hLow === 'proyecto_id') $idxProyecto = $i;
                if ($hLow === 'taxon_id' || $hLow === 'taxon' || $hLow === 'raza') $idxTaxon = $i;
            }
            $filas = 0;
            while (($row = fgetcsv($handle)) !== false) {
                $pasa = true;
                if ($filtroEstado !== 'Todos' && $filtroEstado !== 'todos' && $idxEstado !== false) {
                    if (!isset($row[$idxEstado]) || strcasecmp(trim($row[$idxEstado]), $filtroEstado) !== 0) {
                        $pasa = false;
                    }
                }
                if ($filtroMunicipio !== 'Todos' && $filtroMunicipio !== 'todos' && $idxMunicipio !== false) {
                    if (!isset($row[$idxMunicipio]) || strcasecmp(trim($row[$idxMunicipio]), $filtroMunicipio) !== 0) {
                        $pasa = false;
                    }
                }
                if ($filtroProyecto !== 'Todos' && $filtroProyecto !== 'todos' && $idxProyecto !== false) {
                    if (!isset($row[$idxProyecto]) || strcasecmp(trim($row[$idxProyecto]), $filtroProyecto) !== 0) {
                        $pasa = false;
                    }
                }
                if ($filtroTaxon !== 'Todos' && $filtroTaxon !== 'todos' && $idxTaxon !== false) {
                    if (!isset($row[$idxTaxon]) || strcasecmp(trim($row[$idxTaxon]), $filtroTaxon) !== 0) {
                        $pasa = false;
                    }
                }
                if ($pasa) {
                    $rowFinal = [];
                    foreach ($indicesExportar as $idx) {
                        $rowFinal[] = $row[$idx] ?? '';
                    }
                    fputcsv($output, $rowFinal);
                    $filas++;
                }
            }
            if ($filas === 0) {
                fputcsv($output, ['No se encontraron registros para esta búsqueda.']);
            }
            fclose($handle);
            fclose($output);
        }, $nombreDescarga, ['Content-Type' => 'text/csv; charset=UTF-8']);
    }
}
