<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Comments;

class CommentsController extends Controller
{
	public function actionIndex()
	{
		$comments = Comments::getData();
		$model = new Comments();
		$formData = Yii::$app->request->post();

		if (Yii::$app->request->isPost) {
			$model->attributes = $formData;

			if ($model->validate() && $model->saveData()) {
				Yii::$app->session->setFlash('success', 'Comment has added');
			}
		}

		return $this->render('comments', [
			'comments' => $comments,
			'model' => $model,
		]);
	}
}
