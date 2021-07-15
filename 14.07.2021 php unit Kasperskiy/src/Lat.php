<?php


namespace App;


trait Lat
{
    public function getLat(): bool
    {
        if (preg_match_all("/[a-z]/iu", $this->str)) {
            return true;
        }
        return false;

    }

}