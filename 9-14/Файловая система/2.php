<?php
    $arr= [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    $sum = array_sum($arr);
    file_put_contents('sum.txt', $sum);
    echo file_get_contents('sum.txt');
?>