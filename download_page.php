<html>
<body>
<h3 >Download Page</h3>

<!-- Table styles-->
<style>
  #ourtable {border-collapse: collapse; width: 100%}
  #ourtable, #ourtable td {border: 1px solid #070}
  
</style>


<?php 
	
	
	// Connecting db.php (connecting MySQL database)
	include ("db.php");

?>

<!-- Table head -->
<table align="center" border="1" width="100%" id="ourtable">
<tr>
	<td align="center" style="width: 20%">File URL</td>
	<td align="center" style="width: 80%">Description</td>
</tr>
</table>

<?php  	 
	$result = mysql_query("SELECT url,label,description FROM file_info",$db);
	$myrow = mysql_fetch_array($result);
	
	// Do-While loop shows all the information stored in the database:
	do {
// With php function printf  two table cells aree added to HTML 
// The first table cell contains label and url of the file
// The second table cell contains description of the file
printf("<table align='center' border='1' width='100%%' id='ourtable'>
			<tr>
				<td align='center' style='width: 20%%'>			
					<a href='%s'>%s</a>			
				</td>
				<td align='center' style='width: 80%%'>
					%s
				</td>
			</tr>
			</table>",$myrow["url"],$myrow["label"],$myrow["description"]);
		}		
		while ($myrow = mysql_fetch_array($result));
		//The loop is executed, connection to the MySQL database closes
	mysql_close();	
?>

</br>
</label> <a href=http://212.107.229.36/proj2/index.php>Main Page of File Store</a>
</body>
</html>