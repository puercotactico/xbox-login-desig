<?php
// Datos de conexión a la base de datos (phpMyAdmin)
$servername = "localhost";
$username = "root";      // Usuario por defecto en XAMPP/WAMP
$password = "";          // Contraseña vacía por defecto
$dbname = "base_xbox";   // Nombre de la base de datos

// Crear conexión
// Se utiliza @ para suprimir advertencias directas de PHP y manejar el error manualmente abajo
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    // Si falla, se detiene la ejecución y muestra el mensaje
    die("❌ Error de conexión: " . $conn->connect_error);
}

// Configurar caracteres a UTF-8 para manejo correcto de tildes y eñes
if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
    exit();
}

// Mensaje de éxito (puedes comentar esta línea cuando lo uses en producción)
echo "✅ Conexión exitosa a la base de datos: <strong>$dbname</strong>";

// NOTA: No cierres la conexión aquí ($conn->close()) si vas a incluir este archivo
// dentro de otros scripts para hacer consultas.
?>