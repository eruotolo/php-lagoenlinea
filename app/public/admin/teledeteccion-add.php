<style>
.errorselect {
  background-color: #F5CBCB;
}
.successselect {
  background-color: green;
}
</style>
<?php
	if (!empty($_GET['year']) && !empty($_GET['type'])) {
		$sql1a = "SELECT * FROM `teledeteccion` WHERE Year = {$_GET['year']} AND Type = {$_GET['type']} AND Cicle = {$_GET['cicle']}";			
		$result=mysql_query($sql1a) or die();
		$images = array();
		while ($row = mysql_fetch_assoc($result)) {
			//print_r($row);
			$fec = $row['Fecha'];
			$tit = $row['Titulo'];
			$ImagePath = $row['ImagePath'];
		}
	}
?>
<form id='form' novalidate="">     
			<div class="container-fluid" id='factura-body'>
                <div class="row">

                    <div class="col-md-12">
                        <div class="card ">
                            <div class="content">			
										<div class="row">
											<div class="col-md-12">
												<legend style='margin-bottom:20px' class='<?php echo $title_color ?>'>Información</legend>
												<div class='row'>
													<div class="col-md-6">
														<div class="form-group">
															<label>Año <star>*</star></label>
															<select data-size='6' name="year" class="selectpicker" data-title="Seleccionar" data-style="btn-default btn-block" data-menu-style="dropdown-blue" id='year'>
																<?php
																	$earliest_year = 2015;

																	foreach (range(date('Y'), $earliest_year) as $x) {
																		echo '<option value="'.$x.'">'.$x.'</option>';
																	}
																?>
															</select>
														</div>													
													</div>												
													<div class="col-md-6">
														<div class="form-group">
															<label>Mes <star>*</star></label>
															<select name="ciclo" class="selectpicker" data-size="7" data-title="Seleccionar" data-style="btn-default btn-block" data-menu-style="dropdown-blue" id='ciclo'>
																<option value="1" >Enero</option>
																<option value="2" >Febrero</option>
																<option value="3" >Marzo</option>
																<option value="4" >Abril</option>
																<option value="5" >Mayo</option>
																<option value="6" >Junio</option>
																<option value="7" >Julio</option>
																<option value="8" >Agosto</option>
																<option value="9" >Septiembre</option>
																<option value="10" >Octubre</option>
																<option value="11" >Noviembre</option>
																<option value="12" >Diciembre</option>
															</select>
														</div>													
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Tipo <star>*</star></label>
															<select name="tipo" class="selectpicker" data-title="Seleccionar" data-style="btn-default btn-block" data-menu-style="dropdown-blue" id='tipo'>
																<option value="1">Atenuacion Difusa</option>
																<option value="2">Material en Suspensión</option>
																<option value="3">Clorofila</option>
															</select>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label>Fecha</label>
															<input value='<?php echo $fec ?>' type="text" class="form-control datepicker" placeholder="Fecha" id='fecha' name='fecha'/>
														</div>	
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label>Satelite</label>
															<input value='<?php echo $tit ?>' type="text" class="form-control" placeholder="Satelite" id='lugar' name='lugar'/>
														</div>	
													</div>													
												</div>
											</div>												
										</div>
										<div class="row" style='margin-top:20px'>
											<div class="col-md-12">
												<legend style='margin-bottom:20px' class='<?php echo $title_color ?>'>Imagen</legend>
												<?php 
													if ($ImagePath <> '') {
														echo "<img src='api/$ImagePath' style='width:200px;height:200px;object-fit:cover;margin-bottom:20px;border:1px solid #cccccc'>";
													}
												?>
												
												<input type="file" id="file" name="file" />
											</div>
										</div>
										<div class="text-center" style='padding:10px'>
											<button type="button" id='uploadimage' class="noblock btn btn-warning btn-fill pull-right btn-round">Actualizar</button>
											<a href="index.php?userid=<?php echo $userid ?>&section=teledeteccion-view&year=<?php echo $_GET['year'] ?>&cicle=<?php echo $_GET['cicle'] ?>" class="noblock btn btn-info btn-fill pull-right btn-round" style='margin-right:5px'>Volver</a>
											<div class="clearfix"></div>							
										</div>								
										</div>
										</div>
									</form>		
