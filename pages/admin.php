<?php
    /* Your password */
    $password = 'admin';

    if (empty($_COOKIE['password']) || $_COOKIE['password'] !== $password) {
        // Password not set or incorrect. Send to login.php.
        header('Location: login.php');
        exit;
    }
    // else{
    //   header('Location: login.php');
    // }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="/dtualumni/tailwind.css" rel="stylesheet" /> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body class="bg-grey">
    <span
      class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
      onclick="openSidebar()"
    >
      <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span>
    <div
      class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900"
    >
      <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
          <i class=" w-7 rounded-md bg-blue-600"><img src="https://img.collegepravesh.com/2015/10/DTU-Logo.png" alt=""></i>
          <h1 class="font-bold text-gray-200 text-[15px] ml-3">Admin Alumni Affairs</h1>
          <i
            class="bi bi-x cursor-pointer ml-28 lg:hidden"
            onclick="openSidebar()"
          ></i>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
      </div>
      <!-- <div
        class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white"
      >
        <i class="bi bi-search text-sm"></i>
        <input
          type="text"
          placeholder="Search"
          class="text-[15px] ml-4 w-full bg-transparent focus:outline-none"
        />
      </div> -->
      <a href="#alumdata">
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        
          <i class="bi bi-house-door-fill"></i>
          <span class="text-[15px] ml-4 text-gray-200 font-bold">Alumni Data</span>
        
      </div>
      </a>
      <!-- <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-bookmark-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Modify</span>
      </div> -->
      <div class="my-4 bg-gray-600 h-[1px]"></div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdown()"
      >
        <i class="bi bi-chat-left-text-fill"></i>
        <div class="flex justify-between w-full items-center">
          <span class="text-[15px] ml-4 text-gray-200 font-bold">Modify</span>
          <span class="text-sm rotate-180" id="arrow">
            <i class="bi bi-chevron-down"></i>
          </span>
        </div>
      </div>
      <div
        class="text-left text-sm mt-2 w-4/5 mx-auto text-gray-200 font-bold"
        id="submenu"
      > 
      <a href="#announce">
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            Announce
          </h1>
        </a>
      <a href="#news">
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
            News
          </h1>
        </a>
        <a href="#donationhome">
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Donation News Home
          </h1>
        </a>
        <a href="#maincourosel">
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Main Courosel
          </h1>
        </a>
        <a href="#alumni">
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Notable Alumni
          </h1>
        </a>
        <a href="#donations">
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Donations
          </h1>
        </a>
        <a href="#events">
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Events
          </h1>
        </a>
        <a href="#memories">
          <h1 class="cursor-pointer p-2 hover:bg-blue-600 rounded-md mt-1">
          Memories
          </h1>
    
        </a>
        
      </div>
      <a href="/dtualumni">
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-box-arrow-in-right"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
        
      </div>
      </a>
    </div>


    <script type="text/javascript">
      function dropdown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
      }
      dropdown();

      function openSidebar() {
        document.querySelector(".sidebar").classList.toggle("hidden");
      }
    </script>





<div id="main">



<!-- Alumni Data -->

<section id="alumdata">

  <!-- Heading -->
  <div   class="bg-blue-100 h-10 text-center py-2">
    Alumni Data
  </div>

  <!-- Current -->
  <div> 

    <!-- Header -->
    <div id="header">
      <h1>Search Alumni Data</h1>
    </div>

    <!-- content -->
    <div id="table-data">
      <form id="submit_form" method="post" action="admin/Search-Alumni.php">  
        <table width="100%" cellpadding="10px">
          
        <tr>
            <td><label for="cat">Choose Search Category:</label></td>
            <td>
            <input type="select"/>
              <select id="cat" name="cat">
                <option value="fname">First Name</option>
                <option value="batch">Batch year</option>
                <option value="1">All</option>
                

              </select>
              
            </td>
         
          <tr>
            <td><label for="cat">Choose Fields Required</label></td>
            <td>
            <input type="select"/>
              <select id="field" name="field">
                <option value="1">Name + Batch + PhoneNo + Email</option>
                <option value="2">Name + PhoneNo + Batch + Branch + About + Image</option>
                

              </select>
              
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input  class ="border-black border rounded-lg"  type="submit" name="submit" id="submit" /></td>
          </tr>
          
        </table>
      </form>  
    </div>

  </div>

  
