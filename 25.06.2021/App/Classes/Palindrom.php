<?php

namespace Classes;

class Palindrom
{
    protected string $str = "";

    public function __construct()
    {
        $this->setStr($this->str);
    }

    /**
     * @param string $str
     */
    public function setStr(string $str): static
    {
        $this->str = $str;
        return $this;
    }

    public function checkPolindrom()
    {
        $row = preg_replace("/[.,!:-]\s+/ui", "", mb_strtolower($this->str));
        echo $row;
        $reversStr = "";

        for ($i = mb_strlen($row); $i >= 0; $i--) {
            $reversStr .= mb_substr($row, $i, 1);
        }
        return $row == $reversStr ? "POLINDROM" : "NOT POlindrom!!!";
    }

}