<?php 

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? '',

];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error){
    return !empty($error)? "<p class='error-message'>$error</p>": '';
}

function isActiveForm($formName, $activeForm) {
 return $formName === $activeForm ? 'active' : '';
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <a href="admin.php">admin</a>
        <div class="caja_inicio_sesion">
            <h1>Login</h1>
           <form method="post" action="login_register.php">
            <?= showError($errors['login']); ?>
            <h3>Nombre</h3>
		        <input type="text" id="Nombre" name="Nombre" placeholder="Nombre" required>
             <h3>Usuario</h3>
		        <input type="text" id="Usuario" name="Usuario" placeholder="Usuario" required>
            <h3>Contraseña</h3>
                <input type="password" autocomplete="" id="Pass" name="Password" placeholder="Contraseña" required>
                <button id="botonchido" type="submit" name="login">Iniciar</button>
            </form>
        </div>
    </body>
</html>