<?php include '../config/databases.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kontak Kami</title>
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
  <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p>Dapatkan Dukungan dalam 24/7</p>
            <h1>Kontak Kami</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-from-section mt-150 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="form-title">
            <h2>Apakah Anda punya pertanyaan?</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo
              alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore,
              esse natus!
            </p>
          </div>
          <div id="form_status"></div>
          <div class="contact-form">
            <form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
              <p>
                <input type="text" placeholder="Nama" name="nama" id="namaPengguna" />
                <input type="email" placeholder="Email" name="email" id="emailPengguna" />
              </p>
              <p>
                <input type="tel" placeholder="Nomor Telepon" name="phone" id="NoTelepon" />
                <input type="text" placeholder="Subjek" name="subjek" id="subjekPengguna" />
              </p>
              <p>
                <textarea name="Pesan" id="pesanPengguna" cols="30" rows="10" placeholder="Pesan"></textarea>
              </p>
              <input type="hidden" name="token" value="FsWga4&@f6aw" />
              <p><input type="submit" value="Submit" /></p>
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="contact-form-wrap">
            <div class="contact-form-box">
              <h4><i class="fas fa-map"></i> Alamat Toko</h4>
              <p>
                99/9, Jawa Barat <br />
                Bandung, Batujajar. <br />
                Cimahi
              </p>
            </div>
            <div class="contact-form-box">
              <h4><i class="far fa-clock"></i> Waktu Kerja</h4>
              <p>
                SENIN - JUMAT: 8 to 9 PM <br />
                SABTU - MINGUU: 10 to 8 PM
              </p>
            </div>
            <div class="contact-form-box">
              <h4><i class="fas fa-address-book"></i> Kontak</h4>
              <p>
                Telepon: +62 <br />
                Email: contoh@email.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="find-location blue-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p><i class="fas fa-map-marker-alt"></i> Temukan Lokasimu</p>
        </div>
      </div>
    </div>
  </div>
  <div class="embed-responsive embed-responsive-21by9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border: 0" allowfullscreen="" class="embed-responsive-item"></iframe>
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
  <!-- form validation js -->
  <script src="../assets/js/form-validate.js"></script>
  <!-- main js -->
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>