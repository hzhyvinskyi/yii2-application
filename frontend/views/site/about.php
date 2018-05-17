<?php

/* @var $this yii\web\View */

use Yii;
use yii\helpers\Html;
use frontend\widgets\newsList\NewsList;
use frontend\widgets\wagesList\WagesList;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
	<div class="row">
		<div class="col-lg-4">
			<h1><?= Html::encode($this->title) ?></h1>

			<p>This is the About page. You may modify the following file to customize its content:</p>

			<code><?= __FILE__ ?></code>
		</div>
		<div class="col-lg-4">
			<?=WagesList::widget(['count' => Yii::$app->params['aboutWagesLimit']])?>
		</div>
		<div class="col-lg-4">
			<?=NewsList::widget(['showLimit' => Yii::$app->params['aboutNewsLimit']])?>
		</div>
	</div>
</div>
