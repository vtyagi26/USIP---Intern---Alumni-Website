<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.7.3/tailwind.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <!-- required to be in head only -->
  <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js">	</script>
</head>

<body>

<nav class="bg-white border-gray-200 px-2 lg:px-4 py-2.5 bg-gray-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="/" class="flex items-center">

        <span class="flex gap-2 self-center text-2xl lg:text-3xl font-semibold whitespace-nowrap "><span><img class="h-10 w-10" src="./public/img/dtu-logo.png" alt=""></span>Alumni Affairs</span>
      </a>
      <div class="flex md:order-2">
       <a href="./whydonate.html"><button type="button"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 ">Donate</button></a>
        <button data-collapse-toggle="navbar-cta" type="button"
          class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
          aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div
        class="items-center absolute z-20 top-10 md:top-0  md:relative justify-between hidden w-11/12 md:flex md:w-auto md:order-1"
        id="navbar-cta">
        <ul
          class="flex flex-col lg:p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 sm:text-base md:font-medium md:border-0 md:bg-white  lg:text-xl leading-8 font-semibold text-gray-500">

          <li>
            <a href="/dtualumni" class="mr-4 md:hidden hover:underline md:mr-3 ">Home</a>
          </li>
          <li>
            <a href="./about-us.html" class="mr-4 hover:underline md:mr-3">About</a>
          </li>
          <li>
            <a href="./notable-alumni.php" class="mr-4 hover:underline md:mr-3">Notable Alumni</a>
          </li>
          <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-auto mr-4 rounded md:mr-3 md:border-0 md:p-0 md:w-auto active:border-0 hover:underline">Donations <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:uselessclassbg-gray-700 dark:uselessclassdivide-gray-600">
                  <ul class="py-2 text-sm dark:uselessclasstext-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href="./donorsWall.php" class="block px-4 py-2 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasshover:text-white">Donor Wall</a>
                    </li>
                    <li>
                      <a href="./whydonate.html" class="block px-4 py-2 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasshover:text-white">Why Donate?</a>
                    </li>
                    <li>
                      <a href="./donate.html" class="block px-4 py-2 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasshover:text-white">Donate Now</a>
                    </li>
                  </ul>
                  <!-- <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasstext-gray-400 dark:uselessclasshover:text-white">Sign out</a>
                  </div> -->
              </div>
          </li>
        <li>
          <a href="./memories.php" class="mr-4 hover:underline md:mr-3 ">Memories</a>
        </li>
        <li>
          <a href="/dtualumni/index.php#Events" class="mr-4 hover:underline md:mr-3">Events</a>
        </li>
          <li>
            <a href="./initiatives.html" class="mr-4 hover:underline md:mr-3">Alumni Initiatives</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- Memo Nav -->

  <section class="mx-auto">
    <img class="w-[100%] z-0" src="public/img/dtu campuses.png" alt="">

  <nav class="fixed top-10 sm:left-1/4 lg:left-1/3 rounded-lg max-w-[16%] sm:max-w-md  mx-2 container flex items-center py-1 mt-4 sm:mt-12 bg-blue-100 ">
    <!-- <h1 class="text-3xl font-bold  underline text-bookmark-purple">
        Hello world!
    </h1> -->
    <div class="py-2  px-2"><img src="/dist/imgs/logo-bookmark.svg" alt=""></div>
    <ul class=" sm:flex  flex-1 justify-center  items-center gap-2 text-bookmark-blue uppercase text-sm ">
    <li>
            <a href="#oldc" class="px-1 block mt-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Upload</a>
        </li>
        
        <li>
            <a href="#oldc" class="px-1 block mt-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white ">Old Campus</a>
        </li>
        <li>
            <a href="#meetups" class="px-1 block mt-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white ">MeetUps</a>
        </li>
        <li>
            <a href="#events" class="px-1 block mt-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white ">Events</a>
        </li>
        
        
       
        
        <li>
          <button  data-dropdown-toggle="dropdownNavbar1"
          class="flex  items-center justify-between uppercase mr-4 rounded md:mr-3  md:p-0 md:w-auto hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">            
          Batch Year 
            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg>
          
          </button>
          <!-- Dropdown menu -->
          <div id="dropdownNavbar1"
          class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-40 dark:bg-gray-700 dark:divide-gray-600">
          <ul class="py-2 text-sm dark:text-gray-400" aria-labelledby="dropdownLargeButton">
            <li>
              <a href="#batch1950"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                1950-1959</a>
            </li>
            <li>
              <a href="#batch1960"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                1960-1969</a>
            </li>
            <li>
              <a href="#batch1970"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                1970-1979</a>
            </li>
            <li>
              <a href="#batch1980"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                1980-1989</a>
            </li>
            <li>
              <a href="#batch1990"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                1990-1999</a>
            </li>
            <li>
              <a href="#batch2000"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                2000-2009</a>
            </li>
            <li>
              <a href="#batch2010"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                2010-2019</a>
            </li>
            <li>
              <a href="#batch2020"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                2020-2029</a>
            </li>
            
          </ul>
          <!-- <div class="py-1">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Sign out</a>
            </div> -->
        </div>
        </li>

        

        
        
    </ul>
    <div class="flex sm:hidden flex-1 justify-end">
        <i class=" text-2xl fas fa-bars"></i>
    </div>
    

