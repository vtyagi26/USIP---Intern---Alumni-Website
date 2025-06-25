<?php

if($_POST['serial'] != '' && $_POST['cat'] != ''){
	$link = $_POST['cat'];
	
	if(file_exists($link)){

		$current_data = file_get_contents($link);
		$array_data = json_decode($current_data, true);
        $news = $_POST['serial']-1;
		if($array_data==NULL){ $lenj = 0;}
		else{$lenj = count($array_data) -1;}
		
		//$sav = $array_data[$lenj+1];
		for($i = $news; $i<$lenj ; $i++){
				
				$array_data[$i] = $array_data[$i+1];
				$array_data[$i]['serial'] = "".$i+1; 
		}
        array_pop($array_data);
		
		$json_data = json_encode($array_data,JSON_PRETTY_PRINT);

		if(file_put_contents($link, $json_data))
		{
			echo "<h3>Successfully deleted data.</h3>";
			echo "<a href="."/pages/admin.php".">Get back to admin page</a>";

		}else{
			echo "<h3>UnSuccessfully saved data in JSON file.</h3>";
		}
	}else{
		echo "<h3>JSON file not exist.</h3>";
	}
}else{
	echo "<h3>All form fields are required.</h3>";
}

?>
