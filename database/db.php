<?php

$dogCategory = new Category('Dogs');
$catCategory = new Category('Cats');

$products = [
    new FoodProduct('Dog food', 20.99, 'Healthy dog food', $dogCategory, '2024-12-31'),
    new ToyProduct('Cat Toy', 9.99, 'Interactive cat toy', $catCategory, 'Plastic'),
    new KennelProduct('Dog Kennel', 99.99, 'Cozy dog kennel', $dogCategory, 'Large')
];
