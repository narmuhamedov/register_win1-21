<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h2>Вход в аккаунт</h2>
<form action="auth.php" method="post">
    <input type="text" name="login" placeholder="Введите ваш логин"><br>
    <input type="password" name="pass" placeholder="Введите ваш пароль"><br>
    <input type="submit" value="Войти">
</form>
<h2>У вас нет аккаунта? <a href="index.php">Создать аккаунт</a></h2>
</body>
</html>