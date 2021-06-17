<?php


class Weather
{
    protected string $cityName;
    protected float $temperature;

    /**
     * @param string $cityName
     */
    public function setCityName(string $cityName): static
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @return float
     */
    public function getTemperature(): static
    {
        return $this->temperature;
    }

    /**
     * @param float $temperature
     */
    public function setTemperature(float $temperature): static
    {
        $this->temperature = $temperature;
        return $this;
    }
}