<?php

namespace app\api\modules\v10\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "people".
 *
 * @property int $id
 * @property string $name
 * @property double $price
 */
class Product extends ActiveRecord
{
    public static function tableName()
    {
        return 'products';
    }

    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
        ];
    }
}