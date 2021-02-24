<?php

class SquareAdapter implements ISquare
{
    public function squareArea(int $sideSquare)
    {
        $diagonal = $sideSquare * sqrt(2);

        $squareAreaLib = new SquareAreaLib;
        $area = $squareAreaLib->getSquareArea($diagonal);

        return $area;
    }
}
