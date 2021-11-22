<?php
namespace app\database\entities;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "people".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 */
class PersonEntity extends ActiveRecord
{
    private $id;
//    public $id;
//    public $firstName;
//    public $lastName;
    /**
     * @return string название таблицы, сопоставленной с этим ActiveRecord-классом.
     */
    public static function tableName()
    {
        return 'people';
    }
}