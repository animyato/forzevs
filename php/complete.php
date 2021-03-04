<?php
if (isset($_POST['submit'])) {
  include_once 'db.php';
  $todoid = $_POST['update'];
  $done = $_POST['done'];
  if($done != 1){
    $sql = "UPDATE todolist SET done='1' WHERE ID='$todoid'";
  }else{
    $sql = "UPDATE todolist SET done='0' WHERE ID='$todoid'";
  }

  mysqli_query($conn, $sql);
  header("Location: ../index.php");
}
?>
