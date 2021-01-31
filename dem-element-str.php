<?php
function countElement($str,$x){
    $toArr = str_split($str);
    $count = 0;
    for($i = 0; $i<count($toArr); $i++){
        if ($toArr[$i] === $x){
            $count++;
        }
    }
    return $count;
}
$str = "hello world!";
//$toArr = str_split("hello world!");
//var_dump($toArr);
print_r(countElement($str,"o"));

/** co the dung ham co san */
echo "<br>";
print_r(substr_count($str,"o"));