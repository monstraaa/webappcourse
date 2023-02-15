<?php
$arr = range(-100, 100);
shuffle($arr );
$arr = array_slice($arr ,0,rand(2,10));
$arrStr = implode(",",$arr);
echo "[$arrStr] <br>";
$sum = array_sum($arr);
echo "\$sum = $sum";
