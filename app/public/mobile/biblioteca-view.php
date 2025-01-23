<!DOCTYPE html>
<html lang="es">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lago En Línea | Biblioteca</title>
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
    <script src="https://kit.fontawesome.com/6425939416.js" crossorigin="anonymous"></script>
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
        <?php include('assets/newmenumobile.php') ?>
    </section>

    <section id="contenidos">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center titulo-tecnologias">
                    <h2>BIBLIOTECA</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 btn-volver">
                    <button class='backbutton'><i class="fa-solid fa-chevron-left"></i> VOLVER</button>
                </div>
            </div>
            <?php
            include('../admin/include/conf/dbselect.php');
            $sql = "SELECT * FROM `documentos-complementarios` WHERE ID = '{$_GET['id']}'";
            $result = mysql_query($sql);
            while ($row = mysql_fetch_assoc($result)) {
                $Decripcion = $row['Decripcion'];
                $Titulo = $row['Titulo'];
                $ImagenDestacada = $row['ImagenDestacada'];
                $FechaPublicacion = $row['FechaPublicacion'];
                $CampoLink = $row['CampoLink'];
                $ArchivoDescargar = $row['ArchivoDescargar'];
                $ImagenDestacada = $row['ImagenDestacada'];
                $TipoRecurso = $row['TipoRecurso'];
                $Autores = $row['Autores'];
            }

            $sql = "SELECT * FROM filtros WHERE DocumentoID = '{$_GET['id']}' and Filtro = 'institucion'";
            $result = mysql_query($sql);
            $institucion_array = array();
            while ($row = mysql_fetch_assoc($result)) {
                $institucion_array[] = $row['Valor'];
            }
            $institucion = implode("<br>", $institucion_array);

            $sql = "SELECT * FROM filtros WHERE DocumentoID = '{$_GET['id']}' and Filtro = 'idioma'";
            $result = mysql_query($sql);
            $idioma_array = array();
            while ($row = mysql_fetch_assoc($result)) {
                $idioma_array[] = $row['Valor'];
            }
            $idioma = implode("<br>", $idioma_array);


            $sql = "SELECT * FROM filtros WHERE DocumentoID = '{$_GET['id']}' and Filtro = 'materia'";
            $result = mysql_query($sql);
            $materia_array = array();
            while ($row = mysql_fetch_assoc($result)) {
                $materia_array[] = "'" . $row['Valor'] . "'";
            }
            $materia = implode(",", $materia_array);

            $sql = "SELECT distinct DocumentoID 
				FROM filtros
				WHERE  1 AND DocumentoID <> '{$_GET['id']}'
				AND (Filtro = 'materia' AND Valor IN ($materia)) ";

            $result = mysql_query($sql);
            $docs_array = array();
            while ($row = mysql_fetch_assoc($result)) {
                $docs_array[] = $row['DocumentoID'];
            }

            $docs_array_implode = implode(",", $docs_array);

            ?>
            <div class="row libro-contenido">
                <div class="libro-content">
                    <div class="row">
                        <div class="col-4 port-libro">
                            <img src='<?php echo "../admin/api/{$ImagenDestacada}" ?>' class='img-fluid rounded-start' alt='...'>
                        </div>
                        <div class="col-8 preview-libro">
                            <div class='cat-libro'>
                                <h5><?php echo $TipoRecurso ?></h5>
                            </div>

                            <h3><?php echo $Titulo  ?></h3>
                            <hr class='line-preview'>

                            <div class='info-libro'>
                                <p class='titulo-info'>Autores:</p>
                                <p class='content-info'><?php echo $Autores ?></p>
                                <p class='titulo-info'>Institución:</p>
                                <p class='content-info'><?php echo $institucion ?></p>
                                <p class='titulo-info'>Fecha Publicacion:</p>
                                <p class='content-info'><?php echo $FechaPublicacion  ?></p>
                                <p class='titulo-info'>Idioma:</p>
                                <p class='content-info'><?php echo $idioma ?></p>
                                <!-- <p class='titulo-info'>Otra Info:</p>
                                <p class='content-info'></p> -->
                            </div>
                        </div>
                        <div class="col-12 cont-libro">
                            <h6><?php echo $Decripcion  ?></h6>
                            <div class='link-libro'>
                                <div class='row'>
                                    <div class='col-12 icon-link'>
                                        <?php
                                        if ($CampoLink == '') {
                                        ?>
                                            <h5 style='color:#dddddd;font-weight: 300;'><i class='fa-solid fa-link'></i> Ver Documento</h5>
                                        <?php
                                        } else {
                                        ?>
                                            <a href='<?php echo $CampoLink ?>' target='_blank'>
                                                <h5><i class='fa-solid fa-link'></i> Ver Documento</h5>
                                            </a>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class='down-libro'>
                                <div class='row'>
                                    <div class='col-12 icon-link'>
                                        <?php
                                        if ($ArchivoDescargar == '') {
                                        ?>
                                            <h5 style='color:#dddddd;font-weight: 300;'><i class='fa-solid fa-file-contract'></i> Descargar Documento</h5>
                                        <?php
                                        } else {
                                        ?>
                                            <a href='../admin/api/<?php echo $ArchivoDescargar ?>' target='_blank'>
                                                <h5><i class="fa-solid fa-file-contract"></i>Descargar Documento</h5>
                                            </a>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!--- RELACIONADOS --->
            <div class="row contenedor-libros">
                <div class="col-12 cont-relacionados">
                    <h4>RELACIONADOS</h4>
                    <div class='tarjeta-libro'>

                        <?php
                        $sql = "SELECT *, YEAR(FechaPublicacion) as Ano FROM `documentos-complementarios` WHERE ID IN ($docs_array_implode) LIMIT 3";
                        $result = mysql_query($sql);
                        while ($row = mysql_fetch_assoc($result)) {

                            $sql1 = "SELECT * FROM filtros WHERE DocumentoID = '{$row['ID']}' and Filtro = 'institucion'";
                            $result1 = mysql_query($sql1);
                            $institucion_array = array();
                            while ($row1 = mysql_fetch_assoc($result1)) {
                                $institucion_array[] = $row1['Valor'];
                            }
                            $institucion = implode("<br>", $institucion_array);

                            echo "<div class='row contenido-libro'>
											<div class='col-3 portada-libro'>
												<img src='../admin/api/{$row['ImagenDestacada']}' class='img-fluid rounded-start' alt='...'>
											</div>
											<div class='col-9 preview-libro'>
												<div class='row'>
													{$row['TipoRecurso']}
													$materiadiv
												</div>
												<h3>{$row['Titulo']}</h3>
												<hr>
												<p class='autor'>{$row['Autores']}</p>
												<p class='institucion'>$institucion</p>
												<div class='row'>
													<div class='col-6'>
														<p class='card-text'><small class='text-muted'>{$row['Ano']}</small></p>
													</div>
													<div class='col-6 libro-ver'>
														<button class='link' id=''>Ver más</button>
													</div>
												</div>
											</div>
										</div>";
                        }
                        ?>

                    </div>
                </div>
            </div>


        </div>
    </section>

    <section>
        <?php include('assets/menudown.php') ?>
    </section>

    <!-- Optional JavaScript; choose one -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        /* $.fn.datepicker.defaults.format = "mm/dd/yyyy";
        $('.datepicker').datepicker({
            startDate: '-3d'
        });*/
        $(document).ready(function() {

            $('#copylink').click(function() {
                var href = $(this).attr('href');
                navigator.clipboard.writeText(href).then(() => {
                        alert("Enlace copiado al portapapeles");
                    })
                    .catch(err => {
                        console.log('No se puso copiar al portapapeles', err);
                    })
                return false;

            })


            function getSearchParameters() {
                var prmstr = window.location.search.substr(1);
                return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
            }

            function transformToAssocArray(prmstr) {
                var params = {};
                var prmarr = prmstr.split("&");
                for (var i = 0; i < prmarr.length; i++) {
                    var tmparr = prmarr[i].split("=");
                    params[tmparr[0]] = tmparr[1];
                }
                return params;
            }

            var params = getSearchParameters();

            $('.backbutton').click(function() {
                var key = 'id';
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
        });
    </script>

</body>

</html>