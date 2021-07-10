<?php


namespace App;


trait PunctMarksTrait
{

    public function getSigns(): int
    {

        $pattern = "/[.,!?-]/u";
        return preg_match_all($pattern, $this->len);
    }
}