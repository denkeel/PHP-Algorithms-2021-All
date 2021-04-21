<?php

class Payment
{
    public int $sum;
    public string $phoneNumber;

    public function __construct(int $sum, string $phoneNumber)
    {
        $this->sum = $sum;
        $this->phoneNumber = $phoneNumber;        
    }

    public function makePayment(IPayment $paymentSystem) {
        $paymentSystem->proceedPayment($this->sum, $this->phoneNumber);
    }
}