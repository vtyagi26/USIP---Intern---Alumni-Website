<?php

	
	if(file_exists('data/announce.json')){

		$current_data = file_get_contents('data/announce.json');
		$array_data = json_decode($current_data, true);
        // array_pop($array_data);
		$new_data = array(
								'visible' => $_POST['visible'],
								'data' => $_POST['data'],
                                'link' => $_POST['link']
							);
		

		$array_data[0] = $new_data;

		$json_data = json_encode($array_data,JSON_PRETTY_PRINT);

		if(file_put_contents('data/announce.json', $json_data))
		{
			echo "<h3>Successfully saved data in JSON file.</h3>";
			echo "<a href="."/pages/admin.php".">Get back to admin page</a>";
		}else{
			echo "<h3>UnSuccessfully saved data in JSON file.</h3>";
		}
	}else{
		echo "<h3>JSON file not exist.</h3>";
	}


?>
