<?php
require_once 'people.php';
function printArray($arr) {
    echo "<ul>";

    foreach ($arr as $key => $value) {
        echo "key = $key";
        if (is_array($value)) {
            printArray($value);
        }
        else {
            echo "<li>$value</li>";
        }
    }

    echo "</ul>";
}
//
//printArray($_SERVER);

$searchResult = [];

if ($_GET['search']) {
    $srchText = $_GET['search'];
    $searchResult = array_filter($people, function($person) use($srchText) {
       return $person['firstName'] === $srchText || $person['lastName'] === $srchText;
    });
}
// var_dump($searchResult);

// var_dump($_GET);

// htmlspecialchars()
// htmlentities() - преобразует все возможные символы в сущности
// strip_tags() - удаляет HTML теги в строке

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="get" action="index2.php">
        <input name="search" placeholder="Enter search text..."/>
        <button>Search</button>
    </form>

    <?php
        if (count($searchResult)) {
            printArray($searchResult);
        }
    ?>

</body>
</html>
