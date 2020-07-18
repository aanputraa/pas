-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2020 pada 09.43
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webx`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kode` enum('470','580','330') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_surat`
--

INSERT INTO `jenis_surat` (`id`, `nama`, `kode`) VALUES
(1, 'PINDAH', '470'),
(2, 'SKPD', '470'),
(3, 'KELAHIRAN', '470'),
(4, 'KEMATIAN', '470'),
(5, 'KTP SEMENTARA', '470'),
(6, 'DOMISILI', '470'),
(7, 'USAHA', '580'),
(8, 'AHLI WARIS', '470'),
(9, 'KUASA', '470'),
(10, 'PENGANTAR SKCK', '330'),
(11, 'TIDAK MAMPU', '470'),
(12, 'IJIN KERAMAIAN', '330'),
(13, 'LAIN-LAIN', '470');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1594132311),
('m130524_201442_init', 1594132314),
('m190124_110200_add_verification_token_column_to_user_table', 1594132315);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `no_kk` bigint(16) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `desa_kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `shdk` enum('KEPALA KELUARGA','SUAMI','ISTRI','ANAK KANDUNG','ANAK TIRI','ORANGTUA','MERTUA','CUCU','SAUDARA KANDUNG','SAUDARA TIRI','FAMILI LAIN') NOT NULL,
  `agama` enum('ISLAM','KRISTEN','HINDU','BUDHA','KONGHUCU','LAINNYA') NOT NULL,
  `status` enum('BELUM KAWIN','KAWIN','CERAI HIDUP','CERAI MATI') NOT NULL,
  `pendidikan_terakhir` enum('BELUM SEKOLAH','SD/SEDERAJAT','SMP/SEDERAJAT','SMA/SEDERAJAT','DIPLOMA','SARJANA','TIDAK SEKOLAH') NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `kewarganegaraan` enum('WNI','WNA') NOT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `no_kk`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `rt`, `rw`, `desa_kelurahan`, `kecamatan`, `kabupaten`, `kelamin`, `shdk`, `agama`, `status`, `pendidikan_terakhir`, `pekerjaan`, `kewarganegaraan`, `nama_ibu`, `nama_ayah`, `email`, `telepon`) VALUES
(1, 3516032604180001, 3156033108930001, 'AAN PUTRA AGUNG', 'MOJOKERTO', '1993-08-31', 'DUSUN PANDAN', 1, 1, 'PANDANARUM', 'PACET', 'MOJOKERTO', 'LAKI-LAKI', 'KEPALA KELUARGA', 'ISLAM', 'BELUM KAWIN', 'DIPLOMA', 'KARYAWAN', 'WNI', 'ARLINA', 'SANAJI', 'AANPUTRAAGUNG@GMAIL.COM', 6281554446272),
(7, 3516032604180001, 3516032705960002, 'ASTIN TRIA ROH SANTI', 'MOJOKERTO', '1996-05-27', 'DUSUN PANDAN', 1, 1, 'PANDANARUM', 'PACET', 'MOJOKERTO', 'PEREMPUAN', 'SAUDARA KANDUNG', 'ISLAM', 'BELUM KAWIN', 'SMA/SEDERAJAT', 'KARYAWAN', 'WNI', 'ARLINA', 'SANAJI', 'ASTINTRIA@GMAIL.COM', 6287777732448),
(8, 3516032201031442, 3516030610700002, 'SUDIRJO', 'MOJOKERTO', '1970-06-10', 'DUSUN PANDAN', 1, 1, 'PANDANARUM', 'PACET', 'MOJOKERTO', 'LAKI-LAKI', 'KEPALA KELUARGA', 'ISLAM', 'KAWIN', 'SD/SEDERAJAT', 'WIRASWASTA', 'WNI', 'SUNAMI', 'SONO', 'PUJIANTO@G.C', 6212345678910),
(9, 3516032201031442, 3516034712750002, 'SATUMI', 'MOJOKERTO', '1975-07-12', 'DUSUN PANDAN', 1, 1, 'PANDANARUM', 'PACET', 'MOJOKERTO', 'PEREMPUAN', 'ISTRI', 'ISLAM', 'KAWIN', 'SD/SEDERAJAT', 'WIRASWASTA', 'WNI', 'PONITI', 'SODIK', 'PUJIANTO@G.C', 6212345678910),
(10, 3516032201031442, 3516032007000001, 'PUJIANTO', 'MOJOKERTO', '2000-07-20', 'DUSUN PANDAN', 1, 1, 'PANDANARUM', 'PACET', 'MOJOKERTO', 'LAKI-LAKI', 'ANAK KANDUNG', 'ISLAM', 'BELUM KAWIN', 'SMA/SEDERAJAT', 'KARYAWAN SWASTA', 'WNI', 'SATUMI', 'SUDIRJO', 'PUJIANTO@GMAIL.COM', 6281234567891);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keterangan`
--

CREATE TABLE `surat_keterangan` (
  `id` int(11) NOT NULL,
  `id_jenissurat` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `tanggal_pengajuan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `keperluan` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_penduduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'pitxDjaSP_BJOv2-5ygCajWcFmdkZ-EV', '$2y$13$jhakHhxbZhIuTKilX0tqueiLEw.s6OqpJ95saC5yKQ.eeK4OaXRIm', NULL, 'admin@mail.com', 10, 1594132561, 1594132561, 'noV7VrbMUqo8CnZwO9pzQ_Za__W7x9IM_1594132561');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis_surat` (`id_jenissurat`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `is_penduduk` (`id_penduduk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `surat_keterangan`
--
ALTER TABLE `surat_keterangan`
  ADD CONSTRAINT `surat_keterangan_ibfk_1` FOREIGN KEY (`id_jenissurat`) REFERENCES `jenis_surat` (`id`),
  ADD CONSTRAINT `surat_keterangan_ibfk_2` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduk` (`id_penduduk`),
  ADD CONSTRAINT `surat_keterangan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
