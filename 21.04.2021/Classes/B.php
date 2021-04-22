<?php


class B extends TagName1
{
    protected string $innerText;

    /**
     * @param string $innerText
     * @return B
     */
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function html()
    {
        return "<b class='$this->class' style='$this->style'>$this->innerText</b>";
    }
}