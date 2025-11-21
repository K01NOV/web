<?php
    $num = file_get_contents('sqr.txt');
    $num *= $num;
    file_put_contents('sqr.txt', $num);
    echo file_get_contents('sqr.txt');
?>