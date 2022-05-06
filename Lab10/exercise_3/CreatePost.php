
<html>
    <head>
	<title>Posts Page</title>
    	<link rel="stylesheet" href="styles.css">
	
    </head>
	<body>
	 <br>
     	 <?php
	
		$mysqli = new mysqli("129.237.87.5", "i163e935", "ooCh4ek3", "i163e935"); 
 		$mysqli->query("SHOW TABLES FROM i163e935");
		
		/* check connection */ 
		if ($mysqli->connect_errno) { 
   		  printf("Connect failed: %s\n", $mysqli->connect_error); 
    		  exit(); 
		} 

		$user_id = $_POST['UserID'];
		$content = $_POST['PostContent'];


		/* Add the new posts to the post database */
		$addPost = "INSERT INTO Posts (content, author_id) VALUES ('$content', '$user_id')";

		$query = "SELECT user_id FROM Users WHERE user_id = '$user_id'";
		/* Check if the username exists in user database */
		if ($result = $mysqli->query($query)) { 
   			 /* fetch associative array */ 
   			 while ($row = $result->fetch_assoc()) { 
       			 	printf ("%s (%s)\n", $row["Name"], $row["user_id"]); 
    			} 
			/* confirm user typed something in the post section first */
			if (strlen($content) == 0) {
				echo "Error adding post, type something before posting";
			} else {
				if ($mysqli->query($addPost) === TRUE) {
					echo "Post Added";
				}
			
			}	

 
    			/* free result set */ 
    			$result->free(); 
		} 
  			
		/* close connection */ 
		$mysqli->close(); 

		
      	?>
  	</body>

</html>
