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
            document.location = "/mobile/";
        }
    </script>

    <meta charset="UTF-8">
    <!--<meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
          name="viewport">-->
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Lago en Línea</title>

    <!-- CSS PERSONALIZADO -->
    <link rel="stylesheet" href="assets/css/style.css">

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

<!---------- IN CABEZAL DE LA PAGINA ----------->
<?php include('assets/layout/header.php') ?>
<?php include('assets/layout/menustick.php') ?>
<!---------- END CABEZAL DE LA PAGINA ---------->

<section id="slider-principal" class="bg-inicio bg-no-repeat bg-cover bg-bottom h-screen">
    <div class="container mx-auto flex justify-center">
        <div class="w-7/12 ">
            <div id="predeterminado" class="textprinc flex flex-col justify-center content-center items-center md:h-[350px] 3xl:h-[500px]">
                <h4 class="font-medium leading-10 md:text-[30px] 3xl:text-[34px] md:mb-[10px] 3xl:mb-[10px]">DATOS EN LÍNEA</h4>
                <p class="font-light text-center md:text-[20px] 3xl:text-[24px]">para el monitoreo de las condiciones ambientales del lago Llanquihue</p>
            </div>
            <div id="mostrar_teled" class="textprinc flex flex-col justify-center content-center items-center md:h-[350px] 3xl:h-[500px]" style="display:none;">
                <h4 class="font-medium leading-10 md:text-[30px] 3xl:text-[34px] md:mb-[10px] 3xl:mb-[10px]">TELEDETECCIÓN</h4>
                <p class="font-light text-center md:text-[20px] 3xl:text-[24px]">Uso de imágenes satelitales para el estudio de la calidad del agua en base a parámetros como: clorofila, transparencia y partículas suspendidas. </p>
            </div>

            <div id="mostrar_metage" class="textprinc flex flex-col justify-center content-center items-center md:h-[350px] 3xl:h-[500px]" style="display:none;">
                <h4 class="font-medium leading-10 md:text-[30px] 3xl:text-[34px] md:mb-[10px] 3xl:mb-[10px]">METAGENÓMICA</h4>
                <p class="font-light text-center md:text-[20px] 3xl:text-[24px]">Análisis del material genético presente en muestras de agua, para la identificación de comunidades de microorganismos. </p>
            </div>

            <div id='mostrar_monitor' class="textprinc flex flex-col justify-center content-center items-center md:h-[350px] 3xl:h-[500px]" style="display:none">
                <h4 class="font-medium leading-10 md:text-[30px] 3xl:text-[34px] md:mb-[10px] 3xl:mb-[10px]">ESTACIÓN DE MONITOREO</h4>
                <p class="font-light text-center md:text-[20px] 3xl:text-[24px]">Boya con sensores acoplados para la medición y visualización en tiempo real de variables fisicoquímicas como temperatura, conductividad y oxígeno disuelto. </p>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="flex flex-row">
            <div class="w-6/12 flex">
                <img src="assets/img/metagenomica_img.svg" alt="metagenomica" id="metagenomica" class="flex relative cursor-pointer  md:h-[300px] 3xl:h-[400px] md:top-[-180px] 3xl:top-[-250px] md:left-[100px] 3xl:left-[100px] ">
            </div>

            <div class="w-6/12 flex flex-col">
                <img src="assets/img/satelite_img.svg" alt="satelite" id="satelite" class="flex relative cursor-pointer md:h-[140px] md:w-[200px] 3xl:w-auto] 3xl:h-[170px] md:top-[-300px] 3xl:top-[-470px] md:left-[340px] 3xl:left-[340px] ">
                <img src="assets/img/boya_img.svg" alt="boya" id="monitor" class="flex relative cursor-pointer md:w-[100px] md:h-[220px] 3xl:w-[130px] 3xl:h-[310px] md:top-[-200px] 3xl:top-[-260px] md:left-[300px] 3xl:left-[400px] ">
            </div>
        </div>
    </div>
</section>

