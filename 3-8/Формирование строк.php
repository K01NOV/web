<?php
//1
    $text1 = 'aaa';
    $text2 = 'bbb';
    $text3 = 'ccc';
    echo "<p>$text1</p>" . "<p>$text2</p>" . "<p>$text3</p>";
    //2
    $src1 = '1.png';
    $src2 = '2.png';
    $src3 = '3.png';
    echo "<img src=\"$src1\" alt=\"$src1\">" . "<img src=\"$src2\" alt=\"$src2\">" . "<img src=\"$src3\" alt=\"$src3\">";
    //3
    echo "<ul>";
    for($i = 1; $i <= 5; $i++){
        echo "<li>$i</li>";
    }
    echo "</ul>";
    //4
    $arr = ['text1', 'text2', 'text3'];
    echo "<select>";
    foreach($arr as $opt){
        echo "<option>$opt</option>";
    }
    echo "</select>";
    //5
    $date = date("Y-m-d");
    echo "<p>$date</p>";
    //6
    $show = true;
    if($show){
        echo "<div>
                <p>text1</p>
                <p>text2</p>
                <p>text3</p>
            </div>";
    }
    //8
    $arr = ['user1', 'user2', 'user3'];
    foreach($arr as $user){
        echo "<div>
                <h2>$user</h2>
                <p>text</p>
            </div>";
    }
?>

<ul>
    <?php for($i = 1; $i <= 5; $i++):?>
        <li><?php echo htmlspecialchars($i)?></li>
    <?php endfor?>
</ul>
