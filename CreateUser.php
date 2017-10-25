<html>
<head>
  <title>User Status</title>
</head>
<body>
<?php
$connection = new mysqli("mysql.eecs.ku.edu", 'amonroe', 'P@$$word123','amonroe');

if($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

$user_id = $_POST["username"];

$query = "INSERT INTO Users (user_id) VALUES ('$user_id')";

if ($connection->query($query)) {
  echo "User created successfully.";
} else {
  echo "Error: " . $query . "<br>" . $connnection->error;
}

/* close connection */
$connection->close();
?>

  <form action="index.html">
    <input type="submit" value="Back to Index">
  </form>
</body>
</html>
