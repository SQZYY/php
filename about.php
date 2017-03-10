<?php
$name = 'Егор';
$age = '21';
$email = 'egorax1le@yandex.ru';
$city = 'Видное';
$about = 'Начинающий программист';
?>

<!Doctype html>
<html>
	<head>
		<title>Егор - Студент</title>
		<meta charset="utf-8">
		<style>
			body {
                font-family: sans-serif;  
            }
            
            dl {
                display: table-row;
            }
            
            dt, dd, h1 {
                display: table-cell;
                padding: 5px 5px;
            }
		</style>
	</head>
	<body>
		<h1>Страница студента <?= $name?></h1>
        <dl>
            <dt>Имя</dt>
            <dd><?= $name?></dd>
        </dl>
        <dl>
            <dt>Возраст</dt>
            <dd><?= $age?></dd>
        </dl>
        <dl>
            <dt>Адрес электронной почты</dt>
            <dd><a href=""><?= $email?></a></dd>
        </dl>
        <dl>
            <dt>Город</dt>
            <dd><?= $city?></dd>
        </dl>
        <dl>
            <dt>О себе</dt>
            <dd><?= $about?></dd>
        </dl>
	</body>
</html>