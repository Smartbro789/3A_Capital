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
    
    if (isset($_POST['login']) && isset($_POST['password'])) {

        $link = mysqli_connect($host, $user, $password, $database)
            or die("Ошибка " . mysqli_error($link));

        $login = htmlentities(mysqli_real_escape_string($link, $_POST['login']));
        $password = htmlentities(mysqli_real_escape_string($link, $_POST['password']));

        $query = mysqli_query($link, "SELECT * FROM user WHERE login = '$login'") or die("Ошибка " . mysqli_error($link));

        $rows = mysqli_num_rows($query);

        if ($rows == 0) {
            echo "<script>alert('Аккаунту с таким логіном не існує, пройдіть реєстрацію!')</script>";
        } else {
            $row = mysqli_fetch_row($query);
            if ($row[2] == $password) {
                echo "<script>alert('Успіх!')</script>";
                echo "<script>location.href = 'profile.php?id=$row[0]'</script>";
            }
            else{
                echo "<script>alert('Пароль неправильний!')</script>";
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
        <h2 style="margin-left: 10px">Увійти в систему</h2>
        <form method="POST" style="margin-left: 10px">
            <p>Логін:<br>
                <input type="text" name="login" value="<?php echo (isset($_POST["login"])) ? $_POST["login"] : null; // Заполняем поле по умолчанию ?>" /></p>
            <p>Пароль: <br>
                <input type="text" name="password"value="<?php echo (isset($_POST["password"])) ? $_POST["password"] : null;?>" /></p>
            <input type="submit" value="Увійти">
        </form>
    </div>

</body>

</html>