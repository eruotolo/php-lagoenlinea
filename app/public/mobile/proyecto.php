<!doctype html>
<html lang="es">
<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        let dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            // No hacer nada.
        }else{
            document.location = "../proyecto.php";
        }
    </script>
	
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lago En Línea | El Proyecto</title>
	
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
			
			<!-- DROPDOWN -->
			
			<div class="col-12 drop-titulo text-center">
				<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
					<div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle btn-drop" data-bs-toggle="dropdown" aria-expanded="false">
							EL PROYECTO
						</button>
						<ul class="dropdown-menu drop-desplegable" aria-labelledby="btnGroupDrop1">
							<a class="dropdown-item drop-item-1" id="opcion-01" style="cursor: pointer;">MÁS AZUL</a>
							<a class="dropdown-item" id="opcion-02" style="cursor: pointer;">FIC MÁS AZUL</a>
							<a class="dropdown-item" id="opcion-03" style="cursor: pointer;">LAGO EN LÍNEA</a>
						</ul>
					</div>
				</div>
			</div>
			
			<!-- VARIANTES OPCIÓN 1 -->
			
			<div class="col-12 campo-info" id="mostrar-opcion-01">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center icono-azul-1">
							<img src="assets/img/icon-proyecto-01.svg" alt="FIC">
						</div>
						<div class="col-12 subtitulo-azul">
							<h4>MÁS AZUL</h4>
						</div>
						<div class="col-12 texto-azul text-center">
							<p>El programa Más Azul, impulsado por la <strong>Sede De La Patagonia de la Universidad San Sebastián</strong>, surge debido a la creciente preocupación por la condición ambiental del Lago Llanquihue, el cual se ve afectado por fenómenos globales como el Cambio Climático y las actividades productivas que se realizan en su entorno.</p>
							<img src="assets/img/icon-proyecto-04.svg" alt="">
							<p class="texto-azul-italica">El principal desafío de este programa es convertir al Lago Llanquihue en un modelo de gestión de cuerpos lacustres de clase mundial; en materia de conservación, ciencia aplicada, tecnología y educación ambiental, en equilibrio con el desarrollo sostenible del territorio y las comunidades.</p>
						</div>
						<div class="col-12 imagen-azul">
							<img class="img-fluid" src="assets/img/img-pro-01.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			
			<!-- VARIANTES OPCIÓN 2 -->
			
			<div class="col-12 campo-info" id="mostrar-opcion-02" style="display:none;">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center icono-azul-1">
							<img src="assets/img/icon-proyecto-02.svg" alt="Más Azul">
						</div>
						<div class="col-12 subtitulo-azul">
							<h4>FIC MÁS AZUL</h4>
						</div>
						<div class="col-12 texto-azul">
							<p>El Proyecto FIC Más Azul forma parte de este Programa y nace en respuesta a la falta de monitoreo ambiental y, por lo tanto, información de la mayoría de los ecosistemas acuáticos de nuestro país. Este contexto limita la capacidad de conocer, reconocer y reaccionar ante cambios e impactos que estos ecosistemas puedan sufrir, así como la posibilidad de identificar las oportunidades que nos ofrecen para el desarrollo sostenible.</p>
							<p>Para acortar estas brechas el proyecto, denominado <strong>“Evaluación de tecnologías de la información y herramientas biotecnológicas para el monitoreo ambiental del Lago Llanquihue”</strong>, ejecutado por la Universidad San Sebastián y financiado por el Gobierno Regional de Los Lagos es un esfuerzo interdisciplinario, único en Chile, que busca evaluar herramientas de monitoreo ambiental aplicado a cuerpos lacustres.</p>
						</div>
						<div class="col-12 imagen-azul-1">
							<img class="img-fluid" src="assets/img/img-pro-02.svg" alt="">
						</div>
						<!-- ITEM 2 -->
						<div class="col-12 subtitulo-azul">
							<h4>EL PROYECTO TIENE POR OBJETIVOS</h4>
						</div>
						<div class="col-12 texto-azul text-center">
							<img src="assets/img/icon-proyecto-05.svg" alt="">
							<p class="texto-azul-italica"><strong>Determinar la factibilidad técnica y económica</strong> de utilizar la teledetección, metagenómica y el monitoreo remoto, como herramientas para la generación de información.</p>
							<img src="assets/img/icon-proyecto-06.svg" alt="">
							<p class="texto-azul-italica">Elaborar una <strong>plataforma digital integrada</strong> que permita almacenar y desplegar información ambiental histórica y en tiempo real del Lago Llanquihue, facilitando la toma de decisiones para la inversión privada, y promoviendo el monitoreo ciudadano, la generación de nuevo conocimiento y la elaboración de políticas públicas.</p>
						</div>
						<div class="col-12 imagen-azul-1">
							<img class="img-fluid" src="assets/img/img-pro-03.jpeg" alt="">
						</div>
						<!-- ITEM 3 -->
						<div class="col-12 texto-azul">
							<p>Este proyecto no busca determinar la calidad de las aguas del Lago, sino que la <strong>factibilidad de estas 3 herramientas</strong> para medir sus propiedades, para que estos instrumentos puedan ser usados en la toma de decisiones del sector público y privado, así como de la sociedad civil, tanto en el lago Llanquihue como en otros cuerpos de agua. De este modo, para responder las preguntas en torno al uso de estas tecnologías y sus potencialidades, tenemos que poder <strong>probar las condiciones en las que funcionarán y cuáles son los alcances de la información</strong> que cada una nos entregará.</p>
						</div>
						<div class="col-12 imagen-azul">
							<img class="img-fluid" src="assets/img/img-pro-04.jpeg" alt="">
						</div>
					</div>
				</div>
			</div>
			
			<!-- VARIANTES OPCIÓN 3 -->
			
			<div class="col-12 campo-info" id="mostrar-opcion-03" style="display:none;">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center icono-azul-1">
							<img src="assets/img/icon-proyecto-03.svg" alt="LAGO">
						</div>
						<div class="col-12 subtitulo-azul">
							<h4>LAGO EN LÍNEA</h4>
						</div>
						<div class="col-12 texto-azul text-center">
							<p class="texto-azul-italica">“Lago en línea” es una plataforma digital integrada que nace con el objetivo de <strong>poner a disposición de todos y todas la información de monitoreo ambiental, contribuyendo de esta manera a la conservación y uso sostenible del Lago Llanquihue.</strong></p>
							<p>En esta plataforma se podrá acceder a los resultados de las tres tecnologías empleadas - estación de monitoreo, metagenómica y teledetección - con el fin de difundir y transferir los resultados del proyecto, sensibilizando a actores públicos, privados y a la ciudadanía, sobre los beneficios y oportunidades de estas herramientas.</p>
							<img src="assets/img/icon-proyecto-07.svg" alt="">
							<p class="texto-azul-italica">Los datos e insumos desplegados en la plataforma entregan <strong>información relevante para aportar en la toma de decisiones sociales, ambientales y económicas en torno al lago.</strong></p>
						</div>
						<div class="col-12 imagen-azul">
							<img class="img-fluid" src="assets/img/img-pro-05.jpeg" alt="">
						</div>
					</div>
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

<!-- Option 3: Other JS -->
<script src="assets/js/change.js"></script>
<script src="../assets/js/monitor.js"></script>

<!-- GALLERIA -->
<script src="../assets/dist/js/lightbox-plus-jquery.min.js"></script>
<!-- GALLERIA -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

<script>
	baguetteBox.run('.tz-gallery');
</script>

</body>
</html>
