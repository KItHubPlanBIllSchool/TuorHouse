<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'Posetiteli');
	mysqli_query($connect, 'INSERT INTO store (name,cost) VALUES ("'.$_POST['Tname'].'", "'.$_POST['money'].'")');
	header('Location: wellcome.php');

 ?>	