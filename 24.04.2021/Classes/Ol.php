<?php


class Ol
{
    protected array $arr;

    /**
     * @param array $arr
     * @return Ol
     */
    public function setArr(array $arr): static
    {
        $this->arr = $arr;
        return $this;
    }

    public function html()
    {
        $html = "<ol>";
        array_walk($this->arr, function ($li) use (&$html) {
            $html .= "<li>$li</li>";
        });
        $html .= "</ol>";
        return $html;
    }
}