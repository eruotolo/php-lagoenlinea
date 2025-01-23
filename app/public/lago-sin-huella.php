<?php
    include ('admin/include/conf/dbselect.php');
?>

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
            document.location = "/mobile/lago-sin-huella.php";
        }
    </script>

    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Lago en Línea | Lago Sin Huella</title>

    <!-- CSS PERSONALIZADO -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/dist/css/lightbox.min.css">
	<style>
		.gm-ui-hover-effect {
			display: none !important;
		}
	</style>

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
	<!------------------------------- GRAPHS ------------------------------->
	<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
	<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
	<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
	<script src="//www.amcharts.com/lib/4/lang/es_ES.js"></script>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKZ9BW4" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!------------------------------- IN CABEZAL DE LA PAGINA ------------------------------>
<?php include('assets/layout/header-lsh.php') ?>
<!----------------------------- END CABEZAL DE LA PAGINA ------------------------------->

<section class="bg-inicio-01 bg-no-repeat bg-cover bg-bottom md:h-[1000px] 3xl:h-[1086px]">
    <div class="container mx-auto">
        <div class="flex flex-row h-[200px] justify-center content-center items-center">
            <img src="assets/img/lagosinhuella/2024/logo-ptovaras-01.png" alt="Logo Lago Sin Huella" class="md:h-[100px] 3xl:h-[150px]">

        </div>
        <div class="flex flex-col h-[250px] justify-center content-center items-center">
            <img src="assets/img/logo-lsh.svg" alt="Lago sin huella" class="md:w-[650px] 3xl:w-[800px]">
        </div>
    </div>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-8/12 flex justify-center h-[100px]">
                <h6 class="text-center text-white font-medium md:text-[22px] 3xl:text-[26px] ">Iniciativa liderada por la Municipalidad que mediante la articulación público privada,<br> busca proteger la bahía de Puerto Varas.</h6>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="md:w-10/12 3xl:w-8/12 flex flex-row justify-center h-[85px]">
                <p class="text-[#b2efff] text-center font-medium border-[1px] border-[#b2efff] rounded-[40px] md:text-[18px] 3xl:text-[22px] md:leading-[24px] 3xl:leading-[26px] md:px-[30px] 3xl:px-[50px] md:py-[4px] 3xl:py-[6px] md:mt-[30px] 3xl:mt-[20px] md:mx-[10px] 3xl:mx-[10px]">Monitoreo permanente, transparente<br> y abierto a la comunidad</p>

                <p class="text-[#b2efff] text-center font-medium border-[1px] border-[#b2efff] rounded-[40px] md:text-[18px] 3xl:text-[22px] md:leading-[24px] 3xl:leading-[26px] md:px-[30px] 3xl:px-[50px] md:py-[4px] 3xl:py-[6px] md:mt-[30px] 3xl:mt-[20px] md:mx-[10px] 3xl:mx-[10px]">Información para tomar medidas que<br> mejorarán el futuro del lago</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-8/12 flex justify-center items-center md:h-[165px] 3xl:h-[165px]">

            </div>
        </div>
    </div>

    <div class="md:mt-[50px] 3xl:mt-[118px] md:h-[150px] 3xl:h-[170px] bg-[#ffffff] opacity-80">
        <div class="container mx-auto flex flex-row items-end md:h-[40px] 3xl:h-[50px]">
            <div class="flex w-3/12 flex-row">
                <p class="md:text-[16px] 3xl:text-[18px]">Colaboradores:</p>
            </div>
            <div class="w-8/12 flex flex-row pl-[30px]">
                <p class="md:text-[16px] 3xl:text-[18px]">Aportantes:</p>
            </div>
        </div>
        
        <div class="container mx-auto flex flex-row">
            <div class="md:w-3/12 flex flex-row justify-between items-center h-[100px]">
                <a href="https://seremi10.redsalud.gob.cl/" target="_blank">
                    <img src="../assets/img/sponsor-01.svg" alt="Sponsor 01" class="md:h-[60px] 3xl:h-[70px] inline-block">
                </a>
                <a href="https://mma.gob.cl/los-lagos/" target="_blank">
                    <img src="../assets/img/sponsor-02.svg" alt="Sponsor 01" class="md:h-[60px] 3xl:h-[70px] inline-block">
                </a>
                <a href="https://www.uss.cl/" target="_blank">
                    <img src="assets/img/lagosinhuella/2024/logo-uss.png" alt="Sponsor 01" class="md:h-[85px] inline-block mr-[50px]">
                </a>
            </div>
            <div class="md:w-8/12 flex flex-row justify-between items-center h-[100px] pl-[30px]">
                <a href="https://www.dimarsa.cl/" target="_blank">
                    <img src="assets/img/lagosinhuella/2024/logo-dimarsa.png" alt="Logo Dimarsa" class="h-[22px] mr-[15px]">
                </a>
                <a href="https://www.anteojoskarun.cl/" target="_blank">
                    <img src="assets/img/lagosinhuella/2024/logo-karun.png" alt="Logo Karun" class="h-[35px] mr-[15px]">
                </a>
                <a href="https://hotelcabanadellago.cl/" target="_blank">
                    <img src="assets/img/lagosinhuella/2024/logo-cabana.png" alt="Logo Cabañas del Lago" class="h-[70px] mr-[15px]">
                </a>
                <a href="https://www.birdschile.com/" target="_blank">
                    <img src="assets/img/lagosinhuella/2024/logo-bird.png" alt="Logo Bird" class="h-[70px] mr-[15px]">
                </a>
                <a href="https://hotelbellavista.cl/" target="_blank">
                    <img src="assets/img/lagosinhuella/2024/logo-bellavista.png" alt="Logo Hotel Bellavista" class="h-[90px] mr-[15px]">
                </a>
                <a href="https://www.mesatropera.cl/" target="_blank">
                    <img src="assets/img/lagosinhuella/2024/logo-mesa.svg" alt="Logo Mesa Tropera" class="h-[70px] mr-[15px]">
                </a>
                <a href="https://www.nodochile.cl/" target="_blank">
                    <img src="assets/img/lagosinhuella/2024/logo-nodo.svg" alt="Logo Nodo" class="h-[70px] mr-[15px]">
                </a>
            </div>
        </div>
    </div>
