
<html>
    <head>
	<title>Delete Posts Page</title>
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

		$name = $_GET['post'];
	
		$i = 0;
		
		foreach($name as $post_id) {
			echo "Deleting post with ID: " .$post_id. "<br />";
			$queries[$i] = "DELETE FROM Posts WHERE post_id=" .$post_id;
			$query = "DELETE FROM Posts WHERE post_id=" .$post_id;
			$i++;
		}
		
		
		if ($mysqli->query($query) == TRUE) {
			while ($row = $result->fetch_assoc()) { 
				
			}
		}
		
		/* close connection */ 
		$mysqli->close(); 

		
      	?>
  	</body>

</html>
