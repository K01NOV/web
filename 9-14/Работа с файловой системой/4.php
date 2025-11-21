<?php
    for($i = 1; $i <= 5; $i++){
        copy('new.txt', "dir/$i.txt");
    }
?>