<?php

/**
 * CreditCard
 */
class CreditCard
{
    private $expirationDate;

    public function __construct($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    public function isValid()
    {
        // Check if the credit card is not expired 
        $currentDate = date('Y-m-d');
        return $this->expirationDate >= $currentDate;
    }
}
