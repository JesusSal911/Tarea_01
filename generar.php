<?php
session_start();

// Incluir el archivo de conexión
include('serv.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : ''; // 'usuario' es el nombre del campo en el formulario
    $clave = isset($_POST['clave']) ? $_POST['clave'] : ''; // 'clave' es el nombre del campo para la contraseña

    // Verificar si los valores están presentes
    if (!empty($usuario) && !empty($clave)) {
        try {
            // Preparar la consulta SQL para evitar inyecciones SQL
            $stmt = $db->prepare("INSERT INTO usuario (usuario, clave) VALUES (:usuario, :clave)");

            // Ejecutar la consulta pasando los parámetros
            $stmt->execute(['usuario' => $usuario, 'clave' => $clave]);

            // Si el usuario fue creado exitosamente, mostrar un mensaje de éxito
            echo '<script>alert("Nuevo usuario creado exitosamente.");</script>';
            echo '<script>window.location="registro.php";</script>';
        } catch (Exception $e) {
            // Si hubo un error, mostrar mensaje de error
            echo '<script>alert("Error al crear el usuario: ' . $e->getMessage() . '");</script>';
            echo '<script>window.location="iniciar.php";</script>';
        }
    } else {
        echo '<script>alert("Por favor, ingresa todos los campos.");</script>';
        echo '<script>window.location="iniciar.php";</script>';
    }
}
?>