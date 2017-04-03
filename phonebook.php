<<<<<<< HEAD
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
		<?php foreach ($json as $item) { ?>
		<tr>
			<td><?php echo $item['firstName'] ?></td>
			<td><?php echo $item['lastName'] ?></td>
			<td><?php echo $item['address'] ?></td>
			<td><?php echo $item['phoneNumber'] ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
=======
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
		<?php foreach ($json as $item) { ?>
		<tr>
			<td><?php echo $item['firstName'] ?></td>
			<td><?php echo $item['lastName'] ?></td>
			<td><?php echo $item['address'] ?></td>
			<td><?php echo $item['phoneNumber'] ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
>>>>>>> b4ad8ad955d62e244049d823e262626e0ef0211e
