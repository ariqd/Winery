-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2018 pada 15.18
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winery_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.jpg',
  `image1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `category`, `author`, `author_image`, `image1`, `image2`, `image3`, `body`, `quote`, `place`, `created_at`, `updated_at`) VALUES
(1, 'Vero nihil qui fugiat voluptatem quia magni.', 'sit', 'Antonina Heidenreich', 'user.jpg', 'c537d2a445232b99f510b0435b2cdb31.jpg', '60e071c42b0458de2f5825a742db1f19.jpg', 'b40bfb2b89bc5c57bfec065d860fdb60.jpg', 'Maxime nemo quam esse magni animi assumenda velit adipisci. Qui earum dolor laboriosam aperiam est autem. Animi quas ut ipsam quisquam laborum magni voluptates. Ex aut asperiores vel.', 'Voluptatum quod nihil corrupti maxime deleniti vel.', 'South Jarodville', '2018-04-09 05:59:01', '2018-04-09 05:59:01'),
(2, 'Ut ex voluptates distinctio voluptas cum.', 'ea', 'Hillard Green', 'user.jpg', 'ed8feaa259a9a6e48aff7630e9aa74ea.jpg', '151ca7b096c2dc187cd289700147a186.jpg', '61bb36a128f1610b105e7eba12c507a7.jpg', 'Sed laboriosam corrupti perspiciatis laudantium numquam quisquam. Ex qui laudantium eligendi temporibus quia. Ea incidunt omnis eum aliquid amet veritatis. Ut voluptatem est nihil ea sed.', 'Quod eveniet ut qui temporibus.', 'Starkburgh', '2018-04-09 05:59:02', '2018-04-09 05:59:02'),
(3, 'Quia architecto quia autem alias et praesentium qui.', 'doloribus', 'Dr. Dante Leuschke II', 'user.jpg', '35d28f3487dcca820b7ac385506e362e.jpg', '67ac8fe8b2ee1982753891ccb951dc61.jpg', '4558d95ccb8e0a0484889ca1463dd83f.jpg', 'Laudantium neque dicta reiciendis itaque. Harum est impedit animi omnis. Doloribus quo et quod adipisci qui voluptate doloremque.', 'Rerum sit omnis aperiam.', 'Laronfort', '2018-04-09 05:59:02', '2018-04-09 05:59:02'),
(4, 'Sapiente non quisquam quia recusandae beatae.', 'dolor', 'Kenyon Pouros', 'user.jpg', '3fa98694849ae7d263a28b0d2c1db209.jpg', 'db65dd4c8171e3adf051c98d70f42d79.jpg', '060420ffd75a307b1094f53fdca26b5b.jpg', 'In beatae vero praesentium nisi doloremque. Vitae accusantium excepturi est ut ex distinctio eos.', 'Eius accusamus ex officia.', 'Port Lilianaview', '2018-04-09 05:59:02', '2018-04-09 05:59:02'),
(5, 'Rerum provident quo reprehenderit aut.', 'quis', 'Mr. Kyler Rodriguez I', 'user.jpg', '8d866ccb34f0dcb2eaf0839aeb63dc83.jpg', '44615b10c1c7666b2849b76dc10c3d7c.jpg', '5a7334337cf41a0c83b82f64d3fa7d19.jpg', 'Ut aut quam sequi ut. Non facere odit perspiciatis dolorem temporibus voluptas deserunt. Nihil numquam autem et. Ut qui reiciendis quia dicta nemo.', 'Aut praesentium aliquid nihil doloremque cum.', 'New Antoniofurt', '2018-04-09 05:59:02', '2018-04-09 05:59:02'),
(6, 'Quidem aut qui ab praesentium nulla voluptatem.', 'cupiditate', 'Dr. Efrain Walsh', 'user.jpg', 'acc9300a4a802207f409fc21e1970bef.jpg', '415acdc1f768c13b8107737087d836d5.jpg', '39083134208dc4d6019bfd6b46cd19f0.jpg', 'Quae nihil qui velit deserunt fuga dolores enim ducimus. Sunt inventore ut blanditiis sit autem at molestiae. Deserunt est magni dolor similique dolor facilis quia.', 'Incidunt quia dolores sunt necessitatibus aperiam.', 'Rachellemouth', '2018-04-09 05:59:02', '2018-04-09 05:59:02'),
(7, 'Aut ut et consequatur aliquid cum omnis facere.', 'minus', 'Bryon Bins III', 'user.jpg', 'ca2beaec269c52896aacaa5d63534981.jpg', '045e7eae58abde19671dfe458bd9ab51.jpg', 'b926d15d8b1177f438967ded879dc538.jpg', 'Eos beatae ex minima ipsa dignissimos aperiam. Fuga expedita in quis. Qui dolorem incidunt cum iusto et.', 'Libero rerum ut voluptatem facere dolores neque.', 'East Lynnborough', '2018-04-09 05:59:02', '2018-04-09 05:59:02'),
(8, 'Voluptas beatae accusamus deserunt iure dolor dignissimos non.', 'placeat', 'Bobbie Walker', 'user.jpg', '0b870bf2ea12acf1e8d4dbc326bd0e31.jpg', '58b5451db4a2bf28eb2efddd157235e5.jpg', 'debfbb27ff384df0818d3c94b5a8e91c.jpg', 'Quasi incidunt esse qui ut et amet. Et aspernatur et accusantium quisquam. Iure eos aut molestiae asperiores voluptate.', 'Dignissimos quia et incidunt nesciunt.', 'Bergstrommouth', '2018-04-09 05:59:02', '2018-04-09 05:59:02'),
(9, 'Blanditiis repellat sit corporis est id.', 'nobis', 'Megane Cummerata', 'user.jpg', '870be74360aaa294ce2ea00825399caf.jpg', 'bd59648f2bcc1ac192158242179813af.jpg', '17eebb54354802ed4b12238fd59dfb3e.jpg', 'Culpa quia et sit esse molestiae sunt. Autem atque eos vitae nulla. Quam et nihil repellendus ut itaque distinctio vel.', 'Sapiente voluptas tenetur vel itaque officia corporis natus.', 'Lake Norbert', '2018-04-09 05:59:02', '2018-04-09 05:59:02'),
(10, 'Temporibus impedit eum facilis quo.', 'provident', 'Kamryn Sporer', 'user.jpg', '74f2a13bae8b93d8959e1214531a0bcd.jpg', '41fd331dc6fcc557de320bb8d057f265.jpg', '58f186cf11bc138b07a0e6e3839c3105.jpg', 'Sit quis qui itaque. Inventore in atque et id. Cupiditate qui ea fugiat nihil excepturi modi enim velit. Blanditiis autem quis porro qui quis. Earum et placeat quis molestiae esse ad.', 'Sunt recusandae incidunt earum consequatur.', 'Rempelshire', '2018-04-09 05:59:02', '2018-04-09 05:59:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banks`
--

