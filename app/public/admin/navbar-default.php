		<nav class="navbar <?php echo $app_navbar_color ?>">
			<div class="container-fluid">
				<div class="navbar-minimize">
					<button class="noblock btn btn-warning btn-fill btn-round btn-icon">
						<i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
						<i class="fa fa-navicon visible-on-sidebar-mini"></i>
					</button>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><?php echo $title ?></a>
				</div>
				<div class="collapse navbar-collapse">

					<form class="navbar-form navbar-left navbar-search-form" role="search" style='display:none'>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-search"></i></span>
							<input type="text" value="" class="form-control" placeholder="">
						</div>
					</form>

					<ul class="nav navbar-nav navbar-right">

						<li class="dropdown" style='display:none'>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-caret-down"></i>
								<p class="hidden-md hidden-lg">
									Actions
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu">
								<li><a href="index.php?userid=<?php echo $userid ?>&section=calendar-loadhours"><?php echo $lng_load_hours ?></a></li>
								<li><a href="#">Do Nothing</a></li>
								<li><a href="#">Submit to live</a></li>
								<li class="divider"></li>
								<li><a href="#">Another Action</a></li>
							</ul>
						</li>

						<li class="dropdown" style='display:none'>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="notification">5</span>
								<p class="hidden-md hidden-lg">
									Notifications
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Notification 1</a></li>
								<li><a href="#">Notification 2</a></li>
								<li><a href="#">Notification 3</a></li>
								<li><a href="#">Notification 4</a></li>
								<li><a href="#">Another notification</a></li>
							</ul>
						</li>

						<li class="dropdown dropdown-with-icons">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-navicon"></i>
								<p class="hidden-md hidden-lg">
									More
									<b class="caret"></b>
								</p>
							</a>
							<ul class="dropdown-menu dropdown-with-icons">
								<li>
									<a href="index.php?userid=<?php echo $userid ?>&section=configuration">
										<i class="pe-7s-tools"></i> Cambiar Password
									</a>
								</li>							
								<li>
									<a href="logout.php" class="text-danger">
										<i class="pe-7s-power"></i>
										<?php echo $lng_logout ?>
									</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</nav>
