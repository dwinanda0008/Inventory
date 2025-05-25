<?php
include 'config.php';
$id = (int)($_GET['id'] ?? 0);
$sql = "SELECT * FROM tb_inventory WHERE id_barang = $id";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    die("Data tidak ditemukan");
}
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Edit Barang</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
<div class="container mt-5">
    <h2>Edit Data Barang</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id_barang" value="<?= $row['id_barang'] ?>" />
        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" value="<?= htmlspecialchars($row['kode_barang']) ?>" required />
        </div>
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="<?= htmlspecialchars($row['nama_barang']) ?>" required />
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah_barang" class="form-control" min="0" value="<?= $row['jumlah_barang'] ?>" required />
        </div>
        <div class="form-group">
            <label>Satuan</label>
            <select name="satuan_barang" class="form-control" required>
                <option value="pcs" <?= $row['satuan_barang'] == 'pcs' ? 'selected' : '' ?>>pcs</option>
                <option value="kg" <?= $row['satuan_barang'] == 'kg' ? 'selected' : '' ?>>kg</option>
                <option value="liter" <?= $row['satuan_barang'] == 'liter' ? 'selected' : '' ?>>liter</option>
                <option value="meter" <?= $row['satuan_barang'] == 'meter' ? 'selected' : '' ?>>meter</option>
            </select>
        </div>
        <div class="form-group">
            <label>Harga Beli</label>
            <input type="number" step="0.01" name="harga_beli" class="form-control" min="0" value="<?= $row['harga_beli'] ?>" required />
        </div>
        <div class="form-group">
            <label>Status</label><br />
            <input type="radio" name="status_barang" value="1" <?= $row['status_barang'] ? 'checked' : '' ?> /> Available
            <input type="radio" name="status_barang" value="0" <?= !$row['status_barang'] ? 'checked' : '' ?> /> Not-Available
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
