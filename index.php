<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventory System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Inventory Barang</h2>
    <a href="form_add.php" class="btn btn-primary mb-2">Tambah Barang</a>

    <form method="GET" class="form-inline mb-3">
        <input type="text" name="search" class="form-control mr-2" placeholder="Cari nama/kode barang" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
        <button type="submit" class="btn btn-info">Cari</button>
    </form>

    <?php
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $sql = "SELECT * FROM tb_inventory WHERE kode_barang LIKE '%$search%' OR nama_barang LIKE '%$search%'";
    $result = $conn->query($sql);

    if ($search != '') {
        echo "<div class='alert alert-info'>Menampilkan hasil pencarian untuk: <strong>" . htmlspecialchars($search) . "</strong></div>";
    }

    if ($result->num_rows > 0) {
        echo '<table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>Harga Beli</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>';
        while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>" . htmlspecialchars($row['kode_barang']) . "</td>
        <td>" . htmlspecialchars($row['nama_barang']) . "</td>
        <td>{$row['jumlah_barang']}</td>
        <td>{$row['satuan_barang']}</td>
        <td>{$row['harga_beli']}</td>
        <td>" . ($row['status_barang'] ? 'Available' : 'Not-Available') . "</td>
        <td>
            <a href='form_edit.php?id=" . $row['id_barang'] . "' class='btn btn-warning btn-sm'>Edit</a>
            <a href='delete.php?id=" . $row['id_barang'] . "' class='btn btn-danger btn-sm' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</a>
            <a href='use.php?id=" . $row['id_barang'] . "' class='btn btn-secondary btn-sm'>Pakai</a>
            <a href='add_stock.php?id=" . $row['id_barang'] . "' class='btn btn-success btn-sm'>Tambah Stok</a>
        </td>
    </tr>";
    }
        echo '</tbody></table>';
    } else {
        echo "<div class='alert alert-warning'>Tidak ada hasil ditemukan untuk kata kunci: <strong>" . htmlspecialchars($search) . "</strong></div>";
    }
    ?>
</div>
</body>
</html>