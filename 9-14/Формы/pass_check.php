<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $pass = $_POST['pass'];        
        $real_pass_hash = '$2y$10$ppXZcijWO7iOoeYyFGaeQuP6NK0Lk22nKTB0wGB90iaa/BVQN4Aoe'; //пароль 123654
        if(password_verify($pass, $real_pass_hash)){
            echo "password is correct";
        }
        else{
            echo "password is incorrect";
        }
    } else{
        echo "error";
    }
?>