CREATE TABLE `banks` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banks`
--

INSERT INTO `banks` (`id`, `nama`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'BCA', 'bca.png', 'BCA atau Bank Central Asia adalah salah satu Bank penyedia kartu kredit terbesar di Indonesia. Sebagai salah satu Bank terbesar BCA hingga saat ini telah mengeluarkan lebih dari 10 Jenis kartu kredit. Salah satu kelebihan kartu kredit BCA adalah bebas iuran tahunan seumur hidup, belum lagi pengguna kartu kredit akan di cover dengan pelayanan Asuransi dari BCA credit Life. Selain itu, nikmati juga kelebihan kartu kredit BCA dengan suku bunga yang kompetitif serta jaringan layanan terluas. Tambahan lagi, kartu kredit BCA memiliki banyak promo-promo yang akan membuat penggunanya semakin tertarik untuk memilikinya.\r\n\r\nKeuntungannya:\r\nBank BCA melalui kartu kreditnya memiliki kelebihan dalam memberikan berbagai macam promo yang bekerja sama dengan perusahaan besar dan retail-retail ternama. Selain itu, kartu kredit ini dapat memberikan reward dan juga cash back hingga 20% dan hebatnya lagi kartu kredit BCA tersedia dalam bentuk yang unik dan sangat disesuaikan dengan kegunaan dan kebutuhan penggunanya. Tunggu apalagi, segera ajukan aplikasinya dan nikmati kelebihannya.', '2018-03-21 07:56:38', '2018-03-21 09:07:01'),
(2, 'BNI', 'bni.jpg', 'Bank BNI merupakan salah satu bank terbesar ke-4 di Indonesia. Sebagai bank terbesar Bank BNI memberikan kelebihan kepada nasabahnya melalui kemudahan untuk memperoleh kartu kredit BNI. Kartu kredit BNI ini dapat digunakan di ATM diseluruh Bank didunia yang berlogo CIRRUS/PLUS. Tak hanya itu saja, kini BNI telah mengeluarkan kartu kredit terbarunya yang bertanda JCB.\r\n\r\nKeuntungan:\r\nKeunggulan dari kartu kredit BNI adalah, Anda dapat membuat kartu tambahan dengan nomor berbeda untuk mempermudah penggunaan 1 keluarga. BNI juga memberikan kemudahan untuk paket wisata dan menikmati fasilitas Executive Airport Lounge. Tambahan lainnya, kartu kredit BNI juga menawarkan cicilan tetap dan juga sering mengadakan program promo yang membuat orang tertarik untuk mendaftarkan kartu kredit BNI ini. Ayo segera dapatkan keuntungannya dan ajukan aplikasinya disini.', '2018-03-21 08:12:01', '2018-03-21 08:12:01'),
(5, 'BRI', 'bri.png', 'Bank Rakyat Indonesia atau Bank BRI merupakan bank pemerintah terbesar di Indoensa yang telah memiliki banyak cabang dan tersebar hampir di pelosok daerah. Melalui kartu kredit BRI bank ini ingin memberikan keuntungan yang lebih dalam melayani nasabahnya. Salah satu andalannya adalah suku bunga yang ditawarkan dalam kartu kredit BRI lebih murah. Ditambah lagi kartu kredit BRI dapat diterima di hampir seluruh ATM berlogo Cirrus.\r\n\r\nKeuntungan:\r\nNikmati berbagai kemudahan dengan menggunakan kartu kredit BRI Touch dengan bebas iuran tahunan selama kartu masih aktif. Keuntungan yang anda dapatkan adalah bunga ringan yang sangat diminati banyak orang. Untuk pemegang kartu kredit BRI Gold dapat menikmati fasilitas Executive Airport Lounge. Kartu kredit BRI juga memberikan fasilitas kartu tambahan untuk semua jenis tipe kartu kreditnya. Dan banyak juga program promo untuk pemegang kartu kredit BRI.', '2018-03-21 18:17:32', '2018-03-21 18:17:32'),
(6, 'Danamon', 'danamon.png', 'Bank Danamon memiliki 4 jenis kartu kredit, yaitu Kartu Kredit Danamon, Kartu Manchester United, World Card, Kartu Danamon American Express®. Kartu kredit Danamon memberikan fitur family pack yang akan memudahkan untuk mengatur kebutuhan bertransaksi untuk setiap anggota keluarga. Kelebihan lainnya dari kartu kredit Danamon ini adalah Anda dapat berbelanja di mana saja dan merubah pembelanjaan Anda menjadi cicilan tetap selama 6-36 bulan. Fasilitas lainnya yang ditawarkan oleh kartu kredit Danamon adalah Mobile Reload untuk mempermudah anda mengisi ulang otomatis secara regular hanya dengan melakukan 1 kali pendaftaran.', '2018-03-21 18:17:59', '2018-03-21 18:17:59'),
(7, 'AEON', 'aeon.png', 'Bank AEON', '2018-03-22 07:39:41', '2018-03-22 07:39:41'),
(8, 'Mega', 'mega.png', 'Bank Mega', '2018-03-22 07:41:56', '2018-03-22 07:41:56'),
(11, 'CIMB Niaga', 'cimb.png', 'Bank CIMB Niaga Indonesia', '2018-04-07 20:33:35', '2018-04-07 20:33:35'),
(12, 'HSBC', 'hsbc.png', 'Halo, ini adalah bank HSBC', '2018-04-07 20:38:04', '2018-04-07 20:38:04'),
(13, 'Bukopin', 'bukopin.png', 'bank bukopin\r\n\r\nsdfefew\r\n\r\nsdfsfwse', '2018-04-07 20:49:34', '2018-04-07 20:49:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cards`
--

