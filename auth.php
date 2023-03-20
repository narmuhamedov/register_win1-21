<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$server = "127.0.0.1:3306";
$login_db = 'root';
$password = '';
$db = 'registr_db';
$link = mysqli_connect($server, $login_db, $password, $db);
$res = mysqli_query($link, "SELECT * FROM users WHERE login='$login' AND password='$pass'");
$user = mysqli_fetch_assoc($res);
if ($user==0){
    echo 'Юзер не найден';
    exit();
}
header('Location: uraa.php');
exit();





#setcookie('user', $user['name'], time() + 3600*24,'/');

?>
