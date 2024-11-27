<?php
include 'crud_operations.php';

// Datos a enviar en el POST (modifica según lo que acepte tu API)
$data = [
    'name' => 'Nuevo Activo',
    'emp' => 1,
    'estado' => 'A'
];

$result = apiPost('EQU_ED', $data); // Sustituye 'EQU_ED' por el endpoint adecuado
echo "HTTP Code: " . $result['httpCode'] . "\n";
echo "Response: ";
print_r($result['response']);
?>


<!-- Añadir nuevos datos Funciona -->