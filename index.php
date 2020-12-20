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
$password = 'root';
$db_name = 'archive';
$conn = mysqli_connect("localhost", "root", "root", "archive")
    or die('Не удалось соединиться: ' . mysqli_error());
echo 'Соединение успешно установлено';
?>
<h2>Archive Table</h2>
<table>
	<tr>
		<td>ID</td>
		<td>Прізвище</td>
		<td>Ім'я</td>
		<td>По-батькові</td>
		<td>Контактний телефон</td>
	</tr>
<?php
$result = mysqli_query($conn, "SELECT * FROM client");
while ($row = mysqli_fetch_array($result)){
?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['Surname']?></td>
		<td><?php echo $row['Name']?></td>
		<td><?php echo $row['Middlename']?></td>
		<td><?php echo $row['contactPhone']?></td>
	</tr>
<?php
}
?>
</table>
</body>
</html>