<?php
	include('../get-mime-type.php');
	include('../include/conf/dbselect.php');	
	$type = $_POST['type'];
	$subtype = $_POST['subtype'];
	
	$directory = "../library/$type/$subtype";
	$images = glob($directory . "/*.*");
	$imgsize = 0;
	foreach($images as $image)
	{
		if ($subtype == 'files') {
			$filename=explode("/",$image);
			$mime = get_mime_type($image);
			$typefile = get_mime_image($mime);	
			$image = str_replace("../","",$image);	
			echo "<div style='margin-top:20px' class='col-md-2'><img style='cursor:pointer;object-fit: cover;width:100%;height:150px' src='$typefile' src2='{$filename[4]}' class='img-rounded delete_file'><text class='changetitle' src='$image'>{$filename[4]}</text><br><a class='noblock' target='_blank' href='admin/$directory/{$filename[4]}'>Ver</a></div>";
		} else {		
			echo "<div style='margin-top:20px' class='col-md-2'><img style='cursor:pointer;object-fit: cover;width:100%;height:200px' src='admin/{$image}' class='img-rounded delete_photo'></div>";
		}
		$imgsize++;
	}	
	

?>