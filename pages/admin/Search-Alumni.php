<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.7.3/tailwind.min.css">
  <!-- <link rel="stylesheet" href="../style.css"> -->

  <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="/dtualumni/css/style.css">
</head>

<body>

<div id="main">
    <!-- Section Form -->
    <div>
      <div id="header">
        <h1>Join the DTU's Alumni Network</h1>
      </div>

      <!--  Content-->
      <div class="mx-10">



			<?php

				if(file_exists('data/alumni.json')){

					$current_data = file_get_contents('data/alumni.json');
					$array_data = json_decode($current_data, true);
					echo '<hr>';
					if($_POST['cat']=="1"){
						$z=1;
					}
					else{
						$z = $_POST['cat'];
					}
					echo "<a href="."/pages/admin.php".">Get back to Admin page</a>";
					//echo $_POST['cat'].' '.$_POST['input'];
					echo '<br>';
					for($i = 0; $i<count($array_data); $i++){
						
						if($array_data[$i][$z]==$_POST['input']){
							$get = '"'.$array_data[$i]['image'].'"';
							echo '<br>';
							if($_POST['field']==1){
								echo '<ul>';
								echo '<li>'."Name -> ".$array_data[$i]['fname'].' '. $array_data[$i]['sname'].'</li>';
								echo '<li>'."E-Mail -> ".$array_data[$i]['email'].'</li>';
								echo '<li>'."Phone -> ".$array_data[$i]['phone'].'</li>';
								echo '<li>'."Batch-> ".$array_data[$i]['batch'].'</li>';

								echo '</ul>';
								echo '<hr>';
							}
							else if($_POST['field']==2){
								echo '<ul>';
								echo '<li>'."Name -> ".$array_data[$i]['name'].'</li>';
								echo '<li>'."Branch -> ".$array_data[$i]['branch'].'</li>';
								echo '<li>'."Phone -> ".$array_data[$i]['phone'].'</li>';
								echo '<li>'."Batch-> ".$array_data[$i]['batch'].'</li>';
								echo '<li>'."About-> ".$array_data[$i]['about'].'</li>';
								echo '<li>'."Image-> ".'<img class="h-24 w-60 object-cover rounded-md hover:cursor-pointer" src='.$get.' alt="Neil image"
								onClick="showModal()"></li>';
							
								echo '</ul>';
								echo '<hr>';
							}
							
						}
					}

				}
				
			?>
		</div>
	</div>
</div>
</body>
</html>