</section>

<!-- announce -->



<section id="announce">

  <!-- Heading -->
  <div   class="bg-blue-100 h-10 text-center py-2">
    Announcement Bar
  </div>

  <!-- Current -->
  <div> 

    <!-- Header -->
    <div id="header">
      <h1>Current Announcement</h1>
    </div>

    <!--  Content-->
    <div class="mx-10">
      <br>
      <?php

        if(file_exists('admin/data/announce.json')){

          $current_data = file_get_contents('admin/data/announce.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['visible'].'</li>';
            echo '<li>'."Title-> ".$array_data[$i]['message'].'</li>';
            echo '<li>'."Date-> ".$array_data[$i]['link'].'</li>';
            
            echo '</ul>';
            echo '<hr>';
          }

        }

      ?>
      <br>
    </div>

  </div>

  <!-- Adding element -->
  <div>
    <div id="header">
      <h1>Change Announcement</h1>
    </div>

    <div id="table-data">
      <form id="submit_form" method="post" action="admin/save-announce.php">  
        <table width="100%" cellpadding="10px">
          <tr>
            <td><label for="visible">Visible to Public</label></td>
            <td>
            <input type="select"/>
              <select id="visible" name="visible">
                <option value="0">Visible</option>
                <option value="1">Not Visible</option>
              </select>
            </td>
          </tr>
          
            
          <tr>
            <td width="150px"><label>Registration Link</label></td>
            <td ><input class ="border-black border rounded-lg " type="text" name="link" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Announcement Message</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="data" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" id="submit" /></td>
          </tr>

        </table>
      </form>  
    </div>
  </div>

 


</section>




<!-- News -->

<!-- News -->

<section id="news">

  <!-- Heading -->
  <div   class="bg-blue-100 h-10 text-center py-2">
    News
  </div>

  <!-- Current -->
  <div> 

    <!-- Header -->
    <div id="header">
      <h1>News Data</h1>
    </div>

    <!--  Content-->
    <div class="mx-10">
      <br>
      <?php

        if(file_exists('admin/data/news.json')){

          $current_data = file_get_contents('admin/data/news.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Title-> ".$array_data[$i]['title'].'</li>';
            echo '<li>'."Date-> ".$array_data[$i]['date'].'</li>';
            echo '<li>'."Details-> ".$array_data[$i]['info'].'</li>';
            echo '</ul>';
            echo '<hr>';
          }

        }

      ?>
      <br>
    </div>

  </div>

  <!-- Adding element -->
  <div>
    <div id="header">
      <h1>Add New News in Data</h1>
    </div>

    <div id="table-data">
      <form id="submit_form" method="post" action="admin/save-news.php">  
        <table width="100%" cellpadding="10px">
          <tr>
            <td width="150px"><label>Title</label></td>
            <td ><input class ="border-black border rounded-lg " type="text" name="title" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Date</label></td>
            <td><input class ="border-black border rounded-lg" type="date" name="date" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Serial</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="serial" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Info</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="info" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" id="submit" /></td>
          </tr>

        </table>
      </form>  
    </div>
  </div>

 


  <!-- Delete form -->
  
  <div>

    <!-- header -->
    <div id="header">
      <h1>Delete Older News from Data</h1>
    </div>
  
  
    <!-- content -->
    <div id="table-data">
      <form id="submit_form" method="post" action="admin/delete-news.php">  
        <table width="100%" cellpadding="10px">
          
          <tr>
            <td><label>Serial</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          </tr>
          <tr>
            <td></td>
            <td><input  class ="border-black border rounded-lg"  type="submit" name="submit" id="submit" /></td>
          </tr>
          
        </table>
      </form>  
    </div>
  
  </div>
</section>



