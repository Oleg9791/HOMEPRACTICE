<?php


namespace App;


trait Numeric
{
    public function getSymbol(): bool
    {
        if (preg_match_all("/[~! ? @ # $ % ^ & * _ \- + ( ) [ ] { } > < \/  \| \" \' \. , : ;]/iu", $this->str)) {
            return true;
        }
        return false;

    }

}