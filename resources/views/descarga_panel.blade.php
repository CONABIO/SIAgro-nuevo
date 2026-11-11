<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Descarga | Colectas GEF</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f6f8fa;
            color: #1e293b;
        }

        .header-siagro-dark {
            background-color: #13171a;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 12px 0;
        }
        .logo-siagro { height: 46px; }

        .banner-user {
            background: linear-gradient(135deg, #1b4d3e 0%, #2b7a63 100%);
            color: #fff;
            border-radius: 20px;
            padding: 24px 30px;
            margin-bottom: 28px;
            box-shadow: 0 10px 25px rgba(27, 77, 62, 0.15);
        }

        .category-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            padding: 22px;
            margin-bottom: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
        }

        .category-title {
            font-weight: 800;
            font-size: 1.15rem;
            color: #1b4d3e;
            border-bottom: 2px solid #f1f5f3;
            padding-bottom: 8px;
            margin-bottom: 14px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .checkbox-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 10px;
            max-height: 280px;
            overflow-y: auto;
            padding: 6px;
        }

        .btn-select-all {
            font-size: 0.78rem;
            padding: 4px 10px;
            border-radius: 8px;
            font-weight: 600;
        }

        .btn-download-big {
            background: linear-gradient(135deg, #1b4d3e 0%, #286d5a 100%);
            color: #fff;
            border: none;
            border-radius: 14px;
            padding: 16px 36px;
            font-size: 1.1rem;
            font-weight: 800;
            box-shadow: 0 8px 25px rgba(27, 77, 62, 0.3);
            transition: all 0.2s ease;
        }
        .btn-download-big:hover {
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(27, 77, 62, 0.4);
        }
    </style>
</head>
<body>

    <header class="header-siagro-dark mb-4">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/dest.png') }}" onerror="this.onerror=null; this.src='{{ asset('images/siagro-favicon.png') }}';" alt="SIAgroBD" class="logo-siagro">
            </a>
            <a href="{{ route('colectas.descargas.salir') }}" class="btn btn-sm btn-outline-danger px-3 py-2 rounded-pill fw-semibold">
                <i class="bi bi-box-arrow-right me-1"></i> Cerrar sesión
            </a>
        </div>
    </header>

    <div class="container pb-5">
        @if(session('error'))
            <div class="alert alert-warning rounded-3 mb-4">{{ session('error') }}</div>
        @endif
        <div class="banner-user d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
            <div>
                <h4 class="fw-bold mb-1"><i class="bi bi-database-check me-2"></i>Descarga Colectas GEF Interna</h4>
                <p class="mb-0 text-white-50 small">Usuario activo: <strong>{{ $usuario['nombre'] }}</strong> ({{ $usuario['correo'] }}) &bull; Vigencia hasta: {{ $usuario['expiracion'] }}</p>
            </div>
            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold">
                <i class="bi bi-shield-lock-fill me-1"></i> Datos sin oscurecimiento
            </span>
        </div>
        <form action="{{ route('colectas.descargas.exportar') }}" method="POST">
            @csrf
            <div class="category-card">
                <h5 class="fw-bold mb-3"><i class="bi bi-funnel-fill text-success me-2"></i>Filtros de Búsqueda</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-muted">ESTADO</label>
                        <select name="estado" class="form-select">
                            <option value="Todos" selected>Todos los estados</option>
                            @php
                                $estados = ['Aguascalientes','Baja California','Baja California Sur','Campeche','Chiapas','Chihuahua','Ciudad de México','Coahuila de Zaragoza','Durango','México','Guerrero','Hidalgo','Jalisco','Morelos','Nuevo León','Oaxaca','Puebla','Querétaro','San Luis Potosí','Sinaloa','Sonora','Tabasco','Tamaulipas','Tlaxcala','Veracruz de Ignacio de la Llave','Yucatán','Zacatecas'];
                            @endphp
                            @foreach($estados as $e)
                                <option value="{{ $e }}">{{ $e }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold small text-muted">PROYECTO</label>
                        <select name="proyecto" class="form-select">
                            <option value="todos" selected>Todos los proyectos</option>
                            <option value="RG001">RG001 - Mixteca Alta, Oaxaca</option>
                            <option value="RG002">RG002 - Physalis al norte del Trópico</option>
                            <option value="RG019">RG019 - Agaves</option>
                            <option value="RG025">RG025 - Agrobiodiversidad Durango</option>
                            <option value="RG034">RG034 - Amaranthus</option>
                            <option value="SG002">SG002 - Suelo conservación CDMX</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="category-card">
                <div class="category-title">
                    <span><i class="bi bi-card-checklist me-2"></i>Campos de Registro</span>
                    <div>
                        <button type="button" class="btn btn-sm btn-outline-success btn-select-all" onclick="toggleCategory('registros', true)">Todos</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-select-all" onclick="toggleCategory('registros', false)">Ninguno</button>
                    </div>
                </div>
                <div class="checkbox-grid" id="group-registros">
                    @php
                        $camposRegistro = [
                            'registro_id' => 'ID de registro',
                            'ProcedenciaDatos' => 'Procedencia de datos',
                            'FechaColectaObservacion' => 'Fecha de colecta',
                            'NumeroColectaObservacion' => 'Número de colecta',
                            'TipoVegetacion' => 'Tipo de vegetación',
                            'Habitat' => 'Hábitat',
                            'ColectorObservador' => 'Colector u observador',
                            'Determinador' => 'Determinador',
                            'NombreComun' => 'Nombre común',
                            'EstatusEcologico' => 'Estatus ecológico',
                            'TipoManejo' => 'Tipo de manejo',
                            'TipoAgroecosistema' => 'Tipo de agroecosistema',
                            'DonanteInformante' => 'Donante / Informante',
                            'NombreDonanteInformante' => 'Nombre donante informante',
                            'TenenciaTierra' => 'Tenencia de tierra',
                            'Uso' => 'Uso',
                            'InformacionRestringida' => 'Información restringida'
                        ];
                    @endphp
                    @foreach($camposRegistro as $val => $label)
                        <div class="form-check">
                            <input class="form-check-input check-registros" type="checkbox" name="campos[]" value="{{ $val }}" id="chk_{{ $val }}" checked>
                            <label class="form-check-label small" for="chk_{{ $val }}">{{ $label }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="category-card">
                <div class="category-title">
                    <span><i class="bi bi-geo-alt-fill me-2"></i>Campos de Sitio (Ubicación Geográfica)</span>
                    <div>
                        <button type="button" class="btn btn-sm btn-outline-success btn-select-all" onclick="toggleCategory('sitios', true)">Todos</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-select-all" onclick="toggleCategory('sitios', false)">Ninguno</button>
                    </div>
                </div>
                <div class="checkbox-grid" id="group-sitios">
                    @php
                        $camposSitio = [
                            'sitio_id' => 'Sitio ID',
                            'Pais' => 'País',
                            'Estado' => 'Estado',
                            'Municipio' => 'Municipio',
                            'Localidad' => 'Localidad',
                            'Latitud' => 'Latitud precisa',
                            'Longitud' => 'Longitud precisa',
                            'Altitud' => 'Altitud',
                            'Datum' => 'Datum'
                        ];
                    @endphp
                    @foreach($camposSitio as $val => $label)
                        <div class="form-check">
                            <input class="form-check-input check-sitios" type="checkbox" name="campos[]" value="{{ $val }}" id="chk_{{ $val }}" checked>
                            <label class="form-check-label small" for="chk_{{ $val }}">{{ $label }}</label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn-download-big">
                    <i class="bi bi-download me-2"></i> Descargar Datos en CSV
                </button>
            </div>
        </form>
    </div>

    <script>
        function toggleCategory(category, check) {
            document.querySelectorAll('.check-' + category).forEach(cb => cb.checked = check);
        }
    </script>
</body>
</html>
