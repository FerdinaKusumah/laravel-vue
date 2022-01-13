-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 12:56 PM
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
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Deja Fahey', 'mosinski@weber.com', '082146807211', '1889 Williamson Lakes\nPort Scotport, MO 79932', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(2, 'Mr. Vincenzo Cronin', 'reagan51@hotmail.com', '082166717770', '898 Joshuah Trail\nLianaland, TN 80365-8036', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(3, 'Marvin Gorczany', 'felicita.west@mitchell.com', '082111467035', '7989 Karli Mews Suite 677\nNorth Gunner, ID 60810-8364', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(4, 'Mrs. Daphne Hettinger', 'bosco.jettie@harris.net', '082165502907', '41735 Flatley Crescent\nRogahnberg, NM 43547', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(5, 'Cortez Kirlin', 'rachael.dietrich@yahoo.com', '082122493743', '818 Lawrence Locks Apt. 222\nBruenborough, AZ 58969-3252', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(6, 'Susan Mertz', 'vkassulke@littel.com', '082136971413', '39859 Hadley Drives Suite 315\nEast Hazel, IA 87630-4061', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(7, 'Celestino Prohaska', 'jhomenick@murray.info', '082130610944', '3100 Jodie Run\nBoyleshire, PA 14858-7357', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(8, 'Kacey Prohaska', 'iheathcote@bergnaum.biz', '082155836439', '2552 Randall Knoll Apt. 816\nNaderport, NJ 51185-4335', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(9, 'Ms. Roslyn Zboncak', 'shanny.wisoky@yahoo.com', '082131313391', '54714 Wuckert Gardens\nSouth Annabelle, HI 22731', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(10, 'Miss Cierra Wolff V', 'jtorp@nolan.org', '082166471068', '553 Emely Passage\nPort Letitiamouth, IL 07586', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(11, 'Mrs. Alejandra Wehner', 'arvel63@boyer.net', '082135198251', '2120 Glover Gardens Apt. 766\nPort Brainbury, IN 49381-8830', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(12, 'Mrs. Yadira Ondricka Jr.', 'simonis.tom@gmail.com', '082180660157', '24346 Bernhard Fields\nVaughnburgh, RI 12370', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(13, 'Mr. Jaime Rath DDS', 'emory76@hotmail.com', '082151936192', '383 Lehner Ports\nRyanland, SD 82211-4760', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(14, 'Carolyn Schultz', 'leora54@hotmail.com', '082112890045', '53473 Myriam Track Suite 758\nOrenside, TN 45352', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(15, 'Desiree Ward', 'richard13@osinski.com', '082128388647', '21645 Lisandro Fall Apt. 863\nLake Rusty, TN 52575', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(16, 'Florence Thompson', 'vallie.kohler@gmail.com', '082185959299', '13237 Barton Flats Suite 426\nLake Dino, ME 71386', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(17, 'Herman Marks', 'sophia.zulauf@littel.com', '08216066408', '67795 Schultz Green Suite 742\nLake Clay, SD 36741', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(18, 'Ms. Agustina Hamill', 'marcelino21@hotmail.com', '082117420824', '2939 Gerhold Hollow\nSouth Stan, CT 85425-6350', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(19, 'Ms. Charlotte Barrows MD', 'flatley.agustin@rau.com', '082149061923', '58038 Bruen Port Apt. 535\nKozeyshire, AL 16986', '2022-01-11 00:44:16', '2022-01-11 00:44:16'),
(20, 'Ms. Charlotte Walker', 'maybell93@kohler.com', '08211269540', '11298 Beatty Stream Suite 096\nRyleyberg, LA 35489-2103', '2022-01-11 00:44:16', '2022-01-11 00:44:16');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isbn` int(11) NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `publisher_id` bigint(20) UNSIGNED DEFAULT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `catalog_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `isbn`, `title`, `year`, `publisher_id`, `author_id`, `catalog_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(23, 620682207, 'Buku Optio quo dolor illum eveniet.', 2010, 8, 1, 3, 19, 8363, '2022-01-11 01:27:18', '2022-01-11 01:27:18'),
(24, 260681038, 'Buku Labore et cumque similique odit beatae ipsa id.', 2014, 2, 10, 4, 17, 18267, '2022-01-11 01:27:55', '2022-01-11 01:27:55'),
(25, 449471111, 'Buku Quaerat nobis deleniti optio placeat amet deserunt dolores.', 2011, 14, 15, 7, 16, 15094, '2022-01-11 01:27:55', '2022-01-11 01:27:55'),
(26, 32540051, 'Buku Rem non iure consequatur quos dolore rerum corrupti.', 2021, 17, 20, 6, 20, 12002, '2022-01-11 01:27:55', '2022-01-11 01:27:55'),
(27, 167794481, 'Buku Explicabo harum natus nobis ipsam ipsa et.', 2019, 20, 20, 6, 13, 16290, '2022-01-11 01:27:55', '2022-01-11 01:27:55'),
(28, 941351383, 'Buku In repellat nobis consequuntur eos ea est natus.', 2015, 17, 6, 6, 14, 10759, '2022-01-11 01:27:55', '2022-01-11 01:27:55'),
(29, 655865878, 'Buku Animi sit vero saepe qui perspiciatis beatae.', 2020, 16, 14, 1, 19, 10643, '2022-01-11 01:27:55', '2022-01-11 01:27:55'),
(30, 213717671, 'Buku Repellat fuga molestias officiis.', 2014, 4, 3, 6, 16, 15872, '2022-01-11 01:27:55', '2022-01-11 01:27:55'),
(31, 54046550, 'Buku Nihil enim modi dolores voluptas porro suscipit amet.', 2015, 17, 17, 7, 11, 10448, '2022-01-11 01:27:55', '2022-01-11 01:27:55'),
(32, 930604723, 'Tutorial minima', 2017, 7, 10, 5, 19, 15870, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(33, 77466723, 'Tutorial eos', 2020, 16, 4, 4, 15, 9492, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(34, 397279573, 'Tutorial perferendis', 2018, 17, 12, 4, 19, 17775, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(35, 493479562, 'Tutorial aut', 2020, 10, 11, 2, 12, 11834, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(36, 937650572, 'Tutorial eligendi', 2016, 1, 19, 3, 20, 14905, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(37, 947488165, 'Tutorial occaecati', 2017, 15, 4, 7, 18, 15123, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(38, 719936272, 'Tutorial doloremque', 2015, 7, 19, 3, 16, 12022, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(39, 152580472, 'Tutorial amet', 2018, 20, 17, 2, 17, 18928, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(40, 157156998, 'Tutorial omnis', 2022, 7, 6, 2, 20, 13962, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(41, 639575850, 'Tutorial rerum', 2012, 10, 15, 1, 18, 16358, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(42, 964151963, 'Tutorial neque', 2011, 5, 5, 5, 12, 15554, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(43, 625423840, 'Tutorial natus', 2014, 5, 8, 3, 19, 13062, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(44, 750289978, 'Tutorial consectetur', 2018, 7, 3, 7, 10, 14326, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(45, 504388295, 'Tutorial quis', 2015, 7, 13, 4, 19, 10593, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(46, 176661955, 'Tutorial inventore', 2019, 13, 15, 1, 11, 13816, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(47, 507216873, 'Tutorial est', 2020, 3, 8, 1, 18, 16557, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(48, 659816969, 'Tutorial sunt', 2021, 10, 5, 1, 20, 11037, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(49, 582226325, 'Tutorial cum', 2018, 20, 5, 2, 19, 16985, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(50, 330072294, 'Tutorial cum', 2014, 2, 19, 2, 16, 18131, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(51, 673741867, 'Tutorial consequuntur', 2014, 2, 12, 3, 12, 17176, '2022-01-11 01:28:51', '2022-01-11 01:28:51'),
(52, 913748, 'Coabbabbabababa', 1992, NULL, 11, 3, 12, 7000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catalogs`
--

