<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $user->getData($id);
  }
  if (isset($_GET['error'])) {
    $error = 'all forms are required';
  }

  if (isset($error)) {
?>
  <p class="center-align"><?php echo $error; ?></p>
<?php
  }
?>

<form class="col s12" action="function/pengguna.php?action=edit&id=<?php echo $data['id']; ?>" method="post" autocomplete="off">
<div class="card">
  <div class="card-content">
    <div class="input-field">
      <input type="text" id="username" class="validate" name="username" value="<?php echo $data['username']; ?>">
      <label for="username">Username</label>
    </div>
    <div class="input-field">
      <input type="password" id="password" class="validate" name="password">
      <label for="password">Password</label>
    </div>
  </div>
    <div class="card-action">
      <button class="waves-effect waves-light btn" type="submit" name="save">Save</button>
    </div>
  </div>
</form>
