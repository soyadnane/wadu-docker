<?php
// Se coloca esto siempre para que se sepa que se trabajara con sesiones.
session_start();

include 'conexion_be.php';

$email_login = $_POST['email_login'];
$password_login = $_POST['password_login'];


// Creamos una variable para almacenar la validación.
$validate_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email_login'
and password = '$password_login'");


// Versión 1.1
/* Comprobar que existe en la base los datos introducidos por el usuario.
if (mysqli_num_rows($validate_login) > 0) {
    header("location: ../portal.php");
    // Guardamos en cache el email con el que se ha logeado.
    $_SESSION['usuario'] = $email_login;
    exit;
} else {
    echo '
       <script>
            alert("Usuario no existe, porfavor verifique los datos");
            window.location = "../index.php";
       </script>
    ';
    exit;
}
 */

 // Versión 1.2
if (mysqli_num_rows($validate_login) > 0) {
    header("location: ../portal.php");
    $_SESSION['usuario'] = $email_login;
    exit;
} else {
    // Guarda el mensaje de error en una variable de sesión
    $_SESSION['error_message'] = "Usuario o contraseña incorrecto";
    header("location: ../index.php");
    exit;
}