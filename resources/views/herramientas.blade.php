<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Herramientas Computacionales | SIAgroBD - CONABIO</title>
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
            <h1 class="fw-bold mb-2 display-6">Herramientas Computacionales</h1>
            <p class="mb-0 fs-6" style="max-width: 900px; line-height: 1.65;">
                Las herramientas computacionales son el software que hace funcionar el SIAgroBD. Estas herramientas permiten hacer más eficiente, reproducible y transparente el proceso de colectar, capturar, revisar, integrar y publicar los datos relacionados con la agrobiodiversidad. Para saber más de cómo utilizamos estas herramientas en el SIAgroBD consulta la pestaña <a href="{{ route('acerca') }}" class="hero-link">Acerca de</a>.
            </p>
        </div>
        <div class="section-separator">Ecosistema de Software y Tecnologías Abiertas</div>
        <div class="row g-4 mb-5">
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://kobo.conabio.gob.mx/accounts/login/?next=%2F%23%2Fforms#/" target="_blank" class="tool-card">
                    <div class="tool-preview-box">
                        <img src="images/herr_kobo.png"
                             onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/15803d?text=KoboToolbox+CONABIO';"
                             alt="KoboToolbox CONABIO">
                    </div>
                    <div class="tool-body">
                        <div>
                            <h3 class="tool-title">KoboToolbox</h3>
                            <p class="tool-desc">
                                Plataforma de software libre para recopilar datos en campo mediante formularios estandarizados en versión web o dispositivos móviles, con o sin conexión a Internet. Desarrollado por Harvard Humanitarian Initiative e instalado en servidores propios de CONABIO para total soberanía de los datos.
                            </p>
                        </div>
                        <div class="tool-action-footer">
                            <span>Ingresar a Kobo CONABIO</span>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://zendro-dev.github.io/" target="_blank" class="tool-card">
                    <div class="tool-preview-box">
                        <img src="images/herr_zendro.png"
                             onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/1e40af?text=Zendro+GraphQL';"
                             alt="Zendro Data Modeling">
                    </div>
                    <div class="tool-body">
                        <div>
                            <h3 class="tool-title">Zendro</h3>
                            <p class="tool-desc">
                                Herramienta para almacenar datos en bases conectadas, con API de GraphQL e interfaz gráfica generadas automáticamente a partir de modelos de datos. Desarrollado por la Coordinación de Agrobiodiversidad de CONABIO en colaboración con el <em>Forschungszentrum Jülich</em> de Alemania.
                            </p>
                        </div>
                        <div class="tool-action-footer">
                            <span>Ver documentación en GitHub</span>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="tool-card">
                    <div class="tool-preview-box">
                        <div class="d-flex align-items-center justify-content-center gap-3">
                            <span class="badge bg-white text-dark shadow-sm p-3 rounded-circle border fs-2">
                                <i class="bi bi-terminal-fill text-primary"></i>
                            </span>
                            <span class="badge bg-white text-dark shadow-sm p-3 rounded-circle border fs-2">
                                <i class="bi bi-code-slash text-success"></i>
                            </span>
                        </div>
                    </div>
                    <div class="tool-body">
                        <div>
                            <h3 class="tool-title">Otras Tecnologías</h3>
                            <div class="subtool-box">
                                <div class="subtool-title">
                                    <a href="https://ecoinformatica.atlassian.net/wiki/spaces/CONADATA/pages/707264524/Descripci+n+de+dise+o+de+servicios+GraphQL" target="_blank">
                                        Zacatuche (GraphQL SNIB)
                                    </a>
                                    <i class="bi bi-box-arrow-up-right small text-muted"></i>
                                </div>
                                <p class="subtool-desc">
                                    Servicio de GraphQL interno de CONABIO que comunica Zendro con el SNIB. Desarrollado por la Dirección de Ciencia de Datos sobre Biodiversidad.
                                </p>
                            </div>
                            <div class="subtool-box mb-0">
                                <div class="subtool-title">
                                    <span>R & Python</span>
                                    <span class="small text-muted">Ciencia de Datos</span>
                                </div>
                                <p class="subtool-desc">
                                    Lenguajes de programación de código abierto utilizados para procesamiento de datos, análisis geoespacial y visualizaciones dinámicas (<a href="https://www.r-project.org/" target="_blank" class="fw-bold text-success text-decoration-none">R-Project</a> y <a href="https://www.python.org/" target="_blank" class="fw-bold text-success text-decoration-none">Python</a>).
                                </p>
                            </div>
                        </div>
                        <div class="tool-action-footer mt-3">
                            <span>Tecnologías de Ciencia de Datos</span>
                            <i class="bi bi-check2-circle text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
