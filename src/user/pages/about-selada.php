<?php include '../config/databases.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Selada</title>
  <link rel="shortcut icon" type="image/png" href="../assets/img/company-logos/logo_ndaru.jpg" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/all.min.css" />
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/css/owl.carousel.css" />
  <link rel="stylesheet" href="../assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="../assets/css/animate.css" />
  <link rel="stylesheet" href="../assets/css/meanmenu.min.css" />
  <link rel="stylesheet" href="../assets/css/index.css" />
  <link rel="stylesheet" href="../assets/css/responsive.css" />
</head>

<body>
  <div class="loader">
    <div class="loader-inner">
      <div class="circle"></div>
    </div>
  </div>
  <div class="top-header-area" id="sticker">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
          <div class="main-menu-wrap">
            <div class="site-logo">
              <a href="index.html">
                <img src="../../src/assets/img/logo-toko.png" alt="" />
              </a>
            </div>
            <nav class="main-menu">
              <ul>
                <li class="current-list-item">
                  <a href="../../public/user/index.html">Beranda</a>
                </li>
                <li>
                  <div class="header-icons">
                    <a class="shopping-cart" href="keranjang.html"><i class="fas fa-shopping-cart"></i></a>
                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                  </div>
                </li>
              </ul>
            </nav>
            <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
            <div class="mobile-menu"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="search-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="close-btn"><i class="fas fa-window-close"></i></span>
          <div class="search-bar">
            <div class="search-bar-tablecell">
              <h3>Pencarian untuk:</h3>
              <input type="text" placeholder="Masukan kata kunci" />
              <button type="submit">
                Cari <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p>Melihat Detail Tentang</p>
            <h1>Si Segar Kaya Nutrisi</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="single-product mt-150 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="single-product-img">
            <img src="../assets/img/produk/selada.png" alt="" />
          </div>
        </div>
        <div class="col-md-7">
          <div class="single-product-content">
            <h3>Selada</h3>
            <p class="single-product-pricing">
              <span>Per Kg</span> Rp 20.000
            </p>
            <p>
              Selada (Lactuca sativa) adalah salah satu jenis sayuran daun
              yang sangat populer di seluruh dunia. Dengan tekstur renyah dan
              rasa yang segar, selada sering digunakan sebagai bahan utama
              dalam salad, sandwich, dan berbagai hidangan lainnya. Sayuran
              ini tidak hanya menyenangkan untuk disantap tetapi juga
              menawarkan berbagai manfaat kesehatan.
            </p>
            <div class="single-product-form">
              <form action="index.html">
                <input type="number" placeholder="0" />
              </form>
              <a href="<?php echo $akarUrl; ?>src/user/pages/cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
              <p><strong>Kategori: </strong>Sayuran, Organik</p>
            </div>
            <h4>Bagikan:</h4>
            <ul class="product-share">
              <li>
                <a href=""><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
              </li>
              <li>
                <a href=""><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="more-products mb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="section-title">
            <h3><span class="orange-text">Produk</span> Terkait</h3>
            <p>
              Temukan beragam pilihan sayuran segar dan organik yang kami
              tawarkan. Semua tersedia untuk melengkapi hidangan sehat Anda.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.html"><img src="../assets/img/products/product-img-1.jpg" alt="" /></a>
            </div>
            <h3>Produk 1</h3>
            <p class="product-price"><span>Per Kg</span> Rp 20.000</p>
            <a href="<?php echo $akarUrl; ?>src/user/pages/cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i>Masukan Keranjang</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.html"><img src="../assets/img/products/product-img-2.jpg" alt="" /></a>
            </div>
            <h3>Produk 2</h3>
            <p class="product-price"><span>Per Kg</span> Rp 20.000</p>
            <a href="<?php echo $akarUrl; ?>src/user/pages/cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i>Masukan Keranjang</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.html"><img src="../assets/img/products/product-img-3.jpg" alt="" /></a>
            </div>
            <h3>Produk 3</h3>
            <p class="product-price"><span>Per Kg</span> Rp 20.000</p>
            <a href="<?php echo $akarUrl; ?>src/user/pages/cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i>Masukan Keranjang</a>
          </div>
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
              <img src="../assets/img/company-logos/1.png" alt="" />
            </div>
            <div class="single-logo-item">
              <img src="../assets/img/company-logos/2.png" alt="" />
            </div>
            <div class="single-logo-item">
              <img src="../assets/img/company-logos/3.png" alt="" />
            </div>
            <div class="single-logo-item">
              <img src="../assets/img/company-logos/4.png" alt="" />
            </div>
            <div class="single-logo-item">
              <img src="../assets/img/company-logos/5.png" alt="" />
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
            <h2 class="widget-title">About us</h2>
            <p>
              Ut enim ad minim veniam perspiciatis unde omnis iste natus error
              sit voluptatem accusantium doloremque laudantium, totam rem
              aperiam, eaque ipsa quae.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box get-in-touch">
            <h2 class="widget-title">Get in Touch</h2>
            <ul>
              <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
              <li>support@fruitkha.com</li>
              <li>+00 111 222 3333</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box pages">
            <h2 class="widget-title">Pages</h2>
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Shop</a></li>
              <li><a href="news.html">News</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box subscribe">
            <h2 class="widget-title">Subscribe</h2>
            <p>Subscribe to our mailing list to get the latest updates.</p>
            <form action="index.html">
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
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <p>
            Copyrights &copy; 2019 -
            <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights
            Reserved.
          </p>
        </div>
        <div class="col-lg-6 text-right col-md-12">
          <div class="social-icons">
            <ul>
              <li>
                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
              </li>
              <li>
                <a href="#" target="_blank"><i class="fab fa-dribbble"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/js/jquery-1.11.3.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery.countdown.js"></script>
  <script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>
  <script src="../assets/js/waypoints.js"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/jquery.magnific-popup.min.js"></script>
  <script src="../assets/js/jquery.meanmenu.min.js"></script>
  <script src="../assets/js/sticker.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../../src/assets/js/index.js"></script>
</body>

</html>