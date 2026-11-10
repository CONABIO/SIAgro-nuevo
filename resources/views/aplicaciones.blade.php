<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplicaciones de Análisis y Visualización | SIAgroBD - CONABIO</title>
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('images/siagro-favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body>
   <x-navbar />
    <main class="container content-container py-4">
        <div class="mediateca-hero">
            <a href="{{ route('home') }}" class="btn-back">
                <i class="bi bi-arrow-left"></i> Volver al inicio
            </a>
            <h1 class="fw-bold mb-2 display-6">Aplicaciones de Análisis y Visualización</h1>
            <p class="mb-0 fs-6" style="max-width: 880px;">
                Las siguientes aplicaciones web incluyen visualizaciones dinámicas de datos, mapas interactivos y otras herramientas para analizar y explorar datos de agrobiodiversidad.
            </p>
        </div>
        <div class="section-separator">Visualizadores Geoespaciales y Exploradores de Datos</div>
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://siagro.conabio.gob.mx/apps/RG_projects" target="_blank" class="app-card" onclick="addReg('shiny-colectas');">
                    <div class="app-preview-box">
                        <img src="images/mapa.png"
                             onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/1b4d42?text=Mapa+Colectas';"
                             alt="Mapa interactivo de colectas">
                    </div>
                    <div class="app-content">
                        <div>
                            <h3 class="app-title">Proyectos de colecta del Proyecto Agrobiodiversidad</h3>
                            <p class="app-desc">
                                Mapa y tabla dinámica para explorar la distribución de los puntos de colecta y especies de los proyectos de investigación financiados por el Proyecto Agrobiodiversidad Mexicana.
                            </p>
                        </div>
                        <div class="app-action-footer">
                            <span>Abrir mapa interactivo</span>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://siagro.conabio.gob.mx/apps/maices" target="_blank" class="app-card" onclick="return addReg('shiny-maices');">
                    <div class="app-preview-box">
                        <img src="images/maicesApp.png"
                             onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/c25e1a?text=Explorador+Ma%C3%ADces';"
                             alt="Explorador de datos de maíces">
                    </div>
                    <div class="app-content">
                        <div>
                            <h3 class="app-title">Resultados del Proyecto Global de Maíces Nativos</h3>
                            <p class="app-desc">
                                Visualización interactiva de los datos del Proyecto Global de Maíces Nativos, incluyendo distribución espacial y descripción de cada una de las 64 razas de maíz de México.
                            </p>
                        </div>
                        <div class="app-action-footer">
                            <span>Abrir explorador de maíces</span>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://siagro.conabio.gob.mx/apps/phaseolus" target="_blank" class="app-card" onclick="return addReg('shiny-frijoles');">
                    <div class="app-preview-box">
                        <img src="images/frijoles.png"
                             onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/2e7d32?text=Frijoles+Phaseolus';"
                             alt="Los frijoles de México">
                    </div>
                    <div class="app-content">
                        <div>
                            <h3 class="app-title">Los frijoles de México</h3>
                            <p class="app-desc">
                                Visualización interactiva de los datos del proyecto sobre el género <em>Phaseolus</em> para México, con mapas de registros, altitud, épocas de floración y distribución por estado.
                            </p>
                        </div>
                        <div class="app-action-footer">
                            <span>Explorar datos de frijoles</span>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://siagro.conabio.gob.mx/apps/app-siagro/" target="_blank" class="app-card" onclick="return addReg('app-siagro');">
                    <div class="app-preview-box">
                        <img src="images/app.png"
                             onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/7e22ce?text=App+Clima+y+Agro';"
                             alt="App climática">
                    </div>
                    <div class="app-content">
                        <div>
                            <h3 class="app-title">Condiciones climáticas y agrobiodiversidad</h3>
                            <p class="app-desc">
                                Aplicación web optimizada para teléfonos celulares que permite explorar las condiciones bioclimáticas donde se distribuyen las especies de la agrobiodiversidad mexicana.
                            </p>
                        </div>
                        <div class="app-action-footer">
                            <span>Lanzar aplicación móvil</span>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://siagro.conabio.gob.mx/apps/conanp" target="_blank" class="app-card" onclick="return addReg('maices-PROMAC');">
                    <div class="app-preview-box">
                        <img src="images/maiz_promac.png"
                             onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/c2410c?text=Ma%C3%ADces+PROMAC';"
                             alt="Maíces PROMAC">
                    </div>
                    <div class="app-content">
                        <div>
                            <h3 class="app-title">Razas de maíz incluidas en el PROMAC</h3>
                            <p class="app-desc">La visualización Shiny del PROMAC muestra más de dos mil registros de razas de maíz en todas las Áreas Naturales Protegidas (ANP) dónde se involucraron a agricultores que viven dentro de dichas áreas.</p>
                        </div>
                        <div class="app-action-footer">
                            <span>Ver visualización PROMAC</span>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        function addReg(title) {
            try {
                var json_ip = {};
                $.ajax({
                    url: "https://json.geoiplookup.io/?callback=?",
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        json_ip = data;
                        $.post('php/aplicaciones.php', {
                            title: title,
                            ip: json_ip.ip
                        });
                    }
                });
            } catch (err) {
                $.post('php/aplicaciones.php', {
                    title: title
                });
            }
            return true;
        }
    </script>
</body>
</html>
