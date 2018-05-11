<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;
use frontend\models\example\ExampleValidation;

class TestController extends Controller
{
	public function actionIndex()
	{
		$max = Yii::$app->params['maxNewsInList'];

		$list = Test::getNewsList($max);

		return $this->render('index', [
			'list' => $list
		]);
	}

	public function actionView($id)
	{
		$item = Test::getSingleNews($id);

		return $this->render('view', [
			'item' => $item,
		]);
	}

	public function actionValidation()
	{
		$model = new ExampleValidation();

		$formData = Yii::$app->request->post();

		if (Yii::$app->request->isPost) {
			$model->attributes = $formData;

			if ($model->validate()) {
				Yii::$app->session->setFlash('success', 'Validated!');
			}
		}

		return $this->render('validation', [
			'model' => $model,
		]);
	}
}
