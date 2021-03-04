<?php
if (isset($_POST['submit'])) {
  include_once 'db.php';
  $todo = $_POST['delid'];
  $sql = "DELETE FROM todolist WHERE ID='$todo'";

  mysqli_query($conn, $sql);
  header("Location: ../index.php");
}
?>
