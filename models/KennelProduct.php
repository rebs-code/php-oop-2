<?php

// import the Product class
require_once 'Product.php';

/**
 * KennelProduct
 */
class KennelProduct extends Product
{

    // add expiration_date property as propery only of Foodproduct
    public $pet_size;

    /**
     * __construct
     *
     * @param  mixed $name
     * @param  mixed $price
     * @param  mixed $description
     * @param  mixed $category
     * @param  mixed $pet_size
     * @return void
     */
    // add material as parameter of the constructor
    public function __construct($name, $price, $description, Category $category, $pet_size)
    {
        // call the parent constructor before anything else, then we can add the expiration_date property
        parent::__construct($name, $price, $description, $category, 'kennel');
        $this->pet_size = $pet_size;
    }
}
