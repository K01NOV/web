<?php
    require_once("connect.php");
    //1
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    $users = [];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $users[] = $row;
        }
    }

    echo "<pre>";
    print_r($users);
    echo "<pre>";

    echo "<table border=1 style=\"border-collapse: collapse;width: 30%;\">";
    echo '<tr><td>#</td><td>name</td><td>age</td><td>salary</td></tr>';
    foreach($users as $user){
        echo '<tr>';
        foreach($user as $info){
            echo "<td>$info</td>";
        }
        echo '</tr>';
    }
    echo '</table>';

    //2

    $sql = "SELECT * FROM users WHERE id = 3";
    $result = $conn->query($sql);
    echo "<pre>";
    print_r($result->fetch_assoc());
    echo "<pre>";

    $sql = "SELECT * FROM users WHERE salary = 900";
    $result = $conn->query($sql);
    $users = [];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $users[] = $row;
        }
    }
    echo "<pre>";
    print_r($users);
    echo "<pre>";

    //3

    $sql = "SELECT * FROM users WHERE age = 23";
    $result = $conn->query($sql);
    echo "<pre>";
    print_r($result->fetch_assoc());
    echo "<pre>";

    //4

    $sql = "SELECT * FROM users WHERE age = 27 OR NOT salary = 400";
    $result = $conn->query($sql);
    $users = [];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $users[] = $row;
        }
    }
    echo "<pre>";
    print_r($users);
    echo "<pre>";

    //5

    $sql = "SELECT name, age, salary FROM users";
    $result = $conn->query($sql);

    $users = [];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $users[] = $row;
        }
    }

    echo "<table border=1 style=\"border-collapse: collapse;width: 30%;\">";
    echo '<tr><td>name</td><td>age</td><td>salary</td></tr>';
    foreach($users as $user){
        echo '<tr>';
        foreach($user as $info){
            echo "<td>$info</td>";
        }
        echo '</tr>';
    }
    echo '</table>';

    //6

    $sql = "INSERT INTO users (name, age, salary) VALUES ('user7', 26, 300)";
    //$result = $conn->query($sql);

    //7

    $sql = "UPDATE users SET age = 35 WHERE id = 4";
    //$result = $conn->query($sql);

    //8

    $sql = "UPDATE users SET age = 23 WHERE id BETWEEN 3 AND 5";
    //$result = $conn->query($sql);

    //9

    $sql = "DELETE FROM users WHERE id = 7";
    //$result = $conn->query($sql);

    //10

    $sql = "SELECT * FROM users ORDER BY salary";
    $result = $conn->query($sql);

    $users = [];
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $users[] = $row;
        }
    }

    echo "<table border=1 style=\"border-collapse: collapse;width: 30%;\">";
    echo '<tr><td>#</td><td>name</td><td>age</td><td>salary</td></tr>';
    foreach($users as $user){
        echo '<tr>';
        foreach($user as $info){
            echo "<td>$info</td>";
        }
        echo '</tr>';
    }
    echo '</table>';

    //11

    $sql = "SELECT COUNT(id) AS total FROM users WHERE salary = 400";
    $result = $conn->query($sql);

    if($result){
        $row = $result->fetch_assoc();
        $count = $row['total'];
        echo $count;
    }
?>