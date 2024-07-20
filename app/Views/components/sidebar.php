<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href=".">
        <i class="bi bi-grid"></i>
        <span>Home</span>
      </a>
    </li><!-- End Home Nav -->

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
        <i class="bi bi-cart-check"></i>
        <span>Keranjang</span>
      </a>
    </li><!-- End Keranjang Nav -->
    <?php
    if (session()->get('role') == 'admin') {
    ?>
      <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
          <i class="bi bi-receipt"></i>
          <span>Produk</span>
        </a>
      </li><!-- End Produk Nav -->
    <?php
    }
    ?>
    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'user') ? "" : "collapsed" ?>" href="user">
        <i class="bi bi-people-fill"></i>
        <span>User</span>
      </a>
    </li><!-- End User Nav -->

    <?php
    if (session()->get('role') == 'admin') {
    ?>
      <li class="nav-item">
        <a class="nav-link <?php echo (uri_string() == 'transaksi') ? "" : "collapsed" ?>" href="transaksi">
          <i class="bi bi-wallet-fill"></i>
          <span>Transaksi</span>
        </a>
      </li><!-- End Transaksi Nav -->
    <?php
    }
    ?>
    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'profile') ? "" : "collapsed" ?>" href="profile">
        <i class="bi bi-person"></i>
        <span>Profil</span>
      </a>
    </li><!-- End Profile Nav -->

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'faq') ? "" : "collapsed" ?>" href="faq">
        <i class="bi bi-question-circle"></i>
        <span>FAQ</span>
      </a>
    </li><!-- End FAQ Nav -->

    <li class="nav-item">
      <a class="nav-link <?php echo (uri_string() == 'kontak') ? "" : "collapsed" ?>" href="kontak">
        <i class="bi bi-envelope"></i>
        <span>Kontak</span>
      </a>
    </li><!-- End Kontak Nav -->
  </ul>

</aside><!-- End Sidebar-->