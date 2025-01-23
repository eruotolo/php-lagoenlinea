<?php
include('../admin/include/conf/dbselect.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        let dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            // No hacer nada.
        }else{
            document.location = "../lagosinhuella-informes.php";
        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lago En Línea | Lago Sin Huella - Informes</title>
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
<!-- CABEZAL DE LA PAGINA -->
<section>
    <?php include('assets/lshmenumobile.php') ?>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center intro-informes">
                <h4>INFORMES TRIMESTRALES</h4>
                <h5>Monitoreo Plan Lago sin Huella</h5>
                <p class="text-center font-sora font-medium md:text-[18px] md:my-[60px]">Los informes técnicos trimestrales son elaborados por la SEREMI de Medio Ambiente a partir de los<br> resultados del monitoreo realizado por la SEREMI de Salud.</p>
            </div>
        </div>
    </div>
    <div class="container contenido-informes"> <!--SE CARGA CARD DE LOS ARCHIVOS TRIMESTRALES CARGADOS DESDE EL BACK-END - CARGAR 12 ARCHIVOS Y DESPUES PAGINADOR-->
        <?php
        $sql="SELECT * FROM `lagosinhuella-biblioteca` ORDER BY ID ASC";
        $result=mysql_query($sql);
        while ($row = mysql_fetch_assoc($result)) {
            echo "<div id='card-archivo' class='row informes-items'>
						<div class='col-1 flex icono-informes'>
							<img class='w-[36px]' src='../assets/img/lagosinhuella/archivo-down.svg' alt='icono-archivo'>
						</div>
						<div class='col-11 flex items-center'>
							<a download target='_blank' class='font-sora underline decoration-solid md:text-[16px]' href='../admin/api/{$row['ArchivoDescargar']}'>{$row['Titulo']}</a>
						</div>
					</div>";
        }
        ?>
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

</body>
</html>