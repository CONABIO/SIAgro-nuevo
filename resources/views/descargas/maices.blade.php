<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Descarga: Proyecto Global de Maíces Nativos | SIAgroBD</title>
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
            <h1 class="fw-bold mb-2 display-6" style="color: #5a5e48;">Proyecto Global de Maíces Nativos</h1>
            <h3 class="fs-6 fw-bold text-muted mb-3">Selecciona los filtros y campos deseados para poder descargar datos</h3>
            <p class="small text-muted mb-1">
                Para más información sobre este proyecto consulta <a href="https://www.biodiversidad.gob.mx/diversidad/proyectoMaices" target="_blank" class="fw-bold text-success">esta página</a>.
                La descripción de cada campo se puede consultar en el <a href="https://siagro.conabio.gob.mx/maices/download/Diccionario_datos.pdf" target="_blank" class="fw-bold text-success">diccionario de datos</a>.
            </p>
            <p class="small text-muted mb-0">
                Consulta la forma de citar esta base de datos en el menú <a href="{{ route('forma_citar') }}" target="_blank" class="fw-bold text-success">"Forma de citar"</a> del SIAgroBD.
            </p>
            <p class="small text-muted mt-2 mb-0">
                Estos datos se publican bajo licencia <a href="https://creativecommons.org/licenses/by/4.0/deed.es" target="_blank" class="fw-bold text-success">Creative Commons Atribución 4.0 Internacional</a> compatible con LibreusoMX.
            </p>
        </div>
        <form id="formMaices" action="{{ route('descargas.exportar', 'maices') }}" method="GET">
            <div class="filter-card-box">
                <div class="mb-2">
                    <label class="form-label fw-bold text-dark fs-6">Elige el tipo de datos que deseas descargar:</label>
                    <select name="tipo" id="tipo" class="form-select" onchange="showDivsMaices()">
                        <option value="" selected disabled>Selecciona...</option>
                        <option value="registros">Registros</option>
                        <option value="metodos">Métodos con los que se obtuvieron características cuantitativas y cualitativas</option>
                    </select>
                </div>
                <div id="opcionesFiltros" class="row g-3 mt-2" style="display: none;">
                    <div class="col-md-4">
                        <label class="form-label small fw-bold">Elige el estado:</label>
                        <select name="estado" id="estado" class="form-select">
                            <option value="Todos" selected>Todos los estados</option>
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

                    <label class="form-label small fw-bold">Elige el proyecto:</label>
                    <select name="proyecto" id="proyecto" class="form-select">
                        <option value="todos" id="todosproyecto" selected>Todos los proyectos</option>
                        <option value="FY001">FY001 - Base de datos de colecciones de maíces nativos, teocintles y Tripsacum de México</option>
                        <option value="FZ001">FZ001 - Estudio de la diversidad genética y su distribución de los maíces criollos y sus parientes silvestres en Michoacán</option>
                        <option value="FZ002">FZ002 - Conocimiento de la diversidad y distribución actual del maíz nativo y sus parientes silvestres en México</option>
                        <option value="FZ003">FZ003 - Diversidad y distribución altitudinal de maíces nativos en la región de los Loxicha, Sierra Madre del Sur Oaxaca</option>
                        <option value="FZ007">FZ007 - Monitoreo y recolección de la diversidad de razas de maíz criollo en la región de la Huasteca en México para complementar las colecciones de los Bancos de germoplasma de INIFAP y CIMMYT</option>
                        <option value="FZ014">FZ014 - Colecta de maíces nativos en regiones estratégicas de la Península de Yucatán</option>
                        <option value="FZ015">FZ015 - Conocimiento de la diversidad y distribución actual del maíz nativo en Nuevo León</option>
                        <option value="FZ016">FZ016 - Conocimiento de la diversidad y distribución actual del maíz nativo y sus parientes silvestres en México, segunda etapa 2008-2009</option>
                        <option value="FZ018">FZ018 - Conocimiento de la diversidad y distribución actual del maíz nativo y Tripsacum en el estado de Tamaulipas</option>
                        <option value="FZ023">FZ023 - Estudio de la diversidad de maíz en la región costa de Michoacán y áreas adyacentes de Jalisco y Colima</option>
                        <option value="Z003">Z003 - Donación de la base de datos resultado del diagnóstico de la diversidad de maíces nativos, su agroecosistema y sus parientes silvestres en La Chinantla</option>
                        <option value="Papigochic">Z004 - Donación de la base de datos resultado del diagnóstico de la diversidad de maíces nativos, su agroecosistema y sus parientes silvestres presentes en Papigochic y su zona de influencia</option>
                        <option value="Z005">Z005 - Catálogo de maíces nativos generada en la tesis El sistema milpa y sus recursos fitogenéticos en Santa María Tlahuitoltepec, Oaxaca</option>
                        <option value="Z006">Z006 - Donación de la base de datos del Dr. Ortega Paczka resultados de la computarización de datos de colecta de muestras de maíz y otros cultivos asociados de diferentes regiones de México</option>
                        <option value="NM002">NM002 - Conservación in situ y mejoramiento participativo de los maíces nativos y sus parientes silvestres en Oaxaca</option>
                    </select>

                    <label class="form-label small fw-bold">Elige el taxón:</label>
                    <select name="taxon_selected" id="razas" class="form-select">
                        <option value="todos" id="todos" selected>Todos los taxones</option>
                        @foreach($taxonesMaices as $t)
                            <option value="{{ $t['taxon_id'] }}">
                                {{ $t['taxon'] }} ----- {{ $t['estatus'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div id="seccionRegistros" style="display: none;">
                <div class="filter-card-box">
                    <div class="filter-card-header">
                        <span>Registros</span>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('registro', true)">Selecciona todo</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('registro', false)">Deselecciona todo</button>
                        </div>
                    </div>
                    <div class="fields-grid">
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="id"> Registro ID</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="proyecto"> Proyecto</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="procedencia"> Procedencia</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="fecha_colecta_observacion"> Fecha colecta observación</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="numero_colecta_observacion"> Número colecta observación</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="colector_observador"> Colector observador</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="coleccion"> Colección</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="numero_catalogo"> Número de catalogo</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="individuos_copias"> Individuos copias</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="preparacion"> Preparación</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="sexo"> Sexo</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="fecha_determinacion"> Fecha determinación</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="determinador"> Determinador</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="calificador_determinacion"> Calificador determinación</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="determinacion_tipo"> Determinación tipo</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="licencia_uso"> Licencia uso</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="referencias"> Referencias</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="forma_citar"> Forma de citar</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="registro" value="autorizacion_informacion"> Autorización información</label>
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
                        <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="id"> Sitio ID</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="pais"> País</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="estado"> Estado</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="municipio"> Municipio</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="localidad"> Localidad</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="latitud"> Latitud</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="longitud"> Longitud</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="altitud"> Altitud</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="precision_escala"> Precisión escala</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="radio"> Radio</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="fuente_georreferencia"> Fuente de georreferencia</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="datum"> Datum</label>
                    </div>
                </div>
                <div class="filter-card-box">
                    <div class="filter-card-header">
                        <span>Taxón</span>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('taxons', true)">Selecciona todo</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('taxons', false)">Deselecciona todo</button>
                        </div>
                    </div>
                    <div class="fields-grid">
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="taxon_id"> Taxon ID</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="taxon"> Taxón</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="categoria"> Categoría</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="estatus"> Estatus</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="genero"> Género</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="especie"> Especie</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="subespecie"> Subespecie</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="variedad"> Variedad</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="forma"> Forma</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="raza"> Raza</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="cultivar"> Cultivar</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="observaciones_taxonomicas"> Observaciones taxonómicas</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="fuente"> Fuente</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="nombre_autoridad"> Nombre autoridad</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="cites"> Cites</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="iucn"> IUCN</label>
                    </div>
                </div>
                <div class="filter-card-box">
                    <div class="filter-card-header">
                        <span>Características cuantitativas</span>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('caracteristica_cuantitativas', true)">Selecciona todo</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('caracteristica_cuantitativas', false)">Deselecciona todo</button>
                        </div>
                    </div>
                    <div class="fields-grid">
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="altura_mazorca"> Altura de mazorca</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="altura_planta"> Altura de planta</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="anchura_grano"> Anchura de grano</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="radio_anchura_longitud_grano"> Anchura/longitud del grano</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="contenido_humedad"> Contenido de humedad</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="diametro_mazorca"> Diámetro de mazorca</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="diametro_olote"> Diámetro de olote</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="radio_diametro_longitud_mazorca"> Diámetro/longitud de la mazorca</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="floracion_femenina"> Días a floracion femenina</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="floracion_masculina"> Días a floracion masculina</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="granos_hilera"> Granos por hilera</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="radio_grosor_anchura_grano"> Grosor/anchura del grano</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="grosor_grano"> Grosor de grano</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="hileras_mazorca"> Hileras por mazorca</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="longitud_grano"> Longitud de grano</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="longitud_mazorca"> Longitud de mazorca</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="mazorcas_planta"> Mazorcas por planta</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="peso_hectolitrico"> Peso hectolítrico</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="peso_seco"> Peso seco 100 granos</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="porcion_desgrane"> Porción de desgrane</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="proporcion_desgrane"> Proporción de desgrane</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="volumen_granos"> Volumen de 100 granos</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cuantitativas" value="metodos_cuanti"> Métodos características cuantitativas</label>
                    </div>
                </div>
                <div class="filter-card-box">
                    <div class="filter-card-header">
                        <span>Características cualitativas</span>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('caracteristica_cualitativas', true)">Selecciona todo</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('caracteristica_cualitativas', false)">Deselecciona todo</button>
                        </div>
                    </div>
                    <div class="fields-grid">
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cualitativas" value="color_grano"> Color de grano</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cualitativas" value="disposicion_hileras"> Disposición de hileras</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cualitativas" value="color_tallo"> Color de tallo</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cualitativas" value="forma_mazorca"> Forma de mazorca</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cualitativas" value="tipo_hoja"> Tipo de hoja</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cualitativas" value="tipo_grano"> Tipo de grano</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cualitativas" value="color_olote"> Color de olote</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="caracteristica_cualitativas" value="metodos_cuali"> Métodos características cualitativas</label>
                    </div>
                </div>
            </div>
            <div id="seccionMetodos" style="display: none;">
                <div class="filter-card-box">
                    <div class="filter-card-header">
                        <span>Métodos</span>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('metodos', true)">Selecciona todo</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('metodos', false)">Deselecciona todo</button>
                        </div>
                    </div>
                    <div class="fields-grid">
                        <label class="field-checkbox-item"><input type="checkbox" name="metodos" value="id"> ID</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="metodos" value="descripcion"> Descripción</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="metodos" value="referencias"> Referencias</label>
                        <label class="field-checkbox-item"><input type="checkbox" name="metodos" value="link_referencias"> Link referencias</label>
                    </div>
                </div>
            </div>
            <input type="hidden" name="selectedOptions" id="selectedOptionsMaices">
            <input type="hidden" name="option" id="optionMaices" value="">
            <div id="seccionBotonDescarga" class="text-center my-5" style="display: none;">
                <button type="button" class="btn btn-lg px-5 py-3 text-white fw-bold shadow-sm" style="background-color: #28a745; border-radius: 12px;" onclick="ejecutarDescargaMaices()">
                    <i class="bi bi-cloud-arrow-down-fill me-2 fs-5"></i> Descargar datos seleccionados
                </button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showDivsMaices() {
            var tipo = document.getElementById("tipo").value;
            var opciones = document.getElementById("opcionesFiltros");
            var secRegistros = document.getElementById("seccionRegistros");
            var secMetodos = document.getElementById("seccionMetodos");
            var secBoton = document.getElementById("seccionBotonDescarga");

            if (tipo === "registros") {
                opciones.style.display = "flex";
                secRegistros.style.display = "block";
                secMetodos.style.display = "none";
                secBoton.style.display = "block";
                document.getElementById("optionMaices").value = "registros";
            } else if (tipo === "metodos") {
                opciones.style.display = "none";
                secRegistros.style.display = "none";
                secMetodos.style.display = "block";
                secBoton.style.display = "block";
                document.getElementById("optionMaices").value = "metodos";
            } else {
                opciones.style.display = "none";
                secRegistros.style.display = "none";
                secMetodos.style.display = "none";
                secBoton.style.display = "none";
            }
        }

        function toggleGroup(nombreGrupo, estado) {
            document.querySelectorAll(`input[name="${nombreGrupo}"]`).forEach(cb => cb.checked = estado);
        }

        function ejecutarDescargaMaices() {
            var tipo = document.getElementById("tipo").value;
            var selector = tipo === "registros" ? '#seccionRegistros input[type="checkbox"]:checked' : '#seccionMetodos input[type="checkbox"]:checked';
            var checkboxes = document.querySelectorAll(selector);
            var seleccionados = Array.from(checkboxes).map(cb => cb.value);

            if (seleccionados.length === 0) {
                alert("Selecciona al menos una opción en los recuadros blancos para poder descargar datos.");
                return;
            }

            document.getElementById('selectedOptionsMaices').value = seleccionados.join(',');
            document.getElementById('formMaices').submit();
        }
    </script>
</body>
</html>
