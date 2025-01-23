<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="scroll-smooth" lang="es">
<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        var dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            document.location = "/mobile/teledeteccion.php";
        }
    </script>

    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Lago en Línea | Teledetección</title>

    <!-- CSS PERSONALIZADO -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/dist/css/lightbox.min.css">

    <!-- SEO ORGANICO -->
    <meta http-equiv="content-Type" content="text/html; ISO-8859-1">
    <meta name="DC.Language" scheme="RFC1766" content="Spanish">
    <meta name="author" content="Asesoría Indaga">
    <meta name="reply-to" content="edgardo@indaga.me">
    <link rev="made" href="mailto:edgardo@indaga.me">
    <meta name="description" content="Datos en línea para el monitoreo de las condiciones ambientales del lago Llanquihue.">
    <meta name="keywords" content="Monitoreo,lago,lago llanquihue,lago en linea,información,ambiental,evaluación,tecnologías,condiciones,ambientales,región,los lagos,osorno,profundidad,182m,hidrografia,glaciar,chile,general carrera,rios,afluentes,volcan,calbuco,tepu,maullín,puerto varas,puerto montt,cordillera,andes,clima,selva valdiviana,frutillar,las cascadas,agroquimicos,pisciculturas,más azul,patagonia,universidad,san sebastian">
    <meta name="Resource-type" content="Document">
    <meta name="DateCreated" content="Sat, 1 January 2023 00:00:00 GMT-4">
    <meta name="Revisit-after" content="4 days">
    <meta name="robots" content="ALL">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EN0M278PRJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-EN0M278PRJ');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKZ9BW4');
    </script>
    <!-- End Google Tag Manager -->

</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKZ9BW4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!------------------------------- IN CABEZAL DE LA PAGINA ------------------------------>
<?php include('assets/layout/header.php') ?>
<?php include('assets/layout/menustick.php') ?>
<!----------------------------- END CABEZAL DE LA PAGINA ------------------------------->

