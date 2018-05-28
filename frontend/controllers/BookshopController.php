<?php

namespace frontend\controllers;

use frontend\models\Publisher;
use Yii;
use frontend\models\Book;

class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {
//    	$conditions = ['publisher_id' => 1];
    	$bookList = Book::find()->orderBy('date_published')->limit(20)->all();

        return $this->render('index', [
        	'bookList' => $bookList,
		]);
    }

	public function actionCreate()
	{
		$book = new Book();
		$publishers = Publisher::getList();

		if ($book->load(Yii::$app->request->post()) && $book->save()) {
			Yii::$app->session->setFlash('success', 'Saved');

			return $this->refresh();
		}

		return $this->render('create', [
			'book' => $book,
			'publishers' => $publishers,
		]);
	}
}
