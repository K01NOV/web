<?php
    $files = scandir('dir');
    $files = array_diff($files, ['..', '.']);
    echo "<pre>";
    print_r($files);
    echo "<pre>";
?>