<script type="text/javascript">
	$().ready(function(){
		
	<?php 
		if (!empty($_GET['year'])) {
	?>		
			$('#year').selectpicker('val',"<?php echo $_GET['year'] ?>");
			$('#year').selectpicker('refresh');			
	<?php
		}
	?>
	
	<?php 
		if (!empty($_GET['cicle'])) {
	?>		
			$('#ciclo').selectpicker('val',"<?php echo $_GET['cicle'] ?>");
			$('#ciclo').selectpicker('refresh');			
	<?php
		}
	?>

	<?php 
		if (!empty($_GET['type'])) {
	?>		
			$('#tipo').selectpicker('val',"<?php echo $_GET['type'] ?>");
			$('#tipo').selectpicker('refresh');			
	<?php
		}
	?>	
	
		$('.selectpicker').change(function () {
			var id = $(this).attr('id');
			if ($(this).val() == '') {
				$('*[data-id="'+id+'"]').addClass('errorselect');
			} else {
				$('*[data-id="'+id+'"]').removeClass('errorselect');
			}
		});
		
		
		$('#uploadimage').click(function () {
			var fecha = $('#fecha').val();
			var ciclo = $('#ciclo').val();
			var year = $('#year').val();
			var tipo = $('#tipo').val();
			var lugar = $('#lugar').val();
			var file = $('#file').val();
			
		

			if (ciclo == '' || year == '' || tipo == '') {
				/*if (fecha == '') {
					$('#fecha').addClass('error');
				} else {
					$('#fecha').removeClass('error');
				}*/
				if (ciclo == '') {
					$('*[data-id="ciclo"]').addClass('errorselect');
				} else {
					$('*[data-id="ciclo"]').removeClass('errorselect');
				}
				if (year == '') {
					$('*[data-id="year"]').addClass('errorselect');
				} else {
					$('*[data-id="year"]').removeClass('errorselect');
				}	
				if (tipo == '') {
					$('*[data-id="tipo"]').addClass('errorselect');
				} else {
					$('*[data-id="tipo"]').removeClass('errorselect');
				}	
			} else {
				
					var fd = new FormData();
					var files = $('#file')[0].files;
					if (files[0].size> 5000000) {
						swal(
						  'Error',
						  'Imagen muy grande. No debe superar los  5mb',
						  'error'
						);
						return false;
					}					
					// Check file selected or not
					//if(files.length > 0 ){
					   fd.append('file',files[0]);
					   fd.append('fecha',fecha);
						fd.append('ciclo',ciclo);
						fd.append('year',year);
						fd.append('tipo',tipo);
						fd.append('lugar',lugar);
						fd.append('type','teledeteccion');
					   $.ajax({
						  url: 'api/saveImage.php',
						  type: 'post',
						  data: fd,
						  contentType: false,
						  processData: false,
						  success: function(response){
							  
							  console.log(response);
								var data = JSON.parse(response);
								if (data.status == 1) {
									if (data.statusImage == 0) {
										swal(
										  'Error',
										  data.error,
										  'error'
										);
										return false;										
											
									} else {
										swal(
										  'Exito',
										  'La informacion fue salvada correctamente',
										  'success'
										).then(function () {
											<?php 
												if ($_GET['back'] == 'y') {
											?>
												window.location.href = "index.php?userid=<?php echo $userid ?>&section=teledeteccion-view&year=<?php echo $_GET['year'] ?>&cicle=<?php echo $_GET['cicle'] ?>";
											<?php
												} else {
											?>
												window.location.reload();
											<?php
												} 
											?>											
										})
									}						
								} else {
									swal(
									  'Error',
									  data.error,
									  'error'
									)								
								}
						  },
					   });
				/*	}else{
						swal(
						  'Error',
						  'Selecciona archivo',
						  'error'
						);
					}*/
			}
		})
		
         $('#fecha').datetimepicker({
			format: 'YYYY-MM-DD',
			locale: 'es',			
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-chevron-up",
                down: "fa fa-chevron-down",
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            }
         });		
	});
</script>
										