<?php
include 'config.php';

$kode = $conn->real_escape_string($_POST['kode_barang']);
$nama = $conn->real_escape_string($_POST['nama_barang']);
$jumlah = (int)$_POST['jumlah_barang'];
$satuan = $conn->real_escape_string($_POST['satuan_barang']);
$harga = (float)$_POST['harga_beli'];
$status = (int)$_POST['status_barang'];

$sql = "INSERT INTO tb_inventory (kode_barang, nama_barang, jumlah_barang, satuan_barang, harga_beli, status_barang)
        VALUES ('$kode', '$nama', $jumlah, '$satuan', $harga, $status)";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
