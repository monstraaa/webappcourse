<?php
function checkFunc($param){   
    if(is_numeric($param)){
        if($param > 170){
            return "Big";
        }
        else{
            return "Small";
        }
    }
    else{
        return "false";
    }
}
$letters = range('a','z');
shuffle($letters);
$numbers = range('0','340');
shuffle($numbers);
$arr = [
    array_slice($letters,0,1),
    array_slice($numbers,0,1)
];

$param = $arr[rand(0,1)][0];
$result = checkFunc($param);
echo "$param - $result";