<!doctype html>
<html lang="es">
<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        let dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            // No hacer nada.
        }else{
            document.location = "../llanquihue.php";
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
							LAGO LLANQUIHUE
						</button>
						<ul class="dropdown-menu drop-desplegable" aria-labelledby="btnGroupDrop1">
							<a class="dropdown-item drop-item-1" id="opcion-01" style="cursor: pointer;">DATOS GENERALES</a>
							<a class="dropdown-item" id="opcion-02" style="cursor: pointer;">HIDROGRAFÍA</a>
							<a class="dropdown-item" id="opcion-03" style="cursor: pointer;">GEOGRAFÍA</a>
							<a class="dropdown-item" id="opcion-04" style="cursor: pointer;">CLIMA Y BIODIVERSIDAD</a>
							<a class="dropdown-item" id="opcion-05" style="cursor: pointer;">HISTORIA</a>
							<a class="dropdown-item" id="opcion-06" style="cursor: pointer;">AMENAZAS</a>
							<a class="dropdown-item" id="opcion-07" style="cursor: pointer;">GALERÍA</a>
						</ul>
					</div>
				</div>
			
			</div>
			
			<!-- VARIANTES -->
			
			<!-- ITEM 01 -->
			<div class="col-12 campo-info" id="mostrar-opcion-01">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center icono-azul">
							<img src="assets/img/lago-icon-01.svg" alt="ubicación">
						</div>
						<div class="col-12 subtitulo-azul">
							<h4>DATOS GENERALES</h4>
						</div>
						<div class="col-12 texto-azul">
							<p>El lago Llanquihue se encuentra en la región de Los Lagos, Chile, entre las provincias de Llanquihue y Osorno. Es el segundo cuerpo de agua dulce más extenso del país, después del lago General Carrera, que Chile comparte con Argentina.</p>
						</div>
						<div class="col-12">
							<ul class="lista-ubicacion">
								<li><img src="assets/img/icon-lago-01.svg" alt="">Está ubicado a <strong>51 m. s. n. m.</strong></li>
								<li><img src="assets/img/icon-lago-02.svg" alt="">Tiene un <strong>área de 870 km2 de extensión.</strong></li>
								<li><img src="assets/img/icon-lago-03.svg" alt="">Su <strong>profundidad promedio de 182 m.</strong></li>
								<li><img src="assets/img/icon-lago-04.svg" alt="">Su <strong>profundidad máxima de 317 m.</strong></li>
							</ul>
						</div>
						<div class="col-12 texto-azul">
							<p>Administrativamente, la cuenca del lago se divide entre 4 comunas: <strong>Puerto Octay, Frutillar, Llanquihue y Puerto Varas</strong>, que a su vez representan las ciudades más importantes de sus costas. Otras localidades relevantes son <strong>Las Cascadas y Ensenada</strong>, además de una serie de sectores rurales.</p>
						</div>
						<div class="col-12 imagen-azul">
							<img src="assets/img/lagollanquihue/lago-llanquihue-01.svg" alt="">
						</div>
					</div>
				</div>
			</div>
			
			<!-- ITEM 02 -->
			<div class="col-12 campo-info" id="mostrar-opcion-02" style="display:none;">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center icono-azul">
							<img src="assets/img/lago-icon-02.svg" alt="ORIGEN">
						</div>
						<div class="col-12 subtitulo-azul">
							<h4>HIDROGRAFÍA</h4>
						</div>
						<div class="col-12 texto-azul">
							<p>El lago Llanquihue, de origen glaciar y afectado por diversos eventos volcánicos, es <strong>el segundo lago más grande de Chile</strong>, después del lago General Carrera. No posee ríos afluentes o tributarios de gran caudal y su régimen de alimentación es casi exclusivamente <strong>pluvial.</strong></p>
							
							<p>El lago tiene dos afluentes principales: el <strong>río Pescado</strong>, el cual se origina en los faldeos del volcán Calbuco; y el <strong>río Tepu</strong>, originado en napas subterráneas (freático). El único efluente es el <strong>río Maullín</strong>, que se origina en el sector occidental del lago Llanquihue y recorre una distancia de <strong>85 km</strong> hasta desembocar en el Océano Pacífico.</p>
						</div>
						<div class="col-12 imagen-azul">
							<img src="assets/img/lagollanquihue/lago-llanquihue-02.svg" alt="">
						</div>
					</div>
				</div>
			</div>
			
			<!-- ITEM 03 -->
			<div class="col-12 campo-info" id="mostrar-opcion-03" style="display:none;">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center icono-azul">
							<img src="assets/img/lago-icon-03.svg" alt="GEOGRAFÍA">
						</div>
						<div class="col-12 subtitulo-azul">
							<h4>GEOGRAFÍA</h4>
						</div>
						<div class="col-12 texto-azul">
							<p>El lago Llanquihue se ubica junto a una Cordillera de Los Andes y debe su formación a los procesos de desglaciación ocurridos hace alrededor de 12.000 años, al terminar el último período glacial, más conocido como la Edad de Hielo. La retirada de los ventisqueros produjo la erosión de grandes áreas, que luego fueron cubiertas por el agua de los glaciares derretidos y la lluvia. En un inicio, los lagos Llanquihue y Todos los Santos estaban unidos, pero se separaron tras sucesivas erupciones del volcán Osorno.</p>
							
							<p>Si bien la cordillera en esta zona es de baja altura, destacan en los alrededores de la cuenca los <strong>volcanes Osorno y Calbuco</strong>. El primero tiene una altura de <strong>2.652 m</strong>, con una formación piramidal; y el segundo tiene forma irregular producto de sus violentas erupciones (la última el año 2015), y alcanza una altura de <strong>2.003 m.</strong></p>
						</div>
						<div class="col-12 imagen-azul">
							<img src="assets/img/lagollanquihue/lago-llanquihue-06.svg" alt="">
						</div>
					</div>
				</div>
			</div>
			
			<!-- ITEM 04 -->
			<div class="col-12 campo-info" id="mostrar-opcion-04" style="display:none;">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center icono-azul">
							<img src="assets/img/lago-icon-04.svg" alt="CLIMA">
						</div>
						<div class="col-12 subtitulo-azul">
							<h4>CLIMA Y BIODIVERSIDAD</h4>
						</div>
						<div class="col-12 texto-azul">
							<p>La cuenca del Llanquihue se caracteriza por presentar altas precipitaciones durante casi todo el año, las que disminuyen durante el verano, características propias de un <strong>clima templado lluvioso con influencia mediterránea.</strong> Este tipo de clima ha permitido que en la cuenca se desarrollen especies vegetales de valiosas y exclusivas características, que dan origen el llamado <strong>bosque Siempreverde o Selva Valdiviana</strong>, que destaca por su alto nivel de endemismo (flora y fauna exclusivos del territorio). En el pasado, este tipo de vegetación dominaba el paisaje del Sur de Chile, sin embargo, la acción del hombre ha sido de tal magnitud, que grandes extensiones fueron deforestadas a fin de incorporar tierras a la agricultura, ganadería y obtención de madera. Los incendios forestales también han contribuido de manera importante a la reducción de los bosques. </p>
							
							<p>Algunas especies vegetales nativas características de este territorio son el canelo (Drimys winteri), el notro (Embothrium coccineum), el ulmo (Eucryphia cordifolia), el arrayán (Luma apiculata), la pitra (Myrceugenia exsucca), el coigüe (Nothofagus dombeyi), el chilco (Fuchsia magellanica), la nalca (Gunnera tinctoria), la murta (Ugni molinae), el helecho costilla de vaca (Blechnum chilense) y el ampe (Lophosoria quadripinnata). </p>
							
							<p>Entre las especies de fauna nativa destacan el puma (Puma concolor), el pudú (Pudu puda), el monito del monte (Dromiciops gliroides), el coipo (Myocastor coypus), el huillín (Lontra provocax), la güiña (Leopardus guigna), la rana chilena (Calyptocephalella gayi) y el sapito de cuatro ojos (Pleurodema thaul); además de una gran cantidad de especies de aves como el sietecolores (Tachuris rubrigastra), el martín pescador (Megaceryle torquata), la tagua (Fulica armillata), el huairavo (Nycticorax nycticorax), la bandurria (Theristicus melanopis), el choroy (Enicognathus laptorhynchus), el chucao (Scelorchilus rubecula), el hued-hued (Pteroptochos tarnii), el churrete (Cinclodes patagonicus), el chuncho (Glaucidium nana​​), el carpintero negro (Campephilus magellanicus), el pitío (Colaptes pitius), entre muchos otros.</p>
						</div>
						<div class="col-12 imagen-azul">
							<img src="assets/img/lagollanquihue/lago-llanquihue-03.svg" alt="">
						</div>
					</div>
				</div>
			</div>
			
			<!-- ITEM 05 -->
			<div class="col-12 campo-info" id="mostrar-opcion-05" style="display:none;">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center icono-azul">
							<img src="assets/img/lago-icon-05.svg" alt="CIUDADES">
						</div>
						<div class="col-12 subtitulo-azul">
							<h4>HISTORIA</h4>
						</div>
						<div class="col-12 texto-azul">
							<p>Con anterioridad al proceso de colonización alemana ocurrido entre las décadas de 1850 y 1910, la cuenca del lago Llanquihue estaba poblada por el <strong>pueblo huilliche (‘gente del sur’ en mapudungún),</strong> el grupo más austral de la cultura mapuche. Este pueblo dio origen a la leyenda de Licanrayen, una historia que se transmitió de  generación en generación y que atribuye la formación del lago Llanquihue a las lluvias que cayeron durante años después de que se sacrificara a la joven Licanrayen, quien fue entregada al espíritu del volcán Osorno para acallar su furia.</p>
							
							<p>En 1845, el Gobierno de Chile se propuso el desafío de integrar y explotar económicamente la zona comprendida entre las actuales ciudades de Valdivia y Puerto Montt. Con este objetivo, se promulgó la Ley de Colonización, que buscaba atraer inmigrantes extranjeros para poblar dicho territorio. A partir de 1853, <strong>familias priovenientes principalmente de Alemania</strong> comenzaron a instalarse a orillas del lago Llanquihue, iniciando el desarrollo de actividades agrícolas, industriales y comerciales en la cuenca. Antes de la llegada del tren, la navegación era la única vía de conexión entre los distintos sectores del lago.</p>
							
							<p>Además de los colonos alemanes, llegaron a habitar la zona familias provenientes del archipiélago de Chiloé, lo que produce un sincretismo cultural único, que aún puede observarse en las edificaciones patrimoniales de la cuenca, que si bien responden a un estilo arquitectónico claramente alemán, incorporan técnicas constructivas típicamente chilotas.</p>
						</div>
						<div class="col-12 imagen-azul">
							<img src="assets/img/lagollanquihue/lago-llanquihue-04.svg" alt="">
						</div>
					</div>
				</div>
			</div>
			
			<!-- ITEM 06 -->
			<div class="col-12 campo-info" id="mostrar-opcion-06" style="display:none;">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center icono-azul">
							<img src="assets/img/lago-icon-06.svg" alt="AMENAZAS">
						</div>
						<div class="col-12 subtitulo-azul">
							<h4>AMENAZAS</h4>
						</div>
						<div class="col-12 texto-azul">
							<p>Actualmente, y debido a que sus afluentes son de pequeña magnitud, el principal riesgo para la calidad de las aguas es el potencial impacto de las actividades generadas en el lago o sus alrededores, como lo son los <strong>agroquímicos, las pisciculturas y el vertimiento de residuos.</strong></p>
							
							<p>Cuando hablamos de contaminación en el lago nos referimos a la entrada de elementos en el medio que, por su composición y/o concentración, hace que el agua sea insegura o no apta para su uso. </p>
							
							<p>En lo específico, los contaminantes en el lago pueden ser clasificados según el lugar desde donde son generados:</p>
							
							<p><strong>Desde el lago:</strong></p>
							<p>Principalmente debido a la actividad acuícola existente en algunos puntos del lago. Las fecas de los salmónidos cultivados y el alimento no consumido, son importantes fuentes de nutrientes que pueden contribuir a la contaminación del lago si no son controladas. También pueden ocurrir vertidos puntuales de, por ejemplo, combustible de embarcaciones de transporte o recreación. Desde el subsuelo: La existencia de pozos sépticos para las aguas servidas sin tratamiento secundario en las viviendas ubicadas en la cuenca del lago van aportando nutrientes a las aguas subterráneas que pueden llegar hasta el lago.</p>
							
							<p><strong>Desde la cuenca: </strong></p>
							<p><strong>Fuentes localizadas: </strong>Son potenciales fuentes de nutrientes, cuyo origen es identificado y su ubicación puede ser determinada. Corresponden principalmente a vertidos de diferentes actividades productivas y aliviaderos de tormenta en el lago.</p>
							<p><strong>Fuentes difusas:</strong> Se deben a la dispersión de sustancias contaminantes en zonas amplias de terrenos, alejadas de la fuente de origen y que llegan principalmente por escorrentía hasta el lago, desde las áreas rurales y urbanas. La deforestación alrededor de la cuenca es un gran potenciador de este tipo de contaminación.</p>
						
						</div>
						<div class="col-12 imagen-azul">
							<img src="assets/img/lagollanquihue/lago-llanquihue-05.svg" alt="">
						</div>
					</div>
				</div>
			</div>
			
			<!-- ITEM 07 -->
			<div class="col-12 campo-info galeria" id="mostrar-opcion-07" style="display:none;">
				<div class="tz-gallery galleria-lago">
					<div class="row">
						<div class="col-6 dist-gallery">
							<a class="lightbox" href="../assets/img/gallery/lagolinea_01.jpg">
								<img src="../assets/img/gallery/lagolinea_01.jpg" alt="Park" class="img-fluid">
							</a>
						</div>
						<div class="col-6 dist-gallery">
							<a class="lightbox" href="../assets/img/gallery/lagolinea_02.jpg">
								<img src="../assets/img/gallery/lagolinea_02.jpg" alt="Bridge" class="img-fluid">
							</a>
						</div>
						<div class="col-6 dist-gallery">
							<a class="lightbox" href="../assets/img/gallery/lagolinea_03.jpg">
								<img src="../assets/img/gallery/lagolinea_03.jpg" alt="Tunnel" class="img-fluid">
							</a>
						</div>
						<div class="col-6 dist-gallery">
							<a class="lightbox" href="../assets/img/gallery/lagolinea_04.jpg">
								<img src="../assets/img/gallery/lagolinea_04.jpg" alt="Coast" class="img-fluid">
							</a>
						</div>
						<div class="col-6 dist-gallery">
							<a class="lightbox" href="../assets/img/gallery/lagolinea_05.jpg">
								<img src="../assets/img/gallery/lagolinea_05.jpg" alt="Rails" class="img-fluid">
							</a>
						</div>
						<div class="col-6 dist-gallery">
							<a class="lightbox" href="../assets/img/gallery/lagolinea_06.jpg">
								<img src="../assets/img/gallery/lagolinea_06.jpg" alt="Traffic" class="img-fluid">
							</a>
						</div>
						<div class="col-6 dist-gallery">
							<a class="lightbox" href="../assets/img/gallery/lagolinea_07.jpg">
								<img src="../assets/img/gallery/lagolinea_07.jpg" alt="Rocks" class="img-fluid">
							</a>
						</div>
						<div class="col-6 dist-gallery">
							<a class="lightbox" href="../assets/img/gallery/lagolinea_08.jpg">
								<img src="../assets/img/gallery/lagolinea_08.jpg" alt="Benches" class="img-fluid">
							</a>
						</div>
						<div class="col-6 dist-gallery">
							<a class="lightbox" href="../assets/img/gallery/lagolinea_09.jpg">
								<img src="../assets/img/gallery/lagolinea_09.jpg" alt="Sky" class="img-fluid">
							</a>
						</div>
						<div class="col-6 dist-gallery">
							<a class="lightbox" href="../assets/img/gallery/lagolinea_10.jpg">
								<img src="../assets/img/gallery/lagolinea_10.jpg" alt="Sky" class="img-fluid">
							</a>
						</div>
						<div class="col-6 dist-gallery">
							<a class="lightbox" href="../assets/img/gallery/lagolinea_11.jpg">
								<img src="../assets/img/gallery/lagolinea_11.jpg" alt="Sky" class="img-fluid">
							</a>
						</div>
						<div class="col-6 dist-gallery">
							<a class="lightbox" href="../assets/img/gallery/lagolinea_12.jpg">
								<img src="../assets/img/gallery/lagolinea_12.jpg" alt="Sky" class="img-fluid">
							</a>
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