<?php
include 'databases.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idBerita = $_POST['ID_Berita'] ?? '';
    $judulBerita = $_POST['Judul_Berita'] ?? '';
    $deskripsiBerita = $_POST['Deskripsi_Berita'] ?? '';
    $tanggalBerita = $_POST['Tanggal_Berita'] ?? '';

    $beritaModel = new Berita($koneksi);

    $namaFileBaru = '';

    if (isset($_FILES['Gambar_Berita']) && ($_FILES['Gambar_Berita']['size'] > 0)) {
        $gambarBerita = $_FILES['Gambar_Berita'];
        $lokasiFile = $gambarBerita['tmp_name'];
        $ekstensiFile = pathinfo($gambarBerita['name'], PATHINFO_EXTENSION);

        if (!in_array($ekstensiFile, array('jpg', 'jpeg', 'png', 'gif'))) {
            echo json_encode(array("success" => false, "message" => "Ekstensi file gambar tidak valid. Harus berupa JPG, JPEG, PNG, atau GIF."));
            exit;
        }

        $namaFileBaru = uniqid() . '.' . $ekstensiFile;
        $tujuanGambarBerita = "../uploads/" . $namaFileBaru;

        if (!move_uploaded_file($lokasiFile, $tujuanGambarBerita)) {
            echo json_encode(array("success" => false, "message" => "Gagal mengunggah gambar baru."));
            exit;
        }
    }

    $gambarBeritaLama = $beritaModel->getGambarBeritaById($idBerita);

    if (empty($namaFileBaru)) {
        $namaFileBaru = $gambarBeritaLama;
    }

    $dataBerita = array(
        'Judul_Berita' => $judulBerita,
        'Deskripsi_Berita' => $deskripsiBerita,
        'Tanggal_Berita' => $tanggalBerita,
        'Gambar_Berita' => $namaFileBaru
    );

    $updateDataBerita = $beritaModel->perbaruiBerita($idBerita, $dataBerita);

    if ($updateDataBerita) {
        echo json_encode(array("success" => true, "message" => "Data berita berhasil diperbarui."));
    } else {
        echo json_encode(array("success" => false, "message" => "Gagal memperbarui data berita."));
    }
    exit;
} else {
    echo json_encode(array("success" => false, "message" => "Metode request tidak valid."));
    exit;
}
