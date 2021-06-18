<?php

namespace Classes;

class Weather
{
    protected string $cityName;
    protected string $temperature;

    /**
     * @param string $cityName
     * @return $this
     */
    public function setCityName(string $cityName): static
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTemperature(): string
    {
        $html = file_get_contents("https://yandex.by/pogoda/{$this->cityName}");
        preg_match_all("/<div class=\"temp\" role=\"text\"><span class=\"temp__value temp__value_with-unit\">(.*?)<\/span>/uim", $html, $matches);
        return $matches[1][0];
    }
}