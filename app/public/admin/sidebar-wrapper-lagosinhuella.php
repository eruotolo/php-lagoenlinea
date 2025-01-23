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
    	    </ul>
    	</div>