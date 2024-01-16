<?php

/**
 * Customer
 */
class Customer
{
    public $name;
    private $isRegistered;
    private $discount;
    private $creditCard;

    /**
     * __construct
     *
     * @param  mixed $name
     * @param  mixed $isRegistered
     * @return void
     */
    public function __construct($name, $isRegistered = false, CreditCard $creditCard = null)
    {
        $this->name = $name;
        $this->isRegistered = $isRegistered;
        $this->creditCard = $creditCard;
        $this->calculateDiscount();
    }

    public function hasValidCreditCard()
    {
        return $this->creditCard && $this->creditCard->isValid();
    }

    private function calculateDiscount()
    {
        // 20% discount if the customer is registered
        $this->discount = $this->isRegistered ? 0.2 : 0;
    }
}
