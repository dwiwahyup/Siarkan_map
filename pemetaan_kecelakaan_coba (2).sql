-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2023 pada 22.41
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemetaan_kecelakaan_coba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arus_lantas`
--

CREATE TABLE `arus_lantas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(70) NOT NULL,
  `nama_jalan` varchar(255) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `arah_1` varchar(255) NOT NULL,
  `arah_2` varchar(255) NOT NULL,
  `total_arah_1` varchar(255) NOT NULL,
  `total_arah_2` varchar(255) NOT NULL,
  `total_2_arah` varchar(255) NOT NULL,
  `jalans_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `arus_lantas`
--

INSERT INTO `arus_lantas` (`id`, `slug`, `nama_jalan`, `jam_mulai`, `jam_selesai`, `arah_1`, `arah_2`, `total_arah_1`, `total_arah_2`, `total_2_arah`, `jalans_id`, `created_at`, `updated_at`) VALUES
(1, 'jalan-panglima-sudirman-2', 'Jalan Panglima Sudirman', '02:12:00', '02:13:00', 'Timut - Barat', 'Timut - Barat', '22', '22', '22', 2, '2023-06-14 10:10:42', '2023-06-14 10:10:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jalans`
--

CREATE TABLE `jalans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(70) NOT NULL,
  `nama_jalan` varchar(255) NOT NULL,
  `status_jalan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jalans`
--

INSERT INTO `jalans` (`id`, `slug`, `nama_jalan`, `status_jalan`, `created_at`, `updated_at`) VALUES
(1, 'tuban-bancar', 'Tuban - Bancar', 'Luar Kota', '2023-06-20 01:55:13', '2023-06-20 01:55:13'),
(2, 'tuban-widang', 'Tuban - Widang', 'Luar Kota', '2023-06-20 01:55:19', '2023-06-20 01:55:19'),
(3, 'tuban-palang', 'Tuban - Palang', 'Luar Kota', '2023-06-20 01:55:27', '2023-06-20 01:55:27'),
(4, 'pahlawan', 'Pahlawan', 'Luar Kota', '2023-06-20 01:55:34', '2023-06-20 01:55:34'),
(5, 'hos-cokroaminoto', 'Hos Cokroaminoto', 'Luar Kota', '2023-06-20 01:55:40', '2023-06-20 01:55:40'),
(6, 'manunggal', 'Manunggal', 'Luar Kota', '2023-06-20 01:55:48', '2023-06-20 01:55:48'),
(7, 'panglima-sudirman', 'Panglima Sudirman', 'Dalam Kota', '2023-06-20 01:56:05', '2023-06-20 01:56:05'),
(8, 'dr-wahidin-sudirohusodo', 'Dr. Wahidin Sudirohusodo', 'Dalam Kota', '2023-06-20 01:56:12', '2023-06-20 01:56:12'),
(9, 'gajah-mada', 'Gajah Mada', 'Dalam Kota', '2023-06-20 01:56:21', '2023-06-20 01:56:21'),
(10, 'teuku-umar', 'Teuku Umar', 'Dalam Kota', '2023-06-20 01:56:27', '2023-06-20 01:56:27'),
(11, 'r-e-martadinata', 'R.E. Martadinata', 'Dalam Kota', '2023-06-20 01:56:34', '2023-06-20 01:56:34'),
(12, 'moh-yamin', 'Moh. Yamin', 'Dalam Kota', '2023-06-20 01:56:41', '2023-06-20 01:56:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecelakaans`
--

