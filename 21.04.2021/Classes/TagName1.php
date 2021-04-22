<?php


abstract class TagName1
{
    protected string $style;
    protected string $class;

    /**
     * @param string $style
     * @return TagName1
     */
    public function setStyle(string $style): static
    {
        $this->style = $style;
        return $this;
    }

    /**
     * @param string $class
     * @return TagName1
     */
    public function setClass(string $class): static
    {
        $this->class = $class;
        return $this;
    }

    abstract public function html();
}