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
            document.location = "/mobile/monitoreo.php";
        }
    </script>

    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Lago en Línea | Estación de Monitoreo</title>

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
            <h4 class="titulos">ESTACIÓN DE MONITOREO</h4>
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
                        <svg data-accordion-icon class="w-6 h-6 shrink-0 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
            </div>
        </div>
    </div>

    <div class="container mx-auto hidden" id="accordion-collapse-body-1" aria-labelledby="accordion-collapse-heading-1">
        <div class="grid grid-cols-2">
            <div class="pt-[20px] pb-[50px] pr-[20px]">
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">El proceso de recolección manual de muestras puede resultar ineficiente si se trata de <strong class="text-azul font-medium">registrar de manera recurrente.</strong> Gracias al desarrollo de las tecnologías de transmisión inalámbricas, el proceso de detección de parámetros de calidad de agua se puede realizar de forma remota y de manera continua en el tiempo.</p>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">La estación de monitoreo remoto es una <strong class="text-azul font-medium">boya equipada con distintos sensores de medición,</strong> acoplados a un sistema de almacenamiento y transmisión de datos que miden variables físicas y químicas del ambiente. Esta herramienta permite el registro y visualización en tiempo real, desde un dispositivo con acceso a Internet, de parámetros fundamentales para el monitoreo de la calidad del agua: temperatura, conductividad, oxígeno disuelto, saturación y turbidez.</p>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Esto es posible gracias al desarrollo de tecnologías WSN (acrónimo de Wireless Personal Area Network). El sistema requiere de una alimentación de energía, la cual se realiza por medio de placas solares instaladas en la torre de control. Una parte de la energía acumulada en las baterías se destina al funcionamiento de los sensores y a la transmisión, cuyos nodos emiten información hacia un receptor. Posteriormente, vía GPRS la información se transmite hacia una plataforma remota que permite visualizar los valores obtenidos para cada parámetro.</p>
            </div>
            <div class="pt-[20px] pb-[50px] pl-[20px]">
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Otras opciones de transmisión consideradas fueron: la radio frecuencia, muy útil para alcances lineales de entre 5 a 10 km pero que podría presentar interferencias; y la señal satelital, cuyo costo económico es más elevado.</p>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">La información que entrega esta tecnología tiene altos niveles de precisión y está disponible indistintamente de las condiciones climáticas; sin embargo, es importante tener en consideración que esta información corresponde solo a un solo punto en el lago, por lo que sus los resultados no deben utilizarse para sacar conclusiones sobre la calidad del volumen del cuerpo de agua.</p>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">La función de la boya en la estación de monitoreo es la de proveer un espacio flotante y anclado al suelo en el que poder fijar los sensores, que son los encargados de tomar las mediciones de calidad del agua. Si bien su uso está muy extendido, puede ser excluido en caso de contar con un punto fijo en el cual poder instalar los sensores, como por ejemplo bordes costeros, muelles o ductos de descarga.</p>
            </div>
        </div>
        <div class="grid grid-cols-3 item-gallery pb-[50px] justify-center content-center items-center">
            <a class="example-image-link px-[10px]" href="assets/img/monitoreo/img-monitoreo-01.webp" data-lightbox="example-set" data-title="Estación de monitoreo en la bahía de Puerto Varas.">
                <img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/monitoreo/img-monitoreo-01.webp" alt="Estación 1"/></a>

            <a class="example-image-link px-[10px]" href="assets/img/monitoreo/img-monitoreo-02.webp" data-lightbox="example-set" data-title="Esquema de instalación de la Estación de monitoreo.">
                <img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/monitoreo/img-monitoreo-02.webp" alt="Estación 2"/></a>

            <a class="example-image-link px-[10px]" href="assets/img/monitoreo/img-monitoreo-03.webp" data-lightbox="example-set" data-title="Estación de monitoreo.">
                <img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/monitoreo/img-monitoreo-03.webp" alt="Estación 3"/></a>
        </div>
    </div>

    <!------------------------- ITEMS ACORDION 2 ---------------------------->
    <div class="container mx-auto">
        <div class="flex justify-center content-center items-center py-[6px]">
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-2">
                    <button type="button" class="flex font-medium text-left text-oscuro text-[18px] w-[350px] items-center justify-between border border-[1px] border-azul rounded-[20px] px-[20px] pt-[8px] pb-[6px] focus:text-azul" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>INDICADORES</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
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
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]"><b>Temperatura del agua:</b> Es un factor ambiental fundamental, ya que tiene una relación directa con la mayoría de indicadores utilizados en la estación de monitoreo. Por ejemplo, cuando aumenta la temperatura, disminuye la cantidad de oxígeno disuelto en el agua. También está directamente relacionada con la conductividad eléctrica, ya que cuando mayor es la temperatura, mayor es el movimiento de los iones en el cuerpo de agua (sales y materia inorgánica con carga eléctrica), por ende, mayor será la conductividad.</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path class="w-[60px] h-[60px]" d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]"><b>Oxígeno disuelto:</b> Es la cantidad de oxígeno que está disuelto en el agua, fundamental para la vida en este ambiente. La mayoría de los organismos acuáticos necesitan oxígeno para sobrevivir y crecer, pero los requerimientos de oxígeno son variables. Por ejemplo, la trucha necesita niveles elevados para sobrevivir, mientras el bagre no.<br><br>La unidad de medida de este indicador es el milígramo por litro (mg/L). Valores inferiores a 3 mg/L son dañinos para el ecosistema acuático y pueden suponer la muerte de plantas y animales.</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path class="w-[60px] h-[60px]" d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]"><b>Nivel de conductividad eléctrica:</b> Indica la cantidad de sales y otros compuestos con carga eléctrica disueltos en el agua (iones). A mayor conductividad, mayor cantidad de iones. El origen de esta conductividad se debe a la descarga de iones  la tierra y las rocas por las que pasa el agua durante su ciclo descargan, por lo tanto, la geología de una cierta zona determina la cantidad y el tipo de iones en el agua. <br><br>La unidad de medida utilizada en este indicador es el microSiemens por centímetro (μS/cm). Dependiendo del origen del agua, esta puede presentar diferentes niveles de conductividad, por ejemplo, la conductividad del agua para consumo humano es de alrededor de 25 μS/cm, la del agua de mar promedio es de 50.000 μS/cm y la del lago Llanquihue suele estar por sobre los 90 μS/cm.</p>
                    </div>
                </div>
            </div>
            <div class="pt-[20px] pb-[50px] pl-[20px]">
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path class="w-[60px] h-[60px]" d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]"><b>Saturación:</b> Es el porcentaje de oxígeno disuelto con respecto a la cantidad máxima de oxígeno disuelto en el agua, a una temperatura y presión determinadas. Cuando aumenta la temperatura, disminuye la cantidad de oxígeno disuelto en el agua. Cuando el agua contiene todo el oxígeno disuelto a una temperatura dada, se dice que esta 100% saturada de oxígeno. El agua puede estar sobresaturada de oxígeno bajo ciertas condiciones, como por ejemplo en los rápidos de los ríos, o cuando las algas crecen y producen oxígeno más rápidamente del que puede ser usado o liberado a la atmósfera.</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path class="w-[60px] h-[60px]" d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]"><b>Turbidez:</b> Es la falta de transparencia en el agua debido a la presencia de partículas en suspensión como arcilla, sedimentos, materia orgánica e inorgánica finamente fraccionada, plancton y otros microorganismos. Mientras más sólidos en suspensión haya en el agua, el valor de turbidez será más alto. La unidad de medida es el NTU (Unidad Nefelométrica de Turbidez). <br><br>Estas partículas que se encuentran suspendidas en el agua absorben calor de la luz solar, haciendo que aumente la temperatura y se reduzca la concentración de oxígeno en el agua. A su vez, las partículas en suspensión dispersan la luz, lo que impide la actividad fotosintética de las plantas y algas, contribuyendo a bajar, aún más, la concentración de oxígeno. Estas partículas pueden ser dañinas para muchos organismos acuáticos, ya que pueden obstruir las branquias de los peces e impedir el libre desplazamiento de los macroinvertebrados acuáticos. <br><br>Sin embargo, este no es un indicador directo para determinar contaminación, ya que la turbidez puede ser ocasionada por causas naturales y/o momentáneas, tales como la presencia de arcillas provenientes de la erosión, movimientos de tierra en terrenos aledaños al cuerpo de agua, o la descomposición de la vegetación de la ribera.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------------- ITEMS ACORDION 3 ---------------------------->
    <div class="container mx-auto">
        <div class="flex justify-center content-center items-center py-[6px]">
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="flex font-medium text-left text-oscuro text-[18px] w-[350px] items-center justify-between border border-[1px] border-azul rounded-[20px] px-[20px] pt-[8px] pb-[6px] focus:text-azul" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                        <span>METODOLOGÍA</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
            </div>
        </div>
    </div>

    <div class="container mx-auto hidden" id="accordion-collapse-body-3" aria-labelledby="accordion-collapse-heading-3">
        <div class="grid grid-cols-2">
            <div class="pt-[20px] pb-[50px] pr-[20px]">
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path class="w-[60px] h-[60px]" d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Evaluación de la flotabilidad y análisis de optimización del tamaño y volumen de la boya a utilizar, teniendo en cuenta aspectos operativos y medioambientales como el oleaje en el lago, el viento o la profundidad en el punto de fijación.</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path class="w-[60px] h-[60px]" d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Optimización de sensores para que entreguen la mayor cantidad de información posible. El set de parámetros es amplio, por lo que se deben seleccionar aquellos que se consideren fundamentales para los objetivos de estudio y para los que existan sensores disponibles.</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-dash md:w-[20px] md:h-[80px] md:ml-[20px]" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Parámetros físicos: temperatura, turbidez, profundidad/presión, corriente de agua</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-dash md:w-[20px] md:h-[80px] md:ml-[20px]" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Parámetros químicos: conductividad, oxígeno disuelto, saturación, pH, nutrientes (NH4, NO2, PO4, NO3, Cl), materia orgánico disuelta.</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-dash md:w-[20px] md:h-[80px] md:ml-[20px]" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Biológicos: clorofila, algas verdes-azules/cianobacterias.</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path class="w-[60px] h-[60px]" d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Un estudio de correlación mostrará la dependencia de la temperatura, conductividad eléctrica y turbidez con los restantes parámetros.</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path class="w-[60px] h-[60px]" d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Evaluación de disponibilidad energética (radiación solar y almacenamiento en baterías) para el óptimo funcionamiento del sistema (periodicidad de los registros y transmisión de data).</p>
                    </div>
                </div>

            </div>

            <div class="pt-[20px] pb-[50px] pl-[20px]">
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path class="w-[60px] h-[60px]" d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Procesos administrativos: solicitud de permisos al SHOA (Servicio Hidrográfico y Oceanográfico de la Armada de Chile).</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path class="w-[60px] h-[60px]" d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Instalación: Para definir la localización de la estación de monitoreo deben tomarse en consideración varios factores: la profundidad del punto donde se instalará, ya que de ello dependerá el tipo de fondeo o muerto a colocar en el suelo lacustre; que esté lo suficientemente alejada de las áreas de recreo en el lago, minimizando la posibilidad de actos vandálicos en la unidad; la facilidad de transporte para la realización de labores de mantenimiento y la posibilidad de una buena transmisión de datos sin necesidad de recurrir a la señal satelital. Adicionalmente, si hay disponibilidad de datos, es importante considerar la dispersión de contaminantes en el lago.</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-1/12">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="100" fill="currentColor" class="bi bi-dot text-amarillo" viewBox="0 0 16 16">
                            <path class="w-[60px] h-[60px]" d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                    </div>
                    <div class="w-11/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Chequeo y mantención periódico de sensores (1 o 2 veces al mes).</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 item-gallery pb-[50px] justify-center content-center items-center">
            <a class="example-image-link" href="assets/img/monitoreo/img-monitoreo-04.webp" data-lightbox="example-set" data-title="Sensores de la Estación de monitoreo.">
                <img class="example-image img-fluid rounded-[40px] w-full h-[300px] px-[10px]" src="assets/img/monitoreo/img-monitoreo-04-1.webp" alt=""/>
            </a>
            <a class="example-image-link" href="assets/img/monitoreo/img-monitoreo-05.webp" data-lightbox="example-set" data-title="Instalación de la Estación de monitoreo en la bahía de Puerto Varas">
                <img class="example-image img-fluid rounded-[40px] w-full h-[300px] px-[10px]" src="assets/img/monitoreo/img-monitoreo-05-1.webp" alt=""/></a>
            <a class="example-image-link" href="assets/img/monitoreo/img-monitoreo-06.webp" data-lightbox="example-set" data-title="Luz de señalización">
                <img class="example-image img-fluid rounded-[40px] w-full h-[300px] px-[10px]" src="assets/img/monitoreo/img-monitoreo-06-1.webp" alt=""/></a>
        </div>
    </div>
