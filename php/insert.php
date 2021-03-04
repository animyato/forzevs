<?php
if (isset($_POST['submit'])) {
  include_once 'db.php';

  $todo = $_POST['todo'];
  $datetime = date_create()->format('Y-m-d H:i:s');
  $done = 1;
  $sql = "INSERT INTO todolist (todo, date, done) VALUES ('$todo', '$datetime', '$done')";
  mysqli_query($conn, $sql);
  header("Location: ../index.php");

}
?>
