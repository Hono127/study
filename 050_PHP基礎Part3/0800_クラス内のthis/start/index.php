<?php
class Person
{
    private $name;
    public $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello()
    {
        echo 'hello, ' . $this->name . '<br>';
        return $this;
    }

    function bye()
    {
        // echo 'bye, ' . $this->name . '<br>' . '<br>';
        echo "bye,{$this->name}<br><br>";
        return $this;
    }
}

$bob = new Person('Bob', 18);
$bob->hello()->bye(); // これはチェーンメソッド。つなげて呼び出せる！

$tim = new Person('Tim', 20);
$tim->hello()->bye();
