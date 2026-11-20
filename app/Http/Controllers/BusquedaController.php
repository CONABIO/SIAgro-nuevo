<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BusquedaController extends Controller
{
    private $paginas = [
        [
            'title'    => 'Materiales de Comunicación',
            'category' => 'Materiales',
            'badge'    => 'badge-cat-cartel',
            'route'    => 'materiales',
            'view'     => 'materiales.blade.php',
        ],
        [
            'title'    => 'Materiales Técnicos',
            'category' => 'Técnico',
            'badge'    => 'badge-cat-doc',
            'route'    => 'materiales.tecnicos',
            'view'     => 'materiales_tecnicos.blade.php',
        ],
        [
            'title'    => 'Bases de Datos',
            'category' => 'Bases de Datos',
            'badge'    => 'badge-cat-bd',
            'route'    => 'bases.datos',
            'view'     => 'bases_de_datos.blade.php',
        ],
        [
            'title'    => 'Especies de la Agrobiodiversidad',
            'category' => 'Especies',
            'badge'    => 'badge-cat-especie',
            'route'    => 'especies',
            'view'     => 'especies.blade.php',
        ],
        [
            'title'    => 'Aplicaciones y Mapas',
            'category' => 'Aplicación',
            'badge'    => 'badge-cat-app',
            'route'    => 'aplicaciones',
            'view'     => 'aplicaciones.blade.php',
        ],
        [
            'title'    => 'Acerca del SIAgroBD',
            'category' => 'Sección',
            'badge'    => 'badge-cat-section',
            'route'    => 'acerca',
            'view'     => 'acerca_de.blade.php',
        ],
        [
            'title'    => 'Forma de Citar y Referencias',
            'category' => 'Sección',
            'badge'    => 'badge-cat-section',
            'route'    => 'forma_citar',
            'view'     => 'contacto.blade.php',
        ],
        [
            'title'    => 'Herramientas y API',
            'category' => 'Herramienta',
            'badge'    => 'badge-cat-tool',
            'route'    => 'herramientas',
            'view'     => 'herramientas.blade.php',
        ],
    ];

    public function buscar(Request $request)
    {
        $query = trim($request->get('q', ''));
        if (strlen($query) < 2) {
            return response()->json([]);
        }
        $resultados = [];
        $viewsPath = resource_path('views');
        foreach ($this->paginas as $pag) {
            $archivo = $viewsPath . '/' . $pag['view'];
            if (!File::exists($archivo)) {
                continue;
            }
            $contenido = File::get($archivo);
            $contenidoLimpio = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $contenido);
            $contenidoLimpio = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $contenidoLimpio);
            $contenidoLimpio = preg_replace('/<\?php.*?\?>/s', '', $contenidoLimpio);
            $contenidoLimpio = preg_replace('/\{\{.*?\}\}/s', '', $contenidoLimpio);
            $textoPlano = strip_tags($contenidoLimpio);
            $textoPlano = preg_replace('/\s+/', ' ', $textoPlano);
            $textoNorm = $this->quitarAcentos(mb_strtolower($textoPlano));
            $queryNorm = $this->quitarAcentos(mb_strtolower($query));
            $pos = mb_strpos($textoNorm, $queryNorm);
            if ($pos !== false || mb_strpos($this->quitarAcentos(mb_strtolower($pag['title'])), $queryNorm) !== false) {
                $inicio = max(0, $pos - 60);
                $fragmento = mb_substr($textoPlano, $inicio, 140);
                $resultados[] = [
                    'title'    => $pag['title'],
                    'desc'     => '...' . trim($fragmento) . '...',
                    'category' => $pag['category'],
                    'badge'    => $pag['badge'],
                    'url'      => route($pag['route']),
                ];
            }
        }
        return response()->json($resultados);
    }

    private function quitarAcentos($cadena)
    {
        $originales = ['á','é','í','ó','ú','Á','É','Í','Ó','Ú','ñ','Ñ','ü','Ü'];
        $modificados = ['a','e','i','o','u','a','e','i','o','u','n','n','u','u'];
        return str_replace($originales, $modificados, $cadena);
    }
}
