<?php

spl_autoload_register();

$payment = new Payment(100, "+79168423526");
$payment->makePayment(new PayPalPayment());