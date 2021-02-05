<?php

  session_start();

  require_once('../../assets/includes/database.php');

  $user = new user;

  if (isset($_POST['username-user'], $_POST['password-user'])) {
    $username = $_POST['username-user'];
    $password = md5($_POST['password-user']);

    if (empty($username) || empty($password)) {
      header("Location: ../index.php?error");
      exit();
    } else {
      $data = $user->getData($username);
      $num = $user->getRowCountData($username);

      if ($num == 1) {

        if ($data['password'] == $password) {
          $_SESSION['loggedIn'] = true;
          $_SESSION['username'] = $username;
          header('Location: ../index.php');
          exit();
        } else {

          header("Location: ../index.php?incorrectpass");

        }

      } else {

        header("Location: ../index.php?usernotfound");

      }

    }

  }
?>
