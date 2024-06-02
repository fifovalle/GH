<?php
include 'databases.php';
ob_start();

if (isset($_POST['Simpan'])) {
    if (empty($_POST['Nama_Testimoni']) || empty($_POST['Pesan_Testimoni']) || empty($_POST['Status_Testimoni'])) {
        setPesanKesalahan("Semua field harus diisi.");
        header("Location: " . $akar_tautan . "src/admin/pages/testimoni.php");
        exit;
    }

    $namaTestimoni = mysqli_real_escape_string($koneksi, $_POST['Nama_Testimoni']);
    $pesanTestimoni = mysqli_real_escape_string($koneksi, $_POST['Pesan_Testimoni']);
    $statusTestimoni = mysqli_real_escape_string($koneksi, $_POST['Status_Testimoni']);

    $idAdmin = $_SESSION['ID_Admin'];

    $objekTestimoni = new Testimoni($koneksi);

    $dataTestimoni = array(
        "ID_Admin" => $idAdmin,
        'Nama_Testimoni' => $namaTestimoni,
        'Pesan_Testimoni' => $pesanTestimoni,
        'Status_Testimoni' => $statusTestimoni,
    );

    $simpanDataTestimoni = $objekTestimoni->tambahTestimoni($dataTestimoni);

    if ($simpanDataTestimoni) {
        setPesanKeberhasilan("Berhasil menyimpan data Testimoni.");
    } else {
        setPesanKesalahan("Gagal menyimpan data Testimoni.");
    }
    header("Location: " . $akar_tautan . "src/admin/pages/testimoni.php");
    exit;
} else {
    header("Location: " . $akar_tautan . "src/admin/pages/testimoni.php");
    exit;
}
ob_end_flush();
