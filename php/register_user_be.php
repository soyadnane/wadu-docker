<?php

// Este "include" incluye y nos recoje el acceso ya concedido, para poder registrar los usuarios.
include 'conexion_be.php';

// Variables propias ($X) siendo "adquiridas" mediante POST del formulario y los "name" asignados anteriormente.
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Encriptar la contraseña (No le he dado uso, pero es bastante interesante.)
// $password = hash('sha512', $password);

// La Query se crea para los datos que obtengamos los guarde en nuestra tabla.
$query = "INSERT INTO usuarios(name, nickname, email, password)
              VALUES ('$name', '$nickname', '$email', '$password')";


// #########################################################################################################
// Verificar que no se repitan los datos.
$verify_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");

// Verifica si existe una fila con el mismo valor que el campo email.
if (mysqli_num_rows($verify_email) > 0) {
    // ! $error = "<span class='text-danger'>Email/Contraseña invalida</span>";
    echo '
            <script>
                alert("Este correo ya está registrado, intenta con otro diferente");
                window.location = "./mTN7ahiD.php";
            </script>
        ';
    // Para que NO siga ejecutando el resto del script.
    exit();
}

$verify_nickname = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$nickname'");

// Verifica si existe una fila con el mismo valor que el campo nickname.
if (mysqli_num_rows($verify_nickname) > 0) {
    echo '
        <script>
            alert("Este correo ya está registrado, intenta con otro diferente");
            window.location = "../index.php";
        </script>
    ';
    // ! Usar para volver a una de las páginas deseadas.
    // ! header('Location: index.php?');

    // Para que no se siga ejecutando el resto del script.
    exit();
}
// #########################################################################################################

$execute = mysqli_query($conexion, $query);

/* ESTO NO LE HAGAS CASO:
header("Location: http://localhost:8080/mTN7ahiD.php?execute=$execute");
*/

// Necesitamos ejecutar la Query. (Abrimos con la llave la db: '$conexion').
if ($execute) {
    echo '
            <script>
                alert("Usuario almacenado exitosamente.");
                window.location = "../index.php";
            </script>
        ';
} else {
    echo '
        <script>
            alert("Intentalo de nuevo, usuario no almacenado.");
            window.location = "./mTN7ahiD.php";
        </script>
    ';
}


// Esto es para cerrar la conexión a la base de datos.
mysqli_close($conexion);