<!-- Donation Home-->
<section id="donationhome">
  <!-- Heading -->
  <div  class="bg-blue-100 h-10 text-center py-2">
    Donations Home Data
  </div>

  <!-- Current -->
  <div> 

    <!-- Header -->
    <div id="header">
      <h1>Donations Data</h1>
    </div>

    <!--  Content-->
    <div class="mx-10">
      <br>
      <?php

        if(file_exists('admin/data/donations.json')){

          $current_data = file_get_contents('admin/data/donations.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Title-> ".$array_data[$i]['title'].'</li>';
            echo '<li>'."Date-> ".$array_data[$i]['date'].'</li>';
            echo '<li>'."Details-> ".$array_data[$i]['info'].'</li>';
            echo '</ul>';
            echo '<hr>';
          }

        }

      ?>
      <br>
    </div>

  </div>

  <!-- Adding element -->
  <div>
    <div id="header">
      <h1>Add New News in Data</h1>
    </div>

    <div id="table-data">
      <form id="submit_form" method="post" action="admin/save-donations.php">  
        <table width="100%" cellpadding="10px">
          <tr>
            <td width="150px"><label>Title</label></td>
            <td ><input class ="border-black border rounded-lg " type="text" name="title" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Date</label></td>
            <td><input class ="border-black border rounded-lg" type="date" name="date" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Serial</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="serial" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Info</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="info" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" id="submit" /></td>
          </tr>

        </table>
      </form>  
    </div>
  </div>

 


  <!-- Delete form -->
  
  <div>

    <!-- header -->
    <div id="header">
      <h1>Delete Form Data in JSON File</h1>
    </div>
  
  
    <!-- content -->
    <div id="table-data">
      <form id="submit_form" method="post" action="admin/delete-donations.php">  
        <table width="100%" cellpadding="10px">
          
          <tr>
            <td><label>Serial</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          </tr>
          <tr>
            <td></td>
            <td><input  class ="border-black border rounded-lg"  type="submit" name="submit" id="submit" /></td>
          </tr>
          
        </table>
      </form>  
    </div>
  
  </div>
</section>


<!-- Home page Main Courosel -->
<section id="maincourosel">
  <!-- Heading -->
  <div  class="bg-blue-100 h-10 text-center py-2">
    Home Page Main Courosel
  </div>

  <!-- Current -->
  <div> 

    <!-- Header -->
    <div id="header">
      <h1>Courosel Data</h1>
    </div>

    <!--  Content-->
    <div class="mx-10">
      <br>
      <?php

        if(file_exists('admin/data/homeMainCarousel.json')){

          $current_data = file_get_contents('admin/data/homeMainCarousel.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            
            echo '</ul>';
            echo '<hr>';
          }

        }

      ?>
      <br>
    </div>

  </div>

  <!-- Adding element -->
  <div>
    <div id="header">
      <h1>Add New Image in Main Corousel</h1>
    </div>

    <div id="table-data">
      <form id="submit_form" method="post" action="admin/save-main-corousel.php">  
        <table width="100%" cellpadding="10px">
          <tr>
            <td width="150px"><label>Image Drive Link</label></td>
            <td ><input class ="border-black border rounded-lg " type="text" name="image" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Serial</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" id="submit" /></td>
          </tr>

        </table>
      </form>  
    </div>
  </div>

 


  <!-- Delete form -->
  
  <div>

    <!-- header -->
    <div id="header">
      <h1>Delete image from Main Corousel</h1>
    </div>
  
  
    <!-- content -->
    <div id="table-data">
      <form id="submit_form" method="post" action="admin/delete-main-corousel.php">  
        <table width="100%" cellpadding="10px">
          
          <tr>
            <td><label>Serial</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          </tr>
          <tr>
            <td></td>
            <td><input  class ="border-black border rounded-lg"  type="submit" name="submit" id="submit" /></td>
          </tr>
          
        </table>
      </form>  
    </div>
  
  </div>
</section>

