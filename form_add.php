<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Form Tambah Barang</h2>
    <form action="save_add.php" method="POST">
        <div class="form-group">
            <label>Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" name="jumlah_barang" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Satuan</label>
            <select name="satuan_barang" class="form-control">
                <option value="pcs">pcs</option>
                <option value="kg">kg</option>
                <option value="liter">liter</option>
                <option value="meter">meter</option>
            </select>
        </div>
        <div class="form-group">
            <label>Harga Beli</label>
            <input type="number" step="0.01" name="harga_beli" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Status</label><br>
            <input type="radio" name="status_barang" value="1" checked> Available
            <input type="radio" name="status_barang" value="0"> Not-Available
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>