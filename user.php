<?php 

session_start();

if (!isset($_SESSION['username'])){
	header("Location: index.php");
	exit();
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Usuario</title>
    </head>
    <body>
        <div class="box">
			<h1>Bienvenido,<span><?= $_SESSION['name']; ?></span>! :D</h1>
			<p>Eres un <b>Usuario</b> lol</p>
			<button onclick="window.location.href='logout.php'">Cerrar Sesion</button>
		</div>
    </body>
</html>