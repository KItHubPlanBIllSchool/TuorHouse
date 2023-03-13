<!-- регистрация -->
<!DOCTYPE html>
<html>
<head>
	<title>TItle</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body class="bg-light">
<div class="col-5 mx-auto mt-5">
	<div class="row">
		<!-- картинка -->
		
		<!-- форма -->
		<div class="col-6 pt-3">
			<div class="text-center px-5 pt-1 bg-white border mb-2 pt-4">
				
				<h6>Зарегистрируйтесь, чтобы выполнять задания.</h6>
				<form method="POST" action="input.php">

					<input type="" name="nickname" class="form-control my-2" placeholder="Имя пользователя">
					<input type="password" name="password" class="form-control my-2" placeholder="Пароль">
					<input type="gorod" name="gorod" class="form-control my-2" placeholder="Город">
					<div class="text-center">
						<button class="btn btn-primary btn-sm px-5 my-1">Регистрация</button>
						<p class="text-secondary">Регистрируясь, вы принимаете наши Условия, Политику использования данных и Политику в отношении файлов cookie.</p>
					</div>
				</form>
			</div>
			<div class="bg-white border text-center pt-3 pb-1">
				<p>Есть аккаунт? <a href="login.php">Вход</a></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>