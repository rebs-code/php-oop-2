<?php

class Product
{
    public $name;
    public $price;
    public $description;
    public $category;

    public function __construct($name, $price, $description, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
    }
}
