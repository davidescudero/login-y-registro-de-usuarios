<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">LinaMejia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  
	  <?php if(!isset($_SESSION["usuario"])){?>
	      <li class="nav-item">
	        <a class="nav-link" href="login.php">Login</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="registro.php">Registro</a>
	      </li>
	   <?php }else { ?>	
	   		<?php if($_SESSION["usuario"]["rol"] == 1){?>
	   			<li class="nav-item">
		        	<a class="nav-link" href="admin.php">Admin</a>
			    </li>

			    <?php }else { ?>
			    	<li class="nav-item">
		        	<a class="nav-link" href="usuario.php">Usuario</a>
			    </li>

		    <?php } 
		    		}?>
    </ul>
  </div>
</nav>