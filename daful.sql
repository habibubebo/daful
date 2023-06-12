-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table daful.akun
CREATE TABLE IF NOT EXISTS `akun` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` mediumtext COLLATE utf8_bin,
  `password` mediumtext COLLATE utf8_bin,
  `nama` mediumtext COLLATE utf8_bin,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table daful.akun: ~2 rows (approximately)
/*!40000 ALTER TABLE `akun` DISABLE KEYS */;
INSERT IGNORE INTO `akun` (`Id`, `username`, `password`, `nama`, `role`) VALUES
	(1, 'admin', 'admin', 'Administrators', 1),
	(2, 'user', 'user', 'John Doe', 1);
/*!40000 ALTER TABLE `akun` ENABLE KEYS */;

-- Dumping structure for table daful.profil
CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `telepon` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `th_ajaran` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `kepsek` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `nip_kepsek` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table daful.profil: ~0 rows (approximately)
/*!40000 ALTER TABLE `profil` DISABLE KEYS */;
INSERT IGNORE INTO `profil` (`id`, `nama`, `alamat`, `email`, `website`, `telepon`, `th_ajaran`, `kepsek`, `nip_kepsek`, `avatar`, `tgl_daftar`) VALUES
	(1, 'SMAN 1 Srengat', 'Jalan Merdeka Bagelenan Srengat, Kec. Srengat,<br> Kab. Blitar, Prov. Jawa Timur', 'info@sman1srengat.sch.id', 'https://www.sman1srengat.sch.id/v3', '0342-551094', '2023/2024', '-', '-', 'logo_sma_srengat_low.png', '2023-06-12 15:40:08');
/*!40000 ALTER TABLE `profil` ENABLE KEYS */;

-- Dumping structure for table daful.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `masuk_jalur` varchar(100) DEFAULT NULL,
  `no_urut` varchar(100) DEFAULT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `password` text,
  `nisn` varchar(10) DEFAULT NULL,
  `nik` text,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `nama_panggilan` varchar(100) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `tempat_lahir` text,
  `prov_lahir` text,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `kw` varchar(30) DEFAULT '',
  `anak_ke` varchar(100) DEFAULT NULL,
  `jml_saudara_kd` varchar(100) DEFAULT NULL,
  `jml_saudara_tr` varchar(100) DEFAULT NULL,
  `jml_saudara_ak` varchar(100) DEFAULT NULL,
  `status_anak` varchar(100) DEFAULT NULL,
  `bahasa` text,
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
  `alamat_ortu` varchar(14) DEFAULT NULL,
  `notelp_wali` varchar(14) DEFAULT NULL,
  `asal` varchar(100) DEFAULT NULL,
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
  `tgl_siswa` datetime DEFAULT NULL,
  `status_verifikasi` varchar(30) DEFAULT '0',
  `tgl_verif` datetime DEFAULT NULL,
  `kk` varchar(100) DEFAULT '0',
  `akta` varchar(100) DEFAULT '0',
  `ijazah` varchar(100) DEFAULT '0',
  `bukti` varchar(100) DEFAULT '0',
  `role` int(11) DEFAULT '0',
  `admin` int(11) DEFAULT '0',
  PRIMARY KEY (`id_siswa`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table daful.siswa: ~5 rows (approximately)
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT IGNORE INTO `siswa` (`id_siswa`, `masuk_jalur`, `no_urut`, `no_pendaftaran`, `password`, `nisn`, `nik`, `nama_lengkap`, `nama_panggilan`, `jk`, `tempat_lahir`, `prov_lahir`, `tgl_lahir`, `agama`, `kw`, `anak_ke`, `jml_saudara_kd`, `jml_saudara_tr`, `jml_saudara_ak`, `status_anak`, `bahasa`, `hobi_kes`, `hobi_or`, `hobi_masy`, `hobi_lain`, `jenis_tinggal`, `rt`, `rt_wali`, `jalan`, `jalan_wali`, `rw`, `rw_wali`, `desa`, `desa_wali`, `kec`, `kec_wali`, `kab`, `kab_wali`, `prov`, `prov_wali`, `kode_pos`, `jarak`, `tinggal`, `notelp`, `goldar`, `penyakit`, `kelainan`, `tinggi_badan`, `berat_badan`, `no_kk`, `nama_ayah`, `nik_ayah`, `status_ayah`, `ttl_ayah`, `agama_ayah`, `kw_ayah`, `pdd_ayah`, `pk_ayah`, `ph_ayah`, `nama_ibu`, `nik_ibu`, `status_ibu`, `ttl_ibu`, `agama_ibu`, `kw_ibu`, `pdd_ibu`, `pk_ibu`, `ph_ibu`, `nama_wali`, `nik_wali`, `ttl_wali`, `agama_wali`, `kw_wali`, `pdd_wali`, `pk_wali`, `ph_wali`, `hub_wali`, `notelp_ayah`, `notelp_ibu`, `alamat_ortu`, `notelp_wali`, `asal`, `tgl_no_ijazah`, `tgl_no_skl`, `lama_belajar`, `nopeserta_un`, `no_skhu`, `pindahan_asal`, `pindahan_alasan`, `masuk_kelas`, `masuk_tgl`, `no_kks`, `no_pkh`, `no_kip`, `tgl_siswa`, `status_verifikasi`, `tgl_verif`, `kk`, `akta`, `ijazah`, `bukti`, `role`, `admin`) VALUES
	(1, 'Zonasi', '3', '3', '3', '3', '346346', 'Tiga empat Lima', 'agit', 'Perempuan', 'Jakarta', 'Bengkulu', '1995-06-01', 'Budha', 'indonesia', '1', '2', '0', '0', 'Tidak Semuanya', 'Indonesia, Jawa', 'musik', 'renang', 'IPNU', 'mancing', '1', '01', 'rt wali', 'melati', 'jalan-wali', '04', 'rw wali', 'srengat', 'desa wali', 'srengat', 'kec wali', 'Blitar', 'kab wali', 'Jawa Timur', 'Kepulauan Bangka Belitung', NULL, '1', 'Orang Tua', '081333561473', 'O', 'maag', '-', '150', '56', '1234234', 'ARIF RAHMAN HAKIM', 'ARIF RAHMAN HAKIM', 'hidup', '17-08-1945', 'Katolik', 'indonesia', 'SD/Sederajat', 'PNS Selain (Guru dan Dokter/Bidan/Perawat)', '500-1jt', 'ibu', NULL, 'hidup', 'blitar, 17 agustus', 'Hindu', 'indonesia', 'S3', 'Dokter/Bidan/Perawat', '>5jt', 'nama wali', NULL, 'blitar, 4 januari 2009', 'Islam', 'Indonesia', 'SMA/Sederajat', 'Pensiunan', '500-1jt', 'keluarga', '123124235', '12341241412', 'jalan matahari', '085812827796', 'SMP namek', '20-juli-2019 ', 'tgl no skl', '1', '123-345-2212', 'no skhu disini', 'SMP uruguay', 'kejauhan', 'X', '16-02-2023', 'nomor KKS', 'NOmor PKH', 'Nomor KIP', '2023-05-27 09:28:12', '2', '2023-06-12 16:04:44', 'C:/laragon/www/daful/file/uploads/Zonasi3/KK-Tiga-empat-Lima.png', 'AKTA-Tiga-empat-Lima.png', 'IJAZAH-Tiga-empat-Lima.png', 'BUKTI-Tiga-empat-Lima.png', 0, 0),
	(2, 'Zonasi', '1', 'Exercitationem quis ', '1', '1', 'Commodi consequuntur', 'Zonasi satu', 'Minim ad suscipit di', 'Perempuan', 'Non culpa labore qu', 'Sumatra Utara', 'Obcaecati ', 'Islam', 'Sunt Nam et irure mi', 'Laborum impedit ad ', 'Aute neque et perfer', 'Aut aperiam nobis no', 'Nulla velit vitae c', 'Yatim', 'Jawa', 'Dolore veniam molli', 'Do alias voluptatem', 'Laborum Voluptas co', 'Molestias omnis simi', NULL, 'Ad autem totam et do', '-', 'Delectus quis verit', '-', 'Veniam dolore autem', '-', 'Obcaecati voluptatem', '-', 'Eum recusandae Beat', '-', 'Nam velit necessita', '-', 'Jawa Barat', '-', NULL, 'Omnis enim ea est la', 'Kos', 'Voluptatibus t', 'O', 'Qui perspiciatis pr', 'Dolore enim sint dol', 'Ips', 'Tem', NULL, 'Aliquid iure ea id a', NULL, 'Culpa dignissimos mi', 'Distinctio Ut eos q', 'Islam', 'Veritatis earum dolo', 'D3', 'Nelayan', '1jt-2jt', 'Quis quis exercitati', NULL, 'Magnam aut deserunt ', 'Commodo aspernatur v', 'Kristen', 'Eiusmod inventore re', 'D1', 'PNS', '<500rb', '-', NULL, '-', '-', '-', '-', '-', '-', '-', 'Soluta aut qui', 'Ipsam ducimus ', 'Voluptate rem ', '-', 'Non libero quisquam ', 'Non aute officia mol', 'Dolor possimus faci', 'Delectus velit temp', 'Cum libero sit rerum', 'Ea id delectus qui', 'In velit dignissimos', 'Itaque amet ut opti', 'XII', 'Consequatur Officia', 'Nam aliquip assumend', 'Cumque laboriosam v', 'Elit mollit velit ', '2023-06-08 22:30:19', '1', NULL, '0', '0', '0', '0', 0, 0),
	(3, 'Zonasi', '2', '3', '2', '2', '346346', 'zonasi dua', 'zede', 'Laki-Laki', 'Jakarta', 'Daerah Khusus Ibukota Jakarta', '2023-06-12', 'Islam', 'Indonesia', '1', '2', '0', '0', 'Piatu', 'Indonesia', '-', '-', '-', '-', NULL, '1', '-', 'alumunium', '-', '2', '-', 'Sini', '-', 'situ', '-', 'Kab Blitar', '-', 'Jawa Timur', '-', NULL, '1', 'Orang Tua', '08123546789', 'O', 'maag', '-', '150', '56', NULL, 'dfhd', NULL, 'hidup', 'dsfhzdf', 'Islam', 'dfhzdf', 'S3', 'Tidak Bekerja', '<500rb', 'sedgsdg', NULL, 'hidup', 'tgjfgx', 'Islam', 'dfhdfsh', 'S2', 'Pensiunan', '<500rb', '-', NULL, '-', '-', '-', '-', '-', '-', '-', '457455474', '56785678', 'jalan jalan or', '-', 'SMP namek', '20-juli-2019 ', 'tgl no skl', '1', '123-345-2212', 'no skhu disini', '', '', 'X', '16-02-2023', '', '', '', '2023-06-08 22:30:19', '1', NULL, 'KK-zonasi-dua.jpeg', 'AKTA-zonasi-dua.png', 'IJAZAH-zonasi-dua.jpeg', 'BUKTI-zonasi-dua.jpg', 0, 0),
	(4, 'Afirmasi', '1', '23426786', '112345678', '112345678', '346346', 'Afirmasi Satu', 'Afisatu', 'Laki-Laki', 'Jakarta', 'Daerah Khusus Ibukota Jakarta', '2023-06-11', 'Kristen', 'Indonesia', '1', '2', '0', '0', 'Tidak Semuanya', 'Indonesia, Jawa', '-', '-', '-', '-', NULL, '01', '', 'Matahari', '', '08', '', 'Kepanjen Kidul', '', 'Kepanjen Kidul', '', 'Kota Blitar', '', 'Jawa Timur', '', NULL, '1', 'Orang Tua', '085123456789', 'B', 'maag', '-', '170', '50', NULL, 'Afirmasi ayah', NULL, 'masih hidup', 'Blitar, 17 Agustus 1945', 'Islam', 'Indonesia', 'S3', 'Pensiunan', '1jt-2jt', 'Afirmasi Ibu', NULL, 'hidup', 'blitar, 17 agustus 1928', 'Budha', 'Indonesia', 'SMA/Sederajat', 'Nelayan', '500-1jt', '', NULL, '', '', '', '', '', '', '', '08578964536', '089776544336', 'Jalan Matahari', '', 'SMP namek', '20-juli-2019 ', 'tgl no skl', '1', '123-345-2212', 'no skhu disini', '', '', 'X', '16-02-2023', '', '', '', '2023-06-09 06:16:58', '1', NULL, '0', '0', '0', '0', 0, 1),
	(5, 'Perpindahan tugas orang tua', '1', '1', '123', '123', '1234567890', 'Tejo Surabi', 'Tejo', 'Laki-Laki', 'Blitar', 'Jawa Timur', '2005-06-01', 'Islam', 'Indonesia', '5', '5', '0', '0', 'Tidak Semuanya', 'Indonesia, Inggris', 'musik', 'aerobik', 'PP', '-', NULL, '01', '', 'mawar', '', '07', '', 'kepanjen kidul', '', 'kepanjen kidul', '', 'Kota Blitar', '', 'Jawa Timur', 'Aceh', NULL, '10km', 'Orang Tua', '081234567890', 'AB', '', '', '170', '56', NULL, '', NULL, '', '', 'Islam', '', 'SD/Sederajat', 'Tidak Bekerja', '<500rb', '', NULL, '', '', 'Islam', '', 'SD/Sederajat', 'Tidak Bekerja', '<500rb', '', NULL, '', 'Islam', '', 'SD/Sederajat', 'Tidak Bekerja', '<500rb', '', '', '', '', '', '', '', '', '', '', '', '', '', 'X', '', '', '', '', '2023-06-09 08:59:47', '1', NULL, 'KK-Tejo-Surabi.png', 'AKTA-Tejo-Surabi.jpg', 'IJAZAH-Tejo-Surabi.png', 'BUKTI-Tejo-Surabi.png', 0, 1);
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;

-- Dumping structure for table daful.tbl_agama
CREATE TABLE IF NOT EXISTS `tbl_agama` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table daful.tbl_agama: ~6 rows (approximately)
/*!40000 ALTER TABLE `tbl_agama` DISABLE KEYS */;
INSERT IGNORE INTO `tbl_agama` (`id`, `nama`) VALUES
	(1, 'Islam'),
	(2, 'Kristen'),
	(3, 'Katolik'),
	(4, 'Hindu'),
	(5, 'Budha'),
	(6, 'Konghucu');
/*!40000 ALTER TABLE `tbl_agama` ENABLE KEYS */;

-- Dumping structure for table daful.tbl_info
CREATE TABLE IF NOT EXISTS `tbl_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` mediumtext COLLATE utf8_bin,
  `ket` mediumtext COLLATE utf8_bin,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table daful.tbl_info: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbl_info` DISABLE KEYS */;
