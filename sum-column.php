
<?php

function sumColumn($arr,$x){
    $sum =null;
    if ($x<count($arr)){
        for ($i=0; $i<count($arr); $i++) {
            $sum += $arr[$i][$x];
        }
    }else{
        echo "vuot qua so cot mang dang co";
    }
    return $sum;
}
$arr = [[1,2,3],
        [0,-1,5],
        [6,8,7]];
echo sumColumn($arr,2);