<?php
include 'databases.php';
ob_start();

if (isset($_POST['Simpan'])) {
    if (empty($_POST['Nama_Testimoni']) || empty($_POST['Pesan_Testimoni']) || empty($_POST['Status_Testimoni'])) {
        setPesanKesalahan("Semua field harus diisi.");
        header("Location: " . $akarUrl . "src/admin/pages/data-news.php");
        exit;
    }

    $namaTestimoni = mysqli_real_escape_string($koneksi, $_POST['Nama_Testimoni']);
    $pesanTestimoni = mysqli_real_escape_string($koneksi, $_POST['Pesan_Testimoni']);
    $statusTestimoni = mysqli_real_escape_string($koneksi, $_POST['Status_Testimoni']);

    $objekTestimoni = new Testimoni($koneksi);

    $dataTestimoni = array(
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
    header("Location: " . $akarUrl . "src/admin/pages/data-testimony.php");
    exit;
} else {
    header("Location: " . $akarUrl . "src/admin/pages/data-testimony.php");
    exit;
}
ob_end_flush();
