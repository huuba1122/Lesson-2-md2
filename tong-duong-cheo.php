<?php
function sumLine($arr){
    $sum1 = 0;
    $sum2 = 0;
        for ($i=0,$j=count($arr) -1;$i<count($arr), $j>=0; $i++, $j--){
            $sum1 += $arr[$i][$i];
            $sum2 += $arr[$i][$j];
        }
    echo "trai qua phai ".$sum1."<br>";
    echo "phai qua trai ".$sum2."<br>";
}
$arr = [[1,2,31],
        [4,5,6],
        [7,8,90]];
sumLine($arr);