<?php

namespace frontend\controllers;

use yii\web\Controller;

class HtmlHelperController extends Controller
{
	public function actionDemo()
	{
		return $this->render('demo');
	}

	public function actionEscapeOutput()
	{
		$comments = [
			[
				'id' => 1,
				'author' => 'nick',
				'text' => 'it\'s my opinion',
			],
			[
				'id' => 2,
				'author' => 'noah',
				'text' => 'how are you?',
			],
			[
				'id' => 3,
				'author' => 'hacker',
				'text' => '<b>hello</b><script>alert("Bugaga...");</script>',
			],
		];

		return $this->render('escape-output', [
			'comments' => $comments,
		]);
	}
}
