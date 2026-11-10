<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bases de Datos | SIAgroBD - CONABIO</title>
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('images/siagro-favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body>
    <input type="hidden" id="recaptchaResponse">
    <input type="hidden" id="reg-recaptchaResponse">
    <span id="registros" style="display:none;"></span>
    <span id="registrosNutri" style="display:none;"></span>
    <x-navbar />
    <main class="container content-container py-4">
        <div class="mediateca-hero">
            <a href="{{ route('home') }}" class="btn-back">
                <i class="bi bi-arrow-left"></i> Volver al inicio
            </a>
            <h1 class="fw-bold mb-2 display-6">Bases de Datos de Agrobiodiversidad</h1>
            <p class="mb-0 fs-6" style="max-width: 860px;">
                De las principales especies de la agrobiodiversidad mexicana, la CONABIO cuenta con información de:
            </p>
        </div>
        <div class="section-separator">Especies y Diversidad de Uso</div>
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="metric-card">
                    <i class="bi bi-flower1 fs-2 text-success mb-2"></i>
                    <h2 class="metric-number" id="ejemplares">
                        <span class="spinner-border spinner-border-sm text-muted" role="status"></span>
                    </h2>
                    <p class="metric-label">
                        <a href="https://enciclovida.mx/busquedas/resultados?utf8=%E2%9C%93&nombre=&busqueda=avanzada&id=&uso%5B%5D=11-4-0-0-0-0-0&uso%5B%5D=11-16-0-0-0-0-0&uso%5B%5D=11-5-0-0-0-0-0&uso%5B%5D=11-40-1-0-0-0-0&uso%5B%5D=11-40-2-0-0-0-0&uso%5B%5D=11-8-0-0-0-0-0&uso%5B%5D=11-47-0-0-0-0-0&uso%5B%5D=11-9-0-0-0-0-0&uso%5B%5D=11-10-0-0-0-0-0&uso%5B%5D=11-11-0-0-0-0-0&uso%5B%5D=11-13-0-0-0-0-0&uso%5B%5D=11-15-0-0-0-0-0&uso%5B%5D=25-1-0-0-0-0-0&uso%5B%5D=11-14-0-0-0-0-0&por_pagina=50&commit=" target="_blank">
                            Especies de la agrobiodiversidad <i class="bi bi-box-arrow-up-right"></i>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric-card">
                    <i class="bi bi-basket2-fill fs-2 text-warning mb-2"></i>
                    <h2 class="metric-number" id="especies">
                        <span class="spinner-border spinner-border-sm text-muted" role="status"></span>
                    </h2>
                    <p class="metric-label">
                        de las cuales son <a href="https://enciclovida.mx/busquedas/resultados?utf8=%E2%9C%93&nombre=&busqueda=avanzada&id=&uso%5B%5D=11-40-2-0-0-0-0&por_pagina=50&commit=" target="_blank">usadas para la alimentación humana <i class="bi bi-box-arrow-up-right"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric-card">
                    <i class="bi bi-tree-fill fs-2 text-primary mb-2"></i>
                    <h2 class="metric-number" id="generos">
                        <span class="spinner-border spinner-border-sm text-muted" role="status"></span>
                    </h2>
                    <p class="metric-label">
                        y corresponden a <a href="https://enciclovida.mx/busquedas/resultados?utf8=%E2%9C%93&nombre=&busqueda=avanzada&id=&uso%5B%5D=25-1-0-0-0-0-0&por_pagina=50&commit=" target="_blank">parientes silvestres <i class="bi bi-box-arrow-up-right"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="section-separator">
            <span>De las cuales en el proyecto Agrobiodiversidad Mexicana se han colectado <strong id="reg" class="text-success">...</strong> nuevos registros:</span>
        </div>
        <div class="row g-4 mb-4">
            <div class="col-lg-6">
                <div class="chart-box">
                    <h5 class="chart-title">Estatus ecológico</h5>
                    <div style="height: 310px; position: relative;">
                        <canvas id="chart2"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chart-box">
                    <h5 class="chart-title">Tipo de manejo</h5>
                    <div style="height: 310px; position: relative;">
                        <canvas id="chart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-separator">También se tiene información de:</div>
        <div class="row g-3 mb-4">
            <div class="col-md-4">
                <div class="metric-card">
                    <i class="bi bi-egg-fried fs-3 text-secondary mb-1"></i>
                    <h2 class="metric-number" id="alimentos">...</h2>
                    <p class="metric-label">Alimentos asociados a canastas del bien comer</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric-card">
                    <i class="bi bi-chat-quote-fill fs-3 text-info mb-1"></i>
                    <h2 class="metric-number" id="consumidas">...</h2>
                    <p class="metric-label">Especies con datos cualitativos de producción y consumo en localidades del proyecto</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="metric-card">
                    <i class="bi bi-sun-fill fs-3 text-warning mb-1"></i>
                    <h2 class="metric-number" id="ejemplaresMaices">...</h2>
                    <p class="metric-label">Registros de maíz del Proyecto Global de Maíces Nativos</p>
                </div>
            </div>
        </div>
        <div class="access-guide-card">
            <h3 class="fw-bold mb-3 fs-5"><i class="bi bi-info-circle me-2"></i> ¿Cómo acceder y consultar los datos del SIAgroBD?</h3>
            <p class="small text-white-50 mb-3">Aquí encontrarás un resumen de cada base de datos que conforman el SIAgroBD. Para cada una de las bases, puedes obtener los datos de las siguientes maneras:</p>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="guide-step-item">
                        <div class="guide-step-title"><i class="bi bi-download text-warning"></i> 1. Descarga Directa</div>
                        <p class="guide-step-text">Descarga los datos manualmente dando clic en el botón <strong>“Descargar”</strong>. No se requiere tener un usuario para poder descargar los datos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="guide-step-item">
                        <div class="guide-step-title"><i class="bi bi-code-slash text-info"></i> 2. API GraphQL</div>
                        <p class="guide-step-text">Descarga programática mediante una <a href="https://zendro-dev.github.io/usage/graphql" target="_blank">API de GraphQL</a> dando clic en <strong>“API”</strong>. Para scripts en R o Python consulta <a href="https://zendro-dev.github.io/fromGraphQlToR.html" target="_blank">esta documentación</a>.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="guide-step-item">
                        <div class="guide-step-title"><i class="bi bi-window text-success"></i> 3. Interfaz Gráfica</div>
                        <p class="guide-step-text">Si quieres entrar a la interfaz gráfica de la base, primero <a href="https://siagro.conabio.gob.mx/#registro/" target="_blank">regístrate</a> y luego da clic en <strong>“Iniciar sesión”</strong> en la base de tu interés.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-separator">Bases de Datos que Conforman el SIAgroBD</div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="dataset-card">
                    <div>
                        <h4 class="dataset-title">Grupos de enfoque</h4>
                        <p class="dataset-desc">
                            Como parte del Proyecto Agrobiodiversidad Mexicana, se organizaron grupos de enfoque en algunas localidades de Chihuahua, Chiapas, Ciudad de México, Oaxaca y Michoacán, entre 2019 y 2021. Los grupos de enfoque son una valoración cualitativa de la agrobiodiversidad a nivel local. En especial, se recopiló la percepción de campesinos y campesinas sobre la producción, el consumo, la compra y la venta de las plantas utilizadas para la alimentación en sus comunidades.
                            <br><br>
                            A la fecha tenemos <a id="especiesge" class="fw-bold text-success text-decoration-none">...</a> especies con datos cualitativos de producción y consumo obtenidos mediante grupos de enfoque.
                        </p>

                        <div class="dataset-doc-links">
                            <span class="fw-bold text-muted d-block mb-1">Documentación:</span>
                            Para más detalles consulta <a href="https://siagro.conabio.gob.mx/focales/download/Detalles_tecnicos.pdf" target="_blank" class="me-2">esta documentación</a>. La descripción de cada campo se puede consultar en el <a href="https://siagro.conabio.gob.mx/focales/download/Diccionario_datos.pdf" target="_blank">diccionario de datos</a>.
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="text-muted small">Licencia Creative Commons Atribución 4.0 Internacional (LibreusoMX)</span>
                            <img src="https://mirrors.creativecommons.org/presskit/buttons/88x31/svg/by.svg" alt="CC-BY" style="height: 22px;">
                        </div>
                        <div class="dataset-actions">
                            <a href="https://focales-siagro.conabio.gob.mx/spa" target="_blank" class="btn-db btn-db-login">
                                <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
                            </a>
                            <a href="https://focales-siagro.conabio.gob.mx/graphql" target="_blank" class="btn-db btn-db-api">
                                <i class="bi bi-code-square"></i> API
                            </a>
                            <a href="{{ route('descargas.show', 'focales') }}" class="btn-db btn-db-download">
                                <i class="bi bi-download"></i> Descargar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dataset-card">
                    <div>
                        <h4 class="dataset-title">Proyecto Global de Maíces Nativos</h4>
                        <p class="dataset-desc">
                            El <a href="https://www.biodiversidad.gob.mx/diversidad/proyectoMaices" target="_blank" class="text-decoration-none fw-bold text-success">Proyecto Global de Maíces Nativos</a> (2006-2010) es un importante esfuerzo nacional para la actualización, sistematización e integración del conocimiento en torno a la diversidad de los maíces nativos y sus parientes silvestres en México. Los datos incluyen información biológica, geográfica, agronómica y morfológica. Este proyecto sirvió para establecer el acuerdo sobre los Centros de Origen y Diversidad Genética del Maíz.
                            <br><br>
                            A la fecha tenemos <a id="maicesbases" class="fw-bold text-success text-decoration-none">...</a> registros de maíz del Proyecto Global de Maíces Nativos.
                        </p>

                        <div class="dataset-doc-links">
                            <span class="fw-bold text-muted d-block mb-1">Documentación:</span>
                            La descripción de cada campo se puede consultar en el <a href="https://siagro.conabio.gob.mx/maices/download/Diccionario_datos.pdf" target="_blank">diccionario de datos</a>.
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="text-muted small">Licencia Creative Commons Atribución 4.0 Internacional (LibreusoMX)</span>
                            <img src="https://mirrors.creativecommons.org/presskit/buttons/88x31/svg/by.svg" alt="CC-BY" style="height: 22px;">
                        </div>
                        <div class="dataset-actions">
                            <a href="https://maices-siagro.conabio.gob.mx/spa" target="_blank" class="btn-db btn-db-login">
                                <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
                            </a>
                            <a href="https://maices-siagro.conabio.gob.mx/graphql" target="_blank" class="btn-db btn-db-api">
                                <i class="bi bi-code-square"></i> API
                            </a>
                           <a href="{{ route('descargas.show', 'maices') }}" class="btn-db btn-db-download">
                                <i class="bi bi-download"></i> Descargar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dataset-card">
                    <div>
                        <h4 class="dataset-title">Colectas GEF</h4>
                        <p class="dataset-desc">
                            Como parte del Proyecto Agrobiodiversidad Mexicana, varios equipos de investigación de diferentes instituciones hicieron trabajo de campo entre 2019 y 2022 para actualizar la información sobre doce especies clave de la agrobiodiversidad mexicana. Se colectaron datos biológicos, geográficos, agronómicos, socioeconómicos y culturales, así como fotografías.
                            <br><br>
                            A la fecha se han colectado <a id="regcol" class="fw-bold text-success text-decoration-none">...</a> nuevos registros mediante estas colectas.
                        </p>

                        <div class="dataset-doc-links">
                            <span class="fw-bold text-muted d-block mb-1">Documentación:</span>
                            Para más detalles consulta <a href="https://siagro.conabio.gob.mx/colectas_gef/download/Detalles_tecnicos.pdf" target="_blank" class="me-2">esta documentación</a>. La descripción de cada campo se puede consultar en el <a href="https://siagro.conabio.gob.mx/colectas_gef/download/Diccionario_datos.pdf" target="_blank">diccionario de datos</a>.
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="text-muted small">Licencia Creative Commons Atribución 4.0 Internacional (LibreusoMX)</span>
                            <img src="https://mirrors.creativecommons.org/presskit/buttons/88x31/svg/by.svg" alt="CC-BY" style="height: 22px;">
                        </div>
                        <div class="dataset-actions">
                            <a href="https://colectas_gef-siagro.conabio.gob.mx/spa" target="_blank" class="btn-db btn-db-login">
                                <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
                            </a>
                            <a href="https://colectas_gef-siagro.conabio.gob.mx/graphql" target="_blank" class="btn-db btn-db-api">
                                <i class="bi bi-code-square"></i> API
                            </a>
                            <a href="{{ route('descargas.show', 'colectas') }}" class="btn-db btn-db-download">
                                <i class="bi bi-download"></i> Descargar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dataset-card">
                    <div>
                        <h4 class="dataset-title">Canastas regionales del bien comer</h4>
                        <p class="dataset-desc">
                            No se come lo mismo en el sur, en el norte, en la costa, en la sierra o en el centro de México. Es por esto que en la CONABIO surgió la iniciativa de las <a href="https://www.biodiversidad.gob.mx/diversidad/alimentos/canastas-regionales" target="_blank" class="text-decoration-none fw-bold text-success">Canastas Regionales del Bien Comer</a>. Su objetivo es recopilar información sobre la diversidad de alimentos, platillos y bebidas de uso cotidiano, de temporada, festivo e incluso aquellos en riesgo de pérdida.
                            <br><br>
                            Hasta ahora tenemos información de <a id="alimentosCa" class="fw-bold text-success text-decoration-none">...</a> alimentos asociados a <a id="regiones" class="fw-bold text-success text-decoration-none">...</a> regiones.
                        </p>
                        <div class="dataset-doc-links">
                            <span class="fw-bold text-muted d-block mb-1">Documentación:</span>
                            La descripción de cada campo se puede consultar en el <a href="https://siagro.conabio.gob.mx/canastas/download/Diccionario_datos.pdf" target="_blank">diccionario de datos</a>.
                        </div>
                    </div>

                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="text-muted small">Licencia Creative Commons Atribución 4.0 Internacional (LibreusoMX)</span>
                            <img src="https://mirrors.creativecommons.org/presskit/buttons/88x31/svg/by.svg" alt="CC-BY" style="height: 22px;">
                        </div>
                        <div class="dataset-actions">
                            <a href="https://canastas-siagro.conabio.gob.mx/spa" target="_blank" class="btn-db btn-db-login">
                                <i class="bi bi-box-arrow-in-right"></i> Iniciar sesión
                            </a>
                            <a href="https://canastas-siagro.conabio.gob.mx/graphql" target="_blank" class="btn-db btn-db-api">
                                <i class="bi bi-code-square"></i> API
                            </a>
                            <a href="{{ route('descargas.show', 'canastas') }}" class="btn-db btn-db-download">
                                <i class="bi bi-download"></i> Descargar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/querys.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            try { countEjemplares(); } catch(e) { console.error("Error en countEjemplares:", e); }
            try { countEspecies(); } catch(e) { console.error("Error en countEspecies:", e); }
            try { countGeneros(); } catch(e) { console.error("Error en countGeneros:", e); }
            try { countMaices(); } catch(e) { console.error("Error en countMaices:", e); }
            try { countReg(); } catch(e) { console.error("Error en countReg:", e); }
            try { countAlimentos(); } catch(e) { console.error("Error en countAlimentos:", e); }
            try { countRegiones(); } catch(e) { console.error("Error en countRegiones:", e); }
            try { countConsumidas(); } catch(e) { console.error("Error en countConsumidas:", e); }
            try { getStatus(); } catch(e) { console.error("Error en getStatus:", e); }
            try { getManejos(); } catch(e) { console.error("Error en getManejos:", e); }
        });
    </script>
</body>
</html>
