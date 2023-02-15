<?php
$array = ['Привет, ', 'мир', '!'];
$array[0] = 'Пока, ';
foreach ($array as $str) {
    echo $str;
}