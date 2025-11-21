<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $bd = $_POST['date'];
        $bd = strtotime($bd);
        $today = time();
        $currentYear = date('Y', $today);
        $nextbd = mktime(0, 0, 0, date('m', $bd), date('d', $bd), $currentYear);

        if($nextbd < $today){
            $nextbd = mktime(0, 0, 0, date('m', $bd), date('d', $bd), $currentYear + 1);
        }

        $diff = $nextbd - $today;
        $diff = ceil($diff / (60 * 60 * 24));
        echo "До дня рождения осталось: $diff";
    } else{
        echo "error";
    }
?>