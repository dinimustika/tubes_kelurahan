-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 01:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_mbsd`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `alert` (IN `user` INT)  NO SQL
BEGIN
SELECT tbl.stat, tbl.created_at FROM (SELECT COUNT(nama_pemohon) as stat, created_at FROM urus_ktp WHERE id_status=2 AND id_user=user UNION ALL SELECT COUNT(nama_anak) as stat, created_at FROM urus_akta WHERE id_status=2 AND id_user=user UNION ALL SELECT COUNT(nama_suami) as stat, created_at FROM urus_cerai WHERE id_status=2 AND id_user=user UNION ALL SELECT COUNT(nama_lengkap) as stat, created_at FROM urus_penghasilan WHERE id_status=2 AND id_user=user UNION ALL SELECT COUNT(nama_almarhum) as stat, created_at FROM urus_kematian WHERE id_status=2 AND id_user=user)tbl WHERE tbl.stat =1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `alert_surat` (IN `user` INT)  NO SQL
BEGIN
SELECT tbl.stat FROM (SELECT COUNT(nama_pemohon) as stat, created_at FROM urus_ktp WHERE id_status=1 AND id_user=user UNION ALL SELECT COUNT(nama_anak) as stat, created_at FROM urus_akta WHERE id_status=1 AND id_user=user UNION ALL SELECT COUNT(nama_suami) as stat, created_at FROM urus_cerai WHERE id_status=1 AND id_user=user UNION ALL SELECT COUNT(nama_lengkap) as stat, created_at FROM urus_penghasilan WHERE id_status=1 AND id_user=user UNION ALL SELECT COUNT(nama_almarhum) as stat, created_at FROM urus_kematian WHERE id_status=1 AND id_user=user)tbl WHERE tbl.stat =1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `belum_selese` ()  NO SQL
BEGIN
SELECT SUM(tbl.stat) as on_going FROM (SELECT COUNT(id_status) as stat from urus_akta WHERE id_status=1 UNION ALL SELECT COUNT(id_status) as stat from urus_ktp WHERE id_status=1 UNION ALL SELECT COUNT(id_status) as stat from urus_penghasilan WHERE id_status=1 UNION ALL SELECT COUNT(id_status) as stat from urus_kematian WHERE id_status=1 UNION ALL SELECT COUNT(id_status) as stat from urus_cerai WHERE id_status=1 UNION ALL SELECT COUNT(id_status) as stat from urus_simb WHERE id_status=1 UNION ALL SELECT COUNT(id_status) as stat from urus_siup WHERE id_status=1)tbl;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `coba` (IN `user_id` INT)  NO SQL
BEGIN
SELECT SUM(tbl.stat)AS total FROM (SELECT COUNT(user_id) as stat, created_at FROM urus_ktp WHERE id_status=2 OR id_status=1 AND id_user=user_id UNION ALL SELECT COUNT(user_id) as stat, created_at FROM urus_akta WHERE id_status=2 OR id_status=1 AND id_user=user_id UNION ALL SELECT COUNT(user_id) as stat, created_at FROM urus_penghasilan WHERE id_status=2 OR id_status=1 AND id_user=user_id UNION ALL SELECT COUNT(user_id) as stat, created_at FROM urus_kematian WHERE id_status=2 OR id_status=1 AND id_user=user_id UNION ALL SELECT COUNT(user_id) as stat, created_at FROM urus_cerai WHERE id_status=2 OR id_status=1 AND id_user=user_id)tbl ORDER BY user_id DESC LIMIT 5;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `jumlah` (IN `user` INT)  NO SQL
BEGIN
SELECT SUM(meow.stats) as total FROM(SELECT COUNT(nama_pemohon) as stats, created_at FROM urus_ktp WHERE id_status=2 AND id_user=user UNION ALL SELECT COUNT(nama_anak) as stats, created_at FROM urus_akta WHERE id_status=2 AND id_user=user UNION ALL SELECT COUNT(nama_suami) as stats, created_at FROM urus_cerai WHERE id_status=2 AND id_user=user UNION ALL SELECT COUNT(nama_lengkap) as stats, created_at FROM urus_penghasilan WHERE id_status=2 AND id_user=user UNION ALL SELECT COUNT(nama_almarhum) as stats, created_at FROM urus_kematian WHERE id_status=2 AND id_user=user)meow WHERE meow.stats=1;
SELECT SUM(tbl.stat) as total2 FROM(SELECT COUNT(nama_pemohon) as stat, created_at FROM urus_ktp WHERE id_status=1 AND id_user=user UNION ALL SELECT COUNT(nama_anak) as stat, created_at FROM urus_akta WHERE id_status=1 AND id_user=user UNION ALL SELECT COUNT(nama_suami) as stat, created_at FROM urus_cerai WHERE id_status=1 AND id_user=user UNION ALL SELECT COUNT(nama_lengkap) as stat, created_at FROM urus_penghasilan WHERE id_status=1 AND id_user=user UNION ALL SELECT COUNT(nama_almarhum) as stat, created_at FROM urus_kematian WHERE id_status=1 AND id_user=user)tbl WHERE tbl.stat=1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `udah_selesai` ()  NO SQL
BEGIN
SELECT SUM(tbl.stat) AS Finish_Task FROM (SELECT COUNT(id_status) as stat from urus_akta WHERE id_status=2 UNION ALL SELECT COUNT(id_status) as stat from urus_ktp WHERE id_status=2 UNION ALL SELECT COUNT(id_status) as stat from urus_penghasilan WHERE id_status=2 UNION ALL SELECT COUNT(id_status) as stat from urus_kematian WHERE id_status=2 UNION ALL SELECT COUNT(id_status) as stat from urus_cerai WHERE id_status=2 UNION ALL SELECT COUNT(id_status) as stat from urus_simb WHERE id_status=2 UNION ALL SELECT COUNT(id_status) as stat from urus_siup WHERE id_status=2)tbl;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `harga_imb` (`luas` INT) RETURNS FLOAT NO SQL
BEGIN
DECLARE harga float;
 set harga=luas*22000;
 RETURN harga;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `harga_siup` (`modal` FLOAT) RETURNS TEXT CHARSET utf8mb4 NO SQL
BEGIN
DECLARE jenis text;
 IF(modal<50000000 OR modal>500000000) THEN SET jenis = "SIUP MIKRO";
 ELSEIF(modal<500000000 OR modal>10000000000) THEN SET jenis = "SIUP MENENGAH";
 ELSEIF(modal>10000000000)THEN SET jenis= "SIUP BESAR";
 ELSE SET jenis="Tidak terdefinisi";
 END IF;
 RETURN jenis;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'pegawai', 'pegawai kelurahan'),
(2, 'warga', 'warga di suatu kelurahan');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'dinimustika12@gmail.com', 1, '2021-06-06 22:07:18', 1),
(2, '::1', 'dinimustika12@gmail.com', 1, '2021-06-06 22:38:09', 1),
(3, '::1', 'nopal@gmail.com', 2, '2021-06-06 23:00:34', 1),
(4, '::1', 'dinimustika12@gmail.com', 1, '2021-06-06 23:12:17', 1),
(5, '::1', 'nopal@gmail.com', 2, '2021-06-06 23:14:05', 1),
(6, '::1', 'dinimustika12@gmail.com', 1, '2021-06-07 00:20:16', 1),
(7, '::1', 'adella@gmail.com', 3, '2021-06-07 00:23:42', 1),
(8, '::1', 'dinimustika12@gmail.com', 1, '2021-06-07 00:29:41', 1),
(9, '::1', 'adella@gmail.com', 3, '2021-06-07 00:57:46', 1),
(10, '::1', 'dinimustika12@gmail.com', 1, '2021-06-07 02:24:39', 1),
(11, '::1', 'dinimustika12@gmail.com', 1, '2021-06-07 09:27:17', 1),
(12, '::1', 'nopal@gmail.com', 2, '2021-06-07 09:41:02', 1),
(13, '::1', 'adella@gmail.com', 3, '2021-06-07 09:49:31', 1),
(14, '::1', 'dinimustika12@gmail.com', 1, '2021-06-07 09:52:29', 1),
(15, '::1', 'adella@gmail.com', 3, '2021-06-07 10:08:03', 1),
(16, '::1', 'dinimustika12@gmail.com', 1, '2021-06-07 11:01:23', 1),
(17, '::1', 'dinimustika12@gmail.com', 1, '2021-06-07 19:42:01', 1),
(18, '::1', 'adella@gmail.com', 3, '2021-06-07 22:41:52', 1),
(19, '::1', 'dinimustika12@gmail.com', 1, '2021-06-07 23:02:44', 1),
(20, '::1', 'dinimustika12@gmail.com', 1, '2021-06-08 07:11:35', 1),
(21, '::1', 'adella@gmail.com', 3, '2021-06-08 07:21:06', 1),
(22, '::1', 'dinimustika12@gmail.com', 1, '2021-06-08 07:26:39', 1),
(23, '::1', 'dinimustika12@gmail.com', 1, '2021-06-09 08:00:14', 1),
(24, '::1', 'dinimustika12@gmail.com', 1, '2021-06-09 23:48:00', 1),
(25, '::1', 'nopal@gmail.com', 2, '2021-06-10 00:26:34', 1),
(26, '::1', 'dinimustika12@gmail.com', 1, '2021-06-13 21:19:17', 1),
(27, '::1', 'dinimustika12@gmail.com', 1, '2021-06-14 06:39:01', 1),
(28, '::1', 'dinimustika12@gmail.com', 1, '2021-06-14 09:04:11', 1),
(29, '::1', 'dinimustika12@gmail.com', 1, '2021-06-15 09:36:44', 1),
(30, '::1', 'dinimustika12@gmail.com', 1, '2021-06-19 04:14:29', 1),
(31, '::1', 'nopal@gmail.com', 2, '2021-06-19 06:13:12', 1),
(32, '::1', 'dinimustika12@gmail.com', 1, '2021-06-19 07:14:37', 1),
(33, '::1', 'adella@gmail.com', 3, '2021-06-19 08:11:08', 1),
(34, '::1', 'dinimustika12@gmail.com', 1, '2021-06-19 08:37:03', 1),
(35, '::1', 'dinimustika12@gmail.com', 1, '2021-06-19 09:22:45', 1),
(36, '::1', 'dinimustika12@gmail.com', 1, '2021-06-19 10:15:04', 1),
(37, '::1', 'dinimustika12@gmail.com', 1, '2021-06-19 22:14:49', 1),
(38, '::1', 'dinimustika12@gmail.com', 1, '2021-06-20 21:16:57', 1),
(39, '::1', 'dinimustika12@gmail.com', 1, '2021-06-21 02:50:16', 1),
(40, '::1', 'adella@gmail.com', 3, '2021-06-21 04:47:41', 1),
(41, '::1', 'dinimustika12@gmail.com', 1, '2021-06-21 11:20:03', 1),
(42, '::1', 'dinimustika12@gmail.com', 1, '2021-06-21 21:04:32', 1),
(43, '::1', 'dinimustika12@gmail.com', 1, '2021-06-21 23:56:35', 1),
(44, '::1', 'adella@gmail.com', 3, '2021-06-22 00:01:30', 1),
(45, '::1', 'dinimustika12@gmail.com', 1, '2021-06-22 04:07:12', 1),
(46, '::1', 'adella@gmail.com', 3, '2021-06-22 04:52:42', 1),
(47, '::1', 'dinimustika12@gmail.com', 1, '2021-06-22 06:43:02', 1),
(48, '::1', 'dinimustika12@gmail.com', 1, '2021-06-22 10:30:48', 1),
(49, '::1', 'adella@gmail.com', 3, '2021-06-22 11:00:20', 1),
(50, '::1', 'Naufal@gmail.com', 4, '2021-06-23 01:24:49', 1),
(51, '::1', 'dinimustika12@gmail.com', 1, '2021-06-23 01:24:54', 1),
(52, '::1', 'dinimustika12@gmail.com', 1, '2021-06-23 01:33:25', 1),
(53, '::1', 'Fahri@gmail.com', 5, '2021-06-23 01:33:28', 1),
(54, '::1', 'Fahri@gmail.com', 5, '2021-06-23 01:48:46', 1),
(55, '::1', 'Fahri@gmail.com', 5, '2021-06-23 01:58:52', 1),
(56, '::1', 'Fahri@gmail.com', 5, '2021-06-23 05:49:28', 1),
(57, '::1', 'dinimustika12@gmail.com', 1, '2021-06-23 05:55:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-all-letter-profile', 'manage user request and profile also letter'),
(2, 'manage-profile', 'manage their own profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_berita` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `berita` text NOT NULL,
  `tgl_terbit` datetime NOT NULL DEFAULT current_timestamp(),
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_user`, `id_berita`, `title`, `berita`, `tgl_terbit`, `gambar`) VALUES
(1, 4, 'Upacara 17 Agustus', 'Upacara Kemerdekaan akan di laksanakan secara daring untuk anak sekolah, silahkan hubungi sekolah masing-masing.', '2021-06-23 13:54:34', '2_3.jpg');

--
-- Triggers `berita`
--
DELIMITER $$
CREATE TRIGGER `afterInsertBerita` AFTER INSERT ON `berita` FOR EACH ROW INSERT INTO log_berita (id_user, id_berita, created_at)VALUES(id_user, id_berita, NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `afterUpdate` AFTER UPDATE ON `berita` FOR EACH ROW INSERT INTO log_berita(id_user, id_berita, updated_at)
VALUES(OLD.id_user, old.id_berita, NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `afterdelete` AFTER DELETE ON `berita` FOR EACH ROW INSERT INTO log_berita VALUES(old.id_user, old.id_berita, '', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_event` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tgl_event` date NOT NULL,
  `tgl_terbit` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_user`, `id_event`, `isi`, `tgl_event`, `tgl_terbit`) VALUES
