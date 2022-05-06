<html>
    <head>
	<title>Results Page</title>
    	<link rel="stylesheet" href="styles.css">
	
    </head>
	<body>
	 <br>
     	 <?php
		$mysqli = new mysqli("129.237.87.5", "i163e935", "ooCh4ek3", "i163e935"); 
 
		/* check connection */ 
		if ($mysqli->connect_errno) { 
   		  printf("Connect failed: %s\n", $mysqli->connect_error); 
    		  exit(); 
		} 

		/* sql to add new user ID */ 
       		$user_id = $_POST['UserID'];
		$addUserID = "INSERT INTO Users (user_id) VALUES ('$user_id')";
		
		/* try to add user and print message */
		if ($mysqli->query($addUserID) === TRUE) {
  			echo "<div> $user_id added successfully</div>";
		} else {
  			echo "Error adding user " . $mysqli->error;
		}



		/* close connection */ 
		$mysqli->close(); 

		
      	?>
  	</body>

</html>

