<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset ="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab7</title>
	<link rel="stylesheet" href="main.css">
	
</head>
<body>
<?php
require_once 'checkconnect.php';

if(isset($_POST['Filename']) && isset($_POST['phone'])){
	$link = mysqli_connect($host, $user, $password, $db_name) or die("Помилка " . mysqli_error($link));

	$filename = htmlentities(mysqli_real_escape_string($link, $_POST['Filename']));
	$date = htmlentities(mysqli_real_escape_string($link, $_POST['Date']));

	$surname = htmlentities(mysqli_real_escape_string($link, $_POST['Surname']));
	$cname = htmlentities(mysqli_real_escape_string($link, $_POST['cName']));
	$middlename = htmlentities(mysqli_real_escape_string($link, $_POST['Middlename']));
	$phone = htmlentities(mysqli_real_escape_string($link, $_POST['phone']));

	$query = "SELECT idClient FROM client WHERE phone = '$phone' ";
	$clientid = mysqli_query($link, $query) or die("Помилка " . mysqli_error($link));
	while ($row = mysqli_fetch_array($clientid)){
		$idClient = $row['idClient'];
	}

	if ($idClient) {
		$query1 = "INSERT INTO Archive (Filename, Date) VALUES('$filename', STR_TO_DATE('$date','%Y-%m-%d'), '$idClient')";
		$result1 = mysqli_query($link, $query1) or die("Помилка " . mysqli_error($link));
		if ($result1) {
			echo "<span style='color:blue;'>Данные добавлены</span>";
		}
	}
	else {
		$query1 = "INSERT INTO Archive (Filename, Date) VALUES('$filename', '$place', STR_TO_DATE('$date','%Y-%m-%d'))";
		$query2 = "INSERT INTO Client (surname, cname, middlename, phone) VALUES('$surname', '$cname', '$middlename','$phone')";
		echo "<span style='color:blue;'>else</span>";

		$result1 = mysqli_query($link, $query1) or die("Помилка " . mysqli_error($link));
		if ($result1) {
			echo "<span style='color:blue;'>Данные добавлены</span>";
		}
		$result2 = mysqli_query($link, $query2) or die("Помилка " . mysqli_error($link));
		if ($result2) {
			echo "<span style='color:blue;'>Данные добавлены</span>";
		}

		$query3 = "SELECT idClient FROM Client";
		$idClient1 = mysqli_query($link, $query3) or die("Помилка " . mysqli_error($link));
		while ($row = mysqli_fetch_array($idClient1)){
			$idClient = $row['idClient'];
		}

		$query4 = "UPDATE Archive SET idClient = '$idClient' WHERE Filename = '$filename'";
		$result3 = mysqli_query($link, $query4) or die("Помилка " . mysqli_error($link));
	}

	// закрываем подключение
	mysqli_close($link);
	
}
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
    	$( "#datepicker" ).datepicker();
  	} );
    </script>
</body>
</html>