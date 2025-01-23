<?php 
	include('get-mime-type.php');
?>
<!-- Uploadify -->
<link href="assets/js/uploadfive/uploadifive.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="assets/js/uploadfive/jquery.uploadifive.min.js"></script>	

<div class="container-fluid">
	<div class="header">
		<h3 style='padding:0;margin:0'>Biblioteca</h3>											
	</div>	
	<?php
		include('library-select.php');
	?>	
	<div class='row' style='margin-top:20px'>
		<div class="col-md-6" style='display:none'>
			<div class="card">
				<div class="header">
					<div style='float:left'>
						Imágenes
					</div>
					<div style='float:right'>		
						<input id='file_upload_images' name='file_upload_images' type='file' />					
					</div>
					<div style='clear:both;margin-top:20px'></div>													
				</div>	
				<div class="content row" style='padding:10px;min-height:300px'>
					<div id="queue"></div>
					<div id='photo_div'>
<?php
						$directory = "library/monitoreo/images";
						$images = glob($directory . "/*.*");
						$imgsize = 0;
						foreach($images as $image)
						{
							echo "<div style='margin-top:20px' class='col-md-2'><img style='cursor:pointer;object-fit: cover;width:100%;height:200px' src='{$image}' class='img-rounded delete_photo'></div>";
						  $imgsize++;
						}
?>					
					</div>
					<?php
						if ($imgsize == 0) {
					?>
						<div id='noimages' style='text-align: center;margin-top:120px'>
							No hay imágenes
						</div>							
					<?php
						}
					?>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card">
				<div class="header">
					<div style='float:left'>
						Archivos
					</div>
					<div style='float:right'>
						<input id='file_upload_files' name='file_upload_files' type='file' />		
					</div>
					<div style='clear:both;margin-top:20px'></div>													
				</div>	
				<div class="content row" style='padding:10px;min-height:300px'>
					<div id="queue_files"></div>
					<div id='files_div'>				
<?php
						$directory = "library/monitoreo/files";
						$images = glob($directory . "/*.*");
						$imgsize = 0;

						foreach($images as $image)
						{
							
							$filename=explode("/",$image);
							$mime = get_mime_type($image);
							$typefile = get_mime_image($mime);							
							echo "<div style='margin-top:20px' class='col-md-2'><img style='cursor:pointer;object-fit: cover;width:100%;height:150px' src='$typefile' src2='{$filename[3]}' class='img-rounded delete_file'><text class='changetitle' src='$image'>{$filename[3]}</text></div>";
						  $imgsize++;
						}
?>					
					</div>
					<?php
						if ($imgsize == 0) {
					?>
						<div id='nofiles' style='text-align: center;margin-top:120px'>
							No hay archivos
						</div>							
					<?php
						}
					?>
				</div>
			</div>
		</div>		
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function() {	
	
		$(document).on('click','.changetitle', function() {
			var src = $(this).attr('src');
			var tt = $(this).html().split("<br>");
			var texto = tt[0].split(".");
			 swal({
			   title: 'Cambie el nombre del archivo',
				 html:
			   '<input placeholder="'+ texto[0] +'" id="swal-input1" class="swal2-input" autofocus>',
			   preConfirm: function() {
				   if ($('#swal-input1').val() != '') {
						$.ajax({
							type: "POST",
							url: "jquery/changeName.php",
							data: {'src':src,'texto':texto[0],'input':$('#swal-input1').val()},
							cache: false,
							success: function(output){
								window.location.reload();
							}
						});
				   }
			   }
			   });			
		})	
		
		$('#file_upload_images').uploadifive({
			'formData'  : {'type':'monitoreo','subtype':'images'},
			'queueID'          : 'queue',
			'removeCompleted' : true, 
			'buttonText'   : 'Agregar',
			'onUploadComplete' : function(data) {
					$.ajax({
						type: "POST",
						url: "jquery/getImages.php",
						data: {'type':'monitoreo','subtype':'images'},
						cache: false,
						success: function(output){
							$('#noimages').hide();
							$('#photo_div').empty();
							$('#photo_div').html(output).hide();
							$('#photo_div').fadeIn('slow');
						}
					});
				},				
		});	
		
		$('#file_upload_files').uploadifive({
			'formData'  : {'type':'monitoreo','subtype':'files'},
			'queueID'          : 'queue_files',
			'removeCompleted' : true, 
			'buttonText'   : 'Agregar',
			'onUploadComplete' : function(data) {
					$.ajax({
						type: "POST",
						url: "jquery/getImages.php",
						data: {'type':'monitoreo','subtype':'files'},
						cache: false,
						success: function(output){
							$('#nofiles').hide();
							$('#files_div').empty();
							$('#files_div').html(output).hide();
							$('#files_div').fadeIn('slow');
						}
					});
				},				
		});		

		$(document).on('click','.delete_photo', function() {
			var imagelink = $(this).attr('src');
			swal({
			  title: "Deseas Borrar la Imagen?",
			  text: "No podras recuperarla",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonClass: "btn-danger",
			  confirmButtonText: "Si, borrala",
			}).then(
			function(vari){
				if (vari.value) {
					$.ajax({
						type: "POST",
						url: "jquery/deleteImage.php",
						data: {'type':'monitoreo','subtype':'images','imagelink':imagelink},
						cache: false,
						success: function(output){

							$('#noimages').hide();
							$('#photo_div').empty();
							$('#photo_div').html(output).hide();
							$('#photo_div').fadeIn('slow');
						}
					});
				}
			});
		
		})
			
		
		$(document).on('click','.delete_file', function() {
			var imagelink = "library/monitoreo/files/" + $(this).attr('src2');
			swal({
			  title: "Deseas Borrar el Archivo?",
			  text: "No podras recuperarlo",
			  type: "warning",
			  showCancelButton: true,
			  confirmButtonClass: "btn-danger",
			  confirmButtonText: "Si, borralo",
			}).then(
			function(vari){
				if (vari.value) {
					$.ajax({
						type: "POST",
						url: "jquery/deleteImage.php",
						data: {'type':'monitoreo','subtype':'files','imagelink':imagelink},
						cache: false,
						success: function(output){

							$('#nofiles').hide();
							$('#files_div').empty();
							$('#files_div').html(output).hide();
							$('#files_div').fadeIn('slow');
						}
					});
				}
			});
		
		})		
	});
</script>