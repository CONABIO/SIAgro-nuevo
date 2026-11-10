<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAgroBD | CONABIO</title>
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('images/siagro-favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">

    <style>
        .search-hero-container {
            position: relative;
            max-width: 660px;
            margin: 22px 0 10px 0;
        }

        .search-box-modern {
            position: relative;
            background: #ffffff;
            border: 1.5px solid #d1d5db;
            border-radius: 14px;
            padding: 6px 8px 6px 16px;
            display: flex;
            align-items: center;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
            transition: all 0.25s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .search-box-modern:focus-within {
            border-color: #77140A;
            box-shadow: 0 8px 24px rgba(119, 20, 10, 0.12), 0 0 0 3px rgba(119, 20, 10, 0.08);
            transform: translateY(-1px);
        }

        .search-input-field {
            border: none;
            outline: none;
            box-shadow: none;
            width: 100%;
            font-size: 0.98rem;
            color: #1f2937;
            background: transparent;
            font-weight: 500;
            padding: 8px 6px;
        }

        .search-input-field::placeholder {
            color: #9ca3af;
            font-weight: 400;
            font-size: 0.92rem;
        }

        .btn-search-action {
            background-color: #77140A;
            color: #ffffff;
            border: none;
            border-radius: 10px;
            padding: 8px 18px;
            font-size: 0.88rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s ease;
            white-space: nowrap;
            cursor: pointer;
        }

        .btn-search-action:hover {
            background-color: #5c0f07;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(119, 20, 10, 0.3);
        }

        .btn-clear-search {
            background: transparent;
            border: none;
            color: #9ca3af;
            font-size: 1.1rem;
            padding: 0 8px;
            cursor: pointer;
            display: none;
            transition: color 0.2s ease;
        }

        .btn-clear-search:hover {
            color: #4b5563;
        }

        /* ETIQUETAS RÁPIDAS DE FILTRO */
        .quick-tags-wrapper {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 12px;
        }

        .quick-tag-label {
            font-size: 0.76rem;
            font-weight: 700;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .quick-tag-btn {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            color: #374151;
            font-size: 0.80rem;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 8px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            text-decoration: none;
            transition: all 0.2s ease;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        }

        .quick-tag-btn:hover {
            background-color: #f8faf8;
            border-color: #77140A;
            color: #77140A;
            transform: translateY(-1px);
            box-shadow: 0 3px 8px rgba(119, 20, 10, 0.08);
        }

        /* RESULTADOS FLOTANTES */
        .search-results-floating {
            position: absolute;
            top: calc(100% + 8px);
            left: 0;
            width: 100%;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            box-shadow: 0 16px 36px -4px rgba(0, 0, 0, 0.12);
            max-height: 390px;
            overflow-y: auto;
            z-index: 1050;
            display: none;
            padding: 6px;
        }

        .search-card-result {
            padding: 10px 14px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
            color: inherit;
            transition: all 0.15s ease;
            margin-bottom: 2px;
        }

        .search-card-result:hover {
            background-color: #f9fafb;
            color: #77140A;
        }

        .badge-result-pill {
            font-size: 0.68rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 3px 8px;
            border-radius: 6px;
            margin-right: 8px;
        }

        .badge-cat-bd      { background-color: #e0f2fe; color: #0369a1; }
        .badge-cat-app     { background-color: #dcfce7; color: #15803d; }
        .badge-cat-doc     { background-color: #fef3c7; color: #b45309; }
        .badge-cat-tool    { background-color: #f3e8ff; color: #7e22ce; }
        .badge-cat-section { background-color: #f1f5f9; color: #475569; }
    </style>
</head>

<body>
    <x-navbar />

    <main class="container content-container py-4">
        <!-- HERO CARD -->
        <div class="hero-card-modern">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7 pe-lg-4">
                    <h1 class="hero-main-title">
                        Sistema de Información sobre Agrobiodiversidad (SIAgroBD)
                    </h1>
                    <p class="hero-lead-text mb-3">
                        La agrobiodiversidad engloba por un lado a las especies de plantas, animales, hongos y microoorganismos recolectados, cultivados y domesticados para la alimentación y otros usos, así como sus parientes silvestres. Por el otro lado, incluye a los componentes que sostienen a los sistemas de producción agrícola o agroecosistemas (microorganismos del suelo, depredadores, polinizadores, etc.). En ambos casos la agrobiodiversidad incluye la diversidad a nivel ecosistema, especie y genes
                        <span class="hero-citation">
                            <i class="bi bi-journal-bookmark me-1"></i> (Casas y Vallejo, 2019 · Jackson et al., 2007 · FAO, 2004)
                        </span>
                    </p>
                    <div class="search-hero-container">
                        <div class="search-box-modern">
                            <i class="bi bi-search text-muted fs-5 me-1"></i>
                            <input type="text" id="indexGlobalSearch" class="search-input-field"
                                   placeholder="Escribe lo que buscas (ej. Maíces, Kobo, Canastas, Nutrición, API)..."
                                   autocomplete="off">

                            <button type="button" id="btnClearSearch" class="btn-clear-search" title="Limpiar">
                                <i class="bi bi-x-circle-fill"></i>
                            </button>

                            <button type="button" id="btnSearchAction" class="btn-search-action">
                                <span>Buscar</span>
                                <i class="bi bi-arrow-right-short fs-5"></i>
                            </button>
                        </div>
                        <div id="searchResultsDropdown" class="search-results-floating"></div>
                        <div class="quick-tags-wrapper">
                            <span class="quick-tag-label"><i class="bi bi-stars text-warning me-1"></i>Frecuentes:</span>
                            <a href="javascript:void(0)" class="quick-tag-btn" onclick="searchExample('Maíces')">
                                <i class="bi bi-sun text-warning"></i> Maíces Nativos
                            </a>
                            <a href="javascript:void(0)" class="quick-tag-btn" onclick="searchExample('Canastas')">
                                <i class="bi bi-basket text-success"></i> Canastas del Bien Comer
                            </a>
                            <a href="javascript:void(0)" class="quick-tag-btn" onclick="searchExample('Colectas GEF')">
                                <i class="bi bi-geo-alt text-info"></i> Colectas GEF
                            </a>
                            <a href="javascript:void(0)" class="quick-tag-btn" onclick="searchExample('Kobo')">
                                <i class="bi bi-journal-check text-primary"></i> Manual Kobo
                            </a>
                            <a href="javascript:void(0)" class="quick-tag-btn" onclick="searchExample('API')">
                                <i class="bi bi-terminal text-secondary"></i> API / Datos
                            </a>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2 pt-3">
                        <a href="#modulos" class="btn btn-sm px-4 py-2 rounded-pill text-white fw-bold shadow-sm"
                            style="background-color: var(--agro-green-dark);">
                            Explorar Módulos <i class="bi bi-arrow-down-short fs-6"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="photo-mosaic">
                        <div class="photo-item">
                            <img src="images/Foto1.png"
                                onerror="this.onerror=null; this.src='https://images.unsplash.com/photo-1592417817098-8f3d6910985b?auto=format&fit=crop&w=800&q=80';"
                                alt="Cosecha en milpa">
                            <span class="photo-author-badge">Myrna Mendoza</span>
                        </div>
                        <div class="photo-item">
                            <img src="images/Foto2.png" alt="Diversidad de frutos">
                            <span class="photo-author-badge">Iván Montes de Oca</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="modulos"></div>
        <div class="section-header-block">
            <h2 class="section-header-title">Explora los módulos de información</h2>
            <p class="text-muted mb-0 ms-3 ps-1" style="font-size: 0.95rem;">
                En el Sistema de Información sobre Agrobiodiversidad (SIAgroBD) reunimos y ayudamos a generar la
                siguiente información en torno a la agrobiodiversidad:
            </p>
        </div>
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-modern">
                    <div class="card-image-box">
                        <img src="images/mp_MaterialesComunica.jpg"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/c25e1a?text=Calabazas+de+M%C3%A9xico';"
                            alt="Calabazas de México">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title-modern">Materiales de comunicación</h3>
                        <p class="card-text-modern">
                            Disfruta videos, carteles, charlas y publicaciones de la CONABIO en torno a la riqueza de la
                            agrobiodiversidad.
                        </p>
                        <a href="{{ route('materiales') }}" class="card-footer-link">
                            Explorar materiales <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-modern">
                    <div class="card-image-box">
                        <img src="images/mp_Aplicaciones.jpg"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/1b4d42?text=Mapas+Interactivos';"
                            alt="Aplicaciones de análisis">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title-modern">Aplicaciones de análisis y visualización</h3>
                        <p class="card-text-modern">
                            Explora las visualizaciones dinámicas de datos, mapas interactivos y otras herramienta para
                            analizar y explorar datos de agrobiodiversidad.
                        </p>
                        <a href="{{ route('aplicaciones') }}" class="card-footer-link">
                            Abrir visualizadores <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-modern">
                    <div class="card-image-box">
                        <img src="images/mpEspecies.jpg"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/2e7d32?text=Especies+Agrobiodiversidad';"
                            alt="Especies">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title-modern">Especies de la Agrobiodiversidad</h3>
                        <p class="card-text-modern">
                            Conoce qué especies conforman la agrobiodiversidad de México y explóralas en Enciclovida y
                            Naturalista.
                        </p>
                        <a href="{{ route('especies') }}" class="card-footer-link">
                            Consultar catálogo <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-modern">
                    <div class="card-image-box">
                        <img src="images/mpBD.jpg"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/c25e1a?text=Gr%C3%A1ficas+y+Datos';"
                            alt="Bases de datos">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title-modern">Bases de datos</h3>
                        <p class="card-text-modern">
                            Consulta y descarga los datos abiertos sobre sistemas de manejo y agrobiodiversidad en el
                            territorio nacional.
                        </p>
                        <a href="{{ route('bases.datos') }}" class="card-footer-link">
                            Acceder a datasets <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card-modern">
                    <div class="card-image-box">
                        <img src="images/cartel.png"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x400/f8faf8/4b5563?text=Publicaciones+T%C3%A9cnicas';"
                            alt="Materiales técnicos">
                    </div>
                    <div class="card-content">
                        <h3 class="card-title-modern">Materiales técnicos</h3>
                        <p class="card-text-modern">
                            Artículos científicos, resúmenes metodológicos y documentación técnica elaborada por
                            especialistas.
                        </p>
                        <a href="{{ route('materiales.tecnicos') }}" class="card-footer-link">
                            Leer publicaciones <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="how-it-works">
            <h2>¿Cómo funciona el SIAgroBD?</h2>
            <p>
                El SIAgroBD funciona gracias a la integración de tres componentes:
                las bases de datos, las herramientas computacionales y la colaboración
                entre personas. Cada componente es una parte esencial del SIAgroBD.
                Puedes aprender más en la sección <a href="{{ route('acerca') }}">“Acerca de”</a>.
            </p>
            <figure class="how-it-works-figure">
                <img src="{{ asset('images/acercade.jpg') }}" alt="Componentes del SIAgroBD">
                <figcaption>
                    Personajes vía Open Peeps. Íconos vía The Noun Project.
                    Ilustración de Adriana Iwasaki y Héctor Tobón.
                </figcaption>
            </figure>
        </section>
        <section class="references">
            <strong>Referencias definición agrobiodiversidad:</strong>
            <ul>
                <li>
                    Casas A. &amp; M. Vallejo, 2019. Agroecología y agrobiodiversidad.
                    En: Merino P. L. Crisis ambiental en México. Ruta para el cambio.
                    Universidad Nacional Autónoma de México, México, pp. 99–117.
                </li>
                <li>
                    FAO, 2004. What is agrobiodiversity? En: Building on Gender,
                    Agrobiodiversity and Local Knowledge.
                </li>
                <li>
                    Jackson, L. E., U. Pascual y T. Hodgkin, 2007. Utilizing and
                    Conserving Agrobiodiversity in Agricultural Landscapes.
                    Agriculture, Ecosystems &amp; Environment 121 (3): 196–210.
                </li>
            </ul>
        </section>
        <footer class="site-footer">
            <p>
                SIAgroBD es parte del
                <a href="#">Proyecto Agrobiodiversidad Mexicana</a>, desarrollado por
                CONABIO, con FAO como agencia implementadora y con financiamiento del GEF.
            </p>
            <div class="footer-logos">
                <img src="{{ asset('images/GEF_Brand_Long_Color-modified.png') }}" alt="Global Environment Facility">
                <img src="{{ asset('images/descarga-modified.png') }}"
                    alt="Organización de las Naciones Unidas para la Alimentación y la Agricultura">
                <img src="{{ asset('images/conabio2.png') }}" alt="CONABIO">
                <img src="{{ asset('images/bannerSiagro.png') }}" alt="Agrobiodiversidad Mexicana">
            </div>
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const portalCatalog = [
            {
                title: "Proyecto Global de Maíces Nativos",
                desc: "Colecciones de razas y parientes silvestres de maíz en México.",
                category: "Base de datos",
                badgeClass: "badge-cat-bd",
                url: "{{ route('bases.datos') }}",
                keywords: ["maiz", "maices", "nativo", "criollo", "teocintle", "razas", "semillas", "parientes"]
            },
            {
                title: "Canastas Regionales del Bien Comer",
                desc: "Dieta tradicional, milpa y alimentos locales en comunidades indígenas.",
                category: "Base de datos",
                badgeClass: "badge-cat-bd",
                url: "{{ route('bases.datos') }}",
                keywords: ["canastas", "canasta", "bien comer", "nutricion", "alimentos", "dieta", "milpa", "comida", "recetas"]
            },
            {
                title: "Colectas GEF Agrobiodiversidad",
                desc: "Germoplasma de Capsicum, Phaseolus, Amaranthus, Agaves y parientes.",
                category: "Base de datos",
                badgeClass: "badge-cat-bd",
                url: "{{ route('bases.datos') }}",
                keywords: ["colectas", "colecta", "gef", "frijol", "chile", "agave", "amaranto", "germoplasma", "biodiversidad"]
            },
            {
                title: "Tablas de Composición de Alimentos (INCMNSZ)",
                desc: "Base de datos extensa de nutrición y aporte calórico del INCMNSZ.",
                category: "Base de datos",
                badgeClass: "badge-cat-bd",
                url: "{{ route('bases.datos') }}",
                keywords: ["composicion", "nutricion", "alimentos", "incmnsz", "calorias", "proteinas", "nutrientes"]
            },
            {
                title: "Grupos de Enfoque sobre Agrobiodiversidad",
                desc: "Estudios bioculturales en Chihuahua, Chiapas, CDMX, Oaxaca y Michoacán.",
                category: "Base de datos",
                badgeClass: "badge-cat-bd",
                url: "{{ route('bases.datos') }}",
                keywords: ["grupos", "enfoque", "chihuahua", "oaxaca", "chiapas", "social", "campesinos"]
            },
            {
                title: "Manual Kobotoolbox-CONABIO",
                desc: "Guía técnica y manuales para captura de datos en campo con Kobo.",
                category: "Publicación",
                badgeClass: "badge-cat-doc",
                url: "{{ route('materiales.tecnicos') }}",
                keywords: ["kobo", "manual", "kobotoolbox", "formulario", "captura", "campo", "pdf"]
            },
            {
                title: "Taller: Datos Abiertos de Agrobiodiversidad",
                desc: "Metodologías, intercambio y licencias de datos abiertos de investigación.",
                category: "Publicación",
                badgeClass: "badge-cat-doc",
                url: "{{ route('materiales.tecnicos') }}",
                keywords: ["datos abiertos", "taller", "zenodo", "gobernanza", "metodologia"]
            },
            {
                title: "Cartel Oficial del SIAgroBD",
                desc: "Cartel presentado en el 2o Congreso Internacional de Agrobiodiversidad.",
                category: "Publicación",
                badgeClass: "badge-cat-doc",
                url: "{{ route('materiales.tecnicos') }}",
                keywords: ["cartel", "congreso", "zenodo", "resumen", "poster"]
            },
            {
                title: "Catálogo de Especies de la Agrobiodiversidad",
                desc: "Exploración de especies cultivadas y parientes en Enciclovida y Naturalista.",
                category: "Especies",
                badgeClass: "badge-cat-app",
                url: "{{ route('especies') }}",
                keywords: ["especies", "enciclovida", "naturalista", "plantas", "hongos", "animales", "taxonomia"]
            },
            {
                title: "Aplicaciones y Mapas Interactivos",
                desc: "Visualizadores de colectas, exploradores espaciales y tableros Shiny.",
                category: "Aplicación",
                badgeClass: "badge-cat-app",
                url: "{{ route('aplicaciones') }}",
                keywords: ["aplicaciones", "mapas", "visor", "visualizador", "shiny", "graficas"]
            },
            {
                title: "Herramientas y API de Consulta",
                desc: "GraphQL, endpoints REST y plataformas para desarrolladores.",
                category: "Herramienta",
                badgeClass: "badge-cat-tool",
                url: "{{ route('herramientas') }}",
                keywords: ["api", "herramientas", "graphql", "zendro", "descarga", "json", "datos"]
            },
            {
                title: "Forma de Citar y Referencias",
                desc: "Cómo citar adecuadamente las bases de datos y el portal SIAgroBD.",
                category: "Sección",
                badgeClass: "badge-cat-section",
                url: "{{ route('forma_citar') }}",
                keywords: ["citar", "como citar", "referencia", "doi", "creditos", "fao", "conabio"]
            },
            {
                title: "¡Queremos escucharte! (Contacto)",
                desc: "Envío de dudas, retroalimentación técnica y mensajes a CONABIO.",
                category: "Sección",
                badgeClass: "badge-cat-section",
                url: "{{ route('forma_citar') }}",
                keywords: ["contacto", "correo", "dudas", "sugerencias", "retroalimentacion", "mensaje"]
            },
            {
                title: "Registro de Usuarios",
                desc: "Crea tu cuenta institucional o pública para acceder a interfaces y descargas.",
                category: "Sección",
                badgeClass: "badge-cat-section",
                url: "{{ route('registro') }}",
                keywords: ["registro", "cuenta", "usuario", "login", "iniciar", "registrarse"]
            }
        ];
        const searchInput = document.getElementById('indexGlobalSearch');
        const resultsDropdown = document.getElementById('searchResultsDropdown');
        const btnClear = document.getElementById('btnClearSearch');
        const btnSearch = document.getElementById('btnSearchAction');
        function executeSearch() {
            const query = searchInput.value.toLowerCase().trim();
            if (!query) {
                searchInput.focus();
                return;
            }
            const matches = portalCatalog.filter(item => {
                const inTitle = item.title.toLowerCase().includes(query);
                const inDesc = item.desc.toLowerCase().includes(query);
                const inKeywords = item.keywords.some(k => k.toLowerCase().includes(query));
                return inTitle || inDesc || inKeywords;
            });
            if (matches.length > 0) {
                window.location.href = matches[0].url;
            } else {
                resultsDropdown.innerHTML = `
                    <div class="p-3 text-center text-muted small">
                        <i class="bi bi-search me-1 text-secondary"></i> No se encontraron coincidencias para "<strong>${query}</strong>".<br>
                        <span class="text-secondary" style="font-size: 0.75rem;">Intenta buscando: <em>Maíces, Canastas, Colectas, Kobo o Nutrición</em>.</span>
                    </div>
                `;
                resultsDropdown.style.display = 'block';
            }
        }
        btnSearch.addEventListener('click', function(e) {
            e.preventDefault();
            executeSearch();
        });
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                executeSearch();
            }
        });
        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            btnClear.style.display = query.length > 0 ? 'block' : 'none';

            if (query.length < 2) {
                resultsDropdown.style.display = 'none';
                resultsDropdown.innerHTML = '';
                return;
            }
            const matches = portalCatalog.filter(item => {
                const inTitle = item.title.toLowerCase().includes(query);
                const inDesc = item.desc.toLowerCase().includes(query);
                const inKeywords = item.keywords.some(k => k.toLowerCase().includes(query));
                return inTitle || inDesc || inKeywords;
            });
            if (matches.length > 0) {
                let html = '<div class="p-1">';
                matches.slice(0, 5).forEach(item => {
                    html += `
                        <a href="${item.url}" class="search-card-result">
                            <div class="pe-2 overflow-hidden">
                                <div class="d-flex align-items-center mb-1">
                                    <span class="badge-result-pill ${item.badgeClass}">${item.category}</span>
                                    <span class="fw-bold" style="font-size: 0.88rem; color: #111827;">${item.title}</span>
                                </div>
                                <p class="text-muted small mb-0 text-truncate" style="font-size: 0.77rem; max-width: 480px;">${item.desc}</p>
                            </div>
                            <i class="bi bi-chevron-right text-muted" style="font-size: 0.8rem;"></i>
                        </a>
                    `;
                });
                html += '</div>';
                resultsDropdown.innerHTML = html;
                resultsDropdown.style.display = 'block';
            } else {
                resultsDropdown.innerHTML = `
                    <div class="p-3 text-center text-muted small">
                        <i class="bi bi-search me-1 text-secondary"></i> No se encontraron coincidencias para "<strong>${query}</strong>".<br>
                        <span class="text-secondary" style="font-size: 0.75rem;">Intenta buscando: <em>Maíces, Canastas, Colectas, Kobo o Nutrición</em>.</span>
                    </div>
                `;
                resultsDropdown.style.display = 'block';
            }
        });
        btnClear.addEventListener('click', function() {
            searchInput.value = '';
            this.style.display = 'none';
            resultsDropdown.style.display = 'none';
            searchInput.focus();
        });
        function searchExample(term) {
            searchInput.value = term;
            searchInput.dispatchEvent(new Event('input'));
            searchInput.focus();
        }
        document.addEventListener('click', function(e) {
            if (!searchInput.contains(e.target) && !resultsDropdown.contains(e.target) && !btnSearch.contains(e.target)) {
                resultsDropdown.style.display = 'none';
            }
        });
    </script>
</body>
</html>
