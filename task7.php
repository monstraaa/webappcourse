<?php
$arr = ["Петя" => 12, "Коля"=> 34];
$sum = 0;
foreach ($arr as $key => $value) {
    $sum += $arr[$key];
}
echo $sum;