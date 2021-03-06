<?php

class CircleAdapter implements ICircle
{
    function circleArea(int $circumference) {
        $diameter = $circumference / M_PI; // C = pi*d, d = C / pi

        $squareAreaLib = new CircleAreaLib;
        $area = $squareAreaLib->getCircleArea($diameter);

        return $area;
    }
}
