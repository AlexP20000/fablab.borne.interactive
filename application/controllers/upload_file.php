<?php
	$name = strtolower(addslashes(strip_tags(trim($this->input->post('pseudo')))));

	if(isset($_FILES['picture'])){
		/* Printing the FILE constant array */
			echo '<pre>'; print_r($_FILES); echo '</pre>';
		/* Differents file propreties */
			$file_name  = $_FILES['picture']['name'];
			$file_temp  = $_FILES['picture']['tmp_name'];
			$file_error = $_FILES['picture']['error'];
			$file_type  = $_FILES['picture']['type'];

		/* Filtring the datas to get a correct filename */
			if(!empty($file_type)){
				$type = explode('/', $file_type)[1];
				$name = $name.'.'.$type;
			}
			else{
				$name = null;
			}

		/* move the file the correct path */
			$path = 'C:/wamp64/www/open_mag/assets/back_office/profils/'.$name;
			//$path = '/var/www/html/licence/lic46/open_factory_manager/assets/back_office/profils/'.$name;
			if(move_uploaded_file($file_temp, $path)){
				echo 'file uploaded --> ';
				echo $name;
			}
			else{
				$name = null;
				echo 'error';
			}
	}
	else{
		echo 'no file';
	}
?>