</section>

<section class="acordion-info md:mb-[80px] 3xl:mb-[90px]">
    <div class="container mx-auto md:pt-[40px] 3xl:pt-[50px]">
        <!------------------------- ITEMS ACORDION 1 ---------------------------->
        <div class="container mx-auto md:pt-[40px] 3xl:pt-[50px]">
            <div class="flex justify-center content-center items-center py-[6px]">
                <div id="accordion-collapse" data-accordion="collapse" data-active-classes="border-[#88c3d3] text-[#ffffff] bg-[#88c3d3]">
                    <h2 id="accordion-collapse-heading-1" class="text-[#6a80ac]">
                        <button type="button" class="font-sora flex font-bold text-left  text-[20px] w-[350px] items-center justify-between border border-[2px] border-[#6a80ac] rounded-[20px] px-[20px] pt-[8px] pb-[6px]" data-accordion-target="#accordion-collapse-body-1" aria-expanded="false" aria-controls="accordion-collapse-body-1">
                            <span></span>
                            <span>El Plan</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                </div>
            </div>
        </div>

        <div class="container mx-auto hidden" id="accordion-collapse-body-1" aria-labelledby="accordion-collapse-heading-1">
            <div class="grid grid-cols-1 md:py-[30px] 3xl:py-[50px]">
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-bold">El Plan Lago Sin Huella es un proyecto de articulación público-privada liderado por la Ilustre Municipalidad de Puerto Varas, cuyos principales objetivos son monitorear y proteger el lago Llanquihue en la bahía de Puerto Varas.</p>
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal md:mt-[20px]">El propósito de este Plan es conocer el estado de calidad de las aguas en la bahía de Puerto Varas y reducir el ingreso de contaminación en la bahía. Se espera que si el Plan resulta exitoso, pueda ser replicado en otras comunas de la cuenca del lago Llanquihue, entendiendo que los esfuerzos por proteger el lago deben ser mancomunados y considerar a todos los territorios de la cuenca.</p>
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-bold md:mt-[20px]">¿Cómo nace este Plan?</p>
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal md:mt-[20px]">En enero de 2022 la Municipalidad de Puerto Varas convocó a una Mesa Hídrica Asesora -compuesta por autoridades, actores del mundo académico y del mundo privado- para enfrentar el sensible problema de la contaminación del lago en la bahía de Puerto Varas. Los objetivos de la Mesa son evaluar los estados de contaminación y desarrollar un Plan de Protección de la bahía.</p>
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal">Esta Mesa Hídrica, liderada por la Municipalidad de Puerto Varas, posee un carácter asesor, es decir, los actores que la integran asesoran al municipio desde sus áreas de expertise, proponiendo metodologías y estrategias de monitoreo, y líneas de acción para intentar reducir la contaminación en la bahía. En la Mesa participan autoridades y actores académicos con competencia en la materia y fundaciones o empresas con experiencia en el área y con capacidades que ponen a disposición del proyecto.</p>
            </div>
            <div class="grid grid-cols-2 md:py-[30px] 3xl:py-[50px]">
                <a class="example-image-link" href="assets/img/lagosinhuella/lagosinhuella-01.webp" data-lightbox="example-set" data-title="">
                    <img class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] object-cover" src="assets/img/lagosinhuella/lagosinhuella-01.webp" alt=""/>
                </a>
                <a class="example-image-link" href="assets/img/lagosinhuella/lagosinhuella-02.webp" data-lightbox="example-set" data-title="">
                    <img class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] object-cover" src="assets/img/lagosinhuella/lagosinhuella-02.webp" alt=""/>
                </a>
            </div>
            <div class="grid grid-cols-1 md:py-[30px] 3xl:py-[50px] ">
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-bold md:mt-[20px]">EJES DE ACCIÓN</p>
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal md:mt-[20px]">El Plan Lago Sin Huella posee 3 ejes de acción principales:</p>
                <div class="flex flex-row md:mt-[30px]">
                    <div class="w-1/12 flex justify-end pr-[14px]">
                        <p class="font-sora md:text-[18px] md:leading-[18px] 3xl:text-[20px] 3xl:leading-[20px] font-normal bg-amarillo px-[12px] py-[6px] rounded-[20px] h-[30px]">1</p>
                    </div>
                    <div class="w-11/12">
                        <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal pt-[2px]"><b>Infraestructura crítica</b></p>
                        <p class="font-sora md:text-[18px] 3xl:text-[20px] font-light pt-[10px]">Busca mejorar a futuro las instalaciones de la ciudad de Puerto Varas que se relacionan con el ingreso de contaminantes en la bahía urbana, a modo de reducir al máximo posible el ingreso de los mismos.</p>
                    </div>
                </div>
                <div class="flex flex-row md:mt-[30px]">
                    <div class="w-1/12 flex justify-end pr-[14px]">
                        <p class="font-sora md:text-[18px] md:leading-[18px] 3xl:text-[20px] 3xl:leading-[20px] font-normal bg-amarillo px-[10px] py-[6px] rounded-[20px] h-[30px]">2</p>
                    </div>
                    <div class="w-11/12">
                        <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal pt-[2px]"><b>Educación y concientización</b></p>
                        <p class="font-sora md:text-[18px] 3xl:text-[20px] font-light pt-[10px]">Busca desplegar iniciativas de educación socioambiental para sensibilizar a la población sobre la importancia en la protección del Lago Llanquihue y el rol que puede desempeñar la ciudadanía en ello.</p>
                    </div>
                </div>
                <div class="flex flex-row md:mt-[30px]">
                    <div class="w-1/12 flex justify-end pr-[14px]">
                        <p class="font-sora md:text-[18px] md:leading-[18px] 3xl:text-[20px] 3xl:leading-[20px] font-normal bg-amarillo px-[10px] py-[6px] rounded-[20px] h-[30px]">3</p>
                    </div>
                    <div class="w-11/12">
                        <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal pt-[2px]"><b>Monitoreo y transparencia</b></p>
                        <p class="font-sora md:text-[18px] 3xl:text-[20px] font-light pt-[10px]">Busca monitorear en forma permanente la bahía de Puerto Varas para, por un lado, establecer un criterio de transparencia en relación al estado actual del Lago y evaluar cómo se puede ir mejorando la situación hacia el futuro y, por otro lado, contribuir a que la comunidad pueda escoger los puntos de uso de las playas urbanas de forma más segura.</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:py-[30px]">
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-bold md:mt-[20px]">¿QUIÉNES PARTICIPAN?</p>
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal md:mt-[20px]">El monitoreo mensual de la calidad del lago Llanquihue en la bahía de Puerto Varas, se lleva a cabo gracias al aporte
                                                                                             de socios colaboradores en el programa: Hotel Cabaña del Lago, Dimarine, BirdsChile, Karün, NODO, Mesa Tropera y
                                                                                             Hotel Bellavista, además del apoyo técnico e institucional de la Seremi de Medio Ambiente y Salud de la Región de
                                                                                             Los Lagos.</p>

            </div>
            <div class="md:h-[150px] 3xl:h-[170px] bg-[#ffffff] ">
                <div class="container mx-auto flex flex-row items-end md:h-[40px] 3xl:h-[50px]">
                    <div class="flex w-3/12 flex-row">
                        <p class="md:text-[16px] 3xl:text-[18px]">Colaboradores:</p>
                    </div>
                    <div class="w-8/12 flex flex-row pl-[30px]">
                        <p class="md:text-[16px] 3xl:text-[18px]">Aportantes:</p>
                    </div>
                </div>

                <div class="container mx-auto flex flex-row">
                    <div class="md:w-3/12 flex flex-row justify-between items-center h-[100px]">
                        <a href="https://seremi10.redsalud.gob.cl/" target="_blank">
                            <img src="../assets/img/sponsor-01.svg" alt="Sponsor 01" class="md:h-[60px] 3xl:h-[70px] inline-block">
                        </a>
                        <a href="https://mma.gob.cl/los-lagos/" target="_blank">
                            <img src="../assets/img/sponsor-02.svg" alt="Sponsor 01" class="md:h-[60px] 3xl:h-[70px] inline-block">
                        </a>
                        <a href="https://www.uss.cl/" target="_blank">
                            <img src="assets/img/lagosinhuella/2024/logo-uss.png" alt="Sponsor 01" class="md:h-[85px] inline-block mr-[50px]">
                        </a>
                    </div>
                    <div class="md:w-8/12 flex flex-row justify-between items-center h-[100px] pl-[30px]">
                        <a href="https://www.dimarsa.cl/" target="_blank">
                            <img src="assets/img/lagosinhuella/2024/logo-dimarsa.png" alt="Logo Dimarsa" class="h-[22px] mr-[15px]">
                        </a>
                        <a href="https://www.anteojoskarun.cl/" target="_blank">
                            <img src="assets/img/lagosinhuella/2024/logo-karun.png" alt="Logo Karun" class="h-[35px] mr-[15px]">
                        </a>
                        <a href="https://hotelcabanadellago.cl/" target="_blank">
                            <img src="assets/img/lagosinhuella/2024/logo-cabana.png" alt="Logo Cabañas del Lago" class="h-[70px] mr-[15px]">
                        </a>
                        <a href="https://www.birdschile.com/" target="_blank">
                            <img src="assets/img/lagosinhuella/2024/logo-bird.png" alt="Logo Bird" class="h-[70px] mr-[15px]">
                        </a>
                        <a href="https://hotelbellavista.cl/" target="_blank">
                            <img src="assets/img/lagosinhuella/2024/logo-bellavista.png" alt="Logo Hotel Bellavista" class="h-[90px] mr-[15px]">
                        </a>
                        <a href="https://www.mesatropera.cl/" target="_blank">
                            <img src="assets/img/lagosinhuella/2024/logo-mesa.svg" alt="Logo Mesa Tropera" class="h-[70px] mr-[15px]">
                        </a>
                        <a href="https://www.nodochile.cl/" target="_blank">
                            <img src="assets/img/lagosinhuella/2024/logo-nodo.svg" alt="Logo Nodo" class="h-[70px] mr-[15px]">
                        </a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 md:pt-[30px] md:pb-[50px] 3xl:pt-[50px] 3xl:pb-[100px]">
                <a class="example-image-link" href="assets/img/lagosinhuella/2024/imagen-01.png" data-lightbox="example-set" data-title="">
                    <img src="assets/img/lagosinhuella/2024/imagen-01.png" class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] py-[20px] object-cover" alt="">
                </a>
                <a class="example-image-link" href="assets/img/lagosinhuella/2024/imagen-02.png" data-lightbox="example-set" data-title="">
                    <img src="assets/img/lagosinhuella/2024/imagen-02.png" class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] py-[20px] object-cover" alt="">
                </a>
                <a class="example-image-link" href="assets/img/lagosinhuella/2024/imagen-03.png" data-lightbox="example-set" data-title="">
                    <img src="assets/img/lagosinhuella/2024/imagen-03.png" class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] py-[20px] object-cover" alt="">
                </a>
                <a class="example-image-link" href="assets/img/lagosinhuella/2024/imagen-04.png" data-lightbox="example-set" data-title="">
                    <img src="assets/img/lagosinhuella/2024/imagen-04.png" class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] py-[20px] object-cover" alt="">
                </a>
                <a class="example-image-link" href="assets/img/lagosinhuella/2024/imagen-05.png" data-lightbox="example-set" data-title="">
                    <img src="assets/img/lagosinhuella/2024/imagen-05.png" class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] py-[20px] object-cover" alt="">
                </a>
                <a class="example-image-link" href="assets/img/lagosinhuella/2024/imagen-06.png" data-lightbox="example-set" data-title="">
                    <img src="assets/img/lagosinhuella/2024/imagen-06.png" class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] py-[20px] object-cover" alt="">
                </a>
                <a class="example-image-link" href="assets/img/lagosinhuella/2024/imagen-07.png" data-lightbox="example-set" data-title="">
                    <img src="assets/img/lagosinhuella/2024/imagen-07.png" class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] py-[20px] object-cover" alt="">
                </a>
                <a class="example-image-link" href="assets/img/lagosinhuella/2024/imagen-08.png" data-lightbox="example-set" data-title="">
                    <img src="assets/img/lagosinhuella/2024/imagen-08.png" class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] py-[20px] object-cover" alt="">
                </a>
                <a class="example-image-link" href="assets/img/lagosinhuella/2024/imagen-09.png" data-lightbox="example-set" data-title="">
                    <img src="assets/img/lagosinhuella/2024/imagen-09.png" class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] py-[20px] object-cover" alt="">
                </a>
            </div>
        </div>
        <!------------------------- ITEMS ACORDION 2 ---------------------------->
        <div class="container mx-auto">
            <div class="flex justify-center content-center items-center py-[6px]">
                <div id="accordion-collapse" data-accordion="collapse" data-active-classes="border-[#88c3d3] text-[#ffffff] bg-[#88c3d3]">
                    <h2 id="accordion-collapse-heading-2" class="text-[#6a80ac]">
                        <button type="button" class="font-sora flex font-bold text-left  text-[20px] w-[350px] items-center justify-between border border-[2px] border-[#6a80ac] rounded-[20px] px-[20px] pt-[8px] pb-[6px]" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                            <span></span>
                            <span>Monitoreo de la bahía</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                </div>
            </div>
        </div>

        <div class="container mx-auto hidden" id="accordion-collapse-body-2" aria-labelledby="accordion-collapse-heading-2">
            <div class="grid grid-cols-1 md:py-[30px] 3xl:py-[50px]">
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-bold">El eje de Monitoreo y transparencia del Plan Lago sin Huella se concreta en colaboración con las Seremis de Medio Ambiente y de Salud, mediante el monitoreo de coliformes fecales en 16 puntos de la bahía urbana de Puerto Varas. Los muestreos son realizados por la SEREMI de Salud, mientras que los informes técnicos de dichos muestreos son elaborados por la SEREMI del Medio Ambiente y se encuentran en la sección Biblioteca.</p>
            </div>
            <div class="grid grid-cols-1 flex justify-center py-[20px]">
                <img class="w-[30%] ml-[35%]" src="assets/img/lagosinhuella/lagosinhuella-06.webp" alt="Seremi">
            </div>
            <div class="grid grid-cols-1">
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-bold md:mt-[20px]">PUNTOS DE MUESTREO</p>
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal py-[15px]">Los 16 puntos de la bahía fueron seleccionados en base a los siguientes criterios: </p>
            </div>

            <div class="flex flex-row md:mt-[30px]">
                <div class="w-1/12 flex justify-end pr-[14px]">
                    <p class="font-sora md:text-[18px] md:leading-[18px] 3xl:text-[20px] 3xl:leading-[20px] font-normal bg-amarillo px-[12px] py-[6px] rounded-[20px] h-[30px]">1</p>
                </div>
                <div class="w-11/12">
                    <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal pt-[2px]"><b>Presencia de afluentes (cursos de agua, esteros)</b> que descargan sus aguas en la bahía de Puerto Varas.</p>
                </div>
            </div>
            <div class="flex flex-row md:mt-[30px]">
                <div class="w-1/12 flex justify-end pr-[14px]">
                    <p class="font-sora md:text-[18px] md:leading-[18px] 3xl:text-[20px] 3xl:leading-[20px] font-normal bg-amarillo px-[10px] py-[6px] rounded-[20px] h-[30px]">2</p>
                </div>
                <div class="w-11/12">
                    <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal pt-[2px]"><b>Uso de playas por parte de la comunidad. </b></p>
                </div>
            </div>

            <div class="grid grid-cols-1 py-[30px] flex justify-center">
                <img class="md:w-[80%] md:ml-[10%]" src="assets/img/lagosinhuella/mapa-01.svg" alt="Puntos del Mapa">
            </div>

            <div class="grid grid-cols-1">
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-bold md:mt-[20px]">FRECUENCIA DE MUESTREO:</p>
            </div>

            <div class="flex flex-row md:my-[30px]">
                <div class="w-1/12 flex justify-end pr-[14px]">
                    <p class="bg-amarillo px-[10px] py-[6px] rounded-[20px] w-[30px] h-[30px]"></p>
                </div>
                <div class="w-11/12">
                    <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal pt-[2px]"><b>Una vez al mes</b></p>
                </div>
            </div>

            <div class="grid grid-cols-1">
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-bold md:mt-[20px]">PARÁMETRO DE MONITOREO</p>
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-normal py-[20px]"><b>Coliformes fecales:</b> son bacterias provenientes del intestino de seres humanos y animales. La presencia de estas bacterias en el agua indica que esta está contaminada con heces fecales o aguas servidas.<br> La unidad de medida utilizada es NMP/100 ml, que estima el número de coliformes presentes en 100 ml de agua. La norma chilena establece los 1.000 NMP/100 ml como umbral para la realización de actividades de recreación con contacto directo (D.S. N° 143, Establece Normas de Calidad Primaria para aguas continentales superficiales aptas para actividades de recreación con contacto directo). </p>
            </div>

            <div class="grid grid-cols-2 py-[30px]">
                <img class="w-[70%] ml-[20%] rounded-[25px]" src="assets/img/lagosinhuella/lagosinhuella-08.webp" alt="Muestreo">
                <img class="w-[70%] ml-[10%] rounded-[25px]" src="assets/img/lagosinhuella/lagosinhuella-09.webp" alt="Microscopio">
            </div>

        </div>

        <!------------------------- ITEMS ACORDION 3 ---------------------------->

        <div class="container mx-auto">
            <div class="flex justify-center content-center items-center py-[6px]">
                <div id="accordion-collapse" data-accordion="collapse" data-active-classes="border-[#88c3d3] text-[#ffffff] bg-[#88c3d3]">
                    <h2 id="accordion-collapse-heading-3" class="text-[#6a80ac]">
                        <button type="button" class="font-sora flex font-bold text-left  text-[20px] w-[350px] items-center justify-between border border-[2px] border-[#6a80ac] rounded-[20px] px-[20px] pt-[8px] pb-[6px]" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                            <span></span>
                            <span>Acciones y medidas</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                </div>
            </div>
        </div>

        <div class="container mx-auto hidden" id="accordion-collapse-body-3" aria-labelledby="accordion-collapse-heading-3">
            <div class="grid grid-cols-1 md:py-[30px] 3xl:py-[50px] ">
                <p class="font-sora md:text-[18px] 3xl:text-[20px] font-bold md:mt-[20px]">¿Qué acciones se han realizado?</p>
                <div class="flex flex-row md:mt-[10px]">
                    <div class="w-1/12 flex justify-end pr-[14px]">
                        <p class="font-sora md:leading-[18px] font-normal bg-amarillo px-[8px] py-[8px] rounded-[20px] h-[16px] mt-[15px]"></p>
                    </div>
                    <div class="w-11/12">
                        <p class="font-sora md:text-[18px] 3xl:text-[20px] font-light pt-[10px]">Identificación y catastro de puntos críticos en la ciudad junto a la empresa sanitaria.</p>
                    </div>
                </div>
                <div class="flex flex-row md:mt-[10px]">
                    <div class="w-1/12 flex justify-end pr-[14px]">
                        <p class="font-sora md:leading-[18px] font-normal bg-amarillo px-[8px] py-[8px] rounded-[20px] h-[16px] mt-[15px]"></p>
                    </div>
                    <div class="w-11/12">
                        <p class="font-sora md:text-[18px] 3xl:text-[20px] font-light pt-[10px]">Apoyo en la coordinación para impulsar la conexión de viviendas identificadas, junto a la empresa sanitaria.</p>
                    </div>
                </div>
                <div class="flex flex-row md:mt-[10px]">
                    <div class="w-1/12 flex justify-end pr-[14px]">
                        <p class="font-sora md:leading-[18px] font-normal bg-amarillo px-[8px] py-[8px] rounded-[20px] h-[16px] mt-[15px]"></p>
                    </div>
                    <div class="w-11/12">
                        <p class="font-sora md:text-[18px] 3xl:text-[20px] font-light pt-[10px]">Fiscalización de eventos de contaminación en el lago, por vertidos en sumideros de aguas lluvias.</p>
                    </div>
                </div>
                <div class="flex flex-row md:mt-[10px]">
                    <div class="w-1/12 flex justify-end pr-[14px]">
                        <p class="font-sora md:leading-[18px] font-normal bg-amarillo px-[8px] py-[8px] rounded-[20px] h-[16px] mt-[15px]"></p>
                    </div>
                    <div class="w-11/12">
                        <p class="font-sora md:text-[18px] 3xl:text-[20px] font-light pt-[10px]">Infografía para concientización sobre el cuidado del lago.</p>
                    </div>
                </div>
                <div class="flex flex-row md:mt-[10px]">
                    <div class="w-1/12 flex justify-end pr-[14px]">
                        <p class="font-sora md:leading-[18px] font-normal bg-amarillo px-[8px] py-[8px] rounded-[20px] h-[16px] mt-[15px]"></p>
                    </div>
                    <div class="w-11/12">
                        <p class="font-sora md:text-[18px] 3xl:text-[20px] font-light pt-[10px]">Limpiezas de playa masivas.</p>
                    </div>
                </div>
                <div class="flex flex-row md:mt-[10px]">
                    <div class="w-1/12 flex justify-end pr-[14px]">
                        <p class="font-sora md:leading-[18px] font-normal bg-amarillo px-[8px] py-[8px] rounded-[20px] h-[16px] mt-[15px]"></p>
                    </div>
                    <div class="w-11/12">
                        <p class="font-sora md:text-[18px] 3xl:text-[20px] font-light pt-[10px]">Instalación de contenedores de colillas de cigarro en diferentes puntos de la ciudad.</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 md:pt-[30px] md:pb-[50px] 3xl:pt-[50px] 3xl:pb-[100px]">
                <a class="example-image-link" href="assets/img/lagosinhuella/2024/imagen-01.png" data-lightbox="example-set" data-title="">
                    <img src="assets/img/lagosinhuella/2024/imagen-01.png" class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] py-[20px] object-cover" alt="">
                </a>
                <a class="example-image-link" href="assets/img/lagosinhuella/2024/imagen-04.png" data-lightbox="example-set" data-title="">
                    <img src="assets/img/lagosinhuella/2024/imagen-04.png" class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] py-[20px] object-cover" alt="">
                </a>
                <a class="example-image-link" href="assets/img/lagosinhuella/2024/imagen-10.png" data-lightbox="example-set" data-title="">
                    <img src="assets/img/lagosinhuella/2024/imagen-10.png" class="example-image img-fluid rounded-[40px] w-full md:h-[380px] 3xl:h-[400px] px-[10px] py-[20px] object-cover" alt="">
                </a>
            </div>
        </div>

        <!------------------------- ITEMS ACORDION 4 ---------------------------->

        <div class="container mx-auto">
            <div class="flex justify-center content-center items-center py-[6px]">
                <div id="accordion-collapse" data-accordion="collapse" data-active-classes="border-[#88c3d3] text-[#ffffff] bg-[#88c3d3]">
                    <h2 id="accordion-collapse-heading-4" class="text-[#6a80ac]">
                        <button type="button" class="font-sora flex font-bold text-center text-[20px] w-[350px] items-center justify-center border border-[2px] border-[#6a80ac] rounded-[20px] px-[20px] pt-[8px] pb-[6px]" onclick="openModal()">
                            <span></span>
                            <span>Súmate</span>
                        </button>
                    </h2>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="myModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-20">
            <div class="bg-[#6A80AC] rounded-[40px] p-8 md:w-[800px] h-[180px] flex flex-col justify-center items-center relative">
                <button class="absolute top-4 right-4 text-white" onclick="closeModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <p class="text-white font-sora md:text-[18px] 3xl:text-[20px] font-medium md:mt-[5px]">Si quieres sumarte a esta iniciativa contáctanos a</p>
                <a class="text-white font-sora md:text-[18px] 3xl:text-[20px] font-medium md:mt-[5px]" href="mailto:lagosinhuella@ptovaras.cl">lagosinhuella@ptovaras.cl</a>
            </div>
        </div>

    </div>
