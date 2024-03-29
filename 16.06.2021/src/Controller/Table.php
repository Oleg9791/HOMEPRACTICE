<?php

namespace App\Controller;

use W1020\Table as OrmTable;
use App\View\View;

class Table
{
    protected $model;
    protected $view;

    public function __construct()
    {
        $config = include __DIR__ . "/../../Config.php";
        print_r($config);
        $this->model = new OrmTable($config);
        $this->view = new View();
    }

    public function show()
    {
        $this->view->setData($this->model)->setTemplate("Table/show")->view();
    }
}