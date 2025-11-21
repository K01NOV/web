<?php
    //1
    $arr = [1 => 'a', 2 => 'b', 3 => 'c'];
    foreach($arr as $key => $char){
        echo $char;
    }
    echo "<br>";
    //2
    $arr = [
        1 => "Январь",
        2 => "Февраль",
        3 => "Март",
        4 => "Апрель",
        5 => "Май",
        6 => "Июнь",
        7 => "Июль",
        8 => "Август",
        9 => "Сентябрь",
        10 => "Октябрь",
        11 => "Ноябрь",
        12 => "Декабрь"
    ];
    //3
    $user = ['name' => 'ddd' , 'surname' => 'hjh', 'patronymic' => 'uiui'];
    echo "Hello, " . $user['name'] . " " . $user['surname'] . " " . $user['patronymic'];
    echo "<br>";
    //4
    $date = ['year' => date('Y'), 'month' => date('m'), 'day' => date('d')]; 
    echo $date['year'] . "-" . $date['month'] . "-" . $date['day'];
    echo "<br>";
    //5
    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo count($arr);
    echo "<br>";
    //6
    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
    echo count($arr);
    echo "<br>";
    //7
    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo $arr[count($arr) - 1];
    echo "<br>";
    //8
    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo $arr[count($arr) - 2];
    echo "<br>";
?>