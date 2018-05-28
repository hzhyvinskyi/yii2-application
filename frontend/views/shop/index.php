<?php
/* @var $this yii\web\View */
/* @var $productList[] frontend\models\Product */
?>
<h1>Product list</h1>
<?php foreach ($productList as $product): ?>
	<?= $product->name . '<br>'; ?>
	<?= $product->getCategoryName() . '<br>'; ?>
	<?php foreach ($product->getManufacturers() as $manufacturer): ?>
		<?= $manufacturer->name . '<br>'; ?>
	<?php endforeach; ?>
	<hr>
<?php endforeach;