</section>


  <!-- Old Campus -->
  
  <section id="oldc" class=" mt-1">

   
    
      <!-- Heading -->
      <div class=" mx-auto px-2 py-5 bg-blue-100 rounded-lg">
        <h1 class="text-3xl uppercase text-center text-bookmark-blue">Old Campus</h1>
        <!-- <p class="text-center text-bookmark-grey mt-4">
            We've got more browsers in the pipeline. Please do let us know if you've get a favourite you'd like to prioritize.
        </p> -->
      </div>
    
  
      <div class="w-full max-w-7xl p-5 pb-10 mx-auto mb-10 gap-5 lg:columns-3 md:columns-2 sm:columns-1 space-y-5" >
        <?php

        if(file_exists('admin/data/oldcampus.json')){
          $current_data = file_get_contents('admin/data/oldcampus.json');
          $array_data = json_decode($current_data, true);
          //echo "1";
          for($i = 0; $i<count($array_data);$i++){
          // echo $i;
            $get = "".$array_data[$i]['image'];
            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
            echo '<img class="w-[100%]" src='.$get.' alt="">';
          }
        }
        else{
            echo "not available";
        }
        ?>

      </div>

    
  </section>

  <!-- MeetUps -->
  
  <section id="meetups" class=" mt-1">

   
    
      <!-- Heading -->
      <div class=" mx-auto px-2 py-5 bg-blue-100 rounded-lg">
        <h1 class="text-3xl uppercase text-center text-bookmark-blue">MeetUps</h1>
        <!-- <p class="text-center text-bookmark-grey mt-4">
            We've got more browsers in the pipeline. Please do let us know if you've get a favourite you'd like to prioritize.
        </p> -->
      </div>
    
  
      <div class="w-full max-w-7xl p-5 pb-10 mx-auto mb-10 gap-5 lg:columns-3 md:columns-2 sm:columns-1 space-y-5" >
        <?php

        if(file_exists('admin/data/meetups.json')){
          $current_data = file_get_contents('admin/data/meetups.json');
          $array_data = json_decode($current_data, true);
          //echo "1";
          for($i = 0; $i<count($array_data);$i++){
          // echo $i;
            $get = "".$array_data[$i]['image'];
            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
            echo '<img class="w-[100%]" src='.$get.' alt="">';
          }
        }
        else{
            echo "not available";
        }
        ?>

      </div>

    
  </section>


  <!-- Events -->
  
  <section id="events" class=" mt-1">

   
    
      <!-- Heading -->
      <div class=" mx-auto px-2 py-5 bg-blue-100 rounded-lg">
        <h1 class="text-3xl uppercase text-center text-bookmark-blue">Events</h1>
        <!-- <p class="text-center text-bookmark-grey mt-4">
            We've got more browsers in the pipeline. Please do let us know if you've get a favourite you'd like to prioritize.
        </p> -->
      </div>
    
  
      <div class="w-full max-w-7xl p-5 pb-10 mx-auto mb-10 gap-5 lg:columns-3 md:columns-2 sm:columns-1 space-y-5" >
        <?php

        if(file_exists('admin/data/events.json')){
          $current_data = file_get_contents('admin/data/events.json');
          $array_data = json_decode($current_data, true);
          //echo "1";
          for($i = 0; $i<count($array_data);$i++){
          // echo $i;
            $get = "".$array_data[$i]['image'];
            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
            echo '<img class="w-[100%]" src='.$get.' alt="">';
          }
        }
        else{
            echo "not available";
        }
        ?>

      </div>

    
  </section>


  <!-- Batch 1950 -->
  
  <section id="batch1950" class=" mt-1">

   
    
      <!-- Heading -->
      <div class=" mx-auto px-2 py-5 bg-blue-100 rounded-lg">
        <h1 class="text-3xl uppercase text-center text-bookmark-blue">Batch 1950-1959</h1>
        <!-- <p class="text-center text-bookmark-grey mt-4">
            We've got more browsers in the pipeline. Please do let us know if you've get a favourite you'd like to prioritize.
        </p> -->
      </div>
    
  
      <div class="w-full max-w-7xl p-5 pb-10 mx-auto mb-10 gap-5 lg:columns-3 md:columns-2 sm:columns-1 space-y-5" >
        <?php

        if(file_exists('admin/data/batch1950.json')){
          $current_data = file_get_contents('admin/data/batch1950.json');
          $array_data = json_decode($current_data, true);
          //echo "1";
          for($i = 0; $i<count($array_data);$i++){
          // echo $i;
            $get = "".$array_data[$i]['image'];
            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
            echo '<img class="w-[100%]" src='.$get.' alt="">';
          }
        }
        else{
            echo "not available";
        }
        ?>

      </div>

    
  </section>



  <!-- Batch 1960 -->
  
  <section id="batch1960" class=" mt-1">

   
    
      <!-- Heading -->
      <div class=" mx-auto px-2 py-5 bg-blue-100 rounded-lg">
        <h1 class="text-3xl uppercase text-center text-bookmark-blue">Batch 1960-1969</h1>
        <!-- <p class="text-center text-bookmark-grey mt-4">
            We've got more browsers in the pipeline. Please do let us know if you've get a favourite you'd like to prioritize.
        </p> -->
      </div>
    
  
      <div class="w-full max-w-7xl p-5 pb-10 mx-auto mb-10 gap-5 lg:columns-3 md:columns-2 sm:columns-1 space-y-5" >
        <?php

        if(file_exists('admin/data/batch1960.json')){
          $current_data = file_get_contents('admin/data/batch1960.json');
          $array_data = json_decode($current_data, true);
          //echo "1";
          for($i = 0; $i<count($array_data);$i++){
          // echo $i;
            $get = "".$array_data[$i]['image'];
            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
            echo '<img class="w-[100%]" src='.$get.' alt="">';
          }
        }
        else{
            echo "not available";
        }
        ?>

      </div>

    
  </section>


  <!-- batch1970 -->
  
  <section id="batch1970" class=" mt-1">

   
    
      <!-- Heading -->
      <div class=" mx-auto px-2 py-5 bg-blue-100 rounded-lg">
        <h1 class="text-3xl uppercase text-center text-bookmark-blue">Batch 1970-1979</h1>
        <!-- <p class="text-center text-bookmark-grey mt-4">
            We've got more browsers in the pipeline. Please do let us know if you've get a favourite you'd like to prioritize.
        </p> -->
      </div>
    
  
      <div class="w-full max-w-7xl p-5 pb-10 mx-auto mb-10 gap-5 lg:columns-3 md:columns-2 sm:columns-1 space-y-5" >
        <?php

        if(file_exists('admin/data/batch1970.json')){
          $current_data = file_get_contents('admin/data/batch1970.json');
          $array_data = json_decode($current_data, true);
          //echo "1";
          for($i = 0; $i<count($array_data);$i++){
          // echo $i;
            $get = "".$array_data[$i]['image'];
            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
            echo '<img class="w-[100%]" src='.$get.' alt="">';
          }
        }
        else{
            echo "not available";
        }
        ?>

      </div>

    
  </section>


  <!-- batch1980 -->
  
  <section id="batch1980" class=" mt-1">

   
    
      <!-- Heading -->
      <div class=" mx-auto px-2 py-5 bg-blue-100 rounded-lg">
        <h1 class="text-3xl uppercase text-center text-bookmark-blue">Batch 1980-1989</h1>
        <!-- <p class="text-center text-bookmark-grey mt-4">
            We've got more browsers in the pipeline. Please do let us know if you've get a favourite you'd like to prioritize.
        </p> -->
      </div>
    
  
      <div class="w-full max-w-7xl p-5 pb-10 mx-auto mb-10 gap-5 lg:columns-3 md:columns-2 sm:columns-1 space-y-5" >
        <?php

        if(file_exists('admin/data/batch1980.json')){
          $current_data = file_get_contents('admin/data/batch1980.json');
          $array_data = json_decode($current_data, true);
          //echo "1";
          for($i = 0; $i<count($array_data);$i++){
          // echo $i;
            $get = "".$array_data[$i]['image'];
            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
            echo '<img class="w-[100%]" src='.$get.' alt="">';
          }
        }
        else{
            echo "not available";
        }
        ?>

      </div>

    
  </section>



  <!-- batch1990 -->
  
  <section id="batch1990" class=" mt-1">

   
    
      <!-- Heading -->
      <div class=" mx-auto px-2 py-5 bg-blue-100 rounded-lg">
        <h1 class="text-3xl uppercase text-center text-bookmark-blue">Batch 1990-1999</h1>
        <!-- <p class="text-center text-bookmark-grey mt-4">
            We've got more browsers in the pipeline. Please do let us know if you've get a favourite you'd like to prioritize.
        </p> -->
      </div>
    
  
      <div class="w-full max-w-7xl p-5 pb-10 mx-auto mb-10 gap-5 lg:columns-3 md:columns-2 sm:columns-1 space-y-5" >
        <?php

        if(file_exists('admin/data/batch1990.json')){
          $current_data = file_get_contents('admin/data/batch1990.json');
          $array_data = json_decode($current_data, true);
          //echo "1";
          for($i = 0; $i<count($array_data);$i++){
          // echo $i;
            $get = "".$array_data[$i]['image'];
            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
            echo '<img class="w-[100%]" src='.$get.' alt="">';
          }
        }
        else{
            echo "not available";
        }
        ?>

      </div>

    
  </section>


  <!-- batch2000 -->
  
  <section id="batch2000" class=" mt-1">

   
    
      <!-- Heading -->
      <div class=" mx-auto px-2 py-5 bg-blue-100 rounded-lg">
        <h1 class="text-3xl uppercase text-center text-bookmark-blue">Batch 2000-2009</h1>
        <!-- <p class="text-center text-bookmark-grey mt-4">
            We've got more browsers in the pipeline. Please do let us know if you've get a favourite you'd like to prioritize.
        </p> -->
      </div>
    
  
      <div class="w-full max-w-7xl p-5 pb-10 mx-auto mb-10 gap-5 lg:columns-3 md:columns-2 sm:columns-1 space-y-5" >
        <?php

        if(file_exists('admin/data/batch2000.json')){
          $current_data = file_get_contents('admin/data/batch2000.json');
          $array_data = json_decode($current_data, true);
          //echo "1";
          for($i = 0; $i<count($array_data);$i++){
          // echo $i;
            $get = "".$array_data[$i]['image'];
            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
            echo '<img class="w-[100%]" src='.$get.' alt="">';
          }
        }
        else{
            echo "not available";
        }
        ?>

      </div>

    
  </section>


  <!-- batch210 -->
  
  <section id="batch2010" class=" mt-1">

   
    
      <!-- Heading -->
      <div class=" mx-auto px-2 py-5 bg-blue-100 rounded-lg">
        <h1 class="text-3xl uppercase text-center text-bookmark-blue">Batch 2010-2019</h1>
        <!-- <p class="text-center text-bookmark-grey mt-4">
            We've got more browsers in the pipeline. Please do let us know if you've get a favourite you'd like to prioritize.
        </p> -->
      </div>
    
  
      <div class="w-full max-w-7xl p-5 pb-10 mx-auto mb-10 gap-5 lg:columns-3 md:columns-2 sm:columns-1 space-y-5" >
        <?php

        if(file_exists('admin/data/batch2010.json')){
          $current_data = file_get_contents('admin/data/batch2010.json');
          $array_data = json_decode($current_data, true);
          //echo "1";
          for($i = 0; $i<count($array_data);$i++){
          // echo $i;
            $get = "".$array_data[$i]['image'];
            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
            echo '<img class="w-[100%]" src='.$get.' alt="">';
          }
        }
        else{
            echo "not available";
        }
        ?>

      </div>

    
  </section>



  <!-- batch2020 -->
  
  <section id="batch2000" class=" mt-1">

   
    
      <!-- Heading -->
      <div class=" mx-auto px-2 py-5 bg-blue-100 rounded-lg">
        <h1 class="text-3xl uppercase text-center text-bookmark-blue">Batch 2020-2029</h1>
        <!-- <p class="text-center text-bookmark-grey mt-4">
            We've got more browsers in the pipeline. Please do let us know if you've get a favourite you'd like to prioritize.
        </p> -->
      </div>
    
  
      <div class="w-full max-w-7xl p-5 pb-10 mx-auto mb-10 gap-5 lg:columns-3 md:columns-2 sm:columns-1 space-y-5" >
        <?php

        if(file_exists('admin/data/batch2020.json')){
          $current_data = file_get_contents('admin/data/batch2020.json');
          $array_data = json_decode($current_data, true);
          //echo "1";
          for($i = 0; $i<count($array_data);$i++){
          // echo $i;
            $get = "".$array_data[$i]['image'];
            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
            echo '<img class="w-[100%]" src='.$get.' alt="">';
          }
        }
        else{
            echo "not available";
        }
        ?>

      </div>

    
  </section>

    
  <!-- memo -->

  <div class="container mx-auto px-5 py-2" style="background-image: url('../public/images/hero.jpg');">
  
   
    
  </div>


  <footer class="p-4 bg-gray-200  rounded-lg shadow  md:py-6 md:pb-20 border" id="contact">

