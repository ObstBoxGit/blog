<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
        <title>My First Blog</title>
	<link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
	<div class="container">
	    <h3>Мой первый блог</h3>
<!--	<a href="admin">Панель администратора</a> -->
	    <div>		
			<a href="index.php?action=add">Добавить статью</a>
<!--		<table border='1'> -->
			<table class="admin-table">
				<tr>
					<th>&nbsp;Дата&nbsp;</th>
					<th>&nbsp;Заголовок&nbsp;</th>
					<th>&nbsp;&nbsp;</th>
					<th>&nbsp;&nbsp;</th>
				</tr>
				<?php foreach($articles as $a): ?>
					<tr>
						<td>&nbsp;<?=$a['date']?>&nbsp;</td>
						<td>&nbsp;<?=$a['title']?>&nbsp;</td>
						<td>&nbsp;<a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>&nbsp;</td>
						<td>&nbsp;<a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>&nbsp;</td>
					</tr>
				<?php endforeach ?>
			</table>
	    </div>
	    <div class="spacer"></div>
	    <footer>
		<p>Вася Пупкин<br>Copyright &copy; 2017</p>
	    </footer>
	</div>
    </body>
</html>

