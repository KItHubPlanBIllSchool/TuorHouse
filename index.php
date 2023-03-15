<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
  <style type="text/css">
      

   @font-face {
    font-family: alegreya; /* Гарнитура шрифта */
    src: url(font/Montserrat-Medium.ttf); /* Путь к файлу со шрифтом */
   }
   a{
    font-family:alegreya
   }
   button{
    font-family:alegreya;
   }
   html, body {
    max-width: 100%;
    overflow-x: hidden;
}
    </style>
</head>
<body>
<div class="h-[900pxz]" style="background-image:url(img/bg.svg); background-repeat: no-repeat;" class="">
  <div class="bg-[#2F4923]/50 flex">
    <div class="flex w-3/4 h-auto bg-opacity-25">
      <img src="img/logo.svg" alt="" class="my-auto mx-5">
      <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown1" class="text-white rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button"><a class="text-2xl">Для бизнеса</a> <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
      <!-- Dropdown menu -->
      <div id="dropdown1" class=" hidden bg-[#2F4923]/50 divide-y divide-gray-100 rounded-lg shadow w-44">
          <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#" class="block px-4 py-2 bg-[#2F4923] hover:bg-[#2F4923]/50 text-white">Для партнеров</a>
            </li>
        
          </ul>
      </div>
      <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown2" class="text-white font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button"><a class="text-2xl">Помощь</a> <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
      <!-- Dropdown menu -->
      <div id="dropdown2" class=" hidden bg-[#2F4923]/25 divide-y divide-gray-100 rounded-lg shadow w-44 text-white">
          <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#" class="block px-4 py-2 bg-[#2F4923] hover:bg-[#2F4923]/50">FAQ</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 bg-[#2F4923] mt-5 hover:bg-[#2F4923]/50">Тех поддержка</a>
            </li>

        
          </ul>
      </div>
        
            <a href="wellcome.php" class="inline-block p-4 text-white border-b-2 rounded-t-lg active text-2xl" aria-current="page">Каталог</a>
        

    </div>
    <div class="flex w-1/4 h-auto bg-opacity-25">
      <div class="flex">
         <img src="img/login.svg" alt="" class="w-5">
        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown4" class="text-white rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button"><a class="text-2xl">Вход или регистрация</a> <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path> </svg></button>

      <!-- Dropdown menu -->
        <div id="dropdown4" class=" hidden bg-[#2F4923]/50 divide-y divide-gray-100 rounded-lg shadow w-44">
            <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="login.php" class="block px-4 py-2 bg-[#2F4923] hover:bg-[#2F4923]/50 text-white">Вход</a>
              </li>
              <li>
                <a href="registration.php" class="block px-4 py-2 bg-[#2F4923] hover:bg-[#2F4923]/50 text-white">Регистрация</a>
              </li>
          
            </ul>
        </div>
       
      </div>
      <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown2" class="text-white font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button"><a class="text-2xl">Помощь</a> <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
      <!-- Dropdown menu -->
      <div id="dropdown2" class=" hidden bg-[#2F4923]/25 divide-y divide-gray-100 rounded-lg shadow w-44 text-white">
          <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
            <li>
              <a href="#" class="block px-4 py-2 bg-[#2F4923] hover:bg-[#2F4923]/50">FAQ</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 bg-[#2F4923] mt-5 hover:bg-[#2F4923]/50">Тех поддержка</a>
            </li>

        
          </ul>
      </div>
      
        

    </div>
  </div>
</div>
<div class="h-screen" style="background-image:url(img/log.svg); background-repeat: no-repeat;" class="bg-auto">
  
</div>
 

  



  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>
</html>