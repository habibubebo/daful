-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2025 at 10:15 PM
-- Server version: 10.1.48-MariaDB
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daful`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `Id` int(11) NOT NULL,
  `username` mediumtext COLLATE utf8_bin,
  `password` mediumtext COLLATE utf8_bin,
  `nama` mediumtext COLLATE utf8_bin,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`Id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'admin', 'admin', 'Administrators', 1),
(2, 'user', 'user', 'John Doel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `panitia` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `telepon` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `th_ajaran` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `kepsek` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nip_kepsek` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `banner` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `motto` text COLLATE utf8_bin,
  `depan` int(11) DEFAULT NULL,
  `background` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL,
  `warna` varchar(10) COLLATE utf8_bin NOT NULL,
  `icon` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama`, `alamat`, `email`, `panitia`, `instagram`, `website`, `telepon`, `th_ajaran`, `kepsek`, `nip_kepsek`, `avatar`, `banner`, `motto`, `depan`, `background`, `tgl_daftar`, `warna`, `icon`) VALUES
(1, 'SEKO lah', 'Jalan Merdeka Bagelenan Srengat, Kec. Srengat, Kab. Blitar, Prov. Jawa Timur', 'info@sman1srengat.sch.id', 'https://wa.me/', 'smangatofficial', 'https://www.sman1srengat.sch.id/v3', '0342-551094', '2023/2024', NULL, NULL, 'chart-success.png', 'web-sma-negeri-1-srengat.webp', '#SEKO-LAH Hebat!', 2, 'sma-negeri-1-srengat.webp', '2025-05-12 22:41:28', '#8a5e00', 'favicon-baru.ico');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `masuk_jalur` varchar(100) DEFAULT NULL,
  `no_urut` varchar(100) DEFAULT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nama_panggilan` varchar(100) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `prov_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `kw` varchar(30) DEFAULT '',
  `anak_ke` varchar(100) DEFAULT NULL,
  `jml_saudara_kd` varchar(100) DEFAULT NULL,
  `jml_saudara_tr` varchar(100) DEFAULT NULL,
  `jml_saudara_ak` varchar(100) DEFAULT NULL,
  `status_anak` varchar(100) DEFAULT NULL,
  `bahasa` varchar(50) DEFAULT NULL,
  `hobi_kes` varchar(100) DEFAULT NULL,
  `hobi_or` varchar(100) DEFAULT NULL,
  `hobi_masy` varchar(100) DEFAULT NULL,
  `hobi_lain` varchar(100) DEFAULT NULL,
  `jenis_tinggal` varchar(100) DEFAULT NULL,
  `rt` varchar(100) DEFAULT NULL,
  `rt_wali` varchar(100) DEFAULT NULL,
  `jalan` varchar(100) DEFAULT NULL,
  `jalan_wali` varchar(100) DEFAULT NULL,
  `rw` varchar(100) DEFAULT NULL,
  `rw_wali` varchar(100) DEFAULT NULL,
  `desa` varchar(100) DEFAULT NULL,
  `desa_wali` varchar(100) DEFAULT NULL,
  `kec` varchar(100) DEFAULT NULL,
  `kec_wali` varchar(100) DEFAULT NULL,
  `kab` varchar(100) DEFAULT NULL,
  `kab_wali` varchar(100) DEFAULT NULL,
  `prov` varchar(100) DEFAULT NULL,
  `prov_wali` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(100) DEFAULT NULL,
  `jarak` varchar(100) DEFAULT NULL,
  `tinggal` varchar(100) DEFAULT NULL,
  `notelp` varchar(14) DEFAULT NULL,
  `goldar` varchar(14) DEFAULT NULL,
  `penyakit` varchar(100) DEFAULT NULL,
  `kelainan` varchar(100) DEFAULT NULL,
  `tinggi_badan` varchar(3) DEFAULT NULL,
  `berat_badan` varchar(3) DEFAULT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `status_ayah` varchar(100) DEFAULT NULL,
  `ttl_ayah` varchar(50) DEFAULT NULL,
  `agama_ayah` varchar(50) DEFAULT NULL,
  `kw_ayah` varchar(50) DEFAULT NULL,
  `pdd_ayah` varchar(100) DEFAULT NULL,
  `pk_ayah` varchar(100) DEFAULT NULL,
  `ph_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `status_ibu` varchar(100) DEFAULT NULL,
  `ttl_ibu` varchar(100) DEFAULT NULL,
  `agama_ibu` varchar(100) DEFAULT NULL,
  `kw_ibu` varchar(100) DEFAULT NULL,
  `pdd_ibu` varchar(100) DEFAULT NULL,
  `pk_ibu` varchar(100) DEFAULT NULL,
  `ph_ibu` varchar(100) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nik_wali` varchar(20) DEFAULT NULL,
  `ttl_wali` varchar(100) DEFAULT NULL,
  `agama_wali` varchar(100) DEFAULT NULL,
  `kw_wali` varchar(100) DEFAULT NULL,
  `pdd_wali` varchar(100) DEFAULT NULL,
  `pk_wali` varchar(100) DEFAULT NULL,
  `ph_wali` varchar(100) DEFAULT NULL,
  `hub_wali` varchar(100) DEFAULT NULL,
  `notelp_ayah` varchar(14) DEFAULT NULL,
  `notelp_ibu` varchar(14) DEFAULT NULL,
  `alamat_ortu` longtext,
  `notelp_wali` varchar(14) DEFAULT NULL,
  `asal` varchar(100) DEFAULT NULL,
  `smp_npsn` varchar(100) DEFAULT NULL,
  `smp_no` varchar(100) DEFAULT NULL,
  `smp_tgl` varchar(100) DEFAULT NULL,
  `sd_asal` varchar(100) DEFAULT NULL,
  `sd_npsn` varchar(100) DEFAULT NULL,
  `sd_no` varchar(100) DEFAULT NULL,
  `sd_tgl` varchar(100) DEFAULT NULL,
  `tgl_no_ijazah` varchar(100) DEFAULT NULL,
  `tgl_no_skl` varchar(100) DEFAULT NULL,
  `lama_belajar` varchar(100) DEFAULT NULL,
  `nopeserta_un` varchar(100) DEFAULT NULL,
  `no_skhu` varchar(100) DEFAULT NULL,
  `pindahan_asal` varchar(100) DEFAULT NULL,
  `pindahan_alasan` varchar(100) DEFAULT NULL,
  `masuk_kelas` varchar(100) DEFAULT NULL,
  `masuk_tgl` varchar(100) DEFAULT NULL,
  `no_kks` varchar(100) DEFAULT NULL,
  `no_pkh` varchar(100) DEFAULT NULL,
  `no_kip` varchar(100) DEFAULT NULL,
  `no_kis` varchar(100) DEFAULT NULL,
  `no_akta` varchar(100) DEFAULT NULL,
  `transport` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tgl_siswa` datetime DEFAULT NULL,
  `status_verifikasi` varchar(30) DEFAULT '0',
  `tgl_verif` datetime DEFAULT NULL,
  `kk` varchar(100) DEFAULT '0',
  `akta` varchar(100) DEFAULT '0',
  `ijazah` varchar(100) DEFAULT '0',
  `bukti` varchar(100) DEFAULT '0',
  `role` int(11) DEFAULT '0',
  `admin` int(11) DEFAULT '0',
  `feedbackReview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `masuk_jalur`, `no_urut`, `no_pendaftaran`, `password`, `nisn`, `nik`, `nama_lengkap`, `nama_panggilan`, `jk`, `tempat_lahir`, `prov_lahir`, `tgl_lahir`, `agama`, `kw`, `anak_ke`, `jml_saudara_kd`, `jml_saudara_tr`, `jml_saudara_ak`, `status_anak`, `bahasa`, `hobi_kes`, `hobi_or`, `hobi_masy`, `hobi_lain`, `jenis_tinggal`, `rt`, `rt_wali`, `jalan`, `jalan_wali`, `rw`, `rw_wali`, `desa`, `desa_wali`, `kec`, `kec_wali`, `kab`, `kab_wali`, `prov`, `prov_wali`, `kode_pos`, `jarak`, `tinggal`, `notelp`, `goldar`, `penyakit`, `kelainan`, `tinggi_badan`, `berat_badan`, `no_kk`, `nama_ayah`, `nik_ayah`, `status_ayah`, `ttl_ayah`, `agama_ayah`, `kw_ayah`, `pdd_ayah`, `pk_ayah`, `ph_ayah`, `nama_ibu`, `nik_ibu`, `status_ibu`, `ttl_ibu`, `agama_ibu`, `kw_ibu`, `pdd_ibu`, `pk_ibu`, `ph_ibu`, `nama_wali`, `nik_wali`, `ttl_wali`, `agama_wali`, `kw_wali`, `pdd_wali`, `pk_wali`, `ph_wali`, `hub_wali`, `notelp_ayah`, `notelp_ibu`, `alamat_ortu`, `notelp_wali`, `asal`, `smp_npsn`, `smp_no`, `smp_tgl`, `sd_asal`, `sd_npsn`, `sd_no`, `sd_tgl`, `tgl_no_ijazah`, `tgl_no_skl`, `lama_belajar`, `nopeserta_un`, `no_skhu`, `pindahan_asal`, `pindahan_alasan`, `masuk_kelas`, `masuk_tgl`, `no_kks`, `no_pkh`, `no_kip`, `no_kis`, `no_akta`, `transport`, `email`, `tgl_siswa`, `status_verifikasi`, `tgl_verif`, `kk`, `akta`, `ijazah`, `bukti`, `role`, `admin`, `feedbackReview`) VALUES
(1, 'Zonasi', '3', '3', '3', '3', '346346', 'Tiga Empat Lima', 'Agit', 'Perempuan', 'Jakarta', 'Bengkulu', '2003-06-01', 'Budha', 'Indonesia', '1', '2', '0', '0', '<s>Yatim / Piatu / Yatim Piatu</s>', 'Indonesia, Jawa', 'musik', 'renang', 'IPNU', 'mancing', '1', '01', 'rt wali', 'melati', 'jalan-wali', '04', 'rw wali', 'Srengat', 'desa wali', 'Srengat', 'kec wali', 'Blitar', 'kab wali', NULL, NULL, NULL, '1.5', 'Orang Tua', '081333561473', 'O', 'maag', '-', '150', '56', 'no kk', 'Arif Rahman Hakim', 'ARIF RAHMAN HAKIM', 'hidup', 'Tempat, 17 Agustus', 'Katolik', 'Indonesia', 'SD/Sederajat', 'PNS Selain (Guru dan Dokter/Bidan/Perawat)', '500-1jt', 'Ibu Arif Rahman Hakim', NULL, 'hidup', 'Blitar, 17 Agustus', 'Hindu', 'Indonesia', 'S3', 'Dokter/Bidan/Perawat', '>5jt', 'Nama Wali', NULL, 'Blitar, 4 Januari 2009', 'Islam', 'Indonesia', 'SMA/Sederajat', 'Pensiunan', '500-1jt', 'keluarga', '123124235', '12341241412', 'Jalan Melati RT 01/RW 04 Srengat - Srengat - Blitar', '085812827796', 'SMP namek', '098675', 'no ijazah smp', '2023-02-01', 'SD Escobar', '658700', 'no ijazah sd', '2023-06-17', '20-juli-2019 ', 'tgl no skl', '1', '123-345-2212', 'no skhu disini', 'SMP uruguay', 'kejauhan', 'X', '2023-06-17', 'nomor KKS', 'Nomor PKH', 'Nomor KIP', 'Nomor KIS', 'no akta', 'Sepeda', 'email@gmail.com', '2023-05-27 09:28:12', '2', '2025-05-10 19:21:58', 'C:/laragon/www/daful/file/uploads/Zonasi3/KK-Tiga-empat-Lima.png', 'AKTA-Tiga-empat-Lima.png', 'IJAZAH-Tiga-empat-Lima.png', 'BUKTI-Tiga-empat-Lima.png', 0, 0, '{\"rating\":\"1.5\",\"review_text\":\"Tolong inputannya dikurangi\",\"tanggal\":\"2025-05-08 17:56:10\"}'),
(2, 'Zonasi', '1', 'Exercitationem quis ', '1', '1', 'Commodi consequuntur', 'Zonasi satu', 'Minim ad suscipit di', 'Perempuan', 'Non culpa labore qu', 'Sumatra Utara', 'Obcaecati ', 'Islam', 'Sunt Nam et irure mi', 'Laborum impedit ad ', 'Aute neque et perfer', 'Aut aperiam nobis no', 'Nulla velit vitae c', 'Yatim', 'Jawa', 'Dolore veniam molli', 'Do alias voluptatem', 'Laborum Voluptas co', 'Molestias omnis simi', NULL, 'Ad autem totam et do', '-', 'Delectus quis verit', '-', 'Veniam dolore autem', '-', 'Obcaecati voluptatem', '-', 'Eum recusandae Beat', '-', 'Nam velit necessita', '-', 'Jawa Barat', '-', NULL, 'Omnis enim ea est la', 'Kos', 'Voluptatibus t', 'O', 'Qui perspiciatis pr', 'Dolore enim sint dol', 'Ips', 'Tem', NULL, 'Aliquid iure ea id a', NULL, 'Culpa dignissimos mi', 'Distinctio Ut eos q', 'Islam', 'Veritatis earum dolo', 'D3', 'Nelayan', '1jt-2jt', 'Quis quis exercitati', NULL, 'Magnam aut deserunt ', 'Commodo aspernatur v', 'Kristen', 'Eiusmod inventore re', 'D1', 'PNS', '<500rb', '-', NULL, '-', '-', '-', '-', '-', '-', '-', 'Soluta aut qui', 'Ipsam ducimus ', 'Voluptate rem ', '-', 'Non libero quisquam ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Non aute officia mol', 'Dolor possimus faci', 'Delectus velit temp', 'Cum libero sit rerum', 'Ea id delectus qui', 'In velit dignissimos', 'Itaque amet ut opti', 'XII', 'Consequatur Officia', 'Nam aliquip assumend', 'Cumque laboriosam v', 'Elit mollit velit ', NULL, NULL, NULL, NULL, '2023-06-08 22:30:19', '2', '2025-05-12 18:29:25', '0', '0', '0', '0', 0, 0, '{\"rating\":\"2\",\"review_text\":\"pak saya ada kesulitan menginput data wali saya, apakah bisa dibantu dari sisi admin? karena saya tinggal sendiri tidak ada yang bisa membantu saya \",\"tanggal\":\"2025-05-10 07:10:45\"}'),
(3, 'Zonasi', '2', '3', '2', '2', '346346', 'zonasi dua', 'zede', 'Laki-Laki', 'Jakarta', 'Daerah Khusus Ibukota Jakarta', '2023-06-12', 'Islam', 'Indonesia', '1', '2', '0', '0', 'Piatu', 'Indonesia', '-', '-', '-', '-', NULL, '1', '-', 'alumunium', '-', '2', '-', 'Sini', '-', 'situ', '-', 'Kab Blitar', '-', 'Jawa Timur', '-', NULL, '1', 'Orang Tua', '08123546789', 'O', 'maag', '-', '150', '56', NULL, 'dfhd', NULL, 'hidup', 'dsfhzdf', 'Islam', 'dfhzdf', 'S3', 'Tidak Bekerja', '<500rb', 'sedgsdg', NULL, 'hidup', 'tgjfgx', 'Islam', 'dfhdfsh', 'S2', 'Pensiunan', '<500rb', '-', NULL, '-', '-', '-', '-', '-', '-', '-', '457455474', '56785678', 'jalan jalan or', '-', 'SMP namek', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-juli-2019 ', 'tgl no skl', '1', '123-345-2212', 'no skhu disini', '', '', 'X', '16-02-2023', '', '', '', NULL, NULL, NULL, NULL, '2023-06-08 22:30:19', '0', '0000-00-00 00:00:00', 'KK-zonasi-dua.jpeg', 'AKTA-zonasi-dua.png', 'IJAZAH-zonasi-dua.jpeg', 'BUKTI-zonasi-dua.jpg', 0, 0, '{\"rating\":\"5\",\"review_text\":\"zonasi 2\",\"tanggal\":\"2025-05-10 13:03:06\"}'),
(4, 'Afirmasi', '1', '23426786', '112345678', '112345678', '346346', 'Afirmasi Satu', 'Afisatu', 'Laki-Laki', 'Jakarta', 'Daerah Khusus Ibukota Jakarta', '2023-06-11', 'Kristen', 'Indonesia', '1', '2', '0', '0', 'Tidak Semuanya', 'Indonesia, Jawa', '-', '-', '-', '-', NULL, '01', '', 'Matahari', '', '08', '', 'Kepanjen Kidul', '', 'Kepanjen Kidul', '', 'Kota Blitar', '', 'Jawa Timur', '', NULL, '1', 'Orang Tua', '085123456789', 'B', 'maag', '-', '170', '50', NULL, 'Afirmasi ayah', NULL, 'masih hidup', 'Blitar, 17 Agustus 1945', 'Islam', 'Indonesia', 'S3', 'Pensiunan', '1jt-2jt', 'Afirmasi Ibu', NULL, 'hidup', 'blitar, 17 agustus 1928', 'Budha', 'Indonesia', 'SMA/Sederajat', 'Nelayan', '500-1jt', '', NULL, '', '', '', '', '', '', '', '08578964536', '089776544336', 'Jalan Matahari', '', 'SMP namek', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20-juli-2019 ', 'tgl no skl', '1', '123-345-2212', 'no skhu disini', '', '', 'X', '16-02-2023', '', '', '', NULL, NULL, NULL, NULL, '2023-06-09 06:16:58', '0', '0000-00-00 00:00:00', '0', '0', '0', '0', 0, 1, '{\"rating\":\"2.5\",\"review_text\":\"terima kasih admin\",\"tanggal\":\"2025-05-10 14:32:05\"}'),
(5, 'Perpindahan tugas orang tua', '1', '1234', '1234', '123', '1234567890', 'Tejo Surabi', 'Tejo', 'Laki-Laki', 'Blitar', 'Jawa Timur', '2005-06-01', 'Islam', 'Indonesia', '5', '5', '0', '0', 'Yatim Piatu', 'Indonesia, Inggris', 'musik', 'aerobik', 'PP', '-', NULL, '01', '-', 'mawar', '-', '07', '-', 'Kepanjen Kidul', '-', 'Kepanjen Kidul', '-', 'Kota Blitar', '-', 'Jawa Timur', 'Aceh', NULL, '30', 'Orang Tua', '081234567890', 'AB', 'Ullam ullamco iure s', 'Excepteur accusantiu', '170', '56', 'Soluta in rerum blan', 'Est Omnis Vel Perspi', NULL, 'Laudantium rerum pr', 'Doloribus Animi Dol', 'Islam', 'Indonesia', 'SD/Sederajat', 'Tidak Bekerja', '<500rb', 'Voluptas Quo Debitis', NULL, 'Ullamco tempor dolor', 'Dolor Quia Dolor Cul', 'Islam', 'Irure Sit Aliquam Ha', 'SD/Sederajat', 'Tidak Bekerja', '<500rb', 'Nama Wali', NULL, 'Ttl Wali', 'Konghucu', 'Wni', 'SD/Sederajat', 'Pensiunan', '500-1jt', 'Paman', '085812827796', '40', 'Jalan Melati No. 21 RT. 1 RW. 4 Kelurahan Srengat, Kecamatan Srengat', '081', 'Voluptatem animi c', '91', 'Perferendis reiciend', '1989-12-12', 'In a consequuntur si', '66', 'Expedita voluptates ', '2009-09-05', '', '', '', '', '', 'Praesentium consequa', 'Et quam tempore min', 'X', '1990-01-23', 'Minus nihil sed ipsu', 'Fugiat et ad volupt', 'Dolor neque harum qu', 'Elit non ipsa illu', 'Lorem quae possimus', 'Blanditiis vel assum', 'mitasekaxo@mailinator.com', '2023-06-09 08:59:47', '1', '0000-00-00 00:00:00', 'KK-Tejo-Surabi.png', 'AKTA-Tejo-Surabi.jpg', 'IJAZAH-Tejo-Surabi.png', 'BUKTI-Tejo-Surabi.png', 0, 1, '{\"rating\":\"3.5\",\"review_text\":\"Alhamdulillah sudah mengisi data\",\"tanggal\":\"2025-05-10 10:05:59\"}'),
(6, 'Afirmasi', '4', '', '56', '56', NULL, 'Afirmasi empat lima', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-15 08:19:13', '0', NULL, '0', '0', '0', '0', 0, 0, '{\"rating\":\"5\",\"review_text\":\"mantap sekali aplikasi ini saya merasa ingin meningkatkan prestasi saya agar mengharumkan nama sekolah diajang nasional \",\"tanggal\":\"2025-05-10 07:09:34\"}'),
(7, 'Zonasi', '4', '', '4', NULL, NULL, 'Zonasi empat lima', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-15 08:19:13', '0', NULL, '0', '0', '0', '0', 0, 0, ''),
(9, 'Prestasi Nilai Akademik (tes)', '23', '88888', '88888', '88888888', '3505030605850004', 'Priyo Widi Wicaksono', 'Yoyok', 'Laki-Laki', 'Blitar', 'Jawa Timur', '1985-05-06', 'Islam', 'Indonesia', '2', '2', '0', '0', '<s>Yatim / Piatu / Yatim Piatu</s>', 'Jawa', 'musik', 'bola', 'tidak', 'trav', NULL, '1', '-', 'merdeka', '-', '1', '-', 'Bagelenan', '-', 'Srengat', '-', '-pilih Kab./kota.-', '-', NULL, NULL, NULL, '1', 'Orang Tua', '082334747622', 'AB', 'tidak ada', 'tidak ada', '177', '67', '12345678', 'Muchsin', NULL, 'masih hidup', 'Blitar, 23 Maret 1958', 'Islam', 'Indonesia', 'D4/S1', 'Pensiunan', '2jt-3jt', 'Ngaropah', NULL, 'masih hidup', '9 September 1959', 'Islam', 'Indonesia', 'D4/S1', 'Pensiunan', '2jt-3jt', '-', NULL, '-', '-', '-', '-', '-', '-', '-', '085656510531', '085656510531', 'Jalan merdeka RT 1/RW 1 Bagelenan - Srengat - -pilih Kab./kota.-', '-', 'smpn 1 srengat', '20514347', '88888888', '2024-06-20', 'sd mangunan 01', '20514347', '12345678', '2021-06-08', NULL, NULL, NULL, NULL, NULL, '', '', 'X', '2025-07-16', '-', '-', '-', '-', '12345678', 'sepeda', 'priyo.widi@gmail.com', '2025-05-10 04:02:32', '1', NULL, '0', '0', '0', '0', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_agama`
--

INSERT INTO `tbl_agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `id` int(11) NOT NULL,
  `nama` mediumtext COLLATE utf8_bin,
  `ket` mediumtext COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `nama`, `ket`) VALUES
(1, '1. Masuk dan lengkapi data', '<p>masuk</p>'),
(2, '2. Cetak Bukti Daftar Ulang', '<p>Cetak bukti daftar ulang</p>'),
(3, '3. Datang ke SMA', '<p>Datang Ke SMAN Dengan membawa berkas <strong style=\"color: rgb(230, 0, 0);\">abcdef</strong>, dimasukkan ke dalam map : <span style=\"color: rgb(240, 102, 102);\">warna merah untuk jalur xxxx</span>; <span style=\"color: rgb(255, 255, 102); background-color: rgb(0, 0, 0);\">warna kuning utk jalur xxx</span>; pada tanggal <span style=\"color: rgb(0, 102, 204);\">xxxxx</span> pukul 4:20 WIB</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jalur`
--

CREATE TABLE `tbl_jalur` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_jalur`
--

INSERT INTO `tbl_jalur` (`id`, `nama`) VALUES
(1, 'Afirmasi'),
(2, 'Perpindahan tugas orang tua'),
(3, 'Prestasi Hasil Lomba'),
(4, 'Prestasi Nilai Akademik (tes)'),
(5, 'Zonasi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pdd`
--

CREATE TABLE `tbl_pdd` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_pdd`
--

INSERT INTO `tbl_pdd` (`id`, `nama`) VALUES
(1, 'SD/Sederajat'),
(2, 'SMP/Sederajat'),
(3, 'SMA/Sederajat'),
(4, 'D1'),
(5, 'D2'),
(6, 'D3'),
(7, 'D4/S1'),
(8, 'S2'),
(9, 'S3'),
(10, 'Tidak Berpendidikan Formal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pekerjaan`
--

CREATE TABLE `tbl_pekerjaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id`, `nama`) VALUES
(1, 'Tidak Bekerja'),
(2, 'Pensiunan'),
(3, 'PNS Selain (Guru dan Dokter/Bidan/Perawat)'),
(4, 'PNS'),
(5, 'TNI/POLRI'),
(6, 'Pegawai Swasta'),
(7, 'Wiraswasta'),
(8, 'Pengacara/Hakim/Jaksa/Notaris '),
(9, 'Seniman/Pelukis/Artis/Sejenis\r\n'),
(10, 'Dokter/Bidan/Perawat'),
(11, 'Pilot/Pramugara'),
(12, 'Pedagang'),
(13, 'Petani/Peternak'),
(14, 'Nelayan'),
(15, 'Buruh (Tani/Pabrik/Bangunan)'),
(16, 'Sopir/Masinis/Kondektur'),
(17, 'Politikus'),
(18, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penghasilan`
--

CREATE TABLE `tbl_penghasilan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_penghasilan`
--

INSERT INTO `tbl_penghasilan` (`id`, `nama`) VALUES
(1, '<500rb'),
(2, '500-1jt'),
(3, '1jt-2jt'),
(4, '2jt-3jt'),
(5, '3jt-5t'),
(6, '>5jt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id` int(11) NOT NULL,
  `ket` mediumtext COLLATE utf8_bin,
  `tgl` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id`, `ket`, `tgl`) VALUES
(1, 'PENGUMUMAN<br>Harap mengisi data dengan teliti!', '2021-04-14 00:00:00'),
(2, 'Assalamualaikum, ini dihosting dari rumah habib', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`) USING BTREE;

--
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jalur`
--
ALTER TABLE `tbl_jalur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_penghasilan`
--
ALTER TABLE `tbl_penghasilan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_info`
--
ALTER TABLE `tbl_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_jalur`
--
ALTER TABLE `tbl_jalur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_penghasilan`
--
ALTER TABLE `tbl_penghasilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
