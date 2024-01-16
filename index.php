<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . '../../database/db.php';
require_once __DIR__ . '../../models/Product.php';


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
        <h2><?= $product->getName(); ?></h2>
        <div>
            <ul>
                <li>Price: <?= $product->getPrice(); ?></li>
                <li>Description: <?= $product->getDescription(); ?></li>
                <li>Category: <?= $product->getCategory(); ?> </li>
                <li>Type: <?= $product->getType(); ?> </li>
            </ul>
        </div>

    <?php endforeach; ?>

</body>

</html>