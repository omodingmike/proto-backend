-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2023 at 06:51 PM
-- Server version: 8.0.33
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proto`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `description`, `image`, `distance`, `duration`, `cost`, `created_at`, `updated_at`, `category`) VALUES
(1, 'Singapore', 'Singapore, officially the Republic of Singapore, is a sovereign island city-state in maritime Southeast.', 'singapore.avif', '1000 Kms', 'Approx 2 night trip', '€ 10,000', '2023-11-24 16:26:20', '2023-11-26 11:03:59', 1),
(2, 'Thailand', 'Thailand is a Southeast Asian country. It\'s known for tropical beaches, opulent royal palaces', 'thailand.avif', '1000 Kms', 'Approx 2 night trip', '€ 10,000', '2023-11-24 16:26:20', '2023-11-24 16:26:20', 1),
(3, 'Paris', 'Paris, France\'s capital, is a major European city and a global center for art, fashion, gastronomy and', 'england.avif', '1000 Kms', 'Approx 2 night trip', '€ 10,000', '2023-11-24 16:26:20', '2023-11-24 16:26:20', 1),
(4, 'New Zealand', 'New Zealand is an island country in the southwestern Pacific Ocean. It consists of two', 'female_traveller.avif', '1000 Kms', 'Approx 2 night trip', '₹ 38,800', '2023-11-24 16:26:20', '2023-11-26 10:58:23', 1),
(5, 'Bora Bora', 'Bora Bora is a small South Pacific island northwest of Tahiti in French Polynesia. Surrounded by sand', 'hero_1.avif', '1000 Kms', 'Approx 2 night trip', '₹ 38,800', '2023-11-24 16:26:20', '2023-11-24 16:26:20', 1),
(6, 'London', 'London, the capital of England and the United Kingdom, is a 21st-century city with history', 'hero_2.avif', '1000 Kms', 'Approx 2 night trip', '₹ 38,800', '2023-11-24 16:26:20', '2023-11-24 16:26:20', 1),
(7, 'Tokyo', 'Tokyo is the capital of Japan and one of the 47 prefectures. It offers a mix of modern and traditional attractions.', 'bora_bora.avif', '1500 Kms', 'Approx 3 night trip', '¥ 15,000', '2023-11-24 16:30:38', '2023-11-24 16:30:38', 2),
(8, 'Seoul', 'Seoul is the capital and largest metropolis of South Korea, known for its vibrant culture and historic landmarks.', 'singapore.avif', '1200 Kms', 'Approx 2 night trip', '₩ 12,000', '2023-11-24 16:30:38', '2023-11-24 16:30:38', 2),
(9, 'Beijing', 'Beijing is the capital of China and one of the world\'s oldest and most populous cities. It has a rich history and cultural heritage.', 'england.avif', '1800 Kms', 'Approx 4 night trip', '¥ 18,000', '2023-11-24 16:30:38', '2023-11-24 16:30:38', 2),
(10, 'Bangkok', 'Bangkok is the capital and largest city of Thailand, known for its ornate shrines and vibrant street life.', 'female_traveller.avif', '1000 Kms', 'Approx 2 night trip', '฿ 8,000', '2023-11-24 16:30:38', '2023-11-24 16:30:38', 2),
(11, 'Mumbai', 'Mumbai is the financial, commercial, and entertainment capital of India, known for its bustling markets and historic landmarks.', 'hero_1.avif', '1200 Kms', 'Approx 3 night trip', '₹ 20,000', '2023-11-24 16:30:38', '2023-11-24 16:30:38', 2),
(12, 'Hanoi', 'Hanoi is the capital of Vietnam, known for its centuries-old architecture and a rich culture with Southeast Asian, Chinese, and French influences.', 'hero_2.avif', '900 Kms', 'Approx 2 night trip', '₫ 9,000,000', '2023-11-24 16:30:38', '2023-11-24 16:30:38', 2),
(13, 'Cape Town', 'Cape Town is a port city on South Africa’s southwest coast, known for its stunning landscapes, including Table Mountain and the Cape of Good Hope.', 'singapore.avif', '1200 Kms', 'Approx 3 night trip', 'ZAR 15,000', '2023-11-24 16:32:45', '2023-11-24 16:32:45', 3),
(14, 'Marrakech', 'Marrakech is a major city in the Kingdom of Morocco, known for its vibrant markets, palaces, and gardens.', 'england.avif', '1000 Kms', 'Approx 2 night trip', 'MAD 10,000', '2023-11-24 16:32:45', '2023-11-24 16:32:45', 3),
(15, 'Nairobi', 'Nairobi is the capital and largest city of Kenya, known for its national parks, wildlife, and cultural attractions.', 'female_traveller.avif', '800 Kms', 'Approx 2 night trip', 'KES 8,000', '2023-11-24 16:32:45', '2023-11-24 16:32:45', 3),
(16, 'Cairo', 'Cairo is the capital of Egypt and a major city in the Arab world, known for its ancient pyramids and historic landmarks.', 'hero_1.avif', '1500 Kms', 'Approx 4 night trip', 'EGP 20,000', '2023-11-24 16:32:45', '2023-11-24 16:32:45', 3),
(17, 'Cape Verde', 'Cape Verde is an island country in the central Atlantic Ocean, known for its diverse landscapes and rich cultural heritage.', 'hero_2.avif', '2000 Kms', 'Approx 5 night trip', 'CVE 25,000', '2023-11-24 16:32:45', '2023-11-24 16:32:45', 3),
(18, 'Accra', 'Accra is the capital and largest city of Ghana, known for its vibrant markets, colonial architecture, and cultural sites.', 'hero_3.avif', '1200 Kms', 'Approx 3 night trip', 'GHS 12,000', '2023-11-24 16:32:45', '2023-11-24 16:32:45', 3),
(19, 'New York City', 'New York City is the most populous city in the United States, known for its iconic landmarks, Broadway theaters, and diverse culture.', 'thailand.avif', '1500 Kms', 'Approx 4 night trip', '$ 2,000', '2023-11-24 16:36:41', '2023-11-24 16:36:41', 4),
(20, 'Rio de Janeiro', 'Rio de Janeiro is a vibrant city in Brazil, famous for its annual carnival, beautiful beaches, and iconic Christ the Redeemer statue.', 'singapore.avif', '2000 Kms', 'Approx 5 night trip', 'R$ 5,000', '2023-11-24 16:36:41', '2023-11-24 16:36:41', 4),
(21, 'Toronto', 'Toronto is the capital of the province of Ontario in Canada, known for its diverse cultural scene, iconic CN Tower, and waterfront.', 'paris.avif', '1200 Kms', 'Approx 3 night trip', 'CAD 2,500', '2023-11-24 16:36:41', '2023-11-24 16:36:41', 4),
(22, 'Buenos Aires', 'Buenos Aires is the capital and largest city of Argentina, known for its tango music and dance, historic architecture, and vibrant street life.', 'new_zealand.avif', '1800 Kms', 'Approx 4 night trip', 'ARS 10,000', '2023-11-24 16:36:41', '2023-11-24 16:36:41', 4),
(23, 'Mexico City', 'Mexico City is the capital of Mexico, known for its rich history, ancient ruins, and vibrant arts and culture scene.', 'new_travel.avif', '1600 Kms', 'Approx 4 night trip', 'MXN 15,000', '2023-11-24 16:36:41', '2023-11-24 16:36:41', 4),
(24, 'Vancouver', 'Vancouver is a major city in western Canada, known for its natural beauty, diverse neighborhoods, and outdoor recreational activities.', 'new_destination.png', '1400 Kms', 'Approx 3 night trip', 'CAD 3,000', '2023-11-24 16:36:41', '2023-11-24 16:36:41', 4);

-- --------------------------------------------------------

--
-- Table structure for table `destination_categories`
--

CREATE TABLE `destination_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destination_categories`
--

INSERT INTO `destination_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Asia', NULL, NULL),
(2, 'Europe', NULL, NULL),
(3, 'Africa', NULL, NULL),
(4, 'America', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_24_061103_create_destinations_table', 1),
(6, '2023_11_24_061549_create_destinations_categories_table', 1),
(7, '2023_11_24_192442_update_destinations', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$9.Ny2T6eGn3fp6x3IFR5SO41/LcUH1jngaoJCJ0K2aocBFk6/8eIW', 'admin', NULL, '2023-11-26 18:50:43', '2023-11-26 18:50:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination_categories`
--
ALTER TABLE `destination_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `destination_categories`
--
ALTER TABLE `destination_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
