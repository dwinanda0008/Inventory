<?php
include 'config.php';

$id = (int)$_POST['id_barang'];
$kode = $conn->real_escape_string($_POST['kode_barang']);
$nama = $conn->real_escape_string($_POST['nama_barang']);
$jumlah = (int)$_POST['jumlah_barang'];
$satuan = $conn->real_escape_string($_POST['satuan_barang']);
$harga = (float)$_POST['harga_beli'];
$status = (int)$_POST['status_barang'];

$sql = "UPDATE tb_inventory SET
        kode_barang='$kode',
        nama_barang='$nama',
        jumlah_barang=$jumlah,
        satuan_barang='$satuan',
        harga_beli=$harga,
        status_barang=$status
        WHERE id_barang=$id";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>
