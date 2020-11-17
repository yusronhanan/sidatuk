-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql313.byetcluster.com
-- Generation Time: Nov 16, 2020 at 08:58 PM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_26964948_sidatuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `irigasi`
--

CREATE TABLE `irigasi` (
  `idIrigasi` int(11) NOT NULL,
  `kodeTender` text,
  `namaPaket` text,
  `metodePengadaan` text,
  `nilaiPagu` double DEFAULT NULL,
  `nilaiHPS` double DEFAULT NULL,
  `nilaiKontrak` double DEFAULT NULL,
  `tanggalPermohonanLelang` date DEFAULT NULL,
  `nomorPermohonanLelang` text,
  `rencanaProsesPengadaan` text,
  `tahapTender` text,
  `mulaiLelangRencana` date DEFAULT NULL,
  `selesaiLelangRencana` date DEFAULT NULL,
  `mulaiLelangRealisasi` date DEFAULT NULL,
  `selesaiLelangRealisasi` date DEFAULT NULL,
  `alasanPerubahanJadwal` text,
  `gagalLelang1` text,
  `alasanGagalLelang1` text,
  `mulaiJadwalLelangUlangRencana` date DEFAULT NULL,
  `selesaiJadwalLelangUlangRencana` date DEFAULT NULL,
  `mulaiJadwalLelangUlangRealisasi` date DEFAULT NULL,
  `selesaiJadwalLelangUlangRealisasi` date DEFAULT NULL,
  `alasanPerubahanJadwalLelangUlang` text,
  `gagalLelang2` text,
  `alasanGagalLelang2` text,
  `penunjukanLangsung` text,
  `nomorSPPBJTanggal` text,
  `alasanSPPBJUndur` text,
  `nomorSPKTanggal` text,
  `alasanSPKUndur` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `irigasi`
--

INSERT INTO `irigasi` (`idIrigasi`, `kodeTender`, `namaPaket`, `metodePengadaan`, `nilaiPagu`, `nilaiHPS`, `nilaiKontrak`, `tanggalPermohonanLelang`, `nomorPermohonanLelang`, `rencanaProsesPengadaan`, `tahapTender`, `mulaiLelangRencana`, `selesaiLelangRencana`, `mulaiLelangRealisasi`, `selesaiLelangRealisasi`, `alasanPerubahanJadwal`, `gagalLelang1`, `alasanGagalLelang1`, `mulaiJadwalLelangUlangRencana`, `selesaiJadwalLelangUlangRencana`, `mulaiJadwalLelangUlangRealisasi`, `selesaiJadwalLelangUlangRealisasi`, `alasanPerubahanJadwalLelangUlang`, `gagalLelang2`, `alasanGagalLelang2`, `penunjukanLangsung`, `nomorSPPBJTanggal`, `alasanSPPBJUndur`, `nomorSPKTanggal`, `alasanSPKUndur`) VALUES
(12, '53887014', 'Belanja Jasa Konsultansi Pengawasan (Supervision) DI Susukan Gede', 'Seleksi', 213157132, 1287687603, 34.221987987, '2020-10-13', '4', '15 Februari s.d 15 April 2020', 'Tender telah selesai', '2020-10-13', '2020-10-17', '2020-10-27', '2020-10-31', 'Ini perubahan', 'Tidak', '-', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', ' -', 'Tidak', '-', '-', 'Belum diterbitkan', '-', 'Belum diterbitkan', '-'),
(13, '11970', 'Rehabilitasi Jaringan Irigasi D.I. Ciseureuh Cibeureum', 'Pengadaan Langsung', 200000, 200049, 127.1212, '2020-10-20', '40', '1 April s.d 30 April 2020', '-', '2020-10-13', '2020-10-27', '2020-11-07', '2020-11-29', '-', 'Tidak', '-', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', ' -', 'Tidak', '-', '-', '120012/12122020', '-', 'Belum diterbitkan', '-'),
(14, '12309', 'Supervisi Pekerjaan Fisik Cikembang Tuntas\r\n', 'Tender', 24234234, 3242342, 2342432, '2020-10-15', '23123', 'Tender', 'Jalan', '2020-10-14', '2020-10-15', '2020-10-16', '2020-10-15', 'karena covid', 'Tidak', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '3132', 'dassdas', 'sadas', 12290, 2304, 76567, '2020-10-15', '12', 'Tender', 'Belum Tender', '2020-01-01', '2020-01-02', '0000-00-00', '0000-00-00', '-', 'Tidak', '-', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', ' -', 'Tidak', '-', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `idProgress` int(11) NOT NULL,
  `uraian` text NOT NULL,
  `fileName` text NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`idProgress`, `uraian`, `fileName`, `dateTime`) VALUES
(8, 'Progres Tanggal 02 Nov 2020 - 06 Nov 2020', 'Kurva_S_SUGE.pdf', '2020-11-16 08:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `sarpras`
--

CREATE TABLE `sarpras` (
  `idSarpras` int(11) NOT NULL,
  `kodeTender` text,
  `namaPaket` text,
  `metodePengadaan` text,
  `nilaiPagu` double DEFAULT NULL,
  `nilaiHPS` double DEFAULT NULL,
  `nilaiKontrak` double DEFAULT NULL,
  `tanggalPermohonanLelang` date DEFAULT NULL,
  `nomorPermohonanLelang` text,
  `rencanaProsesPengadaan` text,
  `tahapTender` text,
  `mulaiLelangRencana` date DEFAULT NULL,
  `selesaiLelangRencana` date DEFAULT NULL,
  `mulaiLelangRealisasi` date DEFAULT NULL,
  `selesaiLelangRealisasi` date DEFAULT NULL,
  `alasanPerubahanJadwal` text,
  `gagalLelang1` text,
  `alasanGagalLelang1` text,
  `mulaiJadwalLelangUlangRencana` date DEFAULT NULL,
  `selesaiJadwalLelangUlangRencana` date DEFAULT NULL,
  `mulaiJadwalLelangUlangRealisasi` date DEFAULT NULL,
  `selesaiJadwalLelangUlangRealisasi` date DEFAULT NULL,
  `alasanPerubahanJadwalLelangUlang` text,
  `gagalLelang2` text,
  `alasanGagalLelang2` text,
  `penunjukanLangsung` text,
  `nomorSPPBJTanggal` text,
  `alasanSPPBJUndur` text,
  `nomorSPKTanggal` text,
  `alasanSPKUndur` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarpras`
--

INSERT INTO `sarpras` (`idSarpras`, `kodeTender`, `namaPaket`, `metodePengadaan`, `nilaiPagu`, `nilaiHPS`, `nilaiKontrak`, `tanggalPermohonanLelang`, `nomorPermohonanLelang`, `rencanaProsesPengadaan`, `tahapTender`, `mulaiLelangRencana`, `selesaiLelangRencana`, `mulaiLelangRealisasi`, `selesaiLelangRealisasi`, `alasanPerubahanJadwal`, `gagalLelang1`, `alasanGagalLelang1`, `mulaiJadwalLelangUlangRencana`, `selesaiJadwalLelangUlangRencana`, `mulaiJadwalLelangUlangRealisasi`, `selesaiJadwalLelangUlangRealisasi`, `alasanPerubahanJadwalLelangUlang`, `gagalLelang2`, `alasanGagalLelang2`, `penunjukanLangsung`, `nomorSPPBJTanggal`, `alasanSPPBJUndur`, `nomorSPKTanggal`, `alasanSPKUndur`) VALUES
(2, '3113', 'Sapras UPTD Ciliwung', 'Tender ', 2312987973, 123067686, 12289.88, '2020-10-31', '123123', 'Tender', 'Berjalan', '2020-10-24', '2020-11-04', '2020-10-24', '2020-10-07', 'asdasd', 'Tidak', '-', '2020-10-29', '2020-10-15', '2020-10-17', '2020-10-29', '-', 'Tidak', '-', 'Kepala UPTD', '1290/1/1/2020', '-', '1290/1/1/2020', '-'),
(3, '2129', 'Sapras UPTD Bandung', 'Tender ', 8264364, 1237687, 1231980, '2020-01-01', '12', 'Tender', 'Belum Tender', '2020-10-14', '2020-10-15', '2020-10-21', '2020-10-22', '1. Fasilitas tidak memadai', 'Ya', '1. Kesepakatan tidak ketemu', '2020-10-15', '2020-10-15', '2020-10-21', '2020-10-22', ' 1. Karena terdapat covid', 'Tidak', '-', 'Kepala UPTD', 'Belum', '1. Covid', 'Belum', '1. Covid');

-- --------------------------------------------------------

--
-- Table structure for table `sundawapan`
--

CREATE TABLE `sundawapan` (
  `idSundawapan` int(11) NOT NULL,
  `kodeTender` text,
  `namaPaket` text,
  `metodePengadaan` text,
  `nilaiPagu` double DEFAULT NULL,
  `nilaiHPS` double DEFAULT NULL,
  `nilaiKontrak` double DEFAULT NULL,
  `tanggalPermohonanLelang` date DEFAULT NULL,
  `nomorPermohonanLelang` text,
  `rencanaProsesPengadaan` text,
  `tahapTender` text,
  `mulaiLelangRencana` date DEFAULT NULL,
  `selesaiLelangRencana` date DEFAULT NULL,
  `mulaiLelangRealisasi` date DEFAULT NULL,
  `selesaiLelangRealisasi` date DEFAULT NULL,
  `alasanPerubahanJadwal` text,
  `gagalLelang1` text,
  `alasanGagalLelang1` text,
  `mulaiJadwalLelangUlangRencana` date DEFAULT NULL,
  `selesaiJadwalLelangUlangRencana` date DEFAULT NULL,
  `mulaiJadwalLelangUlangRealisasi` date DEFAULT NULL,
  `selesaiJadwalLelangUlangRealisasi` date DEFAULT NULL,
  `alasanPerubahanJadwalLelangUlang` text,
  `gagalLelang2` text,
  `alasanGagalLelang2` text,
  `penunjukanLangsung` text,
  `nomorSPPBJTanggal` text,
  `alasanSPPBJUndur` text,
  `nomorSPKTanggal` text,
  `alasanSPKUndur` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sundawapan`
--

INSERT INTO `sundawapan` (`idSundawapan`, `kodeTender`, `namaPaket`, `metodePengadaan`, `nilaiPagu`, `nilaiHPS`, `nilaiKontrak`, `tanggalPermohonanLelang`, `nomorPermohonanLelang`, `rencanaProsesPengadaan`, `tahapTender`, `mulaiLelangRencana`, `selesaiLelangRencana`, `mulaiLelangRealisasi`, `selesaiLelangRealisasi`, `alasanPerubahanJadwal`, `gagalLelang1`, `alasanGagalLelang1`, `mulaiJadwalLelangUlangRencana`, `selesaiJadwalLelangUlangRencana`, `mulaiJadwalLelangUlangRealisasi`, `selesaiJadwalLelangUlangRealisasi`, `alasanPerubahanJadwalLelangUlang`, `gagalLelang2`, `alasanGagalLelang2`, `penunjukanLangsung`, `nomorSPPBJTanggal`, `alasanSPPBJUndur`, `nomorSPKTanggal`, `alasanSPKUndur`) VALUES
(2, '53297014', 'Pekerjaan Penataan dan Revitalisasi Waduk Darma Kab. Kuningan', '', 120119535000, 114637913772, 9879877987.776, '2020-10-15', '', 'Tender', 'Pembukaan dan Evaluasi Penawaran File I: Administrasi dan Teknis', '2020-10-17', '2020-10-07', '2020-10-02', '2020-10-16', '\"1. menyesuaikan dengan ketentuan penjadwalan proses seleksi\r\n2. Finalisasi Evaluasi Dokumen Penawaran Teknis\r\n\"\r\n', 'Tidak', '-', '2020-10-07', '2020-10-21', '2020-10-17', '2020-10-07', ' -', 'Tidak', '-', '-', '-', '-', '-', '-'),
(3, '123231', 'Pekerjaan Penataan dan Revitalisasi Situ Ciburuy Kab. Bandung Barat', 'Tender ', 38000000000, 23000000005, 120.86565, '2020-10-15', '12', 'Belum', 'Belum Tender', '2020-10-15', '2020-10-17', '2020-10-21', '2020-10-22', '1.  Covid\r\n2. Tidak ada', 'Ya', '1. Tidak sesuai kesepakatan', '2020-10-23', '2020-10-29', '2020-10-31', '2020-11-06', ' -', 'Tidak', '-', '-', 'Belum', '-', 'Belum', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tahapanpelaksanaan`
--

CREATE TABLE `tahapanpelaksanaan` (
  `idPelaksanaan` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `uraian` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `keterangan` text,
  `fileName` text,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahapanpelaksanaan`
--

INSERT INTO `tahapanpelaksanaan` (`idPelaksanaan`, `tipe`, `uraian`, `status`, `keterangan`, `fileName`, `dateTime`) VALUES
(1, 'Pemeriksaan Bersama', 'Berita Acara Pemeriksaan Bersama', 'Tidak', 'Belum', NULL, '2020-10-27 07:03:31'),
(2, 'Pengajuan Persyaratan untuk Material Kegiatan', 'Jadwal Mobilisasi Material', 'Tidak', 'Belum', NULL, '2020-10-27 07:06:11'),
(3, 'Pengajuan Persyaratan untuk Material Kegiatan', 'Permohonan / Persetujuan Material ( Form)', 'Tidak', 'Belum', NULL, '2020-10-27 07:07:32'),
(4, 'Pemeriksaan Bersama', 'Addendum', 'Tidak', 'Belum ', NULL, '2020-10-27 07:04:23'),
(11, 'Pemeriksaan Bersama', 'Justyfikasi Teknis', 'Tidak', 'Belum', NULL, '2020-10-27 07:05:08'),
(5, 'Pengawasan Mutu Konstruksi', 'Daftar Simak Pekerjaan Konstruksi', 'Tidak', 'Belum ', NULL, '2020-10-27 07:10:26'),
(15, 'Kontrak Kritis', 'Melakukan Rapat Pembuktian (Show Cause Meeting/SCM)', 'Tidak', 'Belum', NULL, '2020-11-03 01:32:00'),
(7, 'Penerimaan dan Pembayaran Hasil Kerja', 'Dokumen Mutual Check', 'Tidak', 'Belum diterima', NULL, '2020-11-03 01:25:06'),
(8, 'Penerimaan dan Pembayaran Hasil Kerja', 'Foto Dokumentasi', 'Tidak', 'Belum', NULL, '2020-11-03 01:25:46'),
(9, 'Kontrak Kritis', 'Sudah memenuhi ketentuan Kontrak Kritis yang diatur dalam Dokumen Kontrak', 'Tidak', 'Belum', NULL, '2020-11-03 01:30:03'),
(10, 'Kontrak Kritis', 'Sudah ada Surat Peringatan dari PPK', 'Tidak', 'Belum ', NULL, '2020-11-03 01:30:53'),
(12, 'Pengajuan Persyaratan untuk Material Kegiatan', 'Pemeriksaan dan Pengujian Material (Form)', 'Tidak', 'Belum', NULL, '2020-10-27 07:08:20'),
(13, 'Pemeriksaan Bersama', 'Foto Dokumentasi Pekerjaan', 'Tidak', 'Belum', NULL, '2020-10-27 07:08:52'),
(14, 'Pengajuan Persyaratan untuk Material Kegiatan', 'Foto Dokumentasi Material', 'Tidak', 'Belum', NULL, '2020-10-27 07:09:31'),
(16, 'Kontrak Kritis', 'Berita Acara Show Cause Meeting', 'Tidak', 'Belum', NULL, '2020-11-03 01:33:20'),
(17, 'Kontrak Kritis', 'Notulen Show Cause Meeting', 'Tidak', 'Belum', NULL, '2020-11-03 06:44:17'),
(18, 'Kontrak Kritis', 'Foto Dokumentasi', 'Tidak', 'Belum', NULL, '2020-11-03 01:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `tahapanpelapor`
--

CREATE TABLE `tahapanpelapor` (
  `idPelapor` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `uraian` text NOT NULL,
  `fileName` text NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahapanpelapor`
--

INSERT INTO `tahapanpelapor` (`idPelapor`, `tipe`, `uraian`, `fileName`, `dateTime`) VALUES
(1, 'Laporan Harian', 'Memuat Pekerjaan untuk setiap jenis pekerjaan dan/atau sub pekrjaan, pemenuhan kualitas dan kuantitas bahan yang digunakan, daftar perlatan yang meliputi jenis, jumlah dan kondisi peralatan, serta penempatan tenaga kerja untuk setiap pekerjaan dan/atau sub pekerjaan', 'detail_(1)2.pdf', '2020-11-02 23:56:23'),
(2, 'Laporan Mingguan', 'rangkuman capaian pekerjaan berupa hasil pembandingan capaian dengan minggu sebelumnya dan capaian pada minggu berjalan dengan rencana kegiatan dan sasaran capaian pada minggu berikutnya', 'Tables - Atlantis Lite Bootstrap 4 Admin Dashboard.xlsx', '2020-11-03 00:10:29'),
(3, 'Laporan Bulanan', 'Memuat capaian pekerjaan fisik, ringkasan status capaian pekerjaan fisik dengan membandungkan capaian di bulan sebelumnya, capaian pada bulan berjalan serta target capaian di bulan berikutnya', 'Tables - Atlantis Lite Bootstrap 4 Admin Dashboard (4).xlsx', '2020-11-03 00:17:34'),
(4, 'Laporan Harian', 'Memuat kondisi cuaca, seperti hujan, banjir dan peristiwa alam lainnya yang berpengaruh terhadap pelekasanaan pekerjaan', 'debug.log', '2020-11-02 23:57:28'),
(5, 'Laporan Mingguan', 'Memuat hambatan dan kendala yang dihadapi pada kurun waktu 1 (satu) minggu beserta tindakan penanggulangan yang telah dilakukan potensi kendala pada minggu berikutnya ', 'QuizNo2_1202184316 (2).docx', '2020-11-03 00:12:10'),
(6, 'Laporan Bulanan', 'ringkasan status kondisi keuangan Penyedia Jasa Konstruksi, status pembayaran dari Pengguna Jasa ', 'Project_Charter.pdf', '2020-11-03 00:18:31'),
(7, 'Laporan Harian', 'Hambatan dan kendala yang dihadapi berkenaan dengan pelaksanaan pekerjaaan di lapangan serta kondisi khusus lainnya yang berdampak atau berpotensi berdampak pada pelaksanaan pekerjaan', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:01:54'),
(8, 'Laporan Harian', 'Informasi keselamatan konstruksi (kecelakaan kerja, nearmiss record dll)', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:04:37'),
(9, 'Laporan Harian', 'Catatan keterlambatan', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:05:39'),
(10, 'Laporan Harian', 'Disusun oleh Penyedia Jasa, Diperiksa oleh Direksi Teknis, Disetujui Oleh Direksi Lapangan, Diketahui oleh PPK', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:07:49'),
(11, 'Laporan Harian', 'Dokumen Laporan Harian', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:08:16'),
(12, 'Laporan Mingguan', 'Informasi keselamatan konstruksi (kecelakaan kerja, nearmiss record dll)', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:13:16'),
(13, 'Laporan Mingguan', 'Disusun oleh Penyedia Jasa, Diperiksa oleh Direksi Teknis, Disetujui Oleh Direksi Lapangan, Diketahui oleh PPK', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:14:47'),
(14, 'Laporan Mingguan', 'Dokumen Laporan Mingguan', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:15:07'),
(15, 'Laporan Bulanan', 'Perubahan kontrak dan perubahan pekerjaan', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:18:56'),
(16, 'Laporan Bulanan', 'masalah dan kendala yang dihadapi, termasuk statusnya, tindakan penanggulangan yang telah dilakukan dan rencana tindak lanjutnya', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:19:56'),
(17, 'Laporan Bulanan', 'Hambatan dan kendala yang berpotensi terjadi di bulan berikutnya, beserta rencana pencegahan atau penanggulangan yang akan dilakukan', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:20:49'),
(18, 'Laporan Bulanan', 'Informasi keselamatan konstruksi (kecelakaan kerja, nearmiss record dll)', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:21:41'),
(19, 'Laporan Bulanan', 'Disusun oleh Penyedia Jasa, Diperiksa oleh Direksi Teknis, Disetujui Oleh Direksi Lapangan, Diketahui oleh PPK', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:22:32'),
(20, 'Laporan Bulanan', 'Foto Dokumentasi ', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:23:49'),
(21, 'Laporan Bulanan', 'Dokumen Laporan Mingguan', 'Form URK DAK Sungai 2020.xls', '2020-11-03 00:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `tahapanpenyelesaian`
--

CREATE TABLE `tahapanpenyelesaian` (
  `idPenyelesaian` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `uraian` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `keterangan` text,
  `fileName` text,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahapanpenyelesaian`
--

INSERT INTO `tahapanpenyelesaian` (`idPenyelesaian`, `tipe`, `uraian`, `status`, `keterangan`, `fileName`, `dateTime`) VALUES
(1, 'Serah Terima Pertama', 'Berita Acara Serah Terima I', 'Ya', NULL, 'PROGRES 90 % (07 Nov 2020).xlsx', '2020-11-16 08:47:47'),
(2, 'Serah Terima Pertama', 'Pemeriksaan Administrasi oleh PPHP (Dokumen Mutu, Dokumen Administrasi dan Dokumen Lainnya)', 'Tidak', 'Belum', NULL, '2020-11-02 23:34:45'),
(3, 'Pemeliharaan Hasil Kerja', 'Pembentukan Tim Pemeliharaan (Penyedia Jasa dan Direksi Teknis)', 'Tidak', 'Belum', NULL, '2020-11-02 23:39:52'),
(4, 'Serah Terima Akhir Pekerjaan', 'Permohonan pengajuan penerimaan hasil akhir pekerjaan ', 'Tidak', 'Belum', NULL, '2020-11-02 23:45:07'),
(6, 'Pemeliharaan Hasil Kerja', 'Jaminan Pemeliharaan Diterbitkan Oleh (Bank Umum /Perusahaan Asuransi/Perusahaan Penjamin/Konsorsium Perusahaan Asuransi', 'Tidak', 'Belum', NULL, '2020-11-03 03:02:06'),
(7, 'Serah Terima Akhir Pekerjaan', 'Pemeriksaan adminitrasi oleh PPHP (Dokumen Mutu, Dokumen Administrasi dan Dokumen Lainnya)', 'Tidak', 'Belum', NULL, '2020-11-02 23:47:33'),
(10, 'Serah Terima Pertama', 'Foto Dokumentasi', 'Tidak', 'Belum', NULL, '2020-11-02 23:48:32'),
(12, 'Serah Terima Akhir Pekerjaan', 'Foto Dokumentasi', 'Tidak', 'Belum', NULL, '2020-11-02 23:49:49'),
(13, 'Serah Terima Akhir Pekerjaan', 'Berita Acara Serah Terima II', 'Tidak', 'Belum', NULL, '2020-11-03 06:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `tahapanpersiapan`
--

CREATE TABLE `tahapanpersiapan` (
  `idPersiapan` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `uraian` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `keterangan` text,
  `fileName` text,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahapanpersiapan`
--

INSERT INTO `tahapanpersiapan` (`idPersiapan`, `tipe`, `uraian`, `status`, `keterangan`, `fileName`, `dateTime`) VALUES
(25, 'Penyerahan Lokasi', 'Foto Dokumentasi', 'Ya', NULL, '1C.pdf', '2020-11-16 09:02:33'),
(24, 'Penyerahan Lokasi', 'Berita Acara Penyerahan Lokasi Pekerjaan', 'Ya', NULL, '2_ BA_ Penyerahan Lokasi.jfif', '2020-11-03 05:15:56'),
(23, 'Penyerahan Lokasi', 'Surat Penyerahan Lokasi Pekerjaan ', 'Ya', NULL, '2_ BA_ Penyerahan Lokasi.jfif', '2020-11-03 05:15:12'),
(9, 'Mobilisasi', 'Permohonan Persetujuan Material', 'Tidak', 'Belum', NULL, '2020-10-27 06:58:22'),
(10, 'SPMK (Surat Perintah Mulai Kerja)', 'Surat Perintah Mulai Kerja (SPMK)', 'Ya', NULL, 'SPMK.jpg', '2020-11-03 01:43:17'),
(11, 'Rapat Persiapan', 'Berita Acara Rapat Persiapan Pelaksanaan Kontrak (PCM)', 'Ya', NULL, 'SIDATUK_REPORT_PACKET_IRIGASI.pdf', '2020-10-27 06:38:01'),
(12, 'Pembayaran Uang Muka', 'Pembayaran Uang Muka Sesuai Syarat - Syarat Khusus Kontrak', 'Ya', NULL, '2_ BA_ Penyerahan Lokasi.jfif', '2020-11-03 09:07:52'),
(13, 'SPMK (Surat Perintah Mulai Kerja)', 'Surat Perjanjian Kerja (SPK)', 'Ya', NULL, 'WEEK_06-07__PROJECT_COST_MANAGEMENT2.pdf', '2020-10-27 06:36:07'),
(14, 'Mobilisasi', 'Mobilisasi personil sesuai dengan jadwal penugasan', 'Tidak', 'Belum', NULL, '2020-10-27 06:59:12'),
(17, 'Rapat Persiapan', 'Mempresentasikan Rencana Mutu Pelaksanaan Kontrak (RMPK)', 'Tidak', 'Belum', NULL, '2020-10-27 06:42:35'),
(18, 'Rapat Persiapan', 'Daftar Absen', 'Tidak', 'Belum', NULL, '2020-10-27 06:43:04'),
(19, 'Rapat Persiapan', 'Notulen', 'Tidak', 'Belum', NULL, '2020-10-27 06:43:24'),
(20, 'Rapat Persiapan', 'Foto Dokumentasi', 'Ya', NULL, 'img20201116_11522317.pdf', '2020-11-16 08:53:36'),
(21, 'Pembayaran Uang Muka', 'Jaminan Uang Muka Diterbitkan Oleh (Bank Umum /Perusahaan Asuransi/Perusahaan Penjamin/Konsorsium Perusahaan Asuransi', 'Tidak', 'Belum', NULL, '2020-11-03 03:00:37'),
(22, 'SPMK (Surat Perintah Mulai Kerja)', 'Foto Dokumentasi', 'Ya', NULL, 'foto SPK.jfif', '2020-11-03 01:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `nama` text NOT NULL,
  `jabatan` text NOT NULL,
  `password` text NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nip`, `nama`, `jabatan`, `password`, `role`) VALUES
(1, '19710813 199703 1 007', 'Dikky Achmad Sidik, ST, MT', 'Kepala Dinas', 'dikky', 'user'),
(2, '19690416 200502 1 001', 'Bambang Imanudin ST,.MT', 'Kepala Bidang Bina Konstruksi', 'bambang', 'user'),
(3, '19760604 200801 1 003', 'DIKDIK AKHMAD SODIKIN, ST', 'Kasie Konstruksi Irigasi', 'dikdik', 'user'),
(4, '19780822 200604 2 009', 'LUSIE MUSIANTY ST.,MPSDA', 'Kasie Konstruksi Sundawapan', 'lusie', 'user'),
(5, '19640219 199303 1 004', 'TAUFIK, ST', 'Kasie Tata Teknik', 'taufik', 'user\r\n'),
(6, '19641102 199012 1 002', 'Ir. AZHARI DWIKORA, Sp', 'Kepala Bidang Bina Operasi dan Pemeliharaan', 'azhari', 'user'),
(7, '19660517 199002 1 003', 'H. USMAN, ST., MM', 'Kepala Bidang Bina Manfaat', 'usman', 'user'),
(8, '19651002 199111 1 001', 'TOTO DWIYANTO, SST, MT', 'Kepala UPTD PSDA WS. Cimanuk-Cisanggung', 'toto', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `irigasi`
--
ALTER TABLE `irigasi`
  ADD PRIMARY KEY (`idIrigasi`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`idProgress`);

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
-- Indexes for table `tahapanpelaksanaan`
--
ALTER TABLE `tahapanpelaksanaan`
  ADD PRIMARY KEY (`idPelaksanaan`);

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
  MODIFY `idIrigasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `idProgress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sarpras`
--
ALTER TABLE `sarpras`
  MODIFY `idSarpras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sundawapan`
--
ALTER TABLE `sundawapan`
  MODIFY `idSundawapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tahapanpelaksanaan`
--
ALTER TABLE `tahapanpelaksanaan`
  MODIFY `idPelaksanaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tahapanpelapor`
--
ALTER TABLE `tahapanpelapor`
  MODIFY `idPelapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tahapanpenyelesaian`
--
ALTER TABLE `tahapanpenyelesaian`
  MODIFY `idPenyelesaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tahapanpersiapan`
--
ALTER TABLE `tahapanpersiapan`
  MODIFY `idPersiapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
