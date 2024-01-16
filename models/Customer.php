<?php

/**
 * Customer
 */
class Customer
{
    public $name;
    private $isRegistered;
    private $discount;

    /**
     * __construct
     *
     * @param  mixed $name
     * @param  mixed $isRegistered
     * @return void
     */
    public function __construct($name, $isRegistered = false)
    {
        $this->name = $name;
        $this->isRegistered = $isRegistered;
        $this->calculateDiscount();
    }

    private function calculateDiscount()
    {
        // 20% discount if the customer is registered
        $this->discount = $this->isRegistered ? 0.2 : 0;
    }
}
