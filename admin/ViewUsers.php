<html>
<head>
  <title>View Users</title>
</head>
<body>
<h1>List of Users</h1>
<table>
<thead>
  <tr>
    <th>user_id</th>
  </tr>
</thead>

<tbody>
<?php
$connection = new mysqli("mysql.eecs.ku.edu", 'amonroe', 'P@$$word123','amonroe');

if($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

$query = "SELECT user_id FROM Users";

if ($users = $connection->query($query)) {
  while($row = $users->fetch_assoc()) {
    echo "<tr>";
    echo "  <td>" . $row['user_id'] . "</td>";
    echo "</tr>";
  }

  $users->free();
} else {
  echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();
?>
</tbody>
</table>

  <form action="AdminHome.html">
    <input type="submit" value="Back to Admin Home Page">
  </form>


</body>
</html>
