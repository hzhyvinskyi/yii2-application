<?php

namespace frontend\models\example;

use yii\base\Model;

class ExampleValidation extends Model
{
	public $options;

	public function rules()
	{
		return [
			[['options'], 'required', 'message' => 'Please choose a III'],
			[['options'], 'each', 'rule' => ['integer']],
		];
	}
}