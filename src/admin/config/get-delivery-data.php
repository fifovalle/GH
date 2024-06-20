<?php
include 'databases.php';

$deliveryModel = new Pengiriman($koneksi);

$deliveryID = isset($_GET['delivery_id']) ? $_GET['delivery_id'] : null;
$dataDelivery = $deliveryModel->tampilkanDataPengiriman($deliveryID);

$pengirimanDitemukan = null;

foreach ($dataDelivery as $delivery) {
    $pengirimanDitemukan = $delivery['ID_Pengiriman'] == $deliveryID ? $delivery : null;
    if ($pengirimanDitemukan) {
        break;
    }
}

echo json_encode($pengirimanDitemukan);
