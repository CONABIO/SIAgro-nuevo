<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Especies de la Agrobiodiversidad | SIAgroBD - CONABIO</title>
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
            <h1 class="fw-bold mb-2 display-6">Especies de la Agrobiodiversidad</h1>
            <p class="mb-0 fs-6" style="max-width: 860px;">
                Conoce la diversidad biológica domesticada, semidomesticada y silvestre de México, sus componentes funcionales y cómo explorarla a través de plataformas de ciencia ciudadana e información taxonómica.
            </p>
        </div>
        <div class="section-separator">A nivel de especies, la agrobiodiversidad incluye:</div>
        <div class="row g-4 mb-5">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="concept-card">
                    <div class="concept-header">
                        <div class="concept-icon" style="background-color: #fee2e2; color: #dc2626;">
                            <i class="bi bi-basket2-fill"></i>
                        </div>
                        <h3 class="concept-title">Alimentación Humana</h3>
                    </div>
                    <p class="concept-text">
                        Plantas, animales, hongos y microorganismos recolectados, cultivados y <a href="https://www.biodiversidad.gob.mx/diversidad/evolucion-bajo-domesticacion" target="_blank">domesticados</a> para la <a href="https://www.biodiversidad.gob.mx/diversidad/alimentos" target="_blank">alimentación</a> tradicional y contemporánea.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="concept-card">
                    <div class="concept-header">
                        <div class="concept-icon" style="background-color: #fef3c7; color: #d97706;">
                            <i class="bi bi-tree-fill"></i>
                        </div>
                        <h3 class="concept-title">Parientes Silvestres</h3>
                    </div>
                    <p class="concept-text">
                        Los <a href="https://www.biodiversidad.gob.mx/diversidad/evolucion-bajo-domesticacion/psilvestres-cultivosmx" target="_blank">parientes silvestres de los cultivos</a> son especies genéticamente cercanas a las domesticadas, incluyendo poblaciones ancestrales y reservorios genéticos.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="concept-card">
                    <div class="concept-header">
                        <div class="concept-icon" style="background-color: #dbeafe; color: #2563eb;">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <h3 class="concept-title">Agroecosistemas</h3>
                    </div>
                    <p class="concept-text">
                        Especies asociadas a la producción: microorganismos del suelo, fauna benéfica, depredadores naturales y animales <a href="https://www.biodiversidad.gob.mx/ecosistemas/procesose/polinizacion" target="_blank">polinizadores</a>.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="concept-card">
                    <div class="concept-header">
                        <div class="concept-icon" style="background-color: #f3e8ff; color: #7e22ce;">
                            <i class="bi bi-capsule"></i>
                        </div>
                        <h3 class="concept-title">Otros Usos Bioculturales</h3>
                    </div>
                    <p class="concept-text">
                        Especies con aplicaciones no necesariamente alimenticias: uso medicinal tradicional, forraje para consumo animal, fibras, tinturas o aprovechamiento forestal maderable y no maderable.
                    </p>
                </div>
            </div>
        </div>
        <div class="section-separator">¡Explora las especies en Enciclovida y Naturalista!</div>
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://enciclovida.mx/busquedas/resultados?utf8=%E2%9C%93&nombre=&busqueda=avanzada&id=&uso%5B%5D=11-4-0-0-0-0-0&uso%5B%5D=11-16-0-0-0-0-0&uso%5B%5D=11-5-0-0-0-0-0&uso%5B%5D=11-40-1-0-0-0-0&uso%5B%5D=11-40-2-0-0-0-0&uso%5B%5D=11-8-0-0-0-0-0&uso%5B%5D=11-47-0-0-0-0-0&uso%5B%5D=11-9-0-0-0-0-0&uso%5B%5D=11-10-0-0-0-0-0&uso%5B%5D=11-11-0-0-0-0-0&uso%5B%5D=11-13-0-0-0-0-0&uso%5B%5D=11-15-0-0-0-0-0&uso%5B%5D=25-1-0-0-0-0-0&uso%5B%5D=11-14-0-0-0-0-0&por_pagina=50&commit=" target="_blank" class="portal-card">
                    <div class="portal-img-box">
                        <img src="images/usosagrobd.png"
                             onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/2e7d32?text=Especies+Agrobiodiversidad';"
                             alt="Especies de agrobiodiversidad">
                    </div>
                    <div class="portal-content">
                        <div>
                            <h4 class="portal-title">Explora las especies de la agrobiodiversidad y otros usos</h4>
                        </div>
                        <div class="portal-action-footer">
                            <span>Consultar en Enciclovida</span>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://enciclovida.mx/busquedas/resultados?utf8=%E2%9C%93&nombre=&busqueda=avanzada&id=&uso%5B%5D=11-40-2-0-0-0-0&por_pagina=50&commit=" target="_blank" class="portal-card">
                    <div class="portal-img-box">
                        <img src="images/enciclo.png"
                             onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/1b4d42?text=Alimentaci%C3%B3n+Humana';"
                             alt="Alimentación humana">
                    </div>
                    <div class="portal-content">
                        <div>
                            <h4 class="portal-title">Especies utilizadas para la alimentación humana</h4>
                        </div>
                        <div class="portal-action-footer">
                            <span>Ver en Enciclovida</span>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://enciclovida.mx/busquedas/resultados?utf8=%E2%9C%93&nombre=&busqueda=avanzada&id=&uso%5B%5D=25-1-0-0-0-0-0&por_pagina=50&commit=" target="_blank" class="portal-card">
                    <div class="portal-img-box">
                        <img src="images/parientesenciclo.png"
                             onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/c25e1a?text=Parientes+Silvestres';"
                             alt="Parientes silvestres">
                    </div>
                    <div class="portal-content">
                        <div>
                            <h4 class="portal-title">Parientes silvestres de las plantas domesticadas</h4>
                        </div>
                        <div class="portal-action-footer">
                            <span>Ver en Enciclovida</span>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://www.naturalista.mx/projects/plantas-domesticadas-en-mexico-y-sus-parientes-silvestres" target="_blank" class="portal-card">
                    <div class="portal-img-box">
                        <img src="images/natura.png"
                             onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/d97706?text=Proyecto+Naturalista';"
                             alt="Naturalista proyecto">
                    </div>
                    <div class="portal-content">
                        <div>
                            <h4 class="portal-title">Plantas domesticadas en México y sus parientes silvestres</h4>
                        </div>
                        <div class="portal-action-footer">
                            <span>Ver proyecto en Naturalista</span>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a href="https://www.naturalista.mx/projects/poliniza-insectos-aves-y-mamiferos-mexico" target="_blank" class="portal-card">
                    <div class="portal-img-box">
                        <img src="images/poliniza.png"
                             onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/7e22ce?text=Proyecto+POLINIZA';"
                             alt="POLINIZA">
                    </div>
                    <div class="portal-content">
                        <div>
                            <h4 class="portal-title">POLINIZA: insectos, aves y mamíferos polinizadores de México</h4>
                        </div>
                        <div class="portal-action-footer">
                            <span>Ver proyecto en Naturalista</span>
                            <i class="bi bi-box-arrow-up-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
