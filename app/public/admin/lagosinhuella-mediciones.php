<?php
	$sql="SELECT * FROM puntos_mediciones WHERE ID = '{$_GET['puntoid']}'";
	$result=mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)) {
		$Nombre = $row['Nombre'];
	}
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card ">
				<div class="header pull-left">
                    <a href='index.php?userid=<?php echo $userid ?>&section=lagosinhuella' style="margin-bottom: 30px; background-color: #1573ac; display: inline-block; padding: 4px 15px 4px 15px; border-radius: 20px "><p class="category" style="color: white">< Volver</p></a>
					<h4 class="title <?php echo $title_color ?>">Punto de Muestreo</h4>
					<p class="category" style="font-size: 18px; font-weight: bold; color: #1573ac;"><?php echo $Nombre ?></p>

				</div>
				<div id="toolbar" class="btn-group pull-right" style='margin:15px'>
					<a id='addrow' rel="tooltip" title="Nuevo muestreo" type="button" class="btn btn-warning btn-fill btn-social btn-round" href='#'>
						<i class="fa fa-plus" style='color:#ffffff'></i>
					</a>
				</div>					
				<div class="content" >
					<div class="row">
						<div class="col-md-12">								
							<table id="bootstrap-table" class="table" style='margin-top:20px'>
								<thead>
									<th data-field="state" data-checkbox="true" ></th>
									<th data-field="id" data-sortable="true" style='width:50px'>ID</th>
									<th data-field="name" data-sortable="true" style='width:50%'>Fecha</th>
									<th data-field="name" data-sortable="true" style='width:50%'>Valor</th>
									<th data-field="actions" class="td-actions text-right" style='width:50px'></th>
								</thead>
								<tbody>
								<?php
									$sql="SELECT * FROM puntos_muestras WHERE PuntoID = '{$_GET['puntoid']}' ORDER BY Fecha DESC";
									$result=mysql_query($sql);
									while ($row = mysql_fetch_assoc($result)) {
										echo "<tr>
													<td></td>
													<td>{$row['ID']}</td>
													<td>{$row['Fecha']}</td>
													<td>{$row['Valor']}</td>
													<td>
														<a href='#' class='editrow' rowid='{$row['ID']}' fecha='{$row['Fecha']}' valor='{$row['Valor']}'><i class='fa fa-edit text-warning' style='font-size:25px'></i></a>
														&nbsp;&nbsp;
														<a href='#' class='deleterow' rowid='{$row['ID']}'><i class='fa fa-times-circle text-danger' style='font-size:25px'></i></a>
													</td>
												</tr>";
									}
								?>
								</tbody>
							</table>
							<div style='clear:both'></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('.editrow').click(function () {
		var fecha = $(this).attr('fecha');
		var valor = $(this).attr('valor');
		var rowid = $(this).attr('rowid');
		swal({
				title: '<div style="background-color:#1573AC;padding:10px 0 10px 0;color:#ffffff"><span style="font-weight:normal">Editar Muestreo</span></div>',
				html: '<div class="content" style="height:300px">' +
								'<div class="row" style="margin-top:20px">' +
									'<div class="col-md-12">' +
										'<h4 class="title" style="text-align:left;margin-top:10px;margin-bottom:0">Fecha</h4>' + 
										'<div class="form-group">' +
											'<input value="' + fecha + '" id="fecha" type="text" value="" placeholder="AAAA-MM-DD" class="form-control">' +
										'</div>' +
									'</div>' +									
									'<div class="col-md-12">' +
										'<h4 class="title" style="text-align:left;margin-top:10px;margin-bottom:0">Valor</h4>' + 
										'<div class="form-group">' +
											'<input value="' + valor + '" id="valor" type="text" value="" placeholder="Numero" class="form-control">' +
										'</div>' +
									'</div>' +																													
						'</div>' +
					'</div>',	
				showCancelButton: true,
				confirmButtonText: 'Enviar',						
				confirmButtonClass: 'btn btn-success btn-fill btn-round noblock',
				cancelButtonClass: 'btn btn-danger btn-fill btn-round noblock',
				buttonsStyling: false,
				preConfirm: function (output) {
					var fecha = $('#fecha').val();
					var valor = $('#valor').val();
					if (fecha == '' || !isNumber(valor)) {								
						if (!isNumber(valor)) {
							swal.showValidationError(
								'Ingrese Valor Valido'
							)
						}							
						if (fecha == '') {
							swal.showValidationError(
								'Ingrese Fecha'
							)
						}						
					} else {
						$.ajax({
						type: "POST",
						url: "jquery/update-medicion.php",
						data: {
							fecha: fecha,
							valor: valor,
							rowid: rowid
							
						},
						cache: false,
						success: function(output){
							location.reload();						
						}
						});						
					}
				},		
			});
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
	
	$('.deleterow').click(function () {
		var rowid = $(this).attr('rowid');
		swal({
		  title: '¿Estas seguro que deseas eliminar la medicion?',
		  text: "Toda la información será borrada y no podrá ser recuperada",
		  type: 'error',
		  showCancelButton: true,
		  confirmButtonText: 'Si, eliminala',
		  cancelButtonText: 'No, cancela',
		  confirmButtonClass: 'btn btn-danger btn-fill',
		  cancelButtonClass: 'btn btn-default btn-fill',
		  buttonsStyling: false
		}).then(function (result) {
		  if (result.value) {
			
			$.ajax({
			type: "POST",
			url: "jquery/delete-medicion.php",
			data: {id: rowid},
			cache: false,
			success: function(output){
				location.reload();							
			}
			});						
		  // result.dismiss can be 'cancel', 'overlay',
		  // 'close', and 'timer'
		  } else if (result.dismiss === 'cancel') {
			swal(
			  'Cancelado',
			  'La medicion NO fue eliminada',
			  'error'
			)
		  }
		});
	});	
	
	function isNumber(n) {
	  return !isNaN(parseFloat(n)) && isFinite(n);
	}	
	
	$('#addrow').click(function () {
		swal({
				title: '<div style="background-color:#1573AC;padding:10px 0 10px 0;color:#ffffff"><span style="font-weight:normal">Nuevo Muestreo</span></div>',
				html: '<div class="content" style="height:300px">' +
								'<div class="row" style="margin-top:20px">' +
									'<div class="col-md-12">' +
										'<h4 class="title" style="text-align:left;margin-top:10px;margin-bottom:0">Fecha</h4>' + 
										'<div class="form-group">' +
											'<input  id="fecha" type="text" value="" placeholder="AAAA-MM-DD" class="form-control">' +
										'</div>' +
									'</div>' +									
									'<div class="col-md-12">' +
										'<h4 class="title" style="text-align:left;margin-top:10px;margin-bottom:0">Valor</h4>' + 
										'<div class="form-group">' +
											'<input  id="valor" type="text" value="" placeholder="Numero" class="form-control">' +
										'</div>' +
									'</div>' +																													
						'</div>' +
					'</div>',	
				showCancelButton: true,
				confirmButtonText: 'Enviar',						
				confirmButtonClass: 'btn btn-success btn-fill btn-round noblock',
				cancelButtonClass: 'btn btn-danger btn-fill btn-round noblock',
				buttonsStyling: false,
				preConfirm: function (output) {
					var fecha = $('#fecha').val();
					var valor = $('#valor').val();
					if (fecha == '' || !isNumber(valor)) {								
						if (!isNumber(valor)) {
							swal.showValidationError(
								'Ingrese Valor Valido'
							)
						}							
						if (fecha == '') {
							swal.showValidationError(
								'Ingrese Fecha'
							)
						}						
					} else {
						$.ajax({
						type: "POST",
						url: "jquery/add-medicion.php",
						data: {
							fecha: fecha,
							valor: valor,
							puntoid: '<?php echo $_GET['puntoid'] ?>'
							
						},
						cache: false,
						success: function(output){
							console.log(output);
							location.reload();						
						}
						});						
					}
				},		
			});
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
	})

	
	
	
});
</script>
			