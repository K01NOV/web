<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $city = $_POST['city'];
        $_SESSION['city'] = $city;
        $age = $_POST['age'];
        $_SESSION['age'] = $age;
    } else{
        echo "error";
    }
?>

<form>
    <input type="text" name="name" placeholder="Имя" required>
    <input type="text" name="city" placeholder="Ваш город" value="<?php echo htmlspecialchars($city) ?>" required>
    <input type="number" name="age" placeholder="Возраст" value="<?php echo htmlspecialchars($age) ?>" required>
    <input type="submit">
</form>

<a href="logout.php">Logout</a>