-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2023 pada 15.36
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syahdan-putra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beras`
--

CREATE TABLE `beras` (
  `id_beras` int(11) NOT NULL,
  `id_padi` int(11) NOT NULL,
  `nama_beras` varchar(50) NOT NULL,
  `jenis_beras` varchar(50) NOT NULL,
  `harga_beras` varchar(15) NOT NULL,
  `stok_beras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beras`
--

INSERT INTO `beras` (`id_beras`, `id_padi`, `nama_beras`, `jenis_beras`, `harga_beras`, `stok_beras`) VALUES
(1, 1, 'Beras', 'adad ', '100000', 120);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesan`
--

CREATE TABLE `detail_pesan` (
  `id_detail_pesan` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `id_padi` int(11) NOT NULL,
  `kg_padi` int(11) NOT NULL,
  `stok_padi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pesan`
--

INSERT INTO `detail_pesan` (`id_detail_pesan`, `id_pesan`, `id_padi`, `kg_padi`, `stok_padi`) VALUES
(1, 1, 1, 24, 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_beras` int(11) NOT NULL,
  `kg_beras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `padi`
--

CREATE TABLE `padi` (
  `id_padi` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `nama_padi` varchar(50) NOT NULL,
  `jenis_padi` varchar(50) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `stok_padi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `padi`
--

INSERT INTO `padi` (`id_padi`, `id_supplier`, `nama_padi`, `jenis_padi`, `harga`, `stok_padi`) VALUES
(1, 1, 'Padi', 'has', '200000', 120);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_padi`
--

CREATE TABLE `pemesanan_padi` (
  `id_pesan` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `tgl_pesan` varchar(15) NOT NULL,
  `total_pesan` varchar(15) NOT NULL,
  `status_pesan` int(11) NOT NULL,
  `bukti_pembayaran` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan_padi`
--

INSERT INTO `pemesanan_padi` (`id_pesan`, `id_supplier`, `tgl_pesan`, `total_pesan`, `status_pesan`, `bukti_pembayaran`, `create_at`) VALUES
(1, 1, '2023-10-20', '4800000', 4, 'Ini-Dia-Bukti-Transfer-Mandiri-Dari-ATM-mBanking-dan-Internet-Banking-Mandiri-11.jpg', '2023-10-20 12:15:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peramalan`
--

CREATE TABLE `peramalan` (
  `id_peramalan` int(11) NOT NULL,
  `id_beras` int(11) NOT NULL,
  `periode` varchar(20) NOT NULL,
  `tot_penjualan` varchar(20) NOT NULL,
  `tyt` varchar(20) NOT NULL,
  `t_kuadrat` varchar(20) NOT NULL,
  `periode_sel` varchar(20) NOT NULL,
  `hasil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(125) NOT NULL,
  `alamat_supplier` text NOT NULL,
  `no_hp_supplier` varchar(15) NOT NULL,
  `username_supp` varchar(50) NOT NULL,
  `pass_supp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `no_hp_supplier`, `username_supp`, `pass_supp`) VALUES
(1, 'Supplier', 'Kuningan, Jawa Barat', '089877656512', 'supplier', 'supplier');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_beras`
--

CREATE TABLE `transaksi_beras` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_transaksi` varchar(15) NOT NULL,
  `total_transaksi` varchar(15) NOT NULL,
  `status_transaksi` int(11) NOT NULL,
  `bukpem_transaksi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlpon` varchar(15) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `type_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_tlpon`, `username`, `password`, `type_user`) VALUES
(1, 'Admin', 'Kuningan, Jawa Barat', '089987656543', 'admin', 'admin', 1),
(2, 'Reseller 1', 'Kuningan, Jawa Barat', '089987656543', 'res', 'res', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beras`
--
ALTER TABLE `beras`
  ADD PRIMARY KEY (`id_beras`);

--
-- Indeks untuk tabel `detail_pesan`
--
ALTER TABLE `detail_pesan`
  ADD PRIMARY KEY (`id_detail_pesan`);

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`);

--
-- Indeks untuk tabel `padi`
--
ALTER TABLE `padi`
  ADD PRIMARY KEY (`id_padi`);

--
-- Indeks untuk tabel `pemesanan_padi`
--
ALTER TABLE `pemesanan_padi`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `peramalan`
--
ALTER TABLE `peramalan`
  ADD PRIMARY KEY (`id_peramalan`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indeks untuk tabel `transaksi_beras`
--
ALTER TABLE `transaksi_beras`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beras`
--
ALTER TABLE `beras`
  MODIFY `id_beras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_pesan`
--
ALTER TABLE `detail_pesan`
  MODIFY `id_detail_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `padi`
--
ALTER TABLE `padi`
  MODIFY `id_padi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_padi`
--
ALTER TABLE `pemesanan_padi`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `peramalan`
--
ALTER TABLE `peramalan`
  MODIFY `id_peramalan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaksi_beras`
--
ALTER TABLE `transaksi_beras`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
