<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $country = $_POST['country'];
        $_SESSION['country'] = $country;
        echo "Hello from " . htmlspecialchars($_SESSION['country']);
    } else{
        echo "error";
    }
?>