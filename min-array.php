<?php
function findMin($arr){
    $min = $arr[0];
    $count = count($arr);
    for($i =1; $i<$count; $i++){
//        var_dump($min);
        if ($min > $arr[$i]){
            $min = $arr[$i];

        }
    }return $min;
}
$arr = [1,2,-3,4,5,6,9,8,7];
echo findMin($arr);