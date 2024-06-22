<?php
include '../config/databases.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <title>Ndaru Farm | Daftar</title>
  <link rel="shortcut icon" type="image/png" href="../assets/img/company-logos/logo_ndaru.jpg" />
  <!-- link internal -->
  <link rel="stylesheet" href="../assets/css/sign-up.css" />
  <!--  link external-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<section class="vh-100">
  <div class="loader">
    <div class="loader-inner">
      <div class="circle"></div>
    </div>
  </div>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../../admin/assets/img/backgrounds/login.png" class="img-fluid" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form id="wizardForm" action="../config/add-user.php" method="POST">
                  <div class="mt-5 mb-4 pb-1 d-flex justify-content-between align-items-center">
                    <img class="logo-comp" src="../assets/img/company-logos/logo_ndaru.jpg">
                    <h5 class="fw-bold mb-3 pb-3 text-center" style="letter-spacing: 1px; flex-grow: 1;">
                      Masukan data diri Anda!
                    </h5>
                  </div>
                  <div id="step1" class="step">
                    <div class="form-outline mb-3">
                      <label class="form-label">Nama Depan</label>
                      <input type="text" id="namaAwal" name="Nama_Depan_Pengguna" class="form-control form-control-lg" placeholder="Masukkan nama depan Anda" autocomplete="off" />
                    </div>
                    <div class="form-outline">
                      <label class="form-label">Nama Belakang</label>
                      <input type="text" id="namaAkhir" name="Nama_Belakang_Pengguna" class="form-control form-control-lg" placeholder="Masukkan nama belakang Anda" autocomplete="off" />
                    </div>
                  </div>
                  <div id="step2" class="step">
                    <div class="form-outline mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" id="email" name="Email_Pengguna" class="form-control form-control-lg" placeholder="Masukkan email Anda" autocomplete="off" />
                    </div>
                    <div class="form-outline">
                      <label class="form-label">Nama Pengguna</label>
                      <input type="text" id="namaPengguna" name="Nama_Pengguna" class="form-control form-control-lg" placeholder="Masukkan nama pengguna Anda" autocomplete="off" />
                    </div>
                  </div>
                  <div id="step3" class="step">
                    <div class="form-outline mb-3">
                      <label class="form-label">Kata Sandi</label>
                      <input type="password" id="password-signup" name="Kata_Sandi_Pengguna" class="form-control form-control-lg" placeholder="Masukkan kata sandi Anda" />
                      <i class="fas fa-eye position-absolute" id="toggle-signup" style="right: 65px; top: 273px; cursor: pointer"></i>
                    </div>
                    <div class="form-outline">
                      <label class="form-label">Konfirmasi Kata Sandi</label>
                      <input type="password" id="cpassword-signup" name="Konfirmasi_Kata_Sandi_Pengguna" class="form-control form-control-lg" placeholder="Konfirmasi kata sandi Anda" />
                      <i class="fas fa-eye position-absolute" id="toggle-csignup" style="right: 65px; top: 370px; cursor: pointer"></i>
                    </div>
                  </div>
                  <div id="step4" class="step">
                    <div class="form-outline mb-3">
                      <label class="form-label">Nomor Telepon</label>
                      <input type="tel" id="noHP" name="No_Telepon_Pengguna" class="form-control form-control-lg" placeholder="Masukkan nomor telepon Anda" autocomplete="off" />
                    </div>
                    <div class="form-outline">
                      <label class="form-label">Alamat</label>
                      <input type="text" id="alamat" name="Alamat_Pengguna" class="form-control form-control-lg" placeholder="Masukkan alamat Anda" autocomplete="off" />
                    </div>
                  </div>
                  <div class="pt-1 mt-4 mb-5 d-flex justify-content-between">
                    <button id="prevBtn" class="btn btn-lg" type="button" onclick="prevStep()">
                      Sebelumnya
                    </button>
                    <button id="nextBtn" class="btn btn-lg" type="button" onclick="nextStep()">
                      Selanjutnya
                    </button>
                    <button id="submitBtn" class="btn btn-lg btn-block" name="Daftar" type="submit" onclick="submitForm()">
                      Daftar
                    </button>
                  </div>
                  <p class="text-login mb-5 pb-lg-2">
                    Sudah mempunyai akun?
                    <a href="<?php echo $akarUrl; ?>src/user/pages/login.php">Masuk</a>
                  </p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- script internal -->
  <script src=" ../assets/js/signup.js"></script>
  <script src="../assets/js/jquery-1.11.3.min.js"></script>
  <script src="../assets/js/loaders.js"></script>
  <!-- script external -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- ALERT -->
  <?php include '../partials/alert.php' ?>
</section>