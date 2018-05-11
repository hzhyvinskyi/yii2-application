<?php
/* @var $model frontend\models\Window */
?>
<h1>Window order</h1>
<table border="1" cellpadding="5">
	<?php foreach ($model as $key => $value): ?>
		<tr>
			<td><?=$key?></td>
			<td><?=$value?></td>
		</tr>
	<?php endforeach; ?>
</table>
