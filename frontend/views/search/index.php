<?php
/* @var $model frontend\models\forms\SearchForm */
/* @var $results frontend\models\NewsSearch */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use frontend\helpers\HighlightHelper;
?>
<h1>Search</h1>
<div class="row">
	<div class="col-md-12">
		<?php $form = ActiveForm::begin(); ?>
		<?= $form->field($model, 'keyword') ?>
		<?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
		<?php ActiveForm::end(); ?>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<?php if ($results): ?>
			<br>
			<?php foreach ($results as $item): ?>
				<?= $item['title'] ?><br>
				<?= HighlightHelper::process($model->keyword, $item['content']) ?><hr>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
