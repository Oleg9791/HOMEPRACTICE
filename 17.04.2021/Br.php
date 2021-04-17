<?php


class Br
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
        return "<br>$this->innerText\n<br>\n<br>\n";
    }
}
