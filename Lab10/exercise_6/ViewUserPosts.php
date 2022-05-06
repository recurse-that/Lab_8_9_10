
<html>
    <head>
	<title>View User Posts Page</title>
    	<link rel="stylesheet" href="styles.css">
	
    </head>
	<body>
	 <br>
	<div class='Container'>
	
	<ul id="Posts">
     	 <?php
	
		$user_id = $_POST['value'];
		echo "<div> <h3> Username: $user_id </h3></div>";
	
		$mysqli = new mysqli("129.237.87.5", "i163e935", "ooCh4ek3", "i163e935"); 
 		$mysqli->query("SHOW TABLES FROM i163e935");
		
		/* check connection */ 
		if ($mysqli->connect_errno) { 
   		  printf("Connect failed: %s\n", $mysqli->connect_error); 
    		  exit(); 
		} 

		$query = "SELECT author_id, content FROM Posts WHERE author_id='$user_id'";
		/* Check if the username exists in user database */
		if ($result = $mysqli->query($query)) { 
   			 /* fetch associative array */ 
   			 while ($row = $result->fetch_assoc()) { 
				$cur = $row["content"];
       			 	echo "<li> $cur </li>"; 
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
