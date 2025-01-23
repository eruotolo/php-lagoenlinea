<?php
		$sql="SELECT * FROM ubicacion";
		$result=mysql_query($sql);
		while ($row = mysql_fetch_assoc($result)) {
			$Lng = $row['Lng'];
			$Lat = $row['Lat'];
		}	
?>
<div class="container-fluid">
	<h3 style='padding:0;margin:0'>Ultimas mediciones</h3>
	<h4 style='padding:0;margin:0;font-size:16px' class='datef'></h4>	
	<div class='row' style='margin-top:20px'>
		<div class="col-md-2">
			<div class="card">
				<div class="header">
					<h4 class="title" style='color:#1573ac;font-size:20px'>Oxígeno</h4>
				</div>						
				<div class="content" style='clear:both'>
					<div class="row" id='oxygen' style='font-size:20px;margin-left:0px'>
						<div style="width: 100%;height: 100%;display: flex;"><img src='../asset/img/loading.gif' style='width:20px;'></div>
					</div>							
				</div>
			</div>
		</div>	
		<div class="col-md-2">
			<div class="card">
				<div class="header">
					<h4 class="title" style='color:#1573ac;font-size:20px'>Saturación</h4>
				</div>						
				<div class="content" style='clear:both'>
					<div class="row" id='saturation' style='font-size:20px;margin-left:0px'>
						<div style="width: 100%;height: 100%;display: flex;"><img src='../asset/img/loading.gif' style='width:20px;'></div>
					</div>							
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="card">
				<div class="header">
					<h4 class="title" style='color:#1573ac;font-size:20px'>Temperatura</h4>
				</div>						
				<div class="content" style='clear:both'>
					<div class="row" id='temperature' style='font-size:20px;margin-left:0px'>
						<div style="width: 100%;height: 100%;display: flex;"><img src='../asset/img/loading.gif' style='width:20px;'></div>
					</div>							
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="card">
				<div class="header">
					<h4 class="title" style='color:#1573ac;font-size:20px'>Conductividad</h4>
				</div>						
				<div class="content" style='clear:both'>
					<div class="row" id='conductividad' style='font-size:20px;margin-left:0px'>
						<div style="width: 100%;height: 100%;display: flex;"><img src='../asset/img/loading.gif' style='width:20px;'></div>
					</div>							
				</div>
			</div>
		</div>	
		<div class="col-md-2">
			<div class="card">
				<div class="header">
					<h4 class="title" style='color:#1573ac;font-size:20px'>Turbidez</h4>
				</div>						
				<div class="content" style='clear:both'>
					<div class="row" id='turvidity' style='font-size:20px;margin-left:0px'>
						<div style="width: 100%;height: 100%;display: flex;"><img src='../asset/img/loading.gif' style='width:20px;'></div>
					</div>							
				</div>
			</div>
		</div>
		<div class="col-md-2">
			<div class="card">
				<div class="header">
					<h4 class="title" style='color:#1573ac;font-size:20px'>Ubicación</h4>
				</div>						
				<div class="content" style='clear:both'>
					<div class="row"  style='margin-left:0px'>
						Lat: <text id='txtlat'><?php echo $Lat ?></text>
						<br>
						Lng: <text id='txtlng'><?php echo $Lng ?></text>
					</div>							
				</div>
			</div>
		</div>		
	</div>
	<h4 style='padding:0;margin:0'>Ubicación de la boya</h4>		
	<div class='row' style='padding:15px'>
		<div id="google-map-div" style="width: 100%; height: 500px"></div>	
	</div>
