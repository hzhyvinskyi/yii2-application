<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "manufacturer".
 *
 * @property int $id
 * @property string $name
 * @property string $founded
 * @property string $origin
 * @property int $number_of_locations
 */
class Manufacturer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{manufacturer}}';
    }

    public function rules()
	{
		return [
			[['name', 'founded', 'origin'], 'required'],
			[['name', 'origin'], 'string', 'max' => 30],
			[['founded'], 'date', 'format' => 'php:Y-m-d'],
			['number_of_locations', 'integer'],
		];
	}

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'founded' => 'Founded',
            'origin' => 'Origin',
            'number_of_locations' => 'Number Of Locations',
        ];
    }
}
