<?php
var_dump($_SESSION);
    if (isset($_POST['submit']) && !isset($_SESSION['user'])) {
        $_SESSION['user'] = $_POST['login'];
    }

    if (isset($_SESSION['user'])) {
        header('location: home');
        exit;
    }

?>

<h1>Login page</h1>
<form method="post">
    <div>
        <input type="text" name="login" placeholder="Enter your login...">
    </div>
    <div>
        <input type="password" name="password" placeholder="Enter your password...">
    </div>
    <button name="submit">Submit</button>
</form>