</section>

<!----------------------------------------------------- MAPA ---------------------------------------------------------->

<section id="puntos-monitoreo" class="md:pb-[50px] 3xl:pb-[100px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h4 class="titulos-1">PUNTOS DE MONITOREO</h4>
        </div>
    </div>
    <div class="container mx-auto md:pt-[40px] 3xl:pt-[50px]">
        <div id="google-map-div" style="width: 100%" class="w-full md:h-[600px] 3xl:h-[650px]"></div>
    </div>
</section>

<section id="resultado-muestreo" class="md:my-[50px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h4 class="titulos-1">RESULTADOS DE MUESTREO</h4>

            <select id="puntos" class="bg-white uppercase text-center border border-gray-300 text-gray-900 rounded-[20px] focus:ring-azul focus:border-azul block md:w-[340px] 3xl:w-[380px] mt-[10px] py-[2px] px-[10px] text-black font-light md:text-[20px] 3xl:text-[24px] font-sora">
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
                        <h6 class="font-sora font-medium text-[12px] leading-[15px]">COLIFORMES FECALES</h6>
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
                <button id='backtomap' class="border-amarillo border-[1px] w-[180px] font-sora font-bold text-[14px] leading-[14px] py-[8px] rounded-[16px] hover:bg-amarillo">
                    VOLVER AL MAPA
                </button><!--ACA SE CIERRA EL GRAFICO Y POSICIONA EN EL MAPA -->
            </div>
        </div>
    </div>

    <div class="container mx-auto md:pt-[10px]">
        <div class="flex flex-row justify-center">
            <a class="font-sora font-bold md:text-[14px] md:leading-[14px] 3xl:text-[16px] 3xl:leading-[16px] border-[1px] border-amarillo bg-amarillo px-[40px] py-[10px] rounded-[20px] mx-[16px] hover:bg-white" href="lagosinhuella-informes.php">INFORMES TRIMESTRALES</a>
            <a id='exportexcel' class="font-sora font-bold md:text-[14px] md:leading-[14px] 3xl:text-[16px] 3xl:leading-[16px] border-[1px] border-amarillo bg-amarillo px-[40px] py-[10px] rounded-[20px] mx-[16px] hover:bg-white" href="#">DESCARGAR BASE DE DATOS</a><!--ACA DESCAR EL ARCHIVO EXCEL-->
        </div>
    </div>
	<table>
	<?php
		$sql = "SET lc_time_names = 'es_ES';";
        $result = mysql_query($sql);	
		
		$sql = "SELECT CONCAT(YEAR(Fecha),'-',MONTH(Fecha)) as 'month' ,DATE_FORMAT(`Fecha`,'%Y - %M') as 'monthname'
				FROM puntos_muestras
				group by CONCAT(YEAR(Fecha),'-',MONTH(Fecha)),DATE_FORMAT(`Fecha`,'%Y - %M')
				order by Fecha";
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


</section>


<!---------- IN FOOTER DE LA PAGINA ----------->
<?php include('assets/layout/footer.php') ?>
<!------- PACK DE JS NECESARIOS PARA EL FUNCIONAMIENTO --------->
<?php include('assets/layout/script.php') ?>
<!------------------------------- GALLERIA ------------------------------->
<script src="assets/dist/js/lightbox-plus-jquery.min.js"></script>

<script>
    function openModal() {
        document.getElementById('myModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('myModal').classList.add('hidden');
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
			url: "api/getMediciones.php",
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
				
				var bullet = series.bullets.push(new am4charts.CircleBullet());
				bullet.circle.stroke = interfaceColors.getFor("background");
				bullet.circle.strokeWidth = 2;				  
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
<script src="assets/js/exportexcel/excelexportjs.js"></script>
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