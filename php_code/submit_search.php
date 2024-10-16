<?php require "./components/header.php"; ?>

<?php

$searchView = true;
require "./components/searchInput.php";

$url = $urlBackend;
$authToken = $apiToken;
$body = [
    "search" => $searchTerm
];
$headers = [
    "Authorization: $authToken",
    "Content-Type: application/json",
];

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_STDERR, $verboseHandle);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo $response;
}



curl_close($ch);
?>

<?php require "./components/footer.php"; ?>