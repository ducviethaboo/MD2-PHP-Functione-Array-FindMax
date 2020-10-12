<?php


function findMax() {
    $arr = [
        [4,3,1,6,19,33,1],
        [5,2,9,14,76,12,8],
    ];
    $max = $arr[0][0];
    $index = '0-0';
    for($i = 0;$i < count($arr);$i++) {
        for($j = 0;$j < count($arr[$i]);$j++) {
            if($arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
                $index = $i.'-'.$j;
            }
        }
    }
    return $index;
}
echo findMax();