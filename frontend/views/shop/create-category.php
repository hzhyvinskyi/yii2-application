<?php
/* @var $category[] frontend\models\Category */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Add Category</h1>
<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($category, 'name'); ?>
	<?= $form->field($category, 'status'); ?>
	<?= Html::submitButton('Save', ['class' => 'btn btn-primary']); ?>
<?php ActiveForm::end();