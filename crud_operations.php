<?php
include 'api.php'; // Incluye la configuración básica desde api.php

// Función para realizar una solicitud GET
function apiGet($endpoint)
{
    $url = API_URL . $endpoint . '?api_key=' . API_KEY;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Deshabilitar verificación SSL (temporal)
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Si falla, registrar errores
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        echo "cURL Error (GET): $error_msg";
    }

    curl_close($ch);

    return [
        'httpCode' => $httpCode,
        'response' => json_decode($response, true),
    ];
}

// Función para realizar una solicitud POST
function apiPost($endpoint, $data)
{
    $url = API_URL . $endpoint . '?api_key=' . API_KEY;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Deshabilitar verificación SSL (temporal)
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        echo "cURL Error (POST): $error_msg";
    }

    curl_close($ch);

    return [
        'httpCode' => $httpCode,
        'response' => json_decode($response, true),
    ];
}

// Función para realizar una solicitud PUT
// function apiPut($endpoint, $data)
// {
//     $url = API_URL . $endpoint . '?api_key=' . API_KEY;

//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $url);
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
//     curl_setopt($ch, CURLOPT_HTTPHEADER, [
//         'Content-Type: application/json',
//     ]);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//     // Deshabilitar verificación SSL (temporal)
//     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

//     $response = curl_exec($ch);
//     $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

//     if (curl_errno($ch)) {
//         $error_msg = curl_error($ch);
//         echo "cURL Error (PUT): $error_msg";
//     }

//     curl_close($ch);

//     return [
//         'httpCode' => $httpCode,
//         'response' => json_decode($response, true),
//     ];
// }


// Función para realizar una solicitud DELETE
function apiDelete($endpoint)
{
    $url = API_URL . $endpoint . '?api_key=' . API_KEY;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Deshabilitar verificación SSL (temporal)
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        echo "cURL Error (DELETE): $error_msg";
    }

    curl_close($ch);

    return [
        'httpCode' => $httpCode,
        'response' => json_decode($response, true),
    ];
}
