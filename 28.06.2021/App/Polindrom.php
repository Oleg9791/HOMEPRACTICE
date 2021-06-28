<?php

namespace App;

class Polindrom
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

    public function polindrom()
    {
        $row = str_replace(" ", "", mb_strtolower($this->str));
        $a = "";
        for ($i = mb_strlen($row); $i >= 0; $i--) {
            $a .= mb_substr($row, $i, 1);
        }
        return ($row == $a) ? "Polindrom" : "Not Polindrom";

    }
}