<?php


class Image extends TagName
{
    protected string $src;

    /**
     * @param string $src
     * @return Image
     */
    public function setSrc(string $src): static
    {
        $this->src = $src;
        return $this;
    }

    public function html()
    {
        return "<img src='$this->src' style='$this->style' class='$this->class'>";
    }

}