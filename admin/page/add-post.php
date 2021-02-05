<?php
  if (isset($_GET['error'])) {
    $error = 'all forms are required';
  }

  if (isset($error)) {
?>
  <p class="center-align"><?php echo $error; ?></p>
<?php
  }
?>

<form class="col s12" action="function/post.php?action=add" method="post" autocomplete="off">
<div class="card">
  <div class="card-content">
    <div class="input-field">
      <input id="title" name="title-content" type="text" class="validate">
      <label for="title">Title Content</label>
    </div>
    <textarea class="ckeditor" id="ckedtor" name="content"></textarea>
  </div>
    <div class="card-action">
      <button class="waves-effect waves-light btn" type="submit" name="save">Save</button>
    </div>
  </div>
</form>
