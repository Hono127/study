<?php

/**
 * クラス内のthis
 */
class Person
{
    private $name;
    public $age;
    public static $whereTolive = 'Earth'; // このようにオブジェクトにも「static」は使える
    public const whereTolive = 'Earth'; // constでもokだが先頭の「$」はつけられないことに注意！呼び出す時も「$」はつけられない！

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello()
    {
        echo 'hello, ' . $this->name;
        // echo Person::bye();
        echo static::bye(); // クラス内でstaticメソッドを呼び出すときは「static::」と記述するのが一般的！！
        echo self::bye(); //上記に加えて「self」でもok!!
        return $this;
    }

    static function bye() // 先頭に「static」を付けることでstatic(静的)メソッドと呼ばれる
    {
        echo 'bye, '; // staticメソッド内では「$this」は使えなくなる
    }
}

$bob = new Person('Bob', 18);
// Person::bye(); // 右記の通りに書けばstaticメソッドは呼び出し可能！！
// $bob->hello()->bye();
$bob->hello();
// $tim = new Person('Tim', 32);
// $tim->hello();

echo Person::$whereTolive;
