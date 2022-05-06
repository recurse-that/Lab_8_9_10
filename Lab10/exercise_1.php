<?php 
$mysqli = new mysqli("129.237.87.5", "i163e935", "ooCh4ek3", 
"i163e935"); 
 
/* check connection */ 
if ($mysqli->connect_errno) { 
    printf("Connect failed: %s\n", $mysqli->connect_error); 
    exit(); 
} 

// sql to create table
$createUsersTable = "CREATE TABLE Users (
user_id VARCHAR(255) NOT NULL,
PRIMARY KEY (user_id)
)";


// sql to create postsTable
$createPostsTable = "CREATE TABLE Posts (
post_id MEDIUMINT NOT NULL AUTO_INCREMENT,
content VARCHAR(255) NOT NULL,
author_id VARCHAR(255) NOT NULL,
PRIMARY KEY(post_id)

) ENGINE=INNODB";

// sql to join tables together
$joinTables = "(
	SELECT Users.user_id, Posts.author_id
	FROM Users
	INNER JOIN Posts
	ON Users.user_id=Posts.author_id
	ORDER BY Users.user_id
	SHOW COLUMNS FROM Users
	SHOW COLUMNS FROM Posts
)";




if ($mysqli->query($createPostsTable) === TRUE) {
  echo "Table createPostsTable created successfully";
} else {
  echo "Error creating table: " . $mysqli->error;
}

if ($mysqli->query($createUsersTable) === TRUE) {
  echo "Table creatUsersTable created successfully";
} else {
  echo "Error creating table: " . $mysqli->error;
}

/* if ($mysqli->query($joinTables) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $mysqli->error;
} */




 
/* close connection */ 
$mysqli->close(); 
?> 