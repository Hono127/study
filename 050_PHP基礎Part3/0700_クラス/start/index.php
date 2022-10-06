<?php
class Person
{
    public $name; // $hogeの前には必ず「private」 か「public」をつける
    // 「private」の場合はクラスの中のみでアクセス可能
    public $age;
    // 「public」の場合はクラスの外からもアクセス可能

    function __construct($name, $age) // このコンストラクタ関数はnewによってまず呼び出される関数
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() // functionの前には「public」があるが、省略可能！！「private」は省略不可
    // ↑↑クラス内の関数は「メソッド」という
    {
        echo 'hello, ' . $this->name; // $thisはインスタンス化されたオブジェクトを指し示す！
    }
}

$bob = new Person('Bob', 18); // ここは9行目の第一引数と第一二引数を取ってくる

// echo $bob->name;
echo $bob->hello();
