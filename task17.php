<?php
function makeThings($tonns){
    $things = $tonns / 7;
    $gramms = (int)(($things - (int)$things)*1000000);
    $thingsInt = (int)$things;
    return  "из $tonns тонн cоздано $thingsInt штук " . "отсаток $gramms грамм";
}
echo makeThings(rand(1,70));