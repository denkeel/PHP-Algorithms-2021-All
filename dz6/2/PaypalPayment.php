<?php

class PaypalPayment implements IPayment
{
    public function proceedPayment(int $sum, string $phoneNumber)
    {
        echo "Paypal payment succeed";
    }
}