<section id="contenido-home" class="md:py-[80px] 3xl:py-[100px]">
    <div class="container mx-auto md:pb-[50px] 3xl:pb-[60px]">
        <div class="w-full flex justify-center">
            <h3 class="font-light md:text-[40px] 3xl:text-[50px]">¿QUÉ ES LAGO EN LÍNEA?</h3>
        </div>
    </div>
    <div class="container mx-auto flex flex-row">
        <div class="w-4/12 flex flex-col justify-center">
            <div class="md:h-[250px] 3xl:h-[300px]">
                <img src="assets/img/cont_home_01.svg" alt="contenido 1" class="z-20 flex relative md:w-[50%] 3xl:w-[56%] md:top-[100px] 3xl:top-[115px] md:left-[25%] 3xl:left-[22%]">
            </div>
            <div class="md:h-[400px] 3xl:h-[450px] bg-amarillo px-[10%] pt-[110px]">
                <h4 class="text-white md:text-[34px] 3xl:text-[38px] md:leading-[36px] 3xl:leading-[44px] md:mb-[10px] 3xl:mb-[10px]">INFORMACIÓN AMBIENTAL</h4>
                <h6 class="text-white md:text-[20px] 3xl:text-[26px]">del lago Llanquihue</h6>
            </div>
        </div>
        <div class="w-4/12 flex flex-col justify-center">
            <div class="md:h-[200px] 3xl:h-[200px]">
                <img src="assets/img/cont_home_02.svg" alt="contenido 2" class="flex relative z-20 md:w-[50%] 3xl:w-[56%] md:top-[60px] 3xl:top-[20px] md:left-[25%] 3xl:left-[22%]">
            </div>
            <div class="md:h-[450px] 3xl:h-[550px] bg-azul px-[10%] md:pt-[160px] 3xl:pt-[210px]">
                <h4 class="text-white md:text-[34px] 3xl:text-[38px] md:leading-[36px] 3xl:leading-[44px] md:mb-[10px] 3xl:mb-[10px]">EVALUACIÓN DE TECNOLOGÍAS</h4>
                <h6 class="text-white md:text-[20px] 3xl:text-[26px]">para el monitoreo de las condiciones ambientales del lago.</h6>
            </div>
        </div>
        <div class="w-4/12 flex flex-col justify-center">
            <div class="md:h-[300px] 3xl:h-[340px]">
                <img src="assets/img/cont_home_03.svg" alt="contenido 3" class="z-20 flex relative md:w-[50%] 3xl:w-[56%] md:top-[150px] 3xl:top-[150px] md:left-[25%] 3xl:left-[22%]">
            </div>
            <div class="md:h-[350px] 3xl:h-[410px] bg-[#43cabf] px-[10%] md:pt-[60px] 3xl:pt-[70px]">
                <h4 class="text-white md:text-[34px] 3xl:text-[38px] md:leading-[36px] 3xl:leading-[44px] md:mb-[10px] 3xl:mb-[10px]">APOYO A LA TOMA DE DECISIONES</h4>
                <ul>
                    <li class="md:text-[20px] 3xl:text-[26px] text-white"><img src="assets/img/dotsblanco.svg" alt="dots" class="md:w-[8px] 3xl:w-[10px] inline-block 3xl:text-white"> Políticas públicas</li>
                    <li class="md:text-[20px] 3xl:text-[26px] text-white"><img src="assets/img/dotsblanco.svg" alt="dots" class="md:w-[8px] 3xl:w-[10px] inline-block 3xl:text-white"> Iniciativas comunitarias</li>
                    <li class="md:text-[20px] 3xl:text-[26px] text-white"><img src="assets/img/dotsblanco.svg" alt="dots" class="md:w-[8px] 3xl:w-[10px] inline-block 3xl:text-white"> Inversión privada</li>
                    <li class="md:text-[20px] 3xl:text-[26px] text-white"><img src="assets/img/dotsblanco.svg" alt="dots" class="md:w-[8px] 3xl:w-[10px] inline-block 3xl:text-white"> Generación de conocimiento</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-inicio-01 bg-no-repeat bg-cover bg-bottom md:h-[1000px] 3xl:h-[1086px]">
    <div class="container mx-auto">
        <div class="flex flex-row h-[200px] justify-center content-center items-center">
            <img src="assets/img/lagosinhuella/2024/logo-ptovaras-01.png" alt="Logo Puerto Varas"
                 class="md:h-[170px] h-[100px]">
        </div>
         <div class="flex flex-col h-[250px] justify-center content-center items-center">
             <img src="assets/img/logo-lsh.svg" alt="Lago sin huella" class="md:w-[650px] 3xl:w-[800px]">
         </div>
     </div>
     <div class="container mx-auto">
         <div class="flex justify-center">
             <div class="w-8/12 flex justify-center h-[100px]">
                 <h6 class="text-center text-white font-bold md:text-[22px] 3xl:text-[26px] ">Iniciativa liderada por la Municipalidad que mediante la articulación público privada, busca proteger la bahía de Puerto Varas.</h6>
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
                <a href="lago-sin-huella.php" class="bg-[#b2efff] text-[#6994bf] font-light rounded-[40px] md:text-[18px] 3xl:text-[20px] md:px-[30px] 3xl:px-[50px] md:py-[3px] 3xl:py-[5px]">Ver resultados de monitoreo</a>
            </div>
        </div>
    </div>

    <div class="md:mt-[50px] 3xl:mt-[118px] md:h-[150px] 3xl:h-[170px] bg-[#ffffff] opacity-80">
        <div class="container mx-auto flex flex-row items-end md:h-[40px] 3xl:h-[50px]">
            <div class="w-3/12 flex flex-row">
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

<!---------- IN FOOTER DE LA PAGINA ----------->
<?php include('assets/layout/footer.php') ?>
<!------- PACK DE JS NECESARIOS PARA EL FUNCIONAMIENTO --------->
<?php include('assets/layout/script.php') ?>

</body>
</html>