<?php
include_once "php/db.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script defer src="app.js"></script>
    <title>To-Do list For Zevs</title>
  </head>
  <body>
    <main>
    <form class="addtodo" action="php/insert.php" method="post" style="text-align:center;">
      <input required class="addtotable" type="text" name="todo" value="" placeholder="What do you want to do...">
      <input class="button" type="submit" name="submit" value="+">
      <div class="select">
        <select name="filter" class="filters form-select form-select-lg mb-3">
          <option value="all">All</option>
          <option value="completed">Completed</option>
          <option value="uncompleted">Uncompleted</option>
        </select>
      </div>
    </form>
    <table id="todolist">
    <?php
      $sql = "SELECT * FROM todolist";
      $result = mysqli_query($conn, $sql);
      $ifrows = mysqli_num_rows($result);
      if($ifrows != 0){
        while ($row = mysqli_fetch_assoc($result)){
          ?>
          <tr>
            <form class="updatetodo" action="php/complete.php" method="post" >
              <?php
                    if ($row['done'] == 0){
                      echo "<td><h2 style='text-decoration: line-through;'>".$row['todo']."</h2><p>".$row['date']."</p></td>";
                      echo "<td><h4 class='status' value='Completed'>Completed</h4></td>";
                    }else{
                      echo "<td><h2 style='text-decoration: none;'>".$row['todo']."</h2><p>".$row['date']."</p></td>";
                      echo "<td><h4 class='status' style='text-decoration: none;' value='Uncompleted'>Not Completed</h4></td>";
                    }
                      echo "<input type='text' style='display:none' name='done' value='".$row['done']."'>";
                      echo "<input type='text' style='display:none' name='update' value='".$row['ID']."'>";
                      echo "<td><input class='completion' type='submit' name='submit' value='Done'></td>";
                ?>
              </form>
              <form class="del" action="php/delete.php" method="post">
                <?php
                  echo "<input type='text' style='display:none' name='delid' value='".$row['ID']."'>";
                  echo "<td><input class='delete' type='submit' name='submit' value='X'></td>";
                ?>
              </form>
          </tr>
          <?php
        }
      }
     ?>
   </table>
 </main>
  </body>
</html>
