<?php
//1
    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    $sum = 0;

    foreach($matrix as $row){
        foreach($row as $num){
            $sum += $num;
        }
    }
    echo $sum;
    echo "<br>";
    //2
    $arr = [
        [
            'name' => 'user1',
            'age' => 30,
            'salary' => 1000,
        ],
        [
            'name' => 'user2',
            'age' => 31,
            'salary' => 2000,
        ],
        [
            'name' => 'user3',
            'age' => 32,
            'salary' => 3000,
        ],
    ];

    echo $arr[0]['salary'] + $arr[2]['salary'];
    echo "<br>";
    //3
    $books = [
        "Властелин колец" => [
            "автор" => "Дж.Р.Р. Толкин",
            "год" => 1954,
            "жанр" => "Фэнтези"
        ],
        "Преступление и наказание" => [
            "автор" => "Федор Достоевский",
            "год" => 1866,
            "жанр" => "Роман, философия"
        ],
        "Мастер и Маргарита" => [
            "автор" => "Михаил Булгаков",
            "год" => 1967,
            "жанр" => "Роман, фантастика"
        ]
    ];

    foreach($books as $book => $info){
        echo $book . ", автор: " . $info['автор'] . ", год: " . $info['год'] . ", жанр: " . $info['жанр'] . "<br>";
    }
    echo "<br>";
    //4
    $subjects = [
        "Программирование" => [
            "преподаватель" => "Иван Иванов",
            "семестр" => 1,
            "количество часов" => 72
        ],
        "Базы данных" => [
            "преподаватель" => "Петр Петров",
            "семестр" => 2,
            "количество часов" => 54
        ],
        "Веб-разработка" => [
            "преподаватель" => "Мария Смирнова",
            "семестр" => 3,
            "количество часов" => 81
        ],
        "Анализ алгоритмов" => [
            "преподаватель" => "Алексей Кузнецов",
            "семестр" => 4,
            "количество часов" => 90
        ]
    ];

    echo "<table border='1' cellpadding='5' cellspacing='0'><tr>";
    echo "<tr>
            <th>Дисциплина</th>
            <th>Преподаватель</th>
            <th>Семестр</th>
            <th>Количество часов</th>
        </tr>";
    echo "</tr>";

    foreach ($subjects as $subjectName => $info) {
        echo "<tr>";
        echo "<td>" . $subjectName . "</td>";
        foreach ($info as $key => $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    echo "<br>";
    //5
    $arr = [
        'group1' => ['user11', 'user12', 'user13', 'user43'],
        'group2' => ['user21', 'user22', 'user23'],
        'group3' => ['user31', 'user32', 'user33'],
        'group4' => ['user41', 'user42', 'user43'],
        'group5' => ['user51', 'user52'],
    ];

    foreach($arr as $key => $group){
        foreach($group as $user){
            echo "группа: " . $key . ", юзер: " . $user . "<br>";
        }
    }

?>