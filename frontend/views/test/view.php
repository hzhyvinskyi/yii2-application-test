<?php use yii\helpers\Url; ?>
<h1><?=$item['title']?></h1>
<p><?=$item['content']?></p>
<a class="btn btn-info" href="<?=Url::to(['test/index'])?>">Back</a>