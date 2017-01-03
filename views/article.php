<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
        <title>My First Blog</title>
	<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
	<div class="container">
	    <h3>Мой первый блог</h3>
	    <div>
		<div class="article">
		    <h3>
			<?=$article['title']?>
		    </h3>
		    <em>Опубликовано:<?=$article['date']?></em>
		    <p><?=$article['content']?></p>
		</div>
	    </div>
	    <footer>
		<p>Вася Пупкин Copyright &copy; 2017</p>
	    </footer>
	</div>
    </body>
</html>

