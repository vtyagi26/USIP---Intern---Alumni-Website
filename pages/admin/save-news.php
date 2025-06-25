<?php



if($_POST['title'] != '' && $_POST['date'] != '' && $_POST['serial'] != '' && $_POST['info'] != ''){
	
	if(file_exists('data/news.json')){

		$current_data = file_get_contents('data/news.json');
		$array_data = json_decode($current_data, true);
		if($array_data==NULL){ $lenj = 0;}
		else{$lenj = count($array_data) -1;}
		
		$news = $_POST['serial'];
		
		
		$new_data = array(
								'title' => $_POST['title'],
								'date' => $_POST['date'],
								'serial' => $_POST['serial'],
                                'info' => $_POST['info']
							);
		

		$array_data[] = $new_data;

		if($lenj >= $news){
			$sav = $array_data[$lenj+1];
			for($i = $lenj; $i>=$news-1 ; $i--){
				
				$array_data[$i+1] = $array_data[$i];
				$array_data[$i+1]['serial'] = "".$i+2; 
			}
			$array_data[$news-1] = $sav;
			$array_data[$news-1]['serial'] = "".$news; 
			echo "<h1>Hi</h1>";

		}
		$json_data = json_encode($array_data,JSON_PRETTY_PRINT);

		if(file_put_contents('data/news.json', $json_data))
		{
			echo "<h3>Successfully saved data in JSON file.</h3>";
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
