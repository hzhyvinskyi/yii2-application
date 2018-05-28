<?php

namespace frontend\models;

/**
 * This is the model class for table "author".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $birthdate
 * @property int $rating
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'author';
    }

    public function rules()
	{
		return [
			[['first_name', 'last_name'], 'required'],
			[['first_name', 'last_name'], 'string', 'max' => 30],
			['birthdate', 'date', 'format' => 'php:Y-m-d'],
			['rating', 'integer']
		];
	}

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'birthdate' => 'Birthdate',
            'rating' => 'Rating',
        ];
    }

	/**
	 * @return array
	 */
	public static function getFullName()
	{
		$authorsList = Author::find()->all();

		$fullName = [];

		foreach ($authorsList as $author) {
			$fullName[] .= $author->first_name . ' ' . $author->last_name;
		}

		return $fullName;
	}
}
