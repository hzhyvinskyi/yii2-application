<?php

namespace frontend\models\forms;

use Yii;
use yii\base\Model;
use frontend\models\User;

/**
 * Class LoginForm
 * @package frontend\models\forms
 */
class LoginForm extends Model
{
	public $username;
	public $password;

	public function rules()
	{
		return [
			['username', 'trim'],
			['username', 'required'],
			['password', 'required'],
			['password', 'validatePassword'],
		];
	}

	/**
	 * @return bool
	 */
	public function login()
	{
		if ($this->validate()) {
			$user = User::findByUserName($this->username);

			return Yii::$app->user->login($user);
		}

		return false;
	}

	/**
	 * @param $attribute
	 * @param $params
	 */
	public function validatePassword($attribute, $params)
	{
		$user = User::findByUserName($this->username);

		if (!$user || !$user->validatePassword($this->password)) {
			$this->addError($attribute, 'Incorrect password');
		}
	}
}
