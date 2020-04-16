
<?php include 'partials/head.php'; 

if(isset($_SESSION["usuario"])){
	if($_SESSION["usuario"]["rol"]==1){
		header("location:admin.php");
	}
}else{

	header("location:login.php");
}
?>

<?php include 'partials/menu.php'; ?>

<div class = "container text-center">
<br>
	<div class="jumbotron">
	 
	  <p class="lead">Bienvenidos <?php echo $_SESSION["usuario"]["nombre"];?></p>
	  <hr class="my-4">
	  <p>privilegios | <?php echo $_SESSION["usuario"]["rol"]==1? 'Administrador': 'cliente ';?></p>
	  <a class="btn btn-primary btn-lg" href="cerrar_session.php" role="button">Cerrar sesion</a>
	</div>
</div>

<?php include 'partials/footer.php'; ?>