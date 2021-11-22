<?php
namespace app\models;

use Yii;
use yii\base\Model;


class PersonModel extends Model {
    public $firstName = 'Default';
    public $lastName = 'Default';

    public function rules()
    {
        return [
            [['firstName', 'lastName'], 'required'],
        ];
    }
}