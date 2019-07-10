<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>firstone</title>
	<meta name="keywords" content="ЕГЭ, баллы, результаты ЕГЭ">
	<meta name="description" content="Портал для просмотра баллов ЕГЭ">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php require "blocks/header.php" ?>
		<div class="site_content">
			<div class="registration_form">
				<form action="classes/main.php" id="form" method="post">
					<label for="name">Имя</label><br><input id="name" name="name" placeholder="Василий"><br>
					<label for="surname">Фамилия</label><br><input id="surname" name="surname" placeholder="Иванов"><br>					
					<label for="email">Эл. почта</label><br><input id="email" name="email" placeholder="example@test.ru"><br>					
					<label for="gender">Пол</label><br><input id="gender" name="gender" placeholder="Поц"><br>					
					<label for="group">Группа</label><br><input id="group" name="group" placeholder="ЕЖ.50.10"><br>
					<label for="score">Баллы</label><br><input id="score" name="score" placeholder="240"><br>
					<label for="date_of_birth">Дата рождения</label><br><input id="date_of_birth" name="date_of_birth" placeholder="09.01.1995"><br>
					<label> Ваш город</label><br>
                    <input id="propis" name="city" placeholder="Москва"><br>
					<button type="submit" name="send">Зарегистрироваться</button>
				</form>
			</div>
		</div>
</body>
</html>