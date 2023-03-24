<?php
session_start();
if (isset($_SESSION['user'])) {
    echo("Вы вошли как " . $_SESSION['user']['nick']);
    
} else {
    echo("Вы не авторизированы.");
}


if(isset($_SESSION['username'])) {
    header("Location: /index.php"); // redirects them to homepage
    exit; // for good measure
}

$prev = $_GET['index.php'];
echo "<a href='index.php'><button id='back'>Back</button></a>"

?>