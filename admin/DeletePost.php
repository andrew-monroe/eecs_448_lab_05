<?php
$connection = new mysqli("mysql.eecs.ku.edu", 'amonroe', 'P@$$word123','amonroe');

if($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

if (isset($_POST['post_ids'])) {
$post_ids = $_POST['post_ids'];

if(is_array($post_ids)) {

foreach ($post_ids as $post) {

  $query = "DELETE FROM Posts WHERE post_id = $post";

  if ($connection->query($query)) {
    echo "Post $post deleted successfully.<br>";
  } else {
    echo "Error deleting post $post: " . $query . "<br>" . $connnection->error . "<br>";
  }
}
} else {
  $query = "DELETE FROM Posts WHERE post_id = $post";

  if ($connection->query($query)) {
    echo "Post $post deleted successfully.";
  } else {
    echo "Error deleting post $post: " . $query . "<br>" . $connnection->error;
  }
}

} else {
  echo "No Post Selected For Deletion.";
}
/* close connection */
$connection->close();
?>
