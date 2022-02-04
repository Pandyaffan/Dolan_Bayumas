-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 04:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata_banyumas`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeries`
--

CREATE TABLE `galeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeries`
--

INSERT INTO `galeries` (`id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(3, 'The Village Purwokerto', 'The Village Purwokerto, Eropa Mini-nya Jawa Tengah dengan Banyak Spot Foto Instagramable', '1643379258.jpg', '2022-01-28 07:14:18', '2022-01-28 18:36:49'),
(4, 'Air Terjun Curug Jenggala', 'Wisata Alam Asri', '1643379374.jpg', '2022-01-28 07:16:14', '2022-01-28 07:16:14'),
(10, 'Baturaden (Pancuran Pitu)', 'Wisata Air Panas', '1643423434.jpg', '2022-01-28 19:30:34', '2022-01-28 19:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_10_122607_create_pariwisatas_table', 1),
(6, '2022_01_27_034226_create_galeries_table', 2),
(7, '2022_01_27_045706_create_pesanans_table', 2),
(8, '2022_01_27_140642_create_payments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pariwisatas`
--

CREATE TABLE `pariwisatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pariwisatas`
--

INSERT INTO `pariwisatas` (`id`, `title`, `slug_url`, `deskripsi`, `lokasi`, `harga`, `image`, `created_at`, `updated_at`) VALUES
(2, 'The Village Purwokerto', 'The-Village-Purwokerto', '<p dir=\"ltr\" style=\"line-height:1.2;margin-left: 23.9pt;text-indent: 20.1pt;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 7.5pt 0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The Village Purwokerto masih sangat baru sebagai lokasi wisata terpopuler disana. Baru saja diresmikan pada tanggal 7 Februari 2018 oleh Bapak Ganjar Pranowo selaku Gubernur Jawa Tengah. Meski masuk dalam daftar wisata paling baru di Jawa Tengah,namun sudah banyak pengunjung yang berdatangan. Baik itu warga setempat maupun luar daerah yang telah banyak hadir untuk mengunjungi wisata baru ini.</span></p><p><span id=\"docs-internal-guid-17913d89-7fff-f621-782a-940f3299d5f3\"></span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 23.9pt;text-indent: 20.1pt;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:7.5pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">The Village Purwokerto adalah sebagai tempat wisata sekaligus wahana edukasi bagi para pengunjung. Terdapat banyak banguan dengan desain eksterior yang sangat megah dan elegan, menjadikan wisata ini memiliki daya tarik tersendiri. Banyak wisatawan yang tertarik untuk mengunjunginya, sebab foto-foto yang beredar di sosial media seperti kemegahan bangunan. Terdapat juga taman-taman yang hijau dan indah, menjadi panorama yang sangat memanjakan mata para pengunjungnya.</span></p>', 'Alamat: Jalan Raya Baturaden KM.07 Rempoah Dusun I, Baturraden, Banyumas, Jawa Tengah, Indonesia, 53151', '25000', '1643378988.jpg', '2022-01-28 07:09:48', '2022-01-28 18:36:30'),
(3, 'Air Terjun Curug Jenggala', 'Air Terjun Curug Jenggala', '<p dir=\"ltr\" style=\"line-height:1.2;margin-left: 24pt;text-indent: 19.9pt;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 18pt 0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Curug Jenggala adalah air terjun setinggi kurang lebih 30 meter yang berada di Banyumas. Air terjun ini merupakan salah satu rangkaian air terjun yang berada di kawasan Gunung Slamet. Sebelumnya, Curug Jenggala memiliki nama Curug Tempuan, mewakili kondisinya yang menjadi pertemuan Sungai Banjaran dan Sungai Mertelu.</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 24pt;text-indent: 19.9pt;text-align: justify;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;padding:0pt 0pt 18pt 0pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span><span style=\"color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;; font-size: 12pt; white-space: pre-wrap; text-indent: 19.9pt;\">Tempat wisata ini semakin menarik banyak pengunjung, terutama dari kalangan anak muda, setelah ditata menjadi tempat yang cantik dan menarik untuk berswafoto. Meski membutuhkan waktu untuk dicapai, namun akses jalan menuju air terjun kini sudah sangat rapi dan tertata. Rasa lelah akan terlupakan dengan pemandangan alam Gunung Slamet yang masih hijau dan terjaga.</span></p>', 'Curug Jenggala adalah bagian dari kompleks dusun wisata Kalipagu. Lokasinya berada di Jalan Pangeran Limboro, Dusun III Kalipagu, Ketenger, Kecamatan Baturaden, Kabupaten Banyumas, Jawa Tengah.', '8000', '1643379116.jpg', '2022-01-28 07:11:56', '2022-01-28 07:11:56'),
(8, 'Baturaden (Pancuran Pitu)', 'Baturaden (Pancuran Pitu)', '<p>Pancuran Pitu menyajikan relaksasi tubuh dan pikiran dengan menikmati air hangat dengan kandungan belerang yang tinggi. Selain cocok untuk relaksasi, air yang ada di Pancuran Pitu juga rekomended untuk media pengobatan. Khususnya penyakit kulit.</p><p>Selain menikmati sensasi berendam dan bermandi-mandi air hangat. Anda juga bisa menikmati sajian air terjun indah yang ada di obyek wisata Baturraden satu ini. Rasakan sensasi liburan yang mendamaikan jiwa di tempat wisata baturraden bersama keluarga tercinta ketika hari libur tiba.</p><div><br></div>', 'Lokasi wisata Pancuran Pitu berada di Baturaden,  Kalipagu, Ketenger, Kec. Baturaden, Kab. Banyumas, Jawa Tengah. Untuk jarak destinasi wisata alam Curug Pitu kurang lebih 19 km ketika anda berangkat dari pusat kota Purwokerto Jawa Tengah.', '10000', '1643423396.jpg', '2022-01-28 19:29:56', '2022-01-28 19:29:56'),
(9, 'wonosob', 'wonosob', '<p>daerah atas</p>', 'ya diwonosobo', '20000', '1643424429.jpg', '2022-01-28 19:47:09', '2022-01-28 19:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `norek` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `bank`, `norek`, `name`, `created_at`, `updated_at`) VALUES
(5, 'BCA', 1234567891, 'Miranda Dwi Febriliana', '2022-01-28 07:50:11', '2022-01-28 07:50:11'),
(10, 'Mandiri', 1234567891, 'Putri', '2022-01-28 19:31:17', '2022-01-28 19:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pariwisata_id` int(11) NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` date NOT NULL,
  `jk` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiket` int(11) NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('success','failed') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `pariwisata_id`, `invoice`, `name`, `email`, `telepon`, `pesan`, `jk`, `tiket`, `payment`, `status`, `image`, `created_at`, `updated_at`) VALUES
(10, 8, 'kKa201k4', 'Putri', 'pandyaffandaffar@gmail.com', '089674646147', '2022-01-30', 'perempuan', 1, '10', 'success', '1643423627.jpg', '2022-01-28 19:33:26', '2022-01-28 19:33:47'),
(11, 3, '4pJJQswl', 'Temperature', 'affandaffar@gmail.com', '147258369789', '2022-02-01', 'laki-laki', 2, NULL, NULL, NULL, '2022-01-28 19:44:37', '2022-01-28 19:44:37'),
(12, 3, 'cas2yTRd', 'Putri', 'affandaffar@gmail.com', '16494161948', '2022-02-01', 'laki-laki', 2, NULL, NULL, NULL, '2022-01-28 19:45:15', '2022-01-28 19:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Temperature', '19102154@ittelkom-pwt.ac.id', NULL, '$2y$10$cD/z3/C9/BKTLZmfjvMWDOcTN5teEj4GPYgA1BA5/s1OGAiXCiou2', NULL, '2022-01-28 19:28:54', '2022-01-28 19:28:54'),
(8, 'PAD', 'affandaffar@gmail.com', NULL, '$2y$10$mrrInkDEXHWK1dYIF3iqPu7YBIRukEEP3JMT2HCkjoTRuX4gz/R06', NULL, '2022-01-28 19:39:19', '2022-01-28 19:39:19'),
(9, 'PAD', 'pandyaffan01@gmail.com', NULL, '$2y$10$ekA25tQpmN8v6kWljmVJBuJ3PzP/OJpzBIDIkVJwAHIcAw23mPwCC', NULL, '2022-01-28 19:48:59', '2022-01-28 19:48:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pariwisatas`
--
ALTER TABLE `pariwisatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pariwisatas`
--
ALTER TABLE `pariwisatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
