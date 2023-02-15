<?php
$array = [10, 20, 15, 17, 24, 35];
$result = array_sum($array);
echo "сумма " 
. implode(",",$array)
." = ". $result;