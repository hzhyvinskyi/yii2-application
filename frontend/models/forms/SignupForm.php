<?php

namespace frontend\models\forms;

use Yii;
use yii\base\Model;
use frontend\models\User;

class SignupForm extends Model
{
	public $username;
	public $email;
	public $password;

	public function rules() {
		return [
			[['username', 'email', 'password'], 'required'],
			[['username', 'email'], 'trim'],
			[['username', 'email', 'password'], 'string', 'min' => 3, 'max' => '30'],
			[['username', 'email'], 'unique', 'targetClass' => User::className()],
			['username', 'unique', 'targetClass' => User::className()],
			['email', 'email'],
		];
	}

	/**
	 * Save user
	 * @return User|null
	 * @throws \yii\base\Exception
	 */
	public function save()
	{
		if ($this->validate()) {
			$user = new User();

			$user->username = $this->username;
			$user->email = $this->email;
			$user->created_at = $time = time();
			$user->updated_at = $time;
			$user->auth_key = Yii::$app->security->generateRandomString();
			$user->password_hash = Yii::$app->security->generatePasswordHash($this->password);

			if ($user->save()) {
				return $user;
			}
		}
	}
}
