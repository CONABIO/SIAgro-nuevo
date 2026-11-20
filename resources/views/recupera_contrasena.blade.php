<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Recuperación | SIAgroBD - CONABIO</title>
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
    <main class="container py-5">

        <div class="mediateca-hero">
            @if($origen)
                <a href="{{ $origen['url'] }}" class="btn-back">
                    <i class="bi bi-arrow-left"></i> Ir al inicio de sesión ({{ $origen['nombre'] }})
                </a>
            @else
                <div class="dropdown d-inline-block mb-3">
                    <button class="btn-back dropdown-toggle border-0 mb-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Ir al inicio de sesión
                    </button>
                    <ul class="dropdown-menu shadow-sm">
                        @foreach($instancias as $inst)
                            <li>
                                <a class="dropdown-item py-2" href="{{ $inst['url'] }}">{{ $inst['nombre'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h1 class="fw-bold mb-2 display-6">Recupera tu contraseña</h1>
            <p class="mb-0 fs-6" style="max-width: 860px;">
                Si cambias tu contraseña se actualizarán tus credenciales en todas las bases de datos del SIAgroBD:
            </p>
        </div>

        <div class="row g-4 mb-5 align-items-stretch">
            <div class="col-lg-5">
                <div class="benefits-card h-100">
                    <span class="benefit-badge"><i class="bi bi-key-fill me-1"></i> SIAgroBD</span>
                    <h2 class="fs-4 fw-bold mb-3">Bases de datos del SIAgroBD</h2>
                    <p class="text-white-50 small mb-4">
                        Al cambiar tu contraseña se actualizarán tus credenciales en:
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
                        <i class="bi bi-flower1 fs-5 text-light"></i>
                        <span>Especies de la agrobiodiversidad</span>
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
                        <span>Tablas de composición de alimentos extendida del INCMNSZ</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="form-register-card h-100">
                    <h2 class="form-title">Cambia tu contraseña</h2>
                    <p class="form-subtitle">Los campos marcados con <span class="text-danger">*</span> son obligatorios</p>

                    <form role="form" id="recoverForm" method="post" action="{{ route('recupera.update') }}">
                        @csrf
                        <div id="error_rec" class="alert alert-danger py-2 small mb-3" style="display:none;"></div>
                        <div id="success_rec" class="alert alert-success py-2 small mb-3" style="display:none;"></div>

                        <div class="mb-3">
                            <label for="form-email" class="form-label-custom">Correo (email) <span class="text-danger">*</span></label>
                            <input type="email" name="form-email" id="form-email" class="form-control form-control-custom" placeholder="Correo (email)" required>
                            <div id="error_correo" class="text-danger small mt-1" style="display:none;">Este campo es obligatorio</div>
                        </div>

                        <div class="mb-3">
                            <label for="form-usuario" class="form-label-custom">Usuario (Username) <span class="text-danger">*</span></label>
                            <input type="text" name="form-usuario" id="form-usuario" class="form-control form-control-custom" placeholder="Usuario (Username)" required>
                            <div id="error_usuario" class="text-danger small mt-1" style="display:none;">Este campo es obligatorio</div>
                        </div>

                        <div class="mb-3">
                            <label for="form-contrasena" class="form-label-custom">Nueva contraseña (New password) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="password" name="form-contrasena" id="form-contrasena" class="form-control form-control-custom" placeholder="Nueva contraseña (New password)" required style="border-radius: 10px 0 0 10px;">
                                <button class="btn btn-eye-toggle" type="button" onclick="mostrarPassword('contrasena')">
                                    <i class="bi bi-eye-slash icon_contrasena"></i>
                                </button>
                            </div>
                            <div id="error_contrasena" class="text-danger small mt-1" style="display:none;">Este campo es obligatorio</div>
                        </div>

                        <div class="mb-4">
                            <label for="form-confirmacion" class="form-label-custom">Confirma la contraseña (Confirm password) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="password" name="form-confirmacion" id="form-confirmacion" class="form-control form-control-custom" placeholder="Contraseña (Password)" required style="border-radius: 10px 0 0 10px;">
                                <button class="btn btn-eye-toggle" type="button" onclick="mostrarPassword('confirmacion')">
                                    <i class="bi bi-eye-slash icon_confirmacion"></i>
                                </button>
                            </div>
                            <div id="error_confirmacion" class="text-danger small mt-1" style="display:none;">La contraseña no coincide</div>
                        </div>

                        <div class="mb-4 text-muted small">
                            <i class="bi bi-shield-lock-fill text-success me-1"></i>
                            Al dar clic en el botón, confirmo que he leído y acepto el
                            <a href="{{ asset('Aviso_de_privacidad.pdf') }}" target="_blank" class="fw-bold text-decoration-none" style="color: var(--agro-terracota);">aviso de privacidad.</a>
                        </div>

                        <button type="button" id="rec-button" class="btn btn-submit-reg w-100 py-3">
                            <span id="btn-text"><i class="bi bi-key-fill me-2"></i> Cambiar contraseña</span>
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
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        function mostrarPassword(campo) {
            const input = document.getElementById("form-" + campo);
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

        $('#form-usuario').on('input', function() {
            var c = this.selectionStart,
                r = /[^a-z0-9\sñ._-]/gi,
                v = $(this).val();
            if (r.test(v)) {
                $(this).val(v.replace(r, ''));
                c--;
            }
            this.setSelectionRange(c, c);
        });

        $('#rec-button').on('click', function(e) {
            e.preventDefault();
            $('#error_rec, #success_rec, #error_correo, #error_usuario, #error_contrasena, #error_confirmacion').hide();

            const email = $('#form-email').val().trim();
            const usuario = $('#form-usuario').val().trim();
            const pass = $('#form-contrasena').val();
            const confirmPass = $('#form-confirmacion').val();
            let valido = true;

            if (!email) { $('#error_correo').show(); valido = false; }
            if (!usuario) { $('#error_usuario').show(); valido = false; }
            if (!pass) { $('#error_contrasena').show(); valido = false; }
            if (pass !== confirmPass) { $('#error_confirmacion').show(); valido = false; }
            if (!valido) return;

            const $btn = $(this);
            $btn.prop('disabled', true);
            $('#btn-text').addClass('d-none');
            $('#btn-spinner').removeClass('d-none');

            $.ajax({
                url: $('#recoverForm').attr('action'),
                type: 'POST',
                data: $('#recoverForm').serialize(),
                success: function(response) {
                    $('#success_rec').show().html('<i class="bi bi-check-circle-fill me-1"></i> ' + (response.message || '¡Cambiaste tu contraseña exitosamente!'));
                    $('#recoverForm')[0].reset();
                    $btn.prop('disabled', false);
                    $('#btn-text').removeClass('d-none');
                    $('#btn-spinner').addClass('d-none');
                },
                error: function(xhr) {
                    $btn.prop('disabled', false);
                    $('#btn-text').removeClass('d-none');
                    $('#btn-spinner').addClass('d-none');

                    if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
                        let errors = xhr.responseJSON.errors;
                        let errorMsg = '<ul class="mb-0 ps-3">';
                        $.each(errors, function(key, value) {
                            errorMsg += '<li>' + value[0] + '</li>';
                        });
                        errorMsg += '</ul>';
                        $('#error_rec').show().html(errorMsg);
                    } else if (xhr.status === 409) {
                        $('#error_rec').show().html('<i class="bi bi-exclamation-triangle-fill me-1"></i> El usuario o correo no existen, favor de modificarlos.');
                    } else {
                        $('#error_rec').show().html('<i class="bi bi-x-circle-fill me-1"></i> Ocurrió un error al cambiar la contraseña. Inténtalo de nuevo.');
                    }
                }
            });
        });
    </script>
</body>
</html>
