<?php

namespace App;

class Polindrom
{
    protected string $str;

    /**
     * @param string $str
     * @return $this
     */
    public function setStr(string $str): static
    {
        $this->str = $str;
        return $this;
    }

    public function getPolindrom()
    {
//        $row = preg_replace("/[!?,.-=]\s+/ui", "", mb_strtolower($this->str));
//
//        $a = "";
//
//        for ($i = mb_strlen($row); $i >= 0; $i--) {
//            $a .= mb_substr($row, $i, 1);
//        }
//        return $row != $a ? "Not Polindrom" : "Polindrom";


                $text = $this->str;
        $b = strrev($text);
        $result = preg_replace("/[+!?,.-]\s+/ui", "", $b);
        $res = mb_strtolower($result);
        $a = str_split($res, 1);
        $item = "";
        foreach ($a as $value) {
            $item .= $value;
        }
        if ($res == $item) {
            return "Polindrom";

        } else {
            return "Not polindrom";

        }



    }
}



