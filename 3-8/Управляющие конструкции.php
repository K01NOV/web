<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //1
        $arr = [
            'employee1' => 100,
            'employee2' => 200,
            'employee3' => 300,
            'employee4' => 400,
            'employee5' => 500,
            'employee6' => 600,
            'employee7' => 700
        ];

        $arr1 = [];
        $arr2 = [];

        foreach($arr as $key => $employee){
            $employee += $employee * 0.1;
            $arr1[$key] = $employee;      
        }
        //2

        foreach($arr as $key => $employee){
            if($employee <= 400){
                $employee += $employee * 0.1;
                $arr2[$key] = $employee;
            }
            else{
                $arr2[$key] = $employee;
            }        
        }

        echo "<pre>";
        print_r($arr2);
        echo "<pre>";

        //3
        for($i = 1; $i <= 100; $i++){
            echo $i . "\n";
        }

        //4
        $arr = [1, 12, 23, 0, 6, 91, 7];
        foreach($arr as $elem){
            if($elem > 0 && $elem < 10){
                echo $elem . ", ";
            }
        }

        echo "<br>";

        //5
        $sum = 0;
        foreach($arr as $elem){
            $sum += $elem;
        }
        echo $sum;
        echo "<br>";

        //6
        $srednee = $sum / count($arr);
        echo $srednee;
    ?>
</body>
</html>
