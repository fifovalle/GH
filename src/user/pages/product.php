<?php include '../config/databases.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Produk</title>
  <link rel="shortcut icon" type="image/png" href="../assets/img/company-logos/logo_ndaru.jpg" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" />
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
      <!-- NAVBAR START -->
      <?php include '../partials/navbar.php'; ?>
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
            <p>Segar dan Organik</p>
            <h1>Etalase Produk</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product-section mt-150 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="product-filters">
            <ul>
              <li class="active" data-filter="*">Semua</li>
              <li data-filter=".strawberry">Tipe 1</li>
              <li data-filter=".berry">Tipe 2</li>
              <li data-filter=".lemon">Tipe 3</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row product-lists">
        <div class="col-lg-4 col-md-6 text-center strawberry">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.html"><img src="../assets/img/products/product-img-1.jpg" alt="" /></a>
            </div>
            <h3>Selada</h3>
            <p class="product-price"><span>Per Kg</span> Rp 25.000</p>
            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center berry">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.html"><img src="../assets/img/products/product-img-2.jpg" alt="" /></a>
            </div>
            <h3>Pakcoy</h3>
            <p class="product-price"><span>Per Kg</span> Rp 250.000</p>
            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center lemon">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.html"><img src="../assets/img/products/product-img-3.jpg" alt="" /></a>
            </div>
            <h3>Produk 3</h3>
            <p class="product-price"><span>Per Kg</span> Rp 250.000</p>
            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.html"><img src="../assets/img/products/product-img-4.jpg" alt="" /></a>
            </div>
            <h3>Produk 4</h3>
            <p class="product-price"><span>Per Kg</span> Rp 250.000</p>
            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.html"><img src="../assets/img/products/product-img-5.jpg" alt="" /></a>
            </div>
            <h3>Produk 5</h3>
            <p class="product-price"><span>Per Kg</span> Rp 250.000</p>
            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center strawberry">
          <div class="single-product-item">
            <div class="product-image">
              <a href="single-product.html"><img src="../assets/img/products/product-img-6.jpg" alt="" /></a>
            </div>
            <h3>Produk 6</h3>
            <p class="product-price"><span>Per Kg</span> Rp 250.000</p>
            <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Masukan Keranjang</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <div class="pagination-wrap">
                <ul>
                  <li>
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a class="active" href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li>
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
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
      <!-- FOOTER START -->
      <?php include '../partials/footer.php'; ?>
      <!-- FOOTER END -->
    </div>
  </div>
  <!-- jquery -->
  <script src="../assets/js/jquery-1.11.3.min.js"></script>
  <!-- bootstrap -->
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- count down -->
  <script src="../assets/js/jquery.countdown.js"></script>
  <!-- isotope -->
  <script src="../assets/js/jquery.isotope-3.0.6.min.js"></script>
  <!-- waypoints -->
  <script src="../assets/js/waypoints.js"></script>
  <!-- owl carousel -->
  <script src="../assets/js/owl.carousel.min.js"></script>
  <!-- magnific popup -->
  <script src="../assets/js/jquery.magnific-popup.min.js"></script>
  <!-- mean menu -->
  <script src="../assets/js/jquery.meanmenu.min.js"></script>
  <!-- sticker js -->
  <script src="../assets/js/sticker.js"></script>
  <!-- main js -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>