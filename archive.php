<!DOCTYPE html>
<html>
<head>
	<title>Ticket status</title>
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
$start = $_POST["start"];
$result = mysqli_query($conn, "SELECT * FROM client WHERE start_point = '$start' ");
if (mysqli_num_rows($result) > 0) {
echo "<table border='3'><tr><td>ID</td><td>Прізвище</td><td>Ім'я</td><td>По-батькові</td><td>Контактний телефон</td></tr>";
while($row = mysqli_fetch_array($result)) {
if ($_GET["search"] != ""){
    if($row["Контактний телефон"]) != $_GET["search"]){
        continue;
    }
}
while(($row=mysqli_fetch_array($result))){
    $contactPhone = $rowj["name"];
}
echo "<tr><td>", $row["idClient"], "</td><td>", $row["Surname"], "</td><td>", $row["Name"], "</td><td>", $row["Middlename"], "</td><td>", $row["contactPhone"], "</td></tr>";
}
?>
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
    </tbody>
</table>

</body>
</html>