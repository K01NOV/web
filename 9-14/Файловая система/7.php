<?php
    echo filesize('new.txt') . 'Byte' . "<br>";
    echo filesize('new.txt') / 1024 . 'Kb' . "<br>";
    echo filesize('new.txt') / (1024 * 1024) . 'Mb';
?>