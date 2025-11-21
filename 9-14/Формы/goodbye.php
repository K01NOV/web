<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = $_POST['name'];
        $second_name = $_POST['second_name'];
        $last_name = $_POST['last_name'];
        if(isset($_POST['h_g'])){
            echo "Hello, $name $second_name $last_name";
        }else{
            echo "Goodbye, $name $second_name $last_name";
        }
    } else{
        echo "error";
    }
?>