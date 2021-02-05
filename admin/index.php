<?php
  session_start();

  require_once('../assets/includes/database.php');

  $articles = new article;
  $user = new user;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../assets/css/admin.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Panel</title>
</head>
<body>

<?php

  if (isset($_SESSION['loggedIn'])) {

    include_once('header.php');

?>

<!-- main -->
<main>

  <div class="row">

    <div class="col s12 m12 l9 offset-l3">
      <div class="main-content">
        <div class="container">

            <!-- main-post -->
            <div class="main-post">

              <!-- page-dynamic -->
              <?php
              $notFound = "<center><h3>Maaf, Halaman tidak ditemukan</h3></center>";
              if (isset($_GET['page'], $_GET['id'])) {
                $page = $_GET['page'];

                switch ($page) {
                  case 'edit-post':
                    include_once("page/edit-post.php");
                    break;
                  case 'edit-pengguna':
                    include_once("page/edit-pengguna.php");
                    break;
                  default:
                    echo $notFound;
                    break;
                }

              } elseif (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                  case 'beranda':
                    include_once('page/beranda.php');
                    break;
                  case 'post':
                    include_once('page/post.php');
                    break;
                  case 'add-post':
                    include_once('page/add-post.php');
                    break;
                  case 'pengguna':
                    include_once('page/pengguna.php');
                    break;
                  default:
                    echo $notFound;
                    break;
                }

              } else {

                include_once('page/beranda.php');

              }
            ?>

          </div>

        </div>
      </div>
    </div>
  </div>

</main>

<?php
  } else {

    include_once('page/login.php');

  }

  include_once('footer.php');
?>
