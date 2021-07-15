<?php


namespace App;


trait Kir
{
    public function getKir(): bool
    {
        if (preg_match_all("/[а-я]/iu", $this->str)) {
            return true;
        }
        return false;

    }

}