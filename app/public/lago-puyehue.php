<?php
include('admin/include/conf/dbselect.php');
?>

<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>
<html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="scroll-smooth" lang="es">
<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        var dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            document.location = "/mobile/lago-sin-huella.php";
        }
    </script>
    <!-- SEO META TAGS -->
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Lago en Línea | Lago Sin Huella</title>

    <!-- CSS PERSONALIZADO -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/dist/css/lightbox.min.css">

    <!-- SEO ORGANICO -->
    <meta http-equiv="content-Type" content="text/html; ISO-8859-1">
    <meta name="DC.Language" scheme="RFC1766" content="Spanish">
    <meta name="author" content="Asesoría Indaga">
    <meta name="reply-to" content="edgardo@indaga.me">
    <link rev="made" href="mailto:edgardo@indaga.me">
    <meta name="description"
          content="Datos en línea para el monitoreo de las condiciones ambientales del lago Llanquihue.">
    <meta name="keywords"
          content="Monitoreo,lago,lago llanquihue,lago en linea,información,ambiental,evaluación,tecnologías,condiciones,ambientales,región,los lagos,osorno,profundidad,182m,hidrografia,glaciar,chile,general carrera,rios,afluentes,volcan,calbuco,tepu,maullín,puerto varas,puerto montt,cordillera,andes,clima,selva valdiviana,frutillar,las cascadas,agroquimicos,pisciculturas,más azul,patagonia,universidad,san sebastian">
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
        (function (w, d, s, l, i) {
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
    <!------------------------------- GRAPHS ------------------------------->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="//www.amcharts.com/lib/4/lang/es_ES.js"></script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKZ9BW4" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!------------------------------- CABEZAL DE LA PAGINA ------------------------------>
<?php include('assets/layout/header-puyehue.php') ?>

<!------------------------------- IMAGE PRINCIPAL DE LA PAGINA ---------------------->
<main>
    <div class="bg-inicio-02 bg-no-repeat bg-cover bg-bottom h-[100vh]">
        <div class="container mx-auto">
            <div class="flex flex-row justify-center content-center items-center h-[100vh]">
                <img src="assets/img/puyehue/logo-big.svg" alt="Logo Principal" class="md:h-[360px] 3xl:h-[400px]">
            </div>
        </div>
    </div>
    <div class="bg-[#3ba3dd]">
        <div class="container mx-auto flex flex-row items-center justify-center h-[100px]">
            <img src="assets/img/puyehue/blumar-logo.svg" alt="" class="h-[35px] mr-[15px]">
            <img src="assets/img/puyehue/logo-impulsa.svg" alt="" class="h-[65px] ml-[15px]">
        </div>
    </div>
    <div class="md:py-[70px] 3xl:py-[100px]">
        <div class="container mx-auto flex flex-col items-center max-w-[1100px]">
            <h3 class="text-[#3ba3dd] text-[40px] font-medium leading-[44px] mb-[20px]">Lago Puyehue</h3>

            <p class="text-center mt-[20px] font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">El lago Puyehue, de origen glacial, se
                                                                                  extiende entre las regiones de Los
                                                                                  Lagos y Los Ríos, en el corazón
                                                                                  del sur de Chile. Su formación es el
                                                                                  resultado de los procesos geológicos y
                                                                                  climáticos que moldearon el
                                                                                  paisaje durante la última glaciación
                                                                                  del período Cuaternario, cuando el
                                                                                  agua del deshielo llenó las
                                                                                  depresiones del terreno, dando lugar a
                                                                                  este majestuoso lago.
            </p>

            <p class="text-center mt-[30px] font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">Ubicado en una región volcánicamente
                                                                                  activa, el lago Puyehue se encuentra
                                                                                  cerca de los volcanes Puyehue y
                                                                                  Cordón Caulle, cuyas erupciones han
                                                                                  enriquecido el suelo y esculpido el
                                                                                  paisaje circundante. Recibe aguas
                                                                                  de diversos ríos y arroyos, entre los
                                                                                  que destaca el río Golgol, que fluye
                                                                                  desde los Andes, y descarga
                                                                                  sus aguas hacia el océano Pacífico a
                                                                                  través del río Pilmaiquén.</p>

            <p class="text-center mt-[30px] font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">Este lago no solo es un importante
                                                                                  recurso hídrico, sino también un
                                                                                  atractivo turístico de renombre,
                                                                                  rodeado por imponentes paisajes
                                                                                  naturales que incluyen bosques
                                                                                  nativos, termas, el Parque Nacional
                                                                                  Puyehue y vistas espectaculares de los
                                                                                  Andes. Es un destino ideal para
                                                                                  actividades al aire libre como
                                                                                  pesca, senderismo y ecoturismo,
                                                                                  consolidándose como un lugar
                                                                                  emblemático para quienes buscan
                                                                                  disfrutar de
                                                                                  la riqueza natural del sur de
                                                                                  Chile.</p>
        </div>
    </div>

    <!------------------------------- TABS ------------------------------>
    <div class="md:pt-[20px] md:pb-[70px] 3xl:pb-[100px]">
        <div class="container mx-auto max-w-[1100px]">
            <div class="flex flex-col items-center">
                <!-- Contenedor de Pestañas -->
                <div class="flex justify-center border-b border-[#3ba3dd] text-[#333333]">
                    <button id="tab1"
                            class="font-sora tab-btn md:text-[16px] 3xl:text-[18px] font-light py-2 px-4 border-t-[1px] border-x-[1px] mr-[6px] rounded-t-[6px] hover:bg-[#3ba3dd] hover:text-[#ffffff] hover:font-medium">
                        El Proyecto
                    </button>
                    <button id="tab2"
                            class="font-sora tab-btn md:text-[16px] 3xl:text-[18px] font-light py-2 px-4 border-t-[1px] border-x-[1px] mr-[6px] rounded-t-[6px] hover:bg-[#3ba3dd] hover:text-[#ffffff] hover:font-medium">
                        El Plan
                    </button>
                    <button id="tab3"
                            class="font-sora tab-btn md:text-[16px] 3xl:text-[18px] font-light py-2 px-4 border-t-[1px] border-x-[1px] mr-[6px] rounded-t-[6px] hover:bg-[#3ba3dd] hover:text-[#ffffff] hover:font-medium">
                        Colaboración
                    </button>
                    <button id="tab4"
                            class="font-sora tab-btn md:text-[16px] 3xl:text-[18px] font-light py-2 px-4 border-t-[1px] border-x-[1px] ml-[6px] rounded-t-[6px] hover:bg-[#3ba3dd] hover:text-[#ffffff] hover:font-medium">
                        Legado
                    </button>
                </div>

                <!-- Contenedores de contenido -->
                <div id="content1" class="tab-content mt-6 hidden">
                    <div class="grid grid-cols-3">
                        <div class="col-span-1 pt-[40px]">
                            <img src="assets/img/puyehue/img-proyecto.webp" alt="Lago Puyehue" class="w-[100%]" >
                        </div>
                        <div class="col-span-2 pl-[40px]">
                            <h3 class="font-sora md:text-[22px] 3xl:text-[30px] text-[#3ba3dd] mt-[40px] font-semibold">El Proyecto</h3>
                            <p class="mt-[30px] font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">
                                El plan de monitoreo del lago Puyehue es una iniciativa de colaboración público-privada que busca proteger el lago Puyehue, situado en la Región de Los Lagos y Los Ríos, en el sur de Chile. Su principal objetivo es monitorear y mejorar la calidad de sus aguas, asegurando la preservación de este ecosistema natural frente a los desafíos ambientales de la región.
                            </p>
                            <p class="mt-[20px] font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">
                                El propósito del plan de monitoreo del lago Puyehue es evaluar el estado de las aguas del lago y prevenir el ingreso de contaminantes que puedan alterar su equilibrio ecológico. Además, se busca promover una gestión sostenible que pueda replicarse en otros lagos del sur de Chile, destacando la importancia de la cooperación entre comunidades locales, autoridades y organizaciones privadas en la conservación de los recursos hídricos.
                            </p>
                        </div>
                    </div>
                </div>

                <div id="content2" class="tab-content mt-6 hidden">
                    <div class="grid grid-cols-3">
                        <div class="col-span-1 pt-[40px]">
                            <img src="assets/img/puyehue/img-plan.webp" alt="Plan" class="w-[100%]">
                        </div>
                        <div class="col-span-2 pl-[40px]">
                            <h3 class="font-sora md:text-[22px] 3xl:text-[30px] text-[#3ba3dd] mt-[40px] font-semibold">¿Cómo nace este plan? </h3>
                            <p class="mt-[30px] font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">En 2021, la Corporación Impulsa Puyehue reconoció la urgencia de tomar medidas para prevenir que el lago Puyehue enfrentara problemas de contaminación similares a los observados en otros lagos de la región. En respuesta a esta necesidad, se conformó una comisión de trabajo integrada por expertos, actores locales y jóvenes científicos de la empresa Southern Tech. Ese mismo año, la Corporación inició una colaboración estratégica con la Universidad San Sebastián a través del Programa Territorial Hito Más Azul, con el objetivo de fortalecer el sistema de monitoreo del lago mediante el aporte de conocimientos técnicos, capacidades analíticas y apoyo en la implementación de herramientas de monitoreo, contribuyendo así a optimizar las estrategias de conservación.</p>
                            <p class="mt-[20px] font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">De forma paralela, gracias al trabajo de la comisión y a la colaboración de Southern Tech, se logró adquirir un computador industrial equipado con sensores de alta precisión. Estos dispositivos permiten medir parámetros fundamentales como la temperatura, el pH, la conductividad y el oxígeno disuelto, generando datos críticos para el monitoreo continuo y la protección del ecosistema del lago.</p>
                        </div>
                    </div>
                </div>

                <div id="content3" class="tab-content mt-6 hidden">
                    <div class="grid grid-cols-3">
                        <div class="col-span-1 pt-[40px]">
                            <img src="assets/img/puyehue/img-colaboracion.webp" alt="Colaboración" class="w-[100%]">
                        </div>
                        <div class="col-span-2 pl-[40px]">
                            <h3 class="font-sora md:text-[22px] 3xl:text-[30px] text-[#3ba3dd] mt-[40px] font-semibold">Una estrategia colaborativa</h3>
                            <p class="mt-[30px] font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">El Plan Conservación Puyehue se apoya en la articulación de múltiples actores: comunidades locales, autoridades, académicos y empresas tecnológicas, quienes aportan sus conocimientos y recursos para diseñar estrategias de monitoreo y acciones concretas que ayuden a mitigar los riesgos ambientales.
                            </p>
                        </div>
                    </div>
                </div>

                <div id="content4" class="tab-content mt-6 hidden">
                    <div class="grid grid-cols-3">
                        <div class="col-span-1 pt-[40px]">
                            <img src="assets/img/puyehue/img-legado.webp" alt="Legado" class="w-[100%]">
                        </div>
                        <div class="col-span-2 pl-[40px]">
                            <h3 class="font-sora md:text-[22px] 3xl:text-[30px] text-[#3ba3dd] mt-[40px] font-semibold">Un legado para la región</h3>
                            <p class="mt-[30px] font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">Con la implementación de este Plan, se espera que el lago Puyehue no solo se preserve como un recurso natural invaluable, sino que también continúe siendo un destino turístico destacado, conocido por sus paisajes, termas y oportunidades de ecoturismo. Este modelo de gestión podría inspirar iniciativas similares en otros cuerpos de agua de la región, promoviendo un enfoque integral para la conservación del patrimonio natural de Chile.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------- TABS ------------------------------>
    <div class="md:py-[70px] 3xl:py-[100px] bg-[#3ba3dd4d]">
        <div class="container mx-auto max-w-[1100px]">
            <div class="flex items-center justify-center mb-[40px]">
                <h3 class="text-[#3ba3dd] text-[40px] font-medium leading-[44px] mb-[30px]">INDICADORES</h3>
            </div>
            <div class="grid grid-cols-2 gap-[40px]">
                <div class="col-span-1">
                    <h3 class="text-[#3ba3dd] text-[30px] font-medium leading-[36px] mb-[30px]">Oxígeno disuelto</h3>
                    <p class="font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">Es la cantidad de oxígeno que está disuelto en el agua, fundamental para la vida en este ambiente. La mayoría de los organismos acuáticos necesitan oxígeno para sobrevivir y crecer, pero los requerimientos de oxígeno son variables. Por ejemplo, la trucha necesita niveles elevados para sobrevivir, mientras el bagre no.</p>
                    <p class="font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[26px] mt-[30px]">La unidad de medida de este indicador es el milígramo por litro (mg/L). Valores inferiores a 3 mg/L son dañinos para el ecosistema acuático y pueden suponer la muerte de plantas y animales.</p>
                </div>
                <div class="col-span-1">
                    <h3 class="text-[#3ba3dd] text-[30px] font-medium leading-[36px] mb-[30px]">Temperatura</h3>
                    <p class="font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">Es un factor ambiental fundamental, ya que tiene una relación directa con la mayoría de indicadores utilizados en la estación de monitoreo. Por ejemplo, cuando aumenta la temperatura, disminuye la cantidad de oxígeno disuelto en el agua. También está directamente relacionada con la conductividad eléctrica, ya que cuando mayor es la temperatura, mayor es el movimiento de los iones en el cuerpo de agua (sales y materia inorgánica con carga eléctrica), por ende, mayor será la conductividad.</p>
                </div>
                <div class="col-span-1">
                    <h3 class="text-[#3ba3dd] text-[30px] font-medium leading-[36px] mb-[30px]">pH</h3>
                    <p class="font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">El pH indica el nivel de acidez o alcalinidad del agua, un factor crucial para determinar su calidad y
                                                                                                                                    la idoneidad para distintas formas de vida. La escala de pH va de 0 a 14, donde 7.0 representa un estado neutro. Valores por debajo de 7 reflejan acidez, mientras que valores superiores indican alcalinidad.
                    </p>
                    <p class="font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px] mt-[30px]">El equilibrio del pH es esencial para los ecosistemas acuáticos, ya que tanto niveles demasiado ácidos como alcalinos pueden ser perjudiciales. Por ejemplo, un pH muy bajo puede liberar metales tóxicos del sedimento, afectando a la fauna y flora, mientras que un pH demasiado alto puede dificultar la asimilación de nutrientes por parte de las plantas acuáticas. Generalmente, el rango ideal para la vida acuática es entre 6.5 y 8.5.</p>
                </div>
                <div class="col-span-1">
                    <h3 class="text-[#3ba3dd] text-[30px] font-medium leading-[36px] mb-[30px]">Conductividad</h3>
                    <p class="font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px]">Indica la cantidad de sales y otros compuestos con carga eléctrica disueltos en el agua (iones). A mayor conductividad, mayor cantidad de iones. El origen de esta conductividad se debe a la descarga de iones la tierra y las rocas por las que pasa el agua durante su ciclo descargan, por lo tanto, la geología de una cierta zona determina la cantidad y el tipo de iones en el agua.</p>
                    <p class="font-sora text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[32px] mt-[30px]">La unidad de medida utilizada en este indicador es el microSiemens por centímetro (μS/cm). Dependiendo del origen del agua, esta puede presentar diferentes niveles de conductividad, por ejemplo, la conductividad del agua para consumo humano es de alrededor de 25 μS/cm, la del agua de mar promedio es de 50.000 μS/cm y la del lago Llanquihue suele estar por sobre los 90 μS/cm.</p>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------- MAP PUNTO MUESTREO ------------------------------>
    <div class="md:py-[70px] 3xl:py-[100px]">
        <div class="container mx-auto">
            <div class="flex items-center justify-center mb-[40px]">
                <h3 class="text-[#3ba3dd] text-[40px] font-medium leading-[44px] mb-[30px]">PUNTOS DEL MUESTREO</h3>
            </div>
        </div>
        <div class="container mx-auto md:pt-[40px] 3xl:pt-[50px]">
            <div id="google-map-div" style="width: 100%" class="w-full md:h-[600px] 3xl:h-[650px]"></div>
        </div>
    </div>
    <!------------------------------- RESULTADO MONITORE ------------------------------>
    <div class="md:pt-[70px] 3xl:pt-[100px]">
        <div class="container mx-auto">
            <div class="flex items-center justify-center mb-[20px]">
                <h3 class="text-[#3ba3dd] text-[40px] font-medium leading-[44px] mb-[30px]">RESULTADOS DE MUESTREO</h3>
            </div>
            <div class="flex items-center justify-center">
                <select id="puntos" class="bg-white uppercase text-center border border-gray-300 text-gray-900 rounded-[20px] focus:ring-azul focus:border-azul block md:w-[340px] 3xl:w-[380px] mt-[10px] py-[2px] px-[10px] text-black font-light md:text-[20px] 3xl:text-[24px] font-sora">
                    <?php
                            $sql = "SELECT * FROM puntos_mediciones_lp";
                            $result = mysql_query($sql);
                            while ($row = mysql_fetch_assoc($result)) {
                                echo "<option value='{$row['ID']}'>{$row['Nombre']}</option>";
                            }
                    ?> 
                </select>
            </div>
        </div>

        <div id='charthere'></div>
        <div class="container mx-auto my-[40px]"><!-- Boton filtro personalizado, filtro oculto (display) -->
            <div class="flex flex-col">
                <div id='customp' class='allbuttons graphbutton btn-filtro-personalizado-1 font-sora md:py-[10px] 3xl:py-[12px]'>Rango Personalizado</div>
            </div>
        </div>

        <div class="container mx-auto" id='datefilter' style="display: none" > <!--Filtro de Fecha, se habilita con el boton "id='customp'"-->
            <div class="flex flex-row justify-center items-center content-center">
                <div class="md:w-6/12 3xl:w-5/12 flex justify-between items-center content-center">
                    <label for="startDate" class="font-sora font-light md:text-[16px] 3xl:text-[18px]">Desde:</label>
                    <input id="startDate"  type="date" value='<?php echo $_GET['startdate'] ?>' class="font-sora border-[1px] border-azul md:text-[15px] 3xl:text-[16px] md:leading-[15px] 3xl:leading-[16px] md:px-[20px] 3xl:px-[30px] py-[4px] rounded-[25px]">
                    <laberl for="endDate" class="font-sora font-light md:text-[16px] 3xl:text-[18px]">Hasta:</laberl>
                    <input id="endDate" type="date" value='<?php echo $_GET['enddate'] ?>' class="font-sora border-[1px] border-azul md:text-[15px] 3xl:text-[16px] md:leading-[15px] 3xl:leading-[16px] md:px-[20px] 3xl:px-[30px] py-[4px] rounded-[25px]">
                    <button id='filtrarfecha' class="font-sora font-light bg-azul text-white border-[1px] border-azul md:text-[16px] 3xl:text-[18px] md:leading-[16px] 3xl:leading-[18px] border-[1px] border-azul rounded-[25px] md:px-[25px] 3xl:px-[35px] md:py-[6px] hover:bg-white hover:text-azul">Filtrar</button>
                </div>
            </div>
        </div>

        <div class="container mx-auto"> <!--Graficos Chart, por defecto activo tiene que quedar el de Cerro Philippi, despues cambia segun select-->
            <div class="flex flex-row">
                <div class="w-10/12 md:h-[572px] 3xl:h-[612px]">
                    <!-- AQUI VAN LOS GRAFICOS -->
                    <!-- Los graficos tienen que tener una linea constante en 1.000 NMP/100 ml como umbral-->
                    <div id='chartdiv1' style='display:none' class="w-full md:h-[480px] 3xl:h-[560px]"></div>
                    <div id='loader' style="width: 100%;height: 500px;display: flex;">
                        <img src='assets/img/loading.gif' style='width:70px;margin: auto;'>
                    </div>
                </div>
                <div class="w-2/12 flex flex-col">
                    <div class="box-info ">
                        <div class="border-b-[1px] border-azul w-[90%] pl-[8px] pt-[6px]">
                            <h6 class="font-sora font-medium text-[12px] leading-[15px] uppercase">Oxígeno disuelto</h6>
                        </div>
                        <div class="font-light md:text-[14px] 3xl:text-[16px] md:leading-[20px] 3xl:leading-[30px] pl-[15px] pt-[5px]" id="">
                            <!-- Aquí se tiene que cargar el ultimo muestre-->
                            <div style="width: 100%;height: 100%;display: flex;">

                                <img id='loader-label' src='assets/img/loading.gif' style='width:20px;margin: auto;'>
                                <div id="coli-value"></div>
                            </div>
                        </div>
                        <div class="datef font-sora font-light text-[10px] pl-[15px]"></div><!--Fecha del ultimo muestreo-->
                    </div>

                    <div class="box-info ">
                        <div class="border-b-[1px] border-azul w-[90%] pl-[8px] pt-[6px]">
                            <h6 class="font-sora font-medium text-[12px] leading-[15px] uppercase">Temperatura</h6>
                        </div>
                        <div class="font-light md:text-[14px] 3xl:text-[16px] md:leading-[20px] 3xl:leading-[30px] pl-[15px] pt-[5px]" id="temp_html">
                            <!-- Aquí se tiene que cargar el ultimo muestre-->
                            <div style="width: 100%;height: 100%;display: flex;">

                                <img id='loader-label' src='assets/img/loading.gif' style='width:20px;margin: auto;'>
                                <div id="coli-value"></div>
                            </div>
                        </div>
                        <div class="datef font-sora font-light text-[10px] pl-[15px]"></div><!--Fecha del ultimo muestreo-->
                    </div>

                    <div class="box-info ">
                        <div class="border-b-[1px] border-azul w-[90%] pl-[8px] pt-[6px]">
                            <h6 class="font-sora font-medium text-[12px] leading-[15px] ">pH</h6>
                        </div>
                        <div class="font-light md:text-[14px] 3xl:text-[16px] md:leading-[20px] 3xl:leading-[30px] pl-[15px] pt-[5px]" id="ph_html">
                            <!-- Aquí se tiene que cargar el ultimo muestre-->
                            <div style="width: 100%;height: 100%;display: flex;">

                                <img id='loader-label' src='assets/img/loading.gif' style='width:20px;margin: auto;'>
                                <div id="coli-value"></div>
                            </div>
                        </div>
                        <div class="datef font-sora font-light text-[10px] pl-[15px]"></div><!--Fecha del ultimo muestreo-->
                    </div>

                    <div class="box-info ">
                        <div class="border-b-[1px] border-azul w-[90%] pl-[8px] pt-[6px]">
                            <h6 class="font-sora font-medium text-[12px] leading-[15px] uppercase">Conductividad</h6>
                        </div>
                        <div class="font-light md:text-[14px] 3xl:text-[16px] md:leading-[20px] 3xl:leading-[30px] pl-[15px] pt-[5px]" id="conductividad_html">
                            <!-- Aquí se tiene que cargar el ultimo muestre-->
                            <div style="width: 100%;height: 100%;display: flex;">
                                <img id='loader-label' src='assets/img/loading.gif' style='width:20px;margin: auto;'>
                                <div id="coli-value"></div>
                            </div>
                        </div>
                        <div class="datef font-sora font-light text-[10px] pl-[15px]"></div><!--Fecha del ultimo muestreo-->
                    </div>

                    <button id='backtomap' class="border-amarillo border-[1px] w-[180px] font-sora font-bold text-[14px] leading-[14px] py-[8px] rounded-[16px] hover:bg-amarillo">
                        VOLVER AL MAPA
                    </button><!--ACA SE CIERRA EL GRAFICO Y POSICIONA EN EL MAPA -->
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto md:pt-[10px] md:pb-[70px] 3xl:pb-[100px]">
        <div class="flex flex-row justify-center">
            <a id='exportexcel' class="font-sora font-bold md:text-[14px] md:leading-[14px] 3xl:text-[16px] 3xl:leading-[16px] border-[1px] border-amarillo bg-amarillo px-[40px] py-[10px] rounded-[20px] mx-[16px] hover:bg-white" href="#">DESCARGAR BASE DE DATOS</a><!--ACA DESCAR EL ARCHIVO EXCEL-->
        </div>
    </div>

</main>



<!------------------------------- FOOTER DE LA PAGINA ------------------------------>
<?php include('assets/layout/footer.php') ?>
<!------------------------------- NECESARIOS PARA EL FUNCIONAMIENTO ---------------->
<?php include('assets/layout/script.php') ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnydyACjDEVvZCe2B3zs23KyD_Yf5YWIw&libraries=places&callback=initMap"
        async defer></script>
<!------------------------------- OTROS SCRIPT ------------------------------------->

<script>
    // Lógica para pestañas
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Ocultar todos los contenidos
            tabContents.forEach(content => content.classList.add('hidden'));

            // Remover estilos activos de otros botones
            tabButtons.forEach(button => button.classList.remove('text-[#ffffff]', 'bg-[#3ba3dd]',  'border-[#3ba3dd]'));

            // Mostrar contenido correspondiente
            const contentId = btn.id.replace('tab', 'content');
            document.getElementById(contentId).classList.remove('hidden');

            // Estilo activo al botón clickeado
            btn.classList.add('text-[#ffffff]', 'bg-[#3ba3dd]', 'border-[#3ba3dd]');
        });
    });

    // Mostrar por defecto el primer tab
    document.getElementById('tab1').click();
