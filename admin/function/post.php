<?php

  require_once('../../assets/includes/database.php');

  $article = new article;

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }

  if (isset($_POST['title-content'], $_POST['content'])) {
    $title = $_POST['title-content'];
    $content = $_POST['content'];

    if (isset($_GET['action'])) {
      $action = $_GET['action'];

      switch($action) {
        // action add
        case 'add':
          if (empty($title) || empty($content)) {
            header('Location: ../index.php?page=add-post&error');
            exit();
          } else {
            $article->insertData($title, $content);
            header('Location: ../index.php?page=post');
            exit();
          }
          break;
        // action edit
        case 'edit':
          if (empty($title) || empty($content)) {
            header("Location: ../index.php?page=edit-post&id=$id&error");
            exit();
          } else {
            $article->updateData($id, $title, $content);
            header('Location: ../index.php?page=post');
            exit();
          }
          break;
        // no action
        default:
          echo "<center><h5>Action Not Found!</h5></center>";
          break;
      }

    }

  } elseif (isset($_GET['delete'])) {
    // delete post
    $article->deleteData($id);
    header('Location: ../index.php?page=post');
  }
?>