<!-- Notable Alumni -->
<section id="alumni">
  <!-- Heading -->
  <div  class="bg-blue-100 h-10 text-center py-2">
    Notable Alumni
  </div>

  <!-- Current -->
  <div> 

    <!-- Header -->
    <div id="header">
      <h1>Notable Alumni Data</h1>
    </div>

    <!--  Content-->
    <div class="mx-10">
      <br>
      <?php

      // Distinguish Alumni
        echo '<div id="header" class="px-4">
        <h1>Distinguish Alumni Data</h1>
      </div>';
        if(file_exists('admin/data/alumnicarousel.json')){

          $current_data = file_get_contents('admin/data/alumnicarousel.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            echo '<li>'."Name-> ".$array_data[$i]['name'].'</li>';
            echo '<li>'."Class Year-> ".$array_data[$i]['class'].'</li>';
            echo '<li>'."Branch-> ".$array_data[$i]['branch'].'</li>';
            echo '<li>'."About-> ".$array_data[$i]['text'].'</li>';
            echo '</ul>';
            echo '<hr>';
          }

        }


      // Alumni in business

      echo '<div id="header" class="px-4">
        <h1>Business Alumni Data</h1>
      </div>';
        if(file_exists('admin/data/businessAlumni.json')){

          $current_data = file_get_contents('admin/data/businessAlumni.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            echo '<li>'."Name-> ".$array_data[$i]['name'].'</li>';
            echo '<li>'."Class Year-> ".$array_data[$i]['class'].'</li>';
            echo '<li>'."Branch-> ".$array_data[$i]['branch'].'</li>';
            echo '<li>'."About-> ".$array_data[$i]['text'].'</li>';
            echo '</ul>';
            echo '<hr>';
          }

        }

      // Alumni in Science And Technology

      echo '<div id="header" class="px-4">
        <h1>Science and Technology Alumni Data</h1>
      </div>';
        if(file_exists('admin/data/scienceAndTechnologyAlumni.json')){

          $current_data = file_get_contents('admin/data/scienceAndTechnologyAlumni.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            echo '<li>'."Name-> ".$array_data[$i]['name'].'</li>';
            echo '<li>'."Class Year-> ".$array_data[$i]['class'].'</li>';
            echo '<li>'."Branch-> ".$array_data[$i]['branch'].'</li>';
            echo '<li>'."About-> ".$array_data[$i]['text'].'</li>';
            echo '</ul>';
            echo '<hr>';
          }

        }

      // Alumni in civil Services

      echo '<div id="header" class="px-4">
        <h1>Civil Services Alumni Data</h1>
      </div>';
        if(file_exists('admin/data/civilServiceAlumni.json')){

          $current_data = file_get_contents('admin/data/scienceAndTechnologyAlumni.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            echo '<li>'."Name-> ".$array_data[$i]['name'].'</li>';
            echo '<li>'."Class Year-> ".$array_data[$i]['class'].'</li>';
            echo '<li>'."Branch-> ".$array_data[$i]['branch'].'</li>';
            echo '<li>'."About-> ".$array_data[$i]['text'].'</li>';
            echo '</ul>';
            echo '<hr>';
          }

        }

        // Alumni in Art and Entertainment
      
        echo '<div id="header" class="px-4">
        <h1>Art And Entertainment Alumni Data</h1>
      </div>';
        if(file_exists('admin/data/artAndEntertainmentAlumni.json')){

          $current_data = file_get_contents('admin/data/artAndEntertainmentAlumni.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            echo '<li>'."Name-> ".$array_data[$i]['name'].'</li>';
            echo '<li>'."Class Year-> ".$array_data[$i]['class'].'</li>';
            echo '<li>'."Branch-> ".$array_data[$i]['branch'].'</li>';
            echo '<li>'."About-> ".$array_data[$i]['text'].'</li>';
            echo '</ul>';
            echo '<hr>';
          }

        }
      ?>
      <br>
    </div>

  </div>

  <!-- Adding element -->
  <div>
    <div id="header">
      <h1>Add Notable Alumni in Data</h1>
    </div>

    <div id="table-data">
      <form id="submit_form" method="post" action="admin/save-notableAlumni.php">  
        <table width="100%" cellpadding="10px">
          <tr>
            <td width="150px"><label>Image Drive Link</label></td>
            <td ><input class ="border-black border rounded-lg " type="text" name="image" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Serial as per Catagory</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Name</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="name" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Class Year</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="class" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>About</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="text" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Branch</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="branch" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label for="cat">Choose Alumni Working Cataagory:</label></td>
            <td>
            <input type="select"/>
              <select id="cat" name="cat">
                <option value="data/alumnicarousel.json">Distinguish Alumni</option>
                <option value="data/artsAndEntertainmentAlumni.json">Arts and Entertainment</option>
                <option value="data/businessAlumni.json">Business</option>
                <option value="data/civilServiceAlumni.json">Civil Services</option>
                <option value="data/scienceAndTechnologyAlumni.json">Science and Technology</option>
              </select>
              
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" id="submit" /></td>
          </tr>

        </table>
      </form>  
    </div>
  </div>

 


  <!-- Delete form -->
  
  <div>

    <!-- header -->
    <div id="header">
      <h1>Delete Notable Alumni Data</h1>
    </div>
  
  
    <!-- content -->
    <div id="table-data">
      <form id="submit_form" method="post" action="admin/delete-notable Alumni.php">  
        <table width="100%" cellpadding="10px">
          
          <tr>
            <td><label>Serial According to category</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label for="cat">Choose Alumni Working Cataagory:</label></td>
            <td>
            <input type="select"/>
              <select id="cat" name="cat">
                <option value="data/alumnicarousel.json">Distinguish Alumni</option>
                <option value="data/artsAndEntertainmentAlumni.json">Arts and Entertainment</option>
                <option value="data/businessAlumni.json">Business</option>
                <option value="data/civilServiceAlumni.json">Civil Services</option>
                <option value="data/scienceAndTechnologyAlumni.json">Science and Technology</option>
              </select>
              
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input  class ="border-black border rounded-lg"  type="submit" name="submit" id="submit" /></td>
          </tr>
          
        </table>
      </form>  
    </div>
  
  </div>
