<?php
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $articles->getData($id);
?>
    <div class="card">
      <div class="card-content">
        <h4><?php echo $data['title']; ?></h4>
        <span class="header-content"><i class="tiny material-icons">date_range</i><?php echo date('l, jS M Y', strtotime($data['date'])); ?></span>
        <p><?php echo $data['content']; ?></p>
      </div>
    </div>
<?php
  } else {
    header('Location: index.php');
    exit();
  }
?>
