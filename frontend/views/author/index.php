<?php
/* @var $this yii\web\View */
/* @var $authorsList[] frontend\models\Author */

use yii\helpers\Url;
?>
<h1>Authors</h1>
<a href="<?= Url::to(['author/create']); ?>" class="btn btn-primary">Add an author</a>
<br><br>
<table class="table table-condensed">
	<tr>
		<th>ID</th>
		<th>First name</th>
		<th>Last name</th>
		<th>Dirthdate</th>
		<th>Rating</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
<?php foreach ($authorsList as $author): ?>
	<tr>
		<td><?= $author->id; ?></td>
		<td><?= $author->first_name; ?></td>
		<td><?= $author->last_name; ?></td>
		<td><?= $author->birthdate; ?></td>
		<td><?= $author->rating; ?></td>
		<td><a href="<?= Url::to(['author/update', 'id' => $author->id]); ?>">Edit</a></td>
		<td><a href="<?= Url::to(['author/delete', 'id' => $author->id]); ?>">Delete</a></td>

	</tr>
<?php endforeach; ?>
</table>