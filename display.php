<!DOCTYPE html>
<html>

<head>
    <title>Первый сайт на PHP</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    $name = $_POST["firstname"];
    $surname = $_POST["lastname"];
    echo "Ваше имя: <b>" . $name . " " . $surname . "</b><br>" ;
    $date_today = date("m.d.y");
    $today[1] = date("H:i:s");
    echo ("Текущее время: $today[1] и дата: $date_today .");
    ?>
</body>

</html>

