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
            document.location = "/mobile/metagenomica.php";
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
            <h4 class="titulos">METAGENÓMICA</h4>
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
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Tradicionalmente, la calidad biológica del agua se ha determinado mediante métodos fisicoquímicos y microbiológicos clásicos que apuntan a cultivar las bacterias presentes en una muestra. Sin embargo, parte importante de los microorganismos que habitan en el medio ambiente son imposibles de cultivar individualmente.</p>

                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]"><strong class="text-azul font-medium">En las últimas décadas, el desarrollo de metodologías que logran descifrar la secuencia de la información genética que se encuentra codificada en el DNA, han permitido estudiar a los microorganismos en un nivel que antes era imposible.</strong></p>

                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Se conoce como metagenómica al estudio de todos los genomas, es decir, al <strong class="text-azul font-medium">estudio de la secuencia total del material genético</strong> que poseen los microorganismos en un sitio en específico. Esto incluye la <strong class="text-azul font-medium">descripción taxonómica</strong> (es decir, la identificación de qué microorganismos están presentes y en qué cantidad), así como la caracterización de la <strong class="text-azul font-medium">capacidad funcional de sus genes</strong> (es decir, la descripción de qué pueden hacer los microorganismos). En otras palabras, <strong class="text-azul font-medium">permite el estudio de todos los microorganismos presentes en una muestra, incluso los que no se conocen, sin la necesidad de cultivarlos.</strong></p>
            </div>
            <div class="pt-[20px] pb-[50px] pl-[20px]">
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">En Chile, esta herramienta aún no ha sido utilizada para el análisis microbiológico de los cuerpos lacustres y en este proyecto hemos demostrado que es posible caracterizar la microbiología asociada a distintos puntos del Lago Llanquihue mediante el uso de metagenómica. Para ello, hemos utilizado las metodologías de secuenciación “Shotgun metagenomic sequencing” y secuenciación de amplicones del gen 16S rRNA (16S Amplicon sequenging).
                </p>
            </div>
        </div>
        <div class="grid grid-cols-3 item-gallery pb-[50px] justify-center content-center items-center">
            <a class="example-image-link px-[10px]" href="assets/img/metagenomica/img-metagenomica-01.webp" data-lightbox="example-set" data-title="Muestra de agua"><img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/metagenomica/img-metagenomica-01-1.webp" alt=""/></a>

            <a class="example-image-link px-[10px]" href="assets/img/metagenomica/img-metagenomica-02.webp" data-lightbox="example-set" data-title="Análisis de laboratorio de muestras de agua"><img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/metagenomica/img-metagenomica-02-1.webp" alt=""/></a>

            <a class="example-image-link px-[10px]" href="assets/img/metagenomica/img-metagenomica-03.webp" data-lightbox="example-set" data-title="Imagen referencial de microorganismos"><img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/metagenomica/img-metagenomica-03-1.webp" alt=""/></a>
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
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Al ser pioneros en el uso de la metagenómica para la descripción microbiológica de cuerpos lacustres, hemos utilizado la información recopilada para diseñar una manera fácil de describir el estado microbiológico de los sitios analizados. Para ello, utilizamos la <strong class="text-azul font-medium">abundancia de las bacterias identificadas</strong>, la que nos permite ordenar los microorganismos de mayor a menor en función de su prevalencia.</p>

                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]"><b>Los gráficos de barras</b> indican la variedad relativa de las bacterias encontradas en las muestras de agua, distinguiendo los puntos de muestreo. Los diferentes colores corresponden a los principales filos bacterianos (categoría en taxonomía situada entre el reino y la clase). La amplitud vertical de cada color representa la abundancia de cada filo.</p>

                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Utilizando las 50 bacterias de mayor prevalencia, realizamos una clasificación de acuerdo con la función descrita que estas tienen en literatura científica. Para ello, hemos generado una base de datos que nos permite clasificarlas en dos categorías.</p>
            </div>
            <div class="pt-[20px] pb-[50px] pl-[20px]">
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Por una parte, se identifican aquellas bacterias con <strong class="text-azul font-medium">actividad medio ambiental,</strong> es decir, que han sido identificadas como responsables de ciclos biogeoquímicos o que han sido descritas como presentes de forma natural en los cuerpos de agua.</p>

                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Por otra parte, se reconocen aquellas bacterias asociadas a <strong class="text-azul font-medium">actividades humanas,</strong>  es decir, que han sido descritas como presentes en el cuerpo humano o en animales domésticos, que provienen de la producción agraria, o que provocan algún tipo de patogénesis en animales o humanos. Esta última clasificación correspondería a bacterias que están presentes en el agua debido a actividades antropogénicas, y que pueden ser un peligro para la salud animal y humana.</p>

                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]"><b>Los gráficos de anillo</b> muestran los porcentajes de géneros bacterianos ambientales y no ambientales encontrados en cada una de las muestras recolectadas.</p>
            </div>
        </div>
        <div class="grid grid-cols-3 item-gallery pb-[50px] justify-center content-center items-center">
            <a class="example-image-link px-[10px]" href="assets/img/metagenomica/img-metagenomica-04.webp" data-lightbox="example-set" data-title="Cultivo de microorganismos"><img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/metagenomica/img-metagenomica-04-1.webp" alt=""/></a>

            <a class="example-image-link px-[10px]" href="assets/img/metagenomica/img-metagenomica-05.webp" data-lightbox="example-set" data-title="Abundancia relativa de microorganismos según filo bacteriano en 4 muestras de agua de la bahía de Puerto Varas (oct. 2020"><img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/metagenomica/img-metagenomica-05-1.webp" alt=""/></a>

            <a class="example-image-link px-[10px]" href="assets/img/metagenomica/img-metagenomica-06.webp" data-lightbox="example-set" data-title="Proporción de bacterias de origen ambiental vs. antropogénicas en 4 muestras de agua de la bahía de Puerto Varas (oct. 2020)"><img class="example-image img-fluid rounded-[40px] w-full md:h-[300px] 3xl:h-[340px]" src="assets/img/metagenomica/img-metagenomica-06-1.webp" alt=""/></a>
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
                <ul class="list-uno pl-[15px]">
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Para una muestra, se utiliza 1 litro de agua tomada desde el Lago, que se recupera mediante botellas de vidrio estériles.
                    </li>
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Las muestras son transportadas inmediatamente al Laboratorio, manteniendo la temperatura baja, para ser filtradas a través de filtros de MCE (Ésteres de Celulosa) con tamaño de poro de 0.22 um y 47 mm de diámetro.
                    </li>
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Se hace pasar el agua a través de los filtros mediante presión negativa para capturar los microorganismos presentes en el agua.
                    </li>
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Luego, los filtros son utilizados para extraer el DNA de los microorganismos capturados, utilizando Kit de extracción de DNA genómico (AccuPrep®  Genomic DNA Extraction Kit, BIONEER), siguiendo las instrucciones del fabricante.
                    </li>
                </ul>
            </div>
            <div class="pt-[20px] pb-[50px] pl-[20px]">
                <ul class="list-uno pl-[15px]">
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        El DNA obtenido es enviado a un servicio de secuenciación de ácidos nucleicos especializado (NOVOGENE, USA) para su procesamiento.
                    </li>
                    <li class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] ml-[12px] py-[5px]">
                        Finalmente, la información cruda obtenida desde el servicio de secuenciación es procesada mediante herramientas bioinformáticas basadas en los lenguajes de programación Python y R, con el objetivo de identificar los microorganismos presentes en cada una de las muestras analizadas.
                    </li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-1 item-gallery pb-[50px] justify-center content-center items-center">
            <a class="example-image-link" href="assets/img/metagenomica/img-metagenomica-07.webp" data-lightbox="example-set" data-title="Comparación de procesos de análisis tradicional de muestras de agua vs. metagenómica"><img class="example-image img-fluid w-[70%] ml-[15%] rounded-[40px]" src="assets/img/metagenomica/img-metagenomica-07.webp" alt=""/></a>
        </div>
    </div>

