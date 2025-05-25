<?php
include 'config.php';
$id = (int)($_GET['id'] ?? 0);
$sql = "SELECT * FROM tb_inventory WHERE id_barang = $id";
$result = $conn->query($sql);
if ($result->num_rows == 0) die("Data tidak ditemukan");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tambah = (int)$_POST['jumlah_tambah'];
    if ($tambah <= 0) {
        $error = "Jumlah penambahan harus lebih dari 0.";
    } else {
        $new_jumlah = $row['jumlah_barang'] + $tambah;
        $new_status = 1; // otomatis available kalau ada stok
        $update_sql = "UPDATE tb_inventory SET jumlah_barang = $new_jumlah, status_barang = $new_status WHERE id_barang = $id";
        if ($conn->query($update_sql)) {
            header("Location: index.php");
            exit;
        } else {
            $error = "Error update: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Tambah Stok Barang</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Stok Barang - <?= htmlspecialchars($row['nama_barang']) ?></h2>
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    <form method="POST">
        <div class="form-group">
            <label>Jumlah Stok Saat Ini: <?= $row['jumlah_barang'] ?> <?= htmlspecialchars($row['satuan_barang']) ?></label>
        </div>
        <div class="form-group">
            <label>Jumlah Penambahan</label>
            <input type="number" name="jumlah_tambah" min="1" class="form-control" required />
        </div>
        <button type="submit" class="btn btn-success">Tambah Stok</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
