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
  <div class="bg-[#2F4923] flex h-16 w-screen flex">
    <div class="w-2/5">
        <img src="img/logo.svg" alt="" class="my-auto mx-5">
    </div>
      <div class="w-1/2 my-auto">
          <p class="text-2xl text-[#CBCABB] ml-32">Регистрация</p>
      </div>
  </div>
  <div class="w-2/6 mx-auto mt-14">
      <div class="w-1/6 text-center my-auto mx-64">
          <form method="POST" action="input.php" class="mx-auto">
            <input name="nickname" placeholder="Логин" class=" text-center w-64 bg-[#CBCABB] border border-[#211714]">
            <input name="password" placeholder="Пароль" class=" text-center w-64 bg-[#CBCABB] border border-[#211714]">
            
            <input name="phone" placeholder="+79998887766" class=" mt-5 text-center w-64 bg-[#CBCABB] border border-[#211714]">
            <input name="adres" placeholder="Сергеляхское шоссе, 24 км" class=" text-center w-64 bg-[#CBCABB] border border-[#211714]">
            <input name="gmail" placeholder="imbir'@cereal.com" class=" text-center w-64 bg-[#CBCABB] border border-[#211714]">
            <button  class="w-64 h-10 mt-5 border rounded-lg border-[#211714] " name="Login"><p class="text-white">Зарегистрироваться</p></button>

          
        </form>

        <?php 
            echo $_GET['nouser'];
         ?>
      </div>
  </div>
    

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
</body>
</html>