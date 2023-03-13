<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'Posetiteli');

mysqli_query($connect, 'INSERT INTO objiy (login, password, gorod) VALUES ("'.$_POST['nickname'].'", "'.$_POST['password'].'", "'.$_POST['gorod'].'")');

header('Location: index.php');
 ?>