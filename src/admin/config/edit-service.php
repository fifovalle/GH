<?php
include 'databases.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idJasa = $_POST['ID_Jasa'] ?? '';
    $namaJasa = $_POST['Nama_Jasa'] ?? '';
    $deskripsiJasa = $_POST['Deskripsi_Jasa'] ?? '';
    $hargaJasa = $_POST['Harga_Jasa'] ?? '';
    $stokJasa = $_POST['Stok_Jasa'] ?? '';
    $statusTersediaJasa = $_POST['Status_Tersedia_Jasa'] ?? '';

    $jasaModel = new Jasa($koneksi);

    $namaFileBaru = '';

    if (isset($_FILES['Gambar_Jasa']) && ($_FILES['Gambar_Jasa']['size'] > 0)) {
        $gambarJasa = $_FILES['Gambar_Jasa'];
        $lokasiFile = $gambarJasa['tmp_name'];
        $ekstensiFile = pathinfo($gambarJasa['name'], PATHINFO_EXTENSION);

        if (!in_array($ekstensiFile, array('jpg', 'jpeg', 'png', 'gif'))) {
            echo json_encode(array("success" => false, "message" => "Ekstensi file gambar tidak valid. Harus berupa JPG, JPEG, PNG, atau GIF."));
            exit;
        }

        $namaFileBaru = uniqid() . '.' . $ekstensiFile;
        $tujuanGambarJasa = "../uploads/" . $namaFileBaru;

        if (!move_uploaded_file($lokasiFile, $tujuanGambarJasa)) {
            echo json_encode(array("success" => false, "message" => "Gagal mengunggah gambar baru."));
            exit;
        }
    }

    $gambarJasaLama = $jasaModel->getGambarJasaById($idJasa);

    if (empty($namaFileBaru)) {
        $namaFileBaru = $gambarJasaLama;
    }

    $dataJasa = array(
        'Nama_Jasa' => $namaJasa,
        'Deskripsi_Jasa' => $deskripsiJasa,
        'Harga_Jasa' => $hargaJasa,
        'Stok_Jasa' => $stokJasa,
        'Status_Tersedia_Jasa' => $statusTersediaJasa,
        'Gambar_Jasa' => $namaFileBaru
    );

    $updateDataJasa = $jasaModel->perbaruiJasa($idJasa, $dataJasa);

    if ($updateDataJasa) {
        echo json_encode(array("success" => true, "message" => "Data jasa berhasil diperbarui."));
    } else {
        echo json_encode(array("success" => false, "message" => "Gagal memperbarui data jasa."));
    }
    exit;
} else {
    echo json_encode(array("success" => false, "message" => "Metode request tidak valid."));
    exit;
}
