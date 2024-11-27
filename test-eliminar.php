<?php
include 'crud_operations.php';

// ID del recurso a eliminar (modifica según tu API)
$id = 15; // ID del recurso a eliminar

// Realiza una solicitud DELETE para eliminar el recurso
$result = apiDelete('EQU_ED/' . $id); // Usamos el endpoint adecuado para la eliminación
echo "HTTP Code: " . $result['httpCode'] . "\n";
echo "Response: ";
print_r($result['response']);
