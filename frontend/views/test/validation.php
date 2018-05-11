<?php
/* @var frontend\models\example\ExampleValidation */

if ($model->hasErrors()) {
	echo '<pre>' . print_r($model->getErrors(), 1) . '</pre>';
}
?>
<h1>Test</h1>
<form method="post">
	<label><input type="checkbox" name="options[]" value="1"> Wifi</label><br>
	<label><input type="checkbox" name="options[]" value="a"> Big window</label><br>
	<label><input type="checkbox" name="options[]" value="3"> Ice cream</label><br>
	<input type="submit">
</form>