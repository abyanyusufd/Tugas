-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2023 pada 07.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(90) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `foto`) VALUES
(1, 'varsity cowo', '1000000', 'cowovarsity.jpg'),
(2, 'hoodie cowo', '1500000', 'cowohoodie.jpg'),
(3, 'bomber cowo', '2000000', 'cowobomber.jpg'),
(5, 'jeans cowo', '3000000', 'cowojeans.jpg'),
(6, 'casual cowo', '500000', 'cowocasual.jpg'),
(7, 'gunung cowo', '1350000', 'cowogunung.jpg'),
(8, 'vest cowo', '300000', 'vest cowo.jpg'),
(9, 'crewneck cowo', '900000', 'crewneck cowo.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang2`
--

CREATE TABLE `barang2` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` int(20) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang2`
--

INSERT INTO `barang2` (`id_barang`, `nama_barang`, `harga_barang`, `foto`) VALUES
(1, 'varsity cewe', 2000000, 'varsitycewe.jpg'),
(2, 'hoodie cewe', 990000, 'hoodiecewe.jpg'),
(3, 'bomber', 2000000, 'bombercewe.jpg'),
(4, 'jeans cewe', 170000, 'cewejeans.jpg'),
(5, 'casual cewe', 1200000, 'casualcewe.jpg'),
(6, 'gunung cewe', 2000000, 'gunungcewe.jpg'),
(7, 'cardigan cewe', 500000, 'cardigan cewe.jpg'),
(9, 'vest cewe', 300000, 'vest cewe.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `nama_pembeli` varchar(50) NOT NULL,
  `id_pembeli` int(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`nama_pembeli`, `id_pembeli`, `alamat`, `email`, `no_hp`, `username`, `password`) VALUES
('aaa', 1, 'Arjawinangun', 'abyanyusufd123@gmail.com', 2147483647, 'aa', '123'),
('konsumen', 2, 'kandang prahu', 'rudi@gmail.com', 812345678, 'rudi', 'rudi123'),
('222', 3, '222', '222', 222, '222', '222'),
('abyan', 4, 'perum', 'abyanyusufd123@gmail.com', 81111111, 'byan', 'byan123'),
('aaa', 5, 'Arjawinangun', 'abyanyusufd123@gmail.com', 2147483647, 'kasir', '111'),
('arrazi', 6, 'perum', 'arrazi28@gmail.com', 2147483647, 'angga', '123'),
('arrazi', 7, 'perum', 'arrazi28@gmail.com', 2147483647, 'asoy', '123'),
('arrazi', 8, 'perum', 'arrazi28@gmail.com', 2147483647, 'argacrb', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `ussername` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `ussername`, `password`, `foto`) VALUES
(7, 'nsds', 'dsaasd', '2223', '1533100429414.png'),
(8, '123', '123', '1234', 'download.jpg'),
(24, 'mysiswa', 'hgggg', '12345', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_trans` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(112) NOT NULL,
  `alamat` varchar(112) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_trans`, `nama_pembeli`, `phone`, `email`, `alamat`, `nama_barang`, `harga`, `foto`) VALUES
(17, 'aaa', 81111111, 'abyanyusufd123@gmail.com', 'perum', 'bomber cowo', '2000000', 'cowobomber.jpg'),
(18, 'aaa', 81111111, 'abyanyusufd123@gmail.com', 'perum', 'bomber cowo', '2000000', 'cowobomber.jpg'),
(19, 'aaa', 2147483647, 'arrazi28@gmail.com', 'perum', 'varsity cowo', '1000000', 'cowovarsity.jpg'),
(20, 'aaa', 5436364, 'gfhgf@gmial.com', 'w', 'jeans cowo', '3000000', 'cowojeans.jpg'),
(21, 'aaa', 2147483647, 'abyanyusufd123@gmail.com', 'Arjawinangun', 'varsity cowo', '1000000', 'cowovarsity.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `barang2`
--
ALTER TABLE `barang2`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_trans`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `barang2`
--
ALTER TABLE `barang2`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
