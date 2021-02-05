<!-- footer -->
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 id="kontak" class="white-text">Kontak</h5>
        <p class="grey-text text-lighten-4 valign-wrapper"><i class="tiny material-icons valign">email</i>
        kuyya@gmail.com</p>
        <p class="grey-text text-lighten-4 valign-wrapper"><i class="tiny material-icons">location_city</i> 4315 Cicantayan</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Menu</h5>
        <ul>
          <li><a href="index.php?page=beranda&halaman=1" class="grey-text text-lighten-3">Beranda</a></li>
          <li><a href="index.php?page=faq" class="grey-text text-lighten-3">FAQ</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- footer-copyright -->
  <div class="footer-copyright">
    <div class="container">&copy; <?php echo Date('Y'); ?> by Skuy Ngoding</div>
  </div>
</footer>

<!--JavaScript at end of body for optimized loading-->
<!-- Compiled and minified JavaScript -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

    // collapsible
    $('.collapsible').collapsible();

    // sidenav
    $('.sidenav').sidenav();

  });
</script>
</body>
</html>
