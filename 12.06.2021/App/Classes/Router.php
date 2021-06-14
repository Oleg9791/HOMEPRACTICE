<?php


namespace Classes;


class Router
{
    public function run()
    {
        if (isset($_POST['bel'])) {
            $converter = new Converter($_POST['bel']);
        }
        if (isset($_GET['convert'])) {
            echo($converter->{$_POST['convert']}());
        } else {
            include "../template/index.html";
        }
    }
}