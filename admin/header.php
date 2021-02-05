<!-- header -->
<header>

  <nav>
    <div class="row">
      <div class="col s12 m12 l12">

        <div class="nav-wrapper">
          <div class="container">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">

              <!-- Dropdown Trigger -->
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Hello, <?php echo $_SESSION['username']; ?><i class="material-icons right">arrow_drop_down</i></a>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </div>
  </nav>

  <!-- sidenav slide-out -->
  <ul id="slide-out" class="sidenav sidenav-fixed">
    <li>
      <ul class="collapsible collapsible-accordion">
        <li><a class="collapsible-header" href="index.php?page=beranda">Beranda</a></li>
        <li>
          <a class="collapsible-header">Pos<i class="material-icons right button">keyboard_arrow_down</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="index.php?page=post">Daftar Pos</a></li>
              <li><a href="index.php?page=add-post">Add Pos</a></li>
            </ul>
          </div>
        </li>
        <li>
          <a class="collapsible-header">Pengaturan<i class="material-icons right button">keyboard_arrow_down</i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="index.php?page=pengguna">Pengguna</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
  </ul>

  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="function/logout.php"><i class="material-icons left">exit_to_app</i>Log Out</a></li>
  </ul>

  <!-- sidenav mobile-demo -->
  <ul class="sidenav collapsible collapsbile-accordion" id="mobile-demo">
    <li>
      <a class="collapsible-header">Hello, <?php echo $_SESSION['username']; ?><i class="material-icons right button">keyboard_arrow_down</i></a>
      <div class="collapsible-body">
        <ul>
          <li><a href="function/logout.php">Logout<i class="material-icons left">exit_to_app</i></a></li>
        </ul>
      </div>
    </li>
    <li><a class="collapsible-header" href="index.php?page=beranda">Beranda</a></li>
    <li>
      <a class="collapsible-header">Pos<i class="material-icons right button">keyboard_arrow_down</i></a>
      <div class="collapsible-body">
        <ul>
          <li><a href="index.php?page=post">Daftar Pos</a></li>
          <li><a href="index.php?page=add-post">Add Pos</a></li>
        </ul>
      </div>
    </li>
    <li>
      <a class="collapsible-header">Pengaturan<i class="material-icons right button">keyboard_arrow_down</i></a>
      <div class="collapsible-body">
        <ul>
          <li><a href="index.php?page=pengguna">Pengguna</a></li>
        </ul>
      </div>
    </li>
  </ul>

</header>