CREATE TABLE `kecelakaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(70) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `nama_jalan` varchar(255) NOT NULL,
  `km` varchar(255) DEFAULT NULL,
  `tkp_dusun` varchar(255) DEFAULT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `kendaraan` varchar(255) NOT NULL,
  `korban_md` varchar(255) DEFAULT NULL,
  `korban_lb` varchar(255) DEFAULT NULL,
  `korban_lr` varchar(255) DEFAULT NULL,
  `jalans_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kecelakaans`
--

INSERT INTO `kecelakaans` (`id`, `slug`, `tanggal`, `jam`, `nama_jalan`, `km`, `tkp_dusun`, `desa`, `kecamatan`, `kabupaten`, `latitude`, `longitude`, `kendaraan`, `korban_md`, `korban_lb`, `korban_lr`, `jalans_id`, `created_at`, `updated_at`) VALUES
(1271, 'tuban-bancar', '2018-12-31', '19:00:00', 'Jl. Tuban - Bancar', 'Km 15-16', '', 'Ds. Sumurgung', 'Kec. Jenu', 'Kab. Tuban', '-6.818722', '111.963454', 'TRUCK TRAILLER                                                                           N - 8976 - UH                                                           X                                                                     SPM  S - 3459 - FK', '1', '', '1', 1, NULL, NULL),
(1272, 'tuban-bancar', '2019-01-02', '11:30:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Sobontoro', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.8017905', '111.86133', 'SPM  S - 6414 - EB                                                                            X                                                                           PEJALAN KAKI', '', '', '2', 1, NULL, NULL),
(1273, 'tuban-bancar', '2018-12-30', '17:30:00', 'Jl. Tuban - Bancar', 'Km 42-43', '', 'Ds. Bocong', 'Kec. Bancar', 'Kab. Tuban', '-6.772002', '111.735037', 'BUS PO. Sinar Mandiri                                                                          N - 7268 - UG                                                                            X                                                                      ', '', '', '6', 1, NULL, NULL),
(1274, 'tuban-bancar', '2019-01-05', '19:30:00', 'Jl. Tuban - Bancar', 'Km 10-11', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 2265 - EV                                                                            X                                                                           SPM  S - 3991 - ID', '', '', '1', 1, NULL, NULL),
(1275, 'tuban-bancar', '2018-12-29', '19:15:00', 'Jl. Tuban - Bancar', 'Km 4-5', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'TRUCK  (?)                                                                            X                                                                           SPM  S - 6425 - FM', '1', '', '', 1, NULL, NULL),
(1276, 'tuban-bancar', '2019-01-09', '21:00:00', 'Jl. Tuban - Bancar', 'Km 25-26', 'Dsn. Ketapang', 'Ds. Glondonggede', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.796617', '111.879535', 'SPM  S - 2103 - LA                                                                            X                                                                           TRAKTOR HEAD  L - 8058 - UX', '1', '1', '', 1, NULL, NULL),
(1277, 'tuban-bancar', '2019-01-12', '21:30:00', 'Jl. Tuban - Bancar', 'Km 12-13', 'Dsn. Bogang', 'Ds. Kaliuntu', 'Kec. Jenu', 'Kab. Tuban', '-6.823437', '111.976273', 'SPM  S - 3274 - EV                                                                            X                                                                           SPM  S - 2645 - FF', '', '', '2', 1, NULL, NULL),
(1278, 'tuban-bancar', '2019-01-18', '14:00:00', 'Jl. Tuban - Bancar', 'Km 41-42', '', 'Ds. Boncong', 'Kec. Bancar', 'Kab. Tuban', '-6.771757', '111.742154', 'SPM  S - 2088 - HM                                                                            X                                                                           PICK UP (?)', '', '', '2', 1, NULL, NULL),
(1279, 'tuban-bancar', '2019-01-20', '02:00:00', 'Jl. Tuban - Bancar', 'Km 12-13', 'Dsn. Bogang', 'Ds. Kaliuntu', 'Kec. Jenu', 'Kab. Tuban', '-6.823437', '111.976273', 'MPP  (?)                                                                            X                                                                           SPM  S - 6531 - GG', '', '', '1', 1, NULL, NULL),
(1280, 'tuban-bancar', '2019-01-20', '13:40:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Tambakboyo', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.788105', '111.924491', 'SPM  W - 5480 - HT                                                                            X                                                                           TRUCK  S - 9979 - HG', '1', '', '1', 1, NULL, NULL),
(1281, 'tuban-bancar', '2019-01-21', '11:00:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Purworejo', 'Kec. Jenu', 'Kab. Tuban', '-6.788105', '111.924491', 'TRUCK TRONTON                                                           S - 9335 - UH                                                                            X                                                                           SPM  TANPA TNKB', '', '', '3', 1, NULL, NULL),
(1282, 'tuban-bancar', '2019-01-25', '22:00:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.785661', '111.786606', 'SPM  S - 6454 - HG                                                                            X                                                                           PEJALAN KAKI', '', '', '2', 1, NULL, NULL),
(1283, 'tuban-bancar', '2019-01-30', '07:45:00', 'Jl. Tuban - Bancar', 'Km 20-21', '', 'Ds. Purworejo', 'Kec. Jenu', 'Kab. Tuban', '-6.788105', '111.924491', 'TRUCK  B - 9061 - SDD                                                                            X                                                                           TRUCK  S - 9142 - UG', '1', '', '3', 1, NULL, NULL),
(1284, 'tuban-bancar', '2019-01-30', '18:30:00', 'Jl. Tuban - Bancar', 'Km 2-3', 'Dsn. Dasin', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.870951', '112.036447', 'SPM  S - 6637 - EZ                                                                            X                                                                           PEJALAN KAKI', '', '', '2', 1, NULL, NULL),
(1285, 'tuban-bancar', '2019-01-31', '13:00:00', 'Jl. Tuban - Bancar', 'Km 29-30', '', 'Ds. Kenanti', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.803348', '111.846838', 'SPM  S - 5366 - H                                                                            X                                                                           PEJALAN KAKI', '', '', '2', 1, NULL, NULL),
(1286, 'tuban-bancar', '2019-02-01', '14:45:00', 'Jl. Tuban - Bancar', 'Km 25-26', '', 'Ds. Glondonggede', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.796617', '111.879535', 'MPP Xenia  B - 1173 - POG                                                           X                                                                     TRUCK TRONTON                                                      L - 9058 - US', '', '', '1', 1, NULL, NULL),
(1287, 'tuban-bancar', '2019-02-01', '13:00:00', 'Jl. Tuban - Bancar', 'Km 29-30', '', 'Ds. Tambakboyo', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.803101', '111.841702', 'SPM  S - 3715 - GT                                                           X                                                                     TRUCK  K - 1582 - HD', '', '', '1', 1, NULL, NULL),
(1288, 'tuban-bancar', '2019-02-06', '13:30:00', 'Jl. Tuban - Bancar', 'Km 20-21', '(Depan KIT)', 'Ds. Socorejo', 'Kec. Jenu', 'Kab. Tuban', '-6.78663', '111.908386', 'TRUCK  S - 8110 - UQ                                                           X                                                                     SPM  S - 3263 - FO', '1', '', '', 1, NULL, NULL),
(1289, 'tuban-bancar', '2019-02-09', '12:30:00', 'Jl. Tuban - Bancar', 'Km 13-14', 'Dsn. Bogang', 'Ds. Kaliuntu', 'Kec. Jenu', 'Kab. Tuban', '-6.820661', '111.967109', 'PICK UP  S - 9267 - HH                                                           X                                                                     SPM  S - 3711 - H', '', '', '2', 1, NULL, NULL),
(1290, 'tuban-bancar', '2019-02-11', '14:15:00', 'Jl. Tuban - Bancar', '', 'Dsn. Krapyak', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.855031', '112.023526', 'DUMP TRUCK (?)                                                           X                                                                     PEJALAN KAKI', '', '', '1', 1, NULL, NULL),
(1291, 'tuban-bancar', '2019-02-12', '03:30:00', 'Jl. Tuban - Bancar', 'Km 34-35', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.787158', '111.790066', 'BUS PO. Indonesia                                                                 L - 7006 - UV                                                           X                                                                     TRUCK TRAILLER (?)', '1', '', '5', 1, NULL, NULL),
(1292, 'tuban-bancar', '2019-02-12', '11:00:00', 'Jl. Tuban - Bancar', 'Km 43-44', '', 'Ds. Bulumeduro', 'Kec. Bancar', 'Kab. Tuban', '-6.771696', '111.7278138', 'SPM  S - 4739 - EC                                                           X                                                                     PICK UP  B - 9106 - CUT', '1', '', '1', 1, NULL, NULL),
(1293, 'tuban-bancar', '2019-02-14', '06:00:00', 'Jl. Tuban - Bancar', 'Km 33-34', '', 'Ds. Margosuko', 'Kec. Bancar', 'Kab. Tuban', '-6.7943104', '111.8062258', 'TRUCK  L - 8758 - AH                                                           X                                                                     TRUCK  L - 9945 - UF                                                                                      ', '1', '1', '1', 1, NULL, NULL),
(1294, 'tuban-bancar', '2019-02-14', '18:00:00', 'Jl. Tuban - Bancar', 'Km 39-40', 'Dsn. Sowan', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.7786585', '111.7594185', 'BUS PO. Sari Indah                            L - 7045 - UB                                                           X                                                                     TRUCK  W - 9753 - NF                                               ', '', '', '1', 1, NULL, NULL),
(1295, 'tuban-bancar', '2019-02-18', '14:00:00', 'Jl. Tuban - Bancar', 'Km 43-44', '', 'Ds. Banjarejo', 'Kec. Bancar', 'Kab. Tuban', '-6.771879', '111.7338093', 'SPM R3  K - 3296 - WM                                                           X                                                                     SPM  K - 5372 - EW                                                                                       ', '', '', '1', 1, NULL, NULL),
(1296, 'tuban-bancar', '2019-02-19', '11:00:00', 'Jl. Tuban - Bancar', 'Km 30-31', '', 'Ds. Gadon', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.7771136', '111.7550705', 'SPM  S - 3585 - GQ                                                           X                                                                     TRUCK GANDENG                                                                      AG - 8493 - UT           ', '', '', '1', 1, NULL, NULL),
(1297, 'tuban-bancar', '2019-02-20', '23:30:00', 'Jl. Tuban - Bancar', 'Km 24-25', 'Dsn. Ketapang', 'Ds. Glondonggede', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.794069', '111.886912', 'TRUCK  H - 1408 - VE                                                           X                                                                     TRONTON BUUL  S - 9452 - UH                                                                               ', '', '', '1', 1, NULL, NULL),
(1298, 'tuban-bancar', '2019-02-22', '04:15:00', 'Jl. Tuban - Bancar', 'Km 44-45', '', 'Ds. Bulujowo', 'Kec. Bancar', 'Kab. Tuban', '-6.7702453', '111.7195378', 'MPP Freed  K - 9090 - TB                                                           X                                                                     TRUCK TRONTON                                                                       N - 9632 - UG     ', '', '', '1', 1, NULL, NULL),
(1299, 'tuban-bancar', '2019-02-23', '18:30:00', 'Jl. Tuban - Bancar', 'Km 20-21', '', 'Ds. Purworejo', 'Kec. Jenu', 'Kab. Tuban', '-6.788105', '111.924491', 'SPM  K - 4045 - BM                                                           X                                                                     PEJALAN KAKI                                                                                                ', '', '', '1', 1, NULL, NULL),
(1300, 'tuban-bancar', '2019-02-26', '06:30:00', 'Jl. Tuban - Bancar', 'Km 15-16', '', 'Ds. Sumurgeneng', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'BUS PO. Restu  N - 7586 - UG                                                           X                                                                     SPM  S - 3167 - HV                                                                                ', '1', '', '', 1, NULL, NULL),
(1301, 'tuban-bancar', '2019-03-01', '18:00:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Bulujowo', 'Kec. Bancar', 'Kab. Tuban', '-6.7702453', '111.7195378', 'SPM  S - 5615 - FZ                                                           X                                                                     SPM  S - 6306 - LF', '', '', '2', 1, NULL, NULL),
(1302, 'tuban-bancar', '2019-03-08', '20:30:00', 'Jl. Tuban - Bancar', 'Km 13-14', '', 'Ds. Sumurgeneng', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  (?)                                                           X                                                                     PEJALAN KAKI', '', '', '1', 1, NULL, NULL),
(1303, 'tuban-bancar', '2019-03-09', '08:30:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Temaji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 5430 - ID                                                           X                                                                     TRUCK (?)', '', '', '1', 1, NULL, NULL),
(1304, 'tuban-bancar', '2019-03-10', '14:15:00', 'Jl. Tuban - Bancar', 'Km 9-10', '', 'Ds. Jenu', 'Kec. Jenu', 'Kab. Tuban', '-6.8326153', '112.0034204', 'MPP Avanza  S - 1851 - HD                                                           X                                                                     SPM  S - 4864 - FQ', '', '', '2', 1, NULL, NULL),
(1305, 'tuban-bancar', '2019-03-11', '02:15:00', 'Jl. Tuban - Bancar', 'Km 1-2', 'Dsn. Dasin', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.878358', '112.04305', 'MPP Fortuner  N - 1669 - BL                                                           X                                                                     BENTOR                                                                                             ', '', '', '1', 1, NULL, NULL),
(1306, 'tuban-bancar', '2019-03-11', '15:40:00', 'Jl. Tuban - Bancar', 'Km 9-10', 'SP3', 'Ds. Jenu', 'Kec. Jenu', 'Kab. Tuban', '-6.8326153', '112.0034204', 'SPM  S - 4995 - HA                                                           X                                                                     SPM  S - 5537 - EY', '', '', '1', 1, NULL, NULL),
(1307, 'tuban-bancar', '2019-03-11', '09:00:00', 'Jl. Tuban - Bancar', 'Km 21-22', 'Dsn. Pereng', 'Ds. Purworejo', 'Kec. Jenu', 'Kab. Tuban', '-6.78362', '111.917378', 'SPM  L - 2082 - GT                                                           X                                                                     MPU (?)', '', '', '1', 1, NULL, NULL),
(1308, 'tuban-bancar', '2019-03-16', '07:30:00', 'Jl. Tuban - Bancar', 'Km 10-11', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 4013 - FQ                                                           X                                                                     SPM (?)', '', '', '1', 1, NULL, NULL),
(1309, 'tuban-bancar', '2019-03-17', '09:30:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.785661', '111.786606', 'MPP  (?)                                                           X                                                                     SPM  S - 4712 - GZ', '', '', '1', 1, NULL, NULL),
(1310, 'tuban-bancar', '2019-03-18', '07:45:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Bulujowo', 'Kec. Bancar', 'Kab. Tuban', '-6.7702453', '111.7195378', 'SPM  S - 5547 - FR                                                           X                                                                     SPM  S - 2629 - FY', '', '', '3', 1, NULL, NULL),
(1311, 'tuban-bancar', '2019-03-19', '18:30:00', 'Jl. Tuban - Bancar', 'Km 46-47', '', 'Ds. Sukolilo', 'Kec. Bancar', 'Kab. Tuban', '-6.7622573', '111.7028433', 'SPM  S - 2973 - FI                                                           X                                                                     PEJALAN KAKI', '', '', '2', 1, NULL, NULL),
(1312, 'tuban-bancar', '2019-03-21', '12:15:00', 'Jl. Tuban - Bancar', 'Km 10-11', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'MPP Panther  B - 7767 - ZV                                                           X                                                                     SPM  S - 3607 - GQ', '', '', '1', 1, NULL, NULL),
(1313, 'tuban-bancar', '2019-03-23', '13:15:00', 'Jl. Tuban - Bancar', 'Km 6-7', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  (?)                                                           X                                                                     SPM Polri  3413-59-X', '', '', '1', 1, NULL, NULL),
(1314, 'tuban-bancar', '2019-03-24', '17:30:00', 'Jl. Tuban - Bancar', 'Km 38-39', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.7846394', '111.7844116', 'TRUCK  M - 8215 - UH                                                           X                                                                     SPM  K - 2426 - SQ', '', '', '2', 1, NULL, NULL),
(1315, 'tuban-bancar', '2019-03-26', '07:30:00', 'Jl. Tuban - Bancar', 'Km 9-10', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'BUS PO. Indonesia                                                                L - 7735 - UV                                                           X                                                                     SPM  S - 4561 - IE', '', '', '2', 1, NULL, NULL),
(1316, 'tuban-bancar', '2019-03-27', '15:00:00', 'Jl. Tuban - Bancar', 'Km 40-41', '', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.7786585', '111.7594185', 'SPM  TANPA TNKB                                                           X                                                                     SPM  K - 2901 - BW', '', '', '1', 1, NULL, NULL),
(1317, 'tuban-bancar', '2019-03-29', '06:30:00', 'Jl. Tuban - Bancar', 'Km 13-14', 'Dsn. Bogang', 'Ds. Wadung', 'Kec. Jenu', 'Kab. Tuban', '-6.820661', '111.967109', 'SEDAN Civic  L - 1272 - XK                                                           X                                                                     SPM  S - 6098 - HU', '1', '', '', 1, NULL, NULL),
(1318, 'tuban-bancar', '2019-03-30', '18:15:00', 'Jl. Tuban - Bancar', 'Km 11-12', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 4351 - GT                                                           X                                                                     SPM  S - 4894 - FP', '1', '', '3', 1, NULL, NULL),
(1319, 'tuban-bancar', '2019-04-01', '19:30:00', 'Jl. Tuban - Bancar', 'Km 38-39', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.7846394', '111.7844116', 'SPM  S - 2236 - HX                                                           X                                                                     TRUCK  Z - 8248 - LF', '', '', '1', 1, NULL, NULL),
(1320, 'tuban-bancar', '2019-04-01', '22:15:00', 'Jl. Tuban - Bancar', 'Km 4-5', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'Micro BUS TPPI  S - 7610 - E                                                           X                                                                     PEJALAN KAKI', '1', '', '', 1, NULL, NULL),
(1321, 'tuban-bancar', '2019-04-01', '23:30:00', 'Jl. Tuban - Bancar', 'Km 46-47', '', 'Ds. Sukolilo', 'Kec. Bancar', 'Kab. Tuban', '-6.7622573', '111.7028433', 'SPM  K - 6845 - UM                                                           X                                                                     TRUCK  (?)', '1', '', '', 1, NULL, NULL),
(1322, 'tuban-bancar', '2019-04-03', '23:30:00', 'Jl. Tuban - Bancar', 'Km 9-10', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 4956 - ID                                                           X                                                                     SPM  S - 6848 - FP', '', '', '3', 1, NULL, NULL),
(1323, 'tuban-bancar', '2019-04-12', '16:00:00', 'Jl. Tuban - Bancar', 'Km 9-10', '', 'Ds. Jenu', 'Kec. Jenu', 'Kab. Tuban', '-6.8326153', '112.0034204', 'SPM  S - 5612 - HX                                                           X                                                                     SPM  S - 4274 - HK', '', '', '1', 1, NULL, NULL),
(1324, 'tuban-bancar', '2019-04-13', '21:30:00', 'Jl. Tuban - Bancar', 'Km 5-6', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'TRUCK  (?)                                                           X                                                                     SPM  S - 6167 - HS', '1', '', '', 1, NULL, NULL),
(1325, 'tuban-bancar', '2019-04-16', '22:00:00', 'Jl. Tuban - Bancar', 'Km 11-12', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  W - 4580 - WF                                                           X                                                                     PEJALAN KAKI', '', '', '1', 1, NULL, NULL),
(1326, 'tuban-bancar', '2019-04-18', '17:30:00', 'Jl. Tuban - Bancar', 'Km 6-7', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'DUMP TRUCK  W - 8392 - UC                                                           X                                                                     MPP  S - 1077 - NI', '', '', '1', 1, NULL, NULL),
(1327, 'tuban-bancar', '2019-04-21', '15:15:00', 'Jl. Tuban - Bancar', 'Km 30-31', '', 'Ds. Gadon', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.7771136', '111.7550705', 'MPP  (?)                                                           X                                                                     SPM  S - 6929 - EX', '', '', '2', 1, NULL, NULL),
(1328, 'tuban-bancar', '2019-04-22', '10:00:00', 'Jl. Tuban - Bancar', 'Km 28-29', '', 'Ds. Kenanti (Dpn Polsek Tambakboyo)', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.8030001', '111.8483779', 'SPM  S - 3568 - FN                                                           X                                                                     SPM  S - 6647 - FT', '', '', '1', 1, NULL, NULL),
(1329, 'tuban-bancar', '2019-04-26', '03:00:00', 'Jl. Tuban - Bancar', 'Km 23-24', '', 'Ds. Socorejo', 'Kec. Jenu', 'Kab. Tuban', '-6.790884', '111.8953', 'SPM  S - 3296 - FI                                                           X                                                                     MPP L300  H - 8766 - ER', '', '', '2', 1, NULL, NULL),
(1330, 'tuban-bancar', '2019-04-26', '07:30:00', 'Jl. Tuban - Bancar', 'Km 29-30', '', 'Ds. Pabeyan', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.802635', '111.838088', 'TRUCK TRONTON                                                                                   T - 9356 - DE                                                           X                                                                     SPM  S - 3479 - F', '', '', '2', 1, NULL, NULL),
(1331, 'tuban-bancar', '2019-04-27', '05:00:00', 'Jl. Tuban - Bancar', 'Km 39-40', '', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.7786585', '111.7594185', 'SPM  L - 4183 - AM                                                           X                                                                     PEJALAN KAKI', '', '', '1', 1, NULL, NULL),
(1332, 'tuban-bancar', '2019-05-01', '11:30:00', 'Jl. Tuban - Bancar', 'Km 27-28', '', 'Ds. Sobontoro', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.8017905', '111.86133', 'BUS PO. Indonesia                                                                                L - 7738 - UV                                                           X                                                                     SPM  S - 4679 - ', '', '', '1', 1, NULL, NULL),
(1333, 'tuban-bancar', '2019-05-14', '15:00:00', 'Jl. Tuban - Bancar', 'Km 40-41', '', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.7786585', '111.7594185', 'SPM  S - 6643 - HF                                                           X                                                                     SPM  S - 4959 - VG', '', '', '2', 1, NULL, NULL),
(1334, 'tuban-bancar', '2019-05-03', '09:00:00', 'Jl. Tuban - Bancar', 'Km 41-42', '', 'Ds. Boncong', 'Kec. Bancar', 'Kab. Tuban', '-6.771757', '111.742154', 'TRUCK  H - 1409 - IL                                                           X                                                                     SPM  S - 2105 - GX', '', '', '2', 1, NULL, NULL),
(1335, 'tuban-bancar', '2019-05-14', '19:00:00', 'Jl. Tuban - Bancar', 'Km 20-21', '', 'Ds. Purworejo', 'Kec. Jenu', 'Kab. Tuban', '-6.788105', '111.924491', 'SPM  S - 5726 - IE                                                           X                                                                     TRUCK (?)', '', '', '1', 1, NULL, NULL),
(1336, 'tuban-bancar', '2019-05-04', '21:00:00', 'Jl. Tuban - Bancar', 'Km 39-40', '', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.7786585', '111.7594185', 'SPM  S - 6971 - FG                                                           X                                                                     PEJALAN KAKI', '', '', '2', 1, NULL, NULL),
(1337, 'tuban-bancar', '2019-05-02', '19:00:00', 'Jl. Tuban - Bancar', 'Km 36-37', 'Dsn. Mamer', 'Ds. Margosuko', 'Kec. Bancar', 'Kab. Tuban', '-6.7969473', '111.8132624', 'SPM  S - 2940 - HB                                                           X                                                                     TRUCK TRAILLER                                                                                 B - 9541 - PE', '', '', '1', 1, NULL, NULL),
(1338, 'tuban-bancar', '2019-05-17', '07:45:00', 'Jl. Tuban - Bancar', '', 'SP4 Kaligebang', 'Ds. Sumurgeneng', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 3097 - EK                                                           X                                                                     PICK UP  S - 9428 - HH', '', '', '1', 1, NULL, NULL),
(1339, 'tuban-bancar', '2019-05-18', '06:45:00', 'Jl. Tuban - Bancar', 'Km 9-10', '', 'Ds. Jenu', 'Kec. Jenu', 'Kab. Tuban', '-6.8326153', '112.0034204', 'TRUCK TRONTON                                                                                         S - 8420 - UH                                                           X                                                                     TRUCK TRONT', '', '', '1', 1, NULL, NULL),
(1340, 'tuban-bancar', '2019-05-18', '19:00:00', 'Jl. Tuban - Bancar', 'Km 29-30', '', 'Ds. Kenanti', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.803348', '111.846838', 'SPM  K - 3161 - AUC                                                           X                                                                     TRUCK  L - 8905 - UH', '', '1', '2', 1, NULL, NULL),
(1341, 'tuban-bancar', '2019-05-08', '07:00:00', 'Jl. Tuban - Bancar', 'Km 38-39', '', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.7786585', '111.7594185', 'TRUCK  B - 9741 - XA                                                           X                                                                     SPM  S - 4081 - FV', '', '', '2', 1, NULL, NULL),
(1342, 'tuban-bancar', '2019-05-22', '10:30:00', 'Jl. Tuban - Bancar', 'Km 10-11', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  L - 2478 - NM                                                           X                                                                     TRUCK  K - 1878 - CS', '', '', '2', 1, NULL, NULL),
(1343, 'tuban-bancar', '2019-05-23', '18:30:00', 'Jl. Tuban - Bancar', 'Km 4-5', '(Depan TWT)', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.858705', '112.026464', 'SPM  S - 2520 - FH                                                           X                                                                     TRUCK TRAILLER                                                                                          L - ', '', '', '1', 1, NULL, NULL),
(1344, 'tuban-bancar', '2019-05-24', '07:00:00', 'Jl. Tuban - Bancar', 'Km 27-28', '', 'Ds. Sobontoro', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.8017905', '111.86133', 'TRUCK GANDENG                                                                        AG - 8251 - UB                                                           X                                                                     PEJALAN KAKI', '2', '', '', 1, NULL, NULL),
(1345, 'tuban-bancar', '2019-06-02', '12:00:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Margosuko', 'Kec. Bancar', 'Kab. Tuban', '-6.7943104', '111.8062258', 'BUS PO. Jaya Utama Indo                                                               L - 7658 - UV                                                           X                                                                     TRUCK  P - 8164 - UY       ', '', '', '1', 1, NULL, NULL),
(1346, 'tuban-bancar', '2019-06-06', '15:00:00', 'Jl. Tuban - Bancar', 'Km 33-34', '', 'Ds. Gadon', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.7771136', '111.7550705', 'PICK UP  S - 9173 - HB                                                           X                                                                     SPM  S - 5378 - EG', '1', '', '', 1, NULL, NULL),
(1347, 'tuban-bancar', '2019-06-12', '21:30:00', 'Jl. Tuban - Bancar', 'Km 23-24', '', 'Ds. Socorejo', 'Kec. Jenu', 'Kab. Tuban', '-6.790884', '111.8953', 'TRUCK  D - 9069 - AE                                                           X                                                                     TRUCK TRAILLER                                                                           S - 8718 - UN', '', '', '1', 1, NULL, NULL),
(1348, 'tuban-bancar', '2019-06-09', '13:30:00', 'Jl. Tuban - Bancar', 'Km 8-9', '', 'Ds. Jenu', 'Kec. Jenu', 'Kab. Tuban', '-6.8326153', '112.0034204', 'SPM  S - 6386 - EX                                                           X                                                                     MPP Avanza  S - 1202 - HC', '1', '', '', 1, NULL, NULL),
(1349, 'tuban-bancar', '2019-05-30', '01:00:00', 'Jl. Tuban - Bancar', 'Km 45-46', '', 'Ds. Sukolilo', 'Kec. Bancar', 'Kab. Tuban', '-6.7622573', '111.7028433', 'MPP Innova  S - 1769 - HE                                                           X                                                                     MPP Avanza  B - 1800 - KKR', '', '', '2', 1, NULL, NULL),
(1350, 'tuban-bancar', '2019-06-13', '09:00:00', 'Jl. Tuban - Bancar', 'Km 11-12', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 4179 - HW                                                           X                                                                     SPM  S - 6884 - GS                                                                        ', '', '', '2', 1, NULL, NULL),
(1351, 'tuban-bancar', '2019-06-06', '23:30:00', 'Jl. Tuban - Bancar', 'Km 33-34', '', 'Ds. Gadon', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.7771136', '111.7550705', 'MPP Kuda  K - 9425 - NB                                                           X                                                                     MPP Sedan Vios                                                              B - 1568 - CEQ', '', '', '6', 1, NULL, NULL),
(1352, 'tuban-bancar', '2019-06-07', '10:00:00', 'Jl. Tuban - Bancar', 'Km 45-46', '', 'Ds. Sukolilo', 'Kec. Bancar', 'Kab. Tuban', '-6.7622573', '111.7028433', 'SPM  S - 4910 - FW                                                           X                                                                     SPM  S - 5856 - FX', '', '', '3', 1, NULL, NULL),
(1353, 'tuban-bancar', '2019-05-17', '16:00:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-7.003024', '112.1310928', 'TRUCK TRAILLER                                                                       B - 9020 - YN                                                                              (SELIP SENDIRI)                                                           X    ', '', '', '', 1, NULL, NULL),
(1354, 'tuban-bancar', '2019-06-20', '23:30:00', 'Jl. Tuban - Bancar', 'Km 37-38', '', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.7828629', '111.7807628', 'MPP Ertiga  N - 1589 - NR                                                           X                                                                     SPM  S - 6562 - EY', '', '', '2', 1, NULL, NULL),
(1355, 'tuban-bancar', '2019-06-25', '19:30:00', 'Jl. Tuban - Bancar', 'Km 30-31', '', 'Ds. Gadon', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.7771136', '111.7550705', 'MPP Rush  B - 1484 - ZFV                                                           X                                                                     PEJALAN KAKI', '', '', '1', 1, NULL, NULL),
(1356, 'tuban-bancar', '2019-06-28', '19:30:00', 'Jl. Tuban - Bancar', 'Km 39-40', '', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.7786585', '111.7594185', 'SPM  S - 4353 - FI                                                           X                                                                     SPM  S - 4348 - ID', '', '', '3', 1, NULL, NULL),
(1357, 'tuban-bancar', '2019-06-29', '09:30:00', 'Jl. Tuban - Bancar', 'Km 43-44', '', 'Ds. Bulumeduro', 'Kec. Bancar', 'Kab. Tuban', '-6.771696', '111.7278138', 'SPM  S - 3317 - G                                                           X                                                                     MPP Mobilio  L - 1195 - CG', '', '', '2', 1, NULL, NULL),
(1358, 'tuban-bancar', '2019-06-29', '11:00:00', 'Jl. Tuban - Bancar', '', 'Dsn. Mamer', 'Ds. Margosuko', 'Kec. Bancar', 'Kab. Tuban', '-6.7969473', '111.8132624', 'SPM  K - 6769 - VM                                                           X                                                                     SPM  S - 6694 - GS', '', '', '4', 1, NULL, NULL),
(1359, 'tuban-bancar', '2019-07-01', '13:00:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-7.003024', '112.1310928', 'SPM  L - 4995 - BF                                                           X                                                                     TRUCK  S - 9563 - UF', '', '', '1', 1, NULL, NULL),
(1360, 'tuban-bancar', '2019-07-02', '05:15:00', 'Jl. Tuban - Bancar', 'Km 5-6', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 6307 - HQ                                                           X                                                                     PEJALAN KAKI', '1', '', '1', 1, NULL, NULL),
(1361, 'tuban-bancar', '2019-07-01', '12:00:00', 'Jl. Tuban - Bancar', 'Km 19-20', '', 'Ds. Socorejo', 'Kec. Jenu', 'Kab. Tuban', '-6.788014', '111.90484', 'SPM  S - 2628 - GV                                                           X                                                                     MPU  S - 7121 - UE', '', '', '1', 1, NULL, NULL),
(1362, 'tuban-bancar', '2019-07-02', '18:45:00', 'Jl. Tuban - Bancar', 'Km 20-21', '', 'Ds. Purworejo', 'Kec. Jenu', 'Kab. Tuban', '-6.788105', '111.924491', 'BUS PO. Jaya Utama Indo                                                                                L - 7649 - UV                                                           X                                                                     SPM  AG - ', '1', '', '', 1, NULL, NULL),
(1363, 'tuban-bancar', '2019-07-07', '00:05:00', 'Jl. Tuban - Bancar', '', 'Dsn. Bogang', 'Ds. Wadung', 'Kec. Jenu', 'Kab. Tuban', '-6.822583', '111.972781', 'TRUCK GANDENG                                                              L - 9676 - UM                                                           X                                                                     SPM  S - 5449 - IE', '', '', '1', 1, NULL, NULL),
(1364, 'tuban-bancar', '2019-07-09', '16:00:00', 'Jl. Tuban - Bancar', 'Km 15-16', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 6408 - FN                                                           X                                                                     TRUCK TRONTON                                                       E - 9665 - YA', '2', '', '1', 1, NULL, NULL),
(1365, 'tuban-bancar', '2019-07-09', '22:00:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.7786585', '111.7594185', 'TRUCK TRONTON BOX                                                  L - 9562 - UY                                                           X                                                                     TRUCK BOX  K - 9665 - YA', '', '', '1', 1, NULL, NULL),
(1366, 'tuban-bancar', '2019-07-10', '08:30:00', 'Jl. Tuban - Bancar', 'Km 12-13', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 2459 - EN                                                           X                                                                     SPM  S - 3953 - IG', '', '', '1', 1, NULL, NULL),
(1367, 'tuban-bancar', '2019-07-11', '06:30:00', 'Jl. Tuban - Bancar', 'Km 16-17', '', 'Ds. Temaji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 5077 - KA                                                           X                                                                     PEJALAN KAKI', '', '', '3', 1, NULL, NULL),
(1368, 'tuban-bancar', '2019-07-11', '16:45:00', 'Jl. Tuban - Bancar', 'Km 23-24', '', 'Ds. Socorejo', 'Kec. Jenu', 'Kab. Tuban', '-6.790884', '111.8953', 'TRUCK  (?)                                                           X                                                                     SPM  L - 8528 - BF', '', '', '2', 1, NULL, NULL),
(1369, 'tuban-bancar', '2019-07-15', '22:00:00', 'Jl. Tuban - Bancar', 'Km 30-31', '', 'Ds. Tambakboyo', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.803101', '111.841702', 'SPM  S - 2110 - GO                                                           X                                                                     SPM (?)', '', '', '1', 1, NULL, NULL),
(1370, 'tuban-bancar', '2019-07-01', '16:00:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Temaji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'TRUCK GANDENG                                                                                       E - 9923 - AB                                                           X                                                                       TRUCK TRONT', '', '', '', 1, NULL, NULL),
(1371, 'tuban-bancar', '2019-07-20', '14:30:00', 'Jl. Tuban - Bancar', 'Km 3-4', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'MPP Yaris  L - 1119 - VO                                                           X                                                                       SPM  S - 3592 - F', '', '', '2', 1, NULL, NULL),
(1372, 'tuban-bancar', '2019-07-20', '20:30:00', 'Jl. Tuban - Bancar', 'Km 30-31', '', 'Ds. Tambakboyo', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.803101', '111.841702', 'SPM  S - 6337 - EC                                                           X                                                                       PEJALAN KAKI', '1', '', '', 1, NULL, NULL),
(1373, 'tuban-bancar', '2019-07-21', '13:00:00', 'Jl. Tuban - Bancar', 'Km 42-43', '', 'Ds. Banjarjo', 'Kec. Bancar', 'Kab. Tuban', '-6.772002', '111.735037', 'SPM  S - 4073 - GM                                                           X                                                                       SPM  S - 2025 - FY                                                                                        ', '1', '', '', 1, NULL, NULL),
(1374, 'tuban-bancar', '2019-07-26', '00:15:00', 'Jl. Tuban - Bancar', 'Km 32-33', '', 'Ds. Margosuko', 'Kec. Bancar', 'Kab. Tuban', '-6.7943104', '111.8062258', 'TRUCK  (?)                                                               X                                                                       SPM  S - 2670 - EA', '', '', '1', 1, NULL, NULL),
(1375, 'tuban-bancar', '2019-07-30', '16:30:00', 'Jl. Tuban - Bancar', 'Km 24-25', '', 'Ds. Ketapang', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.794069', '111.886912', 'SPM  K - 2597 - TB                                                           X                                                                       BECAK MOTOR  H - 3913 - EN', '', '', '2', 1, NULL, NULL),
(1376, 'tuban-bancar', '2019-07-31', '15:00:00', 'Jl. Tuban - Bancar', '', 'Dsn. Bogang', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.824362', '111.979989', 'SPM  S - 2951 - HO                                                           X                                                                     SPM  S - 4013 - GZ                                                                          ', '', '', '1', 1, NULL, NULL),
(1377, 'tuban-bancar', '2019-08-06', '11:30:00', 'Jl. Tuban - Bancar', 'Km 17-18', '', 'Ds. Temaji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 2712 - GZ                                                           X                                                                     MPP Jazz  AG - 1345 - SR                                                                          ', '', '', '1', 1, NULL, NULL),
(1378, 'tuban-bancar', '2019-08-09', '11:00:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Gadon', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.7771136', '111.7550705', 'SPM  S - 4502 - HJ                                                           X                                                                     SPM  TANPA TNKB                                                                          ', '', '', '2', 1, NULL, NULL),
(1379, 'tuban-bancar', '2019-08-13', '06:45:00', 'Jl. Tuban - Bancar', 'Km 45-46', '', 'Ds. Sukolilo', 'Kec. Bancar', 'Kab. Tuban', '-6.7622573', '111.7028433', 'SPM  S - 3896 - GL                                                           X                                                                     MICROBUS  N - 7122 - EA                                                                          ', '', '', '1', 1, NULL, NULL),
(1380, 'tuban-bancar', '2019-08-13', '12:30:00', 'Jl. Tuban - Bancar', 'Km 34-35', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.785661', '111.786606', 'TRUCK  S - 9327 - HI                                                           X                                                                     SPM  K - 6205 - TM                                                                          ', '', '', '1', 1, NULL, NULL),
(1381, 'tuban-bancar', '2019-08-17', '01:30:00', 'Jl. Tuban - Bancar', 'Km 31-32', '', 'Ds. Tambakboyo', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.803101', '111.841702', 'MPP (?)                                                           X                                                                     PEJALAN KAKI                                                                          ', '1', '', '', 1, NULL, NULL),
(1382, 'tuban-bancar', '2019-08-17', '17:30:00', 'Jl. Tuban - Bancar', 'Km 6-7', '', 'Ds. Jenu', 'Kec. Jenu', 'Kab. Tuban', '-6.8326153', '112.0034204', 'SPM  S - 3350 - IE                                                           X                                                                     SPM  (?)                                                                                       X            ', '1', '', '', 1, NULL, NULL),
(1383, 'tuban-bancar', '2019-08-17', '20:15:00', 'Jl. Tuban - Bancar', 'Km 12-13', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 4009 - FE                                                           X                                                                     SPM  S - 6037 - IG                                                                          ', '', '', '4', 1, NULL, NULL),
(1384, 'tuban-bancar', '2019-08-23', '01:30:00', 'Jl. Tuban - Bancar', 'Km 3-4', 'Dsn. Dasin', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.867486', '112.033437', 'SPM  S - 6894 - AC                                                           X                                                                     TRACTOR HEAD  H - 1709 - ES                                                                          ', '', '', '1', 1, NULL, NULL),
(1385, 'tuban-bancar', '2019-08-25', '23:30:00', 'Jl. Tuban - Bancar', 'Km 19-20', 'Dsn. Pereng', 'Ds. Purworejo', 'Kec. Jenu', 'Kab. Tuban', '-6.796253', '111.931415', 'Kend Roda 4 (?)                                                           X                                                                     PEJALAN KAKI                                                                          ', '1', '', '', 1, NULL, NULL),
(1386, 'tuban-bancar', '2019-08-26', '07:00:00', 'Jl. Tuban - Bancar', 'Km 47-48', '', 'Ds. Sukolilo', 'Kec. Bancar', 'Kab. Tuban', '-6.7622573', '111.7028433', 'SPM  S - 4464 - HR                                                           X                                                                     SPM Roda 3 (?)                                                                                         X    ', '1', '', '', 1, NULL, NULL),
(1387, 'tuban-bancar', '2019-08-27', '10:30:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.785661', '111.786606', 'SPM  S - 2959 - GX                                                           X                                                                     TRUCK (?)                                                                          ', '1', '', '', 1, NULL, NULL),
(1388, 'tuban-bancar', '2019-08-28', '14:00:00', 'Jl. Tuban - Bancar', 'Km 13-14', 'Dsn. Bogang', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.820661', '111.967109', 'TRUCK TRACTOR HEAD                                                                                     P - 9314 - UE                                                           X                                                                     SPM  S - 5', '', '', '2', 1, NULL, NULL),
(1389, 'tuban-bancar', '2019-08-30', '06:00:00', 'Jl. Tuban - Bancar', 'Km 36-37', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.7846394', '111.7844116', 'SPM  S - 4386 - ET                                                           X                                                                     TRUCK TRAILLER                                                                                  L - 8799 - U', '1', '', '1', 1, NULL, NULL),
(1390, 'tuban-bancar', '2019-09-04', '19:30:00', 'Jl. Tuban - Bancar', 'Km 36-37', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.7846394', '111.7844116', 'TRUCK  AG - 8440 - RH                                                           X                                                                                                                              SPM  S - 6769 - ER', '', '1', '1', 1, NULL, NULL),
(1391, 'tuban-bancar', '2019-09-16', '19:30:00', 'Jl. Tuban - Bancar', 'Km 16-17', '', 'Ds. Purworejo', 'Kec. Jenu', 'Kab. Tuban', '-6.788105', '111.924491', 'PICK UP  S - 9161 - HF                                                                 X                                                                       TRUCK  S - 8738 - HI                                                           X                ', '', '', '2', 1, NULL, NULL),
(1392, 'tuban-bancar', '2019-09-03', '03:00:00', 'Jl. Tuban - Bancar', 'Km 4-5', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 6066 - GT                                                           X                                                                                                                              TRUCK (?)', '1', '', '', 1, NULL, NULL),
(1393, 'tuban-bancar', '2019-09-17', '23:00:00', 'Jl. Tuban - Bancar', 'Km 40-41', 'Dsn. Gading', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.7786585', '111.7594185', 'TRUCK GANDENG                                                      P - 9370 - UM                                                           X                                                                                                                   ', '', '', '3', 1, NULL, NULL),
(1394, 'tuban-bancar', '2019-09-18', '11:00:00', 'Jl. Tuban - Bancar', 'Km 40-41', '', 'Ds. Boncong', 'Kec. Bancar', 'Kab. Tuban', '-6.771757', '111.742154', 'TRUCK (?)                                                                           X                                                                              SPM  S - 6538 - FU                                                           X              ', '1', '', '', 1, NULL, NULL),
(1395, 'tuban-bancar', '2019-09-18', '13:00:00', 'Jl. Tuban - Bancar', 'Km 26-27', '', 'Ds. Sobontoro', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.8017905', '111.86133', 'SPM  S - 4338 - GS                                                           X                                                                                                                              SPM  S - 3730 - HX', '', '', '2', 1, NULL, NULL),
(1396, 'tuban-bancar', '2019-09-19', '00:15:00', 'Jl. Tuban - Bancar', 'Km 34-35', '', 'Ds. Margosuko', 'Kec. Bancar', 'Kab. Tuban', '-6.787158', '111.790066', 'TRUCK  L - 8939 - UX                                                           X                                                                                                                              TRUCK TRONTON                                    ', '', '', '1', 1, NULL, NULL);
INSERT INTO `kecelakaans` (`id`, `slug`, `tanggal`, `jam`, `nama_jalan`, `km`, `tkp_dusun`, `desa`, `kecamatan`, `kabupaten`, `latitude`, `longitude`, `kendaraan`, `korban_md`, `korban_lb`, `korban_lr`, `jalans_id`, `created_at`, `updated_at`) VALUES
(1397, 'tuban-bancar', '2019-09-19', '15:00:00', 'Jl. Tuban - Bancar', 'Km 10-11', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'TRUCK TRAILLER                                                                                    N - 9398 - UR                                                           X                                                                                    ', '', '', '3', 1, NULL, NULL),
(1398, 'tuban-bancar', '2019-09-19', '19:30:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'TRUCK (?)                                                                           X                                                                              SPM  S - 6008 - EB', '', '', '1', 1, NULL, NULL),
(1399, 'tuban-bancar', '2019-09-10', '14:00:00', 'Jl. Tuban - Bancar', 'Km 35-36', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.7846394', '111.7844116', 'SPM  S - 4918 - AY                                                           X                                                                                        MPU L300  S - 7163 - UE                                                                  ', '', '', '1', 1, NULL, NULL),
(1400, 'tuban-bancar', '2019-09-09', '08:30:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Sumurgeneng', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'TRUCK TRONTON                                                             DK - 9350 - HR                                                           X                                                                                                           ', '', '', '3', 1, NULL, NULL),
(1401, 'tuban-bancar', '2019-09-26', '12:00:00', 'Jl. Tuban - Bancar', 'Km 46-47', '', 'Ds. Sukolilo', 'Kec. Bancar', 'Kab. Tuban', '-6.7622573', '111.7028433', 'TRUCK  S - 8291 - HI                                                           X                                                                                                                              SPM  H - 1361 - HI', '', '', '1', 1, NULL, NULL),
(1402, 'tuban-bancar', '2019-09-27', '09:15:00', 'Jl. Tuban - Bancar', 'Km 7-8', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'BUS PO. Jaya Utama Indo                                                                                  L - 7514 - UV                                                           X                                                                             ', '', '', '2', 1, NULL, NULL),
(1403, 'tuban-bancar', '2019-09-27', '22:30:00', 'Jl. Tuban - Bancar', 'Km 36-37', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.7846394', '111.7844116', 'TRUCK (?)                                                           X                                                                                                                              SPM  B - 6615 - FUQ', '1', '', '', 1, NULL, NULL),
(1404, 'tuban-bancar', '2019-09-29', '06:00:00', 'Jl. Tuban - Bancar', 'Km 30-31', '', 'Ds. Pabeyan', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.802635', '111.838088', 'MPP (?)                                                           X                                                                                                                              PEJALAN KAKI', '', '', '1', 1, NULL, NULL),
(1405, 'tuban-bancar', '2019-10-02', '10:00:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Bulumeduro', 'Kec. Bancar', 'Kab. Tuban', '-6.771696', '111.7278138', 'TRUCK  S - 9004 - UH                                                           X                                                                                                                              SPM  S - 3840 - EH', '', '', '1', 1, NULL, NULL),
(1406, 'tuban-bancar', '2019-10-03', '06:30:00', 'Jl. Tuban - Bancar', 'Km 42-43', 'Dsn. Sowan', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.772002', '111.735037', 'SPM  S - 2485 - EY                                                           X                                                                                                                              PEJALAN KAKI', '', '', '2', 1, NULL, NULL),
(1407, 'tuban-bancar', '2019-10-08', '21:00:00', 'Jl. Tuban - Bancar', '', 'Dsn. Ketapang', 'Ds. Glondonggede', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.79158', '111.893535', 'TRUCK TRAILLER                                                                                      N - 9307 - UR                                                           X                                                                                  ', '', '', '1', 1, NULL, NULL),
(1408, 'tuban-bancar', '2019-10-11', '15:00:00', 'Jl. Tuban - Bancar', 'Km 37-38', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.7828629', '111.7807628', 'TRUCK TRONTON                                                                              B - 9395 - PEU                                                           X                                                                                          ', '', '1', '', 1, NULL, NULL),
(1409, 'tuban-bancar', '2019-10-11', '22:30:00', 'Jl. Tuban - Bancar', '', 'Dsn. Sowan', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.7786585', '111.7594185', 'TRUCK  W - 8326 - UR                                                           X                                                                                                                              TRUCK TRONTON                                    ', '', '', '2', 1, NULL, NULL),
(1410, 'tuban-bancar', '2019-10-12', '15:00:00', 'Jl. Tuban - Bancar', 'Km 45-46', '', 'Ds. Bulujowo', 'Kec. Bancar', 'Kab. Tuban', '-6.7702453', '111.7195378', 'SPM R3  S - 9968 - F                                                           X                                                                                                                              SPM  K - 2569 - VM', '', '', '1', 1, NULL, NULL),
(1411, 'tuban-bancar', '2019-10-20', '09:00:00', 'Jl. Tuban - Bancar', '', 'Dsn. Karanganyar', 'Ds. Temaji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 4784 - IP                                                           X                                                                                                                              SPM  S - 3081 - GO', '', '', '1', 1, NULL, NULL),
(1412, 'tuban-bancar', '2019-10-21', '06:30:00', 'Jl. Tuban - Bancar', 'Km 9-10', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 4482 - EP                                                           X                                                                                                                              TRUCK  K - 1504 - KD', '1', '', '', 1, NULL, NULL),
(1413, 'tuban-bancar', '2019-10-24', '15:15:00', 'Jl. Tuban - Bancar', 'Km 21-22', '', 'Ds. Glondonggede', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.79158', '111.893535', 'SPM  K - 4716 - FW                                                           X                                                                                                                              PEJALAN KAKI', '', '', '1', 1, NULL, NULL),
(1414, 'tuban-bancar', '2019-11-03', '20:30:00', 'Jl. Tuban - Bancar', 'Km 15-16', '', 'Ds. Sumurgeneng', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  B - 4348 - FLD                                                           X                                                                                                                              TRUCK TRONTON                                     ', '1', '', '', 1, NULL, NULL),
(1415, 'tuban-bancar', '2019-11-04', '19:30:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Boncong', 'Kec. Bancar', 'Kab. Tuban', '-6.771757', '111.742154', 'SPM  S - 4814 - FR                                                           X                                                                                                                              MPP Mazda  K - 9255 - GL', '', '', '1', 1, NULL, NULL),
(1416, 'tuban-bancar', '2019-11-08', '10:00:00', 'Jl. Tuban - Bancar', 'Km 30-31', '', 'Ds. Pabeyan', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.802635', '111.838088', 'SPM  K - 4653 - FW                                                           X                                                                                                                              PEJALAN KAKI', '1', '', '', 1, NULL, NULL),
(1417, 'tuban-bancar', '2019-10-30', '18:00:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Pabeyan', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.802635', '111.838088', 'PICK UP (?)                                                           X                                                                                                                              SPM Roda 3  S - 9929 - F', '', '', '1', 1, NULL, NULL),
(1418, 'tuban-bancar', '2019-11-01', '17:30:00', 'Jl. Tuban - Bancar', 'Km 12-13', 'Dsn. Bogang', 'Ds. Kaliuntu', 'Kec. Jenu', 'Kab. Tuban', '-6.823437', '111.976273', 'SPM  S - 2136 - FJ                                                           X                                                                                                                              SPM  K - 3842 - A', '', '', '1', 1, NULL, NULL),
(1419, 'tuban-bancar', '2019-11-10', '11:30:00', 'Jl. Tuban - Bancar', 'Km 30-31', '', 'Ds. Tambakboyo', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.803101', '111.841702', 'SPM  S - 5542 - LU                                                           X                                                                                                                              TRUCK  B - 9122 - PYT', '1', '', '', 1, NULL, NULL),
(1420, 'tuban-bancar', '2019-11-10', '14:45:00', 'Jl. Tuban - Bancar', 'Km 31-32', '', 'Ds. Margosuko', 'Kec. Bancar', 'Kab. Tuban', '-6.7943104', '111.8062258', 'SPM  S - 5785 - EJ                                                           X                                                                                                                              SEPEDA PANCAL', '1', '', '', 1, NULL, NULL),
(1421, 'tuban-bancar', '2019-11-19', '16:15:00', 'Jl. Tuban - Bancar', 'Km 25-26', '', 'Ds. Glondonggede', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.796617', '111.879535', 'MPP Kijang  W - 1957 - BH                                                           X                                                                                                                              SPM  S - 3918 - IE', '', '', '1', 1, NULL, NULL),
(1422, 'tuban-bancar', '2019-11-23', '19:30:00', 'Jl. Tuban - Bancar', 'Km 21-22', '', 'Ds. Compreng', 'Kec. Widang', 'Kab. Tuban', '-7.04121', '112.146274', 'PICK UP Hilux  AE - 8199 - BC                                                           X                                                                                                                              PICK UP  S - 9221 - AB', '', '', '1', 1, NULL, NULL),
(1423, 'tuban-bancar', '2019-11-27', '06:30:00', 'Jl. Tuban - Bancar', 'Km 34-35', 'Dsn. Kandang', 'Ds. Margosuko', 'Kec. Bancar', 'Kab. Tuban', '-6.787158', '111.790066', 'SPM  L - 2459 - YS                                                           X                                                                                                                              TRUCK  S - 8540 - UH                               ', '1', '', '', 1, NULL, NULL),
(1424, 'tuban-bancar', '2019-11-28', '15:30:00', 'Jl. Tuban - Bancar', 'Km 31-32', '', 'Ds. Pabeyan', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.802635', '111.838088', 'SPM  S - 5742 - EV                                                           X                                                                                                                              SPM  K - 2076 - LM', '', '', '1', 1, NULL, NULL),
(1425, 'tuban-bancar', '2019-11-29', '00:45:00', 'Jl. Tuban - Bancar', 'Km 44-45', '', 'Ds. Sukolilo', 'Kec. Bancar', 'Kab. Tuban', '-6.7622573', '111.7028433', 'SPM  K - 6871 - M                                                           X                                                                                                                              SPM  S - 2235 - HN', '1', '', '1', 1, NULL, NULL),
(1426, 'tuban-bancar', '2019-11-29', '16:00:00', 'Jl. Tuban - Bancar', 'Km 29-30', '', 'Ds. Kenanti', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.803348', '111.846838', 'SPM  S - 2261 - GB                                                           X                                                                                                                              TRUCK GANDENG                                      ', '1', '', '', 1, NULL, NULL),
(1427, 'tuban-bancar', '2019-11-29', '23:45:00', 'Jl. Tuban - Bancar', '', 'Dsn. Karanganyar', 'Ds. Purworejo', 'Kec. Jenu', 'Kab. Tuban', '-6.811878', '111.947734', 'TRUCK  B - 9859 - PYT                                                           X                                                                                                                              TRUCK (?)', '', '', '1', 1, NULL, NULL),
(1428, 'tuban-bancar', '2019-11-30', '00:15:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Purworejo', 'Kec. Jenu', 'Kab. Tuban', '-6.788105', '111.924491', 'SPM  S - 3629 - EM                                                           X                                                                                                                              TRUCK  N - 8134 - UV', '', '', '1', 1, NULL, NULL),
(1429, 'tuban-bancar', '2019-12-02', '07:00:00', 'Jl. Tuban - Bancar', 'Km 11-12', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 2691 - GB                                                           X                                                                                                                              MPU  S - 7394 - UE', '', '', '1', 1, NULL, NULL),
(1430, 'tuban-bancar', '2019-12-03', '16:00:00', 'Jl. Tuban - Bancar', 'Km 24-25', '', 'Ds. Glondonggede', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.794069', '111.886912', 'PICK UP  W - 8633 - J                                                           X                                                                                                                              SPM  S - 3052 - FP', '', '', '1', 1, NULL, NULL),
(1431, 'tuban-bancar', '2019-12-04', '08:30:00', 'Jl. Tuban - Bancar', 'Km 43-44', '', 'Ds. Bulumeduro', 'Kec. Bancar', 'Kab. Tuban', '-6.771696', '111.7278138', 'TRUCK  (?)                                                           X                                                                                                                              PEJALAN KAKI', '', '', '1', 1, NULL, NULL),
(1432, 'tuban-bancar', '2019-12-05', '08:30:00', 'Jl. Tuban - Bancar', 'Km 21-22', '', 'Ds. Purworejo', 'Kec. Jenu', 'Kab. Tuban', '-6.788105', '111.924491', 'MPU  S - 7468 - UE                                                           X                                                                                                                              SPM  DR - 5033 - MI', '', '', '1', 1, NULL, NULL),
(1433, 'tuban-bancar', '2019-12-06', '10:00:00', 'Jl. Tuban - Bancar', 'Km 27-28', '', 'Ds. Sobontoro', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.8017905', '111.86133', 'SPM  N - 3576 - VB                                                           X                                                                                                                              SPM Roda 3 Kaisar                                  ', '1', '', '', 1, NULL, NULL),
(1434, 'tuban-bancar', '2019-12-08', '12:30:00', 'Jl. Tuban - Bancar', 'Km 1-2', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  TANPA TNKB                                                           X                                                                                                                              SPM  S - 6902 - JAA', '', '', '4', 1, NULL, NULL),
(1435, 'tuban-bancar', '2019-12-08', '13:30:00', 'Jl. Tuban - Bancar', 'Km 2-3', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'SPM  S - 4864 - IP                                              X                                                                                                                              TRUCK  B - 9431 - NCC                                           ', '', '', '4', 1, NULL, NULL),
(1436, 'tuban-bancar', '2019-12-10', '13:00:00', 'Jl. Tuban - Bancar', 'Km 35-36', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.7846394', '111.7844116', 'SPM  S - 5839 - FW                                              X                                                                                                                              TRUCK  L - 8323 - UY', '', '1', '', 1, NULL, NULL),
(1437, 'tuban-bancar', '2019-12-12', '19:00:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Boncong', 'Kec. Bancar', 'Kab. Tuban', '-6.771757', '111.742154', 'DUMP TRUCK  S - 8766 - UF                                              X                                                                                                                              SPM  W - 4983 - LX', '', '', '1', 1, NULL, NULL),
(1438, 'tuban-bancar', '2019-12-13', '13:30:00', 'Jl. Tuban - Bancar', 'Km 33 - 34', '', 'Ds. Margosuko', 'Kec. Bancar', 'Kab. Tuban', '-6.7943104', '111.8062258', 'TRUCK  S - 8913 - UJ                                                           X                                                                                                                              DUMP TRUCK                                       ', '', '', '1', 1, NULL, NULL),
(1439, 'tuban-bancar', '2019-12-14', '07:45:00', 'Jl. Tuban - Bancar', 'Km 30-31', '', 'Ds. Pabeyan', 'Kec. Tambakboyo', 'Kab. Tuban', '-6.802635', '111.838088', 'SPM  S - 3140 - HS                                              X                                                                                                                              SPM  S - 3488 - EH', '1', '', '1', 1, NULL, NULL),
(1440, 'tuban-bancar', '2019-12-14', '08:30:00', 'Jl. Tuban - Bancar', 'Km 37-38', '', 'Ds. Bancar', 'Kec. Bancar', 'Kab. Tuban', '-6.7828629', '111.7807628', 'SPM  S - 4657 - IP                                              X                                                                                                                              SPM  S - 4893 - FS', '', '', '3', 1, NULL, NULL),
(1441, 'tuban-bancar', '2019-12-14', '21:15:00', 'Jl. Tuban - Bancar', 'Km 10-11', '', 'Ds. Beji', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'TRUCK TRONTON                                        B - 9373 - UIO                                                                           X                                                                                                                ', '', '', '2', 1, NULL, NULL),
(1442, 'tuban-bancar', '2019-12-15', '06:30:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Margosuko', 'Kec. Bancar', 'Kab. Tuban', '-6.7943104', '111.8062258', 'SPM  S - 5736 - EN                                              X                                                                                                                              TRUCK (?)', '', '', '1', 1, NULL, NULL),
(1443, 'tuban-bancar', '2019-12-19', '15:30:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-7.003024', '112.1310928', 'SPM S - 4330 - FQ                                            X                                                                                                                              SPM S - 5706 - FI', '', '', '2', 1, NULL, NULL),
(1444, 'tuban-bancar', '2019-12-21', '15:30:00', 'Jl. Tuban - Bancar', '', '', 'Ds. Sumurgeneng', 'Kec. Jenu', 'Kab. Tuban', '-6.8316115', '112.0007301', 'BUS PO Sinar Mandiri                                             N - 7635 - UG                                         X                                                                                                                              TRUCK  (?', '', '', '1', 1, NULL, NULL),
(1445, 'tuban-bancar', '2019-12-30', '08:00:00', 'Jl. Tuban - Bancar', 'Km 39-40', '', 'Ds. Bogorejo', 'Kec. Bancar', 'Kab. Tuban', '-6.7786585', '111.7594185', 'SPM  S - 3118 - GD                                         X                                                                                                                              TRUCK (?)', '1', '', '', 1, NULL, NULL),
(1446, 'tuban-widang', '2018-12-23', '06:30:00', 'Jl. Tuban - Widang', 'Km 5-6', '', 'Ds. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9217176', '112.0911234', 'MINIBUS Honda Jazz                                                       W - 1542 - N                                                                            X                                                                           SPM  H - 4432 - AV', '', '', '2', 2, NULL, NULL),
(1447, 'tuban-widang', '2019-01-12', '12:30:00', 'Jl. Tuban - Widang', 'Km 23-24', 'Dsn. Temangkar', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0646183', '112.1592358', 'MICROBUS ELF (?)                                                                            X                                                                           SPM  S - 5404 - FQ', '1', '', '1', 2, NULL, NULL),
(1448, 'tuban-widang', '2019-01-16', '13:05:00', 'Jl. Tuban - Widang', 'Km 17-18', '', 'Ds. Mrutuk', 'Kec. Widang', 'Kab. Tuban', '-7.0259867', '112.1451756', 'SPM  S - 5987 - MO                                                                            X                                                                           TRUCK TRAILLER                                                                       ', '', '', '1', 2, NULL, NULL),
(1449, 'tuban-widang', '2019-01-15', '09:30:00', 'Jl. Tuban - Widang', 'Km 22-23', '', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0762932', '112.165604', 'SPM  S - 3654 - FG                                                                            X                                                                           SPM  S - 2536 - EZ', '', '', '1', 2, NULL, NULL),
(1450, 'tuban-widang', '2019-01-25', '10:00:00', 'Jl. Tuban - Widang', 'Km 15-16', '', 'Ds. Minohorejo', 'Kec. Widang', 'Kab. Tuban', '-6.9960847', '112.1243489', 'SPM  S - 6658 - GZ                                                                            X                                                                           TRUCK  (?)', '1', '', '1', 2, NULL, NULL),
(1451, 'tuban-widang', '2019-01-25', '12:45:00', 'Jl. Tuban - Widang', 'Km 3-4', 'Manunggal Selatan', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9132223', '112.0817829', 'SPM  S - 6356 - EF                                                                            X                                                                           SPM  S - 6771 - FZ', '', '', '1', 2, NULL, NULL),
(1452, 'tuban-widang', '2019-01-26', '19:30:00', 'Jl. Tuban - Widang', '', 'Dsn. Temangkar', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0646183', '112.1592358', 'MPP  (?)                                                                            X                                                                           SPM  S - 4299 - KS', '1', '', '', 2, NULL, NULL),
(1453, 'tuban-widang', '2019-02-10', '10:00:00', 'Jl. Tuban - Widang', 'Km 27-28', 'Dsn. Banjar', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0762932', '112.165604', 'SPM  S - 3847 - GV                                                           X                                                                     SPM  S - 2894 - JJ', '', '', '2', 2, NULL, NULL),
(1454, 'tuban-widang', '2019-02-10', '14:45:00', 'Jl. Tuban - Widang', 'Km 17-18', '', 'Ds. Minohorejo', 'Kec. Widang', 'Kab. Tuban', '-6.9960847', '112.1243489', 'PICK UP  G - 1690 - DR                                                                        X                                                                                      PICK UP  S - 9302 - C                                                     ', '', '', '2', 2, NULL, NULL),
(1455, 'tuban-widang', '2019-02-11', '22:30:00', 'Jl. Tuban - Widang', 'Km 13-14', '', 'Ds. Gesing', 'Kec. Semanding', 'Kab. Tuban', '-6.968545', '112.102363', 'PICK UP  H - 1674 - SN                                                           X                                                                     TRUCK TRONTON                                                                          L - 8030 - UV', '', '', '1', 2, NULL, NULL),
(1456, 'tuban-widang', '2019-02-16', '04:00:00', 'Jl. Tuban - Widang', '', 'Dsn. Kepet', 'Ds. Gesing', 'Kec. Semanding', 'Kab. Tuban', '-6.968545', '112.102363', 'SPM  S - 2415 - E                                                           X                                                                     DUMP TRUCK  L - 9257 - UX                                                                                    ', '', '', '1', 2, NULL, NULL),
(1457, 'tuban-widang', '2019-02-19', '20:45:00', 'Jl. Tuban - Widang', 'Km 1-2', 'Lingk. Widengan', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9201275', '112.0904807', 'SPM  TANPA TNKB                                                           X                                                                     SPM  S - 5925 - HN                                                                                             ', '', '', '3', 2, NULL, NULL),
(1458, 'tuban-widang', '2019-02-21', '07:45:00', 'Jl. Tuban - Widang', 'Km 35-36', 'Dsn. Temangkar', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0646183', '112.1592358', 'SPM  S - 5297 - FX                                                                               X                                                                                PEJALAN KAKI                                                          X      ', '', '1', '3', 2, NULL, NULL),
(1459, 'tuban-widang', '2019-03-03', '19:30:00', 'Jl. Tuban - Widang', 'Km 9-10', 'SP3 Gemanting', 'Ds. Tunah', 'Kec. Semanding', 'Kab. Tuban', '-6.948253', '112.1008952', 'MPP Elf  (?)                                                         X                                                                     SPM  S - 2922 - HW', '', '', '2', 2, NULL, NULL),
(1460, 'tuban-widang', '2019-03-07', '13:30:00', 'Jl. Tuban - Widang', 'Km 21-22', '', 'Ds. Compreng', 'Kec. Widang', 'Kab. Tuban', '-7.0374857', '112.1457697', 'BUS PO Primus  S - 7092 - UW                                                           X                                                                     TRUCK  N - 8825 - US', '', '', '6', 2, NULL, NULL),
(1461, 'tuban-widang', '2019-03-07', '18:30:00', 'Jl. Tuban - Widang', 'Km 13-14', '', 'Ds. Minohorejo', 'Kec. Widang', 'Kab. Tuban', '-6.9960847', '112.1243489', 'SPM  S - 2108 - GU                                                           X                                                                     DUMP TRUCK TRONTON                                             L - 9151 - UX', '1', '', '', 2, NULL, NULL),
(1462, 'tuban-widang', '2019-03-16', '13:30:00', 'Jl. Tuban - Widang', 'Km 6-7', '', 'Ds. Tegalbang', 'Kec. Palang', 'Kab. Tuban', '-6.9302317', '112.0943264', 'SPM  S - 5818 - GJ                                                           X                                                                     TRUCK  W - 9389 - NJ', '', '', '1', 2, NULL, NULL),
(1463, 'tuban-widang', '2019-03-17', '11:30:00', 'Jl. Tuban - Widang', 'Km 12-13', '', 'Ds. Gesing', 'Kec. Semanding', 'Kab. Tuban', '-6.968545', '112.102363', 'SPM  (?)                                                           X                                                                     SPM  S - 2241 - GS', '', '', '1', 2, NULL, NULL),
(1464, 'tuban-widang', '2019-03-18', '08:00:00', 'Jl. Tuban - Widang', 'Km 2-3', 'Lingk. Widengan', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9201275', '112.0904807', 'TRUCK (?)                                                           X                                                                     SPM  S - 3847 - EV', '', '', '1', 2, NULL, NULL),
(1465, 'tuban-widang', '2019-03-20', '03:30:00', 'Jl. Tuban - Widang', '', '', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0762932', '112.165604', 'BUS  AA - 1503 - DA                                                           X                                                                     PEJALAN KAKI', '', '', '1', 2, NULL, NULL),
(1466, 'tuban-widang', '2019-03-22', '17:00:00', 'Jl. Tuban - Widang', 'Km 16-17', '', 'Ds. Minohorejo', 'Kec. Widang', 'Kab. Tuban', '-6.9960847', '112.1243489', 'SPM  N - 3763 - WC                                                           X                                                                     SPM  AD - 2689 - PA', '', '', '2', 2, NULL, NULL),
(1467, 'tuban-widang', '2019-03-26', '16:45:00', 'Jl. Tuban - Widang', 'Km 7-8', '', 'Ds. Tunah', 'Kec. Semanding', 'Kab. Tuban', '-6.948253', '112.1008952', 'SPM  S - 6386 - EH                                                           X                                                                     PICK UP  K - 1946 - QS', '1', '', '1', 2, NULL, NULL),
(1468, 'tuban-widang', '2019-04-01', '03:30:00', 'Jl. Tuban - Widang', 'Km 28-29', '', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0762932', '112.165604', 'SPM  S - 5277 - GV                                                           X                                                                     TRUCK  (?)', '', '', '1', 2, NULL, NULL),
(1469, 'tuban-widang', '2019-04-08', '16:15:00', 'Jl. Tuban - Widang', '', 'Dsn. Kuwu', 'Ds. Penidon', 'Kec. Plumpang', 'Kab. Tuban', '-7.048355', '112.152198', 'MP (?)                                                           X                                                                     SPM  S - 3161 - AF', '', '', '1', 2, NULL, NULL),
(1470, 'tuban-widang', '2019-04-18', '18:00:00', 'Jl. Tuban - Widang', 'Km 24-25', 'Dsn. Temangkar', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0646183', '112.1592358', 'SPM  S - 3880 - D                                                           X                                                                     TRUCK GANDENGAN                                                                           H - 1619 - QS', '1', '', '', 2, NULL, NULL),
(1471, 'tuban-widang', '2019-04-18', '21:00:00', 'Jl. Tuban - Widang', 'Km 15-16', 'Dsn. Pakah', 'Ds. Gesing', 'Kec. Semanding', 'Kab. Tuban', '-6.9753061', '112.107648', 'SPM  S - 6689 - ED                                                           X                                                                     TRUCK BOX  B - 9167 - UEU', '1', '', '', 2, NULL, NULL),
(1472, 'tuban-widang', '2019-04-21', '13:15:00', 'Jl. Tuban - Widang', 'Km 28-29', 'Pintu Masuk SPBU AKR', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.084363', '112.170802', 'TRUCK  DK - 9624 - WF                                                           X                                                                     SPM  S - 5753 - EJ', '', '', '2', 2, NULL, NULL),
(1473, 'tuban-widang', '2019-04-23', '06:30:00', 'Jl. Tuban - Widang', 'Km 21-22', 'Dsn. Kuwu', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.056601', '112.156781', 'SPM  S - 4779 - FL                                                           X                                                                     PEJALAN KAKI', '', '', '2', 2, NULL, NULL),
(1474, 'tuban-widang', '2019-04-26', '19:15:00', 'Jl. Tuban - Widang', 'Km 8-9', '', 'Ds. Gesing', 'Kec. Semanding', 'Kab. Tuban', '-6.968545', '112.102363', 'SPM  S - 3849 - ET                                                           X                                                                     TRUCK TRONTON                                                                                   L - 8820 - U', '1', '', '', 2, NULL, NULL),
(1475, 'tuban-widang', '2019-05-05', '16:45:00', 'Jl. Tuban - Widang', 'Km 4-5', 'Lingk. Widengan', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9201275', '112.0904807', 'SPM  S - 2747 - GZ                                                           X                                                                     TRUCK GANDENG                                                                         N - 9926 - UA', '1', '', '', 2, NULL, NULL),
(1476, 'tuban-widang', '2019-05-07', '05:00:00', 'Jl. Tuban - Widang', 'Km 9-10', 'Dsn. Kepet', 'Ds. Tunah', 'Kec. Semanding', 'Kab. Tuban', '-6.948253', '112.1008952', 'TRUCK TRONTON                                                 D - 9533 - AF                                                               X                                                           TRUCK TRONTON                                            ', '1', '', '1', 2, NULL, NULL),
(1477, 'tuban-widang', '2019-05-13', '07:45:00', 'Jl. Tuban - Widang', 'Km 5-6', '', 'Ds. Tegalbang', 'Kec. Palang', 'Kab. Tuban', '-6.9302317', '112.0943264', 'MPP Avanza  S - 780 - HF                                                           X                                                                     SPM  S - 2176 - FL', '', '', '2', 2, NULL, NULL),
(1478, 'tuban-widang', '2019-05-14', '11:15:00', 'Jl. Tuban - Widang', 'Km 20-21', '', 'Ds. Compreng', 'Kec. Widang', 'Kab. Tuban', '-7.0374857', '112.1457697', 'SPM  TANPA TNKB                                                           X                                                                     SPM  (?)', '1', '', '1', 2, NULL, NULL),
(1479, 'tuban-widang', '2019-05-25', '07:00:00', 'Jl. Tuban - Widang', 'Km 13-14', '', 'Ds. Minohorejo', 'Kec. Widang', 'Kab. Tuban', '-6.9960847', '112.1243489', 'SPM  S - 2506 - FI                                                           X                                                                     BUS PO. Pahala Kencana                                                                                      ', '', '', '1', 2, NULL, NULL),
(1480, 'tuban-widang', '2019-05-29', '22:30:00', 'Jl. Tuban - Widang', 'Km 24-25', '', 'Dsn. Temangkar', 'Ds./Kec. Widang', 'Kab. Tuban', '-7.0646183', '112.1592358', 'SPM  N - 2839 - HP                                                           X                                                                     PEJALAN KAKI', '', '1', '1', 2, NULL, NULL),
(1481, 'tuban-widang', '2019-05-29', '09:00:00', 'Jl. Tuban - Widang', '', '', 'Ds. Gesing', 'Kec. Semanding', 'Kab. Tuban', '-6.968545', '112.102363', 'TRUCK (?)                                                           X                                                                     PEJALAN KAKI', '', '', '1', 2, NULL, NULL),
(1482, 'tuban-widang', '2019-06-17', '07:15:00', 'Jl. Tuban - Widang', 'Km 29-30', '', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0762932', '112.165604', 'SPM  S - 5169 - EQ                                                           X                                                                     MICROBUS  S - 7283 - A', '1', '', '', 2, NULL, NULL),
(1483, 'tuban-widang', '2019-06-19', '06:30:00', 'Jl. Tuban - Widang', '', '', 'Ds. Minohorejo (Jembatan Timbang)', 'Kec. Widang', 'Kab. Tuban', '-6.998128', '112.126354', 'TRUCK  S - 9258 - UJ                                                           X                                                                     SPM  S - 2864 - LU', '', '', '1', 2, NULL, NULL),
(1484, 'tuban-widang', '2019-06-19', '17:00:00', 'Jl. Tuban - Widang', '', '', 'Ds. Gesing', 'Kec. Semanding', 'Kab. Tuban', '-6.968545', '112.102363', 'KEND RODA 4 (?)                                                           X                                                                     SPM  S - 2119 - IG', '', '', '1', 2, NULL, NULL),
(1485, 'tuban-widang', '2019-06-21', '11:00:00', 'Jl. Tuban - Widang', '', 'Dsn. Kepet', 'Ds. Tunah', 'Kec. Semanding', 'Kab. Tuban', '-6.948253', '112.1008952', 'SPM  S - 6656 - IF                                                           X                                                                     PEJALAN KAKI', '1', '', '1', 2, NULL, NULL),
(1486, 'tuban-widang', '2019-06-23', '08:00:00', 'Jl. Tuban - Widang', 'Km 26-27', 'Dsn. Temangkar', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0646183', '112.1592358', 'SPM  S - 3529 - GO                                                           X                                                                     TRUCK  L - 8842 - UW', '', '', '1', 2, NULL, NULL),
(1487, 'tuban-widang', '2019-06-26', '13:00:00', 'Jl. Tuban - Widang', 'Km 11-12', 'Dsn. Kepet', 'Ds. Tunah', 'Kec. Semanding', 'Kab. Tuban', '-6.948253', '112.1008952', 'MPP  (?)                                                           X                                                                     SPM  S - 6223 - GN', '', '', '2', 2, NULL, NULL),
(1488, 'tuban-widang', '2019-07-03', '07:00:00', 'Jl. Tuban - Widang', 'Km 4-5', 'Lingk. Widengan', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9201275', '112.0904807', 'SPM  S - 6334 - GD                                                           X                                                                     PEJALAN KAKI', '', '', '1', 2, NULL, NULL),
(1489, 'tuban-widang', '2019-07-05', '11:00:00', 'Jl. Tuban - Widang', 'Km 21-22', '', 'Ds. Compreng', 'Kec. Widang', 'Kab. Tuban', '-7.0374857', '112.1457697', 'SPM  S - 4294 - AR                                                           X                                                                     SPM  L - 6172 - VI', '', '', '1', 2, NULL, NULL),
(1490, 'tuban-widang', '2019-07-12', '15:30:00', 'Jl. Tuban - Widang', 'Km 14-15', '', 'Ds. Gesing', 'Kec. Semanding', 'Kab. Tuban', '-6.968545', '112.102363', 'TRUCK  L - 8117 - CH                                                           X                                                                     TRUCK TRONTON                                                                                  G - 1592 - ', '1', '', '', 2, NULL, NULL),
(1491, 'tuban-widang', '2019-07-14', '14:00:00', 'Jl. Tuban - Widang', 'Km 24-25', 'Dsn. Kuwu', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.060291', '112.158701', 'MPP (?)                                                           X                                                                     SPM  W - 2254 - MP', '', '', '1', 2, NULL, NULL),
(1492, 'tuban-widang', '2019-07-16', '04:00:00', 'Jl. Tuban - Widang', '', '', 'Ds. Minohorejo', 'Kec. Widang', 'Kab. Tuban', '-6.9960847', '112.1243489', 'SPM (?)                                                           X                                                                     SPM  S - 3202 - HN', '', '', '1', 2, NULL, NULL),
(1493, 'tuban-widang', '2019-07-17', '06:00:00', 'Jl. Tuban - Widang', 'Km 3-4', 'Dsn. Widengan', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9201275', '112.0904807', 'SPM  S - 4715 - GT                                                           X                                                                       SPM  S - 3790 - EF', '', '', '2', 2, NULL, NULL),
(1494, 'tuban-widang', '2019-07-17', '18:30:00', 'Jl. Tuban - Widang', 'Km 17-18', '', 'Ds. Compreng', 'Kec. Widang', 'Kab. Tuban', '-7.0374857', '112.1457697', 'SPM  S - 3949 - QT                                                           X                                                                       TRUCK GANDENG                                                                                       H - 10', '', '', '1', 2, NULL, NULL),
(1495, 'tuban-widang', '2019-07-18', '07:30:00', 'Jl. Tuban - Widang', 'Km 22-23', '', 'Ds. Compreng', 'Kec. Widang', 'Kab. Tuban', '-7.0374857', '112.1457697', 'TRUCK  M - 9072 - F                                                           X                                                                       MPP Brio  L - 1836 - K', '', '', '2', 2, NULL, NULL),
(1496, 'tuban-widang', '2019-07-19', '13:00:00', 'Jl. Tuban - Widang', '', '', 'Ds. Mrutuk', 'Kec. Widang', 'Kab. Tuban', '-7.0259867', '112.1451756', 'TRUCK  S - 9305 - UU                                                           X                                                                     TRUCK TRAILLER  L - 9765 - UZ                                                                        X    ', '', '', '1', 2, NULL, NULL),
(1497, 'tuban-widang', '2019-08-01', '01:45:00', 'Jl. Tuban - Widang', 'Km 9-10', 'Dsn. Kepet', 'Ds. Tunah', 'Kec. Semanding', 'Kab. Tuban', '-6.948253', '112.1008952', 'TRUCK TRONTON                                                                                L - 8928 - US                                                           X                                                                     PICK UP  K - 1820 - ', '', '', '1', 2, NULL, NULL),
(1498, 'tuban-widang', '2019-08-03', '21:00:00', 'Jl. Tuban - Widang', 'Km 18-19', '', 'Ds. Minohorejo', 'Kec. Widang', 'Kab. Tuban', '-6.9960847', '112.1243489', 'SPM  S - 6499 - ET                                                           X                                                                     TRUCK  AG - 9951 - UV                                                                          ', '1', '', '', 2, NULL, NULL),
(1499, 'tuban-widang', '2019-08-05', '23:30:00', 'Jl. Tuban - Widang', 'Km 21-22', '', 'Ds. Mrutuk', 'Kec. Widang', 'Kab. Tuban', '-7.0259867', '112.1451756', 'TRUCK  (?)                                                           X                                                                     SPM  S - 4020 - FV                                                                          ', '1', '', '', 2, NULL, NULL),
(1500, 'tuban-widang', '2019-08-09', '08:00:00', 'Jl. Tuban - Widang', '', 'SP3 Tasikmadu', 'Kel. Tasikmadu', 'Kec. Palang', 'Kab. Tuban', '-6.948253', '112.1008952', 'SPM Dinas Polri  X-3421-59                                                          X                                                                     MPP BRV  S - 1129 - HT                                                                          ', '', '', '1', 2, NULL, NULL),
(1501, 'tuban-widang', '2019-08-18', '16:00:00', 'Jl. Tuban - Widang', '', 'SP3 Pakah Dsn. Pakah', 'Ds. Gesing', 'Kec. Semanding', 'Kab. Tuban', '-6.981828', '112.113747', 'BUS PO. Puspa Indah                                                                   S - 7067 - UW                                                           X                                                                     PEJALAN KAKI (Penumpang Ter', '', '', '1', 2, NULL, NULL),
(1502, 'tuban-widang', '2019-08-19', '05:30:00', 'Jl. Tuban - Widang', 'Km 23-24', '', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0762932', '112.165604', 'TRUCK  S - 8251 - UR                                                           X                                                                     MPP Avanza  S - 1750 - HL                                                                                 ', '', '', '1', 2, NULL, NULL),
(1503, 'tuban-widang', '2019-08-21', '03:00:00', 'Jl. Tuban - Widang', 'Km 28-29', '', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0762932', '112.165604', 'TRUCK TRONTON                                                                                             N - 8424 - JZ                                                           X                                                                     TRUCK T', '', '', '1', 2, NULL, NULL),
(1504, 'tuban-widang', '2019-08-18', '17:00:00', 'Jl. Tuban - Widang', 'Km 29-30', '', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0762932', '112.165604', 'SPM  L - 2134 - KK                                                           X                                                                     PEJALAN KAKI                                                                          ', '', '', '1', 2, NULL, NULL),
(1505, 'tuban-widang', '2019-08-30', '00:30:00', 'Jl. Tuban - Widang', 'Km 9-10', 'Dsn. Kepet', 'Ds. Tunah', 'Kec. Semanding', 'Kab. Tuban', '-6.948253', '112.1008952', 'TRUCK  (?)                                                           X                                                                     TRUCK TRAILLER                                                                                  L - 8896 - UH       ', '', '', '1', 2, NULL, NULL),
(1506, 'tuban-widang', '2019-08-31', '22:00:00', 'Jl. Tuban - Widang', 'Km 15-16', '', 'Ds. Minohorejo', 'Kec. Widang', 'Kab. Tuban', '-6.9960847', '112.1243489', 'SPM  (?)                                                           X                                                                     PEJALAN KAKI                                                                          ', '', '', '1', 2, NULL, NULL),
(1507, 'tuban-widang', '2019-09-02', '10:00:00', 'Jl. Tuban - Widang', 'Km 24-25', '', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0762932', '112.165604', 'PICK UP  H - 1662 - YA                                                           X                                                                                                                              SPM  S - 2546 - E', '', '', '1', 2, NULL, NULL),
(1508, 'tuban-widang', '2019-09-05', '05:00:00', 'Jl. Tuban - Widang', 'Km 5-6', '', 'Ds. Tegalbang', 'Kec. Palang', 'Kab. Tuban', '-6.9302317', '112.0943264', 'SPM  S - 5504 - HI                                                           X                                                                                                                              PEJALAN KAKI', '1', '', '2', 2, NULL, NULL),
(1509, 'tuban-widang', '2019-09-18', '14:45:00', 'Jl. Tuban - Widang', 'Km 6-7', '', 'Ds. Tunah', 'Kec. Semanding', 'Kab. Tuban', '-6.948253', '112.1008952', 'SPM  S - 3809 - GL                                                           X                                                                                                                              SPM  S - 3063 - FX', '', '', '2', 2, NULL, NULL),
(1510, 'tuban-widang', '2019-09-18', '22:30:00', 'Jl. Tuban - Widang', 'Km 16-17', '', 'Ds. Minohorejo', 'Kec. Widang', 'Kab. Tuban', '-6.9960847', '112.1243489', 'SPM  L - 3420 - LI                                                           X                                                                                                                              TRUCK  S - 8820 - RB', '', '', '1', 2, NULL, NULL),
(1511, 'tuban-widang', '2019-09-06', '01:00:00', 'Jl. Tuban – Widang', 'Km 25-26', '', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0762932', '112.165604', 'TRUCK  H - 1509 - QS                                                           X                                                                                                                              TRUCK (?)', '', '', '1', 2, NULL, NULL),
(1512, 'tuban-widang', '2019-09-29', '07:30:00', 'Jl. Tuban – Widang', 'Km 25-26', 'Dsn. Temangkar', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0646183', '112.1592358', 'SPM  S - 4261 - GG                                                           X                                                                                                                              BUS PO. Jaya Utama Indo                            ', '', '', '1', 2, NULL, NULL),
(1513, 'tuban-widang', '2019-10-03', '16:00:00', 'Jl. Tuban – Widang', 'Km 27-28', '', 'Ds. Banjar', 'Kec. Widang', 'Kab. Tuban', '-7.049834', '112.153131', 'TRUCK (?)                                                           X                                                                                                                              SPM  S - 4325 - EY', '', '', '1', 2, NULL, NULL),
(1514, 'tuban-widang', '2019-10-08', '08:00:00', 'Jl. Tuban – Widang', 'Km 20-21', 'Dsn. Kuwu', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.05301', '112.154885', 'SPM  S - 5020 - GT                                                           X                                                                                                                              SPM  S - 2593 - HX', '', '', '2', 2, NULL, NULL),
(1515, 'tuban-widang', '2019-10-12', '06:00:00', 'Jl. Tuban – Widnag', 'Km 25-26', 'Dsn. Temangkar', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0646183', '112.1592358', 'SPM  S - 5037 - FO                                                           X                                                                                                                              SPM  (?)', '', '', '1', 2, NULL, NULL),
(1516, 'tuban-widang', '2019-11-06', '21:30:00', 'Jl. Tuban – Widang', '', 'Dsn. Pakis', 'Ds. Penidon', 'Kec. Plumpang', 'Kab. Tuban', '-7.016781', '112.143951', 'DUMP TRUCK  S - 9789 - HH                                                           X                                                                                                                              PEJALAN KAKI', '', '', '1', 2, NULL, NULL),
(1517, 'tuban-widang', '2019-11-20', '07:30:00', 'Jl. Tuban – Widang', '', '', 'Ds. Minohorejo', 'Kec. Widang', 'Kab. Tuban', '-6.9960847', '112.1243489', 'TRUCK TANDUM  W - 8665 - UB                                                           X                                                                                                                              SPM  S - 3918 - IE', '', '', '1', 2, NULL, NULL);
INSERT INTO `kecelakaans` (`id`, `slug`, `tanggal`, `jam`, `nama_jalan`, `km`, `tkp_dusun`, `desa`, `kecamatan`, `kabupaten`, `latitude`, `longitude`, `kendaraan`, `korban_md`, `korban_lb`, `korban_lr`, `jalans_id`, `created_at`, `updated_at`) VALUES
(1518, 'tuban-widang', '2019-11-27', '17:30:00', 'Jl. Tuban – Widang', '', 'Dsn. Temangkar', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0646183', '112.1592358', 'SPM  W - 6603 - VQ                                                           X                                                                                                                              SPM  S - 2048 - FX', '', '', '2', 2, NULL, NULL),
(1519, 'tuban-widang', '2019-11-30', '21:00:00', 'Jl. Tuban – Widang', 'Km 25-26', 'Dsn. Temangkar', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0646183', '112.1592358', 'TRUCK  K - 1511 - UC                                                           X                                                                                                                              SPM  S - 4260 - IP', '', '', '1', 2, NULL, NULL),
(1520, 'tuban-widang', '2019-12-03', '10:00:00', 'Jl. Tuban – Widang', 'Km 14-15', '', 'Ds. Minohorejo', 'Kec. Widang', 'Kab. Tuban', '-6.9960847', '112.1243489', 'DUMP TRUCK  L - 9328 - VZ                                                           X                                                                                                                              SPM  S - 4644 - HB', '', '', '1', 2, NULL, NULL),
(1521, 'tuban-widang', '2019-12-05', '07:30:00', 'Jl. Tuban – Widang', '', '', 'Ds. Compreng', 'Kec. Widang', 'Kab. Tuban', '-7.0374857', '112.1457697', 'TRUCK  P - 9035 - ZQ                                                           X                                                                                                                              SPM  S - 5694 - GY', '', '', '1', 2, NULL, NULL),
(1522, 'tuban-widang', '2019-12-06', '22:30:00', 'Jl. Tuban – Widang', '', '', 'Ds. Tunah', 'Kec. Semanding', 'Kab. Tuban', '-6.948253', '112.1008952', 'TRUCK TRONTON                                                                                  W - 9599 - US                                                           X                                                                                       ', '', '', '2', 2, NULL, NULL),
(1523, 'tuban-widang', '2019-12-20', '13:30:00', 'Jl. Tuban – Widang', 'Km 25-26', '', 'Ds. Kuwu', 'Kec. Widang', 'Kab. Tuban', '-7.061557', '112.159141', 'BUS PO Sinar Mandiri                                                   N - 7426 - UG                                         X                                                                                                                              DUM', '1', '', '6', 2, NULL, NULL),
(1524, 'tuban-widang', '2019-12-23', '22:30:00', 'Jl. Tuban – Widang', 'Km 28-29', '', 'Ds. Widang', 'Kec. Widang', 'Kab. Tuban', '-7.0762932', '112.165604', 'TRUCK TRAILER  N - 8384 - UR                                         X                                                                                                                              SPM  S - 5270 - JAV', '', '', '1', 2, NULL, NULL),
(1525, 'tuban-widang', '2019-12-21', '13:00:00', 'Jl. Tuban – Widang', '', '', 'Ds. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9217176', '112.0911234', 'SPM  (?)                                         X                                                                                                                              PEJALAN KAKI', '', '', '1', 2, NULL, NULL),
(1526, 'tuban-widang', '2019-11-23', '19:30:00', 'Jl. Tuban – Widang', 'Km 21-22', '', 'Ds. Compreng', 'Kec. Widang', 'Kab. Tuban', '-7.0374857', '112.1457697', 'PICK UP Hilux  AE - 8199 - BC                                                           X                                                                                                                              PICK UP  S - 9221 - AB', '', '', '1', 2, NULL, NULL),
(1527, 'tuban-palang', '2018-12-25', '05:45:00', 'Jl. Tuban - Palang', '', '', 'Ds. Panyuran', 'Kec. Palang', 'Kab. Tuban', '-6.896724', '112.087151', 'BUS PO. Cumi-Cumi                                                                S - 7364 - UE                                                                            X                                                                           SPM  S - ', '', '', '2', 3, NULL, NULL),
(1528, 'tuban-palang', '2018-12-25', '15:30:00', 'Jl. Tuban - Palang', '', 'SP3', 'Ds. Glodok', 'Kec. Palang', 'Kab. Tuban', '-6.900619', '112.150317', 'SPM  S - 5612 - EJ                                                                            X                                                                           SPM  S - 3002 - GF', '', '', '1', 3, NULL, NULL),
(1529, 'tuban-palang', '2019-01-05', '17:00:00', 'Jl. Tuban - Palang', 'Km 6-7', '', 'Ds. Gesikharjo', 'Kec. Palang', 'Kab. Tuban', '-6.902668', '112.12479', 'SPM  S - 3986 - FR                                                                            X                                                                           SPM  (?)', '', '', '1', 3, NULL, NULL),
(1530, 'tuban-palang', '2018-12-28', '08:30:00', 'Jl. Tuban - Palang', 'Km 1-2', '', 'Kel. Panyuran', 'Kec. Palang', 'Kab. Tuban', '-6.896724', '112.087151', 'SPM  S - 6386 - GE                                                                            X                                                                           SPM  S - 2638 - HU', '', '', '2', 3, NULL, NULL),
(1531, 'tuban-palang', '2019-01-11', '18:00:00', 'Jl. Tuban - Palang', '', '', 'Ds. Karangagung', 'Kec. Palang', 'Kab. Tuban', '-6.899872', '112.163979', 'MPP Innova  F - 1044 - IT                                                                            X                                                                           BENTOR Tanpa TNKB', '', '', '4', 3, NULL, NULL),
(1532, 'tuban-palang', '2019-01-20', '15:00:00', 'Jl. Tuban - Palang', 'Km 7-8', '', 'Ds. Gesikharjo', 'Kec. Palang', 'Kab. Tuban', '-6.902558', '112.131121', 'SPM  S - 5877 - MF                                                                            X                                                                           SPM  S - 2063 - LR', '', '', '2', 3, NULL, NULL),
(1533, 'tuban-palang', '2019-01-26', '19:30:00', 'Jl. Tuban - Palang', '', '', 'Kel. Panyuran', 'Kec. Palang', 'Kab. Tuban', '-6.896724', '112.087151', 'SPM  (?)                                                                            X                                                                           SPM  S - 5740 - GU', '', '', '1', 3, NULL, NULL),
(1534, 'tuban-palang', '2019-02-05', '14:00:00', 'Jl. Tuban - Palang', '', '', 'Ds. Gesikharjo', 'Kec. Palang', 'Kab. Tuban', '-6.90233', '112.13363', 'SPM  S - 3470 - GR                                                           X                                                                     SPM  S - 6307 - FZ', '', '', '1', 3, NULL, NULL),
(1535, 'tuban-palang', '2019-02-08', '20:00:00', 'Jl. Tuban - Palang', 'Km 5-6', '', 'Ds. Kradenan', 'Kec. Palang', 'Kab. Tuban', '-6.902173', '112.121085', 'SPM  S - 3629 - HX                                                           X                                                                     TRUCK TRONTON                                                                                  B - 9286 - UY', '', '1', '', 3, NULL, NULL),
(1536, 'tuban-palang', '2019-02-14', '12:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Kradenan', 'Kec. Palang', 'Kab. Tuban', '-6.899053', '112.113744', 'SPM  S - 5861 - EX                                                           X                                                                     SPM  S - 3717 - MP                                                                                          ', '', '', '1', 3, NULL, NULL),
(1537, 'tuban-palang', '2019-02-22', '07:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Tasikmadu', 'Kec. Palang', 'Kab. Tuban', '-6.896153', '112.095378', 'SPM  S - 2916 - GN                                                           X                                                                     SPM  S - 5276 - HT                                                                                          ', '1', '', '1', 3, NULL, NULL),
(1538, 'tuban-palang', '2019-03-02', '02:30:00', 'Jl. Tuban - Palang', 'Km 5-6', '', 'Ds. Kradenan', 'Kec. Palang', 'Kab. Tuban', '-6.902173', '112.121085', 'MPP  S - 669 - HM                                                           X                                                                     DUMP TRUCK  L - 9078 - UV', '', '', '1', 3, NULL, NULL),
(1539, 'tuban-palang', '2019-03-16', '19:00:00', 'Jl. Tuban - Palang', '', '', 'Ds. Panyuran', 'Kec. Palang', 'Kab. Tuban', '-6.896724', '112.087151', 'SPM  TANPA TNKB                                                           X                                                                     SPM  S - 3752 - EF', '', '', '1', 3, NULL, NULL),
(1540, 'tuban-palang', '2019-03-19', '17:00:00', 'Jl. Tuban - Palang', 'Km 5-6', '', 'Ds. Kradenan', 'Kec. Palang', 'Kab. Tuban', '-6.902173', '112.121085', 'SPM  S - 2021 - GI                                                           X                                                                     SPM  S - 3538 - GO', '', '', '1', 3, NULL, NULL),
(1541, 'tuban-palang', '2019-03-17', '01:15:00', 'Jl. Tuban - Palang', 'Km 3-4', '', 'Kel. Panyuran', 'Kec. Palang', 'Kab. Tuban', '-6.896724', '112.087151', 'SPM  S - 5358 - HT                                                           X                                                                     SPM  S - 5337 - FO                                                                            X             ', '1', '', '2', 3, NULL, NULL),
(1542, 'tuban-palang', '2019-03-23', '15:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Gesikharjo', 'Kec. Palang', 'Kab. Tuban', '-6.90233', '112.13363', 'MPP  S - 731 - HR                                                           X                                                                     SPM  S - 4667 - MO', '', '', '1', 3, NULL, NULL),
(1543, 'tuban-palang', '2019-03-23', '20:00:00', 'Jl. Tuban - Palang', '', '', 'Ds. Tasikmadu', 'Kec. Palang', 'Kab. Tuban', '-6.896153', '112.095378', 'SPM  (?)                                                          X                                                                     SPM  S - 6014 - FR', '', '', '1', 3, NULL, NULL),
(1544, 'tuban-palang', '2019-03-29', '18:00:00', 'Jl. Tuban - Palang', '', '', 'Kel. Panyuran', 'Kec. Palang', 'Kab. Tuban', '-6.896724', '112.087151', 'SPM  S - 6223 - GZ                                                           X                                                                     SPM  S - 6845 - HR', '', '', '2', 3, NULL, NULL),
(1545, 'tuban-palang', '2019-03-31', '09:00:00', 'Jl. Tuban - Palang', '', '', 'Ds. Palang', 'Kec. Palang', 'Kab. Tuban', '-6.902063', '112.143971', 'SPM  N - 3154 - KA                                                           X                                                                     BENTOR  L - 2506 - GF', '', '', '2', 3, NULL, NULL),
(1546, 'tuban-palang', '2019-04-09', '16:00:00', 'Jl. Tuban - Palang', 'Km 9-10', '', 'Ds. Gesikharjo', 'Kec. Palang', 'Kab. Tuban', '-6.902201', '112.136491', 'SPM  S - 6572 - LO                                                           X                                                                     PEJALAN KAKI', '', '', '1', 3, NULL, NULL),
(1547, 'tuban-palang', '2019-04-11', '15:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Kradenan', 'Kec. Palang', 'Kab. Tuban', '-6.899053', '112.113744', 'SPM  S - 2975 - IF                                                           X                                                                     SPM  K - 4444 - LY', '', '', '1', 3, NULL, NULL),
(1548, 'tuban-palang', '2019-04-18', '08:30:00', 'Jl. Tuban - Palang', 'Km 10-11', '', 'Ds. Palang', 'Kec. Palang', 'Kab. Tuban', '-6.902177', '112.142427', 'SPM  (?)                                                           X                                                                     PEJALAN KAKI', '', '', '1', 3, NULL, NULL),
(1549, 'tuban-palang', '2019-05-10', '06:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Gesikharjo', 'Kec. Palang', 'Kab. Tuban', '-6.90233', '112.13363', 'SPM  S - 5462 - MO                                                           X                                                                     SPM  S - 5578 - FM', '', '', '2', 3, NULL, NULL),
(1550, 'tuban-palang', '2019-05-03', '14:00:00', 'Jl. Tuban - Palang', '', '', 'Ds. Palang', 'Kec. Palang', 'Kab. Tuban', '-6.902063', '112.143971', 'SPM  S - 4118 - EU                                                           X                                                                     PEJALAN KAKI', '', '', '1', 3, NULL, NULL),
(1551, 'tuban-palang', '2019-05-14', '18:30:00', 'Jl. Tuban - Palang', '', 'Dsn. Klamber', 'Ds. Tasikmadu', 'Kec. Palang', 'Kab. Tuban', '-6.896406', '112.101435', 'SPM  S - 4059 - FR                                                           X                                                                     MPP Innova  S - 1856 - HG', '1', '', '1', 3, NULL, NULL),
(1552, 'tuban-palang', '2019-05-23', '16:00:00', 'Jl. Tuban - Palang', '', '', 'Ds. Glodog', 'Kec. Palang', 'Kab. Tuban', '-6.900194', '112.151812', 'SPM  S - 2478 - KS                                                           X                                                                     MPP Terios  L - 1124 - QX', '', '', '1', 3, NULL, NULL),
(1553, 'tuban-palang', '2019-05-23', '15:00:00', 'Jl. Tuban - Palang', '', '', 'Ds. Glodog', 'Kec. Palang', 'Kab. Tuban', '-6.900194', '112.151812', 'MPP (?)                                                           X                                                                     SPM  S - 4045 - FM', '', '', '1', 3, NULL, NULL),
(1554, 'tuban-palang', '2019-06-04', '20:15:00', 'Jl. Tuban - Palang', '', '', 'Ds. Gesikharjo', 'Kec. Palang', 'Kab. Tuban', '-6.90233', '112.13363', 'SPM  S - 5810 - EV                                                           X                                                                     SPM  S - 2325 - FW', '1', '', '2', 3, NULL, NULL),
(1555, 'tuban-palang', '2019-06-06', '09:00:00', 'Jl. Tuban - Palang', '', 'SP3 Glodok', 'Ds. Glodok', 'Kec. Palang', 'Kab. Tuban', '-6.900619', '112.150317', 'SPM  S - 2372 - AD                                                           X                                                                     SPM  W - 4857 - BF', '', '', '2', 3, NULL, NULL),
(1556, 'tuban-palang', '2019-06-04', '22:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Panyuran', 'Kec. Palang', 'Kab. Tuban', '-6.896724', '112.087151', 'SPM  S - 2067 - HT                                                           X                                                                     SPM  S - 3551 - HE                                                                        X                 ', '', '1', '1', 3, NULL, NULL),
(1557, 'tuban-palang', '2019-07-02', '15:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Palang', 'Kec. Palang', 'Kab. Tuban', '-6.902063', '112.143971', 'TRUCK  (?)                                                           X                                                                     SPM Roda 3  H - 5637 - OW', '', '', '1', 3, NULL, NULL),
(1558, 'tuban-palang', '2019-07-15', '16:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Panyuran', 'Kec. Palang', 'Kab. Tuban', '-6.896724', '112.087151', 'SPM  S - 5458 - GV                                                           X                                                                     SPM (?)', '', '', '1', 3, NULL, NULL),
(1559, 'tuban-palang', '2019-07-17', '18:00:00', 'Jl. Tuban - Palang', 'Km 7-8', '', 'Ds. Gesikharjo', 'Kec. Palang', 'Kab. Tuban', '-6.902558', '112.131121', 'TRUCK (?)                                                           X                                                                     SPM  S - 4563 - KW', '', '', '2', 3, NULL, NULL),
(1560, 'tuban-palang', '2019-07-31', '04:45:00', 'Jl. Tuban - Palang', '', '', 'Ds. Glodog', 'Kec. Palang', 'Kab. Tuban', '-6.900194', '112.151812', 'SPM  S - 5489 - EU                                                           X                                                                       PEJALAN KAKI', '', '', '1', 3, NULL, NULL),
(1561, 'tuban-palang', '2019-08-02', '07:00:00', 'Jl. Tuban - Palang', '', '', 'Ds. Tasikmadu', 'Kec. Palang', 'Kab. Tuban', '-6.896153', '112.095378', 'SPM  S - 6445 - HD                                                           X                                                                     SPM  S - 3004 - FB                                                                          ', '', '', '2', 3, NULL, NULL),
(1562, 'tuban-palang', '2019-08-04', '13:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Glodok', 'Kec. Palang', 'Kab. Tuban', '-6.900194', '112.151812', 'PICK UP  S - 9361 - UJ                                                           X                                                                     SEPEDA PANCAL                                                                          ', '', '', '1', 3, NULL, NULL),
(1563, 'tuban-palang', '2019-08-31', '19:00:00', 'Jl. Tuban - Palang', '', '', 'SP3 Rembes', 'Kec. Palang', 'Kab. Tuban', '-6.902328', '112.13387', 'SPM  (?)                                                           X                                                                     SPM  S - 3275 - HI                                                                          ', '', '', '1', 3, NULL, NULL),
(1564, 'tuban-palang', '2019-09-13', '18:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Palang', 'Kec. Palang', 'Kab. Tuban', '-6.902063', '112.143971', 'SPM  S - 2646 - AN                                                           X                                                                                                                              PEJALAN KAKI', '', '', '1', 3, NULL, NULL),
(1565, 'tuban-palang', '2019-09-03', '16:00:00', 'Jl. Tuban - Palang', '', '', 'Ds. Glodog', 'Kec. Palang', 'Kab. Tuban', '-6.900194', '112.151812', 'MINIBUS  S - 1796 - HQ                                                           X                                                                                                                              SPM  S - 5463 - FV', '', '', '1', 3, NULL, NULL),
(1566, 'tuban-palang', '2019-09-09', '05:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Kradenan', 'Kec. Palang', 'Kab. Tuban', '-6.899053', '112.113744', 'SPM  S - 2122 - KF                                                           X                                                                                                                              SPM  S - 5622 - EZ', '1', '', '', 3, NULL, NULL),
(1567, 'tuban-palang', '2019-09-07', '17:00:00', 'Jl. Tuban - Palang', '', '', 'Kel. Panyuran', 'Kec. Palang', 'Kab. Tuban', '-6.896724', '112.087151', 'SPM  S - 3868 - HU                                                           X                                                                                                                              SPM  L - 4722 - DC', '', '', '1', 3, NULL, NULL),
(1568, 'tuban-palang', '2019-10-11', '01:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Kradenan', 'Kec. Palang', 'Kab. Tuban', '-6.899053', '112.113744', 'SPM  S - 5861 - MP                                                           X                                                                                                                              TRUCK TRAILLER                                     ', '', '', '1', 3, NULL, NULL),
(1569, 'tuban-palang', '2019-10-13', '07:30:00', 'Jl. Tuban - Palang', '', '', 'Kel. Panyuran', 'Kec. Palang', 'Kab. Tuban', '-6.896724', '112.087151', 'SPM  S - 6650 - FH                                                           X                                                                                                                              SPM  S - 2022 - HD', '', '', '2', 3, NULL, NULL),
(1570, 'tuban-palang', '2019-10-17', '06:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Panyuran', 'Kec. Palang', 'Kab. Tuban', '-6.896724', '112.087151', 'SPM  S - 5851 - HE                                                           X                                                                                                                              PEJALAN KAKI', '', '', '1', 3, NULL, NULL),
(1571, 'tuban-palang', '2019-11-10', '15:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Kradenan', 'Kec. Palang', 'Kab. Tuban', '-6.899053', '112.113744', 'SPM  S - 5358 - HT                                                           X                                                                                                                              SPM  S - 6638 - F', '', '1', '3', 3, NULL, NULL),
(1572, 'tuban-palang', '2019-11-22', '18:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Tasikmadu', 'Kec. Palang', 'Kab. Tuban', '-6.896153', '112.095378', 'SPM  S - 6960 - GH                                                           X                                                                                                                              SPM  S - 2305 - HD', '', '', '1', 3, NULL, NULL),
(1573, 'tuban-palang', '2019-11-26', '08:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Karangagung', 'Kec. Palang', 'Kab. Tuban', '-6.899872', '112.163979', 'DUMP TRUCK  S - 9145 - UF                                                           X                                                                                                                              SPM  S - 2404 - ES', '', '', '1', 3, NULL, NULL),
(1574, 'tuban-palang', '2019-12-15', '02:00:00', 'Jl. Tuban - Palang', 'Km 7-8', '', 'Ds. Palang', 'Kec. Palang', 'Kab. Tuban', '-6.902129', '112.13791', 'SPM  S - 2715 - GS                                                                           X                                                                                                                              TRUCK  P - 8472 - UY', '', '', '1', 3, NULL, NULL),
(1575, 'tuban-palang', '2019-12-13', '10:30:00', 'Jl. Tuban - Palang', '', '', 'Kel. Sukolilo', 'Kec. Tuban', 'Kab. Tuban', '-6.896964', '112.080254', 'SPM  S - 2630 - EJ                                              X                                                                                                                              PEJALAN KAKI', '', '', '1', 3, NULL, NULL),
(1576, 'tuban-palang', '2019-12-25', '12:30:00', 'Jl. Tuban - Palang', '', '', 'Ds. Tasikmadu', 'Kec. Palang', 'Kab. Tuban', '-6.896153', '112.095378', 'SPM  S - 6351 - IE                                         X                                                                                                                              MINIBUS Elf  S - 7249 - A', '1', '', '', 3, NULL, NULL),
(1577, 'panglima-sudirman', '2019-01-04', '16:30:00', 'Jl. Panglima Sudirman', '', 'SP3 CPM', 'Kel. Kutorejo', 'Kec. Tuban', 'Kab. Tuban', '-6.8932696', '112.0634758', 'SPM  S - 3836 - ED                                                                            X                                                                           SPM  S - 2017 - HZ', '', '', '1', 7, NULL, NULL),
(1578, 'panglima-sudirman', '2019-01-07', '10:00:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Baturetno', 'Kec. Tuban', 'Kab. Tuban', '-6.8960237', '112.0716832', 'SPM  S - 4958 - GN                                                                            X                                                                           SEPEDA PANCAL', '1', '', '', 7, NULL, NULL),
(1579, 'panglima-sudirman', '2019-01-16', '17:00:00', 'Jl. Panglima Sudirman', '', 'SP3 Kingking', 'Kel. Karangsari', 'Kec. Tuban', 'Kab. Tuban', '-6.8894068', '112.0562724', 'SPM  S - 5374 - EV                                                                            X                                                                           SPM  S - 3333 - GW', '', '', '2', 7, NULL, NULL),
(1580, 'panglima-sudirman', '2019-02-08', '07:30:00', 'Jl. Panglima Sudirman', '', 'SP3', 'Kel. Kingking', 'Kec. Tuban', 'Kab. Tuban', '-6.889032', '112.055697', 'SPM  S - 4475 - EF                                                           X                                                                     SPM  S - 3426 - EB', '', '', '1', 7, NULL, NULL),
(1581, 'panglima-sudirman', '2019-02-26', '07:30:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Karangsari', 'Kec. Tuban', 'Kab. Tuban', '-6.8894068', '112.0562724', 'SPM  S - 4409 - ES                                                           X                                                                     SPM  S - 6221 - FC                                                                                          ', '', '', '1', 7, NULL, NULL),
(1582, 'panglima-sudirman', '2019-03-01', '14:00:00', 'Jl. P. Sudirman', '', '', 'Kel. Sukolilo', 'Kec. Tuban', 'Kab. Tuban', '-6.8967902', '112.0775764', 'TRUCK TRACKTOR HEAD                                                L - 8975 - UZ                                                           X                                                                     SPM  S - 3503 - LZ', '1', '', '1', 7, NULL, NULL),
(1583, 'panglima-sudirman', '2019-03-03', '10:30:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Baturetno', 'Kec. Tuban', 'Kab. Tuban', '-6.8960237', '112.0716832', 'TRUCK  (?)                                                           X                                                                     SPM  S - 6367 - MU', '', '', '1', 7, NULL, NULL),
(1584, 'panglima-sudirman', '2019-03-10', '18:00:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Baturetno', 'Kec. Tuban', 'Kab. Tuban', '-6.8960237', '112.0716832', 'SPM  S - 4396 - HU                                                           X                                                                     PEJALAN KAKI', '', '', '1', 7, NULL, NULL),
(1585, 'panglima-sudirman', '2019-03-17', '01:30:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Sukolilo', 'Kec. Tuban', 'Kab. Tuban', '-6.8967902', '112.0775764', 'SPM  S - 5125 - EN                                                           X                                                                     MPP Panther  S - 1591 - HN', '', '', '1', 7, NULL, NULL),
(1586, 'panglima-sudirman', '2019-03-19', '06:15:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Kingking', 'Kec. Tuban', 'Kab. Tuban', '-6.889032', '112.055697', 'SPM  S - 3043 - GZ                                                           X                                                                     PEJALAN KAKI', '', '', '2', 7, NULL, NULL),
(1587, 'panglima-sudirman', '2019-04-09', '09:30:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Kingking', 'Kec. Tuban', 'Kab. Tuban', '-6.889032', '112.055697', 'SPM  S - 5234 - ER                                                           X                                                                     PICK UP  S - 8450 - HH', '', '', '1', 7, NULL, NULL),
(1588, 'panglima-sudirman', '2019-04-22', '18:30:00', 'Jl. Panglima Sudirman', '', '(Depan Candra)', 'Kel. Sendangharjo', 'Kec. Tuban', 'Kab. Tuban', '-6.8948184', '112.0675105', 'SPM  S - 6231 - FN                                                           X                                                                     SPM  S - 2047 - FX', '', '', '3', 7, NULL, NULL),
(1589, 'panglima-sudirman', '2019-04-29', '19:00:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Sidomulyo', 'Kec. Tuban', 'Kab. Tuban', '-6.8920849', '112.0608404', 'SPM  S - 6819 - HH                                                           X                                                                     PEJALAN KAKI', '', '', '1', 7, NULL, NULL),
(1590, 'panglima-sudirman', '2019-05-08', '23:15:00', 'Jl. Panglima Sudirman', '', 'SP3 SMP 6', 'Kel. Baturetno', 'Kec. Tuban', 'Kab. Tuban', '-6.896269', '112.072567', 'SPM  S - 5366 - LG                                                           X                                                                     SPM  S - 5796 - FG', '', '', '1', 7, NULL, NULL),
(1591, 'panglima-sudirman', '2019-05-23', '16:10:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Sukolilo', 'Kec. Tuban', 'Kab. Tuban', '-6.8967902', '112.0775764', 'SPM  S - 4088 - EE                                                           X                                                                     PICK UP  S - 9370 - A', '', '1', '', 7, NULL, NULL),
(1592, 'panglima-sudirman', '2019-05-27', '04:45:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Sukolilo', 'Kec. Tuban', 'Kab. Tuban', '-6.8967902', '112.0775764', 'SPM  L - 4268 - RN                                                           X                                                                     TRUCK GANDENG                                                                               L - 8451 - UD', '', '', '1', 7, NULL, NULL),
(1593, 'panglima-sudirman', '2019-06-11', '07:45:00', 'Jl. Panglima Sudirman', '', 'SP4 Srumbung', 'Kel. Sidomulyo', 'Kec. Tuban', 'Kab. Tuban', '-6.892983', '112.062872', 'SPM  S - 2305 - HX                                                           X                                                                     SPM  S - 5357 - ID', '', '', '3', 7, NULL, NULL),
(1594, 'panglima-sudirman', '2019-06-20', '16:45:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Sendangharjo', 'Kec. Tuban', 'Kab. Tuban', '-6.8948184', '112.0675105', 'SPM  S - 3295 - FZ                                                           X                                                                     MPP (?)                                                                      X                              ', '1', '', '1', 7, NULL, NULL),
(1595, 'panglima-sudirman', '2019-06-21', '06:30:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Baturetno', 'Kec. Tuban', 'Kab. Tuban', '-6.8960237', '112.0716832', 'SPM (?)                                                           X                                                                     SPM  S - 2855 - HJ', '', '', '1', 7, NULL, NULL),
(1596, 'panglima-sudirman', '2019-06-22', '08:30:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Sidomulyo', 'Kec. Tuban', 'Kab. Tuban', '-6.8920849', '112.0608404', 'SPM  K - 6887 - KE                                                           X                                                                     SPM  S - 3357 - FC', '', '', '2', 7, NULL, NULL),
(1597, 'panglima-sudirman', '2019-06-27', '18:00:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Sukolilo', 'Kec. Tuban', 'Kab. Tuban', '-6.8967902', '112.0775764', 'SPM  S - 4290 - GG                                                           X                                                                     SPM  M - 3953 - J', '', '', '1', 7, NULL, NULL),
(1598, 'panglima-sudirman', '2019-08-10', '17:30:00', 'Jl. P. Sudirman', '', 'SP4 Sumur Srumbung', 'Kel. Kutorejo', 'Kec. Tuban', 'Kab. Tuban', '-6.892983', '112.062872', 'SPM  K - 2922 - CM                                                           X                                                                     SPM  S - 3278 - GL                                                                          ', '', '', '1', 7, NULL, NULL),
(1599, 'panglima-sudirman', '2019-08-23', '20:30:00', 'Jl. Panglima Sudirman', '', 'SP3 CPM', 'Kel. Kutorejo', 'Kec. Tuban', 'Kab. Tuban', '-6.8932696', '112.0634758', 'SPM  S - 3164 - MQ                                                           X                                                                     SPM  S - 2458 - IH                                                                          ', '', '', '2', 7, NULL, NULL),
(1600, 'panglima-sudirman', '2019-08-29', '23:00:00', 'Jl. Panglima Sudirman', '', '(Depan Aspol)', 'Kel. Baturetno', 'Kec. Tuban', 'Kab. Tuban', '-6.8905702', '112.0581527', 'SPM  S - 2324 - G                                                           X                                                                     BECAK                                                                          ', '', '', '2', 7, NULL, NULL),
(1601, 'panglima-sudirman', '2019-08-30', '22:00:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Karangsari', 'Kec. Tuban', 'Kab. Tuban', '-6.8894068', '112.0562724', 'SPM  S - 2669 - HI                                                           X                                                                     SPM Roda 3 Happy TANPA TNKB                                                                          ', '2', '', '', 7, NULL, NULL),
(1602, 'panglima-sudirman', '2019-09-02', '11:00:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Kingking', 'Kec. Tuban', 'Kab. Tuban', '-6.889032', '112.055697', 'MPP Innova  S - 1822 - HI                                                           X                                                                                                                              SPM  S - 3229 - EN', '', '', '1', 7, NULL, NULL),
(1603, 'panglima-sudirman', '2019-10-12', '15:00:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Karangsari', 'Kec. Tuban', 'Kab. Tuban', '-6.8894068', '112.0562724', 'SPM  (?)                                                           X                                                                                                                              SPM  S - 4218 - HG', '', '', '2', 7, NULL, NULL),
(1604, 'panglima-sudirman', '2019-10-26', '16:15:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Sukolilo', 'Kec. Tuban', 'Kab. Tuban', '-6.8967902', '112.0775764', 'SPM  S - 3375 - EL                                                           X                                                                                                                              SPM  S - 6961 - EG', '', '', '3', 7, NULL, NULL),
(1605, 'panglima-sudirman', '2019-11-14', '02:00:00', 'Jl. Panglima Sudirman', '', '(Jembatan Mangunjoyo)', 'Kel. Sidomulyo', 'Kec. Tuban', 'Kab. Tuban', '-6.8917288', '112.0599343', 'SPM  S - 6269 - FC                                                           X                                                                                                                              SPM  S - 4107 - EU', '', '', '3', 7, NULL, NULL),
(1606, 'panglima-sudirman', '2019-12-03', '10:30:00', 'Jl. Panglima Sudirman', '', '', 'Kel. Sukolilo', 'Kec. Tuban', 'Kab. Tuban', '-6.8967902', '112.0775764', 'SPM  S - 6098 - HO                                                           X                                                                                                                              PEJALAN KAKI', '', '', '1', 7, NULL, NULL),
(1607, 'dr-wahidin-sudirohusodo', '2019-01-08', '10:00:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', 'SP4 Masjid Al-Falah', '', 'Kec. Tuban', 'Kab. Tuban', '-6.896517', '112.040053', 'SPM  S - 4708 - G                                                                            X                                                                           SPM  S - 5927 - GQ', '', '', '2', 8, NULL, NULL),
(1608, 'dr-wahidin-sudirohusodo', '2019-01-17', '06:00:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.898522', '112.043573', 'SPM  S - 4541 - GH                                                                            X                                                                           MPP Brio  S - 1680 - HZ', '', '', '1', 8, NULL, NULL),
(1609, 'dr-wahidin-sudirohusodo', '2019-01-22', '16:00:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Sidorejo', 'Kec. Tuban', 'Kab. Tuban', '-6.901496', '112.050953', 'SPM  (?)                                                                            X                                                                           SPM  L - 6241 - XU', '', '', '1', 8, NULL, NULL),
(1610, 'dr-wahidin-sudirohusodo', '2019-01-27', '08:00:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Sidorejo', 'Kec. Tuban', 'Kab. Tuban', '-6.901496', '112.050953', 'SPM  S - 2895 - FO                                                                            X                                                                           SPM  S - 5038 - FY', '', '', '1', 8, NULL, NULL),
(1611, 'dr-wahidin-sudirohusodo', '2019-03-23', '09:30:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.898522', '112.043573', 'MPU  S - 7108 - UE                                                           X                                                                     SPM  S - 5282 - GT', '', '', '1', 8, NULL, NULL),
(1612, 'dr-wahidin-sudirohusodo', '2019-03-26', '20:00:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.898522', '112.043573', 'SPM  S - 2098 - FY                                                           X                                                                     SPM  S - 4393 - EQ', '', '', '1', 8, NULL, NULL),
(1613, 'dr-wahidin-sudirohusodo', '2019-05-25', '17:30:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Sidorejo', 'Kec. Tuban', 'Kab. Tuban', '-6.901496', '112.050953', 'SPM  S - 3288 - EQ                                                           X                                                                     SPM  S - 6686 - GZ', '', '', '2', 8, NULL, NULL),
(1614, 'dr-wahidin-sudirohusodo', '2019-07-24', '19:00:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', 'SP4 Merik', 'Kel. Sidorejo', 'Kec. Tuban', 'Kab. Tuban', '-6.901764', '112.054075', 'SPM  S - 4172 - GN                                                           X                                                                       SPM  M - 4380 - XE', '', '', '1', 8, NULL, NULL),
(1615, 'dr-wahidin-sudirohusodo', '2019-07-25', '20:00:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Sidorejo', 'Kec. Tuban', 'Kab. Tuban', '-6.901496', '112.050953', 'MPP  S - 377 - HS                                                           X                                                                       SPM  S - 2804 - HX', '', '', '1', 8, NULL, NULL),
(1616, 'dr-wahidin-sudirohusodo', '2019-07-31', '19:45:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Sidorejo', 'Kec. Tuban', 'Kab. Tuban', '-6.901496', '112.050953', 'SPM  N - 5971 - TBR                                                           X                                                                       SEPEDA PANCAL', '', '', '2', 8, NULL, NULL),
(1617, 'dr-wahidin-sudirohusodo', '2019-08-04', '12:00:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.898522', '112.043573', 'SPM  TANPA TNKB                                                           X                                                                     PEJALAN KAKI                                                                          ', '', '', '1', 8, NULL, NULL),
(1618, 'dr-wahidin-sudirohusodo', '2019-09-24', '07:15:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.898522', '112.043573', 'TRUCK  S - 9536 - HG                                                           X                                                                                                                              SPM  S - 4182 - EB', '', '', '1', 8, NULL, NULL),
(1619, 'dr-wahidin-sudirohusodo', '2019-10-11', '17:15:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.898522', '112.043573', 'SPM  S - 6336 - GR                                                           X                                                                                                                              SPM  S - 2706 - HY', '', '1', '', 8, NULL, NULL),
(1620, 'dr-wahidin-sudirohusodo', '2019-10-21', '06:50:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Sidorejo', 'Kec. Tuban', 'Kab. Tuban', '-6.901496', '112.050953', 'SPM  S - 4556 - GC                                                           X                                                                                                                              TRUCK  L - 8122 - UE', '', '', '1', 8, NULL, NULL),
(1621, 'dr-wahidin-sudirohusodo', '2019-12-11', '09:45:00', 'Jl. Dr. Wahidin Sudiro Husodo', '', '', 'Kel. Sidorejo', 'Kec. Tuban', 'Kab. Tuban', '-6.901496', '112.050953', 'PICK UP (?)                                              X                                                                                                                              SPM  S - 2482 - HQ', '', '', '1', 8, NULL, NULL),
(1622, 'pahlawan', '2019-02-25', '07:15:00', 'Jl. Pahlawan', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.913381', '112.0819301', 'SPM  S - 5506 - FW                                                           X                                                                                                 SPM (?)                                                                  X      ', '', '', '1', 4, NULL, NULL),
(1623, 'pahlawan', '2019-04-04', '19:30:00', 'Jl. Pahlawan', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.913381', '112.0819301', 'SPM  S - 6724 - GI                                                           X                                                                     PEJALAN KAKI', '', '', '1', 4, NULL, NULL),
(1624, 'pahlawan', '2019-04-13', '16:30:00', 'Jl. Pahlawan', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.913381', '112.0819301', 'TRUCK  S - 8812 - UJ                                                           X                                                                     SPM  S - 5014 - FS', '', '', '1', 4, NULL, NULL),
(1625, 'pahlawan', '2019-05-13', '18:45:00', 'Jl. Pahlawan', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.913381', '112.0819301', 'SPM  S - 5338 - FV                                                           X                                                                     SPM  S - 5359 - GA', '', '', '2', 4, NULL, NULL),
(1626, 'pahlawan', '2019-04-29', '12:00:00', 'Jl. Pahlawan', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.913381', '112.0819301', 'MPP Innova  W - 1532 - BO                                                           X                                                                     SPM  S - 2166 - EX', '', '', '1', 4, NULL, NULL),
(1627, 'pahlawan', '2019-06-02', '21:30:00', 'Jl. Pahlawan', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.913381', '112.0819301', 'SPM  S - 5621 - EE                                                           X                                                                     SPM  S - 5244 - ID', '', '', '1', 4, NULL, NULL),
(1628, 'pahlawan', '2019-08-31', '10:30:00', 'Jl. Pahlawan', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.913381', '112.0819301', 'SPM  S - 3814 - HF                                                           X                                                                     XTRAIL  B - 1124 - KFM                                                                          ', '', '', '1', 4, NULL, NULL),
(1629, 'pahlawan', '2019-10-14', '00:58:00', 'Jl. Pahlawan', '', '(Depan KPP Pratama)', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.912284', '112.080196', 'MPP Proton  S - 1695 - E                                                           X                                                                                                                              SPM  S - 5991 - ER', '1', '', '', 4, NULL, NULL),
(1630, 'pahlawan', '2019-10-30', '21:30:00', 'Jl. Pahlawan', '', '(Depan SPBU Sleko)', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.906123', '112.072734', 'MPP Escudo  S - 710 - HD                                                           X                                                                                                                              SPM  S - 3832 - HF', '', '', '1', 4, NULL, NULL),
(1631, 'pahlawan', '2019-11-02', '10:30:00', 'Jl. Pahlawan', '', '(Bundaran Sleko)', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9014497', '112.0679421', 'SPM  S - 5212 - FM                                                           X                                                                                                                              MPP HR-V  S - 995 - HN', '', '', '1', 4, NULL, NULL),
(1632, 'pahlawan', '2019-11-08', '11:30:00', 'Jl. Pahlawan', '', 'Dsn. Wire', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.911351', '112.078223', 'SPM  S - 2972 - HQ                                                           X                                                                                                                              SPM  S - 5323 - GP', '', '', '2', 4, NULL, NULL),
(1633, 'pahlawan', '2019-12-06', '08:00:00', 'Jl. Pahlawan', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.913381', '112.0819301', 'SPM  S - 4066 - EP                                              X                                                                                                                              SPM  S - 2719 - FD', '', '', '1', 4, NULL, NULL),
(1634, 'pahlawan', '2019-12-26', '13:30:00', 'Jl. Pahlawan', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.913381', '112.0819301', 'SPM  S - 2894 - EU                                         X                                                                                                                              SPM  S - 2715 - NAK', '', '', '1', 4, NULL, NULL),
(1635, 'hos-cokroaminoto', '2019-05-01', '16:30:00', 'Jl. HOS Cokroaminoto', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9080248', '112.0714086', 'SPM  S - 4782 - AF                                                           X                                                                     TRUCK TRONTON                                                                             T - 9726 - DD', '', '', '2', 5, NULL, NULL),
(1636, 'hos-cokroaminoto', '2019-09-02', '06:30:00', 'Jl. HOS Cokroaminoto', '', 'Lingk. Wire', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.91077', '112.076901', 'SPM  S - 5694 - FD                                                           X                                                                                                                              SPM  S - 4873 - HF', '', '', '1', 5, NULL, NULL),
(1637, 'hos-cokroaminoto', '2019-09-30', '12:30:00', 'Jl. HOS Cokroaminoto', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9080248', '112.0714086', 'TRUCK TRONTON                                                                                          L - 9364 - BI                                                           X                                                                               ', '', '', '1', 5, NULL, NULL),
(1638, 'hos-cokroaminoto', '2019-12-22', '17:00:00', 'Jl. HOS Cokroaminoto', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9080248', '112.0714086', 'PICK UP  S - 9201 - HE                                         X                                                                                                                              SPM  S - 5736 - FJ', '', '', '1', 5, NULL, NULL),
(1639, 'gajah-mada', '2019-01-09', '04:30:00', 'Jl. Gajah Mada', '', '', 'Kel. Kebonsari', 'Kec. Tuban', 'Kab. Tuban', '-6.9044633', '112.0625258', 'PICK UP  K - 1747 - UD                                                                            X                                                                           BECAK', '', '', '1', 9, NULL, NULL),
(1640, 'gajah-mada', '2019-03-03', '06:30:00', 'Jl. Gajah Mada', '', '', 'Kel. Kebonsari', 'Kec. Tuban', 'Kab. Tuban', '-6.9044633', '112.0625258', 'BUS Pariwisata  K - 1602 - BD                                                           X                                                                     SPM  S - 2629 - HT', '', '', '1', 9, NULL, NULL),
(1641, 'gajah-mada', '2019-03-30', '04:30:00', 'Jl. Gajah Mada', '', '', 'Kel. Kebonsari', 'Kec. Tuban', 'Kab. Tuban', '-6.9044633', '112.0625258', 'BUS Pariwisata  AB - 7680 - AK                                                           X                                                                     TRUCK RONTON                                                                     B - 9498 - TYU', '', '', '1', 9, NULL, NULL),
(1642, 'gajah-mada', '2019-07-10', '10:00:00', 'Jl. Gajah Mada', '', '', 'Kel. Doromukti', 'Kec. Tuban', 'Kab. Tuban', '-6.9027615', '112.0571134', 'MPP  (?)                                                           X                                                                     SPM  S - 4140 - GJ', '', '', '1', 9, NULL, NULL),
(1643, 'gajah-mada', '2019-07-31', '11:00:00', 'Jl. Gajah Mada', '', 'Sp3 Gg Mekar', 'Kel. Sidorejo', 'Kec. Tuban', 'Kab. Tuban', '-6.902919', '112.057358', 'SPM  (?)                                                               X                                                                       SEPEDA PANCAL', '', '', '1', 9, NULL, NULL),
(1644, 'gajah-mada', '2019-10-28', '07:45:00', 'Jl. Gajah Mada', '', '', 'Kel. Kebonsari', 'Kec. Tuban', 'Kab. Tuban', '-6.9044633', '112.0625258', 'Minibus ELF  (?)                                                           X                                                                                                                              SPM  S - 5375 - GX', '', '', '1', 9, NULL, NULL);
INSERT INTO `kecelakaans` (`id`, `slug`, `tanggal`, `jam`, `nama_jalan`, `km`, `tkp_dusun`, `desa`, `kecamatan`, `kabupaten`, `latitude`, `longitude`, `kendaraan`, `korban_md`, `korban_lb`, `korban_lr`, `jalans_id`, `created_at`, `updated_at`) VALUES
(1645, 'teuku-umar', '2019-02-06', '16:30:00', 'Jl. Teuku Umar', '', '', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.8875091', '112.0431579', 'SPM  S - 5209 - GS                                                           X                                                                     SPM  S - 5230 - NU', '', '', '1', 10, NULL, NULL),
(1646, 'teuku-umar', '2019-02-28', '23:30:00', 'Jl. Teuku Umar', '', '(Dpn Kantor Samsat)', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.884742', '112.045029', 'SPM  S - 5404 - FP                                                           X                                                                     DUMP TRUCK  L - 9193 - UM', '', '', '1', 10, NULL, NULL),
(1647, 'teuku-umar', '2019-03-25', '22:45:00', 'Jl. Teuku Umar', '', 'SP4 Wahyu Utama', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.888491', '112.042563', 'SPM  S - 2648 - FD                                                           X                                                                     SPM  TANPA TNKB', '', '', '2', 10, NULL, NULL),
(1648, 'teuku-umar', '2019-04-29', '16:45:00', 'Jl. Teuku Umar', '', '', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.8875091', '112.0431579', 'MPP Livina  S - 1834 - HG                                                           X                                                                     SPM  S - 2603 - FD', '', '', '1', 10, NULL, NULL),
(1649, 'teuku-umar', '2019-06-22', '14:00:00', 'Jl. Teuku Umar', '', 'SP4 Gg. V', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.887098', '112.043472', 'SPM  S - 2916 - HR                                                           X                                                                     TRUCK GANDENG                                                                                    W - 9176 - ', '1', '', '1', 10, NULL, NULL),
(1650, 'teuku-umar', '2019-07-20', '16:00:00', 'Jl. Teuku Umar', '', '', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.8875091', '112.0431579', 'MPP Hiline  S - 1097 - HQ                                                           X                                                                       SPM  K - 5934 - LR', '', '', '1', 10, NULL, NULL),
(1651, 'teuku-umar', '2019-08-19', '14:45:00', 'Jl. Teuku Umar', '', 'SP4', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.885204', '112.044734', 'SPM  S - 5270 - GR                                                           X                                                                     SPM  (?)                                                                          ', '', '', '1', 10, NULL, NULL),
(1652, 'teuku-umar', '2019-12-02', '11:20:00', 'Jl. Teuku Umar', '', '', 'Kel. Latsari', 'Kec. Tuban', 'Kab. Tuban', '-6.8875091', '112.0431579', 'SPM  S - 6707 - FP                                                           X                                                                                                                              SPM  S - 2418 - FI', '', '', '2', 10, NULL, NULL),
(1653, 'r-e-martadinata', '2019-02-27', '01:30:00', 'Jl. RE Martadinata', '', '', 'Kel. Karangsari', 'Kec. Tuban', 'Kab. Tuban', '-6.885511', '112.050985', 'TRUCK TRONTON                                                       L - 8729 - UQ                                                           X                                                                     TRUCK BOX  (?)                               ', '', '', '1', 11, NULL, NULL),
(1654, 'r-e-martadinata', '2019-03-15', '10:30:00', 'Jl. RE Martadinata', '', 'SP3 Gerdu Laut', 'Kel. Karangsari', 'Kec. Tuban', 'Kab. Tuban', '-6.886842', '112.052483', 'SPM  S - 2160 - HH                                                           X                                                                     SPM  S - 2731 - FR', '', '', '1', 11, NULL, NULL),
(1655, 'r-e-martadinata', '2019-03-16', '22:45:00', 'Jl. RE Martadinata', '', '', 'Kel. Karangsari', 'Kec. Tuban', 'Kab. Tuban', '-6.885511', '112.050985', 'SPM  S - 3139 - EF                                                           X                                                                     SPM  S - 2576 - ES', '', '', '3', 11, NULL, NULL),
(1656, 'r-e-martadinata', '2019-05-18', '13:30:00', 'Jl. RE Martadinata', '', '', 'Ds. Sugihwaras', 'Kec. Jenu', 'Kab. Tuban', '-6.882215', '112.047267', 'SPM Roda 3 Viar  S - 4897 - EP                                                           X                                                                     SPM  S - 2236 - HV', '', '', '1', 11, NULL, NULL),
(1657, 'r-e-martadinata', '2019-09-12', '18:00:00', 'Jl. RE Martadinata', '', '', 'Kel. Karangsari', 'Kec. Tuban', 'Kab. Tuban', '-6.885511', '112.050985', 'MPP  S - 834 - HM                                                           X                                                                                                                              SPM  P - 4322 - WY', '', '', '1', 11, NULL, NULL),
(1658, 'r-e-martadinata', '2019-12-26', '22:30:00', 'Jl. RE Martadinata', '', '', 'Kel. Karangsari', 'Kec. Tuban', 'Kab. Tuban', '-6.885511', '112.050985', 'MPP CR-V  B - 1023 - KLS                                         X                                                                                                                              SPM  L - 3282 - XL', '', '', '1', 11, NULL, NULL),
(1659, 'moh-yamin', '2019-05-20', '14:00:00', 'Jl. M. Yamin', '', '', 'Kel. Kebonsari', 'Kec. Tuban', 'Kab. Tuban', '-6.9040918', '112.0683748', 'SPM  S - 6451 - FV                                                           X                                                                     SPM  S - 2366 - GN                                                                                  X       ', '', '1', '', 12, NULL, NULL),
(1660, 'moh-yamin', '2019-05-28', '07:45:00', 'Jl. M. Yamin', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9040918', '112.0683748', 'MPP Innova  W - 1658 - CV                                                           X                                                                     BECAK', '', '', '2', 12, NULL, NULL),
(1661, 'moh-yamin', '2019-06-29', '07:00:00', 'Jl. M. Yamin', '', '', 'Kel. Kebonsari', 'Kec. Tuban', 'Kab. Tuban', '-6.9040918', '112.0683748', 'SPM  (?)                                                           X                                                                     SPM Dinas Polri  X - 3313 - 59', '', '', '1', 12, NULL, NULL),
(1662, 'moh-yamin', '2019-09-23', '16:30:00', 'Jl. M. Yamin', '', '', 'Kel. Kebonsari', 'Kec. Tuban', 'Kab. Tuban', '-6.9040918', '112.0683748', 'SPM  S - 6011 - EW                                                           X                                                                                                                              SPM  S - 3981 - GD', '', '', '1', 12, NULL, NULL),
(1663, 'moh-yamin', '2019-10-10', '06:30:00', 'Jl. M. Yamin', '', '', 'Kel. Kebonsari', 'Kec. Tuban', 'Kab. Tuban', '-6.9040918', '112.0683748', 'MPP Jazz  N - 1988 - BX                                                           X                                                                                                                              SPM  S - 6973 - FV', '', '', '2', 12, NULL, NULL),
(1664, 'manunggal', '2019-03-03', '03:36:00', 'Jl. Manunggal', '', 'Manunggal Utara', 'Kel. Sukolilo', 'Kec. Tuban', 'Kab. Tuban', '-6.8970125', '112.0795661', 'BUS Pariwisata  S - 7355 - UE                                                           X                                                                     SPM  S - 4529 - JH', '1', '', '', 6, NULL, NULL),
(1665, 'manunggal', '2019-05-01', '07:12:00', 'Jl. Manunggal', '', '(Depan Unirow)', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9057954', '112.0806586', 'TRUCK  H - 1757 - FF                                                           X                                                                     TRUCK  L - 8643 - UP', '', '', '2', 6, NULL, NULL),
(1666, 'manunggal', '2019-10-31', '07:12:00', 'Jl. Manunggal', '', 'SP3 Manunggal Selatan', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.9132223', '112.0817829', 'TRUCK  BE - 9592 - Y                                                           X                                                                                                                              SPM  S - 4226 - L', '1', '', '', 6, NULL, NULL),
(1667, 'manunggal', '2019-10-28', '07:12:00', 'Jl. Manunggal', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.906093', '112.0809124', 'SPM  S - 2756 - GN                                                           X                                                                                                                              SPM  S - 2441 - EJ', '', '', '1', 6, NULL, NULL),
(1668, 'manunggal', '2019-11-30', '07:12:00', 'Jl. Manunggal', '', '', 'Kel. Gedongombo', 'Kec. Semanding', 'Kab. Tuban', '-6.906093', '112.0809124', 'SPM  B - 6196 - VBQ                                                           X                                                                                                                              SPM  S - 2130 - EY', '1', '1', '', 6, NULL, NULL),
(1669, 'manunggal', '2019-12-15', '00:00:00', 'Jl. Manunggal', '', 'SP3 Manunggal Utara', 'Kel. Sukolilo', 'Kec. Tuban', 'Kab. Tuban', '-6.8970125', '112.0795661', 'SPM  S - 5418 - LI                                              X                                                                                                                              SPM  S - 3313 - FN', '', '', '3', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasis`
--