<section id="contenido-home" class="md:py-[50px] 3xl:py-[100px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h4 class="titulos">TELEDETECCIÓN</h4>
            <h5 class="subtitulos">Sobre la tecnología</h5>
        </div>
    </div>
    <!------------------------- ITEMS ACORDION 1 ---------------------------->
    <div class="container mx-auto md:pt-[40px] 3xl:pt-[50px]">
        <div class="flex justify-center content-center items-center py-[6px]">
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex font-medium text-left text-oscuro text-[18px] w-[350px] items-center justify-between border border-[1px] border-azul rounded-[20px] px-[20px] pt-[8px] pb-[6px] focus:text-azul" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                        <span>TECNOLOGÍA</span>
                        <svg data-accordion-icon class="h-6 w-6 shrink-0 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
            </div>
        </div>
    </div>

    <div class="container mx-auto hidden" id="accordion-collapse-body-1" aria-labelledby="accordion-collapse-heading-1">
        <div class="grid grid-cols-2">
            <div class="pt-[20px] pb-[50px] pr-[20px]">
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">La teledetección es una técnica de observación espacial, temporal y espectral que permite realizar mediciones y analizar la superficie terrestre sin tener contacto con ella. Para lograrlo se utilizan sistemas de cámaras que recogen imágenes de la superficie terrestre generadas bajo la órbita de los sensores instalados en plataformas espaciales. Esta técnica facilita la obtención de información de territorios extensos, sin necesidad de desarrollar largas campañas en terreno, reduciendo tiempos y costos. Además, permite incluir zonas de difícil acceso y obtener datos periódicos, comparables y de fácil procesamiento.</p>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">El primer satélite artificial, Sputnik 1, fue lanzado por la Unión Soviética el 4 de octubre de 1957, con el propósito de obtener información de las capas altas de la atmósfera y el campo electromagnético de nuestro planeta. El 17 de mayo de 1958 la NASA lanzó al espacio el Vanguard 1, el primer satélite alimentado por energía solar. Estos desarrollos intensificaron la carrera espacial entre la URSS y Estados Unidos, en el marco de la Guerra Fría. A la fecha se han creado más de 5.000 satélites de diferentes tipos algunos que cesaron sus operaciones y otros aún están en funcionamiento.</p>
            </div>
            <div class="pt-[20px] pb-[50px] pl-[20px]">
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Actualmente, la información generada por los satélites de observación terrestre y registrada mediante imágenes es utilizada para monitorear atributos relevantes como: vegetación, capas de hielo y cuerpos de agua, entre otros. La utilización de satélites permite identificar zonas en las que se ha ocasionado, por ejemplo, pérdida de vegetación en áreas boscosas o aumento en la turbidez de las aguas producto de procesos de eutrofización que aumentan la abundancia de algas y fitoplancton, impactando negativamente en la calidad del agua de un lago.</p>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">En relación con el caso de estudio se considerarán 3 indicadores de calidad de agua: concentración de pigmentos de algas, concentración de material en suspensión y coeficiente de atenuación difusa.</p>
            </div>
        </div>
        <div class="grid grid-cols-3 item-gallery pb-[50px] justify-center content-center items-center">
            <a class="example-image-link px-[10px]" href="assets/img/teledeteccion/img-teledetecion-01.webp" data-lightbox="example-set" data-title="Fotografía de la Tierra desde el espacio"><img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/teledeteccion/img-teledetecion-01-1.webp" alt=""/></a>

            <a class="example-image-link px-[10px]" href="assets/img/teledeteccion/img-teledetecion-02.webp" data-lightbox="example-set" data-title="Satélite orbitando la Tierra"><img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/teledeteccion/img-teledetecion-02-1.webp" alt=""/></a>

            <a class="example-image-link px-[10px]" href="assets/img/teledeteccion/img-teledetecion-03.webp" data-lightbox="example-set" data-title="Imagen satelital del lago Llanquihue"><img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/teledeteccion/img-teledetecion-03-1.webp" alt=""/></a>
        </div>
    </div>

    <!------------------------- ITEMS ACORDION 2 ---------------------------->
    <div class="container mx-auto">
        <div class="flex justify-center content-center items-center py-[6px]">
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-2">
                    <button type="button" class="flex font-medium text-left text-oscuro text-[18px] w-[350px] items-center justify-between border border-[1px] border-azul rounded-[20px] px-[20px] pt-[8px] pb-[6px] focus:text-azul" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>INDICADORES</span>
                        <svg data-accordion-icon class="h-6 w-6 shrink-0 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
            </div>
        </div>
    </div>

    <div class="container mx-auto hidden" id="accordion-collapse-body-2" aria-labelledby="accordion-collapse-heading-2">
        <div class="grid grid-cols-2">
            <div class="pt-[20px] pb-[50px] pr-[20px]">
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]"><b>Concentración de pigmento de algas (Clorofila):</b> La medición de clorofila nos permite conocer la concentración de fitoplancton (algas microscópicas) presentes en el agua. Indirectamente, también son indicadores de la actividad biológica, por lo que se considera un parámetro importante para vigilar los procesos de eutrofización en los cuerpos de agua (contaminación por exceso de nutrientes). Además, este parámetro aporta información relevante para la detección de “blooms de algas”.</p>
                    </div>
                </div>

                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]"><b>Concentración de material en suspensión:</b> Identifica la carga sedimentaria presente en el cuerpo de agua, o las variadas formas de impureza presentes en el agua de forma suspendida. En la cuantificación de los niveles de impureza, el término ‘material en suspensión’ describe las partículas no disueltas presentes en una muestra de agua. En términos prácticos, estas partículas se definen por su imposibilidad de ser separadas de la muestra de agua usando un filtro.</p>
                    </div>
                </div>

            </div>
            <div class="pt-[20px] pb-[50px] pl-[20px]">
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]"><b>Coeficiente de atenuación difusa:</b> Mide la penetración de la luz en los cuerpos de agua. Es un indicador de transparencia que da conocimiento de la concentración de fitoplancton y sedimentos, ya que su medida entrega una estimación de la claridad e, indirectamente, de la turbidez del agua al medir la capacidad de penetración de la radiación solar incidente en ella.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 item-gallery pb-[50px] justify-center content-center items-center">
            <a class="example-image-link px-[10px]" href="assets/img/teledeteccion/img-teledetecion-04.webp" data-lightbox="example-set" data-title="Concentración de material en suspensión en el lago Llanquihue (dic. 2021)"><img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/teledeteccion/img-teledetecion-04-1.webp" alt=""/></a>
            <a class="example-image-link px-[10px]" href="assets/img/teledeteccion/img-teledetecion-05.webp" data-lightbox="example-set" data-title="Concentración de clorofila en el lago Llanquihue (dic. 2021)"><img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/teledeteccion/img-teledetecion-05-1.webp" alt=""/></a>
            <a class="example-image-link px-[10px]" href="assets/img/teledeteccion/img-teledetecion-06.webp" data-lightbox="example-set" data-title="Coeficiente de atenuación difusa en el lago Llanquihue (dic. 2021)"><img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/teledeteccion/img-teledetecion-06-1.webp" alt=""/></a>
        </div>
    </div>

    <!------------------------- ITEMS ACORDION 3 ---------------------------->
    <div class="container mx-auto">
        <div class="flex justify-center content-center items-center py-[6px]">
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="flex font-medium text-left text-oscuro text-[18px] w-[350px] items-center justify-between border border-[1px] border-azul rounded-[20px] px-[20px] pt-[8px] pb-[6px] focus:text-azul" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                        <span>METODOLOGÍA</span>
                        <svg data-accordion-icon class="h-6 w-6 shrink-0 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
            </div>
        </div>
    </div>

    <div class="container mx-auto hidden" id="accordion-collapse-body-3" aria-labelledby="accordion-collapse-heading-3">
        <div class="grid grid-cols-2">
            <div class="pt-[20px] pb-[50px] pr-[20px]">
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">La elección respecto los satélites y sensores a escoger para un estudio de la calidad de aguas tendrá que estar basada primordialmente en las necesidades requeridas para cada estudio o monitoreo que se desee realizar, por lo que no existe a priori un satélite “ideal”.</p>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Para seleccionar el satélite que se utilizará para evaluar la calidad de agua del lago de estudio, debemos considerar el tamaño del lago y la resolución de las imágenes que queremos analizar, lo que determinará la resolución espacial. También se debe considerar la frecuencia con la que se quiere tener imágenes y la nubosidad del lugar, lo que determinará la resolución temporal. Los indicadores que se analizarán determinarán las resolución espacial y radiométrica.</p>
                <ul class="list-uno ml-[15px]">
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Análisis de sensores y satélites a utilizar a partir de los siguientes factores:
                    </li>
                </ul>
                <ul class="dashed ml-[15px]">
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">Resolución espacial: corresponde al mínimo detalle espacial que capta el sensor.</li>
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">Estos rangos reciben el nombre genérico de bandas.</li>
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">Resolución radiométrica: sensibilidad del detector para diferenciar pequeños cambios en la energía electromagnética incidente en él.</li>
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">Resolución temporal: frecuencia de pasadas del satélite sobre un mismo punto.</li>
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">Productos procesados y de libre acceso, disponibles para descarga.</li>
                </ul>

            </div>
            <div class="pt-[20px] pb-[50px] pl-[20px]">
                <ul class="list-uno pl-[15px] pt-[10px]">
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        <b>Análisis de nubosidad del área de estudio, que permita estimar la probabilidad de encontrar imágenes satelitales utilizables según la resolución temporal del satélite.</b>
                    </li>
                </ul>
                <ul class="dashed pl-[15px]">
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Fracción del cielo cubierta por nubes (N° de octas).
                    </li>
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Número de escenas con baja nubosidad dentro del período de estudio.
                    </li>
                </ul>
                <ul class="list-uno pl-[15px]">
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        <b>Análisis de las imágenes satelitales mediante softwares especializados.</b>
                    </li>
                </ul>
                <ul class="dashed pl-[15px]">
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Softwares libres.
                    </li>
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Softwares comerciales.
                    </li>
                </ul>

                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Para el caso de estudio del Lago Llanquihue, cuyo objetivo es probar tecnologías que permitan monitorear su calidad de agua, se revisaron los diferentes atributos, sobre todo la cubierta nubosa de la zona en diferentes días de un año. Dicha revisión multicriterio arrojó que las imágenes del satélite SENTINEL 3 serían las más adecuadas para los fines propuestos debido a:</p>

                <ul class="dashed md:pt-[15px] 3xl:pt-[20px] pl-[15px]">
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Su resolución radiométrica (16 bits).
                    </li>
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Su resolución espacial (300 metros).
                    </li>
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Su resolución temporal con relación al número de imágenes con baja nubosidad (igual o menor a 2 octas).
                    </li>
                </ul>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">La disponibilidad de productos procesados en diferentes sitios web.</p>
            </div>
        </div>
        <div class="grid grid-cols-1 item-gallery pb-[50px] justify-center content-center items-center">
            <a class="example-image-link" href="assets/img/teledeteccion/img-teledetecion-07.webp" data-lightbox="example-set" data-title="Árbol de decisión para la determinación de satélite a utilizar para el monitoreo en el lago Llanquihue"><img class="example-image img-fluid w-[70%] ml-[15%] rounded-[40px]" src="assets/img/teledeteccion/img-teledetecion-07.webp" alt=""/></a>
        </div>
    </div>
