<table class="stripped highlight">
  <thead>
    <tr>
      <th>No</th>
      <th>Title</th>
      <th>Date</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $x = 0;
    foreach ($articles->getAllData() as $article) {
    ?>
      <tr>
        <th><?php echo ++$x; ?></th>
        <th><?php echo $article['title']; ?></th>
        <th><?php echo $article['date']; ?></th>
        <th>
          <a href="index.php?page=edit-post&id=<?php echo $article['id']; ?>" class="waves-effect waves-light btn-small edit">Edit</a>
          <a href="function/post.php?delete&id=<?php echo $article['id']; ?>" class="waves-effect waves-light btn-small delete">Delete</a></th>
      </tr>
    <?php
    } ?>

  </tbody>
</table>
