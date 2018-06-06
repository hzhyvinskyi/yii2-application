<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use frontend\widgets\newsList\NewsList;
use frontend\widgets\wagesList\WagesList;

$this->title = 'My Yii Application';
?>
<div class="site-index">
	<a href="<?=Yii::$app->urlManager->createUrl(['news/base']);?>" class="btn btn-danger">News count</a>
    <div class="jumbotron">
        <h1>Congratulations!</h1>
		<?php if (Yii::$app->user->identity) echo Yii::$app->user->identity->username; ?>
        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="<?=Url::to(['newsletter/subscribe'])?>">Subscribe to newsletter</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Hot news</h2>
				<?=NewsList::widget(['showLimit' => Yii::$app->params['mainNewsLimit']])?>
			</div>
            <div class="col-lg-4">
                <h2>Wages</h2>
				<?=WagesList::widget(['count' => 3])?>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
				<a href="<?= Url::to(['search/index']) ?>">Indexed search</a><br>
				<a href="<?= Url::to(['search/advanced']) ?>">Sphinx search</a>
            </div>
        </div>

    </div>
</div>
