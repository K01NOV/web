<?php
    if(file_exists('message.txt')){
        echo file_get_contents('message.txt');
    }
    else{
        file_put_contents('message.txt', 'hello world');
        echo file_get_contents('message.txt');
    }
?>