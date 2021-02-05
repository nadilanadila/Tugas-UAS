<table class="stripped highlight">
  <thead>
    <tr>
      <th>No</th>
      <th>Username</th>
      <th>Password</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $x = 0;
    foreach ($user->getAllData() as $aUser) {
      // code...
    ?>
      <tr>
        <th><?php echo ++$x; ?></th>
        <th><?php echo $aUser['username']; ?></th>
        <th><?php echo $aUser['password']; ?></th>
        <th>
          <a href="index.php?page=edit-pengguna&id=<?php echo $aUser['id']; ?>" class="waves-effect waves-light btn-small edit">Edit</a>
          <a href="function/pengguna.php?delete&id=<?php echo $aUser['id']; ?>" class="waves-effect waves-light btn-small delete">Delete</a></th>
      </tr>
    <?php
    } ?>

  </tbody>
</table>
