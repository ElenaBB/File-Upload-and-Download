       <?php  
      
        $host = "localhost";  
        $db_name = "file_store";  
          
        // Username and password to connect the database  
        $username = "file_store";  
        $password = "123456fs";  
          
        $db = mysql_connect("$host","$username","$password");  
          
        if (!$db) {  
            // If connection to MySQL failed, the program execution stops  
            exit(mysql_error());  
            echo "DB not connected!";  
        }  
        else {  
            // If connection to MySQL is successful, we select the database with function mysql_select_db  
            mysql_select_db("$db_name",$db);          
            echo "DB connected. </br>";         
        }  
        // Coding utf8 to exchange data between web-server and MySQL database  
        mysql_query("SET NAMES utf8");  
    ?>  

