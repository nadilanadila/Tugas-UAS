<?php
  $perPage = 5;
  $page    = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
  $start   = ($page > 1) ? ($page * $perPage) - $perPage : 0;
  $total   = $articles->getRowCountData();
  $pages   = ceil($total/$perPage);

  if (isset($_GET['halaman'])) {
    $disablePrev = 'waves-effect';
    $disableNext = 'waves-effect';

    if ($_GET['halaman'] == 1) {
      $disablePrev = 'disabled';
    }

    if ($_GET['halaman'] == $pages) {
      $disableNext = 'disabled';
    }
  }

  $prev = $_GET['halaman'] - 1;

  if ($_GET['halaman'] < 1) {
    header("Location: index.php?page=beranda&halaman=1");
  }

  $next = $_GET['halaman'] + 1;

  if ($_GET['halaman'] > $pages) {
    header("Location: index.php?page=beranda&halaman=$pages");
  }

  foreach ($articles->getArticlePages($start, $perPage) as $article) {
?>
  <div class="content-section">
    <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content">
          <h4><a href="index.php?page=article&id=<?php echo $article['id']; ?>"><?php echo $article['title']; ?></a></h4>
          <span class="header-content"><i class="tiny material-icons">date_range</i><?php echo date('l, jS M Y', strtotime($article['date'])); ?></span>
          <p><?php echo substr($article['content'], 0, 200). '...'; ?></p>
        </div>
        <div class="card-action">
          <a href="index.php?page=article&id=<?php echo $article['id']; ?>" class="waves-effect waves-light btn-small">Baca lebih banyak</a>
        </div>
      </div>
    </div>
  </div>
<?php
  }
?>

<ul class="pagination center-align">
  <li class="<?php echo $disablePrev; ?>"><a href="?page=beranda&halaman=<?php echo $prev; ?>"><i class="material-icons">chevron_left</i></a></li>
  <?php
    $active = '';
    for($i = 1; $i <= $pages; $i++) {

      if (isset($_GET['halaman'])) {
        if ($_GET['halaman'] == $i) {
          $active = 'active';
        } else {
          $active = '';
        }
      }
  ?>

  <li class="waves-effect <?php echo $active; ?>"><a href="?page=beranda&halaman=<?php echo $i; ?>"><?php echo $i; ?></a></li>

  <?php
    }
  ?>
  <li class="<?php echo $disableNext; ?>"><a href="?page=beranda&halaman=<?php echo $next; ?>"><i class="material-icons">chevron_right</i></a></li>
</ul>
