<?php require "./components/header.php"; ?>

<?php
// Verificar si el formulario fue enviado y si el campo de búsqueda no está vacío
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['search'])) {
    // Obtener el término de búsqueda
    $searchTerm = $_POST['search'];
    // Escapar el término de búsqueda para evitar inyección de SQL
    $searchTerm = htmlspecialchars($searchTerm);
    ?>

    <form action="submit_search.php" method="post">
        <input type="text" name="search" placeholder="Buscar" value="<?php echo $searchTerm ?>">
    </form>

    <?php
} else {
    // Si no se proporcionó un término de búsqueda, mostrar un mensaje de error
    echo "No se proporcionó un término de búsqueda.";
}
?>

<?php require "./components/footer.php"; ?>