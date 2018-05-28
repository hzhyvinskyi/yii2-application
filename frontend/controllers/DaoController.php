<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

class DaoController extends Controller
{
	public function actionIndex()
	{
		$sql = "DELETE FROM news WHERE id = 11";

		$result = Yii::$app->db->createCommand($sql)->execute();

		echo '<pre>' . print_r($result, 1) . '</pre>'; exit;

		return $this->render('index');
	}
}
