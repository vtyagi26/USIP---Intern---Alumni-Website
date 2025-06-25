<!-- <!doctype html> -->
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


<body class="relative z-0">


<nav class="bg-white border-gray-200 px-2 lg:px-4 py-2.5">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="/" class="flex items-center">

        <span class="flex gap-2 self-center text-2xl lg:text-3xl font-semibold whitespace-nowrap "><span><img class="h-10 w-10" src="./pages/public/img/dtu-logo.png"  alt=""></span>Alumni Affairs</span>
      </a>
      <div class="flex md:order-2">
       <a href="./pages/whydonate.html"><button type="button"
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
            <a href="/" class="mr-4 md:hidden hover:underline md:mr-3 ">Home</a>
          </li>
          <li>
            <a href="./pages/about-us.html" class="mr-4 hover:underline md:mr-3">About</a>
          </li>
          <li>
            <a href="./pages/fame.html" class="mr-4 hover:underline md:mr-3">Hall  of Fame</a>
          </li>
          <li>
            <a href="./pages/notable-alumni.php" class="mr-4 hover:underline md:mr-3">Notable Alumni</a>
          </li>
          <li>
              <button id="dropdownNavbarLink" onclick = "dropOpen()" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-auto mr-4 rounded md:mr-3 md:border-0 md:p-0 md:w-auto active:border-0 hover:underline">Donations <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbar"  class="absolute z-10  invisible hover:visible font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:uselessclassbg-gray-700 dark:uselessclassdivide-gray-600">
                  <ul class="py-2 text-sm dark:uselessclasstext-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href="./pages/donorsWall.php" class="block px-4 py-2 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasshover:text-white">Donor Wall</a>
                    </li>
                    <li>
                      <a href="./pages/whydonate.html" class="block px-4 py-2 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasshover:text-white">Why Donate?</a>
                    </li>
                    <li>
                      <a href="./pages/donate.html" class="block px-4 py-2 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasshover:text-white">Donate Now</a>
                    </li>
                    <li>
                      <a href="./public/pdf/funds.pdf" target="_blank" class="block px-4 py-2 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasshover:text-white">Donations and Funds</a>
                    </li>
                    <li>
                      <a href="./public/pdf/meds&sch.pdf" target="_blank" class="block px-4 py-2 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasshover:text-white">Medals and Scholorships</a>
                    </li>
                    <li>
                      <a href="./public/pdf/awards.pdf" target="_blank" class="block px-4 py-2 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasshover:text-white">Apply for awards</a>
                    </li>
                  </ul>
                  <!-- <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:uselessclasshover:bg-gray-600 dark:uselessclasstext-gray-400 dark:uselessclasshover:text-white">Sign out</a>
                  </div> -->
              </div>
          </li>
        <!--<li>
          <a href="./pages/memories.php" class="mr-4 hover:underline md:mr-3 ">Memories</a>
        </li>
        <li>
          <a href="/index.php#Events" class="mr-4 hover:underline md:mr-3">Events</a>
        </li>-->
       
          <li>
            <a href="./pages/initiatives.html" class="mr-4 hover:underline md:mr-3">Alumni Initiatives</a>
          </li>
          <li>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeLlHgnXNMojOeZBYyIg5ACg5jqZqBQMrw_5JiRCtTQo3jAWg/viewform" class="mr-4 hover:underline md:mr-3">Alumni Data Update</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

    <!-- Announcement Bar -->
  <section>

     <?php
                    if(file_exists('pages/admin/data/announce.json')){
                        $current_data = file_get_contents('pages/admin/data/announce.json');
                        $array_data = json_decode($current_data, true);
                        if($array_data[0]['visible']=='0'){
                            // $array_data[$i]['visible']=='1'
                            echo '<div class="bg-blue-500 text-white px-4 py-3" role="alert">';
                            
                            
                            //echo "1";
                            $make = "'side-popup-alumni'";
                            for($i = 0; $i<count($array_data);$i++){
                            // echo $i;
                                $get = '"'.$array_data[$i]['link'].'"';


                                echo '<center><p class="font-bold "><a href='.$get.'>Announcement: '.$array_data[$i]['data'].'</a></p></center>';
                                
                               
                                    
                            }
                            echo '</div>';
                            
                        }
                    
                    
                      
                     
                    }
                    else{
                        echo "not available";
                    }
                   
                
    ?>
    
        
        
      
    


  </section>



  <!-- body -->
  <section class="relative">
    
    <div class="lg:max-h-[68%]">

    

    <!-- <div x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,
          pagination: {
    el: '.swiper-pagination-1',
    clickable: true,
  },
     autoplay: {
      delay: 9000,
    },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          768: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          1024: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
        },
      })" class="relative w-12/12 mx-auto flex flex-row"> -->


      <div class="swiper-container" x-ref="container">
        <div class="swiper-wrapper lg:max-h-[68%] h-[50vh] md:h-[70vh]">
          <!--2 Slides -->
          

          <?php
                    if(file_exists('pages/admin/data/homeMainCarousel.json')){
                      $current_data = file_get_contents('pages/admin/data/homeMainCarousel.json');
                      $array_data = json_decode($current_data, true);
                      //echo "1";
                    $make = "'side-popup-alumni'";
                      for($i = 0; $i<count($array_data);$i++){
                      // echo $i;
                        $get = '"'.$array_data[$i]['image'].'"';
                        
                        echo '<div class="swiper-slide ">
                                <div class="flex relative flex-col  shadow overflow-hidden">
                                  <div class="flex-shrink-0">
                                    <img class="imageMainCarousel h-[50vh] md:h-[70vh] w-full object-cover"
                                      src='.$get.' alt="">
                                  </div>
                                </div>
                              </div>';

                            
                      }
                      
                     
                    }
                    else{
                        echo "not available";
                    }
                   
                
              ?>
          

          <!-- <div class="swiper-slide ">
            <div class="flex relative flex-col  shadow overflow-hidden">
              <div class="flex-shrink-0">
                <img class="h-[50vh] md:h-[70vh] w-full object-cover"
                  src="https://drive.google.com/uc?export=view&id=1hGnlwduraDrw3cJy_c1jyjVZdR6arnvb" alt="">
              </div>
            </div>
          </div> -->


        </div>
      </div>


      <div class="absolute  md:m-2 md:left-4 bottom-2 z-10 w-full justify-center md:w-max flex items-center">
        <button class="swiper-button-next-main bg-white text-gray-700 hidden md:flex m-2 justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
            <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6">
            <path fill-rule="evenodd"
              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
              clip-rule="evenodd"></path>
           </svg>
        </button>
        <button class=" swiper-button-prev-main bg-white m-2 hidden  md:flex justify-center items-center w-10 h-10 rounded-full shadow focus:outline-none">
          <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6">
            <path fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>


    <!-- </div> swiper init div -->
      <div
        class="z-20 md:absolute top-0  right-0 md:w-[28%] md:h-full   my-0 text-white py-5 md:rounded-md">

        <div class="inline-flex w-4/5 mx-[10%]  rounded-md shadow-sm">
          <p class="cursor-pointer px-4 py-2 text-sm w-1/2 font-medium text-center text-black  bg-white  rounded-l-lg hover:ring-2 focus:z-10 "
          onclick="news('donation')" id="donation_button">
            Donation
          </p>
          <p class="cursor-pointer px-4 py-2 text-sm font-medium text-white w-1/2 text-center bg-black  rounded-r-md hover:ring-2 focus:z-10 "
            onclick="news('news')" id="news_button">
            News
          </p>
        </div>


        <ul class="w-4/5 mx-[10%] my-1 max-h-[300px] overflow-y-auto " id="donation_news">
            <?php
              if(file_exists('pages/admin/data/donations.json')){
                $current_data = file_get_contents('pages/admin/data/donations.json');
                $array_data = json_decode($current_data, true);
                $func = "'side-popup-alumni'";
                //echo "1";
                for($i = 0; $i<count($array_data);$i++){
                  $get = "'".$array_data[$i]['info']."'";
                  $get1 = "'".$array_data[$i]['title']."'";
                // echo $i;
                  //$get = "".$array_data[$i]['image'];
                  //echo '<h1>'.$array_data[$i]['title'].'</h1>';
                  echo '<li>
                  <a onclick="showPopups('.$func.', '.$get.', '.$get1.')"  class="cursor-pointer block px-4 py-2 text-sm font-[500] text-white hover:bg-gray-600 rounded-lg hover:bg-opacity-50 hover:text-blue-200 ease-in-out duration-300 truncate" >'.
                  $array_data[$i]['title'].'<p class="text-white font-[350]">'.$array_data[$i]['date'].'</p>
                  </a>
                </li>';
                }
              
              }
              else{
                  echo "not available";
              }
            ?>
        </ul>
        <ul class="w-4/5 mx-[10%] my-1 max-h-[300px] overflow-y-auto" id="news_news">
        <!-- <li>
          <a href="#" class="block px-4 py-2 text-sm font-[500] text-white hover:bg-gray-600 rounded-lg hover:bg-opacity-50 hover:text-blue-200 ease-in-out duration-300 truncate"> 5 Cr Recieved from Raj Soin for Raj Soin Hall 
            <p class="text-white font-[350]">2.3.2023</p>
          </a>
        </li> -->
      
            <?php
              if(file_exists('pages/admin/data/news.json')){
                $current_data = file_get_contents('pages/admin/data/news.json');
                $array_data = json_decode($current_data, true);
                $func = "'side-popup-alumni'";
                
                //echo "1";
                for($i = 0; $i<count($array_data);$i++){
                  $get = "'".$array_data[$i]['info']."'";
                  $get1 = "'".$array_data[$i]['title']."'";
                // echo $i;
                  //$get = "".$array_data[$i]['image'];
                  //echo '<h1>'.$array_data[$i]['title'].'</h1>';
                  echo '<li>
                  <a onclick="showPopups('.$func.', '.$get.', '.$get1.')" class="cursor-pointer block px-4 py-2 text-sm font-[500] text-white hover:bg-gray-600 rounded-lg hover:bg-opacity-50 hover:text-blue-200 ease-in-out duration-300 truncate">'.
                  $array_data[$i]['title'].'<p class="text-white font-[350]">'.$array_data[$i]['date'].'</p>
                  </a>
                </li>';
                }
              }
              else{
                  echo "not available";
              }
            ?>
        </ul>



      </div>

    </div>
  </section>


  <section id="notedAlumni">

    <div class="relative w-12/12 mx-auto px-10 py-8 max-h-1/3">
      <p class="text-3xl font-bold py-2">Distinguished Alumni</p>

      <div class="z-0 swiper-container-alumni-1 h-[40vh]" x-ref="container">
        <div class="swiper-wrapper" id="">
          <!-- 20 Slides -->
                <?php
                    if(file_exists('pages/admin/data/alumnicarousel.json')){
                      $current_data = file_get_contents('pages/admin/data/alumnicarousel.json');
                      $array_data = json_decode($current_data, true);
                      //echo "1";
                    $make = "'side-popup-alumni'";
                      for($i = 0; $i<count($array_data);$i++){
                      // echo $i;
                        $get = '"'.$array_data[$i]['image'].'"';
                        $def = "'./public/img/blank-profile-picture.png'";
                        //echo $def;
                        //echo $get;
                        //echo '<h1>'.$array_data[$i]['title'].'</h1>';
                        echo '<div class="swiper-slide "> 
                                <div class=" flex flex-col rounded shadow overflow-hidden">
                                  <div class="flex-shrink-0 relative alumni cursor-pointer" 
                                  onclick="showPopups('.$make.', this.children[2].innerHTML, this.children[1].children[0].innerHTML)"  onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)" 
                                  >
                                    <img class="h-[40vh] w-full object-cover imageAlum-1"
                                      src='.$get.'
                                      onerror="this.src='.$def.'" alt="">
                                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                      <p class="text-xl md:text-xl  lg:text-2xl font-semibold nameAlum-1">'.$array_data[$i]['name'].'</p>
                                      <p class="classAlum-1">'.$array_data[$i]['class'].'</p>
                                    </div>
                                    <div
                                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum-1 ">
                                      '.$array_data[$i]['text'].'

                                    </div>
                                  </div>
                                </div>
                              </div>
                            ';

                            
                      }
                     // echo '<script src="./script.js" >initCarousel1();</script>';
                     
                    }
                    else{
                        echo "not available";
                    }
                   
                
              ?>
          
        </div>
      </div>
      
    
    

      <!-- <div class="swiper-pagination absolute -bottom-6 flex gap-1 "></div> -->
      <div class="z-10 flex items-center">
        <button
          class="swiper-button-prev pr-2 text-gray-600 flex justify-center items-center w-10 h-10  focus:outline-none">         
        </button>
      </div>
      <div class=" z-10 flex items-center">
        <button
          class="swiper-button-next pl-2 text-gray-600 flex justify-center items-center w-10 h-10 focus:outline-none">          
        </button>
      </div>
    </div>
  



    <!-- Alumni details SideNav -->
    <section id="side-popup-alumni" class="hidden">
      <div class="fixed top-0 z-30 right-0 h-[100vh] w-[100vw] bg-black bg-opacity-50"></div>
      <div id="read-more" class="fixed top-0 z-40 right-0 h-[100vh] w-[100vw] lg:w-[50vw] bg-gray-50 flex flex-col gap-4 p-8">
        <span id="close-popup-alumni" class="material-symbols-outlined place-self-end cursor-pointer">
            cancel
        </span>
        <h3 id="side-popup-alumni-head" class="text-2xl font-semibold">Raj Soin</h3>
        <p id="side-popup-alumni-paragraph" class="text-lg text-gray-700 overflow-y-auto">Dr Rajesh K Soin, an alumnus of 1969 batch of Mechanical Engineering and now chairman and CEO of Soin
          LLC at Ohio in the US, donated the amount Rs 5 crore for the construction of a multipurpose hall at
          his alma mater Delhi Technological University</p>
      </div>
    </section>
  </section>

  <section id="About">
    <div class="px-20 mt-6" data-aos="fade-down">
      <h3 class="text-4xl text-center font-medium">Welcome back to the place where your dreams began and your future took shape - your alma mater.</h3>
      </div>
  </section>

  <section class="bg-white " id="statistics">
    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
      <dl class="grid max-w-screen-lg gap-8 mx-auto text-gray-900 grid-cols-2 sm:grid-cols-3 lg:grid-cols-3 ">
        <div class="flex flex-col items-center justify-center">
          <dt class="mb-2 text-3xl md:text-4xl font-extrabold"><p class="inline counter">33000</p>+</dt>
          <dd class="font-light text-gray-500 ">Alumni</dd>
        </div>
        <!-- <div class="flex flex-col items-center justify-center">
          <dt class="mb-2 text-3xl md:text-4xl font-extrabold"><p class="inline counter">500</p>+</dt>
          <dd class="font-light text-gray-500 ">Contributors</dd>
        </div> -->
        <div class="flex flex-col items-center justify-center">
          <dt class="mb-2 text-3xl md:text-4xl font-extrabold"><p class="inline counter">8</p>cr+</dt>
          <dd class="font-light text-gray-500 ">Donations recieved</dd>
        </div>
        <div class="flex flex-col items-center justify-center">
          <dt class="mb-2 text-3xl md:text-4xl font-extrabold"><p class="inline counter">1.6</p>cr+</dt>
          <dd class="font-light text-gray-500 ">Scholarships funded</dd>
        </div>
      </dl>
    </div>
  </section>


  <section id="Events" class="pb-10">

    <!-- The Modal -->
    <div id="modal"
    class="hidden fixed top-0 left-0 z-80 w-screen h-screen bg-black/70 flex justify-center items-center">
  
    <!-- The close button -->
    <a class="fixed z-90 top-6 right-8 text-white text-5xl font-bold" href="javascript:void(0)"
        onclick="closeModal()">&times;</a>
  
    <!-- A big image will be displayed here -->
    <img id="modal-img" class="max-w-[800px] max-h-[600px] object-cover" alt=""/>
  </div>
  
    <p class="text-3xl font-bold py-2 w-10/12 mx-auto lg:w-9/12">Events</p>
  
     <!-- events list -->
     <div class="mx-auto w-10/12 max-h-[500px] overflow-y-scroll lg:w-9/12 bg-gray-200 text-white md:rounded-md">
  
      <ul id="events_list" class=" divide-y divide-gray-500 mx-4 ">
         

              <?php
                    if(file_exists('pages/admin/data/events.json')){
                      $current_data = file_get_contents('pages/admin/data/events.json');
                      $array_data = json_decode($current_data, true);
                      //echo "1";
                   // $make = "'side-popup-alumni'";
                      for($i = 0; $i<count($array_data);$i++){
                      // echo $i;
                        $get = '"'.$array_data[$i]['image'].'"';
                        //echo $get;
                        // Date correction
                        $cdate = date("Y m d");
                        $edate = $array_data[$i]['date'];
                        if($cdate>$edate){
                            //echo '<h1>'.$array_data[$i]['title'].'</h1>';
                        echo '<li class="pb-3 sm:pb-4 pt-4">
                        <div class="flex flex-col md:flex-row items-center space-x-4 ">
                          <div class="flex-shrink-0">
                         
                            <img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
                                  onClick="showModal()">
                          </div>
                          <div class="flex flex-row justify-between md:w-full">
                            <div>
                              <p class="text-lg font-messdium text-gray-900 truncate">
                                          '.$array_data[$i]['title'].'
                              </p>
                              <div class="flex-row flex gap-2">
                                <p class="text-sm text-black truncate">
                                  '.$array_data[$i]['date'].'
                                </p>
                                <div class="inline-flex items-center md:hidden">
                        <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-red-400"><a href="'.$array_data[$i]['link'].'">Past/Info</a></span>
                      </div>
                    </div>
                  </div>
                 <div class="items-center hidden md:inline-flex">
                  <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-red-400"><a href="'.$array_data[$i]['link'].'">Past/Info</a></span>
                </div>
               </div>
               
            </div>
                    </li>';
                        }
                        else{
                          //echo '<h1>'.$array_data[$i]['title'].'</h1>';
                        echo '<li class="pb-3 sm:pb-4 pt-4">
                        <div class="flex flex-col md:flex-row items-center space-x-4 ">
                          <div class="flex-shrink-0">
                         
                            <img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
                                  onClick="showModal()">
                          </div>
                          <div class="flex flex-row justify-between md:w-full">
                            <div>
                              <p class="text-lg font-messdium text-gray-900 truncate">
                                          '.$array_data[$i]['title'].'
                              </p>
                              <div class="flex-row flex gap-2">
                                <p class="text-sm text-black truncate">
                                  '.$array_data[$i]['date'].'
                                </p>
                                <div class="inline-flex items-center md:hidden">
                                  <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-green-600"><a href="'.$array_data[$i]['link'].'">Register/Info</a></span>
                                </div>
                              </div>
                            </div>
                            <div class="items-center hidden md:inline-flex">
                              <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full border border-green-600"><a href="'.$array_data[$i]['link'].'">Register/Info</a></span>
                            </div>
                          </div>
                              
                        </div>
                    </li>';
                        }
                        //echo $cdate.'n n'.$edate;

                        
                            

                            
                      }
                     // echo '<script src="./script.js" >initCarousel1();</script>';
                     
                    }
                    else{
                        echo "not available";
                    }
                   
                
              ?>
          </ul>
      
        </div>
  
  </section>
  
  <!-- 3 boxes -->
  <section class="body-font block" id="Services">
    <div class="container py-8 px-8 mb-8 w-10/12 lg:w-10/12 mx-auto">
      <div class="flex gap-4 flex-wrap justify-center content-center -m-4">

        <div class="p-4 md:w-[30%] border rounded hover:shadow-lg cursor-pointer flex flex-wrap" onclick="window.open('path/to/your/pdf.pdf', '_blank')">
          <div class="w-4/5 inline-block mx-auto">
            <div class="h-full overflow-hidden" data-aos="zoom-in-up" data-aos-duration="1000">
              <img class=" h-48 md:h-36 lg:h-48  w-full object-cover object-center" src="./pages/public/img/homecoming.png"
                alt="joinus">
                <a href="./pages/registerAlumni.html">
                <div class="bg-[#65350f] mx-4 relative bottom-6">
                <h1 class="title-font text-white text-2xl p-5 text-center font-medium mb-3">Join Us</h1>
              </div>
                </a>
              
              <p class="leading-relaxed mb-3">Become a part of the highly esteemed and prestigious alumni network</p>

            </div>
          </div>
        </div>

        <div class="p-4 md:w-[30%] flex flex-wrap border rounded hover:shadow-lg cursor-pointer" onclick="window.location='/pages/whydonate.html'">
          <div class="w-4/5 inline-block mx-auto">
            <div class="h-full overflow-hidden" data-aos="zoom-in-up" data-aos-duration="1000">
              <img class=" h-48 md:h-36 lg:h-48  w-full object-cover object-center" src="./pages/public/img/donation.jpg"
                alt="donate">
              <div class="bg-[#65350f] mx-4 relative bottom-6">

                <h1 class="title-font text-white text-2xl p-5 text-center font-medium mb-3">Donate</h1>
              </div>
              <p class="leading-relaxed mb-3">Support your alma mater to make a huge and lasting impact and leave behind
                a legacy</p>

            </div>
          </div>
        </div>

        <div class="p-4 md:w-[30%] flex flex-wrap border rounded hover:shadow-lg cursor-pointer" onclick="window.location='/pages/mentorship-main.html'">
          <div class="w-4/5 inline-block mx-auto">
            <div class="h-full overflow-hidden" data-aos="zoom-in-up" data-aos-duration="1000">
              <img class=" h-48 md:h-36 lg:h-48  w-full object-cover object-center" src="./pages/public/img/mentor.jpg"
                alt="mentor">
              <div class="bg-[#65350f] mx-4 relative bottom-6">

                <h1 class="title-font text-white text-2xl p-5 text-center font-medium mb-3">Mentor</h1>
              </div>
              <p class="leading-relaxed mb-3">Join the mentorship program and guide the next generation of changemakers
              </p>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="body-font block" id="Services">
    <div class="container py-8 px-8 mb-8 w-10/12 lg:w-10/12 mx-auto">
      <div class="flex gap-4 flex-wrap justify-center content-center -m-4">

        <div class="p-4 md:w-[30%] border rounded hover:shadow-lg cursor-pointer flex flex-wrap" onclick="window.open('./public/pdf/golden_jubilee_memories.pdf', '_blank')">
          <div class="w-4/5 inline-block mx-auto">
            <div class="h-full overflow-hidden" data-aos="zoom-in-up" data-aos-duration="1000">
              <img class=" h-48 md:h-36 lg:h-48  w-full object-cover object-center" src="./pages/public/img/golden_img.jpg"
                alt="joinus">
                <div class="bg-[#65350f] mx-4 relative bottom-6">
                <h1 class="title-font text-white text-2xl p-5 text-center font-medium mb-3">Golden Jubilee Memories</h1>
              </div>
                </a>
              
              <p class="leading-relaxed mb-3">Dive right into the memories of the Golden Jubilee of 1975 batch!</p>

            </div>
          </div>
        </div>

        <div class="p-4 md:w-[30%] border rounded hover:shadow-lg cursor-pointer flex flex-wrap" onclick="window.open('./public/pdf/Silver_jubilee_memories.pdf', '_blank')">
          <div class="w-4/5 inline-block mx-auto">
            <div class="h-full overflow-hidden" data-aos="zoom-in-up" data-aos-duration="1000">
              <img class=" h-48 md:h-36 lg:h-48  w-full object-cover object-center" src="./pages/public/img/silver_img.jpg"
                alt="donate">
              <div class="bg-[#65350f] mx-4 relative bottom-6">

                <h1 class="title-font text-white text-2xl p-5 text-center font-medium mb-3">Silver Jubilee Memories</h1>
              </div>
              <p class="leading-relaxed mb-3">Dive right into the memories of the Silver Jubilee of 2000 batch!</p>

            </div>
          </div>
        </div>

        <div class="p-4 md:w-[30%] border rounded hover:shadow-lg cursor-pointer flex flex-wrap" onclick="window.open('./public/pdf/medals.pdf', '_blank')">
          <div class="w-4/5 inline-block mx-auto">
            <div class="h-full overflow-hidden" data-aos="zoom-in-up" data-aos-duration="1000">
              <img class=" h-48 md:h-36 lg:h-48  w-full object-cover object-center" src="./pages/public/img/medals_scholor_img.jpg"
                alt="mentor">
              <div class="bg-[#65350f] mx-4 relative bottom-6">

                <h1 class="title-font text-white text-2xl p-5 text-center font-medium mb-3">Medals and Scholorships</h1>
              </div>
              <p class="leading-relaxed mb-3">Click here to view about the medals and scholorships programs in DTU.  </p>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  
  
  


  <footer class="p-4 bg-gray-200  rounded-lg shadow  md:py-6 md:pb-20 border" id="contact">

    <div class="flex flex-col-reverse md:flex-row sm:items-center sm:justify-between lg:mx-20">
      <div>
        <ul
          class="flex justify-center text-center md:text-left  flex-wrap md:grid md::grid-cols-1 items-center my-6 text-xl leading-8 font-semibold text-gray-500 sm:mb-0 ">
          <li>
            <a href="./pages/donate.html" class="mr-4 hover:underline md:mr-6 ">Donate</a>
          </li>
          <li>
            <a href="./pages/notable-alumni.php" class="mr-4 hover:underline md:mr-6">Noted Alumni</a>
          </li>
          <li>
            <a href="./pages/about-us.html" class="mr-4 hover:underline md:mr-6">About</a>
          </li>
          <li>
            <a href="./pages/initiatives.html" class="mr-4 hover:underline md:mr-6">Initiatives</a>
          </li>

          
          <!-- <li>
            <a href="#Mentorship" class="mr-4 hover:underline md:mr-6 ">Mentorship</a>
          </li> -->

        </ul>

      </div>
      <div class="bg-white rounded-lg md:w-1/2 lg:w-max shadow-lg ">
        <div class="py-3 lg:py-5 px-4 w-full lg:w-[600px]">
          <h2 class="mb-2 text-4xl w-full tracking-tight font-extrabold text-center text-gray-900 ">Contact Us</h2>
            
          <form  method="post" enctype="text/plain" class="space-y-3">
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
              class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-gray-700 sm:w-fit  focus:ring-4 focus:outline-none focus:ring-primary-300 " onclick="sendMail()">Mail Us</button>
          </form>
        </div>
      </div>
    </div>
    <div>
      <p class="text-sm text-center mt-8 mb-2 text-gray-500 ">© 2023, Delhi Technological University, Shahbad Daulatpur, Main Bawana Road, DL - 42, IN</p>
      <p class="text-sm text-center mt-8 mb-2 text-gray-500 ">Contact Number: (011)27871018| Email: deanalumni01@dtu.ac.in</p>
    </div>
    <script>
    function sendMail() {
    var name = $('#contact #name').val();
    var email = $('#contact #email').val();
    var subject = $('#contact #subject').val();
    var message = $('#contact textarea').val();
    window.location.href = 'mailto:deanalumniaffairs@dtu.ac.in?subject=' + subject + '&body=' + 'My name is ' + name + ' and my email is' +' (' + email + '). '  + message;
};
    </script>
  </footer>


  <script>
  function dropOpen(){
     
      document.getElementById("dropdownNavbar").classList.remove("invisible");
    }
    function news(x) {
  if (x === 'donation') {

    document.getElementById('news_news').style.display = "none";
    document.getElementById('donation_news').style.display = "block";
    document.getElementById('donation_button').style.backgroundColor = "white";
    document.getElementById('donation_button').style.color = "black";
    document.getElementById('news_button').style.backgroundColor = "black";
    document.getElementById('news_button').style.color = "white";
  } else if (x === 'news') {
    document.getElementById('news_news').style.display = "block";
    document.getElementById('donation_news').style.display = "none";
    document.getElementById('news_button').style.backgroundColor = "white";
    document.getElementById('news_button').style.color = "black";
    document.getElementById('donation_button').style.backgroundColor = "black";
    document.getElementById('donation_button').style.color = "white";
  }
}
news('news');
  </script>
  <script src="/script.js"></script>
  
  <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

