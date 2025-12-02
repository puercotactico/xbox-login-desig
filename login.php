<?php
include 'conexion.php';

// Consulta para obtener todos los productos
$sql = "SELECT titulo, descripcion, precio, imagen_url, tag, es_digital FROM productos";
$result = $conn->query($sql);

$productos = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Formatear precio para que se vea bien
        $row['precio'] = ($row['precio'] == 0) ? "GRATIS" : "$" . $row['precio'];
        $productos[] = $row;
    }
}

// Devolver datos en formato JSON para que JavaScript los entienda
header('Content-Type: application/json');
echo json_encode($productos);

$conn->close();
?>