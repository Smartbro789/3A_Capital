<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<title>Lab7</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$host = 'localhost';
$user = 'root';
$password = 'admin';
$db_name = 'archive1';
$link = mysqli_connect($host, $user, $password, $db_name) or die('Не удалось установить соединение:' .mysql_error());
echo 'Соединение успешно.';
mysql_select_db('archive1') or die('Не удалось выбрать базу данных');
?>
<h2>Archive Table</h2>
<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Прізвище</td>
			<td>Ім'я</td>
			<td>По-батькові</td>
			<td>Контактний телефон</td>
		</tr>
	</thead>
	<tbody>
<?php
$result = mysqli_query($link, "SELECT * FROM client");
while ($row = mysqli_fetch_array($result)){
?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['Surname']?></td>
		<td><?php echo $row['Name']?></td>
		<td><?php echo $row['Middlename']?></td>
		<td><?php echo $row['contactPhone']}?></td>
	</tr>
</tbody>
</table>
</body>
</html>