</section>

<!-- Donations -->

<section id="donations">
  <!-- Heading -->
  <div  class="bg-blue-100 h-10 text-center py-2">
    Donations
  </div>

  <!-- Current -->
  <div> 

    <!-- Header -->
    <div id="header">
      <h1>Donations Data</h1>
    </div>

    <!--  Content-->
    <div class="mx-10">
      <br>
      <?php

      // Contributory Fund
        echo '<div id="header" class="px-4">
        <h1>Contributory Fund Data</h1>
      </div>';
        if(file_exists('admin/data/contributoryFund.json')){

          $current_data = file_get_contents('admin/data/contributoryFund.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            echo '<li>'."Name-> ".$array_data[$i]['name'].'</li>';
            echo '<li>'."Amount-> ".$array_data[$i]['amount'].'</li>';
            echo '<li>'."Purpose-> ".$array_data[$i]['purpose'].'</li>';
            echo '<li>'."Date-> ".$array_data[$i]['date'].'</li>';
            echo '</ul>';
            echo '<hr>';
          }

        }


      // Alumni in Scholarship and Medal

      echo '<div id="header" class="px-4">
        <h1>Scholarship and Medal Data</h1>
      </div>';
        if(file_exists('admin/data/ScholarshipAndMedals.json')){

          $current_data = file_get_contents('admin/data/ScholarshipAndMedals.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            echo '<li>'."Name-> ".$array_data[$i]['name'].'</li>';
            echo '<li>'."Amount-> ".$array_data[$i]['amount'].'</li>';
            echo '<li>'."Purpose-> ".$array_data[$i]['purpose'].'</li>';
            echo '<li>'."Date-> ".$array_data[$i]['date'].'</li>';
            echo '</ul>';
            echo '<hr>';
          }

        }

      // Alumni in Corpus Fund

      echo '<div id="header" class="px-4">
        <h1>Corpus Fund Data</h1>
      </div>';
        if(file_exists('admin/data/corpusFund.json')){

          $current_data = file_get_contents('admin/data/corpusFund.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            echo '<li>'."Name-> ".$array_data[$i]['name'].'</li>';
            echo '<li>'."Amount-> ".$array_data[$i]['amount'].'</li>';
            echo '<li>'."Purpose-> ".$array_data[$i]['purpose'].'</li>';
            echo '<li>'."Date-> ".$array_data[$i]['date'].'</li>';
            echo '</ul>';
            echo '<hr>';
          }

        }

      
      ?>
      <br>
    </div>

  </div>

  <!-- Adding element -->
  <div>
    <div id="header">
      <h1>Add Donations in Data</h1>
    </div>

    <div id="table-data">
      <form id="submit_form" method="post" action="admin/save-donationscat.php">  
        <table width="100%" cellpadding="10px">
          <tr>
            <td width="150px"><label>Image Drive Link</label></td>
            <td ><input class ="border-black border rounded-lg " type="text" name="image" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Serial as per Catagory</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Name</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="name" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Amount</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="amount" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Purpose</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="purpose" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Date</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="date" name="date" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label for="cat">Choose Alumni Working Cataagory:</label></td>
            <td>
            <input type="select"/>
              <select id="cat" name="cat">
                <option value="data/contributoryFund.json">Contributory Fund</option>
                <option value="data/scholarshipsAndMedals.json">Scholarship And Medals</option>
                <option value="data/corpusFund.json">Corpus Fund</option>
                
              </select>
              
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" id="submit" /></td>
          </tr>

        </table>
      </form>  
    </div>
  </div>

 


  <!-- Delete form -->
  
  <div>

    <!-- header -->
    <div id="header">
      <h1>Delete Donation Data</h1>
    </div>
  
  
    <!-- content -->
    <div id="table-data">
      <form id="submit_form" method="post" action="admin/delete-donationsCat.php">  
        <table width="100%" cellpadding="10px">
          
          <tr>
            <td><label>Serial According to category</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label for="cat">Choose Alumni Working Cataagory:</label></td>
            <td>
            <input type="select"/>
              <select id="cat" name="cat">
                <option value="/data/contributoryFund.json">Contributory Fund</option>
                <option value="/data/scholarshipsAndMedals.json">Scholarship And Medals</option>
                <option value="admin/data/corpusFund.json">Corpus Fund</option>
              </select>
              
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input  class ="border-black border rounded-lg"  type="submit" name="submit" id="submit" /></td>
          </tr>
          
        </table>
      </form>  
    </div>
  
  </div>
