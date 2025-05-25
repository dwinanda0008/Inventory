<?php
include 'config.php';

$id = (int)($_GET['id'] ?? 0);

$sql = "DELETE FROM tb_inventory WHERE id_barang = $id";
if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
