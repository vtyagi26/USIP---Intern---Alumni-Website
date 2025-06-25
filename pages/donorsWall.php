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
  <link rel="stylesheet" href="../style.css">
  <style type="text/tailwindcss">
    @layer utilities {
      @variants responsive {
      /* Hide scrollbar for Chrome, Safari and Opera */
      .no-scrollbar::-webkit-scrollbar {
          display: none;
      }

      /* Hide scrollbar for IE, Edge and Firefox */
      .no-scrollbar {
          -ms-overflow-style: none;  /* IE and Edge */
          scrollbar-width: none;  /* Firefox */
      }
    }
      
    }
  </style>
</head>

<body>

<div class="scroll-container lg:snap-y lg:snap-mandatory flex-col h-screen w-full mx:auto overflow-y-scroll no-scrollbar">
 <div class="snap-start">
 <nav class="bg-white border-gray-200 px-2 lg:px-4 py-2.5">
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
            <a href="./initiatives.html" class="mr-4 hover:underline md:mr-3">Alumni Initiatives</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
 
  <div class="h-56 w-full bg-gray-50">
  <div class="w-full  justify-left mx-auto container h-56 grid md:grid-cols-2 lg:px-20 items-center">
    

    <div class="flex flex-col justify-center gap-1 w-1/2">
      <div class="text-5xl  font-bold w-full  mr-auto">
  Donor Wall 
      </div>
      <span class="material-symbols-outlined text-5xl md:inline hidden">
        volunteer_activism
        </span>
    </div>
    <div class="text-3xl  ">
Express your dedication to the institution by providing philanthropic assistance.





   </div>
    
  </div>
  </div>
</div>

<div class="min-h-screen h-max container mx-auto py-5 snap-start" id="contributory">
<div class="container lg:px-10 py-2">
  <h2 class="text-4xl text-center font-bold">
    University Donation & Contributory Fund
  </h2>
  
  <div class="grid grid-cols-1 divide-x-2 gap-6 sm:grid-cols-2 w-4/5 text-left mx-auto text-xl my-4">
    <p class="mb-3 text-gray-500">University Donation & Contributory Fund is a program that allows individuals and organizations to donate money to universities to support academic programs, research, scholarships, and other important initiatives.</p>
    <p class=" text-gray-500 pl-6 italic">
      The Cheque/Draft may be issued in the name of:
      <br>
      "DTU Donation & Contributory Fund"
      <br>
      A/C No: 36285532193
      <br>
      IFSC: SBIN0010446
      <br>
      SBI, Delhi College Of Engineering Branch
    </p>
