<?php


namespace App;


trait ArabNum
{
    public function getArabNum(): bool
    {
        if (preg_match_all("/[0-9]/iu", $this->str)) {
            return true;
        }
        return false;

    }

}