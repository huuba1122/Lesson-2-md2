<?php
function newArray($arr1,$arr2){
    $count1= count($arr1);
    $count2= count($arr2);
    $newArr = [];
    $count3 = $count2+$count1;
    $index= 0;
    for ($i= 0; $i<$count1; $i++){
        $newArr[$i]= $arr1[$i];
        $index =$i;
    }
    for( $j = $index+1, $i = 0; $j < $count3, $i<$count2; $j++, $i++){
        $newArr[$j] = $arr2[$i];
    }
    return $newArr;
}
var_dump( newArray([1,2,3,4,5], [6,5,4,3,2,1]));
//print_r(newArray([1,2,3,4,5], [6,7]));