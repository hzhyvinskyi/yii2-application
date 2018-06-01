<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\User;

class ExampleController extends Controller
{
	public function actionIndex()
	{
		$user = new User;

		echo 'test<br>';
	}
}
