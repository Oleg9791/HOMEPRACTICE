<?php


namespace App;


trait Symbol
{
    public function getSymbol(): bool
    {
        if (preg_match_all("/[~! ? @ # $ % ^ & * _ \- + ( ) [ ] { } > < \/  \| \" \' \. , : ;]/iu", $this->str)) {
            return false;
        }
        return true;

    }

}