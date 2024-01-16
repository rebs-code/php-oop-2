
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '../../database/db.php';
require_once __DIR__ . '../../models/Product.php';
require_once __DIR__ . '../../models/Category.php';


//controller
//logica

$products = [];

foreach ($products_db as $product) {
    var_dump($product);
    $category = new Category($product['category']);
    array_push($products, new Product($product['name'], $product['price'], $product['description'], $category, $product['type']));
}

var_dump($products);
