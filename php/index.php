<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Todo List</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav>
    <h1>TodoList App</h1>
  </nav>
  <div class="container">
    <div class="input-area">
      <form method="POST" action="add_task.php">
        <input type="text" name="task" placeholder="écrivez vos tâches..." required />
        <button class="btn"> Ajouter tâche </button>
      </form>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>n°</th>
          <th>Tâches</th>
          <th>Statut</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          require './connect.php';
          $fetchingtasks = mysqli_query($db, "SELECT * FROM `task` ORDER BY `task_id` ASC") or die(mysqli_error($db));
          $count = 1;
          while ($fetch = $fetchingtasks->fetch_array()) {
        ?>
          <tr class="border-bottom">
            <td>
              <?php echo $count++ ?>
            </td>
            <td>
              <?php echo $fetch['task'] ?>
            </td>
            <td>
              <?php echo $fetch['status'] ?>
            </td>
            <td colspan="2" class="action">
              <?php
              if ($fetch['status'] != "Done") {
                echo '<a href="update_task.php?task_id=' . $fetch['task_id'] . '" class="btn-completed">Terminer</a>'; } 
              ?>
              <a href="delete_task.php?task_id=<?php echo $fetch['task_id'] ?>" class="btn-remove">X</a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>