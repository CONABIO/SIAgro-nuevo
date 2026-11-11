<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de uso interno | SIAgroBD</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --brand-green-dark: #0f2e23;
            --brand-green-base: #1b4d3e;
            --brand-green-light: #2b7a63;
            --brand-gold: #c59b27;
            --surface-bg: #eef2ea;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--surface-bg);
            background-image:
                radial-gradient(at 0% 0%, rgba(27, 77, 62, 0.12) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(197, 155, 39, 0.08) 0px, transparent 50%);
            min-height: 100vh;
            color: #1e293b;
            display: flex;
            flex-direction: column;
        }

        /* Nav superior elegante */
        .header-siagro-dark {
            background-color: #111518;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 12px 0;
        }

        .logo-siagro {
            height: 48px;
            object-fit: contain;
            transition: transform 0.2s ease;
        }
        .logo-siagro:hover {
            transform: scale(1.02);
        }

        .btn-nav-portal {
            color: #cbd5e1;
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 18px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            transition: all 0.2s ease;
        }
        .btn-nav-portal:hover {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.25);
        }

        .main-wrapper {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px 70px;
        }

        .split-card {
            background: #ffffff;
            border-radius: 28px;
            box-shadow: 0 25px 60px -15px rgba(15, 46, 35, 0.2), 0 0 1px 1px rgba(0,0,0,0.03);
            border: 1px solid rgba(255, 255, 255, 0.9);
            overflow: hidden;
            width: 100%;
            max-width: {{ $autorizado ? '1080px' : '960px' }};
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        @media (min-width: 992px) {
            .split-card {
                flex-direction: row;
                min-height: {{ $autorizado ? '680px' : '560px' }};
            }
        }

        .side-hero {
            background: linear-gradient(145deg, var(--brand-green-dark) 0%, var(--brand-green-base) 100%);
            color: #ffffff;
            padding: 48px 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        @media (min-width: 992px) {
            .side-hero {
                width: {{ $autorizado ? '38%' : '45%' }};
            }
        }

        .side-hero::before {
            content: "";
            position: absolute;
            top: -60px;
            right: -60px;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(197, 155, 39, 0.25) 0%, transparent 70%);
            pointer-events: none;
        }

        .side-hero::after {
            content: "";
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(43, 122, 99, 0.35) 0%, transparent 70%);
            pointer-events: none;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #d1fae5;
            font-size: 0.78rem;
            font-weight: 700;
            padding: 6px 14px;
            border-radius: 30px;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            width: fit-content;
        }

        .hero-title {
            font-size: 1.85rem;
            font-weight: 800;
            line-height: 1.25;
            letter-spacing: -0.02em;
            margin: 20px 0 12px;
        }

        .hero-desc {
            color: rgba(255, 255, 255, 0.82);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 24px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 14px;
            font-size: 0.88rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
        }
        .feature-icon {
            width: 32px;
            height: 32px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            color: #a7f3d0;
            flex-shrink: 0;
        }

        .hero-footer {
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            padding-top: 20px;
            font-size: 0.78rem;
            color: rgba(255, 255, 255, 0.65);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .side-form {
            padding: 48px 44px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #ffffff;
            flex: 1;
        }

        @media (max-width: 576px) {
            .side-form {
                padding: 32px 24px;
            }
        }

        .form-header-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #f1f5f3;
            color: var(--brand-green-base);
            font-size: 0.8rem;
            font-weight: 700;
            padding: 5px 12px;
            border-radius: 20px;
            margin-bottom: 10px;
            width: fit-content;
        }
        .status-dot-active {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);
        }

        .form-main-title {
            font-size: 1.65rem;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.025em;
            margin-bottom: 6px;
        }

        .form-main-desc {
            font-size: 0.92rem;
            color: #64748b;
            margin-bottom: 28px;
            line-height: 1.5;
        }

        .form-label {
            font-size: 0.82rem;
            font-weight: 700;
            color: #334155;
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.03em;
        }

        .input-box {
            position: relative;
        }
        .input-box .icon-left {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1.15rem;
            pointer-events: none;
            transition: color 0.2s ease;
        }
        .input-box .form-control {
            padding-left: 48px;
            padding-right: 48px;
        }
        .input-box .form-control:focus ~ .icon-left {
            color: var(--brand-green-base);
        }

        .btn-toggle-eye {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #94a3b8;
            padding: 6px 10px;
            cursor: pointer;
            font-size: 1.1rem;
            transition: color 0.2s ease;
        }
        .btn-toggle-eye:hover {
            color: var(--brand-green-base);
        }

        .form-control, .form-select {
            border: 1.5px solid #e2e8f0;
            border-radius: 14px;
            padding: 13px 18px;
            font-size: 0.95rem;
            font-weight: 500;
            color: #0f172a;
            background-color: #fafbfc;
            transition: all 0.2s ease;
        }
        .form-control:focus, .form-select:focus {
            background-color: #ffffff;
            border-color: var(--brand-green-base);
            box-shadow: 0 0 0 4px rgba(27, 77, 62, 0.12);
        }

        .btn-submit-action {
            background: linear-gradient(135deg, var(--brand-green-base) 0%, var(--brand-green-light) 100%);
            color: #ffffff;
            border: none;
            border-radius: 14px;
            padding: 15px 24px;
            font-weight: 700;
            font-size: 1rem;
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            box-shadow: 0 6px 20px rgba(27, 77, 62, 0.28);
        }
        .btn-submit-action:hover {
            background: linear-gradient(135deg, var(--brand-green-dark) 0%, var(--brand-green-base) 100%);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(27, 77, 62, 0.35);
        }
        .btn-submit-action:active {
            transform: translateY(0);
        }

        .session-info-strip {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 14px 18px;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .section-separator-title {
            font-size: 0.78rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--brand-green-base);
            margin-bottom: 12px;
            display: block;
            border-bottom: 2px solid #f1f5f3;
            padding-bottom: 6px;
        }
    </style>
