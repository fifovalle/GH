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
    <title>Data Berita</title>
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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Berita</span></h4>
                        <div class="table-responsive text-nowrap">
                            <table class="table card-table">
                                <div class="justify-content-end d-flex">
                                    <button class="btn btn-primary me-4 mb-3" data-bs-toggle="modal" data-bs-target="#tambahBerita">Tambah Berita</button>
                                </div>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php
                                $beritaModel = new Berita($koneksi);
                                $beritaInfo = $beritaModel->tampilkanDataBerita();
                                ?>
                                <tbody class="table-border-bottom-0">
                                    <?php if (!empty($beritaInfo)) : ?>
                                        <?php $nomor = 1; ?>
                                        <?php foreach ($beritaInfo as $berita) : ?>
                                            <tr>
                                                <td><?php echo $nomor++; ?></td>
                                                <td>
                                                    <div class="avatar avatar-xl pull-up" title="Nama Berita">
                                                        <img src="../uploads/<?php echo $berita['Gambar_Berita']; ?>" alt="Avatar" class="rounded-circle" />
                                                    </div>
                                                </td>
                                                <td><?php echo $berita['Judul_Berita']; ?></td>
                                                <td><?php echo $berita['Deskripsi_Berita']; ?></td>
                                                <td><?php echo $berita['Tanggal_Berita']; ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item buttonBerita" style="cursor: pointer;" data-bs-toggle="modal" data-id="<?php echo $berita['ID_Berita']; ?>"><i class="bx bx-edit-alt me-1"></i>Sunting</a>
                                                            <a class="dropdown-item" style="cursor: pointer;" onclick="konfirmasiHapusBerita(<?php echo $berita['ID_Berita']; ?>)"><i class="bx bx-trash me-1"></i>Hapus</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="7" class="text-center text-danger fw-bold">Tidak ada data berita!</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- FOOTER START -->
                    <?php include '../partials/footer.php' ?>
                    <!-- FOOTER END -->

                    <!-- MODAL START -->
                    <?php include '../partials/add-modal-news.php' ?>
                    <?php include '../partials/edit-modal-news.php' ?>
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
    <script src="../assets/js/delete-news.js"></script>
    <script src="../assets/js/value-news.js"></script>


    <!-- ALERT -->
    <?php include '../partials/alert.php' ?>
</body>

</html>