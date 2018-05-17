<?php

namespace frontend\widgets\wagesList;

use Yii;
use yii\base\Widget;
use frontend\models\Employee;

class WagesList extends Widget
{
	public $count = null;

	public function run()
	{
		$limit = Yii::$app->params['wagesLimit'];

		if ($this->count) {
			$limit = $this->count;
		}

		$wagesList = Employee::getWagesList($limit);

		return $this->render('wagesBlock', [
			'wagesList' => $wagesList,
		]);
	}
}
