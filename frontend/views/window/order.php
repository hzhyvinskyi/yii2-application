<?php
/* @var $model frontend\models\Window */

if ($model->hasErrors()) {
	echo '<pre>' . print_r($model->getErrors(), 1) . '</pre>';
}
?>
<h1>Order form</h1>
<form method="post">
	<p>Width:</p>
	<input type="text" name="width" value="<?php if ($model['width']) { echo $model['width']; } ?>"><br><br>
	<p>Height:</p>
	<input type="text" name="height" value="<?php if ($model['height']) { echo $model['height']; } ?>"><br><br>
	<p>Cell amount:</p>
	<label>
		<input type="radio" name="cellAmount" value="1" <?php if ($model['cellAmount'] === '1') { echo 'checked'; } ?>>
		1
	</label><br>
	<label>
		<input type="radio" name="cellAmount" value="2" <?php if ($model['cellAmount'] === '2') { echo 'checked'; } ?>>
		2
	</label><br>
	<label>
		<input type="radio" name="cellAmount" value="3" <?php if ($model['cellAmount'] === '3') { echo 'checked'; } ?>>
		3
	</label><br><br>
	<p>Total casement amount:</p>
	<input type="text" name="totalCasementsAmount" value="<?php if ($model['totalCasementsAmount']) { echo $model['totalCasementsAmount']; } ?>">
	<br><br>
	<p>Turning casement amount:</p>
	<input type="text" name="turningCasementsAmount" value="<?php if ($model['turningCasementsAmount']) { echo $model['turningCasementsAmount']; } ?>">
	<br><br>
	<p>Color:</p>
	<select name="color">
		<option value="1" <?php if ($model['color'] === '1') { echo 'selected'; }; ?>>White</option>
		<option value="2" <?php if ($model['color'] === '2') { echo 'selected'; }; ?>>Silver</option>
		<option value="3" <?php if ($model['color'] === '3') { echo 'selected'; }; ?>>Brown</option>
		<option value="4" <?php if ($model['color'] === '4') { echo 'selected'; }; ?>>Grey</option>
	</select><br><br>
	Windowsill: <input type="checkbox" name="windowsill" value="1" <?php if ($model['windowsill']) { echo 'checked'; } ?>>
	<br><br>
	<p>Email:</p>
	<input type="email" name="email" value="<?php if ($model['email']) { echo $model['email']; } ?>"><br><br>
	<p>Name:</p>
	<input type="text" name="name" value="<?php if ($model['name']) { echo $model['name']; } ?>"><br><br>
	<input type="submit">
</form>
