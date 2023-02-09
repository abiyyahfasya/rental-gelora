-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2021 pada 17.59
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental agus mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`) VALUES
(1, 'devi', 'devi12', 'devi ayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, '4 tempat duduk'),
(2, '6 tempat duduk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_member` int(11) NOT NULL,
  `email_member` varchar(100) NOT NULL,
  `password_member` varchar(50) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `telepon_member` varchar(20) NOT NULL,
  `alamat_member` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_member`, `email_member`, `password_member`, `nama_member`, `telepon_member`, `alamat_member`) VALUES
(1, 'devi@gmail.com', 'devi', 'devi', '089611075811', 'mahkota'),
(2, 'nadya@gmail.com', 'nadya', 'nadya', '09786542221', 'mahkota'),
(3, 'reyfan@gmail.com', 'reyfan', 'reyfan', '08975422689', 'mahkota'),
(4, 'afan@gmail.com', 'afan', 'afan', '087663333', 'mkh'),
(5, 'yuli@gmail.com', 'yuli', 'yuli', '089611075866', 'mahkota'),
(7, 'ayu@gmail.com', 'ayu', 'ayu', '09786542221', 'mahkota'),
(8, 'pasya@gmail.com', 'pasya', 'pasya', '09786542221', 'Graha prima ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_reservasi` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `merk_mobil` varchar(50) NOT NULL,
  `No_polisi` varchar(20) NOT NULL,
  `No_ktp` varchar(50) NOT NULL,
  `No_telpon` varchar(20) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_reservasi`, `id_member`, `Nama`, `tanggal_sewa`, `email`, `merk_mobil`, `No_polisi`, `No_ktp`, `No_telpon`, `harga`) VALUES
(156, 8, 'pasya', '2021-06-29', 'pasya@gmail.com', 'mobil yariz', 'B 4578 Pbn', '0111245790289', '09786542221', '800000'),
(157, 8, 'pasya', '2021-06-29', 'pasya@gmail.com', 'mobil yariz', 'B 4578 FAB', '0111245790289', '09786542221', '800000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_peminjam` int(11) NOT NULL,
  `id_reservasi` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_peminjam`, `id_reservasi`, `id_mobil`, `id_member`, `nama`, `harga`) VALUES
(1, 1, 1, 1, 'Yaris', 400000),
(56, 2, 1, 3, 'Mobil Yaris', 500000),
(59, 3, 5, 5, 'Mobil Ayla', 500000),
(65, 133, 1, 4, 'Mobil Yaris', 500000),
(67, 140, 2, 4, 'Mobil Avanza', 400000),
(68, 140, 1, 5, 'Mobil Yaris', 500000),
(69, 1, 1, 1, 'Mobil Yaris', 500000),
(70, 134, 5, 4, 'Mobil Ayla', 500000),
(71, 1, 1, 1, 'Mobil Yaris', 500000),
(72, 5, 5, 5, 'Mobil Ayla', 500000),
(73, 151, 5, 7, 'Mobil Ayla', 500000),
(74, 152, 1, 1, 'Mobil Yaris', 500000),
(75, 153, 1, 1, 'Mobil Yaris', 500000),
(76, 154, 5, 1, 'Mobil Ayla', 500000),
(77, 155, 1, 1, 'Mobil Yaris', 500000),
(101, 156, 1, 8, 'Mobil Yaris', 800000),
(102, 157, 1, 8, 'Mobil Yaris', 800000),
(106, 0, 1, 1, 'Mobil Yaris', 800000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_mobil` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_reservasi` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `merk_mobil` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi_mobil` text NOT NULL,
  `stok_mobil` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_mobil`, `id_kategori`, `id_reservasi`, `id_member`, `merk_mobil`, `harga`, `foto`, `deskripsi_mobil`, `stok_mobil`) VALUES
(1, 1, 1, 1, 'Mobil Yaris', 800000, 'Yarizz.jpg', 'Harga Sewa Mobil per-Hari (12jam)', 0),
(2, 1, 2, 3, 'Mobil Ayla', 700000, 'Aylaa.jpg', 'Harga Sewa Mobil per-Hari (12jam)', 1),
(5, 1, 3, 3, 'Mobil Avanza', 700000, 'Avanzaa.jpg', 'Harga Sewa Mobil per-Hari (12jam)', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_peminjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
