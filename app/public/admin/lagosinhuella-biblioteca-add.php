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
                                <h4 class="title <?php echo $title_color ?>">Crear Nuevo</h4>
                            </div>
                            <div class="content">
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Titulo <star>*</star></label>
                                                <input id='titulo' name="titulo" type="text" class="form-control" placeholder="Titulo del Documento">
                                            </div>
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
                </div>
            </div>
<script type="text/javascript">
	$(document).ready(function(){
		
		var lastid;
		$('#send_btn').click(function () {
			var error = 0;
			var titulo = $('#titulo').val();
			if (titulo == '') {
				alert("Ingrese Titulo");
				return false;
			} 			
			
			var fd = new FormData();
			//var imagen = $('#imagen')[0].files;
			

			
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

			fd.append('titulo',titulo);
	
					
			//var campolink = $('#campolink').val();															
			
			//fd.append('imagen',imagen[0]);			

					
		   $.ajax({
			  url: 'api/saveLagoSinHuellaBiblioteca.php',
			  type: 'post',
			  data: fd,
			  contentType: false,
			  processData: false,
			  success: function(response){
					console.log(response);
					var data = JSON.parse(response);
					console.log(data);
					if (data.status == 1) {		
						window.location.href = "index.php?userid=<?php echo $userid ?>&section=lagosinhuella-biblioteca";														
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

	});
</script>