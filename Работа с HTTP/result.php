<?php
    echo $_SERVER['HTTP_ACCEPT'] . "<br>" . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>";
    $headers = getallheaders();

    foreach ($headers as $name => $value) {
        echo "<b>$name:</b> $value <br>";
    }

    $arr = ['a', 'b', 'c'];

    if (isset($_GET['key'])) {
        $key = $_GET['key']; 
        if(isset($arr[$key])){
            echo $arr[$key];
        }else{
            http_response_code(404);
        }
    } else {
        http_response_code(403);
    }

    
?>