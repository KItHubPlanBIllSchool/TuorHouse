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
        

      <div class="mx-auto my-auto">
          <p class="text-2xl text-[#CBCABB]">Вход</p>
      </div>
  </div>
  <div class="mx-auto mt-10">
      <img src="img/biglogo.svg" alt="" class="mx-auto">
  </div>
  <div class="bg-[#2F4923] w-2/6 mx-auto mt-14 h-64 flex rounded-lg border-4 border-[#211714] flex">
      <div class="w-1/6 text-center my-auto mx-72"> 
          <form method="POST" action="process.php" class="mx-auto">
            <input name="nickname" placeholder="логин" class=" text-center border rounded-lg border-4 border-[#211714] bg-[#1F450E] w-64">
            <input name="password" placeholder="Пароль" class="mt-5 text-center border rounded-lg border-4 border-[#211714] bg-[#1F450E] w-64">
            <button  class="w-36 h-14 mt-5 border rounded-lg border-4 border-[#211714] bg-[#1F450E] ml-14" name="Login"><p class="text-white">Войти</p></button>

          
        </form>

        <?php 
            echo $_GET['nouser'];
         ?>
      </div>
  </div>
  <div class="bg-[#2F4923] w-2/5 mx-auto mt-5 h-42 flex rounded-lg border-4 border-[#211714]" id="main2">
      <div class=" text-center mx-auto">
            <p class="text-white text-center">Еще нет аккаунта?</p>
            <button onclick="hideShow()" class="text-[#64A847]">Зарегистрируйтесь</button>
      </div>
  </div>
    <div id="main" class="hidden flex">
      <a href="registration.php"><img src="img/screamer.svg" alt="" class="w-1/2 mx-auto  "></a>
      
    </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  <script src="script.js"></script>
</body>
</html>