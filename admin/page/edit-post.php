<?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $articles->getData($id);
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

<form class="col s12" action="function/post.php?action=edit&id=<?php echo $data['id']; ?>" method="post" autocomplete="off">
<div class="card">
  <div class="card-content">
    <div class="input-field">
      <input type="text" id="title" class="validate" name="title-content" value="<?php echo $data['title']; ?>">
      <label for="title">Title Content</label>
    </div>
    <textarea class="ckeditor" id="ckedtor" name="content"><?php echo $data['content']; ?></textarea>
  </div>
    <div class="card-action">
      <button class="waves-effect waves-light btn" type="submit" name="save">Save</button>
    </div>
  </div>
</form>
