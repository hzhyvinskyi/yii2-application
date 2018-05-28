<?php
/* @var $manufacturer[] frontend\models\Manufacturer */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Add Manufacturer</h1>
<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($manufacturer, 'name'); ?>
	<?= $form->field($manufacturer, 'founded'); ?>
	<?= $form->field($manufacturer, 'origin'); ?>
	<?= $form->field($manufacturer, 'number_of_locations'); ?>
	<?= Html::submitButton('Save', ['class' => 'btn btn-primary']); ?>
<?php ActiveForm::end();