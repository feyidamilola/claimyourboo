-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 13, 2019 at 10:09 AM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `nab`
--

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `id` int(10) UNSIGNED NOT NULL,
  `your_username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `your_social_media` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_response` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_handle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_social_media` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `share` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `claims`
--

INSERT INTO `claims` (`id`, `your_username`, `your_social_media`, `relationship`, `length`, `personal_response`, `partner_handle`, `result`, `partner_social_media`, `share`, `created_at`, `updated_at`) VALUES
(10, 'dagenius', 'twitter', 'fwb', 'about 1 month ago', 'yes ooo', 'dagenius_007', 'Hey , @dagenius_007, Anon says you guys have been duking it down for about 1 month ago and yes ooo feelings their end. Do you want to find out who claimed you? Click the link in our bio to find out', 'twitter', 'Yes', '2019-02-12 03:08:27', '2019-02-12 03:08:27'),
(11, 'dagenius', 'twitter', 'fwb', 'about 1 month ago', 'yes ooo', 'dagenius_007', 'Hey , @dagenius_007, Anon says you guys have been duking it down for about 1 month ago and yes ooo feelings their end. Do you want to find out who claimed you? Click the link in our bio to find out', 'twitter', 'Yes', '2019-02-12 03:08:28', '2019-02-12 03:08:28'),
(12, 'dagenius', 'twitter', 'fwb', 'about 1 month ago', 'yes ooo', 'dagenius_007', 'Hello, relationship calling, why ah u running dear? @dagenius_007', 'twitter', 'yes', '2019-02-13 08:03:15', '2019-02-13 08:03:15'),
(13, 'dagenius', 'twitter', 'fwb', 'about 1 month ago', 'yes ooo', 'dagenius_007', 'Hello, relationship calling, why ah u running dear? @dagenius_007', 'twitter', 'yes', '2019-02-13 08:03:30', '2019-02-13 08:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_02_01_144227_create_claims_table', 1),
(9, '2019_02_01_154400_update_claims_table', 1),
(10, '2019_02_11_151753_add_results_column', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
