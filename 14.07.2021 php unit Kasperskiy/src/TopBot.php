<?php


namespace App;


trait TopBot
{
    public function getTopBot(): bool
    {
        if (preg_match_all("/[a-zа-я]/u", $this->str) && preg_match_all("/[A-ZА-Я]/u", $this->str)) {
            return true;
        }
        return false;

    }

}