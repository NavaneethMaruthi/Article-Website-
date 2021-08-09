<?php			
		$servername = "localhost";
		$username = "root";
		$password = "";			//Enter your MySQL password
		$db_name = "login";		//Enter the name of your Database, which is 'football' in this case
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $db_name);
		//Check connection
		if ($conn->connect_error)
			die("Connection failed: " . $conn->connect_error);
			
		session_start();
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$username = $_POST["user"]; 
			$password = $_POST["pass"]; 
			
		}
		$sql=mysqli_query($conn,"SELECT * FROM admin where Username = '$username'");
		if(mysqli_num_rows($sql)>0)
		{
			echo "User Already Exists"; 
			exit;
		}
		$sql1=mysqli_query($conn,"INSERT INTO admin(Username, Password) VALUES('$username', '$password')");
		echo "<script> 
		alert('Suceessfull Regsitration!!');
		document.location = 'index.html';
	   </script>";
		//header ("Location: index.html?status=success");





// 		$query = "SELECT * FROM login WHERE Username = '".$username."' AND Password = '".$password."';";  
// 		$result = $conn->query($query);
//     		if($result->num_rows == 0)
//     		{
//     			 echo "<script> 
//     			 		alert('Successfull!!!');
//     			 		document.location = 'index.html';
//     			      </script>";
//     			 exit;
//        		}
       		
//     		$conn->close();
//
 ?>