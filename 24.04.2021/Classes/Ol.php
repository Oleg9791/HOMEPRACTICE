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
        echo "<ol>";
        array_walk($this->arr, function ($li) {
            echo "<li>$li</li>";
        });
        echo "</ol>";

    }
}