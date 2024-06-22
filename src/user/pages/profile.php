<?php include '../config/databases.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profile Saya</title>
  <link rel="shortcut icon" type="image/png" href="../assets/img/company-logos/logo_ndaru.jpg" />
  <!--  link external-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- link internal -->
  <link rel="stylesheet" href="../assets/css/all.min.css" />
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../assets/css/owl.carousel.css" />
  <link rel="stylesheet" href="../assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="../assets/css/animate.css" />
  <link rel="stylesheet" href="../assets/css/meanmenu.min.css" />
  <link rel="stylesheet" href="../assets/css/index.css" />
  <link rel="stylesheet" href="../assets/css/responsive.css" />
  <link rel="stylesheet" href="../assets/css/profile.css" />
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
                    <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
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
            <p>melihat identitas diri</p>
            <h1>Profile Saya</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-profile">
    <div class="row">
      <div class="col-md-3">
        <div class="avatar-upload">
          <div class="avatar-edit">
            <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"><i class="fas fa-pencil-alt"></i></label>
          </div>
          <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url('../assets/img/avaters/default-avatar.jpg');">
            </div>
          </div>
          <button id="resetImage" class="btn btn-secondary">Atur Ulang</button>
          <div class="controls mt-3">
            <label for="horizontalPosition">Atur Horizontal</label>
            <input type="range" id="horizontalPosition" min="0" max="100" value="50">
            <label for="verticalPosition">Atur Vertikal</label>
            <input type="range" id="verticalPosition" min="0" max="100" value="50">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstName">Nama Awal</label>
              <input type="text" class="form-control" id="namaAwal" placeholder="Masukan nama awal">
            </div>
            <div class="form-group col-md-6">
              <label for="lastName">Nama Akhir</label>
              <input type="text" class="form-control" id="namaAkhir" placeholder="Masukan nama akhir" autocomplete="off">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Masukan email" autocomplete="off">
            </div>
            <div class="form-group col-md-6">
              <label for="username">Nama Pengguna</label>
              <input type="text" class="form-control" id="namaPengguna" placeholder="Masukan nama pengguna" autocomplete="off">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="phoneNumber">No Telepon</label>
              <input type="text" class="form-control" id="noTelepon" placeholder="Masukan nomor telepon" autocomplete="off">
            </div>
            <div class="form-group col-md-6">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" autocomplete="off">
            </div>
          </div>
          <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        </form>
      </div>
      <div class="col-md-3">
        <div class="comment-template">
          <h4>Terdapat Sesuatu?</h4>
          <p class="mb-3">
            Klik tombol dibawah untuk mengirimkan aspirasi Anda!
          </p>
          <p><a class="btn btn-secondary btn-kontak" href="<?php echo $akarUrl; ?>src/user/pages/contact-us.php">Kirim</a></p>
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
      <a href="produk.html" class="cart-btn btn-lg">Belanja Sekarang</a>
    </div>
  </section>
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
  <script>
    document.getElementById('imageUpload').addEventListener('change', function() {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById('imagePreview').style.backgroundImage = 'url(' + e.target.result + ')';
        // Tampilkan controls setelah upload gambar
        document.querySelector('.controls').style.display = 'block';
      }
      reader.readAsDataURL(this.files[0]);
    });

    document.getElementById('resetImage').addEventListener('click', function() {
      document.getElementById('imagePreview').style.backgroundImage = 'url(../assets/img/avaters/default-avatar.jpg)';
      // Sembunyikan controls saat mereset gambar
      document.querySelector('.controls').style.display = 'none';
    });

    document.getElementById('horizontalPosition').addEventListener('input', function() {
      var value = this.value;
      document.getElementById('imagePreview').style.backgroundPositionX = value + '%';
    });

    document.getElementById('verticalPosition').addEventListener('input', function() {
      var value = this.value;
      document.getElementById('imagePreview').style.backgroundPositionY = value + '%';
    });
  </script>
</body>

</html>