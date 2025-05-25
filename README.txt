Inventory System PHP
====================

Struktur File:
/inventory/
├── config.php       -> Koneksi database MySQL
├── index.php        -> Halaman utama, daftar dan pencarian barang
├── form_add.php     -> Form tambah barang baru
├── save_add.php     -> Proses simpan barang baru ke database
├── form_edit.php    -> Form edit data barang
├── update.php       -> Proses update data barang
├── delete.php       -> Proses hapus data barang
├── use.php          -> Form dan proses pemakaian barang (kurangi stok)
├── add_stock.php    -> Form dan proses penambahan stok barang
├── style.css        -> File CSS opsional untuk styling sederhana
└── README.txt       -> File penjelasan ini

Database:
- Buat database 'db_inventory'
- Buat tabel 'tb_inventory' dengan struktur:
    id_barang INT PRIMARY KEY AUTO_INCREMENT,
    kode_barang VARCHAR(50),
    nama_barang VARCHAR(100),
    jumlah_barang INT,
    satuan_barang VARCHAR(20),
    harga_beli DECIMAL(10,2),
    status_barang TINYINT(1) -- 1 = Available, 0 = Not-Available

