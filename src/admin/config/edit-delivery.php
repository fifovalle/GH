<?php
include 'databases.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idPengiriman = $_POST['ID_Pengiriman'] ?? '';
    $namaPengiriman = $_POST['Jasa_Pengiriman'] ?? '';
    $batasPengiriman = $_POST['Batas_Pengiriman'] ?? '';
    $jarakPengiriman = $_POST['Jarak_Pengiriman'] ?? '';
    $totalPengiriman = 0;

    $kondisi = [
        "1 KG_1 KM" => 5000,
        "2 KG_1 KM" => 10000,
        "3 KG_1 KM" => 15000,
        "4 KG_1 KM" => 20000,
        "5 KG_1 KM" => 25000,
        "1 KG_2 KM" => 10000,
        "2 KG_2 KM" => 20000,
        "3 KG_2 KM" => 30000,
        "4 KG_2 KM" => 40000,
        "5 KG_2 KM" => 50000,
        "1 KG_3 KM" => 15000,
        "2 KG_3 KM" => 30000,
        "3 KG_3 KM" => 45000,
        "4 KG_3 KM" => 60000,
        "5 KG_3 KM" => 75000,
        "1 KG_4 KM" => 20000,
        "2 KG_4 KM" => 40000,
        "3 KG_4 KM" => 60000,
        "4 KG_4 KM" => 80000,
        "5 KG_4 KM" => 100000,
        "1 KG_5 KM" => 25000,
        "2 KG_5 KM" => 50000,
        "3 KG_5 KM" => 75000,
        "4 KG_5 KM" => 100000,
        "5 KG_5 KM" => 125000
    ];

    $kuncinya = "{$batasPengiriman}_{$jarakPengiriman}";
    $totalPengiriman = isset($kondisi[$kuncinya]) ? $kondisi[$kuncinya] : 0;

    $pengirimanModel = new Pengiriman($koneksi);

    $dataPengiriman = array(
        'Jasa_Pengiriman' => $namaPengiriman,
        'Batas_Pengiriman' => $batasPengiriman,
        'Jarak_Pengiriman' => $jarakPengiriman,
        'Total_Pengiriman' => $totalPengiriman
    );

    $updateDataPengiriman = $pengirimanModel->perbaruiPengiriman($idPengiriman, $dataPengiriman);

    if ($updateDataPengiriman) {
        echo json_encode(array("success" => true, "message" => "Data pengiriman berhasil diperbarui."));
    } else {
        echo json_encode(array("success" => false, "message" => "Gagal memperbarui data testimoni."));
    }
    exit;
} else {
    echo json_encode(array("success" => false, "message" => "Metode request tidak valid."));
    exit;
}
