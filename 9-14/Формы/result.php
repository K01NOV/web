<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $name = $_POST['name'];
        $age = $_POST['age'];
        if(isset($_POST['salary'])){
            $salary = $_POST['salary'];
            echo "Hello, $name, \nYour age is $age, \nYour current salary is $salary";
        }
        else{
            echo "Hello, $name, \nYour age is $age";
        }
        
    } else{
        echo "error";
    }
?>