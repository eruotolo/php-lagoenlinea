<!doctype html>
<html lang="es">
<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        let dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            // No hacer nada.
        }else{
            document.location = "../teledeteccion.php";
        }
    </script>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lago En Línea | Teledetección</title>
	
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

<section id="contenidos">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center titulo-tecnologias">
				<h2>TELEDETECCIÓN</h2>
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
			
			<!-- VARIANTES TECNOLOGIAS -->
			
			<div class="col-12 campo-info-1" id="mostrar-opcion-01">
				<div class="container">
					<div class="row">
						<div class="col-12 subtitulo-azul">
							<h5>TECNOLOGÍA</h5>
						</div>
						<div class="col-12 texto-azul-2">
							<p>La teledetección es una técnica de observación espacial, temporal y espectral que permite realizar mediciones y analizar la superficie terrestre sin tener contacto con ella. Para lograrlo se utilizan sistemas de cámaras que recogen imágenes de la superficie terrestre generadas bajo la órbita de los sensores instalados en plataformas espaciales. Esta técnica facilita la obtención de información de territorios extensos, sin necesidad de desarrollar largas campañas en terreno, reduciendo tiempos y costos. Además, permite incluir zonas de difícil acceso y obtener datos periódicos, comparables y de fácil procesamiento.</p>
							
							<p>El primer satélite artificial, Sputnik 1, fue lanzado por la Unión Soviética el 4 de octubre de 1957, con el propósito de obtener información de las capas altas de la atmósfera y el campo electromagnético de nuestro planeta. El 17 de mayo de 1958 la NASA lanzó al espacio el Vanguard 1, el primer satélite alimentado por energía solar. Estos desarrollos intensificaron la carrera espacial entre la URSS y Estados Unidos, en el marco de la Guerra Fría. A la fecha se han creado más de 5.000 satélites de diferentes tipos algunos que cesaron sus operaciones y otros aún están en funcionamiento.</p>
							
							<p>Actualmente, la información generada por los satélites de observación terrestre y registrada mediante imágenes es utilizada para monitorear atributos relevantes como: vegetación, capas de hielo y cuerpos de agua, entre otros. La utilización de satélites permite identificar zonas en las que se ha ocasionado, por ejemplo, pérdida de vegetación en áreas boscosas o aumento en la turbidez de las aguas producto de procesos de eutrofización que aumentan la abundancia de algas y fitoplancton, impactando negativamente en la calidad del agua de un lago.</p>
							
							<p>En relación con el caso de estudio se considerarán 3 indicadores de calidad de agua: concentración de pigmentos de algas, concentración de material en suspensión y coeficiente de atenuación difusa.</p>
						</div>
						<div class="col-12 new-opcion-text opcion-proyecto gallery">
							<div class="row">
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/teledeteccion/img-teledetecion-01.png" data-lightbox="example-set" data-title="Fotografía de la Tierra desde el espacio"><img class="example-image img-fluid" src="../assets/img/teledeteccion/img-teledetecion-01-1.jpg" alt=""/></a>
								</div>
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/teledeteccion/img-teledetecion-02.jpeg" data-lightbox="example-set" data-title="Satélite orbitando la Tierra"><img class="example-image img-fluid" src="../assets/img/teledeteccion/img-teledetecion-02-1.jpg" alt=""/></a>
								</div>
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/teledeteccion/img-teledetecion-03.jpeg" data-lightbox="example-set" data-title="Imagen satelital del lago Llanquihue"><img class="example-image img-fluid" src="../assets/img/teledeteccion/img-teledetecion-03-1.jpg" alt=""/></a>
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
							<p class="text-center"><strong>Concentración de pigmento de algas (Clorofila):</strong></p>
							<p>La medición de clorofila nos permite conocer la concentración de fitoplancton (algas microscópicas) presentes en el agua. Indirectamente, también son indicadores de la actividad biológica, por lo que se considera un parámetro importante para vigilar los procesos de eutrofización en los cuerpos de agua (contaminación por exceso de nutrientes). Además, este parámetro aporta información relevante para la detección de “blooms de algas”.</p>
							
							<p class="text-center"><strong>Concentración de material en suspensión:</strong></p>
							<p>Identifica la carga sedimentaria presente en el cuerpo de agua, o las variadas formas de impureza presentes en el agua de forma suspendida. En la cuantificación de los niveles de impureza, el término ‘material en suspensión’ describe las partículas no disueltas presentes en una muestra de agua. En términos prácticos, estas partículas se definen por su imposibilidad de ser separadas de la muestra de agua usando un filtro.</p>
							
							<p class="text-center"><strong>Coeficiente de atenuación difusa:</strong></p>
							<p>Mide la penetración de la luz en los cuerpos de agua. Es un indicador de transparencia que da conocimiento de la concentración de fitoplancton y sedimentos, ya que su medida entrega una estimación de la claridad e, indirectamente, de la turbidez del agua al medir la capacidad de penetración de la radiación solar incidente en ella.
							</p>
						</div>
						<div class="col-12 new-opcion-text opcion-proyecto gallery">
							<div class="row">
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/teledeteccion/img-teledetecion-04.png" data-lightbox="example-set" data-title="Concentración de material en suspensión en el lago Llanquihue (dic. 2021)"><img class="example-image img-fluid" src="../assets/img/teledeteccion/img-teledetecion-04-1.jpg" alt=""/></a>
								</div>
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/teledeteccion/img-teledetecion-05.png" data-lightbox="example-set" data-title="Concentración de clorofila en el lago Llanquihue (dic. 2021)"><img class="example-image img-fluid" src="../assets/img/teledeteccion/img-teledetecion-05-1.jpg" alt=""/></a>
								</div>
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/teledeteccion/img-teledetecion-06.png" data-lightbox="example-set" data-title="Coeficiente de atenuación difusa en el lago Llanquihue (dic. 2021)"><img class="example-image img-fluid" src="../assets/img/teledeteccion/img-teledetecion-06-1.jpg" alt=""/></a>
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
							<p>La elección respecto los satélites y sensores a escoger para un estudio de la calidad de aguas tendrá que estar basada primordialmente en las necesidades requeridas para cada estudio o monitoreo que se desee realizar, por lo que no existe a priori un satélite “ideal”.</p>
							
							<p>Para seleccionar el satélite que se utilizará para evaluar la calidad de agua del lago de estudio, debemos considerar el tamaño del lago y la resolución de las imágenes que queremos analizar, lo que determinará la resolución espacial. También se debe considerar la frecuencia con la que se quiere tener imágenes y la nubosidad del lugar, lo que determinará la resolución temporal. Los indicadores que se analizarán determinarán las resolución espacial y radiométrica.</p>
							
							<p class="text-center"><strong>Coeficiente de atenuación difusa:</strong></p>
							<p>- Resolución espacial: corresponde al mínimo detalle espacial que capta el sensor.</p>
							<p>- Estos rangos reciben el nombre genérico de bandas.</p>
							<p>- Resolución radiométrica: sensibilidad del detector para diferenciar pequeños cambios en la energía electromagnética incidente en él.</p>
							<p>- Resolución temporal: frecuencia de pasadas del satélite sobre un mismo punto.</p>
							<p>- Productos procesados y de libre acceso, disponibles para descarga.</p>
							
							<p class="text-center"><strong>Análisis de nubosidad del área de estudio, que permita estimar la probabilidad de encontrar imágenes satelitales utilizables según la resolución temporal del satélite.</strong></p>
							<p>- Fracción del cielo cubierta por nubes (N° de octas).</p>
							<p>- Número de escenas con baja nubosidad dentro del período de estudio.</p>
							
							<p class="text-center"><strong>Análisis de las imágenes satelitales mediante softwares especializados.</strong></p>
							<p>- Softwares libres.</p>
							<p>- Softwares comerciales.</p>
							
							<p>Para el caso de estudio del Lago Llanquihue, cuyo objetivo es probar tecnologías que permitan monitorear su calidad de agua, se revisaron los diferentes atributos, sobre todo la cubierta nubosa de la zona en diferentes días de un año. Dicha revisión multicriterio arrojó que las imágenes del satélite SENTINEL 3 serían las más adecuadas para los fines propuestos debido a:</p>
							
							<p>- Su resolución radiométrica (16 bits).</p>
							<p>- Su resolución espacial (300 metros).</p>
							<p>- Su resolución temporal con relación al número de imágenes con baja nubosidad (igual o menor a 2 octas).</p>
							
							<p>La disponibilidad de productos procesados en diferentes sitios web.</p>
						
						</div>
						<div class="col-12 new-opcion-text opcion-proyecto gallery">
							<div class="row">
								<div class="col-12 item-gallery">
									<a class="example-image-link" href="../assets/img/teledeteccion/img-teledetecion-07.jpg" data-lightbox="example-set" data-title="Árbol de decisión para la determinación de satélite a utilizar para el monitoreo en el lago Llanquihue"><img class="example-image img-fluid" src="../assets/img/teledeteccion/img-teledetecion-07.jpg" alt=""/></a>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		
		</div>
	
	</div>