</section>

<section id="contenido-monitoreo" class="md:mb-[50px] 3xl:mb-[100px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h4 class="titulos">ESTACIÓN DE MONITOREO</h4>
            <h5 class="subtitulos">Datos en Línea</h5>
        </div>
    </div>
    <div class="container mx-auto md:mt-[50px] 3xl:mt-[80px]">
        <div class="flex flex-row justify-center items-center content-center">
            <div class="w-8/12 flex justify-between items-center content-center">
                <div id='1d' class='allbuttons graphbuttonclicked w-[100px]'>1 DÍA</div>
                <div id='7d' class='allbuttons graphbutton w-[100px]'>7 DÍAS</div>
                <div id='30d' class='allbuttons graphbutton w-[100px]'>30 DÍAS</div>
                <div id='1y' class='allbuttons graphbutton w-[100px]'>1 AÑO</div>
                <div id='customp' class='allbuttons graphbutton btn-filtro-personalizado'>PERSONALIZADO</div>
                <div class="icono-boya">
                    <a href="#contenido-ubicacion" class="text-center md:text-[14px] 3xl:text-[16px] md:leading-[14px] 3xl:leading-[16px] font-medium hover:text-amarillo"><img src="assets/img/icono-boya.svg" alt="icono-boya" class="w-[35px] inline-block mr-[10px]">UBICACIÓN DE LA BOYA</a>
                </div>
            </div>
        </div>
    </div>
    <div id="filtrarfechadiv" class="container mx-auto md:mt-[30px]" style="display: none">
        <div class="flex flex-row justify-center items-center content-center">
            <div class="md:w-6/12 3xl:w-5/12 flex justify-between items-center content-cente">
                <label for="startDate" class="font-light md:text-[16px] 3xl:text-[18px]">Desde:</label>
                <input id="startDate"  type="date" value='<?php echo $_GET['startdate'] ?>' class="border-[1px] border-azul md:text-[15px] 3xl:text-[16px] md:leading-[15px] 3xl:leading-[16px] md:px-[20px] 3xl:px-[30px] py-[4px] rounded-[25px]">
                <laberl for="endDate" class="font-light md:text-[16px] 3xl:text-[18px]">Hasta:</laberl>
                <input id="endDate" type="date" value='<?php echo $_GET['enddate'] ?>' class="border-[1px] border-azul md:text-[15px] 3xl:text-[16px] md:leading-[15px] 3xl:leading-[16px] md:px-[20px] 3xl:px-[30px] py-[4px] rounded-[25px]">
                <button id='filtrarfecha' class="font-light bg-azul text-white border-[1px] border-azul md:text-[16px] 3xl:text-[18px] md:leading-[16px] 3xl:leading-[18px] border-[1px] border-azul rounded-[25px] md:px-[25px] 3xl:px-[35px] md:py-[6px] hover:bg-white hover:text-azul">Filtrar</button>
            </div>
        </div>
    </div>
    <div class="container mx-auto mt-[30px]">
        <div class="flex flex-row">
            <div class="w-10/12">
                <div id='chartdiv' style='display:none' class="w-full md:h-[572px] 3xl:h-[612px]"></div>
                <div id='chartdiv1' style='display:none' class="w-full md:h-[572px] 3xl:h-[612px]"></div>
                <div id='loader' style="width: 100%;height: 500px;display: flex;">
                    <img src='assets/img/loading.gif' style='width:70px;margin: auto;'>
                </div>
            </div>
            <div class="w-2/12 flex flex-col">
                <div class="box-info">
                    <div class="border-b-[1px] border-azul w-[80%] pl-[15px] pt-[6px]">
                        <h6 class="font-medium text-[15px] leading-[15px]">OXÍGENO</h6>
                    </div>
                    <div class="font-light md:text-[15px] 3xl:text-[18px] md:leading-[20px] 3xl:leading-[30px] pl-[15px] pt-[5px]" id="oxygen">
                        <div style="width: 100%;height: 100%;display: flex;">
                            <img src='assets/img/loading.gif' style='width:20px;margin: auto;'>
                        </div>
                    </div>
                    <div class="datef font-light text-[12px] pl-[15px]"></div>
                </div>
                <div class="box-info">
                    <div class="border-b-[1px] border-azul w-[80%] pl-[15px] pt-[6px]">
                        <h6 class="font-medium text-[15px] leading-[15px]">SATURACIÓN</h6>
                    </div>
                    <div class="font-light md:text-[15px] 3xl:text-[18px] md:leading-[20px] 3xl:leading-[30px] pl-[15px] pt-[5px]" id="saturation">
                        <div style="width: 100%;height: 100%;display: flex;">
                            <img src='assets/img/loading.gif' style='width:20px;margin: auto;'>
                        </div>
                    </div>
                    <div class="datef font-light text-[12px] pl-[15px]"></div>
                </div>
                <div class="box-info">
                    <div class="border-b-[1px] border-azul w-[80%] pl-[15px] pt-[6px]">
                        <h6 class="font-medium text-[15px] leading-[15px]">TEMPERATURA</h6>
                    </div>
                    <div class="font-light md:text-[15px] 3xl:text-[18px] md:leading-[20px] 3xl:leading-[30px] pl-[15px] pt-[5px]" id="temperature">
                        <div style="width: 100%;height: 100%;display: flex;">
                            <img src='assets/img/loading.gif' style='width:20px;margin: auto;'>
                        </div>
                    </div>
                    <div class="datef font-light text-[12px] pl-[15px]"></div>
                </div>

                <div class="box-info">
                    <div class="border-b-[1px] border-azul w-[80%] pl-[15px] pt-[6px]">
                        <h6 class="font-medium text-[15px] leading-[15px]">CONDUCTIVIDAD</h6>
                    </div>
                    <div class="font-light md:text-[15px] 3xl:text-[18px] md:leading-[20px] 3xl:leading-[30px] pl-[15px] pt-[5px]" id="conductividad">
                        <div style="width: 100%;height: 100%;display: flex;">
                            <img src='assets/img/loading.gif' style='width:20px;margin: auto;'>
                        </div>
                    </div>
                    <div class="datef font-light text-[12px] pl-[15px]"></div>
                </div>

                <div class="box-info">
                    <div class="border-b-[1px] border-azul w-[80%] pl-[15px] pt-[6px]">
                        <h6 class="font-medium text-[15px] leading-[15px]">TURBIDEZ</h6>
                    </div>
                    <div class="font-light md:text-[15px] 3xl:text-[18px] md:leading-[20px] 3xl:leading-[30px] pl-[15px] pt-[5px]" id="turvidity">
                        <div style="width: 100%;height: 100%;display: flex;">
                            <img src='assets/img/loading.gif' style='width:20px;margin: auto;'>
                        </div>
                    </div>
                    <div class="datef font-light text-[12px] pl-[15px]"></div>
                </div>
                <div class="box-descargar">
                    <div class="border-b-[1px] border-azul w-[80%] pl-[15px] pt-[6px]">
                        <h6 class="font-medium text-[15px] leading-[15px]">DESCARGAR <br>BASE DE DATOS</h6>
                    </div>
                    <select id='dbtype' class="sel-indicadores">
                        <option value="0">Selecciona el indicador</option>
                        <option value='1'>Oxigeno, Temperatura </br>y Saturación</option>
                        <option value='2'>Conductividad</option>
                        <option value='3'>Turbidez</option>
                    </select>
                    <div class="mt-[10px] mb-[5px]">
                        <button id='exportexcel' class="text-[14px] leading-[14px] font-light ml-[9px] md:w-[160px] 3xl:w-[160px] border-amarillo border-[1px] py-[3px] rounded-[25px] hover:bg-amarillo" data-modal-toggle="allright">DESCARGAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contenido-ubicacion" class="md:mb-[50px] 3xl:mb-[100px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h4 class="titulos">ESTACIÓN DE MONITOREO</h4>
            <h5 class="subtitulos">Ubicación de la boya</h5>
        </div>
    </div>
    <div class="container mx-auto md:mt-[50px] 3xl:mt-[80px]">
        <div class="flex">
            <div id="google-map-div" style="width: 100%" class="w-full md:h-[600px] 3xl:h-[650px]"></div>
        </div>
    </div>
</section>

<!------------------ MODAL DESCARGAR ARCHIVO EXCEL--------------------->

<div id="allright" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full modal">
    <div class="relative w-full h-full w-[500px] md:h-auto ">
        <!-- Modal content -->
        <div class="relative bg-white rounded-[40px] shadow px-[50px] py-[50px]">
            <!-- Modal body -->
            <div class="flex flex-col justify-center">
                <img src="assets/img/ventana-emergente.gif" alt="pop-up" class="w-[400px]">
                <p class="text-center mt-[30px]">Para descargar la base de datos, debes habilitar<br>
                    las ventanas emergentes en tu navegador.</p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-center">
                <button type="button" id='closemodal' data-modal-hide="allright"  class="bg-amarillo px-[60px] py-[8px] mt-[30px] rounded-[20px]"  data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>


<!------------------------------- IN FOOTER DE LA PAGINA ------------------------------->
<?php include('assets/layout/footer.php') ?>
<!------------------- PACK DE JS NECESARIOS PARA EL FUNCIONAMIENTO --------------------->
<?php include('assets/layout/script.php') ?>
<!------------------------------- GALLERIA ------------------------------->
<script src="assets/dist/js/lightbox-plus-jquery.min.js"></script>
<!------------------------------- GRAPHS ------------------------------->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<script src="assets/js/blockui.js"></script>
<script src="assets/js/exportexcel/excelexportjs.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#exportexcel').on('click', function() {
            var days = 365;
            var plotdivider1 = 1;
            var days1 = 4; // 4 desired
            var today = Math.round((new Date()).getTime() / 1000);
            var date = new Date();
            var yesterday = date.setDate(date.getDate() - days);
            var dbtype = $('#dbtype').val();
            if (dbtype == '0') {
                alert("Ingrese Tipo de base de datos");
                return false;
            }

            yesterday = Math.round(yesterday / 1000);
            //$.blockUI({ message: 'Descargardo Base de datos. Puede tardar unos momentos....' });
            //$('#allright').modal('show');
			console.log("api/get_data_range.php?since=" + yesterday + "&until=" + today);
            $.ajax({
                type: "GET",
                url: "api/get_data_range.php?since=" + yesterday + "&until=" + today,
                cache: false,
                success: function(output) {
					console.log(output);
                    try {
                        var data = JSON.parse(output);
                        var cond = JSON.parse(JSON.parse(output).cond);
                        var oxygen = JSON.parse(JSON.parse(output).oxygen);
                        var turvidity = JSON.parse(JSON.parse(output).turvidity);
                        //console.log(cond);

                        var chartData = [];
                        var firstDate = new Date();
                        firstDate.setDate(firstDate.getDate() - 100);
                        firstDate.setHours(0, 0, 0, 0);

                        // console.log("Plot");
                        //console.log(data);

                        var months = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dic'];
                        $('#table1values').html("");
                        var tablevalues = [];
                        var tableindex = [];

                        $('.tablecol').remove();
                        if (dbtype == 1) {
                            $('#datatables1-titles').append('<td class="tablecol"><b>Fecha</b></td>');
                            $('#datatables1-titles').append('<td class="tablecol"><b>Oxigeno</b></td>');
                            $('#datatables1-titles').append('<td class="tablecol"><b>Temperatura</b></td>');
                            $('#datatables1-titles').append('<td class="tablecol"><b>Saturacion</b></td>');
                        } else if (dbtype == 2) {
                            $('#datatables1-titles').append('<td class="tablecol"><b>Fecha</b></td>');
                            $('#datatables1-titles').append('<td class="tablecol"><b>Conductividad</b></td>');
                        } else if (dbtype == 3) {
                            $('#datatables1-titles').append('<td class="tablecol"><b>Fecha</b></td>');
                            $('#datatables1-titles').append('<td class="tablecol"><b>Turbidez</b></td>');
                        }

                        if (dbtype == 1) {
                            oxygen.oxygen.forEach(function(e, i) {
                                if (i % (days1 * plotdivider1) == 0) {
                                    var datename = e[0];
                                    if (datename && e[1]) {
                                        tablevalues.push({
                                            date: datename,
                                            oxygen: e[1],
                                            temperature: oxygen.temperature[i][1],
                                            saturation: oxygen.saturation[i][1],
                                            conductivity: '',
                                            turvidity: ''
                                        });
                                    }
                                    chartData.push({
                                        date: new Date(e[0] * 1000),
                                        oxygen_chart: e[1],
                                        temperature_chart: oxygen.temperature[i][1],
                                        saturation_chart: oxygen.saturation[i][1],
                                    });
                                }
                            });
                        }
                        if (dbtype == 2) {
                            cond.conductivity.forEach(function(e, i) {
                                if (i % (days1 * plotdivider1) == 0) {
                                    var datename = e[0];
                                    var esta = tablevalues.findIndex(function(val, index) {
                                        if (val.date == datename)
                                            return true;
                                    });
                                    if (esta != -1) { // Existe
                                        var auxval = tablevalues[esta];
                                        tablevalues[esta] = {
                                            date: auxval['date'],
                                            oxygen: auxval['oxygen'],
                                            temperature: auxval['temperature'],
                                            saturation: auxval['saturation'],
                                            conductivity: cond.conductivity[i][1],
                                            turvidity: ''
                                        };
                                    } else {
                                        if (datename && cond.conductivity[i][1]) {
                                            tablevalues.push({
                                                date: datename,
                                                oxygen: '',
                                                temperature: '',
                                                saturation: '',
                                                conductivity: cond.conductivity[i][1],
                                                turvidity: ''
                                            });
                                        }
                                    }
                                    chartData.push({
                                        date: new Date(e[0] * 1000),
                                        conductivity_chart: cond.conductivity[i][1],
                                    });
                                }
                            });
                        }
                        if (dbtype == 3) {
                            turvidity.turbidity.forEach(function(e, i) {
                                if (i % (days1 * plotdivider1) == 0) {
                                    var datename = e[0];
                                    var esta = tablevalues.findIndex(function(val, index) {
                                        if (val.date == datename)
                                            return true;
                                    });
                                    if (esta != -1) { // Existe
                                        var auxval = tablevalues[esta];
                                        tablevalues[esta] = {
                                            date: auxval['date'],
                                            oxygen: auxval['oxygen'],
                                            temperature: auxval['temperature'],
                                            saturation: auxval['saturation'],
                                            conductivity: auxval['conductivity'],
                                            turvidity: turvidity.turbidity[i][1]
                                        };
                                    } else {
                                        if (datename && turvidity.turbidity[i][1]) {
                                            tablevalues.push({
                                                date: datename,
                                                oxygen: '',
                                                temperature: '',
                                                saturation: '',
                                                conductivity: '',
                                                turvidity: turvidity.turbidity[i][1]
                                            });
                                        }
                                    }
                                    chartData.push({
                                        date: new Date(e[0] * 1000),
                                        turbidity_chart: turvidity.turbidity[i][1],
                                    });
                                }
                            });
                        }
                        tablevalues.sort((a, b) => {
                            let da = new Date(a.date * 1000),
                                db = new Date(b.date * 1000);
                            return da - db;
                        });

                        tablevalues.forEach((value, index, array) => {
                            var date = value.date;
                            var dg = new Date(date * 1000);
                            formatted = dg.getDate() + ' ' + months[dg.getMonth()] + ' ' +
                                dg.getFullYear() + ' ' + pad(dg.getHours(), 2) + ':' + pad(dg.getMinutes(), 2) + ':' +
                                pad(dg.getSeconds(), 2);
                            var oxygen = value.oxygen;
                            var temperature = value.temperature;
                            var saturation = value.saturation;
                            var conductivity = value.conductivity;
                            var turvidity = value.turvidity;
                            if (dbtype == 1) {
                                $('#table1values').append("<tr><td>" + formatted + "</td><td>" + oxygen + "</td><td>" + temperature + "</td><td>" + saturation + "</td></tr>");
                            } else if (dbtype == 2) {
                                $('#table1values').append("<tr><td>" + formatted + "</td><td>" + conductivity + "</td></tr>");
                            } else if (dbtype == 3) {
                                $('#table1values').append("<tr><td>" + formatted + "</td><td>" + turvidity + "</td></tr>");
                            }
                        });

                    } catch (e) {
                        console.log(e);
                    }
                    //$.unblockUI();
                    $("#datatables1").excelexportjs({
                        containerid: "datatables1",
                        datatype: 'table'
                    });
                },
                error: function(output, e, f) {
                    console.log(e);
                }
            });
        });

        /*
                    $('#exportexcel').on('click', function() {
                        $("#datatables1").excelexportjs({
                            containerid: "datatables1",
                            datatype: 'table'
                        });
                    });
        */
        $('#filtrarfecha').click(function () {
            $('#chartdiv').hide();
            $('#chartdiv1').hide();
            $('#loader').show();

            var since = $('#startDate').val();
            var until = $('#endDate').val();

            var d = new Date();
            d.setDate(d.getDate()-365);
            var oneyear = d.toISOString().split('T')[0];

            if (since == '') {
                alert("Por favor, ingrese Fecha desde");
                $('#loader').hide();
                return false;
            }
            if (until == '') {
                alert("Por favor, ingrese Fecha hasta");
                $('#loader').hide();
                return false;
            }
            if (since < oneyear) {
                alert("Por favor, ingrese una fecha superior a un año para atras");
                $('#loader').hide();
                return false;
            }
            if (since > until) {
                alert("Fecha Desde no puede ser mayor a fecha Hasta");
                $('#loader').hide();
                return false;
            }

            getCustomGraphData(since,until);
        })

        $('.allbuttons').click(function() {
            $('.allbuttons').removeClass("graphbutton");
            $('.allbuttons').removeClass("graphbuttonclicked");
            $('.allbuttons').addClass("graphbutton");
            $(this).addClass("graphbuttonclicked");
            var id = $(this).attr('id');

            if (id == 'customp') {
                $('#chartdiv').hide();
                $('#chartdiv1').hide();
                $('#filtrarfechadiv').show();
                $('#loader').hide();
            } else {
                $('#filtrarfechadiv').hide();
                $('#chartdiv').hide();
                $('#chartdiv1').hide();
                $('#loader').show();
            }


            if (id == '1d') {
                getGraphData(1);
            } else if (id == '7d') {
                getGraphData(7);
            } else if (id == '30d') {
                getGraphData(30);
            } else if (id == '1y') {
                getGraphData(365);
            }

        });

        function getCustomGraphData(since,until) {
            var s = Math.round((new Date(since)).getTime() / 1000);
            var u = Math.round((new Date(until)).getTime() / 1000);
            var diff =  (new Date(until)).getTime() - (new Date(since)).getTime();
            const days = Math.ceil(diff / (1000 * 60 * 60 * 24));
            console.log("api/get_data_range.php?since=" + yesterday + "&until=" + today);
			$.ajax({
                type: "GET",
                url: "api/get_data_range.php?since=" + s + "&until=" + u,
                cache: false,
                success: function(output) {
					console.log(output);
                    try {
                        var data = JSON.parse(output);
                        var cond = JSON.parse(JSON.parse(output).cond);
                        var oxygen = JSON.parse(JSON.parse(output).oxygen);
                        var turvidity = JSON.parse(JSON.parse(output).turvidity);
                        drawPlot(cond, oxygen, turvidity, days, 1);
                    } catch (e) {
                        console.log(e);
                    }
                },
                error: function(output, e, f) {
                    console.log(e);
                }
            });
        }

        function getGraphData(days) {
            var today = Math.round((new Date()).getTime() / 1000);
            var date = new Date();
            var yesterday = date.setDate(date.getDate() - days);
            yesterday = Math.round(yesterday / 1000);
            console.log("api/get_data_range.php?since=" + yesterday + "&until=" + today);
			$.ajax({
                type: "GET",
                url: "api/get_data_range.php?since=" + yesterday + "&until=" + today,
                cache: false,
                success: function(output) {
					console.log(output);
                    try {
                        var data = JSON.parse(output);
                        var cond = JSON.parse(JSON.parse(output).cond);
                        var oxygen = JSON.parse(JSON.parse(output).oxygen);
                        var turvidity = JSON.parse(JSON.parse(output).turvidity);
                        drawPlot(cond, oxygen, turvidity, days,0);
                    } catch (e) {
                        console.log(e);
                    }
                },
                error: function(output, e, f) {
                    console.log(e);
                }
            });
        }

        function td(day) {
            var ts = day * 1000;
            var mydate = new Date(ts);

            var m_names = new Array("Ene.", "Feb.", "Mar.",
                "Abr.", "May.", "Jun.", "Jul.", "Ago.", "Sep.",
                "Oct.", "Nov.", "Dic.");

            var curr_date = mydate.getDate();
            var curr_month = mydate.getMonth();
            var curr_year = mydate.getFullYear();

            var mydatestr = '' + curr_date + ' ' +
                m_names[curr_month] + ' ' +
                curr_year + ' ' +
                mydate.getHours() + ':' +
                mydate.getMinutes() + ':' +
                mydate.getSeconds();
            return mydatestr;
        }

        $.ajax({
            type: "GET",
            url: "api/monitor_sensor_last_data2.php",
            cache: false,
            success: function(output) {
				console.log(output);
                try {
                    var data = JSON.parse(output);
                    var cond = JSON.parse(data.cond);
                    var turvidity = JSON.parse(data.turvidity);
                    var oxygen = JSON.parse(data.oxygen);
                    $('#conductividad').html(cond.conductivity + " µS/cm");
                    $('#datecond').html(td(cond.timestamp));
                    $('#turvidity').html(turvidity.turbidity + " NTU");
                    $('#dateturv').html(td(turvidity.timestamp));
                    $('#oxygen').html(oxygen.oxygen + " mg/l");
                    $('#saturation').html(oxygen.saturation + " %");
                    $('#temperature').html(oxygen.temperature + " °C");
                    $('.datef').html(td(oxygen.timestamp));

                    getGraphData(1);

                    /*console.log(data[0].last_data);
                    $('#oxygen').html(data[0].last_data.oxygen + " mg/l");
                    $('#saturation').html(data[0].last_data.saturation + " %") ;
                    $('#temperature').html(data[0].last_data.temperature + " °C") ;
                    $('#conductividad').html(data['cond'].conductivity + " °C") ;
                    $('#temperature').html(data[0].last_data.temperature + " °C") ;
                    $('.datef').html(mydatestr);	*/
                } catch (e) {}
            },
            error: function(output, e, f) {
                console.log(e);
            }
        });

    });
