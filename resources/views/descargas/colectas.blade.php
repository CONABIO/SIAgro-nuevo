<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Descarga: Colectas GEF | SIAgroBD</title>
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
            <h1 class="fw-bold mb-2 display-6" style="color: #5a5e48;">Colectas GEF</h1>
            <h3 class="fs-6 fw-bold text-muted mb-3">Selecciona los filtros y campos deseados para poder descargar datos</h3>
            <p class="small text-muted mb-0">
                Consulta la forma de citar esta base de datos en el menú <a href="{{ route('forma_citar') }}" target="_blank" class="fw-bold text-success">"Forma de citar"</a>.
            </p>
        </div>
        <form id="formColectas" action="{{ route('descargas.exportar', 'colectas') }}" method="GET">
            <div class="filter-card-box">
                <h5 class="fw-bold mb-3" style="color: #12322b;"><i class="bi bi-funnel-fill me-2"></i>Filtros de Colecta</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label small fw-bold">Elige el estado:</label>
                        <select name="estado" id="estado" class="form-select">
                            <option value="Todos" selected>Todos los estados</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="Ciudad de México">Ciudad de México</option>
                            <option value="Durango">Durango</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Michoacán">Michoacán</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Querétaro">Querétaro</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Yucatán">Yucatán</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-bold">Elige el proyecto:</label>
                        <select name="proyecto" id="proyecto" class="form-select">
                            <option value="todos" selected>Todos los proyectos</option>
                            <option value="RG001">RG001 - Mixteca Alta, Oaxaca</option>
                            <option value="RG002">RG002 - Physalis al norte del Trópico</option>
                            <option value="RG016">RG016 - Centro Occidente de México</option>
                            <option value="RG019">RG019 - Agaves recursos fitogenéticos</option>
                            <option value="RG023">RG023 - Manejo y domesticación en Mesoamérica</option>
                            <option value="RG025">RG025 - Parientes silvestres y quelites en Durango</option>
                            <option value="RG034">RG034 - Diversidad de Amaranthus</option>
                            <option value="RG055">RG055 - Capsicum, Phaseolus y quelites en Veracruz</option>
                            <option value="RG057">RG057 - Región Huasteca</option>
                            <option value="RG070">RG070 - Destilados de agave poco conocidos</option>
                            <option value="RG078">RG078 - Chinantla Alta (CORENCHI)</option>
                            <option value="SG002">SG002 - Suelo de conservación CDMX</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="filter-card-box">
                <div class="filter-card-header">
                    <span>Registro</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('registros', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('registros', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="registro_id"> Registro ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="ProcedenciaDatos"> Procedencia de datos</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="FechaColectaObservacion"> Fecha de colecta</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="NumeroColectaObservacion"> Número de colecta</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="IndividuosCopias"> Individuos copias</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="TipoPreparacion"> Tipo de preparación</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="FuenteColectaObservacion"> Fuente de colecta</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="Habitat"> Habitat</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="AmbienteEjemplar"> Ambiente del ejemplar</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="EstatusEcologico"> Estatus ecológico</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="PlantaManejada"> Planta manejada</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="MaterialColectado"> Material colectado</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="FormaVida"> Forma de vida</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="FormaCrecimiento"> Forma de crecimiento</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="Sexo"> Sexo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="Fenologia"> Fenología</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="AlturaEjemplar"> Altura del ejemplar</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="Abundancia"> Abundancia</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="OtrasObservacionesEjemplar"> Otras observaciones</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="Uso"> Uso</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="ParteUtilizada"> Parte utilizada</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="LenguaNombreComun"> Lengua nombre común</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="NombreComun"> Nombre común</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="AutorizacionInformacion"> Autorización de información</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="ColectorObservador"> Colector</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="ColeccionGermoplasma"> Colección de Germoplasma</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="NumeroCatalogoGermoplasma"> Número de catálogo germoplasma</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="ColeccionEjemplar"> Colección</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="NumeroCatalogoEjemplar"> Número de catálogo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="InstitucionRespaldaObservacion"> Institución que respalda</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="DonanteInformante"> Donante</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="registros" value="TipoVegetacion"> Tipo de vegetación</label>
                </div>
            </div>

            <div class="filter-card-box">
                <div class="filter-card-header">
                    <span>Donante</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('donantes', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('donantes', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="donantes" value="donante_id"> Donante ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="donantes" value="NombreDonanteInformante"> Nombre del donante</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="donantes" value="GeneroDonanteInformante"> Género del donante</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="donantes" value="EdadDonanteInformante"> Edad del donante</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="donantes" value="ActividadDonanteInformante"> Actividad del donante</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="donantes" value="GrupoEtnicoDonanteInformante"> Grupo étnico del donante</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="donantes" value="LenguaDonanteInformante"> Lengua del donante</label>
                </div>
            </div>

            <div class="filter-card-box">
                <div class="filter-card-header">
                    <span>Manejo</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('manejos', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('manejos', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="manejo_id"> Manejo ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="TipoManejo"> Tipo de manejo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="TipoAgroecosistema"> Tipo de agroecosistema</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="DescripcionAgroecosistema"> Descripción agroecosistema</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="SindromeDomesticacion"> Síndrome domesticación</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="TenenciaTierra"> Tenencia tierra</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="TipoMaterialProduccion"> Tipo material producción</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="OrigenMaterial"> Origen de material</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="DestinoProduccion"> Destino de producción</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="MesSiembra"> Mes de siembra</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="MesFloracion"> Mes de floración</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="MesFructificacion"> Mes de fructificación</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="MesCosecha"> Mes de cosecha</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="SistemaCultivo"> Sistema de cultivo</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="CultivosAsociados"> Cultivos asociados</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="UnidadesSuperficieProduccion"> Unidades superficie</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="SuperficieProduccion"> Superficie producción</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="UnidadesRendimiento"> Unidades rendimiento</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="Rendimiento"> Rendimiento</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="TipoRiego"> Tipo de riego</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="CaracteristicaResistenciaTolerancia"> Resistencia / Tolerancia</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="manejos" value="CaracteristicaSusceptible"> Susceptibilidad</label>
                </div>
            </div>

            <div class="filter-card-box">
                <div class="filter-card-header">
                    <span>Proyecto</span>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-sm btn-outline-primary btn-toggle-all" onclick="toggleGroup('proyectos', true)">Selecciona todo</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary btn-toggle-all" onclick="toggleGroup('proyectos', false)">Deselecciona todo</button>
                    </div>
                </div>
                <div class="fields-grid">
                    <label class="field-checkbox-item"><input type="checkbox" name="proyectos" value="proyecto_id"> Proyecto ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="proyectos" value="NombreProyecto"> Nombre del proyecto</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="proyectos" value="InstitucionProyecto"> Institución del proyecto</label>
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
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="taxon_id"> Taxón ID</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="Genero"> Género</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="EpitetoEspecifico"> Epíteto específico</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="EpitetoSubespecie"> Epíteto subespecie</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="EpitetoVariedad"> Epíteto variedad</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="EpitetoForma"> Epíteto forma</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="EpitetoRaza"> Epíteto raza</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="EpitetoCultivar"> Epíteto cultivar</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="taxons" value="ObservacionesTaxonomicas"> Observaciones taxonómicas</label>
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
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="Estado"> Estado</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="Municipio"> Municipio</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="Localidad"> Localidad</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="ObtencionCoordenada"> Obtención de coordenada</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="TipoSitio"> Tipo de sitio</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="Latitud"> Latitud</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="Longitud"> Longitud</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="Altitud"> Altitud</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="PrecisionEscala"> Precisión escala</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="Radio"> Radio</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="FuenteGeorreferencia"> Fuente georreferencia</label>
                    <label class="field-checkbox-item"><input type="checkbox" name="sitios" value="Datum"> Datum</label>
                </div>
            </div>

            <input type="hidden" name="selectedOptions" id="selectedOptionsInput">
            <div class="text-center my-5">
                <button type="button" class="btn btn-lg px-5 py-3 text-white fw-bold shadow-sm" style="background-color: #28a745; border-radius: 12px;" onclick="ejecutarDescargaColectas()">
                    <i class="bi bi-cloud-arrow-down-fill me-2 fs-5"></i> Descargar datos seleccionados
                </button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleGroup(nombreGrupo, estado) {
            document.querySelectorAll(`input[name="${nombreGrupo}"]`).forEach(cb => cb.checked = estado);
        }

        function ejecutarDescargaColectas() {
            const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            const seleccionados = Array.from(checkboxes).map(cb => cb.value);

            if (seleccionados.length === 0) {
                alert("Selecciona al menos una opción en los recuadros para poder descargar datos.");
                return;
            }

            document.getElementById('selectedOptionsInput').value = seleccionados.join(',');
            document.getElementById('formColectas').submit();
        }
    </script>
</body>
</html>
