<?php

class Product
{
    public $name;
    public $price;
    public $description;
    public $category;
    public $type;

    public function __construct($name, $price, $description, Category $category, $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
        $this->type = $type;
    }
}
