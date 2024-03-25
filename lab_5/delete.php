<?php
    session_start();
    if (isset($_GET['o']) && $_GET['o']==='Delete'){
      $sql = 'DELETE FROM `users` WHERE ID_user = '.$_GET['id'].'';
      print_r($sql);
      header('Location: index.php');
    } else
    $sql = 'SELECT * FROM `users`';
    $res = mysqli_query($connect, $sql);
    if (mysqli_errno($connect)) print_r(mysqli_error($connect));
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Secondname</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_assoc($res)):?>
    <tr>
      <th scope="row"><?=$row['ID_user'];?></th>
      <td><?=$row['Name'];?></td>
      <td><?=$row['Surname'];?></td>
      <td><?=$row['Secondname'];?></td>
      <td><a href="?p=delete&o=Delete&id=<?= $row['ID_user']; ?>">Delete</a></td>
    </tr>
    <?php endwhile;?>
  </tbody>
</table>