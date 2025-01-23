<!doctype html>
<html lang="es">
<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        let dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            // No hacer nada.
        }else{
            document.location = "../monitoreo.php";
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

<section id="contenidos" >
	<div class="container">
		<div class="row">
			<div class="col-12 text-center titulo-tecnologias">
				<h2>ESTACIÓN DE MONITOREO</h2>
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
							<p>El proceso de recolección manual de muestras puede resultar ineficiente si se trata de <strong>registrar de manera recurrente.</strong> Gracias al desarrollo de las tecnologías de transmisión inalámbricas, el proceso de detección de parámetros de calidad de agua se puede realizar de forma remota y de manera continua en el tiempo.</p>
							<p>La estación de monitoreo remoto es una <strong>boya equipada con distintos sensores de medición,</strong> acoplados a un sistema de almacenamiento y transmisión de datos que miden variables físicas y químicas del ambiente. Esta herramienta permite el registro y visualización en tiempo real, desde un dispositivo con acceso a Internet, de parámetros fundamentales para el monitoreo de la calidad del agua: temperatura, conductividad, oxígeno disuelto, saturación y turbidez.</p>
							<p>Esto es posible gracias al desarrollo de tecnologías WSN (acrónimo de Wireless Personal Area Network). El sistema requiere de una alimentación de energía, la cual se realiza por medio de placas solares instaladas en la torre de control. Una parte de la energía acumulada en las baterías se destina al funcionamiento de los sensores y a la transmisión, cuyos nodos emiten información hacia un receptor. Posteriormente, vía GPRS la información se transmite hacia una plataforma remota que permite visualizar los valores obtenidos para cada parámetro.</p>
							<p>Otras opciones de transmisión consideradas fueron: la radio frecuencia, muy útil para alcances lineales de entre 5 a 10 km pero que podría presentar interferencias; y la señal satelital, cuyo costo económico es más elevado.</p>
							<p>La información que entrega esta tecnología tiene altos niveles de precisión y está disponible indistintamente de las condiciones climáticas; sin embargo, es importante tener en consideración que esta información corresponde solo a un solo punto en el lago, por lo que sus los resultados no deben utilizarse para sacar conclusiones sobre la calidad del volumen del cuerpo de agua.</p>
							<p>La función de la boya en la estación de monitoreo es la de proveer un espacio flotante y anclado al suelo en el que poder fijar los sensores, que son los encargados de tomar las mediciones de calidad del agua. Si bien su uso está muy extendido, puede ser excluido en caso de contar con un punto fijo en el cual poder instalar los sensores, como por ejemplo bordes costeros, muelles o ductos de descarga.</p>
						</div>
						<div class="col-12 new-opcion-text opcion-proyecto gallery">
							<div class="row">
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/monitoreo/img-monitoreo-01.jpeg" data-lightbox="example-set" data-title="Estación de monitoreo en la bahía de Puerto Varas."><img class="example-image img-fluid" src="../assets/img/monitoreo/img-monitoreo-01-1.jpg" alt=""/></a>
								</div>
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/monitoreo/img-monitoreo-02.jpeg" data-lightbox="example-set" data-title="Esquema de instalación de la Estación de monitoreo."><img class="example-image img-fluid" src="../assets/img/monitoreo/img-monitoreo-02-1.jpg" alt=""/></a>
								</div>
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/monitoreo/img-monitoreo-03.png" data-lightbox="example-set" data-title="Estación de monitoreo."><img class="example-image img-fluid" src="../assets/img/monitoreo/img-monitoreo-03-1.jpg" alt=""/></a>
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
							<p class="text-center"><strong>TEMPERATURA DEL AGUA</strong></p>
							<p>Es un factor ambiental fundamental, ya que tiene una relación directa con la mayoría de indicadores utilizados en la estación de monitoreo. Por ejemplo, cuando aumenta la temperatura, disminuye la cantidad de oxígeno disuelto en el agua. También está directamente relacionada con la conductividad eléctrica, ya que cuando mayor es la temperatura, mayor es el movimiento de los iones en el cuerpo de agua (sales y materia inorgánica con carga eléctrica), por ende, mayor será la conductividad.</p>
							
							<p class="text-center"><strong>OXÍGENO DISUELTO</strong></p>
							<p>Es la cantidad de oxígeno que está disuelto en el agua, fundamental para la vida en este ambiente. La mayoría de los organismos acuáticos necesitan oxígeno para sobrevivir y crecer, pero los requerimientos de oxígeno son variables. Por ejemplo, la trucha necesita niveles elevados para sobrevivir, mientras el bagre no.<br><br>La unidad de medida de este indicador es el milígramo por litro (mg/L). Valores inferiores a 3 mg/L son dañinos para el ecosistema acuático y pueden suponer la muerte de plantas y animales.</p>
							
							<p class="text-center"><strong>NIVEL DE CONDUCTIVIDAD ELÉCTRICA</strong></p>
							<p>Indica la cantidad de sales y otros compuestos con carga eléctrica disueltos en el agua (iones). A mayor conductividad, mayor cantidad de iones. El origen de esta conductividad se debe a la descarga de iones  la tierra y las rocas por las que pasa el agua durante su ciclo descargan, por lo tanto, la geología de una cierta zona determina la cantidad y el tipo de iones en el agua. <br><br>La unidad de medida utilizada en este indicador es el microSiemens por centímetro (μS/cm). Dependiendo del origen del agua, esta puede presentar diferentes niveles de conductividad, por ejemplo, la conductividad del agua para consumo humano es de alrededor de 25 μS/cm, la del agua de mar promedio es de 50.000 μS/cm y la del lago Llanquihue suele estar por sobre los 90 μS/cm.</p>
							
							<p class="text-center"><strong>SATURACIÓN</strong></p>
							<p>Es el porcentaje de oxígeno disuelto con respecto a la cantidad máxima de oxígeno disuelto en el agua, a una temperatura y presión determinadas. Cuando aumenta la temperatura, disminuye la cantidad de oxígeno disuelto en el agua. Cuando el agua contiene todo el oxígeno disuelto a una temperatura dada, se dice que esta 100% saturada de oxígeno. El agua puede estar sobresaturada de oxígeno bajo ciertas condiciones, como por ejemplo en los rápidos de los ríos, o cuando las algas crecen y producen oxígeno más rápidamente del que puede ser usado o liberado a la atmósfera.</p>
							
							<p class="text-center"><strong>TURBIDEZ</strong></p>
							<p>Es la falta de transparencia en el agua debido a la presencia de partículas en suspensión como arcilla, sedimentos, materia orgánica e inorgánica finamente fraccionada, plancton y otros microorganismos. Mientras más sólidos en suspensión haya en el agua, el valor de turbidez será más alto. La unidad de medida es el NTU (Unidad Nefelométrica de Turbidez). <br><br>Estas partículas que se encuentran suspendidas en el agua absorben calor de la luz solar, haciendo que aumente la temperatura y se reduzca la concentración de oxígeno en el agua. A su vez, las partículas en suspensión dispersan la luz, lo que impide la actividad fotosintética de las plantas y algas, contribuyendo a bajar, aún más, la concentración de oxígeno. Estas partículas pueden ser dañinas para muchos organismos acuáticos, ya que pueden obstruir las branquias de los peces e impedir el libre desplazamiento de los macroinvertebrados acuáticos. <br><br>Sin embargo, este no es un indicador directo para determinar contaminación, ya que la turbidez puede ser ocasionada por causas naturales y/o momentáneas, tales como la presencia de arcillas provenientes de la erosión, movimientos de tierra en terrenos aledaños al cuerpo de agua, o la descomposición de la vegetación de la ribera.</p>
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
							<p><strong>1) Evaluación de la flotabilidad</strong> y análisis de optimización del tamaño y volumen de la boya a utilizar, teniendo en cuenta aspectos operativos y medioambientales como el oleaje en el lago, el viento o la profundidad en el punto de fijación.</p>
							
							<p><strong>2) Optimización de sensores</strong> para que entreguen la mayor cantidad de información posible. El set de parámetros es amplio, por lo que se deben seleccionar aquellos que se consideren fundamentales para los objetivos de estudio y para los que existan sensores disponibles.</p>
							
							<p>- Parámetros físicos: temperatura, turbidez, profundidad/presión, corriente de agua. </p>
							
							<p>- Parámetros químicos: conductividad, oxígeno disuelto, saturación, pH, nutrientes (NH4, NO2, PO4, NO3, Cl), materia orgánico disuelta.</p>
							
							<p>- Biológicos: clorofila, algas verdes-azules/cianobacterias.</p>
							
							<p><strong>3) Un estudio de correlación</strong> mostrará la dependencia de la temperatura, conductividad eléctrica y turbidez con los restantes parámetros.</p>
							
							<p><strong>4) Evaluación de disponibilidad energética</strong> (radiación solar y almacenamiento en baterías) para el óptimo funcionamiento del sistema (periodicidad de los registros y transmisión de data).</p>
							
							<p><strong>5) Procesos administrativos</strong> solicitud de permisos al SHOA (Servicio Hidrográfico y Oceanográfico de la Armada de Chile).</p>
							
							<p><strong>6) Instalación</strong> Para definir la localización de la estación de monitoreo deben tomarse en consideración varios factores: la profundidad del punto donde se instalará, ya que de ello dependerá el tipo de fondeo o muerto a colocar en el suelo lacustre; que esté lo suficientemente alejada de las áreas de recreo en el lago, minimizando la posibilidad de actos vandálicos en la unidad; la facilidad de transporte para la realización de labores de mantenimiento y la posibilidad de una buena transmisión de datos sin necesidad de recurrir a la señal satelital. Adicionalmente, si hay disponibilidad de datos, es importante considerar la dispersión de contaminantes en el lago</p>
							
							<p><strong>6) Chequeo y mantención</strong> periódico de sensores (1 o 2 veces al mes).</p>
						</div>
						
						<div class="col-12 new-opcion-text opcion-proyecto gallery">
							<div class="row">
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/monitoreo/img-monitoreo-04.jpeg" data-lightbox="example-set" data-title="Sensores de la Estación de monitoreo."><img class="example-image img-fluid" src="../assets/img/monitoreo/img-monitoreo-04-1.jpg" alt=""/></a>
								</div>
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/monitoreo/img-monitoreo-05.png" data-lightbox="example-set" data-title="Instalación de la Estación de monitoreo en la bahía de Puerto Varas"><img class="example-image img-fluid" src="../assets/img/monitoreo/img-monitoreo-05-1.jpg" alt=""/></a>
								</div>
								<div class="col-4 item-gallery">
									<a class="example-image-link" href="../assets/img/monitoreo/img-monitoreo-06.png" data-lightbox="example-set" data-title="Luz de señalización"><img class="example-image img-fluid" src="../assets/img/monitoreo/img-monitoreo-06-1.jpg" alt=""/></a>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		
		</div>
	</div>
