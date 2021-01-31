<?php
function findMax($arr){
    $max = $arr[0][0];
    $count = count($arr);
    for ($i = 0; $i<$count; $i++){
        for($j= 0; $j <count($arr[$i]); $j++){
            if ($max < $arr[$i][$j]){
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}

$arr = [[1,2,8],[0,-2,5],[6,0,7]];
echo findMax($arr);