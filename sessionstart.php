<?php
session_start();
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
    "INSERT INTO `user` (`id`,`login`,`password`, `email`, `phone`) VALUES('',$quoted_login, $quoted_password, $quoted_email, $quoted_phone)";
    function quote($var){
        return mysql_real_escape_string($var);
    }
    "SELECT * FROM `user` WHERE `login`=$quoted_login AND `password`=$quoted_password" ;
    $_SESSION['id'];
    $_SESSION['login'];
    $_SESSION['password'];
    if(isset($_SESSION['id'])){
        print "пользователь авторизован";
    }
    "SELECT * FROM `user` WHERE `id`=$quoted_id";
    unset($_SESSION['userid']);
    ?>
</body>

</html>