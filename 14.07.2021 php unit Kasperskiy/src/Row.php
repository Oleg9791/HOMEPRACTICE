<?php


namespace App;


class Row //implements IRow
{
    protected string $str;

    /**
     * @param string $str
     */
    public function setStr(string $str): static
    {
        $this->str = $str;
        return $this;
    }

    public function getCountNum(): bool
    {
        $num = strlen($this->str);
        if ($num < 8) {
            return false;

        } else {
            return true;
        }
    }

    public function getCountNumeric(): bool
    {
        $num = mb_strlen($this->str);
        if ($num > 128) {
            return false;

        }
        return true;

    }

    public function getArabNum(): bool
    {
        if (preg_match_all("/[0-9]/", $this->str)) {
            return true;
        }
        return false;

    }

    public function getKir(): bool
    {
        if (preg_match_all("/[а-я]/iu", $this->str)) {
            return true;
        }
        return false;

    }

    public function getLat(): bool
    {
        if (preg_match_all("/[a-z]/iu", $this->str)) {
            return true;
        }
        return false;

    }

    public function getSymbol(): bool
    {
        if (preg_match_all("/[~!?@#$%^&*_\-+()\[\]{}><\/\\\|\"\\\'\\\.,:;]/u", $this->str)) {
            return false;
        }
        return true;

    }

    public function getTopBot(): bool
    {
        if (preg_match_all("/[a-zа-я]/u", $this->str) && preg_match_all("/[A-ZА-Я]/u", $this->str)) {
            return true;
        }
        return false;

    }

    public function getWhitespace(): bool
    {
        if (preg_match_all("/\s/iu", $this->str)) {
            return false;
        }
        return true;

    }


}