</section>

<section id="contenidos">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center titulo-tecnologias">
				<h2>ESTACIÓN DE MONITOREO</h2>
				<p>Datos en línea | Ubicación de la boya</p>
			</div>
		</div>
		<div class="row botones-filtro">
			<div id='1d' class="allbuttons text-center graphbuttonclicked">1 DÍA</div>
			<div id='7d' class="allbuttons text-center graphbutton">7 DÍAS</div>
			<div id='30d' class="allbuttons text-center graphbutton">30 DÍAS</div>
			<div id='1y' class="allbuttons text-center graphbutton">1 AÑO</div>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<div id='chartdiv' style='display:none;height: 450px;padding-top: 20px;'></div>
				<div id='loader' style="width: 100%;height: 250px;display: flex;"><img src='../assets/img/loading.gif' style='width:40px;margin: auto;'></div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-center">
				<div id='chartdiv2' style='display:none;height: 450px;padding-left: 20px;padding-top: 40px;padding-bottom: 40px;'></div>
				<div id='loader2' style="width: 100%;height: 250px;display: flex;"><img src='../assets/img/loading.gif' style='width:40px;margin: auto;'></div>
			</div>
		</div>
		<div class="row">
			<div class="box-info">
				<div class="box-titulo">
					<h6>OXÍGENO</h6>
				</div>
				<div class="box-cont" id="oxygen">
					<div style="width: 100%;height: 100%;display: flex; margin-top: 10px"><img src='../assets/img/loading.gif' style='width:20px;margin: auto;'></div>
				</div>
			</div>
			<div class="box-info">
				<div class="box-titulo">
					<h6>SATURACIÓN</h6>
				</div>
				<div class="box-cont" id="saturation">
					<div style="width: 100%;height: 100%;display: flex; margin-top: 10px"><img src='../assets/img/loading.gif' style='width:20px;margin: auto;'></div>
				</div>
			</div>
			<div class="box-info">
				<div class="box-titulo">
					<h6>TEMPERATURA</h6>
				</div>
				<div class="box-cont" id="temperature">
					<div style="width: 100%;height: 100%;display: flex; margin-top: 10px"><img src='../assets/img/loading.gif' style='width:20px;margin: auto;'></div>
				</div>
			</div>
		
		</div>
		<div class="row">
			<div class="box-info">
				<div class="box-titulo">
					<h6>CONDUCTIVIDAD</h6>
				</div>
				<div class="box-cont" id="conductividad">
					<div style="width: 100%;height: 100%;display: flex; margin-top: 10px"><img src='../assets/img/loading.gif' style='width:20px;margin: auto;'></div>
				</div>
			</div>
			<div class="box-info">
				<div class="box-titulo">
					<h6>TURBIDEZ</h6>
				</div>
				<div class="box-cont" id="turvidity">
					<div style="width: 100%;height: 100%;display: flex; margin-top: 10px"><img src='../assets/img/loading.gif' style='width:20px;margin: auto;'></div>
				</div>
			</div>
			<!--<div class="box-btn">
				<button id='exportexcel'>DESCARGAR<br>Base de datos</button>
			</div>
			-->
		</div>
	</div>
