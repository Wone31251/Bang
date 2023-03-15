<?php
session_start();
include("db_connect.php");
$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);
$md5_password = md5($password);
$query = "SELECT * FROM `users` WHERE `login`='{$login}'";
$result = mysqli_query($db, $query);
if ($result -> num_rows == 0) {
    $_SESSION['user'] = ['nick' => $login];
	$query = "INSERT INTO `users` (`login`, `password`, `name`) VALUES ('{$login}', '{$md5_password}', '{$login}')";
	//echo  $query;
	
	if( mysqli_query($db, $query)){
	    header("Location: user.php");
	} else { 
		echo "Error " . mysqli_error($db);
	}
} else {
    echo("Ошибка: Данный логин занят другим пользователем.");
}


$prev = $_GET['index.php'];
echo "<button onclick=\"window.location.href='index.php';\">Back</button>";
?>