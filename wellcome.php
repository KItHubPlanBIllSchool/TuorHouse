
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
  <style>
      @font-face {
        font-family: comfortaa; /* Гарнитура шрифта */
        src: url(font/Comfortaa.ttf); /* Путь к файлу со шрифтом */
        }
        a{
            font-family: comfortaa;
        }

  </style>
</head>
<body class="bg-[#CBCABB]">
    <?php 
        $connect = mysqli_connect('127.0.0.1', 'root', '', 'Posetiteli');
        $query = mysqli_query($connect, 'SELECT * FROM store');
    ?>
  <div class="bg-[#2F4923] flex h-16 w-screen flex">
        
            <img src="img/logo.svg" alt="" class="my-auto mx-5">

    <div class="mx-auto my-auto">
        <form>
            <div class="flex">
                
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm block p-2.5" name="sort_alphabet">
                      <option selected>Sort</option>
                      <option value="AZ">A-Z</option> <?php 
                      if (isset($_GET["sort_aplhabet"]) && $_GET['sort_alphabet'] == "a-z") {
                          echo "selected";
                      }
                      ?>
                      
                    
            
                          
                      <option value="ZA">Z-A</option> <<?php 
                      if (isset($_GET["sort_aplhabet"]) && $_GET['sort_alphabet'] == "z-a") {
                          echo "selected";
                      }
                      ?>
                    </select>
                <div class="relative w-96">
                    <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates...">
                    <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
                <div class="mx-96">
                <img src="img/izb.svg" alt="">
                </div>
            </div>
        </form>
    </div>
</div>
<div>
    <a href="tovar.php">Добавить товар</a>
</div>
<div class="flex"><!---блоки--->

        <div class="w-72 h-10 bg-[#2F4923] mx-auto rounded-t-lg border-4 border-[#211714]">
        <?php $result = $query->fetch_assoc(); ?>
    <a class="text-white"><?php echo $result['name'];?> </a> <!---блок--->
            <div class="w-full h-80 bg-[#FFFFFF] mt-1 border-4 mx-auto border-[#211714] m">
                <img src="img/primer.jfif">
            </div>
            <div class="w- h-10 bg-[#2F4923] mx-auto rounded-b-lg flex border-2 border-[#211714]">
                <div class="w-1/2 h-full border-2 border-[#211714] mx-auto">
                    <a class="text-white"><?php echo $result['cost'];?> </a>
                </div>
                <div class="w-1/2 h-full border-2 border-[#211714] mx-auto"></div>
            </div>
        </div>
        <div class="w-72 h-10 bg-[#2F4923] mx-auto rounded-t-lg border-4 border-[#211714]">
        <?php $result = $query->fetch_assoc(); ?>
    <a class="text-white"><?php echo $result['name'];?> </a> <!---блок--->
            <div class="w-full h-80 bg-[#FFFFFF] mt-1 border-4 mx-auto border-[#211714] m">
                <img src="img/primer.jfif">
            </div>
            <div class="w- h-10 bg-[#2F4923] mx-auto rounded-b-lg flex border-2 border-[#211714]">
                <div class="w-1/2 h-full border-2 border-[#211714] mx-auto">
                    <a class="text-white"><?php echo $result['cost'];?> </a>
                </div>
                <div class="w-1/2 h-full border-2 border-[#211714] mx-auto"></div>
            </div>
        </div>
        <div class="w-72 h-10 bg-[#2F4923] mx-auto rounded-t-lg border-4 border-[#211714]">
        <?php $result = $query->fetch_assoc(); ?>
    <a class="text-white"><?php echo $result['name'];?> </a> <!---блок--->
            <div class="w-full h-80 bg-[#FFFFFF] mt-1 border-4 mx-auto border-[#211714] m">
                <img src="img/primer.jfif">
            </div>
            <div class="w- h-10 bg-[#2F4923] mx-auto rounded-b-lg flex border-2 border-[#211714]">
                <div class="w-1/2 h-full border-2 border-[#211714] mx-auto">
                    <a class="text-white"><?php echo $result['cost'];?> </a>
                </div>
                <div class="w-1/2 h-full border-2 border-[#211714] mx-auto"></div>
            </div>
        </div>


</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

</body>
</html>
