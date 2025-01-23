<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card ">
				<div class="header">
					<h4 class="title <?php echo $title_color ?>">Puntos de Muestreo</h4>
				</div>
				<div class="content">
					<div class="row">
						<div class="col-md-12">
							<div id="toolbar" class="btn-group pull-right" style='margin-top:15px;display:none'>
								<a rel="tooltip" title="Crear nuevo" type="button" class="btn btn-warning btn-fill" href='index.php?userid=<?php echo $userid ?>&section=user-add'>
									<i class="fa fa-plus" style='color:#ffffff'></i>
								</a>
								<button rel="tooltip" title="Eliminar Seleccionados" type="button" class="btn btn-danger btn-fill noblock" id='deleteselected'>
									<i class="fa fa-trash" style='color:#ffffff'></i>
								</button>
							</div>									
							<table id="bootstrap-table" class="table">
								<thead>
									<th data-field="state" data-checkbox="true" ></th>
									<th data-field="id" data-sortable="true" style='width:50px'>ID</th>
									<th data-field="name" data-sortable="true" style='width:100%'><?php echo $lng_name ?></th>
									<th data-field="actions" class="td-actions text-right" style='width:50px'></th>
								</thead>
								<tbody>
								<?php
									$sql="SELECT * FROM puntos_mediciones ORDER BY ID ASC";
									$result=mysql_query($sql);
									while ($row = mysql_fetch_assoc($result)) {
										echo "<tr>
													<td></td>
													<td>{$row['ID']}</td>
													<td>{$row['Nombre']}</td>
													<td><a href='index.php?userid=$userid&section=lagosinhuella-mediciones&puntoid={$row['ID']}'><i class='fa fa-info-circle text-warning' style='font-size:25px'></i></a></td>
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

});
</script>
			