<?php
include '../config/databases.php';

if (!isset($_SESSION['ID_Admin'])) {
  setPesanKesalahan("Silahkan login terlebih dahulu!");
  header("Location: $akarUrl" . "src/admin/pages/login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Data Pengguna</title>
  <meta name="description" content="Website Tubes Pemrograman Web" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="../assets/js/config.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- SIDEBAR START -->
      <?php include '../partials/sidebar.php' ?>
      <!-- SIDEBAR END -->
      <div class="layout-page">
        <!-- NAVBAR START -->
        <?php include '../partials/navbar.php' ?>
        <!-- NAVBAR END -->
        <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4">
                  <h4 class="card-header">Profil Saya</h4>
                  <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                      <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block w-px-120 h-px-120 rounded" id="uploadedAvatar" />
                      <div class="button-wrapper">
                        <label for="upload" class="btn btn-primary me-2 mb-3" tabindex="0">
                          <span class="d-none d-sm-block">Unggah foto baru</span>
                          <i class="mdi mdi-tray-arrow-up d-block d-sm-none"></i>
                          <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                        </label>
                        <button type="button" class="btn btn-outline-danger account-image-reset mb-3">
                          <i class="mdi mdi-reload d-block d-sm-none"></i>
                          <span class="d-none d-sm-block">Atur Ulang</span>
                        </button>
                        <div class="text-muted small">Diizinkan JPG, GIF atau PNG. Ukuran maksimal 800Kb</div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-2 mt-1">
                    <form id="formAccountSettings" method="POST" onsubmit="return false">
                      <div class="row mt-2 gy-4">
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="firstName" name="firstName" placeholder="Masukan nama awal" autofocus />
                            <label for="firstName">Nama Awal</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Masukan nama akhir" />
                            <label for="lastName">Nama Akhir</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="email" name="email" placeholder="contoh@gmail.com" />
                            <label for="email">E-mail</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="08123456789" />
                            <label for="phoneNumber">No Telepon</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-floating form-floating-outline">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Masukan alamat" />
                            <label for="address">Alamat</label>
                          </div>
                        </div>
                      </div>
                      <div class="mt-4">
                        <button type="submit" class="btn btn-primary me-2">Simpan</button>
                        <button type="reset" class="btn btn-outline-danger">Atur Ulang</button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card">
                  <h5 class="card-header fw-normal">Hapus Akun</h5>
                  <div class="card-body">
                    <div class="mb-3 col-12 mb-0">
                      <div class="alert alert-warning">
                        <h6 class="alert-heading mb-1">Apakah Anda yakin ingin menghapus akun Anda?</h6>
                        <p class="mb-0">Setelah Anda menghapus akun Anda, tidak ada jalan untuk kembali. Harap yakin.</p>
                      </div>
                    </div>
                    <form id="formAccountDeactivation" onsubmit="return false">
                      <div class="form-check mb-3 ms-3">
                        <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation" />
                        <label class="form-check-label" for="accountActivation">Saya mengonfirmasi penonaktifan akun saya</label>
                      </div>
                      <button type="submit" class="btn btn-danger">Nonaktifkan Akun</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FOOTER START -->
          <?php include '../partials/footer.php' ?>
          <!-- FOOTER END -->
          <div class="content-backdrop fade"></div>
        </div>
      </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../assets/vendor/js/menu.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../assets/js/profile.js"></script>
</body>

</html>