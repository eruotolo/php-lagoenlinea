    	<div class="sidebar-wrapper">
    	    <div class="user">
    	        <div class="info">
    	            <div class="photo">
    	                <img src="<?php echo $avatar_photo_url ?>" />
    	            </div>

    	            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
    	                <span>
    	                    <?php echo $fullname ?>
    	                    <b class="caret"></b>
    	                </span>
    	            </a>

    	            <div class="collapse" id="collapseExample">
    	                <ul class="nav">
    	                    <li>
    	                        <a href="index.php?userid=<?php echo $userid ?>&section=user-profile">
    	                            <i class="pe-7s-info"></i>
    	                            <span class="sidebar-normal"><?php echo $lng_myprofile ?></span>
    	                        </a>
    	                    </li>
    	                    <li>
    	                        <a href="logout.php">
    	                            <i class="pe-7s-power"></i>
    	                            <span class="sidebar-normal"><?php echo $lng_logout ?></span>
    	                        </a>
    	                    </li>
    	                </ul>
    	            </div>
    	        </div>
    	    </div>

    	    <ul class="nav">
    	        <li class="active">
    	            <a href="index.php?userid=<?php echo $userid ?>">
    	                <i class="pe-7s-monitor"></i>
    	                <p>Estación de Monitoreo</p>
    	            </a>
    	        </li>



    	        <li>
    	            <a data-toggle="collapse" href="#mgenom">
    	                <i class="pe-7s-graph"></i>
    	                <p>Metagenómica
    	                    <b class="caret"></b>
    	                </p>
    	            </a>
    	            <div class="collapse" id="mgenom">
    	                <ul class="nav">
    	                    <li>
    	                        <a href="index.php?userid=<?php echo $userid ?>&section=metagenomica-add">
    	                            <span class="sidebar-mini">&nbsp;</span>
    	                            <span class="sidebar-normal">Ingresar Nuevo</span>
    	                        </a>
    	                    </li>
    	                    <li>
    	                        <a href="index.php?userid=<?php echo $userid ?>&section=metagenomica-view">
    	                            <span class="sidebar-mini">&nbsp;</span>
    	                            <span class="sidebar-normal">Ver Gráficas</span>
    	                        </a>
    	                    </li>
    	                </ul>
    	            </div>
    	        </li>

    	        <li>
    	            <a data-toggle="collapse" href="#tdet">
    	                <i class="pe-7s-global"></i>
    	                <p>Teledetección
    	                    <b class="caret"></b>
    	                </p>
    	            </a>
    	            <div class="collapse" id="tdet">
    	                <ul class="nav">
    	                    <li>
    	                        <a href="index.php?userid=<?php echo $userid ?>&section=teledeteccion-add">
    	                            <span class="sidebar-mini">&nbsp;</span>
    	                            <span class="sidebar-normal">Ingresar Nuevo</span>
    	                        </a>
    	                    </li>
    	                    <li>
    	                        <a href="index.php?userid=<?php echo $userid ?>&section=teledeteccion-view">
    	                            <span class="sidebar-mini">&nbsp;</span>
    	                            <span class="sidebar-normal">Ver Gráficas</span>
    	                        </a>
    	                    </li>
    	                </ul>
    	            </div>
    	        </li>
    	        <li>
    	            <a href="index.php?userid=<?php echo $userid ?>&section=incidentes">
    	                <i class="pe-7s-news-paper"></i>
    	                <p>Incidencias
    	                </p>
    	            </a>
    	        </li>	
				
				
    	        <li>
    	            <a data-toggle="collapse" href="#lsh">
    	                <i class="pe-7s-global"></i>
    	                <p>Lago Sin Huella
    	                    <b class="caret"></b>
    	                </p>
    	            </a>
    	            <div class="collapse" id="lsh">
    	                <ul class="nav">
    	                    <li>
    	                        <a href="index.php?userid=<?php echo $userid ?>&section=lagosinhuella">
    	                            <span class="sidebar-mini">&nbsp;</span>
    	                            <span class="sidebar-normal">Puntos de Muestreo</span>
    	                        </a>
    	                    </li>
    	                    <li>
    	                        <a href="index.php?userid=<?php echo $userid ?>&section=lagosinhuella-biblioteca">
    	                            <span class="sidebar-mini">&nbsp;</span>
    	                            <span class="sidebar-normal">Biblioteca</span>
    	                        </a>
    	                    </li>
    	                </ul>
    	            </div>
    	        </li>
				
    	        <li>
    	            <a href="index.php?userid=<?php echo $userid ?>&section=documentos-complementatios">
    	                <i class="pe-7s-news-paper"></i>
    	                <p>Biblioteca
    	                </p>
    	            </a>
    	        </li>
    	        <?php
                if ($administrador == 1) {

                ?>
    	            <li>
    	                <a data-toggle="collapse" href="#us">
    	                    <i class="pe-7s-user"></i>
    	                    <p>Usuarios
    	                        <b class="caret"></b>
    	                    </p>
    	                </a>
    	                <div class="collapse" id="us">
    	                    <ul class="nav">
    	                        <li>
    	                            <a href="index.php?userid=<?php echo $userid ?>&section=user-add">
    	                                <span class="sidebar-mini">&nbsp;</span>
    	                                <span class="sidebar-normal">Crear Usuario</span>
    	                            </a>
    	                        </li>
    	                        <li>
    	                            <a href="index.php?userid=<?php echo $userid ?>&section=user-list">
    	                                <span class="sidebar-mini">&nbsp;</span>
    	                                <span class="sidebar-normal">Listado de Usuarios</span>
    	                            </a>
    	                        </li>
    	                    </ul>
    	                </div>
    	            </li>
    	        <?php
                }
                ?>
    	        
    	        <li>
    	            <a href="index.php?userid=<?php echo $userid ?>&section=manual">
    	                <i class="pe-7s-help1"></i>
    	                <p>Manual
    	                </p>
    	            </a>
    	        </li>

    	    </ul>
    	</div>