</script>

<script>
    var plotdivider = 5;

    function pad(num, size) {
        num = num.toString();
        while (num.length < size) num = "0" + num;
        return num;
    }

    function drawPlot(cond, oxygen, turvidity, days, graph) {

        am4core.ready(function() {

            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end

            // Create chart instance
            if (graph == 1) {
                var chart = am4core.create("chartdiv1", am4charts.XYChart);
            } else {
                var chart = am4core.create("chartdiv", am4charts.XYChart);
            }
            //

            // Increase contrast by taking evey second color
            chart.colors.step = 2;

            // Add data
            chart.data = generateChartData(days);
            if (graph == 1) {
                $('#chartdiv1').show();
            } else {
                $('#chartdiv').show();
            }
            $('#loader').hide();

            // Create axes
            var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
            dateAxis.renderer.minGridDistance = 50;

            // Create series
            function createAxisAndSeries(field, name, opposite, bullet) {
                var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                if (chart.yAxes.indexOf(valueAxis) != 0) {
                    valueAxis.syncWithAxis = chart.yAxes.getIndex(0);
                }

                var series = chart.series.push(new am4charts.LineSeries());
                series.dataFields.valueY = field;
                series.dataFields.dateX = "date";
                series.strokeWidth = 1.5;
                series.yAxis = valueAxis;
                series.name = name;
                series.tooltipText = "{name}: [bold]{valueY}[/]";
                series.tensionX = 0.8;
                series.showOnInit = true;

                var interfaceColors = new am4core.InterfaceColorSet();
                /*
          switch(bullet) {
            case "triangle":
              var bullet = series.bullets.push(new am4charts.Bullet());
              bullet.width = 12;
              bullet.height = 12;
              bullet.horizontalCenter = "middle";
              bullet.verticalCenter = "middle";

              var triangle = bullet.createChild(am4core.Triangle);
              triangle.stroke = interfaceColors.getFor("background");
              triangle.strokeWidth = 2;
              triangle.direction = "top";
              triangle.width = 12;
              triangle.height = 12;
              break;
            case "rectangle":
              var bullet = series.bullets.push(new am4charts.Bullet());
              bullet.width = 10;
              bullet.height = 10;
              bullet.horizontalCenter = "middle";
              bullet.verticalCenter = "middle";

              var rectangle = bullet.createChild(am4core.Rectangle);
              rectangle.stroke = interfaceColors.getFor("background");
              rectangle.strokeWidth = 2;
              rectangle.width = 10;
              rectangle.height = 10;
              break;
            default:
              var bullet = series.bullets.push(new am4charts.CircleBullet());
              bullet.circle.stroke = interfaceColors.getFor("background");
              bullet.circle.strokeWidth = 2;
              break;
          }
          */
                valueAxis.renderer.line.strokeOpacity = 1;
                valueAxis.renderer.line.strokeWidth = 2;
                valueAxis.renderer.line.stroke = series.stroke;
                valueAxis.renderer.labels.template.fill = series.stroke;
                valueAxis.renderer.opposite = opposite;
            }

            createAxisAndSeries("oxygen_chart", "OXIGENO", false, "circle");
            createAxisAndSeries("saturation_chart", "SATURACIÓN", true, "triangle");
            createAxisAndSeries("temperature_chart", "TEMPERATURA", true, "rectangle");
            createAxisAndSeries("conductivity_chart", "CONDUCTIVIDAD", true, "rectangle");
            createAxisAndSeries("turbidity_chart", "TURBIDEZ", true, "rectangle");

            // Add legend
            chart.legend = new am4charts.Legend();

            // Add cursor
            chart.cursor = new am4charts.XYCursor();

            // generate some random data, quite different range
            function generateChartData(days) {
                var chartData = [];
                var firstDate = new Date();
                firstDate.setDate(firstDate.getDate() - 100);
                firstDate.setHours(0, 0, 0, 0);


                // console.log("Plot");
                //console.log(data);

                var months = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dic'];
                $('#table1values').html("");
                var tablevalues = [];
                var tableindex = [];
                oxygen.oxygen.forEach(function(e, i) {

                    if (i % (days * plotdivider) == 0) {
                        var datename = e[0];
                        if (datename && e[1]) {
                            tablevalues.push({
                                date: datename,
                                oxygen: e[1],
                                temperature: oxygen.temperature[i][1],
                                saturation: oxygen.saturation[i][1],
                                conductivity: '',
                                turvidity: ''
                            });
                        }
                        chartData.push({
                            date: new Date(e[0] * 1000),
                            oxygen_chart: e[1],
                            temperature_chart: oxygen.temperature[i][1],
                            saturation_chart: oxygen.saturation[i][1],
                        });
                    }
                });

                cond.conductivity.forEach(function(e, i) {
                    if (i % (days * plotdivider) == 0) {
                        var datename = e[0];
                        var esta = tablevalues.findIndex(function(val, index) {
                            if (val.date == datename)
                                return true;
                        });
                        if (esta != -1) { // Existe
                            var auxval = tablevalues[esta];
                            tablevalues[esta] = {
                                date: auxval['date'],
                                oxygen: auxval['oxygen'],
                                temperature: auxval['temperature'],
                                saturation: auxval['saturation'],
                                conductivity: cond.conductivity[i][1],
                                turvidity: ''
                            };
                        } else {
                            if (datename && cond.conductivity[i][1]) {
                                tablevalues.push({
                                    date: datename,
                                    oxygen: '',
                                    temperature: '',
                                    saturation: '',
                                    conductivity: cond.conductivity[i][1],
                                    turvidity: ''
                                });
                            }
                        }
                        chartData.push({
                            date: new Date(e[0] * 1000),
                            conductivity_chart: cond.conductivity[i][1],
                        });
                    }
                });

                turvidity.turbidity.forEach(function(e, i) {
                    if (i % (days * plotdivider) == 0) {
                        var datename = e[0];
                        var esta = tablevalues.findIndex(function(val, index) {
                            if (val.date == datename)
                                return true;
                        });
                        if (esta != -1) { // Existe
                            var auxval = tablevalues[esta];
                            tablevalues[esta] = {
                                date: auxval['date'],
                                oxygen: auxval['oxygen'],
                                temperature: auxval['temperature'],
                                saturation: auxval['saturation'],
                                conductivity: auxval['conductivity'],
                                turvidity: turvidity.turbidity[i][1]
                            };
                        } else {
                            if (datename && turvidity.turbidity[i][1]) {
                                tablevalues.push({
                                    date: datename,
                                    oxygen: '',
                                    temperature: '',
                                    saturation: '',
                                    conductivity: '',
                                    turvidity: turvidity.turbidity[i][1]
                                });
                            }
                        }
                        chartData.push({
                            date: new Date(e[0] * 1000),
                            turbidity_chart: turvidity.turbidity[i][1],
                        });
                    }
                });

                tablevalues.sort((a, b) => {
                    let da = new Date(a.date * 1000),
                        db = new Date(b.date * 1000);
                    return da - db;
                });

                tablevalues.forEach((value, index, array) => {
                    var date = value.date;
                    var dg = new Date(date * 1000);
                    formatted = dg.getDate() + ' ' + months[dg.getMonth()] + ' ' +
                        dg.getFullYear() + ' ' + pad(dg.getHours(), 2) + ':' + pad(dg.getMinutes(), 2) + ':' +
                        pad(dg.getSeconds(), 2);
                    var oxygen = value.oxygen;
                    var temperature = value.temperature;
                    var saturation = value.saturation;
                    var conductivity = value.conductivity;
                    var turvidity = value.turvidity;
                    $('#table1values').append("<tr><td>" + formatted + "</td><td>" + oxygen + "</td><td>" + temperature + "</td><td>" + saturation + "</td><td>" + conductivity + "</td><td>" + turvidity + "</td></tr>");
                });
                return chartData;
            }

        }); // end am4core.ready()
    }
