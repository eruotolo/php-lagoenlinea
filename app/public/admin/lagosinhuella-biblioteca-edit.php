<style>
.errorselect {
  background-color: #F5CBCB;
}
.successselect {
  background-color: green;
}
</style>   
<?php
	$sql="SELECT * FROM `lagosinhuella-biblioteca` WHERE ID = '{$_GET['id']}'";
	$result=mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)) {
		$Titulo = $row['Titulo'];
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
                                    <button id='back' type="submit" class="btn noblock <?php echo $buttons ?> btn-fill pull-left btn-round"><< Volver</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
<script type="text/javascript">
$(document).ready(function(){
	$('#back').click(function () {
		window.location.href = 'index.php?userid=<?php echo $userid ?>&section=lagosinhuella-biblioteca';
		return false;
	});
	
	$('#recurso').val('<?php echo $TipoRecurso ?>');
	$('#recurso').selectpicker('refresh')
	
	$('.form-control').change(function () {
		var val = $(this).val();
		var field = $(this).attr('dbfield');
		$.ajax({
			url: 'api/updateField-lagosinhuella.php',
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