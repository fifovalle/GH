<?php include '../config/databases.php'; ?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Data Admin</title>
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
</head>

<body>
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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Admin</span></h4>
                        <div class="table-responsive text-nowrap">
                            <table class="table card-table">
                                <div class="justify-content-end d-flex">
                                    <button class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#tambahAdmin">Tambah Admin</button>
                                </div>
                                <thead>
                                    <tr>
                                        <th>Foto</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Peran</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>
                                            <div class="avatar avatar-xl pull-up" title="Nama Admin">
                                                <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                            </div>
                                        </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Ahsan</strong></td>
                                        <td>Email Admin</td>
                                        <td>Alamat Admin</td>
                                        <td>Peran Admin</td>
                                        <td><span class="badge bg-label-primary me-1">Aktif</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#suntingAdmin">
                                                        <i class="bx bx-edit-alt me-1"></i> Sunting
                                                    </a>
                                                    <a class="dropdown-item" href="javascript:void(0);">
                                                        <i class="bx bx-trash me-1"></i> Hapus
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- FOOTER START -->
                    <?php include '../partials/footer.php' ?>
                    <!-- FOOTER END -->

                    <!-- MODAL START -->
                    <?php include '../partials/add-modal-admin.php' ?>
                    <?php include '../partials/edit-modal-admin.php' ?>
                    <!-- MODAL END  -->
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/dashboards-analytics.js"></script>


    <!-- ALERT -->
    <?php include '../partials/alert.php' ?>

</body>

</html>