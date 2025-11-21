<?php
    $arr = ['dir12', 'dir22', 'dir32'];
    foreach($arr as $dir){
        mkdir($dir);
        echo "$dir was created<br>";
    }
?>