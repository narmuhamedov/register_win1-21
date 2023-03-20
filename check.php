<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if(mb_strlen($login)<5 || mb_strlen($login)>20){
    echo "Логин слишком длинный или короткий";
    exit();
}

else if (mb_strlen($name)<2 or  mb_strlen($name)>20){
    echo "имя слишком длинное или короткое";
    exit();
}

else if (mb_strlen($pass)<2 or  mb_strlen($pass)>10){
    echo "пароль слишком длинный или короткий";
    exit();
}

$pass = md5($pass.'qwegkldsngkjdfng');

$server = "127.0.0.1:3306";
$login_db = 'root';
$password = '';
$db = 'registr_db';
$link = mysqli_connect($server, $login_db, $password, $db);
$res =mysqli_query($link,"INSERT INTO users (login, password, name)VALUES ('$login', '$pass', '$name')");
header("Location: uraa.php");
exit();
?>