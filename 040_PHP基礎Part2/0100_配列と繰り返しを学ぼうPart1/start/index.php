<?php
$array = ['taro', 'hanako', 'hiroki',];
$array[1] = 'sachiko';
$array[] = 'saburo';
var_dump($array);



foreach ($array as $i => $v) {
  echo "<div>{$v}{$i}</div>";
}

// 配列のインデックス番号も欲しい時は下記のように記述
// foreach ($array as $i => $v) {
//   echo "<div>{$v}{$i}</div>";
// }
