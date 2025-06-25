<?php


	
	if(file_exists('json/student_data.json')){

		$current_data = file_get_contents('json/student_data.json');
		$array_data = json_decode($current_data, true);
        $new_data = $array_data;
        //$news = $_POST['serial']-1;
		if($array_data==NULL){ $lenj = 0;}
		else{$lenj = count($array_data) -1;}
		
		//$sav = $array_data[$lenj+1];
		for($i = 0; $i<=$lenj ; $i++){
				
				$new_data[$_POST['serial'.$i]-1] = $array_data[$i];
				$new_data[$_POST['serial'.$i]-1]['serial'] = $_POST['serial'.$i];
		}
        //array_pop($array_data);
		
		$json_data = json_encode($new_data,JSON_PRETTY_PRINT);

		if(file_put_contents('json/student_data.json', $json_data))
		{
			echo "<h3>Successfully reordered data in JSON file.</h3>";
			echo "<a href="."/pages/admin.php".">button</a>";
		}else{
			echo "<h3>UnSuccessfully saved data in JSON file.</h3>";
		}
	}else{
		echo "<h3>JSON file not exist.</h3>";
	}


?>

