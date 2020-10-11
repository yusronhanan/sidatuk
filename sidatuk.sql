-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 06:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidatuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `irigasi`
--

CREATE TABLE `irigasi` (
  `idIrigasi` int(11) NOT NULL,
  `kodeTender` text DEFAULT NULL,
  `namaPaket` text DEFAULT NULL,
  `metodePengadaan` text DEFAULT NULL,
  `nilaiPagu` double DEFAULT NULL,
  `nilaiHPS` double DEFAULT NULL,
  `nilaiKontrak` double DEFAULT NULL,
  `tanggalPermohonanLelang` date DEFAULT NULL,
  `nomorPermohonanLelang` text DEFAULT NULL,
  `rencanaProsesPengadaan` text DEFAULT NULL,
  `tahapTender` text DEFAULT NULL,
  `mulaiLelangRencana` date DEFAULT NULL,
  `selesaiLelangRencana` date DEFAULT NULL,
  `mulaiLelangRealisasi` date DEFAULT NULL,
  `selesaiLelangRealisasi` date DEFAULT NULL,
  `alasanPerubahanJadwal` text DEFAULT NULL,
  `gagalLelang1` text DEFAULT NULL,
  `alasanGagalLelang1` text DEFAULT NULL,
  `mulaiJadwalLelangUlangRencana` date DEFAULT NULL,
  `selesaiJadwalLelangUlangRencana` date DEFAULT NULL,
  `mulaiJadwalLelangUlangRealisasi` date DEFAULT NULL,
  `selesaiJadwalLelangUlangRealisasi` date DEFAULT NULL,
  `alasanPerubahanJadwalLelangUlang` text DEFAULT NULL,
  `gagalLelang2` text DEFAULT NULL,
  `alasanGagalLelang2` text DEFAULT NULL,
  `penunjukanLangsung` text DEFAULT NULL,
  `nomorSPPBJTanggal` text DEFAULT NULL,
  `alasanSPPBJUndur` text DEFAULT NULL,
  `nomorSPKTanggal` text DEFAULT NULL,
  `alasanSPKUndur` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `irigasi`
--

INSERT INTO `irigasi` (`idIrigasi`, `kodeTender`, `namaPaket`, `metodePengadaan`, `nilaiPagu`, `nilaiHPS`, `nilaiKontrak`, `tanggalPermohonanLelang`, `nomorPermohonanLelang`, `rencanaProsesPengadaan`, `tahapTender`, `mulaiLelangRencana`, `selesaiLelangRencana`, `mulaiLelangRealisasi`, `selesaiLelangRealisasi`, `alasanPerubahanJadwal`, `gagalLelang1`, `alasanGagalLelang1`, `mulaiJadwalLelangUlangRencana`, `selesaiJadwalLelangUlangRencana`, `mulaiJadwalLelangUlangRealisasi`, `selesaiJadwalLelangUlangRealisasi`, `alasanPerubahanJadwalLelangUlang`, `gagalLelang2`, `alasanGagalLelang2`, `penunjukanLangsung`, `nomorSPPBJTanggal`, `alasanSPPBJUndur`, `nomorSPKTanggal`, `alasanSPKUndur`) VALUES
(1, '2892', 'sundawapan1', 'jkjkasjkd', 91873719, 8121819289, 91281928, '2020-12-01', '129818', 'jkasdkj', 'jadh jiadjal', '2020-12-01', '2020-12-31', '2020-12-31', '2020-01-31', 'asda', 'Tidak', ' asaa', '2020-11-06', '2020-11-06', '2020-10-30', '2020-10-31', 'as', 'Tidak', 'sasdas', ' asdasda', 'asdas', 'asdas', 'asdas', 'asdas'),
(2, '0987', 'ini nama paket 2', 'ini metode pengadaan 2', 80000000, 98700000.34, 80000000, '2020-10-01', '', 'ini rencana proses pengadaan 2', 'ini tahap tender 2', '2020-10-22', '2020-10-24', '2020-10-22', '2020-10-24', 'ini alasan 2', 'Tidak', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', 'Tidak', '', '', '131121213312', 'kenapa ya', '8866672344', 'kenapa yas'),
(6, '9810', '9118', 'metode oke', 92801019, 9882891928, 100, '2020-01-01', '9283919', '929999.23', 'oke', '2020-09-30', '2020-09-27', '2019-11-08', '2020-12-30', 'corona 2', 'ya', 'asik', '2020-12-31', '2020-01-31', '2020-10-17', '2020-10-13', 'corona', 'ya', 'pandemi', 'cek', '928182 - 28/09/2020', 'tidak diketahui', '89182 - 29/09/2020', 'tidak diketahui'),
(7, '91218', '', 'jasdaj', 0, 1291, 0, '2019-10-28', '81298218', '', 'kjasjkdh', '0000-00-00', '0000-00-00', '2019-11-29', '2019-12-30', '', NULL, '', '2020-10-12', '2020-10-13', '0000-00-00', '0000-00-00', '', 'Tidak', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sarpras`
--

CREATE TABLE `sarpras` (
  `idSarpras` int(11) NOT NULL,
  `kodeTender` text DEFAULT NULL,
  `namaPaket` text DEFAULT NULL,
  `metodePengadaan` text DEFAULT NULL,
  `nilaiPagu` double DEFAULT NULL,
  `nilaiHPS` double DEFAULT NULL,
  `nilaiKontrak` double DEFAULT NULL,
  `tanggalPermohonanLelang` date DEFAULT NULL,
  `nomorPermohonanLelang` text DEFAULT NULL,
  `rencanaProsesPengadaan` text DEFAULT NULL,
  `tahapTender` text DEFAULT NULL,
  `mulaiLelangRencana` date DEFAULT NULL,
  `selesaiLelangRencana` date DEFAULT NULL,
  `mulaiLelangRealisasi` date DEFAULT NULL,
  `selesaiLelangRealisasi` date DEFAULT NULL,
  `alasanPerubahanJadwal` text DEFAULT NULL,
  `gagalLelang1` text DEFAULT NULL,
  `alasanGagalLelang1` text DEFAULT NULL,
  `mulaiJadwalLelangUlangRencana` date DEFAULT NULL,
  `selesaiJadwalLelangUlangRencana` date DEFAULT NULL,
  `mulaiJadwalLelangUlangRealisasi` date DEFAULT NULL,
  `selesaiJadwalLelangUlangRealisasi` date DEFAULT NULL,
  `alasanPerubahanJadwalLelangUlang` text DEFAULT NULL,
  `gagalLelang2` text DEFAULT NULL,
  `alasanGagalLelang2` text DEFAULT NULL,
  `penunjukanLangsung` text DEFAULT NULL,
  `nomorSPPBJTanggal` text DEFAULT NULL,
  `alasanSPPBJUndur` text DEFAULT NULL,
  `nomorSPKTanggal` text DEFAULT NULL,
  `alasanSPKUndur` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarpras`
--

INSERT INTO `sarpras` (`idSarpras`, `kodeTender`, `namaPaket`, `metodePengadaan`, `nilaiPagu`, `nilaiHPS`, `nilaiKontrak`, `tanggalPermohonanLelang`, `nomorPermohonanLelang`, `rencanaProsesPengadaan`, `tahapTender`, `mulaiLelangRencana`, `selesaiLelangRencana`, `mulaiLelangRealisasi`, `selesaiLelangRealisasi`, `alasanPerubahanJadwal`, `gagalLelang1`, `alasanGagalLelang1`, `mulaiJadwalLelangUlangRencana`, `selesaiJadwalLelangUlangRencana`, `mulaiJadwalLelangUlangRealisasi`, `selesaiJadwalLelangUlangRealisasi`, `alasanPerubahanJadwalLelangUlang`, `gagalLelang2`, `alasanGagalLelang2`, `penunjukanLangsung`, `nomorSPPBJTanggal`, `alasanSPPBJUndur`, `nomorSPKTanggal`, `alasanSPKUndur`) VALUES
(2, '3113', 'asdas', 'jasdaj', 2312, 12306, 12312, '2020-10-31', '123123', '123das', 'asdasd', '2020-10-24', '2020-11-04', '2020-10-24', '2020-10-07', 'asdasd', 'Tidak', 'asdas ads', '2020-10-29', '2020-10-15', '2020-10-17', '2020-10-29', ' asdasd', 'Tidak', 'asdas', 'asdas', 'asdadas', 'adas', 'asdas', 'adasd');

-- --------------------------------------------------------

--
-- Table structure for table `sundawapan`
--

CREATE TABLE `sundawapan` (
  `idSundawapan` int(11) NOT NULL,
  `kodeTender` text DEFAULT NULL,
  `namaPaket` text DEFAULT NULL,
  `metodePengadaan` text DEFAULT NULL,
  `nilaiPagu` double DEFAULT NULL,
  `nilaiHPS` double DEFAULT NULL,
  `nilaiKontrak` double DEFAULT NULL,
  `tanggalPermohonanLelang` date DEFAULT NULL,
  `nomorPermohonanLelang` text DEFAULT NULL,
  `rencanaProsesPengadaan` text DEFAULT NULL,
  `tahapTender` text DEFAULT NULL,
  `mulaiLelangRencana` date DEFAULT NULL,
  `selesaiLelangRencana` date DEFAULT NULL,
  `mulaiLelangRealisasi` date DEFAULT NULL,
  `selesaiLelangRealisasi` date DEFAULT NULL,
  `alasanPerubahanJadwal` text DEFAULT NULL,
  `gagalLelang1` text DEFAULT NULL,
  `alasanGagalLelang1` text DEFAULT NULL,
  `mulaiJadwalLelangUlangRencana` date DEFAULT NULL,
  `selesaiJadwalLelangUlangRencana` date DEFAULT NULL,
  `mulaiJadwalLelangUlangRealisasi` date DEFAULT NULL,
  `selesaiJadwalLelangUlangRealisasi` date DEFAULT NULL,
  `alasanPerubahanJadwalLelangUlang` text DEFAULT NULL,
  `gagalLelang2` text DEFAULT NULL,
  `alasanGagalLelang2` text DEFAULT NULL,
  `penunjukanLangsung` text DEFAULT NULL,
  `nomorSPPBJTanggal` text DEFAULT NULL,
  `alasanSPPBJUndur` text DEFAULT NULL,
  `nomorSPKTanggal` text DEFAULT NULL,
  `alasanSPKUndur` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sundawapan`
--

INSERT INTO `sundawapan` (`idSundawapan`, `kodeTender`, `namaPaket`, `metodePengadaan`, `nilaiPagu`, `nilaiHPS`, `nilaiKontrak`, `tanggalPermohonanLelang`, `nomorPermohonanLelang`, `rencanaProsesPengadaan`, `tahapTender`, `mulaiLelangRencana`, `selesaiLelangRencana`, `mulaiLelangRealisasi`, `selesaiLelangRealisasi`, `alasanPerubahanJadwal`, `gagalLelang1`, `alasanGagalLelang1`, `mulaiJadwalLelangUlangRencana`, `selesaiJadwalLelangUlangRencana`, `mulaiJadwalLelangUlangRealisasi`, `selesaiJadwalLelangUlangRealisasi`, `alasanPerubahanJadwalLelangUlang`, `gagalLelang2`, `alasanGagalLelang2`, `penunjukanLangsung`, `nomorSPPBJTanggal`, `alasanSPPBJUndur`, `nomorSPKTanggal`, `alasanSPKUndur`) VALUES
(2, '', '', '', 0, 0, 0, '2020-10-15', '', '', '', '2020-10-17', '2020-10-07', '2020-10-02', '2020-10-16', '', NULL, '', '2020-10-07', '2020-10-21', '2020-10-17', '2020-10-07', ' ', NULL, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tahapanpelaksaan`
--

CREATE TABLE `tahapanpelaksaan` (
  `idPelaksaan` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `uraian` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `fileName` text DEFAULT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tahapanpelapor`
--

CREATE TABLE `tahapanpelapor` (
  `idPelapor` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `uraian` text NOT NULL,
  `fileName` text NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tahapanpenyelesaian`
--

CREATE TABLE `tahapanpenyelesaian` (
  `idPenyelesaian` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `uraian` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `fileName` text DEFAULT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tahapanpersiapan`
--

CREATE TABLE `tahapanpersiapan` (
  `idPersiapan` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `uraian` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `fileName` text DEFAULT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahapanpersiapan`
--

INSERT INTO `tahapanpersiapan` (`idPersiapan`, `tipe`, `uraian`, `status`, `keterangan`, `fileName`, `dateTime`) VALUES
(1, 'Penyerahan Lokasi', 'Ini uraian Ini uraian Ini uraian Ini uraian Ini uraian Ini uraian Ini uraian Ini uraian Ini uraian ', 'Tidak', 'asddde', NULL, '2020-10-11 15:42:37'),
(4, 'Penyerahan Lokasi', 'Tes input', 'Ya', '', '1920-1_Kartu_Ujian_UAS_1301184476.pdf', '2020-10-11 10:29:02'),
(5, 'Penyerahan Lokasi', 'asdas', 'Ya', NULL, 'Uts_Sem4.PDF', '2020-10-11 15:42:05'),
(6, 'Penyerahan Lokasi', '12sad', 'Ya', NULL, 'IDEA_CORONA_ILLUSTRASI.png', '2020-10-11 15:33:18'),
(7, 'Penyerahan Lokasi', 'sada', 'Tidak', 'adas', NULL, '2020-10-11 15:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nip`, `nama`, `email`, `password`, `role`) VALUES
(1, '9087', 'Dzaki', 'dzaki@gmail.com', 'ebae2ccc3fe07662bb337a96c883954f', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `irigasi`
--
ALTER TABLE `irigasi`
  ADD PRIMARY KEY (`idIrigasi`);

--
-- Indexes for table `sarpras`
--
ALTER TABLE `sarpras`
  ADD PRIMARY KEY (`idSarpras`);

--
-- Indexes for table `sundawapan`
--
ALTER TABLE `sundawapan`
  ADD PRIMARY KEY (`idSundawapan`);

--
-- Indexes for table `tahapanpelaksaan`
--
ALTER TABLE `tahapanpelaksaan`
  ADD PRIMARY KEY (`idPelaksaan`);

--
-- Indexes for table `tahapanpelapor`
--
ALTER TABLE `tahapanpelapor`
  ADD PRIMARY KEY (`idPelapor`);

--
-- Indexes for table `tahapanpenyelesaian`
--
ALTER TABLE `tahapanpenyelesaian`
  ADD PRIMARY KEY (`idPenyelesaian`);

--
-- Indexes for table `tahapanpersiapan`
--
ALTER TABLE `tahapanpersiapan`
  ADD PRIMARY KEY (`idPersiapan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `irigasi`
--
ALTER TABLE `irigasi`
  MODIFY `idIrigasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sarpras`
--
ALTER TABLE `sarpras`
  MODIFY `idSarpras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sundawapan`
--
ALTER TABLE `sundawapan`
  MODIFY `idSundawapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahapanpelaksaan`
--
ALTER TABLE `tahapanpelaksaan`
  MODIFY `idPelaksaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahapanpelapor`
--
ALTER TABLE `tahapanpelapor`
  MODIFY `idPelapor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahapanpenyelesaian`
--
ALTER TABLE `tahapanpenyelesaian`
  MODIFY `idPenyelesaian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahapanpersiapan`
--
ALTER TABLE `tahapanpersiapan`
  MODIFY `idPersiapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
