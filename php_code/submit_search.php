<?php require "./components/header.php"; ?>

<?php

$searchView = true;
require "./components/searchInput.php";

$url = $urlBackend;
$authToken = $apiToken;
$body = [
    "search" => $searchTerm
];
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['responseType'])) {
    $responseType = $_POST['responseType'];
    $body['post_type'] = [$responseType];
    $body['keyword'] = $searchTerm;
    $body['page'] = 0;
}
$response_resources = postRequest($url, $body, $authToken);
$response_resources = json_decode($response_resources, true);
$total = $response_resources['total'];
$resources = $response_resources['resources'];

?>

<div class="resultsContainer">

    <?php foreach ($resources as $r): ?>
        <a href="detail.php?id=<?php echo $r['id'] ?>" class="listItem">
            <div><?php echo $r['ident'] ?></div>
            <div><?php echo $r['metadata']['firstLevel']['title'] ?></div>
        </a>

    <?php endforeach; ?>

</div>

<?php require "./components/footer.php"; ?>