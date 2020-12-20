<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$db_name = 'capital';
$conn = mysqli_connect("localhost", "root", "root", "capital")
    or die('Не удалось соединиться: ' . mysqli_error());
echo 'Соединение успешно установлено';
"INSERT INTO `user` (`id`,`login`,`password`, `email`, `phone`) VALUES('',$quoted_login, $quoted_password, $quoted_email, $quoted_phone)";
function quote($var){
    return mysql_real_escape_string($var);
}
"SELECT * FROM `user` WHERE `login`=$quoted_login AND `password`=$quoted_password AND `email` = $quoted_email AND `phone` = $quoted_phone" ;
$_SESSION['id'] = $userinfo['id'];
if(isset($_SESSION['id'])){
    print "пользователь авторизован";
}
"SELECT * FROM `user` WHERE `id`=$quoted_id";
unset($_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lab8</title>
</head>
<body>

<form method="post" action="">
    Логин: <input type="text" name="login"
    value="<?php echo (isset($_POST["login"])) ? $_POST["login"] : null; // Заполняем поле по умолчанию ?>" />
    <br/>
    Пароль: <input type="password" name="password" value="" /><br/>
    <input type="submit" value="Войти" />
</form>
</body>
</html>