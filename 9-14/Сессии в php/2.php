<?php
    session_start();
    if(!isset($_SESSION['timestamp'])){
        $_SESSION['timestamp'] = time();
    }
    $timestamp = $_SESSION['timestamp'];
    $current_time = time();
    $diff = $current_time - $timestamp;

    echo "It's been $diff seconds since you here";
    echo "<br>Current time " . date("H:i:s", $current_time);
    echo "<br>First entered at " . date("H:i:s", $timestamp);
?>



