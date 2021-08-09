<?php      
    $servername = "localhost";  
    $username = "root";  
    $password = "";  
    $db_name = "login";  
      
    $con = mysqli_connect($servername, $username, $password, $db_name);  
    if(mysqli_connect_error()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  