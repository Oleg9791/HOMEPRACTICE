<?php


class Br extends TagName
{

    public function html()
    {
        return "<br style='$this->style' class='$this->class'> ";
    }
}
