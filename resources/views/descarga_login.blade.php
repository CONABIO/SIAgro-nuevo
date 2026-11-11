<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Descarga de datos | Colectas GEF</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: linear-gradient(135deg, #d8e2c3 0%, #e8ede0 50%, #dce4cb 100%);
            min-height: 100vh;
            color: #1a202c;
            display: flex;
            flex-direction: column;
        }

        .header-siagro-dark {
            background-color: #13171a;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 12px 0;
        }

        .logo-siagro { height: 48px; object-fit: contain; }

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
        }
        .btn-nav-portal:hover { color: #fff; background: rgba(255, 255, 255, 0.15); }

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
            box-shadow: 0 25px 60px -15px rgba(15, 46, 35, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.9);
            overflow: hidden;
            width: 100%;
            max-width: 960px;
            display: flex;
            flex-direction: column;
        }

        @media (min-width: 992px) {
            .split-card { flex-direction: row; min-height: 560px; }
            .side-hero { width: 45%; }
            .side-form { width: 55%; }
        }

        .side-hero {
            background: linear-gradient(145deg, #0f2e23 0%, #1b4d3e 100%);
            color: #ffffff;
            padding: 48px 40px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
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
            text-transform: uppercase;
        }

        .hero-title {
            font-size: 1.85rem;
            font-weight: 800;
            line-height: 1.25;
            margin: 20px 0 12px;
        }

        .hero-desc { color: rgba(255, 255, 255, 0.82); font-size: 0.95rem; line-height: 1.6; }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 14px;
            font-size: 0.88rem;
            color: rgba(255, 255, 255, 0.9);
        }
        .feature-icon {
            width: 32px;
            height: 32px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a7f3d0;
            flex-shrink: 0;
        }

        .hero-footer {
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            padding-top: 20px;
            font-size: 0.78rem;
            color: rgba(255, 255, 255, 0.65);
        }

        .side-form { padding: 48px 44px; display: flex; flex-direction: column; justify-content: center; }

        .form-header-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #f1f5f3;
            color: #1b4d3e;
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

        .form-main-title { font-size: 1.65rem; font-weight: 800; color: #0f172a; margin-bottom: 6px; }
        .form-main-desc { font-size: 0.92rem; color: #64748b; margin-bottom: 28px; }

        .form-label {
            font-size: 0.82rem;
            font-weight: 700;
            color: #334155;
            margin-bottom: 6px;
            text-transform: uppercase;
        }

        .input-box { position: relative; }
        .input-box .icon-left {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1.15rem;
        }
        .input-box .form-control { padding-left: 48px; padding-right: 48px; }

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
        }

        .form-control {
            border: 1.5px solid #e2e8f0;
            border-radius: 14px;
            padding: 13px 18px;
            background-color: #fafbfc;
        }
        .form-control:focus {
            background-color: #fff;
            border-color: #1b4d3e;
            box-shadow: 0 0 0 4px rgba(27, 77, 62, 0.12);
        }

        .btn-submit-action {
            background: linear-gradient(135deg, #1b4d3e 0%, #2b7a63 100%);
            color: #fff;
            border: none;
            border-radius: 14px;
            padding: 15px 24px;
            font-weight: 700;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            box-shadow: 0 6px 20px rgba(27, 77, 62, 0.28);
        }
        .btn-submit-action:hover {
            background: linear-gradient(135deg, #0f2e23 0%, #1b4d3e 100%);
            color: #fff;
            transform: translateY(-2px);
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
                    <i class="bi bi-cloud-arrow-down-fill text-info me-1"></i> Colectas GEF
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
                    <h2 class="hero-title">Colectas GEF - Datos Completos</h2>
                    <p class="hero-desc">Inicia sesión para poder descargar datos de la base Colectas GEF interna.</p>
                </div>
            </div>

            <div class="side-form">
                @if(session('error_login'))
                    <div class="alert alert-danger d-flex align-items-center rounded-3 mb-4 shadow-sm" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2 fs-5"></i>
                        <div>{{ session('error_login') }}</div>
                    </div>
                @endif

                <div>
                    <h3 class="form-main-title">Inicia Sesión</h3>
                    <p class="form-main-desc">
                        Ingresa con tu usuario y contraseña de Colectas GEF Interna para acceder al descargador.
                    </p>
                </div>

                <form action="{{ route('colectas.descargas.verificar') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="form-usuario">Usuario</label>
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
                        <span>Ingresar a Descargas</span>
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </form>
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