</section>

<section id="ubicacion">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div id="google-map-div" style="width: 100%; height: 400px"></div>
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

<script src="../assets/js/exportexcel/excelexportjs.js"></script>


<!-- GRAPHICS -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		
		$('#exportexcel').on('click', function() {
			$("#datatables1").excelexportjs({
				containerid: "datatables1",
				datatype: 'table'
			});
		});
		
		$('.allbuttons').click(function() {
			$('.allbuttons').removeClass("graphbutton");
			$('.allbuttons').removeClass("graphbuttonclicked");
			$('.allbuttons').addClass("graphbutton");
			$(this).addClass("graphbuttonclicked");
			
			$('#chartdiv').hide();
			$('#loader').show();
			
			$('#chartdiv2').hide();
			$('#loader2').show();
			
			var id = $(this).attr('id');
			if (id == '1d') {
				getGraphData(1);
			} else if (id == '7d') {
				getGraphData(7);
			} else if (id == '30d') {
				getGraphData(30);
			} else if (id == '1y') {
				getGraphData(365);
			}
			
		});
		
		function getGraphData(days) {
			var today = Math.round((new Date()).getTime() / 1000);
			var date = new Date();
			var yesterday = date.setDate(date.getDate() - days);
			yesterday = Math.round(yesterday / 1000);
			$.ajax({
				type: "GET",
				url: "../api/get_data_range.php?since=" + yesterday + "&until=" + today,
				cache: false,
				success: function(output) {
					try {
						var data = JSON.parse(output);
						var cond = JSON.parse(JSON.parse(output).cond);
						var oxygen = JSON.parse(JSON.parse(output).oxygen);
						var turvidity = JSON.parse(JSON.parse(output).turvidity);
						drawPlot(cond, oxygen, turvidity, days);
						drawPlot2(cond, oxygen, turvidity, days);
					} catch (e) {
						console.log(e);
					}
				},
				error: function(output, e, f) {
					console.log(e);
				}
			});
		}
		
		function td(day) {
			var ts = day * 1000;
			var mydate = new Date(ts);
			
			var m_names = new Array("Ene.", "Feb.", "Mar.",
					"Abr.", "May.", "Jun.", "Jul.", "Ago.", "Sep.",
					"Oct.", "Nov.", "Dic.");
			
			var curr_date = mydate.getDate();
			var curr_month = mydate.getMonth();
			var curr_year = mydate.getFullYear();
			
			var mydatestr = '' + curr_date + ' ' +
					m_names[curr_month] + ' ' +
					curr_year + ' ' +
					mydate.getHours() + ':' +
					mydate.getMinutes() + ':' +
					mydate.getSeconds();
			return mydatestr;
		}
		
		$.ajax({
			type: "GET",
			url: "../api/monitor_sensor_last_data2.php",
			cache: false,
			success: function(output) {
				
				try {
					var data = JSON.parse(output);
					var cond = JSON.parse(data.cond);
					var turvidity = JSON.parse(data.turvidity);
					var oxygen = JSON.parse(data.oxygen);
					$('#conductividad').html(cond.conductivity + " µS/cm");
					$('#datecond').html(td(cond.timestamp));
					$('#turvidity').html(turvidity.turbidity + " NTU");
					$('#dateturv').html(td(turvidity.timestamp));
					$('#oxygen').html(oxygen.oxygen + " mg/l");
					$('#saturation').html(oxygen.saturation + " %");
					$('#temperature').html(oxygen.temperature + " °C");
					$('.datef').html(td(oxygen.timestamp));
					
					getGraphData(1);
					
					/*console.log(data[0].last_data);
					$('#oxygen').html(data[0].last_data.oxygen + " mg/l");
					$('#saturation').html(data[0].last_data.saturation + " %") ;
					$('#temperature').html(data[0].last_data.temperature + " °C") ;
					$('#conductividad').html(data['cond'].conductivity + " °C") ;
					$('#temperature').html(data[0].last_data.temperature + " °C") ;

					
					$('.datef').html(mydatestr);	*/
				} catch (e) {}
			},
			error: function(output, e, f) {
				console.log(e);
			}
		});
	});
