<?php
include 'databases.php';
ob_start();

if (isset($_POST['Simpan'])) {
    $namaFile = $_FILES['Gambar_Jasa']['name'];
    $lokasiFile = $_FILES['Gambar_Jasa']['tmp_name'];

    if (empty($namaFile)) {
        setPesanKesalahan("Gambar tidak diunggah. Silakan upload gambar.");
        header("Location: " . $akarUrl . "src/admin/pages/data-service.php");
        exit;
    }

    $ekstensiFile = pathinfo($namaFile, PATHINFO_EXTENSION);
    $namaFileUnik = uniqid('jasa_') . '.' . $ekstensiFile;
    $tujuanFile = '../uploads/' . $namaFileUnik;

    if (move_uploaded_file($lokasiFile, $tujuanFile)) {
        $gambar = $namaFileUnik;
        $namaJasa = mysqli_real_escape_string($koneksi, $_POST['Nama_Jasa']);
        $deskripsiJasa = mysqli_real_escape_string($koneksi, $_POST['Deskripsi_Jasa']);
        $hargaJasa = mysqli_real_escape_string($koneksi, $_POST['Harga_Jasa']);
        $stokJasa = mysqli_real_escape_string($koneksi, $_POST['Stok_Jasa']);
        $nomorRekeningJasa = mysqli_real_escape_string($koneksi, $_POST['Nomor_Rekening_Jasa']);
        $statusJasa = mysqli_real_escape_string($koneksi, $_POST['Status_Tersedia_Jasa']);

        $idAdmin = isset($_SESSION['ID_Admin']) ? $_SESSION['ID_Admin'] : NULL;

        $objekJasa = new Jasa($koneksi);

        $dataJasa = array(
            "ID_Admin" => $_SESSION['ID_Admin'],
            'Gambar_Jasa' => $gambar,
            'Nama_Jasa' => $namaJasa,
            'Deskripsi_Jasa' => $deskripsiJasa,
            'Harga_Jasa' => $hargaJasa,
            'Stok_Jasa' => $stokJasa,
            'Nomor_Rekening_Jasa' => $nomorRekeningJasa,
            'Status_Tersedia_Jasa' => $statusJasa,
        );

        $simpanDataJasa = $objekJasa->tambahJasa($dataJasa);

        if ($simpanDataJasa) {
            setPesanKeberhasilan("Berhasil menyimpan data Jasa.");
        } else {
            setPesanKesalahan("Gagal menyimpan data Jasa.");
        }
        header("Location: " . $akarUrl . "src/admin/pages/data-service.php");
        exit;
    } else {
        setPesanKesalahan("Gagal mengunggah file Gambar.");
        header("Location: " . $akarUrl . "src/admin/pages/data-service.php");
        exit;
    }
} else {
    header("Location: " . $akarUrl . "src/admin/pages/data-service.php");
    exit;
}
ob_end_flush();
