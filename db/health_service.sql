-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 01:38 PM
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
  `open` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id_doctor`, `doctor_name`, `education`, `university`, `specialization`, `doctor_desc`, `address`, `phone_num`, `doctor_img`, `open`, `created_at`, `updated_at`) VALUES
(1, 'Budi Hartono', 'S2 Kedokteran', 'UI', 11, 'dr. Jaka Pradipta, Sp.P merupakan seorang Dokter Paru. Saat ini, beliau berpraktik di Mayapada Hospital Kuningan, Jakarta dan Siloam Hospitals Asri. Adapun layanan medis yang dapat beliau berikan meliputi : Konsultasi perihal penyakit paru.\r\n\r\ndr. Jaka Pradipta, Sp.P menamatkan pendidikan Dokter Spesialis Paru di Fakultas Kedokteran Universitas Indonesia. Beliau juga terhimpun dalam organisasi Ikatan Dokter Indonesia (IDI) dan Perhimpunan Dokter Paru Indonesia (PDPI).', 'Singaraja', '081333444555', 'assets/images/doctor1.png', 0, NULL, NULL),
(2, 'Adi Satriyo', 'S2 Kedokteran', 'UGM', 6, 'dr. Adi Satriyo, Sp.KK, FINSDV adalah seorang dokter spesialis kulit kelamin yang menyelesaikan pendidikan spesialis kulit dan kelamin di Fakultas Kedokteran Universitas Indonesia (FK UI) tahun 2013. Beliau merupakan anggota aktif Perhimpunan Dokter Spesialis Kulit dan Kelamin Indonesia (PERDOSKI), International Dermoscopy Society (IDS), dan European Academy of Dermatology and Venereology (EADV).\r\n\r\ndr. Adi Satriyo, Sp.KK, FINSDV adalah dosen di FK UI dan RS Jejaring RSUP Persahabatan. Saat ini, beliau berpraktik sebagai dokter spesialis kulit dan kelamin di Klinik Royal Medika dan RS Agung. Adapun layanan kesehatan yang diberikan adalah konsultasi dan tindakan medis di bidang kesehatan kulit dan kelamin, diantaranya adalah kesehatan kulit anak dan dewasa, penyakit kulit alergi dan autoimun, estetika medis, pengobatan kutil dan deteksi dini kanker kulit, serta pengobatan penyakit kelamin (infeksi menular seksual).', 'Denpasar', '085154689700', 'assets/images/doctor2.jpg', 1, NULL, '2022-12-22 18:18:08'),
(5, 'Rifan Rauzi', 'S1 Kedokteran', 'UNAIR', 1, 'dr. Rifan Fauzie, Sp.A (K) adalah seorang Dokter Spesialis Anak Konsultan Respirology dengan pengalaman 11 tahun. Beliau dapat membantu layanan Konsultasi kesehatan anak yang dikhususkan pada Respirology.\r\n\r\ndr. Rifan Fauzie menamatkan pendidikan Kedokteran Spesialis Kesehatan Anak di Universitas Indonesia, lulus pada tahun 2006. Selain ittu, beliau juga merupakan anggota Ikatan Dokter Anak Indonesia (IDAI), Ikatan Dokter Indonesia (IDI).', 'Badung', '081444666555', 'assets/images/doctor3.jpg', 0, '2022-12-20 02:46:25', '2022-12-20 02:46:25'),
(6, 'Vonny Indrianti Widjojo', 'S1 Kedokteran', 'UNUD', 6, 'dr. Vonny Indriati Widjojo, Sp.KK merupakan seorang Dokter Spesialis Kulit dan Kelamin yang telah memiliki pengalaman di Rumah Sakit Swasta Nasional dan Rumah Sakit Pemerintah. Saat ini, dr. Vonny Indriati berpraktek di Rumah Sakit Mitra Keluarga Bekasi dan Rumah Sakit Mitra Keluarga Bekasi Timur sebagai Dokter Spesialis Kulit dan Kelamin.\r\n\r\ndr. Vonny Indriati telah menamatkan pendidikan Kedokteran Spesialis Kulit dan Kelamin di Universitas Diponegoro pada tahun 1997. Adapun layanan medis yang diberikan oleh beliau, meliputi konsultasi dan layanan terkait Kulit dan Kelamin.', 'Jakarta', '081469997886', 'assets/images/doctor-female.png', 1, '2022-12-20 02:47:10', '2022-12-20 02:47:10'),
(7, 'Amelia Suganda', 'S1 Kedokteran', 'UNILA', 5, 'dr. Amelia Suganda, Sp.OG merupakan seorang Dokter Kandungan. Beliau lulusan pendidikan Spesialis Obstetri dan Ginekologi Universitas Padjadjaran, Bandung. Saat ini beliau berpraktek di Rumah Sakit Mitra Plumbon Cirebon dan RS Sumber Kasih Cirebon.\r\n\r\ndr. Amelia Suganda, Sp.OG merupakan anggota dari Ikatan Dokter Indonesia (IDI) dan Perkumpulan Obstetri dan Ginekologi Indonesia (POGI). Layanan yang diberikan oleh beliau yaitu konsultasi mengenai kesehatan Kebidanan dan Kandungan.', 'Sambangan', '081649998663', 'assets/images/doctor-female.png', 0, '2022-12-20 02:48:18', '2022-12-20 02:48:18'),
(9, 'Sujan Ali Fing', 'S1 Kedokteran', 'UNDIP', 7, 'dr. Sujan Ali Fing, SpM, MSOphth merupakan Dokter Spesialis Mata yang saat ini aktif berpraktik di Rumah Sakit Khusus Mata Prima Vision, Medan. Sebelum bergabung di RS Khusus Mata Prima Vision. Beliau merupakan Chief of Ophthalmologist di RS Columbia Asia Medan. Beliau terhimpun dalam Perhimpunan Dokter Spesialis Mata Indonesia (PERDAMI) dan Ikatan Dokter Indonesia (IDI).\r\n\r\nSebagai salah satu lulusan terbaik dari Fakultas Kedokteran Umum, Universitas Sumatera Utara, beliau memperoleh beasiswa penuh dari Lee Foundation, Singapore, untuk melanjutkan Spesialis Mata (Master of Surgery, Ophthalmology) di National University Hospital, Malaysia (HUKM) dan juga telah menyelesaikan fellowship di bidang Vitreoretina. Adapun layanan yang dr. Sujan berikan meliputi Pemeriksaan dan Konsultasi Mata.', 'Penarukan', '085698770113', 'assets/images/doctor2.jpg', 1, '2022-12-20 04:00:29', '2022-12-20 04:00:29'),
(11, 'Dimas', 'S1 Kedokteran', 'UNS', 7, '<p>Hai</p>', 'Kayuputih', '089655387460', 'assets/images/doctor4.jpg', 0, '2022-12-22 05:28:23', '2022-12-23 07:18:22'),
(23, 'test', 'test', 'test', 1, '<p>test</p>', 'test', '081', 'assets/images/1672201409doctor2.png', 0, '2022-12-27 20:23:30', '2022-12-27 20:23:30');

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
  `doctor` bigint(20) UNSIGNED DEFAULT NULL,
  `form_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_phonenum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_date` date DEFAULT NULL,
  `form_time` time DEFAULT NULL,
  `accept` tinyint(1) NOT NULL DEFAULT 0,
  `doctor_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id_form`, `doctor`, `form_name`, `form_phonenum`, `address`, `form_desc`, `form_date`, `form_time`, `accept`, `doctor_note`, `created_at`, `updated_at`) VALUES
(2, 1, 'Adi', '081338556440', 'Banjar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae ligula ut diam posuere condimentum. Ut nec turpis justo. In et pellentesque nisl. Ut eget augue risus. Vivamus at iaculis risus. Praesent ac viverra justo. Nam non tortor sem. Mauris vitae purus finibus, venenatis diam pulvinar, tincidunt ipsum. Nunc sollicitudin euismod sapien, vel pharetra risus luctus vitae. Curabitur aliquam finibus libero ac interdum. Suspendisse pellentesque ex nec erat eleifend, eu euismod est maximus. Sed tincidunt fringilla elementum. Morbi vestibulum mauris in leo convallis porttitor. Sed egestas molestie nibh eu suscipit. In sollicitudin ligula in urna dictum viverra. Quisque augue eros, fringilla a erat et, mollis volutpat justo.', '2022-12-21', '07:16:00', 1, 'Test', NULL, '2022-12-23 17:43:56'),
(4, 2, 'Bayu', '085338674951', 'Sepang', 'Saya mengalami sakit tenggorokan', '2022-12-06', '16:25:20', 2, NULL, NULL, '2022-12-23 17:44:22'),
(5, 2, 'Tegar ', '085338613987', 'Gilimanuk', 'Saya mengalami pilek', '2022-12-11', '10:05:00', 2, NULL, NULL, '2022-12-23 00:00:12'),
(10, 2, 'Agung', '088', 'Singaraja', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae ligula ut diam posuere condimentum. Ut nec turpis justo. In et pellentesque nisl. Ut eget augue risus. Vivamus at iaculis risus. Praesent ac viverra justo. Nam non tortor sem. Mauris vitae purus finibus, venenatis diam pulvinar, tincidunt ipsum. Nunc sollicitudin euismod sapien, vel pharetra risus luctus vitae. Curabitur aliquam finibus libero ac interdum. Suspendisse pellentesque ex nec erat eleifend, eu euismod est maximus. Sed tincidunt fringilla elementum. Morbi vestibulum mauris in leo convallis porttitor. Sed egestas molestie nibh eu suscipit. In sollicitudin ligula in urna dictum viverra. Quisque augue eros, fringilla a erat et, mollis volutpat justo.', '2022-12-26', '10:56:00', 0, NULL, '2022-12-25 18:56:44', '2022-12-25 18:56:44'),
(11, 6, 'Sastra', '087946302111', 'Jakarta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae ligula ut diam posuere condimentum. Ut nec turpis justo. In et pellentesque nisl. Ut eget augue risus. Vivamus at iaculis risus. Praesent ac viverra justo. Nam non tortor sem. Mauris vitae purus finibus, venenatis diam pulvinar, tincidunt ipsum. Nunc sollicitudin euismod sapien, vel pharetra risus luctus vitae. Curabitur aliquam finibus libero ac interdum. Suspendisse pellentesque ex nec erat eleifend, eu euismod est maximus. Sed tincidunt fringilla elementum. Morbi vestibulum mauris in leo convallis porttitor. Sed egestas molestie nibh eu suscipit. In sollicitudin ligula in urna dictum viverra. Quisque augue eros, fringilla a erat et, mollis volutpat justo.', '2022-12-28', '10:03:00', 0, NULL, '2022-12-25 18:58:05', '2022-12-25 18:58:05'),
(13, 6, 'Kadek', '081769853045', 'Negara', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vitae ligula ut diam posuere condimentum. Ut nec turpis justo. In et pellentesque nisl. Ut eget augue risus. Vivamus at iaculis risus. Praesent ac viverra justo. Nam non tortor sem. Mauris vitae purus finibus, venenatis diam pulvinar, tincidunt ipsum. Nunc sollicitudin euismod sapien, vel pharetra risus luctus vitae. Curabitur aliquam finibus libero ac interdum. Suspendisse pellentesque ex nec erat eleifend, eu euismod est maximus. Sed tincidunt fringilla elementum. Morbi vestibulum mauris in leo convallis porttitor. Sed egestas molestie nibh eu suscipit. In sollicitudin ligula in urna dictum viverra. Quisque augue eros, fringilla a erat et, mollis volutpat justo.', '2022-12-22', '16:33:18', 0, NULL, NULL, NULL),
(14, 2, 'hapus', '000', 'Tes', 'test', '2022-12-28', '08:59:00', 0, NULL, '2022-12-27 16:59:57', '2022-12-27 16:59:57'),
(15, 2, 'aaaa', '081', 'aaa', 'aaaa', '2022-12-13', '11:03:00', 2, NULL, '2022-12-27 19:03:36', '2022-12-27 19:03:48'),
(16, 2, 'Test', '088', 'Sudaji', 'test', '2022-12-28', '12:18:00', 2, NULL, '2022-12-27 20:18:09', '2022-12-28 18:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `toko` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `category_id`, `toko`, `harga`, `nama`, `image`, `deskripsi`, `created_at`, `updated_at`) VALUES
(22, 2, 'Tempo', '10.000', 'Paracetamol', 'assets/images/1672019473paracetamol.png', 'PARACETAMOL merupakan obat yang dapat digunakan untuk meringankan rasa sakit pada sakit kepala, sakit gigi, dan menurunkan demam. Paracetamol bekerja pada pusat pengatur suhu di hipotalamus untuk menurunkan suhu tubuh (antipiretik) serta menghambat sintesis prostaglandin sehingga dapat mengurangi nyeri ringan sampai sedang (analgesik).', '2022-12-19 22:51:19', '2022-12-25 17:51:13'),
(26, 1, 'Kalbe', '30.000', 'Bodrex', 'assets/images/bodrex3.jpg', 'BODREX merupakan obat dengan kandungan Paracetamol dan Caffeine. Obat ini digunakan untuk meringankan sakit kepala, sakit gigi, dan menurunkan demam. Dosis\r\nDewasa dan anak lebih dari 12 tahun : 1 tablet, 3-4 kali sehari.\r\nAnak 6-12 tahun : 0.5 - 1 tablet, 3-4 kali sehari.\r\n\r\nAturan Pakai\r\nDikonsumsi setelah makanan', '2022-12-20 05:28:27', '2022-12-25 17:49:31'),
(27, 4, 'Jaya Abadi', '10.000', 'Aviter', 'assets/images/aviter3.jpg', 'Aviter adalah suplemen yang digunakan untuk meningkatkan sistem imunitas atau sistem kekebalan tubuh. Aviter mengandung glukosamin, asam amino, dan juga beberpa jenis vitamin, serta mineral yang sangat dibutuhkan oleh tubuh. Aviter diproduksi oleh Interbat dalam bentuk sediaan serbuk sachet.', '2022-12-20 05:36:53', '2022-12-25 17:49:43'),
(29, 1, 'Kimia Farma', '20.000', 'Imboost', 'assets/images/imboost.png', 'KANDUNGAN/KOMPOSISI\r\nEchinacea 250 mg, Zinc Picolinate 10 mg\r\n\r\nKONTRAINDIKASI // JANGAN DIGUNAKAN OLEH\r\nTidak boleh digunakan oleh penderita sklerosis multipel, penyakit leukemia, tuberkulosis, AIDS, dan penyakit autoimun.\r\nPerhatian\r\n\r\nDOSIS\r\nDewasa dan Anak diatas 12 tahun: 1 tablet, 2-3 kali per hari\r\n\r\nCARA PEMAKAIAN\r\nSesudah makan\r\n\r\nINDIKASI/ KEGUNAAN\r\nIMBOOST TABLET merupakan suplemen dengan kandungan Echinacea purpurea herb dry extract dan Zn Piccolinate dalam bentuk tablet salut selaput. Suplemen ini digunakan untuk meningkatkan daya tahan tubuh yang berfungsi untuk mencegah dari sakit dan mempercepat penyembuhan.\r\n\r\nMANUFAKTUR\r\nSoho Industri Pharmasi\r\n\r\nKEMASAN\r\n1 Strip : 10 tablet\r\n\r\nPERHATIAN KHUSUS\r\nHentikan pemakaian jika terjadi reaksi alergi. Tidak dianjurkan digunakan lebih dari 8 minggu. Hindari penggunaan pada wanita hamil dan menyusui. Konsultasikan dengan dokter jika digunakan bersama obat lain.\r\n\r\n\r\nCARA PENYIMPANAN\r\nSimpan di tempat yang kering dan terhindar dari sinar matahari langsung\r\n\r\nPERLU RESEP\r\nNo\r\n\r\nGOLONGAN\r\nVitamin & Supplement', '2022-12-25 17:38:03', '2022-12-25 17:38:03'),
(30, 1, 'Bayer', '15.000', 'Redoxon', 'assets/images/1672019568image.jpg', 'Redoxon Triple Action\r\nRedoxon terus berinovasi memberikan perlindungan optimal. Kini dilengkapi dengan vitamin D yang bekerja sama dengan vitamin C dan Zinc membantu menjaga daya tahan tubuh pada saat perjalanan, kondisi perubahan cuaca, dan paparan polusi\r\n\r\nInformasi Nutrisi AKG%\r\n• Vitamin C 1000 mg 1110%\r\n• Vitamin D 400IU 65%\r\n• Zinc 10 mg 75%\r\n\r\nKegunaan\r\nSuplementasi Vitamin C dan Zinc untuk memelihara daya tahan tubuh\r\n\r\nVitamin C\r\nVitamin C 1000 mg bermanfaat untuk membantu menjaga daya tahan tubuh dan kesehatan serta berperan sebagai antioksidan untuk menangkal radikal bebas.\r\n\r\nVitamin D\r\nVitamin D bermanfaat untuk membantu kinerja kelompok sel darah putih dalam menjaga daya tahan tubuh.\r\n\r\nZinc\r\n• Membantu kinerja Vitamin C sehingga menjadi lebih efektif dalam menjaga daya tahan tubuh.\r\n• Zinc tidak dapat diproduksi tubuh. Jika asupan dari makanan tidak mencukupi kebutuhan harian, bila perlu, dapat diberikan suplementasi.\r\n\r\nAnjuran Pemakaian\r\nSatu tablet effervescent per hari, larutkan dalam segelas air\r\n\r\nPetunjuk Penggunaan\r\nLarutkan dalam segelas air dan tunggu sampai benar-benar larut.', '2022-12-25 17:52:48', '2022-12-25 17:52:48'),
(31, 2, 'Sterling', '25.000', 'Insto', 'assets/images/1672184886insto.jpg', NULL, '2022-12-27 15:48:06', '2022-12-27 15:48:06');

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
(12, 'Spesialis Penyakit Mulut (Sp. PM)', '2022-12-22 19:57:43', '2022-12-22 20:10:32'),
(13, 'Spesialis Jantung', '2022-12-27 15:51:29', '2022-12-27 15:51:29'),
(14, 'test', '2022-12-27 20:21:20', '2022-12-27 20:21:20');

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
  ADD KEY `doctors_specialization_foreign` (`specialization`);

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
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicine_fk_categories` (`category_id`);

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
  MODIFY `id_doctor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id_form` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id_specialization` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctor_fk_specialization` FOREIGN KEY (`specialization`) REFERENCES `specializations` (`id_specialization`);

--
-- Constraints for table `forms`
--
ALTER TABLE `forms`
  ADD CONSTRAINT `forms_fk_doctors` FOREIGN KEY (`doctor`) REFERENCES `doctors` (`id_doctor`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_fk_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
