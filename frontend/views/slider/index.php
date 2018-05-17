<?php
/* @var $this yii\web\View */
use frontend\assets\SliderAsset;

SliderAsset::register($this);
$this->registerJsFile('js/slider/slider.init.js', ['depends' =>
	SliderAsset::className()]);
?>
<div class="slider">
	<ul>
		<li><img src="/files/images/1.jpg"></li>
		<li><img src="/files/images/2.jpg"></li>
		<li><img src="/files/images/3.jpg"></li>
		<li><img src="/files/images/4.jpg"></li>
		<li><img src="/files/images/5.jpg"></li>
	</ul>
</div>
