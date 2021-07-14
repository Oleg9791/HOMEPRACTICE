<?php


namespace App;


class Row
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
        $num = iconv_strlen($this->str);
        if ($num < 8) {
//            echo "Введите больше 8";
            return false;

        } else {
            return true;
        }
    }
}