<div class="flex flex-col-reverse md:flex-row sm:items-center sm:justify-between lg:mx-20">
  <div>
    <ul
      class="flex justify-center text-center md:text-left  flex-wrap md:grid md::grid-cols-1 items-center my-6 text-xl leading-8 font-semibold text-gray-500 sm:mb-0 ">
      <li>
        <a href="./donate.html" class="mr-4 hover:underline md:mr-6 ">Donate</a>
      </li>
      <li>
        <a href="./notable-alumni.php" class="mr-4 hover:underline md:mr-6">Noted Alumni</a>
      </li>
      <li>
        <a href="./about-us.html" class="mr-4 hover:underline md:mr-6">About</a>
      </li>
      <li>
        <a href="./initiatives.html" class="mr-4 hover:underline md:mr-6">Initiatives</a>
      </li>

      <li>
        <a href="/dtualumni/index.php#Events" class="hover:underline">Events</a>
      </li>
      <!-- <li>
        <a href="#Mentorship" class="mr-4 hover:underline md:mr-6 ">Mentorship</a>
      </li> -->

    </ul>

  </div>
  <div class="bg-white rounded-lg md:w-1/2 lg:w-max shadow-lg ">
    <div class="py-3 lg:py-5 px-4 w-full lg:w-[600px]">
      <h2 class="mb-2 text-4xl w-full tracking-tight font-extrabold text-center text-gray-900 ">Contact Us</h2>
        
      <form action="mailto:deanalumniaffairs@dtu.ac.in" method="post" enctype="text/plain" class="space-y-3">
        <div>
          <label class="block mb-2 text-sm font-medium text-gray-900 ">Your name</label>
          <input name="name" type="text" id="name"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
             required>
        </div>
        <div>
          <label for="email"  class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
          <input type="email" id="email" name="mail"
            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
             required>
        </div>
        <div>
          <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 ">Subject</label>
          <input type="text" id="subject" name="subject"
            class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 "
            required>
        </div>
        <div class="sm:col-span-2">
          <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your message</label>
          <textarea id="message" rows="3" type="text" name="message"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
            ></textarea>
        </div>
        <button type="submit"
          class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit  focus:ring-4 focus:outline-none focus:ring-primary-300 ">Send
          message</button>
      </form>
    </div>
  </div>
</div>
<div>
  <p class="text-sm text-center mt-8 mb-2 text-gray-500 ">© 2023, Delhi Technological University, Shahbad Daulatpur, Main Bawana Road, DL - 42, IN</p>
</div>
</footer>


<script src="./script.js"></script>
<script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

  </body>
</html>