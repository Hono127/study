<?php
$arry = [
  ['table', 1000], // インデックス番号0
  ['chair', 100], // インデックス番号1
  ['desk', 300], // インデックス番号2
  ['pc', 800], // インデックス番号3
  ['bed', 10000], // インデックス番号4
];

// array_shift($arry);//一番前の配列が消える
// array_pop($arry);//一番後ろの配列が消える

array_splice($arry, 1, 1);

// $arry[1][1] = 500;

foreach ($arry as $val) {
  // echo "{$val[0]}は$val[1]円です。";
  print_r($val);
}
