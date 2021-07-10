<?php


namespace App;


trait NumericTrait
{
    public function getNum(): int
    {

        $pattern = "/[\d]/u";
        return preg_match_all($pattern, $this->len);
    }

}