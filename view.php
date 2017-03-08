<html>
  <head>
    <meta charset="utf-8">
    <title>Вывод новостей</title>
	</head>
  <body>
<div style="text-align: center; font-size: 20px;">
    <h2><?= $name; ?></h2>

 <?php foreach($content as $key=>$value): ?>
	
		<p><a href= "news.php?id=<?= $key; ?>"><?= $key .' -- '. $value; ?></a></p>
	
	<?php endforeach; ?>
	
</div>
  </body>
</html>