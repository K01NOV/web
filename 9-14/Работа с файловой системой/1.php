<?php
    $arr = ['1.txt', '2.txt', '3.txt'];
    $str = '';
    foreach($arr as $file){
        $str .= file_get_contents($file);
    }
    echo "new.txt";
    echo "<br>";
    file_put_contents('new.txt', $str);
    echo file_get_contents('new.txt');
?>