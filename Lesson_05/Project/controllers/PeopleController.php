<?php

namespace app\controllers;

use app\models\people\Person;
use yii\web\Controller;

class PeopleController extends Controller {
    public function actionIndex() {
        $srchPerson = Person::findOne(['id' => 1]);
        $srchPerson->firstName .= '_New';
        $srchPerson->lastName .= '_New';
        $srchPerson->age += 50;
        $srchPerson->save();
        // Person::updateAll(['firstName' => 'updated firstname'], ['in', 'id', [2, 3]]);

        $allPeople = Person::find()->all();
        return $this->render('index', [
            'people' => $allPeople
        ]);
    }
}