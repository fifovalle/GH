<?php
include 'databases.php';

$spandukModel = new Spanduk($koneksi);

$spandukID = isset($_GET['spanduk_id']) ? $_GET['spanduk_id'] : null;
$dataSpanduk = $spandukModel->tampilkanDataSpanduk($spandukID);

$spandukDitemukan = null;

foreach ($dataSpanduk as $spanduk) {
    $spandukDitemukan = $spanduk['ID_Spanduk'] == $spandukID ? $spanduk : null;
    if ($spandukDitemukan) {
        break;
    }
}

echo json_encode($spandukDitemukan);
