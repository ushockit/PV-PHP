<?php

//$people = [
//    [
//        'firstName' => 'First name 1',
//        'lastName' => 'Last name 1',
//        'age' => 20
//    ],
//    [
//        'firstName' => 'First name 2',
//        'lastName' => 'Last name 2',
//        'age' => 26
//    ],
//    [
//        'firstName' => 'First name 3',
//        'lastName' => 'Last name 3',
//        'age' => 33
//    ],
//    [
//        'firstName' => 'First name 4',
//        'lastName' => 'Last name 4',
//        'age' => 41
//    ],
//];

// file_put_contents('people.txt', json_encode($people));

    function readPeople() {
        return file_exists(PEOPLE_PATH) ?  json_decode(file_get_contents(PEOPLE_PATH)) : [];
    }

    function savePerson($firstName, $lastName, $age, $picture) {
        $tmp = readPeople();
        $tmp[] = [
            'firstName' => $firstName,
            'lastName' => $lastName,
            'age' => $age,
            'picture' => $picture
        ];

        file_put_contents(PEOPLE_PATH, json_encode($tmp));
    }


    const PEOPLE_PATH = 'people.txt';
    const UPLOADS_PATH = 'uploads';

    if (isset($_POST['submit'])) {
        $firstName = isset($_POST['firstName']) ? htmlentities($_POST['firstName']) : '';
        $lastName = isset($_POST['lastName']) ? htmlentities($_POST['lastName']) : '';
        $age = isset($_POST['age']) ? $_POST['age'] : 0;

        // TODO: Validation


        if (isset($_FILES['picture']) && $_FILES['picture']['error'] === UPLOAD_ERR_OK) {
            $savePath = UPLOADS_PATH . '\\' . $_FILES['picture']['name'];
            move_uploaded_file($_FILES['picture']['tmp_name'], $savePath);

            savePerson($firstName, $lastName, $age, $savePath);
        }
    }

    $people = readPeople();


    // $fileData = file_get_contents('people2.txt');
    // echo $fileData;
    // echo $fileData;

    // $json = json_encode($people);
    // $result = json_decode($json);

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="firstNameInput" class="form-label">First name</label>
                <input type="text" name="firstName" class="form-control" id="firstNameInput">
            </div>
            <div class="mb-3">
                <label for="lastNameInput" class="form-label">Last name</label>
                <input type="text" name="lastName" class="form-control" id="lastNameInput">
            </div>
            <div class="mb-3">
                <label for="ageInput" class="form-label">Age</label>
                <input type="number" name="age" class="form-control" id="ageInput">
            </div>
            <div class="mb-3">
                <label for="fileInput" class="form-label">Picture</label>
                <input type="file" name="picture" class="form-control" id="fileInput">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <ul class="list-group">
        <?php
            foreach($people as $person) {
                $str = $person->firstName . ' ' . $person->lastName . ' ' . $person->age . 'y.o.';
                $picture = isset($person->picture) ? $person->picture : '';
                echo "<li class='list-group-item'>
                        $str
                        <img width='40' src='$picture' alt='picture'/>
                        </li>";
            }
        ?>
    </ul>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>
