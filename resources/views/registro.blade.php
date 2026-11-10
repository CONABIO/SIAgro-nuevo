<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Registro de Usuario | SIAgroBD - CONABIO</title>
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
            <a href="{{ route('home') }}" class="btn-back"><i class="bi bi-arrow-left"></i> Volver al inicio</a>
            <h1 class="fw-bold mb-2 display-6">¡Regístrate en el SIAgroBD!</h1>
            <p class="mb-0 fs-6" style="max-width: 860px;">Crea una cuenta para consultar, descargar y acceder a las interfaces gráficas de las bases de datos de la agrobiodiversidad mexicana.</p>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-lg-4">
                <div class="benefits-card">
                    <span class="benefit-badge"><i class="bi bi-unlock-fill me-1"></i> Acceso Total</span>
                    <h2 class="fs-4 fw-bold mb-3">¿A qué tendrás acceso?</h2>
                    <p class="text-white-50 small mb-4">
                        Con este registro tendrás acceso a la interfaz gráfica y herramientas de consulta avanzada de las siguientes bases de datos:
                    </p>
                    <div class="db-access-item">
                        <i class="bi bi-egg-fried fs-5 text-warning"></i>
                        <span>Canastas regionales del bien comer</span>
                    </div>
                    <div class="db-access-item">
                        <i class="bi bi-geo-alt-fill fs-5 text-info"></i>
                        <span>Colectas GEF</span>
                    </div>
                    <div class="db-access-item">
                        <i class="bi bi-people-fill fs-5 text-success"></i>
                        <span>Grupos de enfoque</span>
                    </div>
                    <div class="db-access-item">
                        <i class="bi bi-sun-fill fs-5 text-warning"></i>
                        <span>Proyecto Global de Maíces Nativos</span>
                    </div>
                    <div class="db-access-item">
                        <i class="bi bi-clipboard2-pulse-fill fs-5 text-danger"></i>
                        <span>Tablas de composición extendida (INCMNSZ)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="form-register-card">
                    <h2 class="form-title">Crear nueva cuenta</h2>
                    <p class="form-subtitle">Los campos marcados con asterisco (<span class="text-danger">*</span>) son obligatorios.</p>
                    <div class="alert-note-box">
                        <i class="bi bi-info-circle-fill me-1"></i>
                        <strong>Nota:</strong> Los campos de nombre, apellidos, usuario e institución sólo aceptan caracteres alfanuméricos.
                    </div>
                    <form role="form" id="registerForm" method="post" action="{{ route('registro.store') }}">@csrf
                        <div id="error_reg" class="alert alert-danger py-2 small mb-3" style="display:none;"></div>
                        <div id="success_reg" class="alert alert-success py-2 small mb-3" style="display:none;"></div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="form-reg-nombre" class="form-label-custom">Nombre (Name) <span class="text-danger">*</span></label>
                                <input type="text" name="form-nombre" id="form-reg-nombre" class="form-control form-control-custom" placeholder="Ingresa tu nombre" required>
                                <div id="error_reg_nombre" class="text-danger small mt-1" style="display:none;">Este campo es obligatorio</div>
                            </div>
                            <div class="col-md-6">
                                <label for="form-reg-apellido" class="form-label-custom">Apellidos (Last name) <span class="text-danger">*</span></label>
                                <input type="text" name="form-apellido" id="form-reg-apellido" class="form-control form-control-custom" placeholder="Ingresa tus apellidos" required>
                                <div id="error_reg_apellido" class="text-danger small mt-1" style="display:none;">Este campo es obligatorio</div>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="form-reg-email" class="form-label-custom">Correo electrónico (Email) <span class="text-danger">*</span></label>
                                <input type="email" name="form-email" id="form-reg-email" class="form-control form-control-custom" placeholder="nombre@correo.com" required>
                                <div id="error_reg_correo" class="text-danger small mt-1" style="display:none;">Este campo es obligatorio</div>
                            </div>
                            <div class="col-md-6">
                                <label for="form-reg-usuario" class="form-label-custom">Usuario (Username) <span class="text-danger">*</span></label>
                                <input type="text" name="form-usuario" id="form-reg-usuario" class="form-control form-control-custom" placeholder="Elige un usuario" required>
                                <div id="error_reg_usuario" class="text-danger small mt-1" style="display:none;">Este campo es obligatorio</div>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="form-reg-contrasena" class="form-label-custom">Contraseña (Password) <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="password" name="form-contrasena" id="form-reg-contrasena" class="form-control form-control-custom" placeholder="Mínimo 8 caracteres" required style="border-radius: 10px 0 0 10px;">
                                    <button class="btn btn-eye-toggle" type="button" onclick="mostrarPassword('contrasena')">
                                        <i class="bi bi-eye-slash icon_contrasena"></i>
                                    </button>
                                </div>
                                <div id="error_reg_contrasena" class="text-danger small mt-1" style="display:none;">Este campo es obligatorio</div>
                            </div>
                            <div class="col-md-6">
                                <label for="form-reg-confirmacion" class="form-label-custom">Confirma la contraseña <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="password" name="form-confirmacion" id="form-reg-confirmacion" class="form-control form-control-custom" placeholder="Repite tu contraseña" required style="border-radius: 10px 0 0 10px;">
                                    <button class="btn btn-eye-toggle" type="button" onclick="mostrarPassword('confirmacion')">
                                        <i class="bi bi-eye-slash icon_confirmacion"></i>
                                    </button>
                                </div>
                                <div id="error_reg_confirmacion" class="text-danger small mt-1" style="display:none;">Las contraseñas no coinciden</div>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="form-reg-pais" class="form-label-custom">País (Country) <span class="text-danger">*</span></label>
                                <select name="form-pais" id="form-reg-pais" class="form-select form-select-custom" onchange="selectEstado()">
                                    <option value="142" selected>México</option>
                                    <option value="1">Estados Unidos</option>
                                    <option value="2">Canadá</option>
                                    <option value="3">Colombia</option>
                                    <option value="4">España</option>
                                    <option value="5">Argentina</option>
                                    <option value="0">Otro país</option>
                                </select>
                                <div id="error_reg_pais" class="text-danger small mt-1" style="display:none;">Este campo es obligatorio</div>
                            </div>
                            <div class="col-md-6">
                                <label for="form-reg-estado" class="form-label-custom">Estado (State)</label>
                                <select name="form-estado" id="form-reg-estado" class="form-select form-select-custom">
                                    <option value="" selected disabled>Selecciona tu estado...</option>
                                    <option value="Aguascalientes">Aguascalientes</option>
                                    <option value="Baja California">Baja California</option>
                                    <option value="Baja California Sur">Baja California Sur</option>
                                    <option value="Campeche">Campeche</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="Ciudad de México">Ciudad de México</option>
                                    <option value="Coahuila">Coahuila</option>
                                    <option value="Colima">Colima</option>
                                    <option value="Durango">Durango</option>
                                    <option value="Estado de México">Estado de México</option>
                                    <option value="Guanajuato">Guanajuato</option>
                                    <option value="Guerrero">Guerrero</option>
                                    <option value="Hidalgo">Hidalgo</option>
                                    <option value="Jalisco">Jalisco</option>
                                    <option value="Michoacán">Michoacán</option>
                                    <option value="Morelos">Morelos</option>
                                    <option value="Nayarit">Nayarit</option>
                                    <option value="Nuevo León">Nuevo León</option>
                                    <option value="Oaxaca">Oaxaca</option>
                                    <option value="Puebla">Puebla</option>
                                    <option value="Querétaro">Querétaro</option>
                                    <option value="Quintana Roo">Quintana Roo</option>
                                    <option value="San Luis Potosí">San Luis Potosí</option>
                                    <option value="Sinaloa">Sinaloa</option>
                                    <option value="Sonora">Sonora</option>
                                    <option value="Tabasco">Tabasco</option>
                                    <option value="Tamaulipas">Tamaulipas</option>
                                    <option value="Tlaxcala">Tlaxcala</option>
                                    <option value="Veracruz">Veracruz</option>
                                    <option value="Yucatán">Yucatán</option>
                                    <option value="Zacatecas">Zacatecas</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="form-reg-institucion" class="form-label-custom">Institución u Organización (Institution)</label>
                            <input type="text" name="form-institucion" id="form-reg-institucion" class="form-control form-control-custom" placeholder="Ej. UNAM, INIFAP, Universidad, Organización comunitaria...">
                        </div>
                        <div class="mb-4">
                            <label class="form-label-custom d-block mb-2">¿Cuáles de las siguientes opciones describen mejor las razones por las que quieres consultar los datos?</label>
                            <div id="error_reg_uso" class="text-danger small mb-2" style="display:none;">Favor de elegir al menos una opción</div>
                            <label class="custom-check-card" for="academico">
                                <input type="checkbox" name="uso[]" value="academico_investigacion" id="academico">
                                <span class="custom-check-label">Uso académico para estudios, investigaciones o tesis</span>
                            </label>
                            <label class="custom-check-card" for="educativo_demostrativo">
                                <input type="checkbox" name="uso[]" value="educativo_demostrativo" id="educativo_demostrativo">
                                <span class="custom-check-label">Uso educativo y demostrativo</span>
                            </label>
                            <label class="custom-check-card" for="politicas_publicas">
                                <input type="checkbox" name="uso[]" value="politicas_publicas" id="politicas_publicas">
                                <span class="custom-check-label">Explorar y conocer información para toma de decisiones o informar políticas públicas</span>
                            </label>
                        </div>
                        <div class="mb-4 text-muted small">
                            <i class="bi bi-shield-lock-fill text-success me-1"></i>
                            Al registrarme confirmo que he leído y acepto el
                            <a href="Aviso_de_privacidad.pdf" target="_blank" class="fw-bold text-decoration-none" style="color: var(--agro-terracota);">aviso de privacidad.</a>

                            <input type="hidden" name="reg-recaptcha_response" id="reg-recaptchaResponse" value="">
                        </div>
                        <button type="button" id="reg-button" class="btn btn-submit-reg w-100 py-3">
                            <span id="btn-text"><i class="bi bi-person-plus-fill me-2"></i> ¡Regístrate!</span>
                            <span id="btn-spinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function mostrarPassword(campo) {
            const input = document.getElementById("form-reg-" + campo);
            const icon = document.querySelector(".icon_" + campo);
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("bi-eye-slash");
                icon.classList.add("bi-eye");
            } else {
                input.type = "password";
                icon.classList.remove("bi-eye");
                icon.classList.add("bi-eye-slash");
            }
        }
        function selectEstado() {
            const pais = $("#form-reg-pais").val();
            const estadoSelect = $("#form-reg-estado");
            if (pais !== "142") { // Si no es México
                estadoSelect.val("");
                estadoSelect.prop("disabled", true);
            } else {
                estadoSelect.prop("disabled", false);
            }
        }
        $('#form-reg-nombre, #form-reg-apellido').on('input', function() {
            var c = this.selectionStart,
                r = /[^a-z\sñ´áéíóú]/gi,
                v = $(this).val();
            if(r.test(v)) {
                $(this).val(v.replace(r, ''));
                c--;
            }
            this.setSelectionRange(c, c);
        });
        $('#form-reg-institucion').on('input', function() {
            var c = this.selectionStart,
                r = /[^a-z0-9\sñ]/gi,
                v = $(this).val();
            if(r.test(v)) {
                $(this).val(v.replace(r, ''));
                c--;
            }
            this.setSelectionRange(c, c);
        });
        $('#form-reg-usuario').on('input', function() {
            var c = this.selectionStart,
                r = /[^a-z0-9\sñ]/gi,
                v = $(this).val();
            if(r.test(v)) {
                $(this).val(v.replace(r, ''));
                c--;
            }
            this.setSelectionRange(c, c);
        });
        $('#reg-button').on('click', function(e) {
            e.preventDefault();
            $('#error_reg').hide().empty();
            $('#error_reg_confirmacion').hide();
            $('#error_reg_uso').hide();
            const pass = $('#form-reg-contrasena').val();
            const confirmPass = $('#form-reg-confirmacion').val();
            if (pass !== confirmPass) {
                $('#error_reg_confirmacion').show();
                $('#form-reg-confirmacion').focus();
                return;
            }
            if ($('input[name="uso[]"]:checked').length === 0) {
                $('#error_reg_uso').show();
                return;
            }
            const $btn = $(this);
            $btn.prop('disabled', true);
            $('#btn-text').addClass('d-none');
            $('#btn-spinner').removeClass('d-none');
            $.ajax({
                url: $('#registerForm').attr('action'),
                type: 'POST',
                data: $('#registerForm').serialize(),
                success: function(response) {
                    $('#success_reg').show().html('<i class="bi bi-check-circle-fill me-1"></i> ' + (response.message || 'Registro exitoso. Redirigiendo...'));
                    $('#registerForm')[0].reset();
                    setTimeout(function() {
                        window.location.href = "{{ route('home') }}";
                    }, 1500);
                },
                error: function(xhr) {
                    $btn.prop('disabled', false);
                    $('#btn-text').removeClass('d-none');
                    $('#btn-spinner').addClass('d-none');
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorMsg = '<ul class="mb-0 ps-3">';
                        $.each(errors, function(key, value) {
                            errorMsg += '<li>' + value[0] + '</li>';
                        });
                        errorMsg += '</ul>';
                        $('#error_reg').show().html(errorMsg);
                    } else if (xhr.status === 409) {
                        $('#error_reg').show().html('<i class="bi bi-exclamation-triangle-fill me-1"></i> El usuario o correo ya existen, favor de modificarlos.');
                    } else {
                        $('#error_reg').show().html('<i class="bi bi-x-circle-fill me-1"></i> Ocurrió un error inesperado al registrar. Inténtalo de nuevo.');
                    }
                }
            });
        });
    </script>
</body>
</html>
