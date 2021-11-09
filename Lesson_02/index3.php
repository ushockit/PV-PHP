<?php

    const ACCOUNTS = [
      ['email' => 'admin@gmail.com', 'password' => '123456'],
      ['email' => 'vasya@gmail.com', 'password' => 'vasya'],
    ];
    $errors = [];

    function printError($errs, $errorName) {
        return isset($errs[$errorName]) ? $errs[$errorName] : '';
    }

    if (isset($_POST['submit'])) {
        $login = isset($_POST['email']) ? $_POST['email'] : '';
        $pswd = isset($_POST['password']) ? $_POST['password'] : '';

        if (isset($login) && isset($pswd)) {
            $login = htmlentities($login);
            $pswd = htmlentities($pswd);

            if (strlen($login) < 4) {
                $errors['emailError'] = 'Email error';
            }
            if (strlen($pswd) < 4) {
                $errors['passwordError'] = 'Password error';
            }
            var_dump($errors);
            if (count($errors) === 0) {
                $res = array_filter(ACCOUNTS, function ($acc) use($login, $pswd) {
                    return $acc['email'] === $login && $acc['password'] === $pswd;
                });
                var_dump($res);
                if (count($res) > 0) {
                    echo 'Try redirect';
                    header("location: user-info.php?login=$login&password=$pswd");
                    exit;
                }
                $errors['error'] = 'User not found';
            }
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <div class="container">
<!--        <form method="post">-->
<!--            <div class="mb-3">-->
<!--                <label for="exampleInputEmail1" class="form-label">Email address</label>-->
<!--                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">-->
<!--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
<!--            </div>-->
<!--            <div class="mb-3">-->
<!--                <label for="exampleInputPassword1" class="form-label">Password</label>-->
<!--                <input type="password" name="password" class="form-control" id="exampleInputPassword1">-->
<!--            </div>-->
<!--            <div class="mb-3 form-check">-->
<!--                <input type="checkbox" name="rememberMe" class="form-check-input" id="exampleCheck1">-->
<!--                <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--            </div>-->
<!--            <button type="submit" class="btn btn-primary">Submit</button>-->
<!--        </form>-->

<!--        <form method="post">-->
<!--            <div class="mb-3 form-check">-->
<!--                <label class="form-check-label">-->
<!--                    <input type="checkbox" name="values[]" value="first" class="form-check-input">-->
<!--                    Value 1-->
<!--                </label>-->
<!--            </div>-->
<!--            <div class="mb-3 form-check">-->
<!--                <label class="form-check-label">-->
<!--                    <input type="checkbox" name="values[]" value="second" class="form-check-input">-->
<!--                    Value 2-->
<!--                </label>-->
<!--            </div>-->
<!--            <div class="mb-3 form-check">-->
<!--                <label class="form-check-label">-->
<!--                    <input type="checkbox" name="values[]" value="third" class="form-check-input">-->
<!--                    Value 3-->
<!--                </label>-->
<!--            </div>-->
<!--            <button>Submit</button>-->
<!--        </form>-->
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"><?= printError($errors, 'emailError') ?></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                <div id="emailHelp" class="form-text"><?= printError($errors, 'passwordError') ?></div>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
