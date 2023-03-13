<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'Posetiteli');
		$select = "SELECT * FROM logins WHERE login = '".$_POST['nickname']."'";
		$query = mysqli_query($connect, $select);

		$num = mysqli_num_rows($query);

		$res = $query->fetch_assoc();

		
		if ($num == 0) {
			
			echo "Данной учетной записи нет";
		}else
		{
			header('Location: index.php');
		}

		

 ?>