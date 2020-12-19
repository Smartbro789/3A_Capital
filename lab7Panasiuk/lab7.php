<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>lab7Panasiuk</title>
    
</head>

<body>

<form action="insert.php" method="post"> 
модель <input name="model"  maxlength=23 size=23><br>
виробник <input name="manufacturer"  maxlength=23 size=23><br>
кількість <input name="amount"  maxlength=23 size=23><br>
ціна <input name="price"  maxlength=23 size=23><br>
поставник   <select name="provider">
                <option value="1">розетка</option>
                <option value="2">алло</option>
                <option value="3">цитрус</option>
            </select><br>
<button type="submit" >Відправити на сервер</button><br>
</form>
<br>
<br>

<form action="lab7.php" method="get">
пошук по виробнику:
<input name="search"  maxlength=23 size=23><br>
<button type="submit" >пошук</button><br>
</form>

<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "weblabs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

$sql = "SELECT id, model, manufacturer, amount, price, providerid FROM computers";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'><tr><th>Model</th><th>Manufacturer</th><th>Amount</th><th>Price</th><th>Provider</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if ($_GET["search"] !=""){
            if ($row["manufacturer"] != $_GET["search"]){
                continue;
            }
        }

        $manufname=null;

        $pid=$row["providerid"];
        $sql = "SELECT name FROM provider WHERE id = $pid";
        $resultj = mysqli_query($conn, $sql);

        while(($rowj=mysqli_fetch_assoc($resultj))){
            $manufname = $rowj["name"];
        }
        echo "<tr><td>", $row["model"], "</td><td>", $row["manufacturer"], "</td><td>", $row["amount"], "</td><td>", $row["price"], "</td><td>", $manufname, "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
</body>
</html>