-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2026 at 01:13 AM
-- Server version: 8.4.3
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simasnor`
--

-- --------------------------------------------------------

--
-- Table structure for table `bast`
--

CREATE TABLE `bast` (
  `id` int NOT NULL,
  `nomor_bast` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_petugas_bast` int NOT NULL,
  `tgl_bast` date NOT NULL,
  `create_by` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` datetime NOT NULL,
  `bulan_bast` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_ppk_bast` int NOT NULL,
  `rincian_output_bast` int NOT NULL,
  `status_ttd_mitra` enum('pending','disetujui') COLLATE utf8mb4_general_ci DEFAULT 'pending',
  `status_ttd_pegawai` enum('pending','disetujui','ditolak') COLLATE utf8mb4_general_ci DEFAULT 'pending',
  `waktu_ttd_selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bast`
--

INSERT INTO `bast` (`id`, `nomor_bast`, `id_petugas_bast`, `tgl_bast`, `create_by`, `create_at`, `bulan_bast`, `id_ppk_bast`, `rincian_output_bast`, `status_ttd_mitra`, `status_ttd_pegawai`, `waktu_ttd_selesai`) VALUES
(46, 'B-001/BAST/PL.714/01/2026', 30, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:19:56', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(47, 'B-002/BAST/PL.714/01/2026', 13, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:20:48', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(48, 'B-003/BAST/PL.714/01/2026', 93, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:21:38', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(49, 'B-004/BAST/PL.714/01/2026', 44, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:22:47', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(50, 'B-005/BAST/PL.714/01/2026', 86, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:23:36', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(51, 'B-006/BAST/PL.714/01/2026', 70, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:24:13', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(52, 'B-007/BAST/PL.714/01/2026', 56, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:24:43', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(53, 'B-008/BAST/PL.714/01/2026', 43, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:26:38', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(54, 'B-009/BAST/PL.714/01/2026', 47, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:27:07', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(55, 'B-010/BAST/PL.714/01/2026', 103, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:28:58', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(56, 'B-011/BAST/PL.714/01/2026', 206, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:29:47', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(57, 'B-012/BAST/PL.714/01/2026', 177, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:30:19', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(58, 'B-013/BAST/PL.714/01/2026', 193, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 05:30:56', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(59, 'B-014/BAST/PL.714/01/2026', 178, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:18:14', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(60, 'B-015/BAST/PL.714/01/2026', 145, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:19:05', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(61, 'B-016/BAST/PL.714/01/2026', 153, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:19:36', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(62, 'B-017/BAST/PL.714/01/2026', 167, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:20:10', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(63, 'B-018/BAST/PL.714/01/2026', 212, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:21:25', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(64, 'B-019/BAST/PL.714/01/2026', 232, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:21:57', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(65, 'B-020/BAST/PL.714/01/2026', 254, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:22:26', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(66, 'B-021/BAST/PL.714/01/2026', 252, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:23:08', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(67, 'B-022/BAST/PL.714/01/2026', 266, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:28:30', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(68, 'B-023/BAST/PL.714/01/2026', 300, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:29:04', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(69, 'B-024/BAST/PL.714/01/2026', 303, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:29:39', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(70, 'B-025/BAST/PL.714/01/2026', 311, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:30:14', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(71, 'B-026/BAST/PL.714/01/2026', 313, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:30:44', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(72, 'B-027/BAST/PL.714/01/2026', 330, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:31:13', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(73, 'B-028/BAST/PL.714/01/2026', 315, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:31:44', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(74, 'B-029/BAST/PL.714/01/2026', 390, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:33:22', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(75, 'B-030/BAST/PL.714/01/2026', 388, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:33:48', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(76, 'B-031/BAST/PL.714/01/2026', 372, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:34:12', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(77, 'B-032/BAST/PL.714/01/2026', 376, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:34:46', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(78, 'B-033/BAST/PL.714/01/2026', 358, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:36:31', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(79, 'B-034/BAST/PL.714/01/2026', 344, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:37:32', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(80, 'B-035/BAST/PL.714/01/2026', 426, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:38:15', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(81, 'B-036/BAST/PL.714/01/2026', 427, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:38:48', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(82, 'B-037/BAST/PL.714/01/2026', 443, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:39:13', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(83, 'B-038/BAST/PL.714/01/2026', 486, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:39:44', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(84, 'B-039/BAST/PL.714/01/2026', 436, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:40:13', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(85, 'B-040/BAST/PL.714/01/2026', 476, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:40:41', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(86, 'B-041/BAST/PL.714/01/2026', 469, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:41:23', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(87, 'B-042/BAST/PL.714/01/2026', 507, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:43:14', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(88, 'B-043/BAST/PL.714/01/2026', 508, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:43:41', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(89, 'B-044/BAST/PL.714/01/2026', 539, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:44:15', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(90, 'B-045/BAST/PL.714/01/2026', 534, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:44:43', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(91, 'B-046/BAST/PL.714/01/2026', 575, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:45:11', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(92, 'B-047/BAST/PL.714/01/2026', 566, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:45:39', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(93, 'B-048/BAST/PL.714/01/2026', 629, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:46:09', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(94, 'B-049/BAST/PL.714/01/2026', 633, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:46:36', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(95, 'B-050/BAST/PL.714/01/2026', 651, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:47:03', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(96, 'B-051/BAST/PL.714/01/2026', 688, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:47:41', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(97, 'B-052/BAST/PL.714/01/2026', 689, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:48:10', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(98, 'B-053/BAST/PL.714/01/2026', 723, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:48:38', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(99, 'B-054/BAST/PL.714/01/2026', 733, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:49:06', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(100, 'B-055/BAST/PL.714/01/2026', 721, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 06:49:33', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(101, 'B-056/BAST/PL.714/01/2026', 51, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 07:30:25', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(102, 'B-057/BAST/PL.714/01/2026', 144, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 07:31:30', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(103, 'B-058/BAST/PL.714/01/2026', 375, '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 07:31:52', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(104, 'B-059/BAST/PL.714/01/2026', 66, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 04:57:23', 'JANUARI 2026', 1, 4, 'pending', 'pending', NULL),
(105, 'B-060/BAST/PL.714/01/2026', 166, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 04:58:12', 'JANUARI 2026', 1, 4, 'pending', 'pending', NULL),
(106, 'B-061/BAST/PL.714/01/2026', 570, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 04:58:53', 'JANUARI 2026', 1, 4, 'pending', 'pending', NULL),
(107, 'B-062/BAST/PL.714/01/2026', 390, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:00:59', 'JANUARI 2026', 1, 4, 'pending', 'pending', NULL),
(108, 'B-063/BAST/PL.714/01/2026', 376, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:01:57', 'JANUARI 2026', 1, 4, 'pending', 'pending', NULL),
(109, 'B-064/BAST/PL.714/01/2026', 445, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:02:52', 'JANUARI 2026', 1, 4, 'pending', 'pending', NULL),
(110, 'B-065/BAST/PL.714/01/2026', 22, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:07:34', 'JANUARI 2026', 1, 9, 'pending', 'pending', NULL),
(111, 'B-066/BAST/PL.714/01/2026', 86, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:08:16', 'JANUARI 2026', 1, 9, 'pending', 'pending', NULL),
(112, 'B-067/BAST/PL.714/01/2026', 101, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:08:59', 'JANUARI 2026', 1, 9, 'pending', 'pending', NULL),
(113, 'B-068/BAST/PL.714/01/2026', 218, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:09:39', 'JANUARI 2026', 1, 9, 'pending', 'pending', NULL),
(114, 'B-069/BAST/PL.714/01/2026', 299, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:10:58', 'JANUARI 2026', 1, 9, 'pending', 'pending', NULL),
(115, 'B-070/BAST/PL.714/01/2026', 339, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:12:15', 'JANUARI 2026', 1, 9, 'pending', 'pending', NULL),
(116, 'B-071/BAST/PL.714/01/2026', 394, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:12:45', 'JANUARI 2026', 1, 9, 'pending', 'pending', NULL),
(117, 'B-072/BAST/PL.714/01/2026', 434, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:13:39', 'JANUARI 2026', 1, 9, 'pending', 'pending', NULL),
(118, 'B-073/BAST/PL.714/01/2026', 466, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:14:16', 'JANUARI 2026', 1, 9, 'pending', 'pending', NULL),
(119, 'B-074/BAST/PL.714/01/2026', 633, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:14:49', 'JANUARI 2026', 1, 9, 'pending', 'pending', NULL),
(120, 'B-075/BAST/PL.714/01/2026', 733, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:15:25', 'JANUARI 2026', 1, 9, 'pending', 'pending', NULL),
(122, 'B-077/BAST/PL.714/01/2026', 22, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:27:40', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(123, 'B-078/BAST/PL.714/01/2026', 20, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:28:07', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(124, 'B-079/BAST/PL.714/01/2026', 20, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:28:39', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(125, 'B-076/BAST/PL.714/01/2026', 20, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:29:53', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(126, 'B-080/BAST/PL.714/01/2026', 20, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:32:37', 'JANUARI 2026', 1, 18, 'pending', 'pending', NULL),
(127, 'B-081/BAST/PL.714/01/2026', 20, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:33:35', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(128, 'B-082/BAST/PL.714/01/2026', 24, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:35:18', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(129, 'B-083/BAST/PL.714/01/2026', 15, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:35:39', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(130, 'B-084/BAST/PL.714/01/2026', 38, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:35:59', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(131, 'B-085/BAST/PL.714/01/2026', 69, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:36:31', 'JANUARI 2026', 1, 18, 'pending', 'pending', NULL),
(132, 'B-086/BAST/PL.714/01/2026', 69, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:36:56', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(133, 'B-087/BAST/PL.714/01/2026', 34, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:37:28', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(134, 'B-088/BAST/PL.714/01/2026', 95, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:37:48', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(135, 'B-089/BAST/PL.714/01/2026', 66, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:38:09', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(136, 'B-090/BAST/PL.714/01/2026', 66, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:39:31', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(137, 'B-091/BAST/PL.714/01/2026', 95, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:39:52', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(138, 'B-092/BAST/PL.714/01/2026', 95, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:40:17', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(139, 'B-093/BAST/PL.714/01/2026', 120, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:41:09', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(140, 'B-094/BAST/PL.714/01/2026', 116, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:42:19', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(141, 'B-095/BAST/PL.714/01/2026', 116, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:42:39', 'JANUARI 2026', 1, 18, 'pending', 'pending', NULL),
(142, 'B-096/BAST/PL.714/01/2026', 116, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:43:37', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(143, 'B-097/BAST/PL.714/01/2026', 165, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 03:44:30', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(144, 'B-098/BAST/PL.714/01/2026', 176, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 04:42:19', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(145, 'B-099/BAST/PL.714/01/2026', 144, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 04:44:35', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(146, 'B-100/BAST/PL.714/01/2026', 178, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 04:46:02', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(147, 'B-101/BAST/PL.714/01/2026', 206, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 04:47:13', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(148, 'B-102/BAST/PL.714/01/2026', 167, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 04:49:06', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(149, 'B-103/BAST/PL.714/01/2026', 196, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 04:50:36', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(150, 'B-104/BAST/PL.714/01/2026', 122, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 04:51:38', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(151, 'B-105/BAST/PL.714/01/2026', 179, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 04:52:38', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(152, 'B-106/BAST/PL.714/01/2026', 218, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:01:48', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(153, 'B-107/BAST/PL.714/01/2026', 218, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:03:29', 'JANUARI 2026', 1, 15, 'pending', 'pending', NULL),
(154, 'B-108/BAST/PL.714/01/2026', 218, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:04:55', 'JANUARI 2026', 1, 18, 'pending', 'pending', NULL),
(155, 'B-109/BAST/PL.714/01/2026', 218, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:08:00', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(156, 'B-110/BAST/PL.714/01/2026', 218, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:09:21', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(157, 'B-111/BAST/PL.714/01/2026', 235, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:11:54', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(158, 'B-112/BAST/PL.714/01/2026', 237, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:12:51', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(159, 'B-113/BAST/PL.714/01/2026', 231, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:13:54', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(160, 'B-114/BAST/PL.714/01/2026', 225, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:14:52', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(161, 'B-115/BAST/PL.714/01/2026', 258, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:22:30', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(162, 'B-116/BAST/PL.714/01/2026', 257, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:24:07', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(163, 'B-117/BAST/PL.714/01/2026', 257, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:24:53', 'JANUARI 2026', 1, 18, 'pending', 'pending', NULL),
(164, 'B-118/BAST/PL.714/01/2026', 262, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:26:00', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(165, 'B-119/BAST/PL.714/01/2026', 256, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:26:57', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(166, 'B-120/BAST/PL.714/01/2026', 264, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:27:47', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(167, 'B-121/BAST/PL.714/01/2026', 299, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:32:25', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(168, 'B-122/BAST/PL.714/01/2026', 311, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:33:38', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(169, 'B-123/BAST/PL.714/01/2026', 297, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:34:47', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(170, 'B-124/BAST/PL.714/01/2026', 297, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:35:22', 'JANUARI 2026', 1, 18, 'pending', 'pending', NULL),
(171, 'B-125/BAST/PL.714/01/2026', 310, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:36:03', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(172, 'B-126/BAST/PL.714/01/2026', 331, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:41:08', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(173, 'B-127/BAST/PL.714/01/2026', 331, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:42:04', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(174, 'B-128/BAST/PL.714/01/2026', 323, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:43:06', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(175, 'B-129/BAST/PL.714/01/2026', 390, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:51:28', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(176, 'B-130/BAST/PL.714/01/2026', 390, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:52:05', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(177, 'B-131/BAST/PL.714/01/2026', 376, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:53:21', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(178, 'B-132/BAST/PL.714/01/2026', 376, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:54:01', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(179, 'B-133/BAST/PL.714/01/2026', 363, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:55:20', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(180, 'B-134/BAST/PL.714/01/2026', 350, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:56:26', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(181, 'B-135/BAST/PL.714/01/2026', 350, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:57:06', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(182, 'B-136/BAST/PL.714/01/2026', 345, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:58:04', 'JANUARI 2026', 1, 14, 'pending', 'pending', NULL),
(183, 'B-137/BAST/PL.714/01/2026', 345, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:58:40', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(184, 'B-138/BAST/PL.714/01/2026', 345, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 05:59:11', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(185, 'B-139/BAST/PL.714/01/2026', 375, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:00:18', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(186, 'B-140/BAST/PL.714/01/2026', 375, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:00:46', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(187, 'B-141/BAST/PL.714/01/2026', 358, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:01:40', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(188, 'B-142/BAST/PL.714/01/2026', 343, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:03:16', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(189, 'B-143/BAST/PL.714/01/2026', 429, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:09:28', 'JANUARI 2026', 1, 15, 'pending', 'pending', NULL),
(190, 'B-144/BAST/PL.714/01/2026', 407, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:10:16', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(191, 'B-145/BAST/PL.714/01/2026', 407, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:10:45', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(192, 'B-146/BAST/PL.714/01/2026', 402, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:11:35', 'JANUARI 2026', 1, 14, 'pending', 'pending', NULL),
(193, 'B-147/BAST/PL.714/01/2026', 402, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:12:04', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(194, 'B-148/BAST/PL.714/01/2026', 445, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:20:15', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(195, 'B-149/BAST/PL.714/01/2026', 434, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:21:07', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(196, 'B-150/BAST/PL.714/01/2026', 441, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:21:59', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(197, 'B-151/BAST/PL.714/01/2026', 486, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:22:55', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(198, 'B-152/BAST/PL.714/01/2026', 463, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:23:51', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(199, 'B-153/BAST/PL.714/01/2026', 463, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:24:49', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(200, 'B-154/BAST/PL.714/01/2026', 461, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:25:46', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(201, 'B-155/BAST/PL.714/01/2026', 467, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:26:52', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(202, 'B-156/BAST/PL.714/01/2026', 508, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:35:40', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(203, 'B-157/BAST/PL.714/01/2026', 521, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:36:40', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(204, 'B-158/BAST/PL.714/01/2026', 521, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 06:37:33', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(205, 'B-159/BAST/PL.714/01/2026', 543, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:37:32', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(206, 'B-160/BAST/PL.714/01/2026', 543, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:38:15', 'JANUARI 2026', 1, 18, 'pending', 'pending', NULL),
(207, 'B-161/BAST/PL.714/01/2026', 533, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:39:38', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(208, 'B-162/BAST/PL.714/01/2026', 541, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:40:40', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(209, 'B-163/BAST/PL.714/01/2026', 570, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:45:34', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(210, 'B-164/BAST/PL.714/01/2026', 570, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:46:26', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(211, 'B-165/BAST/PL.714/01/2026', 570, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:47:02', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(212, 'B-166/BAST/PL.714/01/2026', 562, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:48:42', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(213, 'B-167/BAST/PL.714/01/2026', 618, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:53:29', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(214, 'B-168/BAST/PL.714/01/2026', 622, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:54:57', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(215, 'B-169/BAST/PL.714/01/2026', 610, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:56:20', 'JANUARI 2026', 1, 14, 'pending', 'pending', NULL),
(216, 'B-170/BAST/PL.714/01/2026', 620, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:57:27', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(217, 'B-171/BAST/PL.714/01/2026', 620, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 07:58:07', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(218, 'B-172/BAST/PL.714/01/2026', 656, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 08:01:36', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(219, 'B-173/BAST/PL.714/01/2026', 656, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 08:02:16', 'JANUARI 2026', 1, 15, 'pending', 'pending', NULL),
(220, 'B-174/BAST/PL.714/01/2026', 656, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 08:02:59', 'JANUARI 2026', 1, 18, 'pending', 'pending', NULL),
(221, 'B-175/BAST/PL.714/01/2026', 656, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 08:04:33', 'JANUARI 2026', 1, 7, 'pending', 'pending', NULL),
(222, 'B-176/BAST/PL.714/01/2026', 656, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 08:06:12', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(223, 'B-177/BAST/PL.714/01/2026', 694, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 08:12:46', 'JANUARI 2026', 1, 15, 'pending', 'pending', NULL),
(224, 'B-178/BAST/PL.714/01/2026', 694, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 08:13:13', 'JANUARI 2026', 1, 8, 'pending', 'pending', NULL),
(225, 'B-179/BAST/PL.714/01/2026', 684, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 08:14:15', 'JANUARI 2026', 1, 14, 'pending', 'pending', NULL),
(226, 'B-180/BAST/PL.714/01/2026', 723, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 08:17:02', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(227, 'B-181/BAST/PL.714/01/2026', 723, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 08:18:08', 'JANUARI 2026', 1, 15, 'pending', 'pending', NULL),
(228, 'B-182/BAST/PL.714/01/2026', 723, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 08:19:05', 'JANUARI 2026', 1, 18, 'pending', 'pending', NULL),
(229, 'B-183/BAST/PL.714/01/2026', 733, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-06 08:27:40', 'JANUARI 2026', 1, 19, 'pending', 'pending', NULL),
(230, 'B-184/BAST/PL.714/01/2026', 317, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:53:44', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(231, 'B-185/BAST/PL.714/01/2026', 385, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:54:47', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(232, 'B-186/BAST/PL.714/01/2026', 389, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:55:19', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(233, 'B-187/BAST/PL.714/01/2026', 413, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:56:38', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(234, 'B-188/BAST/PL.714/01/2026', 408, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:57:14', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(235, 'B-189/BAST/PL.714/01/2026', 475, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:58:40', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(236, 'B-190/BAST/PL.714/01/2026', 439, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:59:15', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(237, 'B-191/BAST/PL.714/01/2026', 477, '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 06:00:25', 'JANUARI 2026', 1, 11, 'pending', 'pending', NULL),
(238, 'B-192/BAST/PL.714/01/2026', 218, '2026-02-02', 'Nailiatul Maghfirowati', '2026-02-12 08:18:22', 'FEBRUARI 2026', 1, 9, 'pending', 'pending', NULL),
(239, 'B-193/BAST/PL.714/02/2026', 22, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-24 07:25:01', 'FEBRUARI 2026', 1, 9, 'pending', 'pending', NULL),
(240, 'B-194/BAST/PL.714/02/2026', 86, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-24 07:29:11', 'FEBRUARI 2026', 1, 9, 'pending', 'pending', NULL),
(241, 'B-195/BAST/PL.714/02/2026', 101, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 01:50:40', 'FEBRUARI 2026', 1, 9, 'pending', 'pending', NULL),
(242, 'B-196/BAST/PL.714/02/2026', 299, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 01:51:31', 'FEBRUARI 2026', 1, 9, 'pending', 'pending', NULL),
(243, 'B-197/BAST/PL.714/02/2026', 339, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 01:52:04', 'FEBRUARI 2026', 1, 9, 'pending', 'pending', NULL),
(244, 'B-198/BAST/PL.714/02/2026', 394, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 01:52:26', 'FEBRUARI 2026', 1, 9, 'pending', 'pending', NULL),
(245, 'B-199/BAST/PL.714/02/2026', 466, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 01:53:49', 'FEBRUARI 2026', 1, 9, 'pending', 'pending', NULL),
(246, 'B-200/BAST/PL.714/02/2026', 434, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 01:54:41', 'FEBRUARI 2026', 1, 9, 'pending', 'pending', NULL),
(247, 'B-201/BAST/PL.714/02/2026', 633, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 01:56:16', 'FEBRUARI 2026', 1, 9, 'pending', 'pending', NULL),
(248, 'B-202/BAST/PL.714/02/2026', 733, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 01:59:30', 'FEBRUARI 2026', 1, 9, 'pending', 'pending', NULL),
(249, 'B-203/BAST/PL.714/02/2026', 13, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:09:43', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(250, 'B-204/BAST/PL.714/02/2026', 30, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:10:08', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(251, 'B-205/BAST/PL.714/02/2026', 44, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:10:47', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(252, 'B-206/BAST/PL.714/02/2026', 43, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:11:13', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(253, 'B-207/BAST/PL.714/02/2026', 70, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:11:43', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(254, 'B-208/BAST/PL.714/02/2026', 47, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:12:18', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(255, 'B-209/BAST/PL.714/02/2026', 93, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:12:43', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(256, 'B-210/BAST/PL.714/02/2026', 56, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:13:03', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(257, 'B-211/BAST/PL.714/02/2026', 86, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:13:20', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(258, 'B-212/BAST/PL.714/02/2026', 51, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:13:43', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(259, 'B-213/BAST/PL.714/02/2026', 103, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:15:01', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(260, 'B-214/BAST/PL.714/02/2026', 153, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:15:33', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(261, 'B-215/BAST/PL.714/02/2026', 193, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:16:02', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(262, 'B-216/BAST/PL.714/02/2026', 206, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:22:40', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(263, 'B-217/BAST/PL.714/02/2026', 178, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:23:03', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(264, 'B-218/BAST/PL.714/02/2026', 167, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:23:24', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(265, 'B-219/BAST/PL.714/02/2026', 145, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:23:46', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(266, 'B-220/BAST/PL.714/02/2026', 177, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:24:12', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(267, 'B-221/BAST/PL.714/02/2026', 144, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:24:40', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(268, 'B-222/BAST/PL.714/02/2026', 212, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:25:35', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(269, 'B-223/BAST/PL.714/02/2026', 232, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:32:39', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(270, 'B-224/BAST/PL.714/02/2026', 254, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:36:24', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(271, 'B-225/BAST/PL.714/02/2026', 266, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:39:33', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(272, 'B-226/BAST/PL.714/02/2026', 252, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:40:40', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(273, 'B-227/BAST/PL.714/02/2026', 311, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:41:44', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(274, 'B-228/BAST/PL.714/02/2026', 300, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:42:27', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(275, 'B-229/BAST/PL.714/02/2026', 303, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:43:07', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(276, 'B-230/BAST/PL.714/02/2026', 313, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:43:38', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(277, 'B-231/BAST/PL.714/02/2026', 330, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:44:24', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(278, 'B-232/BAST/PL.714/02/2026', 315, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:45:21', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(279, 'B-233/BAST/PL.714/02/2026', 389, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:46:07', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(280, 'B-234/BAST/PL.714/02/2026', 376, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:46:42', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(281, 'B-235/BAST/PL.714/02/2026', 390, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:47:16', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(282, 'B-236/BAST/PL.714/02/2026', 358, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:48:04', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(283, 'B-237/BAST/PL.714/02/2026', 344, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:48:26', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(284, 'B-238/BAST/PL.714/02/2026', 372, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:48:58', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(285, 'B-239/BAST/PL.714/02/2026', 375, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:49:27', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(286, 'B-240/BAST/PL.714/02/2026', 426, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:50:15', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(287, 'B-241/BAST/PL.714/02/2026', 427, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:50:57', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(288, 'B-242/BAST/PL.714/02/2026', 486, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:51:55', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(289, 'B-243/BAST/PL.714/02/2026', 477, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:52:36', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(290, 'B-244/BAST/PL.714/02/2026', 443, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:53:09', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(291, 'B-245/BAST/PL.714/02/2026', 476, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:53:37', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(292, 'B-246/BAST/PL.714/02/2026', 469, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:54:28', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(293, 'B-247/BAST/PL.714/02/2026', 436, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:54:59', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(294, 'B-248/BAST/PL.714/02/2026', 508, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:55:38', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(295, 'B-249/BAST/PL.714/02/2026', 507, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:56:06', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(296, 'B-250/BAST/PL.714/02/2026', 539, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:56:39', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(297, 'B-251/BAST/PL.714/02/2026', 534, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:57:02', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(298, 'B-252/BAST/PL.714/02/2026', 566, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:57:51', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(299, 'B-253/BAST/PL.714/02/2026', 575, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:58:22', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(300, 'B-254/BAST/PL.714/02/2026', 629, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:59:01', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(301, 'B-255/BAST/PL.714/02/2026', 633, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 02:59:32', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(302, 'B-256/BAST/PL.714/02/2026', 651, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 03:00:15', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(303, 'B-257/BAST/PL.714/02/2026', 689, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 03:00:42', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(304, 'B-258/BAST/PL.714/02/2026', 688, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 03:01:10', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(305, 'B-259/BAST/PL.714/02/2026', 723, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 03:01:31', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(306, 'B-260/BAST/PL.714/02/2026', 733, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 03:02:38', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(307, 'B-261/BAST/PL.714/02/2026', 721, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-25 03:03:03', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(308, 'B-262/BAST/PL.714/02/2026', 20, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 01:14:42', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(310, 'B-264/BAST/PL.714/02/2026', 330, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 01:20:10', 'FEBRUARI 2026', 1, 15, 'pending', 'pending', NULL),
(311, 'B-265/BAST/PL.714/02/2026', 323, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 01:22:05', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(312, 'B-266/BAST/PL.714/02/2026', 331, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 01:23:03', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(313, 'B-267/BAST/PL.714/02/2026', 299, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 01:25:11', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(314, 'B-268/BAST/PL.714/02/2026', 311, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 01:26:22', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(315, 'B-269/BAST/PL.714/02/2026', 297, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 01:27:21', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(316, 'B-270/BAST/PL.714/02/2026', 165, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 01:31:56', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(318, 'B-272/BAST/PL.714/02/2026', 363, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 01:38:22', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(319, 'B-273/BAST/PL.714/02/2026', 257, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 01:45:05', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(320, 'B-274/BAST/PL.714/02/2026', 258, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 01:45:51', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(321, 'B-275/BAST/PL.714/02/2026', 262, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 01:57:55', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(322, 'B-276/BAST/PL.714/02/2026', 543, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:00:53', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(323, 'B-277/BAST/PL.714/02/2026', 543, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:01:24', 'FEBRUARI 2026', 1, 15, 'pending', 'pending', NULL),
(324, 'B-278/BAST/PL.714/02/2026', 562, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:31:31', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(325, 'B-279/BAST/PL.714/02/2026', 570, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:32:53', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(326, 'B-280/BAST/PL.714/02/2026', 620, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:35:54', 'FEBRUARI 2026', 1, 15, 'pending', 'pending', NULL),
(327, 'B-281/BAST/PL.714/02/2026', 622, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:37:21', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(328, 'B-282/BAST/PL.714/02/2026', 618, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:39:16', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(329, 'B-283/BAST/PL.714/02/2026', 429, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:40:34', 'FEBRUARI 2026', 1, 15, 'pending', 'pending', NULL),
(330, 'B-284/BAST/PL.714/02/2026', 521, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:43:02', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(331, 'B-285/BAST/PL.714/02/2026', 656, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:44:27', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(332, 'B-286/BAST/PL.714/02/2026', 656, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:44:57', 'FEBRUARI 2026', 1, 15, 'pending', 'pending', NULL),
(333, 'B-287/BAST/PL.714/02/2026', 38, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:55:46', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(334, 'B-288/BAST/PL.714/02/2026', 69, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:57:04', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(335, 'B-289/BAST/PL.714/02/2026', 34, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:57:55', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(336, 'B-290/BAST/PL.714/02/2026', 95, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 02:59:12', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(337, 'B-291/BAST/PL.714/02/2026', 120, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 03:01:21', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(338, 'B-292/BAST/PL.714/02/2026', 116, '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-27 03:02:14', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(339, 'B-293/BAST/PL.714/02/2026', 388, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-02 01:29:38', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(340, 'B-294/BAST/PL.714/02/2026', 20, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-05 07:55:30', 'FEBRUARI 2026', 1, 18, 'pending', 'pending', NULL),
(341, 'B-295/BAST/PL.714/02/2026', 22, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-05 07:56:17', 'FEBRUARI 2026', 1, 18, 'pending', 'pending', NULL),
(342, 'B-296/BAST/PL.714/02/2026', 350, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-09 05:43:53', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(343, 'B-297/BAST/PL.714/02/2026', 541, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-10 07:09:08', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(344, 'B-298/BAST/PL.714/02/2026', 317, '2026-03-11', 'Nailiatul Maghfirowati', '2026-03-12 01:13:15', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(345, 'B-299/BAST/PL.714/02/2026', 385, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-12 01:15:47', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(346, 'B-300/BAST/PL.714/02/2026', 385, '2026-03-11', 'Nailiatul Maghfirowati', '2026-03-12 01:18:18', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(347, 'B-301/BAST/PL.714/03/2026', 413, '2026-03-11', 'Nailiatul Maghfirowati', '2026-03-12 01:27:03', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(348, 'B-302/BAST/PL.714/03/2026', 408, '2026-03-11', 'Nailiatul Maghfirowati', '2026-03-12 01:28:02', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(349, 'B-303/BAST/PL.714/03/2026', 475, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-12 01:30:21', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(350, 'B-304/BAST/PL.714/03/2026', 475, '2026-03-11', 'Nailiatul Maghfirowati', '2026-03-12 01:32:17', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(351, 'B-305/BAST/PL.714/03/2026', 439, '2026-03-11', 'Nailiatul Maghfirowati', '2026-03-12 01:33:41', 'FEBRUARI 2026', 1, 11, 'pending', 'pending', NULL),
(381, 'B-306/BAST/PL.714/02/2026', 24, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-25 05:23:57', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(382, 'B-307/BAST/PL.714/02/2026', 38, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-25 05:25:16', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(383, 'B-308/BAST/PL.714/02/2026', 38, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-25 05:26:06', 'FEBRUARI 2026', 1, 18, 'pending', 'pending', NULL),
(384, 'B-309/BAST/PL.714/02/2026', 69, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-25 05:26:48', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(385, 'B-310/BAST/PL.714/02/2026', 69, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-25 05:27:05', 'FEBRUARI 2026', 1, 18, 'pending', 'pending', NULL),
(386, 'B-311/BAST/PL.714/02/2026', 95, '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-25 05:27:34', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(388, 'B-0271/BAST/PL.714/02/2026', 179, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 02:47:46', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(389, 'B-312/BAST/PL.714/02/2026', 179, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 02:49:53', 'FEBRUARI 2026', 1, 18, 'pending', 'pending', NULL),
(390, 'B-313/BAST/PL.714/02/2026', 375, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 03:09:20', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(391, 'B-314/BAST/PL.714/02/2026', 375, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 03:10:17', 'FEBRUARI 2026', 1, 8, 'pending', 'pending', NULL),
(392, 'B-0263/BAST/PL.714/02/2026', 22, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 03:20:23', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(393, 'B-315/BAST/PL.714/02/2026', 390, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 04:17:06', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(394, 'B-316/BAST/PL.714/02/2026', 390, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 04:17:43', 'FEBRUARI 2026', 1, 8, 'pending', 'pending', NULL),
(395, 'B-317/BAST/PL.714/02/2026', 264, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 04:21:09', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(396, 'B-318/BAST/PL.714/02/2026', 257, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 04:27:51', 'FEBRUARI 2026', 1, 18, 'pending', 'pending', NULL),
(397, 'B-319/BAST/PL.714/02/2026', 256, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 04:30:52', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(398, 'B-320/BAST/PL.714/02/2026', 345, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 04:37:44', 'FEBRUARI 2026', 1, 14, 'pending', 'pending', NULL),
(399, 'B-321/BAST/PL.714/02/2026', 345, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 04:38:21', 'FEBRUARI 2026', 1, 6, 'pending', 'pending', NULL),
(400, 'B-322/BAST/PL.714/02/2026', 345, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 05:14:49', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(401, 'B-323/BAST/PL.714/02/2026', 235, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 05:19:54', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(402, 'B-324/BAST/PL.714/02/2026', 235, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 05:20:35', 'FEBRUARI 2026', 1, 18, 'pending', 'pending', NULL),
(403, 'B-325/BAST/PL.714/02/2026', 237, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 05:25:19', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL);
INSERT INTO `bast` (`id`, `nomor_bast`, `id_petugas_bast`, `tgl_bast`, `create_by`, `create_at`, `bulan_bast`, `id_ppk_bast`, `rincian_output_bast`, `status_ttd_mitra`, `status_ttd_pegawai`, `waktu_ttd_selesai`) VALUES
(404, 'B-0326/BAST/PL.714/02/2026', 231, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 05:27:41', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(405, 'B-0327/BAST/PL.714/02/2026', 218, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 05:30:01', 'FEBRUARI 2026', 1, 19, 'pending', 'pending', NULL),
(406, 'B-0328/BAST/PL.714/02/2026', 218, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 05:30:28', 'FEBRUARI 2026', 1, 15, 'pending', 'pending', NULL),
(407, 'B-0329/BAST/PL.714/02/2026', 218, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 05:31:21', 'FEBRUARI 2026', 1, 18, 'pending', 'pending', NULL),
(408, 'B-0330/BAST/PL.714/02/2026', 218, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 05:31:51', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(409, 'B-0331/BAST/PL.714/02/2026', 402, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 06:03:26', 'FEBRUARI 2026', 1, 14, 'pending', 'pending', NULL),
(410, 'B-0332/BAST/PL.714/02/2026', 402, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 06:03:47', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(411, 'B-0333/BAST/PL.714/02/2026', 407, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 06:32:21', 'FEBRUARI 2026', 1, 6, 'pending', 'pending', NULL),
(412, 'B-0334/BAST/PL.714/02/2026', 407, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 06:33:36', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(413, 'B-0335/BAST/PL.714/02/2026', 562, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 07:11:31', 'FEBRUARI 2026', 1, 18, 'pending', 'pending', NULL),
(414, 'B-0336/BAST/PL.714/02/2026', 533, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 07:19:42', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(415, 'B-0337/BAST/PL.714/02/2026', 376, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 07:21:22', 'FEBRUARI 2026', 1, 7, 'pending', 'pending', NULL),
(416, 'B-0338/BAST/PL.714/02/2026', 376, '2026-02-28', 'Nailiatul Maghfirowati', '2026-04-01 07:22:50', 'FEBRUARI 2026', 1, 8, 'pending', 'pending', NULL),
(417, 'B-0339/BAST/PL.714/03/2026', 41, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 01:48:40', 'JANUARI 2026', 1, 6, 'pending', 'pending', NULL),
(418, 'B-0340/BAST/PL.714/03/2026', 24, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 01:49:31', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(419, 'B-0341/BAST/PL.714/03/2026', 20, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 01:50:11', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(420, 'B-0342/BAST/PL.714/03/2026', 20, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 01:50:44', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(421, 'B-0343/BAST/PL.714/03/2026', 22, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 01:52:27', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(422, 'B-0344/BAST/PL.714/03/2026', 22, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 01:52:43', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(423, 'B-0345/BAST/PL.714/03/2026', 15, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 01:56:03', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(424, 'B-0346/BAST/PL.714/03/2026', 59, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:01:22', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(425, 'B-0347/BAST/PL.714/03/2026', 66, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:03:02', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(426, 'B-0348/BAST/PL.714/03/2026', 66, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:03:40', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(427, 'B-0349/BAST/PL.714/03/2026', 95, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:05:03', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(428, 'B-0350/BAST/PL.714/03/2026', 95, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:05:26', 'MARET 2026', 1, 6, 'pending', 'pending', NULL),
(429, 'B-0351/BAST/PL.714/03/2026', 95, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:05:57', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(430, 'B-0352/BAST/PL.714/03/2026', 41, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:09:24', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(431, 'B-0353/BAST/PL.714/03/2026', 41, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:09:42', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(432, 'B-0354/BAST/PL.714/03/2026', 86, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:11:52', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(433, 'B-0355/BAST/PL.714/03/2026', 34, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:13:21', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(434, 'B-0356/BAST/PL.714/03/2026', 69, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:14:40', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(435, 'B-0357/BAST/PL.714/03/2026', 69, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:14:56', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(436, 'B-0358/BAST/PL.714/03/2026', 38, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:17:04', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(437, 'B-0359/BAST/PL.714/03/2026', 38, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:17:22', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(438, 'B-0360/BAST/PL.714/03/2026', 115, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:20:20', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(439, 'B-0361/BAST/PL.714/03/2026', 120, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:21:43', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(440, 'B-0362/BAST/PL.714/03/2026', 120, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:21:59', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(441, 'B-0363/BAST/PL.714/03/2026', 116, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:23:33', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(442, 'B-0364/BAST/PL.714/03/2026', 116, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:23:48', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(443, 'B-0365/BAST/PL.714/03/2026', 116, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:24:05', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(444, 'B-0366/BAST/PL.714/03/2026', 206, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:26:58', 'MARET 2026', 1, 14, 'pending', 'pending', NULL),
(445, 'B-0367/BAST/PL.714/03/2026', 206, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:29:05', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(446, 'B-0368/BAST/PL.714/03/2026', 165, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:30:52', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(447, 'B-0369/BAST/PL.714/03/2026', 165, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:31:18', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(448, 'B-0370/BAST/PL.714/03/2026', 179, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:32:54', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(449, 'B-0371/BAST/PL.714/03/2026', 179, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:33:21', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(450, 'B-0372/BAST/PL.714/03/2026', 122, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:34:58', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(451, 'B-0373/BAST/PL.714/03/2026', 196, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:36:08', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(452, 'B-0374/BAST/PL.714/03/2026', 167, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:37:45', 'MARET 2026', 1, 6, 'pending', 'pending', NULL),
(453, 'B-0375/BAST/PL.714/03/2026', 167, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:38:16', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(454, 'B-0376/BAST/PL.714/03/2026', 144, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:40:25', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(455, 'B-0377/BAST/PL.714/03/2026', 176, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:41:50', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(456, 'B-0378/BAST/PL.714/03/2026', 178, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:43:20', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(457, 'B-0379/BAST/PL.714/03/2026', 235, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:45:17', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(458, 'B-0380/BAST/PL.714/03/2026', 235, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:45:52', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(459, 'B-0381/BAST/PL.714/03/2026', 237, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:47:22', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(460, 'B-0382/BAST/PL.714/03/2026', 237, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:47:57', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(461, 'B-0383/BAST/PL.714/03/2026', 231, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:49:16', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(462, 'B-0384/BAST/PL.714/03/2026', 218, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:51:23', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(463, 'B-0385/BAST/PL.714/03/2026', 218, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:51:49', 'MARET 2026', 1, 15, 'pending', 'pending', NULL),
(464, 'B-0386/BAST/PL.714/03/2026', 218, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:52:28', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(465, 'B-0387/BAST/PL.714/03/2026', 218, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:52:59', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(466, 'B-0388/BAST/PL.714/03/2026', 218, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:53:29', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(467, 'B-0389/BAST/PL.714/03/2026', 256, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:55:30', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(468, 'B-0390/BAST/PL.714/03/2026', 264, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:57:01', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(469, 'B-0391/BAST/PL.714/03/2026', 258, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:58:23', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(470, 'B-0392/BAST/PL.714/03/2026', 258, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 02:58:55', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(471, 'B-0393/BAST/PL.714/03/2026', 262, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:00:06', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(472, 'B-0394/BAST/PL.714/03/2026', 274, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:01:26', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(473, 'B-0395/BAST/PL.714/03/2026', 257, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:02:48', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(474, 'B-0396/BAST/PL.714/03/2026', 257, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:03:27', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(475, 'B-0397/BAST/PL.714/03/2026', 257, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:04:00', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(476, 'B-0398/BAST/PL.714/03/2026', 310, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:06:00', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(477, 'B-0399/BAST/PL.714/03/2026', 299, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:07:11', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(478, 'B-0400/BAST/PL.714/03/2026', 299, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:07:48', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(479, 'B-0401/BAST/PL.714/03/2026', 311, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:09:24', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(480, 'B-0402/BAST/PL.714/03/2026', 311, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:10:00', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(481, 'B-0403/BAST/PL.714/03/2026', 297, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:11:20', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(482, 'B-0404/BAST/PL.714/03/2026', 297, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:11:49', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(483, 'B-0405/BAST/PL.714/03/2026', 300, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:12:57', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(484, 'B-0406/BAST/PL.714/03/2026', 331, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:16:05', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(485, 'B-0407/BAST/PL.714/03/2026', 331, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:16:38', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(486, 'B-0408/BAST/PL.714/03/2026', 331, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:17:27', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(487, 'B-0409/BAST/PL.714/03/2026', 323, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:19:20', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(488, 'B-0410/BAST/PL.714/03/2026', 323, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:19:52', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(489, 'B-0411/BAST/PL.714/03/2026', 363, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:25:27', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(490, 'B-0412/BAST/PL.714/03/2026', 363, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:26:22', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(491, 'B-0413/BAST/PL.714/03/2026', 385, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:27:56', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(492, 'B-0414/BAST/PL.714/03/2026', 388, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:30:06', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(493, 'B-0415/BAST/PL.714/03/2026', 345, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:31:30', 'MARET 2026', 1, 14, 'pending', 'pending', NULL),
(494, 'B-0416/BAST/PL.714/03/2026', 345, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:32:34', 'MARET 2026', 1, 6, 'pending', 'pending', NULL),
(495, 'B-0417/BAST/PL.714/03/2026', 345, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:33:09', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(496, 'B-0418/BAST/PL.714/03/2026', 390, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:34:40', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(497, 'B-0419/BAST/PL.714/03/2026', 390, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:35:16', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(498, 'B-0420/BAST/PL.714/03/2026', 376, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:36:51', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(499, 'B-0421/BAST/PL.714/03/2026', 376, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:37:31', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(500, 'B-0422/BAST/PL.714/03/2026', 350, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:40:57', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(501, 'B-0423/BAST/PL.714/03/2026', 350, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:41:32', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(502, 'B-0425/BAST/PL.714/03/2026', 375, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:43:31', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(503, 'B-0424/BAST/PL.714/03/2026', 375, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:44:06', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(504, 'B-0426/BAST/PL.714/03/2026', 364, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:45:18', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(505, 'B-0427/BAST/PL.714/03/2026', 343, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:46:43', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(506, 'B-0428/BAST/PL.714/03/2026', 372, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:47:52', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(507, 'B-0429/BAST/PL.714/03/2026', 358, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:49:10', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(508, 'B-0430/BAST/PL.714/03/2026', 402, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:53:06', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(509, 'B-0431/BAST/PL.714/03/2026', 429, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:54:30', 'MARET 2026', 1, 15, 'pending', 'pending', NULL),
(510, 'B-0432/BAST/PL.714/03/2026', 407, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:55:49', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(511, 'B-0433/BAST/PL.714/03/2026', 407, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:56:18', 'MARET 2026', 1, 6, 'pending', 'pending', NULL),
(512, 'B-0434/BAST/PL.714/03/2026', 407, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:57:02', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(513, 'B-0435/BAST/PL.714/03/2026', 445, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 03:59:36', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(514, 'B-0436/BAST/PL.714/03/2026', 441, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:01:20', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(515, 'B-0437/BAST/PL.714/03/2026', 434, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:02:36', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(516, 'B-0438/BAST/PL.714/03/2026', 486, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:03:58', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(517, 'B-0439/BAST/PL.714/03/2026', 475, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:05:08', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(518, 'B-0440/BAST/PL.714/03/2026', 461, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:06:28', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(519, 'B-0441/BAST/PL.714/03/2026', 461, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:06:56', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(520, 'B-0442/BAST/PL.714/03/2026', 463, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:08:17', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(522, 'B-0443/BAST/PL.714/03/2026', 463, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:10:37', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(523, 'B-0444/BAST/PL.714/03/2026', 467, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:11:51', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(530, 'B-0445/BAST/PL.714/03/2026', 521, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:22:00', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(531, 'B-0446/BAST/PL.714/03/2026', 521, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:22:43', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(532, 'B-0447/BAST/PL.714/03/2026', 521, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:23:18', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(533, 'B-0448/BAST/PL.714/03/2026', 533, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:24:25', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(534, 'B-0449/BAST/PL.714/03/2026', 543, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:25:25', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(535, 'B-0450/BAST/PL.714/03/2026', 543, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:25:54', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(536, 'B-0451/BAST/PL.714/03/2026', 525, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:26:52', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(537, 'B-0452/BAST/PL.714/03/2026', 541, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:28:21', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(538, 'B-0453/BAST/PL.714/03/2026', 541, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:28:45', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(539, 'B-0454/BAST/PL.714/03/2026', 570, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:36:41', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(540, 'B-0455/BAST/PL.714/03/2026', 570, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:37:08', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(541, 'B-0456/BAST/PL.714/03/2026', 562, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:38:40', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(542, 'B-0457/BAST/PL.714/03/2026', 562, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:39:08', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(543, 'B-0458/BAST/PL.714/03/2026', 618, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:41:11', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(544, 'B-0459/BAST/PL.714/03/2026', 618, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:41:53', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(545, 'B-0460/BAST/PL.714/03/2026', 622, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:43:19', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(546, 'B-0461/BAST/PL.714/03/2026', 620, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:44:52', 'MARET 2026', 1, 6, 'pending', 'pending', NULL),
(547, 'B-0462/BAST/PL.714/03/2026', 620, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:45:21', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(548, 'B-0463/BAST/PL.714/03/2026', 620, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:45:48', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(549, 'B-0464/BAST/PL.714/03/2026', 656, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:47:34', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(550, 'B-0465/BAST/PL.714/03/2026', 656, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:48:13', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(551, 'B-0466/BAST/PL.714/03/2026', 656, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:48:55', 'MARET 2026', 1, 7, 'pending', 'pending', NULL),
(552, 'B-0467/BAST/PL.714/03/2026', 656, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:49:30', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(553, 'B-0468/BAST/PL.714/03/2026	', 694, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:54:05', 'MARET 2026', 1, 8, 'pending', 'pending', NULL),
(554, 'B-0469/BAST/PL.714/03/2026', 723, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:56:12', 'MARET 2026', 1, 19, 'pending', 'pending', NULL),
(555, 'B-0470/BAST/PL.714/03/2026', 723, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:56:32', 'MARET 2026', 1, 18, 'pending', 'pending', NULL),
(556, 'B-0471/BAST/PL.714/03/2026', 733, '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 04:58:33', 'MARET 2026', 1, 19, 'pending', 'pending', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cek_honor_petugas_view`
-- (See below for the actual view)
--
CREATE TABLE `cek_honor_petugas_view` (
`id` int
,`id_matrik_honor` int
,`id_petugas` int
,`jabatan` varchar(255)
,`volume_spk` int
,`volume_bast` int
,`satuan` varchar(255)
,`harga_satuan` int
,`total` int
,`total_honor` bigint
,`cek_double` int
,`status_spk` int
,`id_spk` int
,`status_bast` int
,`id_bast` int
,`rincian_output_detail` int
,`kak` int
,`sk` int
,`spk_ttd` int
,`bast_ttd` int
,`selesai_fp` int
,`pengajuan_spm` int
,`terbit_sp2d` int
,`tgl_sp2d` varchar(255)
,`nik` varchar(255)
,`nama_petugas` varchar(255)
,`alamat` varchar(255)
,`kecamatan` varchar(255)
,`pekerjaan` varchar(255)
,`email` varchar(255)
,`sobat_id` varchar(255)
,`jabatan_petugas` varchar(255)
,`status_petugas` varchar(255)
,`id_matrik` int
,`id_rincian_output` int
,`id_nama_survei` int
,`uraian_kegiatan` varchar(255)
,`id_bulan_pelaksanaan` int
,`tahun` varchar(255)
,`jangka_waktu` varchar(255)
,`cek_double_matrik` varchar(255)
,`no_surat_spk` int
,`no_surat_bast` int
,`create_by` int
,`create_at` date
,`harga_satuan_honor` int
,`bulan` varchar(255)
,`kode_bulan` varchar(255)
,`nama_satuan` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cek_sbml_view`
-- (See below for the actual view)
--
CREATE TABLE `cek_sbml_view` (
`id` int
,`id_matrik_honor` int
,`id_petugas` int
,`jabatan` varchar(255)
,`volume_spk` int
,`volume_bast` int
,`satuan` varchar(255)
,`harga_satuan` int
,`total` int
,`id_rincian_output` int
,`id_nama_survei` int
,`uraian_kegiatan` varchar(255)
,`id_bulan_pelaksanaan` int
,`tahun` varchar(255)
,`jangka_waktu` varchar(255)
,`nik` varchar(255)
,`nama_petugas` varchar(255)
,`bulan` varchar(255)
,`kode_bulan` varchar(255)
,`satuan2` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `copy_petugas_view`
-- (See below for the actual view)
--
CREATE TABLE `copy_petugas_view` (
`id_rincian_output` int
,`id` int
,`id_petugas` int
,`status_bast` int
,`status_spk` int
,`volume_spk` int
,`volume_bast` int
,`harga_satuan` int
,`total` int
,`uraian_kegiatan` varchar(255)
,`tahun` varchar(255)
,`jangka_waktu` varchar(255)
,`harga_satuan_honor` int
,`nik` varchar(255)
,`nama_petugas` varchar(255)
,`alamat` varchar(255)
,`kecamatan` varchar(255)
,`pekerjaan` varchar(255)
,`email` varchar(255)
,`sobat_id` varchar(255)
,`status_petugas` varchar(255)
,`id_jabatan` int
,`jabatan` varchar(255)
,`keterangan_jabatan` varchar(255)
,`id_satuan` int
,`satuan` varchar(255)
,`rincian_output` varchar(255)
,`status_rincian_output` varchar(255)
,`id_nama_survei` int
,`nama_survei` varchar(255)
,`bulan` varchar(255)
,`kode_bulan` varchar(255)
,`bulan_tahun` varchar(511)
);

-- --------------------------------------------------------

--
-- Table structure for table `copy_spk_to_detail`
--

CREATE TABLE `copy_spk_to_detail` (
  `id` int NOT NULL,
  `dummy` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_matrik_honor`
--

CREATE TABLE `detail_matrik_honor` (
  `id` int NOT NULL,
  `id_matrik_honor` int NOT NULL,
  `id_petugas` int NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `volume_spk` int NOT NULL,
  `volume_bast` int NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `harga_satuan` int NOT NULL,
  `total` int NOT NULL,
  `cek_double` int NOT NULL,
  `status_spk` int NOT NULL,
  `id_spk` int NOT NULL,
  `status_bast` int NOT NULL,
  `id_bast` int NOT NULL,
  `rincian_output_detail` int NOT NULL,
  `kak` int NOT NULL,
  `sk` int NOT NULL,
  `spk_ttd` int NOT NULL,
  `bast_ttd` int NOT NULL,
  `selesai_fp` int NOT NULL,
  `pengajuan_spm` int NOT NULL,
  `terbit_sp2d` int NOT NULL,
  `tgl_sp2d` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_matrik_honor`
--

INSERT INTO `detail_matrik_honor` (`id`, `id_matrik_honor`, `id_petugas`, `jabatan`, `volume_spk`, `volume_bast`, `satuan`, `harga_satuan`, `total`, `cek_double`, `status_spk`, `id_spk`, `status_bast`, `id_bast`, `rincian_output_detail`, `kak`, `sk`, `spk_ttd`, `bast_ttd`, `selesai_fp`, `pengajuan_spm`, `terbit_sp2d`, `tgl_sp2d`) VALUES
(220, 67, 570, '1', 1, 1, '7', 66000, 66000, 67570, 1, 54, 1, 106, 4, 1, 1, 1, 1, 1, 1, 1, '30 Jan 2026'),
(221, 67, 166, '1', 3, 3, '7', 66000, 198000, 67166, 1, 53, 1, 105, 4, 1, 1, 1, 1, 1, 1, 1, '30 Jan 2026'),
(222, 67, 66, '1', 5, 5, '7', 66000, 330000, 6766, 1, 59, 1, 104, 4, 1, 1, 0, 0, 1, 1, 1, '30 Jan 2026'),
(223, 66, 570, '1', 1, 1, '7', 66000, 66000, 66570, 1, 54, 1, 106, 4, 1, 1, 1, 1, 1, 1, 1, '30 Jan 2026'),
(224, 66, 376, '1', 5, 5, '7', 66000, 330000, 66376, 1, 60, 1, 108, 4, 1, 1, 1, 1, 1, 1, 1, '30 Jan 2026'),
(225, 66, 445, '1', 5, 5, '7', 66000, 330000, 66445, 1, 57, 1, 109, 4, 1, 1, 0, 0, 1, 1, 1, '30 Jan 2026'),
(226, 66, 390, '1', 5, 5, '7', 66000, 330000, 66390, 1, 58, 1, 107, 4, 1, 1, 1, 1, 1, 1, 1, '30 Jan 2026'),
(227, 66, 166, '1', 1, 1, '7', 66000, 66000, 66166, 1, 53, 1, 105, 4, 1, 1, 1, 1, 1, 1, 1, '30 Jan 2026'),
(228, 63, 30, '1', 1, 1, '19', 174000, 174000, 0, 1, 146, 1, 46, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(229, 63, 44, '1', 2, 2, '19', 174000, 348000, 6344, 1, 154, 1, 49, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(230, 63, 13, '1', 2, 2, '19', 174000, 348000, 0, 1, 175, 1, 47, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(231, 63, 629, '1', 2, 2, '19', 174000, 348000, 63629, 1, 170, 1, 93, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(232, 63, 508, '1', 2, 2, '19', 174000, 348000, 63508, 1, 106, 1, 88, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(233, 63, 539, '1', 2, 2, '19', 174000, 348000, 63539, 1, 172, 1, 89, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(234, 63, 443, '1', 1, 1, '19', 174000, 174000, 63443, 1, 143, 1, 82, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(235, 63, 721, '1', 2, 2, '19', 174000, 348000, 63721, 1, 173, 1, 100, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(236, 63, 376, '1', 2, 2, '19', 174000, 348000, 63376, 1, 60, 1, 77, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(237, 63, 153, '1', 2, 2, '19', 174000, 348000, 63153, 1, 167, 1, 61, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(238, 63, 315, '1', 2, 2, '19', 174000, 348000, 63315, 1, 158, 1, 73, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(239, 63, 193, '1', 2, 2, '19', 174000, 348000, 63193, 1, 168, 1, 58, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(240, 63, 486, '1', 1, 1, '19', 174000, 174000, 63486, 1, 112, 1, 83, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(241, 63, 103, '1', 1, 1, '19', 174000, 174000, 63103, 1, 142, 1, 55, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(242, 63, 476, '1', 2, 2, '19', 174000, 348000, 63476, 1, 164, 1, 85, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(243, 63, 43, '1', 2, 2, '19', 174000, 348000, 6343, 1, 155, 1, 53, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(244, 63, 206, '1', 1, 1, '19', 174000, 174000, 63206, 1, 118, 1, 56, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(245, 63, 254, '1', 2, 2, '19', 174000, 348000, 63254, 1, 148, 1, 65, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(246, 63, 390, '1', 1, 1, '19', 174000, 174000, 63390, 1, 58, 1, 74, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(247, 63, 70, '1', 2, 2, '19', 174000, 348000, 6370, 1, 156, 1, 51, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(248, 63, 633, '1', 1, 1, '19', 174000, 174000, 63633, 1, 70, 1, 94, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(249, 63, 534, '1', 1, 1, '19', 174000, 174000, 63534, 1, 145, 1, 90, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(250, 63, 733, '1', 1, 1, '19', 174000, 174000, 63733, 1, 71, 1, 99, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(251, 63, 651, '1', 2, 2, '19', 174000, 348000, 63651, 1, 174, 1, 95, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(252, 63, 311, '1', 1, 1, '19', 174000, 174000, 63311, 1, 83, 1, 70, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(253, 63, 566, '1', 2, 2, '19', 174000, 348000, 63566, 1, 160, 1, 92, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(254, 63, 427, '1', 2, 2, '19', 174000, 348000, 63427, 1, 162, 1, 81, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(256, 63, 300, '1', 1, 1, '19', 174000, 174000, 63300, 1, 132, 1, 68, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(258, 63, 178, '1', 2, 2, '19', 174000, 348000, 63178, 1, 125, 1, 59, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(259, 63, 303, '1', 2, 2, '19', 174000, 348000, 63303, 1, 147, 1, 69, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(260, 63, 330, '1', 2, 2, '19', 174000, 348000, 63330, 1, 159, 1, 72, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(261, 63, 689, '1', 1, 1, '19', 174000, 174000, 63689, 1, 176, 1, 97, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(262, 63, 723, '1', 2, 2, '19', 174000, 348000, 63723, 1, 94, 1, 98, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(263, 63, 688, '1', 2, 2, '19', 174000, 348000, 63688, 1, 171, 1, 96, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(264, 63, 388, '1', 1, 1, '19', 174000, 174000, 63388, 1, 140, 1, 75, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(265, 63, 358, '1', 2, 2, '19', 174000, 348000, 63358, 1, 116, 1, 78, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(266, 63, 167, '1', 2, 2, '19', 174000, 348000, 63167, 1, 114, 1, 62, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(267, 63, 47, '1', 2, 2, '19', 174000, 348000, 6347, 1, 157, 1, 54, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(268, 63, 93, '1', 1, 1, '19', 174000, 174000, 6393, 1, 136, 1, 48, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(269, 63, 145, '1', 2, 2, '19', 174000, 348000, 63145, 1, 169, 1, 60, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(270, 63, 252, '1', 2, 2, '19', 174000, 348000, 0, 1, 150, 1, 66, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(271, 63, 56, '1', 1, 1, '19', 174000, 174000, 6356, 1, 138, 1, 52, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(272, 63, 313, '1', 1, 1, '19', 174000, 174000, 63313, 1, 133, 1, 71, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(273, 63, 575, '1', 2, 2, '19', 174000, 348000, 63575, 1, 161, 1, 91, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(274, 63, 426, '1', 1, 1, '19', 174000, 174000, 63426, 1, 139, 1, 80, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(275, 63, 212, '1', 1, 1, '19', 174000, 174000, 63212, 1, 135, 1, 63, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(276, 63, 469, '1', 2, 2, '19', 174000, 348000, 63469, 1, 165, 1, 86, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(277, 63, 344, '1', 1, 1, '19', 174000, 174000, 63344, 1, 141, 1, 79, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(278, 63, 177, '1', 1, 1, '19', 174000, 174000, 63177, 1, 144, 1, 57, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(279, 63, 86, '1', 1, 1, '19', 174000, 174000, 6386, 1, 62, 1, 50, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(280, 63, 372, '1', 2, 2, '19', 174000, 348000, 63372, 1, 163, 1, 76, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(281, 63, 436, '1', 2, 2, '19', 174000, 348000, 63436, 1, 166, 1, 84, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(282, 63, 232, '1', 2, 2, '19', 174000, 348000, 63232, 1, 152, 1, 64, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(283, 63, 51, '2', 4, 4, '19', 57000, 228000, 6351, 1, 153, 1, 101, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(284, 63, 144, '2', 4, 4, '19', 57000, 228000, 63144, 1, 126, 1, 102, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(285, 63, 375, '2', 4, 4, '19', 57000, 228000, 63375, 1, 115, 1, 103, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(286, 69, 101, '1', 2, 2, '19', 174000, 348000, 69101, 1, 63, 1, 112, 9, 1, 1, 0, 1, 1, 1, 1, '20 Feb 2026'),
(287, 69, 299, '1', 2, 2, '19', 174000, 348000, 69299, 1, 65, 1, 114, 9, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(288, 69, 466, '1', 2, 2, '19', 174000, 348000, 69466, 1, 68, 1, 118, 9, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(289, 69, 339, '1', 2, 2, '19', 174000, 348000, 69339, 1, 66, 1, 115, 9, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(290, 69, 633, '1', 1, 1, '19', 174000, 174000, 0, 1, 70, 1, 119, 9, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(291, 69, 733, '1', 1, 1, '19', 174000, 174000, 69733, 1, 71, 1, 120, 9, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(292, 69, 218, '1', 2, 2, '19', 174000, 348000, 0, 1, 64, 1, 113, 9, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(293, 69, 394, '1', 1, 1, '19', 174000, 174000, 69394, 1, 67, 1, 116, 9, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(294, 69, 86, '1', 2, 2, '19', 174000, 348000, 6986, 1, 62, 1, 111, 9, 1, 1, 0, 1, 1, 1, 1, '20 Feb 2026'),
(295, 69, 434, '2', 4, 4, '19', 57000, 228000, 69434, 1, 69, 1, 117, 9, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(296, 69, 22, '2', 4, 4, '19', 57000, 228000, 6922, 1, 61, 1, 110, 9, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(297, 70, 218, '1', 1, 1, '19', 174000, 174000, 0, 1, 333, 1, 238, 9, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(298, 63, 266, '1', 2, 2, '19', 174000, 348000, 63266, 1, 149, 1, 67, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(299, 63, 507, '1', 2, 2, '19', 174000, 348000, 63507, 1, 151, 1, 87, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(300, 71, 38, '1', 5, 5, '14', 110000, 550000, 7138, 1, 74, 1, 130, 19, 1, 1, 0, 0, 1, 1, 1, '08 Feb 2026'),
(301, 71, 69, '1', 4, 4, '14', 110000, 440000, 7169, 1, 73, 1, 132, 19, 1, 1, 0, 0, 1, 1, 1, '08 Feb 2026'),
(302, 71, 20, '1', 5, 5, '14', 110000, 550000, 7120, 1, 72, 1, 127, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(303, 71, 22, '1', 5, 5, '14', 110000, 550000, 7122, 1, 61, 1, 122, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(304, 71, 299, '1', 6, 6, '14', 110000, 660000, 71299, 1, 65, 1, 167, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(305, 71, 656, '1', 8, 8, '14', 110000, 880000, 71656, 1, 93, 1, 218, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(306, 71, 165, '1', 6, 6, '14', 110000, 660000, 71165, 1, 77, 1, 143, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(307, 71, 179, '1', 6, 6, '14', 110000, 660000, 71179, 1, 78, 1, 151, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(308, 71, 723, '1', 6, 6, '14', 110000, 660000, 71723, 1, 94, 1, 226, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(309, 71, 363, '1', 7, 7, '14', 110000, 770000, 71363, 1, 88, 1, 179, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(310, 71, 257, '1', 6, 6, '14', 110000, 660000, 71257, 1, 82, 1, 162, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(311, 71, 258, '1', 6, 6, '14', 110000, 660000, 71258, 1, 81, 1, 161, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(312, 71, 120, '1', 7, 7, '14', 110000, 770000, 71120, 1, 75, 1, 139, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(313, 71, 116, '1', 6, 6, '14', 110000, 660000, 71116, 1, 76, 1, 140, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(314, 71, 311, '1', 5, 5, '14', 110000, 550000, 71311, 1, 83, 1, 168, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(315, 71, 297, '1', 7, 7, '14', 110000, 770000, 71297, 1, 84, 1, 169, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(316, 71, 618, '1', 4, 4, '14', 110000, 440000, 71618, 1, 92, 1, 213, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(317, 71, 521, '1', 6, 6, '14', 110000, 660000, 71521, 1, 89, 1, 203, 19, 1, 1, 0, 0, 1, 1, 1, '08 Feb 2026'),
(318, 71, 235, '1', 7, 7, '14', 110000, 770000, 71235, 1, 79, 1, 157, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(319, 71, 237, '1', 5, 5, '14', 110000, 550000, 71237, 1, 80, 1, 158, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(320, 71, 218, '1', 7, 7, '14', 110000, 770000, 71218, 1, 64, 1, 152, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(321, 71, 323, '1', 5, 5, '14', 110000, 550000, 71323, 1, 87, 1, 174, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(322, 71, 331, '1', 5, 5, '14', 110000, 550000, 71331, 1, 86, 1, 172, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(323, 71, 543, '1', 8, 8, '14', 110000, 880000, 71543, 1, 90, 1, 205, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(324, 71, 562, '1', 8, 8, '14', 110000, 880000, 71562, 1, 91, 1, 212, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(325, 72, 622, '1', 10, 10, '14', 56000, 560000, 72622, 1, 99, 1, 214, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(326, 72, 34, '1', 10, 10, '14', 56000, 560000, 7234, 1, 95, 1, 133, 19, 1, 1, 0, 0, 1, 1, 1, '08 Feb 2026'),
(327, 72, 95, '1', 9, 9, '14', 56000, 504000, 7295, 1, 96, 1, 137, 19, 1, 1, 0, 0, 1, 1, 1, '08 Feb 2026'),
(328, 72, 570, '1', 7, 7, '14', 56000, 392000, 72570, 1, 54, 1, 209, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(329, 72, 262, '1', 10, 10, '14', 56000, 560000, 72262, 1, 98, 1, 164, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(330, 72, 231, '1', 10, 10, '14', 56000, 560000, 72231, 1, 97, 1, 159, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(331, 72, 733, '1', 4, 4, '14', 56000, 224000, 72733, 1, 71, 1, 229, 19, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(332, 73, 429, '1', 1, 1, '7', 57000, 57000, 73429, 1, 100, 1, 189, 15, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(333, 73, 218, '1', 1, 1, '7', 57000, 57000, 73218, 1, 64, 1, 153, 15, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(334, 74, 694, '1', 1, 1, '7', 53000, 53000, 74694, 1, 101, 1, 223, 15, 1, 1, 0, 0, 1, 1, 1, '08 Feb 2026'),
(335, 74, 656, '1', 5, 5, '7', 53000, 265000, 74656, 1, 93, 1, 219, 15, 1, 1, 0, 0, 1, 1, 1, '08 Feb 2026'),
(336, 75, 694, '1', 2, 2, '7', 66000, 132000, 75694, 1, 101, 1, 224, 8, 1, 1, 0, 0, 1, 1, 1, '08 Feb 2026'),
(337, 75, 20, '1', 2, 2, '7', 66000, 132000, 7520, 1, 72, 1, 125, 8, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(338, 75, 656, '1', 1, 1, '7', 66000, 66000, 75656, 1, 93, 1, 222, 8, 1, 1, 0, 0, 1, 1, 1, '08 Feb 2026'),
(339, 76, 122, '1', 10, 10, '7', 53000, 530000, 76122, 1, 102, 1, 150, 8, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(340, 76, 196, '1', 6, 6, '7', 53000, 318000, 76196, 1, 103, 1, 149, 8, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(341, 77, 345, '1', 9, 9, '7', 66000, 594000, 77345, 1, 107, 1, 182, 14, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(342, 76, 218, '1', 37, 37, '7', 53000, 1961000, 76218, 1, 64, 1, 155, 8, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(343, 76, 350, '1', 10, 10, '7', 53000, 530000, 76350, 1, 104, 1, 181, 8, 1, 1, 0, 0, 1, 1, 1, '08 Feb 2026'),
(344, 76, 407, '1', 14, 14, '7', 53000, 742000, 76407, 1, 105, 1, 191, 8, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(345, 77, 402, '1', 8, 8, '7', 66000, 528000, 77402, 1, 108, 1, 192, 14, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(346, 76, 508, '1', 9, 9, '7', 53000, 477000, 76508, 1, 106, 1, 202, 8, 1, 1, 0, 0, 1, 1, 1, '08 Feb 2026'),
(347, 77, 610, '1', 1, 1, '7', 66000, 66000, 77610, 1, 109, 1, 215, 14, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(348, 76, 570, '1', 12, 12, '7', 53000, 636000, 76570, 1, 54, 1, 211, 8, 1, 1, 1, 1, 1, 1, 1, '08 Feb 2026'),
(349, 77, 684, '1', 8, 8, '7', 66000, 528000, 77684, 1, 110, 1, 225, 14, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(350, 91, 486, '1', 3, 3, '7', 57000, 171000, 91486, 1, 112, 1, 197, 7, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(351, 91, 441, '1', 5, 5, '7', 57000, 285000, 91441, 1, 111, 1, 196, 7, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(352, 91, 445, '1', 3, 3, '7', 57000, 171000, 91445, 1, 57, 1, 194, 7, 1, 1, 0, 0, 1, 1, 1, '11 Feb 2026'),
(353, 91, 407, '1', 3, 3, '7', 57000, 171000, 91407, 1, 105, 1, 190, 7, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(354, 91, 434, '1', 10, 10, '7', 57000, 570000, 91434, 1, 69, 1, 195, 7, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(355, 91, 463, '1', 5, 5, '7', 57000, 285000, 91463, 1, 113, 1, 198, 7, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(356, 91, 402, '1', 3, 3, '7', 57000, 171000, 91402, 1, 108, 1, 193, 7, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(357, 91, 345, '1', 4, 4, '7', 57000, 228000, 91345, 1, 107, 1, 183, 7, 1, 1, 0, 0, 1, 1, 1, '11 Feb 2026'),
(361, 78, 407, '1', 4, 4, '7', 45000, 180000, 0, 1, 105, 1, 190, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(362, 78, 434, '1', 4, 4, '7', 45000, 180000, 0, 1, 69, 1, 195, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(364, 78, 402, '1', 4, 4, '7', 45000, 180000, 0, 1, 108, 1, 193, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(365, 78, 345, '1', 4, 4, '7', 45000, 180000, 0, 1, 107, 1, 183, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(366, 79, 407, '1', 4, 4, '7', 21000, 84000, 0, 1, 105, 1, 190, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(368, 79, 402, '1', 8, 8, '7', 21000, 168000, 0, 1, 108, 1, 193, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(369, 79, 345, '1', 12, 12, '7', 21000, 252000, 0, 1, 107, 1, 183, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(370, 92, 20, '1', 3, 3, '7', 66000, 198000, 9220, 1, 72, 1, 125, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(371, 92, 376, '1', 9, 9, '7', 66000, 594000, 92376, 1, 60, 1, 178, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(372, 92, 461, '1', 3, 3, '7', 66000, 198000, 92461, 1, 117, 1, 200, 8, 1, 1, 0, 0, 1, 1, 1, '11 Feb 2026'),
(373, 81, 441, '1', 2, 2, '7', 53000, 106000, 81441, 1, 111, 1, 196, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(374, 92, 350, '1', 5, 5, '7', 66000, 330000, 92350, 1, 104, 1, 181, 8, 1, 1, 0, 0, 1, 1, 1, '11 Feb 2026'),
(375, 92, 407, '1', 5, 5, '7', 66000, 330000, 92407, 1, 105, 1, 191, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(376, 81, 407, '1', 2, 2, '7', 53000, 106000, 81407, 1, 105, 1, 190, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(377, 92, 218, '1', 4, 4, '7', 66000, 264000, 92218, 1, 64, 1, 155, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(378, 92, 358, '1', 2, 2, '7', 66000, 132000, 0, 1, 116, 1, 187, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(379, 82, 486, '1', 19, 19, '5', 21000, 399000, 82486, 1, 112, 1, 197, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(380, 92, 167, '1', 6, 6, '7', 66000, 396000, 92167, 1, 114, 1, 148, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(381, 92, 375, '1', 10, 10, '7', 66000, 660000, 92375, 1, 115, 1, 186, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(382, 82, 441, '1', 11, 11, '5', 21000, 231000, 82441, 1, 111, 1, 196, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(384, 82, 463, '1', 15, 15, '5', 21000, 315000, 82463, 1, 113, 1, 198, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(385, 83, 345, '1', 1, 1, '7', 87000, 87000, 83345, 1, 107, 1, 183, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(386, 83, 407, '1', 2, 2, '7', 87000, 174000, 83407, 1, 105, 1, 190, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(387, 84, 441, '1', 1, 1, '7', 24000, 24000, 0, 1, 111, 1, 196, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(388, 84, 445, '1', 10, 10, '7', 24000, 240000, 0, 1, 57, 1, 194, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(389, 84, 434, '1', 6, 6, '7', 24000, 144000, 0, 1, 69, 1, 195, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(390, 85, 402, '1', 1, 1, '7', 92000, 92000, 85402, 1, 108, 1, 193, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(391, 85, 345, '1', 2, 2, '7', 92000, 184000, 85345, 1, 107, 1, 183, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(392, 85, 434, '1', 1, 1, '7', 92000, 92000, 85434, 1, 69, 1, 195, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(393, 86, 486, '1', 30, 30, '7', 20000, 600000, 0, 1, 112, 1, 197, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(394, 86, 445, '1', 25, 25, '7', 20000, 500000, 0, 1, 57, 1, 194, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(395, 86, 463, '1', 27, 27, '7', 20000, 540000, 0, 1, 113, 1, 198, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(396, 86, 434, '1', 23, 23, '7', 20000, 460000, 0, 1, 69, 1, 195, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(397, 87, 345, '1', 2, 2, '7', 49000, 98000, 87345, 1, 107, 1, 183, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(398, 88, 441, '1', 9, 9, '5', 48000, 432000, 88441, 1, 111, 1, 196, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(399, 88, 407, '1', 7, 7, '7', 48000, 336000, 88407, 1, 105, 1, 190, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(400, 88, 434, '1', 3, 3, '7', 48000, 144000, 88434, 1, 69, 1, 195, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(401, 88, 402, '1', 4, 4, '7', 48000, 192000, 88402, 1, 108, 1, 193, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(402, 88, 345, '1', 7, 7, '7', 48000, 336000, 88345, 1, 107, 1, 183, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(403, 82, 445, '1', 12, 12, '7', 21000, 252000, 82445, 1, 57, 1, 194, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(404, 89, 441, '1', 3, 3, '5', 48000, 144000, 0, 1, 111, 1, 196, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(405, 89, 407, '1', 3, 3, '7', 48000, 144000, 0, 1, 105, 1, 190, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(406, 89, 434, '1', 3, 3, '7', 48000, 144000, 89434, 1, 69, 1, 195, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(407, 89, 402, '1', 5, 5, '7', 48000, 240000, 0, 1, 108, 1, 193, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(408, 89, 345, '1', 5, 5, '7', 48000, 240000, 0, 1, 107, 1, 183, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(410, 90, 407, '1', 6, 6, '7', 48000, 288000, 0, 1, 105, 1, 190, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(412, 90, 402, '1', 8, 8, '7', 48000, 384000, 0, 1, 108, 1, 193, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(413, 90, 345, '1', 3, 3, '7', 48000, 144000, 0, 1, 107, 1, 183, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(414, 90, 463, '1', 1, 1, '7', 48000, 48000, 0, 1, 113, 1, 198, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(415, 93, 376, '1', 6, 6, '7', 48000, 288000, 93376, 1, 60, 1, 177, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(416, 93, 206, '1', 4, 4, '7', 48000, 192000, 93206, 1, 118, 1, 147, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(417, 94, 376, '1', 4, 4, '7', 48000, 192000, 0, 1, 60, 1, 177, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(418, 94, 206, '1', 6, 6, '7', 48000, 288000, 0, 1, 118, 1, 147, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(419, 94, 390, '1', 5, 5, '7', 48000, 240000, 94390, 1, 58, 1, 175, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(420, 94, 407, '1', 5, 5, '7', 48000, 240000, 94407, 1, 105, 1, 190, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(421, 94, 66, '1', 4, 4, '7', 48000, 192000, 9466, 1, 59, 1, 135, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(422, 94, 533, '1', 4, 4, '7', 48000, 192000, 94533, 1, 122, 1, 207, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(423, 94, 218, '1', 3, 3, '7', 48000, 144000, 94218, 1, 64, 1, 156, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(424, 94, 264, '1', 3, 3, '7', 48000, 144000, 94264, 1, 177, 1, 166, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(425, 94, 375, '1', 5, 5, '7', 48000, 240000, 94375, 1, 115, 1, 185, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(426, 95, 218, '1', 3, 3, '7', 64000, 192000, 95218, 1, 64, 1, 156, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(427, 95, 256, '1', 3, 3, '7', 64000, 192000, 95256, 1, 119, 1, 165, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(428, 95, 521, '1', 3, 3, '7', 64000, 192000, 95521, 1, 89, 1, 204, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(429, 96, 24, '1', 4, 4, '7', 53000, 212000, 0, 1, 120, 1, 128, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(430, 96, 116, '1', 3, 3, '7', 53000, 159000, 96116, 1, 76, 1, 142, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(431, 96, 206, '1', 3, 3, '7', 53000, 159000, 96206, 1, 118, 1, 147, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(432, 96, 218, '1', 2, 2, '7', 53000, 106000, 96218, 1, 64, 1, 156, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(433, 96, 256, '1', 2, 2, '7', 53000, 106000, 96256, 1, 119, 1, 165, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(434, 96, 310, '1', 3, 3, '7', 53000, 159000, 96310, 1, 121, 1, 171, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(435, 96, 331, '1', 1, 1, '7', 53000, 53000, 96331, 1, 86, 1, 173, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(436, 96, 350, '1', 1, 1, '7', 53000, 53000, 96350, 1, 104, 1, 180, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(437, 96, 521, '1', 3, 3, '7', 53000, 159000, 0, 1, 89, 1, 204, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(438, 96, 533, '1', 4, 4, '7', 53000, 212000, 96533, 1, 122, 1, 207, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(439, 96, 570, '1', 2, 2, '7', 53000, 106000, 96570, 1, 54, 1, 210, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(440, 96, 620, '1', 3, 3, '7', 53000, 159000, 96620, 1, 123, 1, 216, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(441, 96, 656, '1', 5, 5, '7', 53000, 265000, 96656, 1, 93, 1, 221, 7, 1, 1, 0, 0, 1, 1, 1, '12 Feb 2026'),
(443, 98, 15, '1', 5, 5, '7', 75000, 375000, 9815, 1, 124, 1, 129, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(445, 98, 95, '1', 6, 6, '7', 75000, 450000, 0, 1, 96, 1, 138, 8, 1, 1, 0, 0, 1, 1, 1, '11 Feb 2026'),
(446, 98, 144, '1', 11, 11, '7', 75000, 825000, 98144, 1, 126, 1, 145, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(447, 98, 176, '1', 8, 8, '7', 75000, 600000, 98176, 1, 127, 1, 144, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(448, 98, 178, '1', 16, 16, '7', 75000, 1200000, 98178, 1, 125, 1, 146, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(449, 98, 225, '1', 27, 27, '7', 75000, 2025000, 98225, 1, 128, 1, 160, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(451, 98, 358, '1', 5, 5, '7', 75000, 375000, 98358, 1, 116, 1, 187, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(452, 98, 345, '1', 5, 5, '7', 75000, 375000, 98345, 1, 107, 1, 184, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(453, 98, 375, '1', 9, 9, '7', 75000, 675000, 98375, 1, 115, 1, 186, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(454, 98, 343, '1', 5, 5, '7', 75000, 375000, 98343, 1, 129, 1, 188, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(456, 98, 407, '1', 4, 4, '7', 75000, 300000, 0, 1, 105, 1, 191, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(457, 98, 467, '1', 3, 3, '7', 75000, 225000, 98467, 1, 130, 1, 201, 8, 1, 1, 0, 0, 1, 1, 1, '11 Feb 2026'),
(458, 98, 461, '1', 5, 5, '7', 75000, 375000, 98461, 1, 117, 1, 200, 8, 1, 1, 0, 0, 1, 1, 1, '11 Feb 2026'),
(459, 98, 350, '1', 5, 5, '7', 75000, 375000, 98350, 1, 104, 1, 181, 8, 1, 1, 0, 0, 1, 1, 1, '11 Feb 2026'),
(460, 98, 463, '1', 3, 3, '7', 75000, 225000, 98463, 1, 113, 1, 199, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(461, 98, 508, '1', 9, 9, '7', 75000, 675000, 98508, 1, 106, 1, 202, 8, 1, 1, 0, 0, 1, 1, 1, '11 Feb 2026'),
(462, 98, 541, '1', 13, 13, '7', 75000, 975000, 0, 1, 131, 1, 208, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(463, 98, 620, '1', 4, 4, '7', 75000, 300000, 98620, 1, 123, 1, 217, 8, 1, 1, 0, 0, 1, 1, 1, '11 Feb 2026'),
(464, 98, 66, '1', 15, 15, '7', 75000, 1125000, 9866, 1, 59, 1, 136, 8, 1, 1, 0, 0, 1, 1, 1, '11 Feb 2026'),
(465, 98, 376, '1', 6, 6, '7', 75000, 450000, 98376, 1, 60, 1, 178, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(466, 98, 390, '1', 8, 8, '7', 75000, 600000, 98390, 1, 58, 1, 176, 8, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(467, 89, 463, '1', 1, 1, '7', 48000, 48000, 89463, 1, 113, 1, 198, 7, 1, 1, 1, 1, 1, 1, 1, '12 Feb 2026'),
(468, 99, 475, '3', 10, 10, '7', 35000, 350000, 99475, 1, 183, 1, 235, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(469, 99, 385, '3', 12, 12, '7', 35000, 420000, 99385, 1, 179, 1, 231, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(470, 99, 439, '3', 12, 12, '7', 35000, 420000, 99439, 1, 184, 1, 236, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(471, 99, 477, '3', 11, 11, '7', 35000, 385000, 99477, 1, 185, 1, 237, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(472, 99, 317, '3', 11, 11, '7', 35000, 385000, 99317, 1, 178, 1, 230, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(473, 99, 413, '3', 11, 11, '7', 35000, 385000, 99413, 1, 181, 1, 233, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(474, 99, 408, '3', 11, 11, '7', 35000, 385000, 99408, 1, 182, 1, 234, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(475, 100, 257, '1', 1, 1, '7', 81000, 81000, 100257, 1, 82, 1, 163, 18, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(476, 100, 297, '1', 1, 1, '7', 81000, 81000, 100297, 1, 84, 1, 170, 18, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(477, 100, 656, '1', 1, 1, '7', 81000, 81000, 100656, 1, 93, 1, 220, 18, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(478, 100, 543, '1', 1, 1, '7', 81000, 81000, 100543, 1, 90, 1, 206, 18, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(479, 101, 20, '1', 11, 11, '7', 81000, 891000, 10120, 1, 72, 1, 126, 18, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(480, 101, 69, '1', 5, 5, '7', 81000, 405000, 10169, 1, 73, 1, 131, 18, 1, 1, 0, 0, 1, 1, 1, '11 Feb 2026'),
(481, 101, 297, '1', 2, 2, '7', 81000, 162000, 101297, 1, 84, 1, 170, 18, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(482, 101, 723, '1', 2, 2, '7', 81000, 162000, 101723, 1, 94, 1, 228, 18, 1, 1, 1, 1, 1, 1, 1, '11 Feb 2026'),
(483, 102, 20, '1', 6, 7, '7', 81000, 486000, 10220, 1, 212, 1, 340, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(484, 102, 22, '1', 5, 5, '7', 81000, 405000, 10222, 1, 213, 1, 341, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(485, 102, 38, '1', 3, 3, '7', 81000, 243000, 10238, 1, 217, 1, 383, 18, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(486, 102, 69, '1', 3, 5, '7', 81000, 243000, 10269, 1, 218, 1, 385, 18, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(487, 102, 120, '1', 10, 10, '7', 81000, 810000, 102120, 1, 230, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(488, 102, 116, '1', 6, 6, '7', 81000, 486000, 102116, 1, 231, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(489, 102, 165, '1', 2, 2, '7', 81000, 162000, 102165, 1, 234, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(490, 102, 179, '1', 4, 4, '7', 81000, 324000, 102179, 1, 235, 1, 389, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(491, 102, 235, '1', 1, 1, '7', 81000, 81000, 102235, 1, 245, 1, 402, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(492, 102, 218, '1', 5, 5, '7', 81000, 405000, 102218, 1, 333, 1, 407, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(493, 102, 257, '1', 1, 3, '7', 81000, 81000, 102257, 1, 250, 1, 396, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(494, 102, 311, '1', 6, 9, '7', 81000, 486000, 102311, 1, 258, 0, 0, 18, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(495, 102, 297, '1', 5, 10, '7', 81000, 405000, 102297, 1, 259, 0, 0, 18, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(496, 102, 299, '1', 4, 5, '7', 81000, 324000, 102299, 1, 260, 0, 0, 18, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(497, 102, 656, '1', 2, 3, '7', 81000, 162000, 102656, 1, 340, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(498, 102, 323, '1', 2, 3, '7', 81000, 162000, 102323, 1, 265, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(499, 102, 331, '1', 1, 2, '7', 81000, 81000, 102331, 1, 266, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(500, 102, 363, '1', 1, 1, '7', 81000, 81000, 102363, 1, 271, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(501, 102, 618, '1', 11, 7, '7', 81000, 891000, 102618, 1, 315, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(502, 102, 543, '1', 5, 5, '7', 81000, 405000, 102543, 1, 307, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(503, 102, 562, '1', 4, 4, '7', 81000, 324000, 102562, 1, 311, 1, 413, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(504, 103, 20, '1', 3, 2, '7', 81000, 243000, 10320, 1, 212, 1, 340, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(505, 103, 22, '1', 20, 20, '7', 81000, 1620000, 10322, 1, 213, 1, 341, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(506, 103, 116, '1', 1, 3, '7', 81000, 81000, 103116, 1, 231, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(507, 103, 165, '1', 1, 1, '7', 81000, 81000, 103165, 1, 234, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(508, 103, 297, '1', 1, 0, '7', 81000, 81000, 103297, 1, 259, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(509, 103, 570, '1', 2, 3, '7', 81000, 162000, 103570, 1, 339, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(510, 103, 622, '1', 19, 22, '7', 81000, 1539000, 103622, 1, 316, 0, 0, 18, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(511, 104, 656, '1', 3, 3, '7', 75000, 225000, 104656, 1, 340, 1, 332, 15, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(512, 104, 723, '1', 1, 1, '7', 75000, 75000, 104723, 1, 324, 0, 0, 15, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(513, 104, 543, '1', 1, 1, '7', 75000, 75000, 104543, 1, 307, 1, 323, 15, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(514, 105, 330, '1', 2, 1, '7', 66000, 132000, 105330, 1, 267, 1, 310, 15, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(515, 106, 620, '1', 2, 1, '7', 66000, 132000, 106620, 1, 331, 1, 326, 15, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(516, 107, 429, '1', 1, 1, '7', 57000, 57000, 107429, 1, 283, 1, 329, 15, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(517, 107, 218, '1', 1, 1, '7', 57000, 57000, 107218, 1, 333, 1, 406, 15, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(518, 108, 38, '1', 5, 5, '14', 110000, 550000, 10838, 1, 217, 1, 382, 19, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(519, 108, 69, '1', 4, 4, '14', 110000, 440000, 10869, 1, 218, 1, 384, 19, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(520, 108, 20, '1', 5, 5, '14', 110000, 550000, 10820, 1, 212, 1, 308, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(521, 108, 22, '1', 5, 5, '14', 110000, 550000, 10822, 1, 213, 1, 392, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(522, 108, 299, '1', 6, 6, '14', 110000, 660000, 108299, 1, 260, 1, 313, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(523, 108, 656, '1', 8, 8, '14', 110000, 880000, 108656, 1, 340, 1, 331, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(524, 108, 165, '1', 6, 6, '14', 110000, 660000, 108165, 1, 234, 0, 0, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(525, 108, 179, '1', 6, 6, '14', 110000, 660000, 108179, 1, 235, 1, 388, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(526, 108, 723, '1', 6, 6, '14', 110000, 660000, 108723, 1, 324, 0, 0, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(527, 108, 363, '1', 7, 7, '14', 110000, 770000, 108363, 1, 271, 1, 318, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(528, 108, 257, '1', 6, 6, '14', 110000, 660000, 108257, 1, 250, 1, 319, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(529, 108, 258, '1', 6, 6, '14', 110000, 660000, 108258, 1, 251, 1, 320, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(530, 108, 120, '1', 7, 7, '14', 110000, 770000, 108120, 1, 230, 0, 0, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(531, 108, 116, '1', 6, 6, '14', 110000, 660000, 108116, 1, 231, 0, 0, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(532, 108, 311, '1', 5, 5, '14', 110000, 550000, 108311, 1, 258, 1, 314, 19, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(533, 108, 297, '1', 7, 7, '14', 110000, 770000, 108297, 1, 259, 1, 315, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(534, 108, 618, '1', 4, 4, '14', 110000, 440000, 108618, 1, 315, 1, 328, 19, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(535, 108, 521, '1', 6, 6, '14', 110000, 660000, 108521, 1, 304, 1, 330, 19, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(536, 108, 235, '1', 7, 7, '14', 110000, 770000, 108235, 1, 245, 1, 401, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(537, 108, 237, '1', 5, 5, '14', 110000, 550000, 108237, 1, 246, 1, 403, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(538, 108, 218, '1', 7, 7, '14', 110000, 770000, 108218, 1, 333, 1, 405, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(539, 108, 323, '1', 5, 5, '14', 110000, 550000, 108323, 1, 265, 1, 311, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(540, 108, 331, '1', 5, 5, '14', 110000, 550000, 108331, 1, 266, 1, 312, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(541, 108, 543, '1', 8, 8, '14', 110000, 880000, 108543, 1, 307, 1, 322, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(542, 108, 562, '1', 8, 8, '14', 110000, 880000, 108562, 1, 311, 1, 324, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(543, 109, 622, '1', 10, 10, '14', 56000, 560000, 109622, 1, 316, 1, 327, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(544, 109, 34, '1', 10, 10, '14', 56000, 560000, 10934, 1, 219, 1, 335, 19, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(545, 109, 95, '1', 9, 9, '14', 56000, 504000, 10995, 1, 350, 1, 386, 19, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(546, 109, 570, '1', 7, 7, '14', 56000, 392000, 109570, 1, 339, 1, 325, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(547, 109, 262, '1', 10, 10, '14', 56000, 560000, 109262, 1, 252, 1, 321, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(548, 109, 231, '1', 10, 10, '14', 56000, 560000, 109231, 1, 247, 1, 404, 19, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(549, 109, 733, '1', 4, 4, '14', 56000, 224000, 109733, 1, 325, 0, 0, 19, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(550, 99, 389, '3', 11, 11, '7', 35000, 385000, 99389, 1, 180, 1, 232, 11, 1, 1, 1, 1, 1, 1, 1, '20 Feb 2026'),
(551, 115, 407, '1', 4, 4, '7', 21000, 84000, 115407, 1, 359, 1, 412, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(552, 115, 402, '1', 8, 8, '7', 21000, 168000, 115402, 1, 346, 1, 410, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(553, 115, 345, '1', 12, 12, '7', 21000, 252000, 115345, 1, 345, 1, 400, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(554, 116, 407, '1', 4, 4, '7', 45000, 180000, 116407, 1, 359, 1, 412, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(555, 116, 434, '1', 4, 4, '7', 45000, 180000, 116434, 1, 332, 0, 0, 7, 1, 0, 0, 0, 1, 1, 1, '06 Mar 2026'),
(556, 116, 402, '1', 4, 4, '7', 45000, 180000, 116402, 1, 346, 1, 410, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(557, 116, 345, '1', 4, 4, '7', 45000, 180000, 116345, 1, 345, 1, 400, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(558, 117, 441, '1', 2, 2, '7', 53000, 106000, 117441, 1, 292, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(559, 117, 407, '1', 2, 2, '7', 53000, 106000, 117407, 1, 359, 1, 412, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(560, 119, 345, '1', 1, 1, '7', 87000, 87000, 119345, 1, 345, 1, 400, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(561, 119, 407, '1', 2, 2, '7', 87000, 174000, 119407, 1, 359, 1, 412, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(562, 118, 486, '1', 19, 19, '5', 21000, 399000, 118486, 1, 334, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(563, 118, 441, '1', 11, 11, '5', 21000, 231000, 118441, 1, 292, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(564, 118, 463, '1', 15, 15, '5', 21000, 315000, 118463, 1, 362, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(565, 118, 445, '1', 12, 12, '7', 21000, 252000, 118445, 1, 337, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(566, 120, 441, '1', 1, 1, '7', 24000, 24000, 120441, 1, 292, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(567, 120, 445, '1', 10, 10, '7', 24000, 240000, 120445, 1, 337, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(568, 120, 434, '1', 6, 6, '7', 24000, 144000, 120434, 1, 332, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(569, 121, 402, '1', 1, 1, '7', 92000, 92000, 121402, 1, 346, 1, 410, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(570, 121, 345, '1', 2, 2, '7', 92000, 184000, 121345, 1, 345, 1, 400, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(571, 121, 434, '1', 1, 1, '7', 92000, 92000, 121434, 1, 332, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(572, 122, 486, '1', 30, 30, '7', 20000, 600000, 122486, 1, 334, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(573, 122, 445, '1', 25, 25, '7', 20000, 500000, 122445, 1, 337, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(574, 122, 463, '1', 27, 27, '7', 20000, 540000, 122463, 1, 362, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(575, 122, 434, '1', 23, 23, '7', 20000, 460000, 122434, 1, 332, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(576, 123, 345, '1', 2, 2, '7', 49000, 98000, 123345, 1, 345, 1, 400, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(577, 127, 385, '3', 120, 120, '7', 26000, 3120000, 127385, 1, 273, 1, 346, 11, 1, 1, 1, 1, 1, 0, 0, ''),
(578, 127, 475, '3', 100, 100, '7', 26000, 2600000, 127475, 1, 341, 1, 350, 11, 1, 1, 1, 1, 1, 0, 0, ''),
(579, 127, 439, '3', 120, 120, '7', 26000, 3120000, 127439, 1, 297, 1, 351, 11, 1, 1, 1, 1, 1, 0, 0, ''),
(580, 127, 477, '3', 110, 110, '7', 26000, 2860000, 127477, 1, 298, 1, 289, 11, 1, 1, 1, 1, 1, 0, 0, ''),
(581, 127, 317, '3', 110, 110, '7', 26000, 2860000, 127317, 1, 268, 1, 344, 11, 1, 1, 1, 1, 1, 0, 0, ''),
(582, 127, 413, '3', 110, 110, '7', 26000, 2860000, 127413, 1, 286, 1, 347, 11, 1, 1, 1, 1, 1, 0, 0, ''),
(583, 127, 389, '3', 110, 110, '7', 26000, 2860000, 127389, 1, 274, 1, 279, 11, 1, 1, 1, 1, 1, 0, 0, ''),
(584, 127, 408, '3', 110, 110, '7', 26000, 2860000, 127408, 1, 287, 1, 348, 11, 1, 1, 1, 1, 1, 0, 0, ''),
(585, 128, 385, '3', 15, 15, '7', 18000, 270000, 128385, 1, 273, 1, 346, 11, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(586, 128, 475, '3', 25, 25, '7', 18000, 450000, 128475, 1, 341, 1, 350, 11, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(587, 128, 408, '3', 30, 30, '7', 18000, 540000, 128408, 1, 287, 1, 348, 11, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(588, 128, 439, '3', 25, 25, '7', 18000, 450000, 128439, 1, 297, 1, 351, 11, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(589, 128, 477, '3', 30, 30, '7', 18000, 540000, 128477, 1, 298, 1, 289, 11, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(590, 128, 317, '3', 25, 25, '7', 18000, 450000, 128317, 1, 268, 1, 344, 11, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(591, 128, 389, '3', 30, 30, '7', 18000, 540000, 128389, 1, 274, 1, 279, 11, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(592, 128, 413, '3', 30, 30, '7', 18000, 540000, 128413, 1, 286, 1, 347, 11, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(593, 70, 218, '1', 1, 1, '19', 174000, 174000, 70218, 1, 333, 1, 238, 9, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(594, 130, 629, '1', 20, 20, '7', 129000, 2580000, 130629, 1, 318, 1, 300, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(595, 130, 508, '1', 20, 20, '7', 129000, 2580000, 130508, 1, 305, 1, 294, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(596, 130, 539, '1', 20, 20, '7', 129000, 2580000, 130539, 1, 308, 1, 296, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(597, 130, 443, '1', 10, 10, '7', 129000, 1290000, 130443, 1, 299, 1, 290, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(598, 130, 721, '1', 20, 20, '7', 129000, 2580000, 130721, 1, 326, 1, 307, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(599, 130, 376, '1', 20, 20, '7', 129000, 2580000, 130376, 1, 354, 1, 280, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(600, 130, 153, '1', 20, 20, '7', 129000, 2580000, 130153, 1, 236, 1, 260, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(601, 130, 315, '1', 20, 20, '7', 129000, 2580000, 130315, 1, 269, 1, 278, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(602, 130, 193, '1', 20, 20, '7', 129000, 2580000, 130193, 1, 237, 1, 261, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(603, 130, 44, '1', 20, 20, '7', 129000, 2580000, 13044, 1, 221, 1, 251, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(604, 130, 486, '1', 10, 10, '7', 129000, 1290000, 130486, 1, 334, 1, 288, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(605, 130, 103, '1', 10, 10, '7', 129000, 1290000, 130103, 1, 232, 1, 259, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(606, 130, 476, '1', 20, 19, '7', 129000, 2580000, 130476, 1, 300, 1, 291, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(607, 130, 43, '1', 20, 20, '7', 129000, 2580000, 13043, 1, 222, 1, 252, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(608, 130, 206, '1', 10, 10, '7', 129000, 1290000, 130206, 1, 328, 1, 262, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(609, 130, 254, '1', 20, 19, '7', 129000, 2580000, 130254, 1, 253, 1, 270, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(610, 130, 390, '1', 10, 10, '7', 129000, 1290000, 130390, 1, 355, 1, 281, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(611, 130, 70, '1', 20, 20, '7', 129000, 2580000, 13070, 1, 223, 1, 253, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(612, 130, 633, '1', 10, 10, '7', 129000, 1290000, 130633, 1, 319, 1, 301, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(613, 130, 534, '1', 10, 10, '7', 129000, 1290000, 130534, 1, 309, 1, 297, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(614, 130, 13, '1', 20, 20, '7', 129000, 2580000, 13013, 1, 214, 1, 249, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(615, 130, 733, '1', 10, 10, '7', 129000, 1290000, 130733, 1, 325, 1, 306, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(616, 130, 651, '1', 20, 20, '7', 129000, 2580000, 130651, 1, 321, 1, 302, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(617, 130, 311, '1', 10, 10, '7', 129000, 1290000, 130311, 1, 258, 1, 273, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(618, 130, 566, '1', 20, 20, '7', 129000, 2580000, 130566, 1, 313, 1, 298, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(619, 130, 427, '1', 20, 20, '7', 129000, 2580000, 130427, 1, 288, 1, 287, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(620, 130, 507, '1', 20, 20, '7', 129000, 2580000, 130507, 1, 306, 1, 295, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(621, 130, 300, '1', 10, 10, '7', 129000, 1290000, 130300, 1, 261, 1, 274, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(622, 130, 266, '1', 20, 20, '7', 129000, 2580000, 130266, 1, 254, 1, 271, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(623, 130, 178, '1', 20, 20, '7', 129000, 2580000, 130178, 1, 353, 1, 263, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(624, 130, 303, '1', 20, 20, '7', 129000, 2580000, 130303, 1, 262, 1, 275, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(625, 130, 330, '1', 20, 20, '7', 129000, 2580000, 130330, 1, 267, 1, 277, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(626, 130, 689, '1', 10, 10, '7', 129000, 1290000, 130689, 1, 322, 1, 303, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(627, 130, 723, '1', 20, 20, '7', 129000, 2580000, 130723, 1, 324, 1, 305, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(628, 130, 30, '1', 10, 10, '7', 129000, 1290000, 13030, 1, 215, 1, 250, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(629, 130, 688, '1', 20, 20, '7', 129000, 2580000, 130688, 1, 323, 1, 304, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(630, 130, 388, '1', 10, 10, '7', 129000, 1290000, 130388, 1, 277, 1, 339, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(631, 130, 358, '1', 20, 20, '7', 129000, 2580000, 130358, 1, 356, 1, 282, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(632, 130, 167, '1', 20, 20, '7', 129000, 2580000, 130167, 1, 240, 1, 264, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(633, 130, 47, '1', 20, 20, '7', 129000, 2580000, 13047, 1, 224, 1, 254, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(634, 130, 93, '1', 10, 10, '7', 129000, 1290000, 13093, 1, 225, 1, 255, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(635, 130, 145, '1', 20, 20, '7', 129000, 2580000, 130145, 1, 241, 1, 265, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(636, 130, 252, '1', 20, 20, '7', 129000, 2580000, 130252, 1, 255, 1, 272, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(637, 130, 56, '1', 10, 10, '7', 129000, 1290000, 13056, 1, 226, 1, 256, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(638, 130, 313, '1', 10, 10, '7', 129000, 1290000, 130313, 1, 263, 1, 276, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(639, 130, 575, '1', 20, 20, '7', 129000, 2580000, 130575, 1, 314, 1, 299, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(640, 130, 426, '1', 10, 10, '7', 129000, 1290000, 130426, 1, 289, 1, 286, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(641, 130, 212, '1', 10, 10, '7', 129000, 1290000, 130212, 1, 248, 1, 268, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(642, 130, 469, '1', 20, 20, '7', 129000, 2580000, 130469, 1, 301, 1, 292, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(643, 130, 344, '1', 10, 10, '7', 129000, 1290000, 130344, 1, 279, 1, 283, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(644, 130, 177, '1', 10, 10, '7', 129000, 1290000, 130177, 1, 242, 1, 266, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(645, 130, 86, '1', 10, 10, '7', 129000, 1290000, 13086, 1, 227, 1, 257, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(646, 130, 372, '1', 20, 20, '7', 129000, 2580000, 130372, 1, 358, 1, 284, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(647, 130, 436, '1', 20, 20, '7', 129000, 2580000, 130436, 1, 302, 1, 293, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(648, 130, 232, '1', 20, 20, '7', 129000, 2580000, 130232, 1, 249, 1, 269, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(649, 130, 51, '2', 40, 40, '7', 43000, 1720000, 13051, 1, 228, 1, 258, 11, 1, 1, 1, 0, 1, 1, 1, '05 Mar 2026'),
(650, 130, 144, '2', 40, 40, '7', 43000, 1720000, 130144, 1, 352, 1, 267, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(651, 130, 375, '2', 40, 40, '7', 43000, 1720000, 130375, 1, 357, 1, 285, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(652, 132, 101, '1', 20, 20, '7', 55000, 1100000, 132101, 1, 233, 1, 241, 9, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(653, 132, 86, '1', 20, 20, '7', 55000, 1100000, 13286, 1, 227, 1, 240, 9, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(654, 132, 218, '1', 30, 30, '7', 55000, 1650000, 132218, 1, 333, 1, 238, 9, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(655, 132, 299, '1', 20, 20, '7', 55000, 1100000, 132299, 1, 260, 1, 242, 9, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(656, 132, 339, '1', 20, 20, '7', 55000, 1100000, 132339, 1, 270, 1, 243, 9, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(657, 132, 394, '1', 10, 10, '7', 55000, 550000, 132394, 1, 290, 1, 244, 9, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(658, 132, 466, '1', 20, 20, '7', 55000, 1100000, 132466, 1, 303, 1, 245, 9, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(659, 132, 633, '1', 10, 10, '7', 55000, 550000, 132633, 1, 319, 1, 247, 9, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(660, 132, 733, '1', 10, 10, '7', 55000, 550000, 132733, 1, 325, 1, 248, 9, 1, 1, 0, 0, 1, 1, 1, '05 Mar 2026'),
(661, 132, 22, '2', 40, 40, '7', 19000, 760000, 13222, 1, 213, 1, 239, 9, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(662, 132, 434, '2', 40, 40, '7', 19000, 760000, 132434, 1, 332, 1, 246, 9, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(663, 131, 443, '1', 10, 10, '7', 87000, 870000, 131443, 1, 299, 1, 290, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(664, 131, 486, '1', 10, 10, '7', 87000, 870000, 131486, 1, 334, 1, 288, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(665, 131, 103, '1', 10, 10, '7', 87000, 870000, 131103, 1, 232, 1, 259, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(666, 131, 206, '1', 10, 10, '7', 87000, 870000, 131206, 1, 328, 1, 262, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(667, 131, 390, '1', 10, 10, '7', 87000, 870000, 131390, 1, 355, 1, 281, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(668, 131, 633, '1', 10, 10, '7', 87000, 870000, 131633, 1, 319, 1, 301, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(669, 131, 534, '1', 10, 10, '7', 87000, 870000, 131534, 1, 309, 1, 297, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(670, 131, 733, '1', 10, 10, '7', 87000, 870000, 131733, 1, 325, 1, 306, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(671, 131, 311, '1', 10, 10, '7', 87000, 870000, 131311, 1, 258, 1, 273, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(672, 131, 300, '1', 10, 10, '7', 87000, 870000, 131300, 1, 261, 1, 274, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(673, 131, 689, '1', 10, 10, '7', 87000, 870000, 131689, 1, 322, 1, 303, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(674, 131, 30, '1', 10, 10, '7', 87000, 870000, 13130, 1, 215, 1, 250, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(675, 131, 388, '1', 10, 10, '7', 87000, 870000, 131388, 1, 277, 1, 339, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(676, 131, 93, '1', 10, 10, '7', 87000, 870000, 13193, 1, 225, 1, 255, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(677, 131, 56, '1', 10, 10, '7', 87000, 870000, 13156, 1, 226, 1, 256, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(678, 131, 313, '1', 10, 10, '7', 87000, 870000, 131313, 1, 263, 1, 276, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(679, 131, 426, '1', 10, 10, '7', 87000, 870000, 131426, 1, 289, 1, 286, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(680, 131, 212, '1', 10, 10, '7', 87000, 870000, 131212, 1, 248, 1, 268, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(681, 131, 344, '1', 10, 10, '7', 87000, 870000, 131344, 1, 279, 1, 283, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(682, 131, 177, '3', 10, 10, '7', 87000, 870000, 131177, 1, 242, 1, 266, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(683, 131, 86, '1', 10, 10, '7', 87000, 870000, 13186, 1, 227, 1, 257, 11, 1, 1, 1, 1, 1, 1, 1, '05 Mar 2026'),
(684, 124, 441, '1', 9, 9, '5', 48000, 432000, 124441, 1, 292, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(685, 124, 407, '1', 7, 7, '7', 48000, 336000, 124407, 1, 359, 1, 412, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(686, 124, 434, '1', 3, 3, '7', 48000, 144000, 124434, 1, 332, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(687, 124, 402, '1', 4, 4, '7', 48000, 192000, 124402, 1, 346, 1, 410, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(688, 124, 345, '1', 7, 7, '7', 48000, 336000, 124345, 1, 345, 1, 400, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(689, 125, 441, '1', 3, 3, '5', 48000, 144000, 125441, 1, 292, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026');
INSERT INTO `detail_matrik_honor` (`id`, `id_matrik_honor`, `id_petugas`, `jabatan`, `volume_spk`, `volume_bast`, `satuan`, `harga_satuan`, `total`, `cek_double`, `status_spk`, `id_spk`, `status_bast`, `id_bast`, `rincian_output_detail`, `kak`, `sk`, `spk_ttd`, `bast_ttd`, `selesai_fp`, `pengajuan_spm`, `terbit_sp2d`, `tgl_sp2d`) VALUES
(690, 125, 407, '1', 3, 3, '7', 48000, 144000, 125407, 1, 359, 1, 412, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(691, 125, 434, '1', 3, 3, '7', 48000, 144000, 125434, 1, 332, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(692, 125, 402, '1', 5, 5, '7', 48000, 240000, 125402, 1, 346, 1, 410, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(693, 125, 345, '1', 5, 5, '7', 48000, 240000, 125345, 1, 345, 1, 400, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(694, 125, 463, '1', 1, 1, '7', 48000, 48000, 125463, 1, 362, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(695, 126, 407, '1', 6, 6, '7', 48000, 288000, 126407, 1, 359, 1, 412, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(696, 126, 402, '1', 8, 8, '7', 48000, 384000, 126402, 1, 346, 1, 410, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(697, 126, 345, '1', 3, 3, '7', 48000, 144000, 126345, 1, 345, 1, 400, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(698, 126, 463, '1', 1, 1, '7', 48000, 48000, 126463, 1, 362, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(699, 129, 376, '1', 6, 6, '7', 48000, 288000, 129376, 1, 354, 1, 415, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(700, 129, 206, '1', 4, 4, '7', 48000, 192000, 129206, 1, 328, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(701, 133, 376, '1', 4, 4, '7', 48000, 192000, 133376, 1, 354, 1, 415, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(702, 133, 206, '1', 6, 6, '7', 48000, 288000, 133206, 1, 328, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(703, 133, 390, '1', 5, 5, '7', 48000, 240000, 133390, 1, 355, 1, 393, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(704, 133, 407, '1', 5, 5, '7', 48000, 240000, 133407, 1, 359, 1, 412, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(705, 133, 66, '1', 4, 4, '7', 48000, 192000, 13366, 1, 351, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(706, 133, 533, '1', 4, 4, '7', 48000, 192000, 133533, 1, 310, 1, 414, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(707, 133, 218, '1', 3, 3, '7', 48000, 144000, 133218, 1, 333, 1, 408, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(708, 133, 264, '1', 3, 3, '7', 48000, 144000, 133264, 1, 256, 1, 395, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(709, 133, 375, '1', 5, 5, '7', 48000, 240000, 133375, 1, 357, 1, 390, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(710, 134, 218, '1', 3, 3, '7', 64000, 192000, 134218, 1, 333, 1, 408, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(711, 134, 256, '1', 3, 3, '7', 64000, 192000, 134256, 1, 257, 1, 397, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(712, 134, 521, '1', 3, 3, '7', 64000, 192000, 134521, 1, 304, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(713, 135, 24, '1', 4, 4, '7', 53000, 212000, 13524, 1, 216, 1, 381, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(714, 135, 116, '1', 3, 3, '7', 53000, 159000, 135116, 1, 231, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(715, 135, 206, '1', 3, 3, '7', 53000, 159000, 135206, 1, 328, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(716, 135, 218, '1', 2, 2, '7', 53000, 106000, 135218, 1, 333, 1, 408, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(717, 135, 256, '1', 2, 2, '7', 53000, 106000, 135256, 1, 257, 1, 397, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(718, 135, 310, '1', 3, 3, '7', 53000, 159000, 135310, 1, 264, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(719, 135, 331, '1', 1, 1, '7', 53000, 53000, 135331, 1, 266, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(720, 135, 350, '1', 1, 1, '7', 53000, 53000, 135350, 1, 361, 1, 342, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(721, 135, 521, '1', 3, 3, '7', 53000, 159000, 135521, 1, 304, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(722, 135, 533, '1', 4, 4, '7', 53000, 212000, 135533, 1, 310, 1, 414, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(723, 135, 570, '1', 2, 2, '7', 53000, 106000, 135570, 1, 339, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(724, 135, 620, '1', 3, 3, '7', 53000, 159000, 135620, 1, 331, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(725, 135, 656, '1', 5, 5, '7', 53000, 265000, 135656, 1, 340, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(726, 137, 475, '3', 36, 36, '7', 11000, 396000, 137475, 1, 341, 1, 349, 7, 1, 0, 0, 0, 1, 1, 1, '06 Mar 2026'),
(727, 136, 475, '3', 9, 9, '7', 11000, 99000, 136475, 1, 341, 1, 349, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(728, 138, 41, '1', 10, 0, '7', 48000, 480000, 13841, 1, 349, 0, 0, 7, 1, 1, 0, 0, 0, 1, 1, '06 Mar 2026'),
(729, 138, 486, '1', 2, 3, '7', 48000, 96000, 138486, 1, 334, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(730, 138, 445, '1', 4, 2, '7', 48000, 192000, 138445, 1, 337, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(731, 138, 206, '1', 6, 3, '7', 48000, 288000, 138206, 1, 328, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(732, 138, 620, '1', 4, 4, '7', 48000, 192000, 138620, 1, 331, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(733, 138, 407, '1', 5, 4, '7', 48000, 240000, 138407, 1, 359, 1, 412, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(734, 138, 66, '1', 9, 5, '7', 48000, 432000, 13866, 1, 351, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(735, 138, 434, '1', 3, 3, '7', 48000, 144000, 138434, 1, 332, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(736, 138, 218, '1', 4, 1, '7', 48000, 192000, 138218, 1, 333, 1, 408, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(737, 138, 402, '1', 2, 2, '7', 48000, 96000, 138402, 1, 346, 1, 410, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(738, 138, 345, '1', 3, 3, '7', 48000, 144000, 138345, 1, 345, 1, 400, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(739, 138, 375, '1', 7, 3, '7', 48000, 336000, 138375, 1, 357, 1, 390, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(740, 138, 461, '1', 3, 2, '7', 48000, 144000, 138461, 1, 360, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(741, 138, 350, '1', 4, 0, '7', 48000, 192000, 138350, 1, 361, 1, 342, 7, 1, 1, 0, 0, 0, 1, 1, '06 Mar 2026'),
(742, 138, 570, '1', 2, 0, '7', 48000, 96000, 138570, 1, 339, 0, 0, 7, 1, 1, 1, 1, 0, 1, 1, '06 Mar 2026'),
(743, 138, 656, '1', 7, 7, '7', 48000, 336000, 138656, 1, 340, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(744, 138, 541, '1', 7, 7, '7', 48000, 336000, 138541, 1, 363, 1, 343, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(745, 139, 41, '1', 10, 0, '7', 48000, 480000, 13941, 1, 349, 0, 0, 7, 1, 1, 0, 0, 0, 1, 1, '06 Mar 2026'),
(748, 139, 206, '1', 6, 6, '7', 48000, 288000, 139206, 1, 328, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(749, 139, 620, '1', 4, 5, '7', 48000, 192000, 139620, 1, 331, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(750, 139, 407, '1', 5, 3, '7', 48000, 240000, 139407, 1, 359, 1, 412, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(751, 139, 66, '1', 9, 7, '7', 48000, 432000, 13966, 1, 351, 0, 0, 7, 1, 1, 0, 0, 1, 1, 1, '06 Mar 2026'),
(752, 139, 434, '1', 3, 2, '7', 48000, 144000, 139434, 1, 332, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(754, 139, 345, '1', 3, 1, '7', 48000, 144000, 139345, 1, 345, 1, 400, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(755, 139, 375, '1', 7, 4, '7', 48000, 336000, 139375, 1, 357, 1, 390, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(756, 139, 461, '1', 3, 0, '7', 48000, 144000, 139461, 1, 360, 0, 0, 7, 1, 1, 0, 0, 0, 1, 1, '06 Mar 2026'),
(757, 139, 350, '1', 4, 0, '7', 48000, 192000, 139350, 1, 361, 1, 342, 7, 1, 1, 0, 0, 0, 1, 1, '06 Mar 2026'),
(758, 139, 570, '1', 2, 0, '7', 48000, 96000, 139570, 1, 339, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(759, 139, 656, '1', 7, 14, '7', 48000, 336000, 139656, 1, 340, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(760, 139, 541, '1', 7, 14, '7', 48000, 336000, 139541, 1, 363, 1, 343, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(762, 140, 486, '1', 2, 6, '7', 48000, 96000, 0, 1, 334, 0, 0, 7, 1, 0, 0, 0, 1, 1, 1, '06 Mar 2026'),
(763, 140, 445, '1', 2, 4, '7', 48000, 96000, 0, 1, 337, 0, 0, 7, 1, 0, 0, 0, 1, 1, 1, '06 Mar 2026'),
(766, 140, 407, '1', 5, 4, '7', 48000, 240000, 140407, 1, 359, 1, 412, 7, 1, 0, 0, 0, 1, 0, 1, '06 Mar 2026'),
(768, 140, 434, '1', 3, 4, '7', 48000, 144000, 140434, 1, 332, 0, 0, 7, 1, 0, 0, 0, 1, 1, 1, '06 Mar 2026'),
(769, 140, 402, '1', 2, 4, '7', 48000, 96000, 140402, 1, 346, 1, 410, 7, 1, 0, 0, 0, 1, 1, 1, '06 Mar 2026'),
(770, 140, 345, '1', 3, 3, '7', 48000, 144000, 140345, 1, 345, 1, 400, 7, 1, 0, 0, 0, 1, 1, 1, '06 Mar 2026'),
(773, 140, 350, '1', 4, 0, '7', 48000, 192000, 140350, 1, 361, 1, 342, 7, 1, 0, 0, 0, 0, 0, 1, '06 Mar 2026'),
(777, 141, 620, '1', 2, 1, '7', 53000, 106000, 141620, 1, 331, 0, 0, 7, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(778, 142, 345, '1', 9, 9, '7', 66000, 594000, 142345, 1, 345, 1, 398, 14, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(779, 142, 402, '1', 8, 8, '7', 66000, 528000, 142402, 1, 346, 1, 409, 14, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(781, 142, 684, '1', 8, 9, '7', 66000, 528000, 142684, 1, 347, 0, 0, 14, 1, 1, 1, 1, 1, 1, 1, '06 Mar 2026'),
(782, 143, 41, '1', 10, 6, '7', 48000, 480000, 0, 1, 441, 1, 430, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(784, 143, 445, '1', 1, 0, '7', 48000, 48000, 0, 1, 412, 1, 513, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(785, 143, 206, '1', 3, 2, '7', 48000, 144000, 0, 1, 378, 1, 445, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(787, 143, 407, '1', 1, 1, '7', 48000, 48000, 0, 1, 447, 1, 510, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(788, 143, 66, '1', 4, 3, '7', 48000, 192000, 0, 1, 449, 1, 425, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(790, 143, 218, '1', 3, 0, '7', 48000, 144000, 0, 1, 451, 1, 465, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(793, 143, 375, '1', 4, 2, '7', 48000, 192000, 0, 1, 453, 1, 502, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(794, 143, 461, '1', 1, 1, '7', 48000, 48000, 0, 1, 442, 1, 518, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(795, 143, 350, '1', 4, 2, '7', 48000, 192000, 143350, 1, 446, 1, 500, 7, 1, 1, 1, 1, 1, 0, 0, ''),
(796, 143, 570, '1', 2, 0, '7', 48000, 96000, 143570, 1, 424, 1, 539, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(799, 167, 407, '1', 6, 6, '7', 48000, 288000, 167407, 1, 447, 1, 510, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(800, 167, 402, '1', 8, 8, '7', 48000, 384000, 167402, 1, 410, 1, 508, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(801, 167, 345, '1', 3, 3, '7', 48000, 144000, 167345, 1, 434, 1, 495, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(802, 167, 463, '1', 1, 1, '7', 48000, 48000, 167463, 1, 450, 1, 520, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(803, 166, 441, '1', 3, 3, '5', 48000, 144000, 166441, 1, 415, 1, 514, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(804, 166, 407, '1', 3, 3, '7', 48000, 144000, 166407, 1, 447, 1, 510, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(805, 166, 434, '1', 3, 3, '7', 48000, 144000, 166434, 1, 416, 1, 515, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(806, 166, 402, '1', 5, 5, '7', 48000, 240000, 166402, 1, 410, 1, 508, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(807, 166, 345, '1', 5, 5, '7', 48000, 240000, 166345, 1, 434, 1, 495, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(808, 166, 463, '1', 1, 1, '7', 48000, 48000, 166463, 1, 450, 1, 520, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(809, 165, 441, '1', 9, 9, '5', 48000, 432000, 165441, 1, 415, 1, 514, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(810, 165, 407, '1', 7, 7, '7', 48000, 336000, 165407, 1, 447, 1, 510, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(811, 165, 434, '1', 3, 3, '7', 48000, 144000, 165434, 1, 416, 1, 515, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(812, 165, 402, '1', 4, 4, '7', 48000, 192000, 165402, 1, 410, 1, 508, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(813, 165, 345, '1', 7, 7, '7', 48000, 336000, 165345, 1, 434, 1, 495, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(814, 164, 486, '1', 30, 30, '7', 20000, 600000, 164486, 1, 417, 1, 516, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(815, 164, 445, '1', 25, 25, '7', 20000, 500000, 164445, 1, 412, 1, 513, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(816, 164, 463, '1', 27, 27, '7', 20000, 540000, 164463, 1, 450, 1, 520, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(817, 164, 434, '1', 23, 23, '7', 20000, 460000, 164434, 1, 416, 1, 515, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(818, 168, 345, '1', 2, 2, '7', 49000, 98000, 168345, 1, 434, 1, 495, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(819, 163, 402, '1', 1, 1, '7', 92000, 92000, 163402, 1, 410, 1, 508, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(820, 163, 345, '1', 2, 2, '7', 92000, 184000, 163345, 1, 434, 1, 495, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(821, 163, 434, '1', 1, 1, '7', 92000, 92000, 163434, 1, 416, 1, 515, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(822, 162, 441, '1', 1, 1, '7', 24000, 24000, 162441, 1, 415, 1, 514, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(823, 162, 445, '1', 10, 10, '7', 24000, 240000, 162445, 1, 412, 1, 513, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(824, 162, 434, '1', 6, 6, '7', 24000, 144000, 162434, 1, 416, 1, 515, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(825, 161, 345, '1', 1, 1, '7', 87000, 87000, 161345, 1, 434, 1, 495, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(826, 161, 407, '1', 2, 2, '7', 87000, 174000, 161407, 1, 447, 1, 510, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(827, 160, 486, '1', 19, 19, '5', 21000, 399000, 160486, 1, 417, 1, 516, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(828, 160, 441, '1', 11, 11, '5', 21000, 231000, 160441, 1, 415, 1, 514, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(829, 160, 463, '1', 15, 15, '5', 21000, 315000, 160463, 1, 450, 1, 520, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(830, 160, 445, '1', 12, 12, '7', 21000, 252000, 160445, 1, 412, 1, 513, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(831, 159, 441, '1', 2, 2, '7', 53000, 106000, 159441, 1, 415, 1, 514, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(832, 159, 407, '1', 2, 2, '7', 53000, 106000, 159407, 1, 447, 1, 510, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(833, 158, 407, '1', 4, 4, '7', 45000, 180000, 158407, 1, 447, 1, 510, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(834, 158, 434, '1', 4, 4, '7', 45000, 180000, 158434, 1, 416, 1, 515, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(835, 158, 402, '1', 4, 4, '7', 45000, 180000, 158402, 1, 410, 1, 508, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(836, 158, 345, '1', 4, 4, '7', 45000, 180000, 158345, 1, 434, 1, 495, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(837, 157, 407, '1', 4, 4, '7', 21000, 84000, 157407, 1, 447, 1, 510, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(838, 157, 402, '1', 8, 8, '7', 21000, 168000, 157402, 1, 410, 1, 508, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(839, 157, 345, '1', 12, 12, '7', 21000, 252000, 157345, 1, 434, 1, 495, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(840, 156, 24, '1', 4, 4, '7', 53000, 212000, 15624, 1, 365, 1, 418, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(841, 156, 116, '1', 3, 3, '7', 53000, 159000, 156116, 1, 376, 1, 443, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(842, 156, 206, '1', 3, 3, '7', 53000, 159000, 156206, 1, 378, 1, 445, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(843, 156, 218, '1', 2, 2, '7', 53000, 106000, 156218, 1, 451, 1, 465, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(844, 156, 256, '1', 2, 2, '7', 53000, 106000, 156256, 1, 388, 1, 467, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(845, 156, 310, '1', 3, 3, '7', 53000, 159000, 156310, 1, 394, 1, 476, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(846, 156, 331, '1', 1, 1, '7', 53000, 53000, 156331, 1, 399, 1, 486, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(847, 156, 350, '1', 1, 1, '7', 53000, 53000, 156350, 1, 446, 1, 500, 7, 1, 1, 1, 1, 0, 0, 0, ''),
(848, 156, 521, '1', 3, 3, '7', 53000, 159000, 156521, 1, 419, 1, 532, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(849, 156, 533, '1', 4, 4, '7', 53000, 212000, 156533, 1, 420, 1, 533, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(850, 156, 570, '1', 2, 2, '7', 53000, 106000, 156570, 1, 424, 1, 539, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(851, 156, 620, '1', 3, 3, '7', 53000, 159000, 156620, 1, 445, 1, 547, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(852, 156, 656, '1', 5, 5, '7', 53000, 265000, 156656, 1, 448, 1, 551, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(853, 155, 218, '1', 3, 3, '7', 64000, 192000, 155218, 1, 451, 1, 465, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(854, 155, 256, '1', 3, 3, '7', 64000, 192000, 155256, 1, 388, 1, 467, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(855, 155, 521, '1', 3, 3, '7', 64000, 192000, 155521, 1, 419, 1, 532, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(856, 154, 376, '1', 6, 6, '7', 48000, 288000, 154376, 1, 440, 1, 498, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(857, 154, 206, '1', 4, 4, '7', 48000, 192000, 154206, 1, 378, 1, 445, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(858, 153, 376, '1', 4, 4, '7', 48000, 192000, 153376, 1, 440, 1, 498, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(859, 153, 206, '1', 6, 6, '7', 48000, 288000, 153206, 1, 378, 1, 445, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(860, 153, 390, '1', 5, 5, '7', 48000, 240000, 153390, 1, 438, 1, 496, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(861, 153, 407, '1', 5, 5, '7', 48000, 240000, 153407, 1, 447, 1, 510, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(862, 153, 66, '1', 4, 4, '7', 48000, 192000, 15366, 1, 449, 1, 425, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(863, 153, 533, '1', 4, 4, '7', 48000, 192000, 153533, 1, 420, 1, 533, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(864, 153, 218, '1', 3, 3, '7', 48000, 144000, 153218, 1, 451, 1, 465, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(865, 153, 264, '1', 3, 3, '7', 48000, 144000, 153264, 1, 389, 1, 468, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(866, 153, 375, '1', 5, 5, '7', 48000, 240000, 153375, 1, 453, 1, 502, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(867, 144, 475, '3', 72, 72, '7', 11000, 792000, 0, 1, 418, 1, 517, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(868, 145, 475, '3', 18, 18, '7', 11000, 198000, 0, 1, 418, 1, 517, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(869, 146, 385, '3', 82, 65, '7', 10000, 820000, 0, 1, 406, 1, 491, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(870, 149, 385, '3', 3, 3, '7', 11000, 33000, 149385, 1, 406, 1, 491, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(871, 147, 385, '3', 120, 125, '7', 10000, 1200000, 147385, 1, 406, 1, 491, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(872, 148, 385, '3', 45, 37, '7', 10000, 450000, 148385, 1, 406, 1, 491, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(873, 152, 620, '1', 1, 2, '7', 53000, 53000, 0, 1, 445, 1, 547, 7, 0, 0, 0, 0, 0, 0, 0, ''),
(874, 151, 486, '1', 3, 3, '7', 48000, 144000, 0, 1, 417, 1, 516, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(875, 151, 445, '1', 3, 2, '7', 48000, 144000, 0, 1, 412, 1, 513, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(876, 151, 407, '1', 2, 2, '7', 48000, 96000, 0, 1, 447, 1, 510, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(877, 151, 434, '1', 2, 2, '7', 48000, 96000, 0, 1, 416, 1, 515, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(878, 151, 402, '1', 2, 0, '7', 48000, 96000, 151402, 1, 410, 1, 508, 7, 1, 1, 0, 0, 0, 0, 0, ''),
(879, 151, 345, '1', 2, 1, '7', 48000, 96000, 0, 1, 434, 1, 495, 7, 1, 1, 1, 1, 1, 0, 0, ''),
(880, 151, 350, '1', 3, 3, '7', 48000, 144000, 0, 1, 446, 1, 500, 7, 1, 1, 1, 1, 1, 0, 0, ''),
(881, 150, 41, '1', 10, 16, '7', 48000, 480000, 15041, 1, 441, 1, 430, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(882, 150, 206, '1', 6, 9, '7', 48000, 288000, 150206, 1, 378, 1, 445, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(883, 150, 620, '1', 4, 2, '7', 48000, 192000, 150620, 1, 445, 1, 547, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(884, 150, 407, '1', 5, 4, '7', 48000, 240000, 150407, 1, 447, 1, 510, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(885, 150, 66, '1', 9, 12, '7', 48000, 432000, 15066, 1, 449, 1, 425, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(886, 150, 434, '1', 3, 1, '7', 48000, 144000, 150434, 1, 416, 1, 515, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(887, 150, 345, '1', 3, 2, '7', 48000, 144000, 150345, 1, 434, 1, 495, 7, 1, 1, 1, 1, 1, 0, 0, ''),
(888, 150, 375, '1', 7, 2, '7', 48000, 336000, 150375, 1, 453, 1, 502, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(889, 150, 461, '1', 3, 9, '7', 48000, 144000, 150461, 1, 442, 1, 518, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(890, 150, 350, '1', 4, 3, '7', 48000, 192000, 150350, 1, 446, 1, 500, 7, 1, 1, 1, 1, 1, 0, 0, ''),
(892, 150, 656, '1', 7, 7, '7', 48000, 336000, 150656, 1, 448, 1, 551, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(893, 150, 541, '1', 7, 13, '7', 48000, 336000, 150541, 1, 454, 1, 537, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(894, 150, 218, '1', 8, 2, '7', 48000, 384000, 150218, 1, 451, 1, 465, 7, 1, 1, 0, 0, 1, 0, 0, ''),
(895, 169, 429, '1', 1, 1, '7', 57000, 57000, 169429, 1, 411, 1, 509, 15, 0, 0, 0, 0, 0, 0, 0, ''),
(896, 169, 218, '1', 1, 1, '7', 57000, 57000, 169218, 1, 451, 1, 463, 15, 0, 0, 0, 0, 0, 0, 0, ''),
(897, 171, 656, '1', 1, 1, '19', 174000, 174000, 171656, 1, 448, 1, 550, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(898, 172, 38, '1', 5, 5, '14', 110000, 550000, 17238, 1, 371, 1, 436, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(899, 172, 69, '1', 4, 4, '14', 110000, 440000, 17269, 1, 372, 1, 434, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(900, 172, 20, '1', 5, 5, '14', 110000, 550000, 17220, 1, 439, 1, 419, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(901, 172, 22, '1', 5, 5, '14', 110000, 550000, 17222, 1, 367, 1, 421, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(902, 172, 299, '1', 6, 6, '14', 110000, 660000, 172299, 1, 395, 1, 477, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(903, 172, 656, '1', 8, 8, '14', 110000, 880000, 172656, 1, 448, 1, 549, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(904, 172, 165, '1', 6, 6, '14', 110000, 660000, 172165, 1, 379, 1, 446, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(905, 172, 179, '1', 6, 6, '14', 110000, 660000, 172179, 1, 380, 1, 448, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(906, 172, 723, '1', 6, 6, '14', 110000, 660000, 172723, 1, 431, 1, 554, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(907, 172, 363, '1', 7, 7, '14', 110000, 770000, 172363, 1, 407, 1, 489, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(908, 172, 257, '1', 6, 6, '14', 110000, 660000, 172257, 1, 443, 1, 473, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(909, 172, 258, '1', 6, 6, '14', 110000, 660000, 172258, 1, 391, 1, 469, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(910, 172, 120, '1', 7, 7, '14', 110000, 770000, 172120, 1, 437, 1, 439, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(911, 172, 116, '1', 6, 6, '14', 110000, 660000, 172116, 1, 376, 1, 441, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(912, 172, 311, '1', 5, 5, '14', 110000, 550000, 172311, 1, 396, 1, 479, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(913, 172, 297, '1', 7, 7, '14', 110000, 770000, 172297, 1, 397, 1, 481, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(914, 172, 618, '1', 4, 4, '14', 110000, 440000, 172618, 1, 427, 1, 543, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(915, 172, 521, '1', 6, 6, '14', 110000, 660000, 172521, 1, 419, 1, 530, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(916, 172, 235, '1', 7, 7, '14', 110000, 770000, 172235, 1, 385, 1, 457, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(917, 172, 237, '1', 5, 5, '14', 110000, 550000, 172237, 1, 386, 1, 459, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(918, 172, 218, '1', 7, 7, '14', 110000, 770000, 172218, 1, 451, 1, 462, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(919, 172, 323, '1', 5, 5, '14', 110000, 550000, 172323, 1, 400, 1, 487, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(920, 172, 331, '1', 5, 5, '14', 110000, 550000, 172331, 1, 399, 1, 484, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(921, 172, 543, '1', 8, 8, '14', 110000, 880000, 172543, 1, 422, 1, 534, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(922, 172, 562, '1', 8, 8, '14', 110000, 880000, 172562, 1, 425, 1, 541, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(923, 173, 622, '1', 10, 10, '14', 56000, 560000, 173622, 1, 428, 1, 545, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(924, 173, 34, '1', 10, 10, '14', 56000, 560000, 17334, 1, 373, 1, 433, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(925, 173, 95, '1', 9, 9, '14', 56000, 504000, 17395, 1, 444, 1, 427, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(926, 173, 570, '1', 7, 7, '14', 56000, 392000, 173570, 1, 424, 1, 540, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(927, 173, 262, '1', 10, 10, '14', 56000, 560000, 173262, 1, 392, 1, 471, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(928, 173, 231, '1', 10, 10, '14', 56000, 560000, 173231, 1, 387, 1, 461, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(929, 173, 733, '1', 4, 4, '14', 56000, 224000, 173733, 1, 432, 1, 556, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(930, 175, 656, '1', 10, 3, '7', 81000, 810000, 175656, 1, 448, 1, 550, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(931, 174, 22, '1', 3, 2, '7', 81000, 243000, 17422, 1, 367, 1, 422, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(932, 174, 69, '1', 3, 3, '7', 81000, 243000, 17469, 1, 372, 1, 435, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(933, 174, 120, '1', 1, 2, '7', 81000, 81000, 174120, 1, 437, 1, 440, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(934, 174, 116, '1', 3, 3, '7', 81000, 243000, 174116, 1, 376, 1, 442, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(935, 174, 165, '1', 7, 7, '7', 81000, 567000, 174165, 1, 379, 1, 447, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(936, 174, 179, '1', 1, 1, '7', 81000, 81000, 174179, 1, 380, 1, 449, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(937, 174, 235, '1', 3, 5, '7', 81000, 243000, 174235, 1, 385, 1, 458, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(938, 174, 237, '1', 2, 2, '7', 81000, 162000, 174237, 1, 386, 1, 460, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(939, 174, 218, '1', 1, 2, '7', 81000, 81000, 174218, 1, 451, 1, 464, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(940, 174, 257, '1', 4, 4, '7', 81000, 324000, 174257, 1, 443, 1, 474, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(941, 174, 258, '1', 3, 6, '7', 81000, 243000, 174258, 1, 391, 1, 470, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(942, 174, 311, '1', 3, 3, '7', 81000, 243000, 174311, 1, 396, 1, 480, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(943, 174, 297, '1', 3, 5, '7', 81000, 243000, 174297, 1, 397, 1, 482, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(944, 174, 299, '1', 2, 3, '7', 81000, 162000, 174299, 1, 395, 1, 478, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(945, 174, 656, '1', 3, 3, '7', 81000, 243000, 174656, 1, 448, 1, 550, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(946, 174, 323, '1', 1, 0, '7', 81000, 81000, 174323, 1, 400, 1, 488, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(947, 174, 331, '1', 3, 0, '7', 81000, 243000, 174331, 1, 399, 1, 485, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(948, 174, 723, '1', 1, 0, '7', 81000, 81000, 174723, 1, 431, 1, 555, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(949, 174, 363, '1', 4, 4, '7', 81000, 324000, 174363, 1, 407, 1, 490, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(950, 174, 618, '1', 1, 1, '7', 81000, 81000, 174618, 1, 427, 1, 544, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(951, 174, 38, '1', 1, 0, '7', 81000, 81000, 17438, 1, 371, 1, 437, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(952, 174, 521, '1', 1, 1, '7', 81000, 81000, 174521, 1, 419, 1, 531, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(953, 174, 543, '1', 3, 3, '7', 81000, 243000, 174543, 1, 422, 1, 535, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(954, 174, 562, '1', 1, 1, '7', 81000, 81000, 174562, 1, 425, 1, 542, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(955, 175, 69, '1', 1, 0, '7', 81000, 81000, 17569, 1, 372, 1, 435, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(956, 176, 15, '1', 3, 3, '7', 66000, 198000, 17615, 1, 452, 1, 423, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(957, 176, 541, '1', 1, 1, '7', 66000, 66000, 176541, 1, 454, 1, 538, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(958, 176, 620, '1', 6, 6, '7', 66000, 396000, 176620, 1, 445, 1, 548, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(959, 176, 656, '1', 2, 2, '7', 66000, 132000, 176656, 1, 448, 1, 552, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(960, 176, 694, '1', 4, 4, '7', 66000, 264000, 176694, 1, 430, 1, 553, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(961, 177, 86, '1', 3, 3, '19', 240000, 720000, 17786, 1, 375, 1, 432, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(962, 177, 122, '1', 2, 2, '19', 240000, 480000, 177122, 1, 381, 1, 450, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(963, 177, 167, '1', 3, 3, '19', 240000, 720000, 177167, 1, 435, 1, 453, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(964, 177, 196, '1', 2, 2, '19', 240000, 480000, 177196, 1, 383, 1, 451, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(965, 177, 218, '1', 1, 1, '19', 240000, 240000, 177218, 1, 451, 1, 466, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(966, 177, 274, '1', 1, 1, '19', 240000, 240000, 177274, 1, 393, 1, 472, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(967, 177, 300, '1', 1, 1, '19', 240000, 240000, 177300, 1, 398, 1, 483, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(968, 177, 388, '1', 2, 2, '19', 240000, 480000, 177388, 1, 408, 1, 492, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(969, 177, 350, '1', 2, 2, '19', 240000, 480000, 177350, 1, 446, 1, 501, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(970, 177, 525, '1', 2, 2, '19', 240000, 480000, 177525, 1, 423, 1, 536, 8, 0, 0, 0, 0, 0, 0, 0, ''),
(973, 178, 225, '1', 18, 18, '7', 75000, 1350000, 178225, 1, 348, 0, 0, 8, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(976, 178, 41, '1', 29, 29, '7', 75000, 2175000, 17841, 1, 349, 0, 0, 8, 1, 1, 0, 0, 1, 1, 1, '26 Mar 2026'),
(977, 178, 95, '1', 12, 12, '7', 75000, 900000, 17895, 1, 350, 0, 0, 8, 1, 1, 0, 0, 1, 1, 1, '26 Mar 2026'),
(978, 178, 66, '1', 19, 19, '7', 75000, 1425000, 17866, 1, 351, 0, 0, 8, 1, 1, 0, 0, 1, 1, 1, '26 Mar 2026'),
(979, 178, 144, '1', 4, 4, '7', 75000, 300000, 178144, 1, 352, 0, 0, 8, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(980, 178, 178, '1', 6, 6, '7', 75000, 450000, 178178, 1, 353, 0, 0, 8, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(981, 178, 376, '1', 7, 7, '7', 75000, 525000, 178376, 1, 354, 1, 416, 8, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(982, 178, 390, '1', 2, 2, '7', 75000, 150000, 178390, 1, 355, 1, 394, 8, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(983, 178, 358, '1', 4, 4, '7', 75000, 300000, 178358, 1, 356, 0, 0, 8, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(984, 178, 375, '1', 13, 13, '7', 75000, 975000, 178375, 1, 357, 1, 391, 8, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(985, 178, 372, '1', 5, 5, '7', 75000, 375000, 178372, 1, 358, 0, 0, 8, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(986, 178, 407, '1', 4, 4, '7', 75000, 300000, 178407, 1, 359, 0, 0, 8, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(987, 178, 461, '1', 9, 9, '7', 75000, 675000, 178461, 1, 360, 0, 0, 8, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(988, 178, 350, '1', 9, 9, '7', 75000, 675000, 178350, 1, 361, 0, 0, 8, 1, 1, 0, 0, 1, 1, 1, '26 Mar 2026'),
(989, 178, 463, '1', 5, 5, '7', 75000, 375000, 178463, 1, 362, 0, 0, 8, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(990, 178, 541, '1', 2, 2, '7', 75000, 150000, 178541, 1, 363, 0, 0, 8, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026'),
(991, 179, 41, '1', 4, 4, '7', 66000, 264000, 17941, 1, 466, 1, 417, 6, 1, 1, 0, 0, 1, 0, 0, ''),
(992, 180, 620, '1', 2, 2, '7', 66000, 132000, 180620, 1, 445, 1, 546, 6, 1, 1, 0, 0, 1, 0, 0, ''),
(993, 180, 407, '1', 7, 7, '7', 66000, 462000, 180407, 1, 447, 1, 511, 6, 1, 1, 0, 0, 1, 0, 0, ''),
(994, 180, 167, '1', 2, 2, '7', 66000, 132000, 180167, 1, 435, 1, 452, 6, 1, 1, 0, 0, 1, 0, 0, ''),
(995, 180, 345, '1', 7, 7, '7', 66000, 462000, 180345, 1, 434, 1, 494, 6, 1, 1, 1, 1, 1, 0, 0, ''),
(996, 188, 345, '1', 18, 18, '7', 66000, 1188000, 0, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(997, 188, 402, '1', 16, 16, '7', 66000, 1056000, 0, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(998, 188, 684, '1', 18, 18, '7', 66000, 1188000, 0, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(999, 187, 206, '1', 6, 6, '7', 75000, 450000, 187206, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1000, 187, 345, '1', 1, 1, '7', 75000, 75000, 187345, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1001, 187, 633, '1', 6, 6, '7', 75000, 450000, 187633, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1002, 186, 343, '1', 1, 1, '7', 66000, 66000, 186343, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1003, 185, 47, '1', 9, 9, '7', 57000, 513000, 18547, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1004, 185, 343, '1', 10, 10, '7', 57000, 570000, 185343, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1005, 185, 633, '1', 9, 9, '7', 57000, 513000, 185633, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1006, 184, 345, '1', 10, 10, '7', 75000, 750000, 184345, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1007, 184, 402, '1', 9, 9, '7', 75000, 675000, 184402, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1008, 184, 633, '1', 1, 1, '7', 75000, 75000, 184633, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1009, 184, 684, '1', 11, 11, '7', 75000, 825000, 184684, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1010, 183, 47, '1', 1, 1, '7', 240000, 240000, 18347, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1011, 183, 343, '1', 1, 1, '7', 240000, 240000, 183343, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1012, 183, 633, '1', 1, 1, '7', 240000, 240000, 183633, 0, 0, 0, 0, 14, 0, 0, 0, 0, 0, 0, 0, ''),
(1013, 182, 95, '1', 6, 6, '7', 66000, 396000, 18295, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, ''),
(1014, 182, 407, '1', 11, 11, '7', 66000, 726000, 182407, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, ''),
(1015, 182, 345, '1', 8, 8, '7', 66000, 528000, 182345, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, ''),
(1016, 182, 229, '1', 3, 3, '7', 66000, 198000, 182229, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, ''),
(1017, 182, 343, '1', 11, 11, '7', 66000, 726000, 182343, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, ''),
(1018, 182, 463, '1', 13, 13, '7', 66000, 858000, 182463, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, ''),
(1019, 182, 521, '1', 3, 3, '7', 66000, 198000, 182521, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, ''),
(1020, 181, 407, '1', 7, 7, '7', 70000, 490000, 181407, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, ''),
(1021, 181, 345, '1', 8, 8, '7', 70000, 560000, 181345, 0, 0, 0, 0, 6, 0, 0, 0, 0, 0, 0, 0, ''),
(1022, 175, 120, '1', 3, 3, '7', 81000, 243000, 175120, 1, 437, 1, 440, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(1023, 189, 20, '1', 2, 2, '7', 75000, 150000, 18920, 1, 439, 1, 420, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1024, 189, 15, '1', 3, 3, '7', 75000, 225000, 18915, 1, 452, 1, 423, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1025, 189, 41, '1', 1, 1, '7', 75000, 75000, 18941, 1, 441, 1, 431, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1026, 189, 144, '1', 5, 5, '7', 75000, 375000, 189144, 1, 455, 1, 454, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1027, 189, 176, '1', 7, 7, '7', 75000, 525000, 189176, 1, 460, 1, 455, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1028, 189, 178, '1', 3, 3, '7', 75000, 225000, 189178, 1, 462, 1, 456, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1029, 189, 364, '1', 9, 9, '7', 75000, 675000, 189364, 1, 457, 1, 504, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1030, 189, 375, '1', 2, 2, '7', 75000, 150000, 189375, 1, 453, 1, 503, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1031, 189, 343, '1', 1, 1, '7', 75000, 75000, 189343, 1, 463, 1, 505, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1032, 189, 372, '1', 2, 2, '7', 75000, 150000, 189372, 1, 464, 1, 506, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1033, 189, 407, '1', 3, 3, '7', 75000, 225000, 189407, 1, 447, 1, 512, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1034, 189, 467, '1', 2, 2, '7', 75000, 150000, 189467, 1, 456, 1, 523, 8, 1, 1, 1, 1, 0, 0, 0, ''),
(1035, 189, 461, '1', 1, 1, '7', 75000, 75000, 189461, 1, 442, 1, 519, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1036, 189, 350, '1', 1, 1, '7', 75000, 75000, 189350, 1, 446, 1, 501, 8, 1, 1, 1, 1, 0, 0, 0, ''),
(1037, 189, 620, '1', 1, 1, '7', 75000, 75000, 189620, 1, 445, 1, 548, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1038, 189, 390, '1', 1, 1, '7', 75000, 75000, 189390, 1, 438, 1, 497, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1039, 191, 20, '1', 7, 7, '7', 46000, 322000, 19120, 1, 439, 1, 420, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1040, 191, 376, '1', 15, 15, '7', 46000, 690000, 0, 1, 440, 1, 499, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1041, 191, 144, '1', 47, 47, '7', 46000, 2162000, 191144, 1, 455, 1, 454, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1042, 191, 41, '1', 28, 28, '7', 46000, 1288000, 19141, 1, 441, 1, 431, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1043, 191, 467, '1', 13, 13, '7', 46000, 598000, 191467, 1, 456, 1, 523, 8, 1, 1, 1, 1, 0, 0, 0, ''),
(1044, 191, 364, '1', 12, 12, '7', 46000, 552000, 191364, 1, 457, 1, 504, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1045, 191, 176, '1', 31, 31, '7', 46000, 1426000, 191176, 1, 460, 1, 455, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1046, 191, 461, '1', 27, 27, '7', 46000, 1242000, 191461, 1, 442, 1, 519, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1047, 191, 257, '1', 9, 9, '7', 46000, 414000, 191257, 1, 443, 1, 475, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1048, 191, 95, '1', 11, 11, '7', 46000, 506000, 19195, 1, 444, 1, 429, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1049, 191, 620, '1', 3, 3, '7', 46000, 138000, 191620, 1, 445, 1, 548, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1050, 191, 350, '1', 37, 37, '7', 46000, 1702000, 191350, 1, 446, 1, 501, 8, 1, 1, 1, 1, 0, 0, 0, ''),
(1051, 191, 407, '1', 8, 8, '7', 46000, 368000, 191407, 1, 447, 1, 512, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1052, 191, 656, '1', 4, 4, '7', 46000, 184000, 191656, 1, 448, 1, 552, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1053, 191, 66, '1', 47, 47, '7', 46000, 2162000, 19166, 1, 449, 1, 426, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1054, 191, 463, '1', 18, 18, '7', 46000, 828000, 191463, 1, 450, 1, 522, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1055, 191, 178, '1', 40, 40, '7', 46000, 1840000, 191178, 1, 462, 1, 456, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1056, 191, 115, '1', 16, 16, '7', 46000, 736000, 191115, 1, 459, 1, 438, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1057, 191, 218, '1', 14, 14, '7', 46000, 644000, 191218, 1, 451, 1, 466, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1058, 191, 15, '1', 8, 8, '7', 46000, 368000, 19115, 1, 452, 1, 423, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1059, 191, 358, '1', 11, 11, '7', 46000, 506000, 191358, 1, 465, 1, 507, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1060, 191, 375, '1', 15, 15, '7', 46000, 690000, 191375, 1, 453, 1, 503, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1061, 191, 59, '1', 11, 11, '7', 46000, 506000, 19159, 1, 458, 1, 424, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1062, 191, 541, '1', 10, 10, '7', 46000, 460000, 191541, 1, 454, 1, 538, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1063, 191, 372, '1', 14, 14, '7', 46000, 644000, 191372, 1, 464, 1, 506, 8, 1, 1, 0, 0, 0, 0, 0, ''),
(1064, 193, 429, '1', 1, 1, '7', 57000, 57000, 193429, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, ''),
(1065, 193, 218, '1', 1, 1, '7', 57000, 57000, 193218, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, ''),
(1066, 194, 38, '1', 5, 5, '14', 110000, 550000, 19438, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1067, 194, 69, '1', 4, 4, '14', 110000, 440000, 19469, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1068, 194, 20, '1', 5, 5, '14', 110000, 550000, 19420, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1069, 194, 22, '1', 5, 5, '14', 110000, 550000, 19422, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1070, 194, 299, '1', 6, 6, '14', 110000, 660000, 194299, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1071, 194, 656, '1', 8, 8, '14', 110000, 880000, 194656, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1072, 194, 165, '1', 6, 6, '14', 110000, 660000, 194165, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1073, 194, 179, '1', 6, 6, '14', 110000, 660000, 194179, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1074, 194, 723, '1', 6, 6, '14', 110000, 660000, 194723, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1075, 194, 363, '1', 7, 7, '14', 110000, 770000, 194363, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1076, 194, 257, '1', 6, 6, '14', 110000, 660000, 194257, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1077, 194, 258, '1', 6, 6, '14', 110000, 660000, 194258, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1078, 194, 120, '1', 7, 7, '14', 110000, 770000, 194120, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1079, 194, 116, '1', 6, 6, '14', 110000, 660000, 194116, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1080, 194, 311, '1', 5, 5, '14', 110000, 550000, 194311, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1081, 194, 297, '1', 7, 7, '14', 110000, 770000, 194297, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1082, 194, 618, '1', 4, 4, '14', 110000, 440000, 194618, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1083, 194, 521, '1', 6, 6, '14', 110000, 660000, 194521, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1084, 194, 235, '1', 7, 7, '14', 110000, 770000, 194235, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1085, 194, 237, '1', 5, 5, '14', 110000, 550000, 194237, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1086, 194, 218, '1', 7, 7, '14', 110000, 770000, 194218, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1087, 194, 323, '1', 5, 5, '14', 110000, 550000, 194323, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1088, 194, 331, '1', 5, 5, '14', 110000, 550000, 194331, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1089, 194, 543, '1', 8, 8, '14', 110000, 880000, 194543, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1090, 194, 562, '1', 8, 8, '14', 110000, 880000, 194562, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1091, 195, 622, '1', 10, 10, '14', 56000, 560000, 195622, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1092, 195, 34, '1', 10, 10, '14', 56000, 560000, 19534, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1093, 195, 95, '1', 9, 9, '14', 56000, 504000, 19595, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1094, 195, 570, '1', 7, 7, '14', 56000, 392000, 195570, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1095, 195, 262, '1', 10, 10, '14', 56000, 560000, 195262, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1096, 195, 231, '1', 10, 10, '14', 56000, 560000, 195231, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1097, 195, 733, '1', 4, 4, '14', 56000, 224000, 195733, 0, 0, 0, 0, 19, 0, 0, 0, 0, 0, 0, 0, ''),
(1098, 196, 723, '1', 1, 1, '7', 81000, 81000, 196723, 0, 0, 0, 0, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(1099, 197, 723, '1', 1, 1, '7', 81000, 81000, 197723, 0, 0, 0, 0, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(1100, 197, 69, '1', 1, 1, '7', 81000, 81000, 19769, 0, 0, 0, 0, 18, 0, 0, 0, 0, 0, 0, 0, ''),
(1101, 198, 656, '1', 5, 5, '7', 53000, 265000, 198656, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, ''),
(1102, 198, 694, '1', 1, 1, '7', 53000, 53000, 198694, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_matrik_translok`
--

CREATE TABLE `detail_matrik_translok` (
  `id` int NOT NULL,
  `id_matrik_translok` int NOT NULL,
  `id_user` int NOT NULL,
  `volume` int NOT NULL,
  `satuan` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `harga_satuan` int NOT NULL,
  `total` int NOT NULL,
  `cek_double` int NOT NULL,
  `st` int NOT NULL,
  `visum` int NOT NULL,
  `s_non_pkd` int NOT NULL,
  `laporan` int NOT NULL,
  `dokumentasi` int NOT NULL,
  `selesai_fp` int NOT NULL,
  `pengajuan_spm` int NOT NULL,
  `terbit_sp2d` int NOT NULL,
  `tgl_sp2d` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_matrik_translok`
--

INSERT INTO `detail_matrik_translok` (`id`, `id_matrik_translok`, `id_user`, `volume`, `satuan`, `harga_satuan`, `total`, `cek_double`, `st`, `visum`, `s_non_pkd`, `laporan`, `dokumentasi`, `selesai_fp`, `pengajuan_spm`, `terbit_sp2d`, `tgl_sp2d`, `keterangan`) VALUES
(21, 9, 7, 2, '13', 150000, 300000, 916, 1, 1, 1, 1, 1, 1, 1, 1, '30 Jan 2026', '6,15 Januari 2026'),
(22, 10, 16, 2, '13', 150000, 300000, 1016, 1, 1, 1, 1, 1, 1, 1, 1, '30 Jan 2026', '8,13 Januari 2026'),
(23, 9, 39, 1, '13', 150000, 150000, 939, 1, 1, 1, 1, 1, 1, 1, 1, '30 Jan 2026', '6 Januari 2026'),
(24, 12, 21, 2, '13', 150000, 300000, 1221, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '26, 29 Januari 2026'),
(25, 12, 10, 1, '13', 150000, 150000, 1210, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '27 Januari 2026'),
(26, 12, 16, 2, '13', 150000, 300000, 1216, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '26, 29 Januari 2026'),
(27, 12, 38, 1, '13', 150000, 150000, 1238, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '26 Januari 2026'),
(28, 13, 10, 1, '13', 150000, 150000, 1310, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '24 Januari 2026'),
(29, 14, 16, 1, '13', 150000, 150000, 1416, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '20 Januari 2026'),
(30, 15, 16, 1, '13', 150000, 150000, 1516, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '7 Januari 2026'),
(31, 15, 21, 1, '13', 150000, 150000, 1521, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '10 Januari 2026'),
(32, 16, 21, 1, '13', 150000, 150000, 1621, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '22 Januari 2026'),
(33, 16, 7, 2, '13', 150000, 300000, 167, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '21, 22 Januari 2026'),
(34, 16, 28, 2, '13', 150000, 300000, 1628, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '21, 22 Januari 2026'),
(35, 16, 16, 3, '13', 150000, 450000, 1616, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '22, 27, 30 Januari 2026'),
(36, 18, 15, 1, '13', 150000, 150000, 1815, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '10 Januari 2026'),
(37, 17, 15, 2, '13', 150000, 300000, 1715, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '21, 30 Januari 2026'),
(38, 19, 29, 2, '13', 150000, 300000, 1929, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '3,5 Februari 2026'),
(39, 20, 29, 5, '13', 150000, 750000, 2029, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '8, 9, 11, 12, 18 Februari 2026'),
(40, 20, 34, 2, '13', 150000, 300000, 2034, 1, 1, 1, 1, 1, 1, 1, 1, '10 Mar 2026', '9, 10 Februari 2026'),
(41, 11, 16, 2, '13', 150000, 300000, 1116, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '21, 23 Januari 2026'),
(42, 11, 7, 1, '13', 150000, 150000, 117, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '23 Januari 2026'),
(43, 11, 39, 1, '13', 150000, 150000, 1139, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '21 Januari 2026'),
(44, 11, 18, 1, '13', 150000, 150000, 1118, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '21 Januari 2026'),
(45, 11, 10, 2, '13', 150000, 300000, 1110, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '23, 28 Januari 2026'),
(46, 11, 4, 1, '13', 150000, 150000, 114, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '21 Januari 2026'),
(47, 11, 28, 1, '13', 150000, 150000, 1128, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '26 Januari 2026'),
(48, 11, 17, 1, '13', 150000, 150000, 1117, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '23 Januari 2026'),
(49, 11, 38, 2, '13', 150000, 300000, 1138, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '21, 23 Januari 2026'),
(50, 11, 31, 1, '13', 150000, 150000, 1131, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '21 Januari 2026'),
(51, 11, 6, 2, '13', 150000, 300000, 116, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '21, 22 Januari 2026'),
(52, 11, 19, 2, '13', 150000, 300000, 1119, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '21, 22 Januari 2026'),
(53, 11, 37, 2, '13', 150000, 300000, 1137, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '22, 23 Januari 2026'),
(54, 11, 30, 2, '13', 150000, 300000, 1130, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '21, 23 Januari 2026'),
(55, 11, 9, 1, '13', 150000, 150000, 119, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '23 Januari 2026'),
(56, 11, 36, 2, '13', 150000, 300000, 1136, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '21, 24 Januari 2026'),
(57, 11, 21, 2, '13', 150000, 300000, 1121, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '23, 27 Januari 2026'),
(58, 11, 32, 1, '13', 150000, 150000, 1132, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '23 Januari 2026'),
(59, 21, 37, 3, '13', 150000, 450000, 2137, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '3,6,18 Februari'),
(60, 21, 16, 4, '13', 150000, 600000, 2116, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '3,6,12,13'),
(61, 21, 30, 4, '13', 150000, 600000, 2130, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '16,17,18,19 Februari'),
(62, 21, 6, 4, '13', 150000, 600000, 216, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '2,3,9,10 Februari'),
(63, 21, 18, 2, '13', 150000, 300000, 2118, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '11,12 Februari'),
(64, 21, 39, 2, '13', 150000, 300000, 2139, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '2,4 Februari'),
(65, 21, 38, 4, '13', 150000, 600000, 2138, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '3,6,10,12 Februari'),
(66, 21, 7, 2, '13', 150000, 300000, 217, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '2,5 Februari'),
(67, 21, 10, 4, '13', 150000, 600000, 2110, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '5,6,16,17 Februari'),
(68, 21, 17, 1, '13', 150000, 150000, 2117, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '3 Februari'),
(69, 21, 36, 3, '13', 150000, 450000, 2136, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '3,6,9 Februari'),
(70, 21, 21, 4, '13', 150000, 600000, 2121, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '1, 2,10, 14 Februari 2026'),
(71, 21, 31, 1, '13', 150000, 150000, 2131, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '17 Februari'),
(72, 21, 19, 1, '13', 150000, 150000, 2119, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '12 Februari'),
(73, 21, 32, 1, '13', 150000, 150000, 2132, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '3 Februari'),
(74, 21, 28, 1, '13', 150000, 150000, 2128, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '4 Februari'),
(75, 11, 33, 1, '13', 150000, 150000, 1133, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '21 Januari 2026'),
(76, 21, 33, 2, '13', 150000, 300000, 2133, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '3, 6 Februari 2026'),
(77, 22, 24, 3, '13', 150000, 450000, 2224, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '5, 6, 9 Februari 2026'),
(78, 23, 4, 1, '13', 150000, 150000, 234, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '11 Februari 2026'),
(79, 23, 37, 1, '13', 150000, 150000, 2337, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '19 Februari 2026'),
(80, 24, 16, 1, '13', 150000, 150000, 2416, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '24 Februari 2026'),
(81, 24, 15, 2, '13', 150000, 300000, 2415, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '27 Januari dan 24 Februari 2026'),
(82, 24, 10, 1, '13', 150000, 150000, 2410, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '23 Februari 2026'),
(83, 24, 21, 1, '13', 150000, 150000, 2421, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '23 Februari 2026'),
(84, 24, 29, 1, '13', 150000, 150000, 2429, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '25 Februari 2026'),
(85, 25, 19, 1, '13', 150000, 150000, 2519, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '10 Februari 2026'),
(86, 26, 16, 2, '13', 150000, 300000, 2616, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '4, 5 Februari 2026'),
(87, 26, 21, 1, '13', 150000, 150000, 2621, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '15 Februari 2026'),
(88, 27, 21, 1, '13', 150000, 150000, 2721, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '11 Februari 2026'),
(89, 28, 16, 1, '13', 150000, 150000, 2816, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '25 Februari 2026'),
(90, 29, 16, 1, '13', 150000, 150000, 2916, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '11 Februari 2026'),
(91, 26, 15, 1, '13', 150000, 150000, 2615, 1, 1, 1, 1, 1, 1, 1, 1, '26 Mar 2026', '29 Januari 2026'),
(92, 30, 25, 4, '13', 150000, 600000, 3025, 0, 0, 0, 0, 0, 0, 0, 0, '', '3, 6, 10, 12 Maret 2026'),
(93, 30, 14, 4, '13', 150000, 600000, 3014, 0, 0, 0, 0, 0, 0, 0, 0, '', '3, 5, 7, 12 Maret 2026'),
(94, 30, 27, 4, '13', 150000, 600000, 3027, 0, 0, 0, 0, 0, 0, 0, 0, '', '2, 3, 4, 10 Maret 2026');

-- --------------------------------------------------------

--
-- Table structure for table `ed_detail_matrik_honor`
--

CREATE TABLE `ed_detail_matrik_honor` (
  `id` int NOT NULL,
  `dummy` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_translok`
--

CREATE TABLE `jadwal_translok` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_nama_survei` int NOT NULL,
  `tgl_translok` date NOT NULL,
  `cek_double` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_translok`
--

INSERT INTO `jadwal_translok` (`id`, `id_user`, `id_nama_survei`, `tgl_translok`, `cek_double`) VALUES
(15, 6, 70, '2026-01-21', '62026-01-21'),
(16, 6, 70, '2026-01-22', '62026-01-22'),
(17, 38, 70, '2026-01-21', '382026-01-21'),
(18, 38, 70, '2026-01-23', '382026-01-23'),
(19, 19, 70, '2026-01-21', '192026-01-21'),
(20, 19, 70, '2026-01-22', '192026-01-22'),
(21, 29, 170, '2026-02-09', '292026-02-09'),
(22, 29, 68, '2026-02-03', '292026-02-03'),
(23, 29, 68, '2026-02-05', '292026-02-05'),
(24, 29, 170, '2026-02-11', '292026-02-11'),
(25, 29, 170, '2026-02-08', '292026-02-08'),
(26, 29, 170, '2026-02-12', '292026-02-12'),
(27, 29, 170, '2026-02-18', '292026-02-18'),
(28, 19, 163, '2026-02-12', '192026-02-12'),
(29, 19, 63, '2026-02-10', '192026-02-10'),
(30, 29, 66, '2026-02-25', '292026-02-25'),
(31, 29, 178, '2026-03-01', '292026-03-01'),
(32, 29, 178, '2026-03-02', '292026-03-02'),
(33, 29, 178, '2026-03-03', '292026-03-03'),
(34, 29, 178, '2026-03-04', '292026-03-04'),
(35, 26, 178, '2026-03-01', '262026-03-01'),
(36, 26, 178, '2026-03-03', '262026-03-03'),
(37, 26, 178, '2026-03-06', '262026-03-06'),
(38, 24, 163, '2026-02-05', '242026-02-05'),
(39, 24, 163, '2026-02-06', '242026-02-06'),
(40, 24, 163, '2026-02-09', '242026-02-09');

-- --------------------------------------------------------

--
-- Stand-in structure for view `jadwal_translok_view`
-- (See below for the actual view)
--
CREATE TABLE `jadwal_translok_view` (
`id` int
,`id_user` int
,`id_nama_survei` int
,`tgl_translok` date
,`bulan` int
,`tahun` year
,`cek_double` varchar(255)
,`nip` varchar(100)
,`nama_user` varchar(255)
,`foto` varchar(255)
,`id_tim` int
,`status` varchar(255)
,`password` varchar(255)
,`email` varchar(255)
,`role` varchar(255)
,`nama_survei` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `master_bulan`
--

CREATE TABLE `master_bulan` (
  `id` int NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_bulan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_bulan`
--

INSERT INTO `master_bulan` (`id`, `bulan`, `kode_bulan`) VALUES
(1, 'JANUARI', '01'),
(2, 'FEBRUARI', '02'),
(3, 'MARET', '03'),
(4, 'APRIL', '04'),
(5, 'MEI', '05'),
(6, 'JUNI', '06'),
(7, 'JULI', '07'),
(8, 'AGUSTUS', '08'),
(9, 'SEPTEMBER', '09'),
(10, 'OKTOBER', '10'),
(11, 'NOVEMBER', '11'),
(12, 'DESEMBER', '12');

-- --------------------------------------------------------

--
-- Table structure for table `master_jabatan_petugas`
--

CREATE TABLE `master_jabatan_petugas` (
  `id` int NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan_jabatan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_jabatan_petugas`
--

INSERT INTO `master_jabatan_petugas` (`id`, `jabatan`, `keterangan_jabatan`) VALUES
(1, 'PCL', 'Pencacahan Lapangan'),
(2, 'PML', 'Pengawasan Lapangan'),
(3, 'Pengolahan', 'Pengolahan');

-- --------------------------------------------------------

--
-- Table structure for table `master_petugas`
--

CREATE TABLE `master_petugas` (
  `id` int NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sobat_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_petugas` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_petugas`
--

INSERT INTO `master_petugas` (`id`, `nik`, `nama_petugas`, `alamat`, `kecamatan`, `pekerjaan`, `email`, `sobat_id`, `jabatan`, `status_petugas`) VALUES
(11, '3525061310790003', 'Suwanto', 'Jl. Krajan 3 RT 001 RW 005', '[010] Wringinanom', 'Aparat Desa / Kelurahan', 'suwantowa@gmail.com', '352522020023', 'Mitra', 'Aktif'),
(12, '3525062303920003', 'Muhammad Susanto', 'Dusun Mulyorejo RT 02 RW 06', '[010] Wringinanom', 'Aparat Desa / Kelurahan', 'herisanto23@gmail.com', '352522091060', 'Mitra', 'Aktif'),
(13, '3525065508820003', 'Mamik Handayani', 'Sooko RT 01/RW01', '[010] Wringinanom', 'Mengurus Rumah Tangga', 'DemikhaDemikha@gmail.com', '352522090383', 'Mitra', 'Aktif'),
(14, '3525060811950001', 'Muhammad Ali Asy\'Ari', 'Dsn. Sooko Ds.Sooko RT 01 RW 02 Kec. Wringinanom Kab Gresik', '[010] Wringinanom', 'Operator Madrasah', 'miduari023@gmail.com', '352522090386', 'Mitra', 'Aktif'),
(15, '3525066502940001', 'Silviati Ningsih', 'Lebanisuko', '[010] Wringinanom', 'Mengurus Rumah Tangga', 'nursansilvi@gmail.com', '352523030030', 'Mitra', 'Aktif'),
(16, '3525060804040003', 'Muhammad Alvin Hidayat', 'Krajan 003/005', '[010] Wringinanom', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'hidayatmalfin@gmail.com', '352522090010', 'Mitra', 'Aktif'),
(17, '3525066701980001', 'Widya Haweningrum', 'Dsn. Sumengko RT 007 RW 003', '[010] Wringinanom', 'Staff', 'widyahawe01@gmail.com', '352523110142', 'Mitra', 'Aktif'),
(18, '3525065806930004', 'Winda Putri Pungky Rosalina', 'Bureng Kidul RT 15 RW 06 Desa Kedunganyar', '[010] Wringinanom', 'Mengurus Rumah Tangga', 'windapungky@gmail.com', '352522030012', 'Mitra', 'Aktif'),
(19, '3525060606810002', 'Muchamat Faujan', 'Dsn Krajan', '[010] Wringinanom', 'Wiraswasta', 'Muchamatfaujan12@gmail.com', '352522030015', 'Mitra', 'Aktif'),
(20, '3525061705880002', 'Andri Akhir Dhianta', 'Dsn  Krajan RT 02 RW 05', '[010] Wringinanom', 'Wiraswasta', 'Andri.dhianta@gmail.com', '352522090001', 'Mitra', 'Aktif'),
(21, '3525065603810005', 'Syari\'Atussalamah', 'Pedagangan', '[010] Wringinanom', 'Mengurus Rumah Tangga', 'syariahsalamah750@gmail.com', '352522020146', 'Mitra', 'Aktif'),
(22, '3525062204940003', 'Muhammad Julul Muslih', 'Jalan RT 003 RW 002', '[010] Wringinanom', 'Aparat Desa / Kelurahan', 'mjululmuslih@gmail.com', '352522020056', 'Mitra', 'Aktif'),
(23, '3525067004890003', 'Khusnul Khotimah', 'Dusun Ngampon RT 14 RW 04', '[010] Wringinanom', 'Aparat Desa / Kelurahan', 'cintafebrianti95015@gmail.com', '352522020031', 'Mitra', 'Aktif'),
(24, '3525065212800004', 'Khoirul Umami', 'Sumbergede RT 002 RW 004', '[010] Wringinanom', 'Aparat Desa / Kelurahan', 'khoirulumami121280@gmail.com', '352522020043', 'Mitra', 'Aktif'),
(25, '3525064209960004', 'Shofia Intan Nasution', 'Desa SumbeRWaru RT.01/RW.03', '[010] Wringinanom', 'Admin Social Media', 'shofiaintan196@gmail.com', '352522091286', 'Mitra', 'Aktif'),
(26, '3525065908910002', 'Rina Agustin', 'Dusun Wetan RT 02 RW 09', '[010] Wringinanom', 'Aparat Desa / Kelurahan', 'rhiena112233@gmail.com', '352522091173', 'Mitra', 'Aktif'),
(27, '3525064102940001', 'Nikmatus Sholiha', 'Lebanisuko RT 008 RW 002', '[010] Wringinanom', 'Guru Tpq', 'solehanikmah@gmail.com', '352522091285', 'Mitra', 'Aktif'),
(28, '3535061111910004', 'Moh. Mahfudin', 'Dsn. Tlanak RT 3 RW 5', '[010] Wringinanom', 'Wiraswasta', 'indahpratomo5@gmail.com', '352523110442', 'Mitra', 'Aktif'),
(29, '3525065805940001', 'Erlina Pratiwi Wulandari', 'Tlanak', '[010] Wringinanom', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'woelantlanak@gmail.com', '352523110368', 'Mitra', 'Aktif'),
(30, '3525065707950001', 'Rihatul Mawaddah', 'Dusun Sooko RT 001 RW 003', '[010] Wringinanom', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'rikhatulmawaddah@gmail.com', '352523110369', 'Mitra', 'Aktif'),
(31, '3525061305770004', 'Sony Wardhana', 'Dusun Krajan RT02 RW05', '[010] Wringinanom', 'Belum Kerja', 'tembeldhino9@gmail.com', '352522100027', 'Mitra', 'Aktif'),
(32, '3525066003860003', 'Umi Salamah', 'Dusun Sooko RT 003 RW 002', '[010] Wringinanom', 'Pegawai / Guru Honorer', 'umis0792@gmail.com', '352523030074', 'Mitra', 'Aktif'),
(33, '3525064709030001', 'Lailatul Munjhiyati', 'Dusun Ngemplak RT 004 RW 004', '[010] Wringinanom', 'Pelajar / Mahasiswa', 'sastutik2009@gmail.com', '352524100061', 'Mitra', 'Aktif'),
(34, '3525150407690003', 'Kasroni', 'Raya Cangkir RT 18 RW 03 Driyorejo', '[020] Driyorejo', 'Wiraswasta', 'ronisodiq@gmail.com', '352522091131', 'Mitra', 'Aktif'),
(35, '3525154906910003', 'Rintis Ayuni Purbosari', 'Jalan Raya Ngambar Bambe No 222 Driyorejo', '[020] Driyorejo', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'raksadewi332@gmail.com', '352522090230', 'Mitra', 'Aktif'),
(36, '3525150604900001', 'Danu Solfiyan Alfanani', 'Guwo Sumput RT 17 RW 04', '[020] Driyorejo', 'Pegawai / Guru Honorer', 'sumput17@gmail.com', '352522091408', 'Mitra', 'Aktif'),
(37, '3525156510970001', 'Ana Eka Novitasari', 'Dsn. Tambak Sari Ds. Mojosarirejo RT 16 RW 05', '[020] Driyorejo', 'Pegawai / Guru Honorer', 'anaekanovitasari@gmail.com', '352522091480', 'Mitra', 'Aktif'),
(38, '3525151801680001', 'Muhammad Qodim', 'Desa Kesamben Wetan RT. 012 RW. 002', '[020] Driyorejo', 'Aparat Desa / Kelurahan', 'muhammad.qodim@gmail.com', '352523110006', 'Mitra', 'Aktif'),
(39, '3525156904020001', 'Aprilia Nur Diana', 'Mojosarirejo RT 001 RW 001', '[020] Driyorejo', 'Pegawai / Guru Honorer', 'apriliaputri171717@gmail.com', '352524100081', 'Mitra', 'Aktif'),
(40, '3525155911910001', 'Novaretta Ayu Wardhany', 'Jl. Larangan RT 007 RW 003 Krikilan', '[020] Driyorejo', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'novarettawardhany365@gmail.com', '352524100078', 'Mitra', 'Aktif'),
(41, '3525155712820002', 'Desi Wulandari', 'Jl.Mawar RT 10 RW 03 Desa Bambe', '[020] Driyorejo', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'desy46krystal@gmail.com', '352522020108', 'Mitra', 'Aktif'),
(42, '3506024812860001', 'Giriningtyas Dwi M', 'Perumahan Bukit Bambe Gang Mawar Iii Blok Eh-37 RT 24 RW 06', '[020] Driyorejo', 'Mengurus Rumah Tangga', 'Tyas154gp@gmail.com', '350622030090', 'Mitra', 'Aktif'),
(43, '3506096410930007', 'Ervi Anisatul Awalah', 'RT 05 RW 02 Dusun Bambe', '[020] Driyorejo', 'Mengurus Rumah Tangga', 'erviannisha2@gmail.com', '352522030023', 'Mitra', 'Aktif'),
(44, '3515124403850001', 'Devit Kartika Sari', 'Jl.Semeru RT.07 RW.02', '[020] Driyorejo', 'Mengurus Rumah Tangga', 'Dhevsday@gmail.com', '352523110053', 'Mitra', 'Aktif'),
(45, '3525155908940007', 'Agestya Rachmana Sisca Maharum', 'Desa Tanjungan RT 010 RW 002', '[020] Driyorejo', 'Staf Perangkat Desa', 'ciskarachma@gmail.com', '352522020013', 'Mitra', 'Aktif'),
(46, '3525155409880002', 'Ika Rusmariyah Defie', 'Desa Banjaran RT.02 RW.03', '[020] Driyorejo', 'Mengurus Rumah Tangga', 'ikazayyanhamz@gmail.com', '352522090897', 'Mitra', 'Aktif'),
(47, '3525155102940001', 'Siti Syamsiah', 'Tenaru RT 005 RW 002', '[020] Driyorejo', 'Aparat Desa / Kelurahan', 'ssyamsiah055@gmail.com', '352522090278', 'Mitra', 'Aktif'),
(48, '3515135511010004', 'Nur Vita Dewan Tari', 'Perum Bukit Bambe Asabri Blok Eg No.19 RT 24 RW 06', '[020] Driyorejo', 'Pelajar / Mahasiswa', 'vitatut15@gmail.com', '352522090394', 'Mitra', 'Aktif'),
(49, '3525151002920002', 'Fahrul Syarif Hidayatulloh', 'Dusun Kalangan RT 02 RW 02', '[020] Driyorejo', 'Aparat Desa / Kelurahan', 'beketung@gmail.com', '352522091343', 'Mitra', 'Aktif'),
(50, '3525155205010001', 'Melanda Isni Kusniawati', 'Ds. Mojosarirejo RT 03 RW 01', '[020] Driyorejo', 'Tidak Ada', 'melandakusniawati@gmail.com', '352524100167', 'Mitra', 'Aktif'),
(51, '3525156010670001', 'Anik Suibah', 'RT 02 RW 01', '[020] Driyorejo', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'aniksuibahmail20@gmail.com', '352522090284', 'Mitra', 'Aktif'),
(52, '3517042206950002', 'Rifhki Miftah Latif', 'Ds. Banjaran RT 03/RW 05', '[020] Driyorejo', 'Pegawai / Guru Honorer', 'rifkimiftahlatif@gmail.com', '352524100138', 'Mitra', 'Aktif'),
(53, '3525136206770001', 'Dian Widianti', 'Jalan Phirus Biru 1 No 6 Kbd', '[020] Driyorejo', 'Wiraswasta', 'dianfatkur@gmail.com', '352522030016', 'Mitra', 'Aktif'),
(54, '3522157001730002', 'Atik Rahayu', 'Jl. Pirus Biru 1.1 No.7 Kota Baru Driyorejo', '[020] Driyorejo', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'atikrahayu1973@gmail.com', '352522020048', 'Mitra', 'Aktif'),
(55, '3525150109820004', 'Tasrukin', 'Dsn. Petiken RT 04 RW 02 Driyorejo Gresik', '[020] Driyorejo', 'Wiraswasta', 'verlita.nilam@gmail.com', '352522091128', 'Mitra', 'Aktif'),
(56, '3525156905760001', 'Susi Wahyuningsih', 'Jl.Tirtonadi RT 03 RW 01', '[020] Driyorejo', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'susisutikno123@gmail.com', '352522090437', 'Mitra', 'Aktif'),
(57, '3525156107940003', 'Ismi Khumairo', 'Tanjungan RT 6 RW 1', '[020] Driyorejo', 'Pegawai / Guru Honorer', 'Riduwanismi@gmail.com', '352522090254', 'Mitra', 'Aktif'),
(58, '3525154208890001', 'Agustina Cristy Anggraini', 'Dusun Karanglo RT 04 RW 03', '[020] Driyorejo', 'Aparat Desa / Kelurahan', 'agustinacristyanggraini@gmail.com', '352522090434', 'Mitra', 'Aktif'),
(59, '3525150211670002', 'Suwadi', 'Desa Banjaran RT 4 RW 5', '[020] Driyorejo', 'Wiraswasta', 'Suwadimusjo@gmail.com', '352522091122', 'Mitra', 'Aktif'),
(60, '3525155805900002', 'Denok Kanthi Tri Lestari', 'Ngambar RT 18 RW 05', '[020] Driyorejo', 'Mengurus Rumah Tangga', 'leztary.tri182@gmail.com', '352522090438', 'Mitra', 'Aktif'),
(61, '3525156505890004', 'Anita Mei Sri Astutik', 'Kesamben Wetan RT 09 RW 02', '[020] Driyorejo', 'Mengurus Rumah Tangga', 'anitameya@gmail.com', '352522030018', 'Mitra', 'Aktif'),
(62, '3525151905760003', 'Supriyono', 'RT 04 RW 01', '[020] Driyorejo', 'Aparat Desa / Kelurahan', 'paksupriyono58@gmail.com', '352522020162', 'Mitra', 'Aktif'),
(63, '3525155402890001', 'Yuyut Iswitahwati', 'Desa Petiken RT 04 RW 02', '[020] Driyorejo', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'yuyutwati887@gmail.com', '352522020107', 'Mitra', 'Aktif'),
(64, '3525154310890001', 'Rodliyatul Jannah', 'Dsn Bunut RT 01 RW 07', '[020] Driyorejo', 'Aparat Desa / Kelurahan', 'ranindya9@gmail.com', '352522020053', 'Mitra', 'Aktif'),
(65, '3525153004830002', 'Nanang Susanto', 'RT11 RW02 Desa Sumput', '[020] Driyorejo', 'Aparat Desa / Kelurahan', 'susantonanang286@gmail.com', '352522020104', 'Mitra', 'Aktif'),
(66, '3525152206680003', 'Moh Tholib', 'Jl Raya Ngambar Bambe 222', '[020] Driyorejo', 'Aparat Desa / Kelurahan', 'mtholib22@gmail.com', '352522020090', 'Mitra', 'Aktif'),
(67, '3525151404910001', 'Amar Mubarok', 'Mojosarirejo RT 04 RW 02', '[020] Driyorejo', 'Pegawai / Guru Honorer', 'amarmubarok605@gmail.com', '352522020005', 'Mitra', 'Aktif'),
(68, '3525152411870003', 'Muhamad Yusuf', 'Mojosarirejo RT 011/003', '[020] Driyorejo', 'Wiraswasta', 'masdzahwan@gmail.com', '352522020007', 'Mitra', 'Aktif'),
(69, '3525150906850001', 'Sukamto', 'Wedoroanom', '[020] Driyorejo', 'Aparat Desa / Kelurahan', 'sinyokamto@gmail.com', '352522020015', 'Mitra', 'Aktif'),
(70, '3525155903940002', 'Ida Fitria Suryani Putri', 'Klitih RT.2 RW.5 Desa Randegansari', '[020] Driyorejo', 'Mengurus Rumah Tangga', 'itsdaput1994@gmail.com', '352522091136', 'Mitra', 'Aktif'),
(71, '3525154104760004', 'Sulianik', 'Wedoroanom RT 002 RW 001', '[020] Driyorejo', 'Mengurus Rumah Tangga', 'anikbunda769@gmail.com', '352522091428', 'Mitra', 'Aktif'),
(72, '3525156202820007', 'Atik Umaidah', 'Desa Mojosarirejo RT 11 RW 03', '[020] Driyorejo', 'Mengurus Rumah Tangga', 'atikumaidah3@gmail.com', '352522091245', 'Mitra', 'Aktif'),
(73, '3525156501020004', 'Widyanti Ika Pratiwi', 'Jl. Mojosarirejo RT.08 RW.03, Kec. Driyorejo, Kab. Gresik', '[020] Driyorejo', 'Pelajar / Mahasiswa', 'Widyantiika250102@gmail.com', '352522091402', 'Mitra', 'Aktif'),
(74, '3525156506940002', 'Ana Ayu Fitrianah', 'Dusun Randu Pukah RT 17 RW 4', '[020] Driyorejo', 'Tenaga Administrasi', 'anaayu1994@gmail.com', '352522091502', 'Mitra', 'Aktif'),
(75, '3525157004960001', 'Ririn Hajah Rohmatin', 'Nanom RT/RW 009/004', '[020] Driyorejo', 'Mengurus Rumah Tangga', 'ririnhjrohmatin@gmail.com', '352522091335', 'Mitra', 'Aktif'),
(76, '3525154210850004', 'Eni Kurniawati', 'Wedoroanom RT 004 RW 001', '[020] Driyorejo', 'Mengurus Rumah Tangga', 'eniekarsali@gmail.com', '352522091328', 'Mitra', 'Aktif'),
(77, '3525152903780001', 'M. Nur Ashadi', 'Jalan Raya Krikilan RT.012 RW.005', '[020] Driyorejo', 'Aparat Desa / Kelurahan', 'nurashadi78@gmail.com', '352522091148', 'Mitra', 'Aktif'),
(78, '3525155206890002', 'Yuliana Agustin', 'Dsn.Larangan RT 7 RW 3', '[020] Driyorejo', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'gibranpangatyo@gmail.com', '352522091170', 'Mitra', 'Aktif'),
(79, '3525154505980001', 'Islamiyah', 'Ds. Mojosarirejo RT 16 RW 05', '[020] Driyorejo', 'Pegawai / Guru Honorer', 'ammiislam175@gmail.com', '352522090424', 'Mitra', 'Aktif'),
(80, '3525155805940005', 'Nike Fatmalah', 'Wedoroanom RT 010 RW 004', '[020] Driyorejo', 'Aparat Desa / Kelurahan', 'nikefatmalah@gmail.com', '352522091324', 'Mitra', 'Aktif'),
(81, '3525153105980002', 'Muhammad Yusril Ihza Maulana', 'Driyorejo RT 03 RW 01', '[020] Driyorejo', 'Wiraswasta', 'yusrilmaulana47@gmail.com', '352522100042', 'Mitra', 'Aktif'),
(82, '3525155202920001', 'Devi Purnama Sari', 'Desa Mojosarirejo RT11 RW03', '[020] Driyorejo', 'Wiraswasta', 'devidev8836@gmail.com', '352522090625', 'Mitra', 'Aktif'),
(83, '3525151205950002', 'Edi Sudrajad', 'Jl. Mojosarirejo RT 11 RW 03 Driyorejo - Gresik', '[020] Driyorejo', 'Pegawai / Guru Honorer', 'edidrajad7@gmail.com', '352522090444', 'Mitra', 'Aktif'),
(84, '3525151607990003', 'Zhul Hasbi Ash Siddiqie', 'Jln Mojosarirejo RT 9 RW 3', '[020] Driyorejo', 'Pegawai / Guru Honorer', 'zhulhasbi16@gmail.com', '352522090479', 'Mitra', 'Aktif'),
(85, '3525150302050001', 'Ahmad Rizky Ainul Yaqin', 'Jl. Mulung', '[020] Driyorejo', 'Pelajar / Mahasiswa', 'Ahmadrizz966@gmail.com', '352524100077', 'Mitra', 'Aktif'),
(86, '3525156807910003', 'Winda Roza Santiyasninah', 'Bambe RT 12 RW 04', '[020] Driyorejo', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'loveridowinda@gmail.com', '352523110043', 'Mitra', 'Aktif'),
(87, '3525155510860001', 'Siti Khotimah', 'Wedoroanom RT 011 RW 004', '[020] Driyorejo', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'azkianayla085@gmail.com', '352523110079', 'Mitra', 'Aktif'),
(88, '3525155805040003', 'Sefira Dewi Nazarina', 'Ds. Mojosarirejo RT.06 RW.02', '[020] Driyorejo', 'Pelajar / Mahasiswa', 'sevira.nazerina@gmail.com', '352523110044', 'Mitra', 'Aktif'),
(89, '3525150309000002', 'Ahmad Rifki Hamdani', 'Desa Mojosarirejo RT 05 RW 02', '[020] Driyorejo', 'Pelajar / Mahasiswa', 'ahmadrifkihamdani1@gmail.com', '352523110048', 'Mitra', 'Aktif'),
(90, '3525156807020001', 'Elsa Zaidaturrizqi', 'Nanom RT 09 RW 04', '[020] Driyorejo', 'Pegawai / Guru Honorer', 'zaidaturrizqie@gmail.com', '352524100109', 'Mitra', 'Aktif'),
(91, '3525155110790020', 'Ani Sri Nurhayati', 'Jl. Mulung', '[020] Driyorejo', 'Pegawai / Guru Honorer', 'Rizkyfarhanani@gmail.com', '352524100120', 'Mitra', 'Aktif'),
(92, '3525152603760001', 'Hari Purwanto', 'Driyorejo RT 3 RW 2', '[020] Driyorejo', 'Swasta', 'harpur99208@gmail.com', '352522020074', 'Mitra', 'Aktif'),
(93, '3525156505820005', 'Suci Kurniawati', 'Wedoroanom RT 006 RW 002', '[020] Driyorejo', 'Mengurus Rumah Tangga', 'sucikurniawati75@gmail.com', '352523110025', 'Mitra', 'Aktif'),
(94, '3525154212770003', 'Petty Sriandayani', 'Desa Petiken RT 12 RW 06', '[020] Driyorejo', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'pettysriandayani@gmail.com', '352522091190', 'Mitra', 'Aktif'),
(95, '3515071212700002', 'Gatot Subroto', 'Dusun Legundi RT 5 RW 2', '[020] Driyorejo', 'Wiraswasta', 'gatotbroto2@gmail.com', '352523070008', 'Mitra', 'Aktif'),
(96, '3525086307840001', 'Sutilahwati', 'Desa Mojowuku RT.015 RW..005', '[030] Kedamean', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'tilahwati9@gmail.com', '352522091287', 'Mitra', 'Aktif'),
(97, '3525084707960002', 'Lutfianah Ainur Rohmah', 'Dusun Kasiyan RT 004 RW 008', '[030] Kedamean', 'Mengurus Rumah Tangga', 'lutvianaainur@gmail.com', '352522090696', 'Mitra', 'Aktif'),
(98, '3525086412930001', 'Suendah', 'Ds Sidoraharjo RT 05 RW 02', '[030] Kedamean', 'Wiraswasta', 'indriendah195@gmail.com', '352522090043', 'Mitra', 'Aktif'),
(99, '3525085401840001', 'Choiyul Fardliyah', 'Ds. Ngepung RT.1 RW.1 Gg. Tretes', '[030] Kedamean', 'Pegawai / Guru Honorer', 'choiyulfardliyah14@gmail.com', '352522090082', 'Mitra', 'Aktif'),
(100, '3525080704940001', 'Muhammad Syaiful Ihwanuddin', 'Dusun Miru RT 10 RW 05', '[030] Kedamean', 'Pegawai / Guru Honorer', 'semutihwan@gmail.com', '352522100028', 'Mitra', 'Aktif'),
(101, '3525082307840001', 'Ahmad Dardiri', 'Dusun Kemuning', '[030] Kedamean', 'Staf Desa', 'dardiriahmad84@gmail.com', '352522090801', 'Mitra', 'Aktif'),
(102, '3525085512950001', 'Afifatul Hamidah', 'Jl Ngepung Gg Masjid RT 02 RW 01', '[030] Kedamean', 'Pegawai / Guru Honorer', 'akyuceieda@gmail.com', '352522020088', 'Mitra', 'Aktif'),
(103, '3525086102910014', 'Elisa Isnaini', 'Desa Lampah RT 006 RW 002', '[030] Kedamean', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'pagimatahari35@gmail.com', '352522020082', 'Mitra', 'Aktif'),
(104, '3525084705970001', 'Mei Purwo Ningsih', 'Dusun Gorekan Kidul RT 003 RW 002', '[030] Kedamean', 'Aparat Desa / Kelurahan', 'meipurwoningsih@gmail.com', '352522020083', 'Mitra', 'Aktif'),
(105, '3525085806840012', 'Ratna Yunita Sari', 'Dusun Gorekan Kidul RT3 RW2', '[030] Kedamean', 'Mengurus Rumah Tangga', 'andiksuprapto020780@gmail.com', '352522090738', 'Mitra', 'Aktif'),
(106, '3525084712030001', 'Wafiq Luthfiya Tahta Salsabila', 'Katimoho RT 08 RW 03 Kedamean 61175', '[030] Kedamean', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'wafiqluthfea73@gmail.com', '352522091281', 'Mitra', 'Aktif'),
(107, '3525080407900003', 'Fiki Andian', 'Desa Belahanrejo RT 012 RW 004', '[030] Kedamean', 'Aparat Desa / Kelurahan', 'fikiandian2017@gmail.com', '352522100070', 'Mitra', 'Aktif'),
(108, '3525082002970003', 'Abdul Rochman', 'Ds. Belahanrejo RT.001 RW.001', '[030] Kedamean', 'Aparat Desa / Kelurahan', 'arochman264@gmail.com', '352522091004', 'Mitra', 'Aktif'),
(109, '3525080709940001', 'Candra Perdana', 'Desa Kedamean RT 12 RW 05 Kec Kedamean Kab Gresik', '[030] Kedamean', 'Aparat Desa / Kelurahan', 'perdanacandra92@gmail.com', '352523030185', 'Mitra', 'Aktif'),
(110, '3525085505980001', 'Hesti Ayu Niswatin', 'Dsn Sawen RT003 RW005', '[030] Kedamean', 'Online Shop', 'hestiniswa533@gmail.com', '352522100005', 'Mitra', 'Aktif'),
(111, '3525084906920001', 'Femilia Hardiningsih', 'Desa Slempit RT 016 RW 003', '[030] Kedamean', 'Mengurus Rumah Tangga', 'femiliahardiningsih@gmail.com', '352522100020', 'Mitra', 'Aktif'),
(112, '3525081406880001', 'Parto', 'Desa Slempit RT 001 RW 001', '[030] Kedamean', 'Wiraswasta', 'partoadi46@gmail.com', '352522090767', 'Mitra', 'Aktif'),
(113, '3525086907820002', 'Supriyatin', 'Ds Katimoho RT 8 RW 3', '[030] Kedamean', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'alvinstore82@gmail.com', '352522090283', 'Mitra', 'Aktif'),
(114, '3525086502970001', 'Ovita Fitriana', 'Jl. Lukojoyo, Dsn. Lingsir, Ds. Slempit, RT.29/RW:05, Kec. Kedamean, Kab. Gresik', '[030] Kedamean', 'Karyawan Swasta', 'ovita2502@gmail.com', '352523030189', 'Mitra', 'Aktif'),
(115, '3525085707950002', 'Rizatul Amalia', 'Kedamean RT 014 RW 006 Kek Kedamean Kec Kedamean', '[030] Kedamean', 'Online Shop', 'rizatul.amalia@gmail.com', '352523030203', 'Mitra', 'Aktif'),
(116, '3525081505830001', 'Hartono', 'Desa Lampah RT 001 RW 006', '[030] Kedamean', 'Wiraswasta', 'naurashaqeela017@gmail.com', '352523030151', 'Mitra', 'Aktif'),
(117, '3525081212810002', 'Supariyanto', 'RT:09 RW:03 Menunggal', '[030] Kedamean', 'Karyawan Swasta', 'supariyant.supariyanto@gmail.com', '352523030159', 'Mitra', 'Aktif'),
(118, '3525081509900002', 'Lailatur Rizki', 'Dsn. Bodin Ds. Sidoraharjo RT. 03 RW. 07 Kec. Kedamean Kab. Gresik', '[030] Kedamean', 'Pelajar / Mahasiswa', 'rizky.lailatur@gmail.com', '352523030194', 'Mitra', 'Aktif'),
(119, '3526045404870009', 'Dewi Indah Rosalina', 'Dusun Wonosari RT3 RW 02', '[030] Kedamean', 'Mengurus Rumah Tangga', 'solikinindah46@gmaik.com', '352522091064', 'Mitra', 'Aktif'),
(120, '3525081504870003', 'Andy Winarno', 'Jl. Raya Kedamean No. 19A RT. 5 RW. 2', '[030] Kedamean', 'Wiraswasta', 'andiwinarno8@gmail.com', '352523110005', 'Mitra', 'Aktif'),
(121, '3517075504920007', 'Sri Setyana Penasari Iksan', 'Jalan Kedawung No. 1 RT. 7 RW. 3', '[030] Kedamean', 'Pedagang', 'penasariiksan@gmail.com', '352523110246', 'Mitra', 'Aktif'),
(122, '3525135607940002', 'Andriyani', 'Jalan Bongso Kulon RT3 RW1 Desa Pengalangan', '[040] Menganti', 'Wiraswasta', 'andriyani071994@gmail.com', '352522020249', 'Mitra', 'Aktif'),
(123, '3525130501950001', 'Wahyu Dicky Sanjaya', 'Menganti RT.018 RW.006', '[040] Menganti', 'Aparat Desa / Kelurahan', 'cimbotbodong10@gmail.com', '352522020164', 'Mitra', 'Aktif'),
(124, '3525135905880002', 'Masita', 'Dusun Gempol RT 004 RW 002', '[040] Menganti', 'Pegawai / Guru Honorer', 'masitawidodo@gmail.com', '352522020138', 'Mitra', 'Aktif'),
(125, '3525134608830015', 'Elis Qurotul Aini', 'Drancang RT 07 RW 03', '[040] Menganti', 'Wiraswasta', 'elisqurrotuaini@gmail.com', '352522020184', 'Mitra', 'Aktif'),
(126, '3516184807990001', 'Vicky Dwi Cahyani', 'Dsn. Kalimalang RT 002/ RW 003', '[040] Menganti', 'Mengurus Rumah Tangga', 'vickydwicahyani476@gmail.com', '352522090445', 'Mitra', 'Aktif'),
(127, '3525136201920002', 'Ely Junaida', 'Jalan Raya Kepatihan RT 03 RW 02', '[040] Menganti', 'Ibu Rumah Tangga', 'elyjunaida1@gmail.com', '352522090978', 'Mitra', 'Aktif'),
(128, '3525130310980014', 'Syahrul Hidayat', 'Peniron Wetan, RT. 002 / RW. 002', '[040] Menganti', 'Wiraswasta', 'syahrul.uinsby@gmail.com', '352522090955', 'Mitra', 'Aktif'),
(129, '3578132811000003', 'Arvian Ramadhany Hidayawan', 'RT 015 RW 005 Desa Sidojangkung Kec. Menganti Kab. Gresik.', '[040] Menganti', 'Tidak Ada', 'arvianramadhany33@gmail.com', '352522110042', 'Mitra', 'Aktif'),
(130, '3525160311860001', 'Muhamad Irwan', 'Perum Palem PeRTiwi Blok Y No 5 RT 015 RW 006', '[040] Menganti', 'Wiraswasta', 'irwanfti@gmail.com', '352523110148', 'Mitra', 'Aktif'),
(131, '3525136210960002', 'Miftahul Jannah', 'Beton', '[040] Menganti', 'Staf Desa', 'mitha.mitul2016@gmail.com', '352523110177', 'Mitra', 'Aktif'),
(132, '3525131808040003', 'Emalia Agustin', 'Dusun Bibis RT 010 RW 003', '[040] Menganti', 'Kerajinan', 'emaliaagustin88@gmail.com', '352523110199', 'Mitra', 'Aktif'),
(133, '3503024901890002', 'Umul Wasiah', 'RT 01 RW 03 Dusun Ngablakrejo', '[040] Menganti', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'umul.wasiah09@gmail.com', '352524100082', 'Mitra', 'Aktif'),
(134, '3525135403020001', 'Amanda Wahyu Safitri', 'Desa Setro', '[040] Menganti', 'Pegawai / Guru Honorer', 'amandasafitri40747@gmail.com', '352524100084', 'Mitra', 'Aktif'),
(135, '3524114505790002', 'Yuni Astutik', 'RT 15 RW 05 Desa Putatlor', '[040] Menganti', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'Yuniastutik0579@gmail.com', '352524100094', 'Mitra', 'Aktif'),
(136, '3525135501000003', 'Devi Tasya Millenia', 'Pengalangan RT.06 RW.03', '[040] Menganti', 'Swasta', 'devitasyamillenia015@gmail.com', '352524100091', 'Mitra', 'Aktif'),
(137, '3525134401790017', 'Musyaropah', 'Menganti RT.005 RW.002', '[040] Menganti', 'Mengurus Rumah Tangga', 'gendhismanis25@gmail.com', '352524100096', 'Mitra', 'Aktif'),
(138, '3525130204790004', 'Kasturi', 'Jl. Raya Menganti Karangturi', '[040] Menganti', 'Pegawai / Guru Honorer', 'yaziddulnasiq@gmail.com', '352524100099', 'Mitra', 'Aktif'),
(139, '3525130803990001', 'Muhammad Fery Afrizal Maulana', 'Bibis Kidul RT.34 RW.11 Kec. Menganti Gresik', '[040] Menganti', 'Guru', 'feryafrizalmmm11@gmail.com', '352524100105', 'Mitra', 'Aktif'),
(140, '3525135101870002', 'Wiji Harianti', 'Menganti RT.34 RW.11', '[040] Menganti', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'wijiharianti27@gmail.com', '352524100106', 'Mitra', 'Aktif'),
(141, '3525131810980004', 'Galang Kertoraharjo', 'Dsn. Wonokoyo RT. 29 RW. 09', '[040] Menganti', 'Wiraswasta', 'galanksay@gmail.com', '352524100108', 'Mitra', 'Aktif'),
(142, '3525130305050001', 'Revaldo Achmad Baihaqi Putra Syamyuan', 'Jl Laban Grogol RT 25 RW 02', '[040] Menganti', 'Pelajar / Mahasiswa', 'revaldoachmad03@gmail.com', '352524100110', 'Mitra', 'Aktif'),
(143, '3578206511810003', 'Diarti Asna Armania', 'Perum Oma Greenland Blok N No.17 RT.002 RW.12', '[040] Menganti', 'Pegawai / Guru Honorer', 'armaniarachman@gmail.com', '352522090313', 'Mitra', 'Aktif'),
(144, '3525136504720005', 'Budi Lestari', 'Desa Gempol Kurung RT 05 RW 04', '[040] Menganti', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'budilestar0975.21@gmail.com', '352523020007', 'Mitra', 'Aktif'),
(145, '3525134609830017', 'Suheni', 'Tamam Siwalan Indah Blok A No 8', '[040] Menganti', 'Pegawai / Guru Honorer', 'suheniyusnita69@gmail.com', '352522020157', 'Mitra', 'Aktif'),
(146, '3525135304760001', 'Nur Hidayati', 'Desa Sidowungu RT 03 RW 01', '[040] Menganti', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'nuthidayati1976@gmail.com', '352523030045', 'Mitra', 'Aktif'),
(147, '3525132801820003', 'Achmadi', 'Dusun Petal', '[040] Menganti', 'Pegawai / Guru Honorer', 'achmadiamytro@gmail.com', '352522090028', 'Mitra', 'Aktif'),
(148, '3525135803950004', 'Ratna Kartika Dewi', 'Randupadangan RT 01 RW 01', '[040] Menganti', 'Pegawai / Guru Honorer', 'ratnakartikadewi20@gmail.com', '352522090476', 'Mitra', 'Aktif'),
(149, '3525131805780002', 'Sucahyo', 'Boteng RT 010 RW 004', '[040] Menganti', 'Wiraswasta', 'aryancahyo2@gmail.com', '352522090397', 'Mitra', 'Aktif'),
(150, '3525134601970001', 'Milarosa Anggraeni', 'Desa Pelemwatu RT.05 RW.03 Menganti Gresik', '[040] Menganti', 'Pegawai / Guru Honorer', 'milarosaanggraeni@gmail.com', '352522090393', 'Mitra', 'Aktif'),
(151, '3525134902970002', 'Nia Fitri Andri Isnayni', 'Hendrosari RT. 002 RW. 001', '[040] Menganti', 'Aparat Desa / Kelurahan', 'isnayni7@gmail.com', '352522090396', 'Mitra', 'Aktif'),
(152, '3525137004940002', 'Vivin Nafiatun Nazidah', 'Hulaan RT. 05 RW. 03', '[040] Menganti', 'Mengurus Rumah Tangga', 'vivinnafiatun3@gmail.com', '352522090551', 'Mitra', 'Aktif'),
(153, '3525134504920005', 'Atik Fitriyah', 'Ds.Domas RT.14 RW.05', '[040] Menganti', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'achmadsyarbinni05@gmail.com', '352522090262', 'Mitra', 'Aktif'),
(154, '3525135201030005', 'Diah Ayu Wulandari', 'Dusun Songgat', '[040] Menganti', 'Pelajar / Mahasiswa', 'diahayuwulandari611@gmail.com', '352522090443', 'Mitra', 'Aktif'),
(155, '3525135906010001', 'Nicki Fabasti Asmah', 'Jalan Laban Grogol RT 25 RW 02', '[040] Menganti', 'Pegawai / Guru Honorer', 'nickifabasti76@gmail.com', '352522090436', 'Mitra', 'Aktif'),
(156, '3525134312850002', 'Sarni', 'Bongso Wetan No 26 RT 17 RW 08', '[040] Menganti', 'Mengurus Rumah Tangga', 'sarnisurabaya2@gmail.com', '352522091007', 'Mitra', 'Aktif'),
(157, '3525136705810002', 'Kristian Susanti', 'Desa Pranti RT.06 RW.05', '[040] Menganti', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'kristiansusanti123@gmail.com', '352522091033', 'Mitra', 'Aktif'),
(158, '3525136503800003', 'Luluk Chumaidah', 'Perum Green Menganti Blok A7-7', '[040] Menganti', 'Mengurus Rumah Tangga', 'Zaf431185@gmail.com', '352522100058', 'Mitra', 'Aktif'),
(159, '3525134403920002', 'Ilvi Nurdiana Manzil', 'Menganti RT. 034 RW. 011', '[040] Menganti', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'ilvihidayat2507@gmail.com', '352522090851', 'Mitra', 'Aktif'),
(160, '3525136005800002', 'Darsih', 'Tlogobedah RT.04 RW.02', '[040] Menganti', 'Aparat Desa / Kelurahan', 'pemerintahhulaan@gmail.com', '352522040004', 'Mitra', 'Aktif'),
(161, '3525135309830002', 'Irawati', 'Desa Beton RT 003 RW001', '[040] Menganti', 'Aparat Desa / Kelurahan', 'irahermawan154@gmail.com', '352522020265', 'Mitra', 'Aktif'),
(162, '3525131311760015', 'Mashudi', 'Dusun Kecipik', '[040] Menganti', 'Wiraswasta', 'hudimas552@gmail.com', '352522020186', 'Mitra', 'Aktif'),
(163, '3525133010740002', 'Suweno', 'Watukulon RT 04 RW 05', '[040] Menganti', 'Aparat Desa / Kelurahan', 'Suwenoeno35@gmail.com', '352522020188', 'Mitra', 'Aktif'),
(164, '3525132204000002', 'David Aries Sigit', 'Pelemwatu RT 10 RW 05', '[040] Menganti', 'Wiraswasta', 'davidaries099@gmail.com', '352522020196', 'Mitra', 'Aktif'),
(165, '3525132605920001', 'Angga Prasetyo', 'Dusun Ngemplak Wonoayu Ceper RT 08 RW 03', '[040] Menganti', 'Aparat Desa / Kelurahan', 'prasetyoangga769@gmail.com', '352522020180', 'Mitra', 'Aktif'),
(166, '3525132403780002', 'Muhamad Masykur', 'Sidojangkung RT.002 RW.001 Menganti-Gresik', '[040] Menganti', 'Wiraswasta', 'masykurmuhammad78@gmail.com', '352522020182', 'Mitra', 'Aktif'),
(167, '3525136209950005', 'Siti Khoirotunnisa\'', 'Jl Kh. Umar Alfaruq', '[040] Menganti', 'Tutor Privat', 'niesaelkhoir@gmail.com', '352522020156', 'Mitra', 'Aktif'),
(168, '3525131309940002', 'Haris Wardani', 'Jl. Raya Menganti Krajan', '[040] Menganti', 'Pegawai / Guru Honorer', 'hariswardani12@gmail.com', '352522020167', 'Mitra', 'Aktif'),
(169, '3525130607980001', 'Barep Aditya Maulidin', 'Laban Wetan Gg. Sumber Barokah RT 19 RW 06', '[040] Menganti', 'Pegawai / Guru Honorer', 'abarep8@gmail.com', '352522020150', 'Mitra', 'Aktif'),
(170, '3525131506800003', 'Masduki', 'Menganti  RT 31 RW 10', '[040] Menganti', 'Aparat Desa / Kelurahan', 'cak.duki00@gmail.com', '352522020166', 'Mitra', 'Aktif'),
(171, '3525135710940014', 'Devi Fakrul Nisa', 'Pelemwatu RT 03 RW 06', '[040] Menganti', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'Fakrulnisa60@gmail.com', '352522020160', 'Mitra', 'Aktif'),
(172, '3525135512770014', 'Erma Widi Astutik', 'Laban RT 19 RW 06', '[040] Menganti', 'Aparat Desa / Kelurahan', 'ermawidiastutik00@gmail.com', '352522020148', 'Mitra', 'Aktif'),
(173, '3525134704040002', 'Novi Datus Sya\'Diyah', 'Desa Domas RT 15 RW 05', '[040] Menganti', 'Pelajar / Mahasiswa', 'Novidiyah2024@gmail.com', '352522091237', 'Mitra', 'Aktif'),
(174, '3525135505000001', 'Zahrotul Widad', 'Randupadangan, RT.05/RW.02', '[040] Menganti', 'Pegawai / Guru Honorer', 'zahrotulwidad1589@gmail.com', '352522090703', 'Mitra', 'Aktif'),
(175, '3525130406750002', 'Edy Kuswoyo', 'Dusun Bibis RT. 033 RW. 011', '[040] Menganti', 'Wiraswasta', 'edykuswoyo0406@gmail.com', '352522091345', 'Mitra', 'Aktif'),
(176, '3525132505810051', 'Edi Purnomo', 'Bringkang RT 008 RW 004', '[040] Menganti', 'Aparat Desa / Kelurahan', 'desabringkang0211@gmail.com', '352523030005', 'Mitra', 'Aktif'),
(177, '3525136703860014', 'Wahyu Suciati', 'Kecipik RT. 003 RW. 001', '[040] Menganti', 'Pegawai / Guru Honorer', 'wahyusuciati580@gmail.com', '352523020011', 'Mitra', 'Aktif'),
(178, '3525130504720005', 'Nurul Hidayah', 'Desa Kepatihan RT 05 RW 03 No.09', '[040] Menganti', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'hidayahnurul0504@gmail.com', '352523020010', 'Mitra', 'Aktif'),
(179, '3525131705870002', 'Syaiful Amri', 'Kepatihan RT.004 RW.002', '[040] Menganti', 'Aparat Desa / Kelurahan', 'amrisampoerna@gmail.com', '352522091014', 'Mitra', 'Aktif'),
(180, '3525132605990001', 'Riko Widiyanto', 'Bongso Wetan 16/07', '[040] Menganti', 'Pegawai / Guru Honorer', 'rikowidiyanto01@gmail.com', '352522090974', 'Mitra', 'Aktif'),
(181, '3525136402910001', 'Veni Indrawati', 'Bongso Wetan RT 17 RW 08', '[040] Menganti', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'veni.pesekindrawati@gmail.com', '352522091002', 'Mitra', 'Aktif'),
(182, '3525131306000004', 'Hasraf Alfarid', 'Jalan Raya Boboh, Ds Boboh RT 06 RW 01', '[040] Menganti', 'Pelajar / Mahasiswa', 'hasrafalfarid08@gmail.com', '352522091611', 'Mitra', 'Aktif'),
(183, '3525135112850003', 'Miftahul Jannah', 'Hulaan RT 05 RW 03', '[040] Menganti', 'Mengurus Rumah Tangga', 'miftahalfirdaus215@gmail.com', '352522090530', 'Mitra', 'Aktif'),
(184, '3525135705990003', 'Dwi Vira Ningrum', 'Bringkang RT 013 RW 006', '[040] Menganti', 'Mengurus Rumah Tangga', 'Dningrum27@gmail.com', '352522090568', 'Mitra', 'Aktif'),
(185, '3515084312950004', 'Desi Tri Anggrayni', 'Dusun Ngemplak Wonoayu Ceper RT 08 RW 03', '[040] Menganti', 'Aparat Desa / Kelurahan', 'desitrianggraini130@gmail.com', '352522090557', 'Mitra', 'Aktif'),
(186, '3525135304790016', 'Indarti', 'Dukuh Pengalangan', '[040] Menganti', 'Wiraswasta', 'Iindartii088@gmail.com', '352522100061', 'Mitra', 'Aktif'),
(187, '3525134211980001', 'Vivi Novitasari', 'Dusun Tlogobedah RT 07 RW 03 Desa Hulaan', '[040] Menganti', 'Tutor', 'Vinori.211@gmail.com', '352522090754', 'Mitra', 'Aktif'),
(188, '3525134503830002', 'Chinyen Endi Susan Petriana', 'Gadingwatu RT 002 RW 004', '[040] Menganti', 'Aparat Desa / Kelurahan', 'cyen604@gmail.com', '352524100193', 'Mitra', 'Aktif'),
(189, '3525134906900001', 'Fatimatuz Zahro', 'Jl Raya Gantang-Boboh No.68 RT006/RW002', '[040] Menganti', 'Mengurus Rumah Tangga', 'ari.budiono30@gmail.com', '352524100085', 'Mitra', 'Aktif'),
(190, '3525132006010001', 'Achmad Yusuf', 'Laban', '[040] Menganti', 'Pegawai / Guru Honorer', 'yusufachmad128@gmail.com', '352523110259', 'Mitra', 'Aktif'),
(191, '3525135702880003', 'Luluk Fauziyanti', 'Tlogobedah RT 03 RW 02', '[040] Menganti', 'Pegawai / Guru Honorer', 'lulukfauziyanti58@gmail.com', '352523110140', 'Mitra', 'Aktif'),
(192, '3525136602000001', 'Febriana Ningtiyas', 'Boboh', '[040] Menganti', 'Wiraswasta', 'febriananingtiyas@gmail.com', '352523060016', 'Mitra', 'Aktif'),
(193, '3525134911840016', 'Choirotul Lisani', 'Desa Sidojangkung RT 1 RW 1 Kec.Menganti,Gresik-Jatim', '[040] Menganti', 'Wiraswasta', 'saa.lizanee@gmail.com', '352523110082', 'Mitra', 'Aktif'),
(194, '3525135712930003', 'Ula Rismawati', 'Dusun Tlogobedah RT 03 RW 02', '[040] Menganti', 'Pegawai / Guru Honorer', 'rismaairachika@gmail.com', '352523110141', 'Mitra', 'Aktif'),
(195, '3525135001850002', 'Siti Mudawamah', 'Dsn.Plampang RT 07/03 Desa Putatlor', '[040] Menganti', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'silvif868@gmail.com', '352523030188', 'Mitra', 'Aktif'),
(196, '3525134606810018', 'Masni\'Ah', 'Desa Kepatihan RT 05 RW 03', '[040] Menganti', 'Mengurus Rumah Tangga', 'Masniah123@gmail.com', '352523030094', 'Mitra', 'Aktif'),
(197, '3525136612930001', 'Puput Setiowati', 'Beton RT 011 RW 004', '[040] Menganti', 'Aparat Desa / Kelurahan', 'fabiansetiowati@gmail.com', '352523030093', 'Mitra', 'Aktif'),
(198, '3525135203960015', 'Nur Islamiyah', 'Pelemwatu RT. 008 RW. 004', '[040] Menganti', 'Aparat Desa / Kelurahan', 'nurislamia3@gmail.com', '352524100089', 'Mitra', 'Aktif'),
(199, '3525132404960003', 'Moh. Agung Setyawan', 'Mengati RT.33 RW.11', '[040] Menganti', 'Pegawai / Guru Honorer', 'muhammadas2404@gmail.com', '352524100104', 'Mitra', 'Aktif'),
(200, '3525134605040003', 'Tiara Cantika Putri', 'Ds. Pelem Watu RT 006 RW 003', '[040] Menganti', 'Pelajar / Mahasiswa', 'tiaracantikaputri321@gmail.com', '352524100148', 'Mitra', 'Aktif'),
(201, '3525134412000004', 'Fera Firnanda', 'Dusun Ngemplak Wonoayu Ceper RT 07 RW 03 Desa Mojotengah Kecamatan Menganti Kabupaten Gresik', '[040] Menganti', 'Wirausaha', 'ferafirnanda4120@gmail.com', '352524100144', 'Mitra', 'Aktif'),
(202, '3525131212980002', 'Wasis Nurcahyo', 'Jln Hendrosari RT 08 RW 01', '[040] Menganti', 'Aparat Desa / Kelurahan', 'wasisnurcahyo1@gmail.com', '352522090401', 'Mitra', 'Aktif'),
(203, '3578011103950002', 'Muchammad Istyawan', 'Gantang RT001 RW002 Desa Boboh', '[040] Menganti', 'Swasta', 'istyawanmuchammad@gmail.com', '352522020183', 'Mitra', 'Aktif'),
(204, '3578270303720001', 'Adi Suhendro Se', 'Perum Palem PeRTiwi Blok S-14 RT 15 RW 06', '[040] Menganti', 'Wiraswasta', 'suhendroadi007@gmail.com', '352523020018', 'Mitra', 'Aktif'),
(205, '3525136701050001', 'Retno Dwi Setyowati', 'Jalan Raya Menganti Gang Bayu RT. 09 RW. 04 Menganti, Gresik', '[040] Menganti', 'Pelajar / Mahasiswa', 'retnoayudwi2705@gmail.com', '352524100113', 'Mitra', 'Aktif'),
(206, '3578135204770005', 'Ervinawaty Salim', 'Dusun Sidowareg RT.015 RW.005 Desa Sidojangkung', '[040] Menganti', 'Guru Paud', 'ervinawatysalim77@gmail.com', '352523070004', 'Mitra', 'Aktif'),
(207, '3525110412770003', 'Sayudi', 'Dusun Gedangkulut RT 02 RW 03', '[050] Cerme', 'Wiraswasta', 'sayudi926@gmail.com', '352522020258', 'Mitra', 'Aktif'),
(208, '3578066003840002', 'Indah Banarsari', 'Perum Alam Singgasana Blok Q No 10', '[050] Cerme', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'indahbanarsari17@gmail.com', '352522090029', 'Mitra', 'Aktif'),
(209, '3525115506020001', 'Nyi Ratu Ayu Alamsyah', 'Jl Cerme Kidul No 55 RT03 RW06', '[050] Cerme', 'Lulusan Baru Yang Sedang Mencari Pekerjaan', 'nyiratuayu15@gmail.com', '352525080004', 'Mitra', 'Aktif'),
(210, '3525115202840024', 'Sri Mujannah', 'Dsn Pulorejo RT 04 RW 02', '[050] Cerme', 'Aparat Desa / Kelurahan', 'srimj09@gmai.com', '352524100026', 'Mitra', 'Aktif'),
(211, '3525114103870001', 'Miersalia Indah Prismadiana', 'Dooro', '[050] Cerme', 'Aparat Desa / Kelurahan', 'didinberyl2013@gmail.com', '352524100112', 'Mitra', 'Aktif'),
(212, '3525114409850022', 'Titin Rimasari', 'Dsn. Gurang Kulon RT001 RW001', '[050] Cerme', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'titinrimasari1@gmail.com', '352522090227', 'Mitra', 'Aktif'),
(213, '3525112409760023', 'Janadi', 'Betiting RT 002 RW 001', '[050] Cerme', 'Aparat Desa / Kelurahan', 'janadi.janadi24@gmail.com', '352523030226', 'Mitra', 'Aktif'),
(214, '3525116105020001', 'Mei Noviana', 'Desa Dampaan RT 003/ RW 002', '[050] Cerme', 'Pelajar / Mahasiswa', 'noviana210502@gmail.com', '352522090019', 'Mitra', 'Aktif'),
(215, '3525110305790002', 'Imam Syafii', 'RT 002 RW 002', '[050] Cerme', 'Aparat Desa / Kelurahan', 'Dermajavu@gmail.com', '352522090025', 'Mitra', 'Aktif'),
(216, '3525115901880003', 'Doris Wahyuni Arisman', 'Dusun Kedungjati Desa Sukoanyar RT 01 RW01', '[050] Cerme', 'Mengurus Rumah Tangga', 'doriswahyuni30@gmail.com', '352522090168', 'Mitra', 'Aktif'),
(217, '3525116808820001', 'Ida Winarti', 'Dusun Pulorejo RT 001 RW 001,Ds Sukoanyar', '[050] Cerme', 'Mengurus Rumah Tangga', 'Sulistiawan3100@gmail.com', '352522090171', 'Mitra', 'Aktif'),
(218, '3525110810840002', 'Sigit Priyo Nugroho', 'Jalan Cerme Kidul RT 02 RW 04', '[050] Cerme', 'Wiraswasta', 'kakarotosigit1@gmail.com', '352522040024', 'Mitra', 'Aktif'),
(219, '3525112601790001', 'Muhammad Mukharom', 'Dusun Kambingan RT.02/RW.02', '[050] Cerme', 'Aparat Desa / Kelurahan', 'Wongateleng03@gmail.com', '352522090280', 'Mitra', 'Aktif'),
(220, '3525111902920003', 'Abdus Shomad', 'Wedani RT 005 RW 002', '[050] Cerme', 'Aparat Desa / Kelurahan', 'abdus.shomad092@gmail.com', '352522090804', 'Mitra', 'Aktif'),
(221, '3525111203700003', 'Miskan', 'Desa Iker Iker Geger RT 01 RW 02', '[050] Cerme', 'Aparat Desa / Kelurahan', 'mbahkhan898@gmail.com', '352522090858', 'Mitra', 'Aktif'),
(222, '3525112502950001', 'Moh. Imam Khoirudin', 'Desa Tambak Beras RT 02 RW 02', '[050] Cerme', 'Aparat Desa / Kelurahan', 'imamkhoirudingresik@gmail.com', '352522090839', 'Mitra', 'Aktif'),
(223, '3525111408750001', 'Mohammad Asnan', 'Desa Tambak Beras RT 02 RW 03', '[050] Cerme', 'Aparat Desa / Kelurahan', 'mohammadasnan75@gmail.com', '352522090843', 'Mitra', 'Aktif'),
(224, '3525110512940001', 'Tito Dwi Ramadhani', 'Ds Padeg RT 03/ RW 04', '[050] Cerme', 'Wiraswasta', 'jimmybopa3@gmail.com', '352522091360', 'Mitra', 'Aktif'),
(225, '3525115411750001', 'Iin Diya Kusendang', 'Cerme Kidul RT 02 RW 05', '[050] Cerme', 'Wiraswasta', 'indie1411@gmail.com', '352522090007', 'Mitra', 'Aktif'),
(226, '3525116404760002', 'Jamiatun Nasikah', 'Dungus Lor RT 03 RW 01', '[050] Cerme', 'Aparat Desa / Kelurahan', 'Jamiatunnasikah@gmail.com', '352522030029', 'Mitra', 'Aktif'),
(227, '3525050812790001', 'Asykuri', 'Dsn Tugu Desa Jono RT 03 RW 01', '[050] Cerme', 'Aparat Desa / Kelurahan', 'asykuri.79@gmail.com', '352522020165', 'Mitra', 'Aktif'),
(228, '3525114612820003', 'Amini', 'Dusun Banjarsari RT.003 RW.002', '[050] Cerme', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'aminisunarno@gmail.com', '352522020106', 'Mitra', 'Aktif'),
(229, '3525112506820001', 'Andik Purwanto', 'Dusun Gurang Kulon', '[050] Cerme', 'Aparat Desa / Kelurahan', 'andikdowo82@gmail.com', '352522020066', 'Mitra', 'Aktif'),
(230, '3525112503940002', 'Ribut Kurnia', 'Dusun Banjarsari RT 002 RW 001', '[050] Cerme', 'Aparat Desa / Kelurahan', 'ribut.ricuh25@gmail.com', '352522020079', 'Mitra', 'Aktif'),
(231, '3525111306900001', 'Afif Murnizal Maghfuri', 'Desa Ngabetan Kecamatan Cerme Kabupaten Gresik', '[050] Cerme', 'Wiraswasta', 'murnizala@gmail.com', '352522020067', 'Mitra', 'Aktif'),
(232, '3525111307900001', 'Zamzari Malik', 'Desa Betiting RT 002 RW 001', '[050] Cerme', 'Aparat Desa / Kelurahan', 'malikzamzary@gmail.com', '352522020024', 'Mitra', 'Aktif'),
(233, '3525116208900003', 'Hanim Makhmudah', 'Desa Dampaan RT 02 RW 02', '[050] Cerme', 'Aparat Desa / Kelurahan', 'haniemalmashud@gmail.com', '352522020016', 'Mitra', 'Aktif'),
(234, '3525112003910023', 'Gama Abdi Prayoga S.T', 'Raya Morowudi No 81', '[050] Cerme', 'Aparat Desa / Kelurahan', 'Gama.deposeidon@gmail.com', '352522020027', 'Mitra', 'Aktif'),
(235, '3525110606760007', 'Abdul Rajak', 'Jalan Raya Cerme- Metatu No. 101 Dsn. Terongbangi RT 03/01 Desa Kandangan', '[050] Cerme', 'Aparat Desa / Kelurahan', 'rojak2961@gmail.com', '352522020049', 'Mitra', 'Aktif'),
(236, '3525110807760030', 'Abdul Kadir', 'Dusun Kemendung Desa Ngembung RT 01 RW 01', '[050] Cerme', 'Aparat Desa / Kelurahan', 'cakkoder9999@gmail.com', '352522020054', 'Mitra', 'Aktif'),
(237, '3525112602020002', 'Nur Rizky Maulana Putra', 'Desa Cerme Kidul RT 02 RW 03', '[050] Cerme', 'Pelajar / Mahasiswa', 'rizkymaulana260202@gmail.com', '352522020271', 'Mitra', 'Aktif'),
(238, '3525110904810002', 'Askur', 'Dusun Kandangan RT 01 RW 01', '[050] Cerme', 'Aparat Desa / Kelurahan', 'askurbuhairil13@gmail.com', '352522091000', 'Mitra', 'Aktif'),
(239, '3525111505950001', 'Muhamad Riva\'I', 'Ds. Padeg, RT.002/RW.007', '[050] Cerme', 'Wiraswasta', 'riv.arkid@gmail.com', '352523030035', 'Mitra', 'Aktif'),
(240, '3525110405880001', 'Wawan Erdiyansyah', 'Jl.Margomulyo RT 003 RW 002', '[050] Cerme', 'Wiraswasta', 'kampungdukuan@gmail.com', '352523030148', 'Mitra', 'Aktif'),
(241, '3525116004760001', 'Puji Afiyah', 'Dusun Sukorejo RT 1 RW 1 Desa Ngabetan', '[050] Cerme', 'Mengurus Rumah Tangga', 'afiyahpuji1976@gmail.com', '352522090632', 'Mitra', 'Aktif'),
(242, '3525110706830001', 'Edi Purwanto', 'Dusu Amburan RT 02 RW 01Desa Kandangan', '[050] Cerme', 'Aparat Desa / Kelurahan', 'Syifasabrina030@gmail.com', '352523110481', 'Mitra', 'Aktif'),
(243, '3525116204030002', 'Nur Afni Aprilia', 'Dsn. Iker Iker RT 01 RW 02 Ds. Iker Iker Geger', '[050] Cerme', 'Staff Admin', 'nurafniaprilia7@gmail.com', '352523110473', 'Mitra', 'Aktif'),
(244, '3525166606820001', 'Asrining Rino Wahyuni', 'Dusun Dadapkuning RT 02 RW  02', '[050] Cerme', 'Aparat Desa / Kelurahan', 'asriwingrinowahyuni@gmail.com', '352523110274', 'Mitra', 'Aktif'),
(245, '3525112402000001', 'Bagas Khoirul Hidayat', 'Dusun Sawahan RT 03 / RW 08 Ds. Gedang Kulut Kec. Cerme Kab. Gresik.', '[050] Cerme', 'Aparat Desa / Kelurahan', 'akulalipot@gmail.com', '352523030149', 'Mitra', 'Aktif'),
(246, '3525115707960003', 'Ayu Nur Anisa Rahmawati', 'Dsn. Sukoanyar RT 2 RW 2 Desa Sukoanyar Cerme Gresik', '[050] Cerme', 'Aparat Desa / Kelurahan', 'ayunuranisaa@gmail.com', '352523030039', 'Mitra', 'Aktif'),
(247, '3525112707750005', 'Lukman Jani', 'Ds Pandu RT 01 RW 04 Kecamatan Cerme -Gresik', '[050] Cerme', 'Aparat Desa / Kelurahan', 'jayalukmanabadi@gmail.com', '352523030171', 'Mitra', 'Aktif'),
(248, '3525111608750001', 'Agus Hariyanto', 'Desa Lengkong RT.02 RW.02 Kecamatan Cerme Kabupaten Gresik', '[050] Cerme', 'Aparat Desa / Kelurahan', 'agushariyanto6263@gmail.com', '352523030145', 'Mitra', 'Aktif'),
(249, '3525040805830003', 'Jatmiko', 'Dusun.Munggusoyi,RT07/ RW02.Desa.Munggugebang', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'munggusoyijatmiko@gmail.com', '352522020135', 'Mitra', 'Aktif'),
(250, '3525042010760004', 'Abdul Hamid', 'Desa Dermo RT 010 RW 001', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'hanyathallah@gmail.com', '352522020139', 'Mitra', 'Aktif'),
(251, '3525041003730009', 'Sunandar', 'Dusun Karangan RT 005/002 Desa Karangankidul', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'ssunandar935@gmail.com', '352522020159', 'Mitra', 'Aktif'),
(252, '3525044602850002', 'Sumiani', 'Dusun Karangan RT 5 RW 2 Karangan Kidul Benjeng Gresik Jawa Timur', '[060] Benjeng', 'Mengurus Rumah Tangga', 'karanganbenjeng252@gmail.com', '352523030208', 'Mitra', 'Aktif'),
(253, '3525040210780005', 'Sholeh Hasan', 'Dsn.Medangan.RT.02.RW.01.', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'sholehhasan131@gmail.com', '352523030178', 'Mitra', 'Aktif'),
(254, '3525044703890001', 'Erviyah Indah Pramesti', 'Ds Jatirembe RT 008 RW 002', '[060] Benjeng', 'Tutor', 'Erviyahindahpramesti@gmail.com', '352524100111', 'Mitra', 'Aktif'),
(255, '3525044401840003', 'Nur Hasanah', 'Jln Ir Soekarno', '[060] Benjeng', 'Pegawai / Guru Honorer', 'nurramonah384@gmail.com', '352522091562', 'Mitra', 'Aktif'),
(256, '3525041106820004', 'Beni', 'Balongtunjung', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'beniprut@gmail.com', '352522030025', 'Mitra', 'Aktif'),
(257, '3525042206940001', 'Firman Hardiansyah', 'RT 011 RW 002 Dusun Trate Desa Punduttrate', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'Hardiansyahfirman756@gmail.com', '352522020133', 'Mitra', 'Aktif'),
(258, '3525040109820001', 'Hadi Suwito', 'Kedungsekar Kidul', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'Suwitoh565@gmail.com', '352522020154', 'Mitra', 'Aktif'),
(259, '3525042807810001', 'Karman,S.Pd', 'Nyanyat RT.06 RW.02', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'bulurejosekdes@gmail.com', '352522020134', 'Mitra', 'Aktif'),
(260, '3525042705890002', 'Heriyanto', 'Dusun WonokeRTo RT 18 RW 05', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'Hery.sastrodiharjo@gmail.com', '352522020129', 'Mitra', 'Aktif'),
(261, '3525044608960001', 'Iis Faridah', 'Sirnoboyo RT 11 RW 03', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'iisfaridah202@gmail.com', '352522091387', 'Mitra', 'Aktif'),
(262, '3525042003870003', 'Rifki Zakaria', 'Dsn. Kedungglugu RT. 002 RW. 001', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'rifkizakaria20@gmail.com', '352522091559', 'Mitra', 'Aktif'),
(263, '3525041001770001', 'Supriaji', 'Balongmojo Kulon RT003 RW001', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'supriaji77@gmail.com', '352522091579', 'Mitra', 'Aktif'),
(264, '3525020403830003', 'Solikin', 'Dsn. Pundut RT 006  RW 001 . Punduttrate', '[060] Benjeng', 'Wiraswasta', 'solikinabdullah83@gmail.com', '352522091017', 'Mitra', 'Aktif'),
(265, '3525041501800001', 'Sutikno', 'Kalipadang RT 001 RW 001', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'bedjosutikno380@gmail.com', '352522090785', 'Mitra', 'Aktif'),
(266, '3573024311800002', 'Nurhayati', 'Dsn.Munggugebang RT 03 RW 01', '[060] Benjeng', 'Pegawai / Guru Honorer', 'seblaknur12@gmail.com', '352522091566', 'Mitra', 'Aktif'),
(267, '3525044111840001', 'Iis Trindarti', 'Dusun Gluran RT.004 RW.002 Desa Gluranploso Kecamatan Benjeng', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'trindartii@gmail.com', '352522091582', 'Mitra', 'Aktif'),
(268, '3525046309930001', 'Alvi Zahriani', 'Dusun Jogodalu RT.006/RW.002', '[060] Benjeng', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'alvizahriani@gmail.com', '352522100063', 'Mitra', 'Aktif'),
(269, '3525046303770005', 'Suliyah', 'Bengkelolor RT 004/ RW 002', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'suliyahuwp@gmail.com', '352522091590', 'Mitra', 'Aktif'),
(270, '3525046511940001', 'Putri Ayu Wulandari', 'Dusun Balong Kepuh RT 03 RW 02', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'puy.putriayu1@gmail.com', '352522091599', 'Mitra', 'Aktif'),
(271, '3525046507940002', 'Mega Zuliati', 'Dusun Metatu RT. 11 RW. 03', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'zuliatimega25@gmail.com', '352522090573', 'Mitra', 'Aktif'),
(272, '3525042603020002', 'Arif Rahman Ayyubi', 'Dusun Bulurejo RT. 003 RW 001', '[060] Benjeng', 'Fresh Graduate ( Belum Memiliki Pekerjaan )', 'rahmanayyubi4@gmail.com', '352524100177', 'Mitra', 'Aktif'),
(273, '3525045705020002', 'Annisa Fauziah', 'Desa Banter RT 05 RW 03 Kecamatan Benjeng Kabupaten Gresik', '[060] Benjeng', 'Guru', 'fauziahniniis@gmail.com', '352524100001', 'Mitra', 'Aktif'),
(274, '3525045310970003', 'Fery Indrawati', 'Dsn. Wonosari RT 14', '[060] Benjeng', 'Wiraswasta', 'indrawatifery1@gmail.com', '352523030218', 'Mitra', 'Aktif'),
(275, '3525045907890001', 'Yesi Amin Nanti', 'Dusun Ngepung RT 07 RW 04 Desa Klampok Kec Benjeng Kab Gresik', '[060] Benjeng', 'Wiraswasta', 'yesiaminnanti@gmail.com', '352523030127', 'Mitra', 'Aktif'),
(276, '3525041010780006', 'Anuwar', 'Bulang Kulon RT01 RW01', '[060] Benjeng', 'Wiraswasta', 'anwarcell863@gmail.com', '352523030225', 'Mitra', 'Aktif'),
(277, '3525044404010003', 'Firdatus Mahmiah', 'Dsn. Banter RT 007/ RW 004 Banter Benjeng Gresik', '[060] Benjeng', 'Pegawai / Guru Honorer', 'firdatusmahmiah@gmail.com', '352522091592', 'Mitra', 'Aktif'),
(278, '3525040311760001', 'Mulyadi', 'Dusun Bengkelolor RT 006/RW 003', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'myadi546734@gmail.com', '352523030125', 'Mitra', 'Aktif'),
(279, '3525040812780001', 'Juito', 'Dusun Munggu RT 01 RW 01, Ds Munggugianti ,Kec Benjeng Gresik', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'pakwomunggu87@gmail.com', '352523030195', 'Mitra', 'Aktif'),
(280, '3525046009000001', 'Siti Nur Cholifah', 'Patuk RT 011 RW 006', '[060] Benjeng', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'sitinurcholifah562@gmail.com', '352524100075', 'Mitra', 'Aktif'),
(281, '3525047108020001', 'Rochmatul Mujtahidah', 'Desa Banter Kecamatan Benjeng Kabupaten Gresik', '[060] Benjeng', 'Tidak Ada', 'rochmatulmujtahidah@gmail.com', '352524100184', 'Mitra', 'Aktif'),
(282, '3525040657870001', 'Selvia Yuliyanti', 'Dan. Lumpang RT 007 RW 003', '[060] Benjeng', 'Aparat Desa / Kelurahan', 'selviayulianti25@gmail.com', '352524100115', 'Mitra', 'Aktif'),
(283, '3525022708760001', 'Anwar', 'Dsn Barat RT 01 RW 02 Desa Klotok', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'desaklotokwin@gmail.com', '352522020230', 'Mitra', 'Aktif'),
(284, '3525020490786000', 'Eka Yuliana', 'Dusun Banggle Desa Tenggor RT 03 RW 01', '[070] Balongpanggang', 'Mengurus Rumah Tangga', 'iy485401@gmail.com', '352522091254', 'Mitra', 'Aktif');
INSERT INTO `master_petugas` (`id`, `nik`, `nama_petugas`, `alamat`, `kecamatan`, `pekerjaan`, `email`, `sobat_id`, `jabatan`, `status_petugas`) VALUES
(285, '3525021301900002', 'Susandi Ferianto', 'Dusun Dapet RT 001 RW 001 Desa Dapet', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'susandiferianto13@gmail.com', '352522090878', 'Mitra', 'Aktif'),
(286, '3525026302010001', 'Nurul Lailatul Arofah', 'Dsn. Tempuran RT 001 RW 001 Desa Pinggir Kecamatan Balongpanggang Kabupaten Gresik', '[070] Balongpanggang', 'Pegawai / Guru Honorer', 'nurularofah485@gmail.com', '352524100176', 'Mitra', 'Aktif'),
(287, '3515071003820010', 'Yudi Prastyo', 'Dusun Wahas RT01 RW02', '[070] Balongpanggang', 'Wiraswasta', 'yudiprastyo61@gmail.com', '352522020239', 'Mitra', 'Aktif'),
(288, '3525021810770001', 'Moh. Mustofa', 'Dusun Mojolebak RT 002 RW 003', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'mtofa6503@gmail.com', '352522090728', 'Mitra', 'Aktif'),
(289, '3525021610770004', 'Habi Wahyono', 'Dusun Jedong RT 002 / RW 001', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'habiwahyono77@gmail.com', '352522090402', 'Mitra', 'Aktif'),
(290, '3525026303010001', 'Rif’Atul Hidayah', 'Dsn. Tlogogede RT 001 RW 001 Ds. Ngasin Kec. Balongpanggang Kab. Gresik', '[070] Balongpanggang', 'Pelajar / Mahasiswa', 'rifatulhidayah03@gmail.com', '352523110208', 'Mitra', 'Aktif'),
(291, '3525021411710002', 'Aji Sampurno', 'Dusun Sekaran RT06 RW03', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'ajisampurno646@gmail.com', '352522091209', 'Mitra', 'Aktif'),
(292, '3525024201990001', 'Finna Rohmawati', 'Dsn Kalipang Ds Wahas', '[070] Balongpanggang', 'Mitra Bps Gresik', 'finnarhw@gmail.com', '352523020002', 'Mitra', 'Aktif'),
(293, '3525021705710001', 'Kusnan', 'Dusun Menganti RT 01 RW 01', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'polkusnan@gmail.com', '352522020243', 'Mitra', 'Aktif'),
(294, '3525020710860001', 'Harsono', 'Dusun Patuk RT 002 RW 001', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'ndhharso07@gmail.com', '352522020228', 'Mitra', 'Aktif'),
(295, '3525022209980001', 'Habib Syamsul Ma\'Arif', 'Jl.Argopuro No.64', '[070] Balongpanggang', 'Karyawan Swasta', 'habibsyamsul86@gmail.com', '352522020233', 'Mitra', 'Aktif'),
(296, '3525022207790001', 'Sholihan', 'Jalan Dsn Tanggulangin RT 2 RW 2', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'bendesganggang24@gmail.com', '352522020121', 'Mitra', 'Aktif'),
(297, '3525021504770003', 'Suto', 'RT 02 /RW 01 Dsn Ngablak', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'bayansuto@gmail.com', '352523030033', 'Mitra', 'Aktif'),
(298, '3525020403900002', 'Musyafa\'', 'Dusun Tlogogede RT.01 RW.01 Desa Ngasin Kec. Balongpanggang Kab. Gresik', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'msafak899@gmail.com', '352522091197', 'Mitra', 'Aktif'),
(299, '3525020107770001', 'Askur', 'Dusun Gadel RT 013 RW 006', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'askurtok@gmail.com', '352522091223', 'Mitra', 'Aktif'),
(300, '3525025907970001', 'Nur Faizah', 'Dsn. Klotok RT. 4 RW.1', '[070] Balongpanggang', '-', 'nurfaizah.wh1@gmail.com', '352522091239', 'Mitra', 'Aktif'),
(301, '3525022602930001', 'Dedi Sutrisno', 'Dusun Bandung RT 002 RW 001', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'dedibayan2018@gmail.com', '352522090784', 'Mitra', 'Aktif'),
(302, '3525025402010001', 'Evita Sari Pratama Putri', 'Dusun Klotok Desa Klotok RT 001/ RW 002', '[070] Balongpanggang', 'Pelajar / Mahasiswa', 'evitasaripratama@gmail.com', '352522090571', 'Mitra', 'Aktif'),
(303, '3525026301950001', 'Putri Dewanti', 'Dsn. Karangmelati RT 01 RW 01, Ds. Jombangdelik', '[070] Balongpanggang', 'Mengurus Rumah Tangga', 'putridewa.pd@gmail.com', '352522090579', 'Mitra', 'Aktif'),
(304, '3525025807900002', 'Yuli Dwi Nurfadilah', 'Dusun Brangkal Desa Brangkal', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'yulinurfadhilah@gmail.com', '352522090577', 'Mitra', 'Aktif'),
(305, '3525021206040001', 'Dika Ardani Frastama', 'Dusun Banggle RT 03 RW01 Desa Tenggor Kecamatan Balongpanggang Kabupaten Gresik', '[070] Balongpanggang', 'Mahasiswa', 'dikaardanifrastama@gmail.com', '352523110159', 'Mitra', 'Aktif'),
(306, '3525022107990001', 'Eka Praya Sentosa', 'Dsn Tlatah RT 02 RW 01 Ds Wotansari Kec Balongpanggang Kab Gresik', '[070] Balongpanggang', 'Wiraswasta', 'prayaeka7@gmail.com', '352523110151', 'Mitra', 'Aktif'),
(307, '3525020706950001', 'Dicky Andrianto', 'Dusun Kedondong RT.001 RW.001 Desa Ngampel', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'Andriantodicky9@gmail.com', '352523030029', 'Mitra', 'Aktif'),
(308, '3525024307030002', 'Arma Sakuntala', 'Dusun Tlatah RT 01 RW 01 Desa Wotansari', '[070] Balongpanggang', 'Wiraswasta', 'armasakuntala56@gmail.com', '352524100088', 'Mitra', 'Aktif'),
(309, '3525026901010001', 'Umu Nadhiroh', 'Dsn. Tanggulangin, RT 001 RW 002, Ds. Ganggang, Kec. Balongpanggang', '[070] Balongpanggang', 'Pegawai / Guru Honorer', 'umunadhiroh2@gmail.com', '352524100076', 'Mitra', 'Aktif'),
(310, '3525026502010001', 'Agita Fitria Anwar', 'Dusun Barat RT 001 RW 002 Desa Klotok Kecamatan Balongpanggang Gresik', '[070] Balongpanggang', 'Pegawai / Guru Honorer', 'agitafaa@gmail.com', '352522090293', 'Mitra', 'Aktif'),
(311, '3525021503040003', 'Muhammad Singgih Zaidannur Hanif', 'Dusun Kampung RT.04/RW.01', '[070] Balongpanggang', 'Pelajar / Mahasiswa', 'singgihzaidan@gmail.com', '352522090619', 'Mitra', 'Aktif'),
(312, '3525020604980002', 'Mohammad Arief Syaifullah', 'RT 05 RW 03 Dusun Gridi Desa Pacuh Kecamatan Balongpanggang Kabupaten Gresik', '[070] Balongpanggang', 'Pegawai / Guru Honorer', 'arifsaifullah80@gmail.com', '352523110164', 'Mitra', 'Aktif'),
(313, '3525026103940001', 'Syafaatin Maghfiroh', 'Dusun Juwet RT 01 RW 01 Desa Pinggir', '[070] Balongpanggang', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'Just.firoh21@gmail.com', '352524100173', 'Mitra', 'Aktif'),
(314, '6472021407990004', 'Mohammad Maulana Iqbal', 'Dusun Ngasin, RT. 02, RW. 02, Desa Ngasin, Kecamatan Balongpanggang, Kabupaten Gresik', '[070] Balongpanggang', 'Wiraswasta', 'mi1799022@gmail.com', '357822100519', 'Mitra', 'Aktif'),
(315, '3525054504840001', 'Beti Kristianingsih', 'RT 04 RW 02', '[080] Duduksampeyan', 'Mengurus Rumah Tangga', 'betikristianingsih@gmail.com', '352522090741', 'Mitra', 'Aktif'),
(316, '3525056711020001', 'Feby Alfina Pratiwi', 'Ds. Gredek RT. 11B RW. 03, Duduksampeyan, Gresik', '[080] Duduksampeyan', 'Pelajar / Mahasiswa', 'febbyalfina27@gmail.com', '352523110565', 'Mitra', 'Aktif'),
(317, '3527070208880005', 'Abdul Azis', 'Desa Tebaloan RT 01 RW 01 Kecamatan Duduksampeyan Kabupaten Gresik', '[080] Duduksampeyan', 'Wiraswasta', 'azyma30@gmail.com', '352524100129', 'Mitra', 'Aktif'),
(318, '3525056408940003', 'Vidiana Trissia Agustina', 'Sumengko RT 011 RW 004', '[080] Duduksampeyan', 'Wiraswasta', 'Trissiavidiana21@gmail.com', '352522090780', 'Mitra', 'Aktif'),
(319, '3174040304860004', 'Umar Shodiq', 'Wates', '[080] Duduksampeyan', 'Aparat Desa / Kelurahan', 'umars.shodiq31@gmail.com', '352522020207', 'Mitra', 'Aktif'),
(320, '3515161512780005', 'Sunaryo', 'Ds Tambakrejo RT 17 RW 03', '[080] Duduksampeyan', 'Aparat Desa / Kelurahan', 'Imutnaryo@gmail.com', '352522090142', 'Mitra', 'Aktif'),
(321, '3525056809860003', 'Afiatri Tahtamasari', 'Kawisto RT.003/RW.001', '[080] Duduksampeyan', 'Aparat Desa / Kelurahan', 'afvy.a3@gmail.com', '352522090003', 'Mitra', 'Aktif'),
(322, '3525055507940002', 'Azifatun Nihlah', 'Desa Wadak Kidul RT 2 RW 1', '[080] Duduksampeyan', 'Aparat Desa / Kelurahan', 'anihlah@gmail.com', '352522090004', 'Mitra', 'Aktif'),
(323, '3525052102820004', 'Mohammad Sholahudin', 'Setrohadi RT.1 RW.1', '[080] Duduksampeyan', 'Pegawai / Guru Honorer', 'sholahudinmohammad@gmail.com', '352522030009', 'Mitra', 'Aktif'),
(324, '3525054710970001', 'Mega Machfudho', 'Dusun Plapan RT 04 RW 02', '[080] Duduksampeyan', 'Aparat Desa / Kelurahan', 'megamachfudho56244@gmail.com', '352522020198', 'Mitra', 'Aktif'),
(325, '3525055606920002', 'Ummu Khabibah Suparman', 'Desa Setrohadi RT 003 RW 001', '[080] Duduksampeyan', 'Aparat Desa / Kelurahan', 'Bibah.1606@gmail.com', '352522020177', 'Mitra', 'Aktif'),
(326, '3525051702900001', 'Febi Sutro Setiawan', 'Ambeng Ambeng Watangrejo', '[080] Duduksampeyan', 'Aparat Desa / Kelurahan', 'VINOGOKIL90@GMAIL.COM', '352522020208', 'Mitra', 'Aktif'),
(327, '3525051309950001', 'Abdul Haries Zubaidi', 'Desa Duduksampeyan RT 009 RW 005', '[080] Duduksampeyan', 'Aparat Desa / Kelurahan', 'abdulharieszubaidi@gmail.com', '352522020120', 'Mitra', 'Aktif'),
(328, '3525050205800001', 'Budi Susilo', 'Desa Bendungan RT. 005 RW. 001', '[080] Duduksampeyan', 'Aparat Desa / Kelurahan', 'budisusilo609@gmail.com', '352522020045', 'Mitra', 'Aktif'),
(329, '3525055708870003', 'Lisa Agustina', 'Desa Ambeng Ambeng Watangrejo RT 08 RW 03', '[080] Duduksampeyan', 'Aparat Desa / Kelurahan', 'lisaagustina1708@gmail.com', '352523030038', 'Mitra', 'Aktif'),
(330, '3525056011900001', 'Putri Nofianti', 'Duduksampeyan RT 07A RW 004', '[080] Duduksampeyan', 'Mengurus Rumah Tangga', 'putrinofianti@gmail.com', '352523030012', 'Mitra', 'Aktif'),
(331, '3525052812840001', 'Mohamad Zainal Abidin', 'Glanggang RT.004 RW.002', '[080] Duduksampeyan', 'Pegawai / Guru Honorer', 'zadin.me@gmail.com', '352523030013', 'Mitra', 'Aktif'),
(332, '3525055302970001', 'Ika Niswatin Fitriani', 'Dsn Brakung RT 014/ RW 004 Sumari Duduksampeyan', '[080] Duduksampeyan', 'Belum Bekerja', 'Ikaniswatin97@gmail.com', '352522090558', 'Mitra', 'Aktif'),
(333, '3525051511890001', 'Umar Syafi\'Uddin', 'Desa Tumapel RT. 08 RW. 04', '[080] Duduksampeyan', 'Wiraswasta', 'umarsyad12@gmail.com', '352522090616', 'Mitra', 'Aktif'),
(334, '3525054303950001', 'Fitri Kurniawati', 'Jln. Sunan Bonang A RT 03 RW 01 No. 10', '[080] Duduksampeyan', 'Aparat Desa / Kelurahan', 'Kurniawatifitri1995@gmail.com', '352523110586', 'Mitra', 'Aktif'),
(335, '3525051203910001', 'Hafif Helmi Hajam', 'Wadak Kidul RT 002 RW 001', '[080] Duduksampeyan', 'Wiraswasta', 'hafifhajam@gmail.com', '352522110056', 'Mitra', 'Aktif'),
(336, '3525055911910002', 'Dewi Masrukhah', 'Jl. R A KaRTini RT2 RW1', '[080] Duduksampeyan', 'Aparat Desa / Kelurahan', 'masrukhahdewi@gmail.com', '352523110527', 'Mitra', 'Aktif'),
(337, '3525053809900002', 'Yeti Septiana', 'Tambakrejo RT 11/RW03', '[080] Duduksampeyan', 'Mengurus Rumah Tangga', 'kinamezz99@gmail.com', '352523030028', 'Mitra', 'Aktif'),
(338, '3525054908980001', 'Sofwatul Maulidah', 'Samir Plapan RT 004/ RW 002 Kec. Duduk Sampeyan Kab. Gresik', '[080] Duduksampeyan', 'Les Privat', 'idamaulidah1998@gmail.com', '352522110097', 'Mitra', 'Aktif'),
(339, '3525056801010004', 'Hesty Eka Pratiwi', 'Duduksampeyan RT 007 RW 004', '[080] Duduksampeyan', 'Mengurus Rumah Tangga', 'hestypratiwi01@gmail.com', '352522090544', 'Mitra', 'Aktif'),
(340, '3525055201950001', 'Shofwul Widad', 'Desa Kramat RT 1 RW 1', '[080] Duduksampeyan', 'Tidak Ada', 'widadshofwul@gmail.com', '352522090064', 'Mitra', 'Aktif'),
(341, '3525146307010001', 'Diah Ayu Kusuma Wardani', 'Desa Kedanyang RT 01 RW 01', '[090] Kebomas', 'Pelajar / Mahasiswa', 'diahayukw23@gmail.com', '352522020072', 'Mitra', 'Aktif'),
(342, '3525161903070001', 'Siti Kaprina', 'Jalan Dr Wahidin Sh 24F/28 RT 009/RW 003', '[090] Kebomas', 'Mengurus Rumah Tangga', 'sitikaprina242424@gmail.com', '352522020255', 'Mitra', 'Aktif'),
(343, '3525144101830021', 'Uly Fashihati', 'Jalan Sunan Giri 13 M RT 04 RW 02', '[090] Kebomas', 'Mengurus Rumah Tangga', 'ulyqurba@gmail.com', '352522090221', 'Mitra', 'Aktif'),
(344, '3525147012880001', 'Vivi Nur Taufiqiyah', 'Veteran 9H No 01 RT 004 RW 012', '[090] Kebomas', 'Pegawai / Guru Honorer', 'taufiq.almahyra17@gmail.com', '352523010002', 'Mitra', 'Aktif'),
(345, '3578154405830001', 'Suci Andriyana', 'Jl.Mayjen Sungkono No 40 RT 01 RW 01', '[090] Kebomas', 'Mengurus Rumah Tangga', 'uchiandriyana@gmail.com', '352522090128', 'Mitra', 'Aktif'),
(346, '3525160101030003', 'Muhammad Ilham Attaufiq', 'Perum Green Hiill D6/6, Desa Sekarkurung, Kecamatan Kebomas, Kab Gresik', '[090] Kebomas', 'Pelajar / Mahasiswa', 'ilhamiyam232@gmail.com', '352524100166', 'Mitra', 'Aktif'),
(347, '3171036607010009', 'Rosalia Juwita Putri', 'Jl. Kumala Timur No 20 GBA', '[090] Kebomas', 'Wiraswasta', 'rosaliajuwitaputri@gmail.com', '352524100188', 'Mitra', 'Aktif'),
(348, '3310054604880002', 'Yanti Mandasari', 'Perum Graha Bunder Asri Jl Phyrus 1 No 4', '[090] Kebomas', 'Mengurus Rumah Tangga', 'permanadian360@gmail.com', '352522091422', 'Mitra', 'Aktif'),
(349, '3578121309950003', 'Khoirul Rizal', 'Jl. Veteran Tama Utara F21 RT 02 RW 01', '[090] Kebomas', 'Wirausaha', 'rizal13091995@gmail.com', '352522020181', 'Mitra', 'Aktif'),
(350, '3525140111700002', 'Joko Bangun', 'Jln Ir Ibrahim Zaher 2 Gang 5 No 5 RT 002 RW 004 Singosari Kebomas', '[090] Kebomas', 'Wiraswasta', 'jokobangun.jb70@gmail.com', '352522090770', 'Mitra', 'Aktif'),
(351, '3525145507930003', 'Nurina Widya Rahmita', 'Jl Ra KaRTini 20/63', '[090] Kebomas', 'Wiraswasta', 'Rahmitanurina@gmail.com', '352523060023', 'Mitra', 'Aktif'),
(352, '3517086211800001', 'Endang Sulistyawati', 'Jl Sunan Giri 13I RT 2 RW 4 Sidomukti Kebomas Gresik', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'endangjafraconsultant@gmail.com', '352522090305', 'Mitra', 'Aktif'),
(353, '3520044904930001', 'Indy Armareza Lora Pratama', 'Jalan Zamrud 1 No.15', '[090] Kebomas', 'Pernah Mengikuti Pemutakhiran Kerangka Geospasial Wilkerstat Gresik, Ketua Dasa Wisma Di Rt', 'Indiarmareza@gmail.com', '352524100048', 'Mitra', 'Aktif'),
(354, '3525146205840003', 'Siti Rodhiana', 'Jl Ra KaRTini G 18 No 65', '[090] Kebomas', 'Mengurus Rumah Tangga', 'siti.rodhiana65@gmail.com', '352523070006', 'Mitra', 'Aktif'),
(355, '3524056010770002', 'Hilmiya Maghfiroh', 'Jln Sunan Giri 13R Perum Alam Mukti Indah C/10', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'hilmiya2077@gmail.com', '352522090702', 'Mitra', 'Aktif'),
(356, '3524016904910001', 'Wiwik Setyowati', 'Jln Dr Wahidin Sudirohusodo Gang 28 RT 7 RW 2', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'wiwikstywati@gmail.com', '352522090104', 'Mitra', 'Aktif'),
(357, '3525146512940001', 'Desy Nur Aini', 'Jalan Sunan Giri V/19A Kawisanyar,Kebomas,Gresik', '[090] Kebomas', 'Belum Bekerja', 'desy.dna5@gmail.com', '352522090152', 'Mitra', 'Aktif'),
(358, '3525165501000004', 'Siti Chumairoh', 'Jalan Arif Rahman Hakim 21B', '[090] Kebomas', 'Mengurus Rumah Tangga', 'Chumairoh151@gmail.com', '352522090473', 'Mitra', 'Aktif'),
(359, '3525144505810004', 'Nanik Fatmawati', 'Jalan Sunan Giri Gang 13C RT 10 RW 01', '[090] Kebomas', 'Mengurus Rumah Tangga', 'davinaaputriii@gmail.com', '352522090261', 'Mitra', 'Aktif'),
(360, '3525145107790001', 'Yuli Alvia Ningsih', 'Jalan Veteran XV 02E RT003 RW001', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'yn231744@gmail.com', '352522090405', 'Mitra', 'Aktif'),
(361, '3525142802960002', 'Muhammad Ali As\'At', 'Jl Dr Wahidin Sh Gg 01 No 23 RT 02 RW 05 Putat Kebomas Gresik', '[090] Kebomas', 'Wiraswasta', 'banglee028@gmail.com', '352522091437', 'Mitra', 'Aktif'),
(362, '3525144403840005', 'Widya Rachmawati', 'Jl Jambu Raya RT 03 RW 02', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'Widyarachmawati094@gmail.com', '352522090866', 'Mitra', 'Aktif'),
(363, '3525140602790002', 'Sugeng Prayitno', 'Dahanrejo RT 01 RW 03', '[090] Kebomas', 'Wiraswasta', 'sugengpra71@gmail.com', '352522091466', 'Mitra', 'Aktif'),
(364, '3525145507860001', 'Dwi Damayanti', 'Jalan Mayjend Sungkono Gg XI RT 03 RW 01 Nomor 50', '[090] Kebomas', 'Mengurus Rumah Tangga', 'ddwi4841@gmail.com', '352522030001', 'Mitra', 'Aktif'),
(365, '3525126906780004', 'Etik Kristiawati, St', 'Jalan Veteran XIIIa/52 RT 02 RW 01 Segunting Singosari Kebomas Gresik', '[090] Kebomas', 'Wiraswasta', 'etikkristiawati45@gmail.com', '352522020281', 'Mitra', 'Aktif'),
(366, '3525145212810002', 'Erma Astutik', 'Jl. Dewi Sekardadu RT 2 RW 1', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'erza081@gmail.com', '352522020285', 'Mitra', 'Aktif'),
(367, '3525140902880001', 'Ivo Muchlison Nurcholif', 'Desa Dahanrejo', '[090] Kebomas', 'Wiraswasta', 'ivo.muchlison@gmail.com', '352522020071', 'Mitra', 'Aktif'),
(368, '3525140706760003', 'Ahmad Zainul Rozak', 'Jl. Arif Rahman Hakim 1 / 21', '[090] Kebomas', 'Wiraswasta', 'tiararozak@gmail.com', '352522020254', 'Mitra', 'Aktif'),
(369, '3525140702900002', 'M Choirul Anwar', 'Jl. Sunan Prapen 2Eb/09 RT.10 RW.03', '[090] Kebomas', 'Aparat Desa / Kelurahan', 'mchoirul4nw4r@gmail.com', '352522020019', 'Mitra', 'Aktif'),
(370, '3525145006010004', 'Anita Yuniati', 'Jl. Desa Kedanyang RT05/RW02', '[090] Kebomas', 'Pelajar / Mahasiswa', 'yuniatianita315@gmail.com', '352522020078', 'Mitra', 'Aktif'),
(371, '3525146905910002', 'Ratih Nila Puspita', 'Jalan Kapten Darmo Sugondo 22B No. 19', '[090] Kebomas', 'Mengurus Rumah Tangga', 'ratihnila1991@gmail.com', '352522020073', 'Mitra', 'Aktif'),
(372, '3525145511720004', 'Wiwik Iryawanti', 'Jl. Ra.KaRTini Xii No.23', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'wiwikiryawanti@gmail.com', '352522091436', 'Mitra', 'Aktif'),
(373, '3525145803750002', 'Susiatik', 'Jln Bima Nomor 25 Gba', '[090] Kebomas', 'Aparat Desa / Kelurahan', 'wina.thohir@gmail.com', '352522091067', 'Mitra', 'Aktif'),
(374, '3525166003790001', 'Dewi Mujiati', 'Ngargosari RT 1 RW 1', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'dewimujiati79@gmail.com', '352523020003', 'Mitra', 'Aktif'),
(375, '3525146809770022', 'Susetya Eko Pujowati', 'Jl Arif Rahman Hakim Gg 1 No 21', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'susetyopujowati2@gmail.com', '352523020012', 'Mitra', 'Aktif'),
(376, '3525116211730001', 'Asmaul Widayati Ningsih', 'Jl Dr Wahidin Shd Gg 36 RT3 RW1 No 3 Randuagung', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'asmaulwidayati@gmail.com', '352523020016', 'Mitra', 'Aktif'),
(377, '3525142809990002', 'Muhammad Danial', 'Jl.Sunan Prapen 2Eb', '[090] Kebomas', 'Wiraswasta', 'muhammaddanial.lin@gmail.com', '352522090704', 'Mitra', 'Aktif'),
(378, '3525146204820001', 'Anita Charolina', 'Jl.Dr Wahidin Sh 1C/13', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'anita.rifky73@gmail.com', '352524100050', 'Mitra', 'Aktif'),
(379, '3525145006860006', 'Reny Fitrianingsih', 'Jalan Veteran 9 H Gang Menara 9 No 09 RT 4  RW 12 Singosari Gresik', '[090] Kebomas', 'Mengurus Rumah Tangga', 'Renyfitria30@gmail.com', '352524100051', 'Mitra', 'Aktif'),
(380, '3525144204950002', 'Rachmah Fitria Hastuti', 'Jalan Kapten Darmo Sugondo Gang 02 No 18', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'rachmahfitriahastuti@gmail.com', '352523110096', 'Mitra', 'Aktif'),
(381, '3578125511000001', 'Novita Khoirun Nisak', 'Jl. Veteran Tama Utara Blok F-21', '[090] Kebomas', 'Pelajar / Mahasiswa', 'vitanisa31511@gmail.com', '352523110317', 'Mitra', 'Aktif'),
(382, '3525145304800002', 'Eni Eli Maisyaroh', 'Jl.Dr.Wahidin Shd Gg 20E No.15 RT11 03 Randu Agung Kebomas Gresik', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'enielimaisyaroh@gmail.com', '352524100053', 'Mitra', 'Aktif'),
(383, '3525145403810002', 'Nurma Yunita', 'Jalan Sunan Giri Gg XVA No 5', '[090] Kebomas', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'nitaruaz@gmail.com', '352524100054', 'Mitra', 'Aktif'),
(384, '3525145507990003', 'An Nisa Farah Fahira Gunawan', 'Jalan Dr. Wahidin Sudirohusodo Gang 3A No.55I, RT 02 RW 02', '[090] Kebomas', 'Freelance', 'faraahfahira@gmail.com', '352522090743', 'Mitra', 'Aktif'),
(385, '3525146008910001', 'Dinka Enggarwati Agustin', 'Jl. Ra KaRTini 8/59 RT 02 RW 04 Kel. Sidomoro Kec. Kebomas Kab. Gresik', '[090] Kebomas', 'Freelance', 'dinkaenggarwati@gmail.com', '352522040017', 'Mitra', 'Aktif'),
(386, '3525144506990003', 'Trisna Wahyu', 'Jl. Dr Wahidin Sh Gg 36B No 3', '[090] Kebomas', 'Pelajar / Mahasiswa', 'wahyutt56@gmail.com', '352522091553', 'Mitra', 'Aktif'),
(387, '3525144510000001', 'Salsa Salsabila', 'Jalan Dr. Wahidin Sh Gg 36 RT/RW 003/001 No 3', '[090] Kebomas', 'Sedang Mencari Pekerjaan Dan Membantu Ibu Menjaga Toko', 'salsasalsabila0510@gmail.com', '352523110124', 'Mitra', 'Aktif'),
(388, '3525114404020001', 'Salma Rohadatul Aisy', 'Jalan Dr Wahidin Sudiro Husodo Putat Kebomas Gresik', '[090] Kebomas', 'Pekerja Harian Lepas', 'salmaais180@gmail.com', '352523060006', 'Mitra', 'Aktif'),
(389, '3525146810010001', 'Kurnia Firdatus Zaifah', 'Jl. Dewi Sekardadu No 44  RT 03/RW 01', '[090] Kebomas', 'Guru Les', 'kurniafirda01@gmail.com', '352523060053', 'Mitra', 'Aktif'),
(390, '3525146611780007', 'Evi Ahdiyah', 'Jl Arief Rahman Hakim 1/19', '[090] Kebomas', '.', 'Ea2001dt@gmail.com', '352523110099', 'Mitra', 'Aktif'),
(391, '3577025604800003', 'Harianti', 'Jalan Sunan Giri Gang 13F No 1 RT 10 RW 01', '[090] Kebomas', 'Mengurus Rumah Tangga', 'Hariyanti2079@gmail.com', '352522091056', 'Mitra', 'Aktif'),
(392, '3525102712860002', 'Siti Kolipah', 'Jl Veteran IX H Gang Menara 11', '[090] Kebomas', 'Wiraswasta', 'www.sitikolipah@gmail.com', '352522090716', 'Mitra', 'Aktif'),
(393, '3525145804830004', 'Arie Nirwati', 'Perum Griya Wiharta Asri Blok C4 No 15', '[090] Kebomas', 'Fasilitator Kelurahan', 'arienirwati.nirwati@gmail.com', '352522110091', 'Mitra', 'Aktif'),
(394, '3525165908800004', 'Surati', 'Jalan Usman Sadar 17/55', '[100] Gresik', 'Mengurus Rumah Tangga', 'nurratih317@gmail.com', '352522030003', 'Mitra', 'Aktif'),
(395, '3525162405000002', 'Achmad Naufal', 'Jl. Dieng No 2 Perumahan Bp Wetan', '[100] Gresik', 'Spb', 'Fals240500@gmail.com', '352524100095', 'Mitra', 'Aktif'),
(396, '3525165211830002', 'Tri Angga Rini', 'Jl. Dr.Sutomo 2C No.4', '[100] Gresik', 'Mengurus Rumah Tangga', 'rinnitriangga@gmail.com', '352522090855', 'Mitra', 'Aktif'),
(397, '3525166906960122', 'Agna Amalia', 'Jalan Akasia 25 BP. Wetan', '[100] Gresik', 'Pencari Kerja', 'agnamalis@gmail.com', '352523110850', 'Mitra', 'Aktif'),
(398, '3318215312930002', 'Sri Wahyuni', 'Jl. Sindujoyo 10 A1', '[100] Gresik', 'Mengurus Rumah Tangga', 'Sw13121993@gmail.com', '352523030044', 'Mitra', 'Aktif'),
(399, '3525161703880002', 'Anggi Rakasiwi', 'Jl Panglima Sudirman Gg Lebar No 77', '[100] Gresik', 'Wiraswasta', 'rakasiwiangga2727@gmail.com', '352522020003', 'Mitra', 'Aktif'),
(400, '3524222304030001', 'Ijtaba Ilaika Maulana', 'Kelurahan Tlogopojok', '[100] Gresik', 'Pelajar / Mahasiswa', 'Aimkaka554@gmail.com', '352522020250', 'Mitra', 'Aktif'),
(401, '3525164307830123', 'Rohma Yulistiana', 'Jl Ikan Kerapu Barat No 12 BP Kulon Gresik', '[100] Gresik', 'Ibu Rumah Tangga', 'yulistiana8826@gmail.com', '352522090617', 'Mitra', 'Aktif'),
(402, '3525164806840121', 'Sofiatun', 'Usman Sadar, Karangturi, Gresik', '[100] Gresik', 'Mengurus Rumah Tangga', 'Sofisofiatun080684@gmail.com', '352522090153', 'Mitra', 'Aktif'),
(403, '3525166808770122', 'Wida Rohmayani', 'Jalan Ikan Kerapu Timur II No 17', '[100] Gresik', 'Mengurus Rumah Tangga', 'widagresik@gmail.com', '352522090677', 'Mitra', 'Aktif'),
(404, '3525166709750001', 'Heny Usmawati', 'Jl. Usman Sadar Gg 18 No 3', '[100] Gresik', 'Mengurus Rumah Tangga', 'hennyusmawati@gmail.com', '352522020070', 'Mitra', 'Aktif'),
(405, '3525166503990003', 'Qonita Aulia Rohani', 'Jl. Kramat Langon 3/5 RT 001 RT 006', '[100] Gresik', 'Pegawai Swasta', 'qonita250399@gmail.com', '352522090638', 'Mitra', 'Aktif'),
(406, '3525166907780002', 'Yulia Rahmawati', 'Jl Kh Zubair 39/13 RT 002 RW 005', '[100] Gresik', 'Pegawai / Guru Honorer', 'yuliarahmawatise@gmail.com', '352522090657', 'Mitra', 'Aktif'),
(407, '3525104806830001', 'Lailatul Mufidah', 'Jl. Sindujoyo 12/45', '[100] Gresik', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'lailatuluskafi@gmail.com', '352522090053', 'Mitra', 'Aktif'),
(408, '3525161203810002', 'Muhsin Maris', 'Jalan Jaksa Agung Suprapto 8H No 11', '[100] Gresik', 'Wiraswasta', 'muhsin.maris@gmail.com', '352523030187', 'Mitra', 'Aktif'),
(409, '3525167011950122', 'Novika Dwi Andriani', 'Jalan Ikan Dorang Gang 3 Nomer 1 Perumahan Bp. Kulon Gresik', '[100] Gresik', 'Belum Bekerja', 'novikadwi30@gmail.com', '352524100065', 'Mitra', 'Aktif'),
(410, '3525160604030003', 'Muhammad Alifandra Noufal Rizky', 'Jalan Jaksa Agung Suprapto Gang 6 No. 23', '[100] Gresik', 'Pelajar / Mahasiswa', 'malifandraa@gmail.com', '352523070013', 'Mitra', 'Aktif'),
(411, '3525141909050002', 'Muhammad Mahdy Ariel Syahbany', 'Jl. Sindujoyo 23', '[100] Gresik', 'Pelajar / Mahasiswa', 'Mahdyariel33@gmail.com', '352524100194', 'Mitra', 'Aktif'),
(412, '3525161501850001', 'Fajar Tiardynama', 'Jalan Pahlawan Nomor 31', '[100] Gresik', 'Tani', 'tiardynama@gmail.com', '352524100119', 'Mitra', 'Aktif'),
(413, '3525164512010002', 'Harum Rahmadani Indrya Sukma', 'Jalan Kapten Dulasim XI-D/19, RT.05, RW.02', '[100] Gresik', 'Pelajar / Mahasiswa', 'harumrahmadani.indrya@gmail.com', '352522090051', 'Mitra', 'Aktif'),
(414, '3525165507990001', 'Nabila Rasyidah', 'Jl. H. Samanhudi 5/5 Gresik', '[100] Gresik', 'Wiraswasta', 'laras.larasy@gmail.com', '352522030002', 'Mitra', 'Aktif'),
(415, '3525164909950021', 'Fierda Annisa Rachmanda', 'Jl. Panglima Sudirman 3 No.16, Gresik', '[100] Gresik', 'Freelance', 'fierdaann@gmail.com', '352525080012', 'Mitra', 'Aktif'),
(416, '3525162505010004', 'Muhammad Dzul Kivly', 'Jl. Usman Sadar Gg.22 No.68 Gresik, Kel. Sukorame', '[100] Gresik', 'Open To Work', 'dzulkivly7@gmail.com', '352525080019', 'Mitra', 'Aktif'),
(417, '3525164902990001', 'Nur Silvia Hidayah', 'Jl. Sindujoyo 2C No. 15', '[100] Gresik', 'Pegawai / Guru Honorer', 'nursilviahidayah99@gmail.com', '352525080020', 'Mitra', 'Aktif'),
(418, '3525165711920121', 'Nur Sakinah', 'Jalan Usman Sadar Xb/09', '[100] Gresik', 'Mengurus Rumah Tangga', 'risasakinah92@gmail.com', '352525080015', 'Mitra', 'Aktif'),
(419, '3525166206030004', 'Risma Nur Haliza', 'Jl. Kh. Kholil 15-D/7', '[100] Gresik', 'Pelajar / Mahasiswa', 'risma.halizah03@gmail.com', '352524100182', 'Mitra', 'Aktif'),
(420, '3506142708920001', 'Miftahul Hadi', 'Jl Mh Thamrin 3A No 44 Gresik', '[100] Gresik', 'Wiraswasta', 'tfimidah@gmail.com', '352524100180', 'Mitra', 'Aktif'),
(421, '3525166105020003', 'Rosa Amelia Maulidianti', 'Jl. Kh. Wakhid Hasyim 3A No.14 Gresik', '[100] Gresik', 'Pekerja Lepas', 'rosaameliamaulidianti@gmail.com', '352524100150', 'Mitra', 'Aktif'),
(422, '3525166205030005', 'Amira Yasintha Salsabila', 'Jl.Gubernur Suryo No.208 RT.4 RW.6 Tlogopojok', '[100] Gresik', 'Pelajar / Mahasiswa', 'amirayasintha22@gmail.com', '352525080017', 'Mitra', 'Aktif'),
(423, '3525165406020001', 'Aisyah Citra Nur Sakinah', 'Jl.Panglima Sudirman XIV No. 37', '[100] Gresik', 'Wiraswasta', 'Citrasakinah14@gmail.com', '352525080022', 'Mitra', 'Aktif'),
(424, '3525163103960001', 'Much. Dwi Prasetya Haryadi', 'Jalan Panglima Sudirman 3 Nomor 19 Kel. Sidokumpul, Kec. Gresik, Kab. Gresik', '[100] Gresik', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'dharyadi117@gmail.com', '352524100141', 'Mitra', 'Aktif'),
(425, '3525165801960003', 'Irma Widyastika', 'Jl. Gubernur Suryo 175', '[100] Gresik', 'Mengurus Rumah Tangga', 'irmawidyastika@gmail.com', '352524100189', 'Mitra', 'Aktif'),
(426, '3525165201010001', 'Syoffil Widad Fitriana', 'Jl. Gubernur Suryo No 144 Gresik', '[100] Gresik', 'Wiraswasta', 'widadshoffil@gmail.com', '352523110646', 'Mitra', 'Aktif'),
(427, '3525165908000001', 'Nisrina Mahdiyah', 'Jl. Gubernur Suryo VI Nomor 44 Gresik', '[100] Gresik', 'Freelancer', 'nisrinamhdyh@gmail.com', '352523030227', 'Mitra', 'Aktif'),
(428, '3525161803830005', 'Rahmad Hamdi Paweroi', 'Jl.Pahlawan Gang 12 No.12 Tlogobendung Gresik', '[100] Gresik', 'Buruh Pabrik', 'paweroyogik@gmail.com', '352524100192', 'Mitra', 'Aktif'),
(429, '3525164603740001', 'Mardiana Zulfiah', 'Jl. Jaksa Agung Suprapto 6/23 Gresik', '[100] Gresik', 'Wiraswasta', 'zulfiah.mardiana@gmail.com', '352522090048', 'Mitra', 'Aktif'),
(430, '3525101802930001', 'Mohammad Faiz Adityah', 'Jl Masjid Jami Peganden', '[110] Manyar', 'Wiraswasta', 'mohammadfaizadityah@gmail.com', '352522020065', 'Mitra', 'Aktif'),
(431, '3525104809910002', 'Dwi Rahayu Rahmawati', 'RT 1 RW 1', '[110] Manyar', 'Aparat Desa / Kelurahan', 'dwirr8991@gmail.com', '352522090864', 'Mitra', 'Aktif'),
(432, '3525106002820001', 'Arofah', 'Jl.Kyai Hasyim RT 07 RW 02', '[110] Manyar', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'alfarizqiarofah@gmail.com', '352525080031', 'Mitra', 'Aktif'),
(433, '3525104908780005', 'Dewi Umi Isnaniyah', 'Jl.Barabai 10, RT.006,RW.010', '[110] Manyar', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'dewinania10@gmail.com', '352522090526', 'Mitra', 'Aktif'),
(434, '3578136705780004', 'Melly Gunawati', 'Jl. Marabahan VI No. 18 GKB', '[110] Manyar', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'melly.gunawatie@gmail.com', '352522090663', 'Mitra', 'Aktif'),
(435, '3525107003860001', 'Uswatun Chasanah', 'Desa Roomo RT 6 RW 2', '[110] Manyar', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'uswatunchasanah72827@gmail.com', '352524100037', 'Mitra', 'Aktif'),
(436, '3525106207980003', 'Yuni Faizatul Khoiroh', 'Jl Taruna Jaya RT 003 RW 001', '[110] Manyar', 'Ibu Rumah Tangga', 'yunifaieza@gmail.com', '352524100045', 'Mitra', 'Aktif'),
(437, '3525166410870001', 'Dian Oktaviani', 'Jl. Madiun 3 No 13 GKB Gresik', '[110] Manyar', 'Mengurus Rumah Tangga', 'fara.winkel13@gmail.com', '352525080029', 'Mitra', 'Aktif'),
(438, '3525100908990006', 'Dhana Rizky', 'Jl.Lasem No 18 GKB', '[110] Manyar', 'Wiraswasta', 'Rizky861817@gmail.com', '352525080025', 'Mitra', 'Aktif'),
(439, '3524265712950002', 'Fajriati Utami', 'Jalan Yaqut IV/14 RT. 003 RW. 019 Suci Manyar', '[110] Manyar', 'Freelance', 'fajriatiu@gmail.com', '352522050007', 'Mitra', 'Aktif'),
(440, '3525105708770007', 'Wardah Kusumastuti', 'Jalan Banjar Baru X No. 1', '[110] Manyar', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'Wardahkusumastutik@gmail.com', '352524100033', 'Mitra', 'Aktif'),
(441, '3525144507740002', 'Dilah Yuliawati', 'Perum Griya Suci Permai Blok H3 No 7 RT 04 RW 08', '[110] Manyar', 'Mengurus Rumah Tangga', 'dilahyuliawati@gmail.com', '352522090542', 'Mitra', 'Aktif'),
(442, '3525145708830001', 'Bei Irawati', 'Jl Taman Rubi No 7 RT 008 RW 021 PPS', '[110] Manyar', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'bei.irawati@gmail.com', '352522090883', 'Mitra', 'Aktif'),
(443, '3525105103910002', 'Annisa Mutiara Dinik', 'Perum Banjarsari Permai F 23', '[110] Manyar', 'Wiraswasta', 'Sianisa.48@gmail.com', '352522090889', 'Mitra', 'Aktif'),
(444, '3525104707000003', 'Aqida Nur Afdhila', 'Jl. Tarakan 1 No.13 GKB', '[110] Manyar', 'Tidak Ada', 'aqidadhila83@gmail.com', '352522110079', 'Mitra', 'Aktif'),
(445, '3524066005860001', 'Eka Fitri Rahmawati', 'Perumahan Alam Bukit Raya Blok C15 No 15', '[110] Manyar', 'Wiraswasta', 'vit_triee@yahoo.co.id', '352522090545', 'Mitra', 'Aktif'),
(446, '3525105310820008', 'Zakiyatul Fuadah', 'Pesucinan RT 011 RW 003', '[110] Manyar', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'fuadahzakiyah61@gmail.com', '352522090676', 'Mitra', 'Aktif'),
(447, '3525101810820002', 'Ajib', 'Jl. Masjid Rahmat Dusun Lawo RT 12 RW 06', '[110] Manyar', 'Aparat Desa / Kelurahan', 'ajibisa6@gmail.com', '352522090730', 'Mitra', 'Aktif'),
(448, '3525104401830003', 'Wiwik Rosyita', 'Jl.Kh.Zakariyah RT.15 RW.05', '[110] Manyar', 'Aparat Desa / Kelurahan', 'wiwikrosyita83@gmail.com', '352522090723', 'Mitra', 'Aktif'),
(449, '3525104607930003', 'Amilah Kumala', 'Jl. Kh. Syafii RT 01 RW 03', '[110] Manyar', 'Pegawai / Guru Honorer', 'amilahkumalamambaussholihin@gmail.com', '352522091052', 'Mitra', 'Aktif'),
(450, '3525100606890002', 'Muhammad Nurus Shobach', 'Jl. Kyai Sahlan 28 No. 01 RT. 012 RW. 003', '[110] Manyar', 'Aparat Desa / Kelurahan', 'muhammadshobach@gmail.com', '352522090694', 'Mitra', 'Aktif'),
(451, '3525166603830002', 'Rosidah', 'Jl. Topaz Ix No.2 RT 005 RW 016 Perum Pondok Permata Suci', '[110] Manyar', 'Mengurus Rumah Tangga', 'rosidah123123123@gmail.com', '352522091012', 'Mitra', 'Aktif'),
(452, '3525101807890003', 'Muhammad Budiyanto', 'Retno Suari RT 3 RW 1', '[110] Manyar', 'Aparat Desa / Kelurahan', 'nudesaleran@gmail.com', '352522090887', 'Mitra', 'Aktif'),
(453, '3525104405950001', 'Febi Manfa\'Atus Sayyidah', 'RT 011 RW 06 Desa Karangrejo', '[110] Manyar', 'Aparat Desa / Kelurahan', 'febifebi71@gmail.com', '352522030041', 'Mitra', 'Aktif'),
(454, '3525106410990002', 'Abidatur Rohmaniyah', 'Jl Kh Syafii Pongangan Manyar Gresik', '[110] Manyar', 'Karyawan Swasta', 'abiidaturohmaniyah@gmail.com', '352522030010', 'Mitra', 'Aktif'),
(455, '3525105112850005', 'Elin Indahsari', 'Darussalam RT004 RW001', '[110] Manyar', 'Aparat Desa / Kelurahan', 'elinindahsari86@gmail.com', '352522020037', 'Mitra', 'Aktif'),
(456, '3525105809950001', 'Rizqi Amalia', 'Jl Ky Sahlan 16 No 31', '[110] Manyar', 'Aparat Desa / Kelurahan', 'rizqia130@gmail.com', '352522020040', 'Mitra', 'Aktif'),
(457, '3525105412950001', 'Nur Nafi\'Ah', 'Roomo Gg.1, RT.003/RW.002', '[110] Manyar', 'Staff Notaris', 'alnafh2141@gmail.com', '352522020047', 'Mitra', 'Aktif'),
(458, '3525041204830003', 'Khoirur Roziqin', 'Jl.H.Noloyudho RT.03 RW.01', '[110] Manyar', 'Aparat Desa / Kelurahan', 'khoirurroziqin83@gmail.com', '352522020098', 'Mitra', 'Aktif'),
(459, '8101172611850001', 'Achmad Hilmi Afandi', 'Suci RT 001 RW 001', '[110] Manyar', 'Aparat Desa / Kelurahan', 'hilmisuci@gmail.com', '352522020044', 'Mitra', 'Aktif'),
(460, '3525100708990003', 'Muhammad Rosyid', 'Jl Kh Usman Al Ishaqi No 36 Desa Tebalo', '[110] Manyar', 'Aparat Desa / Kelurahan', 'rosyidmuhammad779@gmail.com', '352522020014', 'Mitra', 'Aktif'),
(461, '3525106207800003', 'Enis Sholikhah', 'Pongangan Krajan RT 7 RW 1', '[110] Manyar', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'enis.juwita@gmail.com', '352522090837', 'Mitra', 'Aktif'),
(462, '3525146912760002', 'Winarsih', 'Jalan Ruby 1 No 8 RT 001 RW 021 PPS', '[110] Manyar', 'Mengurus Rumah Tangga', 'm4m4.albikha@gmail.com', '352522090536', 'Mitra', 'Aktif'),
(463, '3525164707770124', 'Nur Hayati', 'Jalan Tanjung Wira 4/12 RT.004 RW.012', '[110] Manyar', 'Mengurus Rumah Tangga', 'chechenurhayati@gmail.com', '352522090979', 'Mitra', 'Aktif'),
(464, '3525105706960003', 'Habibatul Ma\'Shumah', 'Gg Kh Kholil RT.02 RW.03', '[110] Manyar', 'Ibu Rumah Tangga', 'hmashumah@gmail.com', '352522091019', 'Mitra', 'Aktif'),
(465, '3525200202790002', 'Abdullah Mahsun', 'Betoyokauman RT007 RW004', '[110] Manyar', 'Aparat Desa / Kelurahan', 'caksun121@gmail.com', '352522090895', 'Mitra', 'Aktif'),
(466, '3525107107990003', 'Faridatun Nikmah', 'Dusun Tanggulrejo Utara RT 01 RW 01', '[110] Manyar', 'Tutor', 'faridanikmah08@gmail.com', '352524100042', 'Mitra', 'Aktif'),
(467, '3525104706990001', 'Dian Rahmawati', 'Perum Dinari C/30 RT 003 RW 002', '[110] Manyar', 'Wiraswasta', 'dianrahmawati076@gmail.com', '352523110460', 'Mitra', 'Aktif'),
(468, '3525106803930001', 'Nurul Magfuroh', 'Jl.Kh.Syafi\'I Gang Kh.Kholil RT 02 RW 03', '[110] Manyar', 'Pegawai / Guru Honorer', 'nurulmagfuroh@gmail.com', '352524100030', 'Mitra', 'Aktif'),
(469, '3525106101750001', 'Titis Pristianty', 'Jl. Kayu VII A No 6 PPI', '[110] Manyar', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'titispristianty@gmail.com', '352524100032', 'Mitra', 'Aktif'),
(470, '3525106701990001', 'Ita Sari Ziadah Rohmah', 'Jln.Kh.Syafii RT 01 RW 02', '[110] Manyar', 'Pegawai / Guru Honorer', 'ziyahrohmah@gmail.com', '352524100029', 'Mitra', 'Aktif'),
(471, '3525144302880001', 'Anggi Eka Puspita Ningtyas', 'Jalan Bondowoso 2 No 37 RT 03 RW 04', '[110] Manyar', 'Pegawai / Guru Honorer', 'anggi.eka0288@gmail.com', '352524100034', 'Mitra', 'Aktif'),
(472, '3525104901000002', 'Siti Lailatul Fitriyah', 'Jalan Manunggal II RT 006 RW 002 Ngampel', '[110] Manyar', 'Pegawai / Guru Honorer', 'sitilailatul901@gmail.com', '352524100046', 'Mitra', 'Aktif'),
(473, '3525106606970003', 'Nor Faridah', 'Jl. Kh. Ishaq No 6 RT 08 RW 02', '[110] Manyar', 'Mengurus Rumah Tangga', 'norfaridah2606@gmail.com', '352524100039', 'Mitra', 'Aktif'),
(474, '3525100407860001', 'Mohamad Faishol Ghomri', 'Jalan Sidodadi RT 006 / RW 003', '[110] Manyar', 'Pegawai / Guru Honorer', 'ghomrigreat@gmail.com', '352524100040', 'Mitra', 'Aktif'),
(475, '3525105811920002', 'Velenza Riyanda Peggywati', 'Jl.Blitar IV/8', '[110] Manyar', 'Freelance', 'velenza.r.peggywati@gmail.com', '352522110034', 'Mitra', 'Aktif'),
(476, '3525106603960002', 'Erna Ratna Sari', 'Jl. Kh. Syafi\'i No.89 RT 01 RW 03', '[110] Manyar', 'Freelance', 'ernaratnasrr@gmail.com', '352522090415', 'Mitra', 'Aktif'),
(477, '3525105411990002', 'Turfatul Atiyah', 'Jalan Kh Hasyim Asyari No. 22 Desa Tebalo', '[110] Manyar', 'Pelajar / Mahasiswa', 'atitahturfatul@gmail.com', '352522110038', 'Mitra', 'Aktif'),
(478, '3525101409010003', 'Muhammad Adriyan Firdausy', 'Jalan Retno Suari RT 03 RW 01', '[110] Manyar', 'Wiraswasta', 'fmuhammadadriyan@gmail.com', '352525080028', 'Mitra', 'Aktif'),
(479, '3525104910860002', 'Lia Permata Sani', 'Jl. Rembang 1 No. 22 Perum. Gkb Gresik', '[110] Manyar', 'Mengurus Rumah Tangga', 'permataalea09@gmail.com', '352525080027', 'Mitra', 'Aktif'),
(480, '3525100608050001', 'Muhammad Nurul Yaaqin', 'Jl.Rembang No.2 GKB, Kel. Yosowilangun, Kec. Manyar, Kab. Gresik', '[110] Manyar', 'Pelajar / Mahasiswa', 'muhammadeqi3@gmail.com', '352525080024', 'Mitra', 'Aktif'),
(481, '3525104704060001', 'Nala Arina Qifaro', 'Desa Roomo RT 05 RW 01 No.11 Kec. Manyar Kab. Gresik', '[110] Manyar', 'Pelajar / Mahasiswa', 'arinanala05@gmail.com', '352525080002', 'Mitra', 'Aktif'),
(482, '3578054102990001', 'Febriza Eka Mayori', 'Jl. Taman Enggano Dalam 4 No 19 RT 06 RW 07 Perumahan Gkb (Gresik Kota Baru) Desa Yosowilangun Kecamatan Manyar Kab. Gresik Jawa Timur 61151', '[110] Manyar', 'Wiraswasta', 'febrizaseka@gmail.com', '352525080001', 'Mitra', 'Aktif'),
(483, '3525104504010001', 'Elvira Silvia Tsani', 'Jl. Amuntai No.20 GKB', '[110] Manyar', 'Belum Bekerja', 'Elviratsani100@gmail.com', '352524100028', 'Mitra', 'Aktif'),
(484, '3525104703960001', 'Hadiyyatan Waasilah', 'Jalan Amd 02 RT.03/RW.01', '[110] Manyar', 'Pegawai / Guru Honorer', 'hwaasilah@gmail.com', '352522110075', 'Mitra', 'Aktif'),
(485, '3573054207840022', 'Aftiajeng Yulia Safitri', 'Jl. Taman Enggano No. 11', '[110] Manyar', 'Mengurus Rumah Tangga', 'aftiajeng.yuliasafitri@gmail.com', '352525080026', 'Mitra', 'Aktif'),
(486, '3525105012830001', 'Dewi Lutfi Murdaningrum', 'Jalan Pasir Raya No 17 Perum Pongangan Indah', '[110] Manyar', 'Mengurus Rumah Tangga', 'lutfidewi920@gmail.com', '352522090658', 'Mitra', 'Aktif'),
(487, '3517075706850002', 'Finda Triasmia Asmara', 'Jalan Tarakan 2 No.13 GKB Vista Gresik Suci', '[110] Manyar', 'Mengurus Rumah Tangga', 'memeadilan@gmail.com', '352522090567', 'Mitra', 'Aktif'),
(488, '3578237011770001', 'Mukhollifah Dwi Sudariyanti, Se', 'Jalan Batu Raya No. 05 Perumahan Pongangan Indah', '[110] Manyar', 'Aparat Desa / Kelurahan', 'olifyanti30@gmail.com', '352522020057', 'Mitra', 'Aktif'),
(489, '3578046108850002', 'Nur Aini', 'Sukomulyo RT 07 RW 02 No 02', '[110] Manyar', 'Mengurus Rumah Tangga', 'ainijagir@gmail.com', '352522090711', 'Mitra', 'Aktif'),
(490, '3525126712950003', 'Sayyidah Arbahah', 'Jl. Kh. Hasyim Asy\'Ari RT. 003 RW. 002', '[120] Bungah', 'Aparat Desa / Kelurahan', 'arbahahsayyidah27@gmail.com', '352522090226', 'Mitra', 'Aktif'),
(491, '3525120310010001', 'Khotibul Umam', 'Jalan Maskumambang RT.011 RW.004', '[120] Bungah', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'khotibulumam149@gmail.com', '352523110704', 'Mitra', 'Aktif'),
(492, '3578301810020002', 'Jamrud Irfan Maulana', 'Jalan A. Yani Nomor 7 RT.05/RW.06', '[120] Bungah', 'Pelajar / Mahasiswa', 'babayagaxurangdalam@gmail.com', '352524100086', 'Mitra', 'Aktif'),
(493, '3525126403010001', 'Khofifatun Nabilah', 'H. Agus Salim No. 37 A RT. 02 RW. 05', '[120] Bungah', 'Pegawai / Guru Honorer', 'nabilah.ziba5277@gmail.com', '352524100107', 'Mitra', 'Aktif'),
(494, '3525122606960024', 'Mohammad Zam Zami', 'H. Agus Salim RT. 02 RW. 05', '[120] Bungah', 'Wiraswasta', 'nabilah.ziba89@gmail.com', '352524100117', 'Mitra', 'Aktif'),
(495, '3525127001840002', 'Ma\'Rufah', 'Sampurnan RT 09 RW 03', '[120] Bungah', 'Wiraswasta', 'marufahfauzi@gmail.com', '352522090179', 'Mitra', 'Aktif'),
(496, '3525120101980002', 'Muhammad Zaimuddin', 'Jl Fatwa RT.002 RW.003 Desa Gumeng Kec Bungah Kab Gresik', '[120] Bungah', 'Wiraswasta', 'zaimaeahmad1@gmail.com', '352522090022', 'Mitra', 'Aktif'),
(497, '3525125101920002', 'Sarirotun Naqiyah', 'Jl. Lebaksari RT.13 RW.04', '[120] Bungah', 'Aparat Desa / Kelurahan', 'naqiyahsarirotun@gmail.com', '352522090024', 'Mitra', 'Aktif'),
(498, '3525126803020001', 'Awwalur Rohmah Cahyaningati', 'Dusun  Pereng Kulon RT 24 RW 10 Melirang Bungah Gresik', '[120] Bungah', 'Pelajar / Mahasiswa', 'mayamanyus01@gmail.com', '352522090030', 'Mitra', 'Aktif'),
(499, '3525125111830001', 'Ainanis Watin', 'Dusun Karangliman RT 10 RW 04', '[120] Bungah', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'Ainizwa1@gmail.com', '352522090098', 'Mitra', 'Aktif'),
(500, '3525120401950002', 'Muhammad Minanurrohman', 'Jl. Raya Bungah No 33 RT 03 RW 02 Mojopurowetan Bungah Gresik', '[120] Bungah', 'Pegawai / Guru Honorer', 'nanung040195@gmail.com', '352522090087', 'Mitra', 'Aktif'),
(501, '3525125306990003', 'Mawaddatur Rohmah', 'Jl. Fatwa RT 02 RW 03 Desa Gumeng', '[120] Bungah', 'Wiraswasta', 'mawaddaturrohmah2018@gmail.com', '352522090541', 'Mitra', 'Aktif'),
(502, '3525125308960001', 'Siti Khusnia', 'Masangan Timur RT 001 RW 001', '[120] Bungah', 'Aparat Desa / Kelurahan', 'zahwazafran11@gmail.com', '352522090231', 'Mitra', 'Aktif'),
(503, '3525121204830005', 'Muhammad Qosim', 'Jl. Sunan Giri RT. 03RW.01', '[120] Bungah', 'Aparat Desa / Kelurahan', 'qosimzuhri@gmail.com', '352522090194', 'Mitra', 'Aktif'),
(504, '3525124107030003', 'Ana Fithrotun Nada', 'Jl Ra KaRTini 14 RT 11 RW 02 Desa Sukorejo Kecamatan Bungah Kabupaten Gresik', '[120] Bungah', 'Pelajar / Mahasiswa', 'anafithrotunnada@gmail.com', '352522090177', 'Mitra', 'Aktif'),
(505, '3525122812800001', 'Saiful Rofik', 'Desa Sidorejo RT 02 RW 01 Kec. Bungah Kab. Gresik', '[120] Bungah', 'Aparat Desa / Kelurahan', 'family.sound18@gmail.com', '352522090441', 'Mitra', 'Aktif'),
(506, '3525124512940001', 'Dewi Sri Utami', 'Jl. Randu Agung RT 1 RW 1', '[120] Bungah', 'Wiraswasta', 'dewisriutami09@gmail.com', '352522090061', 'Mitra', 'Aktif'),
(507, '3525124606830001', 'Nur Aini', 'Jalan Raya Masangan Barat', '[120] Bungah', 'Mengurus Rumah Tangga', 'nenin402@gmail.com', '352522040023', 'Mitra', 'Aktif'),
(508, '3525121706920001', 'Alaik Kamaluddin', 'Jl. Qomaruddin RT 01 RW 03', '[120] Bungah', 'Staff Kaur Keuangan Desa', 'golokaye@gmail.com', '352522030006', 'Mitra', 'Aktif'),
(509, '3525121911940001', 'Andri Priyo Wicaksono', 'Masangan Barat No 162 RT 13 RW 06', '[120] Bungah', 'Belum Bekerja', 'andripriyowicaksono7@gmail.com', '352522020092', 'Mitra', 'Aktif'),
(510, '3525120708010001', 'Muhammad Roziqi Yogatama', 'Desa Masangan RT 01 RW 01 No 30', '[120] Bungah', 'Pelajar / Mahasiswa', 'roziqiytma17@gmail.com', '352523060024', 'Mitra', 'Aktif'),
(511, '3525126406950001', 'Nurul Wahidiyah', 'Masangan Timur RT 004 RW 002', '[120] Bungah', 'Aparat Desa / Kelurahan', 'nufan256@gmail.com', '352523110700', 'Mitra', 'Aktif'),
(512, '3525125907980002', 'Firdausi Nuzula', 'Jl Raya Bungah Dukun No 33 RT 03 RW 02', '[120] Bungah', 'Wiraswasta', 'firdausinuzula1445@gmail.com', '352522110045', 'Mitra', 'Aktif'),
(513, '3525126011960002', 'Hakimatul Husniyah', 'Jl. Nongkokerep RT 011 RW 004', '[120] Bungah', 'Pegawai / Guru Honorer', 'hakimaniya20@gmail.com', '352522110048', 'Mitra', 'Aktif'),
(514, '3525127004030004', 'Ainur Rosyidah', 'Dusun Karangpoh RT 24A RW 09 Desa Bungah Kecamatan Bungah Kabupaten Gresik', '[120] Bungah', 'Asisten Peneliti Sosial', 'ainurosyidah13@gmail.com', '352524100103', 'Mitra', 'Aktif'),
(515, '3525124612930001', 'Yayuk Mughiroh', 'Jln K H Bisry Syamsuri No18 RT6 RW3', '[120] Bungah', 'Mengurus Rumah Tangga', 'yayukmughiroh@gmail.com', '352524100154', 'Mitra', 'Aktif'),
(516, '3525121405950001', 'Ahmad Nurul Azmi', 'Dusun Jeraganan RT 008 RW 003 Desa Mojopurogede Kec. Bungah Kab. Gresik', '[120] Bungah', 'Wiraswasta', 'ahmadnurul.azmi@gmail.com', '352524100024', 'Mitra', 'Aktif'),
(517, '3525121204980002', 'Ahmad Dawam Zaki Fuadi Albasami', 'Sy. Iskandar', '[120] Bungah', 'Aparat Desa / Kelurahan', 'zaki.f.albasami@gmail.com', '352522020116', 'Mitra', 'Aktif'),
(518, '3525126009980002', 'U\'Ud Dwi Safitri', 'Dusun Bangun Rejo RT 6 RW 2 Desa Mojopurogede', '[120] Bungah', 'Mengurus Rumah Tangga', '11uudwi@gmail.com', '352522110004', 'Mitra', 'Aktif'),
(519, '3525124406970002', 'Nur Saadatus Sa\'Diyah', 'Dusun Bangunrejo RT 05 RW 02 Desa Mojopurogede Bungah Gresik', '[120] Bungah', 'Usaha Toko/Freelance', 'nursaadatussadiyah46@gmail.com', '352522110073', 'Mitra', 'Aktif'),
(520, '3525104812970001', 'Ananda Isnaini Hidayah', 'Jl. Tegal Rejo RT 17B RW 06 Desa Bungah', '[120] Bungah', 'Belum Bekerja', 'Anandaisnaini015@gmail.com', '352523060003', 'Mitra', 'Aktif'),
(521, '3525122511000002', 'Muhammad Qomaruddin Sya\'Bani', 'Jl. Merdeka Gg/No. 11/02 RT/RW 06/03 Mojopuro Wetan', '[120] Bungah', 'Wiraswasta', 'm.qomaruddin28@gmail.com', '352523070012', 'Mitra', 'Aktif'),
(522, '3525122910000002', 'Moh. Adda\'I Ilaa Sabilil Hudaa', 'Jl. Rayabungah No 33 RT 03 RW 04', '[120] Bungah', 'Jaga Toko', 'Mahmedhuda29@gmail.com', '352523110607', 'Mitra', 'Aktif'),
(523, '3525126306910001', 'Yunita Puspitasari', 'Jl Veteran Kusnan No 1', '[120] Bungah', 'Tidak Bekerja', 'yunitap583@gmail.com', '352524090002', 'Mitra', 'Aktif'),
(524, '3525095711010002', 'Sayyidatul Addabiyah', 'Asemanis RT 02 RW 02', '[130] Sidayu', 'Wiraswasta', 'sayyidatuladdabiyah@gmail.com', '352523110808', 'Mitra', 'Aktif'),
(525, '3524254405830002', 'Siti Jumaiyah', 'RT 01 RW 01 Racikulon Sidayu Hooh', '[130] Sidayu', 'Mengurus Rumah Tangga', 'jumaiyahsiti84@gmail.com', '352522090575', 'Mitra', 'Aktif'),
(526, '3525091107990001', 'Mohamad Rifqi Abdillah', 'Jl. Sumber Rejo RT001/RW003', '[130] Sidayu', 'Wiraswasta', 'rifqiabdillah1107@gmail.com', '352522090490', 'Mitra', 'Aktif'),
(527, '3525096312920001', 'Latifatul Uliyah', 'RT 004 RW 004', '[130] Sidayu', 'Wiraswasta', 'latifatululiyah123@gmail.com', '352522090640', 'Mitra', 'Aktif'),
(528, '3525090912820001', 'Muhammad Tolkhah', 'RT 005 RW 001 Desa Golokan', '[130] Sidayu', 'Wiraswasta', 'muhammadtolkhah5555@gmail.com', '352522090562', 'Mitra', 'Aktif'),
(529, '3525092906830002', 'Imam Mawardi', 'Golokan', '[130] Sidayu', 'Wiraswasta', 'imammawardi2906@gmail.com', '352522090149', 'Mitra', 'Aktif'),
(530, '3525092808830001', 'Wiwied Cahyo Wibawa', 'RT. 004 RW. 002', '[130] Sidayu', 'Pegawai / Guru Honorer', 'wiwied0828@gmail.com', '352522090040', 'Mitra', 'Aktif'),
(531, '3525094704930002', 'Hidayatul Khusna', 'RT 004 RW 005', '[130] Sidayu', 'Mengurus Rumah Tangga', 'hidayatulkhusna94@gmail.com', '352522090637', 'Mitra', 'Aktif'),
(532, '3525095408830001', 'Nurul Fahimah', 'Gg Lebar RT 03/RW 01 No 2', '[130] Sidayu', 'Wiraswasta', 'FahimFahimah9@gmail.com', '352522020175', 'Mitra', 'Aktif'),
(533, '3525124707800001', 'Muntahah', 'RT 02 RW 02 Asemanis', '[130] Sidayu', 'Pegawai / Guru Honorer', 'munawarohais@gmail.com', '352522020172', 'Mitra', 'Aktif'),
(534, '3525094605890002', 'Luluk Qurotul Islahiyah', 'Gedangan RT 01 / RW 05', '[130] Sidayu', 'Pegawai / Guru Honorer', 'Luluknasron@gmail.com', '352522020176', 'Mitra', 'Aktif'),
(535, '3525095508800002', 'Musyafiati', 'Jln.Cempaka RT 02 RW 02', '[130] Sidayu', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'musyafiati@gmail.com', '352522020174', 'Mitra', 'Aktif'),
(536, '3525094502920001', 'Vivilia Martaninova', 'Ngawen RT 01 RW 02 Sidayu Gresik', '[130] Sidayu', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'vivilia.martaninova@gmail.com', '352524100005', 'Mitra', 'Aktif'),
(537, '3525095607880001', 'Umi Kholifah', 'Jl. Raden Moh Said No.03 RT.002 RW.001', '[130] Sidayu', 'Aparat Desa / Kelurahan', 'iffahfaustine@gmail.com', '352524100010', 'Mitra', 'Aktif'),
(538, '3525092710990001', 'Nasruddin', 'Jalan Nyai Ayu RT 03 RW 02', '[130] Sidayu', 'Wiraswasta', 'nasrud.addin27@gmail.com', '352524100003', 'Mitra', 'Aktif'),
(539, '3525095508980003', 'Anis Faul Maymunah', 'Jalan Melati RT 001 RW 001', '[130] Sidayu', 'Mengurus Rumah Tangga', 'maymunahanis023@gmail.com', '352523030056', 'Mitra', 'Aktif'),
(540, '3525091010960001', 'Moh. Sholeh Hidayat', 'RT 05 RW 02 KeRTosono Sidayu Gresik', '[130] Sidayu', 'Pegawai / Guru Honorer', 'mohsholeh101096@gmail.com', '352523030018', 'Mitra', 'Aktif'),
(541, '3525092207920001', 'Syafaur Rosyidin', 'Jl. Kencur RT 01 RW 05 Wadeng Sidayu', '[130] Sidayu', 'Wiraswasta', 'Safaur22@gmail.com', '352523030021', 'Mitra', 'Aktif'),
(542, '3525095201010002', 'Alfi Fadhilatul Fitri', 'Jl. Raya Deandles RT 005 RW 001', '[130] Sidayu', 'Mengurus Rumah Tangga', 'alfifadhilatul120101@gmail.com', '352523030025', 'Mitra', 'Aktif'),
(543, '3525051104820002', 'Arifiyanto', 'Jalan Raden Badrun RT 02 RW 01', '[130] Sidayu', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'arifpras3525130@gmail.com', '352523050309', 'Mitra', 'Aktif'),
(544, '3525105009890003', 'Heni Ervira Wahyuni', 'Gedangan RT. 02 RW. 06 Desa Gedangan', '[130] Sidayu', 'Pegawai / Guru Honorer', 'ervir4@gmail.com', '352524100007', 'Mitra', 'Aktif'),
(545, '3525091703950001', 'Ali Hasby Tauhidi', 'RT.002/RW.001 Desa Sambipondok', '[130] Sidayu', 'Aparat Desa / Kelurahan', 'alihasby34@gmail.com', '352524100156', 'Mitra', 'Aktif'),
(546, '3525096911990001', 'Nisa\' Ma\'Rifatika', 'Jl. Pelita Iii RT 01 RW 02 Randuboto, Sidayu, Gresik', '[130] Sidayu', 'Belum Bekerja', 'nisamarifatika1@gmail.com', '352523010003', 'Mitra', 'Aktif'),
(547, '3525096209870003', 'Dian Puspita Sari', 'Racikulon RT 01 RW 01', '[130] Sidayu', 'Mengurus Rumah Tangga', 'diannadira890@gmail.com', '352522020168', 'Mitra', 'Aktif'),
(548, '3525016604860002', 'Muzayyanah', 'Jl.Sedap Malam RT.08 RW.04 Ima\'An', '[140] Dukun', 'Pegawai / Guru Honorer', 'Chanahmoeza@gmail.com', '352522020149', 'Mitra', 'Aktif'),
(549, '3525011403990003', 'Miftahul Ilmi', 'Padangbandung RT 013 RW 003', '[140] Dukun', 'Wiraswasta', 'miftahulilmi02@gmail.com', '352522090791', 'Mitra', 'Aktif');
INSERT INTO `master_petugas` (`id`, `nik`, `nama_petugas`, `alamat`, `kecamatan`, `pekerjaan`, `email`, `sobat_id`, `jabatan`, `status_petugas`) VALUES
(550, '3525010904840004', 'Mat Kholik', 'Jrebeng RT 002 RW 001', '[140] Dukun', 'Aparat Desa / Kelurahan', 'matkholik804@gmail.com', '352522090997', 'Mitra', 'Aktif'),
(551, '3525010806870003', 'Fatkhur Rozi', 'Jl. Teratai Sidomulyo RT. 012 RW.004', '[140] Dukun', 'Aparat Desa / Kelurahan', 'renny.fathur@gmail.com', '352522100088', 'Mitra', 'Aktif'),
(552, '3525013009020001', 'Muhammad Fikri Fardiansyah, S. Pd', 'RT 06 RW 03', '[140] Dukun', 'Pegawai / Guru Honorer', 'fikrifar3@gmail.com', '352422110064', 'Mitra', 'Aktif'),
(553, '3525015109000001', 'Dina Tamara', 'Jln. Kusuma Bangsa', '[140] Dukun', 'Wiraswasta', 'dinatamaraaa@gmail.com', '352524100018', 'Mitra', 'Aktif'),
(554, '3525031502820004', 'Abdul Mukid', 'Dusun Langkir RT 006 RW 002', '[140] Dukun', 'Aparat Desa / Kelurahan', 'mukidabdulmukid4@gmail.com', '352524100020', 'Mitra', 'Aktif'),
(555, '3525011507870003', 'Rusdi', 'Petiyintunggal', '[140] Dukun', 'Aparat Desa / Kelurahan', 'rus.ca2020@gmail.com', '352524100012', 'Mitra', 'Aktif'),
(556, '3525015401980003', 'I\'In Qurrota \'Ayun', 'Jln. Singo Barong RT.004 RW.002 Baron, Dukun, Gresik', '[140] Dukun', 'Wiraswasta', 'iinqurrotayun@gmail.com', '352524100155', 'Mitra', 'Aktif'),
(557, '3525014411920003', 'Dwi Novita Yanti', 'RT. 02, RW. 01', '[140] Dukun', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'Dwinovitayanti1@gmail.com', '352524100014', 'Mitra', 'Aktif'),
(558, '3525012708820002', 'Mohammad Syahidin', 'RT 006 RW 002 Desa Petiyintunggal Dukun Gresik', '[140] Dukun', 'Aparat Desa / Kelurahan', 'pramesti2013@gmail.com', '352522091465', 'Mitra', 'Aktif'),
(559, '3525014104880001', 'Tis\'An Shobikha', 'Jalan Masjid RT.04 RW.02', '[140] Dukun', 'Aparat Desa / Kelurahan', 'aqilasidqiyah@gmail.com', '352522091300', 'Mitra', 'Aktif'),
(560, '3525014211020001', 'Shania Indah Safitri', 'Jalan Padangbandung RT14 RW03', '[140] Dukun', 'Wiraswasta', 'indahshania87@gmail.com', '352522091001', 'Mitra', 'Aktif'),
(561, '3525010205940001', 'Muh Ali Fikri', 'Jl. Timur Masjid Jami\' No.40 RT/RW 014/003', '[140] Dukun', 'Wiraswasta', 'malifikri203@gmail.com', '352522020261', 'Mitra', 'Aktif'),
(562, '3525012412950002', 'Aris Sulthon', 'Jalan Waduk RT.30 RW.08', '[140] Dukun', 'Wiraswasta', 'sulthonaris@gmail.com', '352522020141', 'Mitra', 'Aktif'),
(563, '3525010707910002', 'Ahya\'Ul Mustahlafin', 'RT 01 RW 01 Desa Bulangan', '[140] Dukun', 'Aparat Desa / Kelurahan', 'mymustahlafin@gmail.com', '352522020241', 'Mitra', 'Aktif'),
(564, '3525012510940002', 'Jamaluddin Al Ayubi', 'RT 15 RW 04', '[140] Dukun', 'Aparat Desa / Kelurahan', 'Jamaludin.al53@gmail.com', '352522020234', 'Mitra', 'Aktif'),
(565, '3525011104810001', 'Abdul Kahar', 'Tiremenggal', '[140] Dukun', 'Aparat Desa / Kelurahan', 'abdulkahar.ak20@gmail.com', '352522020245', 'Mitra', 'Aktif'),
(566, '3525013108930002', 'Muhammad Yusuf', 'RT. 10 RW. 02 Desa Tebuwung', '[140] Dukun', 'Wiraswasta', 'muhyus32@gmail.com', '352522020122', 'Mitra', 'Aktif'),
(567, '3525015009820001', 'Astutik', 'Madumulyorejo RT 008 RW 003', '[140] Dukun', 'Wiraswasta', 'at483152@gmail.com', '352522091377', 'Mitra', 'Aktif'),
(568, '3525012007840003', 'Mighfar', 'Padangbandung', '[140] Dukun', 'Aparat Desa / Kelurahan', 'mighfar.muhammaf@gmail.com', '352522091413', 'Mitra', 'Aktif'),
(569, '3525015710980001', 'Mar\'Atus Sholihah', 'Dusun Sidobangun RT 003/RW 002', '[140] Dukun', 'Pegawai / Guru Honorer', 'maratussholihah257@gmail.com', '352522091392', 'Mitra', 'Aktif'),
(570, '3525012611980001', 'Mohammad Fariduddin', 'Jalan Raya Sawo RT 015 / RW 008', '[140] Dukun', 'Petani', 'Faridgaling08@gmail.com', '352522091371', 'Mitra', 'Aktif'),
(571, '3525015101010001', 'Nur Wahyuni', 'Jalan Sumber Rejo RT 20 RW 05', '[140] Dukun', 'Wiraswasta', 'yunii11694@gmail.com', '352522091210', 'Mitra', 'Aktif'),
(572, '3525014803930001', 'Berti Kurtiana Nurjoko', 'RT 27 RW 07', '[140] Dukun', 'Mengurus Rumah Tangga', 'berti.kurtiana@gmail.com', '352522091350', 'Mitra', 'Aktif'),
(573, '3525013006850014', 'Imam Zarkasih', 'Dusun Siraman RT. 001 RW. 001', '[140] Dukun', 'Aparat Desa / Kelurahan', 'izarshonafah@gmail.com', '352522090973', 'Mitra', 'Aktif'),
(574, '3525017012980001', 'Khilmatus Sa\'Adah', 'Lowayu', '[140] Dukun', 'Tidak Bekerja', 'saadahkhilma3@gmail.com', '352522091005', 'Mitra', 'Aktif'),
(575, '3525015212920001', 'Syarifatul Hayati', 'Sidobangun RT.004 RW.002 Mentaras Dukun Gresik', '[140] Dukun', '-', 'fatulhayatisyari@gmail.com', '352523020006', 'Mitra', 'Aktif'),
(576, '3525014805960001', 'Athiyatul Husnah', 'Jalan Sedap Malam RT/RW 08/04 Desa Imaan Kecamatan Dukun Kabupaten Gresik', '[140] Dukun', 'Wiraswasta', 'athiyatulhusnah96@gmail.com', '352523020013', 'Mitra', 'Aktif'),
(577, '3525012406960002', 'Muhammad Rif\'An', 'RT 002 RW 001 Desa Kalirejo', '[140] Dukun', 'Aparat Desa / Kelurahan', 'Muhammadrifan72@gmail.com', '352522091344', 'Mitra', 'Aktif'),
(578, '3525014711930002', 'Ana Sugiarti', 'Desa Gedongkedo\'An RT 01 RW 01', '[140] Dukun', 'Wiraswasta', 'ana095sugiarti@gmail.com', '352522091194', 'Mitra', 'Aktif'),
(579, '3525013101990002', 'Fiqih Ferdi Firdausi', 'Babaksari RT 07 RW 04', '[140] Dukun', 'Aparat Desa / Kelurahan', 'ferdifirdaus119@gmail.com', '352522091524', 'Mitra', 'Aktif'),
(580, '3525012906940002', 'Husnul Khuluq', 'Jl.Rajawali RT 16 RW 3', '[140] Dukun', 'Wiraswasta', 'khuluqhusnul2906@gmail.com', '352522090945', 'Mitra', 'Aktif'),
(581, '3525011810820004', 'Sabihun Nidlom', 'Jalan Garuda RT 010 RW 002', '[140] Dukun', 'Wiraswasta', 'kingdomboos@gmail.com', '352522090750', 'Mitra', 'Aktif'),
(582, '3525010101900003', 'Muhammad Syaiful Arif', 'Jalan Rajawali Desa Tebuwung RT. 16 RW. 03 Kec. Dukun Kab. Gresik', '[140] Dukun', 'Wiraswasta', 'Syaiful.arif1@Gmail.com', '352522091295', 'Mitra', 'Aktif'),
(583, '3525012509990001', 'Mohammad Septiawan', 'Jln Wr Supratman', '[140] Dukun', 'Wiraswasta', 'septiawanan104@gmail.com', '352524100181', 'Mitra', 'Aktif'),
(584, '3525012007970002', 'Hadi Prasetiya', 'Jalan Singo Barong RT 05 RW 03 Desa Baron', '[140] Dukun', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'hadiprasetiya1997@gmail.com', '352524100015', 'Mitra', 'Aktif'),
(585, '3525010910930002', 'Ahmad Nu\'Man', 'Jalan Rajawali RT 15 RW 03 Tebuwung Dukun Gresik', '[140] Dukun', 'Wiraswasta', 'Nukmanku091093@gmail.com', '352524100025', 'Mitra', 'Aktif'),
(586, '3525017107000001', 'Chusnul Adilah', 'Jalan Singo Barong RT.004 RW. 002', '[140] Dukun', 'Wirausaha', 'chusnuladilah@gmail.com', '352523110421', 'Mitra', 'Aktif'),
(587, '3525014703940001', 'Muawwanah', 'Jl. Cicak Rawa RT 24 RW 04 Tebuwung Dukun Gresik', '[140] Dukun', 'Wiraswasta', 'muawanah427@gmail.com', '352524100019', 'Mitra', 'Aktif'),
(588, '3525014312970002', 'Fatimatu Za\'Idiyah', 'Jalan Tegal Sari Desa Tebuwung Kecamatan Dukun Kabupaten Gresik', '[140] Dukun', 'Wiraswasta', 'fatimatuzzaidiyah@gmail.com', '352522110026', 'Mitra', 'Aktif'),
(589, '3525010212980003', 'Mohammad Hanif', 'Jl. Budi Utomo RT/RW 04/02 Sawo Dukun Gresik', '[140] Dukun', 'Pedagang', 'madhanif029@gmail.com', '352523030090', 'Mitra', 'Aktif'),
(590, '3525013107810002', 'Machyudin Afthor', 'Jl. Sedap Malam RT8 RW 4', '[140] Dukun', 'Guru', 'mach.afthor81@gmail.com', '352524100013', 'Mitra', 'Aktif'),
(591, '3525011312000002', 'Muhammad Fachrizal Dwi Ramadhan', 'Jalan Kh. Ahmad Dahlan RT 006 RW 003', '[140] Dukun', 'Aparat Desa / Kelurahan', 'halofachrizaldwi@gmail.com', '352524100011', 'Mitra', 'Aktif'),
(592, '3525014502880001', 'Musi\'Atul Maziyah', 'Jl. Kebon Rejo. RT 09 RW 03. Bulangan', '[140] Dukun', 'Mengurus Rumah Tangga', 'musiatulmaziyah36@gmail.com', '352524100016', 'Mitra', 'Aktif'),
(593, '3525017006960005', 'Nailus Shufriyah', 'RT.005/RW.001', '[140] Dukun', 'Pegawai / Guru Honorer', 'shufriyahnailus@gmail.com', '352523030073', 'Mitra', 'Aktif'),
(594, '3525032603780001', 'Abdul Basid', 'RT 005 RW 003', '[150] Panceng', 'Aparat Desa / Kelurahan', 'basidabdul006@gmail.com', '352522100091', 'Mitra', 'Aktif'),
(595, '3525034307010001', 'Elinda Sekar Pandayu', 'Jl. Sari Utomo', '[150] Panceng', 'Wiraswasta', 'elindasekar22@gmail.com', '352524100149', 'Mitra', 'Aktif'),
(596, '3525036806810001', 'Tri Setyowati', 'Desa Wotan RT/RW 10/04', '[150] Panceng', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'tristwt@gmail.com', '352522020211', 'Mitra', 'Aktif'),
(597, '3504015001850004', 'Siti Nurul Aimmah', 'Jl.Pangeran Diponegoro RT 007 RW 003', '[150] Panceng', 'Mengurus Rumah Tangga', 'invannura@gmail.com', '352523030129', 'Mitra', 'Aktif'),
(598, '3525035811000001', 'Findah Fahira', 'Jalan Olahraga RT 008 RW 002', '[150] Panceng', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'findahfahira@gmail.com', '352522020221', 'Mitra', 'Aktif'),
(599, '3525030511810003', 'Aspandi', 'RT. 02/ 01 Desa Surowiti', '[150] Panceng', 'Aparat Desa / Kelurahan', 'idnapsa@gmail.com', '352522090095', 'Mitra', 'Aktif'),
(600, '3525032003000003', 'Amirul Irham', 'Jalan Sawah RT 006 RW 003', '[150] Panceng', 'Pelatih Bulutangkis', 'Amirulirham96@gmail.com', '352522091228', 'Mitra', 'Aktif'),
(601, '3525035603990001', 'Laila Marisa Mufidiyah', 'RT 8 RW 1 Campurejo Panceng Gresik', '[150] Panceng', 'Belum Bekerja', 'marisa.mufidiyah@gmail.com', '352522100095', 'Mitra', 'Aktif'),
(602, '3525030103900001', 'Adi Setyo Utomo', 'RT 001 RW 001', '[150] Panceng', 'Aparat Desa / Kelurahan', 'adiesetyo6@gmail.com', '352522090991', 'Mitra', 'Aktif'),
(603, '3525034506860001', 'Imro\'Atul Hasanah', 'Lingk. Perseko RT 04 RW 05', '[150] Panceng', 'Mengurus Rumah Tangga', 'iim.hass86@gmail.com', '352522090942', 'Mitra', 'Aktif'),
(604, '3525037112950002', 'Faiqotul Wardah', 'Jalan Pasar Campurejo RT 7 RW 2 Campurejo Panceng', '[150] Panceng', 'Pegawai / Guru Honorer', 'faiqotulwardah07@gmail.com', '352522091124', 'Mitra', 'Aktif'),
(605, '3525035710990001', 'Infitah Kamaliyah', 'Jalan Pantura Dalegan RT 01/RW 06', '[150] Panceng', 'Guru Swasta', 'Infitahkamaliyah10@gmail.com', '352522090968', 'Mitra', 'Aktif'),
(606, '3525030706870005', 'Fidiyanto', 'Sumurber RT 012 RW 004', '[150] Panceng', 'Wiraswasta', 'fdie87@gmail.com', '352522020213', 'Mitra', 'Aktif'),
(607, '3525032105800001', 'Zainal Arifin', 'Jalan Kampung Baru RT. 18 RW. 06', '[150] Panceng', 'Aparat Desa / Kelurahan', 'zainalsyah80@gmail.com', '352522020215', 'Mitra', 'Aktif'),
(608, '3525032104850001', 'Supenan', 'Jl. Sendang Biru RT 005 RW 002', '[150] Panceng', 'Aparat Desa / Kelurahan', 'supenan12@gmail.com', '352522020209', 'Mitra', 'Aktif'),
(609, '3525031007830006', 'Nur Hudin', 'RT 001 RW 001', '[150] Panceng', 'Aparat Desa / Kelurahan', 'cudinphie6@gmail.com', '352522020219', 'Mitra', 'Aktif'),
(610, '3525035105800002', 'Fatayah', 'Lingk. Perseko RT 03 RW 05', '[150] Panceng', 'Guru Swasta', 'ayafatayah@gmail.com', '352522020212', 'Mitra', 'Aktif'),
(611, '3525036303940003', 'Halimatus Sa\'Diyah', 'RT 019 RW 006 Sumurber Panceng Gresik', '[150] Panceng', 'Wiraswasta', 'Hdiyah95@gmail.com', '352522090913', 'Mitra', 'Aktif'),
(612, '3525036511940002', 'Lizawati', 'Jalan Diponegoro RT 005 RW 002 Sumurber Panceng Gresik', '[150] Panceng', 'Mengurus Rumah Tangga', 'wiwinelvira97@gmail.com', '352522090698', 'Mitra', 'Aktif'),
(613, '3525035710900001', 'Mu\'Adlifah', 'RT 026 RW 08', '[150] Panceng', 'Mengurus Rumah Tangga', 'mbakmua280711@gmail.com', '352522090747', 'Mitra', 'Aktif'),
(614, '3525034209990003', 'Citra Nur Fatikhah', 'Jl Sendang Agung RW 1 RW 1', '[150] Panceng', 'Pegawai / Guru Honorer', 'citranur9992@gmail.com', '352522100078', 'Mitra', 'Aktif'),
(615, '3525035205970001', 'Ayu Rindayana Putri', 'Dusun Larangan RT 002 RW 010', '[150] Panceng', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'rindayanaputri@gmail.com', '352522091100', 'Mitra', 'Aktif'),
(616, '3525034810780003', 'Anita', 'Dusun Shoberoh RT 004 RW 009', '[150] Panceng', 'Mengurus Rumah Tangga', 'anitababyyanto@gmail.com', '352522091143', 'Mitra', 'Aktif'),
(617, '3525034207810001', 'Anik Irawati', 'Campurejo', '[150] Panceng', 'Wiraswasta', 'ainichananti@gmail.com', '352522091376', 'Mitra', 'Aktif'),
(618, '3525032806710001', 'Mudzakir', 'Lingk. Gelora RT 02 RW 03', '[150] Panceng', 'Wiraswasta', 'Nindyalesha0423@gmail.com', '352522091034', 'Mitra', 'Aktif'),
(619, '3525036008920001', 'Faizzatul Hamidah', 'Jalan Pasir Putih RT. 020 RW. 006', '[150] Panceng', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'fizhachaem@gmail.com', '352522091389', 'Mitra', 'Aktif'),
(620, '3525036308830001', 'Itaun Najabah', 'RT 008 RW 002 Campurejo Panceng Gresik', '[150] Panceng', 'Mengajar Di Sekolah Swasta', 'tatauna23@gmail.com', '352523020008', 'Mitra', 'Aktif'),
(621, '3525032704980001', 'Ilham Wahyudi Suryanullah', 'Dusun Wonorejo RT 3 RW 8', '[150] Panceng', 'Staff Dusun Wonorejo', 'wahyudiilham609@gmail.com', '352523110593', 'Mitra', 'Aktif'),
(622, '3525031909870003', 'Aris Syafarudin', 'Desa Prupuh RT 02 RW 01 Kec Panceng', '[150] Panceng', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'arissyafarudin99@gmail.com', '352524090001', 'Mitra', 'Aktif'),
(623, '3525035211020004', 'Febyana Jihan Nur Rohmah', 'Jl.Veteran RT.001/RW.001', '[150] Panceng', 'Mengurus Rumah Tangga', 'febyanajihann@gmail.com', '352524100070', 'Mitra', 'Aktif'),
(624, '3525034805840003', 'Titik Hidayati', 'RT 01 RW 01', '[150] Panceng', 'Pegawai / Guru Honorer', 'hidayahtitik84@gmail.com', '352524100068', 'Mitra', 'Aktif'),
(625, '3525034102800003', 'Mifta Ulfah', 'Lingk. Gelora RT 02 RW 03', '[150] Panceng', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'miftaulfah0102@gmail.com', '352523110614', 'Mitra', 'Aktif'),
(626, '3525035402000001', 'Rozanatul Muflihah', 'Jalan Sumur Tiban RT 05 RW 03 Desa Banyutengah Kecamatan Panceng Kabupaten Gresik', '[150] Panceng', 'Wiraswasta', 'rozanamuflihah@gmail.com', '352523110649', 'Mitra', 'Aktif'),
(627, '3525034101830003', 'Lathifah', 'Lingk. Gelora RT 04 RW 05', '[150] Panceng', 'Mengurus Rumah Tangga', 'Latifahtitis2@gmail.com', '352523110600', 'Mitra', 'Aktif'),
(628, '3525030303980001', 'Rif\'An', 'RT 006 RW 003', '[150] Panceng', 'Aparat Desa / Kelurahan', 'rifandmoeand@gmail.com', '352522090057', 'Mitra', 'Aktif'),
(629, '3525035108990002', 'Aditiya Thoibah', 'Jl. Sido Maju RT 06/ RW 03', '[150] Panceng', 'Pegawai / Guru Honorer', 'thoibah.aditiya@gmail.com', '352523030050', 'Mitra', 'Aktif'),
(630, '3525035909990002', 'Nalia Elidati Nuha', 'Jln. Raya Pandean RW 006 RT 011 Pantenan Panceng Gresik', '[150] Panceng', 'Belum Bekerja', 'nalianal571@gmail.com', '352523030106', 'Mitra', 'Aktif'),
(631, '3525035706020001', 'Rindiani', 'Jl.Kh.Wahid Hasyim RT/19 RW/06', '[150] Panceng', 'Mengurus Rumah Tangga', 'rindiprasetiyo89@gmail.com', '352523030076', 'Mitra', 'Aktif'),
(632, '3525032803800001', 'Zainul Arifin', 'RT.15 RW.05 Dusun Rejodadi Desa Campurejo', '[150] Panceng', 'Aparat Desa / Kelurahan', 'tiaragibran12@gmail.com', '352523030113', 'Mitra', 'Aktif'),
(633, '3525034207900002', 'Izawati', 'RT. 05 RW. 03', '[150] Panceng', 'Mengurus Rumah Tangga', 'ai.zawa54321@gmail.com', '352523030100', 'Mitra', 'Aktif'),
(634, '3525034211990001', 'Lathifah Nailil Hikmah', 'RT.06/RW.03 Desa Ketanen Panceng Gresik', '[150] Panceng', 'Belum Bekerja', 'naililwida@gmail.com', '352524100121', 'Mitra', 'Aktif'),
(635, '3525070108810001', 'Muhamad Ahyar Rosidi Alfuthuri', 'Bangsalsari RT02 RW02 Banyuurip Ujungpangkah Gresik', '[160] Ujungpangkah', 'Wiraswasta', 'Mohahyarrosidi@gmail.com', '352522020203', 'Mitra', 'Aktif'),
(636, '3525075310790002', 'Erni Oktavia', 'RT 01 RW 01', '[160] Ujungpangkah', 'Wiraswasta', 'oktavia1379@gmail.com', '352522091207', 'Mitra', 'Aktif'),
(637, '3525076107770001', 'Zakiyatin', 'Sumber Agung RT 02 RW 01', '[160] Ujungpangkah', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'zakiyatin07@gmail.com', '352522091177', 'Mitra', 'Aktif'),
(638, '3525074210750002', 'Alimatul Khomaroh', 'Dusun Krajan 1 RT 04 RW 01', '[160] Ujungpangkah', 'Mengurus Rumah Tangga', 'khomarohalimatul@gmail.com', '352522091160', 'Mitra', 'Aktif'),
(639, '3525071808900031', 'Ahmad Mahdi', 'Jl. Sidomulyo RT 01 RW 02', '[160] Ujungpangkah', 'Aparat Desa / Kelurahan', 'mahdi.indo90@gmail.com', '352522091203', 'Mitra', 'Aktif'),
(640, '3525074703770003', 'Iffatul Khisomah', 'Dusun Banyulegi RT02 RW06', '[160] Ujungpangkah', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'iffamuyasrofah@gmail.com', '352522091272', 'Mitra', 'Aktif'),
(641, '3525075011830005', 'Ana Rohmaniyah', 'Dusun Tajung Rejo RT 01 RW 14', '[160] Ujungpangkah', 'Mengurus Rumah Tangga', 'satriaramadhani248@gmail.com', '352522091235', 'Mitra', 'Aktif'),
(642, '3525075605950001', 'Elya Fu\'Aidah', 'Jl. Meria RT 01 RW 03', '[160] Ujungpangkah', 'Mengurus Rumah Tangga', 'elyafuaidah@gmail.com', '352523030063', 'Mitra', 'Aktif'),
(643, '3525076409840001', 'Siti Nur \'Aisyah', 'RT 003 RW 001', '[160] Ujungpangkah', 'Pegawai / Guru Honorer', 'aisyahsitinur962@gmail.com', '352523030143', 'Mitra', 'Aktif'),
(644, '3525077105800001', 'Widyawati', 'RT05 RW10 Dusun Druju', '[160] Ujungpangkah', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'wiwidwidyawati998@gmail.com', '352522090953', 'Mitra', 'Aktif'),
(645, '3525075603740002', 'Nurgiatin', 'RT01 RW03 Desa Sekapuk', '[160] Ujungpangkah', 'Mengurus Rumah Tangga', 'nurgiatin6@gmail.com', '352522090483', 'Mitra', 'Aktif'),
(646, '3525071212810001', 'Rohmatullah', 'RT 08 RW 05', '[160] Ujungpangkah', 'Aparat Desa / Kelurahan', 'pencenkrohmatillah@gmail.com', '352522091534', 'Mitra', 'Aktif'),
(647, '3525070102940001', 'Afkarul Mujaddidi', 'Jl. Kimogelung RT001 RW 003', '[160] Ujungpangkah', 'Wiraswasta', 'Afkarul01@gmail.com', '352522091538', 'Mitra', 'Aktif'),
(648, '3525070204980001', 'Memo Harisma Wahyu Gusti', 'Jl. Margo Utomo RT 01 RW 03', '[160] Ujungpangkah', 'Wiraswasta', 'harismemo655@gmail.com', '352522090805', 'Mitra', 'Aktif'),
(649, '3525074408920001', 'Warda Royyanah', 'Kauman Selatan RT 01 RW 04', '[160] Ujungpangkah', 'Mengurus Rumah Tangga', 'Ann34ever@gmail.com', '352522091138', 'Mitra', 'Aktif'),
(650, '3525074311870001', 'Siti Mahmudah', 'Sekapuk RT 001 RW 003', '[160] Ujungpangkah', 'Admin Pt.Sumber Murni Grup', 'Sitimahmudahhady87@gmail.com', '352522030028', 'Mitra', 'Aktif'),
(651, '3525070509010001', 'Muhammad Haris Nurdiansyah', 'Dusun Krajan 01 RT 002 RW 017', '[160] Ujungpangkah', 'Pelajar / Mahasiswa', 'dyan.mh18@gmail.com', '352522030020', 'Mitra', 'Aktif'),
(652, '3525071612900003', 'Faiqul Ishbahuddin', 'Jl. Sitarda RT.02 RW.17', '[160] Ujungpangkah', 'Wiraswasta', 'upslbdw@gmail.com', '352522020205', 'Mitra', 'Aktif'),
(653, '3525073103790001', 'Umar Alfaruq', 'Krajan 02 RT 01 RW 09', '[160] Ujungpangkah', 'Wiraswasta', 'ularsanca789@gmail.com', '352522020223', 'Mitra', 'Aktif'),
(654, '3525070406830004', 'Nur Syamsu Dluha', 'Dusun Tajungrejo RT 04 RW 12 Pangkahwetan', '[160] Ujungpangkah', 'Wiraswasta', 'syamsudluha83@gmail.com', '352522020202', 'Mitra', 'Aktif'),
(655, '3525072910800001', 'Ihya Udin', 'Dusun Krajan 01 RT 001 RW 005', '[160] Ujungpangkah', 'Wiraswasta', 'elsa.tour2020@gmail.com', '352522020218', 'Mitra', 'Aktif'),
(656, '3525071101820001', 'Muhammad Nuruddin', 'Dusun Krajan 1 RT.02 RW.17', '[160] Ujungpangkah', 'Guru Swasta', 'mathbasthen82@gmail.com', '352522020200', 'Mitra', 'Aktif'),
(657, '3525071503830001', 'Umar Suyuti', 'Meria RT 01 RW 03', '[160] Ujungpangkah', 'Wiraswasta', 'efbelover@gmail.com', '352522020201', 'Mitra', 'Aktif'),
(658, '3525072005970002', 'Arifan Rochim', 'Jalan Taruna RT 004 RW 002', '[160] Ujungpangkah', 'Wiraswasta', 'Ipangassrock@gmail.com', '352522020214', 'Mitra', 'Aktif'),
(659, '3525076703780001', 'Muridatus Sholihah', 'Dusun Tajung Rejo RT 04 RW 12', '[160] Ujungpangkah', 'Mengurus Rumah Tangga', 'Muridatus@gmail.com', '352522090675', 'Mitra', 'Aktif'),
(660, '3525071011980001', 'Ahmad Irfan Muzakki', 'Jalan Gang Buntu', '[160] Ujungpangkah', 'Wiraswasta', 'ahmadirfanmuzakki@gmail.com', '352522091109', 'Mitra', 'Aktif'),
(661, '3525075006840002', 'Uswatul Qoidah', 'Bangsalsari RT 02 RW 02', '[160] Ujungpangkah', 'Mengurus Rumah Tangga', 'zelinezakeisha480@gmail.com', '352522091127', 'Mitra', 'Aktif'),
(662, '3525075201830001', 'Mualifah', 'Sekapuk RT 01 RW 05', '[160] Ujungpangkah', 'Mengurus Rumah Tangga', 'pitekgoreng84@gmail.com', '352522091212', 'Mitra', 'Aktif'),
(663, '3525076003940003', 'Atik Choirotul Hidayah', 'Dusun Tajungrejo RT 001 RW 014', '[160] Ujungpangkah', 'Wiraswasta', 'atieck.gambaz@gmail.com', '352522091236', 'Mitra', 'Aktif'),
(664, '3525075502900001', 'Shofinatul Muli', 'Kramat Timur RT 001/RW 005', '[160] Ujungpangkah', 'Mengurus Rumah Tangga', 'azmiu571@gmail.com', '352522090963', 'Mitra', 'Aktif'),
(665, '3525076605810001', 'Roudloh', 'Kampung Randu Agung RT 003 RW 007', '[160] Ujungpangkah', 'Mengurus Rumah Tangga', 'roudhotul092@gmail.com', '352522090959', 'Mitra', 'Aktif'),
(666, '3525070511870003', 'Muhammad Rizal Firdi,Se', 'Tegal Sari', '[160] Ujungpangkah', 'Wiraswasta', 'sholihulaqmal9@gmail.com', '352522090983', 'Mitra', 'Aktif'),
(667, '3525071012820031', 'Imam Syaiful Huda', 'Gang Vi RT 002 RW 004', '[160] Ujungpangkah', 'Aparat Desa / Kelurahan', 'imamsyaifulhuda7@gmail.com', '352522090643', 'Mitra', 'Aktif'),
(668, '3525074308830001', 'Nur Rosyidah', 'Desa Gosari RT 002 RW 003', '[160] Ujungpangkah', 'Aparat Desa / Kelurahan', 'nurrosyidah21@gmail.com', '352522091537', 'Mitra', 'Aktif'),
(669, '3525074503010002', 'Fajriyah Irdina', 'Jln. Taruna RT/RW 004/002', '[160] Ujungpangkah', 'Pelajar / Mahasiswa', 'fajriyahirdina0503@gmail.com', '352523110325', 'Mitra', 'Aktif'),
(670, '3525075708780001', 'Dhokikah', 'Dusun Kaklak RT 003 RW 007', '[160] Ujungpangkah', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'dhokikah@gmail.com', '352523110002', 'Mitra', 'Aktif'),
(671, '3525075907840001', 'Farah Syaufikah', 'Dusun Sumber Suci RT 001 RW 015', '[160] Ujungpangkah', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'syaufikahfarah@gmail.com', '352523110326', 'Mitra', 'Aktif'),
(672, '3525071207890001', 'Ulul Azmi', 'Jl. Raya Kebonagung RT 003 RW 002 Kebonagung Ujungpangkah Gresik', '[160] Ujungpangkah', 'Petani', 'jagirulul212@gmail.com', '352523030173', 'Mitra', 'Aktif'),
(673, '3525075706820001', 'Fifin Nofarinah', 'Dusun Bondot RT 01 RW 09', '[160] Ujungpangkah', 'Kader Pkk / Karang Taruna / Kader Lainnya', 'bundafifin123@gmail.com', '352523110328', 'Mitra', 'Aktif'),
(674, '3525071908890003', 'Abdul Mujib', 'Jl. Sidokumpul RT 02 RW 02', '[160] Ujungpangkah', 'Wiraswasta', 'mujibartan@gmail.com', '352523030111', 'Mitra', 'Aktif'),
(675, '3525075810940001', 'Luthfiyah Mar\'Atus Sholihah', 'Jl. Mushollah Nurus Salam RW.7 RT.2 Cangaan Ujungpangkah Gresik', '[160] Ujungpangkah', 'Mengurus Rumah Tangga', 'luthfiyahalhusni@gmail.com', '352523030174', 'Mitra', 'Aktif'),
(676, '3525172501870003', 'Sanusi', 'Dsn. Dayasungai, RT. 01 RW. 02 Desa Sungairujing', '[170] Sangkapura', 'Wiraswasta', 'sanusi.bwn@gmail.com', '352522090298', 'Mitra', 'Aktif'),
(677, '3525176101950002', 'Ruslinawati', 'Dsn. Bungaran', '[170] Sangkapura', 'Wiraswasta', 'ruslinawati.sisulung95@gmail.com', '352522090295', 'Mitra', 'Aktif'),
(678, '3525176010750001', 'Andawati', 'Dusun Gunung-Gunung', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'andawatibadri@gmail.com', '352524100072', 'Mitra', 'Aktif'),
(679, '3525174806930018', 'Yuni Rozalia', 'Dusun Bangsal Desa Dekatagung', '[170] Sangkapura', 'Staf Desa', 'Rozaliayunis@gmail.com', '352522090378', 'Mitra', 'Aktif'),
(680, '3525171505770015', 'Muallifi', 'Dsn. Pulangasih RT 001 / RW 003', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'arsya3232@gmail.com', '352522090380', 'Mitra', 'Aktif'),
(681, '3525171612920002', 'Saiful', 'Dusun Serambah', '[170] Sangkapura', 'Pegawai / Guru Honorer', 'saifulfahmi091@gmail.com', '352522090416', 'Mitra', 'Aktif'),
(682, '3525176711890005', 'Faizah', 'Dusun Laoksawah', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'faizafaza36@gmail.com', '352522090346', 'Mitra', 'Aktif'),
(683, '3525170707970013', 'Nur Hazen', 'Dusun Tanjunganyar Muara', '[170] Sangkapura', 'Staff Aparat Desa', 'hzn.nur@gmail.com', '352522090334', 'Mitra', 'Aktif'),
(684, '3525174503960001', 'Indriyanti', 'Dsn. Pateken', '[170] Sangkapura', '-', 'indriyanti0396@gmail.com', '352522090317', 'Mitra', 'Aktif'),
(685, '3525172006830021', 'Abdullah Erfan', 'Dusun Baratsungai', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'abdullaherfanbaratsungai@gmail.com', '352522090330', 'Mitra', 'Aktif'),
(686, '3525175204920001', 'Aristiyani', 'Dusun Lebak Desa Lebak', '[170] Sangkapura', 'Pegawai / Guru Honorer', 'arisdewem@gmail.com', '352522090486', 'Mitra', 'Aktif'),
(687, '3525172810880002', 'Ahmad Dawam', 'Dusun Lebak', '[170] Sangkapura', 'Wiraswasta', 'Ahmaddawam05@gmail.com', '352522090345', 'Mitra', 'Aktif'),
(688, '3525174105840022', 'Rosita Fahmi', 'Dusun Sawah Luar', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'rositafahmi174@gmail.com', '352522090370', 'Mitra', 'Aktif'),
(689, '3525175004960002', 'Rahilatul Iftitah', 'Dsn. Daun Laut Desa Daun Kecamatan Sangkapura', '[170] Sangkapura', 'Guru Honorer', 'iilrahila@gmail.com', '352522090399', 'Mitra', 'Aktif'),
(690, '3525172506870002', 'Jangki Dausat', 'Dusun Daun Iliran', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'jangkidausat2506@gmail.com', '352522090343', 'Mitra', 'Aktif'),
(691, '3525171010780038', 'Abd. Fattah', 'Dusun Batusendi RT 06 RW 08', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'abdfatta2019@gmail.com', '352522020278', 'Mitra', 'Aktif'),
(692, '3525170704840004', 'Minfari', 'Dusun Bungaran RT.001 RW.007', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'mimfari.albaweani84@gmail.com', '352522020197', 'Mitra', 'Aktif'),
(693, '3525171710860013', 'Ahmadi', 'Dsn. Pamasaran RT003 RW002', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'ahmadiazmi0@gmail.com', '352522020267', 'Mitra', 'Aktif'),
(694, '3525170505750017', 'Sanusi', 'Dusun Duku RT01RW01', '[170] Sangkapura', 'Wiraswasta', 'sanuuci736@gmail.com', '352522020199', 'Mitra', 'Aktif'),
(695, '3525170509840001', 'Mohammad Sihabuddin', 'Dusun Kumalasa RT. 006 RW. 002', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'sihabuddin96@gmail.com', '352522020240', 'Mitra', 'Aktif'),
(696, '3525170402750016', 'Bunyamin', 'Dsn.Kumalasa Ds.Kumalasa Kec. Sangkapura Kab. Gresik', '[170] Sangkapura', 'Wiraswasta', 'bunyaminminu24@gmail.com', '352522090460', 'Mitra', 'Aktif'),
(697, '3525180907900001', 'Suhaimi', 'Dusun Batusendi', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'suhaimi.bhei@gmail.com', '352522090465', 'Mitra', 'Aktif'),
(698, '3525171203940013', 'Mohammad Hasibuan', 'Dsn. Batusendi RT 002 RW 008 Desa Sidogedungbatu', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'wawanmohammad14@gmail.com', '352522090481', 'Mitra', 'Aktif'),
(699, '3525170210840002', 'Imran', 'Dsn. Beringinan', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'imran.iim070909@gmail.com', '352523110585', 'Mitra', 'Aktif'),
(700, '3525172411990002', 'Junaidi', 'Dusun Sokela', '[170] Sangkapura', 'Wiraswasta', 'junaydd9@gmail.com', '352523110084', 'Mitra', 'Aktif'),
(701, '3525175706000003', 'Linda Aznida', 'Buluar Selatan', '[170] Sangkapura', 'Belum Bekerja', 'adammukhris174@gmail.com', '352523110820', 'Mitra', 'Aktif'),
(702, '3525172402700002', 'Munidam', 'Dusun Sumberagung RT. 02 RW. 02', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'nidammunidam@gmail.com', '352523030138', 'Mitra', 'Aktif'),
(703, '3525176212940012', 'Reni Syaukiyah', 'Dsn. Batusendi', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'renisyaukiyah@gmail.com', '352523030140', 'Mitra', 'Aktif'),
(704, '3525172011900001', 'Sanim', 'Dsn Menara Desa Gunungteguh', '[170] Sangkapura', 'Wiraswasta', 'sanimhuhhuh@gmail.com', '352523030158', 'Mitra', 'Aktif'),
(705, '3525175304990002', 'Firlana Izaty', 'Dusun Daun Barat, Desa Daun, Kecamatan Sangkapura', '[170] Sangkapura', 'Pegawai / Guru Honorer', 'firlanaizaty99@gmail.com', '352523030095', 'Mitra', 'Aktif'),
(706, '3525171612920003', 'Saifi', 'Dusun Serambah', '[170] Sangkapura', 'Pegawai / Guru Honorer', 'syaifadriyan@gmail.com', '352523030103', 'Mitra', 'Aktif'),
(707, '3525176501990001', 'Najiha', 'Dusun Daun Laut', '[170] Sangkapura', 'Pelajar / Mahasiswa', 'najiha012599@gmail.com', '352523030112', 'Mitra', 'Aktif'),
(708, '3525171604010001', 'Robytul Huda', 'Desa Gunung Teguh Dsn Teguh RT03RW01', '[170] Sangkapura', 'Petani', 'robymaskot01@gmail.com', '352524100087', 'Mitra', 'Aktif'),
(709, '3525171202960002', 'Abdul Majid Basmeleh', 'Dusun Kumalasa', '[170] Sangkapura', 'Wiraswasta', 'abdulmajidbasmeleh@gmail.com', '352524100093', 'Mitra', 'Aktif'),
(710, '3525174504910002', 'Sitti Aisyah', 'Dusun Disallam RT 001 RW 003', '[170] Sangkapura', 'Aparat Desa / Kelurahan', 'aisyah22iwan@gmail.com', '352524100170', 'Mitra', 'Aktif'),
(711, '3525175902930001', 'Nur Laili', 'Dsn. Bakung', '[170] Sangkapura', 'Wiraswasta', 'lailyeibooy@gmail.com', '352522090322', 'Mitra', 'Aktif'),
(712, '3525184407950001', 'Mashuda', 'Pajinggahan', '[180] Tambak', 'Mengurus Rumah Tangga', 'Mashuda.delisa@gmail.com', '352522090060', 'Mitra', 'Aktif'),
(713, '3578171612900002', 'Yazid Al Busthomi', 'Tajungan Timur RT/RW 006/003 Pekalongan Tambak', '[180] Tambak', 'Nelayan', 'yazidalbustomy05@gmail.com', '352522090412', 'Mitra', 'Aktif'),
(714, '3525185511880002', 'Nur Alvi Lail', 'Dsn Tambak Keramat Ds Tambak Kec Tambak', '[180] Tambak', 'Aparat Desa / Kelurahan', 'nuralvilail97@gmail.com', '352522090450', 'Mitra', 'Aktif'),
(715, '3525186202020001', 'Wahyuni Febriana Roza', 'Bawean Tambak', '[180] Tambak', 'Wiraswasta', 'Febiroza125@gmail.com', '352522090169', 'Mitra', 'Aktif'),
(716, '3525180611900004', 'Syamsuddin', 'Dusun Air Panas RT 003/ RW 001', '[180] Tambak', 'Aparat Desa / Kelurahan', 'shem90firdaus@gmail.com', '352522090513', 'Mitra', 'Aktif'),
(717, '3525180203000004', 'Rozi', 'Dsn. Telukjati', '[180] Tambak', 'Pelajar / Mahasiswa', 'rozimashari@gmail.com', '352522091382', 'Mitra', 'Aktif'),
(718, '3525182412820003', 'Abdul Ghofur', 'Dusun.Langaor', '[180] Tambak', 'Aparat Desa / Kelurahan', 'gofura681@gmail.com', '352522090220', 'Mitra', 'Aktif'),
(719, '3525185011930012', 'Rafizatus Shahirah', 'Dusun Tambak Timur Desa Tambak', '[180] Tambak', 'Wiraswasta', 'Fizraira@gmail.com', '352522090172', 'Mitra', 'Aktif'),
(720, '3525182512950014', 'Rasili', 'Dusun Legundi', '[180] Tambak', 'Pegawai / Guru Honorer', 'ibnubukhari53@gmail.com', '352522090375', 'Mitra', 'Aktif'),
(721, '3525182406840001', 'Apip', 'Jl. Dusun Gelam Selatan RT 08 RW 03', '[180] Tambak', 'Aparat Desa / Kelurahan', 'apipsaidi@gmail.com', '352522020191', 'Mitra', 'Aktif'),
(722, '3525181801820001', 'Busrah', 'Dusun Kepuhteluk RT. 001 RW. 001', '[180] Tambak', 'Aparat Desa / Kelurahan', 'busrahlana@gmail.com', '352522020155', 'Mitra', 'Aktif'),
(723, '3525184503900001', 'Raihanatul Jannah', 'Dsn Timur Sungai Ds Tanjungori Kec.Tambak Kab.Gresik', '[180] Tambak', 'Wiraswasta', 'bungasurga1990@gmail.com', '352522020189', 'Mitra', 'Aktif'),
(724, '3525184806010001', 'Masriyatun Arofah', 'Dsn Tanjung Ori RT 002/RW 002 Desa Tanjung Ori Kecamatan Tambak', '[180] Tambak', 'Usaha', 'Masriyatun.arofah@gmail.com', '352522091049', 'Mitra', 'Aktif'),
(725, '3509201706920002', 'Abdurrahman', 'Dsn. Air-Air', '[180] Tambak', 'Pegawai / Guru Honorer', 'rahmanboy112@gmail.com', '352523110770', 'Mitra', 'Aktif'),
(726, '3525180209890003', 'Sayyid Muhaddar', 'Desa Kepuh Teluk Dusun. Pasir Panjang Kec. Tambak Kab. Gresik', '[180] Tambak', 'Aparat Desa / Kelurahan', 'ayyiddarisma756@gmail.com', '352523110807', 'Mitra', 'Aktif'),
(727, '3525183011990001', 'Yusril Ihza', 'Dsn. Nangger RT.002 RW.002', '[180] Tambak', 'Aparat Desa / Kelurahan', 'yusrilihza961@gmail.com', '352522090062', 'Mitra', 'Aktif'),
(728, '3525182108990001', 'Nahli', 'Dsn. Gelam Tengah RT.007 RW.002 Ds. Gelam', '[180] Tambak', 'Pegawai / Guru Honorer', 'nahlimuhed@gmail.com', '352523030126', 'Mitra', 'Aktif'),
(729, '3525181212990002', 'Hidayatul Mubaraq', 'Dusun Rujing', '[180] Tambak', 'Guru Swasta', 'mubaraqhidayatul@gmail.com', '352523030116', 'Mitra', 'Aktif'),
(730, '3525181909980002', 'Mu\'Ammar Fikri', 'Dsn. Grejeg Selatan, RT: 001 RW: 001', '[180] Tambak', 'Pegawai / Guru Honorer', 'muammarfikri248@gmail.com', '352523030089', 'Mitra', 'Aktif'),
(731, '3525182911960001', 'Khairus Sholeh', 'Jalan Kelompang Gubug', '[180] Tambak', 'Petani', 'Khairusbawean@gmail.com', '352523030086', 'Mitra', 'Aktif'),
(732, '3525185609990002', 'Shohe Diya', 'Dsn.Dedawang', '[180] Tambak', 'Wiraswasta', 'Shohediyasamsul@gmail.com', '352523030081', 'Mitra', 'Aktif'),
(733, '3525181802020002', 'Mohammad Abrori', 'Bawean, Tambak, Timursungai, RT 2 RW 2', '[180] Tambak', 'Wiraswasta', 'mohammadabrori20@gmail.com', '352523030107', 'Mitra', 'Aktif'),
(734, '3525187112810013', 'Nur Yanti', 'Dan. Tanjungori, Des. Tanjungori, Kec. Tambak, Gresik', '[180] Tambak', 'Aparat Desa / Kelurahan', 'nancysyahraini234@gmail.com', '352524100092', 'Mitra', 'Aktif'),
(735, '3525022908850021', 'Hariyono', 'Banjarmlati', '[070] Balongpanggang', 'Aparat Desa / Kelurahan', 'abahhariono13@gmail.com', '352522090472', 'Mitra', 'Aktif'),
(736, '3525162006030002', 'Rifqi Wahyu Wardhana', 'Jl. Sindujoyo Xv/44', '[100] Gresik', 'Pelajar / Mahasiswa', 'rifqidana16@gmail.com', '352524100168', 'Mitra', 'Aktif'),
(737, '3525166807880001', 'Indriyani Rusmalasari', 'Jl. Kh. Zubair 39/ No. 1', '[100] Gresik', 'Pegawai / Guru Honorer', 'indriyanirusmalasari@gmail.com', '352525080023', 'Mitra', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `master_ppk`
--

CREATE TABLE `master_ppk` (
  `id` int NOT NULL,
  `nama_ppk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nip_ppk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_ppk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_ppk`
--

INSERT INTO `master_ppk` (`id`, `nama_ppk`, `nip_ppk`, `status_ppk`) VALUES
(1, 'Evie Dian Pratiwi, S.Si, ME', '198701092009022008', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `master_rincian_output`
--

CREATE TABLE `master_rincian_output` (
  `id` int NOT NULL,
  `rincian_output` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_rincian_output` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_rincian_output`
--

INSERT INTO `master_rincian_output` (`id`, `rincian_output`, `status_rincian_output`) VALUES
(1, 'Penyelenggaraan Sistem Statistik Nasional (2897.BDB.003)', 'Aktif'),
(2, 'Desiminasi Dan Metadata Statistik (2897.BMA.004)', 'Aktif'),
(3, 'Statistik Neraca Pengeluaran (2898.BMA.007)', 'Aktif'),
(4, 'Statistik Neraca Produksi (2899.BMA.006)', 'Aktif'),
(5, 'Metodologi Sensus dan Survei (2900.BMA.005)', 'Aktif'),
(6, 'Statistik Distribusi (2902.BMA.004)', 'Aktif'),
(7, 'Statistik Harga (2903.BMA.009)', 'Aktif'),
(8, 'STATISTIK INDUSTRI, PERTAMBANGAN DAN PENGGALIAN, ENERGI, DAN KONSTRUKSI (2904.BMA.006)', 'Aktif'),
(9, 'Sakernas (2905.BMA.004)', 'Aktif'),
(10, 'Sensus Penduduk (2905.QMA.006)', 'Aktif'),
(11, 'Susenas (2906.BMA.006)', 'Aktif'),
(12, 'Stat hansos (2907.BMA.006)', 'Aktif'),
(13, 'Podes (2907.BMA.008)', 'Aktif'),
(14, 'Stat. Jaspar (2908.BMA.004)', 'Aktif'),
(15, 'Stat Perikanan, peternakan dan kehutanan (2909.BMA.005)', 'Aktif'),
(16, 'Stat hortikultura dan perkebunan (2910.BMA.008)', 'Aktif'),
(17, 'Sensus Pertanian (2910.QMA.006)', 'Aktif'),
(18, 'Stat Tanaman Pangan (2910.QMA.007)', 'Aktif'),
(19, 'KSA (2910.QMA.010)', 'Aktif'),
(20, 'PA REGSOSEK 2022 (2907.QMA.006)', 'Aktif'),
(21, 'PMTB (2898.QMA.008)', 'Aktif'),
(22, 'Sensus Ekonomi 2026 (2902.QMA.006)', 'Aktif'),
(23, 'Statistik E-Commerce (2908.QMA.009)', 'Aktif'),
(24, 'SUPAS (2905.BMA.004)', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `master_satuan`
--

CREATE TABLE `master_satuan` (
  `id` int NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_satuan`
--

INSERT INTO `master_satuan` (`id`, `satuan`) VALUES
(1, 'Objek'),
(2, 'Perusahaan'),
(3, 'BS'),
(4, 'Ruta'),
(5, 'Responden'),
(6, 'Kunjungan'),
(7, 'Dokumen'),
(8, 'Kegiatan'),
(9, 'OJ'),
(10, 'Laporan'),
(11, 'Unit'),
(12, 'OB'),
(13, 'OK'),
(14, 'Segmen'),
(15, 'Desa/RT'),
(16, 'Dinas/instansi'),
(17, 'UTP'),
(18, 'Lembaga'),
(19, 'EA');

-- --------------------------------------------------------

--
-- Table structure for table `master_sbml`
--

CREATE TABLE `master_sbml` (
  `id` int NOT NULL,
  `sbml` int NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_sbml`
--

INSERT INTO `master_sbml` (`id`, `sbml`, `jabatan`) VALUES
(1, 4000000, 'Pencacahan Lapangan'),
(2, 3700000, 'Pengolahan'),
(3, 4000000, 'Pengawasan Lapangan');

-- --------------------------------------------------------

--
-- Table structure for table `master_survei`
--

CREATE TABLE `master_survei` (
  `id` int NOT NULL,
  `nama_survei` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_survei` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_rincian_output` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_survei`
--

INSERT INTO `master_survei` (`id`, `nama_survei`, `status_survei`, `id_rincian_output`) VALUES
(2, 'SKLNPT TRIWULANAN', 'Aktif', 3),
(3, 'SKSPPI', 'Aktif', 3),
(8, 'SKTNP BARANG TW', 'Aktif', 4),
(9, 'SKTNP JASA TW', 'Aktif', 4),
(10, 'SKNP', 'Aktif', 4),
(16, 'STKU/SURVEI POLA USAHA NON PERTANIAN', 'Aktif', 6),
(21, 'Survei Harga Produsen Perdesaan (HD)', 'Aktif', 7),
(22, 'Survei Harga Konsumen Perdesaan (HKD)', 'Aktif', 7),
(23, 'SHPB BULANAN', 'Aktif', 7),
(24, 'SHPB MINGGUAN', 'Aktif', 7),
(25, 'SHP', 'Aktif', 7),
(26, 'SHKK', 'Aktif', 7),
(29, 'VREST UMB', 'Aktif', 14),
(30, 'VREST UMK', 'Aktif', 14),
(31, 'VHTS', 'Aktif', 14),
(32, 'VHTL', 'Aktif', 14),
(37, 'SLK SKP', 'Aktif', 14),
(42, 'IBS BULANAN', 'Aktif', 8),
(45, 'KONSTRUKSI TAHUNAN', 'Aktif', 8),
(46, 'KONSTRUKSI TRIWULANAN', 'Aktif', 8),
(47, 'CAPTIVE POWER', 'Aktif', 8),
(49, 'PERUSAHAAN PENGGALIAN', 'Aktif', 8),
(51, 'MIGAS', 'Aktif', 8),
(57, 'LPTB - Laporan Pemotongan Ternak Bulanan', 'Aktif', 15),
(59, 'TPI/PPI', 'Aktif', 15),
(62, 'Ubinan PALAWIJA', 'Aktif', 18),
(63, 'UBINAN PADI', 'Aktif', 18),
(65, 'KSA JAGUNG', 'Aktif', 19),
(66, 'KSA PADI', 'Aktif', 19),
(67, 'Wilkerstat', 'Aktif', 22),
(68, 'PEMUTAKHIRAN SAKERNAS', 'Aktif', 9),
(70, 'PEMUTAKHIRAN SUSENAS', 'Aktif', 11),
(72, 'PODES', 'Aktif', 13),
(73, 'Updating DPP', 'Aktif', 16),
(74, 'SHP T', 'Aktif', 7),
(76, 'PENCACAHAN UDP', 'Aktif', 8),
(83, 'VDTW', 'Aktif', 14),
(87, 'PENCACAHAN SERUTI', 'Aktif', 11),
(90, 'KONSTRUKSI PERORANGAN', 'Aktif', 8),
(100, 'SKP', 'Aktif', 15),
(103, 'SHK 1.1 Pasar', 'Aktif', 7),
(104, 'SHK 1.1 Outlet', 'Aktif', 7),
(105, 'SHK 1.2 Pasar', 'Aktif', 7),
(106, 'SHK 2.1 Pasar', 'Aktif', 7),
(107, 'SHK 2.1 Outlet', 'Aktif', 7),
(108, 'SHK 2.2 Pasar', 'Aktif', 7),
(109, 'SHK 2.2 Outlet', 'Aktif', 7),
(110, 'SHK 3 Pasar', 'Aktif', 7),
(111, 'SHK 3 Outlet', 'Aktif', 7),
(112, 'SHK 4', 'Aktif', 7),
(113, 'SHK 5', 'Aktif', 7),
(114, 'SHK 6', 'Aktif', 7),
(116, 'LTB (LAPORAN TAHUNAN PERUSAHAAN BUDIDAYA IKAN)', 'Aktif', 15),
(117, 'Updating Direktori Usaha Jasa Pariwisata', 'Aktif', 14),
(118, 'Updating Ubinan Palawija', 'Aktif', 18),
(119, 'Pemutakhiran Direktori Perusahaan Awal (DPA)', 'Aktif', 8),
(120, 'Survei Tahunan Perusahaan Industri Manufaktur (STPIM)', 'Aktif', 8),
(121, 'Survei Komoditas Perusahaan Industri Manufaktur (SKIM)', 'Aktif', 8),
(122, 'GALIAN URT', 'Aktif', 8),
(125, 'IMK Tahunan', 'Aktif', 8),
(131, 'SVPEB', 'Aktif', 7),
(133, 'IMK TRIWULANAN', 'Aktif', 8),
(134, 'SVK', 'Aktif', 7),
(135, 'GALIAN TRIWULANAN', 'Aktif', 8),
(136, 'Identifikasi Komoditas Utama SHP', 'Aktif', 7),
(137, 'pendataan lapangan survei perusahaan peternakan tahunan (LTU)', 'Aktif', 15),
(141, 'VP-HORTI (SURVEI PERUSAHAAN HORTIKULTURA)', 'Aktif', 16),
(142, 'VN-HORTI (SURVEI USAHA HORTIKULTURA LAINNYA)', 'Aktif', 16),
(143, 'TSL (SURVEI PERUSAHAAN KEHUTANAN)', 'Aktif', 15),
(144, 'SKB (SURVEI PERUSAHAAN PERKEBUNAN TAHUNAN)', 'Aktif', 16),
(145, 'Survei Pola Usaha Non Pertanian (SPUNP)', 'Aktif', 6),
(146, 'SUPAS', 'Aktif', 24),
(147, 'Survei Pergudangan dan Kurir', 'Aktif', 6),
(148, 'Survei Perdagangan Barang Domestik', 'Aktif', 6),
(149, 'Survei E Commerce', 'Aktif', 23),
(150, 'Survei Pola Distribusi Perdagangan', 'Aktif', 6),
(152, 'SKGB-Kering', 'Aktif', 18),
(153, 'SKGB-Giling', 'Aktif', 18),
(154, 'Survei Konsumsi Bahan Pokok Non Rumah Tangga', 'Aktif', 14),
(156, 'SHK 1.2 Outlet', 'Aktif', 7),
(157, 'SHP J', 'Aktif', 7),
(158, 'IBS TRIWULANAN', 'Aktif', 8),
(161, 'Survei Pendukung PDRB Triwulanan Pengeluaran', 'Aktif', 3),
(162, 'Survei Pendukung PDRB Triwulanan Lapangan Usaha', 'Aktif', 4),
(163, 'PENCACAHAN SUSENAS', 'Aktif', 11),
(164, 'INDA SUSENAS', 'Aktif', 11),
(165, 'INDA SAKERNAS', 'Aktif', 9),
(166, 'PENGOLAHAN PEMUTAKHIRAN SUSENAS', 'Aktif', 11),
(167, 'PENGOLAHAN SUSENAS', 'Aktif', 11),
(168, 'PENGOLAHAN SERUTI', 'Aktif', 11),
(169, 'Pendataan Lapangan Survei Usaha Ternak Besar dan Kecil (LTT)', 'Aktif', 15),
(170, 'PENCACAHAN SAKERNAS', 'Aktif', 9),
(171, 'Pengolahan Survei Harga Konsumen Perdesaan (HKD)', 'Aktif', 7),
(172, 'Pengolahan  Survei Harga Produsen Perdesaan (HD)', 'Aktif', 7),
(173, 'Pengolahan Survei Harga Produsen Identifikasi Komoditas Utama', 'Aktif', 7),
(174, 'Pengolahan Survei Harga Produsen Sektor Industri Pengolahan dan Sektor Pertambangan dan Penggalian (HP)', 'Aktif', 7),
(175, 'Pengolahan Survei Harga Produsen Sektor Jasa Gas (HPJ)', 'Aktif', 7),
(176, 'Pengolahan Survei Harga Produsen Sektor Pertanian (HPT)', 'Aktif', 7),
(177, 'INDA PELATIHAN HARGA', 'Aktif', 7),
(178, 'GROUNDCHECK PBI (SUSENAS)', 'Aktif', 11),
(179, 'GROUNDCHECK PBI (SAKERNAS)', 'Aktif', 9),
(180, 'Pengutipan Direktori Perusahaan Konstruksi', 'Aktif', 8),
(181, 'Updating Direktori Pertambangan Energi (UDPE)', 'Aktif', 8),
(182, 'Survei Pola Usaha Non Pertanian', 'Aktif', 6),
(183, 'LISTING VREST', 'Aktif', 14),
(184, 'INDA PELATIHAN SURVEI BIDANG JASA PARIWISATA', 'Aktif', 14),
(185, 'INDA PELATIHAN INPEK', 'Aktif', 8);

-- --------------------------------------------------------

--
-- Table structure for table `master_tim`
--

CREATE TABLE `master_tim` (
  `id` int NOT NULL,
  `nama_tim` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status_tim` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_tim`
--

INSERT INTO `master_tim` (`id`, `nama_tim`, `status_tim`) VALUES
(1, 'Umum', 'Aktif'),
(2, 'Humas, Pojok Statistik dan SDI', 'Aktif'),
(3, 'Statistik Sosial', 'Aktif'),
(4, 'Produksi, Pertanian, Industri dan PEK', 'Aktif'),
(5, 'Distribusi dan Jasa', 'Aktif'),
(6, 'Statistik Harga	', 'Aktif'),
(7, 'Neraca Produksi dan Konsumsi, Analisis', 'Aktif'),
(8, 'Sakip, ZI dan EPPS', 'Aktif'),
(9, 'Tim Integrasi Pengolahan dan Diseminasi Statistik', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `matrik_honor`
--

CREATE TABLE `matrik_honor` (
  `id` int NOT NULL,
  `id_tim` int NOT NULL,
  `id_rincian_output` int NOT NULL,
  `id_nama_survei` int NOT NULL,
  `uraian_kegiatan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_bulan_pelaksanaan` int NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jangka_waktu` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cek_double` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `no_surat_spk` int NOT NULL,
  `no_surat_bast` int NOT NULL,
  `create_by` int NOT NULL,
  `create_at` date NOT NULL,
  `harga_satuan_honor` int NOT NULL,
  `status_pengajuan_honor` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matrik_honor`
--

INSERT INTO `matrik_honor` (`id`, `id_tim`, `id_rincian_output`, `id_nama_survei`, `uraian_kegiatan`, `id_bulan_pelaksanaan`, `tahun`, `jangka_waktu`, `cek_double`, `no_surat_spk`, `no_surat_bast`, `create_by`, `create_at`, `harga_satuan_honor`, `status_pengajuan_honor`) VALUES
(63, 3, 11, 70, 'Pemutakhiran Susenas Maret 2026', 1, '2026', '21-27 Januari 2026', '7012026', 0, 0, 24, '2026-01-09', 174000, 'Belum'),
(66, 7, 4, 9, 'Pencacahan SKTNP Jasa 2026 Tahap 1', 1, '2026', '1-20 Januari 2026', '912026', 0, 0, 27, '2026-01-23', 66000, 'Final'),
(67, 7, 4, 8, 'Pencacahan SKTNP Barang 2026 Tahap 1', 1, '2026', '1-20 Januari 2026', '812026', 0, 0, 27, '2026-01-23', 66000, 'Final'),
(69, 3, 9, 68, 'Pemutakhiran Sakernas Februari 2026', 1, '2026', '23 - 31 Januari 2026', '6812026', 0, 0, 24, '2026-01-27', 174000, 'Belum'),
(70, 3, 9, 68, 'Pemutakhiran Sakernas Februari 2026', 2, '2026', '01 - 04 Februari 2026', '6822026', 0, 0, 24, '2026-01-27', 174000, 'Final'),
(71, 4, 19, 66, 'Pencacahan KSA Padi', 1, '2026', '25-31 Januari 2026', '6612026', 0, 0, 19, '2026-01-28', 110000, 'Final'),
(72, 4, 19, 65, 'Pencacahan KSA Jagung', 1, '2026', '25-31 Januari 2026', '6512026', 0, 0, 19, '2026-01-28', 56000, 'Final'),
(73, 4, 15, 57, 'Pencacahan LPTB (Laporan Pemotongan Ternak Bulanan) Januari 2026', 1, '2026', '01 - 07 Januari 2026', '5712026', 0, 0, 19, '2026-01-28', 57000, 'Final'),
(74, 4, 15, 59, 'Pencacahan PP-TPI Triwulan IV 2025', 1, '2026', '01-15 Januari 2026', '5912026', 0, 0, 19, '2026-01-28', 53000, 'Final'),
(75, 4, 8, 135, 'Pencacahan Penggalian BH Triwulanan', 1, '2026', '1-31 Januari 2026', '13512025', 0, 0, 19, '2026-01-29', 66000, 'Final'),
(76, 4, 8, 133, 'Pencacahan Survei IMK Triwulanan 2025 Triwulan 4', 1, '2026', '1-10 Januari 2026', '13312026', 0, 0, 19, '2026-01-29', 53000, 'Final'),
(77, 6, 14, 31, 'Pencacahan VHTS', 1, '2026', '01-31 Januari 2026', '3112026', 0, 0, 18, '2026-01-29', 66000, 'Final'),
(78, 6, 7, 103, 'Pencacahan SHK 1.1 Pasar', 1, '2026', '01-31 Januari 2026', '10312026', 0, 0, 18, '2026-01-29', 45000, 'Final'),
(79, 6, 7, 104, 'Pencacahan SHK 1.1 Outlet', 1, '2026', '01-31 Januari 2026', '10412026', 0, 0, 18, '2026-01-29', 21000, 'Final'),
(81, 6, 7, 105, 'Pencacahan SHK 1.2 Pasar', 1, '2026', '01-31 Januari 2026', '10512026', 0, 0, 18, '2026-01-29', 87000, 'Final'),
(82, 6, 7, 107, 'Pencacahan SHK 2.1 Outlet', 1, '2026', '01-31 Januari 2026', '10712026', 0, 0, 18, '2026-01-29', 21000, 'Final'),
(83, 6, 7, 106, 'Pencacahan SHK 2.1 Pasar', 1, '2026', '01-31 Januari 2026', '10612026', 0, 0, 18, '2026-01-29', 87000, 'Final'),
(84, 6, 7, 109, 'Pencacahan SHK 2.2 Outlet', 1, '2026', '01-31 Januari 2026', '10912026', 0, 0, 18, '2026-01-29', 24000, 'Final'),
(85, 6, 7, 108, 'Pencacahan SHK 2.2 Pasar', 1, '2026', '01-31 Januari 2026', '10812026', 0, 0, 18, '2026-01-29', 92000, 'Final'),
(86, 6, 7, 111, 'Pencacahan SHK 3 Outlet', 1, '2026', '01-31 Januari 2026', '11112026', 0, 0, 18, '2026-01-29', 20000, 'Final'),
(87, 6, 7, 110, 'Pencacahan SHK 3 Pasar', 1, '2026', '01-31 Januari 2026', '11012026', 0, 0, 18, '2026-01-29', 49000, 'Final'),
(88, 6, 7, 112, 'Pencacahan SHK 4', 1, '2026', '01-31 Januari 2026', '11212026', 0, 0, 18, '2026-01-29', 48000, 'Final'),
(89, 6, 7, 113, 'Pencacahan SHK 5', 1, '2026', '01-31 Januari 2026', '11312026', 0, 0, 18, '2026-01-29', 48000, 'Final'),
(90, 6, 7, 114, 'Pencacahan SHK 6', 1, '2026', '01-31 Januari 2026', '11412026', 0, 0, 18, '2026-01-29', 48000, 'Final'),
(91, 6, 7, 26, 'Pencacahan SHKK', 1, '2026', '01-31 Januari 2026', '2612026', 0, 0, 18, '2026-01-29', 57000, 'Final'),
(92, 4, 8, 46, 'Pencacahan Survei Perusahaan Konstruksi Triwulanan', 1, '2026', '1-31 Januari 2026', '4612026', 0, 0, 19, '2026-01-29', 66000, 'Final'),
(93, 6, 7, 24, 'Pencacahan SHPB Mingguan', 1, '2026', '01-31 Januari 2026', '2412026', 0, 0, 18, '2026-01-29', 48000, 'Final'),
(94, 6, 7, 23, 'Pencacahan SHPB Bulanan', 1, '2026', '01-31 Januari 2026', '2312026', 0, 0, 18, '2026-01-29', 48000, 'Final'),
(95, 6, 7, 22, 'Pencacahan Survei HKD', 1, '2026', '01-31 Januari 2026', '2212026', 0, 0, 18, '2026-01-29', 64000, 'Final'),
(96, 6, 7, 21, 'Pencacahan Survei HD', 1, '2026', '01-31 Januari 2026', '2112026', 0, 0, 18, '2026-01-29', 53000, 'Final'),
(98, 4, 8, 158, 'Pencacahan Survei IBS Triwulan IV Tahun 2025', 1, '2026', '1-31 Januari 2026', '15812026', 0, 0, 19, '2026-02-02', 75000, 'Final'),
(99, 9, 11, 166, 'Pengolahan Pemutakhiran Susenas Maret 2026', 1, '2026', '28-30 Januari 2026', '16612026', 0, 0, 30, '2026-02-05', 35000, 'Final'),
(100, 4, 18, 63, 'Pencacahan Ubinan Padi Subround I', 1, '2026', '01-31 Januari 2026', '6312026', 0, 0, 19, '2026-02-05', 81000, 'Final'),
(101, 4, 18, 62, 'Pencacahan Ubinan Palawija Subround I', 1, '2026', '01-31 Januari 2026', '6212026', 0, 0, 19, '2026-02-05', 81000, 'Final'),
(102, 4, 18, 63, 'Pencacahan Ubinan Padi Subround I', 2, '2026', '01-28 Februari 2026', '6322026', 0, 0, 19, '2026-02-05', 81000, 'Final'),
(103, 4, 18, 62, 'Pencacahan Ubinan Palawija Subround I', 2, '2026', '01-28 Februari 2026', '6222026', 0, 0, 19, '2026-02-05', 81000, 'Final'),
(104, 4, 15, 116, 'Pencacahan LTB Laporan Tahunan Budidaya Ikan', 2, '2026', '01-28 Februari 2026', '11622026', 0, 0, 19, '2026-02-05', 75000, 'Final'),
(105, 4, 15, 137, 'Pencacahan Perusahaan Peternakan Unggas Tahunan', 2, '2026', '01-28 Februari 2026', '13722026', 0, 0, 19, '2026-02-05', 66000, 'Final'),
(106, 4, 15, 169, 'Pencacahan Perusahaan Peternakan Besar dan Kecil (LTT) Tahunan', 2, '2026', '01-28 Februari 2026', '16922026', 0, 0, 19, '2026-02-05', 66000, 'Final'),
(107, 4, 15, 57, 'Pencacahan Laporan Pemotongan Ternak Bulanan', 2, '2026', '01-07 Februari 2026', '5722026', 0, 0, 19, '2026-02-05', 57000, 'Final'),
(108, 4, 19, 66, 'Pencacahan KSA Padi Februari', 2, '2026', '22-28 Februari 2026', '6622026', 0, 0, 19, '2026-02-05', 110000, 'Final'),
(109, 4, 19, 65, 'Pencacahan KSA Jagung Februari', 2, '2026', '22-28 Februari 2026', '6522026', 0, 0, 19, '2026-02-05', 56000, 'Final'),
(115, 6, 7, 104, 'Pencacahan SHK 1.1 Outlet', 2, '2026', '1-28 Februari 2026', '10422026', 0, 0, 18, '2026-02-10', 21000, 'Final'),
(116, 6, 7, 103, 'Pencacahan SHK 1.1 Pasar', 2, '2026', '1-28 Februari 2026', '10322026', 0, 0, 18, '2026-02-10', 45000, 'Final'),
(117, 6, 7, 105, 'Pencacahan SHK 1.2 Pasar', 2, '2026', '1-28 Februari 2026', '10522026', 0, 0, 18, '2026-02-10', 53000, 'Final'),
(118, 6, 7, 107, 'Pencacahan SHK 2.1 Outlet', 2, '2026', '1-28 Februari 2026', '10722026', 0, 0, 18, '2026-02-10', 21000, 'Final'),
(119, 6, 7, 106, 'Pencacahan SHK 2.1 Pasar', 2, '2026', '1-28 Februari 2026', '10622026', 0, 0, 18, '2026-02-10', 87000, 'Final'),
(120, 6, 7, 109, 'Pencacahan SHK 2.2 Outlet', 2, '2026', '1-28 Februari 2026', '10922026', 0, 0, 18, '2026-02-10', 24000, 'Final'),
(121, 6, 7, 108, 'Pencacahan SHK 2.2 Pasar', 2, '2026', '1-28 Februari 2026', '10822026', 0, 0, 18, '2026-02-10', 92000, 'Final'),
(122, 6, 7, 111, 'Pencacahan SHK 3 Outlet', 2, '2026', '1-28 Februari 2026', '11122026', 0, 0, 18, '2026-02-10', 20000, 'Final'),
(123, 6, 7, 110, 'Pencacahan SHK 3 Pasar', 2, '2026', '1-28 Februari 2026', '11022026', 0, 0, 18, '2026-02-10', 49000, 'Final'),
(124, 6, 7, 112, 'Pencacahan SHK 4', 2, '2026', '1-28 Februari 2026', '11222026', 0, 0, 18, '2026-02-10', 48000, 'Final'),
(125, 6, 7, 113, 'Pencacahan SHK 5', 2, '2026', '1-28 Februari 2026', '11322026', 0, 0, 18, '2026-02-10', 48000, 'Final'),
(126, 6, 7, 114, '	Pencacahan SHK 6', 2, '2026', '1-28 Februari 2026', '11422026', 0, 0, 18, '2026-02-10', 48000, 'Final'),
(127, 9, 11, 167, 'Pengolahan Dokumen Sampel Susenas Maret 2026', 2, '2026', '5 Februari - 11 Maret 2026', '16722026', 0, 0, 30, '2026-02-10', 26000, 'Belum'),
(128, 9, 11, 168, 'Pengolahan Dokumen Sampel Seruti Triwulan I 2026', 2, '2026', '5 Februari - 11 Maret 2026', '16822026', 0, 0, 30, '2026-02-10', 18000, 'Final'),
(129, 6, 7, 24, 'Pencacahan SHPB Mingguan', 2, '2026', '1-28 Februari 2026', '2422026', 0, 0, 18, '2026-02-10', 48000, 'Final'),
(130, 3, 11, 163, 'Pencacahan Lapangan Responden Susenas Maret 2026', 2, '2026', '01 - 25 Februari 2025', '16322026', 0, 0, 24, '2026-02-10', 129000, 'Final'),
(131, 3, 11, 87, 'Pencacahan Lapangan Responden Seruti Terintegrasi Susenas Triwulan I 2026', 2, '2026', '01 - 25 Februari 2025', '8722026', 0, 0, 24, '2026-02-10', 87000, 'Final'),
(132, 3, 9, 170, 'Pencacahan Lapangan Responden Sakernas Februari 2026', 2, '2026', '01 - 28 Februari 2025', '17022026', 0, 0, 24, '2026-02-10', 55000, 'Final'),
(133, 6, 7, 23, 'Pencacahan SHPB Bulanan', 2, '2026', '1-28 Februari 2026', '2322026', 0, 0, 18, '2026-02-13', 48000, 'Final'),
(134, 6, 7, 22, 'Pencacahan Survei HKD', 2, '2026', '1-28 Februari 2026', '2222026', 0, 0, 18, '2026-02-13', 64000, 'Final'),
(135, 6, 7, 21, 'Pencacahan Survei HD', 2, '2026', '1-28 Februari 2026', '2122026', 0, 0, 18, '2026-02-13', 53000, 'Final'),
(136, 6, 7, 171, 'Pengolahan Survei HKD', 2, '2026', '1-28 Februari 2026', '17122026', 0, 0, 18, '2026-02-19', 13000, 'Final'),
(137, 6, 7, 172, 'Pengolahan Survei HD', 2, '2026', '1-28 Februari 2026', '17222026', 0, 0, 18, '2026-02-19', 11000, 'Final'),
(138, 6, 7, 136, 'Pencacahan Suplemen Komoditas Utama SHP', 2, '2026', '1-28 Februari 2026', '13622026', 0, 0, 18, '2026-02-19', 48000, 'Final'),
(139, 6, 7, 25, 'Pencacahan SHP Sektor Industri Pengolahan, Pertambangan, dan Penggalian (HP)', 2, '2026', '1-28 Februari 2026', '2522026', 0, 0, 18, '2026-02-19', 48000, 'Final'),
(140, 6, 7, 157, 'Pencacahan SHP Sektor Jasa (HPJ)', 2, '2026', '1-28 Februari 2026', '15722026', 0, 0, 18, '2026-02-19', 48000, 'Final'),
(141, 6, 7, 74, 'Pencacahan SHP Sektor Pertanian (HPT)', 2, '2026', '1-28 Februari 2026', '7422026', 0, 0, 18, '2026-02-19', 53000, 'Final'),
(142, 6, 14, 31, 'Pencacahan VHTS', 2, '2026', '1-20 Februari 2026', '3132026', 0, 0, 18, '2026-02-20', 66000, 'Final'),
(143, 6, 7, 136, 'Pencacahan Suplemen Komoditas Utama SHP', 3, '2026', '1-31 Maret 2026', '13632026', 0, 0, 18, '2026-03-04', 48000, 'Final'),
(144, 6, 7, 172, 'Pengolahan Survei HD', 3, '2026', '1-31 Maret 2026', '17232026', 0, 0, 18, '2026-03-04', 11000, 'Final'),
(145, 6, 7, 171, 'Pengolahan Survei HKD', 3, '2026', '1-31 Maret 2026', '17132026', 0, 0, 18, '2026-03-04', 13000, 'Final'),
(146, 6, 7, 173, 'Pengolahan Suplemen SHP', 3, '2026', '1-31 Maret 2026', '17332026', 0, 0, 18, '2026-03-04', 10000, 'Final'),
(147, 6, 7, 174, 'Pengolahan Survei HP-S', 3, '2026', '1-31 Maret 2026', '17432026', 0, 0, 18, '2026-03-04', 10000, 'Final'),
(148, 6, 7, 175, 'Pengolahan Survei HP-J', 3, '2026', '1-31 Maret 2026', '17532026', 0, 0, 18, '2026-03-04', 10000, 'Final'),
(149, 6, 7, 176, 'Pengolahan Survei HP-T', 3, '2026', '1-31 Maret 2026', '17632026', 0, 0, 18, '2026-03-04', 11000, 'Final'),
(150, 6, 7, 25, 'Pencacahan SHP Sektor Industri Pengolahan, Pertambangan, dan Penggalian (HP)', 3, '2026', '1-31 Maret 2026', '2532026', 0, 0, 18, '2026-03-04', 48000, 'Final'),
(151, 6, 7, 157, 'Pencaca SHP Sektor Jasa', 3, '2026', '1-31 Maret 2026', '15732026', 0, 0, 18, '2026-03-04', 48000, 'Final'),
(152, 6, 7, 74, 'Pencacahan SHP Sektor Pertanian (HPT)', 3, '2026', '1-31 Maret 2026', '7432026', 0, 0, 18, '2026-03-04', 53000, 'Final'),
(153, 6, 7, 23, 'Pencacahan SHPB Bulanan', 3, '2026', '1-31 Maret 2026', '2332026', 0, 0, 18, '2026-03-04', 64000, 'Final'),
(154, 6, 7, 24, 'Pencacahan SHPB Mingguan', 3, '2026', '1-31 Maret 2026', '2432026', 0, 0, 18, '2026-03-04', 48000, 'Final'),
(155, 6, 7, 22, 'Pencacahan HKD', 3, '2026', '1-31 Maret 2026', '2232026', 0, 0, 18, '2026-03-04', 64000, 'Final'),
(156, 6, 7, 21, 'Pencacahan Survei HD', 3, '2026', '1-31 Maret 2026', '2132026', 0, 0, 18, '2026-03-04', 53000, 'Final'),
(157, 6, 7, 104, 'Pencacahan HK 1.1 Outlet', 3, '2026', '1-31 Maret 2026', '10432026', 0, 0, 18, '2026-03-04', 21000, 'Final'),
(158, 6, 7, 103, 'Pencacahan HK 1.1 Pasar', 3, '2026', '1-31 Maret 2026', '10332026', 0, 0, 18, '2026-03-04', 45000, 'Final'),
(159, 6, 7, 105, 'Pencacahan HK 1.2 Pasar', 3, '2026', '1-31 Maret 2026', '10532026', 0, 0, 18, '2026-03-04', 53000, 'Final'),
(160, 6, 7, 107, 'Pencacahan HK 2.1 Outlet', 3, '2026', '1-31 Maret 2026', '10732026', 0, 0, 18, '2026-03-04', 21000, 'Final'),
(161, 6, 7, 106, 'Pencacahan HK 2.1 Pasar', 3, '2026', '1-31 Maret 2026', '10632026', 0, 0, 18, '2026-03-04', 87000, 'Final'),
(162, 6, 7, 109, 'Pencacahan HK 2.2 Outlet', 3, '2026', '1-31 Maret 2026', '10932026', 0, 0, 18, '2026-03-04', 24000, 'Final'),
(163, 6, 7, 108, 'Pencacahan HK 2.2 Pasar', 3, '2026', '1-31 Maret 2026', '10832026', 0, 0, 18, '2026-03-04', 92000, 'Final'),
(164, 6, 7, 111, 'Pencacahan HK 3 Outlet', 3, '2026', '1-31 Maret 2026', '11132026', 0, 0, 18, '2026-03-04', 20000, 'Final'),
(165, 6, 7, 112, 'Pencacahan HK 4', 3, '2026', '1-31 Maret 2026', '11232026', 0, 0, 18, '2026-03-04', 48000, 'Final'),
(166, 6, 7, 113, 'Pencacahan HK 5', 3, '2026', '1-31 Maret 2026', '11332026', 0, 0, 18, '2026-03-04', 48000, 'Final'),
(167, 6, 7, 114, 'Pencacahan HK 6', 3, '2026', '1-31 Maret 2026', '11432026', 0, 0, 18, '2026-03-04', 48000, 'Final'),
(168, 6, 7, 110, 'Pencacahan HK 3 Pasar', 3, '2026', '1-31 Maret 2026', '11032026', 0, 0, 18, '2026-03-05', 49000, 'Final'),
(169, 4, 15, 57, 'Pencacahan Laporan Pemotongan Ternak Bulanan', 3, '2026', '01-07 Maret 2026', '5732026', 0, 0, 19, '2026-03-08', 57000, 'Final'),
(171, 4, 18, 118, 'Updating Ubinan Palawija Tambahan', 3, '2026', '21 Feb - 04 Maret 2026', '11832026', 0, 0, 19, '2026-03-08', 174000, 'Final'),
(172, 4, 19, 66, 'Pencacahan KSA Padi', 3, '2026', '25-31 Maret 2026', '6632026', 0, 0, 19, '2026-03-08', 110000, 'Final'),
(173, 4, 19, 65, 'Pencacahan KSA Jagung', 3, '2026', '25-31 Maret 2026', '6532026', 0, 0, 19, '2026-03-08', 56000, 'Final'),
(174, 4, 18, 63, 'Pencacahan Ubinan Padi', 3, '2026', '01-31 Maret 2026', '6332026', 0, 0, 19, '2026-03-08', 81000, 'Final'),
(175, 4, 18, 62, 'Pencacahan Ubinan Palawija', 3, '2026', '01-31 Maret 2026', '6232026', 0, 0, 19, '2026-03-08', 81000, 'Final'),
(176, 4, 8, 181, 'Pendataan Lapangan Updating Direktori Perusahaan Pertambangan dan Energi Tahap I', 3, '2026', 'Maret 2026', '18132026', 0, 0, 19, '2026-03-12', 66000, 'Final'),
(177, 4, 8, 133, 'Pendataan Lapangan Listing Survei IMK Triwulanan', 3, '2026', '1-27 Maret 2026', '13332026', 0, 0, 19, '2026-03-12', 240000, 'Final'),
(178, 4, 8, 158, 'Pencacahan Survei IBS Triwulan IV Tahun 2025 Bulan Februari', 2, '2026', '1-28 Februari 2026', '15822026', 0, 0, 19, '2026-03-12', 75000, 'Final'),
(179, 6, 6, 16, 'Pencacahan SPUNP', 1, '2026', '01-31 Januari 2026', '1612026', 0, 0, 18, '2026-03-31', 66000, 'Final'),
(180, 6, 6, 16, 'Pencacahan SPUNP', 3, '2026', '1-31 Maret 2026', '1632026', 0, 0, 18, '2026-03-31', 66000, 'Final'),
(181, 6, 6, 147, 'Pencacahan PEK', 4, '2026', '1 April - 31 Mei 2026', '14742026', 0, 0, 18, '2026-04-01', 70000, 'Belum'),
(182, 6, 6, 182, 'Pencacahan SPUNP', 4, '2026', '1-30 April 2026', '18242026', 0, 0, 18, '2026-04-01', 66000, 'Belum'),
(183, 6, 14, 183, 'Pencacahan Listing VREST', 4, '2026', '1 April - 31 Mei 2026', '18342026', 0, 0, 18, '2026-04-01', 240000, 'Belum'),
(184, 6, 14, 32, 'Pencacahan VHTL', 4, '2026', '1 April - 31 Mei 2026', '3242026', 0, 0, 18, '2026-04-01', 75000, 'Belum'),
(185, 6, 14, 30, 'Pencacahan VREST UMK', 4, '2026', '1 April - 31 Mei 2026', '3042026', 0, 0, 18, '2026-04-01', 57000, 'Belum'),
(186, 6, 14, 29, 'Pencacahan VREST UMB', 4, '2026', '1 April - 31 Mei 2026', '2942026', 0, 0, 18, '2026-04-01', 66000, 'Belum'),
(187, 6, 14, 83, 'Pencacahan VDTW', 4, '2026', '1 April - 31 Mei 2026', '8342026', 0, 0, 18, '2026-04-01', 75000, 'Belum'),
(188, 6, 14, 31, 'Pencacahan VHTS', 4, '2026', '1-30 April 2026', '3142026', 0, 0, 18, '2026-04-01', 66000, 'Belum'),
(189, 4, 8, 158, 'Pencacahan Survei IBS Triwulan IV Tahun 2025 Bulan Maret', 3, '2026', '1-31 Maret 2026', '15832026', 0, 0, 19, '2026-04-01', 75000, 'Final'),
(190, 6, 14, 184, 'Honor mengajar SBJP', 3, '2026', '27-30 Maret 2026', '18432026', 0, 0, 18, '2026-04-01', 111000, 'Belum'),
(191, 4, 8, 119, 'Pemutakhiran DPA Bulan Maret', 3, '2026', '11-31 Maret 2026', '11932026', 0, 0, 19, '2026-04-01', 46000, 'Final'),
(193, 4, 15, 57, 'Pencacahan Laporan Pemotongan Ternak Bulanan', 4, '2026', '01-07 April 2026', '5742026', 0, 0, 19, '2026-04-06', 57000, 'Belum'),
(194, 4, 19, 66, 'Pencacahan KSA Padi', 4, '2026', '24-30 April 2026', '6642026', 0, 0, 19, '2026-04-06', 110000, 'Belum'),
(195, 4, 19, 65, 'Pencacahan KSA Jagung', 4, '2026', '24-30 April 2026', '6542026', 0, 0, 19, '2026-04-06', 56000, 'Belum'),
(196, 4, 18, 63, 'Pencacahan Ubinan Padi', 4, '2026', '01-31 April 2026', '6342026', 0, 0, 19, '2026-04-06', 81000, 'Belum'),
(197, 4, 18, 62, 'Pencacahan Ubinan Palawija Subround I', 4, '2026', '01-30 April 2026', '6242026', 0, 0, 19, '2026-04-06', 81000, 'Belum'),
(198, 4, 15, 59, 'Pencacahan Laporan Triwulanan Pelabuhan Perikanan dan Tempat Pelelangan Ikan', 4, '2026', '01-12 April 2026', '5942026', 0, 0, 19, '2026-04-06', 53000, 'Belum'),
(199, 4, 18, 118, 'Updating Ubinan Palawija Subround II 2026', 4, '2026', '19-30 April 2026', '11842026', 0, 0, 19, '2026-04-06', 174000, 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `matrik_translok`
--

CREATE TABLE `matrik_translok` (
  `id` int NOT NULL,
  `id_tim` int NOT NULL,
  `id_nama_survei` int NOT NULL,
  `uraian_pengajuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_bulan_pengajuan` int NOT NULL,
  `tahun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cek_double` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_by` int NOT NULL,
  `create_at` date NOT NULL,
  `harga_satuan_honor` int NOT NULL,
  `status_pengajuan_translok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matrik_translok`
--

INSERT INTO `matrik_translok` (`id`, `id_tim`, `id_nama_survei`, `uraian_pengajuan`, `id_bulan_pengajuan`, `tahun`, `cek_double`, `create_by`, `create_at`, `harga_satuan_honor`, `status_pengajuan_translok`) VALUES
(9, 7, 162, 'Translok petugas pencacahan Survei Pendukung PDRB Lapangan Usaha', 1, '2026', '16212026', 27, '2026-01-23', 150000, 'Final'),
(10, 7, 161, 'Translok petugas pencacahan Survei Pendukung PDRB Pengeluaran', 1, '2026', '16112026', 27, '2026-01-23', 150000, 'Final'),
(11, 3, 70, 'Translok pengawas pemeriksaan lapangan pemutakhiran Susenas Maret 2026', 1, '2026', '7012026', 24, '2026-01-27', 150000, 'Final'),
(12, 4, 66, 'Translok Pengawasan Lapangan KSA Padi', 2, '2026', '6622026', 19, '2026-02-13', 150000, 'Final'),
(13, 4, 63, 'Translok Pengawasan Lapangan Ubinan Padi', 2, '2026', '6312026', 19, '2026-02-13', 150000, 'Final'),
(14, 4, 46, 'Translo Pengawasan Survei Konstruksi Triwulan IV 2025', 2, '2026', '4612026', 19, '2026-02-13', 150000, 'Final'),
(15, 4, 133, 'Translok Pengawasan Survei IMK Triwulan IV 2025', 2, '2026', '13322026', 19, '2026-02-13', 150000, 'Final'),
(16, 4, 158, 'Translok Pengawasan Survei IBS Triwulanan', 2, '2026', '15822026', 19, '2026-02-13', 150000, 'Final'),
(17, 4, 158, 'Translok Pengawasan Survei IBS Triwulanan', 2, '2026', '15822026', 19, '2026-02-19', 150000, 'Final'),
(18, 4, 133, 'Translok Pengawasan Survei IMK Triwulan IV 2025', 2, '2026', '13322026', 19, '2026-02-19', 150000, 'Final'),
(19, 3, 68, 'Translok petugas pengawasan lapangan Pemutakhiran Sakernas Februari 2026', 2, '2026', '6822026', 24, '2026-02-23', 150000, 'Final'),
(20, 3, 170, 'Translok petugas pemeriksaan lapangan Pencacahan Survei Sakernas Februari 2026', 2, '2026', '17022026', 24, '2026-02-23', 150000, 'Final'),
(21, 3, 163, 'Translok Pengawas Susenas Maret dan Seruti Triwulan I Tahun 2026', 2, '2026', '16322026', 24, '2026-03-10', 150000, 'Final'),
(22, 3, 163, 'Translok Supervisi Susenas Maret dan Seruti Triwulan I Tahun 2026', 3, '2026', '16332026', 24, '2026-03-10', 150000, 'Final'),
(23, 6, 31, 'Translok Pengawasan Survei Jasa Penyedia Akomodasi Bulanan (VHTS) 2026', 2, '2026', '3122026', 18, '2026-03-11', 150000, 'Final'),
(24, 4, 66, 'Translok petugas Pengawasan KSA Padi', 3, '2026', '6632026', 19, '2026-03-11', 150000, 'Final'),
(25, 4, 63, 'Translok Pengawasan Ubinan Padi', 3, '2026', '6332026', 19, '2026-03-11', 150000, 'Final'),
(26, 4, 62, 'Translok Pengawasan Ubinan Palawija ', 3, '2026', '6232026', 19, '2026-03-11', 150000, 'Final'),
(27, 4, 116, 'Translok Pengawasan Survei Perikanan Budidaya', 3, '2026', '11632026', 19, '2026-03-11', 150000, 'Final'),
(28, 4, 158, 'transport lokal petugas pemeriksaan lapangan survei industri besar dan sedang (ibs) triwulanan', 3, '2026', '15832026', 19, '2026-03-11', 150000, 'Final'),
(29, 4, 180, 'transport lokal pengutipan direktori perusahaan\r\nkonstruksi ke instansi/opd/asosiasi di bps kabupaten/kota', 3, '2026', '18032026', 19, '2026-03-11', 150000, 'Final'),
(30, 3, 179, 'Translok petugas pengecekan lapangan GC PBI Tahap I', 3, '2026', '17932026', 24, '2026-04-06', 150000, 'Belum');

-- --------------------------------------------------------

--
-- Stand-in structure for view `rekap_translok_view`
-- (See below for the actual view)
--
CREATE TABLE `rekap_translok_view` (
`id` int
,`id_matrik_translok` int
,`id_user` int
,`volume` int
,`satuan` varchar(255)
,`harga_satuan` int
,`total` int
,`st` int
,`visum` int
,`s_non_pkd` int
,`laporan` int
,`dokumentasi` int
,`selesai_fp` int
,`pengajuan_spm` int
,`terbit_sp2d` int
,`tgl_sp2d` varchar(255)
,`keterangan` text
,`id_tim` int
,`id_nama_survei` int
,`id_bulan_pengajuan` int
,`tahun` varchar(255)
,`nip` varchar(100)
,`nama_user` varchar(255)
,`nama_survei` varchar(255)
,`bulan` varchar(255)
,`kode_bulan` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sbml_detail_view`
-- (See below for the actual view)
--
CREATE TABLE `sbml_detail_view` (
`id_rincian_output` int
,`id` int
,`id_petugas` int
,`status_bast` int
,`status_spk` int
,`volume_spk` int
,`volume_bast` int
,`harga_satuan` int
,`total` int
,`uraian_kegiatan` varchar(255)
,`tahun` varchar(255)
,`jangka_waktu` varchar(255)
,`harga_satuan_honor` int
,`nik` varchar(255)
,`nama_petugas` varchar(255)
,`alamat` varchar(255)
,`kecamatan` varchar(255)
,`pekerjaan` varchar(255)
,`email` varchar(255)
,`sobat_id` varchar(255)
,`status_petugas` varchar(255)
,`jabatan` varchar(255)
,`keterangan_jabatan` varchar(255)
,`satuan` varchar(255)
,`rincian_output` varchar(255)
,`status_rincian_output` varchar(255)
,`nama_survei` varchar(255)
,`bulan` varchar(255)
,`kode_bulan` varchar(255)
,`bulan_tahun` varchar(511)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sbml_view`
-- (See below for the actual view)
--
CREATE TABLE `sbml_view` (
`id` int
,`id_petugas` int
,`nik` varchar(255)
,`nama_petugas` varchar(255)
,`alamat` varchar(255)
,`kecamatan` varchar(255)
,`uraian_kegiatan` varchar(255)
,`rincian_output` varchar(255)
,`nama_survei` varchar(255)
,`bulan_tahun` varchar(511)
,`total_honor` decimal(42,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `spk`
--

CREATE TABLE `spk` (
  `id` int NOT NULL,
  `nomor_spk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_petugas_spk` int NOT NULL,
  `tgl_spk` date NOT NULL,
  `tgl_selesai_spk` date NOT NULL,
  `create_by` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bulan_spk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_spk` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_ppk` int NOT NULL,
  `honor_pelatihan` int NOT NULL,
  `status_mitra` enum('pending','disetujui') COLLATE utf8mb4_general_ci DEFAULT 'pending',
  `status_pegawai` enum('pending','disetujui','ditolak') COLLATE utf8mb4_general_ci DEFAULT 'pending',
  `file_mitra_pdf` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `waktu_ttd_mitra` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spk`
--

INSERT INTO `spk` (`id`, `nomor_spk`, `id_petugas_spk`, `tgl_spk`, `tgl_selesai_spk`, `create_by`, `create_at`, `bulan_spk`, `tahun_spk`, `id_ppk`, `honor_pelatihan`, `status_mitra`, `status_pegawai`, `file_mitra_pdf`, `waktu_ttd_mitra`) VALUES
(53, '3525.0058/SPKR/01/2026', 166, '2026-01-01', '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 07:38:35', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(54, '3525.0059/SPKR/01/2026', 570, '2026-01-01', '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 07:39:51', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(57, '3525.0062/SPKR/01/2026', 445, '2026-01-01', '2026-01-31', 'Nailiatul Maghfirowati', '2026-01-30 07:45:29', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(58, '3525.0057/SPKR/01/2026', 390, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:36:13', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(59, '3525.0060/SPKR/01/2026', 66, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:37:58', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(60, '3525.0061/SPKR/01/2026', 376, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 05:38:36', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(61, '3525.0065/SPKR/01/2026', 22, '2026-01-23', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 06:52:18', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(62, '3525.0066/SPKR/01/2026', 86, '2026-01-23', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 06:54:12', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(63, '3525.0067/SPKR/01/2026', 101, '2026-01-23', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 06:54:42', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(64, '3525.0068/SPKR/01/2026', 218, '2026-01-23', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 06:55:16', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(65, '3525.0069/SPKR/01/2026', 299, '2026-01-23', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 06:55:57', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(66, '3525.0070/SPKR/01/2026', 339, '2026-01-23', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 06:56:36', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(67, '3525.0071/SPKR/01/2026', 394, '2026-01-23', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 06:57:31', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(68, '3525.0072/SPKR/01/2026', 466, '2026-01-23', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 06:58:32', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(69, '3525.0073/SPKR/01/2026', 434, '2026-01-23', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 06:59:32', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(70, '3525.0074/SPKR/01/2026', 633, '2026-01-23', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:00:04', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(71, '3525.0075/SPKR/01/2026', 733, '2026-01-23', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:00:35', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(72, 'B-0076/SPKR/01/2026', 20, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:32:27', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(73, 'B-0077/SPKR/01/2026', 69, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:33:08', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(74, 'B-0078/SPKR/01/2026', 38, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:34:02', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(75, 'B-0079/SPKR/01/2026', 120, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:34:39', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(76, 'B-0080/SPKR/01/2026', 116, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:35:40', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(77, 'B-0081/SPKR/01/2026', 165, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:36:15', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(78, 'B-0082/SPKR/01/2026', 179, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:51:34', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(79, 'B-0083/SPKR/01/2026', 235, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:52:12', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(80, 'B-0084/SPKR/01/2026', 237, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:52:41', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(81, 'B-0085/SPKR/01/2026', 258, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:55:28', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(82, 'B-0086/SPKR/01/2026', 257, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:55:53', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(83, 'B-0087/SPKR/01/2026', 311, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:56:42', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(84, 'B-0088/SPKR/01/2026', 297, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 07:58:46', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(86, 'B-0089/SPKR/01/2026', 331, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:00:27', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(87, 'B-0090/SPKR/01/2026', 323, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:01:07', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(88, 'B-0091/SPKR/01/2026', 363, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:04:12', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(89, 'B-0092/SPKR/01/2026', 521, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:04:44', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(90, 'B-0093/SPKR/01/2026', 543, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:05:33', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(91, 'B-0094/SPKR/01/2026', 562, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:06:03', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(92, 'B-0095/SPKR/01/2026', 618, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:06:27', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(93, 'B-0096/SPKR/01/2026', 656, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:07:06', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(94, 'B-0097/SPK/01/2026', 723, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:07:43', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(95, 'B-0098/SPKR/01/2026', 34, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:08:59', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(96, 'B-0099/SPKR/01/2026', 95, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:10:17', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(97, 'B-0100/SPKR/01/2026', 231, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:11:31', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(98, 'B-0101/SPKR/01/2026', 262, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:12:07', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(99, 'B-0102/SPKR/01/2026', 622, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:12:45', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(100, 'B-0103/SPKR/01/2026', 429, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:15:58', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(101, 'B-0104/SPKR/01/2026', 694, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:18:32', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(102, 'B-0105/SPKR/01/2026', 122, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:21:16', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(103, 'B-0106/SPKR/01/2026', 196, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:21:38', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(104, 'B-0107/SPKR/01/2026', 350, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:22:16', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(105, 'B-0108/SPKR/01/2026', 407, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:22:45', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(106, 'B-0109/SPKR/01/2026', 508, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:23:17', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(107, 'B-0110/SPKR/01/2026', 345, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:24:35', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(108, 'B-0111/SPKR/01/2026', 402, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:25:03', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(109, 'B-0112/SPKR/01/2026', 610, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:25:24', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(110, 'B-0113/SPKR/01/2026', 684, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:25:54', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(111, 'B-0114/SPKR/01/2026', 441, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:28:26', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(112, 'B-0115/SPKR/01/2026', 486, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:29:21', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(113, 'B-0116/SPKR/01/2026', 463, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:30:10', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(114, 'B-0117/SPKR/01/2026', 167, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:35:55', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(115, 'B-0118/SPKR/01/2026', 375, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:36:30', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(116, 'B-0119/SPKR/01/2026', 358, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:36:55', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(117, 'B-0120/SPKR/01/2026', 461, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:37:26', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(118, 'B-0121/SPKR/01/2026', 206, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:38:27', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(119, 'B-0122/SPKR/01/2026', 256, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:39:24', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(120, 'B-0123/SPKR/01/2026', 24, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:40:16', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(121, 'B-0124/SPKR/01/2026', 310, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:40:51', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(122, 'B-0125/SPKR/01/2026', 533, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:41:36', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(123, 'B-0126/SPKR/01/2026', 620, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:42:03', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(124, 'B-0127/SPKR/01/2026', 15, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:43:52', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(125, 'B-0128/SPKR/01/2026', 178, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:44:30', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(126, 'B-0129/SPKR/01/2026', 144, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:45:00', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(127, 'B-0130/SPKR/01/2026', 176, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:45:35', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(128, 'B-0131/SPKR/01/2026', 225, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:45:59', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(129, 'B-0132/SPKR/01/2026', 343, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:46:20', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(130, 'B-0133/SPKR/01/2026', 467, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:47:15', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(131, 'B-0134/SPKR/01/2026', 541, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-05 08:48:17', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(132, 'B-0002/SPK/01/2026', 300, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 11:28:01', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(133, 'B-0003/SPK/01/2026', 313, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 11:29:14', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(135, 'B-0004/SPK/01/2026', 212, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 12:45:27', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(136, 'B-0005/SPK/01/2026', 93, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:01:43', 'JANUARI 2026', '', 1, 775000, 'pending', 'pending', NULL, NULL),
(138, 'B-0006/SPK/01/2026', 56, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:03:27', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(139, 'B-0008/SPK/01/2026', 426, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:04:51', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(140, 'B-0010/SPK/01/2026', 388, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:06:11', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(141, 'B-0011/SPK/01/2026', 344, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:07:00', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(142, 'B-0012/SPK/01/2026', 103, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:07:42', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(143, 'B-0013/SPK/01/2026', 443, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:08:23', 'JANUARI 2026', '', 1, 760000, 'pending', 'pending', NULL, NULL),
(144, 'B-0016/SPK/01/2026', 177, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:09:22', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(145, 'B-0018/SPK/01/2026', 534, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:11:09', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(146, 'B-0019/SPK/01/2026', 30, '2026-01-08', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:13:25', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(147, 'B-0020/SPK/01/2026', 303, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:15:36', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(148, 'B-0021/SPK/01/2026', 254, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:16:16', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(149, 'B-0022/SPK/01/2026', 266, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:17:19', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(150, 'B-0023/SPK/01/2026', 252, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:18:08', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(151, 'B-0025/SPK/01/2026', 507, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:18:58', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(152, 'B-0026/SPK/01/2026', 232, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:19:47', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(153, 'B-0027/SPK/01/2026', 51, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:20:30', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(154, 'B-0028/SPK/01/2026', 44, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:21:09', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(155, 'B-0029/SPK/01/2026', 43, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:21:48', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(156, 'B-0030/SPK/01/2026', 70, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:22:27', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(157, 'B-0031/SPK/01/2026', 47, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-05 13:23:03', 'JANUARI 2026', '', 1, 750000, 'pending', 'pending', NULL, NULL),
(158, 'B-0032/SPK/01/2026', 315, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:00:21', 'JANUARI 2026', '', 1, 600000, 'pending', 'pending', NULL, NULL),
(159, 'B-0033/SPK/01/2026', 330, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:00:49', 'JANUARI 2026', '', 1, 600000, 'pending', 'pending', NULL, NULL),
(160, 'B-0034/SPK/01/2026', 566, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:01:19', 'JANUARI 2026', '', 1, 620000, 'pending', 'pending', NULL, NULL),
(161, 'B-0035/SPK/01/2026', 575, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:01:46', 'JANUARI 2026', '', 1, 620000, 'pending', 'pending', NULL, NULL),
(162, 'B-0036/SPK/01/2026', 427, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:02:11', 'JANUARI 2026', '', 1, 600000, 'pending', 'pending', NULL, NULL),
(163, 'B-0040/SPK/01/2026', 372, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:03:15', 'JANUARI 2026', '', 1, 600000, 'pending', 'pending', NULL, NULL),
(164, 'B-0041/SPK/01/2026', 476, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:03:53', 'JANUARI 2026', '', 1, 600000, 'pending', 'pending', NULL, NULL),
(165, 'B-0042/SPK/01/2026', 469, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:04:20', 'JANUARI 2026', '', 1, 600000, 'pending', 'pending', NULL, NULL),
(166, 'B-0043/SPK/01/2026', 436, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:04:50', 'JANUARI 2026', '', 1, 600000, 'pending', 'pending', NULL, NULL),
(167, 'B-0044/SPK/01/2026', 153, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:05:17', 'JANUARI 2026', '', 1, 600000, 'pending', 'pending', NULL, NULL),
(168, 'B-0046/SPK/01/2026', 193, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:05:54', 'JANUARI 2026', '', 1, 600000, 'pending', 'pending', NULL, NULL),
(169, 'B-0049/SPK/01/2026', 145, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:08:29', 'JANUARI 2026', '', 1, 600000, 'pending', 'pending', NULL, NULL),
(170, 'B-0050/SPK/01/2026', 629, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:09:00', 'JANUARI 2026', '', 1, 620000, 'pending', 'pending', NULL, NULL),
(171, 'B-0051/SPK/01/2026', 688, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:09:28', 'JANUARI 2026', '', 1, 450000, 'pending', 'pending', NULL, NULL),
(172, 'B-0052/SPK/01/2026', 539, '2026-01-15', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:09:56', 'JANUARI 2026', '', 1, 600000, 'pending', 'pending', NULL, NULL),
(173, 'B-0053/SPK/01/2026', 721, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:10:23', 'JANUARI 2026', '', 1, 450000, 'pending', 'pending', NULL, NULL),
(174, 'B-0054/SPK/01/2026', 651, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:13:04', 'JANUARI 2026', '', 1, 620000, 'pending', 'pending', NULL, NULL),
(175, 'B-0055/SPK/01/2026', 13, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:13:29', 'JANUARI 2026', '', 1, 620000, 'pending', 'pending', NULL, NULL),
(176, 'B-0063/SPK/01/2026', 689, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:15:56', 'JANUARI 2026', '', 1, 450000, 'pending', 'pending', NULL, NULL),
(177, 'B-0135/SPKR/01/2026', 264, '2026-01-14', '2026-02-27', 'Nailiatul Maghfirowati', '2026-02-06 01:22:30', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(178, 'B-0136/SPKR/01/2026', 317, '2026-01-27', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:08:02', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(179, 'B-0137/SPKR/01/2026', 385, '2026-01-27', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:08:23', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(180, 'B-0138/SPKR/01/2026', 389, '2026-01-27', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:08:43', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(181, 'B-0139/SPKR/01/2026', 413, '2026-01-27', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:09:03', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(182, 'B-0140/SPKR/01/2026', 408, '2026-01-27', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:11:45', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(183, 'B-0141/SPKR/01/2026', 475, '2026-01-27', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:12:05', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(184, 'B-0142/SPKR/01/2026', 439, '2026-01-27', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:12:35', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(185, 'B-0143/SPKR/01/2026', 477, '2026-01-27', '2026-01-31', 'Nailiatul Maghfirowati', '2026-02-10 05:12:59', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(212, 'B-0144/SPKR/02/2026', 20, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:39:49', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(213, 'B-0145/SPKR/02/2026', 22, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:40:10', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(214, 'B-0146/SPKR/02/2026', 13, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:40:29', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(215, 'B-0147/SPKR/02/2026', 30, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:40:46', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(216, 'B-0148/SPKR/02/2026', 24, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:41:19', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(217, 'B-0149/SPKR/02/2026', 38, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:43:21', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(218, 'B-0150/SPKR/02/2026', 69, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:43:37', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(219, 'B-0151/SPKR/02/2026', 34, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:43:58', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(221, 'B-0153/SPKR/02/2026', 44, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:44:59', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(222, 'B-0154/SPKR/02/2026', 43, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:45:14', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(223, 'B-0155/SPKR/02/2026', 70, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:45:29', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(224, 'B-0156/SPKR/02/2026', 47, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:45:46', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(225, 'B-0157/SPKR/02/2026', 93, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:46:03', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(226, 'B-0158/SPKR/02/2026', 56, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:46:18', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(227, 'B-0159/SPKR/02/2026', 86, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:49:27', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(228, 'B-0160/SPKR/02/2026', 51, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:49:42', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(230, 'B-0162/SPKR/02/2026', 120, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:53:05', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(231, 'B-0163/SPKR/02/2026', 116, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:53:31', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(232, 'B-0164/SPKR/02/2026', 103, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:53:54', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(233, 'B-0165/SPKR/02/2026', 101, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:54:12', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(234, 'B-0166/SPKR/02/2026', 165, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:54:50', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(235, 'B-0167/SPKR/02/2026', 179, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:55:05', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(236, 'B-0168/SPKR/02/2026', 153, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:55:21', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(237, 'B-0169/SPKR/02/2026', 193, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:55:43', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(240, 'B-0172/SPKR/02/2026', 167, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:56:31', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(241, 'B-0173/SPKR/02/2026', 145, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:56:46', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(242, 'B-0174/SPKR/02/2026', 177, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:57:08', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(245, 'B-0177/SPKR/02/2026', 235, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:58:15', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(246, 'B-0178/SPKR/02/2026', 237, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:58:33', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(247, 'B-0179/SPKR/02/2026', 231, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:58:48', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(248, 'B-0180/SPKR/02/2026', 212, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:59:16', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(249, 'B-0181/SPKR/02/2026', 232, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 05:59:33', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(250, 'B-0182/SPKR/02/2026', 257, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:00:50', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(251, 'B-0183/SPKR/02/2026', 258, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:01:19', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(252, 'B-0184/SPKR/02/2026', 262, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:02:05', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(253, 'B-0185/SPKR/02/2026', 254, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:02:26', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(254, 'B-0186/SPKR/02/2026', 266, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:02:45', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(255, 'B-0187/SPKR/02/2026', 252, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:02:59', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(256, 'B-0188/SPKR/02/2026', 264, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:03:16', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(257, 'B-0189/SPKR/02/2026', 256, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:03:38', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(258, 'B-0190/SPKR/02/2026', 311, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:03:58', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(259, 'B-0191/SPKR/02/2026', 297, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:04:39', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(260, 'B-0192/SPKR/02/2026', 299, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:09:06', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(261, 'B-0193/SPKR/02/2026', 300, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:09:21', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(262, 'B-0194/SPKR/02/2026', 303, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:09:37', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(263, 'B-0195/SPKR/02/2026', 313, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:09:55', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(264, 'B-0196/SPKR/02/2026', 310, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:10:12', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(265, 'B-0197/SPKR/02/2026', 323, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:10:26', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(266, 'B-0198/SPKR/02/2026', 331, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:10:42', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(267, 'B-0199/SPKR/02/2026', 330, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:11:04', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(268, 'B-0200/SPKR/02/2026', 317, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:11:56', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(269, 'B-0201/SPKR/02/2026', 315, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:17:23', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(270, 'B-0202/SPKR/02/2026', 339, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:17:37', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(271, 'B-0203/SPKR/02/2026', 363, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:17:51', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(273, 'B-0205/SPKR/02/2026', 385, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:22:49', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(274, 'B-0206/SPKR/02/2026', 389, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:23:04', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(277, 'B-0209/SPKR/02/2026', 388, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:24:30', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(279, 'B-0211/SPKR/02/2026', 344, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:25:03', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(283, 'B-0215/SPKR/02/2026', 429, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:26:09', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(286, 'B-0218/SPKR/02/2026', 413, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:26:56', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(287, 'B-0219/SPKR/02/2026', 408, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:27:10', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(288, 'B-0220/SPKR/02/2026', 427, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:27:26', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(289, 'B-0221/SPKR/02/2026', 426, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:27:40', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(290, 'B-0222/SPKR/02/2026', 394, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:27:54', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(292, 'B-0224/SPKR/02/2026', 441, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:28:24', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(297, 'B-0229/SPKR/02/2026', 439, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:29:39', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(298, 'B-0230/SPKR/02/2026', 477, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:29:55', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(299, 'B-0231/SPKR/02/2026', 443, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:30:40', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(300, 'B-0232/SPKR/02/2026', 476, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:30:53', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(301, 'B-0233/SPKR/02/2026', 469, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:31:10', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(302, 'B-0234/SPKR/02/2026', 436, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:31:50', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(303, 'B-0235/SPKR/02/2026', 466, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:32:04', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(304, 'B-0236/SPKR/02/2026', 521, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:32:17', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(305, 'B-0237/SPKR/02/2026', 508, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:32:33', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(306, 'B-0238/SPKR/02/2026', 507, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:32:47', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(307, 'B-0239/SPKR/02/2026', 543, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:33:00', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(308, 'B-0240/SPKR/02/2026', 539, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:33:16', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(309, 'B-0241/SPKR/02/2026', 534, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:33:30', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(310, 'B-0242/SPKR/02/2026', 533, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:33:41', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(311, 'B-0243/SPKR/02/2026', 562, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:33:55', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(313, 'B-0245/SPKR/02/2026', 566, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:34:22', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(314, 'B-0246/SPKR/02/2026', 575, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:34:35', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(315, 'B-0247/SPKR/02/2026', 618, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:35:04', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(316, 'B-0248/SPKR/02/2026', 622, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:35:19', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(318, 'B-0250/SPKR/02/2026', 629, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:35:46', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(319, 'B-0251/SPKR/02/2026', 633, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:36:13', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(321, 'B-0253/SPKR/02/2026', 651, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:36:42', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(322, 'B-0254/SPKR/02/2026', 689, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:36:56', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(323, 'B-0255/SPKR/02/2026', 688, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:37:11', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(324, 'B-0256/SPKR/02/2026', 723, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:37:24', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(325, 'B-0257/SPKR/02/2026', 733, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:37:37', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(326, 'B-0258/SPKR/02/2026', 721, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-18 06:37:52', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(328, 'B-0170/SPKR/02/2026', 206, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-19 05:04:10', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(330, 'B-0217/SPKR/02/2026', 402, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-19 05:05:07', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(331, 'B-0249/SPKR/02/2026', 620, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-19 05:05:54', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(332, 'B-0223/SPKR/02/2026', 434, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-19 05:06:27', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(333, 'B-0176/SPKR/02/2026', 218, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-19 05:07:04', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(334, 'B-0225/SPKR/02/2026', 486, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-19 05:07:31', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(335, 'B-0204/SPKR/02/2026', 345, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-19 05:07:55', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(337, 'B-0227/SPKR/02/2026', 445, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-19 05:08:53', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(339, 'B-0244/SPKR/02/2026', 570, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-19 05:09:49', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(340, 'B-0252/SPKR/02/2026', 656, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-19 05:10:15', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(341, 'B-0228/SPKR/02/2026', 475, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-02-19 05:10:48', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(345, 'B-0262/SPKR/02/2026', 345, '2026-02-01', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-12 01:10:23', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(346, 'B-0263/SPKR/02/2026', 402, '2026-02-01', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-12 01:11:05', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(347, 'B-0264/SPKR/02/2026', 684, '2026-02-01', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-12 01:11:28', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(348, 'B-0265/SPKR/02/2026', 225, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 01:22:30', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(349, 'B-0259/SPKR/02/2026', 41, '2026-02-01', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:23:53', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(350, 'B-0152/SPKR/02/2026', 95, '2026-02-01', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:24:35', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(351, 'B-0161/SPKR/02/2026', 66, '2026-02-01', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:25:18', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(352, 'B-0175/SPKR/02/2026', 144, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:26:32', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(353, 'B-0171/SPKR/02/2026', 178, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:27:26', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(354, 'B-0207/SPKR/02/2026', 376, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:27:50', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(355, 'B-0208/SPKR/02/2026', 390, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:28:23', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(356, 'B-0210/SPKR/02/2026', 358, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:29:20', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(357, 'B-0213/SPKR/02/2026', 375, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:30:07', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(358, 'B-0212/SPKR/02/2026', 372, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:30:33', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(359, 'B-0216/SPKR/02/2026', 407, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:31:57', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(360, 'B-0260/SPKR/02/2026', 461, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:32:33', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(361, 'B-0214/SPKR/02/2026', 350, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:32:58', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(362, 'B-0226/SPKR/02/2026', 463, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:33:24', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(363, 'B-0261/SPKR/02/2026', 541, '2026-02-02', '2026-02-28', 'Nailiatul Maghfirowati', '2026-03-13 04:33:47', 'FEBRUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(365, 'B-0262/SPKR/03/2026', 24, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:31:14', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(367, 'B-0264/SPKR/03/2026', 22, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:32:51', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(371, 'B-0268/SPKR/03/2026', 38, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:35:27', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(372, 'B-0269/SPKR/03/2026', 69, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:36:16', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(373, 'B-0270/SPKR/03/2026', 34, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:36:35', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(375, 'B-0272/SPKR/03/2026', 86, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:37:08', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(376, 'B-0273/SPKR/03/2026', 116, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:37:27', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(378, 'B-0275/SPKR/03/2026', 206, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:38:09', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(379, 'B-0276/SPKR/03/2026', 165, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:38:28', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(380, 'B-0277/SPKR/03/2026', 179, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:38:45', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(381, 'B-0278/SPKR/03/2026', 122, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:39:01', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(383, 'B-0280/SPKR/03/2026', 196, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:39:37', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(385, 'B-0282/SPKR/03/2026', 235, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:41:49', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(386, 'B-0283/SPKR/03/2026', 237, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:42:04', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(387, 'B-0284/SPKR/03/2026', 231, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:42:21', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(388, 'B-0285/SPKR/03/2026', 256, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:42:38', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(389, 'B-0286/SPKR/03/2026', 264, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:42:56', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(391, 'B-0288/SPKR/03/2026', 258, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:46:10', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(392, 'B-0289/SPKR/03/2026', 262, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:46:24', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(393, 'B-0290/SPKR/03/2026', 274, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:47:43', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(394, 'B-0291/SPKR/03/2026', 310, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:48:19', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(395, 'B-0292/SPKR/03/2026', 299, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:48:33', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(396, 'B-0293/SPKR/03/2026', 311, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:48:48', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(397, 'B-0294/SPKR/03/2026', 297, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:49:03', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(398, 'B-0295/SPKR/03/2026', 300, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:49:20', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(399, 'B-0296/SPKR/03/2026', 331, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:49:37', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(400, 'B-0297/SPKR/03/2026', 323, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:49:52', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(406, 'B-0303/SPKR/03/2026', 385, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:53:12', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(407, 'B-0304/SPKR/03/2026', 363, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:53:40', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(408, 'B-0305/SPKR/03/2026', 388, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:54:00', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(410, 'B-0307/SPKR/03/2026', 402, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:54:43', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(411, 'B-0308/SPKR/03/2026', 429, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:55:00', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(412, 'B-0309/SPKR/03/2026', 445, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:55:15', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(415, 'B-0312/SPKR/03/2026', 441, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:56:04', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(416, 'B-0313/SPKR/03/2026', 434, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:56:20', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(417, 'B-0314/SPKR/03/2026', 486, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:56:42', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(418, 'B-0315/SPKR/03/2026', 475, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:56:59', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(419, 'B-0316/SPKR/03/2026', 521, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:57:15', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(420, 'B-0317/SPKR/03/2026', 533, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:57:30', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(422, 'B-0319/SPKR/03/2026', 543, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:58:06', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(423, 'B-0320/SPKR/03/2026', 525, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:58:24', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL);
INSERT INTO `spk` (`id`, `nomor_spk`, `id_petugas_spk`, `tgl_spk`, `tgl_selesai_spk`, `create_by`, `create_at`, `bulan_spk`, `tahun_spk`, `id_ppk`, `honor_pelatihan`, `status_mitra`, `status_pegawai`, `file_mitra_pdf`, `waktu_ttd_mitra`) VALUES
(424, 'B-0321/SPKR/03/2026', 570, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:58:39', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(425, 'B-0322/SPKR/03/2026', 562, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:58:54', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(427, 'B-0324/SPKR/03/2026', 618, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:59:28', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(428, 'B-0325/SPKR/03/2026', 622, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 08:59:51', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(430, 'B-0327/SPKR/03/2026', 694, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 09:00:20', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(431, 'B-0328/SPKR/03/2026', 723, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 09:00:35', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(432, 'B-0329/SPKR/03/2026', 733, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-03-26 09:00:49', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(434, 'B-0300/SPKR/03/2026', 345, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-01 01:54:24', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(435, 'B-0279/SPKR/03/2026', 167, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-01 01:55:37', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(437, 'B-0274/SPKR/03/2026', 120, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 01:55:02', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(438, 'B-0302/SPKR/03/2026', 390, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 08:26:20', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(439, 'B-0263/SPKR/03/2026', 20, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 08:29:45', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(440, 'B-0301/SPKR/03/2026', 376, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 08:30:20', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(441, 'B-0266/SPKR/03/2026', 41, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 08:30:46', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(442, 'B-0310/SPKR/03/2026', 461, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 08:31:20', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(443, 'B-0287/SPKR/03/2026', 257, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 08:31:49', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(444, 'B-0271/SPKR/03/2026', 95, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 08:32:28', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(445, 'B-0323/SPKR/03/2026', 620, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 08:34:00', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(446, 'B-0299/SPKR/03/2026', 350, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 08:34:41', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(447, 'B-0306/SPKR/03/2026', 407, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 08:35:10', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(448, 'B-0326/SPKR/03/2026', 656, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:02:51', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(449, 'B-0267/SPKR/03/2026', 66, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:03:29', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(450, 'B-0311/SPKR/03/2026', 463, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:04:03', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(451, 'B-0281/SPKR/03/2026', 218, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:04:33', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(452, 'B-0265/SPKR/03/2026', 15, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:05:04', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(453, 'B-0298/SPKR/03/2026', 375, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:05:31', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(454, 'B-0318/SPKR/03/2026', 541, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:06:05', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(455, 'B-0330/SPKR/03/2026', 144, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:08:09', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(456, 'B-0331/SPKR/03/2026', 467, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:09:28', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(457, 'B-0332/SPKR/03/2026', 364, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:10:03', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(458, 'B-0333/SPKR/03/2026', 59, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:10:25', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(459, 'B-0334/SPKR/03/2026', 115, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:10:47', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(460, 'B-0335/SPKR/03/2026', 176, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-02 09:11:11', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(462, 'B-0336/SPKR/03/2026', 178, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 01:41:15', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(463, 'B-0337/SPKR/03/2026', 343, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 01:41:43', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(464, 'B-0338/SPKR/03/2026', 372, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 01:42:04', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(465, 'B-0339/SPKR/03/2026', 358, '2026-03-02', '2026-03-31', 'Nailiatul Maghfirowati', '2026-04-06 01:42:20', 'MARET 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(466, 'B-0340/SPKR/01/2026', 41, '2026-01-02', '2026-01-31', 'Nailiatul Maghfirowati', '2026-04-06 01:43:18', 'JANUARI 2026', '', 1, 0, 'pending', 'pending', NULL, NULL),
(467, 'SPK-2206', 11, '2026-04-15', '2026-05-15', 'system', '2026-04-15 14:53:33', '4', '2026', 1, 1000000, 'pending', 'pending', NULL, NULL),
(468, 'SPK-2026-001', 11, '2026-04-15', '2026-05-15', 'system', '2026-04-15 15:03:00', '4', '2026', 1, 1000000, 'pending', 'pending', NULL, NULL),
(469, 'SPK-2026-001', 11, '2026-04-15', '2026-05-15', 'system', '2026-04-15 15:05:33', '4', '2026', 1, 1000000, 'pending', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `spk_view`
-- (See below for the actual view)
--
CREATE TABLE `spk_view` (
`id_rincian_output` int
,`id` int
,`id_petugas` int
,`status_bast` int
,`status_spk` int
,`volume_spk` int
,`volume_bast` int
,`harga_satuan` int
,`total` int
,`uraian_kegiatan` varchar(255)
,`tahun` varchar(255)
,`jangka_waktu` varchar(255)
,`harga_satuan_honor` int
,`nik` varchar(255)
,`nama_petugas` varchar(255)
,`alamat` varchar(255)
,`kecamatan` varchar(255)
,`pekerjaan` varchar(255)
,`email` varchar(255)
,`sobat_id` varchar(255)
,`status_petugas` varchar(255)
,`jabatan` varchar(255)
,`keterangan_jabatan` varchar(255)
,`satuan` varchar(255)
,`rincian_output` varchar(255)
,`status_rincian_output` varchar(255)
,`nama_survei` varchar(255)
,`bulan` varchar(255)
,`kode_bulan` varchar(255)
,`bulan_tahun` varchar(511)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nip` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_user` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_tim` int NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `login_session_key` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email_status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2026-03-04 00:00:00',
  `password_reset_key` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nip`, `nama_user`, `foto`, `id_tim`, `status`, `password`, `email`, `role`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`) VALUES
(1, '1', 'admin', 'https://simasnor.3525.web.id/uploads/files/562xl8duotyzwsv.png', 1, 'Aktif', '$2y$10$/WZxvg5S4HPqP3WPvbbuve3EiO2A/XMazgnG6u2UrEOmR3JLOh4DK', 'gresikkab.bps@gmail.com', 'Administrator', NULL, NULL, '2026-03-04 00:00:00', NULL),
(3, '196809041994012002', 'Ir. Indriya Purwaningsih M.T', 'https://simasnor.3525.web.id/uploads/files/9pfbme_rocq64t1.png', 1, 'Aktif', '$2y$10$Y8rX9iGVdMsigjoOAWLP/eidAt3IxOF90.FqTfzln1vcZxgGsPJJ2', 'indriya@bps.go.id', 'Administrator', NULL, NULL, '2026-03-04 00:00:00', NULL),
(4, '196905151994012001', 'Ir. Indarwati', 'https://simasnor.3525.web.id/uploads/files/tyscgzbvhxqfn3d.png', 5, 'Aktif', '$2y$10$T0GRwW18ocVXdu2R4I3AkOkPMXTxiX4JqsFR/iPTxdxVobPHSYL0e', 'indarwati@bps.go.id', 'Ketua Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(6, '197010121994011001', 'Suyanto, S.E.,M.M.', 'https://simasnor.3525.web.id/uploads/files/8f2bopsulg_rjzt.png', 8, 'Aktif', '$2y$10$ARsx7ZnrGS5EBofV2X0f/.glSNdh5IzOdOJfjE0IAB52IezAo7S3y', 'suyanto2@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(7, '197012152006041010', 'Jumariyono', 'https://simasnor.3525.web.id/uploads/files/zxnoy064k9_qu3m.png', 7, 'Aktif', '$2y$10$XD78qo6o7sT63yhv.2TmHuD8JpkUs1eYh.c2vs7a0./Q9/CgY0Q5O', 'jumariyono@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(8, '197111141994011001', 'Soleh Afandi, SE, M.M.', 'https://simasnor.3525.web.id/uploads/files/is2f1wo8_4jaxgq.png', 3, 'Aktif', '$2y$10$XYwJemvRwMZ8Sfxtv5Zr4OSEbP0o1YXA.CR2GZEuQfu6MFXaC5Nsu', 'soleh.afandi@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(9, '197203141996121001', 'Tulus Soebagijo, S.Si., M.Si.', 'https://simasnor.3525.web.id/uploads/files/w03nf91p4jqmoey.png', 8, 'Aktif', '$2y$10$LFGMCROqmQwdhF17IN3K3OyrM1A5RoCY1H7PFnxkIiS777XQHDNru', 't_bagijo@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(10, '197204212006041018', 'Fakhrudin Mawardi, S.Sos', 'https://simasnor.3525.web.id/uploads/files/mxcad4vo1nhjeu9.png', 6, 'Aktif', '$2y$10$ZRh5DQPwbJkkv2np7Vybru5lQO6lhYkcVk0i.odEzeOuqR2/5UMaK', 'fakhrudin.mawardi@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(11, '197312151994011001', 'Maryono, S.E.', 'https://simasnor.3525.web.id/uploads/files/0ae_lvtxibq5dn3.png', 1, 'Aktif', '$2y$10$689uoFWTUM641rZSZ9R/QORPw2s7HPl3RD/.r2o2/H0JPnnyP3OYK', 'aryo.maryono@bps.go.id', 'Ketua Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(12, '197405182001121003', 'Eva Miswantoro', 'https://simasnor.3525.web.id/uploads/files/1dvy57q6s_zafit.png', 1, 'Aktif', '$2y$10$v9Fil8SPpQtqhYwVotb6ouFyqXzbZd0OyK2rTZ5aQbZ7UNmj0YCrG', 'eva.miswantoro@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(14, '197805192006042003', 'Afuwa,S.Si, M.M.', 'https://simasnor.3525.web.id/uploads/files/6xasyhtbnw_gzur.png', 8, 'Aktif', '$2y$10$961wN.SJneeZVZVa/RsbiOkCl3ECO8BakfCVVC9ZP06FXMMy1TWVq', 'afuwa@bps.go.id', 'Ketua Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(15, '197812202008011007', 'Agung Samsri Handoko, A.P., S.M.', 'https://simasnor.3525.web.id/uploads/files/8smq4jk5h20tdnv.png', 4, 'Aktif', '$2y$10$Tn2WI3MSRXzEJbiPGpmksekuMuCUatNBqEzeI4eWW7aPZookU.fte', 'agung.handoko@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(16, '198105152007011002', 'Dwi Hery Setyawan, A.P., S.M.', 'https://simasnor.3525.web.id/uploads/files/1qdc6in_5apj482.png', 4, 'Aktif', '$2y$10$jKuxta8W9v1JvivHswMy2uuI8cXsaXpNwYs9.923ry.2B2.ges1dK', 'dwi.setyawan@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(17, '198211302007012009', 'Hanifah, S.ST', 'https://simasnor.3525.web.id/uploads/files/7kdop_junmzt489.png', 4, 'Aktif', '$2y$10$tnD3OolLtxvbDP/IWdf56.zRYXcWqGEycMBf5Kx/FNWM9CyGO9iRW', 'nifah@bps.go.id', 'Ketua Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(18, '198304192011011010', 'Muhamad Alamsyah, S.Si, M.Ec.Dev.', 'https://simasnor.3525.web.id/uploads/files/p76dwnfgxumvrlt.jpg', 6, 'Aktif', '$2y$10$aXDkOYrg5CAO5C.nZmLwDees058tluBoG3IsE6YRERfkS5Fukn8HW', 'alamsyah@bps.go.id', 'Ketua Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(19, '198401262009111001', 'Yanuar Teguh Imannudin, S.Kom.', 'https://simasnor.3525.web.id/uploads/files/ix3lywr5n_v6aot.png', 4, 'Aktif', '$2y$10$GqR4xfKLqQK9mPZE9yBpWupMYpbj9hOUfk9PL5tjv1wTZd0e64eku', 'yanuar.imannudin@bps.go.id', 'Ketua Tim', NULL, NULL, '2026-03-29 13:03:17', NULL),
(21, '198410202005021001', 'Achmad Tadjeri, SM', 'https://simasnor.3525.web.id/uploads/files/rybupzk1jc7vw24.jpg', 4, 'Aktif', '$2y$10$zQlS.M.fEc5Pgc4n9fBZleo.MLVvG/ocGPlZ1d9gSqKoQEqY7yNRG', 'atadjeri@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(22, '198504132009022011', 'Nur Ilma Mahmudah, A.Md., S.M.', 'https://simasnor.3525.web.id/uploads/files/qa1odbsmh8p5yz4.png', 1, 'Aktif', '$2y$10$p8S0QL./rOf0UkvVxljzAuVnHhChn57vcNMhxHqx1Ny2dRbWYupqO', 'nur.mahmudah@bps.go.id', 'TU', NULL, NULL, '2026-03-04 00:00:00', NULL),
(24, '198507162009022007', 'Andini Mardiana, S.ST, MT', 'https://simasnor.3525.web.id/uploads/files/pe3q9j5f71xlum_.jpg', 3, 'Aktif', '$2y$10$UIwWKPB.3j8VVeCkRR6kDe.HxWcgN9pQQ1G3yvnH1zx1YRl/uI/IW', 'andinim@bps.go.id', 'Ketua Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(25, '198511052009021005', 'Triyadi Pendriyanto, A.Md.', 'https://simasnor.3525.web.id/uploads/files/jkdhq3m8x4b5owg.png', 1, 'Aktif', '$2y$10$jSSEyLrTGoBz5z3vcv4XqeVuEIDLpiS2ddqQEEOJRtsZx.oZCjVru', 'triyadi.p@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(26, '198701092009022008', 'Evie Dian Pratiwi, S.Si., M.E.', 'https://simasnor.3525.web.id/uploads/files/2sin_o8m7fqv1g6.png', 1, 'Aktif', '$2y$10$gLGLSjMCvcfU2dmpG3nPLerhUcstZazbxg/0GLvEr5WhVcXBU3U6W', 'eviedianpratiwi@bps.go.id', 'TU', NULL, NULL, '2026-03-04 00:00:00', NULL),
(27, '198712092010122002', 'Yusi Krismaningtyas, S.ST, M.Ec.Dev.', 'https://simasnor.3525.web.id/uploads/files/d0571_xczl39s8m.png', 7, 'Aktif', '$2y$10$KgF8METAstmkSRYQhM2NlO9EjIcJtZZ1T3nUfUPhxFDI/SbvQszCK', 'yusikrisma@bps.go.id', 'Ketua Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(28, '198806142012121002', 'Muhammad Sayyidin Syadad, A.Md., S.M.', 'https://simasnor.3525.web.id/uploads/files/edrzw2tsh6g30ac.png', 5, 'Aktif', '$2y$10$QpSLPdoYZK1WZcU9qhDTGufkIXV3o0mlKsdYnxJSuesErH.VrzfCy', 'muhammad.syadad@bps.go.id', 'Anggota Tim', '078c7ee62491a4cc2ae8c5ba39995827', NULL, '2026-03-04 00:00:00', NULL),
(29, '199004202013112001', 'Pakih Dian Fitriastuti, S.ST, M.SE.', 'https://simasnor.3525.web.id/uploads/files/apz13bc82hqrn_l.png', 3, 'Aktif', '$2y$10$g2yjgcNO1qF1hZ9sbGfme.k9mYVI9j7qsU8CLGXZLhrtDFcESp3zO', 'pakihdianf@bps.go.id', 'Anggota Tim', '32c9f680bf3b9afa2e7adc57a00cbe06', NULL, '2026-03-04 00:00:00', NULL),
(30, '199109042014102001', 'Hafidlotut Daroini, S.ST', 'https://simasnor.3525.web.id/uploads/files/9tvnipbafo5zmd8.png', 9, 'Aktif', '$2y$10$A1jnSspAzlpmeUuBxnZjYuXpbBBp7.xYtBzqT8eV4iglQjn1Q5gQO', 'hafid.daroini@bps.go.id', 'Ketua Tim', '04937bda80a27fc1717485c7a27354d1', NULL, '2026-03-04 00:00:00', NULL),
(31, '199206292014122001', 'Zumrotul Ilmiyah, S.ST', 'https://simasnor.3525.web.id/uploads/files/b01ptwa6v27q45g.png', 4, 'Aktif', '$2y$10$3Mpny3F/Z/p.wWXaUsaRcuuaSChZbHCgvqn8/Nlbw0wIOITZNo/ke', 'zumrotul.ilmiyah@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(32, '199210302014122001', 'Windari Rachmadiah Putri, S.ST', 'https://simasnor.3525.web.id/uploads/files/78kvzt6jpg4b5yf.png', 2, 'Aktif', '$2y$10$QaO3GbH16KT1GGiVB2lsd.ustqBEbxClZa5q4hiMY9PNasrH64U0K', 'windari.putri@bps.go.id', 'Ketua Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(33, '199404192017012001', 'Lutfi Sehat Utami, S.ST', 'https://simasnor.3525.web.id/uploads/files/3_wml80us19ry6v.png', 6, 'Aktif', '$2y$10$./SJ/DkwF4PIAMv/kJeRyO0I.Dvh1z9gB5MG3u7KU736qAJW1eXsC', 'lutfi.utami@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(34, '199406242016022001', 'Bunga Ayu Alimah, S.ST', 'https://simasnor.3525.web.id/uploads/files/9x0meksrp5iua2y.png', 9, 'Aktif', '$2y$10$IdLj0XnI2ObZLZghjdiAeOZ3JgtyLRBHieSCwr8jMpmMNwXEbYOuq', 'bunga.ayu@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(35, '199501142019032002', 'Iga Ayu Tiya Anandra, S.Si.', 'https://simasnor.3525.web.id/uploads/files/ca9ewzlq8fonyjh.png', 8, 'Aktif', '$2y$10$9NVPCKgaNiiIAXy3QcpRduS1geIp8k814VuFEhn2VVLYfbkxKp/b2', 'iga.ayu@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(36, '199511292022032026', 'Leli Meganingrum, A.Md.', 'https://simasnor.3525.web.id/uploads/files/drcj231uz7fkplo.png', 2, 'Aktif', '$2y$10$vVw.Q/wI3yV.p6s.RqZV/.mDIMAW5J7PfonVJGE2M/17ctIXkcNna', 'leli.meganingrum@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(37, '199707012022032020', 'Erla Ratih Yuliajanah, A.Md.Stat.', 'https://simasnor.3525.web.id/uploads/files/z8nuv1j6woil95p.png', 5, 'Aktif', '$2y$10$4YqCY3du3ZShT49JVXyfLOqZWx6yz.utnDX8ON4qNC7fOCjv6db3u', 'erla.ratih@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(38, '199707232019122002', 'Yulian Dwi Intan Anggraeni, S.Tr.Stat.', 'https://simasnor.3525.web.id/uploads/files/amt7qe4z95_xscv.png', 3, 'Aktif', '$2y$10$RqZ51LIs2fjxP1N.y8ponu80fEFZqoTLJ/.R5e.ojGNfcRfZEOQ0u', 'yulian.dia@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(39, '199712312019012001', 'Hanif Wulandari Romadhonia Ibrahim, S.Tr.Stat.', 'https://simasnor.3525.web.id/uploads/files/8y5elunw40bik6g.png', 7, 'Aktif', '$2y$10$p/vnt.PEazvn9kQTL2u6ROXrxtmRa3CVPQmPvzayjJpqcxs9fbsTO', 'wulandarihanif@bps.go.id', 'Anggota Tim', NULL, NULL, '2026-03-04 00:00:00', NULL),
(41, '198506012025212030', 'Nailiatul Maghfirowati', 'https://simasnor.3525.web.id/uploads/files/ez8t6qynvs_a3uo.png', 1, 'Aktif', '$2y$10$rCFcwK6ocDShegwiX1s.2eXY1Pa1xwv0E77ZgujdWw93xrpNRuYJ2', 'nailimaghfiro-pppk@bps.go.id', 'TU', NULL, NULL, '2026-03-04 00:00:00', NULL),
(42, '3525061310790003', 'Suwanto', '', 1, 'Aktif', '$2y$10$Y8rX9iGVdMsigjoOAWLP/eidAt3IxOF90.FqTfzln1vcZxgGsPJJ2', 'suwantowa@gmail.com', 'Mitra', NULL, NULL, '2026-03-04 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bast`
--
ALTER TABLE `bast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copy_spk_to_detail`
--
ALTER TABLE `copy_spk_to_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_matrik_honor`
--
ALTER TABLE `detail_matrik_honor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_matrik_translok`
--
ALTER TABLE `detail_matrik_translok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ed_detail_matrik_honor`
--
ALTER TABLE `ed_detail_matrik_honor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_translok`
--
ALTER TABLE `jadwal_translok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_bulan`
--
ALTER TABLE `master_bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_jabatan_petugas`
--
ALTER TABLE `master_jabatan_petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_petugas`
--
ALTER TABLE `master_petugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `master_ppk`
--
ALTER TABLE `master_ppk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_rincian_output`
--
ALTER TABLE `master_rincian_output`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_satuan`
--
ALTER TABLE `master_satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_sbml`
--
ALTER TABLE `master_sbml`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_survei`
--
ALTER TABLE `master_survei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_tim`
--
ALTER TABLE `master_tim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrik_honor`
--
ALTER TABLE `matrik_honor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrik_translok`
--
ALTER TABLE `matrik_translok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spk`
--
ALTER TABLE `spk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bast`
--
ALTER TABLE `bast`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=557;

--
-- AUTO_INCREMENT for table `copy_spk_to_detail`
--
ALTER TABLE `copy_spk_to_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_matrik_honor`
--
ALTER TABLE `detail_matrik_honor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1103;

--
-- AUTO_INCREMENT for table `detail_matrik_translok`
--
ALTER TABLE `detail_matrik_translok`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `ed_detail_matrik_honor`
--
ALTER TABLE `ed_detail_matrik_honor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal_translok`
--
ALTER TABLE `jadwal_translok`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `master_bulan`
--
ALTER TABLE `master_bulan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `master_jabatan_petugas`
--
ALTER TABLE `master_jabatan_petugas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_petugas`
--
ALTER TABLE `master_petugas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=741;

--
-- AUTO_INCREMENT for table `master_ppk`
--
ALTER TABLE `master_ppk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_rincian_output`
--
ALTER TABLE `master_rincian_output`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `master_satuan`
--
ALTER TABLE `master_satuan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `master_sbml`
--
ALTER TABLE `master_sbml`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_survei`
--
ALTER TABLE `master_survei`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `master_tim`
--
ALTER TABLE `master_tim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `matrik_honor`
--
ALTER TABLE `matrik_honor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `matrik_translok`
--
ALTER TABLE `matrik_translok`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `spk`
--
ALTER TABLE `spk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=470;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

-- --------------------------------------------------------

--
-- Structure for view `cek_honor_petugas_view`
--
DROP TABLE IF EXISTS `cek_honor_petugas_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cek_honor_petugas_view`  AS SELECT `dmh`.`id` AS `id`, `dmh`.`id_matrik_honor` AS `id_matrik_honor`, `dmh`.`id_petugas` AS `id_petugas`, `dmh`.`jabatan` AS `jabatan`, `dmh`.`volume_spk` AS `volume_spk`, `dmh`.`volume_bast` AS `volume_bast`, `dmh`.`satuan` AS `satuan`, `dmh`.`harga_satuan` AS `harga_satuan`, `dmh`.`total` AS `total`, (`dmh`.`volume_bast` * `dmh`.`harga_satuan`) AS `total_honor`, `dmh`.`cek_double` AS `cek_double`, `dmh`.`status_spk` AS `status_spk`, `dmh`.`id_spk` AS `id_spk`, `dmh`.`status_bast` AS `status_bast`, `dmh`.`id_bast` AS `id_bast`, `dmh`.`rincian_output_detail` AS `rincian_output_detail`, `dmh`.`kak` AS `kak`, `dmh`.`sk` AS `sk`, `dmh`.`spk_ttd` AS `spk_ttd`, `dmh`.`bast_ttd` AS `bast_ttd`, `dmh`.`selesai_fp` AS `selesai_fp`, `dmh`.`pengajuan_spm` AS `pengajuan_spm`, `dmh`.`terbit_sp2d` AS `terbit_sp2d`, `dmh`.`tgl_sp2d` AS `tgl_sp2d`, `mp`.`nik` AS `nik`, `mp`.`nama_petugas` AS `nama_petugas`, `mp`.`alamat` AS `alamat`, `mp`.`kecamatan` AS `kecamatan`, `mp`.`pekerjaan` AS `pekerjaan`, `mp`.`email` AS `email`, `mp`.`sobat_id` AS `sobat_id`, `mp`.`jabatan` AS `jabatan_petugas`, `mp`.`status_petugas` AS `status_petugas`, `mh`.`id` AS `id_matrik`, `mh`.`id_rincian_output` AS `id_rincian_output`, `mh`.`id_nama_survei` AS `id_nama_survei`, `mh`.`uraian_kegiatan` AS `uraian_kegiatan`, `mh`.`id_bulan_pelaksanaan` AS `id_bulan_pelaksanaan`, `mh`.`tahun` AS `tahun`, `mh`.`jangka_waktu` AS `jangka_waktu`, `mh`.`cek_double` AS `cek_double_matrik`, `mh`.`no_surat_spk` AS `no_surat_spk`, `mh`.`no_surat_bast` AS `no_surat_bast`, `mh`.`create_by` AS `create_by`, `mh`.`create_at` AS `create_at`, `mh`.`harga_satuan_honor` AS `harga_satuan_honor`, `mb`.`bulan` AS `bulan`, `mb`.`kode_bulan` AS `kode_bulan`, `ms`.`satuan` AS `nama_satuan` FROM ((((`detail_matrik_honor` `dmh` join `master_petugas` `mp` on((`dmh`.`id_petugas` = `mp`.`id`))) join `matrik_honor` `mh` on((`dmh`.`id_matrik_honor` = `mh`.`id`))) join `master_bulan` `mb` on((`mh`.`id_bulan_pelaksanaan` = `mb`.`id`))) join `master_satuan` `ms` on((`dmh`.`satuan` = `ms`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `cek_sbml_view`
--
DROP TABLE IF EXISTS `cek_sbml_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cek_sbml_view`  AS SELECT `dmh`.`id` AS `id`, `dmh`.`id_matrik_honor` AS `id_matrik_honor`, `dmh`.`id_petugas` AS `id_petugas`, `dmh`.`jabatan` AS `jabatan`, `dmh`.`volume_spk` AS `volume_spk`, `dmh`.`volume_bast` AS `volume_bast`, `dmh`.`satuan` AS `satuan`, `dmh`.`harga_satuan` AS `harga_satuan`, `dmh`.`total` AS `total`, `mh`.`id_rincian_output` AS `id_rincian_output`, `mh`.`id_nama_survei` AS `id_nama_survei`, `mh`.`uraian_kegiatan` AS `uraian_kegiatan`, `mh`.`id_bulan_pelaksanaan` AS `id_bulan_pelaksanaan`, `mh`.`tahun` AS `tahun`, `mh`.`jangka_waktu` AS `jangka_waktu`, `mp`.`nik` AS `nik`, `mp`.`nama_petugas` AS `nama_petugas`, `mb`.`bulan` AS `bulan`, `mb`.`kode_bulan` AS `kode_bulan`, `ms`.`satuan` AS `satuan2` FROM ((((`detail_matrik_honor` `dmh` join `matrik_honor` `mh` on((`dmh`.`id_matrik_honor` = `mh`.`id`))) join `master_petugas` `mp` on((`dmh`.`id_petugas` = `mp`.`id`))) join `master_bulan` `mb` on((`mh`.`id_bulan_pelaksanaan` = `mb`.`id`))) join `master_satuan` `ms` on((`dmh`.`satuan` = `ms`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `copy_petugas_view`
--
DROP TABLE IF EXISTS `copy_petugas_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `copy_petugas_view`  AS SELECT `mro`.`id` AS `id_rincian_output`, `dmh`.`id` AS `id`, `mp`.`id` AS `id_petugas`, `dmh`.`status_bast` AS `status_bast`, `dmh`.`status_spk` AS `status_spk`, `dmh`.`volume_spk` AS `volume_spk`, `dmh`.`volume_bast` AS `volume_bast`, `dmh`.`harga_satuan` AS `harga_satuan`, `dmh`.`total` AS `total`, `mh`.`uraian_kegiatan` AS `uraian_kegiatan`, `mh`.`tahun` AS `tahun`, `mh`.`jangka_waktu` AS `jangka_waktu`, `mh`.`harga_satuan_honor` AS `harga_satuan_honor`, `mp`.`nik` AS `nik`, `mp`.`nama_petugas` AS `nama_petugas`, `mp`.`alamat` AS `alamat`, `mp`.`kecamatan` AS `kecamatan`, `mp`.`pekerjaan` AS `pekerjaan`, `mp`.`email` AS `email`, `mp`.`sobat_id` AS `sobat_id`, `mp`.`status_petugas` AS `status_petugas`, `mjp`.`id` AS `id_jabatan`, `mjp`.`jabatan` AS `jabatan`, `mjp`.`keterangan_jabatan` AS `keterangan_jabatan`, `ms`.`id` AS `id_satuan`, `ms`.`satuan` AS `satuan`, `mro`.`rincian_output` AS `rincian_output`, `mro`.`status_rincian_output` AS `status_rincian_output`, `ms2`.`id` AS `id_nama_survei`, `ms2`.`nama_survei` AS `nama_survei`, `mb`.`bulan` AS `bulan`, `mb`.`kode_bulan` AS `kode_bulan`, concat(`mb`.`bulan`,' ',`mh`.`tahun`) AS `bulan_tahun` FROM (((((((`detail_matrik_honor` `dmh` join `matrik_honor` `mh` on((`dmh`.`id_matrik_honor` = `mh`.`id`))) join `master_petugas` `mp` on((`dmh`.`id_petugas` = `mp`.`id`))) join `master_jabatan_petugas` `mjp` on((`dmh`.`jabatan` = `mjp`.`id`))) join `master_satuan` `ms` on((`dmh`.`satuan` = `ms`.`id`))) join `master_rincian_output` `mro` on((`mh`.`id_rincian_output` = `mro`.`id`))) join `master_survei` `ms2` on((`mh`.`id_nama_survei` = `ms2`.`id`))) join `master_bulan` `mb` on((`mh`.`id_bulan_pelaksanaan` = `mb`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `jadwal_translok_view`
--
DROP TABLE IF EXISTS `jadwal_translok_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jadwal_translok_view`  AS SELECT `jt`.`id` AS `id`, `jt`.`id_user` AS `id_user`, `jt`.`id_nama_survei` AS `id_nama_survei`, `jt`.`tgl_translok` AS `tgl_translok`, month(`jt`.`tgl_translok`) AS `bulan`, year(`jt`.`tgl_translok`) AS `tahun`, `jt`.`cek_double` AS `cek_double`, `u`.`nip` AS `nip`, `u`.`nama_user` AS `nama_user`, `u`.`foto` AS `foto`, `u`.`id_tim` AS `id_tim`, `u`.`status` AS `status`, `u`.`password` AS `password`, `u`.`email` AS `email`, `u`.`role` AS `role`, `ms`.`nama_survei` AS `nama_survei` FROM ((`jadwal_translok` `jt` join `user` `u` on((`jt`.`id_user` = `u`.`id`))) join `master_survei` `ms` on((`jt`.`id_nama_survei` = `ms`.`id`))) ORDER BY `u`.`nama_user` ASC, `jt`.`tgl_translok` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `rekap_translok_view`
--
DROP TABLE IF EXISTS `rekap_translok_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rekap_translok_view`  AS SELECT `dmt`.`id` AS `id`, `dmt`.`id_matrik_translok` AS `id_matrik_translok`, `dmt`.`id_user` AS `id_user`, `dmt`.`volume` AS `volume`, `dmt`.`satuan` AS `satuan`, `dmt`.`harga_satuan` AS `harga_satuan`, `dmt`.`total` AS `total`, `dmt`.`st` AS `st`, `dmt`.`visum` AS `visum`, `dmt`.`s_non_pkd` AS `s_non_pkd`, `dmt`.`laporan` AS `laporan`, `dmt`.`dokumentasi` AS `dokumentasi`, `dmt`.`selesai_fp` AS `selesai_fp`, `dmt`.`pengajuan_spm` AS `pengajuan_spm`, `dmt`.`terbit_sp2d` AS `terbit_sp2d`, `dmt`.`tgl_sp2d` AS `tgl_sp2d`, `dmt`.`keterangan` AS `keterangan`, `mt`.`id_tim` AS `id_tim`, `mt`.`id_nama_survei` AS `id_nama_survei`, `mt`.`id_bulan_pengajuan` AS `id_bulan_pengajuan`, `mt`.`tahun` AS `tahun`, `u`.`nip` AS `nip`, `u`.`nama_user` AS `nama_user`, `ms2`.`nama_survei` AS `nama_survei`, `mb`.`bulan` AS `bulan`, `mb`.`kode_bulan` AS `kode_bulan` FROM (((((`detail_matrik_translok` `dmt` join `matrik_translok` `mt` on((`dmt`.`id_matrik_translok` = `mt`.`id`))) join `user` `u` on((`dmt`.`id_user` = `u`.`id`))) join `master_satuan` `ms` on((`dmt`.`satuan` = `ms`.`id`))) join `master_survei` `ms2` on((`mt`.`id_nama_survei` = `ms2`.`id`))) join `master_bulan` `mb` on((`mt`.`id_bulan_pengajuan` = `mb`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `sbml_detail_view`
--
DROP TABLE IF EXISTS `sbml_detail_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sbml_detail_view`  AS SELECT `mro`.`id` AS `id_rincian_output`, `dmh`.`id` AS `id`, `mp`.`id` AS `id_petugas`, `dmh`.`status_bast` AS `status_bast`, `dmh`.`status_spk` AS `status_spk`, `dmh`.`volume_spk` AS `volume_spk`, `dmh`.`volume_bast` AS `volume_bast`, `dmh`.`harga_satuan` AS `harga_satuan`, `dmh`.`total` AS `total`, `mh`.`uraian_kegiatan` AS `uraian_kegiatan`, `mh`.`tahun` AS `tahun`, `mh`.`jangka_waktu` AS `jangka_waktu`, `mh`.`harga_satuan_honor` AS `harga_satuan_honor`, `mp`.`nik` AS `nik`, `mp`.`nama_petugas` AS `nama_petugas`, `mp`.`alamat` AS `alamat`, `mp`.`kecamatan` AS `kecamatan`, `mp`.`pekerjaan` AS `pekerjaan`, `mp`.`email` AS `email`, `mp`.`sobat_id` AS `sobat_id`, `mp`.`status_petugas` AS `status_petugas`, `mjp`.`jabatan` AS `jabatan`, `mjp`.`keterangan_jabatan` AS `keterangan_jabatan`, `ms`.`satuan` AS `satuan`, `mro`.`rincian_output` AS `rincian_output`, `mro`.`status_rincian_output` AS `status_rincian_output`, `ms2`.`nama_survei` AS `nama_survei`, `mb`.`bulan` AS `bulan`, `mb`.`kode_bulan` AS `kode_bulan`, concat(`mb`.`bulan`,' ',`mh`.`tahun`) AS `bulan_tahun` FROM (((((((`detail_matrik_honor` `dmh` join `matrik_honor` `mh` on((`dmh`.`id_matrik_honor` = `mh`.`id`))) join `master_petugas` `mp` on((`dmh`.`id_petugas` = `mp`.`id`))) join `master_jabatan_petugas` `mjp` on((`dmh`.`jabatan` = `mjp`.`id`))) join `master_satuan` `ms` on((`dmh`.`satuan` = `ms`.`id`))) join `master_rincian_output` `mro` on((`mh`.`id_rincian_output` = `mro`.`id`))) join `master_survei` `ms2` on((`mh`.`id_nama_survei` = `ms2`.`id`))) join `master_bulan` `mb` on((`mh`.`id_bulan_pelaksanaan` = `mb`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `sbml_view`
--
DROP TABLE IF EXISTS `sbml_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sbml_view`  AS SELECT `s`.`id` AS `id`, `s`.`id_petugas` AS `id_petugas`, `s`.`nik` AS `nik`, `s`.`nama_petugas` AS `nama_petugas`, `s`.`alamat` AS `alamat`, `s`.`kecamatan` AS `kecamatan`, `s`.`uraian_kegiatan` AS `uraian_kegiatan`, `s`.`rincian_output` AS `rincian_output`, `s`.`nama_survei` AS `nama_survei`, `s`.`bulan_tahun` AS `bulan_tahun`, sum((`s`.`volume_bast` * `s`.`harga_satuan`)) AS `total_honor` FROM `spk_view` AS `s` GROUP BY `s`.`id_petugas`, `s`.`nik`, `s`.`nama_petugas`, `s`.`alamat`, `s`.`kecamatan`, `s`.`bulan_tahun` HAVING (`total_honor` > (select `master_sbml`.`sbml` from `master_sbml` limit 1)) ORDER BY `s`.`id_petugas` ASC, `s`.`bulan_tahun` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `spk_view`
--
DROP TABLE IF EXISTS `spk_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `spk_view`  AS SELECT `mro`.`id` AS `id_rincian_output`, `dmh`.`id` AS `id`, `mp`.`id` AS `id_petugas`, `dmh`.`status_bast` AS `status_bast`, `dmh`.`status_spk` AS `status_spk`, `dmh`.`volume_spk` AS `volume_spk`, `dmh`.`volume_bast` AS `volume_bast`, `dmh`.`harga_satuan` AS `harga_satuan`, `dmh`.`total` AS `total`, `mh`.`uraian_kegiatan` AS `uraian_kegiatan`, `mh`.`tahun` AS `tahun`, `mh`.`jangka_waktu` AS `jangka_waktu`, `mh`.`harga_satuan_honor` AS `harga_satuan_honor`, `mp`.`nik` AS `nik`, `mp`.`nama_petugas` AS `nama_petugas`, `mp`.`alamat` AS `alamat`, `mp`.`kecamatan` AS `kecamatan`, `mp`.`pekerjaan` AS `pekerjaan`, `mp`.`email` AS `email`, `mp`.`sobat_id` AS `sobat_id`, `mp`.`status_petugas` AS `status_petugas`, `mjp`.`jabatan` AS `jabatan`, `mjp`.`keterangan_jabatan` AS `keterangan_jabatan`, `ms`.`satuan` AS `satuan`, `mro`.`rincian_output` AS `rincian_output`, `mro`.`status_rincian_output` AS `status_rincian_output`, `ms2`.`nama_survei` AS `nama_survei`, `mb`.`bulan` AS `bulan`, `mb`.`kode_bulan` AS `kode_bulan`, concat(`mb`.`bulan`,' ',`mh`.`tahun`) AS `bulan_tahun` FROM (((((((`detail_matrik_honor` `dmh` join `matrik_honor` `mh` on((`dmh`.`id_matrik_honor` = `mh`.`id`))) join `master_petugas` `mp` on((`dmh`.`id_petugas` = `mp`.`id`))) join `master_jabatan_petugas` `mjp` on((`dmh`.`jabatan` = `mjp`.`id`))) join `master_satuan` `ms` on((`dmh`.`satuan` = `ms`.`id`))) join `master_rincian_output` `mro` on((`mh`.`id_rincian_output` = `mro`.`id`))) join `master_survei` `ms2` on((`mh`.`id_nama_survei` = `ms2`.`id`))) join `master_bulan` `mb` on((`mh`.`id_bulan_pelaksanaan` = `mb`.`id`))) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
