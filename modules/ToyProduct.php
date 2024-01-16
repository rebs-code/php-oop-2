<?php
// import the Product class
require_once 'Product.php';

/**
 * FoodProduct
 */
class ToyProduct extends Product
{

    // add expiration_date property as propery only of Foodproduct
    public $material;

    /**
     * __construct
     *
     * @param  mixed $name
     * @param  mixed $price
     * @param  mixed $description
     * @param  mixed $category
     * @param  mixed $material
     * @return void
     */
    // add material as parameter of the constructor
    public function __construct($name, $price, $description, Category $category, $material)
    {
        // call the parent constructor before anything else, then we can add the expiration_date property
        parent::__construct($name, $price, $description, $category);
        $this->material = $material;
    }
}