</section>

<section id="events">
  <!-- Heading -->
  <div  class="bg-blue-100 h-10 text-center py-2">
    Events 
  </div>

  <!-- Current -->
  <div> 

    <!-- Header -->
    <div id="header">
      <h1>Events Data</h1>
    </div>

    <!--  Content-->
    <div class="mx-10">
      <br>
      <?php

        if(file_exists('admin/data/events.json')){

          $current_data = file_get_contents('admin/data/events.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            echo '<li>'."Title-> ".$array_data[$i]['title'].'</li>';
            echo '<li>'."Date-> ".$array_data[$i]['date'].'</li>';
            echo '<li>'."Link-> ".$array_data[$i]['link'].'</li>';
            
            echo '</ul>';
            echo '<hr>';
          }

        }

      ?>
      <br>
    </div>

  </div>

  <!-- Adding element -->
  <div>
    <div id="header">
      <h1>Add Events</h1>
    </div>

    <div id="table-data">
      <form id="submit_form" method="post" action="admin/save-events.php">  
        <table width="100%" cellpadding="10px">
          <tr>
            <td width="150px"><label>Image Drive Link</label></td>
            <td ><input class ="border-black border rounded-lg " type="text" name="image" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Serial</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Title</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="title" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Info</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="info" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Date in format (YYYY MM DD)</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="date" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label>Registration link or NA</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="text" name="link" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" id="submit" /></td>
          </tr>

        </table>
      </form>  
    </div>
  </div>

 


  <!-- Delete form -->
  
  <div>

    <!-- header -->
    <div id="header">
      <h1>Delete Events</h1>
    </div>
  
  
    <!-- content -->
    <div id="table-data">
      <form id="submit_form" method="post" action="admin/delete-events.php">  
        <table width="100%" cellpadding="10px">
          
          <tr>
            <td><label>Serial</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          </tr>
          <tr>
            <td></td>
            <td><input  class ="border-black border rounded-lg"  type="submit" name="submit" id="submit" /></td>
          </tr>
          
        </table>
      </form>  
    </div>
  
  </div>
</section>

