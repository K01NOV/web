<?php
    if(file_exists('file.txt')){
        echo "file.txt exists";
    }
    else{
        file_put_contents('file.txt', '!');
        echo "file.txt was created";
    }
?>