</script>

<script>
	var plotdivider = 5;
	
	function pad(num, size) {
		num = num.toString();
		while (num.length < size) num = "0" + num;
		return num;
	}
	
	
	
	
	
	
	
	
	function drawPlot2(cond, oxygen, turvidity, days) {
		
		am4core.ready(function() {
			
			// Themes begin
			am4core.useTheme(am4themes_animated);
			// Themes end
			
			// Create chart instance
			var chart = am4core.create("chartdiv2", am4charts.XYChart);
			
			//
			
			// Increase contrast by taking evey second color
			chart.colors.step = 2;
			
			// Add data
			chart.data = generateChartData2(days);
			$('#chartdiv2').show();
			$('#loader2').hide();
			
			// Create axes
			var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
			dateAxis.renderer.minGridDistance = 50;
			
			// Create series
			function createAxisAndSeries2(field, name, opposite, bullet) {
				var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
				if (chart.yAxes.indexOf(valueAxis) != 0) {
					valueAxis.syncWithAxis = chart.yAxes.getIndex(0);
				}
				
				var series = chart.series.push(new am4charts.LineSeries());
				series.dataFields.valueY = field;
				series.dataFields.dateX = "date";
				series.strokeWidth = 1.5;
				series.yAxis = valueAxis;
				series.name = name;
				series.tooltipText = "{name}: [bold]{valueY}[/]";
				series.tensionX = 0.8;
				series.showOnInit = true;
				
				var interfaceColors = new am4core.InterfaceColorSet();
				/*
		  switch(bullet) {
			case "triangle":
			  var bullet = series.bullets.push(new am4charts.Bullet());
			  bullet.width = 12;
			  bullet.height = 12;
			  bullet.horizontalCenter = "middle";
			  bullet.verticalCenter = "middle";
			  
			  var triangle = bullet.createChild(am4core.Triangle);
			  triangle.stroke = interfaceColors.getFor("background");
			  triangle.strokeWidth = 2;
			  triangle.direction = "top";
			  triangle.width = 12;
			  triangle.height = 12;
			  break;
			case "rectangle":
			  var bullet = series.bullets.push(new am4charts.Bullet());
			  bullet.width = 10;
			  bullet.height = 10;
			  bullet.horizontalCenter = "middle";
			  bullet.verticalCenter = "middle";
			  
			  var rectangle = bullet.createChild(am4core.Rectangle);
			  rectangle.stroke = interfaceColors.getFor("background");
			  rectangle.strokeWidth = 2;
			  rectangle.width = 10;
			  rectangle.height = 10;
			  break;
			default:
			  var bullet = series.bullets.push(new am4charts.CircleBullet());
			  bullet.circle.stroke = interfaceColors.getFor("background");
			  bullet.circle.strokeWidth = 2;
			  break;
		  }
		  */
				valueAxis.renderer.line.strokeOpacity = 1;
				valueAxis.renderer.line.strokeWidth = 2;
				valueAxis.renderer.line.stroke = series.stroke;
				valueAxis.renderer.labels.template.fill = series.stroke;
				valueAxis.renderer.opposite = opposite;
			}
			
			//createAxisAndSeries("oxygen_chart", "OXÍGENO", false, "circle");
			//createAxisAndSeries("saturation_chart", "SATURACIÓN", true, "triangle");
			//createAxisAndSeries2("temperature_chart", "TEMPERATURA", true, "rectangle");
			createAxisAndSeries2("conductivity_chart", "CONDUCTIVIDAD", true, "rectangle");
			createAxisAndSeries2("turbidity_chart", "TURBIDEZ", true, "rectangle");
			
			// Add legend
			chart.legend = new am4charts.Legend();
			
			// Add cursor
			chart.cursor = new am4charts.XYCursor();
			
			// generate some random data, quite different range
			function generateChartData2(days) {
				var chartData = [];
				var firstDate = new Date();
				firstDate.setDate(firstDate.getDate() - 100);
				firstDate.setHours(0, 0, 0, 0);
				
				
				// console.log("Plot");
				//console.log(data);
				
				var months = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dic'];
				$('#table1values').html("");
				var tablevalues = [];
				var tableindex = [];
				oxygen.oxygen.forEach(function(e, i) {
					
					if (i % (days * plotdivider) == 0) {
						var datename = e[0];
						if (datename && e[1]) {
							tablevalues.push({
								date: datename,
								oxygen: e[1],
								temperature: oxygen.temperature[i][1],
								saturation: oxygen.saturation[i][1],
								conductivity: '',
								turvidity: ''
							});
						}
						chartData.push({
							date: new Date(e[0] * 1000),
							oxygen_chart: e[1],
							temperature_chart: oxygen.temperature[i][1],
							saturation_chart: oxygen.saturation[i][1],
						});
					}
				});
				
				cond.conductivity.forEach(function(e, i) {
					if (i % (days * plotdivider) == 0) {
						var datename = e[0];
						var esta = tablevalues.findIndex(function(val, index) {
							if (val.date == datename)
								return true;
						});
						if (esta != -1) { // Existe
							var auxval = tablevalues[esta];
							tablevalues[esta] = {
								date: auxval['date'],
								oxygen: auxval['oxygen'],
								temperature: auxval['temperature'],
								saturation: auxval['saturation'],
								conductivity: cond.conductivity[i][1],
								turvidity: ''
							};
						} else {
							if (datename && cond.conductivity[i][1]) {
								tablevalues.push({
									date: datename,
									oxygen: '',
									temperature: '',
									saturation: '',
									conductivity: cond.conductivity[i][1],
									turvidity: ''
								});
							}
						}
						chartData.push({
							date: new Date(e[0] * 1000),
							conductivity_chart: cond.conductivity[i][1],
						});
					}
				});
				
				turvidity.turbidity.forEach(function(e, i) {
					if (i % (days * plotdivider) == 0) {
						var datename = e[0];
						var esta = tablevalues.findIndex(function(val, index) {
							if (val.date == datename)
								return true;
						});
						if (esta != -1) { // Existe
							var auxval = tablevalues[esta];
							tablevalues[esta] = {
								date: auxval['date'],
								oxygen: auxval['oxygen'],
								temperature: auxval['temperature'],
								saturation: auxval['saturation'],
								conductivity: auxval['conductivity'],
								turvidity: turvidity.turbidity[i][1]
							};
						} else {
							if (datename && turvidity.turbidity[i][1]) {
								tablevalues.push({
									date: datename,
									oxygen: '',
									temperature: '',
									saturation: '',
									conductivity: '',
									turvidity: turvidity.turbidity[i][1]
								});
							}
						}
						chartData.push({
							date: new Date(e[0] * 1000),
							turbidity_chart: turvidity.turbidity[i][1],
						});
					}
				});
				
				tablevalues.sort((a, b) => {
					let da = new Date(a.date * 1000),
							db = new Date(b.date * 1000);
					return da - db;
				});
				
				tablevalues.forEach((value, index, array) => {
					var date = value.date;
					var dg = new Date(date * 1000);
					formatted = dg.getDate() + ' ' + months[dg.getMonth()] + ' ' +
							dg.getFullYear() + ' ' + pad(dg.getHours(), 2) + ':' + pad(dg.getMinutes(), 2) + ':' +
							pad(dg.getSeconds(), 2);
					var oxygen = value.oxygen;
					var temperature = value.temperature;
					var saturation = value.saturation;
					var conductivity = value.conductivity;
					var turvidity = value.turvidity;
					$('#table1values').append("<tr><td>" + formatted + "</td><td>" + oxygen + "</td><td>" + temperature + "</td><td>" + saturation + "</td><td>" + conductivity + "</td><td>" + turvidity + "</td></tr>");
				});
				return chartData;
			}
			
		}); // end am4core.ready()
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	function drawPlot(cond, oxygen, turvidity, days) {
		
		am4core.ready(function() {
			
			// Themes begin
			am4core.useTheme(am4themes_animated);
			// Themes end
			
			// Create chart instance
			var chart = am4core.create("chartdiv", am4charts.XYChart);
			
			//
			
			// Increase contrast by taking evey second color
			chart.colors.step = 2;
			
			// Add data
			chart.data = generateChartData(days);
			$('#chartdiv').show();
			$('#loader').hide();
			
			// Create axes
			var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
			dateAxis.renderer.minGridDistance = 50;
			
			// Create series
			function createAxisAndSeries(field, name, opposite, bullet) {
				var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
				if (chart.yAxes.indexOf(valueAxis) != 0) {
					valueAxis.syncWithAxis = chart.yAxes.getIndex(0);
				}
				
				var series = chart.series.push(new am4charts.LineSeries());
				series.dataFields.valueY = field;
				series.dataFields.dateX = "date";
				series.strokeWidth = 1.5;
				series.yAxis = valueAxis;
				series.name = name;
				series.tooltipText = "{name}: [bold]{valueY}[/]";
				series.tensionX = 0.8;
				series.showOnInit = true;
				
				var interfaceColors = new am4core.InterfaceColorSet();
				/*
		  switch(bullet) {
			case "triangle":
			  var bullet = series.bullets.push(new am4charts.Bullet());
			  bullet.width = 12;
			  bullet.height = 12;
			  bullet.horizontalCenter = "middle";
			  bullet.verticalCenter = "middle";
			  
			  var triangle = bullet.createChild(am4core.Triangle);
			  triangle.stroke = interfaceColors.getFor("background");
			  triangle.strokeWidth = 2;
			  triangle.direction = "top";
			  triangle.width = 12;
			  triangle.height = 12;
			  break;
			case "rectangle":
			  var bullet = series.bullets.push(new am4charts.Bullet());
			  bullet.width = 10;
			  bullet.height = 10;
			  bullet.horizontalCenter = "middle";
			  bullet.verticalCenter = "middle";
			  
			  var rectangle = bullet.createChild(am4core.Rectangle);
			  rectangle.stroke = interfaceColors.getFor("background");
			  rectangle.strokeWidth = 2;
			  rectangle.width = 10;
			  rectangle.height = 10;
			  break;
			default:
			  var bullet = series.bullets.push(new am4charts.CircleBullet());
			  bullet.circle.stroke = interfaceColors.getFor("background");
			  bullet.circle.strokeWidth = 2;
			  break;
		  }
		  */
				valueAxis.renderer.line.strokeOpacity = 1;
				valueAxis.renderer.line.strokeWidth = 2;
				valueAxis.renderer.line.stroke = series.stroke;
				valueAxis.renderer.labels.template.fill = series.stroke;
				valueAxis.renderer.opposite = opposite;
			}
			
			createAxisAndSeries("oxygen_chart", "OXÍGENO", false, "circle");
			createAxisAndSeries("saturation_chart", "SATURACIÓN", true, "triangle");
			createAxisAndSeries("temperature_chart", "TEMPERATURA", true, "rectangle");
			//createAxisAndSeries("conductivity_chart", "CONDUCTIVIDAD", true, "rectangle");
			//createAxisAndSeries("turbidity_chart", "TURBIDEZ", true, "rectangle");
			
			// Add legend
			chart.legend = new am4charts.Legend();
			
			// Add cursor
			chart.cursor = new am4charts.XYCursor();
			
			// generate some random data, quite different range
			function generateChartData(days) {
				var chartData = [];
				var firstDate = new Date();
				firstDate.setDate(firstDate.getDate() - 100);
				firstDate.setHours(0, 0, 0, 0);
				
				
				// console.log("Plot");
				//console.log(data);
				
				var months = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dic'];
				$('#table1values').html("");
				var tablevalues = [];
				var tableindex = [];
				oxygen.oxygen.forEach(function(e, i) {
					
					if (i % (days * plotdivider) == 0) {
						var datename = e[0];
						if (datename && e[1]) {
							tablevalues.push({
								date: datename,
								oxygen: e[1],
								temperature: oxygen.temperature[i][1],
								saturation: oxygen.saturation[i][1],
								conductivity: '',
								turvidity: ''
							});
						}
						chartData.push({
							date: new Date(e[0] * 1000),
							oxygen_chart: e[1],
							temperature_chart: oxygen.temperature[i][1],
							saturation_chart: oxygen.saturation[i][1],
						});
					}
				});
				
				cond.conductivity.forEach(function(e, i) {
					if (i % (days * plotdivider) == 0) {
						var datename = e[0];
						var esta = tablevalues.findIndex(function(val, index) {
							if (val.date == datename)
								return true;
						});
						if (esta != -1) { // Existe
							var auxval = tablevalues[esta];
							tablevalues[esta] = {
								date: auxval['date'],
								oxygen: auxval['oxygen'],
								temperature: auxval['temperature'],
								saturation: auxval['saturation'],
								conductivity: cond.conductivity[i][1],
								turvidity: ''
							};
						} else {
							if (datename && cond.conductivity[i][1]) {
								tablevalues.push({
									date: datename,
									oxygen: '',
									temperature: '',
									saturation: '',
									conductivity: cond.conductivity[i][1],
									turvidity: ''
								});
							}
						}
						chartData.push({
							date: new Date(e[0] * 1000),
							conductivity_chart: cond.conductivity[i][1],
						});
					}
				});
				
				turvidity.turbidity.forEach(function(e, i) {
					if (i % (days * plotdivider) == 0) {
						var datename = e[0];
						var esta = tablevalues.findIndex(function(val, index) {
							if (val.date == datename)
								return true;
						});
						if (esta != -1) { // Existe
							var auxval = tablevalues[esta];
							tablevalues[esta] = {
								date: auxval['date'],
								oxygen: auxval['oxygen'],
								temperature: auxval['temperature'],
								saturation: auxval['saturation'],
								conductivity: auxval['conductivity'],
								turvidity: turvidity.turbidity[i][1]
							};
						} else {
							if (datename && turvidity.turbidity[i][1]) {
								tablevalues.push({
									date: datename,
									oxygen: '',
									temperature: '',
									saturation: '',
									conductivity: '',
									turvidity: turvidity.turbidity[i][1]
								});
							}
						}
						chartData.push({
							date: new Date(e[0] * 1000),
							turbidity_chart: turvidity.turbidity[i][1],
						});
					}
				});
				
				tablevalues.sort((a, b) => {
					let da = new Date(a.date * 1000),
							db = new Date(b.date * 1000);
					return da - db;
				});
				
				tablevalues.forEach((value, index, array) => {
					var date = value.date;
					var dg = new Date(date * 1000);
					formatted = dg.getDate() + ' ' + months[dg.getMonth()] + ' ' +
							dg.getFullYear() + ' ' + pad(dg.getHours(), 2) + ':' + pad(dg.getMinutes(), 2) + ':' +
							pad(dg.getSeconds(), 2);
					var oxygen = value.oxygen;
					var temperature = value.temperature;
					var saturation = value.saturation;
					var conductivity = value.conductivity;
					var turvidity = value.turvidity;
					$('#table1values').append("<tr><td>" + formatted + "</td><td>" + oxygen + "</td><td>" + temperature + "</td><td>" + saturation + "</td><td>" + conductivity + "</td><td>" + turvidity + "</td></tr>");
				});
				return chartData;
			}
			
		}); // end am4core.ready()
	}
</script>

<!-- SCRIP MAPA -->

<script>
	<?php
	
	?>
	var map;
	
	function initMap() {
		
		<?php
		include('../admin/include/conf/dbselect.php');
		$sql = "SELECT * FROM ubicacion";
		$result = mysql_query($sql);
		while ($row = mysql_fetch_assoc($result)) {
			$Lng = $row['Lng'];
			$Lat = $row['Lat'];
		}
		$StadiumLat = $Lat;
		$StadiumLng = $Lng;
		if ($StadiumLat <> 0 && $StadiumLng <> 0) {
		?>
		var myLatLng = {
			lat: <?php echo $StadiumLat ?>,
			lng: <?php echo $StadiumLng ?>
		};
		var myzoom = 14;
		<?php
		} else {
		?>
		var myLatLng = {
			lat: -34.397,
			lng: 150.644
		};
		var myzoom = 8;
		<?php
		}
		?>
		map = new google.maps.Map(document.getElementById('google-map-div'), {
			center: myLatLng,
			zoom: myzoom
		});
		<?php
		if ($StadiumLat <> 0 && $StadiumLng <> 0) {
		?>
		var marker = new google.maps.Marker({
			animation: google.maps.Animation.DROP,
			position: myLatLng,
			draggable: false,
			map: map,
			icon: {
				url: "../assets/img/icono-boya.svg",
				scaledSize: new google.maps.Size(39, 72)
			},
		});
		<?php
		} else {
		?>
		var marker = new google.maps.Marker({
			animation: google.maps.Animation.DROP,
			draggable: true,
			map: map,
		});
		<?php
		}
		?>
		
		function placeMarker(location) {
			marker.setPosition(location)
			$('#StadiumLat').val(location.lat().toFixed(7));
			$('#StadiumLng').val(location.lng().toFixed(7));
		}
		
		// Create the search box and link it to the UI element.
		var input = document.getElementById('pac-input');
		var searchBox = new google.maps.places.SearchBox(input);
		map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
		
		// Bias the SearchBox results towards current map's viewport.
		map.addListener('bounds_changed', function() {
			searchBox.setBounds(map.getBounds());
		});
		
		google.maps.event.addListener(searchBox, 'places_changed', function() {
			searchBox.set('map', null);
			
			
			var places = searchBox.getPlaces();
			
			var bounds = new google.maps.LatLngBounds();
			var i, place;
			for (i = 0; place = places[i]; i++) {
				(function(place) {
					marker.setPosition(place.geometry.location)
					$('#StadiumLat').val(place.geometry.location.lat().toFixed(7));
					$('#StadiumLng').val(place.geometry.location.lng().toFixed(7));
					bounds.extend(place.geometry.location);
				}(place));
				
			}
			map.fitBounds(bounds);
			searchBox.set('map', map);
			map.setZoom(Math.min(map.getZoom(), 12));
			
		});
		
	}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnydyACjDEVvZCe2B3zs23KyD_Yf5YWIw&libraries=places&callback=initMap" async defer></script>

<!-- GALLERIA -->
<script src="../assets/dist/js/lightbox-plus-jquery.min.js"></script>

<script>
	$(document).on('click', function() {
		$('.collapse').collapse('hide');
	})
</script>

</body>
</html>
