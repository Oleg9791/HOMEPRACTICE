<?php


namespace App;


class Row implements IRow
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
            return false;

        } else {
            return true;
        }
    }

    public function getCountNumeric(): bool
    {
        $num = iconv_strlen($this->str);
        if ($num > 128) {
            return false;

        } else {
            return true;
        }
    }


    use LatKir;
    use Whitespace;
    use Numeric;
    use ArabNum;
}