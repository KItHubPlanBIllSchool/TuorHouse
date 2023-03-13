<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'Posetiteli');
if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

mysqli_query($connect, 'INSERT INTO logins (login, password, city) VALUES ("'.$_POST['nickname'].'", "'.$_POST['password'].'", "'.$_POST['gorod'].'")');

header('Location: index.php');
 ?>