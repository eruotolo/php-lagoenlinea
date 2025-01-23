	<style>
	.bs-placeholder {
		background-color:white
	}
	.dropdown-toggle {
		background-color:white
	}
	</style>	
	<div class='row' style='margin-top:20px'>
		<div class="col-md-12">
			<div class="form-group">
				<select style='background-color:white' data-size='6' name="year" class="selectpicker" data-title="Categoria" data-style="btn-default btn-block" data-menu-style="dropdown-blue" id='categoria'>
					<option value="0">General</option>
					<option value="1">Teledetección</option>
					<option value="2">Estación de Monitoreo</option>	
					<option value="3">Metagenómica</option>	
				</select>
			</div>	
		</div>	
	</div>	
	<script type="text/javascript">
		jQuery(document).ready(function() {	
		
			$('#categoria').change(function () {
				var cat = $(this).val();
				if (cat == 1) {
					window.location.replace("index.php?userid=<?php echo $userid ?>&section=library-teledeteccion");
				} else if (cat == 2) {
					window.location.replace("index.php?userid=<?php echo $userid ?>&section=library-monitoreo");
				} else if (cat == 3) {
					window.location.replace("index.php?userid=<?php echo $userid ?>&section=library-metagenomica");
				} else if (cat == 0) {
					window.location.replace("index.php?userid=<?php echo $userid ?>&section=library-general");
				}
			})
			
			var section = '<?php echo $_GET["section"]; ?>';
			if (section == 'library-teledeteccion') {
				$('#categoria').selectpicker('val',1);
			} else if (section == 'library-monitoreo') {
				$('#categoria').selectpicker('val',2);
			} else if (section == 'library-metagenomica') {
				$('#categoria').selectpicker('val',3);
			} else if (section == 'library-general') {
				$('#categoria').selectpicker('val',0);
			}
			$('#categoria').selectpicker('refresh');
		})
	</script>