<?php

$arr = [1, 10];

function calculaSuma($nums) {
    $v1 = $nums[0];
    $v2 = $nums[1];
    $suma = 0;
    $suma2 = 0;

    if (($v1%2) !==0) {
        $v1++;
    }  
    while ($v1 <= $v2) {
        $suma += $v1;
        $v1 += 2; 
    }

    return $suma;
}

echo calculaSuma($arr);

?>