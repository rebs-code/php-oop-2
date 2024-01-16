<?php
require_once __DIR__ . '/Controllers/ControllerProduct.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products PHP</title>
</head>

<body>
    <header>
        <h1>Pet Products</h1>
    </header>
    <?php foreach ($products as $product) : ?>
        <hr>
        <h2><?= $product->get_name(); ?></h2>
        <div>
            <ul>
                <li>Durata: <?php echo $movie->get_duration(); ?></li>
                <li>Anno: <?php echo $movie->get_year(); ?></li>
                <li>Generi: <?php echo $movie->get_all_genres(); ?> </li>
            </ul>
        </div>



    <?php endforeach; ?>

</body>

</html>