<!-- Memories -->
<section id="memories">
  <!-- Heading -->
  <div  class="bg-blue-100 h-10 text-center py-2">
    Memories
  </div>

  <!-- Current -->
  <div> 

    <!-- Header -->
    <div id="header">
      <h1>Memories Data</h1>
    </div>

    <!--  Content-->
    <div class="mx-10">
      <br>
      <?php

      // Old campus
        echo '<div id="header" class="px-4">
        <h1>Old Campus Data</h1>
      </div>';
        if(file_exists('admin/data/oldcampus.json')){

          $current_data = file_get_contents('admin/data/oldcampus.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
        
            echo '</ul>';
            echo '<hr>';
          }

        }


      // MeetUps

      echo '<div id="header" class="px-4">
        <h1>MeetUps Data</h1>
      </div>';
        if(file_exists('admin/data/meetups.json')){

          $current_data = file_get_contents('admin/data/meetups.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            
            echo '</ul>';
            echo '<hr>';
          }

        }

      // Memories -events

      echo '<div id="header" class="px-4">
        <h1>Events Memories Data</h1>
      </div>';
        if(file_exists('admin/data/mem-events.json')){

          $current_data = file_get_contents('admin/data/mem-events.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            
            echo '</ul>';
            echo '<hr>';
          }

        }

      //Batch 1950

      echo '<div id="header" class="px-4">
        <h1>Batch 1950 Data</h1>
      </div>';
        if(file_exists('admin/data/batch-1950.json')){

          $current_data = file_get_contents('admin/data/batch-1950.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            
            echo '</ul>';
            echo '<hr>';
          }

        }

        //Batch 1960

      echo '<div id="header" class="px-4">
      <h1>Batch 1960 Data</h1>
    </div>';
      if(file_exists('admin/data/batch-1960.json')){

        $current_data = file_get_contents('admin/data/batch-1960.json');
        $array_data = json_decode($current_data, true);
        echo '<hr>';
        for($i = 0; $i<count($array_data); $i++){
          $get = '"'.$array_data[$i]['image'].'"';
          echo '<ul>';
          echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
          echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
          onClick="showModal()"></li>';
          
          echo '</ul>';
          echo '<hr>';
        }

      }
      //Batch 1970

      echo '<div id="header" class="px-4">
        <h1>Batch 1970 Data</h1>
      </div>';
        if(file_exists('admin/data/batch-1970.json')){

          $current_data = file_get_contents('admin/data/batch-1970.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            
            echo '</ul>';
            echo '<hr>';
          }

        }
        //Batch 1980

      echo '<div id="header" class="px-4">
      <h1>Batch 1980 Data</h1>
    </div>';
      if(file_exists('admin/data/batch-1980.json')){

        $current_data = file_get_contents('admin/data/batch-1980.json');
        $array_data = json_decode($current_data, true);
        echo '<hr>';
        for($i = 0; $i<count($array_data); $i++){
          $get = '"'.$array_data[$i]['image'].'"';
          echo '<ul>';
          echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
          echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
          onClick="showModal()"></li>';
          
          echo '</ul>';
          echo '<hr>';
        }

      }
      //Batch 1990

      echo '<div id="header" class="px-4">
        <h1>Batch 1990 Data</h1>
      </div>';
        if(file_exists('admin/data/batch-1990.json')){

          $current_data = file_get_contents('admin/data/batch-1990.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            
            echo '</ul>';
            echo '<hr>';
          }

        }
        //Batch 2000

      echo '<div id="header" class="px-4">
      <h1>Batch 2000 Data</h1>
    </div>';
      if(file_exists('admin/data/batch-2000.json')){

        $current_data = file_get_contents('admin/data/batch-2000.json');
        $array_data = json_decode($current_data, true);
        echo '<hr>';
        for($i = 0; $i<count($array_data); $i++){
          $get = '"'.$array_data[$i]['image'].'"';
          echo '<ul>';
          echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
          echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
          onClick="showModal()"></li>';
          
          echo '</ul>';
          echo '<hr>';
        }

      }
      //Batch 2010

      echo '<div id="header" class="px-4">
        <h1>Batch 2010 Data</h1>
      </div>';
        if(file_exists('admin/data/batch-2010.json')){

          $current_data = file_get_contents('admin/data/batch-2010.json');
          $array_data = json_decode($current_data, true);
          echo '<hr>';
          for($i = 0; $i<count($array_data); $i++){
            $get = '"'.$array_data[$i]['image'].'"';
            echo '<ul>';
            echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
            echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
            onClick="showModal()"></li>';
            
            echo '</ul>';
            echo '<hr>';
          }

        }
        //Batch 2020

      echo '<div id="header" class="px-4">
      <h1>Batch 2020 Data</h1>
    </div>';
      if(file_exists('admin/data/batch-2020.json')){

        $current_data = file_get_contents('admin/data/batch-2020.json');
        $array_data = json_decode($current_data, true);
        echo '<hr>';
        for($i = 0; $i<count($array_data); $i++){
          $get = '"'.$array_data[$i]['image'].'"';
          echo '<ul>';
          echo '<li>'."Serial-> ".$array_data[$i]['serial'].'</li>';
          echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
          onClick="showModal()"></li>';
          
          echo '</ul>';
          echo '<hr>';
        }

      }
      ?>
      <br>
    </div>

  </div>

  <!-- Adding element -->
  <div>
    <div id="header">
      <h1>Add Memories in Data</h1>
    </div>

    <div id="table-data">
      <form id="submit_form" method="post" action="admin/save-memories.php">  
        <table width="100%" cellpadding="10px">
          <tr>
            <td width="150px"><label>Image Drive Link</label></td>
            <td ><input class ="border-black border rounded-lg " type="text" name="image" autocomplete="off" /></td>
          </tr>
          <tr>
            <td><label>Serial as per Catagory</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          
          <tr>
            <td><label for="cat">Choose Memories Cataagory:</label></td>
            <td>
            <input type="select"/>
              <select id="cat" name="cat">
                <option value="data/oldcampus.json">old Campus</option>
                <option value="data/meetups.json">Meet Ups</option>
                <option value="data/mem-events.json">mem-events</option>
                <option value="data/batch1950.json">Batch 1950 - 1959</option>
                <option value="data/batch1960.json">Batch 1960 - 1969</option>
                <option value="data/batch1970.json">Batch 1970 - 1979</option>
                <option value="data/batch1980.json">Batch 1980 - 1989</option>
                <option value="data/batch1990.json">Batch 1990 - 1999</option>
                <option value="data/batch2000.json">Batch 2000 - 2009</option>
                <option value="data/batch2010.json">Batch 2010 - 2019</option>
                <option value="data/batch2020.json">Batch 2020 - 2029</option>

              </select>
              
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" id="submit" /></td>
          </tr>

        </table>
      </form>  
    </div>
  </div>

 


  <!-- Delete form -->
  
  <div>

    <!-- header -->
    <div id="header">
      <h1>Delete Memories Data</h1>
    </div>
  
  
    <!-- content -->
    <div id="table-data">
      <form id="submit_form" method="post" action="admin/delete-memories.php">  
        <table width="100%" cellpadding="10px">
          
          <tr>
            <td><label>Serial According to category</label></td>
            <td>
              <input  class ="border-black border rounded-lg" type="number" name="serial" autocomplete="off" />   
            </td>
          </tr>
          <tr>
            <td><label for="cat">Choose Memories Cataagory:</label></td>
            <td>
            <input type="select"/>
              <select id="cat" name="cat">
                <option value="data/oldcampus.json">old Campus</option>
                <option value="data/meetups.json">Meet Ups</option>
                <option value="data/mem-events.json">mem-events</option>
                <option value="data/batch1950.json">Batch 1950 - 1959</option>
                <option value="data/batch1960.json">Batch 1960 - 1969</option>
                <option value="data/batch1970.json">Batch 1970 - 1979</option>
                <option value="data/batch1980.json">Batch 1980 - 1989</option>
                <option value="data/batch1990.json">Batch 1990 - 1999</option>
                <option value="data/batch2000.json">Batch 2000 - 2009</option>
                <option value="data/batch2010.json">Batch 2010 - 2019</option>
                <option value="data/batch2020.json">Batch 2020 - 2029</option>

              </select>
              
            </td>
          </tr>
          <tr>
            <td></td>
            <td><input  class ="border-black border rounded-lg"  type="submit" name="submit" id="submit" /></td>
          </tr>
          
        </table>
      </form>  
    </div>
  
  </div>
</section>

<!-- Ordering form -->
<section>

  <div id="header">
    <h1>Reordering Form Data in JSON File</h1>
  </div>

  <br>
  <br>
  <?php

    if(file_exists('json/student_data.json')){

      $current_data = file_get_contents('json/student_data.json');
      $array_data = json_decode($current_data, true);
      echo '<hr>';
      

    
  echo '<div id="table-data">';

    echo '<form id="submit_form" method="post" action="order-form.php">';  
      echo '<table width="100%" cellpadding="10px">';
      for($i = 0; $i<count($array_data); $i++){
      
        //echo '<li>';
      $get = "serial".$i; 
        echo '<tr><label>Name-> '.$array_data[$i]['name'].' | Old Serial-> '.$array_data[$i]['serial'].' | New Serial->  '.'</label><input  class ="border-black border  rounded-lg" type="number" name='.$get.' autocomplete="off" />   </tr>';
        //echo '</li>';
        echo '<hr>';
      }
        
        
        echo'<tr>
          <td></td>
          <td><input type="submit" name="submit" id="submit" /></td>
        </tr>';
        
      echo '</table>';
    echo '</form>';  
  echo '</div>';

    }

  ?>


</section>


  </body>
</html>