<?php
/* @var $model frontend\models\Subscribe */
/* @var $this \yii\web\View */

use frontend\assets\GalleryAsset;

GalleryAsset::register($this);

$this->title = 'Подписка';
$this->registerMetaTag([
	'name' => 'Страница подписки',
	'content' => 'Подписаться на новости',
]);

$this->params['breadcrumbs'] = [
	'Test1',
	['label' => 'Test2', 'url' => ['site/index']],
	'Test3',
	'Test4',
];

if ($model->hasErrors()) {
	echo '<pre>' . print_r($model->getErrors(), 1) . '</pre>';
}
?>
<form method="post">
	<p>Email:</p>
	<input type="text" name="email">
	<br><br>
	<input type="submit">
</form>