<?php


class I extends TagName1
{
    protected string $innerText;

    /**
     * @param string $innerText
     * @return I
     */
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function html()
    {
        return "<i class='$this->class' style='$this->style'>$this->innerText</i>";
    }
}