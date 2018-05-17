<?php use yii\helpers\Url; ?>
<h3><?=$item['title']?></h3>
<p><?=$item['content']?></p>
<a class="btn btn-info" href="<?=Url::to(['test/index'])?>">Back</a>