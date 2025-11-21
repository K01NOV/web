<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = $_POST['name'];
        $second_name = $_POST['second_name'];
        $last_name = $_POST['last_name'];
        echo "Hello, $name $second_name $last_name";
    } else{
        echo "error";
    }
?>