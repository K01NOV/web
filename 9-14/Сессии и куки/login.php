<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $CORRECT_EMAIL = "user@example.com";
        $CORRECT_PASS = '$2y$10$ppXZcijWO7iOoeYyFGaeQuP6NK0Lk22nKTB0wGB90iaa/BVQN4Aoe'; //пароль 123654
        $name = $_POST['name'];
        $email = $_POST['mail'];
        $pass = $_POST['pass'];
        if ($email === $CORRECT_EMAIL && password_verify($pass, $CORRECT_PASS)){
            $_SESSION['authenticated'] = true;
            $_SESSION['username'] = $name;
            $cookie_name = 'username_cookie';
            $cookie_value = $name;
            $exp_time = time() + (7 * 24 * 60 * 60);
            setcookie($cookie_name, $cookie_value, $expiration_time);
            header("Location: user_page.php");
            exit();
        }
        else{
            $_SESSION['login_error'] = "Неправильный E-mail или пароль.";
            header("Location: login_page.php");
            exit();
        }
        
    }
?>