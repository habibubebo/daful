/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `daful` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `daful`;

CREATE TABLE IF NOT EXISTS `akun` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `username` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `nama` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `role` int DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT IGNORE INTO `akun` (`Id`, `username`, `password`, `nama`, `role`) VALUES
	(1, 'admin', 'admin', 'Administrators', 1),
	(2, 'user', 'user', 'John Doe', 1);

CREATE TABLE IF NOT EXISTS `profil` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `telepon` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `th_ajaran` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kepsek` varchar(100) DEFAULT NULL,
  `nip_kepsek` varchar(100) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT IGNORE INTO `profil` (`id`, `nama`, `alamat`, `email`, `website`, `telepon`, `th_ajaran`, `kepsek`, `nip_kepsek`, `avatar`, `tgl_daftar`) VALUES
	(1, 'SMAN 1 Srengat', 'Jalan Merdeka Bagelenan Srengat', 'info@sman1srengat.sch.id', 'www.sman1srengat.sch.id', '0342-551094', '2023/2024', '-', '-', 'assets\\img\\logo_sma_srengat_low.png', '2023-06-04 08:56:17');

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `no_pendaftaran` varchar(20) NOT NULL,
  `password` text,
  `nisn` varchar(10) DEFAULT NULL,
  `nik` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nama_panggilan` varchar(100) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `tempat_lahir` text,
  `prov_lahir` text,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `kw` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '',
  `anak_ke` varchar(100) DEFAULT NULL,
  `jml_saudara_kd` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jml_saudara_tr` varchar(100) DEFAULT NULL,
  `jml_saudara_ak` varchar(100) DEFAULT NULL,
  `status_anak` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `bahasa` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `hobi_kes` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `hobi_or` varchar(100) DEFAULT NULL,
  `hobi_masy` varchar(100) DEFAULT NULL,
  `hobi_lain` varchar(100) DEFAULT NULL,
  `jenis_tinggal` varchar(100) DEFAULT NULL,
  `rt` varchar(100) DEFAULT NULL,
  `jalan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `rw` varchar(100) DEFAULT NULL,
  `desa` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `kec` varchar(100) DEFAULT NULL,
  `kab` varchar(100) DEFAULT NULL,
  `prov` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jarak` varchar(100) DEFAULT NULL,
  `tinggal` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `notelp` varchar(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `goldar` varchar(14) DEFAULT NULL,
  `penyakit` varchar(100) DEFAULT NULL,
  `kelainan` varchar(100) DEFAULT NULL,
  `tinggi_badan` varchar(3) DEFAULT NULL,
  `berat_badan` varchar(3) DEFAULT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `status_ayah` varchar(100) DEFAULT NULL,
  `ttl_ayah` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `agama_ayah` varchar(50) DEFAULT NULL,
  `kw_ayah` varchar(50) DEFAULT NULL,
  `pdd_ayah` varchar(100) DEFAULT NULL,
  `pk_ayah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ph_ayah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `status_ibu` varchar(100) DEFAULT NULL,
  `ttl_ibu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `agama_ibu` varchar(100) DEFAULT NULL,
  `kw_ibu` varchar(100) DEFAULT NULL,
  `pdd_ibu` varchar(100) DEFAULT NULL,
  `pk_ibu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ph_ibu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nik_wali` varchar(20) DEFAULT NULL,
  `ttl_wali` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `agama_wali` varchar(100) DEFAULT NULL,
  `kw_wali` varchar(100) DEFAULT NULL,
  `pdd_wali` varchar(100) DEFAULT NULL,
  `pk_wali` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ph_wali` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `hub_wali` varchar(100) DEFAULT NULL,
  `alamat_wali` varchar(100) DEFAULT NULL,
  `notelp_ayah` varchar(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `notelp_ibu` varchar(14) DEFAULT NULL,
  `alamat_ortu` varchar(14) DEFAULT NULL,
  `notelp_wali` varchar(14) DEFAULT NULL,
  `asal` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `no_urut` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tgl_no_ijazah` varchar(100) DEFAULT NULL,
  `tgl_no_skl` varchar(100) DEFAULT NULL,
  `lama_belajar` varchar(100) DEFAULT NULL,
  `nopeserta_un` varchar(100) DEFAULT NULL,
  `no_skhu` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pindahan_asal` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pindahan_alasan` varchar(100) DEFAULT NULL,
  `masuk_kelas` varchar(100) DEFAULT NULL,
  `masuk_jalur` varchar(100) DEFAULT NULL,
  `masuk_tgl` varchar(100) DEFAULT NULL,
  `no_kks` varchar(100) DEFAULT NULL,
  `no_pkh` varchar(100) DEFAULT NULL,
  `no_kip` varchar(100) DEFAULT NULL,
  `tgl_siswa` datetime DEFAULT NULL,
  `status_verifikasi` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '0',
  `tgl_verif` datetime DEFAULT NULL,
  `kk` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '0',
  `akta` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '0',
  `ijazah` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '0',
  `bukti` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT '0',
  `role` int DEFAULT '0',
  `admin` int DEFAULT '0',
  PRIMARY KEY (`id_siswa`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT IGNORE INTO `siswa` (`id_siswa`, `no_pendaftaran`, `password`, `nisn`, `nik`, `nama_lengkap`, `nama_panggilan`, `jk`, `tempat_lahir`, `prov_lahir`, `tgl_lahir`, `agama`, `kw`, `anak_ke`, `jml_saudara_kd`, `jml_saudara_tr`, `jml_saudara_ak`, `status_anak`, `bahasa`, `hobi_kes`, `hobi_or`, `hobi_masy`, `hobi_lain`, `jenis_tinggal`, `rt`, `jalan`, `rw`, `desa`, `kec`, `kab`, `prov`, `kode_pos`, `jarak`, `tinggal`, `notelp`, `goldar`, `penyakit`, `kelainan`, `tinggi_badan`, `berat_badan`, `no_kk`, `nama_ayah`, `nik_ayah`, `status_ayah`, `ttl_ayah`, `agama_ayah`, `kw_ayah`, `pdd_ayah`, `pk_ayah`, `ph_ayah`, `nama_ibu`, `nik_ibu`, `status_ibu`, `ttl_ibu`, `agama_ibu`, `kw_ibu`, `pdd_ibu`, `pk_ibu`, `ph_ibu`, `nama_wali`, `nik_wali`, `ttl_wali`, `agama_wali`, `kw_wali`, `pdd_wali`, `pk_wali`, `ph_wali`, `hub_wali`, `alamat_wali`, `notelp_ayah`, `notelp_ibu`, `alamat_ortu`, `notelp_wali`, `asal`, `no_urut`, `tgl_no_ijazah`, `tgl_no_skl`, `lama_belajar`, `nopeserta_un`, `no_skhu`, `pindahan_asal`, `pindahan_alasan`, `masuk_kelas`, `masuk_jalur`, `masuk_tgl`, `no_kks`, `no_pkh`, `no_kip`, `tgl_siswa`, `status_verifikasi`, `tgl_verif`, `kk`, `akta`, `ijazah`, `bukti`, `role`, `admin`) VALUES
	(1, '2021-001', '1', '1234567891', '3312136402000002', 'KIM NICOL JEFRI', NULL, 'Laki-Laki', 'Pontianak', NULL, '01-03-2008', 'Islam', NULL, '4', '4', NULL, NULL, 'Anak Kandung', NULL, '1', NULL, NULL, NULL, '2', NULL, NULL, NULL, 'WONOKARTO', 'Wonogiri', 'wonogiri', 'JAWA TENGAH', '57651', '5', '5', '085320039001', NULL, NULL, NULL, NULL, NULL, '3312457845120002', 'YOYOK GUNAWAN', '3312092410800003', '1', '1981', NULL, NULL, 'D1', 'Tidak Bekerja', '< 500rb', 'LUCIA WIWIK WINARNI', '3319036204730003', '1', '1986', NULL, NULL, 'D2', 'TNI/POLRI', '3jt-15t', '', '', '', 'Katolik', NULL, '', '', '', NULL, NULL, '085320039001', NULL, NULL, NULL, 'MIN SUKOHARJO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', '-', '-', '2021-01-15 02:10:18', '0', NULL, NULL, NULL, NULL, NULL, 0, 0),
	(8, '2021-002', '0011196590', '0011196590', '0011196508', 'IWAN PRAYITNO ILYAS', '', 'Laki-Laki', 'SITUBONDO', 'Aceh', '05-05-1994', 'Islam', '', '2', '3', '', '', 'Yatim', 'Jawa', '1', '', '', '', '1', '', '', '', 'Situbondo', 'Situbondo', 'Situbondo', 'Aceh', 'Situbondo', '2', 'Orang Tua', '081333561473', 'O', '', '', '', '', '0987654321', 'ARIF RAHMAN HAKIM', 'ARIF RAHMAN HAKI', '1', 'ARIF RAHMA', 'Islam', '', 'SD/Sederajat', 'TNI/POLRI', '3jt-5t', 'ARIF RAHMAN HAKIM', '1', '1', 'ARIF RAHMA', 'Islam', '', 'D1', 'TNI/POLRI', '2jt-3jt', '', '', '', 'Budha', '', 'SD/Sederajat', 'Tidak Bekerja', '<500rb', '', '', '', '', '', '', 'mts negeri 1 situbondo', '', '', '', '', '', '', '', '', 'X', '', '', '-', '-', '-', '2021-04-18 21:07:00', '1', NULL, 'KK-IWAN-PRAYITNO-ILYAS.jpg', 'AKTA-IWAN-PRAYITNO-ILYAS.jpg', 'IJAZAH-IWAN-PRAYITNO-ILYAS.png', 'BUKTI-IWAN-PRAYITNO-ILYAS.jpg', 0, 0),
	(11, '2021-003', '2021', '0011196508', '0011196508', 'ARIF RAHMAN HAKIM', NULL, 'Laki-Laki', 'SITUBONDO', NULL, '04-05-1994', 'Kristen', NULL, '1', '1', NULL, NULL, 'Anak Kandung', NULL, '3', NULL, NULL, NULL, '1', NULL, NULL, NULL, 'Situbondo', 'Situbondo', 'Situbondo', 'Situbondo', '1', '5', '5', '081333561473', NULL, NULL, NULL, NULL, NULL, '0987654321', 'ARIF RAHMAN HAKIM', '111', '3', '33', NULL, NULL, 'D1', 'TNI/POLRI', '2jt-3jt', 'ARIF RAHMAN HAKIM', '1', '3', '1', NULL, NULL, 'D1', 'TNI/POLRI', '3jt-5t', '', '', '', 'Hindu', NULL, '', '', '', NULL, NULL, '', NULL, NULL, NULL, 'mts negeri 1 situbondo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '-', '-', '-', '2021-04-20 10:49:03', '0', NULL, NULL, NULL, NULL, NULL, 0, 0),
	(15, '3', '3', '3', '346346', 'Tiga empat Lima', 'agit', 'Perempuan', 'Jakarta', 'Bengkulu', '1995-06-01', 'Budha', 'indonesia', '1', '2', '0', '0', 'Tidak Semuanya', 'Indonesia, Jawa', 'musik', 'renang', 'IPNU', 'mancing', '1', '01', 'melati', '04', 'srengat', 'srengat', 'Blitar', 'Jawa Timur', NULL, '1', 'Orang Tua', '081333561473', 'O', 'maag', '-', '150', '56', '1234234', 'ARIF RAHMAN HAKIM', 'ARIF RAHMAN HAKIM', 'hidup', '17-08-1945', 'Katolik', 'indonesia', 'SD/Sederajat', 'PNS Selain (Guru dan Dokter/Bidan/Perawat)', '500-1jt', 'ibu', NULL, 'hidup', 'blitar, 17 agustus', 'Hindu', 'indonesia', 'S3', 'Dokter/Bidan/Perawat', '>5jt', 'nama wali', NULL, 'blitar, 4 januari 2009', 'Islam', 'Indonesia', 'SMA/Sederajat', 'Pensiunan', '500-1jt', 'keluarga', 'jalan wali alamat wali', '123124235', '12341241412', 'jalan matahari', '085812827796', 'SMP namek', '201', '20-juli-2019 ', 'tgl no skl', '1', '123-345-2212', 'no skhu disini', 'SMP uruguay', 'kejauhan', 'X', 'zonaasi', '16-02-2023', 'nomor KKS', 'NOmor PKH', 'Nomor KIP', '2023-05-27 09:28:12', '1', '0000-00-00 00:00:00', 'KK-Tiga-empat-Lima.jpg', 'AKTA-Tiga.png', 'IJAZAH-Tiga.png', 'BUKTI-Tiga.png', 0, 0);

CREATE TABLE IF NOT EXISTS `tbl_agama` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT IGNORE INTO `tbl_agama` (`id`, `nama`) VALUES
	(1, 'Islam'),
	(2, 'Kristen'),
	(3, 'Katolik'),
	(4, 'Hindu'),
	(5, 'Budha'),
	(6, 'Konghucu');

CREATE TABLE IF NOT EXISTS `tbl_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` text CHARACTER SET latin1 COLLATE latin1_bin,
  `ket` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT IGNORE INTO `tbl_info` (`id`, `nama`, `ket`) VALUES
	(1, '1. Masuk dan lengkapi data', 'Login aplikasi dengan menggunakan No Pendaftaran dan NISN. Isi data dengan benar,dan upload berkas : abcdef'),
	(2, '2. Cetak Bukti Daftar Ulang', 'Cetak bukti daftar ulang'),
	(3, '3. Datang ke SMA Negeri 1 Srengat', 'Datang Ke SMAN 1 Srengat Dengan membawa berkas abcdef, <br>dimasukkan ke dalam map : <br>a. <strong>warna merah</strong> untuk jalur xxxx; <br>b. <strong>warna kuning</strong> utk jalur xxx; <br>c. …  pada tanggal xxxxx pukul 4:20 WIB');

CREATE TABLE IF NOT EXISTS `tbl_pdd` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT IGNORE INTO `tbl_pdd` (`id`, `nama`) VALUES
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

CREATE TABLE IF NOT EXISTS `tbl_pekerjaan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT IGNORE INTO `tbl_pekerjaan` (`id`, `nama`) VALUES
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

CREATE TABLE IF NOT EXISTS `tbl_penghasilan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT IGNORE INTO `tbl_penghasilan` (`id`, `nama`) VALUES
	(1, '<500rb'),
	(2, '500-1jt'),
	(3, '1jt-2jt'),
	(4, '2jt-3jt'),
	(5, '3jt-5t'),
	(6, '>5jt');

CREATE TABLE IF NOT EXISTS `tbl_pengumuman` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ket` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `tgl` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT IGNORE INTO `tbl_pengumuman` (`id`, `ket`, `tgl`) VALUES
	(1, 'PENGUMUMAN<br>Harap mengisi data dengan teliti!', '2021-04-14 00:00:00');

CREATE TABLE IF NOT EXISTS `tbl_verifikasi` (
  `id_verifikasi` int NOT NULL AUTO_INCREMENT,
  `isi` text,
  `ket` text,
  `tgl_verifikasi` datetime DEFAULT NULL,
  PRIMARY KEY (`id_verifikasi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT IGNORE INTO `tbl_verifikasi` (`id_verifikasi`, `isi`, `ket`, `tgl_verifikasi`) VALUES
	(1, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p style="margin-left:0in; margin-right:0in"><u><strong><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Materi Tes Potensi Akademik</span></span></span></strong></u></p>\r\n\r\n<ol>\r\n	<li><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Bahasa Indonesia&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10 Soal</span></span></span></li>\r\n	<li><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Matematika&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10 Soal</span></span></span></li>\r\n	<li><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">IPA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10 Soal</span></span></span></li>\r\n	<li><span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">PAI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 10 Soal</span></span></span></li>\r\n</ol>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><u>Hari Tanggal tes : </u></strong></span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;tanggal 06&nbsp;Juli 2021</span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><u>Waktu Tes potensi Akademik :</u></strong></span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 1&nbsp; : 07.00 - 09.00</span></span><br />\r\n<span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">&nbsp; &nbsp; &nbsp; &nbsp; Sesi 2&nbsp; : 09.30 - 11.30</span></span></p>\r\n\r\n<p style="margin-left:0cm; margin-right:0cm; text-align:justify"><strong><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">*<em>catatan : </em></span></span></strong><br />\r\n<strong><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><em>jadwal ujian bisa berubah sewaktu - waktu&nbsp; Update infomasi di web PPDB </em></span></span><em><span style="font-size:11.0pt">peserta ujian datang 15&nbsp; menit sebelum&nbsp;tes dimulai.</span></em></strong></p>\r\n</body>\r\n</html>\r\n', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
