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
            document.location = "/mobile/biblioteca.php";
        }
    </script>

    <meta charset="UTF-8">
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
    
    <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Lago en Línea | Biblioteca</title>

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
            <h4 class="titulos">BIBLIOTECA</h4>
            <h5 class="subtitulos">Documentos Complementarios</h5>
        </div>
    </div>

    <?php include('biblioteca_arrays.php'); ?>

    <div class="container mx-auto md:pt-[50px] 3xl:pt-[100px]">
        <div class="flex flex-col">
            <h2 class="md:text-[20px] 3xl:text-[26px]">FILTRAR RESULTADOS</h2>
            <div class="container flex flex-row">
                <?php
                if (isset($_GET['materia'])) {
                    echo "<h6 class='item-filtro item-filtro-pelar' key='materia'>Materia <button type='button' class='m-auto btn-close btn-close-white me-2 inline-block' data-bs-dismiss='toast' aria-label='Close'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button></h6>";
                }
                if (isset($_GET['tiporecurso'])) {
                    echo "<h6 class='item-filtro item-filtro-pelar' key='tiporecurso'>Tipo de Recurso <button type='button' class='m-auto btn-close btn-close-white me-2 inline-block' data-bs-dismiss='toast' aria-label='Close'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button></h6>";
                }
                if (isset($_GET['pais'])) {
                    echo "<h6 class='item-filtro item-filtro-pelar' key='pais'>Pais <button type='button' class='m-auto btn-close btn-close-white me-2 inline-block' data-bs-dismiss='toast' aria-label='Close'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button></h6>";
                }
                if (isset($_GET['region'])) {
                    echo "<h6 class='item-filtro item-filtro-pelar' key='region'>Region <button type='button' class='m-auto btn-close btn-close-white me-2 inline-block' data-bs-dismiss='toast' aria-label='Close'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button></h6>";
                }
                if (isset($_GET['cuenca'])) {
                    echo "<h6 class='item-filtro item-filtro-pelar' key='cuenca'>Cuenca <button type='button' class='m-auto btn-close btn-close-white me-2 inline-block' data-bs-dismiss='toast' aria-label='Close'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button></h6>";
                }
                if (isset($_GET['idioma'])) {
                    echo "<h6 class='item-filtro item-filtro-pelar' key='idioma'>Idioma <button type='button' class='m-auto btn-close btn-close-white me-2 inline-block' data-bs-dismiss='toast' aria-label='Close'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button></h6>";
                }
                if (isset($_GET['tipoinstitucion'])) {
                    echo "<h6 class='item-filtro item-filtro-pelar' key='tipoinstitucion'>Tipo de Institucion <button type='button' class='m-auto btn-close btn-close-white me-2 inline-block' data-bs-dismiss='toast' aria-label='Close'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button></h6>";
                }
                if (isset($_GET['search'])) {
                    echo "<h6 class='item-filtro item-filtro-pelar' key='search'>Busqueda: {$_GET['search']} <button type='button' class='m-auto btn-close btn-close-white me-2 inline-block' data-bs-dismiss='toast' aria-label='Close'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button></h6>";
                }
                if (isset($_GET['startdate']) && isset($_GET['enddate'])) {
                    echo "<h6 class='item-filtro item-filtro-fechapublicacion' key='fechapublicacion'>Fecha Publicacion <button type='button' class='m-auto btn-close btn-close-white me-2 inline-block' data-bs-dismiss='toast' aria-label='Close'><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-5 h-4'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg></button></h6>";
                }
                ?>
            </div>

            <div class="resta-filtros mt-[10px]">
                <button id='reset' class="text-azul md:text-[18px] md:leading-[20px] 3xl:text-[22px] 3xl:leading-[22px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline-block h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                    Restablecer filtros
                </button>
            </div>
        </div>
    </div>

    <div class="container mx-auto pt-[30px] pb-[40px]">
        <div class="flex flex-row justify-end">
            <div class="w-8/12">
                <form>
                    <div class="relative">
                        <input type="search" id='search' class="block w-full p-4 pl-8 pr-8 md:text-[16px] md:leading-[16px] 3xl:text-[18px] text-gray-900 border-[1px] border-oscuro rounded-[20px] bg-gray-50 focus:ring-azul
                        focus:border-azul" placeholder="Buscar..." value='<?php echo $_GET['search']?>' required>

                        <button id='search_btn' type="submit" class="text-azul absolute right-2.5 bottom-2.5 font-medium  px-4 py-2">
                            <svg aria-hidden="true" class="h-6 w-6 text-azul hover:text-amarillo" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="flex flex-row">
            <div class="w-4/12">
                <div class="flex flex-col">

                    <!-- ACOORDION MATERIAL -->
                    <div id="accordion-collapse" class="md:mb-[6px] 3xl:mb-[10px]" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1" class="md:w-[350px] 3xl:w-[450px]">
                            <button type="button" class="flex items-center justify-between w-full md:py-[10px] 3xl:py-[15px] md:px-[15px]  font-medium text-left text-oscuro border border-1 border-azul rounded-[15px] focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                                <span>MATERIA</span>
                                <svg data-accordion-icon class="h-6 w-6 shrink-0 rotate-180 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden md:w-[350px] 3xl:w-[450px]" aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-[1px] border-azul rounded-[15px] mt-[2px] flex flex-col">
                                <?php include('assets/layout/materia.php'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- ACOORDION RECURSOS ----->
                    <div id="accordion-collapse" class="md:my-[6px] 3xl:my-[10px]" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-2" class="md:w-[350px] 3xl:w-[450px]">
                            <button type="button" class="flex items-center justify-between w-full md:py-[10px] 3xl:py-[15px] md:px-[15px]  font-medium text-left text-oscuro border border-1 border-azul rounded-[15px] focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                                <span>TIPO DE RECURSO</span>
                                <svg data-accordion-icon class="h-6 w-6 shrink-0 rotate-180 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden md:w-[350px] 3xl:w-[450px]" aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-[1px] border-azul rounded-[15px] mt-[2px] flex flex-col">
                                <?php include('assets/layout/recurso.php'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- ACOORDION PAIS --------->
                    <div id="accordion-collapse" class="md:my-[6px] 3xl:my-[10px]" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-3" class="md:w-[350px] 3xl:w-[450px]">
                            <button type="button" class="flex items-center justify-between w-full md:py-[10px] 3xl:py-[15px] md:px-[15px]  font-medium text-left text-oscuro border border-1 border-azul rounded-[15px] focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                                <span>PAÍS</span>
                                <svg data-accordion-icon class="h-6 w-6 shrink-0 rotate-180 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden md:w-[350px] 3xl:w-[450px]" aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 border border-[1px] border-azul rounded-[15px] mt-[2px] flex flex-col">
                                <?php include('assets/layout/pais.php'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- ACOORDION REGION ------->
                    <div id="accordion-collapse" class="md:my-[6px] 3xl:my-[10px]" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-4" class="md:w-[350px] 3xl:w-[450px]">
                            <button type="button" class="flex items-center justify-between w-full md:py-[10px] 3xl:py-[15px] md:px-[15px]  font-medium text-left text-oscuro border border-1 border-azul rounded-[15px] focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-collapse-body-4" aria-expanded="false" aria-controls="accordion-collapse-body-4">
                                <span>REGIÓN</span>
                                <svg data-accordion-icon class="h-6 w-6 shrink-0 rotate-180 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-4" class="hidden md:w-[350px] 3xl:w-[450px]" aria-labelledby="accordion-collapse-heading-4">
                            <div class="p-5 border border-[1px] border-azul rounded-[15px] mt-[2px] flex flex-col">
                                <?php include('assets/layout/region.php'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- ACOORDION CUENCA ------->
                    <div id="accordion-collapse" class="md:my-[6px] 3xl:my-[10px]" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-5" class="md:w-[350px] 3xl:w-[450px]">
                            <button type="button" class="flex items-center justify-between w-full md:py-[10px] 3xl:py-[15px] md:px-[15px]  font-medium text-left text-oscuro border border-1 border-azul rounded-[15px] focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-collapse-body-5" aria-expanded="false" aria-controls="accordion-collapse-body-5">
                                <span>CUENCA</span>
                                <svg data-accordion-icon class="h-6 w-6 shrink-0 rotate-180 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-5" class="hidden md:w-[350px] 3xl:w-[450px]" aria-labelledby="accordion-collapse-heading-5">
                            <div class="p-5 border border-[1px] border-azul rounded-[15px] mt-[2px] flex flex-col">
                                <?php include('assets/layout/cuenca.php'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- ACOORDION IDIOMA ------->
                    <div id="accordion-collapse" class="md:my-[6px] 3xl:my-[10px]" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-6" class="md:w-[350px] 3xl:w-[450px]">
                            <button type="button" class="flex items-center justify-between w-full md:py-[10px] 3xl:py-[15px] md:px-[15px]  font-medium text-left text-oscuro border border-1 border-azul rounded-[15px] focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-collapse-body-6" aria-expanded="false" aria-controls="accordion-collapse-body-6">
                                <span>IDIOMA</span>
                                <svg data-accordion-icon class="h-6 w-6 shrink-0 rotate-180 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-6" class="hidden md:w-[350px] 3xl:w-[450px]" aria-labelledby="accordion-collapse-heading-6">
                            <div class="p-5 border border-[1px] border-azul rounded-[15px] mt-[2px] flex flex-col">
                                <?php include('assets/layout/idioma.php'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- ACOORDION FECHA -------->
                    <div id="accordion-collapse" class="md:my-[6px] 3xl:my-[10px]" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-7" class="md:w-[350px] 3xl:w-[450px]">
                            <button type="button" class="flex items-center justify-between w-full md:py-[10px] 3xl:py-[15px] md:px-[15px]  font-medium text-left text-oscuro border border-1 border-azul rounded-[15px] focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-collapse-body-7" aria-expanded="true" aria-controls="accordion-collapse-body-7">
                                <span>FECHA DE PUBLICACIÓN</span>
                                <svg data-accordion-icon class="h-6 w-6 shrink-0 rotate-180 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-7" class="hidden md:w-[350px] 3xl:w-[450px]" aria-labelledby="accordion-collapse-heading-7">
                            <div class="p-5 border border-[1px] border-azul rounded-[15px] mt-[2px] flex flex-row">

                                <div class="w-6/12 flex flex-col busqueda-fecha md:my-[2px] 3xl:my-[4px] pr-[10px]">
                                    <label for="startDate" class="md:text-[16px] 3xl:text-[18px] font-normal text-oscuro">Desde:</label>
                                    <input id="startDate" class="border-[1px] border-azul md:text-[15px] 3xl:text-[16px] md:leading-[15px] 3xl:leading-[16px] md:px-[20px] 3xl:px-[30px] py-[4px] rounded-[10px]" type="date" value='<?php echo $_GET['startdate'] ?>' />
                                </div>
                                <div class="w-6/12 flex flex-col busqueda-fecha md:my-[2px] 3xl:my-[4px] pl-[10px]">
                                    <label for="endDate" class="md:text-[16px] 3xl:text-[18px] font-normal text-oscuro">Hasta:</label>
                                    <input id="endDate" class="border-[1px] border-azul md:text-[15px] 3xl:text-[16px] md:leading-[15px] 3xl:leading-[16px] md:px-[20px] 3xl:px-[30px] py-[4px] rounded-[10px]" type="date" value='<?php echo $_GET['enddate'] ?>' />
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ACOORDION INSTITUCIÓN -->
                    <div id="accordion-collapse" class="md:my-[6px] 3xl:my-[10px]" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-8" class="md:w-[350px] 3xl:w-[450px]">
                            <button type="button" class="flex items-center justify-between w-full md:py-[10px] 3xl:py-[15px] md:px-[15px]  font-medium text-left text-oscuro border border-1 border-azul rounded-[15px] focus:ring-4 focus:ring-gray-200 " data-accordion-target="#accordion-collapse-body-8" aria-expanded="false" aria-controls="accordion-collapse-body-8">
                                <span>TIPO DE INSTITUCIÓN</span>
                                <svg data-accordion-icon class="h-6 w-6 shrink-0 rotate-180 text-azul" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-8" class="hidden md:w-[350px] 3xl:w-[450px]" aria-labelledby="accordion-collapse-heading-8">
                            <div class="p-5 border border-[1px] border-azul rounded-[15px] mt-[2px] flex flex-col">
                                <?php include('assets/layout/institucion.php'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end md:my-[6px] 3xl:my-[10px] md:w-[350px] 3xl:w-[450px]">
                        <button class="filtrar border-[1px] border-azul text-white bg-azul md:text-[16px] md:leading-[16px] 3xl:text-[18px] 3xl:leading-[18px] md:px-[25px] 3xl:px-[30px] md:py-[6px] 3xl:py-[8px] rounded-[20px] hover:text-azul hover:bg-white" id='filter'>FILTRAR</button>
                    </div>

                </div>
            </div>
            <div class="w-8/12">
                <?php
                $no_of_records_per_page = 6;
                if (isset($_GET['pageno']) && $_GET['pageno'] <> '') {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }

                $offset = ($pageno-1) * $no_of_records_per_page;
                include('admin/include/conf/dbselect.php');

                // Busqueda
                if (isset($_GET['search'])) {
                    $search = " AND (Titulo LIKE '%{$_GET['search']}%' OR Decripcion LIKE '%{$_GET['search']}%')";
                }

                // Fecha Publicacion
                if (isset($_GET['startdate']) && isset($_GET['enddate'])) {
                    $fechapublicacion = " AND FechaPublicacion >= '{$_GET['startdate']}' AND FechaPublicacion <= '{$_GET['enddate']}'";
                }

                // Materia
                if (isset($_GET['materia'])) {
                    $arr = explode(",",$_GET['materia']);
                    $materia_cond = array();
                    foreach ($arr as $val) {
                        $materia_cond[] = "(Filtro = 'materia' AND Valor = '{$materia_array[$val]}')";
                    }
                    $materia_cond_total = implode(" OR ",$materia_cond);
                    $materia_filter =  " AND ($materia_cond_total)";
                }
                //echo "$materia_filter ";

                // Pais
                if (isset($_GET['pais'])) {
                    $arr = explode(",",$_GET['pais']);
                    $pais_cond = array();
                    foreach ($arr as $val) {
                        $pais_cond[] = "(Filtro = 'pais' AND Valor = '{$pais_array[$val]}')";
                    }
                    $pais_cond_total = implode(" OR ",$pais_cond);
                    $pais_filter =  " AND ($pais_cond_total)";
                }

                // Region
                if (isset($_GET['region'])) {
                    $arr = explode(",",$_GET['region']);
                    $region_cond = array();
                    foreach ($arr as $val) {
                        $region_cond[] = "(Filtro = 'region' AND Valor = '{$region_array[$val]}')";
                    }
                    $region_cond_total = implode(" OR ",$region_cond);
                    $region_filter =  " AND ($region_cond_total)";
                }

                // Cuenca
                if (isset($_GET['cuenca'])) {
                    $arr = explode(",",$_GET['cuenca']);
                    $cuenca_cond = array();
                    foreach ($arr as $val) {
                        $cuenca_cond[] = "(Filtro = 'cuenca' AND Valor = '{$cuenca_array[$val]}')";
                    }
                    $cuenca_cond_total = implode(" OR ",$cuenca_cond);
                    $cuenca_filter =  " AND ($cuenca_cond_total)";
                }


                // Idioma
                if (isset($_GET['idioma'])) {
                    $arr = explode(",",$_GET['idioma']);
                    $idioma_cond = array();
                    foreach ($arr as $val) {
                        $idioma_cond[] = "(Filtro = 'idioma' AND Valor = '{$idioma_array[$val]}')";
                    }
                    $idioma_cond_total = implode(" OR ",$idioma_cond);
                    $idioma_filter =  " AND ($idioma_cond_total)";
                }


                // Tipo de Institucion
                if (isset($_GET['tipoinstitucion'])) {
                    $arr = explode(",",$_GET['tipoinstitucion']);
                    $tipoinstitucion_cond = array();
                    foreach ($arr as $val) {
                        $tipoinstitucion_cond[] = "(Filtro = 'institucion' AND Valor = '{$tipoinstitucion_array[$val]}')";
                    }
                    $tipoinstitucion_cond_total = implode(" OR ",$tipoinstitucion_cond);
                    $tipoinstitucion_filter =  " AND ($tipoinstitucion_cond_total)";
                }

                // Apply filters
                $filtros = " $materia_filter $pais_filter $region_filter $cuenca_filter $idioma_filter $tipoinstitucion_filter ";

                if (str_replace(" ","",$filtros) <> '') {
                    $sql="SELECT distinct DocumentoID
                                FROM filtros
                                WHERE  1
                                $filtros";
                    $result=mysql_query($sql);
                    $docs_array = array();
                    while ($row = mysql_fetch_assoc($result)) {
                        $docs_array[] = $row['DocumentoID'];
                    }
                    if (sizeof($docs_array) > 0) {
                        $docs_array = implode(",",$docs_array);
                        $filter_docs = " AND ID IN ($docs_array)";
                    } else {
                        $filter_docs = " AND 0";
                    }
                }

                if (isset($_GET['tiporecurso'])) {
                    $tr = $_GET['tiporecurso'];
                    $tiporecurso = " AND TipoRecurso = '{$tiporecurso_array[$tr]}'";
                }

                $sql = "SELECT * FROM `documentos-complementarios` WHERE 1 $search $fechapublicacion $tiporecurso $filter_docs ORDER BY FechaPublicacion DESC";

                $result = mysql_query($sql);
                $total_rows = mysql_num_rows($result);
                $total_pages = ceil($total_rows / $no_of_records_per_page);

                $sql = "SELECT *, YEAR(FechaPublicacion) as Ano FROM `documentos-complementarios` WHERE 1 $search $fechapublicacion $tiporecurso $filter_docs ORDER BY FechaPublicacion DESC LIMIT $offset, $no_of_records_per_page";

                $result = mysql_query($sql);
                if ($total_rows == 0){
                    echo "No hay documentos";
                }


                while ($row = mysql_fetch_assoc($result)) {

                    $sql1 = "SELECT * FROM filtros WHERE DocumentoID = {$row['ID']}";
                    $result1 = mysql_query($sql1);
                    $filtros = array();
                    while ($row1 = mysql_fetch_assoc($result1)) {
                        $Filtro = $row1['Filtro'];
                        $Valor = $row1['Valor'];
                        $filtros[$Filtro][] = $Valor;
                    }
                    $materia = implode(',',$filtros['materia']);
                    if (sizeof($filtros['materia']) > 0) {
                        $materiadiv = "<div class='col-md-auto cat-libro'>
                                            <h6>$materia</h6>
                                       </div>";
                    } else {
                        $materiadiv = "";
                    }

                    if ($row['TipoRecurso'] <> '') {
                        $tiporecurso = "<div class='col-md-auto cat-libro'>
                                            <h5>{$row['TipoRecurso']}</h5>
                                        </div>";
                    } else {
                        $tiporecurso = "";
                    }
                    $institucion = implode(',',$filtros['institucion']);
                    echo "                    
                    <div class='tarjeta-libro md:mb-[20px] bg-[#f8fbff] rounded-[15px]'>
                        <div class='container flex flex-row mx-auto p-[40px]'>
                            <div class='w-3/12 flex flex-col justify-center items-center content-center pr-[10px]'>
                                <img src='admin/api/{$row['ImagenDestacada']}' class='img-fluid rounded-start' alt='...'>
                            </div>
                            <div class='flex w-9/12 flex-col'>
                                <h1 class='uppercase font-medium md:text-[18px] md:leading-[18px] 3xl:text-[20px] 3xl:leading-[20px]'>$tiporecurso</h1>
                                <h3 class='font-light text-azul md:text-[18px] md:leading-[24px] 3xl:text-[20px] 3xl:leading-[26px] md:py-[20px]'>{$row['Titulo']}</h3>
                                <hr class='h-[3px] w-[70%] border-[1px] border-[#d5d7da] bg-[#d5d7da] mb-[20px]'>
                                <p class='md:text-[15px] md:leading-[15px] font-normal 3xl:text-[18px] 3xl:leading-[18px] py-[3px] italic'>{$row['Autores']}</p>
                                <p class='md:text-[15px] md:leading-[15px] font-normal 3xl:text-[18px] 3xl:leading-[18px] py-[3px]'>$institucion</p>
                                <div class='flex flex-row justify-between mt-[16px]'>
                                    <p class='md:text-[14px] 3xl:text-[15px] font-light text-[#6c757d]'>{$row['Ano']}</p>
                                    <button class='link font-medium text-azul md:text-[16px] md:leading-[16px] 3xl:text-[18px] border-[1px] border-azul px-[20px] py-[4px] rounded-[20px] hover:bg-azul hover:text-white' id='{$row['ID']}'>Ver más</button>
                                </div>
                            </div>
                        </div>
                    </div>";
                }
                ?>
                <div class="flex flex-row paginador justify-center mt-[40px]">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center list-none flex">

                            <!--<li class="page-item"><a class="page-link" href="?pageno=1">Primera</a></li>-->
                            <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                <a class="" href="<?php if($pageno <= 1){ echo '#'; } else {
                                    if (sizeof($_GET) > 0) {
                                        echo "{$_SERVER['REQUEST_URI']}&pageno=".($pageno - 1);
                                    } else {
                                        echo "{$_SERVER['REQUEST_URI']}?pageno=".($pageno - 1);
                                    }
                                } ?>">Anterior</a>
                            </li>

                            <li class="mx-[25px] text-[16px] leading-[16px] pt-[6px]">Pagina <?php echo "$pageno/$total_pages" ?></li>

                            <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                <a class="" href="<?php if($pageno >= $total_pages){ echo '#'; } else {
                                    if (sizeof($_GET) > 0) {
                                        echo "{$_SERVER['REQUEST_URI']}&pageno=".($pageno + 1);
                                    } else {
                                        echo "{$_SERVER['REQUEST_URI']}?pageno=".($pageno + 1);
                                    }
                                } ?>">Siguiente</a>
                            </li>
                            <!--<li class="page-item"><a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Ultima</a></li>-->

                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>


</section>

<!----------- IN FOOTER DE LA PAGINA ----------->
<?php include('assets/layout/footer.php') ?>
<!----------- PACK DE JS NECESARIOS PARA EL FUNCIONAMIENTO --------->
<?php include('assets/layout/script.php') ?>
<!------------------------------- GALLERIA ------------------------------->
<script src="assets/dist/js/lightbox-plus-jquery.min.js"></script>
<!-------------------------- Option 3: Other JS ------------------------------->
<script src="assets/js/repositorio.js"></script>

<script>
    $(document).ready(function() {

        $('.tiporecurso').change(function () {
            if (this.checked) {
                $('.tiporecurso').prop('checked', false);
                $(this).prop('checked', true);
            }
        })

        <?php
        // Materia
        if (isset($_GET['materia'])) {
        $arr = explode(",",$_GET['materia']);
        foreach ($arr as $val) {
        ?>
        $('.materia[value=<?php echo $val ?>]').prop('checked',true);
        <?php
        }
        }
        ?>

        <?php
        // Tipo de Recurso
        if (isset($_GET['tiporecurso'])) {
        $arr = explode(",",$_GET['tiporecurso']);
        foreach ($arr as $val) {
        ?>
        $('.tiporecurso[value=<?php echo $val ?>]').prop('checked',true);
        <?php
        }
        }
        ?>

        <?php
        // Pais
        if (isset($_GET['pais'])) {
        $arr = explode(",",$_GET['pais']);
        foreach ($arr as $val) {
        ?>
        $('.pais[value=<?php echo $val ?>]').prop('checked',true);
        <?php
        }
        }
        ?>

        <?php
        // Region
        if (isset($_GET['region'])) {
        $arr = explode(",",$_GET['region']);
        foreach ($arr as $val) {
        ?>
        $('.region[value=<?php echo $val ?>]').prop('checked',true);
        <?php
        }
        }
        ?>

        <?php
        // Cuenca
        if (isset($_GET['cuenca'])) {
        $arr = explode(",",$_GET['cuenca']);
        foreach ($arr as $val) {
        ?>
        $('.cuenca[value=<?php echo $val ?>]').prop('checked',true);
        <?php
        }
        }
        ?>

        <?php
        // Idioma
        if (isset($_GET['idioma'])) {
        $arr = explode(",",$_GET['idioma']);
        foreach ($arr as $val) {
        ?>
        $('.idioma[value=<?php echo $val ?>]').prop('checked',true);
        <?php
        }
        }
        ?>

        <?php
        // Tipo de Publicacion
        if (isset($_GET['tipoinstitucion'])) {
        $arr = explode(",",$_GET['tipoinstitucion']);
        foreach ($arr as $val) {
        ?>
        $('.tipoinstitucion[value=<?php echo $val ?>]').prop('checked',true);
        <?php
        }
        }
        ?>

        $('#filter').click(function () {
            var startdate = $('#startDate').val();
            var enddate = $('#endDate').val();
            if (startdate != '' && enddate != '') {
                if (startdate > enddate) {
                    alert("Fecha Publicacion - Desde no puede ser posterior a Hasta");
                    return  false;
                } else {
                    var maxkey = Object.keys(params).length;
                    params['startdate'] = startdate;
                    params['enddate'] = enddate;

                }
            }

            // Materia
            var materia = []
            $('.materia:checkbox:checked').each(function () {
                materia.push($(this).val());
            });
            if (materia.length > 0) {
                params['materia'] = materia.join(',');
            }

            // Tipo de Recurso
            var tiporecurso = []
            $('.tiporecurso:checkbox:checked').each(function () {
                tiporecurso.push($(this).val());
            });
            if (tiporecurso.length > 0) {
                params['tiporecurso'] = tiporecurso.join(',');
            }

            // Pais
            var pais = []
            $('.pais:checkbox:checked').each(function () {
                pais.push($(this).val());
            });
            if (pais.length > 0) {
                params['pais'] = pais.join(',');
            }

            // Region
            var region = []
            $('.region:checkbox:checked').each(function () {
                region.push($(this).val());
            });
            if (region.length > 0) {
                params['region'] = region.join(',');
            }

            // Cuenca
            var cuenca = []
            $('.cuenca:checkbox:checked').each(function () {
                cuenca.push($(this).val());
            });
            if (cuenca.length > 0) {
                params['cuenca'] = cuenca.join(',');
            }

            // Idioma
            var idioma = []
            $('.idioma:checkbox:checked').each(function () {
                idioma.push($(this).val());
            });
            if (idioma.length > 0) {
                params['idioma'] = idioma.join(',');
            }

            // Tipo Institucion
            var tipoinstitucion = []
            $('.tipoinstitucion:checkbox:checked').each(function () {
                tipoinstitucion.push($(this).val());
            });
            if (tipoinstitucion.length > 0) {
                params['tipoinstitucion'] = tipoinstitucion.join(',');
            }
            params['pageno'] = '';

            window.location.href = 'biblioteca.php' + paramsToUrl();
        })

        function getSearchParameters() {
            var prmstr = window.location.search.substr(1);
            return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
        }

        function transformToAssocArray( prmstr ) {
            var params = {};
            var prmarr = prmstr.split("&");
            for ( var i = 0; i < prmarr.length; i++) {
                var tmparr = prmarr[i].split("=");
                params[tmparr[0]] = tmparr[1];
            }
            return params;
        }

        var params = getSearchParameters();

        function removeItemOnce(arr, value) {
            for (var i = arr.length; i--;) {
                if (arr[i] === val) {
                    arr.splice(i, 1);
                }
            }
            return arr;
        }

        function paramsToUrl () {
            var url = '';
            var i = 0;
            Object.keys(params).forEach(fkey => {
                if (i != 0) {
                    url = url + '&' + fkey + '=' + params[fkey];
                } else {
                    url = url + '?' + fkey + '=' + params[fkey];
                }
                i = i + 1;
            });
            return url
        }

        $('.item-filtro-pelar').click(function () {
            var key = $(this).attr('key');
            var url = 'biblioteca.php';
            var i = 0;
            Object.keys(params).forEach(fkey => {

                if (key != fkey) {
                    if (i != 0) {
                        url = url + '&' + fkey + '=' + params[fkey];
                    } else {
                        url = url + '?' + fkey + '=' + params[fkey];
                    }
                    i = i + 1;
                }

            });
            window.location.href = url;
        })

        $('.item-filtro-fechapublicacion').click(function () {
            var url = 'biblioteca.php';
            var i = 0;
            Object.keys(params).forEach(fkey => {

                if ('startdate' != fkey && 'enddate' != fkey) {
                    if (i != 0) {
                        url = url + '&' + fkey + '=' + params[fkey];
                    } else {
                        url = url + '?' + fkey + '=' + params[fkey];
                    }
                    i = i + 1;
                }

            });
            window.location.href = url;
        })


        $('.link').click(function() {
            if (paramsToUrl() == '') {
                window.location.href = 'biblioteca-view.php?id=' + $(this).attr('id');
            } else {
                window.location.href = 'biblioteca-view.php' + paramsToUrl() + '&id=' + $(this).attr('id');
            }

        })

        $('#search_btn').click(function () {
            var search = $('#search').val();
            var url = window.location.href;
            params['pageno'] = '';

            if (paramsToUrl() == '') {
                window.location.href = "biblioteca.php?search=" + search;
            } else {
                removeItemOnce(paramsToUrl, "search");
                window.location.href = "biblioteca.php" + paramsToUrl() + "&search=" + search;
            }
            return false;
        })
        $('#reset').click(function() {
            window.location.href = 'biblioteca.php';
        })

    });
</script>

</body>
</html>