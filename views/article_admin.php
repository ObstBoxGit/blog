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
			<div>
				<form method="post" action="index.php?action=add">
					<label>
						Название
					</label>				
					<input type="text" name="title" value="" class="form-item" autofocus required>
					
					<label>
						Дата
					</label>				
					<input type="date" name="date" class="form-item" required>

					<label>
						Содержимое
					</label>
					<textarea class="form-item" name="content" required></textarea>
					
					<input type="submit" value="Сохранить" class="btn">
				</form>
			</div>
			<div class="spacer"></div>
			<footer>
			<p>Вася Пупкин<br>Copyright &copy; 2017</p>
			</footer>
		</div>
    </body>
</html>

