<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materiales Técnicos | SIAgroBD - CONABIO</title>
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
            <h1 class="fw-bold mb-2 display-6">Materiales Técnicos</h1>
            <p class="mb-4 fs-6" style="max-width: 860px;">
                Publicaciones (carteles, presentaciones, protocolos y artículos científicos) sobre aspectos técnicos y conceptuales detrás del SIAgroBD, los datos abiertos de agrobiodiversidad, los procesos para generarlos y analizarlos, así como en torno a la agrobiodiversidad.
            </p>
            <div class="bg-white p-2 rounded-pill shadow-lg d-flex align-items-center" style="max-width: 620px;">
                <i class="bi bi-search text-muted fs-5 ps-3 pe-2"></i>
                <input type="text" id="liveSearchInput" class="form-control border-0 shadow-none ps-1"
                       placeholder="Buscar por palabra clave (ej. Figshare, Zenodo, Kobo, FAO)...">
            </div>
        </div>
        <div class="d-flex flex-wrap gap-2 mb-4 pb-2">
            <button class="filter-pill active" data-filter="all"><i class="bi bi-grid-fill"></i> Todos los materiales</button>
            <button class="filter-pill" data-filter="interactive"><i class="bi bi-play-circle-fill text-primary"></i> Visores Figshare</button>
            <button class="filter-pill" data-filter="poster"><i class="bi bi-file-earmark-pdf-fill text-warning"></i> Carteles y Zenodo</button>
            <button class="filter-pill" data-filter="guide"><i class="bi bi-book-half text-success"></i> Manuales y Kobo</button>
            <button class="filter-pill" data-filter="blog"><i class="bi bi-globe2 text-purple"></i> Blogs y Artículos</button>
        </div>
        <div class="row g-4" id="techCardsContainer">
            <div class="col-12 col-md-6 col-lg-4 tech-item" data-type="interactive">
                <div class="tech-card">
                    <div class="tech-media-box">
                        <iframe src="https://widgets.figshare.com/articles/19388774/embed?show_title=1" allowfullscreen></iframe>
                    </div>
                    <div class="tech-card-body">
                        <div>
                            <h4 class="tech-card-title">Colaboración para la gestión de datos en el SIAgroBD</h4>
                            <p class="text-muted small mb-0">Presentación en la 2a Reunión Anual de la Comunidad de Práctica de Mejora de Datos Agrícolas Globales (Research Data Alliance).</p>
                        </div>
                        <div class="tech-actions-bar">
                            <a href="https://doi.org/10.6084/m9.figshare.19388774.v1" target="_blank" class="btn-action-tech btn-action-primary">
                                <i class="bi bi-file-slides me-1"></i> Diapositivas DOI
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 tech-item" data-type="poster">
                <div class="tech-card">
                    <div class="tech-media-box">
                        <a href="https://siagro.conabio.gob.mx/materiales/cartel.pdf" target="_blank" class="w-100 h-100 d-flex align-items-center justify-content-center">
                            <img src="materiales/cartel.png" onerror="this.onerror=null; this.src='images/cartel.png';" alt="Cartel SIAgroBD">
                        </a>
                    </div>
                    <div class="tech-card-body">
                        <div>
                            <h4 class="tech-card-title">El Sistema de Información sobre Agrobiodiversidad: Datos abiertos y herramientas</h4>
                            <p class="text-muted small mb-0">Cartel presentado para el 2o Congreso Internacional de Agrobiodiversidad.</p>
                        </div>
                        <div class="tech-actions-bar">
                            <a href="https://doi.org/10.5281/zenodo.5762395" target="_blank" class="btn-action-tech btn-action-primary">
                                <i class="bi bi-box-arrow-up-right me-1"></i> Zenodo DOI
                            </a>
                            <a href="https://siagro.conabio.gob.mx/materiales/cartel.pdf" target="_blank" class="btn-action-tech btn-action-secondary">
                                <i class="bi bi-file-earmark-pdf me-1"></i> Ver PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 tech-item" data-type="interactive">
                <div class="tech-card">
                    <div class="tech-media-box">
                        <iframe src="https://widgets.figshare.com/articles/16764679/embed?show_title=1" allowfullscreen></iframe>
                    </div>
                    <div class="tech-card-body">
                        <div>
                            <h4 class="tech-card-title">Desarrollando un Sistema de Información sobre Agrobiodiversidad</h4>
                            <p class="text-muted small mb-0">Webinar para la Comunidad de Práctica de Mejora de los Datos Agrícolas Globales (RDA).</p>
                        </div>
                        <div class="tech-actions-bar">
                            <a href="https://doi.org/10.6084/m9.figshare.16764679.v1" target="_blank" class="btn-action-tech btn-action-primary">
                                <i class="bi bi-file-slides me-1"></i> Diapositivas
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 tech-item" data-type="guide">
                <div class="tech-card">
                    <div class="tech-media-box">
                        <a href="https://siagro.conabio.gob.mx/materiales/Datos_abiertos.pdf" target="_blank" class="w-100 h-100 d-flex align-items-center justify-content-center">
                            <img src="materiales/Datos_abiertos.png" onerror="this.onerror=null; this.src='images/mpBD.jpg';" alt="Datos abiertos">
                        </a>
                    </div>
                    <div class="tech-card-body">
                        <div>
                            <h4 class="tech-card-title">Materiales del Taller Datos abiertos de agrobiodiversidad</h4>
                            <p class="text-muted small mb-0">Metodologías y ejercicios para el intercambio y gobernanza de datos abiertos.</p>
                        </div>
                        <div class="tech-actions-bar">
                            <a href="https://doi.org/10.5281/zenodo.6640643" target="_blank" class="btn-action-tech btn-action-primary">
                                <i class="bi bi-box-arrow-up-right me-1"></i> Zenodo
                            </a>
                            <a href="https://siagro.conabio.gob.mx/materiales/Datos_abiertos.pdf" target="_blank" class="btn-action-tech btn-action-secondary">
                                <i class="bi bi-file-earmark-pdf me-1"></i> PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 tech-item" data-type="blog">
                <div class="tech-card">
                    <div class="tech-media-box">
                        <a href="https://aims.fao.org/news/conabio-and-siagro-capacity-development-open-agrobiodiversity-data" target="_blank" class="w-100 h-100 d-flex align-items-center justify-content-center">
                            <img src="materiales/blog.png" onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/1b4d42?text=FAO+AIMS+Blog';" alt="Blog FAO">
                        </a>
                    </div>
                    <div class="tech-card-body">
                        <div>
                            <h4 class="tech-card-title">Desarrollo de capacidades para datos abiertos en CONABIO</h4>
                            <p class="text-muted small mb-0">Publicación en el portal de Normas para la gestión de información agraria (AIMS) de la FAO.</p>
                        </div>
                        <div class="tech-actions-bar">
                            <a href="https://aims.fao.org/news/conabio-and-siagro-capacity-development-open-agrobiodiversity-data" target="_blank" class="btn-action-tech btn-action-primary">
                                <i class="bi bi-box-arrow-up-right me-1"></i> Leer en FAO AIMS
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 tech-item" data-type="guide">
                <div class="tech-card">
                    <div class="tech-media-box">
                        <a href="https://main.d2e8aknmnwkjn3.amplifyapp.com/" target="_blank" class="w-100 h-100 d-flex align-items-center justify-content-center">
                            <img src="materiales/kobo.png" onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/c25e1a?text=Kobo+Toolbox';" alt="Kobo Toolbox">
                        </a>
                    </div>
                    <div class="tech-card-body">
                        <div>
                            <h4 class="tech-card-title">Preguntas frecuentes sobre Aplicación Kobo CONABIO</h4>
                            <p class="text-muted small mb-0">Guía interactiva para la captura de datos en campo con Kobotoolbox.</p>
                        </div>
                        <div class="tech-actions-bar">
                            <a href="https://main.d2e8aknmnwkjn3.amplifyapp.com/" target="_blank" class="btn-action-tech btn-action-primary">
                                <i class="bi bi-box-arrow-up-right me-1"></i> Abrir Aplicación
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 tech-item" data-type="interactive">
                <div class="tech-card">
                    <div class="tech-media-box">
                        <iframe src="https://widgets.figshare.com/articles/21699218/embed?show_title=1"></iframe>
                    </div>
                    <div class="tech-card-body">
                        <div>
                            <h4 class="tech-card-title">Movilizar datos para la toma de decisiones</h4>
                            <p class="text-muted small mb-0">Estrategias técnicas para vincular la ciencia de datos de biodiversidad con políticas públicas.</p>
                        </div>
                        <div class="tech-actions-bar">
                            <a href="https://doi.org/10.6084/m9.figshare.21699218.v1" target="_blank" class="btn-action-tech btn-action-primary">
                                <i class="bi bi-box-arrow-up-right me-1"></i> Ver en Figshare
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 tech-item" data-type="poster">
                <div class="tech-card">
                    <div class="tech-media-box">
                        <a href="https://siagro.conabio.gob.mx/materiales/datos_abiertos.pdf" target="_blank" class="w-100 h-100 d-flex align-items-center justify-content-center">
                            <img src="materiales/datos_abiertos.png" onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/1b4d42?text=Valor+P%C3%BAblico+SIAgroBD';" alt="Valor público SIAgroBD">
                        </a>
                    </div>
                    <div class="tech-card-body">
                        <div>
                            <h4 class="tech-card-title">Demostrar a personas usuarias y fuentes de financiamiento el valor público de SIAgroBD</h4>
                            <p class="text-muted small mb-0">Análisis del impacto público y social de la agrobiodiversidad abierta.</p>
                        </div>
                        <div class="tech-actions-bar">
                            <a href="https://doi.org/10.5281/zenodo.7872817" target="_blank" class="btn-action-tech btn-action-primary">
                                <i class="bi bi-box-arrow-up-right me-1"></i> Zenodo DOI
                            </a>
                            <a href="https://siagro.conabio.gob.mx/materiales/datos_abiertos.pdf" target="_blank" class="btn-action-tech btn-action-secondary">
                                <i class="bi bi-file-earmark-pdf me-1"></i> Descargar PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 tech-item" data-type="guide">
                <div class="tech-card">
                    <div class="tech-media-box p-0 bg-white" style="height: 260px !important; display: flex !important; flex-direction: column !important; justify-content: space-between !important; align-items: stretch !important; border-bottom: 1px solid #edf1ed;">
                        <div class="flex-grow-1 d-flex flex-column justify-content-center px-2 py-1 bg-white">
                            <div class="d-flex align-items-center justify-content-between px-2 py-1 border-bottom">
                                <span class="small text-truncate me-2" style="color: #333; font-size: 0.82rem;" title="Captura sitios en Kobo.pdf">Captura sitios en K... .pdf</span>
                                <div class="d-flex gap-2">
                                    <a href="https://figshare.com/articles/online_resource/_strong_Manual_para_el_uso_de_Kobotoolbox-CONABIO_adaptado_a_los_proyectos_de_colecta_de_la_convocatoria_GEF_Agrobiodiversidad_Mexicana_strong_/22812536" target="_blank" class="text-secondary text-decoration-none" title="Ver archivo">
                                        <i class="bi bi-eye fs-6"></i>
                                    </a>
                                    <a href="https://figshare.com/articles/online_resource/_strong_Manual_para_el_uso_de_Kobotoolbox-CONABIO_adaptado_a_los_proyectos_de_colecta_de_la_convocatoria_GEF_Agrobiodiversidad_Mexicana_strong_/22812536" target="_blank" class="text-secondary text-decoration-none" title="Descargar archivo">
                                        <i class="bi bi-download fs-6"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between px-2 py-1 border-bottom">
                                <span class="small text-truncate me-2" style="color: #333; font-size: 0.82rem;" title="Formulario GEF_colectas_curso2021.pdf">Formulario GEF_co... .pdf</span>
                                <div class="d-flex gap-2">
                                    <a href="https://figshare.com/articles/online_resource/_strong_Manual_para_el_uso_de_Kobotoolbox-CONABIO_adaptado_a_los_proyectos_de_colecta_de_la_convocatoria_GEF_Agrobiodiversidad_Mexicana_strong_/22812536" target="_blank" class="text-secondary text-decoration-none" title="Ver archivo">
                                        <i class="bi bi-eye fs-6"></i>
                                    </a>
                                    <a href="https://figshare.com/articles/online_resource/_strong_Manual_para_el_uso_de_Kobotoolbox-CONABIO_adaptado_a_los_proyectos_de_colecta_de_la_convocatoria_GEF_Agrobiodiversidad_Mexicana_strong_/22812536" target="_blank" class="text-secondary text-decoration-none" title="Descargar archivo">
                                        <i class="bi bi-download fs-6"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between px-2 py-1">
                                <span class="small text-truncate me-2" style="color: #333; font-size: 0.82rem;" title="Manual kobo_11Ene21.pdf">Manual kobo_11En... .pdf</span>
                                <div class="d-flex gap-2">
                                    <a href="https://figshare.com/articles/online_resource/_strong_Manual_para_el_uso_de_Kobotoolbox-CONABIO_adaptado_a_los_proyectos_de_colecta_de_la_convocatoria_GEF_Agrobiodiversidad_Mexicana_strong_/22812536" target="_blank" class="text-secondary text-decoration-none" title="Ver archivo">
                                        <i class="bi bi-eye fs-6"></i>
                                    </a>
                                    <a href="https://figshare.com/articles/online_resource/_strong_Manual_para_el_uso_de_Kobotoolbox-CONABIO_adaptado_a_los_proyectos_de_colecta_de_la_convocatoria_GEF_Agrobiodiversidad_Mexicana_strong_/22812536" target="_blank" class="text-secondary text-decoration-none" title="Descargar archivo">
                                        <i class="bi bi-download fs-6"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between px-3 py-1 bg-light border-top w-100" style="height: 36px;">
                            <span class="d-inline-flex align-items-center gap-1 text-muted" style="font-size: 0.72rem; font-weight: 700;">
                                <i class="bi bi-pie-chart-fill text-warning"></i> figshare
                            </span>
                            <div class="d-flex gap-2 text-muted">
                                <i class="bi bi-search" style="font-size: 0.75rem;"></i>
                                <i class="bi bi-share-fill" style="font-size: 0.75rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="tech-card-body">
                        <div>
                            <h4 class="tech-card-title">Manual para el uso de Kobotoolbox-CONABIO</h4>
                            <p class="text-muted small mb-0">Adaptado a los proyectos de colecta de la convocatoria GEF Agrobiodiversidad Mexicana.</p>
                        </div>
                        <div class="tech-actions-bar">
                            <a href="https://doi.org/10.6084/m9.figshare.22812536.v1" target="_blank" class="btn-action-tech btn-action-primary">
                                <i class="bi bi-box-arrow-up-right me-1"></i> Consultar Manual en Figshare
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 tech-item" data-type="poster">
                <div class="tech-card">
                    <div class="tech-media-box">
                        <a href="https://siagro.conabio.gob.mx/materiales/Portal_SIAgro.pdf" target="_blank" class="w-100 h-100 d-flex align-items-center justify-content-center">
                            <img src="materiales/Portal_SIAgro.png" onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/c25e1a?text=Plataforma+SIAgroBD';" alt="Plataforma SIAgroBD">
                        </a>
                    </div>
                    <div class="tech-card-body">
                        <div>
                            <h4 class="tech-card-title">Conocimiento de la agrobiodiversidad y plataforma digital del SIAgroBD</h4>
                            <p class="text-muted small mb-0">Presentación oficial del funcionamiento y arquitectura de la plataforma.</p>
                        </div>
                        <div class="tech-actions-bar">
                            <a href="https://zenodo.org/record/7998471" target="_blank" class="btn-action-tech btn-action-primary">
                                <i class="bi bi-file-slides me-1"></i> Diapositivas
                            </a>
                            <a href="https://www.facebook.com/CONABIO/videos/presentaci%C3%B3n-sistema-de-informaci%C3%B3n-sobre-agrobiodiversidad/571563398420456" target="_blank" class="btn-action-tech btn-action-secondary">
                                <i class="bi bi-facebook me-1"></i> Video
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const filterPills = document.querySelectorAll('.filter-pill');
        const techItems = document.querySelectorAll('.tech-item');
        const searchInput = document.getElementById('liveSearchInput');
        filterPills.forEach(pill => {
            pill.addEventListener('click', function() {
                filterPills.forEach(p => p.classList.remove('active'));
                this.classList.add('active');
                const filter = this.getAttribute('data-filter');
                techItems.forEach(item => {
                    const type = item.getAttribute('data-type');
                    if (filter === 'all' || type === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            techItems.forEach(item => {
                const text = item.textContent.toLowerCase();
                if (text.includes(query)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
