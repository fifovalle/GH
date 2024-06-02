<?php
include 'databases.php';
ob_start();

if (isset($_POST['Simpan'])) {
    $namaFile = $_FILES['Gambar_Berita']['name'];
    $lokasiFile = $_FILES['Gambar_Berita']['tmp_name'];

    if (empty($namaFile)) {
        setPesanKesalahan("Gambar tidak diunggah. Silakan upload gambar.");
        header("Location: " . $akarUrl . "src/admin/pages/data-news.php");
        exit;
    }

    $ekstensiFile = pathinfo($namaFile, PATHINFO_EXTENSION);
    $namaFileUnik = uniqid('berita_') . '.' . $ekstensiFile;
    $tujuanFile = '../uploads/' . $namaFileUnik;

    if (move_uploaded_file($lokasiFile, $tujuanFile)) {
        $gambar = $namaFileUnik;
        $judul = mysqli_real_escape_string($koneksi, $_POST['Judul_Berita']);
        $deskripsiBerita = mysqli_real_escape_string($koneksi, $_POST['Deskripsi_Berita']);
        $tanggalBerita = mysqli_real_escape_string($koneksi, $_POST['Tanggal_Berita']);

        $idAdmin = isset($_SESSION['ID_Admin']) ? $_SESSION['ID_Admin'] : NULL;

        $objekBerita = new Berita($koneksi);

        $dataBerita = array(
            "ID_Admin" => $_SESSION['ID_Admin'],
            'Gambar_Berita' => $gambar,
            'Judul_Berita' => $judul,
            'Deskripsi_Berita' => $deskripsiBerita,
            'Tanggal_Berita' => $tanggalBerita,
        );

        $simpanDataBerita = $objekBerita->tambahBerita($dataBerita);

        if ($simpanDataBerita) {
            setPesanKeberhasilan("Berhasil menyimpan data Berita.");
        } else {
            setPesanKesalahan("Gagal menyimpan data Berita.");
        }
        header("Location: " . $akarUrl . "src/admin/pages/data-news.php");
        exit;
    } else {
        setPesanKesalahan("Gagal mengunggah file Gambar.");
        header("Location: " . $akarUrl . "src/admin/pages/data-news.php");
        exit;
    }
} else {
    header("Location: " . $akarUrl . "src/admin/pages/data-news.php");
    exit;
}
ob_end_flush();
