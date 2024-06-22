<?php include '../config/databases.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ndaru Farm | Ubah kata sandi</title>
    <link rel="icon" href="../../user/assets/img/company-logos/logo_ndaru.jpg" />
    <!-- link internal -->
    <link rel="stylesheet" href="../assets/css/login.css" />
    <!--  link external-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>
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
                                <img src="../assets/img/backgrounds/login.png" class="img-fluid" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="../config/login-admin.php" method="post">
                                        <div class="mt-3 mb-4 pb-1 d-flex justify-content-between align-items-center">
                                            <img class="logo-comp" src="../../user/assets/img/company-logos/logo_ndaru.jpg" />
                                            <h5 class="fw-bold mb-3 pb-3 text-center" style="letter-spacing: 1px; flex-grow: 1">
                                                Masukan kata sandi baru!
                                            </h5>
                                        </div>
                                        <div class="form-outline mb-4 position-relative">
                                            <label class="form-label">Kata Sandi Baru</label>
                                            <input type="password" id="reset_password" name="Ubah_Kata_Sandi_Admin" class="form-control form-control-lg" placeholder="Masukan Kata Sandi Baru" />
                                            <i class="fas fa-eye position-absolute" id="toggle-reset" style="right: 25px; top: 50px; cursor: pointer"></i>
                                        </div>
                                        <div class="form-outline mb-4 position-relative">
                                            <label class="form-label">Konfirmasi Kata Sandi Baru</label>
                                            <input type="password" id="confirm_password" name="Konfirmasi_Kata_Sandi_Admin" class="form-control form-control-lg" placeholder="Konfirmasi Kata Sandi Baru" />
                                            <i class="fas fa-eye position-absolute" id="toggle-confirm" style="right: 25px; top: 50px; cursor: pointer"></i>
                                        </div>
                                        <div class="pt-1 mb-4 d-flex justify-content-center">
                                            <button class="btn btn-lg btn-block" name="Masuk" type="submit">Konfirmasi</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- script internal -->
        <script src="../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../assets/js/reset-password.js"></script>
        <script src="../../user/assets/js/jquery-1.11.3.min.js"></script>
        <script src="../assets/js/loaders.js"></script>
        <!-- ALERT -->
        <?php include '../partials/alert.php' ?>
    </section>
</body>

</html>