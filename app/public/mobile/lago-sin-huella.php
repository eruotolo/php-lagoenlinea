<?php
include('../admin/include/conf/dbselect.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- DETECTA MOBILE -->
    <!--
    <script type="text/javascript">
        let dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            // No hacer nada.
        }else{
            document.location = "../lago-sin-huella.php";
        }
    </script>
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lago En Línea | Lago Sin Huella</title>
    <!-- SEO ORGANICO -->
    <meta http-equiv="content-Type" content="text/html; ISO-8859-1">
    <meta name="DC.Language" scheme="RFC1766" content="Spanish">
    <meta name="author" content="Asesoría Indaga">
    <meta name="reply-to" content="edgardo@indaga.me">
    <link rev="made" href="mailto:edgardo@indaga.me">
    <meta name="description" content="Datos en línea para el monitoreo de las condiciones ambientales del lago Llanquihue.">
    <meta name="keywords" content="Monitoreo,lago,lago llanquihue,lago en linea,información,ambiental,evaluación,tecnologías,condiciones,ambientales,región,los lagos,osorno,profundidad,182m,hidrografia,glaciar,chile,general carrera,rios,afluentes,volcan,calbuco,tepu,maullín,puerto varas,puerto montt,cordillera,andes,clima,selva valdiviana,frutillar,las cascadas,agroquimicos,pisciculturas,más azul,patagonia,universidad,san sebastian">
    <meta name="Resource-type" content="Document">
    <meta name="DateCreated" content="Sat, 1 January 2022 00:00:00 GMT-4">
    <meta name="Revisit-after" content="4 days">
    <meta name="robots" content="ALL">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Fonts -->
    <link rel='stylesheet' href='assets/fonts/blogger_fonts.css'>
    <link rel="preload" href="assets/fonts/BloggerSans.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- FONT AWESOME-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custome CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
        .accordion-contenido{
            padding-bottom: 40px;
        }
        .accordion-item > h2{
            margin-bottom: 15px;
        }
        .accordion-button{
            font-family: 'Sora' !important;
            font-size: 22px;
            line-height: 24px;
            text-align: center;
            color: #6a80ac;
            border: 1px solid #6a80ac;
            border-radius: 24px;
            background-color: #ffffff !important;
        }
        .accordion-item{
            background-color: #ffffff !important;
        }
        .accordion-item:first-of-type .accordion-button {
            border-top-left-radius: 24px;
            border-top-right-radius: 24px;
        }
        .accordion-item:last-of-type .accordion-button.collapsed {
            border-bottom-right-radius: 24px;
            border-bottom-left-radius: 24px;
        }
        .accordion-button:not(.collapsed) {
            background-color: #6a80ac !important;
            color: #b2efff !important;
            border: 1px solid #6a80ac !important;
        }
        .accordion-button:not(.collapsed)::after {
            color: #6a80ac !important;
        }
        .gm-ui-hover-effect {
            display: none !important;
        }
        .item-01{
            padding-left: 40%;
        }
        .item-02{
            padding-left: 15%;
        }
        .item-03{
            padding-left: 18%;
        }
        .item-04{
            padding-left: 37%;
        }
    </style>

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
    <!------------------------------- GRAPHS ------------------------------->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

</head>

