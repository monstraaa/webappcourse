<?php
$min = rand(0,59);
if($min <= 15)echo $min." - Первая четверть";
else if($min <= 30)echo $min." - Вторая четверть";
else if($min <= 45)echo $min." - Третья четверть";
else if($min <= 60)echo $min." - Четвёртая четверть";