INSERT IGNORE INTO `tbl_info` (`id`, `nama`, `ket`) VALUES
	(1, '1. Masuk dan lengkapi data', 'Login aplikasi pertama kali dengan menggunakan informasi jalur masuk dan nomor urut. Setelah mengisi data diri siswa secara otomatis Login kedua dan seterusnya menggunakan informasi <b>Jalur Masuk dan NISN!</b>, Isi data dengan benar,dan upload berkas : abcdef'),
	(2, '2. Cetak Bukti Daftar Ulang', 'Cetak bukti daftar ulang'),
	(3, '3. Datang ke SMA Negeri 1 Srengat', 'Datang Ke SMAN 1 Srengat Dengan membawa berkas abcdef, <br>dimasukkan ke dalam map : <br>a. <strong>warna merah</strong> untuk jalur xxxx; <br>b. <strong>warna kuning</strong> utk jalur xxx; <br>c. …  pada tanggal xxxxx pukul 4:20 WIB');
/*!40000 ALTER TABLE `tbl_info` ENABLE KEYS */;

-- Dumping structure for table daful.tbl_jalur
CREATE TABLE IF NOT EXISTS `tbl_jalur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table daful.tbl_jalur: ~5 rows (approximately)
/*!40000 ALTER TABLE `tbl_jalur` DISABLE KEYS */;
INSERT IGNORE INTO `tbl_jalur` (`id`, `nama`) VALUES
	(1, 'Afirmasi'),
	(2, 'Perpindahan tugas orang tua'),
	(3, 'Prestasi Hasil Lomba'),
	(4, 'Prestasi Nilai Akademik'),
	(5, 'Zonasi');
/*!40000 ALTER TABLE `tbl_jalur` ENABLE KEYS */;

-- Dumping structure for table daful.tbl_pdd
CREATE TABLE IF NOT EXISTS `tbl_pdd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table daful.tbl_pdd: ~10 rows (approximately)
/*!40000 ALTER TABLE `tbl_pdd` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `tbl_pdd` ENABLE KEYS */;

