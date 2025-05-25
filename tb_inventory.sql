-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql201.byetcluster.com
-- Waktu pembuatan: 25 Bulan Mei 2025 pada 03.36
-- Versi server: 10.6.19-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_39061797_db_inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inventory`
--

CREATE TABLE `tb_inventory` (
  `id_barang` int(10) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `satuan_barang` varchar(20) NOT NULL,
  `harga_beli` double(20,2) NOT NULL,
  `status_barang` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_inventory`
--

INSERT INTO `tb_inventory` (`id_barang`, `kode_barang`, `nama_barang`, `jumlah_barang`, `satuan_barang`, `harga_beli`, `status_barang`) VALUES
(1, 'BRG001', 'Buku Tulis', 92, 'pcs', 2500.00, 1),
(2, 'BRG002', 'Pensil 2B', 150, 'pcs', 1500.00, 1),
(3, 'BRG003', 'Pulpen Hitam', 120, 'pcs', 2000.00, 1),
(4, 'BRG004', 'Penghapus', 80, 'pcs', 1000.00, 1),
(5, 'BRG005', 'Penggaris 30cm', 60, 'pcs', 3000.00, 1),
(6, 'BRG006', 'Kertas A4', 200, 'pcs', 500.00, 1),
(7, 'BRG007', 'Map Plastik', 90, 'pcs', 1200.00, 1),
(8, 'BRG008', 'Spidol', 70, 'pcs', 4500.00, 1),
(9, 'BRG009', 'Tinta Printer', 30, 'liter', 75000.00, 1),
(10, 'BRG010', 'Kabel Data', 45, 'meter', 10000.00, 1),
(11, 'BRG011', 'Notebook', 50, 'pcs', 3500.00, 1),
(12, 'BRG012', 'Amplop Coklat', 100, 'pcs', 500.00, 1),
(13, 'BRG013', 'Lakban Bening', 40, 'pcs', 3000.00, 1),
(14, 'BRG014', 'Gunting Kertas', 25, 'pcs', 7000.00, 1),
(15, 'BRG015', 'Stapler', 20, 'pcs', 8500.00, 1),
(16, 'BRG016', 'Stop Kontak', 20, 'pcs', 300000.00, 1),
(17, 'BEG017', 'Baju', 10, 'pcs', 100000.00, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_inventory`
--
ALTER TABLE `tb_inventory`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_inventory`
--
ALTER TABLE `tb_inventory`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
