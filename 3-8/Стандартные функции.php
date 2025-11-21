<?php
//1
    $arr = [1, 12, 23, 0, 6, 91, 7];
    $sum = 0;
    foreach($arr as $elem){
        $sum += $elem;
    }
    echo $sum;
    echo "<br>";
    //2
    $sum = 0;
    for($i = 1; $i <= 100; $i++){
        $sum += $i;
    }
    echo $sum;
    echo "<br>";
    //3
    for($i = 1; $i <= 100; $i++){
        echo $i . "<br>";
    }
    //4
    $str = "fuiodsfdop";
    $char = substr($str, -1);
    $char = strtoupper($char);
    $str = substr_replace($str, $char, -1);
    echo $str;
    echo "<br>";
    //5
    $result = array_map('sqrt', $arr);
    print_r($result);
    echo "<br>";
    //6
    $min = min($arr);
    $max = max($arr);
    echo "min: " . $min . ", max: " . $max;
    echo "<br>";
    //7
    $rnd = mt_rand(0, 100);
    echo $rnd;
    echo "<br>";
    //8
    $http = substr($str, 0, 4);
    if($http == "http"){
        echo "true";
    }
    else{
        echo "false";
    }
    echo "<br>";
    //9
    echo date("Y-m-d H:i:s");
    echo "<br>";
    //10
    $current_time = time();
    $current_year = date('Y', $current_time);
    $dec_31 = mktime(24, 0, 0, 12, 31, $current_year);

    $diff = $dec_31 - $current_time;
    $diff = ceil($diff / (60 * 60 * 24));
    $msg = "дней";
    $msg1 = "До нового года осталось ";
    if($diff % 10 < 5 && $diff % 10 > 1){
        $msg = "дня";
    }
    elseif($diff % 10 == 1){
        $msg = "день";
        $msg1 = "До нового года остался ";
    }
    echo "До нового года осталось " . $diff . " " . $msg;
?>