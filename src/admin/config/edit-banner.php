<?php
include 'databases.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idSpanduk = $_POST['ID_Spanduk'] ?? '';
    $namaSpanduk = $_POST['Nama_Spanduk'] ?? '';

    $spandukModel = new Spanduk($koneksi);

    $namaFileBaru = '';

    if (isset($_FILES['Gambar_Spanduk']) && ($_FILES['Gambar_Spanduk']['size'] > 0)) {
        $gambarSpanduk = $_FILES['Gambar_Spanduk'];
        $lokasiFile = $gambarSpanduk['tmp_name'];
        $ekstensiFile = pathinfo($gambarSpanduk['name'], PATHINFO_EXTENSION);

        if (!in_array($ekstensiFile, array('jpg', 'jpeg', 'png', 'gif'))) {
            echo json_encode(array("success" => false, "message" => "Ekstensi file gambar tidak valid. Harus berupa JPG, JPEG, PNG, atau GIF."));
            exit;
        }

        $namaFileBaru = uniqid() . '.' . $ekstensiFile;
        $tujuanGambarSpanduk = "../uploads/" . $namaFileBaru;

        if (!move_uploaded_file($lokasiFile, $tujuanGambarSpanduk)) {
            echo json_encode(array("success" => false, "message" => "Gagal mengunggah gambar baru."));
            exit;
        }
    }

    $gambarSpandukLama = $spandukModel->getGambarSpandukById($idSpanduk);

    if (empty($namaFileBaru)) {
        $namaFileBaru = $gambarSpandukLama;
    }

    $dataSpanduk = array(
        'Nama_Spanduk' => $namaSpanduk,
        'Gambar_Spanduk' => $namaFileBaru
    );

    $updateDataSpanduk = $spandukModel->perbaruiSpanduk($idSpanduk, $dataSpanduk);

    if ($updateDataSpanduk) {
        echo json_encode(array("success" => true, "message" => "Data spanduk berhasil diperbarui."));
    } else {
        echo json_encode(array("success" => false, "message" => "Gagal memperbarui data spanduk."));
    }
    exit;
} else {
    echo json_encode(array("success" => false, "message" => "Metode request tidak valid."));
    exit;
}
