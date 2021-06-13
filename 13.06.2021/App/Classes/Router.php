<?php


namespace Classes;


class Router
{
    public function run()
    {
        print_r($_GET);
        if (isset($_GET['currency'])) {
            if (isset($_POST['strelka'])) {
                $dollar = new Converter($_POST['strelka']);

            }

            echo $dollar->{$_POST['convertion']}();
        } else {
            include "../template/index.html";
        }
    }
}