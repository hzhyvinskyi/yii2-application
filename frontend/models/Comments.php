<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Comments extends Model
{
	public $name;
	public $email;
	public $text;

	public function rules()
	{
		return [
			[['name', 'text'], 'required'],
			['email', 'email'],
		];
	}

	public static function getData()
	{
		$sql = "SELECT * FROM review";

		return Yii::$app->db->createCommand($sql)->queryAll();
	}

	public function saveData()
	{
		$sql = "INSERT INTO review (id, `name`, email, text)
			VALUES (null, '{$this->name}', '{$this->email}', '{$this->text}')";

		return Yii::$app->db->createCommand($sql)->execute();
	}
}
