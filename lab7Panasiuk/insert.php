<?php 
$servername = "localhost:3306";
$database = "weblabs";
$username = "root";
$password = "root";
$conn = mysqli_connect($servername, $username, $password, $database);

$model = $_POST["model"];
$manufacturer = $_POST["manufacturer"];
$amount = $_POST["amount"];
$price = $_POST["price"];
$providerid = $_POST["provider"];

$sql = "INSERT INTO computers (model, manufacturer, amount, price, providerid) VALUES ('$model', '$manufacturer', '$amount', '$price', $providerid)";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>

<html>
<body>

створено запис:<br>
модель:<?php echo $model ?><br>
виробник:<?php echo $manufacturer ?><br>
кількість:<?php echo $amount ?><br>
ціна:<?php echo $price ?><br>
поставник:<?php echo $providerid ?><br>
</body>
</html>