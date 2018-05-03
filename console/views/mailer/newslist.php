<?php foreach($newsList as $item): ?>
	<h1><a href="http://yii2-frontend.com/news/<?=$item['id']?>"><?=$item['title']?></a></h1>
	<p><?=$item['content']?></p><hr>
<?php endforeach; ?>