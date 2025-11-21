<?php
    session_start();
    if(!isset($_SESSION['authenticated'])){
        $_SESSION['login_error'] = "Произошла ошибка авторизации";
        header("Location: login_page.php");
        exit();
    }
    $name = $_SESSION['username'];
    echo "Hello, $name!"
?>

