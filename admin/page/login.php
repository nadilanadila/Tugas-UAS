<?php
  if (isset($_GET['error'])) {
    $error = 'all forms are required';
  }

  if (isset($_GET['incorrectpass'])) {
    $error = 'incorrect password';
  }

  if (isset($_GET['usernotfound'])) {
    $error = 'username not found';
  }
?>
<main>

  <div class="row">

    <div class="col s12 m8 offset-m2 l4 offset-l4">

      <form class="col s12" action="function/login.php" method="post" autocomplete="off">

        <div class="card">

          <div class="card-image">
            <span class="card-title">Login</span>
          </div>

          <div class="card-content">

            <?php
            if (isset($error)) {
              ?>
              <p class="center-align"><?php echo $error; ?></p>
              <?php
            }
            ?>

            <div class="input-field">
              <input id="username" name="username-user" type="text" class="validate">
              <label for="username">Username</label>
            </div>

            <div class="input-field">
              <input type="password" id="password" name="password-user" class="validate">
              <label for="password">Password</label>
            </div>
          </div>

          <div class="card-action">
            <button class="waves-effect waves-light btn" type="submit" name="login">Log In</button>
          </div>

        </div>

      </form>

    </div>

  </div>

</main>
