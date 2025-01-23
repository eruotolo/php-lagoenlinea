<!doctype html>
<html lang="es">
<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        let dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            // No hacer nada.
        }else{
            document.location = "../metagenomica.php";
        }
    </script>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lago En Línea | Metagenómica</title>
	
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
	
	<!-- GALLERIA 01 -->
	<link rel="stylesheet" href="../assets/dist/css/lightbox.min.css">
	
	<!-- GALLERIA 02 -->
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css" rel="stylesheet">
	<link href="assets/css/gallery-grid.css" rel="stylesheet">
	
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

<section id="contenidos" >
	<div class="container">
		<div class="row">
			<div class="col-12 text-center titulo-tecnologias">
				<h2>METAGENÓMICA</h2>
				<br>
			</div>
		</div>
		<div class="row">
			<!-- DROPDOWN -->
			<div class="col-12 drop-titulo text-center">
				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
					<div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle btn-drop btn-drop-nuevo" data-bs-toggle="dropdown" aria-expanded="false">
							SOBRE LA TECNOLOGÍA
						</button>
						<ul class="dropdown-menu drop-desplegable" aria-labelledby="btnGroupDrop1">
							<a class="dropdown-item drop-item-1" id="opcion-01" style="cursor: pointer;">TECNOLOGÍA</a>
							<a class="dropdown-item" id="opcion-02" style="cursor: pointer;">INDICADORES</a>
							<a class="dropdown-item" id="opcion-03" style="cursor: pointer;">METODOLOGÍA</a>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- VARIANTES -->
			<div class="col-12 campo-info-1" id="mostrar-opcion-01">
				<div class="container">
					<div class="row">
						<div class="col-12 subtitulo-azul">
							<h5>TECNOLOGÍA</h5>
						</div>
						<div class="col-12 texto-azul-2">
							<p>Tradicionalmente, la calidad biológica del agua se ha determinado mediante métodos fisicoquímicos y microbiológicos clásicos que apuntan a cultivar las bacterias presentes en una muestra. Sin embargo, parte importante de los microorganismos que habitan en el medio ambiente son imposibles de cultivar individualmente.</p>
							<p><strong>En las últimas décadas, el desarrollo de metodologías que logran descifrar la secuencia de la información genética que se encuentra codificada en el DNA, han permitido estudiar a los microorganismos en un nivel que antes era imposible.</strong></p>
							
							<p>Se conoce como metagenómica al estudio de todos los genomas, es decir, al <strong>estudio de la secuencia total del material genético</strong> que poseen los microorganismos en un sitio en específico. Esto incluye la <strong>descripción taxonómica</strong> (es decir, la identificación de qué microorganismos están presentes y en qué cantidad), así como la caracterización de la <strong>capacidad funcional de sus genes</strong> (es decir, la descripción de qué pueden hacer los microorganismos). En otras palabras, <strong>permite el estudio de todos los microorganismos presentes en una muestra, incluso los que no se conocen, sin la necesidad de cultivarlos.</strong></p>
							
							<p>En Chile, esta herramienta aún no ha sido utilizada para el análisis microbiológico de los cuerpos lacustres y en este proyecto hemos demostrado que es posible caracterizar la microbiología asociada a distintos puntos del Lago Llanquihue mediante el uso de metagenómica. Para ello, hemos utilizado las metodologías de secuenciación “Shotgun metagenomic sequencing” y secuenciación de amplicones del gen 16S rRNA (16S Amplicon sequenging).
							</p>
						</div>
						<div class="col-12 new-opcion-text opcion-proyecto gallery">
							<div class="row">
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/metagenomica/img-metagenomica-01.jpeg" data-lightbox="example-set" data-title="Muestra de agua"><img class="example-image img-fluid" src="../assets/img/metagenomica/img-metagenomica-01-1.jpg" alt=""/></a>
								</div>
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/metagenomica/img-metagenomica-02.jpeg" data-lightbox="example-set" data-title="Análisis de laboratorio de muestras de agua"><img class="example-image img-fluid" src="../assets/img/metagenomica/img-metagenomica-02-1.jpg" alt=""/></a>
								</div>
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/metagenomica/img-metagenomica-03.jpeg" data-lightbox="example-set" data-title="Imagen referencial de microorganismos"><img class="example-image img-fluid" src="../assets/img/metagenomica/img-metagenomica-03-1.jpg" alt=""/></a>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
			
			<div class="col-12 campo-info-1" id="mostrar-opcion-02" style="display:none;">
				<div class="container">
					<div class="row">
						<div class="col-12 subtitulo-azul">
							<h5>INDICADORES</h5>
						</div>
						<div class="col-12 texto-azul-2">
							<p>Al ser pioneros en el uso de la metagenómica para la descripción microbiológica de cuerpos lacustres, hemos utilizado la información recopilada para diseñar una manera fácil de describir el estado microbiológico de los sitios analizados. Para ello, utilizamos la <strong>abundancia de las bacterias identificadas</strong>, la que nos permite ordenar los microorganismos de mayor a menor en función de su prevalencia.</p>
							
							<p><b>Los gráficos de barras</b> indican la variedad relativa de las bacterias encontradas en las uestras de agua, distinguiendo los puntos de muestreo. Los diferentes colores corresponden a los principales filos bacterianos (categoría en taxonomía situada entre el reino y la clase). La amplitud vertical de cada color representa la abundancia de cada filo.</p>
							
							<p>Utilizando las 50 bacterias de mayor prevalencia, realizamos una clasificación de acuerdo con la función descrita que estas tienen en literatura científica. Para ello, hemos generado una base de datos que nos permite clasificarlas en dos categorías. </p>
							
							<p>Por una parte, se identifican aquellas bacterias con <strong>actividad medio ambiental,</strong> es decir, que han sido identificadas como responsables de ciclos biogeoquímicos o que han sido descritas como presentes de forma natural en los cuerpos de agua.</p>
							
							<p>Por otra parte, se reconocen aquellas bacterias asociadas a <strong> actividades humanas,</strong>  es decir, que han sido descritas como presentes en el cuerpo humano o en animales domésticos, que provienen de la producción agraria, o que provocan algún tipo de patogénesis en animales o humanos. Esta última clasificación correspondería a bacterias que están presentes en el agua debido a actividades antropogénicas, y que pueden ser un peligro para la salud animal y humana.</p>
							
							<p><b>Los gráficos de anillo</b> muestran los porcentajes de géneros bacterianos ambientales y no ambientales encontrados en cada una de las muestras recolectadas.</p>
						</div>
						<div class="col-12 new-opcion-text opcion-proyecto gallery">
							<div class="row">
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/metagenomica/img-metagenomica-04.jpeg" data-lightbox="example-set" data-title="Cultivo de microorganismos"><img class="example-image img-fluid" src="../assets/img/metagenomica/img-metagenomica-04-1.jpg" alt=""/></a>
								</div>
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/metagenomica/img-metagenomica-05.jpeg" data-lightbox="example-set" data-title="Abundancia relativa de microorganismos según filo bacteriano en 4 muestras de agua de la bahía de Puerto Varas (oct. 2020"><img class="example-image img-fluid" src="../assets/img/metagenomica/img-metagenomica-05-1.jpg" alt=""/></a>
								</div>
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/metagenomica/img-metagenomica-06.jpeg" data-lightbox="example-set" data-title="Proporción de bacterias de origen ambiental vs. antropogénicas en 4 muestras de agua de la bahía de Puerto Varas (oct. 2020)"><img class="example-image img-fluid" src="../assets/img/metagenomica/img-metagenomica-06-1.jpg" alt=""/></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-12 campo-info-1" id="mostrar-opcion-03" style="display:none;">
				<div class="container">
					<div class="row">
						<div class="col-12 subtitulo-azul">
							<h5>METODOLOGÍA</h5>
						</div>
						<div class="col-12 texto-azul-2">
							<p>Para una muestra, se utiliza 1 litro de agua tomada desde el Lago, que se recupera mediante botellas de vidrio estériles.</p>
							
							<p>Las muestras son transportadas inmediatamente al Laboratorio, manteniendo la temperatura baja, para ser filtradas a través de filtros de MCE (Ésteres de Celulosa) con tamaño de poro de 0.22 um y 47 mm de diámetro.</p>
							
							<p>Se hace pasar el agua a través de los filtros mediante presión negativa para capturar los microorganismos presentes en el agua.</p>
							
							<p>Luego, los filtros son utilizados para extraer el DNA de los microorganismos capturados, utilizando Kit de extracción de DNA genómico (AccuPrep®  Genomic DNA Extraction Kit, BIONEER), siguiendo las instrucciones del fabricante.</p>
							
							<p>El DNA obtenido es enviado a un servicio de secuenciación de ácidos nucleicos especializado (NOVOGENE, USA) para su procesamiento.</p>
							
							<p>Finalmente, la información cruda obtenida desde el servicio de secuenciación es procesada mediante herramientas bioinformáticas basadas en los lenguajes de programación Python y R, con el objetivo de identificar los microorganismos presentes en cada una de las muestras analizadas.</p>
						</div>
						<div class="col-12 new-opcion-text opcion-proyecto gallery">
							<div class="row">
								<div class="col-12 item-gallery">
									<a class="example-image-link" href="../assets/img/metagenomica/img-metagenomica-07.png" data-lightbox="example-set" data-title="Comparación de procesos de análisis tradicional de muestras de agua vs. metagenómica"><img class="example-image img-fluid" src="../assets/img/metagenomica/img-metagenomica-07.png" alt=""/></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		
		</div>
	</div>
</section>

<section id="contenidos" style="margin-bottom: 100px">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center titulo-contacto">
				<h2>METAGENÓMICA</h2>
				<p>Datos en línea</p>
			</div>
		</div>
		<div class="row">
			<div class="col-6 año-select">
				<select id='yearshow' class="form-select" aria-label="Default select example">
					<option selected>Año</option>
					<?php
						include('../admin/include/conf/dbselect.php');
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
							if ($lastrow['Year'] == $ano) {
								echo "<option value='$ano' selected>$ano</option>";
							} else {
								echo "<option value='$ano'>$ano</option>";
							}
						}
					?>
				</select>
			</div>
			<div class="col-6 mes-select">
				<select class="form-select" id='monthshow' aria-label="Default select example">
					<option selected>Mes</option>
				</select>
			</div>
		</div>
		<div class="row">
			
			<div class="col-12 tz-gallery text-center img-filtro" id='imagediv'>
				<?php
					if ($lastrow['ImagePath'] <> '') {
						?>
						<a class="lightbox imagen-lightbox" href="../admin/api/<?php echo $lastrow['ImagePath'] ?>">
							<img class="img-fluid" src='../admin/api/<?php echo $lastrow['ImagePath'] ?>'>
						</a>
						<?php
					} else {
						?>
						<div style='border:2px solid #efefef;width:100%;height:500px;line-height: 500px;text-align:center'>Seleccione Año y Mes</div>
						<?php
					}
				?>
			</div>
		
		</div>
		<div class="row">
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
			<div class="col-4 btn-up-izq text-center">
				<?php echo $btn11 ?>
			</div>
			<div class="col-4 btn-up-center text-center">
				<?php echo $btn12 ?>
			</div>
			<div class="col-4 btn-up-der text-center">
				<?php echo $btn13 ?>
			</div>
			<div class="col-6 abajo-izq-1">
				<?php
					if ($Tabla1 <> '') {
						echo "<button id='btn1id' link='../admin/api/$Tabla1' class='btn-metage-down'>DESCARGAR<br>Tabla taxonómica</button>";
					} else {
						echo "<button style='display:none' id='btn1id' link='../admin/api/$Tabla1' class='btn-metage-down'>DESCARGAR<br>Tabla taxonómica</button>";
					}
				?>
			</div>
			<div class="col-6 abajo-dere">
				<?php
					if ($Tabla2 <> '') {
						echo "<button id='btn2id' link='../admin/api/$Tabla2' class='btn-metage-down'>DESCARGAR<br>Tabla de capacidades funcionales</button>";
					} else {
						echo "<button style='display:none' id='btn2id' link='../admin/api/$Tabla2' class='btn-metage-down'>DESCARGAR<br>Tabla de capacidades funcionales</button>";
					}
				?>
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


