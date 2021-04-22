<?php


class Br extends TagName
{
    protected string $innerText;

    /**
     * @param string $innerText
     * @return Br
     */
    public function setInnerText(string $innerText): Br
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function html()
    {
        return "<br style='$this->style' class='$this->class'> $this->innerText\n<br>$this->innerText";
    }
}
