<?php
/* @var $this yii\web\View */
/* @var $bookList[] frontend\models\Book */

use frontend\models\Author;
use yii\helpers\Url;
?>
<h1>Books</h1>
<a href="<?= Url::to(['create']) ?>" class="btn btn-primary">Create book</a>
<?php foreach ($bookList as $book) {
	echo '<h3>' . $book->name . '</h3>';
	echo $book->getDatePublished() . '<br>';
	echo $book->getPublisherName() . '<br>';

	foreach ($book->getAuthors() as $author) {
		echo Author::getFullName()[$author->id - 1] . '<br>';
	}
}