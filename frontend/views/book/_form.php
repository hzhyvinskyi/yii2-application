<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>

	<?= $form->field($model, 'date_published')->widget(
		DatePicker::className(), [
		// inline too, not bad
		'inline' => true,
		// modify template for custom rendering
		'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
		'clientOptions' => [
			'autoclose' => true,
			'format' => 'yyyy-mm-dd'
		]
	]);?>

    <?= $form->field($model, 'publisher_id')->dropDownList($publishers) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
