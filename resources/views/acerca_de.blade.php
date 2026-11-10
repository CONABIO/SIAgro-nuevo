<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Acerca del SIAgroBD | CONABIO</title>
        <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('images/siagro-favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body>
    <x-navbar />
    <main class="container content-container py-4">
        <div class="mediateca-hero">
            <a href="{{ route('home') }}" class="btn-back">
                <i class="bi bi-arrow-left"></i> Volver al inicio
            </a>
            <h1 class="fw-bold mb-2 display-6">¿Qué es el Sistema de Información sobre Agrobiodiversidad (SIAgroBD)?</h1>
            <p class="mb-0 fs-6" style="max-width: 900px; line-height: 1.65;">
                El <strong>SIAgroBD</strong> fue desarrollado como parte del <a href="https://biodiversidad.gob.mx/diversidad/proyectos/agrobiodiversidadmx" target="_blank" class="fw-bold text-success text-decoration-none">Proyecto Agrobiodiversidad Mexicana</a> y actualmente depende de la <a href="http://www.conabio.gob.mx/web/conocenos/CAyRB_SA.html" target="_blank" class="fw-bold text-success text-decoration-none">Coordinación de Agrobiodiversidad y Recursos Biológicos</a> de la <a href="https://www.gob.mx/conabio" target="_blank" class="fw-bold text-success text-decoration-none">CONABIO</a>.
            </p>
            <br>
            <p>Este sistema que reconoce las dimensiones ecológica, humana y cultural de los agroecosistemas, incluye datos e información sobre la agrobiodiversidad mexicana y busca ser útil a un amplio grupo de usuarios, incluyendo académicos, tomadores de decisión y público en general.</p>
            <br>
            <p>El SIAgroBD consiste en la integración de tres componentes: las bases de datos, las herramientas computacionales y la colaboración entre personas. Cada componente es una parte esencial del SIAgroBD.</p>
        </div>

        <article class="article-card">
            <h2 class="article-title">Datos Abiertos</h2>

            <div class="editorial-quote">
                <p class="quote-text">
                    "Los datos de agrobiodiversidad están ligados a los derechos de los pueblos, y deben ser un referente para las decisiones que toman los pueblos sobre su territorio."
                </p>
                <span class="quote-author">— Fernando Alejandro Mondragón Galicia (Proyecto de colecta RG078)</span>
            </div>

            <p class="article-paragraph">
                <a href="{{ route('bases.datos') }}">Las bases de datos del SIAgroBD</a> contienen información biológica y geográfica sobre especies de la agrobiodiversidad, información nutricional, mediciones agronómicas y datos cualitativos relacionados con los usos de las especies y la percepción de las comunidades locales. Integramos datos de instituciones socias, por ejemplo la <em>Tabla de composición de alimentos del Instituto Nacional de Ciencias Médicas y Nutrición Salvador Zubirán</em>.
            </p>
            <p class="article-paragraph">
                También hay datos de proyectos previos gestionados por CONABIO, como los resultados del <em>Proyecto Global de Maíces Nativos</em>, en una versión extendida, accesible y vinculada al resto de los datos de la CONABIO. Por último, se recopilaron datos nuevos como parte del Proyecto Agrobiodiversidad Mexicana, como las colectas GEF y los grupos de enfoque.
            </p>
            <p class="article-paragraph">
                El SIAgroBD publica <a href="https://opendatacharter.org/principles/" target="_blank">datos abiertos</a>, es decir, datos que son puestos a disposición para que puedan ser usados, reutilizados y redistribuidos libremente por cualquier persona, en cualquier momento y en cualquier lugar. Además cumplen con los <a href="https://es.wikipedia.org/wiki/Datos_FAIR" target="_blank">principios FAIR</a>: es decir, fáciles de encontrar, accesibles, interoperables y reutilizables.
            </p>
        </article>

        <article class="article-card">
            <h2 class="article-title">Herramientas Computacionales</h2>
            <div class="editorial-quote">
                <p class="quote-text">
                    "Me encanta la versión de campo [de Kobotoolbox], como técnico de campo me facilita mucho el trabajo, ya que con la toma de muestras, las fotos y atendiendo la información que nos brindan los guías, el tener una versión ligera de las preguntas, es una maravilla."
                </p>
                <span class="quote-author">— Participante de los proyectos de colecta GEF</span>
            </div>
            <p class="article-paragraph">
                Las herramientas computacionales son el software que hace funcionar el SIAgroBD. Estas herramientas permiten hacer más eficiente, reproducible y transparente el proceso de colectar, capturar, revisar, integrar y publicar los datos relacionados con la agrobiodiversidad.
            </p>
            <div class="article-media-container">
                <img src="images/kobo.jpg" onerror="this.onerror=null; this.src='https://placehold.co/900x480/f8faf8/1b4d42?text=KoboToolbox+en+Servidores+CONABIO';" alt="KoboToolbox CONABIO">
            </div>
            <h3 class="article-subheading"><i class="bi bi-phone text-success"></i> Colecta digital de datos con KoboToolbox</h3>
            <p class="article-paragraph">
                Utilizamos <a href="https://www.kobotoolbox.org/" target="_blank">KoboToolbox</a> para recolectar los datos que se generaron como parte del Proyecto Agrobiodiversidad Mexicana. Kobo permite recopilar datos en campo a través de formularios estandarizados en versión web, o a través de teléfonos inteligentes con o sin conexión a Internet. Para tener mayor control sobre los datos, instalamos <a href="https://kobo.conabio.gob.mx/#/" target="_blank">Kobo en los servidores de la CONABIO</a>.
            </p>
            <h3 class="article-subheading"><i class="bi bi-diagram-3-fill text-primary"></i> Integración de datos con Zendro y Zacatuche (GraphQL)</h3>
            <p class="article-paragraph">
                Para vincular los datos del SIAgroBD con el resto de los datos del <a href="https://www.snib.mx/" target="_blank">Sistema Nacional de Información de Biodiversidad (SNIB)</a> de la CONABIO, así como para hacerlos públicos, utilizamos <a href="https://zendro-dev.github.io/" target="_blank">Zendro</a> y <a href="https://ecoinformatica.atlassian.net/wiki/spaces/CONADATA/pages/707264524/Descripci+n+de+dise+o+de+servicios+GraphQL" target="_blank">Zacatuche</a>, los cuales están basados en GraphQL. Zendro fue desarrollado por la Coordinación de Agrobiodiversidad y Recursos Biológicos de la CONABIO en colaboración con el <em>Forschungszentrum Jülich de Alemania</em>. Zacatuche fue desarrollado por la Dirección de Ciencia de Datos sobre Biodiversidad de la CONABIO.
            </p>
            <div class="article-media-container">
                <img src="images/herramientas.jpg" onerror="this.onerror=null; this.src='https://placehold.co/900x480/f8faf8/c25e1a?text=Arquitectura+de+Herramientas+SIAgroBD';" alt="Herramientas Computacionales">
            </div>
            <h3 class="article-subheading"><i class="bi bi-bar-chart-fill text-warning"></i> Visualización en Enciclovida y Aplicaciones Dinámicas</h3>
            <p class="article-paragraph">
                Conectar los datos del SIAgroBD con otras bases de datos de CONABIO permite explorar la información completa de las <a href="{{ route('especies') }}">especies de la agrobiodiversidad a través de Enciclovida</a>. Además, los datos específicos de agrobiodiversidad se pueden explorar en las <a href="{{ route('aplicaciones') }}">visualizaciones dinámicas</a> que desarrollamos mediante herramientas de código abierto, principalmente Shiny R y Dash.
            </p>
        </article>

        <article class="article-card">
            <h2 class="article-title">Colaboración</h2>
            <div class="editorial-quote">
                <p class="quote-text">
                    "Fue muy grato ver el interés por acercarse a quienes recopilamos la información. Así, la calidad de los datos se incrementará mucho y será más confiable para todos."
                </p>
                <span class="quote-author">— Participante del taller sobre datos abiertos</span>
            </div>
            <h3 class="article-subheading"><i class="bi bi-people-fill text-primary"></i> Gestionar datos es gestionar una comunidad</h3>
            <p class="article-paragraph">
                Los datos del SIAgroBD existen gracias al trabajo en campo y en escritorio de centenas de personas, así como a la participación de miles de personas del campo mexicano que aportaron información y consintieron que se publicara. Las herramientas computacionales también requieren atención y mantenimiento continuo por personas con conocimientos técnicos. Por eso, la colaboración, los acuerdos entre personas y la creación de capacidades son tan importantes como los componentes técnicos para el funcionamiento del SIAgroBD.
            </p>
            <div class="article-media-container">
                <img src="images/acercade.jpg" onerror="this.onerror=null; this.src='https://placehold.co/900x480/f8faf8/1b4d42?text=Trabajo+Comunitario+en+Campo';" alt="Comunidad y Colaboración">
            </div>
            <h3 class="article-subheading"><i class="bi bi-file-earmark-check-fill text-success"></i> Acuerdos de colaboración</h3>
            <p class="article-paragraph">
                El tipo de información que se generó para las colectas del Proyecto Agrobiodiversidad Mexicana se definió de forma conjunta entre personal de la CONABIO y personas externas expertas en agrobiodiversidad. Así, equipos muy diversos, enfocados en diferentes regiones de México o grupos de plantas, pudieron recolectar información utilizando formularios estandarizados. Acuerdos similares ocurrieron para otros tipos de datos, como los Grupos de Enfoque y las Canastas Regionales del Bien Comer.
            </p>
            <p class="article-paragraph">
                Durante los proyectos de colecta se preguntó a las personas que donaron la información en campo si estaban de acuerdo en hacer pública la información y usarla para investigación y materiales de difusión. <strong>En el SIAgroBD sólo se muestran los datos que las personas donantes autorizaron para su publicación.</strong> Así mismo, se acordó con los grupos de colecta oscurecer la localización exacta de algunas especies de las colectas GEF debido a que son especies amenazadas o existe una preocupación por el saqueo de germoplasma.
            </p>
            <h3 class="article-subheading"><i class="bi bi-check2-circle text-warning"></i> Estándares de datos</h3>
            <p class="article-paragraph">
                Los datos del SIAgroBD incluyen variables adicionales a la información biológica y geográfica del <a href="https://www.snib.mx/" target="_blank">SNIB</a>. Por ejemplo, se incluye información nutrimental, variables agronómicas como la longitud o el color de una mazorca de maíz, o información que permite distinguir si una planta es silvestre, domesticada o arvense. Durante el proceso de revisión de calidad de los datos, personal de la CONABIO retroalimenta a los equipos de colecta para que los datos se ajusten a los estándares definidos.
            </p>
            <div class="article-media-container">
                <img src="images/estandar.jpg" onerror="this.onerror=null; this.src='https://placehold.co/900x480/f8faf8/c25e1a?text=Estandares+de+Datos+SIAgroBD';" alt="Estándares de Datos">
            </div>
            <h3 class="article-subheading"><i class="bi bi-mortarboard-fill text-info"></i> Desarrollo de capacidades</h3>
            <p class="article-paragraph">
                Como parte del SIAgroBD se promueve el desarrollo de capacidades para el uso de las herramientas computacionales y de los datos. Brindamos capacitaciones sobre el uso de KoboToolbox; organizamos <a href="https://zenodo.org/record/6640644#.ZEl2YRVBz9E" target="_blank">talleres para introducir los datos abiertos</a> y espacios de intercambio de experiencias sobre el uso de las herramientas; generamos manuales y <a href="https://main.d2e8aknmnwkjn3.amplifyapp.com/" target="_blank">documentación abierta</a>. A través de procesos de retroalimentación con las personas usuarias, continuamos aprendiendo y mejorando los procesos de generación, publicación y uso de datos abiertos del SIAgroBD.
            </p>
        </article>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
