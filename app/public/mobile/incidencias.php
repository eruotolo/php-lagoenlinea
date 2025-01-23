<!DOCTYPE html>
<html lang="es">
<?php
	include('../admin/include/conf/dbselect.php');
?>
<head>
    <!-- DETECTA MOBILE -->
    <script type="text/javascript">
        let dispositivo = navigator.userAgent.toLowerCase();
        if (dispositivo.search(/iphone|ipod|ipad|android/) > -1) {
            // No hacer nada.
        }else{
            document.location = "../incidencias.php";
        }
    </script>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lago En Línea | Incidencias</title>
	
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
	
	<section id="contenidos">
		
		<?php
			if ($_GET['iid'] == '') {
		?>
		
		<div class="container">
			<div class="row">
				<div class="col-12 text-center titulo-tecnologias info-incidencias">
					<h2>INCIDENCIAS</h2>
					<p>Ciencia ciudadana</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12 texto-azul-1 cont-incidencias">
					<p>El objetivo de esta sección es conocer y reportar episodios de perturbación de las condiciones naturales del lago Llanquihue. Este no es un lugar para hacer denuncias, sino que es un espacio de ciencia ciudadana, en el que cualquier persona puede compartir sus observaciones.</p>
					<p>¿Quieres hacer una denuncia formal? <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Dirígete a las instituciones pertinentes</button></p>
					
					<!-- Modal -->
					<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-body">
									<div class="row">
										<div class="col-12 new-opcion-text">
											<p><b>Superintendencia de Medio Ambiente (SMA)</b></p>
											<ul class="list-seis">
												<li>Descarga de residuos líquidos contraviniendo alguna normativa de emisión o calidad de aguas.</li>
												<li>Drenaje o desecación de humedales.</li>
												<li>Ejecución de actividades que puedan alterar física o químicamente a humedales urbanos.</li>
												<li>Aplicación masiva de productos químicos en humedales.</li>
											</ul>
											
											<p><b>Superintendencia de Servicios Sanitarios (SISS)</b></p>
											<ul class="list-seis">
												<li>Descarga de residuos líquidos de empresas de servicios sanitarios.</li>
												<li>Descarga de aliviaderos de tormenta.</li>
											</ul>
											
											<p><b>Seremi de Salud:</b></p>
											<ul class="list-seis">
												<li>Descarga de aguas servidas y residuos industriales.</li>
												<li>Aplicación de pesticidas.</li>
											</ul>
											
											<p><b>Dirección General de Aguas</b></p>
											<ul class="list-seis">
												<li>Extracción no autorizada de agua.</li>
												<li>Contaminación de cuerpos de agua.</li>
											</ul>
											
											<p><b>Servicio Agrícola Gandero (SAG)</b></p>
											<ul class="list-seis">
												<li>Afectación de fauna silvestre.</li>
												<li>Uso de pesticidas y fertilizantes.</li>
											</ul>
										</div>
										<div class="col-12 new-opcion-text">
											<p><b>Corporación Nacional Forestal (CONAF)</b></p>
											<ul class="list-seis">
												<li>Corte de vegetación.</li>
												<li>Actividades que afecten a áreas ubicadas en unidades SNASPE.</li>
											</ul>
											
											<p><b>Sernapesca</b></p>
											<ul class="list-seis">
												<li>Afectación de fauna y recursos hidrobiológicos.</li>
											</ul>
											
											<p><b>Bienes Nacionales</b></p>
											<ul class="list-seis">
												<li>Actividades que afecten bienes nacionales de uso público.</li>
											</ul>
											
											<p><b>Consejo de Monumentos Nacionales (CMN)</b></p>
											<ul class="list-seis">
												<li>Actividades que afecten áreas ubicadas en Santuarios de la Naturaleza o Zonas Típicas.</li>
											</ul>
											
											<p><b>Municipalidades</b></p>
											<ul class="list-seis">
												<li>Basurales.</li>
												<li>Rellenos.</li>
												<li>Actividades que afecten humedales regulados por ordenanzas municipales.</li>
												<li>Animales domésticos abandonados.</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-modal btn-modal-close" data-bs-dismiss="modal">Volver</button>
									<button type="button" class="btn btn-modal btn-modal-link"><a href='https://gefhumedales.mma.gob.cl/wp-content/uploads/2022/02/Guia-de-denuncia-humedales-1.pdf' target="_blank">Más información</a></button>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Modal -->
					<div class="modal fade" id="allright" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog popup-done">
							<div class="modal-content">
								<div class="modal-body">
									<div class="row">
										<div class="col-12 cont-popup-done">
											<h3>¡Tu incidencia ha sido <br>enviada con éxito!</h3>
											<p>Si está todo ok, prontamente estará publicada en la plataforma.<br>
												Gracias por aportar al monitoreo y cuidado del lago Llanquihue.</p>
										</div>
									</div>
								</div>
								<div class="modal-footer cont-popup-done">
									<button type="button" id='closemodal' class="btn btn-modal btn-modal-close">OK</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- LISTADO Y MAPA DE INICIDENCIAS -->
	<section id="incidencia">
		<div class="container">
			<div class="row">
				<div class="col btn-incidencias" style='display: flex; flex-direction:row;margin:20px;justify-content:center;align-items:center'>
					<div id='listado' class='allbuttons graphbutton graphbuttonclicked incidencia-listado'>Ver listado</div>
					<div id='mapa' class='allbuttons graphbutton incidencia-mapa'>Ver Mapa</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-12">
					<div class="row sectionsdiv tab-incidencias" id='listadodiv' >
						<button id='nuevoincidente'>AGREGAR INCIDENCIA +</button>
						
						<div class="row title-incidencias">
							<div class="col-8"><h5>TÍTULO</h5></div>
							<div class="col-3"><h5>LUGAR</h5></div>
							<div class="col-1"><h5></h5></div>
						</div>
						
						<table style='margin-top:20px' class="tab-inciden">
							<!--
							<thead>
								<th>TÍTULO</th>
								<th>FECHA</th>
								<th>CATEGORÍA</th>
								<th>LUGAR</th>
								<th></th>
							</thead>
							-->
							<tbody class="cont-tab-inicidencias">
							<?php
								include('../admin/include/conf/dbselect.php');
								$sql = "SELECT *, DATE(Fecha) as DateFecha FROM incidentes WHERE Estado = 'Publicado'";
								$result = mysql_query($sql);
								while ($row = mysql_fetch_assoc($result)) {
									echo "<tr>";
									echo "<td class='col-8'>{$row['Nombre']}</td>";
									echo "<td class='col-3'>{$row['Lugar']}</td>";
									echo "<td class='col-1'><button class='moreinfo' incidenteid='{$row['ID']}'>+</button></td>";
									echo "</tr>";
								}
							?>
							</tbody>
						</table>
					</div>
					
					<div class="row sectionsdiv" id='mapadiv' style='display:none'>
						<div id="google-map-div" style="width: 100%; height: 600px"></div>
					</div>
					
					<div class="row sectionsdiv form-inicencias" id='nuevoincidentediv' style='display:none;margin-bottom:30px'>
						<div class='col-12 box-incidencias'>
							<div class="form-group item-incidencias">
								<label>TÍTULO </label><br>
								<input type="text" class="" id='nombre' name='nombre'/>
							</div>
							<div class="form-group item-incidencias">
								<label>AUTOR <small>(Opcional)</small></label><br>
								<input type="text" class="" id='autor' name='autor'/>
							</div>
							<div class="form-group item-incidencias">
								<label>CORREO ELECTRÓNICO <small>(Opcional)</small></label><br>
								<input type="text" class="" id='email' name='email'/>
							</div>
							<div class="form-group item-incidencias">
								<label>LUGAR</label><br>
								<input type="text" class="" id='lugar' name='lugar'/>
							</div>
							<div class="form-group item-incidencias">
								<label>CATEGORÍA</label><br>
								<select name="categoria" class="selectpicker" data-title="Seleccione una categoria" data-style="btn-default btn-block" data-menu-style="dropdown-blue" id='categoria'>
									<option value="">Selecciona una categoría</option>
									<option value="Vertido/Descarga">Vertido/Descarga</option>
									<option value="Floracion">Floración</option>
									<option value="Turbidez">Turbidez</option>
									<option value="Residuos Sólidos">Residuos Sólidos</option>
									<option value="Relleno">Relleno</option>
								</select>
							</div>
						</div>
						<div class='col-12 box-incidencias'>
							<div class="form-group item-incidencias">
								<label>DESCRIPCIÓN</label><br>
								<textarea rows="7" id='descripcion' style='width:100%'></textarea>
							</div>
							<div class="form-group item-incidencias">
								<label>FOTO 1</label><br>
								<input type="file" id="file1" name="file1" />
							</div>
							<div class="form-group item-incidencias">
								<label>FOTO 2</label><br>
								<input type="file" id="file2" name="file2" />
							</div>
							<div class="form-group item-incidencias">
								<label>FOTO 3</label><br>
								<input type="file" id="file3" name="file3" />
							</div>
						</div>
						<div class='col-12 box-incidencias'>
							<input type='hidden' id='txtlat'>
							<input type='hidden' id='txtlng'>
							<label>UBICA EL PUNTO EN EL MAPA</label><br>
							<div id="google-map-div2" style="width: 100%; height: 380px"></div>
							<button id='subir'><i class="fa fa-upload" aria-hidden="true"></i> SUBIR</button>
						</div>
						<a href='#' class='backincidentes'>VOLVER</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php
		} else {
			$sql = "SELECT *, DATE(Fecha) as fec FROM incidentes WHERE ID = '{$_GET['iid']}'";
			$result = mysql_query($sql);
			while ($row = mysql_fetch_assoc($result)) {
				$Nombre = $row['Nombre'];
				$Lugar = $row['Lugar'];
				$fec = $row['fec'];
				$Descripcion = $row['Descripcion'];
				$Categoria = $row['Categoria'];
				$Lat = $row['Lat'];
				$Lng = $row['Lng'];
				$File1 = $row['File1'];
				$File2 = $row['File2'];
				$File3 = $row['File3'];
			}
	?>
		
		<div class="container">
			<div class="row titulo-individual-incidencias">
				<div class="col-12">
					<div class="col titulo-pagina">
						<h3>INCIDENCIAS</h3>
					</div>
				</div>
			</div>
			
			<div class="row" style='margin-bottom:40px'>
				
				<div class='col-12'>
					<div style='margin-bottom:15px' class="cat-incidencias"><?php echo $Categoria ?></div>
					<h4 class="cat-nombre"><?php echo $Nombre ?></h4>
					<b>Lugar de la Incidencia: </b><?php echo $Lugar ?><br>
					<b>Fecha de la Incidencia: </b><?php echo $fec ?>
					<div style='margin-top:15px' class="cat-descripcion"><?php echo $Descripcion ?></div>
					
					<div class="row">
						<div class='col-4 item-gallery'>
							<?php
								if ($File1 <> '') {
									echo "<a class='example-image-link' href='../api/$File1'  data-lightbox='example-set'><img src='../api/$File1' style='object-fit: contain;width:100%;height:200px'></a>";
								}
							?>
						</div>
						<div class='col-4 item-gallery'>
							<?php
								if ($File2 <> '') {
									echo "<a class='example-image-link' href='../api/$File2' data-lightbox='example-set'><img src='../api/$File2' style='object-fit: contain;width:100%;height:200px'></a>";
								}
							?>
						</div>
						<div class='col-4 item-gallery'>
							<?php
								if ($File3 <> '') {
									echo "<a class='example-image-link' href='../api/$File3' data-lightbox='example-set'><img src='../api/$File3' style='object-fit: contain;width:100%;height:200px'></a>";
								}
							?>
						</div>
					</div>
				</div>
				
				<div class='col-12 individual-maps'>
					<div id="google-map-div" style="width: auto; height: 520px"></div>
				</div>
				
			</div>
			<div class="row btn-regresar">
				<a href='incidencias.php' id='backlink'>Volver</a>
			</div>
		</div>
		
		<?php
	}
	?>
	<a href="#informacion" class="arrow bounce"></a>
	
	
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
	
	
	<?php
		if ($_GET['iid'] == '') {
			?>
			<script type="text/javascript">
				$(document).ready(function() {
					
					$('.backincidentes').click(function () {
						$('.sectionsdiv').hide();
						$('#listadodiv').show();
					})
					
					$('.moreinfo').click(function () {
						/*$('.sectionsdiv').hide();
						$('#verincidentediv').show();	*/
						var iid = $(this).attr('incidenteid');
						window.location.href = 'incidencias.php?iid=' + iid;
					})
					
					$('#nuevoincidente').click(function () {
						$('.sectionsdiv').hide();
						$('#nuevoincidentediv').show();
					})
					
					$('.allbuttons').click(function() {
						$('.allbuttons').removeClass("graphbutton");
						$('.allbuttons').removeClass("graphbuttonclicked");
						$('.allbuttons').addClass("graphbutton");
						$(this).addClass("graphbuttonclicked");
						var id = $(this).attr('id');
						
						$('.sectionsdiv').hide();
						if (id == 'listado') {
							$('#listadodiv').show();
						} else if (id == 'mapa') {
							$('#mapadiv').show();
							map.setZoom(map.getZoom());
						}
					});
					
				});
			</script>
			<script>
				var map, map1;
				
				function initMap() {
					var myzoom = 11;
					var myLatLng = {
						lat: -41.3207871,
						lng: -72.9656381
					};
					map = new google.maps.Map(document.getElementById('google-map-div'), {
						center: myLatLng,
						zoom: myzoom
					});
					var markers = []; //some array;
					
					
					<?php
					
					$sql = "SELECT *, DATE(Fecha) as fec FROM incidentes WHERE Estado = 'Publicado'";
					$result = mysql_query($sql);
					while ($row = mysql_fetch_assoc($result)) {
					$Lng = $row['Lng'];
					$Lat = $row['Lat'];
					$Nombre = $row['Nombre'];
					if ($Lng <> '' && $Lat <> '') {
					?>
					var myLatLng = {
						lat: <?php echo $Lat ?>,
						lng: <?php echo $Lng ?>
					};
					var marker = new google.maps.Marker({
						animation: google.maps.Animation.DROP,
						position: myLatLng,
						draggable: false,
						map: map,
						icon: {
							url: "../assets/img/incidencias/pin-mapa-incidencias.svg",
							scaledSize: new google.maps.Size(39, 72)
						},
					});
					addInfoWindow(marker, "<b><?php echo $Nombre ?></b><br>Fecha: <?php echo $row['fec'] ?><br>Lugar: <?php echo $row['Lugar'] ?><br>Categoria: <?php echo $row['Categoria'] ?><br><a href='incidencias.php?iid=<?php echo $row['ID'] ?>'>Ver incidencia</a>");
					markers.push(marker);
					<?php
					}
					}
					?>
					
					var bounds = new google.maps.LatLngBounds();
					for(i=0;i<markers.length;i++) {
						bounds.extend(markers[i].getPosition());
					}
					if (markers.length > 0) {
						map.setCenter(bounds.getCenter());
						map.fitBounds(bounds);
					}
					
					function addInfoWindow(marker, message) {
						var infoWindow = new google.maps.InfoWindow({
							content: message
						});
						google.maps.event.addListener(marker, 'click', function () {
							infoWindow.open(map, marker);
						});
					}
					
					var myzoom1 = 11;
					var myLatLng1 = {
						lat: -41.3207871,
						lng: -72.9656381
					};
					map1 = new google.maps.Map(document.getElementById('google-map-div2'), {
						center: myLatLng1,
						zoom: myzoom1
					});
					
					var marker = new google.maps.Marker({
						animation: google.maps.Animation.DROP,
						position: {lat:0,lng:0},
						draggable: false,
						map: map1,
						icon: {
							url: "../assets/img/incidencias/pin-mapa-incidencias.svg",
							scaledSize: new google.maps.Size(39, 72)
						},
					});
					
					google.maps.event.addListener(map1, 'click', function(event) {
						placeMarker(event.latLng);
						$('#txtlat').html(event.latLng.lat().toFixed(7));
						$('#txtlng').html(event.latLng.lng().toFixed(7));
					});
					
					google.maps.event.addListener(marker, 'dragend', function(evt)
					{
						
						$('#txtlat').html(evt.latLng.lat().toFixed(7));
						$('#txtlng').html(evt.latLng.lng().toFixed(7));
					});
					
					function placeMarker(location) {
						marker.setPosition(location)
						$('#txtlat').val(location.lat().toFixed(7));
						$('#txtlng').val(location.lng().toFixed(7));
					}
					
				}
			</script>
			
			<script>
				$('#subir').click(function () {
					
					function validateEmail(email)
					{
						var re = /\S+@\S+\.\S+/;
						return re.test(email);
					}
					
					var nombre = $('#nombre').val();
					var autor = $('#autor').val();
					var email = $('#email').val();
					var lugar = $('#lugar').val();
					var categoria = $('#categoria').val();
					var descripcion = $('#descripcion').val();
					var txtlat = $('#txtlat').val();
					var txtlng = $('#txtlng').val();
					
					var file1 = $('#file1').val();
					var file2 = $('#file2').val();
					var file3 = $('#file3').val();
					
					var fd = new FormData();
					var f1 = $('#file1')[0].files;
					var f2 = $('#file2')[0].files;
					var f3 = $('#file3')[0].files;
					
					if (file1 != '') {
						if (f1[0].size > 2000000) {
							alert('Foto 1 muy grande. No debe superar los  2mb');
							return false;
						}
					}
					
					if (file2 != '') {
						if (f2[0].size > 2000000) {
							alert('Foto 2 muy grande. No debe superar los  2mb');
							return false;
						}
					}
					
					if (file3 != '') {
						if (f3[0].size > 2000000) {
							alert('Foto 3 muy grande. No debe superar los  2mb');
							return false;
						}
					}
					
					if (nombre == '') {
						alert("Ingrese Título");
						return false;
					}
					
					if (email != '' && !validateEmail(email)) {
						alert("E-mail invalido");
						return false;
					}
					
					if (lugar == '') {
						alert("Ingrese Lugar");
						return false;
					}
					
					if (categoria == '') {
						alert("Ingrese Categoría");
						return false;
					}
					
					if (descripcion == '') {
						alert("Ingrese Descripción");
						return false;
					}
					
					if (txtlat == '' || txtlng == '' ) {
						alert("Ingrese Ubicación Valida");
						return false;
					}
					
					fd.append('file1',f1[0]);
					fd.append('file2',f2[0]);
					fd.append('file3',f3[0]);
					fd.append('nombre',nombre);
					fd.append('autor',autor);
					fd.append('email',email);
					fd.append('lugar',lugar);
					fd.append('categoria',categoria);
					fd.append('descripcion',descripcion);
					fd.append('txtlat',txtlat);
					fd.append('txtlng',txtlng);
					
					
					$.ajax({
						url: "../api/add-incident.php",
						type: 'post',
						data: fd,
						contentType: false,
						processData: false,
						success: function(output){
							var data = JSON.parse(output);
							if (data.status == 1) {
								$('#allright').modal('show');
								
							} else if (data.status == 0) {
								alert(data.error);
							}
						},
						error: function(output,e,f){
							console.log(e);
						}
					});
				})
				
				$('#closemodal').click(function () {
					location.reload();
				})
			</script>
		<?php
			} else {
		?>
			
			<script>
				$('#backlink').click(function () {
					history.back();
				})
				var map;
				
				function initMap() {
					var myzoom = 11;
					var myLatLng = {
						lat: <?php echo $Lat ?>,
						lng: <?php echo $Lng ?>
					};
					map = new google.maps.Map(document.getElementById('google-map-div'), {
						center: myLatLng,
						zoom: myzoom
					});
					var markers = []; //some array;
					
					var myLatLng = {
						lat: <?php echo $Lat ?>,
						lng: <?php echo $Lng ?>
					};
					var marker = new google.maps.Marker({
						animation: google.maps.Animation.DROP,
						position: myLatLng,
						draggable: false,
						map: map,
						icon: {
							url: "../assets/img/incidencias/pin-mapa-incidencias.svg",
							scaledSize: new google.maps.Size(39, 72)
						},
					});
					
					markers.push(marker);
					
				}
			</script>
			<?php
		}
	?>
	
	
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnydyACjDEVvZCe2B3zs23KyD_Yf5YWIw&libraries=places&callback=initMap" async defer></script>
	
	<script src="../assets/js/monitor.js"></script>
	
	<!-- GALLERIA -->
	<script src="../assets/dist/js/lightbox-plus-jquery.min.js"></script>

</body>

</html>