<?php
$arry = [
  'name' => 'Bob',
  'age' => 12,
  'sports' => ['baseball', 'swimming']
];
echo $arry['name'];
echo '<br>';
echo $arry['age'];
echo '<br>';
echo $arry['sports'][1];
// unset($arry['name']);