<?php


abstract class TagName
{
    protected string $style;
    protected string $class;

    /**
     * @param string $style
     * @return TagName
     */
    public function setStyle(string $style): static
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @param string $class
     * @return TagName
     */
    public function setClass(string $class): static
    {
        $this->class = $class;
        return $this;

    }

    abstract public function html();
}