</head>
<body>
    <header class="header-siagro-dark">
        <div class="container-fluid px-4 d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-3">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/dest.png') }}"
                         onerror="this.onerror=null; this.src='{{ asset('images/siagro-favicon.png') }}';"
                         alt="SIAgroBD"
                         class="logo-siagro">
                </a>
                <span class="badge bg-secondary bg-opacity-25 text-light d-none d-sm-inline-block px-3 py-2 rounded-pill">
                    <i class="bi bi-layers-fill text-warning me-1"></i> Colectas GEF
                </span>
            </div>
            <a href="{{ url('/') }}" class="btn-nav-portal">
                <i class="bi bi-house-door-fill"></i>
                <span>Volver al portal principal</span>
            </a>
        </div>
    </header>

    <main class="main-wrapper">
        <div class="split-card">
            <div class="side-hero">
                <div>
                    <h2 class="hero-title">
                        {{ $autorizado ? 'Registro de Nuevos Usuarios' : 'Proyecto GEF Colectas' }}
                    </h2>

                    <p class="hero-desc">
                        {{ $autorizado
                            ? 'Has iniciado sesión como personal autorizado. Ahora puedes registrar nuevos investigadores o técnicos en la plataforma.'
                            : 'Inicia sesión para poder registrar a un nuevo usuario en la base de datos Colectas GEF interna.' }}
                    </p>
                </div>

                <div class="hero-footer">
                    <i class="bi bi-check-circle-fill text-warning"></i>
                    <span>Comisión Nacional para el Conocimiento y Uso de la Biodiversidad</span>
                </div>
            </div>

            <div class="side-form">
                @if(session('error_login'))
                    <div class="alert alert-danger d-flex align-items-center rounded-3 mb-4" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2 fs-5"></i>
                        <div>{{ session('error_login') }}</div>
                    </div>
                @endif

                @if(session('exito'))
                    <div class="alert alert-success d-flex align-items-center rounded-3 mb-4" role="alert">
                        <i class="bi bi-check-circle-fill me-2 fs-5"></i>
                        <div>{{ session('exito') }}</div>
                    </div>
                @endif
                @if(!$autorizado)
                    <div>
                        <h3 class="form-main-title">Identifícate para continuar</h3>
                        <p class="form-main-desc">
                            Ingresa tus credenciales autorizadas para habilitar el registro de un nuevo usuario en la base de Colectas GEF.
                        </p>
                    </div>

                    <form action="{{ route('registro.interno.verificar') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="form-usuario">Usuario Autorizado</label>
                            <div class="input-box">
                                <input type="text" name="form-usuario" id="form-usuario" class="form-control" required placeholder="Tu nombre de usuario">
                                <i class="bi bi-person-fill icon-left"></i>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="form-contrasena">Contraseña</label>
                            <div class="input-box">
                                <input type="password" name="form-contrasena" id="form-contrasena" class="form-control" required placeholder="••••••••••••">
                                <i class="bi bi-lock-fill icon-left"></i>
                                <button type="button" class="btn-toggle-eye" onclick="togglePassword('form-contrasena', this)">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>

                        <button type="submit" class="btn-submit-action">
                            <span>Ingresar al Formulario</span>
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </form>
                @else
                    <div>
                        <div class="session-info-strip">
                            <div>
                                <span class="text-muted small d-block">Sesión activa de administrador:</span>
                                <strong class="text-dark">
                                    <i class="bi bi-check-circle-fill text-success me-1"></i>
                                    {{ $autorizado['nombre_completo'] }}
                                </strong>
                            </div>
                            <a href="{{ route('registro.interno.salir') }}" class="btn btn-sm btn-outline-danger px-3 py-1 rounded-pill fw-semibold">
                                Cerrar sesión
                            </a>
                        </div>

                        <h3 class="form-main-title">Alta de Nuevo Usuario</h3>
                        <p class="form-main-desc">Completa los datos del nuevo usuario para darle acceso al proyecto.</p>
                    </div>

                    <form action="{{ route('registro.interno.guardar') }}" method="POST">
                        @csrf

                        <span class="section-separator-title">1. Datos Personales</span>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nombre(s) *</label>
                                <div class="input-box">
                                    <input type="text" name="nombre" class="form-control" required placeholder="Ej. Juan">
                                    <i class="bi bi-person icon-left"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Apellidos *</label>
                                <div class="input-box">
                                    <input type="text" name="apellidos" class="form-control" required placeholder="Ej. Pérez Gómez">
                                    <i class="bi bi-person icon-left"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Correo Institucional *</label>
                                <div class="input-box">
                                    <input type="email" name="correo" class="form-control" required placeholder="correo@institucion.gob.mx">
                                    <i class="bi bi-envelope icon-left"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Institución</label>
                                <div class="input-box">
                                    <input type="text" name="institucion" class="form-control" placeholder="Ej. CONABIO / INIFAP">
                                    <i class="bi bi-building icon-left"></i>
                                </div>
                            </div>
                        </div>

                        <span class="section-separator-title">2. Credenciales de la Cuenta</span>
                        <div class="mb-3">
                            <label class="form-label">Nombre de Usuario (Username) *</label>
                            <div class="input-box">
                                <input type="text" name="usuario" class="form-control" required placeholder="Sin espacios ni acentos">
                                <i class="bi bi-person-badge icon-left"></i>
                            </div>
                        </div>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Contraseña *</label>
                                <div class="input-box">
                                    <input type="password" name="contrasena" id="reg-pass" class="form-control" required placeholder="Mínimo 6 caracteres">
                                    <i class="bi bi-key icon-left"></i>
                                    <button type="button" class="btn-toggle-eye" onclick="togglePassword('reg-pass', this)">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Confirmar Contraseña *</label>
                                <div class="input-box">
                                    <input type="password" name="contrasena_confirmation" id="reg-pass-conf" class="form-control" required placeholder="Repite la contraseña">
                                    <i class="bi bi-shield-lock icon-left"></i>
                                    <button type="button" class="btn-toggle-eye" onclick="togglePassword('reg-pass-conf', this)">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <span class="section-separator-title">3. Ubicación y Motivo</span>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">País *</label>
                                <select name="pais" class="form-select" required>
                                    <option value="México" selected>México</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Estado</label>
                                <select name="estado" class="form-select">
                                    <option value="" selected disabled>Selecciona un estado...</option>
                                    @php
                                        $estados = ['Aguascalientes','Baja California','Baja California Sur','Campeche','Chiapas','Chihuahua','Ciudad de México','Coahuila','Colima','Durango','Estado de México','Guanajuato','Guerrero','Hidalgo','Jalisco','Michoacán','Morelos','Nayarit','Nuevo León','Oaxaca','Puebla','Querétaro','Quintana Roo','San Luis Potosí','Sinaloa','Sonora','Tabasco','Tamaulipas','Tlaxcala','Veracruz','Yucatán','Zacatecas'];
                                    @endphp
                                    @foreach($estados as $est)
                                        <option value="{{ $est }}">{{ $est }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Motivo de Uso *</label>
                            <select name="uso" class="form-select" required>
                                <option value="" selected disabled>Selecciona el motivo de consulta...</option>
                                <option value="academico_investigacion">Uso académico para estudios, investigaciones o tesis</option>
                                <option value="educativo_demostrativo">Uso educativo y demostrativo</option>
                                <option value="politicas_publicas">Explorar información para toma de decisiones o políticas públicas</option>
                            </select>
                        </div>

                        <button type="submit" class="btn-submit-action">
                            <i class="bi bi-person-check-fill fs-5"></i>
                            <span>Registrar Usuario en Colectas GEF</span>
                        </button>
                    </form>
                @endif

            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword(inputId, btn) {
            const input = document.getElementById(inputId);
            const icon = btn.querySelector('i');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        }
    </script>
</body>
</html>
