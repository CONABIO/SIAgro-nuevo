<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Descarga: Canastas Regionales | SIAgroBD</title>
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
            <h1 class="fw-bold mb-2 display-6" style="color: #5a5e48;">Canastas Regionales del Bien Comer</h1>
            <h3 class="fs-6 fw-bold text-muted mb-3">Selecciona los filtros y campos deseados para poder descargar datos</h3>
            <p class="small text-muted mb-1">
                Para más información sobre este proyecto consulta <a href="https://www.biodiversidad.gob.mx/diversidad/alimentos/canastas-regionales" target="_blank" class="fw-bold text-success">esta página</a>.
                La descripción de cada campo se puede consultar en el <a href="https://siagro.conabio.gob.mx/canastas/download/Diccionario_datos.pdf" target="_blank" class="fw-bold text-success">diccionario de datos</a>.
            </p>
            <p class="small text-muted mb-0">
                Consulta la forma de citar esta base de datos en el menú <a href="{{ route('forma_citar') }}" target="_blank" class="fw-bold text-success">"Forma de citar"</a>.
            </p>
        </div>
        <form id="formCanastas" action="{{ route('descargas.exportar', 'canastas') }}" method="GET">
            <div class="filter-card-box">
                <h5 class="fw-bold mb-3" style="color: #12322b;"><i class="bi bi-funnel-fill me-2"></i>Filtros de Canastas</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small fw-bold">Elige el tipo de datos que deseas descargar:</label>
                        <select name="tipo" id="tipo" class="form-select" onchange="showDivsCanastas()">
                            <option value="alimentos" selected>Alimento</option>
                            <option value="recetarios">Recetarios</option>
                            <option value="menus">Menú</option>
                            <option value="frases">Frase</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-bold">Elige el proyecto:</label>
                        <select name="proyecto" id="proy" class="form-select">
                            <option value="todos" selected>Todos los proyectos</option>
                            <option value="1">Proyecto 1 - Estado de México (Dieta Milpa Monte-Traspatio)</option>
                            <option value="2">Proyecto 2 - Chiapas (Batsil we’elil tajlumaltik)</option>
                            <option value="3">Proyecto 3 - Guerrero (Región Montaña)</option>
                            <option value="4">Proyecto 4 - Chihuahua (Sierra Tarahumara)</option>
                            <option value="5">Proyecto 5 - Oaxaca (Valles Centrales)</option>
                            <option value="6">Proyecto 6 - Yucatán (Plato del Bien Comer Yucateco)</option>
                            <option value="7">Proyecto 7 - Michoacán (Pichátaro)</option>
                            <option value="8">Proyecto 8 - Chiapas (Los Altos)</option>
                            <option value="9">Proyecto 9 - Puebla (Cuetzalan)</option>
                            <option value="10">Proyecto 10 - Veracruz (Zongolica)</option>
                            <option value="11">Proyecto 11 - Otomí (Ma'hnini)</option>
                            <option value="12">Proyecto 12 - Campeche (Calakmul)</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="filter-card-box" id="bloqueAlimento">
                <div class="filter-card-header">
                    <span>Alimento</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('alimentos', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('alimentos', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="alimento_id"> Alimento ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="alimento"> Alimento</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="tipo_alimento"> Tipo alimento</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="origen"> Origen</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="nombre_local"> Nombre local</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="fao"> FAO</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="nom043"> NOM-043</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="dieta_milpa"> Dieta milpa</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="actividad_origen"> Actividad origen</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="ingredientes"> Ingredientes</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="ingredientes_ids"> Ingredientes IDs</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="instrucciones_preparacion"> Instrucciones preparación</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="observaciones_alimento"> Observaciones alimento</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="referencias_alimento"> Referencias alimento</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="alimentos" value="link_referencias_alimento"> Link referencias alimento</label>
                </div>
            </div>
            <div class="filter-card-box" id="bloqueUso">
                <div class="filter-card-header">
                    <span>Uso, consumo y tradiciones</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('uso_consumo_tradiciones', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('uso_consumo_tradiciones', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="uso_id"> Uso ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="parte_utilizada"> Parte utilizada</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="forma_consumo"> Forma de consumo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="frecuencia_consumo"> Frecuencia de consumo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="mes_consumo"> Mes de consumo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="fecha_consumo"> Fecha de consumo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="motivos_consumo"> Motivos de consumo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="temporalidad"> Temporalidad</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="riesgo"> Riesgo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="razones_riesgo"> Razones de riesgo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="mitos"> Mitos</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="historias"> Historias</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="preparacion"> Preparación</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="adaptaciones"> Adaptaciones</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="instrumentos_obtencion"> Instrumentos de obtención</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="uso_consumo_tradiciones" value="instrumentos_preparacion"> Instrumentos de preparación</label>
                </div>
            </div>
            <div class="filter-card-box" id="bloqueTaxon">
                <div class="filter-card-header">
                    <span>Taxón</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('taxons', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('taxons', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="taxon_id"> Taxón ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="taxon"> Taxón</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="categoria"> Categoría</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="estatus"> Estatus</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="fuente"> Fuente</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="nombre_autoridad"> Nombre autoridad</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="cites"> Cites</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="iucn"> IUCN</label>
                </div>
            </div>
            <div class="filter-card-box" id="bloqueProyecto">
                <div class="filter-card-header">
                    <span>Proyecto</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('proyectos', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('proyectos', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="proyectos" value="proyecto_id"> Proyecto ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="proyectos" value="nombre_proyecto"> Nombre del proyecto</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="proyectos" value="institucion_proyecto"> Institución del proyecto</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="proyectos" value="fecha_inicio"> Fecha de inicio</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="proyectos" value="fecha_fin"> Fecha fin</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="proyectos" value="region"> Región</label>
                </div>
            </div>
            <div class="filter-card-box" id="bloqueCuanti">
                <div class="filter-card-header">
                    <span>Características cuantitativas (Nutrientes)</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('caracteristica_cuantitativas', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('caracteristica_cuantitativas', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    @php
                    $nutrientes = ['Ácido ascórbico','Ácido aspártico','Ácido fólico','Ácido glutámico','Aluminio','Arginina','Boro','Calcio','Carbohidratos','Cenizas','Cobre','Energía','Fenilalanina','Fibra','Folato','Fósforo','Hierro','Hierro no HEM','Histidina','Isoleucina','Leucina','Lípidos','Lisina','Magnesio','Manganeso','Metionina','Potasio','Proteína','Selenio','Sodio','Treonina','Triptófano','Valina','Vitamina A','Vitamina B12 (Cobalamina)','Vitamina B1 (Tiamina)','Vitamina B2 (Riboflavina)','Vitamina B3 (Niacina)','Vitamina B5','Vitamina B6 (Piridoxina)','Vitamina B7 (Biotina)','Vitamina B9','Vitamina C ','Vitamina E','Vitamina K','Yodo','Zinc'];
                    @endphp
                    @foreach($nutrientes as $nutriente)
                    <label class="field-checkbox-item">
                        <input type="checkbox" name="caracteristica_cuantitativas" value="{{ $nutriente }}"> {{ $nutriente }}
                    </label>
                    @endforeach
                </div>
            </div>
            <div class="filter-card-box" id="bloqueRecetario" style="display: none;">
                <div class="filter-card-header">
                    <span>Recetario</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('recetarios', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('recetarios', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="recetarios" value="titulo_recetario"> Título recetario</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="recetarios" value="referencia_recetario"> Referencia recetario</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="recetarios" value="disponibilidad_fisica"> Disponibilidad física</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="recetarios" value="link_recetario"> Link recetario</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="recetarios" value="observaciones_recetario"> Observaciones recetario</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="recetarios" value="proyecto_id"> Id proyecto</label>
                </div>
            </div>
            <div class="filter-card-box" id="bloqueMenu" style="display: none;">
                <div class="filter-card-header">
                    <span>Menú</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('menus', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('menus', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="menus" value="menu_id"> ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="menus" value="tipo_menu"> Tipo menú</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="menus" value="dia_menu"> Día menú</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="menus" value="temporada_menu"> Temporada menú</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="menus" value="festividad_menu"> Festividad menú</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="menus" value="hora_consumo_menu"> Hora de consumo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="menus" value="menu"> Menú</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="menus" value="alimentos_ids"> Alimentos IDs</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="menus" value="observaciones_menu"> Observaciones</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="menus" value="referencia_menu"> Referencia menú</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="menus" value="proyecto_id"> Proyecto ID</label>
                </div>
            </div>
            <div class="filter-card-box" id="bloqueFrase" style="display: none;">
                <div class="filter-card-header">
                    <span>Frase</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('frases', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('frases', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="frases" value="frase"> Frase</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="frases" value="frase_lengua_local"> Frase lengua local</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="frases" value="lengua_local"> Lengua local</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="frases" value="autor_frase"> Autor frase</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="frases" value="observaciones_frase"> Observaciones</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="frases" value="proyecto_id"> Id proyecto</label>
                </div>
            </div>
            <input type="hidden" name="selectedOptions" id="selectedOptionsCanastas">
            <div class="text-center my-5">
                <button type="button" class="btn btn-lg px-5 py-3 text-white fw-bold shadow-sm" style="background-color: #28a745; border-radius: 12px;" onclick="ejecutarDescargaCanastas()">
                    <i class="bi bi-cloud-arrow-down-fill me-2 fs-5"></i> Descargar datos seleccionados
                </button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showDivsCanastas() {
            var tipo = document.getElementById("tipo").value;
            var bAlimento = document.getElementById("bloqueAlimento");
            var bUso = document.getElementById("bloqueUso");
            var bTaxon = document.getElementById("bloqueTaxon");
            var bProyecto = document.getElementById("bloqueProyecto");
            var bCuanti = document.getElementById("bloqueCuanti");
            var bRecetario = document.getElementById("bloqueRecetario");
            var bMenu = document.getElementById("bloqueMenu");
            var bFrase = document.getElementById("bloqueFrase");
            bAlimento.style.display = "none";
            bUso.style.display = "none";
            bTaxon.style.display = "none";
            bProyecto.style.display = "none";
            bCuanti.style.display = "none";
            bRecetario.style.display = "none";
            bMenu.style.display = "none";
            bFrase.style.display = "none";
            if (tipo === "alimentos") {
                bAlimento.style.display = "block";
                bUso.style.display = "block";
                bTaxon.style.display = "block";
                bProyecto.style.display = "block";
                bCuanti.style.display = "block";
            } else if (tipo === "recetarios") {
                bRecetario.style.display = "block";
            } else if (tipo === "menus") {
                bMenu.style.display = "block";
            } else if (tipo === "frases") {
                bFrase.style.display = "block";
            }
        }
        function toggleGroup(nombreGrupo, estado) {
            document.querySelectorAll(`input[name="${nombreGrupo}"]`).forEach(cb => cb.checked = estado);
        }
        function ejecutarDescargaCanastas() {
            var checkboxes = document.querySelectorAll('.filter-card-box:not([style*="display: none"]) input[type="checkbox"]:checked');
            var seleccionados = Array.from(checkboxes).map(cb => cb.value);
            if (seleccionados.length === 0) {
                alert("Selecciona al menos una opción en los recuadros blancos.");
                return;
            }
            document.getElementById('selectedOptionsCanastas').value = seleccionados.join(',');
            document.getElementById('formCanastas').submit();
        }
    </script>
</body>
</html>