</script>

<script>
    <?php

    ?>
    var map;

    function initMap() {

        <?php
        include('admin/include/conf/dbselect.php');
        $sql = "SELECT * FROM ubicacion";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            $Lng = $row['Lng'];
            $Lat = $row['Lat'];
        }
        $StadiumLat = $Lat;
        $StadiumLng = $Lng;
        if ($StadiumLat <> 0 && $StadiumLng <> 0) {
        ?>
        var myLatLng = {
            lat: <?php echo $StadiumLat ?>,
            lng: <?php echo $StadiumLng ?>
        };
        var myzoom = 14;
        <?php
        } else {
        ?>
        var myLatLng = {
            lat: -34.397,
            lng: 150.644
        };
        var myzoom = 8;
        <?php
        }
        ?>
        map = new google.maps.Map(document.getElementById('google-map-div'), {
            center: myLatLng,
            zoom: myzoom
        });
        <?php
        if ($StadiumLat <> 0 && $StadiumLng <> 0) {
        ?>
        var marker = new google.maps.Marker({
            animation: google.maps.Animation.DROP,
            position: myLatLng,
            draggable: false,
            map: map,
            icon: {
                url: "assets/img/icono-boya.svg",
                scaledSize: new google.maps.Size(39, 72)
            },
        });
        <?php
        } else {
        ?>
        var marker = new google.maps.Marker({
            animation: google.maps.Animation.DROP,
            draggable: true,
            map: map,
        });
        <?php
        }
        ?>


        function placeMarker(location) {
            marker.setPosition(location)
            $('#StadiumLat').val(location.lat().toFixed(7));
            $('#StadiumLng').val(location.lng().toFixed(7));
        }

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });

        google.maps.event.addListener(searchBox, 'places_changed', function() {
            searchBox.set('map', null);


            var places = searchBox.getPlaces();

            var bounds = new google.maps.LatLngBounds();
            var i, place;
            for (i = 0; place = places[i]; i++) {
                (function(place) {
                    marker.setPosition(place.geometry.location)
                    $('#StadiumLat').val(place.geometry.location.lat().toFixed(7));
                    $('#StadiumLng').val(place.geometry.location.lng().toFixed(7));
                    bounds.extend(place.geometry.location);
                }(place));

            }
            map.fitBounds(bounds);
            searchBox.set('map', map);
            map.setZoom(Math.min(map.getZoom(), 12));

        });

    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnydyACjDEVvZCe2B3zs23KyD_Yf5YWIw&libraries=places&callback=initMap" async defer></script>

<script src="assets/js/monitor.js"></script>

</body>
</html>