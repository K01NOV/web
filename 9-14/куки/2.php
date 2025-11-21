<?php
    if(!isset($_COOKIE['timestamp'])){
        setcookie('timestamp', time());
    }
    else{
        $current_time = time();
        $diff = $current_time - $_COOKIE['timestamp'];
        echo "It's been $diff seconds since last update";
    }
?>