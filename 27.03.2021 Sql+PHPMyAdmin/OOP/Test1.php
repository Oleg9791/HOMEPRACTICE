<?php


class Test1
{
    public $name;
    public $message;
    public $email;
    public $test;

    function link($test)
    {

        $this->name = "Olya";
        $this->message = "Ok";
        $this->email = "123@ert";
        $this->test = "$this->test $this->name $this->message $this->email";
        return $this->test;
    }
}

$result = new Test1();

echo $result->link();
