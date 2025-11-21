<?php
    $num = file_get_contents('one.txt');
    $num++;
    file_put_contents('one.txt', $num);
    echo file_get_contents('one.txt');
?>