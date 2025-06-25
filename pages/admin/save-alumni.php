<?php

if($_POST['fname'] != '' && $_POST['batch'] != '' && $_POST['batch'] != ''){
	
	if(file_exists('data/alumni.json')){

		$current_data = file_get_contents('data/alumni.json');
		$array_data = json_decode($current_data, true);

		// Image link code
		$k = 0;
		$in = $_POST['image'];
		$co = ""; $ou = "https://drive.google.com/uc?export=view&id=";
		for($i = 0 ; $i<strlen($in)-1; $i++){
			if($k == 1 && $in[$i]=='/'){
				$k=0;
			}
			if($k==1){
				$co .=$in[$i];
			}
		   
			if($k==0 && $in[$i]=='d' && $in[$i+1] == '/'){
				$k=1;
				$i++;
				
			}
	
		}
		$ou .= $co;
		
		
		$new_data = array(
								'fname' => $_POST['fname'],
								'sname' => $_POST['sname'],
								'email' => $_POST['email'],
								'phone' => $_POST['phone'],
								'batch' => $_POST['batch'],
								'course' => $_POST['course'],
								'about' => $_POST['about'],
								'image' => $ou
							);
		

		$array_data[] = $new_data;

		
		$json_data = json_encode($array_data,JSON_PRETTY_PRINT);

		if(file_put_contents('data/alumni.json', $json_data))
		{
			echo "<h3>Successfully saved data.</h3>";
			echo "<a href="."/index.php".">Get back to Home page</a>";
		}else{
			echo "<h3>UnSuccessfully saved data.</h3>";
		}
	}else{
		echo "<h3>JSON file not exist.</h3>";
	}
}else{
	echo "<h3>All form fields are required.</h3>";
}

?>