<!-- Option 3: Other JS -->
<script src="assets/js/change.js"></script>

<script>
	$(document).on('click', function() {
		$('.collapse').collapse('hide');
	})
</script>

<script type="text/javascript">
	$(document).ready(function() {
		var global_type = 1;
		var global_year = 0;
		var global_month = 0;
		
		global_year = <?php echo $lastrow['Year'] ?>;
		/*
<?php
		if ($lastrow['Year'] <> '') {
		?>
                            $.ajax({
                                url: '../api/getMonth-mobile.php',
                                type: 'POST',
                                data: {
                                    year: <?php echo $lastrow['Year'] ?>,
                                    type: 'm'
                                },
                                success: function(response) {
                                    global_year = <?php echo $lastrow['Year'] ?>;
            						$('#monthshow').html('<option selected>Mes</option>');
                                    $('#monthshow').append(response);
                                },
                            });
                        <?php
		}
		?>
            		*/
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
				$('#monthtitle').html('Setiembre');
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
		
		
		$(document).on("change", "#monthshow", function() {
			global_month = $('#monthshow option:selected').val();
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
					url: '../api/getImage-metagenomica-mobile.php',
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
							$('#imagediv').hide();
							$('#imagediv').html(data.img);
							$('#imagediv').fadeIn(1000);
							baguetteBox.run('.tz-gallery');
						} else {
							$('#imagediv').html("<div style='border:2px solid #efefef;width:100%;height:500px;line-height: 500px;text-align:center'>No hay imagen</div>");
							$('#imagediv').show();
							
						}
						if (data.Tabla1 != null) {
							$('#btn1id').attr('link', "../admin/api/" + data.Tabla1);
							$('#btn1id').show();
						} else {
							$('#btn1id').hide();
						}
						if (data.Tabla2 != null) {
							$('#btn2id').attr('link', "../admin/api/" + data.Tabla2);
							$('#btn2id').show();
						} else {
							$('#btn2id').hide();
						}
					},
				});
			}
		}
		
		$(document).on("change", "#yearshow", function() {
			var year = $(this).val();
			$.ajax({
				url: '../api/getMonth-mobile.php',
				type: 'POST',
				data: {
					year: year,
					type: 'm'
				},
				success: function(response) {
					global_year = year;
					//$('#yearshow').html(year);
					$('#monthshow').html('<option selected>Mes</option>');
					$('#monthshow').append(response);
				},
			});
		});
		
		$('#btn1id').click(function() {
			var link = $(this).attr('link');
			window.location = link;
		})
		
		$('#btn2id').click(function() {
			var link = $(this).attr('link');
			window.location = link;
		})
		
	});
</script>

<!-- GALLERIA 01 -->
<script src="../assets/dist/js/lightbox-plus-jquery.min.js"></script>

<!-- GALLERIA 02 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

<script>
	baguetteBox.run('.tz-gallery');
</script>


</body>
</html>
