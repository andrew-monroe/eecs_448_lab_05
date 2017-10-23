<?php
$connection = new mysqli("mysql.eecs.ku.edu", 'amonroe', 'P@$$word123','amonroe');

if($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

$author_id = $_POST["username"];
$content = $_POST["content"];

$query = "INSERT INTO Posts (content,author_id) VALUES ('$content','$author_id')";

if ($connection->query($query)) {
  echo "Post created successfully.";
} else {
  echo "Error: " . $query . "<br>" . $connnection->error;
}

/* close connection */
$connection->close();
?>
