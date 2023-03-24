<?php
session_start();
include("db_connect.php");
$login = htmlspecialchars( $_POST['login']);
$password = htmlspecialchars( $_POST['password']);
$md5_password = md5($password);
$query = "SELECT * FROM `users` WHERE `login`='{$login}' AND `password`='{$md5_password}'";
$result = mysqli_query($db, $query);


if ($result -> num_rows == 1) {
    $_SESSION['user'] = ['nick' => $login];
	echo dirname(__FILE__);
    header("Location: user.php");
} else {
    echo("Ошибка: Данный логин или пароль неправильны.");
    
}
$prev = $_GET['index.php'];
echo "<a href='index.php'><button id='back'>Back</button></a>";
?>

