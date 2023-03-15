<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Формы авторизации и регистрации</title>

    <link rel="stylesheet" href="css1/style3.css" type="text/css">

</head>
<body>
<!-- Форма авторизации -->
<center>
<div class="form1">
<form  action="authorization.php" method="post">
    <h1>Авторизация<br>
    Логин: <input name="login" type="text">
    Пароль: <input name="password" type="password"></h1>
    <button><input type="submit"></button>
</form>
<!-- Форма регистрации -->
<form action="registration.php" method="post">

	<h1>Регистрация<br>
    Логин: <input name="login" type="text">
    Пароль: <input name="password" type="password"></h1>
    <button><input type="submit"></button>

</form>
<br>
<button onclick="window.location.href='../index.php';">Back</button>
</div>
</center>

</body>
</html>
