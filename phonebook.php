<?php 
	$telbook = file_get_contents("telbook.json");
	$json = json_decode($telbook, true);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Таблица</title>
	<style>
		table td {
			border: 1px solid;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Адрес</th>
			<th>Телефонный номер</th>
		</tr>
		<tr>
			<td><?= $json[0]['firstName'] ?></td>
			<td><?= $json[0]['lastName'] ?></td>
			<td><?= $json[0]['address'] ?></td>
			<td><?= $json[0]['phoneNumber'] ?></td>
		</tr>
		<tr>
			<td><?= $json[1]['firstName'] ?></td>
			<td><?= $json[1]['lastName'] ?></td>
			<td><?= $json[1]['address'] ?></td>
			<td><?= $json[1]['phoneNumber'] ?></td>
		</tr>
	</table>
</body>
</html>