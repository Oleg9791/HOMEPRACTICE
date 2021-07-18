<?php

namespace App;

interface IFigures
{
    public function getAreaSquare(): float;

    public function getPerimeterSquare(): float;

    public function getAreaRhombus(): float;

    public function getPerimeterRhombus(): float;

    public function getAreaTriangle(): float;

    public function getPerimeterTriangle(): float;

    public function getAreaRectangle(): float;

    public function getPerimeterRectangle(): float;

    public function getAreaTrapezium(): float;

    public function getPerimeterTrapezium(): float;
}