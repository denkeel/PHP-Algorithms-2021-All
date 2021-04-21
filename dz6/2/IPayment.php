<?php

interface IPayment
{
    public function proceedPayment(int $sum, string $phoneNumber);
}