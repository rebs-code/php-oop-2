<?php

require_once __DIR__ . '/../traits/Name.php';

/**
 * Product
 */
class Product
{
    use Name {
        set_name as set_name_trait;
        get_name as get_name_trait;
    }

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

    public function getPrice()
    {
        return '€ ' . $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getType()
    {
        return $this->type;
    }
}
