<?php

namespace Classes;
class Weather
{
    protected string $cityName;
    protected string $temperature;

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
    public function setTemperature(string $temperature): static
    {
        $this->temperature = $temperature;
        return $this;
    }

    public function resultTemperature(): string
    {
        return "{$this->cityName} {$this->temperature}";
    }
}