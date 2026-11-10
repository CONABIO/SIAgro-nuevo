<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materiales de Comunicación | SIAgroBD - CONABIO</title>
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
            <a href="{{ route('home') }}" class="btn-back"><i class="bi bi-arrow-left"></i> Volver al inicio</a>
            <h1 class="fw-bold mb-2 display-6">Materiales de Comunicación</h1>
            <p class="mb-4 fs-6" style="max-width: 820px;">Esta es una recopilación de los videos, carteles, charlas y demás materiales de comunicación que la CONABIO y el Proyecto Agrobiodiversidad Mexicana han realizado en torno a la agrobiodiversidad.</p>
            <div class="bg-white p-2 rounded-pill shadow-lg d-flex align-items-center" style="max-width: 620px;">
                <i class="bi bi-search text-muted fs-5 ps-3 pe-2"></i>
                <input type="text" id="liveSearchInput" class="form-control border-0 shadow-none ps-1" placeholder="Buscar entre los más de 100 recursos (ej. calabaza, rarámuri, maíz, chile)...">
            </div>
        </div>
        <div class="d-flex flex-wrap gap-2 mb-4 pb-2">
            <button class="filter-pill active" data-filter="all"><i class="bi bi-grid-fill"></i> Todos los formatos</button>
            <button class="filter-pill" data-filter="video"><i class="bi bi-play-circle-fill text-danger"></i> Videos y TV</button>
            <button class="filter-pill" data-filter="cartel"><i class="bi bi-image text-warning"></i> Carteles</button>
            <button class="filter-pill" data-filter="libro"><i class="bi bi-book-fill text-success"></i> Libros y Guías</button>
            <button class="filter-pill" data-filter="audio"><i class="bi bi-broadcast text-info"></i> Radio y Audio</button>
            <button class="filter-pill" data-filter="web"><i class="bi bi-globe2 text-primary"></i> Sitios Web</button>
            <button class="filter-pill" data-filter="paper"><i class="bi bi-journal-text text-secondary"></i> Publicaciones Científicas</button>
        </div>
        <div class="accordion" id="accordionMateriales">
            <div class="accordion-item accordion-modern-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-button-modern" type="button" data-bs-toggle="collapse" data-bs-target="#sec1" aria-expanded="true">
                        <span>1. ¿Qué es la Agrobiodiversidad y cómo se genera?</span>
                        <span class="topic-badge">12 recursos</span>
                    </button>
                </h2>
                <div id="sec1" class="accordion-collapse collapse show">
                    <div class="accordion-body p-4 pt-1">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-play-circle-fill text-danger"></i> Videos y TV</h4>
                                    <a href="https://www.youtube.com/watch?v=RqvC4KS6F88" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-youtube"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video YouTube</span><p class="item-title-text">Agrobiodiversidad</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.facebook.com/watch/live/?ref=watch_permalink&v=257793502007627" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-facebook"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Charla en Vivo</span><p class="item-title-text">La diversidad de los cultivos como un seguro contra epidemias y cambio climático</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=isUz-gjNNUM&pp=wgIECgIIAQ%3D%3D" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Serie Naturaleza</span><p class="item-title-text">Programa 2 Naturaleza: Agrobiodiversidad: la milpa</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=4hi6KB7udYc&list=PLLAcoRHqCmNTg63DBGnqQyvOkDaTX01UC&index=5" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Serie Naturaleza</span><p class="item-title-text">Programa 4 Naturaleza: Agrobiodiversidad mexicana</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-globe2 text-primary"></i> Páginas Web y Divulgación</h4>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Portal CONABIO</span><p class="item-title-text">Diversidad natural y cultural</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/que-es/agrobiodiversidad" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-flower1"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Conceptos</span><p class="item-title-text">¿Qué es la Agrobiodiversidad?</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/evolucion-bajo-domesticacion" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-diagram-3"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Evolución</span><p class="item-title-text">La evolución bajo domesticación</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/evolucion-bajo-domesticacion/centrosPlantas" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-geo-alt"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Plantas Cultivadas</span><p class="item-title-text">Centro de plantas cultivadas</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/evolucion-bajo-domesticacion/divgenetica" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-dna"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Genética</span><p class="item-title-text">La diversidad genética y la domesticación</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/ecosistemas/procesose/polinizacion" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-bug"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Ecosistemas</span><p class="item-title-text">Polinización</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/como-se-conserva" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-shield-check"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Conservación</span><p class="item-title-text">¿Cómo se conserva la diversidad biológica y cultural?</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://estepais.com/impreso/331_noviembre_2018/la-gran-contribucion-de-los-campesinos-maiceros-a-mexico-y-al-mundo" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-newspaper"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Artículo Revista Este País</span><p class="item-title-text">La gran contribución de los campesinos maiceros a México y al mundo</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion-modern-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-button-modern collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sec2">
                        <span>2. Cocina y Agrobiodiversidad</span>
                        <span class="topic-badge">11 recursos</span>
                    </button>
                </h2>
                <div id="sec2" class="accordion-collapse collapse">
                    <div class="accordion-body p-4 pt-1">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-play-circle-fill text-danger"></i> Videos y TV</h4>
                                    <a href="https://www.youtube.com/watch?v=_s6eFoGnChw" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-btn-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Documental</span><p class="item-title-text">De la milpa a la mesa, la riqueza de la milpa</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=e57swc6apWM&list=PLLAcoRHqCmNQPUlZ044JRI_P8-rup8TWz&index=11" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-btn-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Trailer</span><p class="item-title-text">Trailer: De la milpa a la mesa, la riqueza de la milpa</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=j9BumBiSPZ0&list=PLLAcoRHqCmNQPUlZ044JRI_P8-rup8TWz&index=9" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-btn-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Sierra Tarahumara</span><p class="item-title-text">El pinole y el esquiate en la Sierra Tarahumara</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=hYSiFBNZz2I&list=PLLAcoRHqCmNQPUlZ044JRI_P8-rup8TWz&index=8" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-btn-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Tarahumara</span><p class="item-title-text">Los chacales, anticipando la escasez de maíz en la Sierra Tarahumara</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.facebook.com/CONABIO/videos/cocina-yucateca-y-agrobiodiversidad-influencias-maya-europea-libanesa-y-caribe%C3%B1a/630974241726257/" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-facebook"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Conferencia CONABIO</span><p class="item-title-text">Cocina yucateca y agrobiodiversidad: influencias maya, europea, libanesa y caribeña</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=PmxCeSPVWxo" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Serie Naturaleza</span><p class="item-title-text">Programa 8: Rescate de ingredientes mexicanos y cocina tradicional</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-book-fill text-success"></i> Libros, Recetarios y Radio</h4>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Documentos/15853.pdf" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">PDF Bioteca</span><p class="item-title-text">La milpa rarámuri en las gorditas chihuahuenses</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?find&ficha_no=16617" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-book-half"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Publicación</span><p class="item-title-text">Chiles, quelites y condimentos</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?find&ficha_no=16616" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-book-half"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Publicación</span><p class="item-title-text">La chaya, una alternativa para mejorar la alimentación familiar</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Audios/15452.mp3" target="_blank" class="resource-interactive-card" data-format="audio">
                                        <div class="item-avatar-icon avatar-audio"><i class="bi bi-soundwave"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Radio MP3</span><p class="item-title-text">Serie Agrobiodiversidad mexicana: Cápsula 3. Ahorro de leña en la cocina</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Audios/15451.mp3" target="_blank" class="resource-interactive-card" data-format="audio">
                                        <div class="item-avatar-icon avatar-audio"><i class="bi bi-soundwave"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Radio MP3</span><p class="item-title-text">Serie Agrobiodiversidad mexicana: Cápsula 4. Tortillas de maíces criollos</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion-modern-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-button-modern collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sec3">
                        <span>3. Cultivos y Alimentos de Raíces Mexicanas</span>
                        <span class="topic-badge">39 recursos</span>
                    </button>
                </h2>
                <div id="sec3" class="accordion-collapse collapse">
                    <div class="accordion-body p-4 pt-1">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-play-circle-fill text-danger"></i> Serie De Raíces Mexicanas y Documentales (20 videos)</h4>
                                    <a href="https://www.youtube.com/watch?v=LQ0Rprhec6w&list=PLLAcoRHqCmNTkUS0Oj5Gp_H2PzUE2faW4&index=1" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">De Raíces Mexicanas, tradición, sabor y cultura</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=2dVjyUupm78&list=PLLAcoRHqCmNTkUS0Oj5Gp_H2PzUE2faW4&index=8" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">De Raíces Mexicanas: Calabazas</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=s24Tz8oUbbY&list=PLLAcoRHqCmNTkUS0Oj5Gp_H2PzUE2faW4&index=2&t=2s" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">De Raíces Mexicanas: Maíces</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=0igqYEMTd5c&list=PLLAcoRHqCmNTkUS0Oj5Gp_H2PzUE2faW4&index=3&t=15s" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">De Raíces Mexicanas: Magueyes</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=hlIa5WK_txE&list=PLLAcoRHqCmNTkUS0Oj5Gp_H2PzUE2faW4&index=5" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">De Raíces Mexicanas: Chiles</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=fo05izZd9d4&list=PLLAcoRHqCmNTkUS0Oj5Gp_H2PzUE2faW4&index=6" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">De Raíces Mexicanas: Cacao</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=LmjjFe1zJEo&list=PLLAcoRHqCmNTkUS0Oj5Gp_H2PzUE2faW4&index=7" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">De Raíces Mexicanas: Frijoles</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=SQQt5epWl3g&list=PLLAcoRHqCmNTkUS0Oj5Gp_H2PzUE2faW4&index=9" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">De Raíces Mexicanas: Vainilla</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=tDx0rATLbyk&list=PLLAcoRHqCmNTkUS0Oj5Gp_H2PzUE2faW4&index=10" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">De Raíces Mexicanas: Cempasúchil</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=0BDEglDYmbY&list=PLLAcoRHqCmNTkUS0Oj5Gp_H2PzUE2faW4&index=4" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">De Raíces Mexicanas: Abejas</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=E3cZ3pwSNUM&list=PLLAcoRHqCmNQPUlZ044JRI_P8-rup8TWz&index=7" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">La calabaza y su aprovechamiento en la Sierra Tarahumara</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=ceDqLgD-jWw&list=PLLAcoRHqCmNQPUlZ044JRI_P8-rup8TWz&index=3" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Quelites en la Sierra Tarahumara</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=oXRvk8xC8Ug&list=PLLAcoRHqCmNQPUlZ044JRI_P8-rup8TWz&index=2" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Chile pasado: un manjar chihuahuense</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=BiIXSoA54Cg" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Razas de maíces de México</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=UtjvUJX6RsY" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">El tesgüino, bebida ancestral rarámuri</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.facebook.com/CONABIO/videos/visualizaci%C3%B3n-interactiva-diversidad-y-distribuci%C3%B3n-de-ma%C3%ADces/3315276715384930/" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-facebook"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Visualización</span><p class="item-title-text">Diversidad y distribución de maíces</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=ZfUnuKCF73M&list=PLLAcoRHqCmNTulVdFPZOJm5gZv8ytBbLs&index=3" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Serie Quelites</span><p class="item-title-text">Quelites en México: Capítulo 1</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=fOh6gbCl0Hs&list=PLLAcoRHqCmNTulVdFPZOJm5gZv8ytBbLs&index=2" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Serie Quelites</span><p class="item-title-text">Quelites en México: Capítulo 2</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=bSHAz39Go88&list=PLLAcoRHqCmNTulVdFPZOJm5gZv8ytBbLs&index=1" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Serie Quelites</span><p class="item-title-text">Quelites en México: Capítulo 3</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=pN1qW-0KMZA" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">TV</span><p class="item-title-text">Programa 7 Naturaleza: Apicultura e insectos comestibles</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-images text-warning"></i> Carteles, Páginas Web y Recursos (19 enlaces)</h4>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_zui.pl?fn=14176&jzd=/janium/Documentos/Cartel_Frijoles/d.jzd" target="_blank" class="resource-interactive-card" data-format="cartel">
                                        <div class="item-avatar-icon avatar-cartel"><i class="bi bi-image"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cartel</span><p class="item-title-text">Frijoles domesticados en México</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_zui.pl?jzd=/janium/Documentos/ETAPA06/AP/12733/cartel_chiles_espanol.jzd&fn=12733" target="_blank" class="resource-interactive-card" data-format="cartel">
                                        <div class="item-avatar-icon avatar-cartel"><i class="bi bi-image"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cartel</span><p class="item-title-text">Chiles de México</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_zui.pl?jzd=/janium/Documentos/ETAPA01/AP/Maices_2013/d.jzd&fn=6775" target="_blank" class="resource-interactive-card" data-format="cartel">
                                        <div class="item-avatar-icon avatar-cartel"><i class="bi bi-image"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cartel</span><p class="item-title-text">Maíces mexicanos</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_zui.pl?jzd=/janium/Documentos/ETAPA06/AP/6604/6604.jzd&fn=6604%20" target="_blank" class="resource-interactive-card" data-format="cartel">
                                        <div class="item-avatar-icon avatar-cartel"><i class="bi bi-image"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cartel</span><p class="item-title-text">México, tierra de magueyes</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?find&ficha_no=15216" target="_blank" class="resource-interactive-card" data-format="cartel">
                                        <div class="item-avatar-icon avatar-cartel"><i class="bi bi-image"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cartel</span><p class="item-title-text">Quelites de México</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_zui.pl?jzd=/janium/Documentos/ETAPA06/AP/15251/d.jzd&fn=15251" target="_blank" class="resource-interactive-card" data-format="cartel">
                                        <div class="item-avatar-icon avatar-cartel"><i class="bi bi-image"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cartel</span><p class="item-title-text">Calabazas de México</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?find&ficha_no=15096" target="_blank" class="resource-interactive-card" data-format="cartel">
                                        <div class="item-avatar-icon avatar-cartel"><i class="bi bi-calendar-event"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Calendario</span><p class="item-title-text">Quelites de México. Calendario recetario 2020</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/alimentos/calabazas" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">Calabazas, tamalayotas, pipianas, chilacayotes</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/alimentos" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">Alimentos y bebidas</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/alimentos/maices" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">Maíces</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/alimentos/magueyes" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">Magueyes</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/alimentos/nopales" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">Nopales</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/alimentos/quelites" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">Quelites</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/alimentos/maices/teocintles" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">Teocintles</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/proyectoMaices" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">Proyecto Global de Maíces Nativos</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.paismaravillas.mx/assets/pdf/descargables/LoteriaSaboresNaturaleza-cartas.pdf" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-controller"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Didáctico PDF</span><p class="item-title-text">Lotería Sabores de la naturaleza: cartas</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.paismaravillas.mx/assets/pdf/descargables/LoteriaSaboresNaturaleza-tableros.pdf" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-controller"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Didáctico PDF</span><p class="item-title-text">Lotería Sabores de la naturaleza: tableros</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Galerias/15752/index.html" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-images"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Exposición</span><p class="item-title-text">De raíces mexicanas: Agrobiodiversidad</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Galerias/15859/index.html" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-images"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Exposición</span><p class="item-title-text">Agrobiodiversidad mexicana (recopilación carteles)</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?find&ficha_no=16618" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-book-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Libro</span><p class="item-title-text">Del maíz a la tortilla: lo que sabemos desde la tierra hasta la mesa</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion-modern-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-button-modern collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sec4">
                        <span>4. Ferias y Fiestas de Agrobiodiversidad, Semillas y Saberes</span>
                        <span class="topic-badge">8 videos</span>
                    </button>
                </h2>
                <div id="sec4" class="accordion-collapse collapse">
                    <div class="accordion-body p-4 pt-1">
                        <div class="row g-2">
                            <div class="col-md-6">
                                <a href="https://www.youtube.com/watch?v=ouoq3LVSdzY" target="_blank" class="resource-interactive-card" data-format="video">
                                    <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">7a Feria Estatal de la Agrobiodiversidad, Oaxaca</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                                <a href="https://www.youtube.com/watch?v=TY6hhm7aB9Y&list=PLLAcoRHqCmNQPUlZ044JRI_P8-rup8TWz&index=16&t=0s" target="_blank" class="resource-interactive-card" data-format="video">
                                    <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Spot</span><p class="item-title-text">Spot 8va. Feria de Agrobiodiversidad 2018</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                                <a href="https://www.youtube.com/watch?v=6FSj2_FHreM&list=PLLAcoRHqCmNQPUlZ044JRI_P8-rup8TWz&index=13" target="_blank" class="resource-interactive-card" data-format="video">
                                    <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Cápsula</span><p class="item-title-text">Feria de saberes y sabores de los rarámuri</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                                <a href="https://www.youtube.com/watch?v=TewRDqvNW6Y&t=3s" target="_blank" class="resource-interactive-card" data-format="video">
                                    <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Milpa y tradición: feria rarámuri</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://www.youtube.com/watch?v=WQwmilAsNTo&list=PLLAcoRHqCmNQPUlZ044JRI_P8-rup8TWz&index=16" target="_blank" class="resource-interactive-card" data-format="video">
                                    <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Spot</span><p class="item-title-text">Spot 9ª. Feria Estatal de la Agrobiodiversidad 2019</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                                <a href="https://www.youtube.com/watch?v=oD0cOfHgz_A&list=PLLAcoRHqCmNQPUlZ044JRI_P8-rup8TWz&index=17" target="_blank" class="resource-interactive-card" data-format="video">
                                    <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">IV Reunión Nacional de Manejadores de Maguey Forestal</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                                <a href="https://youtu.be/z7TJ5v7F6Ks" target="_blank" class="resource-interactive-card" data-format="video">
                                    <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Feria de la Agrobiodiversidad Ayuujk</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                                <a href="https://youtu.be/Ohftb2kmfTI" target="_blank" class="resource-interactive-card" data-format="video">
                                    <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Testimonios</span><p class="item-title-text">Testimonios de la 9ª. Feria Estatal de Oaxaca</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion-modern-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-button-modern collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sec5">
                        <span>5. Milpa y Agroecosistemas</span>
                        <span class="topic-badge">9 recursos</span>
                    </button>
                </h2>
                <div id="sec5" class="accordion-collapse collapse">
                    <div class="accordion-body p-4 pt-1">
                        <div class="row g-3">
                            <div class="col-lg-7">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-play-circle-fill text-danger"></i> Serie Las Milpas de México (Español y Náhuatl)</h4>
                                    <a href="https://www.youtube.com/watch?v=HYwnPEtvW3s&list=PLLAcoRHqCmNSZI1-O7ychx0km-5_izcMd&index=5" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cápsula 1</span><p class="item-title-text">Agrobiodiversidad</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=jMUETfpmeyY&list=PLLAcoRHqCmNSZI1-O7ychx0km-5_izcMd&index=7" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cápsula 2</span><p class="item-title-text">Agroecosistemas tradicionales</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=wc2mBq8S7f4&list=PLLAcoRHqCmNSZI1-O7ychx0km-5_izcMd&index=12" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cápsula 3</span><p class="item-title-text">De silvestres a domesticadas</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=8iJ46ptJI44&list=PLLAcoRHqCmNSZI1-O7ychx0km-5_izcMd&index=2" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cápsula 4</span><p class="item-title-text">Las milpas de México</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=mt-1TAt8fRY&list=PLLAcoRHqCmNSZI1-O7ychx0km-5_izcMd&index=9" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cápsula 5</span><p class="item-title-text">Plantas comestibles en las milpas</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=4F5UQBkdLxM&list=PLLAcoRHqCmNSZI1-O7ychx0km-5_izcMd" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cápsula 6</span><p class="item-title-text">La milpa, un patrimonio biocultural</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-book-fill text-success"></i> Libros, Cartel y Web</h4>

                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Documentos/16015.pdf" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Libro PDF</span><p class="item-title-text">Milpa Corazón, las milpas de los guardianes</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/sistemas-productivos/milpa" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">La milpa: Sistemas Productivos</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?find&ficha_no=16448" target="_blank" class="resource-interactive-card" data-format="cartel">
                                        <div class="item-avatar-icon avatar-cartel"><i class="bi bi-image"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cartel</span><p class="item-title-text">Las milpas: patrimonio natural y cultural</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion-modern-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-button-modern collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sec6">
                        <span>6. Mujeres y Agrobiodiversidad</span>
                        <span class="topic-badge">4 recursos</span>
                    </button>
                </h2>
                <div id="sec6" class="accordion-collapse collapse">
                    <div class="accordion-body p-4 pt-1">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <a href="https://www.youtube.com/watch?v=HPMG7Q_PolQ&list=PLLAcoRHqCmNQPUlZ044JRI_P8-rup8TWz&index=6&t=407s" target="_blank" class="resource-interactive-card" data-format="video">
                                    <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Mujeres que amasan vida</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                                <a href="https://www.facebook.com/CONABIO/videos/d%C3%ADa-internacional-de-la-mujer-y-la-ni%C3%B1a-en-la-ciencia/431393655448052?locale=es_LA" target="_blank" class="resource-interactive-card" data-format="video">
                                    <div class="item-avatar-icon avatar-video"><i class="bi bi-facebook"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Día Internacional de la Mujer y la Niña en la Ciencia</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://www.biodiversidad.gob.mx/biodiversidad/curiosos/yohualxochitl#curioso-2442" target="_blank" class="resource-interactive-card" data-format="web">
                                    <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">Serie Curiosos y Comprometidos: Aportaciones de mujeres en agrobiodiversidad</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://bioteca.biodiversidad.gob.mx/janium/Documentos/15361.pdf" target="_blank" class="resource-interactive-card" data-format="libro">
                                    <div class="item-avatar-icon avatar-pdf"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Libro PDF</span><p class="item-title-text">Más allá de la milpa: relatos de mujeres que amasan la vida</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion-modern-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-button-modern collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sec7">
                        <span>7. Parientes Silvestres de Cultivos</span>
                        <span class="topic-badge">11 recursos</span>
                    </button>
                </h2>
                <div id="sec7" class="accordion-collapse collapse">
                    <div class="accordion-body p-4 pt-1">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-play-circle-fill text-danger"></i> Serie Salvaguardar los Parientes Silvestres</h4>
                                    <a href="https://www.youtube.com/watch?v=-qCD5H5f-w8&list=PLLAcoRHqCmNQfWDruN6cWpTQDXrR6Zvh_&index=2" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video 1</span><p class="item-title-text">La domesticación de los cultivos</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=JNtoua3X-Q4&list=PLLAcoRHqCmNQfWDruN6cWpTQDXrR6Zvh_&index=3" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video 2</span><p class="item-title-text">Domesticación, resistencia y diversidad genética</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=2w5z47fjqX4&list=PLLAcoRHqCmNQfWDruN6cWpTQDXrR6Zvh_&index=4" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video 3</span><p class="item-title-text">Usos y amenazas de los parientes silvestres</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=29EU4i0E7yA&list=PLLAcoRHqCmNQfWDruN6cWpTQDXrR6Zvh_&index=5" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video 4</span><p class="item-title-text">Conoce, consume, valora y protege</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=w_-cO1gpmAc&list=PLLAcoRHqCmNQfWDruN6cWpTQDXrR6Zvh_&index=2&t=0s" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Trailer</span><p class="item-title-text">Salvaguardar los parientes silvestres (Trailer)</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.facebook.com/watch/live/?ref=watch_permalink&v=1546001412593263" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-facebook"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Charla</span><p class="item-title-text">Parientes silvestres: conocimiento y conservación</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-file-earmark-text-fill text-success"></i> Publicaciones y Carteles</h4>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/evolucion-bajo-domesticacion/psilvestres-cultivosmx" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">Parientes silvestres de los cultivos</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/proyectos/psmesoamerica" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">Proyecto Salvaguardar a los parientes silvestres de Mesoamérica</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?find&ficha_no=14874" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Folleto</span><p class="item-title-text">Parientes silvestres de cultivos de Mesoamérica</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Documentos/14954.pdf" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cuadernillo PDF</span><p class="item-title-text">Salvaguardando los parientes silvestres (Síntesis ejecutiva)</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?find&ficha_no=14873" target="_blank" class="resource-interactive-card" data-format="cartel">
                                        <div class="item-avatar-icon avatar-cartel"><i class="bi bi-image"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cartel</span><p class="item-title-text">Cartel: Parientes silvestres de cultivos de Mesoamérica</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion-modern-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-button-modern collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sec8">
                        <span>8. Prácticas de Manejo y Conservación</span>
                        <span class="topic-badge">18 recursos</span>
                    </button>
                </h2>
                <div id="sec8" class="accordion-collapse collapse">
                    <div class="accordion-body p-4 pt-1">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-play-circle-fill text-danger"></i> Videos, TV y Charlas</h4>
                                    <a href="https://www.youtube.com/watch?v=OM8KY9m9apQ" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Plática</span><p class="item-title-text">Dr. Salvatore Ceccarelli: "Las semillas del futuro: manejo evolutivo y participativo"</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=-Ls2XnsZtYM" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Bancos comunitarios de semillas</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=RlSCKvZbWUY" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Selección y conservación del maíz nativo</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/playlist?list=PLLAcoRHqCmNR1AG5C59CElErXvWuOaC-7" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Serie</span><p class="item-title-text">Serie de 10 videos de las Agencias de Desarrollo Humano Local</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=2ft7q3pEFVM" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Buenas prácticas agrícolas: Santiago Tilantongo, Mixteca alta</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.facebook.com/CONABIO/videos/-encuentro-de-saberes-y-agrobiodiversidad-/937319290794339/" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-facebook"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Encuentro de saberes y agrobiodiversidad</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.facebook.com/CONABIO/videos/saberes-y-sabores-amigables-con-la-biodiversidad/930998118044587/" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-facebook"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Saberes y Sabores Amigables con la Biodiversidad</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>

                                    <a href="https://www.youtube.com/watch?v=sX9cfDVr3U4" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">TV</span><p class="item-title-text">Programa 5: Pesca sustentable</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=BVj23cNFyEw&t=19s" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">TV</span><p class="item-title-text">Programa 6: Ganadería regenerativa</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=GCCfFIwiuV4" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">TV</span><p class="item-title-text">Programa 10: Mercados alternativos</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=zfzNhTkCaBs" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">TV</span><p class="item-title-text">Programa 12: Conservación del patrimonio gastronómico</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-tools text-secondary"></i> Manuales, Libros y Radio</h4>

                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Documentos/14850.pdf" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Manual PDF</span><p class="item-title-text">Produce tus propias semillas</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?find&ficha_no=16544" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Manual</span><p class="item-title-text">Manejo integral para disminuir el salitre de tu chinampa</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?find&ficha_no=16546" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Manual</span><p class="item-title-text">Plagas en las chinampas</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Documentos/15546.pdf" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-book-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Libro PDF</span><p class="item-title-text">Conservación de la agrobiodiversidad en México</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Documentos/15438.pdf" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-book-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Libro PDF</span><p class="item-title-text">Nuestras semillas, nuestras milpas, nuestros pueblos</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>

                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?scan&lista=CapsulasMaizEspanol" target="_blank" class="resource-interactive-card" data-format="audio">
                                        <div class="item-avatar-icon avatar-audio"><i class="bi bi-soundwave"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Radio en Español</span><p class="item-title-text">Serie Mixteca oaxaqueña: Maíz de cajete, bancos y milpa</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?scan&lista=CapsulasMaizMixteco" target="_blank" class="resource-interactive-card" data-format="audio">
                                        <div class="item-avatar-icon avatar-audio"><i class="bi bi-soundwave"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Radio en Lengua Mixteca</span><p class="item-title-text">Serie Mixteca oaxaqueña: Versión en lengua originaria</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion-modern-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-button-modern collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sec9">
                        <span>9. Proyecto Agrobiodiversidad Mexicana</span>
                        <span class="topic-badge">3 recursos</span>
                    </button>
                </h2>
                <div id="sec9" class="accordion-collapse collapse">
                    <div class="accordion-body p-4 pt-1">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <a href="https://www.youtube.com/watch?v=BF6C42PH2Ck&list=PLLAcoRHqCmNQPUlZ044JRI_P8-rup8TWz&index=2&t=0s" target="_blank" class="resource-interactive-card" data-format="video">
                                    <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Video Institucional</span><p class="item-title-text">Proyecto Agrobiodiversidad Mexicana</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://www.biodiversidad.gob.mx/media/1/usos/agrobiodiversidad/Folleto_Agromx_v3.pdf" target="_blank" class="resource-interactive-card" data-format="libro">
                                    <div class="item-avatar-icon avatar-pdf"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Folleto PDF</span><p class="item-title-text">Folleto Proyecto Agrobiodiversidad Mexicana</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="https://www.biodiversidad.gob.mx/diversidad/proyectos/agrobiodiversidadmx" target="_blank" class="resource-interactive-card" data-format="web">
                                    <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                    <div class="item-text-info"><span class="item-meta-subtitle">Sitio Web</span><p class="item-title-text">Portal Oficial del Proyecto Agrobiodiversidad</p></div>
                                    <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion-modern-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-button-modern collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sec10">
                        <span>10. Salud y Agrobiodiversidad</span>
                        <span class="topic-badge">16 recursos</span>
                    </button>
                </h2>
                <div id="sec10" class="accordion-collapse collapse">
                    <div class="accordion-body p-4 pt-1">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-tv text-warning"></i> Videos y TV</h4>
                                    <a href="https://www.youtube.com/watch?v=wFBBKaq3rOw" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Biodiversidad y alimentación</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=Hhteef-4Kwk" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-video"><i class="bi bi-play-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Video</span><p class="item-title-text">Nixtamalización: aumentar el valor nutrimental del maíz</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=U0DFEignhuo" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">TV</span><p class="item-title-text">Programa 1: Naturaleza, alimentación y salud</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=lCJyB43Woqw&pp=wgIECgIIAQ%3D%3D" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">TV</span><p class="item-title-text">Programa 3: Plantas valiosas de la agrobiodiversidad</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=DkjVqW-ajE4&t=2s" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">TV</span><p class="item-title-text">Programa 9: Alimentación y salud: elección del consumidor</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=lWxnkqal9is" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">TV</span><p class="item-title-text">Programa 11: Alimentos y contaminación</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=FZ8QIo5nChE" target="_blank" class="resource-interactive-card" data-format="video">
                                        <div class="item-avatar-icon avatar-tv"><i class="bi bi-tv"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">TV</span><p class="item-title-text">Programa 13: Producción y consumo de agrobiodiversidad</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-heart-pulse-fill text-danger"></i> Radio, Libros, Cartel y Campañas</h4>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Audios/15454.mp3" target="_blank" class="resource-interactive-card" data-format="audio">
                                        <div class="item-avatar-icon avatar-audio"><i class="bi bi-soundwave"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Audio</span><p class="item-title-text">Cápsula 1. Plato del bien comer</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Audios/15453.mp3" target="_blank" class="resource-interactive-card" data-format="audio">
                                        <div class="item-avatar-icon avatar-audio"><i class="bi bi-soundwave"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Audio</span><p class="item-title-text">Cápsula 2. Evita harinas refinadas</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium/Documentos/15371.pdf" target="_blank" class="resource-interactive-card" data-format="libro">
                                        <div class="item-avatar-icon avatar-pdf"><i class="bi bi-file-earmark-pdf-fill"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Guía PDF</span><p class="item-title-text">Guía: Sobreviviendo a la COVID-19: el remedio olvidado</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://bioteca.biodiversidad.gob.mx/janium-bin/janium_login_opac.pl?find&ficha_no=16548" target="_blank" class="resource-interactive-card" data-format="cartel">
                                        <div class="item-avatar-icon avatar-cartel"><i class="bi bi-image"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Cartel</span><p class="item-title-text">Cartel: La dieta de la milpa</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/alimentos/canastas-regionales" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">Canastas regionales del bien comer</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/diversidad/alimentos/que-nos-aportan" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-globe"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Web</span><p class="item-title-text">¿Qué nos aportan los alimentos?</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.entreazulyverde.mx/" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-brush"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Concurso</span><p class="item-title-text">Entre azul y verde somos lo que comemos</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.facebook.com/media/set/?set=a.10158661369429120&type=3" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-facebook"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Campaña Redes</span><p class="item-title-text">Campaña #SabrososSanosSustentables</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.biodiversidad.gob.mx/SDB/" target="_blank" class="resource-interactive-card" data-format="web">
                                        <div class="item-avatar-icon avatar-web"><i class="bi bi-calendar3"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Evento</span><p class="item-title-text">9° Semana de la Diversidad Biológica: “Nuestra alimentación, nuestra salud”</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item accordion-modern-item">
                <h2 class="accordion-header">
                    <button class="accordion-button accordion-button-modern collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sec11">
                        <span>11. Publicaciones Científicas del Proyecto</span>
                        <span class="topic-badge">17 papers y libros</span>
                    </button>
                </h2>
                <div id="sec11" class="accordion-collapse collapse">
                    <div class="accordion-body p-4 pt-1">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-book-half text-primary"></i> Libros y Capítulos</h4>
                                    <a href="https://www.routledge.com/True-Cost-Accounting-for-Food-Balancing-the-Scale/Gemmill-Herren-Baker-Daniels/p/book/9780367506858" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-journal-bookmark"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Routledge Book</span><p class="item-title-text">Transforming the Maize Treadmill: Understanding Social, Economic & Ecological Impacts</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://isbnmexico.indautor.cerlalc.org/catalogo.php?mode=detalle&nt=375157" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-journal-bookmark"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Libro Indautor</span><p class="item-title-text">Sistemas socio-ecológicos: una perspectiva histórica</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="materiales/Indice_subjetivo_de_valor_de_uso_local_de_plantas_alimentarias.pdf" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-pdf"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Reporte de Investigación PDF</span><p class="item-title-text">Índice Subjetivo de Valor de Uso Local de Plantas Alimentarias</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="media-group-box">
                                    <h4 class="media-group-title"><i class="bi bi-journal-check text-secondary"></i> Artículos Científicos Indexados (14 papers)</h4>
                                    <a href="https://www.frontiersin.org/articles/10.3389/fpls.2018.00209/full" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Frontiers in Plant Science</span><p class="item-title-text">An Initiative for the Study and Use of Genetic Diversity of Domesticated Plants</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://royalsocietypublishing.org/doi/10.1098/rspb.2018.1049" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Royal Society Publishing</span><p class="item-title-text">Evolutionary and food supply implications of ongoing maize domestication</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://revistaetnobiologia.mx/index.php/etno/article/view/377" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Revista Etnobiología</span><p class="item-title-text">Sistemas de manejo de maguey pulquero en México</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.revistafitotecniamexicana.org/42-4.html" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Revista Fitotecnia Mexicana</span><p class="item-title-text">Programa de conservación y uso de diversidad genética en México</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://doi.org/10.3389/fpls.2020.01224" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Frontiers in Plant Science</span><p class="item-title-text">Integral Projection Model & Forest Management of Agave inaequidens</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://pubs.rsc.org/en/content/articlelanding/2020/fo/d0fo02258f#!divAbstract" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Food & Function</span><p class="item-title-text">Black bean protein concentrate ameliorates hepatic steatosis in rats</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://link.springer.com/article/10.1007/s12571-020-01134-8" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Food Security</span><p class="item-title-text">Beyond subsistence: aggregate contribution of campesinos to native maize</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://nph.onlinelibrary.wiley.com/doi/full/10.1002/ppp3.10225" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Plants, People, Planet</span><p class="item-title-text">Extinction risk of Mesoamerican crop wild relatives</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.frontiersin.org/articles/10.3389/fpls.2021.714763/full" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Frontiers in Plant Science</span><p class="item-title-text">The Taming of Psidium guajava: Natural and Cultural History of a Neotropical fruit</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://doi.org/10.1038/s41467-022-33703-0" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Nature Communications</span><p class="item-title-text">Incorporating evolutionary and threat processes into crop wild relatives conservation</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://doi.org/10.3390/foods10102390" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Foods</span><p class="item-title-text">Traditional Fermented Beverages of Mexico: A Biocultural Unseen Foodscape</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://doi.org/10.3389/fenvs.2021.682207" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Frontiers in Env Science</span><p class="item-title-text">Peasants' Motivations to Maintain Vegetation in Cuicatlán, Oaxaca</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://doi.org/10.1186/s42779-022-00155-2" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Journal of Ethnobiology</span><p class="item-title-text">Pulque and Pulquerías of México City: Biocultural conservation</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                    <a href="https://www.frontiersin.org/articles/10.3389/fgene.2023.1080176/full" target="_blank" class="resource-interactive-card" data-format="paper">
                                        <div class="item-avatar-icon avatar-paper"><i class="bi bi-file-earmark-text"></i></div>
                                        <div class="item-text-info"><span class="item-meta-subtitle">Frontiers in Genetics</span><p class="item-title-text">Taxonomic revision of Physalis in Mexico</p></div>
                                        <i class="bi bi-arrow-up-right-circle-fill item-arrow-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const filterPills = document.querySelectorAll('.filter-pill');
        const cards = document.querySelectorAll('.resource-interactive-card');
        const searchInput = document.getElementById('liveSearchInput');
        filterPills.forEach(pill => {
            pill.addEventListener('click', function() {
                filterPills.forEach(p => p.classList.remove('active'));
                this.classList.add('active');
                const filter = this.getAttribute('data-filter');
                cards.forEach(card => {
                    const format = card.getAttribute('data-format');
                    if (filter === 'all' || format === filter) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
                if (filter !== 'all') {
                    document.querySelectorAll('.accordion-collapse').forEach(acc => {
                        new bootstrap.Collapse(acc, { show: true });
                    });
                }
            });
        });
        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            if (query.length > 0) {
                document.querySelectorAll('.accordion-collapse').forEach(acc => {
                    new bootstrap.Collapse(acc, { show: true });
                });
            }
            cards.forEach(card => {
                const text = card.textContent.toLowerCase();
                if (text.includes(query)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>


