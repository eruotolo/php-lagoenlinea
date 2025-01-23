<style>
.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: #FFA534;
    display: inline-block;
	padding: 5px 10px 5px 10px;
	margin-left:10px
}

.inputfile:focus + label,
.inputfile + label:hover {
    background-color: #FF8C24;
}

.inputfile + label {
	cursor: pointer; /* "hand" cursor */
}
.inputfile:focus + label {
	outline: 1px dotted #000;
	outline: -webkit-focus-ring-color auto 5px;
}
.inputfile + label * {
	pointer-events: none;
}
</style>
<?php
	if (!empty($_GET['year']) && !empty($_GET['cicle'])) { 
		$y = $_GET['year'];
		$c = $_GET['cicle'];
		$sql1a = "SELECT * FROM `metagenomica` WHERE Year = {$_GET['year']} AND Cicle = {$_GET['cicle']}";			
		$result=mysql_query($sql1a) or die();
		$images = array();
		while ($row = mysql_fetch_assoc($result)) {
			$t = $row['Type'];
			$images[$y][$c][$t] = $row['ImagePath'];
		}

		$sql1a = "SELECT * FROM `metagenomica-tablas` WHERE Year = {$_GET['year']} AND Cicle = {$_GET['cicle']}";			
		$result=mysql_query($sql1a) or die();
		//$images = array();
		while ($row = mysql_fetch_assoc($result)) {
			$FilePath1 = $row['Tabla1'];
			$FilePath2 = $row['Tabla2'];
		}
		
		switch ($c) {
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
?>
		<div class="container-fluid">
			<div class="header">
				<div style='float:left'>
					<h3 style='padding:0;margin:0'>Año: <?php echo $y ?></h3>
					<h4 style='padding:0;margin:0;font-size:16px'>Mes: <?php echo $mes ?></h4>	
				</div>
				<div style='float:right'>
											<a href='index.php?userid=<?php echo $userid ?>&section=metagenomica-view' class="btn btn-fill btn-wd btn-warning noblock" id='export-excel'>
												<span class="btn-label">
													<i class="fa fa-file-excel-o"></i>
												</span>
												Otra Fecha
											</a>
				</div>
				<div style='clear:both;margin-top:20px'></div>													
			</div>		

			<div class='row' style='margin-top:20px'>
				<div class="col-md-4">
					<div class="card">
						<div class="header">
							<div style='float:left'>
								Ubicación
							</div>
							<div style='float:right'>
								<a href='index.php?userid=<?php echo $_GET['userid']?>&section=metagenomica-add&year=<?php echo $_GET['year'] ?>&cicle=<?php echo $_GET['cicle'] ?>&type=1&back=y' class="btn btn-social btn-fill btn-round btn-stumbleupon"><i class='fa fa-pencil'></i></a>
								<button class="btn btn-social btn-fill btn-round btn-stumbleupon deleteimage" year='<?php echo $_GET['year'] ?>' cicle='<?php echo $_GET['cicle'] ?>' type='1'><i class='fa fa-times'></i></button>
							</div>
							<div style='clear:both;margin-top:20px'></div>													
						</div>	
						<div class="content" style='padding:10px;clear:both;height:300px'>
							<?php
								if ($images[$y][$c][1] <> '') {
							?>
								<img style='width:100%;height:100%;object-fit:cover ' src='<?php echo "api/{$images[$y][$c][1]}" ?>'>
							<?php
								} else {
							?>
								<div style='text-align: center;
									  margin-top:120px'>
									No hay imagen
								</div>							
							<?php
								}
							?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="header">
							<div style='float:left'>
								Origen
							</div>
							<div style='float:right'>
								<a href='index.php?userid=<?php echo $_GET['userid']?>&section=metagenomica-add&year=<?php echo $_GET['year'] ?>&cicle=<?php echo $_GET['cicle'] ?>&type=2&back=y' class="btn btn-social btn-fill btn-round btn-stumbleupon"><i class='fa fa-pencil'></i></a>
								<button class="btn btn-social btn-fill btn-round btn-stumbleupon deleteimage" year='<?php echo $_GET['year'] ?>' cicle='<?php echo $_GET['cicle'] ?>' type='2'><i class='fa fa-times'></i></button>
							</div>
							<div style='clear:both;margin-top:20px'></div>													
						</div>	
						<div class="content" style='padding:10px;clear:both;height:300px'>
							<?php
								if ($images[$y][$c][2] <> '') {
							?>
								<img style='width:100%;height:100%;object-fit:cover ' src='<?php echo "api/{$images[$y][$c][2]}" ?>'>
							<?php
								} else {
							?>
								<div style='text-align: center;
									  margin-top:120px'>
									No hay imagen
								</div>							
							<?php
								}
							?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="header">
							<div style='float:left'>
								Taxonomía
							</div>
							<div style='float:right'>
								<a href='index.php?userid=<?php echo $_GET['userid']?>&section=metagenomica-add&year=<?php echo $_GET['year'] ?>&cicle=<?php echo $_GET['cicle'] ?>&type=3&back=y' class="btn btn-social btn-fill btn-round btn-stumbleupon"><i class='fa fa-pencil'></i></a>
								<button class="btn btn-social btn-fill btn-round btn-stumbleupon deleteimage" year='<?php echo $_GET['year'] ?>' cicle='<?php echo $_GET['cicle'] ?>' type='3'><i class='fa fa-times'></i></button>
							</div>
							<div style='clear:both;margin-top:20px'></div>													
						</div>	
						<div class="content" style='padding:10px;clear:both;height:300px'>
							<?php
								if ($images[$y][$c][3] <> '') {
							?>
								<img style='width:100%;height:100%;object-fit:cover ' src='<?php echo "api/{$images[$y][$c][3]}" ?>'>
							<?php
								} else {
							?>
								<div style='text-align: center;
									  margin-top:120px'>
									No hay imagen
								</div>							
							<?php
								}
							?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="header">	
							<div style='float:left'>
								Tabla Taxonómica
							</div>
							<div style='float:right'>
								<button class="btn btn-social btn-fill btn-round btn-stumbleupon deletetax1" year='<?php echo $_GET['year'] ?>' cicle='<?php echo $_GET['cicle'] ?>' type='1'><i class='fa fa-times'></i></button>
							</div>							
						</div>	
						<div class="content" style='padding:10px;clear:both;height:300px'>
							<?php 
								if ($FilePath1 <> '') {
									$temp= explode('.',$FilePath1);
									$extension = end($temp);														
									echo "<div style='margin-left:10px'><img src='images/vector-files-icon.jpg' style='width:50px;height:50px;object-fit:cover'><br>Archivo $extension</div>";
								}
							?>		
							<br>
							<input type="file" id="file1" name="file1" class='inputfile'/>
							<label for="file1">Elegir Archivo</label>
						</div>
					</div>
				</div>				
				<div class="col-md-4">
					<div class="card">
						<div class="header">	
							<div style='float:left'>
								Tabla de Capacidades Func.
							</div>
							<div style='float:right'>
								<button class="btn btn-social btn-fill btn-round btn-stumbleupon deletetax2" year='<?php echo $_GET['year'] ?>' cicle='<?php echo $_GET['cicle'] ?>' type='1'><i class='fa fa-times'></i></button>
							</div>							
						</div>						
						<div class="content" style='padding:10px;clear:both;height:300px'>
							<?php 
								if ($FilePath2 <> '') {
									$temp= explode('.',$FilePath2);
									$extension = end($temp);														
									echo "<div style='margin-left:10px'><img src='images/vector-files-icon.jpg' style='width:50px;height:50px;object-fit:cover'><br>Archivo $extension</div>";
								}
							?>	
							<br>
							<input type="file" id="file2" name="file2" class='inputfile' />
							<label for="file2">Elegir Archivo</label>
						</div>
					</div>
				</div>
				
			</div>
		</div>
<?php
	} else {
		$sql1a = "SELECT * FROM `metagenomica` ORDER BY Year DESC, Cicle ASC";			
		$result=mysql_query($sql1a) or die('{"error"=>"Error actualizando la base de datos","status"=>"0"}');	
		$years = array();
		$cicles = array();
		$tipos = array();
		while ($row = mysql_fetch_assoc($result)) {
			$year = $row['Year'];
			$years[] = $year;
			$cicle = $row['Cicle'];
			$cicles[$year][] = $cicle;
			$tipo = $row['Cicle'];
			$tipos[$year][$cicle][] = $tipo;		
		}
	}
?>

<script type="text/javascript">
    $(document).ready(function() {
		
		$('.deleteimage').click(function () {
			var type = $(this).attr('type');
			var cicle = $(this).attr('cicle');
			var year = $(this).attr('year');
			$.ajax({
			  url: 'jquery/delete-img.php',
			  type: 'post',
			  data: {
				type: type,
				cicle: cicle,
				year: year,
				t: 'metagenomica'
			  },
			  success: function(response){
					console.log(response);
					var data = JSON.parse(response);
					if (data.status == 1) {
						window.location.reload();							
					} else {
						swal(
						  'Error',
						  data.error,
						  'error'
						)								
					}
			  },
			});
		})	

		$('.deletetax1').click(function () {
			var type = $(this).attr('type');
			var cicle = $(this).attr('cicle');
			var year = $(this).attr('year');
			$.ajax({
			  url: 'jquery/delete-tax1.php',
			  type: 'post',
			  data: {
				type: type,
				cicle: cicle,
				year: year,
				t: 'metagenomica'
			  },
			  success: function(response){
					console.log(response);
					var data = JSON.parse(response);
					if (data.status == 1) {
						window.location.reload();							
					} else {
						swal(
						  'Error',
						  data.error,
						  'error'
						)								
					}
			  },
			});
		})	

		$('.deletetax2').click(function () {
			var type = $(this).attr('type');
			var cicle = $(this).attr('cicle');
			var year = $(this).attr('year');
			$.ajax({
			  url: 'jquery/delete-tax2.php',
			  type: 'post',
			  data: {
				type: type,
				cicle: cicle,
				year: year,
				t: 'metagenomica'
			  },
			  success: function(response){
					console.log(response);
					var data = JSON.parse(response);
					if (data.status == 1) {
						window.location.reload();							
					} else {
						swal(
						  'Error',
						  data.error,
						  'error'
						)								
					}
			  },
			});
		})		
		
		$("#file1").change(function(){
			if ($(this).val() != '') {
					var fd = new FormData();
					var files1 = $('#file1')[0].files;
					fd.append('file1',files1[0]);
					fd.append('ciclo',<?php echo $c ?>);
					fd.append('year',<?php echo $y ?>);					
				   $.ajax({
					  url: 'api/saveTable1.php',
					  type: 'post',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(response){
							var data = JSON.parse(response);

							if (data.status == 1) {
									swal(
									  'Exito',
									  'La tabla fue actualizada correctamente',
									  'success'
									).then(function () {
										<?php 
											if ($_GET['back'] == 'y') {
										?>
											window.location.href = "index.php?userid=<?php echo $userid ?>&section=metagenomica-view&year=<?php echo $_GET['year'] ?>&cicle=<?php echo $_GET['cicle'] ?>";
										<?php
											} else {
										?>
											window.location.reload();
										<?php
											} 
										?>											
									})														
							} else {
								swal(
								  'Error',
								  data.error,
								  'error'
								)								
							}
					  },
				   });
			}
		});
		
		$("#file2").change(function(){
			if ($(this).val() != '') {
					var fd = new FormData();
					var files2 = $('#file2')[0].files;
					fd.append('file2',files2[0]);
					fd.append('ciclo',<?php echo $c ?>);
					fd.append('year',<?php echo $y ?>);	
					
				   $.ajax({
					  url: 'api/saveTable2.php',
					  type: 'post',
					  data: fd,
					  contentType: false,
					  processData: false,
					  success: function(response){
							var data = JSON.parse(response);

							if (data.status == 1) {
									swal(
									  'Exito',
									  'La tabla fue actualizada correctamente',
									  'success'
									).then(function () {
										<?php 
											if ($_GET['back'] == 'y') {
										?>
											window.location.href = "index.php?userid=<?php echo $userid ?>&section=metagenomica-view&year=<?php echo $_GET['year'] ?>&cicle=<?php echo $_GET['cicle'] ?>";
										<?php
											} else {
										?>
											window.location.reload();
										<?php
											} 
										?>											
									})														
							} else {
								swal(
								  'Error',
								  data.error,
								  'error'
								)								
							}
					  },
				   });
			}
		});		
	
<?php
	if (empty($_GET['year'])) {
?>		
		swal({
				title: '<img src="../assets/img/logo_img.svg" style="height:70px">',
				html: '<div class="content">' +
								'<div class="row" style="margin-top:20px">' +
									'<div class="col-md-12">' +
										'<h4 class="title" style="text-align:left;margin-top:10px;margin-bottom:0">Seleccione Año</h4>' + 
										'<div class="form-group">' +
											'<select data-container="body" id="year" class="selectpicker" data-title="<?php echo $lng_select ?>" data-style="btn-default btn-block" data-menu-style="dropdown-blue">' +
												<?php
													foreach (array_unique($years) as $ano) {
														echo "'<option value=\"$ano\">$ano</option>' +";
													}
												?>
											'</select>' +
										'</div>' +
									'</div>' +										
						'</div>' +
					'</div>',	
				showCancelButton: false,
				allowOutsideClick: false,				
				confirmButtonClass: 'btn btn-success btn-fill noblock',
				cancelButtonClass: 'btn btn-danger btn-fill noblock',
				focusConfirm: false,
				confirmButtonText:'<i class="fa fa-check"></i>',
				confirmButtonAriaLabel: 'Continuar',
				cancelButtonText:'<i class="fa fa-times"></i>',
				cancelButtonAriaLabel: 'Salir',	
				buttonsStyling: false,	
				preConfirm: function (output) {	
					year = $('#year option:selected').val();
					if (year == '') {								
						if (year == '') {
							swal.showValidationError(
								'Ingrese Año'
							)
						}						
					} else {
						window.location = "index.php?userid=<?php echo $userid ?>&section=metagenomica-view&year=" + year;				
					}
				}			
			});	
			if($(".selectpicker").length != 0){
				$(".selectpicker").selectpicker();
			}	
<?php
	} else if (empty($_GET['cicle'])) {
?>		
		swal({
				title: '<img src="../assets/img/logo_img.svg" style="height:70px">',
				html: '<div class="content">' +
								'<div class="row" style="margin-top:20px">' +
									'<div class="col-md-12">' +
										'<h4 class="title" style="text-align:left;margin-top:10px;margin-bottom:0">Seleccione Mes</h4>' + 
										'<div class="form-group">' +
											'<select data-container="body" id="cicle" class="selectpicker" data-title="<?php echo $lng_select ?>" data-style="btn-default btn-block" data-menu-style="dropdown-blue">' +
												<?php
													$getyear = $_GET['year'];
													foreach (array_unique($cicles[$getyear]) as $ciclo) {
														switch ($ciclo) {
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
																$mes = "Septiembre";
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
														echo "'<option value=\"$ciclo\">$mes</option>' +";
													}
												?>
											'</select>' +
										'</div>' +
									'</div>' +										
						'</div>' +
					'</div>',	
				showCancelButton: false,
				allowOutsideClick: false,				
				confirmButtonClass: 'btn btn-success btn-fill noblock',
				cancelButtonClass: 'btn btn-danger btn-fill noblock',
				focusConfirm: false,
				confirmButtonText:'<i class="fa fa-check"></i>',
				confirmButtonAriaLabel: 'Continuar',
				cancelButtonText:'<i class="fa fa-times"></i>',
				cancelButtonAriaLabel: 'Salir',	
				buttonsStyling: false,	
				preConfirm: function (output) {	
					cicle = $('#cicle option:selected').val();
					if (cicle == '') {								
						if (cicle == '') {
							swal.showValidationError(
								'Ingrese Ciclo'
							)
						}						
					} else {
						window.location = "index.php?userid=<?php echo $userid ?>&section=metagenomica-view&year=<?php echo $getyear ?>&cicle=" + cicle;				
					}
				}			
			});	
			if($(".selectpicker").length != 0){
				$(".selectpicker").selectpicker();
			}	
<?php
	}
?>

	});
</script>