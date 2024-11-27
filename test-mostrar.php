<?php
include 'crud_operations.php';

// Asigna manualmente el ID en el código (de prueba)
$id = null;  // Deja esto como null si quieres mostrar todos los recursos, o asigna un ID específico si solo quieres mostrar uno

// Si el ID es proporcionado, mostramos ese recurso específico
if ($id) {
    $result = apiGet('EQU_ED/' . $id);  // Llamada para obtener el recurso con ese ID
} else {
    // Si no hay ID, mostramos todos los recursos
    $result = apiGet('EQU_ED');  // Llamada para obtener todos los recursos
}

echo "HTTP Code: " . $result['httpCode'] . "\n";
echo "Response: ";
print_r($result['response']);  // Imprime la respuesta completa
