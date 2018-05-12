<?php

namespace frontend\controllers;

use frontend\models\Window;
use yii\web\Controller;
use Yii;

class WindowController extends Controller
{
	/**
	 * Window order action
	 * @return string
	 */
	public function actionOrder()
	{
		$model = new Window();
		$formData = Yii::$app->request->post();

		if (Yii::$app->request->isPost) {
			$model->attributes = $formData;

			if ($model->validate() && $model->orderMail($model)) {
				Yii::$app->session->setFlash('success', 'Order has processed');
			}
		}

		return $this->render('order', [
			'model' => $model,
		]);
	}
}
