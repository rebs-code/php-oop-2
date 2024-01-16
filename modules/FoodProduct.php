<?php
// import the Product class
require_once 'Product.php';

/**
 * FoodProduct
 */
class FoodProduct extends Product
{

    // add expiration_date property as propery only of Foodproduct
    public $expiration_date;

    /**
     * __construct
     *
     * @param  mixed $name
     * @param  mixed $price
     * @param  mixed $description
     * @param  mixed $category
     * @param  mixed $expiration_date
     * @return void
     */
    // add expiration_date as parameter of the constructor
    public function __construct($name, $price, $description, Category $category, $expiration_date)
    {
        // call the parent constructor before anything else, then we can add the expiration_date property
        parent::__construct($name, $price, $description, $category);
        $this->expiration_date = $expiration_date;
    }
}
