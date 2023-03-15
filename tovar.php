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
			
			<div class="text-center px-5 pt-1 bg-white border mb-2 pt-4">
				
				<h6>Добавить товар</h6>
				<form method="POST" action="tovarcheck.php">

					<input type="" name="Tname" class="form-control my-2" placeholder="Название товара">
					<input type="money" name="money" class="form-control my-2" placeholder="Цена">
					<input type="file" name="image" class="form-control my-2" placeholder="Вставить картинку" value="Upload">
					<div class="text-center">
						<button class="btn btn-primary btn-sm px-5 my-1">Поставить товар</button>
					
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>