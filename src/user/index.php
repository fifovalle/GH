<?php include 'config/databases.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ndaru Farm</title>
  <link rel="shortcut icon" type="image/png" href="assets/img/company-logos/logo_ndaru.jpg" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/all.min.css" />
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
  <link rel="stylesheet" href="assets/css/index.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>
  <div class="loader">
    <div class="loader-inner">
      <div class="circle"></div>
    </div>
  </div>
  <div class="top-header-area" id="sticker">
    <div class="container">
      <!-- NAVBAR START -->
      <?php include 'partials/navbar.php'; ?>
      <!-- NAVBAR END -->
    </div>
  </div>
  <div class="search-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="close-btn"><i class="fas fa-window-close"></i></span>
          <div class="search-bar">
            <div class="search-bar-tablecell">
              <h3>Pencarian untuk</h3>
              <input type="text" placeholder="Masukan Kata Kunci" />
              <button type="submit">
                Cari <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="homepage-slider">
    <div class="single-homepage-slider homepage-bg-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
            <div class="hero-text">
              <div class="hero-text-tablecell">
                <p class="subtitle">Segar & Organik</p>
                <h1>Sayuran Musiman Lezat</h1>
                <div class="hero-btns">
                  <a class="boxed-btn" id="belanja">Belanja Sekarang</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-homepage-slider homepage-bg-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1 text-center">
            <div class="hero-text">
              <div class="hero-text-tablecell">
                <p class="subtitle">Segar Setiap Hari </p>
                <h1>Koleksi Organik 100%</h1>
                <div class="hero-btns">
                  <a href="<?php echo $akarUrl; ?>src/user/pages/product.php" class="boxed-btn">Lihat Produk</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-homepage-slider homepage-bg-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1 text-right">
            <div class="hero-text">
              <div class="hero-text-tablecell">
                <p class="subtitle">Penjualan Besar Sedang Berlangsung!</p>
                <h1>Dapatkan Diskon Desember</h1>
                <div class="hero-btns">
                  <a href="<?php echo $akarUrl; ?>src/user/pages/product.php" class="boxed-btn">Lihat Produk</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="list-section pt-80 pb-80">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="list-box d-flex align-items-center">
            <div class="list-icon">
              <i class="fas fa-shipping-fast"></i>
            </div>
            <div class="content">
              <h3>Bebas biaya kirim</h3>
              <p>Ketika memesan lebih dari Rp 999.999.999</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="list-box d-flex align-items-center">
            <div class="list-icon">
              <i class="fas fa-phone-volume"></i>
            </div>
            <div class="content">
              <h3>Dukungan 24/7</h3>
              <p>Dapatkan dukungan sepanjang hari</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="list-box d-flex justify-content-start align-items-center">
            <div class="list-icon">
              <i class="fas fa-sync"></i>
            </div>
            <div class="content">
              <h3>Pengembalian dana</h3>
              <p>Dapatkan pengembalian dana dalam 3 hari!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product-section mt-150 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="section-title">
            <h3><span class="orange-text">Produk</span> Kami</h3>
            <p>
            <p>
              Kami adalah tim yang berkomitmen untuk menyediakan produk-produk berkualitas tinggi bagi Anda. Dengan fokus pada kualitas, kesehatan, dan kepuasan pelanggan, kami hadir dengan beragam produk segar dan organik. Dengan pengalaman dan reputasi yang kuat, kami siap menjadi mitra terpercaya Anda dalam menjaga gaya hidup sehat.
            </p>
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="<?php echo $akarUrl; ?>src/user/pages/about-selada.php"><img src="assets/img/produk/selada.png" alt="" /></a>
            </div>
            <h3>Selada</h3>
            <p class="product-price"><span>Per Kg</span> Rp 25.000</p>
            <a href="<?php echo $akarUrl; ?>src/user/pages/cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="<?php echo $akarUrl; ?>src/user/pages/about-pakcoy.php"><img src="assets/img/produk/pakcoy.png" alt="" /></a>
            </div>
            <h3>Pakcoy</h3>
            <p class="product-price"><span>Per Kg</span> Rp 250.000.000</p>
            <a href="<?php echo $akarUrl; ?>src/user/pages/cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="<?php echo $akarUrl; ?>src/user/pages/about-pakcoy.php"><img src="assets/img/produk/pakcoy.png" alt="" /></a>
            </div>
            <h3>Hiji Dei Naon</h3>
            <p class="product-price"><span>Per Kg</span> Rp 999.999.999</p>
            <a href="<?php echo $akarUrl; ?>src/user/pages/cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product-section mt-150 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="section-title">
            <h3><span class="orange-text">Jasa</span> Kami</h3>
            <p>
              Lorem Ipsum
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="<?php echo $akarUrl; ?>src/user/pages/services.php"><img src="assets/img/produk/selada.png" alt="" /></a>
            </div>
            <h3>Jasa 1</h3>
            <p class="product-price"><span>Per Kg</span> Rp 25.000</p>
            <a href="<?php echo $akarUrl; ?>src/user/pages/cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
            <a href="<?php echo $akarUrl; ?>src/user/pages/services.php" class="read-more-btn">Lihat selengkapnya <i class="fas fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="<?php echo $akarUrl; ?>src/user/pages/services.php"><img src="assets/img/produk/pakcoy.png" alt="" /></a>
            </div>
            <h3>Jasa 2</h3>
            <p class="product-price"><span>Per Kg</span> Rp 250.000.000</p>
            <a href="<?php echo $akarUrl; ?>src/user/pages/cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
            <a href="<?php echo $akarUrl; ?>src/user/pages/services.php" class="read-more-btn">Lihat selengkapnya <i class="fas fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="<?php echo $akarUrl; ?>src/user/pages/services.php"><img src="assets/img/produk/pakcoy.png" alt="" /></a>
            </div>
            <h3>Jasa 3</h3>
            <p class="product-price"><span>Per Kg</span> Rp 999.999.999</p>
            <a href="<?php echo $akarUrl; ?>src/user/pages/cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
            <a href="<?php echo $akarUrl; ?>src/user/pages/services.php" class="read-more-btn">Lihat selengkapnya <i class="fas fa-angle-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="cart-banner pt-100 pb-100">
    <div class="container">
      <div class="row clearfix">
        <div class="image-column col-lg-6">
          <div class="image">
            <div class="price-box">
              <div class="inner-price">
                <span class="price">
                  <strong>30%</strong> <br />
                  diskon per kg
                </span>
              </div>
            </div>
            <img src="assets/img/a.jpg" alt="" />
          </div>
        </div>
        <div class="content-column col-lg-6">
          <h3><span class="orange-text">Kesegaran</span> di bulan ini</h3>
          <h4>Selada</h4>
          <div class="text">
            Quisquam minus maiores repudiandae nobis, minima saepe id, fugit
            ullam similique! Beatae, minima quisquam molestias facere ea.
            Perspiciatis unde omnis iste natus error sit voluptatem accusant
          </div>
          <div class="time-counter">
            <div class="time-countdown clearfix" data-countdown="2020/2/01">
              <div class="counter-column">
                <div class="inner"><span class="count">00</span>Hari</div>
              </div>
              <div class="counter-column">
                <div class="inner"><span class="count">00</span>Jam</div>
              </div>
              <div class="counter-column">
                <div class="inner"><span class="count">00</span>Menit</div>
              </div>
              <div class="counter-column">
                <div class="inner"><span class="count">00</span>Detik</div>
              </div>
            </div>
          </div>
          <a href="<?php echo $akarUrl; ?>src/user/pages/product.php" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i>Masukan keranjang</a>
        </div>
      </div>
    </div>
  </section>
  <div class="testimonail-section mt-150 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 text-center">
          <div class="testimonial-sliders">
            <div class="single-testimonial-slider">
              <div class="client-avater">
                <img src="assets/img/avaters/avatar1.png" alt="" />
              </div>
              <div class="client-meta">
                <h3>Pengguna 1 <span>Pembeli 1</span></h3>
                <p class="testimonial-body">" contoh pesan 1 "</p>
                <div class="last-icon">
                  <i class="fas fa-quote-right"></i>
                </div>
              </div>
            </div>
            <div class="single-testimonial-slider">
              <div class="client-avater">
                <img src="assets/img/avaters/avatar2.png" alt="" />
              </div>
              <div class="client-meta">
                <h3>Pengguna 2 <span>Pembeli 2</span></h3>
                <p class="testimonial-body">
                  " contoh pesan 2 "
                </p>
                <div class="last-icon">
                  <i class="fas fa-quote-right"></i>
                </div>
              </div>
            </div>
            <div class="single-testimonial-slider">
              <div class="client-avater">
                <img src="assets/img/avaters/avatar3.png" alt="" />
              </div>
              <div class="client-meta">
                <h3>
                  Pengguna 3
                  <span>Pembeli 3</span>
                </h3>
                <p class="testimonial-body">
                  " contoh pesan 3 "
                </p>
                <div class="last-icon">
                  <i class="fas fa-quote-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="abt-section mb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="abt-bg">
            <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="abt-text">
            <p class="top-sub">Sejak Tahun 2000</p>
            <h2>Ini <span class="orange-text">Contoh</span></h2>
            <p>
              Etiam vulputate ut augue vel sodales. In sollicitudin neque et
              massa porttitor vestibulum ac vel nisi. Vestibulum placerat eget
              dolor sit amet posuere. In ut dolor aliquet, aliquet sapien sed,
              interdum velit. Nam eu molestie lorem.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Sapiente facilis illo repellat veritatis minus, et labore minima
              mollitia qui ducimus.
            </p>
            <a href="<?php echo $akarUrl; ?>src/user/pages/about-us.php" class="boxed-btn mt-4">Ketahui Lebih Banyak</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="shop-banner">
    <div class="container">
      <h3>
        Obral bulan Desember sudah dimulai! <br />
        Dengan <span class="orange-text">Diskon Besar...</span>
      </h3>
      <div class="sale-percent">
        <span>Dijual! <br />
          Hingga</span>50%
      </div>
      <a href="<?php echo $akarUrl; ?>src/user/pages/product.php" class="cart-btn btn-lg">Belanja Sekarang</a>
    </div>
  </section>
  <div class="latest-news pt-150 pb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="section-title">
            <h3><span class="orange-text">Berita</span> Kami</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Aliquid, fuga quas itaque eveniet beatae optio.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-latest-news">
            <a href="<?php echo $akarUrl; ?>src/user/pages/single-news.php">
              <div class="latest-news-bg news-bg-1"></div>
            </a>
            <div class="news-text-box">
              <h3>
                <a href="<?php echo $akarUrl; ?>src/user/pages/single-news.php">Judul Berita 1.</a>
              </h3>
              <p class="blog-meta">
                <span class="author"><i class="fas fa-user"></i> Admin</span>
                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
              </p>
              <p class="excerpt">
                Vivamus lacus enim, pulvinar vel nulla sed, scelerisque
                rhoncus nisi. Praesent vitae mattis nunc, egestas viverra
                eros.
              </p>
              <a href="<?php echo $akarUrl; ?>src/user/pages/single-news.php" class="read-more-btn">baca selengkapnya <i class="fas fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-latest-news">
            <a href="<?php echo $akarUrl; ?>src/user/pages/single-news.php">
              <div class="latest-news-bg news-bg-2"></div>
            </a>
            <div class="news-text-box">
              <h3>
                <a href="<?php echo $akarUrl; ?>src/user/pages/single-news.php">Judul Berita 2.</a>
              </h3>
              <p class="blog-meta">
                <span class="author"><i class="fas fa-user"></i> Admin</span>
                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
              </p>
              <p class="excerpt">
                Vivamus lacus enim, pulvinar vel nulla sed, scelerisque
                rhoncus nisi. Praesent vitae mattis nunc, egestas viverra
                eros.
              </p>
              <a href="<?php echo $akarUrl; ?>src/user/pages/single-news.php" class="read-more-btn">baca selengkapnya <i class="fas fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
          <div class="single-latest-news">
            <a href="<?php echo $akarUrl; ?>src/user/pages/single-news.php">
              <div class="latest-news-bg news-bg-3"></div>
            </a>
            <div class="news-text-box">
              <h3>
                <a href="<?php echo $akarUrl; ?>src/user/pages/single-news.php">Judul Berita 3.</a>
              </h3>
              <p class="blog-meta">
                <span class="author"><i class="fas fa-user"></i> Admin</span>
                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
              </p>
              <p class="excerpt">
                Vivamus lacus enim, pulvinar vel nulla sed, scelerisque
                rhoncus nisi. Praesent vitae mattis nunc, egestas viverra
                eros.
              </p>
              <a href="<?php echo $akarUrl; ?>src/user/pages/single-news.php" class="read-more-btn">baca selengkapnya <i class="fas fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <a href="<?php echo $akarUrl; ?>src/user/pages/news.php" class="boxed-btn">Lebih Banyak Berita</a>
        </div>
      </div>
    </div>
  </div>
  <div class="logo-carousel-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="logo-carousel-inner">
            <div class="single-logo-item">
              <img src="assets/img/company-logos/1.png" alt="" />
            </div>
            <div class="single-logo-item">
              <img src="assets/img/company-logos/2.png" alt="" />
            </div>
            <div class="single-logo-item">
              <img src="assets/img/company-logos/3.png" alt="" />
            </div>
            <div class="single-logo-item">
              <img src="assets/img/company-logos/4.png" alt="" />
            </div>
            <div class="single-logo-item">
              <img src="assets/img/company-logos/5.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-box about-widget">
            <h2 class="widget-title">Tentang kami</h2>
            <p>
              Ut enim ad minim veniam perspiciatis unde omnis iste natus error
              sit voluptatem accusantium doloremque laudantium, totam rem
              aperiam, eaque ipsa quae.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box get-in-touch">
            <h2 class="widget-title">Berhubungan</h2>
            <ul>
              <li>Bandung, Jawa Barat</li>
              <li>contoh@email.com</li>
              <li>+62</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box pages">
            <h2 class="widget-title">Halaman</h2>
            <ul>
              <li><a href="index <?php echo $akarUrl; ?>src/user/pages/product.php">Home</a></li>
              <li><a href="about <?php echo $akarUrl; ?>src/user/pages/product.php">About</a></li>
              <li><a href="services <?php echo $akarUrl; ?>src/user/pages/product.php">Shop</a></li>
              <li><a href="news <?php echo $akarUrl; ?>src/user/pages/product.php">News</a></li>
              <li><a href="contact <?php echo $akarUrl; ?>src/user/pages/product.php">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box subscribe">
            <h2 class="widget-title">Subscribe</h2>
            <p>Subscribe to our mailing list to get the latest updates.</p>
            <form action="index <?php echo $akarUrl; ?>src/user/pages/product.php">
              <input type="email" placeholder="Email" />
              <button type="submit">
                <i class="fas fa-paper-plane"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <!-- FOOTER START -->
      <?php include 'partials/footer.php'; ?>
      <!-- FOOTER END -->
    </div>
  </div>
  <script src="assets/js/jquery-1.11.3.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.countdown.js"></script>
  <script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <script src="assets/js/sticker.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- ALERT -->
  <?php include 'partials/alert.php' ?>
</body>

</html>