<!doctype html>
<html lang="es">
<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        let dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            // No hacer nada.
        }else{
            document.location = "../index.php";
        }
    </script>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lago En Línea</title>
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
	
	<!-- GALLERIA -->
	<link rel="stylesheet" href="../assets/dist/css/lightbox.min.css">
	
	
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

<section>
	<div class="container">
		<div class="row">
			<div class="col-12 satelite">
				<img src="assets/img/satelite_img.svg" alt="satelite">
			</div>
			<div class="col-12 text-center text-home">
				<h2>DATOS EN LÍNEA</h2>
				<h5>Para el monitoreo de las<br> condiciones ambientales del<br> Lago Llanquihue.</h5>
			</div>
		</div>
	</div>
	<div class="container-fluid boya-meta">
		<div class="row">
			<div class="col-6 icon-meta">
				<img src="assets/img/metagenomica_img.svg" alt="metagenomica">
			</div>
			<div class="col-6 icon-boya">
				<img src="assets/img/boya_img.svg" alt="boya">
			</div>
		</div>
	</div>
</section>

<section id="tecnologias">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center tecnologia">
				<img src="assets/img/tecno_01.svg" alt="boya">
				<h5>ESTACIÓN DE MONITOREO</h5>
				<p>Boya con sensores acoplados para la medición y visualización en tiempo real de variables fisicoquímicas como temperatura, conductividad y oxígeno disuelto.</p>
			</div>
			<div class="col-12 text-center tecnologia">
				<img src="assets/img/tecno_02.svg" alt="teledetección">
				<h5>TELEDETECCIÓN</h5>
				<p>Uso de imágenes satelitales para el estudio de la calidad del agua en base a parámetros como: clorofila, transparencia y partículas suspendidas.</p>
			</div>
			<div class="col-12 text-center tecnologia">
				<img src="assets/img/tecno_03.svg" alt="metagenomica">
				<h5>METAGENÓMICA</h5>
				<p>Análisis del material genético presente en muestras de agua, para la identificación de comunidades de microorganismos.</p>
			</div>
		</div>
	</div>
</section>

<section id="lagoenlinea">
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-12 text-center lagoenlinea">
				<h3>¿QUÉ ES LAGO EN LÍNEA?</h3>
			</div>
			
			<div class="col-12 text-center lagoenlinea">
				<img src="assets/img/cont_home_01.svg" alt="cont-01">
				<div class="contenido-01 contenidos">
					<h5>INFORMACIÓN <br>AMBIENTAL</h5>
					<p>del lago Llanquihue</p>
				</div>
			</div>
			
			<div class="col-12 text-center lagoenlinea">
				<img src="assets/img/cont_home_02.svg" alt="cont-01">
				<div class="contenido-02 contenidos">
					<h5>EVALUACIÓN <br>DE TECNOLOGÍAS </h5>
					<p>para el monitoreo de las condiciones <br>ambientales del lago.</p>
				</div>
			</div>
			
			<div class="col-12 text-center lagoenlinea">
				<img src="assets/img/cont_home_03.svg" alt="cont-01">
				<div class="contenido-03 contenidos">
					<h5>APOYO A LA TOMA <br>DE DECISIONES</h5>
					<ul>
						<li>Políticas públicas</li>
						<li>Iniciativas comunitarias</li>
						<li>Inversión privada</li>
						<li>Generación de conocimiento</li>
					</ul>
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

<!-- Option 3: Other JS -->
<script>
	$(document).on('click', function () {
		$('.collapse').collapse('hide');
	})
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnydyACjDEVvZCe2B3zs23KyD_Yf5YWIw&libraries=places&callback=initMap" async defer></script>

<script src="../assets/js/monitor.js"></script>

<!-- GALLERIA -->
<script src="../assets/dist/js/lightbox-plus-jquery.min.js"></script>

</body>
</html>