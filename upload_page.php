<html>
<body>
<h3>Upload Page</h3>
<!-- Upload page form -->

<!-- The method to transfer files is POST -->
<form enctype="multipart/form-data" action="upload_file.php" method="post">
	<label>You can upload file with max size of 10Mb.</label></br>
	<input type="hidden" name="MAX_FILE_SIZE" value="30000000"> 
		
	<!-- The button to select files from PC-->	
	<label>Choose file:</label> <input name="userfile" type="file">

	</br>
	<!-- File label field -->
	<label>Please, enter Label: </label>
	<input name= "label_p" type="text" value="">
	</br>

	<!-- File description field -->
	<label>Please, enter Description: </label>
	</br>
	<textarea name="description_p" type="text" id="comments" rows="5" cols="60" value=""></textarea>
	</br>
	
	<!-- Upload button-->
	<input type="submit" value="Send File">
</form>
<!-- End of form -->

</br>
</label> <a href=http://212.107.229.36/proj2/index.php>Main Page of File Store</a>
</br>
</body>
</html>