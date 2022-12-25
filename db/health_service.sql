-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 05:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_service`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_cat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_cat`, `created_at`, `updated_at`) VALUES
(1, 'Obat Bebas', '2022-12-12 21:15:05', '2022-12-12 21:15:05'),
(2, 'Obat Bebas Terbatas', '2022-12-12 21:15:36', '2022-12-12 21:15:36'),
(3, 'Obat Keras', '2022-12-20 02:27:28', '2022-12-20 02:27:28'),
(4, 'Obat Narkotika', '2022-12-20 02:28:07', '2022-12-20 02:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id_doctor` bigint(20) UNSIGNED NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` bigint(20) UNSIGNED NOT NULL,
  `doctor_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'doctor',
  `open` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id_doctor`, `doctor_name`, `education`, `university`, `specialization`, `doctor_desc`, `address`, `phone_num`, `doctor_img`, `account`, `email`, `password`, `role`, `open`, `created_at`, `updated_at`) VALUES
(1, 'Budi Hartono', 'S2 Kedokteran', 'UI', 1, 'Lorem ipsum', 'Singaraja', '081333444555', 'path', 2, '', '', 'doctor', 0, NULL, NULL),
(2, 'Kanaya', 'S2 Kedokteran', 'UGM', 6, '<p>hello</p>', 'Denpasar', '085154689700', 'assets/images/1671716015Screenshot_20221214_115029.png', 0, '', '', 'doctor', 0, NULL, '2022-12-22 18:18:08'),
(5, 'Putra', 'S1 Kedokteran', 'UNAIR', 1, '<p><em>Hello&nbsp;</em></p>', 'Badung', '081444666555', 'assets/images/1671533185logo-undiksha-terbaru-bw-1.png', 0, '', '', 'doctor', 0, '2022-12-20 02:46:25', '2022-12-20 02:46:25'),
(6, 'Harry', 'S1 Kedokteran', 'UNUD', 6, '<p>Test</p>', 'Jakarta', '081469997886', 'assets/images/1671533230Hrs4GXxs.jpg', 0, '', '', 'doctor', 0, '2022-12-20 02:47:10', '2022-12-20 02:47:10'),
(7, 'Rudi', 'S1 Kedokteran', 'UNILA', 5, '<p>Dummy</p>', 'Sambangan', '081649998663', 'assets/images/1671533298WhatsApp Image 2022-04-24 at 1.51.45 PM.jpeg', 0, '', '', 'doctor', 0, '2022-12-20 02:48:18', '2022-12-20 02:48:18'),
(9, 'Kartika', 'S1 Kedokteran', 'UNDIP', 6, '<p>Deskripsi</p>', 'Penarukan', '085698770113', 'assets/images/1671537629plankton-walk.png', 0, '', '', 'doctor', 0, '2022-12-20 04:00:29', '2022-12-20 04:00:29'),
(11, 'Dimas', 'S1 Kedokteran', 'UNS', 7, '<p>Hai</p>', 'Kayuputih', '089655387460', 'assets/images/1671715703Screenshot_20221215_120604.png', 0, '', '', 'doctor', 0, '2022-12-22 05:28:23', '2022-12-23 07:18:22');

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
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id_form` bigint(20) UNSIGNED NOT NULL,
  `doctor` bigint(20) UNSIGNED NOT NULL,
  `form_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_phonenum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_date` date NOT NULL,
  `form_time` time NOT NULL,
  `accept` tinyint(1) NOT NULL DEFAULT 0,
  `doctor_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id_form`, `doctor`, `form_name`, `form_phonenum`, `address`, `form_desc`, `form_date`, `form_time`, `accept`, `doctor_note`, `created_at`, `updated_at`) VALUES
(2, 1, 'Adi Sastrawan', '081338556440', 'Banjar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae ligula ut diam posuere condimentum. Ut nec turpis justo. In et pellentesque nisl. Ut eget augue risus. Vivamus at iaculis risus. Praesent ac viverra justo. Nam non tortor sem. Mauris vitae purus finibus, venenatis diam pulvinar, tincidunt ipsum. Nunc sollicitudin euismod sapien, vel pharetra risus luctus vitae. Curabitur aliquam finibus libero ac interdum. Suspendisse pellentesque ex nec erat eleifend, eu euismod est maximus. Sed tincidunt fringilla elementum. Morbi vestibulum mauris in leo convallis porttitor. Sed egestas molestie nibh eu suscipit. In sollicitudin ligula in urna dictum viverra. Quisque augue eros, fringilla a erat et, mollis volutpat justo.', '2022-12-21', '07:16:00', 1, 'Test', NULL, '2022-12-23 17:43:56'),
(4, 2, 'Bayu Danu', '085338674951', 'Sepang', 'Saya mengalami sakit tenggorokan', '2022-12-06', '16:25:20', 2, NULL, NULL, '2022-12-23 17:44:22'),
(5, 2, 'Tegar ', '085338613987', 'Gilimanuk', 'Saya mengalami pilek', '2022-12-11', '10:05:00', 2, NULL, NULL, '2022-12-23 00:00:12');

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
(5, '2022_12_04_015904_create_specializations_table', 1),
(6, '2022_12_05_111719_create_doctors_table', 1),
(7, '2022_12_06_111720_create_forms_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `toko`, `harga`, `nama`, `image`, `created_at`, `updated_at`) VALUES
(22, 2, 'sumber ga waras', '1.000.000', 'paracetamol gila', 'assets/images/1671971583paracetamol.png', '2022-12-19 22:51:19', '2022-12-25 04:33:03'),
(26, 1, 'Apa aja boleh', '30.000', 'bodrex', 'assets/images/1671542907bodrex3.jpg', '2022-12-20 05:28:27', '2022-12-20 05:28:27'),
(27, 4, 'Jaya Abadi', '1.000', 'aviter', 'assets/images/1671543413aviter3.jpg', '2022-12-20 05:36:53', '2022-12-20 05:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id_specialization` bigint(20) UNSIGNED NOT NULL,
  `name_specialization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id_specialization`, `name_specialization`, `created_at`, `updated_at`) VALUES
