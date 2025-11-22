<?php
    //1
    $json = '{
        "ru": ["пн", "вт", "ср"],
        "en": ["mon", "tue", "wed"]
    }';
    $data = json_decode($json);
    echo $data->en[1];
    echo "<br>";
    //2
    $data = [];
    for($i = 0; $i < 100; $i++){
        $data[$i] = $i + 1;
    }
    $json = json_encode($data);
    //echo $json;
    //3
    $json = '{
        "ru": ["пн", "вт", "ср"]
        "en": ["mon", "tue", "wed"]
    }';
    $data = json_decode($json);
    $error = json_last_error();
    switch($error){
        case JSON_ERROR_NONE:
            echo 'ошибок нет';
            break;
        case JSON_ERROR_DEPTH:
            echo 'достигнута максимальная глубина стека';
            break;
        case JSON_ERROR_STATE_MISMATCH:
            echo 'некорректные разряды или несоответствие режимов';
            break;
        case JSON_ERROR_CTRL_CHAR:
            echo 'некорректный управляющий символ';
            break;
        case JSON_ERROR_SYNTAX:
            echo 'синтаксическая ошибка, некорректный JSON';
            break;
        case JSON_ERROR_UTF8:
            echo 'некорректные символы UTF-8, возможно неверно закодирован';
            break;
        default:
            echo 'неизвестная ошибка';
            break;
    }
    echo "<br>";
    //4
    $xml = simplexml_load_file('xml.xml');
    $user = $xml->user;

    echo $user->name . " " . $user->surname;
    echo "<br>";
    //5
    foreach($xml->name as $name){
        echo $name . " ";
    }
    echo "<br>";
    //6
    foreach($xml->product as $product){
        echo $product . " Price: " . $product['cost'] . ", Amount: " . $product['amount'] . "<br>";
    }
    //7
    foreach($xml->user as $user){
        echo $user->name . " " . $user->surname . "<br>";
    }

?>