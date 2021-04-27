<?php


class Ul
{
    protected array $arr;

    /**
     * @param array $arr
     * @return Ul
     */
    public function setArr(array $arr): static
    {
        $this->arr = $arr;
        return $this;
    }

    public function html()
    {
//        echo "<ul>";
//        $anonim = function ($li) {
//            echo "<li>$li</li>";
//        };
//
//        array_map($anonim, $this->arr);


//        array_map(function ($li) {
//            echo "<li>$li</li>";
//        }, $this->arr);

        return "<ul>" . implode("", array_map(fn($li) => "<li>$li</li>", $this->arr)) . "</ul>";

//        echo "</ul>";

    }

}