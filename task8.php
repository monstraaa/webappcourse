<?php
$array = array(
    "Русский" => array(
        "Понедельник",
        "Вторник",
        "Среда",
        "Четверг",
        "Пятница",
        "Суббота",
        "Воскресенье"
    ),
    "English" => array(
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
    )
    );
echo $array["Русский"][2].' '.$array["English"][2];