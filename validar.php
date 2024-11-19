<?php
session_start();
include('serv.php');

// Inicialización de la variable $entro
$entro = false;

// Comprobar si se envió el formulario
if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $pw = $_POST['clave'];

    // Query para buscar el usuario y la contraseña en la base de datos
    $registros = "SELECT usuario FROM usuario WHERE usuario = :usuario AND clave = :clave";
    $stmt = $db->prepare($registros);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':clave', $pw);
    $stmt->execute();

    // Verificar si encontramos el usuario
    if ($stmt->rowCount() > 0) {
        $_SESSION["usuario"] = $usuario;  // Guardar el nombre de usuario en la sesión
        echo '<script>alert("Usuario correcto");</script>';
        echo '<script>window.location="index.html";</script>';
        $entro = true;  // Usuario encontrado
    }

    // Si no se encontró el usuario, mostrar un mensaje de error
    if (!$entro) {
        echo '<script>alert("Usuario incorrecto");</script>';
        echo '<script>window.location="iniciar.php";</script>';
    }
}

// Finalizar sesión si se presiona el botón 'terminar'
if (isset($_POST['terminar'])) {
    echo '<script>window.location="index.html";</script>';
}
?>
