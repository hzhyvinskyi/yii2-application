<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Employee extends Model
{
	const SCENARIO_EMPLOYEE_REGISTER = 'employee_register';
	const SCENARIO_EMPLOYEE_UPDATE = 'employee_update';

	public $firstName;
	public $lastName;
	public $middleName;
	public $salary;
	public $email;
	public $birthDate;
	public $workSince;
	public $city;
	public $position;
	public $code;

	public function scenarios() {
		return [
			self::SCENARIO_EMPLOYEE_REGISTER => [
				'firstName', 'lastName', 'middleName', 'email', 'birthDate',
				'workSince', 'city', 'position', 'code',
			],
			self::SCENARIO_EMPLOYEE_UPDATE => [
				'firstName', 'lastName', 'middleName',
			],
		];
	}

	public function rules()
	{
		return [
			[['firstName', 'lastName', 'email', 'workSince', 'position', 'code'],
				'required'],
			[['firstName'], 'string', 'min' => 2],
			[['lastName'], 'string', 'min' => 3],
			[['email'], 'email'],
			[['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
			[['birthDate', 'workSince'], 'date', 'format' => 'php:Y-m-d'],
			['city', 'integer'],
			['position', 'string'],
			['code', 'string', 'length' => 10],
		];
	}

	/**
	 * Saves employee's data into the database
	 * @return int
	 * @throws \yii\db\Exception
	 */
	public function save()
	{
		$sql = "
			INSERT INTO employee 
			(id, first_name, last_name, middle_name, email, birth_date, works_since, 
			city, `position`, code) VALUES (null, '{$this->firstName}', '{$this->lastName}', 
			'{$this->middleName}', '{$this->email}', '{$this->birthDate}', '{$this->workSince}',
			 '{$this->city}', '{$this->position}', '{$this->code}')";

		return Yii::$app->db->createCommand($sql)->execute();
	}

	public static function getWagesList($limit = null)
	{
		$limit = intval($limit);

		$sql = "SELECT first_name, last_name, wages FROM employee ORDER BY wages DESC LIMIT {$limit}";

		return Yii::$app->db->createCommand($sql)->queryAll();
	}

	public static function find()
	{
		$sql = "SELECT * FROM employee";

		return Yii::$app->db->createCommand($sql)->queryAll();
	}
}
