<?php
    if (!isset($_COOKIE['remove'])) {
        setcookie('remove', time(), time() + 3600);
        $current_time = time();
        echo "Cookie установлена<br>";
        echo "Время установки: " . date('Y-m-d H:i:s', $current_time);

    } else {
        $last_time = $_COOKIE['remove'];
        setcookie('remove', "", time() - 3600);
        unset($_COOKIE['remove']);
        echo "Cookie была удалена<br>";
        echo "Последнее время установки:" . date('Y-m-d H:i:s', $last_time);
    }
?>