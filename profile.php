<?php
require_once 'sessionstart.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>AAA Capital</title>

</head>

<body>
    <?php
    require_once 'connect.php';
    
    if (isset($_POST['investname']) && isset($_POST['amount'])) {

        $link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка " . mysqli_error($link));

        $investname = htmlentities(mysqli_real_escape_string($link, $_POST['investname']));
        $amount = htmlentities(mysqli_real_escape_string($link, $_POST['amount']));

        $query = mysqli_query($link, "SELECT id FROM investplan WHERE name = '$investname'") or die("Ошибка " . mysqli_error($link));

        $rows = mysqli_num_rows($query);

        if ($query) {
            if ($rows == 0) {
                echo "<script>alert('Виберіть інший план!')</script>";
            } else {
                $row = mysqli_fetch_row($query);
                $id = $row[0];

                $query = mysqli_query($link, "INSERT INTO invest VALUES (NULL, '$iduser', '$id', '$amount'") or die("Ошибка " . mysqli_error($link));

                if ($query) {
                    echo "<script>alert('Успіх!')</script>";
                }
            }
        }
    }
    ?>
    <div class="background">
        <header id="header">
            <div class="container">
                <div class="header_logo">AAA Capital</div>
            </div>
        </header>
        <div style="margin-left: 10px">
            <h3>Вітаємо, вас обслуговує менеджер: <?php
            
            $link = mysqli_connect($host, $user, $password, $database)
                or die("Ошибка " . mysqli_error($link));
            $query = mysqli_query($link, "SELECT idworker FROM relation WHERE iduser = '$id'") or die("Ошибка " . mysqli_error($link));
            $row = mysqli_fetch_row($query);
            $idworker = $row[0];

            $query1 = mysqli_query($link, "SELECT name FROM worker WHERE id = '$idworker'") or die("Ошибка " . mysqli_error($link));
            $row = mysqli_fetch_row($query1);
            $name = $row[0];

            echo "$name" ?></h3>
            <h4>Для Вас доступні такі інвестиційні плани:</h4>
        </div>

        <div class="table">
            <table border="1">
                <caption>Інвестиційні плани</caption>
                <tr>
                    <th>Інвестиційний план</th>
                    <th>Мінімальна інвестиція</th>
                    <th>Середня дохідність</th>
                    <th>Ризик фактор (1-5)</th>
                </tr>
                <?php

                $link = mysqli_connect($host, $user, $password, $database)
                    or die("Ошибка " . mysqli_error($link));

                $query = "SELECT * FROM investplan";

                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

                if ($result) {
                    $rows = mysqli_num_rows($result);

                    for ($i = 0; $i < $rows; ++$i) {
                        $row = mysqli_fetch_row($result);
                        echo "<tr>";
                        for ($j = 1; $j < 5; ++$j) echo "<td>$row[$j]</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
        <h3 style="margin-left: 10px">Вибирайте план та інвестуйте!</h3>
        <form method="POST" style="margin-left: 10px">
            <p>Назва плану:<br>
                <input type="investname" name="login" /></p>
            <p>Сума вкладень: <br>
                <input type="amount" name="password" /></p>
            <input type="submit" value="Інвестувати">
        </form>
        <h3 style="margin-left: 10px">Ваші інвестиційні плани:</h3>
        <?php
        $query = mysqli_query($link, "SELECT * FROM invest WHERE iduser = '$iduser'") or die("Ошибка " . mysqli_error($link));

        if ($query) {
            if (mysqli_num_rows($query) == 0) {
                echo "<p style='margin-left: 10px'>У вас ще немає активних інвестицій</p>";
            } else {
                $row = mysqli_fetch_row($query);
                $idinvestplan = $row[2];
                $amount = $row[3];

                $query1 = mysqli_query($link, "SELECT * FROM investplan WHERE id = '$idinvestplan'") or die("Ошибка " . mysqli_error($link));

                if ($query1) {
                    $rows = mysqli_num_rows($query1);

                    echo "<table><tr><th>Тип</th><th>Сума інвестицій</th></tr>";
                    for ($i = 0; $i < $rows; ++$i) {
                        $row = mysqli_fetch_row($query1);
                        echo "<tr>";
                        echo "<td>$row[1]</td><td>$amount</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

                    mysqli_free_result($query1);
                }
            }
        }

        ?>
    </div>

</body>

</html>