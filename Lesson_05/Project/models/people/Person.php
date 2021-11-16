<?php

namespace app\models\people;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "people".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property int $age
 */
class Person extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'age'], 'required'],
            [['age'], 'integer'],
            [['firstName', 'lastName'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'age' => 'Age',
        ];
    }
}
