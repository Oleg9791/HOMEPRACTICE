<?php

class Test
{
    public static $name = "Lena";
    public $age;
    public $phone;

    public function information()
    {
       echo self::$name;
        $this->name = "Lisa";
        $this->age = "27";
        $this->phone = "123";
        echo " {$this->name} {$this->age} {$this->phone}";
    }
}

$exsempl = new Test();

//echo $exsempl->information();
echo $exsempl->phone="678";
