<?php
    function show_name($name){
        return "Hello, " . $name;
    }

    function check_negative($number){
        if($number >= 0){
            return "+++";
        }
        return "---";
    }

    function calc_sum($array_of_nums){
        return array_sum($array_of_nums);
    }

    function calc_third_pow($number){
        return pow($number, 3);
    }

    $res = calc_third_pow(3);

    function check_even($array_of_nums){
        foreach($array_of_nums as $num){
            if($num % 2 != 0){
                return false;
            }
        }
        return true;
    }

    function check_same_in_a_row($arr){
        for($i = 0; $i < count($arr) - 1; $i++){
            if($arr[$i] == $arr[$i + 1]){
                return true;
            }
        }
        return false;
    }

    function calc_digits($number){
        $sum = 0;
        while($number > 0){
            $sum = $sum + $number % 10;
            $number = (int)($number / 10);
        }
        return $sum;
    }

    function check_prime($number){
        for($i = 2; $i < $number; $i++){
            if($number % $i == 0){
                return "false";
            }
        }
        return "true";
    }

?>