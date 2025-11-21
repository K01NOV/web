<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST['man']) && isset($_POST['woman'])){
            echo 'invalid answer';
        }
        elseif(isset($_POST['man'])){
            echo 'Мужчина';
        }
        elseif(isset($_POST['woman'])){
            echo 'Женщина';
        }
    } else{
        echo "error";
    }
?>