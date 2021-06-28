<?php

namespace App;

class Weather
{
    protected string $city;

    /**
     * @param string $city
     */
    public function setCity(string $city): static
    {
        $this->city = $city;
        return $this;
    }

    public function getTemperature(): string
    {
        $html = file_get_contents("https://yandex.by/pogoda/{$this->city}");

//        $arr = preg_match_all("/<div class=\"temp\" role=\"text\"><span class=\"temp__value temp__value_with-unit\">(.*?)<\/span>/uim", $html, $match);
        $arr = preg_match_all("/<div class=\"temp\" role=\"text\"><span class=\"temp__value temp__value_with-unit\">(.*?)<\/span>/uim", $html, $match);
        return $match[1][0];
    }
}