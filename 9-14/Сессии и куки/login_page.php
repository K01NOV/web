<?php
    session_start();
    if(isset($_SESSION['login_error'])){
        $error = $_SESSION['login_error'];
        echo "<p style='color:red'>$error</p>";
    }
    
?>

<form action="login.php" method="POST">
    <input type="text" name="name" placeholder="Имя" value="<?php if(isset($_COOKIE['username_cookie'])){ echo htmlspecialchars($_COOKIE['username_cookie']);} ?>">
    <input type="email" name="mail" placeholder="E-mail">
    <input type="password" name="pass" placeholder="Пароль">
    <input type="submit">
</form>