</section>

<section id="contenido-metagenomica" class="md:mb-[50px] 3xl:mb-[100px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h4 class="titulos">METAGENÓMICA</h4>
            <h5 class="subtitulos">Datos en Línea</h5>
        </div>
    </div>

    <div class="container mx-auto md:mt-[50px] 3xl:mt-[80px]">
        <div class="flex flex-row justify-center ">
            <label class="btn-dropdown btn-tele-año mr-[5px]">
                <div class="dd-button" id='yearshow'>AÑO</div>
                <input type="checkbox" class="dd-input" id="test">
                <ul class="dd-menu">
                    <?php
                    include('admin/include/conf/dbselect.php');
                    $sql1a = "SELECT * FROM `metagenomica`  order by Year ASC, Cicle ASC, Type DESC";
                    $result = mysql_query($sql1a) or die('{"error"=>"Error actualizando la base de datos","status"=>"0"}');
                    $years = array();
                    $cicles = array();
                    $tipos = array();
                    while ($row = mysql_fetch_assoc($result)) {
                        $year = $row['Year'];
                        $years[] = $year;
                        $lastrow = $row;
                    }
                    $sql1a = "SELECT * FROM `metagenomica-tablas` where Year = '{$lastrow['Year']}' and Cicle = '{$lastrow['Cicle']}' order by Year ASC, Cicle ASC";
                    $result = mysql_query($sql1a) or die('{"error"=>"Error actualizando la base de datos","status"=>"0"}');
                    while ($row = mysql_fetch_assoc($result)) {
                        $Tabla1 = $row['Tabla1'];
                        $Tabla2 = $row['Tabla2'];
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
            <h6 class="md:text-[20px] 3xl:text-[22px] font-medium">Lugar de toma de muestras:</h6>
            <p id='Titulo' class="md:text-[18px] 3xl:text-[20px] font-light"><?php echo $lastrow['Titulo'] ?></p>
        </div>
    </div>

    <div class="container mx-auto mt-[30px]">
        <div class="flex flex-row">
            <div class="w-9/12 tz-gallery flex flex-col items-center justify-center content-center" id='imagediv'>
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
                    $btn11 = "<button id='type_1' class='btn-metage typebtn  btn-tele-activo' nro='1'>UBICACIÓN</button>";
                } else {
                    $btn11 = "<button id='type_1' class='btn-metage typebtn' nro='1'>UBICACIÓN</button>";
                }
                if ($lastrow['Type'] == 2) {
                    $btn12 = "<button id='type_2' class='btn-metage typebtn  btn-tele-activo' nro='2'>ORIGEN</button>";
                } else {
                    $btn12 = "<button id='type_2' class='btn-metage typebtn' nro='2'>ORIGEN</button>";
                }
                if ($lastrow['Type'] == 3) {
                    $btn13 = "<button id='type_3' class='btn-metage typebtn  btn-tele-activo' nro='3'>TAXONOMÍA</button>";
                } else {
                    $btn13 = "<button id='type_3' class='btn-metage typebtn' nro='3'>TAXONOMÍA</button>";
                }
                ?>
                <div><?php echo $btn11 ?></div>
                <div><?php echo $btn12 ?></div>
                <div><?php echo $btn13 ?></div>
                <?php
                if ($Tabla1 <> '') {
                    echo "<div><button id='btn1id' link='admin/api/$Tabla1' class='btn-metage-down'>DESCARGAR<br>Tabla taxonómica</button></div>";
                } else {
                    echo "<div><button style='display:none' id='btn1id' link='admin/api/$Tabla1' class='btn-metage-down'>DESCARGAR<br>Tabla taxonómica</button></div>";
                }
                if ($Tabla2 <> '') {
                    echo "<div><button id='btn2id' link='admin/api/$Tabla2' class='btn-metage-down'>DESCARGAR<br>Tabla de capacidades funcionales</button></div>";
                } else {
                    echo "<div><button style='display:none' id='btn2id' link='admin/api/$Tabla2' class='btn-metage-down'>DESCARGAR<br>Tabla de capacidades funcionales</button></div>";
                }
                ?>
            </div>
        </div>
    </div>