(1, 'Spesialis Anak (Sp.A)', NULL, NULL),
(2, 'Spesialis THT (Sp.THT)', NULL, NULL),
(5, 'Spesialis Kandungan (Sp.OG)', NULL, NULL),
(6, 'Spesialis Kulit (Sp.KK)', NULL, NULL),
(7, 'Spesialis Mata (Sp.M)', '2022-12-22 05:00:04', '2022-12-22 05:00:04'),
(11, 'Spesialis Paru (Sp.P)', '2022-12-22 19:51:22', '2022-12-22 19:51:22'),
(12, 'Spesialis Penyakit Mulut (Sp. PM)', '2022-12-22 19:57:43', '2022-12-22 20:10:32');

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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test@gmail.com', NULL, '$2y$10$aYpiuiFxkj28VyK7cqf8d.6OBTR1dr8IRSzdRXqU6AJrrSlIoZuTm', 'admin', NULL, '2022-12-19 20:40:26', '2022-12-19 20:40:26'),
(2, 'Doctor 1', 'doctor1@gmail.com', NULL, '$2y$10$stnvnfzg.WKND81YXZ0M4uYB.PJrOolTO1WY24nF4pnV5PZPottGm', 'doctor', NULL, '2022-12-23 07:31:38', '2022-12-23 07:31:38'),
(3, 'User 1', 'user@gmail.com', NULL, '$2y$10$8NeUwoEqv6dOEStS6JyWGeohL.zWX.SAoVsAct3.5ebWqpitM0c4W', 'user', NULL, '2022-12-23 07:32:54', '2022-12-23 07:32:54'),
(4, 'User 2', 'user2@gmail.com', NULL, '$2y$10$fu8iSmmXKAmrMRI/xacBnuAc/XZYRvjEVxrkxFkQ2tTldH.Lh3NJu', 'user', NULL, '2022-12-23 08:04:28', '2022-12-23 08:04:28'),
(5, 'a', 'a@gmail.com', NULL, '$2y$10$HW0mpBZbIJ10ClOKOXq8duSWJEBlJ7zRafsU1IJEkwVGdJ3QmfnBu', 'user', NULL, '2022-12-23 17:47:26', '2022-12-23 17:47:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_cat_unique` (`name_cat`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id_doctor`),
  ADD KEY `doctors_specialization_foreign` (`specialization`),
  ADD KEY `doctor_fk_account` (`account`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id_form`),
  ADD KEY `forms_doctor_foreign` (`doctor`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id_specialization`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id_doctor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id_form` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id_specialization` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
