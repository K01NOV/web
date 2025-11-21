<?php
    session_start();
    unset($_SESSION['age']);
    unset($_SESSION['city']);
    session_destroy();
    header("Location: 5.php");
    exit();
?>