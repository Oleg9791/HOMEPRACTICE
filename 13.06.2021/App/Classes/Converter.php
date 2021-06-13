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

    public function dol(): float
    {
        $dol = $this->bel * .4031;
        if ($dol > 1000) {
            return $this->bel * .45;
        }
        return $dol;
    }

    public function eur(): float
    {
        $eur = $this->bel * .3308;
        if ($eur > 1000) {
            return $this->bel * .35;
        }
        return $eur;
    }

    public function rub(): float
    {
        $rub = $this->bel * 28.87;
        if ($rub > 1000) {
            return $this->bel * 30;
        }
        return $rub;
    }

    public function uan(): float
    {
        $uan = $this->bel * 10.89;
        if ($uan > 1000) {
            return $this->bel * 11;
        }
        return $uan;
    }

    public function pln(): float
    {
        $pln = $this->bel * 1.48;
        if ($pln > 1000) {
            return $this->bel * 1.6;
        }
        return $pln;
    }

}