<?php


namespace App;


trait BottomTrait
{
    public function getBottomRow(): string
    {
        return mb_strtolower($this->len);
    }
}