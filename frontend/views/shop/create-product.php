<?php
/* @var $product[] frontend\models\Product */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<h1>Add Product</h1>
<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($product, 'name'); ?>
	<?= $form->field($product, 'price'); ?>
	<?= $form->field($product, 'category_id'); ?>
	<?= $form->field($product, 'availability'); ?>
	<?= Html::submitButton('Save', ['class' => 'btn btn-primary']); ?>
<?php ActiveForm::end();