<?php
namespace app\business\dtos;

class PersonDTO {
    public $id;
    public $firstName;
    public $lastName;

    function __construct($id, $firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->id = $id;
    }
}