<body>
    <!-- CABEZAL DE LA PAGINA -->
    <section>
        <?php include('assets/lshmenumobile.php') ?>
    </section>

    <section>
        <div class="container-fluid bg-lagosinhuella">
            <div class="row">
                <div class="col-12 align-items-end">
                    <h2 class="text-center text-img">Iniciativa liderada por la municipalidad que mediante la articulación público privada, busca proteger la bahía de Puerto Varas. </h2>
                </div>
            </div>
        </div>
        <div class="container sponsor">
            <p>Colaboradores:</p>
            <div class="sponsor-logos text-center">
                <a href="https://seremi10.redsalud.gob.cl/" target="_blank" style="color: white">
                    <img src="../assets/img/sponsor-01.svg" alt="Sponsor 01" style="height: 60px; margin-right: 15px">
                </a>
                <a href="https://mma.gob.cl/los-lagos/" target="_blank" style="color: white">
                    <img src="../assets/img/sponsor-02.svg" alt="Sponsor 01" style="height: 60px; margin-right: 15px">
                </a>
                <a href="https://www.uss.cl/" target="_blank" style="color: white">
                    <img src="../assets/img/lagosinhuella/2024/logo-uss.png" alt="Sponsor 01" style="height: 60px">
                </a>
            </div>
            <p>Aportantes:</p>
            <div class="sponsor-logos text-center">
                <a href="https://www.dimarsa.cl/" target="_blank" style="color: white">
                    <img src="../assets/img/lagosinhuella/2024/logo-dimarsa.png" alt="Logo Dimarsa" style="height: 22px; margin-right: 10px; margin-bottom: 20px">
                </a>
                <a href="https://www.anteojoskarun.cl/" target="_blank" style="color: white">
                    <img src="../assets/img/lagosinhuella/2024/logo-karun.png" alt="Logo Karun" style="height: 35px; margin-right: 10px; margin-bottom: 20px">
                </a>
                <a href="https://hotelcabanadellago.cl/" target="_blank" style="color: white">
                    <img src="../assets/img/lagosinhuella/2024/logo-cabana.png" alt="Logo Cabañas del Lago" style="height: 55px; margin-right: 10px; margin-bottom: 20px">
                </a>
                <a href="https://www.birdschile.com/" target="_blank" style="color: white">
                    <img src="../assets/img/lagosinhuella/2024/logo-bird.png" alt="Logo Bird" style="height: 50px; margin-right: 10px; margin-bottom: 20px">
                </a>
                <a href="https://hotelbellavista.cl/" target="_blank" style="color: white">
                    <img src="../assets/img/lagosinhuella/2024/logo-bellavista.png" alt="Logo Hotel Bellavista" style="height: 60px; margin-right: 10px; margin-bottom: 20px">
                </a>
                <a href="https://www.mesatropera.cl/" target="_blank" style="color: white">
                    <img src="../assets/img/lagosinhuella/2024/logo-mesa.svg" alt="Logo Mesa Tropera" style="height: 60px; margin-right: 10px; margin-bottom: 20px">
                </a>
                <a href="https://www.nodochile.cl/" target="_blank" style="color: white">
                    <img src="../assets/img/lagosinhuella/2024/logo-nodo.svg" alt="Logo Nodo" style="height: 50px; margin-right: 10px; margin-bottom: 20px">
                </a>
            </div>
        </div>
        <div class="container lema-lsh">
            <div class="row">
                <div class="col-12 text-center lema-cont">
                    <img src="assets/img/lagosinhuella/icono-03.svg" alt="icono-01">
                    <h5>Monitoreo permanente, transparente y abierto a la comunidad</h5>
                    <img src="assets/img/lagosinhuella/icono-02.svg" alt="icono-01">
                    <h5>Información para tomar medidas que mejorarán el futuro del lago</h5>
                </div>
            </div>
        </div>

        <div class="container accordion-contenido">
            <div class="row">

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <!-- ITEM ACCORDION 01 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed item-01" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                                El Plan
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body text-center accordion-contenido">
                                <h5>El Plan Lago Sin Huella es un proyecto de articulación público-privada liderado por la Ilustre Municipalidad de Puerto Varas, cuyos principales objetivos son monitorear y proteger el lago Llanquihue en la bahía de Puerto Varas. </h5>
                                <p>El propósito de este Plan es conocer el estado de calidad de las aguas en la bahía de Puerto Varas y reducir el ingreso de contaminación en la bahía. Se espera que si el Plan resulta exitoso, pueda ser replicado en otras comunas de la cuenca del lago Llanquihue, entendiendo que los esfuerzos por proteger el lago deben ser mancomunados y considerar a todos los territorios de la cuenca.</p>
                                <h5>¿Cómo nace este Plan?</h5>
                                <p>En enero de 2022 la Municipalidad de Puerto Varas convocó a una Mesa Hídrica Asesora -compuesta por autoridades, actores del mundo académico y del mundo privado- para enfrentar el sensible problema de la contaminación del lago en la bahía de Puerto Varas. Los objetivos de la Mesa son evaluar los estados de contaminación y desarrollar un Plan de Protección de la bahía.
                                    Esta Mesa Hídrica, liderada por la Municipalidad de Puerto Varas, posee un carácter asesor, es decir, los actores que la integran asesoran al municipio desde sus áreas de expertise, proponiendo metodologías y estrategias de monitoreo, y líneas de acción para intentar reducir la contaminación en la bahía. En la Mesa participan autoridades y actores académicos con competencia en la materia y fundaciones o empresas con experiencia en el área y con capacidades que ponen a disposición del proyecto.</p>
                                <img src="../assets/img/lagosinhuella/lagosinhuella-01.webp" alt="imagen 01" class="img-fluid">
                                <img src="../assets/img/lagosinhuella/lagosinhuella-02.webp" alt="imagen 01" class="img-fluid">
                                <br>
                                <h5>EJES DE ACCIÓN</h5>
                                <p>El Plan Lago Sin Huella posee 3 ejes de acción principales: </p>
                                <img src="assets/img/lagosinhuella/num-01.svg" alt="Numero" class="img-fluid body-num">
                                <h5>Infraestructura crítica</h5>
                                <p>Busca mejorar a futuro las instalaciones de la ciudad de Puerto Varas que se relacionan con el ingreso de contaminantes en la bahía urbana, a modo de reducir al máximo posible el ingreso de los mismos.</p>
                                <img src="assets/img/lagosinhuella/num-02.svg" alt="Numero" class="img-fluid body-num">
                                <h5>Educación y concientización</h5>
                                <p>Busca desplegar iniciativas de educación socioambiental para sensibilizar a la población sobre la importancia en la protección del Lago Llanquihue y el rol que puede desempeñar la ciudadanía en ello.</p>
                                <img src="assets/img/lagosinhuella/num-03.svg" alt="Numero" class="img-fluid body-num">
                                <h5>Monitoreo y transparencia</h5>
                                <p>Busca monitorear en forma permanente la bahía de Puerto Varas para, por un lado, establecer un criterio de transparencia en relación al estado actual del Lago y evaluar cómo se puede ir mejorando la situación 		hacia el futuro y, por otro lado, contribuir a que la comunidad pueda escoger los puntos de uso de las playas urbanas de forma más segura.</p>
                                <p>Busca monitorear en forma permanente la bahía de Puerto Varas para, por un lado, establecer un criterio de transparencia en relación al estado actual del Lago y evaluar cómo se puede ir mejorando la situación 		hacia el futuro y, por otro lado, contribuir a que la comunidad pueda escoger los puntos de uso de las playas urbanas de forma más segura.</p>

                                <h5>¿QUIÉNES PARTICIPAN?</h5>
                                <p>El monitoreo mensual de la calidad del lago Llanquihue en la bahía de Puerto Varas, se lleva a cabo gracias al aporte de socios colaboradores en el programa: Hotel Cabaña del Lago, Dimarine, BirdsChile, Karün, NODO, Mesa Tropera y Hotel Bellavista, además del apoyo técnico e institucional de la Seremi de Medio Ambiente y Salud de la Región de Los Lagos.</p>
                                <img src="../assets/img/lagosinhuella/2024/imagen-01.png" alt="imagen 01" class="img-fluid">
                                <img src="../assets/img/lagosinhuella/2024/imagen-02.png" alt="imagen 01" class="img-fluid">
                                <img src="../assets/img/lagosinhuella/2024/imagen-03.png" alt="imagen 01" class="img-fluid">
                                <img src="../assets/img/lagosinhuella/2024/imagen-04.png" alt="imagen 01" class="img-fluid">
                                <img src="../assets/img/lagosinhuella/2024/imagen-05.png" alt="imagen 01" class="img-fluid">
                                <img src="../assets/img/lagosinhuella/2024/imagen-06.png" alt="imagen 01" class="img-fluid">
                                <img src="../assets/img/lagosinhuella/2024/imagen-07.png" alt="imagen 01" class="img-fluid">
                                <img src="../assets/img/lagosinhuella/2024/imagen-08.png" alt="imagen 01" class="img-fluid">
                                <img src="../assets/img/lagosinhuella/2024/imagen-09.png" alt="imagen 01" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <!-- ITEM ACCORDION 02 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed item-02" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                Monitoreo de la bahía
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body text-center accordion-contenido">
                                <h5>El eje de Monitoreo y transparencia del Plan Lago sin Huella se concreta en colaboración con las Seremis de Medio Ambiente y de Salud, mediante el monitoreo de coliformes fecales en 16 puntos de la bahía urbana de Puerto Varas. Los muestreos son realizados por la SEREMI de Salud, mientras que los informes técnicos de dichos muestreos son elaborados por la SEREMI de Medio Ambiente y se encuentran disponibles en esta plataforma.</h5>
                                <img src="assets/img/lagosinhuella/sponsor-05.webp" alt="imagen 05" class="img-fluid">
                                <br>
                                <h5>PUNTOS DE MUESTREO</h5>
                                <p>Los 16 puntos de la bahía fueron seleccionados en base a los siguientes criterios: </p>
                                <p><strong>Presencia de afluentes (cursos de agua, esteros)</strong> que descargan sus aguas en la bahía de Puerto Varas.</p>
                                <p><strong>Uso de playas por parte de la comunidad.</strong></p>
                                <img src="../assets/img/lagosinhuella/lagosinhuella-07.webp" alt="imagen 06" class="img-fluid">
                                <h5>FRECUENCIA DE MUESTREO: Una vez al mes</h5>
                                <h5>PARÁMETRO DE MONITOREO</h5>
                                <p><strong>Coliformes fecales:</strong> son bacterias provenientes del intestino de seres humanos y animales. La presencia de estas bacterias en el agua indica que esta está contaminada con heces fecales o aguas servidas.
                                    La unidad de medida utilizada es NMP/100 ml, que estima el número de coliformes presentes en 100 ml de agua.
                                    La norma chilena establece los 1.000 NMP/100 ml como umbral para la realización de actividades de recreación con contacto directo (D.S. N° 143, Establece Normas de Calidad Primaria para aguas continentales superficiales aptas para actividades de recreación con contacto directo).</p>
                                <img src="../assets/img/lagosinhuella/lagosinhuella-08.webp" alt="imagen 06" class="img-fluid">
                                <img src="../assets/img/lagosinhuella/lagosinhuella-09.webp" alt="imagen 06" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <!-- ITEM ACCORDION 03 -->

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingtree">
                            <button class="accordion-button collapsed item-03" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTree" aria-expanded="false" aria-controls="panelsStayOpen-collapseTree">
                                Acciones y medidas
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTree">
                            <div class="accordion-body text-center accordion-contenido">
                                <h5>¿Qué acciones se han realizado?</h5>
                                <ul>
                                    <li>Identificación y catastro de puntos críticos en la ciudad junto a la empresa sanitaria.</li>
                                    <li>Apoyo en la coordinación para impulsar la conexión de viviendas identificadas, junto a la empresa sanitaria.</li>
                                    <li>Fiscalización de eventos de contaminación en el lago, por vertidos en sumideros de aguas lluvias.</li>
                                    <li>Infografía para concientización sobre el cuidado del lago.</li>
                                    <li>Limpiezas de playa masivas.</li>
                                    <li>Instalación de contenedores de colillas de cigarro en diferentes puntos de la ciudad.</li>
                                </ul>
                                <img src="../assets/img/lagosinhuella/2024/imagen-01.png" alt="imagen 01" class="img-fluid">
                                <img src="../assets/img/lagosinhuella/2024/imagen-04.png" alt="imagen 01" class="img-fluid">
                                <img src="../assets/img/lagosinhuella/2024/imagen-10.png" alt="imagen 01" class="img-fluid">
                            </div>

                        </div>
                    </div>

                    <!-- ITEM ACCORDION 04 -->

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                            <button class="accordion-button collapsed item-04" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                Súmate
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                            <div class="accordion-body text-center accordion-contenido">
                                <h5>Si quieres sumarte a esta iniciativa contáctanos a <a href="mailto:lagosinhuella@ptovaras.cl" style="color: #212529">lagosinhuella@ptovaras.cl</a></h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid" id="mapa-muestreo">
            <h4 class="titulos-1">PUNTOS DE MONITOREO</h4>
            <div id="google-map-div" style="width: 100%; height: 400px"></div>
        </div>

        <div class="container mx-auto">
            <div class="flex flex-col items-center">
                <h4 class="titulos-1">RESULTADOS DE MUESTREO</h4>

                <select id="puntos" class="select-puntos">
                    <?php
                    $sql = "SELECT * FROM puntos_mediciones";
                    $result = mysql_query($sql);
                    while ($row = mysql_fetch_assoc($result)) {
                        echo "<option value='{$row['ID']}'>{$row['Nombre']}</option>";
                    }
                    ?>
                </select>
            </div>

        </div>

        <div id='charthere'></div>
        <div class="container" id="grafico-muestreo">
            <div class="row">
                <div id='customp' class='allbuttons graphbutton btn-filtro-personalizado-1'>Rango Personalizado</div>
            </div>
        </div>


        <div class="container" id='datefilter' style="display: none" > <!--Filtro de Fecha, se habilita con el boton "id='customp'"-->
            <div class="flex flex-row justify-center items-center content-center">
                <div class="flex justify-between items-center content-center buscador-personalizado">
                    <label for="startDate" class="font-sora font-light md:text-[16px] 3xl:text-[18px]">Desde:</label>
                    <input id="startDate"  type="date" value='<?php echo $_GET['startdate'] ?>' class="font-sora border-[1px] border-azul md:text-[15px] 3xl:text-[16px] md:leading-[15px] 3xl:leading-[16px] md:px-[20px] 3xl:px-[30px] py-[4px] rounded-[25px]">
                    <laberl for="endDate" class="font-sora font-light md:text-[16px] 3xl:text-[18px]">Hasta:</laberl>
                    <input id="endDate" type="date" value='<?php echo $_GET['enddate'] ?>' class="font-sora border-[1px] border-azul md:text-[15px] 3xl:text-[16px] md:leading-[15px] 3xl:leading-[16px] md:px-[20px] 3xl:px-[30px] py-[4px] rounded-[25px]">
                    <button id='filtrarfecha' class="font-sora font-light bg-azul text-white border-[1px] border-azul md:text-[16px] 3xl:text-[18px] md:leading-[16px] 3xl:leading-[18px] border-[1px] border-azul rounded-[25px] md:px-[25px] 3xl:px-[35px] md:py-[6px] hover:bg-white hover:text-azul">Filtrar</button>
                </div>
            </div>
        </div>

        <div class="container"> <!--Graficos Chart, por defecto activo tiene que quedar el de Cerro Philippi, despues cambia segun select-->
            <div class="flex flex-row">
                <div style="height: 400px">
                    <!-- AQUI VAN LOS GRAFICOS -->
                    <!-- Los graficos tienen que tener una linea constante en 1.000 NMP/100 ml como umbral-->
                    <h5 class="rotar-landscape">Para una mejor visualización del gráfico, gira tu teléfono a posición horizontal.
                        <img src="assets/img/mobile-landscape-mode-icon.svg" alt="landscape">
                    </h5>
                    <div id='chartdiv1' style='display:none; height: 350px'></div>
                    <div id='loader' style="width: 100%;height: 500px;display: flex;">
                        <img src='../assets/img/loading.gif' style='width:40px;margin: auto;'>
                    </div>
                </div>
            </div>
        </div>

        <table>
            <?php
            $sql = "SET lc_time_names = 'es_ES';";
            $result = mysql_query($sql);

            $sql = "SELECT CONCAT(YEAR(Fecha),'-',MONTH(Fecha)) as 'month' ,DATE_FORMAT(`Fecha`,'%Y - %M') as 'monthname'
				FROM puntos_muestras
				group by CONCAT(YEAR(Fecha),'-',MONTH(Fecha)),DATE_FORMAT(`Fecha`,'%Y - %M')
				order by DATE_FORMAT(`Fecha`,'%Y - %M')";
            $result = mysql_query($sql);
            $months = array();

            while ($row = mysql_fetch_assoc($result)) {
                $m = $row['month'];
                $months[$m] = $row['monthname'];
            }

            $mediciones = array();
            $sql = "SELECT *, CONCAT(YEAR(Fecha),'-',MONTH(Fecha)) as 'month'
				FROM puntos_muestras";
            $result = mysql_query($sql);
            while ($row = mysql_fetch_assoc($result)) {
                $PuntoID = $row['PuntoID'];
                $month = $row['month'];
                $mediciones[$PuntoID][$month] = $row['Valor'];
            }

            $puntos = array();
            $sql = "SELECT * FROM puntos_mediciones";
            $result = mysql_query($sql);
            while ($row = mysql_fetch_assoc($result)) {
                $ID = $row['ID'];
                $Nombre = $row['Nombre'];
                $puntos[$ID] = $Nombre;
            }
            echo "<table id='table' style='display:none'>";
            echo "<tr>";
            echo "<td><b>Monitoreo Lago sin Huella: Bahia de Puerto Varas</b></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><b>Indicador: Coliformes Fecales (NMP/100ML)</b></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>&nbsp;</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td><b>Estacion</b></td>";
            foreach ($months as $key1=>$month) {
                echo "<td><b>{$month}</b></td>";
            }
            echo "</tr>";

            foreach ($puntos as $key=>$punto) {
                echo "<tr>";
                echo "<td>{$punto}</td>";
                foreach ($months as $key1=>$month) {
                    echo "<td>{$mediciones[$key][$key1]}</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            ?>
        </table>

        <div class="container botones-muestreo">
            <div class="row">
                <div class="col-12 title-muestreo">
                    <h5>ÚLTIMO MUESTREO</h5>
                </div>
                <div class="col-6 btn-muestreo">

                    <div class="box-info-1">
                        <div>
                            <h6>COLIFORMES FECALES</h6>
                        </div>
                        <hr>
                        <div>
                            <!-- Aquí se tiene que cargar el ultimo muestre-->
                            <div style="width: 100%;height: 100%;display: flex;">
                                <img id='loader-label' src='../assets/img/loading.gif' style='width:20px;margin: auto;'>
                                <div id="coli-value"></div>
                            </div>
                        </div>
                        <div class="datef font-sora font-light text-[10px] pl-[15px]"></div><!--Fecha del ultimo muestreo-->
                    </div>
                </div>
                <div class="col-6 btn-muestreo">
                    <button id='mapa-muestreo' class="border-amarillo border-[1px] w-[180px] font-sora font-bold text-[14px] leading-[14px] py-[8px] rounded-[16px] hover:bg-amarillo">
                        VOLVER AL MAPA
                    </button>
                </div>
                <div class="col-6 btn-muestreo-1">
                    <button><a href="lagosinhuella-informes.php">INFORMES TRIMESTRALES</a></button>
                </div>
                <div class="col-6 btn-muestreo-2">
                    <button><a id='exportexcel' class="font-sora font-bold md:text-[14px] md:leading-[14px] 3xl:text-[16px] 3xl:leading-[16px] border-[1px] border-amarillo bg-amarillo px-[40px] py-[10px] rounded-[20px] mx-[16px] hover:bg-white" href="#">DESCARGAR BASE DE DATOS</a></button>
                </div>
            </div>
        </div>

    </section>


    <!-- FOOTER DE LA PAGINA -->
    <section>
        <?php include('assets/lshmenudown.php') ?>
    </section>

<!-- Optional JavaScript; choose one -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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
                url: "../api/getMediciones.php",
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
                            $('#coli-value').html(data.muestras_last + "  NMP/100 ml" + "<br><small>Fecha: " + data.muestras_last_fecha + "</small>");
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

                    var series2 = chart.series.push(new am4charts.LineSeries());
                    series2.dataFields.valueY = field2;
                    series2.dataFields.dateX = "date";
                    series2.strokeWidth = 1.5;
                    series2.yAxis = valueAxis;
                    series2.name = "UMBRAL 1.000 NMP/100 ml";
                    series2.tooltipText = "{name}: [bold]{valueY}[/]";
                    series2.tensionX = 0.8;
                    series2.showOnInit = true;

                    var interfaceColors = new am4core.InterfaceColorSet();

                    valueAxis.renderer.line.strokeOpacity = 1;
                    valueAxis.renderer.line.strokeWidth = 2;
                    valueAxis.renderer.line.stroke = series.stroke;
                    valueAxis.renderer.labels.template.fill = series.stroke;
                    valueAxis.renderer.opposite = opposite;
                }

                createAxisAndSeries("values_chart", "values_const_chart", "MUESTRA DE COLIFORME", false, "circle");
                //createAxisAndSeries("values_const_chart", "COLIFORMES FECALES", false, "circle");

                // Add legend
                chart.legend = new am4charts.Legend();

                // Add cursor
                chart.cursor = new am4charts.XYCursor();

                // generate some random data, quite different range

                function generateChartData(data) {
                    console.log(data);
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
                                //values_chart: data.muestras[i],
                                values_const_chart: data.muestras_constant[i],
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

    <script>
        var map;

        function initMap() {

            <?php

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
            var myzoom = 13.7;
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
                    url: "../assets/img/icono-boya.svg",
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
            $sql = "SELECT * FROM puntos_mediciones";
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
    <script src="../assets/js/exportexcel/excelexportjs.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#backtomap').click(function () {
                document.getElementById('puntos-monitoreo').scrollIntoView();
            })

            $('#exportexcel').on('click', function() {
                $("#table").excelexportjs({
                    containerid: "table",
                    datatype: 'table'
                });
            });
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnydyACjDEVvZCe2B3zs23KyD_Yf5YWIw&libraries=places&callback=initMap" async defer></script>

</body>
</html>