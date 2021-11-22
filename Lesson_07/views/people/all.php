<?php
use yii\helpers\Url;

    $this->title = 'All people';

    $files = scandir('uploads');
    var_dump(array_splice($files, 2));
?>

<h1>All people</h1>
<a href="<?= Url::to(['people/create']) ?>">Create a new person</a>



<ul>
    <?php
    if (isset($people)) {
        foreach ($people as $person) {
            echo "<li>$person->id $person->firstName $person->lastName</li>";
        }
    }
    ?>
</ul>