-- Dumping structure for table daful.tbl_pekerjaan
CREATE TABLE IF NOT EXISTS `tbl_pekerjaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table daful.tbl_pekerjaan: ~18 rows (approximately)
/*!40000 ALTER TABLE `tbl_pekerjaan` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `tbl_pekerjaan` ENABLE KEYS */;

-- Dumping structure for table daful.tbl_penghasilan
CREATE TABLE IF NOT EXISTS `tbl_penghasilan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table daful.tbl_penghasilan: ~6 rows (approximately)
/*!40000 ALTER TABLE `tbl_penghasilan` DISABLE KEYS */;
INSERT IGNORE INTO `tbl_penghasilan` (`id`, `nama`) VALUES
	(1, '<500rb'),
	(2, '500-1jt'),
	(3, '1jt-2jt'),
	(4, '2jt-3jt'),
	(5, '3jt-5t'),
	(6, '>5jt');
/*!40000 ALTER TABLE `tbl_penghasilan` ENABLE KEYS */;

-- Dumping structure for table daful.tbl_pengumuman
CREATE TABLE IF NOT EXISTS `tbl_pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ket` mediumtext COLLATE utf8_bin,
  `tgl` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table daful.tbl_pengumuman: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbl_pengumuman` DISABLE KEYS */;
INSERT IGNORE INTO `tbl_pengumuman` (`id`, `ket`, `tgl`) VALUES
	(1, 'PENGUMUMAN<br>Harap mengisi data dengan teliti!', '2021-04-14 00:00:00');
/*!40000 ALTER TABLE `tbl_pengumuman` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
