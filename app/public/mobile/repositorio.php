<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lago En Línea | Repositorio</title>
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    <section>
        <?php include('assets/menumobile.php') ?>
    </section>

    <section id="contenidos">
        <div class="container">
            <div class="row">
                <div class="col-12 drop-titulo">
                    <div class="dropdown text-center">
                        <button class="btn btn-secondary dropdown-toggle btn-drop" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            BIBLIOTECA
                        </button>
                        <div class="dropdown-menu drop-desplegable" aria-labelledby="dropdownMenuButton">
                            <a typep='general' class="btnselect dropdown-item drop-item-1" id="opcion-01" style="cursor: pointer;" typep='general'>GENERAL</a>
                            <a typep='teledeteccion' class="btnselect dropdown-item" id="opcion-02" style="cursor: pointer;" typep='teledeteccion'>TELEDETECCIÓN</a>
                            <a typep='monitoreo' class="btnselect dropdown-item" id="opcion-03" style="cursor: pointer;" typep='monitoreo'>ESTACIÓN DE MONITOREO</a>
                            <a typep='metagenomica' class="btnselect dropdown-item" id="opcion-04" style="cursor: pointer;" typep='metagenomica'>METAGENÓMICA</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="downfile">
        <div class="container">
            <!-- VISTA GENERAL -->
            <div class="row all card-contenido" id='general' style='display:none'>
                <?php
                include('../admin/get-mime-type.php');
                $directory = "../admin/library/general/files";
                $images = glob($directory . "/*.*");
                $imgsize = 0;

                foreach ($images as $image) {
                    $filename = explode("/", $image);
                    $mime = get_mime_type($image);
                    $typefile = get_mime_image($mime);
                    echo "<div class='card card-repositorio col-6'>
                                <img class='card-img-top' src='../admin/$typefile' alt='Card image cap'>
                                <div class='card-body'>
                                    <div class='row'>
                                        <div class='col-9 title-archive'>
                                            <h6 style='margin-bottom:0'>{$filename[5]}</h6>
                                            General
                                        </div>
                                        <div class='col-3 img-archive'>
                                            <a href='$image'><img src='../asset/img/iconodownload.png' alt=''></a>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    $imgsize++;
                }
                $directory = "../admin/library/teledeteccion/files";
                $images = glob($directory . "/*.*");

                foreach ($images as $image) {

                    $filename = explode("/", $image);
                    $mime = get_mime_type($image);
                    $typefile = get_mime_image($mime);
                    echo "<div class='card card-repositorio col-6'>
                                <img class='card-img-top' src='../admin/$typefile' alt='Card image cap'>
                                <div class='card-body'>
                                    <div class='row'>
                                        <div class='col-9 title-archive'>
                                            <h6 style='margin-bottom:0'>{$filename[5]}</h6>
                                            Teledeteccion
                                        </div>
                                        <div class='col-3 img-archive'>
                                            <a href='$image'><img src='../asset/img/iconodownload.png' alt=''></a>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    $imgsize++;
                }

                $directory = "../admin/library/metagenomica/files";
                $images = glob($directory . "/*.*");

                foreach ($images as $image) {

                    $filename = explode("/", $image);
                    $mime = get_mime_type($image);
                    $typefile = get_mime_image($mime);
                    echo "<div class='card card-repositorio col-6'>
                                <img class='card-img-top' src='../admin/$typefile' alt='Card image cap'>
                                <div class='card-body'>
                                    <div class='row'>
                                        <div class='col-9 title-archive'>
                                            <h6 style='margin-bottom:0'>{$filename[5]}</h6>
                                            Metagenomica
                                        </div>
                                        <div class='col-3 img-archive'>
                                            <a href='$image'><img src='../asset/img/iconodownload.png' alt=''></a>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    $imgsize++;
                }

                $directory = "../admin/library/monitoreo/files";
                $images = glob($directory . "/*.*");

                foreach ($images as $image) {

                    $filename = explode("/", $image);
                    $mime = get_mime_type($image);
                    $typefile = get_mime_image($mime);
                    echo "<div class='card card-repositorio col-6'>
                                <img class='card-img-top' src='../admin/$typefile' alt='Card image cap'>
                                <div class='card-body'>
                                    <div class='row'>
                                        <div class='col-9 title-archive'>
                                            <h6 style='margin-bottom:0'>{$filename[5]}</h6>
                                            Estacion de Monitoreo
                                        </div>
                                        <div class='col-3 img-archive'>
                                            <a href='$image'><img src='../asset/img/iconodownload.png' alt=''></a>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    $imgsize++;
                }

                ?>
                <?php
                if ($imgsize == 0) {
                ?>
                    <h1 id='nofiles' style='text-align: center;margin-bottom:300px'>
                        No hay archivos
                    </h1>
                <?php
                }
                ?>
            </div>
            <!-- END GENERAL - TELEDETECCIÓN -->
            <div class="row all" id='teledeteccion'>
                <?php
                $directory = "../admin/library/teledeteccion/files";
                $images = glob($directory . "/*.*");
                $imgsize = 0;

                foreach ($images as $image) {
                    $filename = explode("/", $image);
                    $mime = get_mime_type($image);
                    $typefile = get_mime_image($mime);
                    echo "<div class='card card-repositorio col-6'>
                                <img class='card-img-top' src='../admin/$typefile' alt='Card image cap'>
                                <div class='card-body'>
                                    <div class='row'>
                                        <div class='col-9 title-archive'>
                                            <h6 style='margin-bottom:0'>{$filename[5]}</h6>
                                            Teledeteccion
                                        </div>
                                        <div class='col-3 img-archive'>
                                            <a href='$image'><img src='../asset/img/iconodownload.png' alt=''></a>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    $imgsize++;
                }

                ?>
                <?php
                if ($imgsize == 0) {
                ?>
                    <h1 id='nofiles' style='text-align: center;margin-bottom:300px'>
                        No hay archivos
                    </h1>
                <?php
                }
                ?>
            </div>
            <!-- END TELEDETECCIÓN - METAGENOMICA -->
            <div class="row all" id='metagenomica'>
                <?php
                $directory = "../admin/library/metagenomica/files";
                $images = glob($directory . "/*.*");
                $imgsize = 0;

                foreach ($images as $image) {
                    $filename = explode("/", $image);
                    $mime = get_mime_type($image);
                    $typefile = get_mime_image($mime);
                    echo "<div class='card card-repositorio col-6'>
                                <img class='card-img-top' src='../admin/$typefile' alt='Card image cap'>
                                <div class='card-body'>
                                    <div class='row'>
                                        <div class='col-9 title-archive'>
                                            <h6 style='margin-bottom:0'>{$filename[5]}</h6>
                                            Metagenomica
                                        </div>
                                        <div class='col-3 img-archive'>
                                            <a href='$image'><img src='../asset/img/iconodownload.png' alt=''></a>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    $imgsize++;
                }
                ?>
                <?php
                if ($imgsize == 0) {
                ?>
                    <h1 id='nofiles' style='text-align: center;margin-bottom:300px'>
                        No hay archivos
                    </h1>
                <?php
                }
                ?>
            </div>
            <!-- END METAGENOMICA - MONITOREO -->
            <div class="row all" id='monitoreo'>
                <?php
                $directory = "../admin/library/monitoreo/files";
                $images = glob($directory . "/*.*");
                $imgsize = 0;

                foreach ($images as $image) {
                    $filename = explode("/", $image);
                    $mime = get_mime_type($image);
                    $typefile = get_mime_image($mime);
                    echo "<div class='card card-repositorio col-6'>
                                <img class='card-img-top' src='../admin/$typefile' alt='Card image cap'>
                                <div class='card-body'>
                                    <div class='row'>
                                        <div class='col-10 title-archive'>
                                            <h6 style='margin-bottom:0'>{$filename[5]}</h6>
                                            Monitoreo
                                        </div>
                                        <div class='col-2 img-archive'>
                                            <a href='$image'><img src='../asset/img/iconodownload.png' alt=''></a>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                    $imgsize++;
                }
                ?>
                <?php
                if ($imgsize == 0) {
                ?>
                    <h1 id='nofiles' style='text-align: center;margin-bottom:300px'>
                        No hay archivos
                    </h1>
                <?php
                }
                ?>
            </div>

        </div>
    </section>

    <section>
        <?php include('assets/menudown.php') ?>
    </section>

    <!-- Optional JavaScript; choose one -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Option 3: Other JS -->

    <script src="assets/js/change.js"></script>

    <script>
        $(document).on('click', function() {
            $('.collapse').collapse('hide');
        })
    </script>

    <!-- REPOSITORIO -->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            $('#teledeteccion').hide();
            $('#monitoreo').hide();
            $('#metagenomica').hide();
            $('.card-contenido').fadeIn();
            $('.btnselect').click(function() {
                var i = $(this).attr('typep');
                $('.all').hide();
                $('#' + i).fadeIn();
            })
        });
    </script>

</body>