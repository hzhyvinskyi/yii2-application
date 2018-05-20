<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class Lesson13Asset extends AssetBundle
{
	public $css= [
		'css/font-awesome/font-awesome.css',
		'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',
		'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
		'css/lesson13/style.css',
	];

	public $js = [
		'js/lesson13/clean-blog.min.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}
