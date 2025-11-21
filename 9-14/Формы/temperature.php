<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $temp = $_POST['tem'];
        $far = ($temp * 9/5) + 32;
        echo $far;
    } else{
        echo "error";
    }
?>