<style>
.errorselect {
  background-color: #F5CBCB;
}
.successselect {
  background-color: green;
}
</style>   
<?php
	$sql="SELECT * FROM `documentos-complementarios` WHERE ID = '{$_GET['id']}'";
	$result=mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)) {
		$Decripcion = $row['Decripcion'];
		$Titulo = $row['Titulo'];
		$Autores = $row['Autores'];
		$FechaPublicacion = $row['FechaPublicacion'];
		$CampoLink = $row['CampoLink'];
		$TipoRecurso = $row['TipoRecurso'];
	}
?>      
			<div class="container-fluid">
                <div class="row">			
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title <?php echo $title_color ?>">Editar</h4>
                            </div>
                            <div class="content">
                                <form action="index.php?userid=<?php echo $userid ?>&section=user-add" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Titulo <star>*</star></label>
                                                <input dbfield='Titulo' value='<?php echo $Titulo ?>' id='titulo' name="titulo" type="text" class="form-control" placeholder="Titulo del Documento">
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Descripcion <star>*</star></label>
                                                <textarea dbfield='Decripcion' id='descripcion' name='descripcion' rows="3" class="form-control" placeholder="Descripcion"><?php echo $Decripcion ?></textarea>
                                            </div>
                                        </div>
									</div>
									
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Tipo de Recurso <star>*</star></label>
												<select dbfield='TipoRecurso' name="recurso" class="selectpicker" data-title="Seleccionar" data-style="btn-default btn-block" data-menu-style="dropdown-blue" id='recurso'>
													<option value="Libro" selected>Libro</option>
													<option value="Artículo académico" >Artículo académico</option>
													<option value="Publicación en medios" >Publicación en medios</option>
													<option value="Base de datos" >Base de datos</option>
													<option value="Material gráfico" >Material gráfico</option>
													<option value="Informes" >Informes</option>
													<option value="Guías o manuales" >Guías o manuales</option>
													<option value="Presentaciones" >Presentaciones</option>
													<option value="Georreferenciación" >Georreferenciación</option>
												</select>
											</div>													
										</div>
									</div>
									
									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Fecha de Publicacion <star>*</star></label>
                                                <input dbfield='FechaPublicacion' value='<?php echo $FechaPublicacion ?>' id='fecha' name="fecha" type="text" class="form-control datepicker" placeholder="Fecha de Publicacion">
                                            </div>
                                        </div>	
									</div>
									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Autores <star>*</star></label>
                                                <input dbfield='Autores' value='<?php echo $Autores ?>' id='autores' name="autores" type="text" class="form-control" placeholder="Autores">
                                            </div>
                                        </div>	
									</div>									
									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Campo del Link <small>(opcional)</small></label>
                                                <input dbfield='CampoLink' value='<?php echo $CampoLink ?>' id='campolink' name="campolink" type="text" class="form-control datepicker" placeholder="Campo del Link">
                                            </div>
                                        </div>	
									</div>									
									<div class="row" style='margin-top:20px;display:none'>
										<div class="col-md-12">
											<legend style='margin-bottom:20px' class='text-warning'>Imagen Destacada</legend>
																							
											<input type="file" id="imagen" name="imagen" />
										</div>																				
									</div>
									<div class="row" style='margin-top:20px;display:none'>
										<div class="col-md-12">
											<legend style='margin-bottom:20px' class='text-warning'>Archivo (PDF-Word-Excel-PPT-TXT)</legend>																						
											<input type="file" id="file" name="file" />
										</div>																				
									</div>									
                                    <button id='back' type="submit" class="btn noblock <?php echo $buttons ?> btn-fill pull-left btn-round"><< Volver</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
<script type="text/javascript">
$(document).ready(function(){
	$('#back').click(function () {
		window.location.href = 'index.php?userid=<?php echo $userid ?>&section=documentos-complementatios';
		return false;
	});
	
	$('#recurso').val('<?php echo $TipoRecurso ?>');
	$('#recurso').selectpicker('refresh')
	
	$('.form-control').change(function () {
		var val = $(this).val();
		var field = $(this).attr('dbfield');
		$.ajax({
			url: 'api/updateField.php',
			type: 'POST',
			data: {
				field: field,
				value: val,
				id: '<?php echo $_GET["id"] ?>'
			},
			success: function (r) {

			}
		});
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
	 
	 $('#fecha').on('dp.change', function(e){ 
		var val = $(this).val();
		var field = $(this).attr('dbfield');
		$.ajax({
			url: 'api/updateField.php',
			type: 'POST',
			data: {
				field: field,
				value: val,
				id: '<?php echo $_GET["id"] ?>'
			},
			success: function (r) {

			}
		});
	 })
	 
	 $('#recurso').change(function () {
		var val = $(this).val();
		var field = $(this).attr('dbfield');
		$.ajax({
			url: 'api/updateField.php',
			type: 'POST',
			data: {
				field: field,
				value: val,
				id: '<?php echo $_GET["id"] ?>'
			},
			success: function (r) {

			}
		});
	 })	 
		 
})
</script>