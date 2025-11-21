<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $text = $_POST['text'];
        $words = str_word_count($text);
        $char = strlen($text);
        echo "Words: $words\nCharacters: $char";
    } else{
        echo "error";
    }
?>