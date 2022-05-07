<html>
    <head>
	<title>Users</title>
    	<link rel="stylesheet" href="styles.css">
	
    </head>
	<body>
	 <br>
	<div class = "Container">
		<h3> Users: </h3>
	<ul> 
     	 <?php
	
		$mysqli = new mysqli("129.237.87.5", "i163e935", "ooCh4ek3", "i163e935"); 
		
		/* check connection */ 
		if ($mysqli->connect_errno) { 
   		  printf("Connect failed: %s\n", $mysqli->connect_error); 
    		  exit(); 
		} 


		$query = "SELECT user_id FROM Users";
		/* Check if the username exists in user database */
		if ($result = $mysqli->query($query)) { 
   			 /* fetch associative array */ 
   			 while ($row = $result->fetch_assoc()) { 
				echo "<li>".$row["Name"], $row["user_id"]."</li>";
    			}
 
    			/* free result set */ 
    			$result->free(); 
		} else {
			echo "FAILED";
		}
  			
		/* close connection */ 
		$mysqli->close(); 

		
      	?>
	</ul>
	</div>
  	</body>

</html>