<?php
function smile($text)
{
    return preg_replace(["/:\)/iu", "/:\(/"], ["💯", "☂"], $text);
}

function zensura($text)
{
    return preg_match_all("/.*дурак.*/ius", $text);
}