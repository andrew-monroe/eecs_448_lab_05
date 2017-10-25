<html>
<head>
  <title>View Posts</title>
</head>
<body>
<h1>List of Posts</h1>
<table>
<thead>
  <tr>
    <th>Post Content</th>
  </tr>
</thead>

<tbody>
<?php
$connection = new mysqli("mysql.eecs.ku.edu", 'amonroe', 'P@$$word123','amonroe');

if($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

$author_id = $_POST['username'];
$query = "SELECT * FROM `Posts` WHERE `author_id` = '$author_id'";

if ($users = $connection->query($query)) {
  while($row = $users->fetch_assoc()) {
    echo "<tr>";
    echo "  <td>" . $row['content'] . "</td>";
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

</body>
</html>