</section>

<section id="contenido-teledeteccion" class="md:mb-[50px] 3xl:mb-[100px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h4 class="titulos">TELEDETECCIÓN</h4>
            <h5 class="subtitulos">Datos en Línea</h5>
        </div>
    </div>
    <div class="container mx-auto md:mt-[50px] 3xl:mt-[80px]">
        <div class="flex flex-row justify-center">
            <label class="btn-dropdown btn-tele-año mr-[5px]">
                <div class="dd-button" id='yearshow'>AÑO</div>
                <input type="checkbox" class="dd-input" id="test">
                <ul class="dd-menu">
                    <?php
                    include('admin/include/conf/dbselect.php');
                    $sql1a = "SELECT * FROM `teledeteccion`  order by Year ASC, Cicle ASC, Type DESC";
                    $result = mysql_query($sql1a) or die('{"error"=>"Error actualizando la base de datos","status"=>"0"}');
                    $years = array();
                    $cicles = array();
                    $tipos = array();
                    while ($row = mysql_fetch_assoc($result)) {
                        $year = $row['Year'];
                        $years[] = $year;
                        $lastrow = $row;
                    }
                    foreach (array_unique($years) as $ano) {
                        echo "<li class='yearli' year='$ano'>$ano</li>";
                    }
                    ?>
                </ul>
            </label>

            <label class="btn-dropdown ml-[5px] ">
                <div class="dd-button" id='monthtitle'>MES</div>
                <input type="checkbox" class="dd-input" id="test">
                <ul class="dd-menu btn-tele-mes" id='monthshow'></ul>
            </label>
        </div>
    </div>

    <div class="container mx-auto md:py-[50px] 3xl:py-[70px]">
        <div class="flex flex-col items-center">
            <h6 class="md:text-[20px] 3xl:text-[22px] font-medium">Satélite:</h6>
            <p id='Titulo' class="md:text-[18px] 3xl:text-[20px] font-light"><?php echo $lastrow['Titulo'] ?></p>
        </div>
    </div>

    <div class="container mx-auto mt-[30px]">
        <div class="flex flex-row">
            <div class="flex w-9/12 flex-col content-center items-center justify-center tz-gallery" id='imagediv'>
                <?php
                if ($lastrow['ImagePath'] <> '') {
                    ?>
                    <a class="example-image-link" href="admin/api/<?php echo $lastrow['ImagePath'] ?>" data-lightbox="example-set">
                        <img class="example-image w-[50%] ml-[25%]" src="admin/api/<?php echo $lastrow['ImagePath'] ?>" alt=""/>
                    </a>
                    <?php
                } else {
                    ?>
                    <div style='border:2px solid #efefef;width:100%;height:500px;line-height: 500px;text-align:center'>Seleccione Año y Mes</div>
                    <?php
                }
                ?>
            </div>
            <div class="w-3/12">
                <?php
                if ($lastrow['Type'] == 1) {
                    $btn11 = "<button id='type_1' class='btn-metage typebtn btn-tele-activo' nro='1'>ATENUACIÓN DIFUSA</button>";
                } else {
                    $btn11 = "<button id='type_1' class='btn-metage typebtn' nro='1'>ATENUACIÓN DIFUSA</button>";
                }
                if ($lastrow['Type'] == 2) {
                    $btn12 = "<button id='type_2' class='btn-metage typebtn btn-tele-activo' nro='2'>MATERIAL EN SUSPENSIÓN</button>";
                } else {
                    $btn12 = "<button id='type_2' class='btn-metage typebtn' nro='2'>MATERIAL EN SUSPENSIÓN</button>";
                }
                if ($lastrow['Type'] == 3) {
                    $btn13 = "<button id='type_3' class='btn-metage typebtn btn-tele-activo' nro='3'>CLOROFILA</button>";
                } else {
                    $btn13 = "<button id='type_3' class='btn-metage typebtn' nro='3'>CLOROFILA</button>";
                }
                ?>
                <div><?php echo $btn11 ?></div>
                <div><?php echo $btn12 ?></div>
                <div><?php echo $btn13 ?></div>
                <div class="btn-distancia md:mt-[100px] 3xl:mt-[200px]"></div>
                <div>
                    <button class="btn-metage-down" onClick="javascript:window.open('https://coda.eumetsat.int/#/home', '_blank');">WEB DE DESCARGA<br>Imágenes satelitales</button>
                </div>
            </div>
        </div>
    </div>

