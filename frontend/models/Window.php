<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

/**
 * Window order model
 * @package frontend\models
 */
class Window extends Model
{
	public $width;
	public $height;
	public $cellAmount;
	public $totalCasementsAmount;
	public $turningCasementsAmount;
	public $color;
	public $windowsill;
	public $email;
	public $name;

	public function rules()
	{
		return [
			[['width', 'height', 'cellAmount', 'totalCasementsAmount',
			'turningCasementsAmount', 'color', 'email', 'name'],
			'required'],
			['width', 'number', 'min' => 70],
			['width', 'number', 'max' => 210],
			['height', 'number', 'min' => 100],
			['height', 'number', 'max' => 200],
			['cellAmount', 'integer'],
			['totalCasementsAmount', 'integer', 'min' => 1],
			['turningCasementsAmount', 'integer'],
			['turningCasementsAmount', 'compare',
				'compareAttribute' => 'totalCasementsAmount',
				'operator' => '<=',
			],
			['color', 'integer'],
			['windowsill', 'integer'],
			['email', 'email'],
			['name', 'string', 'min' => 2],
		];
	}

	/**
	 * Sends message with order data to admin
	 * @param $model
	 * @return bool
	 */
	public function orderMail($model)
	{
		$result = Yii::$app->mailer->compose('/mailer/windowOrder', [
			'model' => $model,
		])
			->setFrom(Yii::$app->params['adminEmail'])
			->setTo(Yii::$app->params['adminEmail'])
			->setSubject('Window order')
			->send();

		return $result;
	}
}
