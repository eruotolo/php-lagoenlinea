<style>
.errorselect {
  background-color: #F5CBCB;
}
.successselect {
  background-color: green;
}
</style>         
			<div class="container-fluid">
                <div class="row">			
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title <?php echo $title_color ?>">Crear Nueva Incidencia</h4>
                            </div>
                            <div class="content">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Título <star>*</star></label>
                                                <input id='nombre' name="nombre" type="text" class="form-control" placeholder="Nombre de la incidencia">
                                            </div>
                                        </div>
									</div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Autor <small>(Opcional)</small></label>
                                                <input id='autor' name="autor" type="text" class="form-control" placeholder="Nombre del Autor">
                                            </div>
                                        </div>
									</div>	
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Correo Electronico <small>(Opcional)</small></label>
                                                <input id='email' name="email" type="text" class="form-control" placeholder="E-mail">
                                            </div>
                                        </div>
									</div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Lugar <star>*</star></label>
                                                <input id='lugar' name="lugar" type="text" class="form-control" placeholder="Lugar de la incidencia">
                                            </div>
                                        </div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Categoria <star>*</star></label>
												<select name="categoria" class="selectpicker" data-title="Seleccionar" data-style="btn-default btn-block" data-menu-style="dropdown-blue" id='categoria'>
													<option value="Vertido/Descarga">Vertido/Descarga</option>
													<option value="Floracion">Floración</option>
													<option value="Turbidez">Turbidez</option>
													<option value="Residuos Sólidos">Residuos Sólidos</option>
													<option value="Relleno">Relleno</option>
												</select>
											</div>													
										</div>
									</div>																	
									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Descripción <star>*</star></label>
                                                <textarea id='descripcion' name='descripcion' rows="3" class="form-control" placeholder="Descripcion"></textarea>
                                            </div>
                                        </div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Estado <star>*</star></label>
												<select name="estado" class="selectpicker" data-title="Seleccionar" data-style="btn-default btn-block" data-menu-style="dropdown-blue" id='estado'>
													<option value="Borrador">Borrador</option>
													<option value="Publicado" selected>Publicado</option>
												</select>
											</div>													
										</div>
									</div>									
									<div class="row" style='margin-top:20px'>
										<div class="col-md-12">
											<legend style='margin-bottom:20px' class='text-warning'>Foto 1</legend>
											<input type="file" id="file1" name="file1" />
										</div>																				
									</div>	
									<div class="row" style='margin-top:20px'>
										<div class="col-md-12">
											<legend style='margin-bottom:20px' class='text-warning'>Foto 2</legend>
											<input type="file" id="file2" name="file2" />
										</div>																				
									</div>
									<div class="row" style='margin-top:20px'>
										<div class="col-md-12">
											<legend style='margin-bottom:20px' class='text-warning'>Foto 3</legend>
											<input type="file" id="file3" name="file3" />
										</div>																				
									</div>									
									<div class="row" style='display:none'>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Año de Publicacion <star>*</star></label>
                                                <input id='fecha' name="fecha" type="text" class="form-control datepicker" placeholder="Fecha de Publicacion">
                                            </div>
                                        </div>	
									</div>	
									<div class="row" style='margin:20px 5px 20px 5px'>
										<div id="google-map-div2" style="width: 100%; height: 400px"></div>
									</div>
									<input type='hidden' id='txtlat'>
									<input type='hidden' id='txtlng'>									
                                    <button id='subir' type="submit" class="btn noblock <?php echo $buttons ?> btn-fill pull-right btn-round"><?php echo $lng_insert ?></button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script type="text/javascript">
	$(document).ready(function(){
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
			var estado = $('#estado').val();
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
					swal(
					  'Error',
					  'Foto 1 muy grande. No debe superar los  2mb',
					  'error'
					)
					return false;					
				}
			}
			
			if (file2 != '') {
				if (f2[0].size > 2000000) {
					swal(
					  'Error',
					  'Foto 2 muy grande. No debe superar los  2mb',
					  'error'
					)
					return false;
				}
			}

			if (file3 != '') {
				if (f3[0].size > 2000000) {
					swal(
					  'Error',
					  'Foto 3 muy grande. No debe superar los  2mb',
					  'error'
					)					
					return false;
				}
			}			
			
			if (nombre == '') {
				swal(
				  'Error',
				  'Ingrese Nombre',
				  'error'
				)				
				return false;
			}
			
			if (email != '' && !validateEmail(email)) {
				swal(
				  'Error',
				  'E-mail invalido',
				  'error'
				)				
				return false;				
			}
			
			if (lugar == '') {
				swal(
				  'Error',
				  'Ingrese Lugar',
				  'error'
				)
				return false;
			}	

			if (categoria == '') {
				swal(
				  'Error',
				  'Ingrese Categoria',
				  'error'
				)				
				return false;
			}

			if (descripcion == '') {
				swal(
				  'Error',
				  'Ingrese Descripcion',
				  'error'
				)				
				return false;
			}			

			if (txtlat == '' || txtlng == '' ) {
				swal(
				  'Error',
				  'Ingrese Ubicacion Valida',
				  'error'
				)				
				return false;
			}	

			fd.append('file1',f1[0]);
			fd.append('file2',f2[0]);
			fd.append('file3',f3[0]);
			fd.append('nombre',nombre);	
			fd.append('autor',autor);
			fd.append('email',email);
			fd.append('lugar',lugar);
			fd.append('estado',estado);
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
						swal(
						  'Exito',
						  'Incidente Ingresado.',
						  'success'
						).then(function() {
							window.location.href = "index.php?userid=<?php echo $_GET['userid'] ?>&section=incidentes";
						});						
						
					} else if (data.status == 0) {
						alert(data.error);
					} 
				},				
				error: function(output,e,f){
					console.log(e);
				}
			});	
			return false;
		})
	
		 $('#fecha').datetimepicker({
			format: 'YYYY-MM-DD',
			locale: 'es',		
			widgetParent: "body",				
			icons: {
				time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-chevron-up",
				down: "fa fa-chevron-down",
				previous: 'fa fa-chevron-left',
				next: 'fa fa-chevron-right',
				today: 'fa fa-screenshot',
				clear: 'fa fa-trash',
				close: 'fa fa-remove',
			}
		 });
		 
		 

	});
</script>
    <script>
        var map;

        function initMap() {
			var myzoom = 10;
			var myLatLng = {
				lat: -41.3207871,
				lng: -72.9656381
			};				
 			map = new google.maps.Map(document.getElementById('google-map-div2'), {
                center: myLatLng,
                zoom: myzoom
            }); 

			map.setOptions({draggable: true, zoomControl: true, scrollwheel: false, disableDoubleClickZoom: true});
			
			var marker = new google.maps.Marker({
				animation: google.maps.Animation.DROP,
				position: {lat:0,lng:0},
				draggable: false,
				map: map,
				icon: {
					url: "../asset/img/incidencias/pin-mapa-incidencias.svg",
					scaledSize: new google.maps.Size(39, 72)
				},
			});			

			google.maps.event.addListener(map, 'click', function(event) {
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnydyACjDEVvZCe2B3zs23KyD_Yf5YWIw&libraries=places&callback=initMap" async defer></script>
