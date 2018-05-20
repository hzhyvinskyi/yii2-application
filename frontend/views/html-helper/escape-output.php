<?php

/* @var $comments array */

use yii\helpers\Html;

echo Html::tag('h1', 'Comments');
echo '<hr>';

foreach ($comments as $comment):
	echo Html::tag('h3', Html::encode($comment['author']));
	echo Html::tag('p', Html::encode($comment['text']));
	echo '<hr>';
endforeach;