CREATE TABLE `catalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catalogs`
--

INSERT INTO `catalogs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Buku suscipit', '2022-01-11 01:22:12', '2022-01-11 01:22:12'),
(2, 'Buku omnis', '2022-01-11 01:22:12', '2022-01-11 01:22:12'),
(3, 'Buku voluptate', '2022-01-11 01:22:12', '2022-01-11 01:22:12'),
(4, 'Buku suscipit', '2022-01-11 01:22:12', '2022-01-11 01:22:12'),
(5, 'Buku similique', '2022-01-11 01:22:12', '2022-01-11 01:22:12'),
(6, 'Buku velit', '2022-01-11 01:22:12', '2022-01-11 01:22:12'),
(7, 'Buku eius', '2022-01-11 01:22:12', '2022-01-11 01:22:12');

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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `gender`, `phone_number`, `address`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Itzel Emard', 'm', '082176351030', '3076 Rico Groves\nWest Sydneeburgh, AL 32225-2426', 'grady.lemke@gmail.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(2, 'Eloise Mante', 'f', '082124418788', '77148 Lehner Forks\nPort Bobbymouth, ID 54827', 'jaskolski.alfonso@hotmail.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(3, 'Daisha Gulgowski', 'f', '082122175324', '523 Schuster Walk Suite 688\nAlycemouth, NH 96237-3926', 'renner.lukas@johnson.org', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(4, 'Gunner Abshire', 'f', '082188019117', '52524 West Pines\nLake Abelardo, SC 71577', 'daugherty.nikolas@hotmail.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(5, 'Norberto Harris', 'f', '082111133689', '6008 Augustine Club Suite 946\nNorth Rowan, AK 71186', 'kling.rosina@russel.biz', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(6, 'Arthur Osinski', 'm', '082133163733', 'Bandung ajah', 'toni.oconnell@hotmail.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(7, 'Sheila Kshlerin', 'f', '082146667966', 'Bandung biru', 'okeefe.ebony@gmail.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(8, 'Abel Anderson', 'f', '082130778573', '5970 Zulauf Alley\nSouth Grayson, NC 70536', 'hleuschke@hotmail.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(9, 'Lorenza Gutmann DDS', 'm', '082141507779', '3800 Tyson Field Apt. 152\nTomasashire, KY 28140-2159', 'amir75@yahoo.com', '2021-06-16 01:43:16', '2022-01-11 01:43:16'),
(10, 'Jefferey Schoen II', 'm', '082143985326', '27166 Erik Crest Suite 937\nCasimirland, VA 94139-6964', 'drake.smitham@yahoo.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(11, 'Prof. Sim Kuvalis MD', 'm', '082124448438', '233 Daryl Shoal Suite 429\nEast Kasey, WI 19456-2064', 'mhackett@hotmail.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(12, 'Dr. Deangelo Kuvalis III', 'f', '08214637679', '19495 Emelie Bridge Apt. 052\nGloverbury, NJ 93813', 'keagan.hammes@gmail.com', '2021-06-21 01:43:16', '2022-01-11 01:43:16'),
(13, 'Dr. Humberto Stanton MD', 'f', '082182813137', '997 Johathan Burgs\nBarrowsside, KS 25632', 'hayden37@dickens.biz', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(14, 'Allene Mertz', 'f', '082133124896', '61194 Nikolaus Club\nLake Lorenzoborough, OK 28508-1241', 'harvey.michael@schumm.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(15, 'Amya Ward', 'm', '082194812605', '28241 Wilbert Glen Apt. 370\nSchmidttown, MS 69792', 'amelia.schulist@effertz.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(16, 'Mr. Lula Hansen Sr.', 'm', '082150710305', '182 Wisoky Square\nNorth Claudiamouth, ND 54194', 'patricia.macejkovic@gmail.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(17, 'Addie Ernser', 'f', '082182143428', '997 Novella Drive\nHermistonborough, WY 09462-5720', 'rickie.stiedemann@rutherford.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(18, 'Kelsie Herzog', 'f', '082172998410', '958 Annabel Fall\nEast Misael, MO 84645-5251', 'kuhn.louisa@gmail.com', '2021-06-16 01:43:16', '2022-01-11 01:43:16'),
(19, 'Chadrick Kautzer', 'f', '082153359648', '65769 Schuppe Pass Apt. 754\nCummeratatown, MD 78350', 'hudson.reinhold@pagac.net', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(20, 'Mrs. Ella Padberg', 'm', '082197238351', '894 Spencer Route Apt. 689\nNorth Rebeka, MI 87261', 'brianne52@gmail.com', '2022-01-11 01:43:16', '2022-01-11 01:43:16'),
(21, 'Mimin', 'F', '08888888', 'Jalan kenangan', 'admin@gmail.com', NULL, NULL),
(22, 'Yasin', 'M', '08888888', 'Jalan Kebenaran', 'admin@library.com', NULL, NULL);

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
(1, '2012_01_11_062803_create_members_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_11_063244_create_publishers_table', 1),
(7, '2022_01_11_063313_create_authors_table', 1),
(8, '2022_01_11_063334_create_catalogs_table', 1),
(9, '2022_01_11_063353_create_books_table', 1),
(10, '2022_01_11_063418_create_transactions_table', 1),
(11, '2022_01_11_063440_create_transaction_details_table', 1),
(12, '2022_01_13_054848_create_admins_table', 2);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` char(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Delaney Schmitt', 'bahringer.karley@bergnaum.net', '082173476740', '8795 Madalyn Square Suite 491\nNorth Ignaciomouth, TN 07134-7597', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(2, 'Lexus Marks', 'jillian.rutherford@yahoo.com', '082148364492', '1284 Larson Views Suite 944\nLake Jensen, AL 15648-3215', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(3, 'Mona Schoen', 'candice77@gleichner.com', '082175703339', '776 Jenkins Harbors Apt. 329\nSouth Tamara, NE 05174', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(4, 'Mr. Bernhard Emard', 'clifford54@vonrueden.com', '082128952717', '10365 Ashleigh Burg\nNew Hyman, NM 55462-9356', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(5, 'Ms. Lempi O\'Connell Sr.', 'lilly.terry@gmail.com', '082134025758', '55963 Jacobi Lodge\nBruenborough, SC 05139', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(6, 'Keshawn Erdman', 'carmella30@yahoo.com', '082134144182', '3276 Thora Mall Apt. 340\nFaeville, KS 36467-5281', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(7, 'Ms. Verna Rempel', 'mohara@hotmail.com', '082182816280', '8214 Clotilde Radial\nLuebury, VT 81624-1166', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(8, 'Roslyn Lakin', 'lemke.jerad@yahoo.com', '082172914504', '51162 Collins Land\nSouth Verona, CO 69680-3685', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(9, 'Opal Balistreri', 'dandre03@hotmail.com', '082133029225', '353 Abbott Lock Apt. 409\nConnermouth, KY 94515', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(10, 'Burdette Murazik', 'bhammes@wiza.com', '082164963735', '95144 Arianna Inlet Suite 646\nNew Brooklyn, MT 97885-5751', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(11, 'Josephine Halvorson', 'cummerata.mafalda@yahoo.com', '082172101854', '7443 Kihn Key\nDallinhaven, LA 36671', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(12, 'Mrs. Vella Sauer', 'kareem40@hotmail.com', '082149767256', '424 Aliza Harbor Apt. 350\nLake Linaburgh, VT 09109', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(13, 'Madisen Conn', 'ostrosin@hotmail.com', '082185698745', '15021 Corkery Locks\nGarrickbury, AR 67913', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(14, 'Jayson Morissette', 'dorris.pfeffer@hotmail.com', '08219545877', '80612 Lazaro Extensions Suite 101\nRoobmouth, IA 82165', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(15, 'Miss Arielle Konopelski', 'bonnie.dietrich@yahoo.com', '08216210275', '5264 Rath Plaza\nKaylieborough, SD 93833-0936', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(16, 'Rahsaan Weissnat', 'jaron96@damore.org', '082136052970', '533 Emiliano Station\nTrantowberg, MO 07189-6237', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(17, 'Prof. Tre Rosenbaum', 'elvera63@gmail.com', '082195187778', '61175 Aurore Street\nStantonberg, FL 84344-6895', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(18, 'Samson Sauer', 'frau@bins.com', '082169712174', '48281 Thompson Parkway\nLake Bridgetshire, OK 28394', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(19, 'Olaf Stehr', 'marion74@yahoo.com', '082112899518', '31168 Quigley Mission\nWest Leslystad, MT 64669', '2022-01-11 01:24:25', '2022-01-11 01:24:25'),
(20, 'Fae Cummerata', 'usipes@kling.com', '082119943809', '84837 Wilkinson Villages Apt. 803\nLake Lilyan, TX 72582-2579', '2022-01-11 01:24:25', '2022-01-11 01:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` bigint(20) UNSIGNED NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `member_id`, `date_start`, `date_end`, `created_at`, `updated_at`) VALUES
(1, 8, '2021-05-30', '2021-06-03', NULL, NULL),
(2, 6, '2021-06-14', '2021-06-16', NULL, NULL),
(3, 8, '2021-06-30', '2021-07-07', NULL, NULL),
(4, 8, '2021-06-30', '2022-01-14', NULL, NULL),
(5, 7, '2021-06-30', '2022-01-13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `transaction_id`, `book_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 2, 24, 7, NULL, NULL),
(2, 1, 29, 1, NULL, NULL),
(3, 3, 24, 5, NULL, NULL),
(4, 4, 27, 2, NULL, NULL),
(5, 5, 31, 3, NULL, NULL);

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
  `member_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `member_id`, `created_at`, `updated_at`) VALUES
(1, 'Coba DB', 'cobadb@gmail.com', NULL, '$2y$10$L2IPAF/DjQ6FKsQdAAJM9Oaxbfcsw.SNBTTKuMkWJce7yN10.3REO', NULL, 1, '2022-01-11 00:17:03', '2022-01-11 00:17:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_publisher_id_foreign` (`publisher_id`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_catalog_id_foreign` (`catalog_id`);

--
-- Indexes for table `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_member_id_foreign` (`member_id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_details_transaction_id_foreign` (`transaction_id`),
  ADD KEY `transaction_details_book_id_foreign` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_member_id_foreign` (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  ADD CONSTRAINT `books_catalog_id_foreign` FOREIGN KEY (`catalog_id`) REFERENCES `catalogs` (`id`),
  ADD CONSTRAINT `books_publisher_id_foreign` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);

--
-- Constraints for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD CONSTRAINT `transaction_details_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `transaction_details_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