CREATE TABLE `cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `id_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_holder` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cards`
--

INSERT INTO `cards` (`id`, `nama`, `gambar`, `deskripsi`, `harga`, `id_bank`, `id_category`, `id_type`, `id_holder`, `created_at`, `updated_at`) VALUES
(17, 'Danamon Manchester United', 'Danamon Manchester United Card.jpg', 'Danamon MU\r\n\r\nKartu Kredit untuk anda penggemar MU\r\n\r\nAjukan sekarang!', 600000, 6, '6', 3, 10, '2018-04-06 03:25:56', '2018-04-06 03:25:56'),
(19, 'BNI Chelsea Card', 'BNI Chelsea Credit Card.jpg', 'dfgsdghadfg\r\nedfargtawertgfe\r\n\r\nsfdgasdgaewrgaerfg\r\n\r\nadfgadfgadeg\r\n\r\n\r\n\r\ndfgaedrfgaerg', 1000000, 2, '1', 1, 10, '2018-04-06 08:54:58', '2018-04-07 07:13:34'),
(20, 'BNI Visa Silver', 'BNI Visa Silver.jpg', 'dsfsdfsdfeff', 444444, 2, '1', 1, 9, '2018-04-06 08:55:47', '2018-04-07 07:13:40'),
(21, 'AEON Card', 'AEON.png', 'Kartu AEON\r\n\r\nbagus banget\r\n\r\nlanjutkan gan', 800000, 7, '3', 4, 11, '2018-04-07 07:01:41', '2018-04-07 07:01:41'),
(22, 'Mega Gold Card', 'Mega Gold Card.jpg', 'sdfasgdfgdfgsdfasgdfgdfgsdfasgdfgdfgsdfasgdfgdfgsdfasgdfgdfg', 100000, 8, '1', 1, 12, '2018-04-07 07:09:22', '2018-04-07 07:09:31'),
(23, 'CIMB Niaga Mastercard Platinum', 'CIMB Niaga MasterCard Platinum.jpg', 'Kartu CIMB Niaga adalah yang terbaik bagi anda\r\n\r\n\r\nsdfsgwefiswdhfso\r\n\r\nsdfgafgrd\r\n\r\n\r\ndfgaergearg', 900000, 11, '2', 1, 11, '2018-04-07 20:35:02', '2018-04-07 20:35:16'),
(24, 'HSBC Visa Platinum', 'HSBC Visa Platinum Card.png', 'dfaerhgsrtg\r\ndfhgsdfh\r\n\r\ndfghsrthhsfghn\r\n\r\n\r\nfghryjtjyrtyujfgh\r\n\r\nftyrstyh', 850000, 12, '4', 1, 9, '2018-04-07 20:39:13', '2018-04-07 20:39:13'),
(25, 'Bukopin Visa Gold', 'Bukopin Visa Gold.jpg', 'dfgjiuehrg\r\n\r\nadfgaerg\r\n\r\ndfgawerg', 200000, 13, '4', 2, 9, '2018-04-07 20:50:29', '2018-04-07 20:50:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cards_categories`
--

CREATE TABLE `cards_categories` (
  `id_cards` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Let\'s Travel', NULL, 'Mari jelajahi indahnya dunia', '2018-03-21 19:23:09', '2018-03-21 19:26:36'),
(2, 'Home Living', NULL, 'Indahkan rumahmu', '2018-03-21 19:25:52', '2018-03-21 19:25:52'),
(3, 'Gadget', NULL, 'Nikmati indahnya teknologi', '2018-03-21 19:26:11', '2018-03-21 19:26:11'),
(4, 'Truly Foodie', NULL, 'Pecinta kuliner sejati', '2018-03-21 19:26:28', '2018-03-21 19:26:28'),
(5, 'Shopping Queen', NULL, 'Jadilah ratu belanja', '2018-03-21 19:26:57', '2018-03-21 19:26:57'),
(6, 'Entertainment', NULL, 'Mari menikmati indahnya hidup', '2018-03-21 19:27:16', '2018-03-21 19:27:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `documents`
--

CREATE TABLE `documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `cards_id` int(11) NOT NULL,
  `ktp_karyawan` tinyint(1) NOT NULL DEFAULT '0',
  `ktp_wirausaha` tinyint(1) NOT NULL DEFAULT '0',
  `ktp_profesional` tinyint(1) NOT NULL DEFAULT '0',
  `penghasilan_karyawan` tinyint(1) NOT NULL DEFAULT '0',
  `penghasilan_wirausaha` tinyint(1) NOT NULL DEFAULT '0',
  `penghasilan_profesional` tinyint(1) NOT NULL DEFAULT '0',
  `tabungan_karyawan` tinyint(1) NOT NULL DEFAULT '0',
  `tabungan_wirausaha` tinyint(1) NOT NULL DEFAULT '0',
  `tabungan_profesional` tinyint(1) NOT NULL DEFAULT '0',
  `izin_karyawan` tinyint(1) NOT NULL DEFAULT '0',
  `izin_wirausaha` tinyint(1) NOT NULL DEFAULT '0',
  `izin_profesional` tinyint(1) NOT NULL DEFAULT '0',
  `npwp_karyawan` tinyint(1) NOT NULL DEFAULT '0',
  `npwp_wirausaha` tinyint(1) NOT NULL DEFAULT '0',
  `npwp_profesional` tinyint(1) NOT NULL DEFAULT '0',
  `pendirian_karyawan` tinyint(1) NOT NULL DEFAULT '0',
  `pendirian_wirausaha` tinyint(1) NOT NULL DEFAULT '0',
  `pendirian_profesional` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `documents`
--

INSERT INTO `documents` (`id`, `cards_id`, `ktp_karyawan`, `ktp_wirausaha`, `ktp_profesional`, `penghasilan_karyawan`, `penghasilan_wirausaha`, `penghasilan_profesional`, `tabungan_karyawan`, `tabungan_wirausaha`, `tabungan_profesional`, `izin_karyawan`, `izin_wirausaha`, `izin_profesional`, `npwp_karyawan`, `npwp_wirausaha`, `npwp_profesional`, `pendirian_karyawan`, `pendirian_wirausaha`, `pendirian_profesional`, `created_at`, `updated_at`) VALUES
(2, 17, 1, 1, 1, 1, 0, 1, 0, 1, 0, 0, 0, 1, 1, 1, 1, 0, 1, 0, '2018-04-06 03:25:56', '2018-04-06 03:52:04'),
(3, 19, 1, 1, 0, 1, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 1, 1, 0, 0, '2018-04-06 08:54:58', '2018-04-06 08:54:58'),
(4, 20, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 1, 0, 1, 0, '2018-04-06 08:55:47', '2018-04-06 08:55:47'),
(5, 21, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, '2018-04-07 07:01:41', '2018-04-07 07:01:41'),
(6, 22, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, '2018-04-07 07:09:22', '2018-04-07 07:09:22'),
(7, 23, 1, 1, 1, 0, 1, 0, 1, 1, 0, 0, 1, 1, 0, 1, 0, 1, 1, 0, '2018-04-07 20:35:02', '2018-04-07 20:35:02'),
(8, 24, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, '2018-04-07 20:39:13', '2018-04-07 20:39:13'),
(9, 25, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, '2018-04-07 20:50:29', '2018-04-07 20:50:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `holders`
--

CREATE TABLE `holders` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `holders`
--

INSERT INTO `holders` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(9, 'Kurang dari Rp36.000.000', '2018-04-06 03:19:03', '2018-04-06 03:19:03'),
(10, 'Rp36.000.000 - Rp60.000.000', '2018-04-06 03:19:32', '2018-04-06 03:19:32'),
(11, 'Rp60.000.000 - Rp120.000.000', '2018-04-06 03:20:30', '2018-04-06 03:20:30'),
(12, 'Lebih dari Rp120.000.000', '2018-04-06 03:20:48', '2018-04-06 03:20:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_20_145716_create_banks_table', 1),
(4, '2018_03_20_145751_create_cards_table', 1),
(5, '2018_03_20_145834_create_categories_table', 1),
(6, '2018_03_20_151110_create_cards_categories_table', 1),
(7, '2018_03_20_152852_alter_users_add_username', 2),
(8, '2018_03_20_164125_create_types_table', 3),
(9, '2018_03_20_164418_create_holders_table', 3),
(10, '2018_03_22_014946_alter_categories_table_add_gambar_and_deskripsi', 4),
(11, '2018_03_22_023807_alter_cards_table_add_ids', 5),
(12, '2018_03_22_053915_alter_cards_table_add_id_category', 6),
(13, '2018_03_22_154127_create_submissions_table', 7),
(14, '2018_03_22_170348_alter_submissions_add_owned', 8),
(15, '2018_04_05_125731_create_documents_table', 9),
(18, '2018_04_08_134457_create_articles_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `submissions`
--

CREATE TABLE `submissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `penghasilan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owned` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `id_card` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `submissions`
--

INSERT INTO `submissions` (`id`, `nama`, `email`, `alamat`, `notelp`, `tinggal`, `tgl_lahir`, `penghasilan`, `pekerjaan`, `owned`, `approved`, `id_card`, `created_at`, `updated_at`) VALUES
(2, 'Ariq Daffa', 'ariqdaffaathallah@gmail.com', 'Jl. Raya', '089898787676', 'Serang', '1998-05-04', '3000000-3999999', 'Ibu Rumah Tangga', 'tidak ada', 1, 19, '2018-04-07 07:47:07', '2018-04-07 20:36:35'),
(3, 'Joni', 'joni@mail.com', 'Jl. Raya', '089898787676', 'Surabaya', '1983-09-17', '8000000-9999999', 'Pegawai Swasta', 'AEON,BCA', 1, 23, '2018-04-07 20:36:22', '2018-04-07 20:36:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `types`
--

INSERT INTO `types` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Platinum', '2018-03-21 18:10:32', '2018-03-21 18:10:32'),
(2, 'Gold', '2018-03-21 18:13:12', '2018-03-21 18:13:12'),
(3, 'Silver', '2018-03-21 18:13:17', '2018-03-21 18:13:17'),
(4, 'Titanium', '2018-03-21 18:13:26', '2018-03-21 18:13:26'),
(6, 'Infinite', '2018-03-21 18:16:58', '2018-03-21 18:16:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Winery Admin', 'winery_admin', 'winery@mail.com', '$2b$10$C2Uqw59Kom9FYTho9jGGI./71s.JoMZkZmZPCa3H4wF15d7zlgCz.', '1', 'Uxd9SnCWjmA0DxvMTXV3Y0GFoF8Qj5XMXJrBRH4YyGCSIQO1opscq3kWqFGP', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cards_categories`
--
ALTER TABLE `cards_categories`
  ADD PRIMARY KEY (`id_cards`,`id_categories`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `holders`
--
ALTER TABLE `holders`
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
-- Indeks untuk tabel `submissions`
--
ALTER TABLE `submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `holders`
--
ALTER TABLE `holders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `submissions`
--
ALTER TABLE `submissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
