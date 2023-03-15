	<!doctype html>
	<html>
	<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <script src="https://cdn.tailwindcss.com"></script>
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
	<style>
	      @font-face {
	        font-family: comfortaa; /* Гарнитура шрифта */
	        src: url(font/Comfortaa.ttf); /* Путь к файлу со шрифтом */
	        }
	        p{
	            font-family: comfortaa;
	        }
	        a{
	            font-family: comfortaa;
	        }

	  </style>
	</head>
	<body class="bg-[#CBCABB]">
		<?php 
        $connect = mysqli_connect('127.0.0.1', 'root', '', 'Posetiteli');
        $query = mysqli_query($connect, 'SELECT * FROM logins');
    ?>
  <div class="bg-[#2F4923] flex h-16 w-screen flex">
    <div class="w-2/5">
        <a href="wellcome.php"><img src="img/logo.svg" alt="" class="my-auto mx-5"></a>
    </div>
      <div class="w-1/2 my-auto mx-auto flex">
          <p class="text-2xl text-[#CBCABB] ml-5">Личный кабинет</p>
      </div>
      <div>
      	<img src="img/guy.svg" class="mt-3">
      </div>

  </div>
  <div class="w-2/6 mx-auto mt-14">
          <img src="img/logoguy.svg" class="mx-auto">
  </div>
  <div class="w-2/6 mx-auto mt-14 flex">
  		<?php $result = $query->fetch_assoc(); ?>
  		<a class="text-white text-4xl mx-auto"><?php echo $result['login'];?> </a>
          
  </div>
  <div class="w-2/6 mx-auto mt-5 flex">
  		<img src="img/yabloki.svg" class="mx-auto">
          
  </div>
  <div class="w-2/6 mx-auto mt-10 flex">
  		<img src="img/podpiski.svg" class="mx-auto">
          
  </div>
  <div class="w-2/6 mx-auto mt-10 ">
  		<p class="text-white text-4xl ">Номер:<?php echo $result['phonenumb'];?></p>
  		<p class="text-white text-4xl ">Адрес:<?php echo $result['address'];?> </p>
  		<p class="text-white text-4xl">Эмайл:<?php echo $result['mail'];?> </p>
  		<a class="text-green text-4xl" href="tovar.php">Добавить лот</a>
       <a href="logout.php">Log out</a>
  </div>
    

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>