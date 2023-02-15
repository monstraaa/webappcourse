<?php
$array = ['html', 'css', 'php', 'js', 'jq'];
foreach ($array as $key => $value) {
    if($key != 4){
        echo $value.",";
    }
    else{
        echo $value;
    }
}