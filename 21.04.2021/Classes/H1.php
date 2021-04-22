<?php


class H1 extends TagName1
{
    protected string $innerText;

    /**
     * @param string $innerText
     * @return H1
     */
    public function setInnerText(string $innerText): static
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function html()
    {
        return "<h1 class='$this->class' style='$this->style'>$this->innerText</h1>";
    }
}