</div>	
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnydyACjDEVvZCe2B3zs23KyD_Yf5YWIw&libraries=places&callback=initMap"
    async defer></script> 
    <script>
      var map;
      function initMap() {
			<?php 
				$StadiumLat = $Lat;
				$StadiumLng = $Lng;	
				if ($StadiumLat <> 0 && $StadiumLng <> 0) {
			?>		  
				var myLatLng = {lat: <?php echo $StadiumLat ?>, lng: <?php echo $StadiumLng ?>};
				var myzoom = 15;
			<?php 
				} else {
			?> 
				var myLatLng = {lat: -34.397, lng: 150.644};
				var myzoom = 8;
			<?php
				}
			?>
		map = new google.maps.Map(document.getElementById('google-map-div'), {
			center: myLatLng,
            zoom: myzoom
        });
	<?php 
		if ($StadiumLat <> 0 && $StadiumLng <> 0) {
	?>		
	
<?php
	if ($administrador == 1) {			
		$draggable = "true";
	} else {
		$draggable = "false";
	}
?>	
		  var marker = new google.maps.Marker({
			animation: google.maps.Animation.DROP,
			position: myLatLng,
			draggable:<?php echo $draggable ?>,
			map: map,
				icon: {
					url: "../asset/img/icono-boya.svg",
					scaledSize: new google.maps.Size(39, 72)
				},	
		  });
	<?php
		} else {
	?>
		  var marker = new google.maps.Marker({
			animation: google.maps.Animation.DROP,
			draggable:true,
			map: map,
				icon: {
					url: "../asset/img/icono-boya.svg",
					scaledSize: new google.maps.Size(39, 72)
				},	
		  });
	<?php
		}
	?>
	  
			google.maps.event.addListener(map, 'click', function(event) {
				placeMarker(event.latLng);
				$('#txtlat').html(event.latLng.lat().toFixed(7));
				$('#txtlng').html(event.latLng.lng().toFixed(7));
				$.ajax({
				type: "POST",
				url: "jquery/chglatlng.php",
				data: {lat: event.latLng.lat().toFixed(7), lng:event.latLng.lng().toFixed(7)},
				cache: false,				
				success: function(output){
				},				
				error: function(output,e,f){
					console.log(e);
				}
				});				   
			});	

			google.maps.event.addListener(marker, 'dragend', function(evt) 
			{
				
				$('#txtlat').html(evt.latLng.lat().toFixed(7));
				$('#txtlng').html(evt.latLng.lng().toFixed(7));
				$.ajax({
				type: "POST",
				url: "jquery/chglatlng.php",
				data: {lat: evt.latLng.lat().toFixed(7), lng:evt.latLng.lng().toFixed(7)},
				cache: false,				
				success: function(output){
				},				
				error: function(output,e,f){
					console.log(e);
				}
				});				
			});	

			function placeMarker(location) {
				marker.setPosition(location)
				$('#StadiumLat').val(location.lat().toFixed(7));
				$('#StadiumLng').val(location.lng().toFixed(7));				
			}			

			// Create the search box and link it to the UI element.
			var input = document.getElementById('pac-input');
			var searchBox = new google.maps.places.SearchBox(input);
			map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

			// Bias the SearchBox results towards current map's viewport.
			map.addListener('bounds_changed', function() {
			  searchBox.setBounds(map.getBounds());
			});
			
   google.maps.event.addListener(searchBox, 'places_changed', function() {
     searchBox.set('map', null);


     var places = searchBox.getPlaces();

     var bounds = new google.maps.LatLngBounds();
     var i, place;
     for (i = 0; place = places[i]; i++) {
       (function(place) {
				marker.setPosition(place.geometry.location)
				$('#StadiumLat').val(place.geometry.location.lat().toFixed(7));
				$('#StadiumLng').val(place.geometry.location.lng().toFixed(7));		   
         bounds.extend(place.geometry.location);
       }(place));

     }
     map.fitBounds(bounds);
     searchBox.set('map', map);
     map.setZoom(Math.min(map.getZoom(),12));

   });
 
      }
    </script> 	
		  <script type="text/javascript">
		  $(document).ready(function() {

				function td(day) {
						var ts = day * 1000;
						var mydate = new Date(ts);
						
						var m_names = new Array("Ene.", "Feb.", "Mar.", 
						"Abr.", "May.", "Jun.", "Jul.", "Ago.", "Sep.", 
						"Oct.", "Nov.", "Dic.");

						var curr_date = mydate.getDate();
						var curr_month = mydate.getMonth();
						var curr_year = mydate.getFullYear();

						var mydatestr = '' + curr_date  + ' ' +
						m_names[curr_month] + ' ' + 
						curr_year+ ' ' +
						mydate.getHours() + ':' +
						mydate.getMinutes() + ':' + 
						mydate.getSeconds();
						return mydatestr;
				}

				$.ajax({
				type: "GET",
				url: "../api/monitor_sensor_last_data2.php",
				cache: false,				
				success: function(output){
					try {
						var data = JSON.parse(output);
						var cond = JSON.parse(data.cond);
						var turvidity = JSON.parse(data.turvidity);
						var oxygen = JSON.parse(data.oxygen);
						$('#conductividad').html(cond.conductivity + " µS/cm");
						$('#datecond').html(td(cond.timestamp));
						$('#turvidity').html(turvidity.turbidity + " NTU");
						$('#dateturv').html(td(turvidity.timestamp));						
						$('#oxygen').html(oxygen.oxygen + " mg/l");
						$('#saturation').html(oxygen.saturation + " %") ;
						$('#temperature').html(oxygen.temperature + " °C") ;
						$('.datef').html(td(oxygen.timestamp));							
					} catch(e) {
						console.log(e);
					}
				},				
				error: function(output,e,f){
					console.log(e);
				}
				});	

		  });
	</script>