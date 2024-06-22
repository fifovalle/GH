<?php include '../config/databases.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Keranjang</title>
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
  <div class="search-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="close-btn"><i class="fas fa-window-close"></i></span>
          <div class="search-bar">
            <div class="search-bar-tablecell">
              <h3>Search For:</h3>
              <input type="text" placeholder="Keywords" />
              <button type="submit">
                Search <i class="fas fa-search"></i>
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
            <h1>Keranjang</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cart-section mt-150 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="cart-table-wrap">
            <table class="cart-table">
              <thead class="cart-table-head">
                <tr class="table-head-row">
                  <th class="product-remove"></th>
                  <th class="product-image">Gambar Produk</th>
                  <th class="product-name">Nama</th>
                  <th class="product-price">Harga</th>
                  <th class="product-quantity">Kuantitas</th>
                  <th class="product-total">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr class="table-body-row">
                  <td class="product-remove">
                    <a href="#"><i class="far fa-window-close"></i></a>
                  </td>
                  <td class="product-image">
                    <img src="../assets/img/products/product-img-1.jpg" alt="" />
                  </td>
                  <td class="product-name">Selada</td>
                  <td class="product-price">Rp 25.000</td>
                  <td class="product-quantity">
                    <div class="d-flex align-items-center">
                      <input type="number" placeholder="0" class="form-control ml-5" />
                      <p class="ml-2 mb-0">kg</p>
                    </div>
                  </td>
                  <td class="product-total">1</td>
                </tr>
                <tr class="table-body-row">
                  <td class="product-remove">
                    <a href="#"><i class="far fa-window-close"></i></a>
                  </td>
                  <td class="product-image">
                    <img src="../assets/img/products/product-img-2.jpg" alt="" />
                  </td>
                  <td class="product-name">Pakcoy</td>
                  <td class="product-price">Rp 25.000</td>
                  <td class="product-quantity">
                    <div class="d-flex align-items-center">
                      <input type="number" placeholder="0" class="form-control ml-5" />
                      <p class="ml-2 mb-0">kg</p>
                    </div>
                  </td>
                  <td class="product-total">1</td>
                </tr>
                <tr class="table-body-row">
                  <td class="product-remove">
                    <a href="#"><i class="far fa-window-close"></i></a>
                  </td>
                  <td class="product-image">
                    <img src="../assets/img/products/product-img-3.jpg" alt="" />
                  </td>
                  <td class="product-name">Satu Lagi</td>
                  <td class="product-price">Rp 25.000</td>
                  <td class="product-quantity">
                    <div class="d-flex align-items-center">
                      <input type="number" placeholder="0" class="form-control ml-5" />
                      <p class="ml-2 mb-0">kg</p>
                    </div>
                  </td>
                  <td class="product-total">1</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="total-section">
            <table class="total-table">
              <thead class="total-table-head">
                <tr class="table-total-row">
                  <th>Total</th>
                  <th>Harga</th>
                </tr>
              </thead>
              <tbody>
                <tr class="total-data">
                  <td><strong>Subtotal: </strong></td>
                  <td>$500</td>
                </tr>
                <tr class="total-data">
                  <td><strong>Pengiriman: </strong></td>
                  <td>$45</td>
                </tr>
                <tr class="total-data">
                  <td><strong>Total: </strong></td>
                  <td>$545</td>
                </tr>
              </tbody>
            </table>
            <div class="cart-buttons">
              <a href="<?php echo $akarUrl; ?>src/user/pages/cart.php" class="boxed-btn">Perbaharui</a>
              <a href="<?php echo $akarUrl; ?>src/user/pages/checkout.php" class="boxed-btn black">Lanjutkan Pesanan</a>
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
              <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
              <li>support@fruitkha.com</li>
              <li>+00 111 222 3333</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="footer-box pages">
            <h2 class="widget-title">Halaman</h2>
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