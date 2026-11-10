<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Descarga: Grupos de Enfoque | SIAgroBD</title>
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('images/siagro-favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <style>
        .filter-card-box {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 22px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.02);
        }
        .filter-card-header {
            color: #B14D0B;
            font-size: 1.15rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
            border-bottom: 1.5px solid #f3f4f6;
            padding-bottom: 8px;
        }
        .fields-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 8px 16px;
        }
        .field-checkbox-item {
            font-size: 0.88rem;
            color: #374151;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            padding: 4px 0;
        }
        .field-checkbox-item input {
            accent-color: #12322b;
            width: 17px;
            height: 17px;
        }
        .btn-toggle-all {
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            padding: 4px 10px;
            border-radius: 6px;
        }
    </style>
</head>
<body style="background-color: #f8faf8;">
    <x-navbar />
    <main class="container content-container py-4">
        <div class="mediateca-hero mb-4">
            <a href="{{ route('bases.datos') }}" class="btn-back">
                <i class="bi bi-arrow-left"></i> Volver a Bases de Datos
            </a>
            <h1 class="fw-bold mb-2 display-6" style="color: #5a5e48;">Grupos de Enfoque</h1>
            <h3 class="fs-6 fw-bold text-muted mb-3">Selecciona los filtros y campos deseados para poder descargar datos</h3>
            <p class="small text-muted mb-1">
                Para más detalles de los grupos de enfoque consulta <a href="https://siagro.conabio.gob.mx/focales/download/Detalles_tecnicos.pdf" target="_blank" class="fw-bold text-success">esta documentación</a>.
                La descripción de cada campo se puede consultar en el <a href="https://siagro.conabio.gob.mx/focales/download/Diccionario_datos.pdf" target="_blank" class="fw-bold text-success">diccionario de datos</a>.
            </p>
            <p class="small text-muted mb-0">
                Consulta la forma de citar esta base de datos en el menú <a href="{{ route('forma_citar') }}" target="_blank" class="fw-bold text-success">"Forma de citar"</a>.
            </p>
        </div>
        <form id="formFocales" action="{{ route('descargas.exportar', 'focales') }}" method="GET">
            <div class="filter-card-box">
                <h5 class="fw-bold mb-3" style="color: #12322b;"><i class="bi bi-geo-alt-fill me-2"></i>Filtros Geográficos</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small fw-bold">Elige el estado que deseas descargar:</label>
                        <select name="estado" id="estado" class="form-select" onchange="updateMunicipios()">
                            <option value="todos" selected>Todos los estados</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Yucatán">Yucatán</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label small fw-bold">Elige el municipio:</label>
                        <select name="municipio" id="municipio" class="form-select">
                            <option value="todos" selected>Todos los municipios</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="filter-card-box">
                <div class="filter-card-header">
                    <span>Grupos de enfoque</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('grupo_enfoques', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('grupo_enfoques', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="grupo_enfoques" value="grupo_id"> Grupo de enfoque ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="grupo_enfoques" value="tipo_grupo"> Tipo de grupo Hombres/Mujeres</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="grupo_enfoques" value="numero_participantes"> Número de participantes</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="grupo_enfoques" value="fecha"> Fecha</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="grupo_enfoques" value="lista_especies"> Lista de especies</label>
                </div>
            </div>
            <div class="filter-card-box">
                <div class="filter-card-header">
                    <span>Sitio</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('sitios', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('sitios', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="sitio_id"> Sitio ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="pais"> País</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="estado"> Estado</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="clave_estado"> Clave estado</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="municipio"> Municipio</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="clave_municipio"> Clave municipio</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="localidad"> Localidad</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="clave_localidad"> Clave localidad</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="latitud"> Latitud</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="longitud"> Longitud</label>
                </div>
            </div>

            <div class="filter-card-box">
                <div class="filter-card-header">
                    <span>Cuadrante</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('cuadrantes', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('cuadrantes', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="cuadrantes" value="cuadrante_id"> Cuadrante ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="cuadrantes" value="produccion_valor"> Valor de producción</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="cuadrantes" value="produccion_etiqueta"> Etiqueta de producción</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="cuadrantes" value="autoconsumo_valor"> Valor de autoconsumo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="cuadrantes" value="autoconsumo_etiqueta"> Etiqueta de autoconsumo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="cuadrantes" value="compra_valor"> Valor de compra</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="cuadrantes" value="compra_etiqueta"> Etiqueta de compra</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="cuadrantes" value="venta_valor"> Valor de venta</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="cuadrantes" value="venta_etiqueta"> Etiqueta de venta</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="cuadrantes" value="nombre_comun_grupo_enfoque"> Nombre común grupo enfoque</label>
                </div>
            </div>
            <div class="filter-card-box">
                <div class="filter-card-header">
                    <span>Tipo de planta</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('tipo_planta', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('tipo_planta', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="tipo_planta" value="tipo_planta_id"> Tipo de planta ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="tipo_planta" value="tipo_planta"> Tipo de planta</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="tipo_planta" value="justificacion_produccion_cuadrante1"> Justificación producción cuadrante 1</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="tipo_planta" value="justificacion_produccion_cuadrante2"> Justificación producción cuadrante 2</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="tipo_planta" value="justificacion_produccion_cuadrante3"> Justificación producción cuadrante 3</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="tipo_planta" value="justificacion_produccion_cuadrante4"> Justificación producción cuadrante 4</label>
                </div>
            </div>
            <div class="filter-card-box">
                <div class="filter-card-header">
                    <span>Taxón</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('taxon', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('taxon', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="taxon" value="taxon_id"> Taxón ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxon" value="taxon"> Taxón</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxon" value="categoria"> Categoría</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxon" value="estatus"> Estatus</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxon" value="fuente"> Fuente</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxon" value="nombre_autoridad"> Nombre autoridad</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxon" value="cites"> Cites</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxon" value="iucn"> IUCN</label>
                </div>
            </div>
            <input type="hidden" name="headerCsv" id="headerCsvInput">
            <div class="text-center my-5">
                <button type="button" class="btn btn-lg px-5 py-3 text-white fw-bold shadow-sm" style="background-color: #28a745; border-radius: 12px;" onclick="ejecutarDescargaFocales()">
                    <i class="bi bi-cloud-arrow-down-fill me-2 fs-5"></i> Descargar datos seleccionados
                </button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const municipiosPorEstado = {
            "Chiapas": ["Chamula", "Huitiupán", "San Cristóbal de las Casas", "Zinacantán", "Tenejapa", "Ocosingo"],
            "Chihuahua": ["Balleza", "Batopilas", "Bocoyna", "Guachochi", "Guadalupe y Calvo", "Urique"],
            "Michoacán de Ocampo": ["Charapan", "Cherán", "Nahuatzen", "Paracho", "Tingambato", "Uruapan"],
            "Oaxaca": ["Ixtlán de Juárez", "San Pablo Macuiltianguis", "Santa Catarina Lachatao", "Capulálpam de Méndez"],
            "Yucatán": ["Muna", "Santa Elena", "Ticul", "Oxkutzcab", "Tekax"]
        };

        function updateMunicipios() {
            const estado = document.getElementById("estado").value;
            const munSelect = document.getElementById("municipio");
            munSelect.innerHTML = '<option value="todos" selected>Todos los municipios</option>';

            if (municipiosPorEstado[estado]) {
                municipiosPorEstado[estado].forEach(mun => {
                    const opt = document.createElement("option");
                    opt.value = mun;
                    opt.textContent = mun;
                    munSelect.appendChild(opt);
                });
            }
        }

        function toggleGroup(nombreGrupo, estado) {
            document.querySelectorAll(`input[name="${nombreGrupo}"]`).forEach(cb => cb.checked = estado);
        }

        function ejecutarDescargaFocales() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            const seleccionados = Array.from(checkboxes).map(cb => cb.value);

            if (seleccionados.length === 0) {
                alert("Selecciona al menos una opción en los recuadros para poder descargar datos.");
                return;
            }

            document.getElementById('headerCsvInput').value = seleccionados.join(',');
            document.getElementById('formFocales').submit();
        }
    </script>
</body>
</html>