(1, 1, 'JalanJalan ke KL', '2021-06-21', '2021-06-21 15:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `log_berita`
--

CREATE TABLE `log_berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_berita`
--

INSERT INTO `log_berita` (`id_berita`, `id_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
(0, 0, '2021-06-23 13:54:34', '0000-00-00 00:00:00', '2021-06-23 06:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `log_surat`
--

CREATE TABLE `log_surat` (
  `id_surat` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_permohonan` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_surat`
--

INSERT INTO `log_surat` (`id_surat`, `id_user`, `id_permohonan`, `id_status`, `updated_at`, `created_at`) VALUES
(1, 5, 3, 2, '2021-06-23 06:38:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1623034673, 1);

-- --------------------------------------------------------

--
-- Table structure for table `perizinan`
--

CREATE TABLE `perizinan` (
  `id_perizinan` int(11) NOT NULL,
  `nama_perizinan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perizinan`
--

INSERT INTO `perizinan` (`id_perizinan`, `nama_perizinan`) VALUES
(1, 'Surat Izin Mendirikan Bangunan'),
(2, 'Surat Izin Usaha');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
(1, 'Sedang di proses'),
(2, 'Selesai'),
(3, 'Di tolak');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `nama_surat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `nama_surat`) VALUES
(1, 'KTP'),
(2, 'Akta'),
(3, 'Penghasilan'),
(4, 'Keterangan Kematian'),
(5, 'Surat Pengantar Cerai');

-- --------------------------------------------------------

--
-- Table structure for table `urus_akta`
--

CREATE TABLE `urus_akta` (
  `id_permohonan` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `nama_ayah` text NOT NULL,
  `nama_ibu` text NOT NULL,
  `nama_anak` text NOT NULL,
  `nik_ayah` int(11) DEFAULT NULL,
  `nik_ibu` int(11) DEFAULT NULL,
  `agama_ibu` enum('Islam','Kristen Protestan','Kristen Katolik','Hindu','Budha','Lainnya') NOT NULL,
  `agama_ayah` enum('Islam','Kristen Protestan','Kristen Katolik','Hindu','Budha','Lainnya') NOT NULL,
  `gmbr_ayah` varchar(100) NOT NULL,
  `gmbr_ibu` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `dokumen` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `urus_akta`
--
DELIMITER $$
CREATE TRIGGER `afterInsertAkta` AFTER INSERT ON `urus_akta` FOR EACH ROW INSERT INTO `log_surat`(`id_surat`, `id_user`, `id_permohonan`, `id_status`, `created_at`) VALUES (id_surat, id_user, id_permohonan, id_status, NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `afterUpdateAkta` AFTER UPDATE ON `urus_akta` FOR EACH ROW INSERT INTO `log_surat`(`id_surat`, `id_user`,`id_permohonan`, `id_status`, `updated_at`) VALUES (old.id_surat, old.id_user, old.id_permohonan, new.id_status, NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `urus_cerai`
--

CREATE TABLE `urus_cerai` (
  `id_permohonan` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `nama_suami` text NOT NULL,
  `alamat` text NOT NULL,
  `file_buku_suami` varchar(200) NOT NULL,
  `nama_istri` text NOT NULL,
  `nik_suami` int(11) NOT NULL,
  `nik_istri` int(11) NOT NULL,
  `file_buku_istri` varchar(200) NOT NULL,
  `file_kk` varchar(200) NOT NULL,
  `file_kk_suami` varchar(200) NOT NULL,
  `filek_kk_istri` varchar(200) NOT NULL,
  `dokumen` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `urus_cerai`
--
DELIMITER $$
CREATE TRIGGER `afterUpdateCerai` AFTER UPDATE ON `urus_cerai` FOR EACH ROW INSERT INTO `log_surat`(`id_surat`, `id_user`, `id_permohonan`, `id_status`, `updated_at`) VALUES (old.id_surat, old.id_user,old.id_permohonan, new.id_status, NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `urus_kematian`
--

CREATE TABLE `urus_kematian` (
  `id_permohonan` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `nama_pelapor` text NOT NULL,
  `alamat` text NOT NULL,
  `file_ktp_pelapor` varchar(200) NOT NULL,
  `nama_almarhum` text NOT NULL,
  `nik_almarhum` int(11) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `file_ktp_almarhum` varchar(200) NOT NULL,
  `status_kawin` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` enum('Islam','Kristen Katolik','Kristen Protestan','Budha','Hindu','Lainnya') NOT NULL,
  `surat_rs` varchar(250) NOT NULL,
  `nama_saksi` text NOT NULL,
  `file_ktp_saksi` varchar(200) NOT NULL,
  `file_kk_almarhum` varchar(250) NOT NULL,
  `nik_pelapor` int(11) NOT NULL,
  `dokumen` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `urus_kematian`
--
DELIMITER $$
CREATE TRIGGER `afterUpdateKematian` AFTER UPDATE ON `urus_kematian` FOR EACH ROW INSERT INTO `log_surat`(`id_surat`, `id_user`, `id_permohonan`, `id_status`, `updated_at`) VALUES (old.id_surat, old.id_user, old.id_permohonan, new.id_status, NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `urus_kk`
--

CREATE TABLE `urus_kk` (
  `id_permohonan` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `nama_pemohon` text NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `status_kawin` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` enum('Islam','Kristen Katolik','Kristen Protestan','Budha','Hindu','Lainnya') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` text NOT NULL,
  `file_kk` varchar(250) NOT NULL,
  `nik` int(11) NOT NULL,
  `dokumen` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `urus_ktp`
--

CREATE TABLE `urus_ktp` (
  `id_permohonan` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_surat` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `nama_pemohon` text NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `status_kawin` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` enum('Islam','Kristen Katolik','Kristen Protestan','Budha','Hindu','Lainnya') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` text NOT NULL,
  `file_kk` varchar(250) NOT NULL,
  `nik` int(11) NOT NULL,
  `dokumen` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ;

--
-- Dumping data for table `urus_ktp`
--

INSERT INTO `urus_ktp` (`id_permohonan`, `id_user`, `id_surat`, `id_status`, `nama_pemohon`, `alamat`, `pekerjaan`, `status_kawin`, `jenis_kelamin`, `agama`, `tgl_lahir`, `tempat_lahir`, `file_kk`, `nik`, `dokumen`, `created_at`) VALUES
(1, 3, 1, 1, 'Adella', 'Jl. Jalan', 'Mahasiswa', 'Belum Kawin', 'P', 'Islam', '2000-12-12', 'Sibolga', 'ar.jpg', 2147483647, '', '2021-06-22 16:01:37'),
(3, 5, 1, 2, 'Fahri', 'Jl. Jalan', 'Mahasiswa', 'Belum Kawin', 'L', 'Islam', '2000-06-29', 'Padang Sidempuan', '2019_04_28 08_36 Office Lens_2.jpg', 1908392018, 'QuizLabMSBD.docx', '2021-06-23 06:38:54');

--
-- Triggers `urus_ktp`
--
DELIMITER $$
CREATE TRIGGER `afterUpdateKtp` AFTER UPDATE ON `urus_ktp` FOR EACH ROW INSERT INTO `log_surat`(`id_surat`, `id_user`, `id_permohonan`, `id_status`, `updated_at`) VALUES (old.id_surat, old.id_user, old.id_permohonan, new.id_status, NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `urus_penghasilan`
--

CREATE TABLE `urus_penghasilan` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_permohonan` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `kewarganegaraan` text NOT NULL,
  `agama` enum('Islam','Kristen Katolik','Kristen Protestan','Hindu','Budha','Kepercayaan') NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `pekerjaan` text NOT NULL,
  `penghasilan` int(11) NOT NULL,
  `status_kawin` text NOT NULL,
  `file_ktp` varchar(250) NOT NULL,
  `notes` text NOT NULL,
  `dokumen` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `urus_penghasilan`
--
DELIMITER $$
CREATE TRIGGER `afterUpdatePenghasilan` AFTER UPDATE ON `urus_penghasilan` FOR EACH ROW INSERT INTO `log_surat`(`id_surat`, `id_user`, `id_permohonan`, `id_status`, `updated_at`) VALUES (old.id_surat, old.id_user, old.id_permohonan, new.id_status, NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `urus_simb`
--

CREATE TABLE `urus_simb` (
  `id_permohonan` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_perizinan` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `nama_pemilik` text NOT NULL,
  `status_tanah` text NOT NULL,
  `file_ktp` text NOT NULL,
  `file_npwp` text DEFAULT NULL,
  `file_sppt` text DEFAULT NULL,
  `nik` varchar(12) NOT NULL,
  `luas_bangunan` varchar(100) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `biaya` text NOT NULL,
  `dokumen` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urus_simb`
--

INSERT INTO `urus_simb` (`id_permohonan`, `id_user`, `id_perizinan`, `id_status`, `nama_pemilik`, `status_tanah`, `file_ktp`, `file_npwp`, `file_sppt`, `nik`, `luas_bangunan`, `alamat`, `biaya`, `dokumen`, `created_at`) VALUES
(1, 3, 1, 2, 'Dini', 'Milik Pribadi', '2_15.jpg', '2_15.jpg', '2_15.jpg', '19203482018', '2', 'Jl. Pendidikan empl. Kuala Namu', '[{\"harga_imb\":\"44000\"}]', 'List pertanyaan.docx', '0000-00-00 00:00:00'),
(2, 5, 1, 2, 'Fahri Adrian', 'Milik Pribadi', '2019_04_28 08_29 Office Lens.jpg', '2019_07_12 10_11 AM Office Lens.jpg', '2019_07_13 9_48 AM Office Lens.jpg', '1901293901', '30', 'Jl. Pendidikan', '[{\"harga_imb\":\"660000\"}]', '191402074_DiniMustika.docx', '2021-06-23 07:02:42'),
(3, 5, 1, 2, 'Fachri Adrian', 'Milik Pribadi', 'ktp_contoh.jpg', 'npwp_contoh.jpg', 'sppt_contoh.jpg', '19203482018', '12', 'Jl. Pendidikan', '[{\"harga_imb\":\"264000\"}]', 'kasus uu ite.docx', '2021-06-23 10:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `urus_siup`
--

CREATE TABLE `urus_siup` (
  `id_permohonan` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_perizinan` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `nama_pemilik` text NOT NULL,
  `file_ktp` text NOT NULL,
  `nik` varchar(12) NOT NULL,
  `tmpt_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `besar_modal` float NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_siup` text NOT NULL,
  `jenis_usaha` text NOT NULL,
  `dokumen` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urus_siup`
--

INSERT INTO `urus_siup` (`id_permohonan`, `id_user`, `id_perizinan`, `id_status`, `nama_pemilik`, `file_ktp`, `nik`, `tmpt_lahir`, `tgl_lahir`, `besar_modal`, `alamat`, `jenis_siup`, `jenis_usaha`, `dokumen`, `created_at`) VALUES
(1, 3, 2, 2, 'Dini', '2_17.jpg', '1203902830', 'P. siantar', '2001-03-18', 12090000, 'Jl. Pendidikan ', '[{\"harga_siup\":\"SIUP MIKRO\"}]', 'Salon', '394353907-SB-Big-Book-Matematika-SMA-Ke-Tim-BBM.pd', '2021-06-22 08:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dinimustika12@gmail.com', 'dinimust', '$2y$10$E0GEre3RO9JwHY1JxaWJ..hL.1bIs46vBJRsdrhe3gZMEQgCUbd/i', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-06 22:07:11', '2021-06-06 22:07:11', NULL),
(2, 'nopal@gmail.com', 'nopalzuhdi', '$2y$10$HB4tXBEtJvQmvZd16hLtquUWBMdmb4ipoif4pwlI.uyICrrTFuyBq', NULL, NULL, NULL, '', NULL, NULL, 1, 0, '2021-06-06 22:58:47', '2021-06-06 22:58:47', NULL),
(3, 'adella@gmail.com', 'adella3', '$2y$10$1mCKxcfzP/nfJijfnAdG.u7jOk4QgLchWh7ZxzMCpyEVnqcJJsXmy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-07 00:23:36', '2021-06-07 00:23:36', NULL),
(4, 'Naufal@gmail.com', 'naufalbgnda', '$2y$10$F9G2O9wad3w3lLWiSjE7mezRnZwce3xk358Rh8l7ACSUYl5sDlp9.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-23 01:24:23', '2021-06-23 01:24:23', NULL),
(5, 'Fahri@gmail.com', 'fahriii', '$2y$10$SfgyQHF94jwZdkVcLR3m5OLxTTz9RR0zO2jG2V10AhSdCQdjVHYdG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-06-23 01:31:42', '2021-06-23 01:31:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `log_berita`
--
ALTER TABLE `log_berita`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `log_surat`
--
ALTER TABLE `log_surat`
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_permohonan` (`id_permohonan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perizinan`
--
ALTER TABLE `perizinan`
  ADD PRIMARY KEY (`id_perizinan`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `urus_akta`
--
ALTER TABLE `urus_akta`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indexes for table `urus_cerai`
--
ALTER TABLE `urus_cerai`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `urus_kematian`
--
ALTER TABLE `urus_kematian`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD UNIQUE KEY `nik` (`nik_pelapor`),
  ADD UNIQUE KEY `nik_almarhum` (`nik_almarhum`),
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `urus_kk`
--
ALTER TABLE `urus_kk`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `urus_ktp`
--
ALTER TABLE `urus_ktp`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `id_surat` (`id_surat`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `urus_penghasilan`
--
ALTER TABLE `urus_penghasilan`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD UNIQUE KEY `NIK` (`NIK`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indexes for table `urus_simb`
--
ALTER TABLE `urus_simb`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_surat` (`id_perizinan`);

--
-- Indexes for table `urus_siup`
--
ALTER TABLE `urus_siup`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_surat` (`id_perizinan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perizinan`
--
ALTER TABLE `perizinan`
  MODIFY `id_perizinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `urus_akta`
--
ALTER TABLE `urus_akta`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urus_cerai`
--
ALTER TABLE `urus_cerai`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urus_kematian`
--
ALTER TABLE `urus_kematian`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `urus_kk`
--
ALTER TABLE `urus_kk`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urus_ktp`
--
ALTER TABLE `urus_ktp`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urus_penghasilan`
--
ALTER TABLE `urus_penghasilan`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `urus_simb`
--
ALTER TABLE `urus_simb`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `urus_siup`
--
ALTER TABLE `urus_siup`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `log_surat`
--
ALTER TABLE `log_surat`
  ADD CONSTRAINT `log_surat_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `log_surat_ibfk_2` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id_surat`),
  ADD CONSTRAINT `log_surat_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `urus_akta`
--
ALTER TABLE `urus_akta`
  ADD CONSTRAINT `urus_akta_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `urus_akta_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `urus_akta_ibfk_3` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id_surat`);

--
-- Constraints for table `urus_cerai`
--
ALTER TABLE `urus_cerai`
  ADD CONSTRAINT `urus_cerai_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `urus_cerai_ibfk_2` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id_surat`),
  ADD CONSTRAINT `urus_cerai_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `urus_kematian`
--
ALTER TABLE `urus_kematian`
  ADD CONSTRAINT `urus_kematian_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `urus_kematian_ibfk_2` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id_surat`),
  ADD CONSTRAINT `urus_kematian_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `urus_kk`
--
ALTER TABLE `urus_kk`
  ADD CONSTRAINT `urus_kk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `urus_ktp`
--
ALTER TABLE `urus_ktp`
  ADD CONSTRAINT `urus_ktp_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `urus_ktp_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `urus_ktp_ibfk_3` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id_surat`);

--
-- Constraints for table `urus_penghasilan`
--
ALTER TABLE `urus_penghasilan`
  ADD CONSTRAINT `urus_penghasilan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `urus_penghasilan_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `urus_penghasilan_ibfk_3` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id_surat`);

--
-- Constraints for table `urus_simb`
--
ALTER TABLE `urus_simb`
  ADD CONSTRAINT `urus_simb_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `urus_simb_ibfk_2` FOREIGN KEY (`id_perizinan`) REFERENCES `perizinan` (`id_perizinan`),
  ADD CONSTRAINT `urus_simb_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);

--
-- Constraints for table `urus_siup`
--
ALTER TABLE `urus_siup`
  ADD CONSTRAINT `urus_siup_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `urus_siup_ibfk_2` FOREIGN KEY (`id_perizinan`) REFERENCES `perizinan` (`id_perizinan`),
  ADD CONSTRAINT `urus_siup_ibfk_3` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
