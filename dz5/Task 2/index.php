<?php

spl_autoload_register();
require_once("area_lib.php");

$sideSquare = 5;
$squareAdapter = new SquareAdapter(new SquareAreaLib());
echo 'squareArea ' . $squareAdapter->squareArea($sideSquare);

echo "<br>";

$circumference = 10;
$circleAdapter  = new CircleAdapter(new CircleAreaLib());
echo 'circleArea ' . $circleAdapter->circleArea($circumference);
