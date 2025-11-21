<?php
    session_start();
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $email = $_POST['mail'];
        $_SESSION['mail'] = $email;
    } else{
        echo "error";
    }
?>

<form>
    <input type="text" name="name" placeholder="Имя" required>
    <input type="password" name="pass" placeholder="пароль" required>
    <input type="email" name="mail" placeholder="Email" value="<?php echo htmlspecialchars($email) ?>" required>
    <input type="submit">
</form>