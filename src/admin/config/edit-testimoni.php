<?php
include 'databases.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idTestimoni = $_POST['ID_Testimoni'] ?? '';
    $namaTestimoni = $_POST['Nama_Testimoni'] ?? '';
    $pesanTestimoni = $_POST['Pesan_Testimoni'] ?? '';
    $statusTestimoni = $_POST['Status_Testimoni'] ?? '';

    $testimoniModel = new Testimoni($koneksi);

    $dataTestimoni = array(
        'Nama_Testimoni' => $namaTestimoni,
        'Pesan_Testimoni' => $pesanTestimoni,
        'Status_Testimoni' => $statusTestimoni
    );

    $updateDataTestimoni = $testimoniModel->perbaruiTestimoni($idTestimoni, $dataTestimoni);

    if ($updateDataTestimoni) {
        echo json_encode(array("success" => true, "message" => "Data testimoni berhasil diperbarui."));
    } else {
        echo json_encode(array("success" => false, "message" => "Gagal memperbarui data testimoni."));
    }
    exit;
} else {
    echo json_encode(array("success" => false, "message" => "Metode request tidak valid."));
    exit;
}