</div>
</div>
 <section id="TopDonors">

    <div class="relative w-11/12 mx-auto px-10">
      <p class="text-3xl font-bold py-2">Top Donors</p>

      <div class="swiper-container-alumni-1" x-ref="container">
          <div class="swiper-wrapper" id="alumnicarousel">
            <!--19 Slides -->
            <?php
                    if(file_exists('admin/data/contributoryFund.json')){
                      $current_data = file_get_contents('admin/data/contributoryFund.json');
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
                                  onclick="showPopups('.$make.', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)" 
                                  >
                                    <img class="h-[40vh] w-full object-cover imageAlum"
                                      src='.$get.'
                                      onerror="this.src='.$def.'" alt="">
                                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum">'.$array_data[$i]['name'].'</p>
                                      <p class="classAlum">'.$array_data[$i]['amount'].'</p>
                                    </div>
                                    <div
                                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum">
                                      '.$array_data[$i]['purpose'].'

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
            <!-- <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide  ">
              <div class="flex flex-col rounded shadow overflow-hidden">
                <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                >
                <img class="h-[40vh] w-full object-cover imageAlum"
                    src=""
                    onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                  <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                    <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameAlum "></p>
                    <p class="classAlum"></p>
                  </div>
                  <div
                    class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textAlum ">
  
                  </div>
                </div>
              </div>
            </div> -->
        </div>
      </div>
      <div class="swiper-pagination absolute -bottom-6 flex gap-1 "></div>
      <div class="flex items-center">
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
        <h3 id="side-popup-alumni-head" class="text-2xl font-semibold"></h3>
        <p id="side-popup-alumni-paragraph" class="text-lg text-gray-700 overflow-y-auto"></p>
      </div>
    </section>
  </section>
  <div class="justify-center scroll-page-up lg:mt-4 xl:mt-16 lg:flex hidden">
    <span onclick="scrollPageUp(this)" class="material-symbols-outlined text-gray-500 cursor-pointer" style="font-size:50px;">
      keyboard_double_arrow_up
      </span>
  </div>
 </div>
 

<div class="w-full bg-slate-100 snap-start" id="scholarship"> 
  <div class="min-h-screen lg:flex container  mx-auto items-center ">
<div class="md:w-2/5 px-10">
  <h2 class="text-4xl font-bold">
    Scholarships and Medals
  </h2>
  <div class="grid grid-row-1 divide-y-2 gap-2 sm:grid-row-2 text-left text-xl my-4">
    <p class="mb-3 text-gray-500">University Donation & Contributory Fund is a program that allows individuals and organizations to donate money to universities to support academic programs, research, scholarships, and other important initiatives.</p>
    <p class=" text-gray-500 pt-6 italic">
      The Cheque/Draft for institution of Medals & Scholarship may be issued in
      the favour of:
      <br>
      "DTU Medals & Scholarship"
      <br>
      A/C No: 36423599642
      <br>
      IFSC: SBIN0010446
      <br>
      SBI, Delhi College Of Engineering Branch
    </p>
</div>
</div>
<div class="relative mx-auto w-full md:w-1/2">
          <div class=" w-12/12 mx-auto px-10">
          <p class="text-3xl font-bold py-2">Top Donors</p>
        
            <div class="swiper-container-alumni-2" x-ref="container">
                <div class="swiper-wrapper" id="scholarshipcarousel">
        <!-- <div id="scholarshipFunds" class="relative mx-auto w-full md:w-1/2">
          <div class=" w-12/12 mx-auto px-10">
            
      
            <div class="swiper-container-scholarship-2" x-ref="container">
                <div class="swiper-wrapper" id="scholarshipcarousel"> -->
                  <!--27 Slides -->
                  <?php
                    if(file_exists('admin/data/scholarshipsAndMedals.json')){
                      $current_data = file_get_contents('admin/data/scholarshipsAndMedals.json');
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
                                  onclick="showPopups('.$make.', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)" 
                                  >
                                    <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                                      src='.$get.'
                                      onerror="this.src='.$def.'" alt="">
                                    <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                                      <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal">'.$array_data[$i]['name'].'</p>
                                      <p class="classScholarshipAndMedal">'.$array_data[$i]['amount'].'</p>
                                    </div>
                                    <div
                                      class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
                                      '.$array_data[$i]['purpose'].'

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
                  <!-- <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide  ">
                    <div class="flex flex-col rounded shadow overflow-hidden">
                      <div class="flex-shrink-0 relative alumni" onclick="showPopups('side-popup-alumni', this.children[2].innerHTML, this.children[1].children[0].innerHTML)" onmouseover="alumHover(this)" onmouseleave="alumHoverOut(this)"
                      >
                      <img class="h-[40vh] w-full object-cover imageScholarshipAndMedal"
                          src=""
                          onerror="this.src='../public/img/blank-profile-picture.png'" alt="">
                        <div class="absolute bottom-0 p-6  z-50 alumni-content text-white drop-shadow-[0_1.5px_1.5px_rgba(0,0,0,0.8)]">
                          <p class="text-xl md:text-2xl  lg:text-3xl font-semibold nameScholarshipAndMedal "></p>
                          <p class="classScholarshipAndMedal"></p>
                        </div>
                        <div
                          class="absolute z-40 top-0 bg-black bg-opacity-75 h-full alumni-text ease-in-out duration-300 p-6 text-white text-md md:text-lg lg:text-xl textScholarshipAndMedal ">
        
                        </div>
                      </div>
                    </div>
                  </div> -->
              </div>
            </div>
            <div class="swiper-pagination absolute -bottom-6 flex gap-1 "></div>
            <div class="flex items-center">
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
           </div>
  </div>
  <div class="justify-center scroll-page-up lg:-mt-12 lg:flex hidden">
    <span onclick="scrollPageUp(this)" class="material-symbols-outlined text-gray-500 cursor-pointer" style="font-size:50px;">
      keyboard_double_arrow_up
    </span>
  
   </div>
  </div>





  

<footer class="p-4 bg-gray-200  rounded-lg shadow  md:py-6 md:pb-20 border" id="contact">

    <div class="flex flex-col-reverse md:flex-row sm:items-center sm:justify-between lg:mx-20">
      <div>
        <ul
          class="flex justify-center text-center md:text-left  flex-wrap md:grid md::grid-cols-1 items-center my-6 text-xl leading-8 font-semibold text-gray-500 sm:mb-0 ">
          <li>
            <a href="/pages/donate.html" class="mr-4 hover:underline md:mr-6 ">Donate</a>
          </li>
          <li>
            <a href="/pages/notable-alumni.php" class="mr-4 hover:underline md:mr-6">Noted Alumni</a>
          </li>
          <li>
            <a href="/pages/about-us.html" class="mr-4 hover:underline md:mr-6">About</a>
          </li>
          <li>
            <a href="/pages/initiatives.html" class="mr-4 hover:underline md:mr-6">Initiatives</a>
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
</div>

</div>


  <!-- <script src="../script.js"></script> -->
  <script src="./notableAlumni.js"></script>
  <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
 
</body>