CREATE TABLE `lokasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jalan_id` bigint(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `jam_kecelakaan` varchar(255) NOT NULL,
  `kepadatan` varchar(255) NOT NULL,
  `intensitas_kecelakaan` varchar(255) NOT NULL,
  `kondisi_korban` varchar(255) NOT NULL,
  `tingkat_kerawanan` varchar(255) NOT NULL,
  `rules_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `lokasis`
--

INSERT INTO `lokasis` (`id`, `jalan_id`, `alamat`, `latitude`, `longitude`, `jam_kecelakaan`, `kepadatan`, `intensitas_kecelakaan`, `kondisi_korban`, `tingkat_kerawanan`, `rules_id`, `created_at`, `updated_at`) VALUES
(10, 3, 'Margosuko Bancar', '-6.798540', '111.819226', '12.30', '5750', '55', '3', 'Rawan', 30, '2023-06-04 13:54:51', '2023-06-04 13:54:51'),
(11, 3, 'Desa Jenu', '-6.807197', '111.943061', '04.30', '6600', '66', '2', 'Sangat Rawan', 26, '2023-06-04 14:23:38', '2023-06-04 14:23:38'),
(12, 4, 'Simpang 3 Rembes', '-6.902287', '112.133791', '20.00', '5800', '58', '1', 'Tidak rawan', 85, '2023-06-04 14:26:13', '2023-06-04 14:26:13'),
(13, 5, 'Pakah', '-6.969512', '112.102779', '16.25', '6555', '64', '2', 'Sangat Rawan', 80, '2023-06-04 14:27:56', '2023-06-04 14:27:56'),
(14, 5, 'Kepet', '-6.950844', '112.100869', '09.30', '6700', '65', '3', 'Sangat Rawan', 27, '2023-06-04 14:45:38', '2023-06-04 14:45:38'),
(15, 4, 'Desa Panyuran gg Muslim', '-6.896702', '112.087115', '06.30', '6800', '66', '3', 'Sangat Rawan', 27, '2023-06-04 14:46:36', '2023-06-04 14:46:36'),
(16, 5, 'Desa Temangkar', '-7.067417', '112.159102', '22.30', '5900', '60', '1', 'Tidak rawan', 85, '2023-06-04 14:49:18', '2023-06-04 14:49:18'),
(17, 3, 'Simpang 4 Pelabuhan Semen Gresik', '-6.789869', '111.899156', '06.15', '6650', '65', '1', 'Rawan', 25, '2023-06-04 14:51:14', '2023-06-04 14:51:14'),
(18, 4, 'Depan Alun - alun Desa Karangagung', '-6.900143', '112.167578', '15.30', '6820', '62', '3', 'Sangat Rawan', 78, '2023-06-04 14:52:22', '2023-06-04 14:52:22'),
(19, 2, 'Gang Depan SMP 5, kelurahan sukolilo', '-6.896617', '112.075134', '11.00', '7000', '724', '1', 'Tidak rawan', 40, '2023-06-04 15:01:11', '2023-06-04 15:01:11'),
(20, 6, 'Simpang 3 Manunggal (utara sma 3)', '-6.903916', '112.080151', '07.00', '7000', '660', '3', 'Sangat Rawan', 12, '2023-06-04 15:06:24', '2023-06-04 15:06:24'),
(21, 7, 'Depan Kantor Pajak KPP Pratama', '-6.912330', '112.080211', '13.00', '6700', '700', '1', 'Tidak rawan', 31, '2023-06-04 15:07:17', '2023-06-04 15:07:17'),
(22, 9, 'Depan gang masuk goa akbar', '-6.904321', '112.062077', '10.30', '6800', '680', '2', 'Tidak rawan', 32, '2023-06-04 15:08:27', '2023-06-04 15:08:27'),
(24, 11, 'Simpang 4 Depan Latsari IV', '-6.885180', '112.044777', '19.30', '6700', '655', '1', 'Tidak rawan', 82, '2023-06-04 15:10:45', '2023-06-04 15:10:45'),
(25, 12, 'Depan Klenteng', '-6.885426', '112.050908', '18.20', '7000', '700', '2', 'Rawan', 68, '2023-06-04 15:12:23', '2023-06-04 15:12:23'),
(26, 2, 'Simpang 4 Watu Lumur', '-6.892970', '112.062860', '02.20', '6600', '660', '3', 'Rawan', 3, '2023-06-04 15:13:39', '2023-06-04 15:13:39'),
(27, 8, 'Depan Madrasah Aliyah 1 Tuban', '-6.907365', '112.070163', '14.00', '6800', '660', '1', 'Tidak rawan', 28, '2023-06-04 15:14:36', '2023-06-04 15:14:36'),
(28, 6, 'Tinkungan Manunggal Desa Gedongombo Semanding', '-6.908391', '112.081693', '19.30', '6670', '658', '3', 'Rawan', 84, '2023-06-04 15:17:04', '2023-06-04 15:17:04'),
(29, 12, 'Samping Rest Area Tuban', '-6.882247', '112.047306', '18.00', '6800', '700', '3', 'Rawan', 60, '2023-06-04 15:18:17', '2023-06-04 15:18:17'),
(30, 3, 'Sumbersari', '-6.881821', '112.066197', '23.30', '8000', '800', '5', 'Sangat Rawan', 108, '2023-06-05 00:55:52', '2023-06-05 00:55:52'),
(31, 3, 'Desa Jenu', '-6.817763', '111.961695', '08.00', '6600', '56', '3', 'Sangat Rawan', 21, '2023-06-05 23:54:28', '2023-06-05 23:54:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_03_29_122026_create_arus_lantas_table', 1),
(11, '2023_05_30_090444_create_rules_table', 2),
(14, '2023_05_29_100631_create_lokasis_table', 5),
(17, '2023_03_20_173418_create_kecelakaans_table', 6),
(18, '2023_03_19_153457_create_jalans_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rules`
--

CREATE TABLE `rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jam` varchar(255) NOT NULL,
  `kepadatan` varchar(255) NOT NULL,
  `intensitas` varchar(255) NOT NULL,
  `kondisi_korban` varchar(255) NOT NULL,
  `tingkat_kerawanan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rules`
--

INSERT INTO `rules` (`id`, `jam`, `kepadatan`, `intensitas`, `kondisi_korban`, `tingkat_kerawanan`, `created_at`, `updated_at`) VALUES
(1, 'Dini-Pagi', 'Tidak Padat', 'Sangat Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(2, 'Dini-Pagi', 'Tidak Padat', 'Sangat Jarang', 'Sedang', 'Tidak rawan', NULL, NULL),
(3, 'Dini-Pagi', 'Tidak Padat', 'Sangat Jarang', 'Berat', 'Rawan', NULL, NULL),
(4, 'Dini-Pagi', 'Tidak Padat', 'Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(5, 'Dini-Pagi', 'Tidak Padat', 'Jarang', 'Sedang', 'Rawan', NULL, NULL),
(6, 'Dini-Pagi', 'Tidak Padat', 'Jarang', 'Berat', 'Rawan', NULL, NULL),
(7, 'Dini-Pagi', 'Tidak Padat', 'Sering', 'Ringan', 'Tidak rawan', NULL, NULL),
(8, 'Dini-Pagi', 'Tidak Padat', 'Sering', 'Sedang', 'Rawan', NULL, NULL),
(9, 'Dini-Pagi', 'Tidak Padat', 'Sering', 'Berat', 'Sangat Rawan', NULL, NULL),
(10, 'Dini-Pagi', 'Ramai', 'Sangat Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(11, 'Dini-Pagi', 'Ramai', 'Sangat Jarang', 'Sedang', 'Tidak rawan', NULL, NULL),
(12, 'Dini-Pagi', 'Ramai', 'Sangat Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(13, 'Dini-Pagi', 'Ramai', 'Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(14, 'Dini-Pagi', 'Ramai', 'Jarang', 'Sedang', 'Rawan', NULL, NULL),
(15, 'Dini-Pagi', 'Ramai', 'Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(16, 'Dini-Pagi', 'Ramai', 'Sering', 'Ringan', 'Tidak rawan', NULL, NULL),
(17, 'Dini-Pagi', 'Ramai', 'Sering', 'Sedang', 'Sangat Rawan', NULL, NULL),
(18, 'Dini-Pagi', 'Ramai', 'Sering', 'Berat', 'Sangat Rawan', NULL, NULL),
(19, 'Dini-Pagi', 'Padat', 'Sangat Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(20, 'Dini-Pagi', 'Padat', 'Sangat Jarang', 'Sedang', 'Tidak rawan', NULL, NULL),
(21, 'Dini-Pagi', 'Padat', 'Sangat Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(22, 'Dini-Pagi', 'Padat', 'Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(23, 'Dini-Pagi', 'Padat', 'Jarang', 'Sedang', 'Rawan', NULL, NULL),
(24, 'Dini-Pagi', 'Padat', 'Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(25, 'Dini-Pagi', 'Padat', 'Sering', 'Ringan', 'Rawan', NULL, NULL),
(26, 'Dini-Pagi', 'Padat', 'Sering', 'Sedang', 'Sangat Rawan', NULL, NULL),
(27, 'Dini-Pagi', 'Padat', 'Sering', 'Berat', 'Sangat Rawan', NULL, NULL),
(28, 'Siang', 'Tidak Padat', 'Sangat Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(29, 'Siang', 'Tidak Padat', 'Sangat Jarang', 'Sedang', 'Tidak rawan', NULL, NULL),
(30, 'Siang', 'Tidak Padat', 'Sangat Jarang', 'Berat', 'Rawan', NULL, NULL),
(31, 'Siang', 'Tidak Padat', 'Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(32, 'Siang', 'Tidak Padat', 'Jarang', 'Sedang', 'Tidak rawan', NULL, NULL),
(33, 'Siang', 'Tidak Padat', 'Jarang', 'Berat', 'Rawan', NULL, NULL),
(34, 'Siang', 'Tidak Padat', 'Sering', 'Ringan', 'Tidak rawan', NULL, NULL),
(35, 'Siang', 'Tidak Padat', 'Sering', 'Sedang', 'Tidak rawan', NULL, NULL),
(36, 'Siang', 'Tidak Padat', 'Sering', 'Berat', 'Rawan', NULL, NULL),
(37, 'Siang', 'Ramai', 'Sangat Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(38, 'Siang', 'Ramai', 'Sangat Jarang', 'Sedang', 'Rawan', NULL, NULL),
(39, 'Siang', 'Ramai', 'Sangat Jarang', 'Berat', 'Rawan', NULL, NULL),
(40, 'Siang', 'Ramai', 'Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(41, 'Siang', 'Ramai', 'Jarang', 'Sedang', 'Rawan', NULL, NULL),
(42, 'Siang', 'Ramai', 'Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(43, 'Siang', 'Ramai', 'Sering', 'Ringan', 'Tidak rawan', NULL, NULL),
(44, 'Siang', 'Ramai', 'Sering', 'Sedang', 'Rawan', NULL, NULL),
(45, 'Siang', 'Ramai', 'Sering', 'Berat', 'Rawan', NULL, NULL),
(46, 'Siang', 'Padat', 'Sangat Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(47, 'Siang', 'Padat', 'Sangat Jarang', 'Sedang', 'Rawan', NULL, NULL),
(48, 'Siang', 'Padat', 'Sangat Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(49, 'Siang', 'Padat', 'Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(50, 'Siang', 'Padat', 'Jarang', 'Sedang', 'Rawan', NULL, NULL),
(51, 'Siang', 'Padat', 'Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(52, 'Siang', 'Padat', 'Sering', 'Ringan', 'Rawan', NULL, NULL),
(53, 'Siang', 'Padat', 'Sering', 'Sedang', 'Sangat Rawan', NULL, NULL),
(54, 'Siang', 'Padat', 'Sering', 'Berat', 'Sangat Rawan', NULL, NULL),
(55, 'Sore', 'Tidak Padat', 'Sangat Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(56, 'Sore', 'Tidak Padat', 'Sangat Jarang', 'Sedang', 'Tidak rawan', NULL, NULL),
(57, 'Sore', 'Tidak Padat', 'Sangat Jarang', 'Berat', 'Rawan', NULL, NULL),
(58, 'Sore', 'Tidak Padat', 'Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(59, 'Sore', 'Tidak Padat', 'Jarang', 'Sedang', 'Tidak rawan', NULL, NULL),
(60, 'Sore', 'Tidak Padat', 'Jarang', 'Berat', 'Rawan', NULL, NULL),
(61, 'Sore', 'Tidak Padat', 'Sering', 'Ringan', 'Tidak rawan', NULL, NULL),
(62, 'Sore', 'Tidak Padat', 'Sering', 'Sedang', 'Tidak rawan', NULL, NULL),
(63, 'Sore', 'Tidak Padat', 'Sering', 'Berat', 'Rawan', NULL, NULL),
(64, 'Sore', 'Ramai', 'Sangat Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(65, 'Sore', 'Ramai', 'Sangat Jarang', 'Sedang', 'Rawan', NULL, NULL),
(66, 'Sore', 'Ramai', 'Sangat Jarang', 'Berat', 'Rawan', NULL, NULL),
(67, 'Sore', 'Ramai', 'Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(68, 'Sore', 'Ramai', 'Jarang', 'Sedang', 'Rawan', NULL, NULL),
(69, 'Sore', 'Ramai', 'Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(70, 'Sore', 'Ramai', 'Sering', 'Ringan', 'Tidak rawan', NULL, NULL),
(71, 'Sore', 'Ramai', 'Sering', 'Sedang', 'Rawan', NULL, NULL),
(72, 'Sore', 'Ramai', 'Sering', 'Berat', 'Sangat Rawan', NULL, NULL),
(73, 'Sore', 'Padat', 'Sangat Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(74, 'Sore', 'Padat', 'Sangat Jarang', 'Sedang', 'Rawan', NULL, NULL),
(75, 'Sore', 'Padat', 'Sangat Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(76, 'Sore', 'Padat', 'Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(77, 'Sore', 'Padat', 'Jarang', 'Sedang', 'Rawan', NULL, NULL),
(78, 'Sore', 'Padat', 'Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(79, 'Sore', 'Padat', 'Sering', 'Ringan', 'Rawan', NULL, NULL),
(80, 'Sore', 'Padat', 'Sering', 'Sedang', 'Sangat Rawan', NULL, NULL),
(81, 'Sore', 'Padat', 'Sering', 'Berat', 'Sangat Rawan', NULL, NULL),
(82, 'Malam', 'Tidak Padat', 'Sangat Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(83, 'Malam', 'Tidak Padat', 'Sangat Jarang', 'Sedang', 'Tidak rawan', NULL, NULL),
(84, 'Malam', 'Tidak Padat', 'Sangat Jarang', 'Berat', 'Rawan', NULL, NULL),
(85, 'Malam', 'Tidak Padat', 'Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(86, 'Malam', 'Tidak Padat', 'Jarang', 'Sedang', 'Rawan', NULL, NULL),
(87, 'Malam', 'Tidak Padat', 'Jarang', 'Berat', 'Rawan', NULL, NULL),
(88, 'Malam', 'Tidak Padat', 'Sering', 'Ringan', 'Tidak rawan', NULL, NULL),
(89, 'Malam', 'Tidak Padat', 'Sering', 'Sedang', 'Rawan', NULL, NULL),
(90, 'Malam', 'Tidak Padat', 'Sering', 'Berat', 'Sangat Rawan', NULL, NULL),
(91, 'Malam', 'Ramai', 'Sangat Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(92, 'Malam', 'Ramai', 'Sangat Jarang', 'Sedang', 'Tidak rawan', NULL, NULL),
(93, 'Malam', 'Ramai', 'Sangat Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(94, 'Malam', 'Ramai', 'Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(95, 'Malam', 'Ramai', 'Jarang', 'Sedang', 'Rawan', NULL, NULL),
(96, 'Malam', 'Ramai', 'Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(97, 'Malam', 'Ramai', 'Sering', 'Ringan', 'Tidak rawan', NULL, NULL),
(98, 'Malam', 'Ramai', 'Sering', 'Sedang', 'Sangat Rawan', NULL, NULL),
(99, 'Malam', 'Ramai', 'Sering', 'Berat', 'Sangat Rawan', NULL, NULL),
(100, 'Malam', 'Padat', 'Sangat Jarang', 'Ringan', 'Tidak rawan', NULL, NULL),
(101, 'Malam', 'Padat', 'Sangat Jarang', 'Sedang', 'Rawan', NULL, NULL),
(102, 'Malam', 'Padat', 'Sangat Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(103, 'Malam', 'Padat', 'Jarang', 'Ringan', 'Rawan', NULL, NULL),
(104, 'Malam', 'Padat', 'Jarang', 'Sedang', 'Rawan', NULL, NULL),
(105, 'Malam', 'Padat', 'Jarang', 'Berat', 'Sangat Rawan', NULL, NULL),
(106, 'Malam', 'Padat', 'Sering', 'Ringan', 'Rawan', NULL, NULL),
(107, 'Malam', 'Padat', 'Sering', 'Sedang', 'Sangat Rawan', NULL, NULL),
(108, 'Malam', 'Padat', 'Sering', 'Berat', 'Sangat Rawan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'User',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `no_telepon`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'wahyu@gmail.com', NULL, 'wahyu@gmail.com', '$2y$10$hp5O2QMM4eC./AMt5U0w5uOqAPRMmZct7ay3FhxEc9bAfv/8mpyN.', 'User', NULL, '2023-06-03 14:49:22', '2023-06-15 11:07:43'),
(4, 'admin', NULL, 'admin@gmail.com', '$2y$10$IUT/c6RD/Dl84Ybg0dlXvOyUDGA3F22y8fvmDQ0N3QNjwVgBNh.SG', 'ADMIN', NULL, '2023-06-03 15:40:32', '2023-06-03 15:40:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `arus_lantas`
--
ALTER TABLE `arus_lantas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jalans`
--
ALTER TABLE `jalans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jalans_slug_unique` (`slug`);

--
-- Indeks untuk tabel `kecelakaans`
--
ALTER TABLE `kecelakaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lokasis`
--
ALTER TABLE `lokasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `arus_lantas`
--
ALTER TABLE `arus_lantas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jalans`
--
ALTER TABLE `jalans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kecelakaans`
--
ALTER TABLE `kecelakaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1670;

--
-- AUTO_INCREMENT untuk tabel `lokasis`
--
ALTER TABLE `lokasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rules`
--
ALTER TABLE `rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
