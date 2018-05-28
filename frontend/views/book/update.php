<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Book */
/* @var $publishers frontend\models\Publisher */

$this->title = 'Update Book: #' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="book-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
		'publishers' => $publishers,
    ]) ?>

</div>
