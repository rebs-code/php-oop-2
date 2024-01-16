
<?php

require_once __DIR__ . '/../database/db.php';
require_once __DIR__ . '/../models/Product.php';
require_once __DIR__ . '/../models/Category.php';

//controller
//logica

$products = [];

foreach ($products_db as $product) {
    array_push($products, new Product($product['name'], $product['price'], $product['description'], $product['category'], $product['type']));
}
