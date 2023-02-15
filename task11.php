<?php
$values = ["ru","eng"];
$lang = $values[rand(0,1)];
$arr = [];
$array = array(
    "ru" => array(
        "Понедельник",
        "Вторник",
        "Среда",
        "Четверг",
        "Пятница",
        "Суббота",
        "Воскресенье"
    ),
    "eng" => array(
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
    )
);
echo "\$lang = $lang";
echo "<br>";
if($lang == "ru") $arr = $array["ru"];
if($lang == "eng") $arr = $array["eng"];
echo implode(",",$arr);
echo "<br>";
switch ($lang) {
    case 'ru':
        $arr = $array["ru"];
        break;
    case 'eng':
        $arr = $array["eng"];
        break;
}
echo implode(",",$arr);
echo "<br>";
$arr = $array[$lang];
echo implode(",",$arr);