</script>
<script>
    var map;
    function initMap() {
        <?php
        $sql = "SELECT * FROM ubicacion_lp";
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
        var myzoom = 14.89;
        <?php
        } else {
        ?>
        var myLatLng = {
            lat: -41.3190811,
            lng: -72.9661163
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

<?php
        $sql = "SELECT * FROM puntos_mediciones_lp";
        $result = mysql_query($sql);
		$i = 0;
        while ($row = mysql_fetch_assoc($result)) {
			$i = $row['ID'];
			echo "var html = \"<a id=''>{$row['Nombre']}</a>\";";
			echo "var location = new google.maps.LatLng({$row['Lat']}, {$row['Lng']});";
			echo "var marker$i = new google.maps.Marker({";
			echo "draggable: false,";
			echo "map: map,";
			echo "position: location";
			echo "});";
			
			echo "var infowindow$i = new google.maps.InfoWindow({";
			echo "content: html";
			echo "});";

			echo "google.maps.event.addListener(marker$i, 'mouseover', function() {";
			echo "infowindow$i.open(map, this);";
			echo "});";		
			
			echo "google.maps.event.addListener(marker$i, 'mouseout', function() {";
			echo "infowindow$i.close(map, this);";
			echo "});";		

			echo "google.maps.event.addListener(marker$i, 'click', function() {";
			echo "document.getElementById('charthere').scrollIntoView();";
			echo "document.querySelector('#puntos').value = '$i';";
			echo "createGraph(from,to, $i, '{$row['Nombre']}');";
			echo "});";				

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

<script type="text/javascript">
	var datetoday = new Date();
	var puntoid;
	if (datetoday.getMonth()+1 < 10) {
		var month = "0" + datetoday.getMonth()+1;
	} else {
		var month = datetoday.getMonth()+1;
	}
	var datetodayFormat = datetoday.getFullYear() + "-" + (datetoday.getMonth()+1) + "-" + datetoday.getDate();
	
	var dateoneyearago = new Date(new Date().setFullYear(new Date().getFullYear() - 1));
	if (dateoneyearago.getMonth()+1 < 10) {
		var month = "0" + dateoneyearago.getMonth()+1;
	} else {
		var month = dateoneyearago.getMonth()+1;
	}	
	var dateoneyearagoFormat = dateoneyearago.getFullYear() + "-" + (dateoneyearago.getMonth()+1) + "-" + dateoneyearago.getDate();
	
	var from = dateoneyearagoFormat;
	var to = datetodayFormat;
	puntoid = 2;
	$('#puntos').val(puntoid);
	createGraph(from,to, puntoid, '');
	
	
	$('#puntos').change(function () {
		puntoid = $(this).val();
		createGraph(from,to, puntoid, '');
	});
	
	$('#customp').click(function () {
		$('#datefilter').show();
	});
	
	$('#filtrarfecha').click(function () {
		from = $('#startDate').val();
		to = $('#endDate').val();
		if (from != null && from != '' && to != null && to != '') {
			if (from > to) {
				alert("La fecha Desde debe ser menor o igual a la fecha Hasta");
			} else {
				createGraph(from,to, puntoid, '');
			}
		} else {
			alert("Debes especificar Fecha Desde y Fecha Hasta");
		}
	})
	
	
	function createGraph(since, to, sensor,name) {

		$.ajax({
			type: "POST",
			url: "api/getMediciones_lp.php",
			cache: false,
			data: {
				since: since,
				to: to,
				sensor: sensor
			},
			success: function(output) {
				console.log(output);
				try {
					var data = JSON.parse(output);
					drawChart(data);
					$('#loader-label').hide();
					$('#coli-value').show();	
					if (data.muestras_last != null) {
						$('#coli-value').html(data.muestras_last + "  mg/l" + "<br><small>Fecha: " + data.muestras_last_fecha + "</small>");					
						$('#temp_html').html(data.temperatura_last + "  °C" + "<br><small>Fecha: " + data.muestras_last_fecha + "</small>");					
						$('#ph_html').html(data.ph_last + "  " + "<br><small>Fecha: " + data.muestras_last_fecha + "</small>");					
						$('#conductividad_html').html(data.conductividad_last + "  µS/cm" + "<br><small>Fecha: " + data.muestras_last_fecha + "</small>");					
					} else {
						$('#coli-value').html('No hay informacion');
					}
				} catch (e) {
					console.log(e);
				}
			},
			error: function(output, e, f) {
				console.log(e);
			}
		});		
	}	
	
	function drawChart(data) {
        am4core.ready(function() {

            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end

            // Create chart instance
            var chart = am4core.create("chartdiv1", am4charts.XYChart);
            //
			chart.language.locale = am4lang_es_ES;
            // Increase contrast by taking evey second color
            chart.colors.step = 2;

            // Add data
            chart.data = generateChartData(data);
            $('#chartdiv1').show();
			
            $('#loader').hide();

            // Create axes
            var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
            dateAxis.renderer.minGridDistance = 50;

            // Create series
            function createAxisAndSeries(field, field2, name, opposite, bullet) {
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
				
                // var series2 = chart.series.push(new am4charts.LineSeries());
                // series2.dataFields.valueY = field2;
                // series2.dataFields.dateX = "date";
                // series2.strokeWidth = 1.5;
                // series2.yAxis = valueAxis;
                // series2.name = "UMBRAL 1.000 NMP/100 ml";
                // series2.tooltipText = "{name}: [bold]{valueY}[/]";
                // series2.tensionX = 0.8;
                // series2.showOnInit = true;			                

                var interfaceColors = new am4core.InterfaceColorSet();

                valueAxis.renderer.line.strokeOpacity = 1;
                valueAxis.renderer.line.strokeWidth = 2;
                valueAxis.renderer.line.stroke = series.stroke;
                valueAxis.renderer.labels.template.fill = series.stroke;
                valueAxis.renderer.opposite = opposite;
				
				var bullet = series.bullets.push(new am4charts.CircleBullet());
				bullet.circle.stroke = interfaceColors.getFor("background");
				bullet.circle.strokeWidth = 2;				  
            }

            createAxisAndSeries("values_chart", "values_const_chart", "OXIGENO", false, "circle");
            createAxisAndSeries("temp_chart", "values_const_chart", "TEMPERATURA", false, "circle");
            createAxisAndSeries("ph_chart", "values_const_chart", "pH", false, "circle");
            createAxisAndSeries("cond_chart", "values_const_chart", "CONDUCTIVIDAD", false, "circle");
			
            // Add legend
            chart.legend = new am4charts.Legend();

            // Add cursor
            chart.cursor = new am4charts.XYCursor();

            // generate some random data, quite different range
			
            function generateChartData(data) {
				console.log("Muestras",data);
                var chartData = [];

                var months = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dic'];
				try {
					data.label.forEach(function(e, i) {
						chartData.push({
							date: e,
							values_chart: data.muestras[i],
							//values_const_chart: data.muestras_constant[i],
						});		
						chartData.push({
							date: e,
							temp_chart: data.temperatura[i],
							//values_const_chart: data.muestras_constant[i],
						});	  
						chartData.push({
							date: e,
							cond_chart: data.conductividad[i],
							//values_const_chart: data.muestras_constant[i],
						});          
						chartData.push({
							date: e,
							ph_chart: data.ph[i],
							//values_const_chart: data.muestras_constant[i],
						});                                                              				
					});
				} catch (e) {
					alert("No hay datos para el sensor seleccionado");
				}
                return chartData;
            }
        }); // end am4core.ready()		
		
		
	}
</script>


</body>
</html>
