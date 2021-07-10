<?php


namespace App;


trait TopTrait
{
    public function getTopRow(): string
    {
        return mb_strtoupper($this->len);
    }
}