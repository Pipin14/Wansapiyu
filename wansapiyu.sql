-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2024 at 02:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wansapiyu`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) NOT NULL,
  `konten` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `section`, `konten`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah Kami', 'Layanan jasa fotografi kami dimulai dengan sebuah visi untuk mengabadikan momen-momen berharga dalam kehidupan setiap individu dan keluarga. Berdiri pada awal tahun 2024, kami berkomitmen untuk memberikan pengalaman fotografi yang tidak hanya mengutamakan kualitas, tetapi juga emosional dan penuh makna.\n\nSepanjang waktu, kami terus berinovasi dengan peralatan terbaru, serta meningkatkan keterampilan fotografer kami untuk memastikan hasil yang memuaskan dan dapat dikenang seumur hidup. Dengan ratusan klien yang telah puas, kami bangga menjadi bagian dari momen-momen besar dalam hidup mereka.', 'images/about_us/01JEJH1C1N45V0M3PYJ3F87AP4.jpg', '2024-12-05 10:04:57', '2024-12-07 23:59:14'),
(2, 'Visi Misi', 'Visi: Menjadi penyedia layanan fotografi terbaik yang mampu mengabadikan setiap momen kehidupan dengan cara yang emosional, personal, dan profesional, sehingga memberikan kenangan abadi bagi setiap klien kami.\n\nMisi: Misi kami adalah memberikan layanan fotografi berkualitas tinggi dengan sentuhan personal, menggunakan teknologi terbaru untuk mengabadikan momen berharga dan memastikan kepuasan klien melalui pengalaman yang profesional dan menyenangkan.\n', 'images/about_us/01JEJH1RZM010JF66P9CD3NT73.jpg', '2024-12-05 10:06:50', '2024-12-07 23:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `anggotas`
--

CREATE TABLE `anggotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggotas`
--

INSERT INTO `anggotas` (`id`, `nama_anggota`, `role`, `photo`, `linkedin`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(4, 'Santiko', 'Fotografer Senior', 'images/anggota/01JEJH3PQ3JS1G3DCJ5Z79V96E.jpg', NULL, 'https://www.linkedin.com/feed/', 'https://www.linkedin.com/feed/', '2024-11-27 22:51:26', '2024-12-08 00:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1734093450),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1734093450;', 1734093450),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1734093228),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1734093228;', 1734093228);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `tipe_paket` varchar(255) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `nama_pelanggan`, `tipe_paket`, `harga_paket`, `waktu`, `tempat`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Ayu', 'ultimate', 1500000, '2024-12-04 14:30:00', 'Rumah Pribadi', 'paid', '2024-12-06 07:07:16', '2024-12-06 07:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 'Apa jenis layanan fotografi yang Anda tawarkan?', 'Kami menawarkan berbagai layanan fotografi termasuk pernikahan, foto produk, foto keluarga, acara korporat, dan banyak lagi. Setiap sesi disesuaikan dengan kebutuhan dan keinginan Anda.', '2024-12-05 10:28:50', '2024-12-05 10:28:50'),
(2, ' Berapa lama waktu yang dibutuhkan untuk mendapatkan foto setelah sesi pemotretan?', 'Biasanya, kami memerlukan waktu 1 hingga 2 minggu untuk memproses foto dan mengirimkan hasilnya kepada Anda. Waktu dapat bervariasi tergantung pada jenis sesi pemotretan.', '2024-12-05 10:30:26', '2024-12-05 19:19:16'),
(3, 'Apakah saya bisa memilih lokasi untuk pemotretan?', ' Tentu! Kami sangat fleksibel dengan lokasi pemotretan. Anda dapat memilih lokasi yang sesuai dengan tema atau gaya yang Anda inginkan.', '2024-12-05 19:19:44', '2024-12-05 19:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `galeri_portofolio` varchar(255) NOT NULL,
  `portofolio_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `galeri_portofolio`, `portofolio_id`, `created_at`, `updated_at`) VALUES
