<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;

echo Html::tag('h1', 'Some cities');

$array = [
	'1' => 'London',
	'2' => 'Washington',
	'3' => 'Paris',
	'4' => 'Stockholm',
];

echo Html::dropDownList('city_id', [], $array);
echo Html::radioList('city_id', [], $array);
echo Html::checkboxList('city_id', [], $array);

echo Html::img('@images/coffee.jpg', ['alt' => 'coffe']) . '<br><br>';

echo Html::button('Press me!', ['class' => 'btn']);
echo Html::submitButton('Press me too!', ['class' => 'btn btn-default']);
echo Html::resetButton('And me!', ['class' => 'btn btn-default']);

echo Html::input('text', 'email', null, ['class' => 'fork']);
echo '<br>';
echo Html::a('link', ['site/index'], ['class' => 'some-link']);

$that = ArrayHelper::remove($array, 3);

echo '<pre>' . print_r($array, 1) . '</pre>';

echo ArrayHelper::keyExists(4, $array, true);

$arr = [
	['1' => 'one', '2' => 'two', '3' => 'three', '4' => 'four'],
	['2' => 'two2', '3' => 'three3'],
];

$newArray = ArrayHelper::index($arr, '2');

echo '<pre>' . print_r($newArray, 1) . '</pre>';

$array = [
	['id' => '123', 'name' => 'aaa', 'class' => 'x'],
	['id' => '124', 'name' => 'bbb', 'class' => 'x'],
	['id' => '345', 'name' => 'ccc', 'class' => 'y'],
];

$result = ArrayHelper::map($array, 'id', 'class');

echo '<pre>' . print_r($result, 1) . '</pre>';