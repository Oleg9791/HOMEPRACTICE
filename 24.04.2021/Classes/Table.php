<?php


class Table
{
    protected array $arr;

    /**
     * @param array $arr
     * @return Table
     */
    public function setArr(array $arr): static
    {
        $this->arr = $arr;
        return $this;
    }

    public function html(): void
    {
        echo "<table border='1'>";
        array_walk($this->arr, function ($li) {
            echo "<tr><td>$li</td></tr>";
        });
        echo "</table>";

    }

}