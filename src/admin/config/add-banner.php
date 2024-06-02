<?php
include 'databases.php';
ob_start();

if (isset($_POST['Simpan'])) {
    $namaFile = $_FILES['Gambar_Spanduk']['name'];
    $lokasiFile = $_FILES['Gambar_Spanduk']['tmp_name'];

    if (empty($namaFile)) {
        setPesanKesalahan("Gambar tidak diunggah. Silakan upload gambar.");
        header("Location: " . $akarUrl . "src/admin/pages/data-banner.php");
        exit;
    }

    $ekstensiFile = pathinfo($namaFile, PATHINFO_EXTENSION);
    $namaFileUnik = uniqid('spanduk_') . '.' . $ekstensiFile;
    $tujuanFile = '../uploads/' . $namaFileUnik;

    if (move_uploaded_file($lokasiFile, $tujuanFile)) {
        $gambar = $namaFileUnik;
        $namaSpanduk = mysqli_real_escape_string($koneksi, $_POST['Nama_Spanduk']);

        $idAdmin = isset($_SESSION['ID_Admin']) ? $_SESSION['ID_Admin'] : NULL;

        $objekSpanduk = new Spanduk($koneksi);

        $dataSpanduk = array(
            "ID_Admin" => $_SESSION['ID_Admin'],
            'Gambar_Spanduk' => $gambar,
            'Nama_Spanduk' => $namaSpanduk,
        );

        $simpanDataSpanduk = $objekSpanduk->tambahSpanduk($dataSpanduk);

        if ($simpanDataSpanduk) {
            setPesanKeberhasilan("Berhasil menyimpan data Spanduk.");
        } else {
            setPesanKesalahan("Gagal menyimpan data Spanduk.");
        }
        header("Location: " . $akarUrl . "src/admin/pages/data-banner.php");
        exit;
    } else {
        setPesanKesalahan("Gagal mengunggah file Gambar.");
        header("Location: " . $akarUrl . "src/admin/pages/data-banner.php");
        exit;
    }
} else {
    header("Location: " . $akarUrl . "src/admin/pages/data-banner.php");
    exit;
}
ob_end_flush();
