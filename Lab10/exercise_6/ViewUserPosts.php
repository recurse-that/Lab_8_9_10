
<html>
    <head>
	<title>View User Posts Page</title>
    	<link rel="stylesheet" href="styles.css">
	
    </head>
	<body>
	 <br>
     	 <?php
		foreach($_POST as $users_id) {
			echo ($user_ids['Users']);
		}
		printf( $_POST['value']);

	
		$mysqli = new mysqli("129.237.87.5", "i163e935", "ooCh4ek3", "i163e935"); 
 		$mysqli->query("SHOW TABLES FROM i163e935");
		
		/* check connection */ 
		if ($mysqli->connect_errno) { 
   		  printf("Connect failed: %s\n", $mysqli->connect_error); 
    		  exit(); 
		} 


		/* close connection */ 
		$mysqli->close(); 

		
      	?>
  	</body>

</html>
