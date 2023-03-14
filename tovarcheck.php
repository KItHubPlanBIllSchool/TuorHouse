<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'Posetiteli');
	$insert = mysqli_query($connect, 'INSERT INTO store (Name,cost,image) VALUES ("'.$_GET['Tname'].'", "'.$_GET['money'].'", "'.$_GET['image'].'", "'.$_GET['klinika'].'")');
	header('Location: Project1.php');

 ?>