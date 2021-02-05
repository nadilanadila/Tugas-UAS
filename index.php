<?php

  require_once('assets/includes/database.php');

  $articles = new article;

  include_once('header.php');
?>

<!-- main -->
<main>

  <!-- main-content -->
  <div class="row">
    <div class="container">

      <!-- main-content -->
      <div class="main-content col s12 m12 l8">

        <!-- page-dynamic -->
        <?php
        if (isset($_GET['page'])) {
          $page = $_GET['page'];

          switch ($page) {
            case 'beranda':
              include('page/beranda.php');
              break;
            case 'faq':
              include('page/faq.php');
              break;
            case 'article':
              include('page/article.php');
              break;
            default:
              echo "<center><h3>Maaf, Halaman tidak ditemukan</h3></center>";
              break;
          }

        } else {
          header('Location: index.php?page=beranda&halaman=1');
        }
        ?>

      </div>

      <!-- side-content -->
      <div class="side-content col s12 m12 l4">
        <div class="about">
          <div class="card">
            <div class="card-content">
              <h5 class"card-title">Tentang kami</h5>
              <blockquote>
                <p>Kami adalah komunitas yang berjalan dalam bidang teknologi,Informasi dan
                  tempat membagikan ilmu-ilmu.</p>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</main>

<?php include_once('footer.php') ?>
