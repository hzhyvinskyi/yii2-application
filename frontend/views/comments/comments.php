<?php
/* @var $comments array */
/* @var $model frontend\models\Comments */

use yii\helpers\Html;

if ($model->hasErrors()) {
	echo '<pre>' . print_r($model->getErrors(), 1) . '</pre>';
}

foreach ($comments as $comment) {
	echo Html::encode($comment['name']) . '<br>';
	echo Html::encode($comment['email']) . '<br><br>';
	echo Html::encode($comment['text']) . '<hr>';
}

echo Html::beginForm('', 'post');
echo Html::input('text', 'name', null, ['placeholder' => 'Name']) . '<br>';
echo Html::input('email', 'email', null, ['placeholder' => 'Email']) . '<br>';
echo Html::textarea('text', null, ['placeholder' => 'Your comment...']) . '<br>';
echo Html::submitInput('Submit');
echo Html::endForm();
