<?php

namespace frontend\assets;

use yii\web\AssetBundle;

class SliderAsset extends AssetBundle
{
	public $css = [
		'css/slider/style.css',
		];

	public $js = [
		'js/slider/jquery.slider.js',
		];

	public $depends = [
		'yii\web\JqueryAsset',
	];
}
