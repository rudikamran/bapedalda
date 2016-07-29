-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2016 at 07:29 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE IF NOT EXISTS `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `kd_barang` varchar(10) NOT NULL,
  `nm_barang` varchar(50) NOT NULL DEFAULT '',
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kd_barang`, `nm_barang`, `tahun`) VALUES
(16, 'BR0024', 'Spidol Whiteboard 500', 2016),
(18, 'BR0056', 'Map Batik', 2015),
(19, 'BR0012', 'Catridege Biasa Hitam', 2015),
(20, 'BR0010', 'Tinta Refil Hitam', 2015),
(21, 'BR0023', 'Map Snellhekter Kertas', 2015),
(23, 'BR0013', 'Ballpoint Pilot BPTP', 2015),
(25, 'BR0045', 'Kertas HVS Folio F4 70 gr', 2015),
(26, 'BR0001', 'Buku Catatan', 2015),
(27, 'BR0003', 'Lakban Kertas 1"', 2016),
(28, 'BR0002', 'Amplop putih No.90', 2015),
(29, 'BR0021', 'Kertas Karbon', 2015),
(30, 'BR0015', 'Buku SSP', 2015),
(31, 'BR0016', 'Kertas HVS Folio Warna', 2016),
(32, 'BR0026', 'Ballpoint Faster', 2014),
(33, 'BR0004', 'Kertas HVS Kwarto 70 Gr', 2014),
(34, 'BR0005', 'Amplop putih No.104', 2014),
(35, 'BR0006', 'Kertas Karton', 2015),
(36, 'BR0007', 'Buku Kwitansi Besar', 2014),
(37, 'BR0008', 'Buku Kwitansi Kecil', 2014),
(38, 'BR0009', 'Buku Agenda', 2015),
(39, 'BR0011', 'Ballpoint Pilot Balliner', 2014),
(40, 'BR0014', 'Ballpoint  Boldlliner', 2010),
(41, 'BR0017', 'Ballpoint Standar X7', 2015),
(42, 'BR0018', 'Ballpoint Standar R5', 2014),
(43, 'BR0019', 'Spidol', 2010),
(44, 'BR0020', 'Pensil', 2013),
(45, 'BR0022', 'Penggaris 30 cm', 2010),
(46, 'BR0025', 'Paper Klip No.1', 2010),
(47, 'BR0027', 'Paper Klip N0.5', 2010),
(48, 'BR0028', 'Binder Klip No.111', 2014),
(49, 'BR0029', 'Binder Klip ', 2013),
(50, 'BR0030', 'Binder Klip No.260', 2012),
(51, 'BR0031', 'Lakban Kertas 1''5"', 2014),
(52, 'BR0032', 'Lakban Kertas 2"', 2014),
(53, 'BR0033', 'Lakban ', 2014),
(54, 'BR0034', 'Hopax Sticky Neon Blue', 2013),
(55, 'BR0035', 'Pronto Sticky Notes 50x75', 2013),
(56, 'BR0036', 'Lem Kertas Kecil', 2013),
(58, 'BR0037', 'Lem Kertas Besar', 2013),
(59, 'BR0038', 'Hecter Besar', 2014),
(60, 'BR0039', 'Hecter Kecil', 2014),
(61, 'BR0040', 'Boxfile plastik type 1034', 2015),
(62, 'BR0041', 'Map Kertas', 2012),
(63, 'BR0042', 'Map Odner', 2012),
(64, 'BR0043', 'Map Business File 940-F4', 2013),
(65, 'BR0044', 'Map snelllhekter Kertas', 2013),
(66, 'BR0046', 'Map snellhekter Plastik', 2014),
(67, 'BR0047', 'File Bag', 2013),
(68, 'BR0048', 'Document Bag', 2014),
(69, 'BR0049', 'Pita Brother 1030 O', 2015),
(70, 'BR0050', 'Kalkulator', 2014),
(71, 'BR0051', 'Tinta Refil Warna', 2015),
(72, 'BR0052', 'Bantalan Stempel', 2014),
(73, 'BR0053', 'Pisau Cutter', 2014),
(74, 'BR0054', 'Tip Eks', 2014),
(75, 'BR0055', 'Peluru Hecter Besar', 2015),
(76, 'BR0057', 'Peluru Hecter Kecil', 2014),
(77, 'BR0058', 'Catridge Biasa Warna', 2014),
(78, 'BR0059', 'Buku Tulis', 2015),
(79, 'BR0060', 'Stabillo', 2015),
(80, 'BR0061', 'Tinta Stempel', 2015),
(81, 'BR0062', 'Stip Karet', 2015),
(82, 'BR0063', 'Plastik Jilid', 2015),
(85, 'BR0064', 'Pelubang Kertas', 2014),
(86, 'BR0065', 'Gunting', 2014),
(87, 'BR0066', 'Pisau Cutter Kecil', 2015),
(88, 'BR0067', 'Pisau Cutter Besar', 2015),
(89, 'BR0068', 'Isi Pisau Cutter Kecil', 2015),
(90, 'BR0069', 'Isi Pisau Cutter Besar', 2015),
(91, 'BR0070', 'Tinta Refill Hitam Botol', 2015),
(93, 'BR0071', 'Tinta Refill Warna Botol', 2015),
(94, 'BR0072', 'Tinta Refill Warna Botol Kecil', 2015),
(95, 'BR0073', 'Kertas Tissu isi ulang 2 ply 1 kg', 2015),
(96, 'BR0074', 'Ammonium Klorida', 2015),
(97, 'BR0075', 'Asam Glutamate', 2014),
(98, 'BR0076', 'Asam Oksalat', 2014),
(99, 'BR0077', 'Asam Salisilat', 2014),
(100, 'BR0078', 'Diklaium Hidrogen Fosfat', 2014),
(101, 'BR0079', 'Ferri Klorida (FeCl3)', 2014),
(102, 'BR0080', 'Kalium Dikromat', 2014),
(103, 'BR0081', 'Kalium Iodida', 2015),
(104, 'BR0082', 'Kalsium Klorida Anhidrat (CaCl2)', 2014),
(105, 'BR0083', 'Natrium Oksalat', 2014),
(106, 'BR0084', 'Natrium Sulfit', 2014),
(107, 'BR0085', 'N-Heksan Lokal', 2015),
(108, 'BR0086', 'Lampu Selang', 2015),
(109, 'BR0087', 'Kabel 2x2,5 mm', 2014),
(110, 'BR0088', 'Isolasi Unibell', 2014),
(111, 'BR0089', 'Konektor LMK', 2015),
(112, 'BR0090', 'Klem Service', 2014),
(113, 'BR0091', 'Isi ulang tabung pemadam', 2014),
(114, 'BR0092', 'Isi ulang tabung breathing apparatus ', 2014),
(115, 'BR0093', 'Balon Sorot HPIT 400 Watt', 2015),
(116, 'BR0094', 'Balon SL 36 Watt', 2015),
(117, 'BR0095', 'Balon SL 45 Watt', 2015),
(118, 'BR0096', 'Trafo Mercuri 400 Watt', 2014),
(119, 'BR0097', 'Fitting Keramik E.40', 2015),
(120, 'BR0098', 'Kap Lampu Sorot Masda 400 Watt', 2014),
(121, 'BR0099', 'Kap lampu WD E 40', 2014),
(122, 'BR0100', 'Kap Lampu LED 10 Watt', 2015),
(123, 'BR0101', 'Kontraktor 3 phase 50 Amper', 2014),
(125, 'BR0102', 'Auto Foto Control Sel 3 Ampele', 2015),
(126, 'BR0103', 'MCB 6 Ampere', 2014),
(127, 'BR0104', 'MCB 32 Ampere', 2014),
(128, 'BR0105', 'MCB 20 Ampere', 2014),
(129, 'BR0106', 'MCB 16 Ampere', 2014),
(130, 'BR0107', 'Aram WD', 2015),
(131, 'BR0108', 'Begel Tiang', 2014),
(132, 'BR0109', 'Baut dan Moor 14', 2015),
(133, 'BR0110', 'Timer Control', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `tb_brg_keluar`
--

CREATE TABLE IF NOT EXISTS `tb_brg_keluar` (
  `tanggal` date NOT NULL,
  `id_keluar` int(11) NOT NULL,
  `kd_barang` varchar(11) NOT NULL,
  `nm_pegawai` varchar(50) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `nm_ruang` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_brg_keluar`
--

INSERT INTO `tb_brg_keluar` (`tanggal`, `id_keluar`, `kd_barang`, `nm_pegawai`, `jumlah`, `nm_ruang`, `ket`, `tgl_update`) VALUES
('2016-07-09', 19, '19', 'Irwan S.Kom', 4, 'Bagian Umum dan Kepegawaian', '-', '2016-07-24 01:47:11'),
('2016-07-12', 20, '20', 'Ahriani, SE', 1, 'Bagian Umum dan Kepegawaian', '-', '2016-07-24 01:47:46'),
('2016-07-21', 21, '21', 'Ir.Rahmawati', 1, 'Pemantauan, Pencegahan dan Pemulihan Lingkungan', '-', '2016-07-24 01:48:28');

--
-- Triggers `tb_brg_keluar`
--
DELIMITER $$
CREATE TRIGGER `saldo` AFTER INSERT ON `tb_brg_keluar`
 FOR EACH ROW BEGIN
 UPDATE tb_brg_msk SET jumlah=jumlah - NEW.jumlah
 WHERE id_brg_msk=NEW.kd_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_brg_msk`
--

CREATE TABLE IF NOT EXISTS `tb_brg_msk` (
  `tanggal` date NOT NULL,
  `dari` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nm_satuan` varchar(50) NOT NULL,
  `harga` float NOT NULL,
  `nm_kegiatan` varchar(50) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `id_brg_msk` int(11) NOT NULL,
  `kd_barang` varchar(11) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_brg_msk`
--

INSERT INTO `tb_brg_msk` (`tanggal`, `dari`, `jumlah`, `nm_satuan`, `harga`, `nm_kegiatan`, `nm_kategori`, `ket`, `id_brg_msk`, `kd_barang`, `tgl_update`) VALUES
('2016-07-09', 'Toko Cahaya', 2, 'Buah', 12000, 'Monitoring Evaluasi dan Pelaporan', 'Habis Pakai', '-', 19, 'BR0056', '2016-07-24 04:10:24'),
('2016-07-12', 'Toko Bintang', 3, 'Dos', 35000, 'Penyedian Jasa Surat Menyurat', 'Habis Pakai', '-', 20, 'BR0002', '2016-07-24 04:10:24'),
('2016-07-21', 'Toko Alchemist', 2, 'Botol', 150000, 'AMDAL', 'Habis Pakai', '-', 21, 'BR0081', '2016-07-24 04:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nm_kategori`) VALUES
(9, 'Habis Pakai'),
(10, 'Tidak Habis Pakai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE IF NOT EXISTS `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nm_kegiatan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `nm_kegiatan`) VALUES
(2, 'Penerangan Lampu Jalan'),
(6, 'Monitoring Evaluasi dan Pelaporan'),
(7, 'Penyedian Jasa Surat Menyurat'),
(8, 'Sarana dan Prasarana Pemakaman'),
(9, 'Pencegahan Bahaya Kebakaran'),
(10, 'Pendapatan'),
(11, 'Persampahan'),
(12, 'Pertamanan'),
(13, 'AMDAL');

-- --------------------------------------------------------

--
-- Table structure for table `tb_operator`
--

CREATE TABLE IF NOT EXISTS `tb_operator` (
  `id_operator` int(11) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL DEFAULT '',
  `username` varchar(40) NOT NULL DEFAULT '',
  `password` varchar(40) NOT NULL DEFAULT '',
  `level` varchar(40) NOT NULL DEFAULT '',
  `last_login` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_operator`
--

INSERT INTO `tb_operator` (`id_operator`, `nama_lengkap`, `username`, `password`, `level`, `last_login`) VALUES
(8, 'Rudi Kamran', 'rudi', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2016-07-24'),
(9, 'Erka', 'erka', '809d847f082ec38422cb2372267b0821', 'pegawai', '2016-07-24'),
(10, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2016-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penandatangan`
--

CREATE TABLE IF NOT EXISTS `tb_penandatangan` (
  `id_penandatangan` int(11) NOT NULL,
  `nm_penandatangan` varchar(50) NOT NULL,
  `nis` bigint(25) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penandatangan`
--

INSERT INTO `tb_penandatangan` (`id_penandatangan`, `nm_penandatangan`, `nis`, `jabatan`) VALUES
(5, 'H. Abdullah Taibe, A.Ks., M.Si,', 196012311990031069, 'Ketua Badan'),
(6, 'Irwan, S,Kom', 197708172010011023, 'Penyimpan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruang`
--

CREATE TABLE IF NOT EXISTS `tb_ruang` (
  `id_ruang` int(11) NOT NULL,
  `nm_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ruang`
--

INSERT INTO `tb_ruang` (`id_ruang`, `nm_ruang`) VALUES
(2, 'UPTB'),
(3, 'Bagian Umum dan Kepegawaian'),
(4, 'Bagian Program dan Pelaporan'),
(5, 'Bagian Keuangan'),
(6, 'Pemantauan, Pencegahan dan Pemulihan Lingkungan'),
(8, 'PML'),
(9, 'PDL dan Tata Lingkungan'),
(11, 'Kebersihan dan Pertamanan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE IF NOT EXISTS `tb_satuan` (
  `id_satuan` int(11) NOT NULL,
  `nm_satuan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_satuan`
--

INSERT INTO `tb_satuan` (`id_satuan`, `nm_satuan`) VALUES
(1, 'Pack'),
(2, 'Lembar'),
(3, 'Set'),
(4, 'Dos'),
(5, 'Buah'),
(6, 'Batang'),
(7, 'Roll'),
(8, 'Rim'),
(9, 'Botol'),
(10, 'Gram'),
(11, 'Kg'),
(12, 'Bh'),
(13, 'Ampere'),
(14, 'Tabung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`), ADD KEY `kd_barang` (`kd_barang`), ADD KEY `kd_barang_2` (`kd_barang`);

--
-- Indexes for table `tb_brg_keluar`
--
ALTER TABLE `tb_brg_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `tb_brg_msk`
--
ALTER TABLE `tb_brg_msk`
  ADD PRIMARY KEY (`id_brg_msk`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tb_operator`
--
ALTER TABLE `tb_operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `tb_penandatangan`
--
ALTER TABLE `tb_penandatangan`
  ADD PRIMARY KEY (`id_penandatangan`);

--
-- Indexes for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `tb_brg_keluar`
--
ALTER TABLE `tb_brg_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_brg_msk`
--
ALTER TABLE `tb_brg_msk`
  MODIFY `id_brg_msk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tb_operator`
--
ALTER TABLE `tb_operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tb_penandatangan`
--
ALTER TABLE `tb_penandatangan`
  MODIFY `id_penandatangan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
