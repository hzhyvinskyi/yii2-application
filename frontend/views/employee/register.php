<?php
/* @var $model frontend\models\Employee */

if ($model->hasErrors()) {
	echo '<pre>' . print_r($model->getErrors(), 1) . '</pre>';
}
?>
<h1>Welcome to our company</h1>
<form method="post">
	<p>First name:</p>
	<input type="text" name="firstName"><br><br>
	<p>Last name:</p>
	<input type="text" name="lastName"><br><br>
	<p>Middle name:</p>
	<input type="text" name="middleName"><br><br>
	<p>Email:</p>
	<input type="email" name="email"><br><br>
	<p>Date of birth:</p>
	<input type="text" name="birthDate"><br><br>
	<p>Works since:</p>
	<input type="text" name="workSince"><br><br>
	<p>City:</p>
	<select name="city">
		<option value="1">London</option>
		<option value="2">Berlin</option>
		<option value="3">New York</option>
		<option value="4">Amsterdam</option>
		<option value="5">San Francisco</option>
	</select><br><br>
	<p>Position:</p>
	<input type="text" name="position"><br><br>
	<p>Id code:</p>
	<input type="text" name="code"><br><br>
	<input type="submit">
</form>