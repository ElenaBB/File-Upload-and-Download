<html>
<body>
	<?php
		
		include('db.php');

		// Checking values "label and description" for being filled
		if(isset($_POST['label_p'])) {$label = $_POST['label_p'];}
		if(isset($_POST['description_p'])) {$description = $_POST['description_p'];}


		// File name and the path to transfer files
		$uploaddir = '/var/www/proj2/files/';
		$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
		$filename = basename($_FILES['userfile']['name']);
		
		
		// MySQL Tabel name is a variable name here, for a better manipulation 		
		$file_table = "file_info";		
		
		
		// url is defined to transfer to the database
		if ($filename != ""){
			$url = "http://212.107.229.36/proj2/files/" . $filename;
		}
		else $url = "";
		
		

		// Checking if url, label, description are not/empty		
		if($label != "" and $url != "" and $description != "") {
			// If the variables are not empty, data is transfered to the DB
			
			$query = "INSERT INTO $file_table (url,label,description) VALUES('$url','$label','$description')"; 
			// mysql_query opens DB and executes query			
			mysql_query($query) or die(mysql_error()); 
			
			// 
			mysql_close();					
			//  move_uploaded_file - uploading file to the sever
			if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
				echo "The file ".  basename( $_FILES['userfile']['name']). " has been uploaded";
			} else{
				echo "There was an error uploading the file, please try again!";
			}		
		}
		else {
			// If any of url, label, description is empty, error message is displayed
			echo "<p>Debug: Please input all info about file.</p>";
		}
		
	?>

</br>
<a href="http://212.107.229.36/proj2/upload_page.php">Upload page</a></br>
<a href=http://212.107.229.36/proj2/index.php>Main Page of File Store</a>
</body>
</html>