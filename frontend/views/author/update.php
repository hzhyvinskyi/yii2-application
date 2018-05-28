<?php
/* @var $this yii\web\View */
/* @var $model frontend\models\Author */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Edit an author #<?= $model->id; ?></h1>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'first_name'); ?>
<?= $form->field($model, 'last_name'); ?>
<?= $form->field($model, 'birthdate'); ?>
<?= $form->field($model, 'rating'); ?>
<?= Html::submitButton('Save', [
	'class' => 'btn btn-primary',
]); ?>
<?php ActiveForm::end(); ?>
