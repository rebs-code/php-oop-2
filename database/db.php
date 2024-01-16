<?php

// import the Product class
require_once '../models/Product.php';
require_once '../models/FoodProduct.php';
require_once '../models/ToyProduct.php';
require_once '../models/KennelProduct.php';
require_once '../models/Category.php';


// Define categories
$dogCategory = new Category('Dogs');
$catCategory = new Category('Cats');

$products = [
    new FoodProduct('Dog Food', 'Healthy dog food', 20.99, $dogCategory, '2024-12-31'),
    new ToyProduct('Cat Toy', 'Interactive cat toy', 9.99, $catCategory, 'Plastic'),
    new KennelProduct('Dog Kennel', 'Cozy dog kennel', 99.99, $dogCategory, 'Large')
];
