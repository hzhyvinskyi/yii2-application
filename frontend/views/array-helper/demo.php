<?php

/* @var $employees array */

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$emails = ArrayHelper::getColumn($employees, 'email');

$map = ArrayHelper::map($employees, 'first_name', 'email');

echo Html::dropDownList('emails', [], $map);