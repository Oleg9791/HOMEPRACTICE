<?php


namespace Classes;


class Converter
{
    protected float $bel = 1;

    public function __construct($bel = 1)
    {
        $this->setBel($bel);
    }

    /**
     * @param float $bel
     * @return $this
     */
    public function setBel(float $bel): static
    {
        $this->bel = $bel;
        return $this;
    }

    public function dollar(): float
    {
        $dol = $this->bel * 0.4;
        if ($dol > 1000) {
            return $this->bel * 0.45;
        }
        return $dol;
    }

    public function euro(): float
    {
        $euro = $this->bel * 0.33;
        if ($euro > 1000) {
            return $this->bel * 0.4;
        }
        return $euro;
    }

    public function rub(): float
    {
        $rub = $this->bel * 28.88;
        if ($rub > 100000) {
            return $this->bel * 32.4;
        }
        return $rub;
    }

    public function chf(): float
    {
        $chf = $this->bel * 0.36;
        if ($chf > 1000) {
            return $this->bel * 0.9;
        }
        return $chf;
    }

    public function aud(): float
    {
        $aud = $this->bel * 0.52;
        if ($aud > 1000) {
            return $this->bel * 0.6;
        }
        return $aud;
    }

//    public function bel(float $method): float
//    {
//        if ($this->dollar() == $method) {
//            return $method * 2.48;
//        }
//        if ($this->euro() == $method) {
//            return $method * 3.02;
//        }
//        if ($this->chf() == $method) {
//            return $method * 2.77;
//        }
//        if ($this->rub() == $method) {
//            return $method * 0.03;
//        }
//        if ($this->aud() == $method) {
//            return $method * 1.92;
//        }
//        if ($this->bel($method) == $method) {
//            return $this->bel;
//        }
//
//
//    }

}