-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 04:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(12, '53887014', 'Belanja Jasa Konsultansi Pengawasan (Supervision) DI Susukan Gede', 'Seleksi', 213157132, 1287687603, 34.221987987, '2020-10-13', '4', '15 Februari s.d 15 April 2020', 'Tender telah selesai', '2020-10-13', '2020-10-17', '2020-10-27', '2020-10-31', 'Ini perubahan', 'Tidak', '-', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', ' -', 'Tidak', '-', '-', 'Belum diterbitkan', '-', 'Belum diterbitkan', '-'),
(13, '11970', 'Rehabilitasi Jaringan Irigasi D.I. Ciseureuh Cibeureum', 'Pengadaan Langsung', 200000, 200049, 127.1212, '2020-10-20', '40', '1 April s.d 30 April 2020', '-', '2020-10-13', '2020-10-27', '2020-11-07', '2020-11-29', '-', 'Tidak', '-', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', ' -', 'Tidak', '-', '-', '120012/12122020', '-', 'Belum diterbitkan', '-'),
(14, '12309', 'Supervisi Pekerjaan Fisik Cikembang Tuntas\r\n', 'Tender', 24234234, 3242342, 2342432, '2020-10-15', '23123', 'Tender', 'Jalan', '2020-10-14', '2020-10-15', '2020-10-16', '2020-10-15', 'karena covid', 'Tidak', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '3132', 'dassdas', 'sadas', 12290, 2304, 76567, '2020-10-15', '12', 'Tender', 'Belum Tender', '2020-01-01', '2020-01-02', '0000-00-00', '0000-00-00', '-', 'Tidak', '-', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', ' -', 'Tidak', '-', '-', '-', '-', '-', '-');

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
(2, '3113', 'Sapras UPTD Ciliwung', 'Tender ', 2312987973, 123067686, 12289.88, '2020-10-31', '123123', 'Tender', 'Berjalan', '2020-10-24', '2020-11-04', '2020-10-24', '2020-10-07', 'asdasd', 'Tidak', '-', '2020-10-29', '2020-10-15', '2020-10-17', '2020-10-29', '-', 'Tidak', '-', 'Kepala UPTD', '1290/1/1/2020', '-', '1290/1/1/2020', '-'),
(3, '2129', 'Sapras UPTD Bandung', 'Tender ', 8264364, 1237687, 1231980, '2020-01-01', '12', 'Tender', 'Belum Tender', '2020-10-14', '2020-10-15', '2020-10-21', '2020-10-22', '1. Fasilitas tidak memadai', 'Ya', '1. Kesepakatan tidak ketemu', '2020-10-15', '2020-10-15', '2020-10-21', '2020-10-22', ' 1. Karena terdapat covid', 'Tidak', '-', 'Kepala UPTD', 'Belum', '1. Covid', 'Belum', '1. Covid');

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
(2, '53297014', 'Pekerjaan Penataan dan Revitalisasi Waduk Darma Kab. Kuningan', '', 120119535000, 114637913772, 9879877987.776, '2020-10-15', '', 'Tender', 'Pembukaan dan Evaluasi Penawaran File I: Administrasi dan Teknis', '2020-10-17', '2020-10-07', '2020-10-02', '2020-10-16', '\"1. menyesuaikan dengan ketentuan penjadwalan proses seleksi\r\n2. Finalisasi Evaluasi Dokumen Penawaran Teknis\r\n\"\r\n', 'Tidak', '-', '2020-10-07', '2020-10-21', '2020-10-17', '2020-10-07', ' -', 'Tidak', '-', '-', '-', '-', '-', '-'),
(3, '123231', 'Pekerjaan Penataan dan Revitalisasi Situ Ciburuy Kab. Bandung Barat', 'Tender ', 38000000000, 23000000005, 120.86565, '2020-10-15', '12', 'Belum', 'Belum Tender', '2020-10-15', '2020-10-17', '2020-10-21', '2020-10-22', '1.  Covid\r\n2. Tidak ada', 'Ya', '1. Tidak sesuai kesepakatan', '2020-10-23', '2020-10-29', '2020-10-31', '2020-11-06', ' -', 'Tidak', '-', '-', 'Belum', '-', 'Belum', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tahapanpelaksanaan`
--

CREATE TABLE `tahapanpelaksanaan` (
  `idPelaksaan` int(11) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `uraian` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `fileName` text DEFAULT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahapanpelaksanaan`
--

INSERT INTO `tahapanpelaksanaan` (`idPelaksaan`, `tipe`, `uraian`, `status`, `keterangan`, `fileName`, `dateTime`) VALUES
(1, 'Pemeriksaan Bersama', 'Pemerikasaan bersama mengenai uptd pelelangan sungai citarum', 'Ya', NULL, 'WEEK_06-07__PROJECT_COST_MANAGEMENT3.pdf', '2020-10-14 11:56:23'),
(2, 'Pengajuan Persyaratan untuk Material Kegiatan', 'Ini pengajuan', 'Tidak', 'covid', NULL, '2020-10-14 12:04:02'),
(3, 'Pengajuan Persyaratan untuk Material Kegiatan', 'Pengajuan ke agent material', 'Ya', NULL, 'WEEK_06-07__PROJECT_COST_MANAGEMENT.pdf', '2020-10-14 12:04:25'),
(4, 'Pemeriksaan Bersama', 'Pemeriksaan bersama tentang pembayaran uang muka', 'Tidak', 'Belum terbit', NULL, '2020-10-14 12:05:09'),
(5, 'Pengawasan Mutu Konstruksi', 'Pngawasan mutu konstruksi di sungai citarum', 'Tidak', 'Belum terbit', NULL, '2020-10-14 12:05:32'),
(6, 'Pengawasan Mutu Konstruksi', 'Pengawasan mutu konstruksi di wilayah sungai babakan', 'Ya', NULL, 'Tables - Atlantis Lite Bootstrap 4 Admin Dashboard (4).xlsx', '2020-10-14 12:05:59'),
(7, 'Penerimaan dan Pembayaran Hasil Kerja', 'Penerimaan keuangan pembayaran', 'Tidak', 'Belum diterima', NULL, '2020-10-14 12:06:35'),
(8, 'Penerimaan dan Pembayaran Hasil Kerja', 'Pembayaran kerja ke karyawan', 'Ya', NULL, 'BIDW - Week6 HFR.ppt', '2020-10-14 12:06:59'),
(9, 'Kontrak Kritis', 'Kontrak kritis ke karyawan', 'Ya', NULL, 'DataTables example - File export.xlsx', '2020-10-14 12:07:21'),
(10, 'Kontrak Kritis', 'Kontrak ke vendor', 'Tidak', 'Belum diterbitkan', NULL, '2020-10-14 12:07:36');

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

--
-- Dumping data for table `tahapanpelapor`
--

INSERT INTO `tahapanpelapor` (`idPelapor`, `tipe`, `uraian`, `fileName`, `dateTime`) VALUES
(1, 'Laporan Harian', 'Laporan Harian Tanggal 20', 'detail_(1)2.pdf', '2020-10-14 11:47:57'),
(2, 'Laporan Mingguan', 'Laporan mingguan pertama', 'Tables - Atlantis Lite Bootstrap 4 Admin Dashboard.xlsx', '2020-10-14 11:48:32'),
(3, 'Laporan Bulanan', 'Laporan Januari', 'Tables - Atlantis Lite Bootstrap 4 Admin Dashboard (4).xlsx', '2020-10-14 11:48:50'),
(4, 'Laporan Harian', 'Laporan Tanggal 21', 'debug.log', '2020-10-14 11:49:11'),
(5, 'Laporan Mingguan', 'Laporan mingguan kedua', 'QuizNo2_1202184316 (2).docx', '2020-10-14 11:49:31'),
(6, 'Laporan Bulanan', 'Laporan februari', 'Project_Charter.pdf', '2020-10-14 11:49:49');

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

--
-- Dumping data for table `tahapanpenyelesaian`
--

INSERT INTO `tahapanpenyelesaian` (`idPenyelesaian`, `tipe`, `uraian`, `status`, `keterangan`, `fileName`, `dateTime`) VALUES
(1, 'Serah Terima Pertama', 'Serah terima ke kepala pusat', 'Tidak', 'Belum terbit', NULL, '2020-10-14 11:37:46'),
(2, 'Serah Terima Pertama', 'Serah terima ke cabang', 'Ya', NULL, 'detail_(1).pdf', '2020-10-14 11:38:19'),
(3, 'Pemeliharaan Hasil Kerja', 'Maintenance alat bandung', 'Tidak', 'Tidak ada', NULL, '2020-10-14 11:44:17'),
(4, 'Serah Terima Akhir Pekerjaan', 'Serah terima akhir ke cabang bandung', 'Ya', NULL, '1920-1_Kartu_Ujian_UAS_13011844762.pdf', '2020-10-14 11:44:41'),
(5, 'Serah Terima Pekerajaan Selesai Terhadap Pemilik', 'Kasih ke kepala cabang bandung', 'Ya', NULL, 'WEEK_06-07__PROJECT_COST_MANAGEMENT1.pdf', '2020-10-14 11:45:13'),
(6, 'Pemeliharaan Hasil Kerja', 'Maintenance alat berat', 'Tidak', 'kjhkjads', NULL, '2020-10-14 11:46:13'),
(7, 'Serah Terima Akhir Pekerjaan', 'Serah terima ke bagian kepala pusat', 'Ya', NULL, 'detail_(1)1.pdf', '2020-10-14 11:46:38'),
(8, 'Serah Terima Pekerajaan Selesai Terhadap Pemilik', 'Serah terima ke pemilik uptd', 'Tidak', 'Belum terbit', NULL, '2020-10-14 11:50:36');

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
(1, 'Penyerahan Lokasi', 'Penyerahan lokais ke sungai ciliwung', 'Ya', NULL, 'WEEK_06-07__PROJECT_COST_MANAGEMENT.pdf', '2020-10-14 11:34:25'),
(4, 'Penyerahan Lokasi', 'Tes input', 'Ya', '', '1920-1_Kartu_Ujian_UAS_1301184476.pdf', '2020-10-11 10:29:02'),
(5, 'Penyerahan Lokasi', 'asdas', 'Ya', NULL, 'Uts_Sem4.PDF', '2020-10-11 15:42:05'),
(7, 'Penyerahan Lokasi', 'sada', 'Tidak', 'adas', NULL, '2020-10-11 15:34:56'),
(9, 'Mobilisasi', 'Mobilisasi pelelangan sundawapan', 'Ya', NULL, 'CamScanner_10-12-2020_12_53_181.pdf', '2020-10-14 11:51:59'),
(10, 'SPMK (Surat Perintah Mulai Kerja)', 'SPMK versi 3 untuk kepala UPTD', 'Tidak', 'Belum terbit', NULL, '2020-10-14 11:33:20'),
(11, 'Rapat Persiapan', 'Rapat Persiapan seluruh anggota', 'Ya', NULL, 'SIDATUK_REPORT_PACKET_IRIGASI.pdf', '2020-10-14 11:35:13'),
(12, 'Pembayaran Uang Muka', 'Pembayaran Revitilasisi', 'Tidak', 'Ini', NULL, '2020-10-14 11:47:25'),
(13, 'SPMK (Surat Perintah Mulai Kerja)', 'SPMK Ver 2', 'Ya', NULL, 'WEEK_06-07__PROJECT_COST_MANAGEMENT2.pdf', '2020-10-14 11:51:38'),
(14, 'Mobilisasi', 'gyujtuy', 'Ya', NULL, '1920-1_Kartu_Ujian_UAS_13011844762.pdf', '2020-10-14 13:10:10');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nip`, `nama`, `jabatan`, `password`, `role`) VALUES
(1, '19710813 199703 1 007', 'Dikky Achmad Sidik, ST, MT', 'Kepala Dinas', 'dikky', 'user'),
(2, '19690416 200502 1 001', 'Bambang Imanudin ST,.MT', 'Kepala Bidang Bina Konstruksi', 'bambang\r\n', 'user'),
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
  MODIFY `idIrigasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `idPelaksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tahapanpelapor`
--
ALTER TABLE `tahapanpelapor`
  MODIFY `idPelapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tahapanpenyelesaian`
--
ALTER TABLE `tahapanpenyelesaian`
  MODIFY `idPenyelesaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tahapanpersiapan`
--
ALTER TABLE `tahapanpersiapan`
  MODIFY `idPersiapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
