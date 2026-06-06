<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="caja_inicio_sesion">
            <h1>Login</h1>
           <form method="post" action="">
            <h3>Nombre</h3>
		        <input type="text" id="Nombre" name="Nombre" placeholder="Nombre" required>
             <h3>Usuario</h3>
		        <input type="text" id="Usuario" name="Usuario" placeholder="Usuario" required>
            <h3>Contraseña</h3>
                <input type="password" autocomplete="" id="Pass" name="Contraseña" placeholder="Contraseña" required>
                <button id="botonchido" type="submit" name="login">Iniciar</button>
            </form>
        </div>
    </body>
</html>