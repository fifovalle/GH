<?php
include 'databases.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idProduk = $_POST['ID_Produk'] ?? '';
    $namaProduk = $_POST['Nama_Produk'] ?? '';
    $deskripsiProduk = $_POST['Deskripsi_Produk'] ?? '';
    $hargaProduk = $_POST['Harga_Produk'] ?? '';
    $stokProduk = $_POST['Stok_Produk'] ?? '';
    $statusTersediaProduk = $_POST['Status_Tersedia_Produk'] ?? '';

    $produkModel = new Produk($koneksi);

    $namaFileBaru = '';

    if (isset($_FILES['Gambar_Produk']) && ($_FILES['Gambar_Produk']['size'] > 0)) {
        $gambarProduk = $_FILES['Gambar_Produk'];
        $lokasiFile = $gambarProduk['tmp_name'];
        $ekstensiFile = pathinfo($gambarProduk['name'], PATHINFO_EXTENSION);

        if (!in_array($ekstensiFile, array('jpg', 'jpeg', 'png', 'gif'))) {
            echo json_encode(array("success" => false, "message" => "Ekstensi file gambar tidak valid. Harus berupa JPG, JPEG, PNG, atau GIF."));
            exit;
        }

        $namaFileBaru = uniqid() . '.' . $ekstensiFile;
        $tujuanGambarProduk = "../uploads/" . $namaFileBaru;

        if (!move_uploaded_file($lokasiFile, $tujuanGambarProduk)) {
            echo json_encode(array("success" => false, "message" => "Gagal mengunggah gambar baru."));
            exit;
        }
    }

    $gambarProdukLama = $produkModel->getGambarProdukById($idProduk);

    if (empty($namaFileBaru)) {
        $namaFileBaru = $gambarProdukLama;
    }

    $dataProduk = array(
        'Nama_Produk' => $namaProduk,
        'Deskripsi_Produk' => $deskripsiProduk,
        'Harga_Produk' => $hargaProduk,
        'Stok_Produk' => $stokProduk,
        'Status_Tersedia_Produk' => $statusTersediaProduk,
        'Gambar_Produk' => $namaFileBaru
    );

    $updateDataProduk = $produkModel->perbaruiProduk($idProduk, $dataProduk);

    if ($updateDataProduk) {
        echo json_encode(array("success" => true, "message" => "Data produk berhasil diperbarui."));
    } else {
        echo json_encode(array("success" => false, "message" => "Gagal memperbarui data produk."));
    }
    exit;
} else {
    echo json_encode(array("success" => false, "message" => "Metode request tidak valid."));
    exit;
}
