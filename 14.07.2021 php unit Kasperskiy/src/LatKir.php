<?php


namespace App;


trait LatKir
{
    public function getLat(): bool
    {
        if (preg_match_all("/[a-zа-я]/iu", $this->str)) {
            return true;
        }
        return false;

    }

}