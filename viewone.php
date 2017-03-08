<html>
  <head>
    <meta charset="utf-8">
    <title>Вывод новостей</title>
	</head>
  <body>
<div style="text-align: center; font-size: 20px;">
    <h2><?= $name; ?></h2>

	<p><?= $content; ?></p></br>
	<h3>Комментарии:</h3>
	
	<?php foreach($comments as $name => $text):?>

	<p><?= "<b>$name</b> прокомментировал: <b>$text</b>"; ?></p>
	
	<?php endforeach; ?>
		
	<p><a href ="news.php">Вернутся к списку новостей</a></p>
</div>
  </body>
</html>