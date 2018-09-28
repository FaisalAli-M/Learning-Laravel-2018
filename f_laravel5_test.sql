-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 11:15 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f_laravel5_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `Name`, `created_at`, `updated_at`) VALUES
(1, 'Pakaistan', NULL, NULL),
(2, 'India', NULL, NULL),
(3, 'China', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `c_name`, `c_email`, `c_pass`) VALUES
(1, 'faisal', 'faisa@gmail.com', '123'),
(2, 'aliyan', 'aliyan@gmail.com', '1234'),
(3, 'Kiru', 'kir@gmail.com', 'k123'),
(4, 'Aliyan', 'aliyan@gamil.com', '123S'),
(5, 'Faisal', 'Faisal@gmail', '123S'),
(6, 'Faisal', 'Faisal@gmail', '123S'),
(7, 'Faisal', 'Faisal@gmail', '123S');

-- --------------------------------------------------------

--
-- Table structure for table `file_uploads`
--

CREATE TABLE `file_uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file_uploads`
--

INSERT INTO `file_uploads` (`id`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, '246464-212e6081a40b267f82791e98836cca4d.jpgjpg', '2018-07-08 13:15:57', '2018-07-08 13:15:57'),
(2, '246464-212e6081a40b267f82791e98836cca4d.jpgjpg', '2018-07-08 13:15:57', '2018-07-08 13:15:57'),
(3, '10 Mohrram Importance day post 29-Sep-2017 copy copy.JPGJPG', '2018-07-08 13:18:17', '2018-07-08 13:18:17'),
(4, '10 Mohrram Importance day post 29-Sep-2017 copy copy.JPG', '2018-07-08 13:19:39', '2018-07-08 13:19:39'),
(5, '10 Mohrram Importance day post 29-Sep-2017 copy copy.JPG', '2018-07-08 13:19:39', '2018-07-08 13:19:39'),
(6, 'Meeting with American Secretary and Pakistani Leaders post 21-April-2018.jpg', '2018-07-08 13:22:08', '2018-07-08 13:22:08'),
(7, 'Meeting with American Secretary and Pakistani Leaders post 21-April-2018.jpg', '2018-07-08 13:50:54', '2018-07-08 13:50:54'),
(8, 'Meeting with American Secretary and Pakistani Leaders post 21-April-2018.jpg', '2018-07-08 13:54:03', '2018-07-08 13:54:03'),
(9, 'Meeting with American Secretary and Pakistani Leaders post 21-April-2018.jpg', '2018-07-08 14:00:58', '2018-07-08 14:00:58'),
(10, '10 Mohrram Importance day post 29-Sep-2017 copy copy.JPG', '2018-07-08 14:08:51', '2018-07-08 14:08:51'),
(11, '11 Septeber Quaid e Azam Death Post copy copy.JPG', '2018-07-08 14:10:41', '2018-07-08 14:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `l__ficker__tinkers`
--

CREATE TABLE `l__ficker__tinkers` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `l__ficker__tinkers`
--

INSERT INTO `l__ficker__tinkers` (`id`, `username`, `title`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'ttromp', 'Doloribus veritatis vitae iste quisquam praesentium.', 'At enim dolorum et ipsum consequuntur. Ut rerum quos ut occaecati quas. Vitae voluptate qui et ex. Corporis consequatur dolores qui laborum. Cupiditate quo quas et suscipit ut quo earum.', NULL, '2018-06-19 21:21:43', '2018-06-19 21:21:43'),
(2, 'eheller', 'Id dolorem dignissimos sequi minima.', 'Cupiditate voluptatem dolorum debitis repellendus consequatur quis eum. Hic consequatur fuga aut quia. Quibusdam qui temporibus fugit dolor mollitia. Reiciendis rerum possimus qui est. Totam libero et sed deleniti quia.', NULL, '2018-06-19 21:22:50', '2018-06-19 21:22:50'),
(3, 'fgerlach', 'Vitae qui facilis numquam asperiores.', 'Qui voluptatibus similique exercitationem eum voluptate. Veritatis repudiandae architecto tenetur aut illo omnis. Sed iste quia voluptatibus consequatur expedita ducimus est nobis. Ea nesciunt tempora eos in aut nisi non. Exercitationem rem eos incidunt inventore. Sequi debitis rerum optio beatae inventore nisi corrupti quas. Doloribus ut architecto impedit quam est aut omnis.', NULL, '2018-06-19 21:22:50', '2018-06-19 21:22:50'),
(4, 'shaylee31', 'Cupiditate omnis rerum ab molestiae.', 'Laudantium consequatur ipsam suscipit earum. Eligendi quia eum fugit repellendus quia quis. Ut pariatur delectus sit similique. Minima optio earum dolorum sequi. Quibusdam qui repudiandae dolor et omnis rerum suscipit. Blanditiis vel consectetur molestias eum.', NULL, '2018-06-19 21:22:51', '2018-06-19 21:22:51'),
(5, 'dino22', 'Sequi qui voluptatem sunt similique cum quisquam.', 'Unde et cum qui doloribus unde rerum perspiciatis. Nemo consequatur dolorem ea consequatur soluta dignissimos possimus voluptates. Voluptate illum quod incidunt non enim quia. Omnis aperiam enim sequi iusto.', NULL, '2018-06-19 21:22:51', '2018-06-19 21:22:51'),
(6, 'mikayla.klein', 'Id mollitia repudiandae excepturi harum.', 'Veritatis optio beatae ex quo. Et recusandae expedita et laudantium ab. Sint dolor nobis consequatur et laborum beatae quasi. Ipsam omnis ducimus incidunt nam voluptas. Beatae et sequi tempore fuga non omnis nostrum.', NULL, '2018-06-19 21:22:51', '2018-06-19 21:22:51');

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
(1, '2018_05_13_201859_create_users_table', 1),
(2, '2018_05_13_201953_create_roles_table', 1),
(3, '2018_05_13_202035_create_posts_table', 1),
(4, '2018_06_08_202508_create_profiles_table', 2),
(5, '2018_06_20_015228_create_l__ficker__tinkers_table', 3),
(6, '2018_06_28_200736_create_u__accounts_table', 4),
(7, '2018_07_08_085649_create_file_uploads_table', 5),
(8, '2018_08_17_033239_create_newuser_table', 6),
(9, '2018_08_17_034001_create_newroles_table', 6),
(10, '2018_08_17_040442_create_newrole_newuser_table', 7),
(11, '2018_09_25_143159_create_userf_table', 8),
(12, '2018_09_25_143707_create_postf_table', 8),
(13, '2018_09_25_143951_create_country_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `new_roles`
--

CREATE TABLE `new_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_roles`
--

INSERT INTO `new_roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(2, 'Modiator', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(3, 'Publisher', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(4, 'Subscriber ', '2018-08-16 19:00:00', '2018-08-16 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `new_users`
--

CREATE TABLE `new_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_users`
--

INSERT INTO `new_users` (`id`, `name`, `email`, `pasword`, `created_at`, `updated_at`) VALUES
(1, 'Faisal ALi', 'faisal123@gmail.com', '1234', NULL, NULL),
(2, 'Aliyan Ali', 'aliyan@gmail.com', 'aliyan', NULL, NULL),
(3, 'Danish', 'dan@gmail.com', 'dan', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(4, 'Azhar', 'az@gamil.com', 'az', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(5, 'Mehmood', 'me@gmail.com', 'me', '2018-08-16 19:00:00', '2018-08-16 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `postfs`
--

CREATE TABLE `postfs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postfs`
--

INSERT INTO `postfs` (`id`, `title`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1st post Faisal', 1, NULL, NULL),
(2, '2nd post Faisal', 1, NULL, NULL),
(3, '3rd post faisal', 1, NULL, NULL),
(4, '1st post ALiyan', 2, NULL, NULL),
(5, '2nd post ALiyan', 2, NULL, NULL),
(6, '1st post Azhar', 3, NULL, NULL),
(7, '1st post Hamza', 4, NULL, NULL),
(8, '1st post Danish', 5, NULL, NULL),
(9, '1st post Mehmood', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'My First Posts for Check', 'Post for Check Tables Relation post table relation with user table', 1, '2018-09-19 19:00:00', '2018-08-20 19:00:00'),
(2, 'ALiyan First post', 'Also for check Relation', 2, '2018-08-16 19:00:00', '2018-08-16 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cellno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `fullname`, `city`, `country`, `cellno`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Faisal Ali', 'Karachi', 'Pakistan', '0347', 1, NULL, NULL),
(2, 'Aliyan Ali', 'Lahore', 'India', '0313', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2018-05-12 19:00:00', '2018-05-12 19:00:00'),
(2, 'user', '2018-05-12 19:00:00', '2018-05-12 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(2, '2', '1', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(3, '1', '2', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(4, '2', '2', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(5, '2', '3', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(6, '3', '3', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(7, '3', '4', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(8, '4', '4', '2018-08-16 19:00:00', '2018-08-16 19:00:00'),
(9, '1', '5', '2018-08-16 19:00:00', '2018-08-16 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pasword`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Faisal', 'faisalali12329@gmail.com', 'PS', 1, '2018-05-13 19:00:00', '2018-05-13 19:00:00'),
(2, 'ALiyan', 'aliyan@gmail.com', 'al', 2, '2018-05-13 19:00:00', '2018-05-13 19:00:00'),
(3, 'Danish', 'danish@gmail.com', 'da', 2, '2018-05-14 19:00:00', '2018-05-14 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `userves`
--

CREATE TABLE `userves` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userves`
--

INSERT INTO `userves` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Faisal ALi', 1, NULL, NULL),
(2, 'Aliyan ali', 1, NULL, NULL),
(3, 'Azhar', 2, NULL, NULL),
(4, 'Hamza', 2, NULL, NULL),
(5, 'danish', 3, NULL, NULL),
(6, 'Mehmood', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `u__accounts`
--

CREATE TABLE `u__accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `u__accounts`
--

INSERT INTO `u__accounts` (`id`, `name`, `dob`, `email`, `pasword`, `created_at`, `updated_at`) VALUES
(9, 'faisal', '2010-01-08 19:00:00', 'Faisal@gmail.com', '11', '2018-07-11 00:33:02', '2018-07-11 00:33:02'),
(10, 'faisal', '2010-01-08 19:00:00', 'Faisal@gmail.com', '11', '2018-07-11 00:33:02', '2018-07-11 00:33:02'),
(11, 'ALi', '1995-07-05 19:00:00', 'Ali@gmail.com', 'ali1', '2018-07-11 00:43:01', '2018-07-11 00:43:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_uploads`
--
ALTER TABLE `file_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `l__ficker__tinkers`
--
ALTER TABLE `l__ficker__tinkers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_roles`
--
ALTER TABLE `new_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_users`
--
ALTER TABLE `new_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postfs`
--
ALTER TABLE `postfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userves`
--
ALTER TABLE `userves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u__accounts`
--
ALTER TABLE `u__accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `file_uploads`
--
ALTER TABLE `file_uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `l__ficker__tinkers`
--
ALTER TABLE `l__ficker__tinkers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `new_roles`
--
ALTER TABLE `new_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `new_users`
--
ALTER TABLE `new_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `postfs`
--
ALTER TABLE `postfs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `userves`
--
ALTER TABLE `userves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `u__accounts`
--
ALTER TABLE `u__accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
