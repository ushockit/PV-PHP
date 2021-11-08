<?php
require_once 'users.php';
var_dump($users);

// https://www.php.net/manual/ru/ - PHP Documentation

$a = 10;
$b = true;
$c = 10.5;
$d = 'Hello world';

// echo 'Hello world';
// echo 'How are you?';


// Concat
// echo 'a = ' . $a . 'b = ' . $b;
// echo "a = $a b = $b";

// echo "<h1>$d</h1>";

// Arrays
$arr = [1, 2, 3, 4, 5];
//  var_dump($arr);
// $arr2 = array();

$arr2 = [100 => 10, 200 => 20, 300 => 30];
// var_dump($arr2);


$arr3 = [
    'first' => [1, 2, 3],
    'second' => [10, 20, 30],
    'third' => [
        'key_1' => 100,
        'key_2' => 200,
        'key_3' => 300
    ]
];

function sayHi() {
    echo 'Hi!';
}

var_dump($arr3);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body>
<?php
    // echo "<h1>$d</h1>";
?>
    <h1><?php echo $d; ?></h1>
    <h1><?= $d ?></h1>

<?php
    echo  "<ul>";
    for($i = 0; $i < 10; $i++) {
        echo "<li>$i</li>";
    }
    echo  "</ul>";
?>

    <ul>
        <?php
        foreach($arr as $item) { ?>
            <li><?= $item ?></li>
        <?php } ?>
    </ul>


<?php
    echo "<ul>";
    foreach($arr2 as $key => $value) {
        echo "<li>$key - $value</li>";
    }
    echo "</ul>";

    echo "<ul>";
    foreach($arr3 as $key => $value) {
        echo "<h5>$key</h5>";
        echo "<ul>";
        foreach($value as $key2 => $value2) {
            echo "<li>$key2 - $value2</li>";
        }
        echo "</ul>";
    }
    echo "</ul>";

    sayHi();
?>
</body>
</html>