</section>

<!---------- IN FOOTER DE LA PAGINA ----------->
<?php include('assets/layout/footer.php') ?>
<!------- PACK DE JS NECESARIOS PARA EL FUNCIONAMIENTO --------->
<?php include('assets/layout/script.php') ?>
<!------------------------------- GALLERIA ------------------------------->
<script src="assets/dist/js/lightbox-plus-jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var global_type = 1;
        var global_year = 0;
        var global_month = 0;
        <?php
        if ($lastrow['Year'] <> '') {
        ?>
        $.ajax({
            url: 'api/getMonth.php',
            type: 'POST',
            data: {
                year: <?php echo $lastrow['Year'] ?>,
                type: 't'
            },
            success: function(response) {
                global_year = <?php echo $lastrow['Year'] ?>;
                $('#yearshow').html(<?php echo $lastrow['Year'] ?>);
                $('#monthshow').html(response);
            },
        });
        <?php
        }
        ?>
        <?php
        if ($lastrow['Fecha'] <> '') {
        ?>
        $('#fechadiv').html("<?php echo $lastrow['Fecha']; ?>");
        $('#fdiv').show();
        <?php
        }
        ?>
        <?php
        if ($lastrow['Titulo'] <> '') {
        ?>
        $('#lugardiv').html("<?php echo $lastrow['Titulo']; ?>");
        $('#ldiv').show();
        <?php
        }
        ?>
        <?php
        if ($lastrow['Cicle'] <> '') {
        ?>
        global_month = <?php echo $lastrow['Cicle'] ?>;
        switch (global_month) {
            case 1:
                $('#monthtitle').html('Enero');
                break;
            case 2:
                $('#monthtitle').html('Febrero');
                break;
            case 3:
                $('#monthtitle').html('Marzo');
                break;
            case 4:
                $('#monthtitle').html('Abril');
                break;
            case 5:
                $('#monthtitle').html('Mayo');
                break;
            case 6:
                $('#monthtitle').html('Junio');
                break;
            case 7:
                $('#monthtitle').html('Julio');
                break;
            case 8:
                $('#monthtitle').html('Agosto');
                break;
            case 9:
                $('#monthtitle').html('Septiembre');
                break;
            case 10:
                $('#monthtitle').html('Octubre');
                break;
            case 11:
                $('#monthtitle').html('Noviembre');
                break;
            case 12:
                $('#monthtitle').html('Diciembre');
                break;
        }
        <?php
        }
        ?>
        <?php
        if ($lastrow['Type'] <> '') {
        ?>
        global_type = <?php echo $lastrow['Type'] ?>;
        <?php
        }
        ?>

        $(document).on("click", ".yearli", function() {
            var year = $(this).attr('year');
            $.ajax({
                url: 'api/getMonth.php',
                type: 'POST',
                data: {
                    year: year,
                    type: 't'
                },
                success: function(response) {
                    console.log("Success Get Month");
                    global_year = year;
                    $('#yearshow').html(year);
                    $('#monthshow').html(response);
                },
            });
        });

        $(document).on("click", ".monthli", function() {
            global_month = $(this).attr('month');
            $('#monthtitle').html($(this).attr('mes'));
            getImage();
        });

        $(document).on("click", ".typebtn", function() {
            global_type = $(this).attr('nro');
            getImage();
        });

        function getImage() {
            console.log("Get Image");
            if (global_month != 0 && global_type != '' && global_year != 0) {
                $.ajax({
                    url: 'api/getImage-teledeteccion.php',
                    type: 'POST',
                    data: {
                        year: global_year,
                        type: 't',
                        month: global_month,
                        tipo: global_type
                    },
                    success: function(response) {
                        console.log(response);
                        var data = JSON.parse(response);
                        if (data.a != '') {
                            $('#Titulo').html(data.Titulo);
                            $('.btn-metage').removeClass('btn-tele-activo');
                            $('#type_' + global_type).addClass('btn-tele-activo');
                            if (response != '') {
                                $('#imagediv').hide();
                                $('#imagediv').html(data.a);
                                $('#imagediv').fadeIn(1000);
                                baguetteBox.run('.tz-gallery');
                            } else {
                                $('#imagediv').html("<div style='border:2px solid #efefef;width:100%;height:500px;line-height: 500px;text-align:center'>No hay imagen</div>");
                                $('#imagediv').show();

                            }
                        }
                    },
                });
            }
        }

    });
</script>

</body>
</html>