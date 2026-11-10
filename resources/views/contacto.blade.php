<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Forma de Citar y Contacto | SIAgroBD - CONABIO</title>
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('images/siagro-favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">

    <style>
        .section-header-styled {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.45rem;
            font-weight: 800;
            color: #111827;
            margin-bottom: 24px;
        }

        .section-header-styled::before {
            content: '';
            width: 5px;
            height: 26px;
            background-color: #c25e1a;
            border-radius: 4px;
        }

        .citation-main-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.03);
        }

        .citation-box-code {
            background-color: #f8faf8;
            border: 1.5px dashed #cbd5e1;
            border-radius: 12px;
            padding: 18px 22px;
            font-size: 0.94rem;
            line-height: 1.6;
            color: #1e293b;
            margin: 15px 0;
            position: relative;
        }

        .accordion-cite-item {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px !important;
            margin-bottom: 12px;
            overflow: hidden;
        }

        .accordion-cite-btn {
            background-color: #ffffff !important;
            color: #111827 !important;
            font-weight: 700;
            font-size: 1rem;
            padding: 16px 20px;
            box-shadow: none !important;
        }

        .accordion-cite-btn:not(.collapsed) {
            background-color: #f8faf8 !important;
            color: #12322b !important;
        }

        .cite-sublist {
            padding-left: 20px;
            margin-top: 10px;
            font-size: 0.88rem;
            line-height: 1.65;
            color: #4b5563;
        }

        .cite-sublist li {
            margin-bottom: 10px;
        }

        .contact-modern-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 24px;
            padding: 42px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            margin-top: 20px;
        }

        .callout-servext-box {
            background-color: #f0fdf4;
            border: 1px solid #bbf7d0;
            border-radius: 14px;
            padding: 18px;
            margin: 24px 0 16px 0;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .form-label-contact {
            font-size: 0.86rem;
            font-weight: 700;
            color: #374151;
            margin-bottom: 6px;
        }

        .form-control-contact {
            border: 1.5px solid #e5e7eb;
            border-radius: 12px;
            padding: 11px 16px;
            font-size: 0.92rem;
            transition: all 0.2s ease;
        }

        .form-control-contact:focus {
            border-color: #12322b;
            box-shadow: 0 0 0 3px rgba(18, 50, 43, 0.1);
            outline: none;
        }

        .btn-submit-message {
            background-color: #12322b;
            color: #ffffff;
            font-size: 0.95rem;
            font-weight: 700;
            padding: 12px 32px;
            border-radius: 12px;
            border: none;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            box-shadow: 0 4px 14px rgba(18, 50, 43, 0.25);
        }

        .btn-submit-message:hover {
            background-color: #1b4d42;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(18, 50, 43, 0.3);
        }
    </style>
</head>

<body>
    <x-navbar />
    <main class="container content-container py-4">
        <div class="mediateca-hero mb-4">
            <a href="{{ route('home') }}" class="btn-back">
                <i class="bi bi-arrow-left"></i> Volver al inicio
            </a>
            <h1 class="fw-bold mb-2 display-6">Forma de citar al SIAgroBD</h1>
            <p class="mb-0 fs-6 text-muted" style="max-width: 900px;">
                El SIAgroBD fue financiado por el Fondo para el Medio Ambiente Mundial (GEF) a través del Proyecto Agrobiodiversidad Mexicana, implementado por la FAO y ejecutado por la CONABIO. Incluye bases de datos y materiales técnicos que deben citarse por separado.
            </p>
        </div>
        <div class="citation-main-card">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                <h3 class="fs-5 fw-bold text-dark mb-0">
                    <i class="bi bi-globe2 me-2 text-success"></i>Cita general del portal SIAgroBD:
                </h3>
                <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3" onclick="copyCitation('mainCitationText')">
                    <i class="bi bi-clipboard me-1"></i> Copiar cita
                </button>
            </div>
            <p class="text-muted small mb-2">Si deseas citar el portal web en general o estadísticos contenidos en él, utiliza la siguiente referencia:</p>

            <div class="citation-box-code" id="mainCitationText">
                CONABIO. 2023. Sistema de Información sobre Agrobiodiversidad. Comisión Nacional para el Conocimiento y Uso de la Biodiversidad; Organización de las Naciones Unidas para la Alimentación y la Agricultura y Fondo para el Medio Ambiente Mundial, México. https://siagro.conabio.gob.mx/
            </div>
        </div>
        <div class="mb-5">
            <h3 class="fs-5 fw-bold text-dark mb-3">
                <i class="bi bi-database-check me-2 text-warning"></i>Citas específicas por Base de Datos:
            </h3>
            <div class="accordion" id="accordionCitasBases">
                <div class="accordion-item accordion-cite-item" id="canastas-cite">
                    <h2 class="accordion-header">
                        <button class="accordion-button accordion-cite-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCanastas">
                            Canastas regionales del bien comer
                        </button>
                    </h2>
                    <div id="collapseCanastas" class="accordion-collapse collapse" data-bs-parent="#accordionCitasBases">
                        <div class="accordion-body pt-2 pb-4">
                            <p class="fw-bold mb-2">Fase 1:</p>
                            <p class="text-muted small">CONABIO. 2019. Canastas Regionales del Bien Comer. Proyecto Acciones Complementarias al Programa de Conservación de Maíz Criollo, CONABIO-CONANP. México.</p>

                            <ul class="cite-sublist">
                                <li><strong>Proyecto 1:</strong> García-Maldonado, K. Y. et al. 2019. Canasta Regional del Bien Comer: Alimentar el cuerpo, la mente y el espíritu: La dieta Milpa Monte-Traspatio en tres localidades indígenas del Estado de México. CONABIO - CONANP.</li>
                                <li><strong>Proyecto 2:</strong> Pérez, A. G. et al. 2019. Canasta Regional del Bien Comer: Batsil we’elil tajlumaltik: comida típica de nuestra tierra de Chiapas. Patronato Pro Zona Mazahua A. C. CONABIO - CONANP.</li>
                                <li><strong>Proyecto 3:</strong> Silva, A. M. et al. 2019. Canasta Regional del Bien Comer: Diversidad biológica utilizada por los pobladores indígenas de la región Montaña de Guerrero, México. Universidad Intercultural de Guerrero.</li>
                                <li><strong>Proyecto 4:</strong> Mera, O. L. M. et al. 2019. Canasta Regional del Bien Comer: Canasta del bien comer de la Sierra Tarahumara, Chihuahua, México. UNAM.</li>
                                <li><strong>Proyecto 5:</strong> Flores, P. N. A. y Arellano, L. J. G. 2019. Canasta Regional del Bien Comer: En jícara o en barro: canasta del bien comer para la región Valles Centrales, Oaxaca.</li>
                                <li><strong>Proyecto 6:</strong> De la Llata, P. N. C. et al. 2019. Regionalización de guías alimentarias en México: adaptación y validación en el estado de Yucatán.</li>
                                <li><strong>Proyecto 7:</strong> García, G. B. 2019. A la canasta Regional “la cocina tradicional de Pichátaro Michoacán, México”.</li>
                                <li><strong>Proyecto 8:</strong> Díaz, H. B. M. y Escobar, C. S. 2019. La dieta de la milpa y otros alimentos que la complementan en Los Altos de Chiapas. ECOSUR.</li>
                                <li><strong>Proyecto 9:</strong> Zepeda, Y. et al. 2019. Canasta del bien comer de Cuetzalan, Sierra Norte de Puebla.</li>
                                <li><strong>Proyecto 10:</strong> Díaz-José, J. et al. 2019. Biodiversidad y conocimiento tradicional indígena para integrar el Plato del Bien Comer a partir de entomofauna y quelites en Zongolica, Veracruz.</li>
                                <li><strong>Proyecto 11:</strong> Hernández González, R. et al. 2019. Ma´hnini (Mi pueblo) en Otomí.</li>
                                <li><strong>Proyecto 12:</strong> Gurri, F. D. et al. 2019. Canasta del bien comer para campesinos de Calakmul, Campeche. ECOSUR.</li>
                            </ul>

                            <p class="fw-bold mb-1 mt-3">Fase 2:</p>
                            <p class="text-muted small mb-0">CONABIO. 2023. Canastas Regionales del Bien Comer. Proyecto Agrobiodiversidad Mexicana, GEF-FAO-CONABIO. México.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item accordion-cite-item" id="colectas-cite">
                    <h2 class="accordion-header">
                        <button class="accordion-button accordion-cite-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseColectas">
                            Colectas GEF
                        </button>
                    </h2>
                    <div id="collapseColectas" class="accordion-collapse collapse" data-bs-parent="#accordionCitasBases">
                        <div class="accordion-body pt-2 pb-4">
                            <ul class="cite-sublist">
                                <li>Cabrera-Toledo D. et al. 2023. Destilados de agave poco conocidos del occidente de México. Universidad de Guadalajara. Base de datos SNIB-CONABIO, Proyecto RG070.</li>
                                <li>Casas, A. et al. 2023. Manejo y domesticación de agrobiodiversidad en Mesoamérica: Bases para la soberanía alimentaria sustentable. UNAM-IIES. Proyecto RG023.</li>
                                <li>Dominguez-Barradas, C. et al. 2023. La diversidad de especies del género Capsicum, Phaseolus y quelites en agroecosistemas de Veracruz. Universidad Veracruzana. Proyecto RG055.</li>
                                <li>Espitia, R. E. et al. 2022. Recolección de germoplasma y generación de información sobre la diversidad de Amaranthus en México. INIFAP. Proyecto RG034.</li>
                                <li>García Mendoza, A.J. y Franco Martínez, I.S. 2023. Los agaves, recursos fitogenéticos de agroecosistemas tradicionales. UNAM-IB. Proyecto RG019.</li>
                                <li>González Elizondo M. et al. 2022. Agrobiodiversidad de géneros selectos, parientes silvestres y quelites en Durango. IPN-CIIDIR. Proyecto RG025.</li>
                                <li>Hernández-Sandoval, L. et al. 2023. Agrobiodiversidad de la Región Huasteca, México. UAQ / UAT. Proyecto RG057.</li>
                                <li>Martínez, M. et al. 2022. Colecta de Physalis (Solanaceae) al norte del Trópico de Cáncer. UAQ. Proyecto RG002.</li>
                                <li>Orozco Ramírez, Q. et al. 2022. Colecta y registro de la agrobiodiversidad en la Mixteca Alta, Oaxaca. UNAM-IG. Proyecto RG001.</li>
                                <li>Pérez-Valladares C.X. et al. 2022. Agrobiodiversidad de tres regiones bioculturales en centro occidente de México. Proyecto RG016.</li>
                                <li>Rendón Aguilar, B. et al. 2022. Composición de la agrobiodiversidad en la zona suroriental del suelo de conservación de la CDMX. UAM. Proyecto SG002.</li>
                                <li>Trujillo López E. et al. 2022. Agrobiodiversidad en comunidades de la Chinantla Alta (CORENCHI). Geoconservación A.C. Proyecto RG078.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item accordion-cite-item" id="focales-cite">
                    <h2 class="accordion-header">
                        <button class="accordion-button accordion-cite-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFocales">
                            Grupos de enfoque
                        </button>
                    </h2>
                    <div id="collapseFocales" class="accordion-collapse collapse" data-bs-parent="#accordionCitasBases">
                        <div class="accordion-body pt-2 pb-4 text-muted small">
                            CONABIO. 2023. Grupos de enfoque sobre agrobiodiversidad en Chihuahua, Chiapas, Ciudad de México, Oaxaca y Michoacán. Proyecto Agrobiodiversidad Mexicana, GEF-FAO-CONABIO. México.
                        </div>
                    </div>
                </div>
                <div class="accordion-item accordion-cite-item" id="maices-cite">
                    <h2 class="accordion-header">
                        <button class="accordion-button accordion-cite-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMaices">
                            Proyecto Global de Maíces Nativos
                        </button>
                    </h2>
                    <div id="collapseMaices" class="accordion-collapse collapse" data-bs-parent="#accordionCitasBases">
                        <div class="accordion-body pt-2 pb-4">
                            <p class="text-muted small">
                                La base está conformada por varios proyectos que colectaron datos de forma independiente. Si necesitas citar al proyecto en general:
                            </p>
                            <div class="citation-box-code my-2" style="font-size: 0.85rem;">
                                CONABIO. 2011. Proyecto Global de Maíces Nativos. Comisión Nacional para el Conocimiento y Uso de la Biodiversidad; INIFAP; INECC. México. https://biodiversidad.gob.mx/diversidad/proyectoMaices
                            </div>
                            <p class="text-muted small mt-3 mb-1">Para citar proyectos individuales, consulta la variable <em>"Forma de citar"</em> en la tabla de registros o revisa la referencia correspondiente de los proyectos FZ001 a FZ023 en las bases de datos SNIB-CONABIO.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item accordion-cite-item" id="nutricion-cite">
                    <h2 class="accordion-header">
                        <button class="accordion-button accordion-cite-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNutricion">
                            Tablas de composición de alimentos extendida del INCMNSZ
                        </button>
                    </h2>
                    <div id="collapseNutricion" class="accordion-collapse collapse" data-bs-parent="#accordionCitasBases">
                        <div class="accordion-body pt-2 pb-4 text-muted small">
                            Bourges Rodríguez, H. G. N., Camacho Parra, M. A., Morales Guerrero, J. C. 2019. “Composición de alimentos mexicanos Base de Datos Extensa”. Instituto Nacional de Ciencias Médicas y Nutrición Salvador Zubirán.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contacto-seccion">
            <h2 class="section-header-styled">¡Queremos escucharte!</h2>
            <div class="contact-modern-card">
                <div class="row g-5">
                    <div class="col-lg-5 pe-lg-3">
                        <p class="text-muted" style="line-height: 1.7; font-size: 0.94rem;">
                            El SIAgroBD fue desarrollado como parte del <a href="https://biodiversidad.gob.mx/diversidad/proyectos/agrobiodiversidadmx" target="_blank" class="fw-semibold text-decoration-none text-success">Proyecto Agrobiodiversidad Mexicana</a> y actualmente depende de la Coordinación de Agrobiodiversidad y Recursos Biológicos de la CONABIO.
                        </p>
                        <p class="text-muted" style="line-height: 1.7; font-size: 0.94rem;">
                            Utiliza este espacio para resolver dudas específicas sobre el SIAgroBD o darnos retroalimentación sobre la plataforma. Nos pondremos en contacto contigo a la brevedad posible.
                        </p>
                        <div class="callout-servext-box">
                            <i class="bi bi-envelope-at-fill text-success fs-4 mt-1"></i>
                            <div style="font-size: 0.88rem; color: #166534; line-height: 1.5;">
                                Para solicitudes que no puedan realizarse desde las herramientas del SIAgroBD, escribe a:<br>
                                <strong class="text-dark">servext@conabio.gob.mx</strong>
                            </div>
                        </div>
                        <p class="text-muted small mt-3" style="font-size: 0.82rem;">
                            <strong>Nota:</strong> Los campos de texto aceptan caracteres alfanuméricos, puntos y comas.
                        </p>
                    </div>

                    <div class="col-lg-7 ps-lg-4">
                        <form id="contactForm" method="POST" action="{{ route('contacto.store') }}">@csrf
                            <div id="contact-alert-success" class="alert alert-success py-2 small mb-3" style="display:none;"></div>
                            <div id="contact-alert-error" class="alert alert-danger py-2 small mb-3" style="display:none;"></div>
                            <div class="mb-3">
                                <label for="form-nombre" class="form-label-contact">Nombre completo <span class="text-danger">*</span></label>
                                <input type="text" name="nombre" id="form-nombre" class="form-control form-control-contact" placeholder="Tu nombre y apellidos" required>
                                <div id="error_nombre" class="text-danger small mt-1" style="display:none;">Este campo es obligatorio</div>
                            </div>
                            <div class="mb-3">
                                <label for="form-email" class="form-label-contact">Correo electrónico <span class="text-danger">*</span></label>
                                <input type="email" name="correo" id="form-email" class="form-control form-control-contact" placeholder="correo@ejemplo.com" required>
                                <div id="error_correo" class="text-danger small mt-1" style="display:none;">Este campo es obligatorio</div>
                            </div>
                            <div class="mb-3">
                                <label for="form-message" class="form-label-contact">Mensaje o consulta <span class="text-danger">*</span></label>
                                <textarea name="mensaje" id="form-message" rows="4" maxlength="1000" class="form-control form-control-contact" placeholder="Escribe tu mensaje (máximo 1000 caracteres)" required></textarea>
                                <div id="error_message" class="text-danger small mt-1" style="display:none;">Este campo es obligatorio</div>
                            </div>
                            <div class="mb-4 small text-muted d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle text-success"></i>
                                <span>
                                    Al enviar el mensaje confirmo que he leído y acepto el
                                    <a href="Aviso_de_privacidad.pdf" target="_blank" class="fw-bold text-decoration-none" style="color: #c25e1a;">aviso de privacidad.</a>
                                </span>
                            </div>
                            <button type="button" id="btnSubmitContact" class="btn-submit-message w-100 py-3">
                                <span id="btn-contact-text"><i class="bi bi-send-fill me-1"></i> Enviar mensaje</span>
                                <span id="btn-contact-spinner" class="spinner-border spinner-border-sm d-none" role="status"></span>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function copyCitation(elementId) {
            const text = document.getElementById(elementId).innerText.trim();
            navigator.clipboard.writeText(text).then(() => {
                alert("¡Cita copiada al portapapeles!");
            });
        }

        $('#form-nombre').on('input', function() {
            var c = this.selectionStart,
                r = /[^a-z\sñ´áéíóú]/gi,
                v = $(this).val();
            if(r.test(v)) {
                $(this).val(v.replace(r, ''));
                c--;
            }
            this.setSelectionRange(c, c);
        });

        $('#form-message').on('input', function() {
            var c = this.selectionStart,
                r = /[^a-z0-9\s.,ñ;´áéíóú?!]/gi,
                v = $(this).val();
            if(r.test(v)) {
                $(this).val(v.replace(r, ''));
                c--;
            }
            this.setSelectionRange(c, c);
        });

        $('#btnSubmitContact').on('click', function(e) {
            e.preventDefault();
            $('#error_nombre').hide();
            $('#error_correo').hide();
            $('#error_message').hide();
            $('#contact-alert-success').hide();
            $('#contact-alert-error').hide();
            var nombre = $('#form-nombre').val().trim();
            var correo = $('#form-email').val().trim();
            var mensaje = $('#form-message').val().trim();
            var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var hasError = false;
            if(!nombre) { $('#error_nombre').show(); hasError = true; }
            if(!correo) {
                $('#error_correo').text('Este campo es obligatorio').show();
                hasError = true;
            } else if(!correo.match(validRegex)) {
                $('#error_correo').text('Correo inválido').show();
                hasError = true;
            }
            if(!mensaje) { $('#error_message').show(); hasError = true; }
            if(hasError) return;
            var $btn = $(this);
            $btn.prop('disabled', true);
            $('#btn-contact-text').addClass('d-none');
            $('#btn-contact-spinner').removeClass('d-none');
            $.ajax({
                url: "{{ route('contacto.store') }}",
                type: "POST",
                data: $('#contactForm').serialize(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $btn.prop('disabled', false);
                    $('#btn-contact-text').removeClass('d-none');
                    $('#btn-contact-spinner').addClass('d-none');

                    $('#contact-alert-success').text(response.message).show();
                    $('#contactForm')[0].reset();
                },
                error: function(xhr) {
                    $btn.prop('disabled', false);
                    $('#btn-contact-text').removeClass('d-none');
                    $('#btn-contact-spinner').addClass('d-none');

                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        var errorHtml = '<ul class="mb-0 ps-3">';
                        $.each(errors, function(k, v) {
                            errorHtml += '<li>' + v[0] + '</li>';
                        });
                        errorHtml += '</ul>';
                        $('#contact-alert-error').html(errorHtml).show();
                    } else {
                        $('#contact-alert-error').text('Hubo un error al enviar tu mensaje. Inténtalo de nuevo más tarde.').show();
                    }
                }
            });
        });

        $(document).ready(function() {
            var whereTo = sessionStorage.getItem('whereTo');
            if(whereTo) {
                sessionStorage.removeItem('whereTo');
                var targetCollapse = '#' + whereTo;
                if($(targetCollapse).length) {
                    $(targetCollapse).collapse('show');
                    $('html, body').animate({
                        scrollTop: $(targetCollapse).offset().top - 100
                    }, 500);
                }
            }
        });
    </script>
</body>
</html>
