<h1>People page</h1>


<?php


echo "<ul>";
foreach($people as $person) {
    echo "<li>$person->id $person->firstName $person->lastName $person->age</li>";
}
echo "</ul>";