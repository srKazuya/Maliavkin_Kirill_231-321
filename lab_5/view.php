<?php
    if (isset($_GET['o'])){
        $sql ='SELECT * FROM `users` ORDER BY `'.$_GET['o'].'`';   
        print_r($sql);
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
      <th scope="col">Gender</th>
      <th scope="col">Bdata</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">E-mail</th>
      <th scope="col">Comment</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_assoc($res)):?>
    <tr>
      <th scope="row"><?=$row['ID_user'];?></th>
      <td><?=$row['Name'];?></td>
      <td><?=$row['Surname'];?></td>
      <td><?=$row['Secondname'];?></td>
      <td><?=$row['Gender'];?></td>
      <td><?=$row['Bdate'];?></td>
      <td><?=$row['Phone'];?></td>
      <td><?=$row['Address'];?></td>
      <td><?=$row['E-mail'];?></td>
      <td><?=$row['Comment'];?></td>
    </tr>
    <?php endwhile;?>
  </tbody>
</table>