</section>


<!------------------------ IN FOOTER DE LA PAGINA ------------------------------->
<?php include('assets/layout/footer.php') ?>
<!------------------------ PACK DE JS NECESARIOS PARA EL FUNCIONAMIENTO --------->
<?php include('assets/layout/script.php') ?>
<!------------------------ GALLERIA ------------------------------->
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
                type: 'm'
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
                    type: 'm'
                },
                success: function(response) {
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
            if (global_month != 0 && global_type != '' && global_year != 0) {
                $.ajax({
                    url: 'api/getImage-metagenomica.php',
                    type: 'POST',
                    data: {
                        year: global_year,
                        type: 'm',
                        month: global_month,
                        tipo: global_type
                    },
                    success: function(response) {
                        var data = JSON.parse(response);
                        $('.btn-metage').removeClass('btn-tele-activo');
                        $('#type_' + global_type).addClass('btn-tele-activo');
                        if (data.img != null) {
                            $('#Titulo').html(data.Titulo);
                            $('#imagediv').hide();
                            $('#imagediv').html(data.img);
                            $('#imagediv').fadeIn(1000);
                            baguetteBox.run('.tz-gallery');
                        } else {
                            $('#imagediv').html("<div style='border:2px solid #efefef;width:100%;height:500px;line-height: 500px;text-align:center'>No hay imagen</div>");
                            $('#imagediv').show();

                        }
                        if (data.Tabla1 != null) {
                            $('#btn1id').attr('link', "admin/api/" + data.Tabla1);
                            $('#btn1id').show();
                        } else {
                            $('#btn1id').hide();
                        }
                        if (data.Tabla2 != null) {
                            $('#btn2id').attr('link', "admin/api/" + data.Tabla2);
                            $('#btn2id').show();
                        } else {
                            $('#btn2id').hide();
                        }
                    },
                });
            }
        }

        $('#btn1id').click(function() {
            var link = $(this).attr('link');
            //window.location = link;
            window.open(link, '_blank');
        })

        $('#btn2id').click(function() {
            var link = $(this).attr('link');
            window.open(link, '_blank');
            //window.location = link;
        })

    });
</script>

</body>
</html>