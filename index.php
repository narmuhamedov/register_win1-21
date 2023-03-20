<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
<h1>Форма регистрации</h1>
<form action="check.php" method="post">
    <input type="text" name="login" placeholder="Придумайте логин"><br>
    <input type="text" name="name" placeholder="Как вас зовут?"><br>
    <input type="password" name="pass" placeholder="Придумайте пароль"><br>
    <button type="submit">Зарегистрироваться</button>
</form>
<h2>У вас уже есть аккаунт? <a href="login.php">Перейти</a></h2>
</body>
</html>