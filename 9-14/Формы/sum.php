<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $sum = [];
        if(isset($_POST['num1']) && $_POST['num1'] != null){
            $sum[] = $_POST['num1'];
        }
        if(isset($_POST['num2']) && $_POST['num2'] != null){
            $sum[] = $_POST['num2'];
        }
        if(isset($_POST['num3']) && $_POST['num3'] != null){
            $sum[] = $_POST['num3'];
        }
        
        if(count($sum) > 0){
            echo array_sum($sum);
        }
        else{
            echo 0;
        }
    } else{
        echo "error";
    }
?>