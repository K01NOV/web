<?php
    session_start();

    if(!isset($_SESSION['update'])){
        $_SESSION['update'] = 0;
        echo "You haven't updated the page yet";
    }
    else{
        $_SESSION['update'] += 1;
        $updates = $_SESSION['update'];
        echo "You've updated the page $updates times";
    }
?>