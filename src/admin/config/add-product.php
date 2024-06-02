<?php
include 'databases.php';
ob_start();

if (isset($_POST['Simpan'])) {
    $namaFile = $_FILES['Gambar_Produk']['name'];
    $lokasiFile = $_FILES['Gambar_Produk']['tmp_name'];

    if (empty($namaFile)) {
        setPesanKesalahan("Gambar tidak diunggah. Silakan upload gambar.");
        header("Location: " . $akarUrl . "src/admin/pages/data-product.php");
        exit;
    }

    $ekstensiFile = pathinfo($namaFile, PATHINFO_EXTENSION);
    $namaFileUnik = uniqid('produk_') . '.' . $ekstensiFile;
    $tujuanFile = '../uploads/' . $namaFileUnik;

    if (move_uploaded_file($lokasiFile, $tujuanFile)) {
        $gambar = $namaFileUnik;
        $namaProduk = mysqli_real_escape_string($koneksi, $_POST['Nama_Produk']);
        $deskripsiProduk = mysqli_real_escape_string($koneksi, $_POST['Deskripsi_Produk']);
        $hargaProduk = mysqli_real_escape_string($koneksi, $_POST['Harga_Produk']);
        $stokProduk = mysqli_real_escape_string($koneksi, $_POST['Stok_Produk']);
        $statusProduk = mysqli_real_escape_string($koneksi, $_POST['Status_Produk']);
        $nomorRekeningProduk = mysqli_real_escape_string($koneksi, $_POST['Nomor_Rekening_Produk']);

        $idAdmin = isset($_SESSION['ID_Admin']) ? $_SESSION['ID_Admin'] : NULL;

        $objekProduk = new Produk($koneksi);

        $dataProduk = array(
            "ID_Admin" => $_SESSION['ID_Admin'],
            'Gambar_Produk' => $gambar,
            'Nama_Produk' => $namaProduk,
            'Deskripsi_Produk' => $deskripsiProduk,
            'Harga_Produk' => $hargaProduk,
            'Stok_Produk' => $stokProduk,
            'Nomor_Rekening_Produk' => $nomorRekeningProduk,
            'Status_Tersedia_Produk' => $statusProduk,
        );

        $simpanDataProduk = $objekProduk->tambahProduk($dataProduk);

        if ($simpanDataProduk) {
            setPesanKeberhasilan("Berhasil menyimpan data Produk.");
        } else {
            setPesanKesalahan("Gagal menyimpan data Produk.");
        }
        header("Location: " . $akarUrl . "src/admin/pages/data-product.php");
        exit;
    } else {
        setPesanKesalahan("Gagal mengunggah file Gambar.");
        header("Location: " . $akarUrl . "src/admin/pages/data-product.php");
        exit;
    }
} else {
    header("Location: " . $akarUrl . "src/admin/pages/data-product.php");
    exit;
}
ob_end_flush();
