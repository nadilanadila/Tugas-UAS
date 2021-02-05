<?php

  require_once('../../assets/includes/database.php');

  $user = new user;

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  }

  if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    if (isset($_GET['action'])) {
      $action = $_GET['action'];

      switch($action) {
        // action edit
        case 'edit':
          if (empty($username) || empty($password)) {
            header("Location: ../index.php?page=edit-pengguna&id=$id&error");
            exit();
          } else {
            $user->updateUser($id, $username, $password);
            header('Location: logout.php');
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
    // delete user
    $user->deleteUser($id);
    header('Location: ../index.php?page=pengguna');
  }
?>
