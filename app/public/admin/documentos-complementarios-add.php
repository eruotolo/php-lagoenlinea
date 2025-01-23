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
<?php
	if ($_GET['cat'] <> 'y') {
?>				
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title <?php echo $title_color ?>">Crear Nuevo</h4>
                            </div>
                            <div class="content">
                                <form action="index.php?userid=<?php echo $userid ?>&section=user-add" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Titulo <star>*</star></label>
                                                <input id='titulo' name="titulo" type="text" class="form-control" placeholder="Titulo del Documento">
                                            </div>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Descripcion <star>*</star></label>
                                                <textarea id='descripcion' name='descripcion' rows="3" class="form-control" placeholder="Descripcion"></textarea>
                                            </div>
                                        </div>
									</div>
									
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Tipo de Recurso <star>*</star></label>
												<select name="recurso" class="selectpicker" data-title="Seleccionar" data-style="btn-default btn-block" data-menu-style="dropdown-blue" id='recurso'>
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
                                                <label>Año de Publicacion <star>*</star></label>
                                                <input id='fecha' name="fecha" type="text" class="form-control datepicker" placeholder="Fecha de Publicacion">
                                            </div>
                                        </div>	
									</div>
									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Autores <star>*</star></label>
                                                <input id='autores' name="autores" type="text" class="form-control" placeholder="Autores">
                                            </div>
                                        </div>	
									</div>									
									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Campo del Link <small>(opcional)</small></label>
                                                <input id='campolink' name="campolink" type="text" class="form-control datepicker" placeholder="Campo del Link">
                                            </div>
                                        </div>	
									</div>									
									<div class="row" style='margin-top:20px'>
										<div class="col-md-12">
											<legend style='margin-bottom:20px' class='text-warning'>Imagen Destacada</legend>
																							
											<input type="file" id="imagen" name="imagen" />
										</div>																				
									</div>
									<div class="row" style='margin-top:20px'>
										<div class="col-md-12">
											<legend style='margin-bottom:20px' class='text-warning'>Archivo (PDF-Word-Excel-PPT-TXT)</legend>																						
											<input type="file" id="file" name="file" />
										</div>																				
									</div>									
                                    <button id='send_btn' type="submit" class="btn noblock <?php echo $buttons ?> btn-fill pull-right btn-round"><?php echo $lng_insert ?></button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
<?php
	} else {
			$sql="SELECT * FROM `filtros` WHERE DocumentoID = '{$_GET['id']}'";
			$result=mysql_query($sql);
			$filtros = array();
			while ($row = mysql_fetch_assoc($result)) {
				$Filtro = $row['Filtro'];
				$filtros[$Filtro][] = $row['Valor'];
			}

			$sql="SELECT * FROM `documentos-complementarios` WHERE ID = '{$_GET['id']}'";
			$result=mysql_query($sql);
			while ($row = mysql_fetch_assoc($result)) {
				$Titulo = $row['Titulo'];
			}			
?>				
			<h3 style='margin-left:20px;margin-top:0'><?php echo $Titulo ?></h3>
			<h5 style='margin-left:20px'>Seleccione Categorias</h5>
				<div class="row">
                    <div class="col-md-12">
                        <div class="card card-user">
                            <div class="header">
                                <h4 class="title <?php echo $title_color ?>">Materia</h4>
                            </div>
							<div class="content">
								<div class="col-md-3">
                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Calidad de agua" id='materia-1'>
                                        <label class="form-check-label" for="materia-1">
                                            Calidad de agua
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Monitoreo" id='materia-2'>
                                        <label class="form-check-label" for="materia-2">
                                            Monitoreo
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Ciencia ciudadana" id='materia-3'>
                                        <label class="form-check-label" for="materia-3">
                                            Ciencia ciudadana
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Hidrodinámica" id='materia-4'>
                                        <label class="form-check-label" for="materia-4">
                                            Hidrodinámica
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Teledección" id='materia-5'>
                                        <label class="form-check-label" for="materia-5">
                                            Teledección
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Metagenómica" id='materia-6'>
                                        <label class="form-check-label" for="materia-6">
                                            Metagenómica
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Telemetría" id='materia-7'>
                                        <label class="form-check-label" for="materia-7">
                                            Telemetría
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Biodiversidad" id='materia-8'>
                                        <label class="form-check-label" for="materia-8">
                                            Biodiversidad
                                        </label>
                                    </div>
								</div>
								<div class="col-md-3">
                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Boyas" id='materia-9'>
                                        <label class="form-check-label" for="materia-9">
                                            Boyas
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Cambio climático" id='materia-10'>
                                        <label class="form-check-label" for="materia-10">
                                            Cambio climático
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Cultura y patrimonio" id='materia-11'>
                                        <label class="form-check-label" for="materia-11">
                                            Cultura y patrimonio
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Tecnologías" id='materia-12'>
                                        <label class="form-check-label" for="materia-12">
                                            Tecnologías
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Planificación territorial" id='materia-13'>
                                        <label class="form-check-label" for="materia-13">
                                            Planificación territorial
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Usos de suelo" id='materia-14'>
                                        <label class="form-check-label" for="materia-14">
                                            Usos de suelo
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="materia form-check-input" type="checkbox" value="Educación ambiental" id='materia-15'>
                                        <label class="form-check-label" for="materia-15">
                                            Educación ambiental
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Salud humana" id='materia-16'>
                                        <label class="form-check-label" for="materia-16">
                                            Salud humana
                                        </label>
                                    </div>
								</div>
								<div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Salud animal" id='materia-17'>
                                        <label class="form-check-label" for="materia-17">
                                            Salud animal
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Ciencias sociales" id='materia-18'>
                                        <label class="form-check-label" for="materia-18">
                                            Ciencias sociales
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Economía" id='materia-19'>
                                        <label class="form-check-label" for="materia-19">
                                            Economía
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Ecología y medio ambiente" id='materia-20'>
                                        <label class="form-check-label" for="materia-20">
                                            Ecología y medio ambiente
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Química" id='materia-21'>
                                        <label class="form-check-label" for="materia-21">
                                            Química
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Ingeniería" id='materia-22'>
                                        <label class="form-check-label" for="materia-22">
                                            Ingeniería
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Políticas públicas" id='materia-23'>
                                        <label class="form-check-label" for="materia-23">
                                            Políticas públicas
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Sistemas productivos" id='materia-24'>
                                        <label class="form-check-label" for="materia-24">
                                            Sistemas productivos
                                        </label>
                                    </div>
								</div>
								<div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Turismo" id='materia-25'>
                                        <label class="form-check-label" for="materia-25">
                                            Turismo
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Energía" id='materia-26'>
                                        <label class="form-check-label" for="materia-26">
                                            Energía
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gestión de residuos" id='materia-27'>
                                        <label class="form-check-label" for="materia-27">
                                            Gestión de residuos
                                        </label>
                                    </div>
								</div>
							</div>	
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="card card-user">
									<div class="header">
										<h4 class="title <?php echo $title_color ?>">Pais</h4>
									</div>
									<div class="content" >

										<div class="form-check">
											<input class="pais form-check-input" type="checkbox" value="Chile" id='pais-1'>
											<label class="form-check-label" for="pais-1">
												Chile
											</label>
										</div>

										<div class="form-check">
											<input class="pais form-check-input" type="checkbox" value="Extranjero" id='pais-2'>
											<label class="form-check-label" for="pais-2">
												Extranjero
											</label>
										</div>
			
									</div>								
								</div>
							</div>
							<div class="col-md-6">
								<div class="card card-user">
									<div class="header">
										<h4 class="title <?php echo $title_color ?>">Region</h4>
									</div>
									<div class="content" >

										<div class="form-check">
											<input class="region form-check-input" type="checkbox" value="Araucanía" id='region-1'>
											<label class="form-check-label" for="region-1">
												Araucanía
											</label>
										</div>

										<div class="form-check">
											<input class="region form-check-input" type="checkbox" value="Los Ríos" id='region-2'>
											<label class="form-check-label" for="region-2">
												Los Ríos
											</label>
										</div>
										<div class="form-check">
											<input class="region form-check-input" type="checkbox" value="Los Lagos" id='region-3'>
											<label class="form-check-label" for="region-3">
												 Los Lagos
											</label>
										</div>
										<div class="form-check">
											<input class="region form-check-input" type="checkbox" value="Otra" id='region-4'>
											<label class="form-check-label" for="region-4">
												Otra
											</label>
										</div>										
									</div>								
								</div>
							</div>
							
                        </div>	

						<div class="row">
							<div class="col-md-12">
								<div class="card card-user">
									<div class="header">
										<h4 class="title <?php echo $title_color ?>">Cuenca</h4>
									</div>
									<div class="content" >
<div class="col-md-4">
										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Collico" id='cuenca-1'>
											<label class="form-check-label" for="cuenca-1">
												Collico
											</label>
										</div>

										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Caburgua" id='cuenca-2'>
											<label class="form-check-label" for="cuenca-2">
												Caburgua
											</label>
										</div>
										
										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Huilipilun" id='cuenca-3'>
											<label class="form-check-label" for="cuenca-3">
												Huilipilun
											</label>
										</div>

										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Villarrica" id='cuenca-4'>
											<label class="form-check-label" for="cuenca-4">
												Villarrica
											</label>
										</div>
										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Calafquén" id='cuenca-5'>
											<label class="form-check-label" for="cuenca-5">
												Calafquén
											</label>
										</div>

										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Pellaifa" id='cuenca-6'>
											<label class="form-check-label" for="cuenca-6">
												Pellaifa
											</label>
										</div>
</div>
<div class="col-md-4">
										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Panguipulli" id='cuenca-7'>
											<label class="form-check-label" for="cuenca-7">
												Panguipulli
											</label>
										</div>

										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Neltume" id='cuenca-8'>
											<label class="form-check-label" for="cuenca-8">
												Neltume
											</label>
										</div>
										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Pirihueico" id='cuenca-9'>
											<label class="form-check-label" for="cuenca-9">
												Pirihueico
											</label>
										</div>

										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Riñihue" id='cuenca-10'>
											<label class="form-check-label" for="cuenca-10">
												Riñihue
											</label>
										</div>
										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Ranco" id='cuenca-11'>
											<label class="form-check-label" for="cuenca-11">
												Ranco
											</label>
										</div>

										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Maihue" id='cuenca-12'>
											<label class="form-check-label" for="cuenca-12">
												Maihue
											</label>
										</div>
</div>
<div class="col-md-4">
										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Puyehue" id='cuenca-13'>
											<label class="form-check-label" for="cuenca-13">
												Puyehue
											</label>
										</div>

										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Rupanco" id='cuenca-14'>
											<label class="form-check-label" for="cuenca-14">
												Rupanco
											</label>
										</div>
										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Llanquihue" id='cuenca-15'>
											<label class="form-check-label" for="cuenca-15">
												Llanquihue
											</label>
										</div>

										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Todos los Santos" id='cuenca-16'>
											<label class="form-check-label" for="cuenca-16">
												Todos los Santos
											</label>
										</div>
										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Chapo" id='cuenca-17'>
											<label class="form-check-label" for="cuenca-17">
												Chapo
											</label>
										</div>

										<div class="form-check">
											<input class="cuenca form-check-input" type="checkbox" value="Otro" id='cuenca-18'>
											<label class="form-check-label" for="cuenca-18">
												Otro
											</label>
</div>										</div>										
			
									</div>								
								</div>
							</div>
						</div>
						
						
						<div class="row">
							<div class="col-md-6">
								<div class="card card-user">
									<div class="header">
										<h4 class="title <?php echo $title_color ?>">Idioma</h4>
									</div>
									<div class="content" >

										<div class="form-check">
											<input class="idioma form-check-input" type="checkbox" value="Español" id='idioma-1'>
											<label class="form-check-label" for="idioma-1">
												Español
											</label>
										</div>

										<div class="form-check">
											<input class="idioma form-check-input" type="checkbox" value="Inglés" id='idioma-2'>
											<label class="form-check-label" for="idioma-2">
												Inglés
											</label>
										</div>
										
										<div class="form-check">
											<input class="idioma form-check-input" type="checkbox" value="Otro" id='idioma-3'>
											<label class="form-check-label" for="idioma-3">
												Otro
											</label>
										</div>										
			
									</div>								
								</div>
							</div>
							<div class="col-md-6">
								<div class="card card-user">
									<div class="header">
										<h4 class="title <?php echo $title_color ?>">Tipo de Institucion</h4>
									</div>
									<div class="content" >

										<div class="form-check">
											<input class="institucion form-check-input" type="checkbox" value="Sector público" id='institucion-1'>
											<label class="form-check-label" for="institucion-1">
												Sector público
											</label>
										</div>

										<div class="form-check">
											<input class="institucion form-check-input" type="checkbox" value="Empresa privada" id='institucion-2'>
											<label class="form-check-label" for="institucion-2">
												Empresa privada
											</label>
										</div>
										<div class="form-check">
											<input class="institucion form-check-input" type="checkbox" value="Academia" id='institucion-3'>
											<label class="form-check-label" for="institucion-3">
												 Academia
											</label>
										</div>
										<div class="form-check">
											<input class="institucion form-check-input" type="checkbox" value="Sociedad Civil" id='institucion-4'>
											<label class="form-check-label" for="institucion-4">
												Sociedad Civil
											</label>
										</div>	
										<div class="form-check">
											<input class="institucion form-check-input" type="checkbox" value="Centro de investigación" id='institucion-5'>
											<label class="form-check-label" for="institucion-5">
												Centro de investigación
											</label>
										</div>	
										
									</div>								
								</div>
							</div>
							
                        </div>							
						
						<a href='index.php?userid=<?php echo $userid ?>&section=documentos-complementatios' class="btn noblock <?php echo $buttons ?> btn-fill pull-left btn-round"><< Volver</a>
						<div class="clearfix"></div>
						
						
                    </div>
                 </div>
<?php
	}
