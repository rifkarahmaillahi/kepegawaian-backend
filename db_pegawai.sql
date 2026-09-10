-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2018 at 12:12 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `jenis_cuti` varchar(20) NOT NULL,
  `nomor_surat_cuti` varchar(20) NOT NULL,
  `tanggal_cuti` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `nip`, `jenis_cuti`, `nomor_surat_cuti`, `tanggal_cuti`, `keterangan`) VALUES
(1, '196202031994031002', 'hgh', '545', '2018-09-12', 'bjhbj');

-- --------------------------------------------------------

--
-- Table structure for table `diklat`
--

CREATE TABLE `diklat` (
  `id_diklat` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama_diklat` varchar(20) NOT NULL,
  `jam` varchar(5) NOT NULL,
  `tanggal_diklat` date NOT NULL,
  `penyelenggara` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diklat`
--

INSERT INTO `diklat` (`id_diklat`, `nip`, `nama_diklat`, `jam`, `tanggal_diklat`, `penyelenggara`, `tempat`) VALUES
(1, '196401081988031006', 'dfsf', '4', '2018-09-19', 'dfsf', 'sgfd');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `eselon` varchar(10) NOT NULL,
  `tmt_jabatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nip`, `jabatan`, `eselon`, `tmt_jabatan`) VALUES
(1, '196307011989032009', 'Karyawan', 'IV/B', '2018-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1535681802),
('m130524_201442_init', 1535681804);

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id_mutasi` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `jenis_mutasi` varchar(20) NOT NULL,
  `tanggal_mutasi` date NOT NULL,
  `nomor_sk_mutasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mutasi`
--

INSERT INTO `mutasi` (`id_mutasi`, `nip`, `jenis_mutasi`, `tanggal_mutasi`, `nomor_sk_mutasi`) VALUES
(1, '196307011989032009', 'Keluar', '2018-09-19', 'dcsd');

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `id_pangkat` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `pangkat` varchar(20) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `tmt_pangkat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`id_pangkat`, `nip`, `pangkat`, `golongan`, `tmt_pangkat`) VALUES
(1, '196401081988031006', 'CEO', 'III/B', '2018-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip_pegawai` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usia` int(10) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `masa_kerja` varchar(20) NOT NULL,
  `kenaikan_pangkat` date NOT NULL,
  `kenaikan_gaji` date NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip_pegawai`, `nama`, `tempat_lahir`, `tgl_lahir`, `agama`, `jenis_kelamin`, `alamat`, `no_telpon`, `email`, `usia`, `jabatan`, `masa_kerja`, `kenaikan_pangkat`, `kenaikan_gaji`, `foto`) VALUES
('196202031994031002', 'Ir. Syahrul, MM', 'Lirik', '1962-06-15', 'kristen katolik', '\r\n            Laki-laki', 'tarusan', '2147483647', 'syahrul@yahoo.com', 55, 'Kasubbid Perencanaan Sumber Daya Manusiap pada Bid', '28 tahun 06 bulan', '2018-04-12', '2018-11-28', '/196202031994031002.jpg'),
('196307011989032009', 'Ir. Yulia', 'Air Haji', '1963-08-27', 'islam', 'perempuan', 'painan', '2147483647', 'yulia63@yahoo.com', 54, 'Pengadministrasi pada Subbag Program dan Pelaporan', '28 tahun 11 bulan', '2018-08-25', '2018-08-21', '/196307011989032009.jpg'),
('196401081988031006', 'Drs. Rifyandi Risman, MM', 'Tuik, Pesisir Selatan', '1964-01-18', 'islam', 'laki-laki', 'Painan', '2147483647', 'rifyandirisman@gmail.com', 54, 'Pengelola Data pada Bidang Pemerintahan, Sosial da', '30 tahun 02 bulan', '2018-08-11', '2018-08-11', '/196401081988031006.jpg'),
('196408121992022001', 'Ir. Widya Dari', 'Padang', '1964-08-12', 'islam', 'perempuan', 'Salido', '2147483647', 'widyadari@gmail.com', 53, 'Fungsional Umum pada Bidang Pemerintahan, Sosial d', '20 tahun 08 bulan', '2018-08-31', '2018-08-03', '/196408121992022001.jpg'),
('196603051992031008', 'Drs. Zuharpen', 'Selayo', '1966-03-05', 'islam', 'laki-laki', 'Salido', '2147483647', 'Zuharpen@gmail.com', 51, 'Kabid Pemerintahan, Sosial dan Budaya', '26 tahun 01 bulan', '2018-08-07', '2018-08-14', '/19660305199203.jpg'),
('196904161993081001', 'Ir. Arpen, M.Si', 'Taluk Batang Kapas', '1969-04-16', 'islam', 'laki-laki', 'painan', '2147483647', 'arpen@gmail.com', 48, 'Pengelola Data pada Bidang Perencanaan, Ekonomi da', '24 tahun 07 bulan', '2018-01-03', '2018-01-06', '/196904161993081001.jpg'),
('197501012000031033', 'Yozki Wandri, S. Pi.M.Si', 'Pasar Kambang', '1975-01-01', 'islam', 'laki-laki', 'Painan', '2147483647', 'yozkiwandri@gmail.com', 43, 'Kepala Bapedalitbang', '17tahun 11bulan', '2018-08-06', '2018-08-07', '/197501012000031033.jpg'),
('23', 'Dila Prima Susanti', 'Padang Panjang', '2018-09-08', 'islam', 'Perempuan', 'jhj', '424', 'hu', 3, '3', '7', '0000-00-00', '0000-00-00', '/23.jpg'),
('6456', 'Dila Prima Susanti', 'hjh', '2018-09-19', 'islam', 'Perempuan', 'dsfs', '767', 'gj', 6, '6', '6', '0000-00-00', '0000-00-00', '/6456.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_keluarga`
--

CREATE TABLE `riwayat_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_keluarga` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `status_hubungan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_keluarga`
--

INSERT INTO `riwayat_keluarga` (`id_keluarga`, `nip`, `nik`, `nama_keluarga`, `tempat_lahir`, `tgl_lahir`, `pendidikan`, `pekerjaan`, `status_hubungan`) VALUES
(1, '196307011989032009', '12334', 'sfsd', 'fsdf', '2018-09-19', 'fsdf', 'sdfs', 'Suami');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tingkat` varchar(20) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `tahun_lulus` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`id_pendidikan`, `nip`, `tingkat`, `nama_sekolah`, `jurusan`, `tahun_lulus`) VALUES
(1, '196408121992022001', 'Sma', 'Cenda', 'dfdf', '2008');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '30ipStdvbYRTo-v7KqKeRpwuYAGMsf3F', '$2y$13$esO8IWoype3p7Zgp8o5P3OfS85dkIJmpNtK4ej1Xy85VRtkyJCG2e', NULL, 'admin@gmail.com', 10, 1535687417, 1535687417);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `diklat`
--
ALTER TABLE `diklat`
  ADD PRIMARY KEY (`id_diklat`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id_mutasi`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip_pegawai`);

--
-- Indexes for table `riwayat_keluarga`
--
ALTER TABLE `riwayat_keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diklat`
--
ALTER TABLE `diklat`
  MODIFY `id_diklat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `id_pangkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `riwayat_keluarga`
--
ALTER TABLE `riwayat_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
