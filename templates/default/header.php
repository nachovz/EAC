<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
	    	<a class="brand" href="<?php echo $GLOBALS["baseURL"]; ?>">Aprendiendo Accesibilidad</a>
	    	<div class="nav-collapse">
	      		<ul class="nav pull-right">
					<li class="active">
						<a href="<?php echo $GLOBALS["baseURL"]; ?>">Inicio</a>
					</li>
					<li>
						<a href="<?php echo $GLOBALS["baseURL"]; ?>login">Iniciar sesi&oacute;n</a>
					</li>
					<?php if($_SESSION['user']->roleName=='invalid') { ?>
					
					<li>
						<a href="<?php echo $GLOBALS["baseURL"]; ?>signup">Crear cuenta</a>
					</li>
					<?php }else{ ?>
					<li>
						<a href="<?php echo $GLOBALS["baseURL"]; ?>crud.php?close_session">Cerrar sesi&oacute;n</a>
					</li>
					<?php } ?>
			    </ul>
	      	</div>
		</div>
	</div><!-- /topbar-inner -->
</div>
