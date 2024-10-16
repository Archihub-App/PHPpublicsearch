<?php require "./components/header.php"; ?>

<?php

$searchView = true;
require "./components/searchInput.php";

$url = $urlBackend;
$authToken = $apiToken;
$body = [
    "search" => $searchTerm
];
$response_resources = postRequest($url, $body, $authToken);

?>

<?php require "./components/footer.php"; ?>