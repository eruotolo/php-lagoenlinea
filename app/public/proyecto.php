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
            document.location = "/mobile/proyecto.php";
        }
    </script>

    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Lago en Línea | El Proyecto</title>

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

<!---------- IN CABEZAL DE LA PAGINA ----------->
<?php include('assets/layout/header.php') ?>
<?php include('assets/layout/menustick.php') ?>
<!---------- END CABEZAL DE LA PAGINA ---------->

<section id="contenido-home" class="md:pt-[50px] 3xl:pt-[100px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h4 class="titulos">EL PROYECTO</h4>
            <h5 class="subtitulos">Información Institucional</h5>
        </div>
    </div>

    <div class="container mx-auto md:py-[70px] 3xl:py-[70px]">
        <div class="flex flex-row items-center justify-center">
            <ul class="flex flex-wrap items-center justify-center">
                <li class="md:px-[10px]"><img src="assets/img/icon-pro-01.svg" alt="El Proyecto Icon 1" id="icon-pro-01" class="cursor-pointer md:w-[80px] 3xl:w-[100px] md:h-[80px] 3xl:h-[100px] border-azul border-[3px] rounded-[50%] hover:border-amarillo pro-icon-01-blue"></li>
                <li class="md:px-[10px]"><img src="assets/img/icon-pro-02.svg" alt="El Proyecto Icon 2" id="icon-pro-02" class="cursor-pointer md:w-[80px] 3xl:w-[100px] md:h-[80px] 3xl:h-[100px] border-azul border-[3px] rounded-[50%] hover:border-amarillo "></li>
                <li class="md:px-[10px]"><img src="assets/img/icon-pro-03.svg" alt="El Proyecto Icon 3" id="icon-pro-03" class="cursor-pointer md:w-[80px] 3xl:w-[100px] md:h-[80px] 3xl:h-[100px] border-azul border-[3px] rounded-[50%] hover:border-amarillo "></li>
            </ul>
        </div>
        <!-----------------OPCIÓN 1 ----------------->
        <div id="opcion-01" class="campo-info flex flex-row md:pt-[80px] 3xl:pt-[100px]">
            <div class="w-6/12 md:pl-[40px] md:pr-[40px]">
                <h2 class="text-azul font-medium md:text-[40px] 3xl:text-[45px] md:leading-[55px] md:pb-[30px]">MÁS AZUL</h2>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[26px]">El programa Más Azul, impulsado por la <strong class="text-azul font-medium">Sede De La Patagonia de la Universidad San Sebastián</strong>, surge debido a la creciente preocupación por la condición ambiental del Lago Llanquihue, el cual se ve afectado por fenómenos globales como el Cambio Climático y las actividades productivas que se realizan en su entorno.</p>
                <div class="flex flex-row">
                    <div class="w-2/12">
                        <img src="assets/img/subm-icon-12.svg" alt="Icono 01" class="inline md:w-[50px] md:pt-[30px] 3xl:pt-[40px]">
                    </div>
                    <div class="w-10/12">
                        <p class="text-oscuro font-light italic md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">El principal desafío de este programa es convertir al Lago Llanquihue en un modelo de gestión de cuerpos lacustres de clase mundial; en materia de conservación, ciencia aplicada, tecnología y educación ambiental, en equilibrio con el desarrollo sostenible del territorio y las comunidades.</p>
                    </div>
                </div>
            </div>
            <div class="w-6/12 flex flex-col justify-center content-center items-center">
                <img src="assets/img/img-pro-01.webp" alt="Imagenes Proyecto" class="rounded-[25px]">
            </div>
        </div>
        <!-----------------OPCIÓN 2 ----------------->
        <div id="opcion-02" class="campo-info flex flex-row md:pt-[80px] 3xl:pt-[100px]" style="display: none;">
            <div class="w-6/12 scroll flex flex-col overflow-y-scroll md:pl-[40px] md:pr-[10px] md:h-[450px] 3xl:h-[500px] md:pr-[50px] 3xl:pr-[30px] md:mr-[20px] 3xl:mr-[30px]">
                <h2 class="text-azul font-medium md:text-[40px] 3xl:text-[45px] md:leading-[55px] md:pb-[30px]">FIC MÁS AZUL</h2>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[26px]">El Proyecto FIC Más Azul forma parte de este Programa y nace en respuesta a la falta de monitoreo ambiental y, por lo tanto, información de la mayoría de los ecosistemas acuáticos de nuestro país. Este contexto limita la capacidad de conocer, reconocer y reaccionar ante cambios e impactos que estos ecosistemas puedan sufrir, así como la posibilidad de identificar las oportunidades que nos ofrecen para el desarrollo sostenible.</p>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Para acortar estas brechas el proyecto, denominado <strong class="text-azul font-medium">“Evaluación de tecnologías de la información y herramientas biotecnológicas para el monitoreo ambiental del Lago Llanquihue”</strong>, ejecutado por la Universidad San Sebastián y financiado por el Gobierno Regional de Los Lagos es un esfuerzo interdisciplinario, único en Chile, que busca evaluar herramientas de monitoreo ambiental aplicado a cuerpos lacustres.</p>
                <h3 class="text-oscuro font-medium md:text-[22px] md:pt-[40px] md:pb-[10px]">EL PROYECTO TIENE POR OBJETIVOS</h3>
                <div class="flex flex-row">
                    <div class="w-2/12">
                        <img src="assets/img/subm-icon-13.svg" alt="Icono 01" class="inline md:w-[50px] md:pt-[30px] 3xl:pt-[40px]">
                    </div>
                    <div class="w-10/12">
                        <p class="text-oscuro font-light italic md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]"><strong class="text-azul font-medium">Determinar la factibilidad técnica y económica</strong> de utilizar la teledetección, metagenómica y el monitoreo remoto, como herramientas para la generación de información.</p>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="w-2/12">
                        <img src="assets/img/subm-icon-14.svg" alt="Icono 01" class="inline md:w-[50px] md:pt-[30px] 3xl:pt-[40px]">
                    </div>
                    <div class="w-10/12">
                        <p class="text-oscuro font-light italic md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Elaborar una <strong class="text-azul font-medium">plataforma digital integrada</strong> que permita almacenar y desplegar información ambiental histórica y en tiempo real del Lago Llanquihue, facilitando la toma de decisiones para la inversión privada, y promoviendo el monitoreo ciudadano, la generación de nuevo conocimiento y la elaboración de políticas públicas.</p>
                    </div>
                </div>
                <div class="flex flex-row md:pt-[10px]">
                    <div class="w-full justify-center content-center items-center">
                        <img class="md:h-[35px] inline mr-2" src="assets/img/sponsor-03.svg" alt="USS">
                        <img class="md:h-[30px] inline" src="assets/img/logo-socios-06.svg" alt="Región Los Lagos">
                    </div>
                </div>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Este proyecto no busca determinar la calidad de las aguas del Lago, sino que la <strong class="text-azul font-medium">factibilidad de estas 3 herramientas</strong> para medir sus propiedades, para que estos instrumentos puedan ser usados en la toma de decisiones del sector público y privado, así como de la sociedad civil, tanto en el lago Llanquihue como en otros cuerpos de agua. De este modo, para responder las preguntas en torno al uso de estas tecnologías y sus potencialidades, tenemos que poder <strong class="text-azul font-medium">probar las condiciones en las que funcionarán y cuáles son los alcances de la información</strong> que cada una nos entregará.</p>
            </div>
            <div class="w-6/12 flex flex-col justify-center content-center items-center">
                <img src="assets/img/img-pro-02.webp" alt="Imagenes Proyecto" class="rounded-[25px]">
            </div>
        </div>
        <!-----------------OPCIÓN 3 ----------------->
        <div id="opcion-03" class="campo-info flex flex-row md:pt-[80px] 3xl:pt-[100px]" style="display: none;">
            <div class="w-6/12 md:pl-[40px] md:pr-[40px]">
                <h2 class="text-azul font-medium md:text-[40px] 3xl:text-[45px] md:leading-[55px] md:pb-[30px]">LAGO EN LÍNEA</h2>
                <p class="text-oscuro font-light italic md:text-[16px] 3xl:text-[18px] md:leading-[26px] 3xl:leading-[26px]">“Lago en línea” es una plataforma digital integrada que nace con el objetivo de <strong class="text-azul font-medium">poner a disposición de todos y todas la información de monitoreo ambiental, contribuyendo de esta manera a la conservación y uso sostenible del Lago Llanquihue.</strong></p>
                <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">En esta plataforma se podrá acceder a los resultados de las tres tecnologías empleadas - estación de monitoreo, metagenómica y teledetección - con el fin de difundir y transferir los resultados del proyecto, sensibilizando a actores públicos, privados y a la ciudadanía, sobre los beneficios y oportunidades de estas herramientas.</p>
                <div class="flex flex-row">
                    <div class="w-2/12">
                        <img src="assets/img/subm-icon-15.svg" alt="Icono 01" class="inline md:w-[50px] md:pt-[30px] 3xl:pt-[40px]">
                    </div>
                    <div class="w-10/12">
                        <p class="text-oscuro font-light md:text-[16px] 3xl:text-[18px] md:leading-[24px] 3xl:leading-[26px] md:pt-[30px] 3xl:pt-[40px]">Los datos e insumos desplegados en la plataforma entregan <strong class="text-azul font-medium">información relevante para aportar en la toma de decisiones sociales, ambientales y económicas en torno al lago.</strong></p>
                    </div>
                </div>
            </div>
            <div class="w-6/12 flex flex-col justify-center content-center items-center">
                <img src="assets/img/img-pro-03.webp" alt="Imagenes Proyecto" class="rounded-[25px]">
            </div>
        </div>

    </div>

</section>

<!---------- IN FOOTER DE LA PAGINA ----------->
<?php include('assets/layout/footer.php') ?>
<!------- PACK DE JS NECESARIOS PARA EL FUNCIONAMIENTO --------->
<?php include('assets/layout/script.php') ?>

<script src="assets/js/proyecto.js"></script>

<!------------------------------- GALLERIA ------------------------------->
<script src="assets/dist/js/lightbox-plus-jquery.min.js"></script>

</body>
</html>