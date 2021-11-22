<?php
namespace app\business\services;

use app\business\dtos\CreatePersonDTO;
use app\business\dtos\PersonDTO;
use app\database\entities\PersonEntity;

class PeopleService {
    public function getAllPeople() {
        // TODO: Move to repository
        $dbPeople = PersonEntity::find()->all();
        /** @var PersonDTO[] $peopleResult */
        $peopleResult = [];
        array_walk($dbPeople, function(PersonEntity $person) use(&$peopleResult) {
            $peopleResult[] = new PersonDTO($person->id, $person->firstName, $person->lastName);
        });

        return $peopleResult;
    }

    public function createNewPerson(CreatePersonDTO $personDto): bool {
        // TODO: Move to repository
        $person = new PersonEntity();
        $person->firstName = $personDto->firstName;
        $person->lastName = $personDto->lastName;

        return $person->save();
    }
}