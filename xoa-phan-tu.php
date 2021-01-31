<?php
function delElement($arr,$x){
//    $newArr = [];
    $arrLenght = count($arr);
    for ($i = $arrLenght; $i>= 0; $i--){
        if ($x === $arr[$i]){
            array_splice($arr,$i,1);
        }
//        else{
//            $newArr[$i] = $arr[$i];
//        }
    }
    return $arr;
}
//var_dump(delElement([1,2,3,3,2,5,7],2));
print_r(delElement([1,2,3,3,2,5,7],2));