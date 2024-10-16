<nav class="searchBar">
    <form action="submit_search.php" method="post">
        <?php
        $url = "$urlBackend/types";
        $authToken = $apiToken;
        $response_types = getRequest($url, $authToken);
        $response_types = json_decode($response_types, true);
        echo '<select name="responseType">';
        foreach ($response_types as $type) {
            $name = $type['name'];
            $slug = $type['slug'];
            echo "<option value=\"$slug\">$name</option>";
        }
        echo '</select>';
        ?>
        <?php
        // Verificar si el formulario fue enviado y si el campo de búsqueda no está vacío
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['search']) && $searchView) {
            // Obtener el término de búsqueda
            $searchTerm = $_POST['search'];
            // Escapar el término de búsqueda para evitar inyección de SQL
            $searchTerm = htmlspecialchars($searchTerm);
            ?>

            <input type="text" name="search" placeholder="Buscar" value="<?php echo $searchTerm ?>">

            <?php
        } else if ($searchView) {
            // Si no se proporcionó un término de búsqueda, mostrar un mensaje de error
            echo "No se proporcionó un término de búsqueda.";
        }

        if (!$searchView) {
            ?>
            <input type="text" name="search" placeholder="Buscar" value="<?php echo $searchTerm ?>">
            <?php
        }
        ?>
    </form>
</nav>