<?php
	if (!empty($_GET['year']) && !empty($_GET['cicle'])) { 
		$y = $_GET['year'];
		$c = $_GET['cicle'];
		$sql1a = "SELECT * FROM `teledeteccion` WHERE Year = {$_GET['year']} AND Cicle = {$_GET['cicle']}";			
		$result=mysql_query($sql1a) or die();
		$images = array();
		while ($row = mysql_fetch_assoc($result)) {
			$t = $row['Type'];
			$images[$y][$c][$t] = $row['ImagePath'];
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
?>
		<div class="container-fluid">
			<div class="header">
				<div style='float:left'>
					<h3 style='padding:0;margin:0'>Año: <?php echo $y ?></h3>
					<h4 style='padding:0;margin:0;font-size:16px'>Mes: <?php echo $mes ?></h4>	
				</div>
				<div style='float:right'>
											<a href='index.php?userid=<?php echo $userid ?>&section=teledeteccion-view' class="btn btn-fill btn-wd btn-warning noblock" id='export-excel'>
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
								Atenuación Difusa
							</div>
							<div style='float:right'>
								<a href='index.php?userid=<?php echo $_GET['userid']?>&section=teledeteccion-add&year=<?php echo $_GET['year'] ?>&cicle=<?php echo $_GET['cicle'] ?>&type=1&back=y' class="btn btn-social btn-fill btn-round btn-stumbleupon"><i class='fa fa-pencil'></i></a>
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
								Material en Suspensión
							</div>
							<div style='float:right'>
								<a href='index.php?userid=<?php echo $_GET['userid']?>&section=teledeteccion-add&year=<?php echo $_GET['year'] ?>&cicle=<?php echo $_GET['cicle'] ?>&type=2&back=y' class="btn btn-social btn-fill btn-round btn-warning"><i class='fa fa-pencil'></i></a>
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
								Clorofila
							</div>
							<div style='float:right'>
								<a href='index.php?userid=<?php echo $_GET['userid']?>&section=teledeteccion-add&year=<?php echo $_GET['year'] ?>&cicle=<?php echo $_GET['cicle'] ?>&type=3&back=y' class="btn btn-social btn-fill btn-round btn-stumbleupon"><i class='fa fa-pencil'></i></a>
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
			</div>
		</div>
<?php
	} else {
		$sql1a = "SELECT * FROM `teledeteccion` ORDER BY Year DESC, Cicle ASC";			
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
				t: 'teledeteccion'
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
						window.location = "index.php?userid=<?php echo $userid ?>&section=teledeteccion-view&year=" + year;				
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
						window.location = "index.php?userid=<?php echo $userid ?>&section=teledeteccion-view&year=<?php echo $getyear ?>&cicle=" + cicle;				
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