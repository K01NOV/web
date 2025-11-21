<?php
session_start();

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if(!isset($_SESSION['score'])){
            $_SESSION['score'] = 0;
        }
        $correct = $_SESSION['score'];
        if (isset($_POST['crusade_year'])) {
            $crusade_year = $_POST['crusade_year'];
            $_SESSION['answ1'] = $crusade_year;
            if ($crusade_year == 988) {
                $correct++;
            }
            header("Location: test2.php");
            exit();
        }
        if (isset($_POST['revolution_year'])) {
            $revolution_year = $_POST['revolution_year'];
            $_SESSION['answ2'] = $revolution_year;
            if ($revolution_year == 1917) {
                $correct++;
            }
        }
        $_SESSION['score'] = $correct;
        
        
    } else{
        echo "error";
    }
    echo "$correct/2";
?>