</section>

<section id="contenidos" class="meta-tele" style="margin-bottom: 100px">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center titulo-contacto">
				<h2>TELEDETECCIÓN</h2>
				<p>Datos en línea | Resultados de <br>análisis de imágenes satelitales.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-6 año-select">
				<select id='yearshow' class="form-select" aria-label="Default select">
					<option>Año</option>
					<?php
						include('../admin/include/conf/dbselect.php');
						$sql1a = "SELECT * FROM `teledeteccion`  order by Year ASC, Cicle ASC, Type DESC";
						$result = mysql_query($sql1a) or die('{"error"=>"Error actualizando la base de datos","status"=>"0"}');
						$years = array();
						$cicles = array();
						$tipos = array();
						while ($row = mysql_fetch_assoc($result)) {
							$year = $row['Year'];
							$years[] = $year;
							$lastrow = $row;
						}
						/*   $sql1a = "SELECT * FROM `teledeteccion-tablas` where Year = '{$lastrow['Year']}' and Cicle = '{$lastrow['Cicle']}' order by Year ASC, Cicle ASC";
							$result = mysql_query($sql1a) or die('{"error"=>"Error actualizando la base de datos","status"=>"0"}');
							while ($row = mysql_fetch_assoc($result)) {
								$Tabla1 = $row['Tabla1'];
								$Tabla2 = $row['Tabla2'];
							}	*/
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
					<?php
						$sql1a = "SELECT distinct Cicle FROM teledeteccion WHERE Year = '{$lastrow['Year']}' ORDER BY Cicle ASC";
						$result = mysql_query($sql1a) or die();
						$images = array();
						while ($row = mysql_fetch_assoc($result)) {
							$month = $row['Cicle'];
							switch ($month) {
								case 1:
									$mes = "Enero";
									break;
								case 2:
									$mes = "Febrero";
									break;
								case 3:
									$mes = "Marzo";
									break;
								case 4:
									$mes = "Abril";
									break;
								case 5:
									$mes = "Mayo";
									break;
								case 6:
									$mes = "Junio";
									break;
								case 7:
									$mes = "Julio";
									break;
								case 8:
									$mes = "Agosto";
									break;
								case 9:
									$mes = "Setiembre";
									break;
								case 10:
									$mes = "Octubre";
									break;
								case 11:
									$mes = "Noviembre";
									break;
								case 12:
									$mes = "Diciembre";
									break;
							}
							echo "<option value='$month' selected>$mes</option>";
						}
					?>
				</select>
			</div>
		</div>
		<div class="row">
			
			<div class="col-12 tz-gallery text-center img-filtro" id='imagediv'>
				<?php
					if ($lastrow['ImagePath'] <> '') {
						?>
						<a class="lightbox imagen-lightbox" href="../admin/api/<?php echo $lastrow['ImagePath'] ?>">
							<img src='../admin/api/<?php echo $lastrow['ImagePath'] ?>' style='width:100%'>
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
					$btn11 = "<button id='type_1' class='btn-metage typebtn  btn-tele-activo' nro='1'>ATENUACIÓN DIFUSA</button>";
				} else {
					$btn11 = "<button id='type_1' class='btn-metage typebtn' nro='1'>ATENUACIÓN DIFUSA</button>";
				}
				if ($lastrow['Type'] == 2) {
					$btn12 = "<button id='type_2' class='btn-metage typebtn  btn-tele-activo' nro='2'>MATERIAL EN SUSPENSIÓN</button>";
				} else {
					$btn12 = "<button id='type_2' class='btn-metage typebtn' nro='2'>MATERIAL EN SUSPENSIÓN</button>";
				}
				if ($lastrow['Type'] == 3) {
					$btn13 = "<button id='type_3' class='btn-metage typebtn  btn-tele-activo' nro='3'>CLOROFILA</button>";
				} else {
					$btn13 = "<button id='type_3' class='btn-metage typebtn' nro='3'>CLOROFILA</button>";
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
			<div class="col-6 abajo-dere">
				<button class="btn-metage-down" onClick="javascript:window.open('https://coda.eumetsat.int/#/home', '_blank');">WEB DE DESCARGA <br>Imágenes satelitales</button>
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
		
		$(document).on("change", "#yearshow", function() {
			var year = $(this).val();
			$.ajax({
				url: '../api/getMonth-mobile.php',
				type: 'POST',
				data: {
					year: year,
					type: 't'
				},
				success: function(response) {
					global_year = year;
					//$('#yearshow').html(year);
					$('#monthshow').html('<option selected>Mes</option>');
					$('#monthshow').append(response);
				},
			});
		});
		
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
					url: '../api/getImage-teledeteccion-mobile.php',
					type: 'POST',
					data: {
						year: global_year,
						type: 't',
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