(8, 'images/galeri/01JF00AN8FA4N0GZRJ2B6M8T6J.jpg', 1, '2024-12-13 05:36:35', '2024-12-13 05:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe_paket` varchar(255) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id`, `tipe_paket`, `harga_paket`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Paket 1', 250000, 'Benefit Layanan Kami\n1. Kualitas Tinggi\n2. Pengalaman yang Personal\n3. Fotografer Profesional\n4. Hasil Foto Cepat & Memuaskan\n5. Layanan Pelanggan 24/7\n\nSyarat & Ketentuan\n\nPemesanan\n* Pemesanan layanan harus dilakukan minimal 7 hari sebelum tanggal acara.\n\nPembayaran\n* Pembayaran dilakukan 50% di muka sebagai tanda jadi dan 50% sisanya sebelum atau pada hari acara.', 'images/layanans/01JEJGT6BK6JX4E6PEBHRJSKBP.jpg', '2024-12-05 09:53:24', '2024-12-07 23:55:19'),
(2, 'Paket 2', 275000, 'Benefit Layanan Kami\n1. Kualitas Tinggi\n2. Pengalaman yang Personal\n3. Fotografer Profesional\n4. Hasil Foto Cepat & Memuaskan\n5. Layanan Pelanggan 24/7\n\nSyarat & Ketentuan\n\nPemesanan\n* Pemesanan layanan harus dilakukan minimal 7 hari sebelum tanggal acara.\n\nPembayaran\n* Pembayaran dilakukan 50% di muka sebagai tanda jadi dan 50% sisanya sebelum atau pada hari acara.', 'images/layanans/01JEJGV2RBYKN85B52ANWNBVZ1.jpg', '2024-12-05 09:53:58', '2024-12-07 23:55:48'),
(3, 'Photo group', 350000, 'Benefit Layanan Kami\n1. Kualitas Tinggi\n2. Pengalaman yang Personal\n3. Fotografer Profesional\n4. Hasil Foto Cepat & Memuaskan\n5. Layanan Pelanggan 24/7\n\nSyarat & Ketentuan\n\nPemesanan\n* Pemesanan layanan harus dilakukan minimal 7 hari sebelum tanggal acara.\n\nPembayaran\n* Pembayaran dilakukan 50% di muka sebagai tanda jadi dan 50% sisanya sebelum atau pada hari acara.', 'images/layanans/01JEJGSWQ0GFP0C6A32ECQPGB4.jpg', '2024-12-05 09:55:41', '2024-12-07 23:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '0001_01_01_000000_create_users_table', 1),
(10, '0001_01_01_000001_create_cache_table', 1),
(11, '0001_01_01_000002_create_jobs_table', 1),
(12, '2024_11_24_031206_create_customers_table', 1),
(13, '2024_11_24_040955_create_layanans_table', 2),
(14, '2024_11_26_100309_create_portofolios_table', 2),
(15, '2024_11_27_080205_create_galeris_table', 2),
(16, '2024_11_27_151144_create_about_us_table', 2),
(18, '2024_11_27_165725_create_anggotas_table', 3),
(19, '2024_12_05_171623_create_f_a_q_s_table', 4),
(20, '2024_12_06_061512_create_testimonials_table', 5),
(21, '2024_12_06_065617_create_testimonials_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portofolios`
--

CREATE TABLE `portofolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar_portofolio` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portofolios`
--

INSERT INTO `portofolios` (`id`, `judul`, `deskripsi`, `gambar_portofolio`, `created_at`, `updated_at`) VALUES
(1, 'Graduation Maleficient', 'Judul lagu aja mantan terindah, masa foto wisuda kamu sama keluarga gabisa jadi kenangan terindah?\nTapi kamu gaperlu lagi khawatir, soalnya wansapiyu.photo kembali lagi nih menyediakan jasa foto wisuda kamu menjadi foto terindah sekali seumur hidup bersama keluarga tercinta.\nTunggu apalagi? ', 'images/portofolio/01JEJGMAVND21BEYXDC591YTRS.jpg', '2024-12-05 09:25:16', '2024-12-07 23:52:07'),
(2, 'Wedding Incredibles', 'Judul lagu aja mantan terindah, masa foto wedding kamu sama pasangan tercint gabisa jadi kenangan terindah?\nTapi kamu gaperlu lagi khawatir, soalnya wansapiyu.photo kembali lagi nih menyediakan jasa foto wedding kamu menjadi foto terindah sekali seumur hidup bersama pasangan dan keluarga tercinta.', 'images/portofolio/01JEJGMM1KS9N688N23YNW5J6H.jpg', '2024-12-05 09:43:02', '2024-12-07 23:52:16'),
(3, 'Miracles of Moments', 'Judul lagu aja mantan terindah, masa foto wisuda kamu sama keluarga gabisa jadi kenangan terindah?\nTapi kamu gaperlu lagi khawatir, soalnya wansapiyu.photo kembali lagi nih menyediakan jasa foto wisuda kamu menjadi foto terindah sekali seumur hidup bersama keluarga tercinta.\nTunggu apalagi? ', 'images/portofolio/01JEJGNFZNMVR92NAGRY053E1S.jpg', '2024-12-05 09:44:01', '2024-12-07 23:52:45');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3yJ5dWZZO4F3wC4hU3D8iSlVcPOKGGVGOtYgKZ7b', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:133.0) Gecko/20100101 Firefox/133.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiOWt4cWQ4NzRTamJ0dzhEalNabFdJSEZxcWM0Nmx1RHBGQTRwY2I4cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sYXlhbmFuLzEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJGlwbXUvZy5VdWFZOEFyUzNSSWJzV3VFYS5pNkg3T2M3WG8wdjRYYy5kOW50NkdCZkxnbjR5IjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1734094536),
('GIM7fkL1bANvhhp9dFfRSTXrG26ej7wfEFsHjTMw', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:133.0) Gecko/20100101 Firefox/133.0', 'YTo2OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL3VzZXJzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6InBFc0Y0eDIzcHpuaTJwcEkwTkNuQ3FwTkZQTFZqcG5DbEI0YWY1cWEiO3M6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkaXBtdS9nLlV1YVk4QXJTM1JJYnNXdUVhLmk2SDdPYzdYbzB2NFhjLmQ5bnQ2R0JmTGduNHkiO30=', 1733645046),
('u4KvJLxRTnL3lvrH1tD18sqWlN3xf2VZ674xnyeX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:133.0) Gecko/20100101 Firefox/133.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTzZteVZMOGYxVHZKWnhXU25DRkEydEgyV2JlRGhubVdOMjFybXFPWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1734093394),
('ViGTDw1FZls6gSQ4NIKYtAkCGrmrXwGc4q5L9xbc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:133.0) Gecko/20100101 Firefox/133.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQUhBdnR3blhJSm4xUTNoR0EzNDR3c1NzeFg1aDJtdUhOdVNxTmgzZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hYm91dC11cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1733812731),
('WXZBXbhIA4aOZAu2dMyHYhwdYRgDqXEE2otsxOWv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:133.0) Gecko/20100101 Firefox/133.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQnhOWXVaQzhzZWRwT2VTSGVoTU9oY2lqME9vVlQ5eE5OUVMxSUViQyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1734093393);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_klien` varchar(255) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `nama_klien`, `ulasan`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'coba', 'csa', 5, '2024-12-06 01:08:50', '2024-12-06 01:08:50'),
(2, 'Andika Prataman', 'cobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacoba', 5, '2024-12-06 01:38:17', '2024-12-06 01:38:17'),
(3, 'Bobi Kertanegara', 'cobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacobacoba', 5, '2024-12-06 01:40:49', '2024-12-08 00:49:10'),
(4, 'Juminten', 'cobacobacobacobacobacobacobacobacobacobacobacoba', 4, '2024-12-06 01:43:31', '2024-12-06 01:43:31'),
(5, 'Budi Hartanto', 'Ini berisi ulasan yang akan ditampilkan pada bagian testimoni', 5, '2024-12-06 02:08:15', '2024-12-06 02:08:15'),
(6, 'Bulan Ayu Jayawardhani', 'Layanan yang diberikan oleh fotografer sangat luar biasa, hasil foto yang diambil juga bagus-bagus dan sangat memuaskan', 5, '2024-12-08 00:50:54', '2024-12-08 00:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@wansapiyu.com', NULL, '$2y$12$ipmu/g.UuaY8ArS3RIbsWuEa.i6H7Oc7Xo0v4Xc.d9nt6GBfLgn4y', NULL, '2024-11-27 09:55:03', '2024-12-08 01:01:08'),
(3, 'pipin', 'pipin@wansapiyu.com', NULL, '$2y$12$3Bk1g./jv8Uw4IqfDs6IL.xqwqiNKtUj08jgFjFrVfH.i.ykTM2FO', NULL, '2024-12-06 22:33:31', '2024-12-06 22:33:31'),
(4, 'coba', 'coba@wansapiyu.com', NULL, '$2y$12$f8fW97N4P2FrKRBAaF5b9eVBlzSoiAhn1Xx4PKDfx/n5djAWCOlGC', NULL, '2024-12-06 22:42:56', '2024-12-06 22:42:56'),
(5, 'tes', 'tes@wansapiyu.com', NULL, '$2y$12$gnlpzB09XAjm2/vLA36.Oufv3bLVRNu6AwOHtCqvRXHZlkuuqWul2', NULL, '2024-12-06 23:00:44', '2024-12-06 23:00:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggotas`
--
ALTER TABLE `anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeris_portofolio_id_foreign` (`portofolio_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `portofolios`
--
ALTER TABLE `portofolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `anggotas`
--
ALTER TABLE `anggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `portofolios`
--
ALTER TABLE `portofolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeris`
--
ALTER TABLE `galeris`
  ADD CONSTRAINT `galeris_portofolio_id_foreign` FOREIGN KEY (`portofolio_id`) REFERENCES `portofolios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
