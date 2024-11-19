<?php
// Conexión a la base de datos
try {
    $db = new PDO('mysql:host=localhost;dbname=master', 'root', ''); // Configuración de la base de datos
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Mejor manejo de errores
}
catch (Exception $e) {
    die("Error de conexión: " . $e->getMessage());  // Si no puede conectar, se termina la ejecución y muestra el error
}
?>
