<?php
	$sql="SELECT * FROM users WHERE user_id = {$_GET['employeeid']} LIMIT 1";
	$result=mysql_query($sql);
	$empleado = mysql_fetch_assoc($result);
	//print_r($cliente);
?>
<div class="container-fluid">	
	<div class="header pull-left hidden" >
		<h3 class="title text-left" style='margin-bottom:0;margin-top:0'><?php echo $cliente['CustomerName']?></h3>
		<p class="category text-left" style='color:#aaaaaa'><?php echo $cliente['CustomerEmail']?></p>
	</div>
	<div class='header pull-right hidden'>
		<button class="btn btn-social btn-fill noblock" id='refresh'>
			<i class="fa fa-list"></i>
		</button>
		<a href='index.php?userid=<?php echo $userid ?>&section=customer-edit&id=<?php echo $_GET['customerid'] ?>' class="btn btn-social btn-fill">
			<i class="fa fa-edit"></i>
		</a>		
	</div>
	<div style='clear:both'></div>	
	<div class="row" class="" style='padding:15px'>
		<div class="col-md-4">
			<div class="card card-user">
				<div class="image">
					<img src="assets/img/background.jpg" alt="..."/>
				</div>
				<div class="content">
					<div class="author">
						 <a href="#">
						<img class="avatar border-gray" src="<?php echo getAvatar($empleado['user_id']) ?>" alt="..."/>

						  <h4 class="title"><?php echo $empleado['firstname'] ?> <?php echo $empleado['lastname'] ?><br />
							 <small><?php echo $empleado['nickname'] ?></small>
						  </h4>
						</a>
					</div>
					<p class="description text-center"> Ultmo login:<br> <?php echo $empleado['lastlogin'] ?>
					</p>
				</div>
			</div>
		</div>	
		<div class="card col-md-8">					
			<div class="content" style='clear:both'>
				<h4 class="title text-warning">Informacion de Contacto</h4>
				<div class="row" style='margin-top:20px'> 
					<div class="col-md-6">
						<div class="form-group">
							<label><?php echo $lng_name ?></label>
							<p><?php echo $empleado['firstname']?> <?php echo $empleado['lastname']?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>E-mail</label>
							<p><?php echo $empleado['email']?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Telefono</label>
							<p><?php echo $empleado['phone']?></p>
						</div>
					</div>	
					<div class="col-md-6">
						<div class="form-group">
							<label>Direccion</label>
							<p><?php echo $empleado['address']?></p>
						</div>
					</div>					
					<div class="col-md-6">
						<div class="form-group">
							<label>Cuidad</label>
							<p><?php echo $empleado['city']?></p>
						</div>
					</div>				
					<div class="col-md-6">
						<div class="form-group">
							<label>Pais</label>
							<p><?php echo $empleado['country']?></p>
						</div>
					</div>					
				</div>
				<h4 class="title text-warning" style='margin-top:40px'>Clientes</h4>
				<div class="row" style='padding:0 15px'> 
					<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" style="width:100%">
						<thead>
							<th></th>
						</thead>
						<tbody>
							<?php
									$sql="SELECT *
											FROM customers 
											WHERE CustomerID IN 
											(SELECT CustomerID FROM customers_users WHERE userid = {$empleado['user_id']}
											UNION
											SELECT CustomerID FROM customers WHERE CustomerContadorResponsable = {$empleado['user_id']})";
									$result=mysql_query($sql);
									while ($row = mysql_fetch_assoc($result)) {
									$useradded[] = $row['user_id'];
									echo "<tr>
											<td style='width:100%'><a style='color:#8B2B39' href='index.php?userid=$userid&section=customer-info&customerid={$row['CustomerID']}'>{$row['CustomerName']}</a></td>";
											echo "</tr>";
								}
							?>										

						</tbody>
					</table>				
				</div>
			</div>
		</div>		
		
		
		
		
		
	</div>
</div>
<script>
		$('#datatables').DataTable(
			{
			"paging":   false,
			"info":     false,
			"filter":     false,
			"ordering": false
			}
		);
</script>