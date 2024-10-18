<?php require "./components/header.php"; ?>

<?php

$searchView = true;
require "./components/searchInput.php";

$authToken = $apiToken;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $url = "$urlBackend/resources/$id";
    $response_resources = getRequest($url, $authToken);
    $response_resources = json_decode($response_resources, true);
}

?>

<div class="resultsContainer">

    <?php foreach ($response_resources['fields'] as $f): ?>
        <div class="listItem">
            <div><?php echo $f['label'] ?></div>
            <div><?php echo $f['value'] ?></div>
        </div>
    <?php endforeach; ?>

</div>

<?php require "./components/footer.php"; ?>