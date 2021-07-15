<?php


namespace App;


trait Whitespace
{
    public function getWhitespace(): bool
    {
        if (preg_match_all("/\s/iu", $this->str)) {
            return false;
        }
        return true;

    }

}