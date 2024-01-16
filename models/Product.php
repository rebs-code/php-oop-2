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

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return '€ ' . $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCategory()
    {
        return $this->category->name;
    }

    public function getType()
    {
        return $this->type;
    }
}
