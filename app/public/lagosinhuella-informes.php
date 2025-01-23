<?php
	include('admin/include/conf/dbselect.php');
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
            document.location = "/mobile/";
        }
    </script>

    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <title>Lago En Línea | Lago Sin Huella - Informes</title>

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
<?php include('assets/layout/header-lsh.php') ?>
<?php include('assets/layout/menustick.php') ?>
<!----------------------------- END CABEZAL DE LA PAGINA ------------------------------->

<section id="contenido-home" class="md:py-[50px] 3xl:py-[100px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <h4 class="titulos-1">INFORMES TRIMESTRALES</h4>
            <h5 class="subtitulos-1">Monitoreo Plan Lago sin Huella</h5>
            <p class="text-center font-sora font-medium md:text-[18px] md:my-[60px]">Los informes técnicos trimestrales son elaborados por la SEREMI de Medio Ambiente a partir de los<br> resultados del monitoreo realizado por la SEREMI de Salud.</p>
        </div>
    </div>
    <div class="container mx-auto py-[40px]"> <!--SE CARGA CARD DE LOS ARCHIVOS TRIMESTRALES CARGADOS DESDE EL BACK-END - CARGAR 12 ARCHIVOS Y DESPUES PAGINADOR-->
		<?php
			$sql="SELECT * FROM `lagosinhuella-biblioteca` ORDER BY ID ASC";
			$result=mysql_query($sql);
			while ($row = mysql_fetch_assoc($result)) {
				echo "<div id='card-archivo' class='flex flex-row py-[10px]'>
						<div class='w-2/12 flex justify-end pr-[16px]'>
							<img class='w-[36px]' src='assets/img/lagosinhuella/archivo-down.svg' alt='icono-archivo'>
						</div>
						<div class='w-10/12 flex items-center'>
							<a download target='_blank' class='font-sora underline decoration-solid md:text-[16px]' href='admin/api/{$row['ArchivoDescargar']}'>{$row['Titulo']}</a>
						</div>
					</div>";
			}
		?>
    </div>

    <div class="flex flex-row paginador justify-center mt-[40px]" style='display:none'>
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
</section>

<!---------- IN FOOTER DE LA PAGINA ----------->
<?php include('assets/layout/footer.php') ?>
<!------- PACK DE JS NECESARIOS PARA EL FUNCIONAMIENTO --------->
<?php include('assets/layout/script.php') ?>
<!------------------------------- GALLERIA ------------------------------->
<script src="assets/dist/js/lightbox-plus-jquery.min.js"></script>


</body>
</html>