?>
                </div>
            </div>
<script type="text/javascript">
	$(document).ready(function(){
		
<?php
	if (isset($filtros['materia'])) {
		foreach ($filtros['materia'] as $cat=>$val) {
			echo "$('.materia[value=\"$val\"]').prop('checked',true);";
		}
	}
?>		
		
		$('.materia').change(function () {
			var val = $(this).val();
			var checked = $(this).is(":checked");
			if (checked) {
				checked = 1
			} else {
				checked = 0
			}

		   $.ajax({
			  url: 'api/updateFilter.php',
			  type: 'post',
			  data: {val: val,checked:checked, filtro: 'materia', documentoid: '<?php echo $_GET["id"] ?>' },
			  success: function(response){
				  //alert(response);
			  }		
		   })
		})
		
<?php
	if (isset($filtros['pais'])) {
		foreach ($filtros['pais'] as $cat=>$val) {
			echo "$('.pais[value=\"$val\"]').prop('checked',true);";
		}
	}
?>		
		
		$('.pais').change(function () {
			var val = $(this).val();
			var checked = $(this).is(":checked");
			if (checked) {
				checked = 1
			} else {
				checked = 0
			}

		   $.ajax({
			  url: 'api/updateFilter.php',
			  type: 'post',
			  data: {val: val,checked:checked, filtro: 'pais', documentoid: '<?php echo $_GET["id"] ?>' },
			  success: function(response){
				  //alert(response);
			  }		
		   })
		})

<?php
	if (isset($filtros['region'])) {
		foreach ($filtros['region'] as $cat=>$val) {
			echo "$('.region[value=\"$val\"]').prop('checked',true);";
		}
	}
?>		
		
		$('.region').change(function () {
			var val = $(this).val();
			var checked = $(this).is(":checked");
			if (checked) {
				checked = 1
			} else {
				checked = 0
			}

		   $.ajax({
			  url: 'api/updateFilter.php',
			  type: 'post',
			  data: {val: val,checked:checked, filtro: 'region', documentoid: '<?php echo $_GET["id"] ?>' },
			  success: function(response){
				  //alert(response);
			  }		
		   })
		})

<?php
	if (isset($filtros['cuenca'])) {
		foreach ($filtros['cuenca'] as $cat=>$val) {
			echo "$('.cuenca[value=\"$val\"]').prop('checked',true);";
		}
	}
?>		
		
		$('.cuenca').change(function () {
			var val = $(this).val();
			var checked = $(this).is(":checked");
			if (checked) {
				checked = 1
			} else {
				checked = 0
			}

		   $.ajax({
			  url: 'api/updateFilter.php',
			  type: 'post',
			  data: {val: val,checked:checked, filtro: 'cuenca', documentoid: '<?php echo $_GET["id"] ?>' },
			  success: function(response){
				  //alert(response);
			  }		
		   })
		})	


<?php
	if (isset($filtros['idioma'])) {
		foreach ($filtros['idioma'] as $cat=>$val) {
			echo "$('.idioma[value=\"$val\"]').prop('checked',true);";
		}
	}
?>		
		
		$('.idioma').change(function () {
			var val = $(this).val();
			var checked = $(this).is(":checked");
			if (checked) {
				checked = 1
			} else {
				checked = 0
			}

		   $.ajax({
			  url: 'api/updateFilter.php',
			  type: 'post',
			  data: {val: val,checked:checked, filtro: 'idioma', documentoid: '<?php echo $_GET["id"] ?>' },
			  success: function(response){
				  //alert(response);
			  }		
		   })
		})


<?php
	if (isset($filtros['institucion'])) {
		foreach ($filtros['institucion'] as $cat=>$val) {
			echo "$('.institucion[value=\"$val\"]').prop('checked',true);";
		}
	}
?>		
		
		$('.institucion').change(function () {
			var val = $(this).val();
			var checked = $(this).is(":checked");
			if (checked) {
				checked = 1
			} else {
				checked = 0
			}

		   $.ajax({
			  url: 'api/updateFilter.php',
			  type: 'post',
			  data: {val: val,checked:checked, filtro: 'institucion', documentoid: '<?php echo $_GET["id"] ?>' },
			  success: function(response){
				  //alert(response);
			  }		
		   })
		})		
		
		var lastid;
		$('#send_btn').click(function () {
			var error = 0;
			var titulo = $('#titulo').val();
			if (titulo == '') {
				alert("Ingrese Titulo");
				return false;
			} 			
			var descripcion = $('#descripcion').val();
			if (descripcion == '') {
				alert("Ingrese Descripcion");
				return false;
			} 
			var fecha = $('#fecha').val();
			if (fecha == '') {
				alert("Ingrese Fecha de Publicacion");
				return false;
			}
			
			var autores = $('#autores').val();
			if (autores == '') {
				alert("Ingrese Autores");
				return false;
			} 			
			

			
			if (document.getElementById("imagen").files.length === 0) {
				alert("Ingrese Imagen Destacada");
				return false;
			}
/*			
			if (document.getElementById("file").files.length === 0) {
				alert("Ingrese Archivo");
				return false;
			}			
*/
			
	



			var recurso = $('#recurso').val();


			var fd = new FormData();
			var imagen = $('#imagen')[0].files;
			
			
			if (document.getElementById("file").files.length === 0) {

			} else {
				var file = $('#file')[0].files;		
				if (file[0].size> 90000000) {
					swal(
					  'Error',
					  'Archivo muy grande. No debe superar los  90mb',
					  'error'
					);
					return false;
				}
				fd.append('file',file[0]);
			}		
			
			
			if (imagen[0].size> 2000000) {
				swal(
				  'Error',
				  'Imagen muy grande. No debe superar los  2mb',
				  'error'
				);
				return false;
			}
			
			
			var campolink = $('#campolink').val();															
			
			fd.append('imagen',imagen[0]);			
			fd.append('titulo',titulo);
			fd.append('descripcion',descripcion);
			fd.append('fecha',fecha);
			fd.append('campolink',campolink);
			fd.append('recurso',recurso);
			fd.append('autores',autores);
			
					
		   $.ajax({
			  url: 'api/saveBook.php',
			  type: 'post',
			  data: fd,
			  contentType: false,
			  processData: false,
			  success: function(response){
					var data = JSON.parse(response);
					if (data.status == 1) {
						
						if (data.statusImage == 0) {
							swal(
							  'Error',
							  data.error,
							  'error'
							)										
						} else {
							window.location.href = "index.php?userid=<?php echo $userid ?>&section=documentos-complementarios-add&cat=y&id=" + data.id;								
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
				return false;


		});
		
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