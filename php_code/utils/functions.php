<?php
function postRequest($url, $body, $authToken)
{
    $headers = [
        "Authorization: $authToken",
        "Content-Type: application/json",
    ];

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));

    $response = curl_exec($ch);

    $resp = curl_errno($ch) ? 'Error:' . curl_error($ch) : $response;

    curl_close($ch);
    return $resp;
}

function getRequest($url, $authToken)
{
    $headers = [
        "Authorization: $authToken",
        "Content-Type: application/json",
    ];

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);

    $resp = curl_errno($ch) ? 'Error:' . curl_error($ch) : $response;

    curl_close($ch);
    return $resp;
}
