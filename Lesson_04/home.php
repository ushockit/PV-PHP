<?php

if (!isset($_SESSION['user'])) {
    header('location: login');
    exit;
}


function printText($text) {
    echo "<div>$text</div>";
}

// session_destroy();


//echo "<ul>";
//foreach($_SERVER as $key => $value) {
//    echo "<li>[$key] -> $value</li>";
//}
//echo "</ul>";




if (isset($_SESSION['user'])) {

}
?>
<a href="logout">Logout</a>
