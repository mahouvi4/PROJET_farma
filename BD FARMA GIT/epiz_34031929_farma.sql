-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql202.byetcluster.com
-- Généré le :  Dim 06 août 2023 à 09:34
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `epiz_34031929_farma`
--

-- --------------------------------------------------------

--
-- Structure de la table `add_shippings`
--

CREATE TABLE `add_shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `receiv_user_com` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiv_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiv_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiv_district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiv_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiv_street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiv_npt` int(11) DEFAULT NULL,
  `receiv_cpf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_commande` int(10) UNSIGNED NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `add_shippings`
--

INSERT INTO `add_shippings` (`id`, `receiv_user_com`, `receiv_country`, `receiv_state`, `receiv_district`, `receiv_city`, `receiv_street`, `receiv_npt`, `receiv_cpf`, `id_commande`, `statut`, `deleted_at`, `created_at`, `updated_at`) VALUES
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, '0', NULL, '2023-04-11 17:22:26', '2023-04-11 17:22:26'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, '0', NULL, '2023-04-11 18:07:02', '2023-04-11 18:07:02'),
(8, 'Alina Ritinha', 'Brasil', 'Ceará', 'CE', 'Fortaleza', 'Rua messejana condominio portal de lagoa', 41, '71865424528', 11, '0', NULL, '2023-04-12 15:11:25', '2023-04-12 15:11:25'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, '0', NULL, '2023-04-12 16:35:52', '2023-04-12 16:35:52'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, '0', NULL, '2023-04-12 18:33:19', '2023-04-12 18:33:19'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, '0', NULL, '2023-04-12 19:28:40', '2023-04-12 19:28:40'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, '0', NULL, '2023-04-13 14:23:36', '2023-04-13 14:23:36'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, '0', NULL, '2023-04-14 14:20:49', '2023-04-14 14:20:49'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, '0', NULL, '2023-04-15 11:50:20', '2023-04-15 11:50:20'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, '0', NULL, '2023-04-16 12:38:46', '2023-04-16 12:38:46'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21, '0', NULL, '2023-04-16 14:11:39', '2023-04-16 14:11:39'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, '0', NULL, '2023-04-16 14:24:54', '2023-04-16 14:24:54'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, '0', NULL, '2023-04-16 16:19:59', '2023-04-16 16:19:59'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, '0', NULL, '2023-04-19 08:00:00', '2023-04-19 08:00:00'),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28, '0', NULL, '2023-04-21 19:09:29', '2023-04-21 19:09:29'),
(26, 'Alicia de-souza', 'Brasil', 'Ceara', 'CE', 'Fortaleza', 'Condominio portal da lagoa ,messejana,62920000', 124, '74525532145', 29, '0', NULL, '2023-04-21 23:42:32', '2023-04-21 23:42:32'),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30, '0', NULL, '2023-04-22 00:44:26', '2023-04-22 00:44:26'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31, '0', NULL, '2023-04-22 01:06:57', '2023-04-22 01:06:57'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 32, '0', NULL, '2023-04-22 02:21:33', '2023-04-22 02:21:33'),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33, '0', NULL, '2023-04-22 02:28:37', '2023-04-22 02:28:37'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 35, '0', NULL, '2023-04-22 17:46:33', '2023-04-22 17:46:33'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 36, '0', NULL, '2023-04-22 18:12:29', '2023-04-22 18:12:29'),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 37, '0', NULL, '2023-04-22 18:17:09', '2023-04-22 18:17:09'),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 39, '0', NULL, '2023-04-25 01:21:18', '2023-04-25 01:21:18'),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, '0', NULL, '2023-04-25 04:06:21', '2023-04-25 04:06:21'),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, '0', NULL, '2023-05-23 22:23:45', '2023-05-23 22:23:45'),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 42, '0', NULL, '2023-05-26 17:56:12', '2023-05-26 17:56:12'),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 43, '0', NULL, '2023-06-09 04:07:26', '2023-06-09 04:07:26'),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 44, '0', NULL, '2023-06-20 02:14:01', '2023-06-20 02:14:01'),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 46, '0', NULL, '2023-06-22 02:41:13', '2023-06-22 02:41:13'),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 47, '0', NULL, '2023-08-05 17:32:42', '2023-08-05 17:32:42');

-- --------------------------------------------------------

--
-- Structure de la table `amins`
--

CREATE TABLE `amins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_adm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_adm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `amins`
--

INSERT INTO `amins` (`id`, `name_adm`, `email_adm`, `password`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'administrateur Pharma-Plat', 'luxuluxu229@gmail.com', '4141', '1681129288.PNG', '2023-04-10 11:21:28', '2023-04-10 11:21:28');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(10) UNSIGNED NOT NULL,
  `avis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `calcul_total_devolutions`
--

CREATE TABLE `calcul_total_devolutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pharmacie` int(11) NOT NULL,
  `total_devolution_pharma` double(8,2) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `calcul_total_devolutions`
--

INSERT INTO `calcul_total_devolutions` (`id`, `id_pharmacie`, `total_devolution_pharma`, `statut`, `created_at`, `updated_at`) VALUES
(1, 1, 3.50, 2, '2023-04-12 07:34:07', '2023-04-12 07:44:36'),
(2, 6, 0.00, 2, '2023-04-12 18:43:26', '2023-04-12 18:46:03'),
(3, 1, 1.50, 2, '2023-04-16 15:02:47', '2023-04-16 15:10:00'),
(4, 1, 2.65, 2, '2023-04-19 08:00:31', '2023-04-24 02:29:22');

-- --------------------------------------------------------

--
-- Structure de la table `cards`
--

CREATE TABLE `cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `qt` int(11) NOT NULL,
  `prix_frete` double(8,2) NOT NULL DEFAULT 0.00,
  `aller_retirer` int(11) NOT NULL DEFAULT 0,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_medico` int(10) UNSIGNED NOT NULL,
  `id_pharmacie` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cards`
--

INSERT INTO `cards` (`id`, `qt`, `prix_frete`, `aller_retirer`, `id_user`, `id_medico`, `id_pharmacie`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 1, 35.00, 1, 2, 1, 1, '2023-04-11 17:10:04', '2023-04-11 16:41:07', '2023-04-11 17:10:04'),
(4, 1, 35.00, 1, 2, 1, 1, '2023-04-11 17:25:30', '2023-04-11 17:21:42', '2023-04-11 17:25:30'),
(5, 1, 39.50, 0, 2, 1, 1, '2023-04-11 18:14:49', '2023-04-11 18:06:21', '2023-04-11 18:14:49'),
(6, 1, 31.36, 1, 2, 17, 3, '2023-04-12 15:12:23', '2023-04-12 15:09:32', '2023-04-12 15:12:23'),
(7, 1, 38.67, 0, 2, 32, 6, '2023-04-12 16:37:07', '2023-04-12 16:35:20', '2023-04-12 16:37:07'),
(8, 1, 44.64, 1, 2, 9, 6, '2023-04-12 18:34:18', '2023-04-12 18:32:58', '2023-04-12 18:34:18'),
(9, 1, 34.30, 1, 3, 22, 1, '2023-04-12 19:29:38', '2023-04-12 19:22:40', '2023-04-12 19:29:38'),
(10, 1, 33.25, 0, 2, 29, 2, '2023-04-13 14:13:55', '2023-04-13 14:12:22', '2023-04-13 14:13:55'),
(11, 2, 33.25, 0, 2, 29, 2, '2023-04-13 14:17:58', '2023-04-13 14:16:25', '2023-04-13 14:17:58'),
(12, 1, 33.25, 1, 2, 29, 2, '2023-04-13 14:26:54', '2023-04-13 14:18:52', '2023-04-13 14:26:54'),
(13, 2, 30.00, 1, 2, 6, 3, '2023-04-14 14:08:17', '2023-04-14 14:06:46', '2023-04-14 14:08:17'),
(14, 1, 30.00, 0, 2, 6, 3, '2023-04-14 14:09:34', '2023-04-14 14:08:53', '2023-04-14 14:09:34'),
(15, 10, 27.00, 1, 2, 16, 3, '2023-04-14 14:12:37', '2023-04-14 14:10:28', '2023-04-14 14:12:37'),
(16, 1, 27.00, 0, 2, 16, 3, '2023-04-14 14:24:10', '2023-04-14 14:14:11', '2023-04-14 14:24:10'),
(17, 1, 31.50, 0, 2, 5, 1, '2023-04-15 11:51:30', '2023-04-15 11:49:39', '2023-04-15 11:51:30'),
(18, 1, 30.00, 1, 2, 20, 1, '2023-04-16 12:15:17', '2023-04-16 12:14:58', '2023-04-16 12:15:17'),
(19, 1, 35.50, 1, 2, 1, 1, '2023-04-16 12:16:15', '2023-04-16 12:15:49', '2023-04-16 12:16:15'),
(20, 1, 33.20, 1, 2, 30, 1, '2023-04-16 12:40:35', '2023-04-16 12:36:46', '2023-04-16 12:40:35'),
(21, 1, 30.00, 1, 3, 20, 1, '2023-04-16 14:13:17', '2023-04-16 14:06:06', '2023-04-16 14:13:17'),
(22, 1, 33.20, 0, 2, 30, 1, '2023-04-16 14:26:00', '2023-04-16 14:24:21', '2023-04-16 14:26:00'),
(23, 1, 30.00, 1, 2, 20, 1, '2023-04-16 15:32:07', '2023-04-16 15:29:38', '2023-04-16 15:32:07'),
(24, 2, 34.40, 1, 2, 22, 1, '2023-04-16 16:12:18', '2023-04-16 15:34:41', '2023-04-16 16:12:18'),
(25, 1, 31.50, 0, 2, 5, 1, '2023-04-16 16:20:54', '2023-04-16 16:19:04', '2023-04-16 16:20:54'),
(26, 10, 41.00, 1, 2, 2, 9, '2023-04-19 08:00:51', '2023-04-19 08:00:47', '2023-04-19 08:00:51'),
(27, 1, 31.00, 0, 2, 25, 9, '2023-04-19 08:00:46', '2023-04-19 08:00:12', '2023-04-19 08:00:46'),
(28, 1, 33.00, 0, 2, 26, 9, '2023-04-19 08:00:59', '2023-04-19 08:00:17', '2023-04-19 08:00:59'),
(29, 1, 41.00, 1, 2, 2, 9, '2023-04-19 08:00:41', '2023-04-19 08:00:33', '2023-04-19 08:00:41'),
(30, 1, 27.00, 1, 2, 16, 3, '2023-04-21 03:18:32', '2023-04-21 03:14:58', '2023-04-21 03:18:32'),
(31, 1, 30.00, 0, 2, 6, 3, '2023-04-21 08:50:53', '2023-04-21 03:19:24', '2023-04-21 08:50:53'),
(32, 1, 31.50, 0, 2, 5, 1, '2023-04-21 18:29:40', '2023-04-21 18:28:50', '2023-04-21 18:29:40'),
(33, 1, 31.50, 0, 2, 5, 1, '2023-04-21 18:50:54', '2023-04-21 18:29:55', '2023-04-21 18:50:54'),
(34, 1, 30.00, 0, 2, 20, 1, '2023-04-21 18:41:51', '2023-04-21 18:30:45', '2023-04-21 18:41:51'),
(35, 1, 34.40, 0, 2, 22, 1, '2023-04-21 18:41:46', '2023-04-21 18:39:07', '2023-04-21 18:41:46'),
(36, 1, 34.40, 0, 2, 22, 1, '2023-04-21 19:00:15', '2023-04-21 19:00:00', '2023-04-21 19:00:15'),
(37, 1, 41.25, 0, 2, 7, 4, '2023-04-21 19:05:30', '2023-04-21 19:00:57', '2023-04-21 19:05:30'),
(38, 1, 43.00, 0, 2, 4, 4, '2023-04-21 19:06:03', '2023-04-21 19:05:48', '2023-04-21 19:06:03'),
(39, 1, 18.00, 0, 2, 31, 4, '2023-04-21 19:06:40', '2023-04-21 19:06:24', '2023-04-21 19:06:40'),
(40, 1, 43.00, 1, 2, 4, 4, '2023-04-21 19:07:47', '2023-04-21 19:07:26', '2023-04-21 19:07:47'),
(41, 1, 41.25, 1, 2, 7, 4, '2023-04-21 19:48:41', '2023-04-21 19:08:24', '2023-04-21 19:48:41'),
(42, 1, 31.50, 0, 2, 27, 10, '2023-04-21 23:44:09', '2023-04-21 23:40:44', '2023-04-21 23:44:09'),
(43, 1, 31.50, 1, 2, 27, 10, '2023-04-22 00:53:39', '2023-04-22 00:44:03', '2023-04-22 00:53:39'),
(44, 1, 33.00, 0, 2, 12, 10, '2023-04-22 01:18:32', '2023-04-22 01:03:23', '2023-04-22 01:18:32'),
(45, 1, 36.50, 1, 2, 15, 13, '2023-04-22 02:22:12', '2023-04-22 02:20:58', '2023-04-22 02:22:12'),
(46, 1, 34.30, 0, 2, 3, 2, '2023-04-22 02:29:13', '2023-04-22 02:27:55', '2023-04-22 02:29:13'),
(47, 1, 27.00, 1, 2, 13, 2, '2023-04-22 02:29:13', '2023-04-22 02:28:13', '2023-04-22 02:29:13'),
(48, 1, 31.50, 1, 2, 5, 1, '2023-04-22 03:38:13', '2023-04-22 03:36:03', '2023-04-22 03:38:13'),
(49, 1, 30.00, 0, 2, 20, 1, '2023-04-22 17:50:52', '2023-04-22 17:35:00', '2023-04-22 17:50:52'),
(50, 1, 34.40, 1, 2, 22, 1, '2023-04-22 17:50:52', '2023-04-22 17:35:32', '2023-04-22 17:50:52'),
(51, 1, 33.20, 0, 2, 30, 1, '2023-04-22 17:50:52', '2023-04-22 17:36:36', '2023-04-22 17:50:52'),
(52, 1, 34.40, 1, 2, 22, 1, '2023-04-22 18:14:13', '2023-04-22 18:06:00', '2023-04-22 18:14:13'),
(53, 1, 35.50, 0, 2, 1, 1, '2023-04-22 18:14:13', '2023-04-22 18:06:17', '2023-04-22 18:14:13'),
(54, 1, 30.00, 1, 2, 20, 1, '2023-04-22 18:18:22', '2023-04-22 18:15:29', '2023-04-22 18:18:22'),
(55, 1, 31.50, 0, 2, 5, 1, '2023-04-22 18:18:22', '2023-04-22 18:16:00', '2023-04-22 18:18:22'),
(56, 1, 34.40, 0, 2, 22, 1, '2023-04-22 18:18:22', '2023-04-22 18:16:30', '2023-04-22 18:18:22'),
(57, 1, 33.20, 0, 2, 30, 1, '2023-04-25 01:19:30', '2023-04-22 18:26:56', '2023-04-25 01:19:30'),
(58, 1, 31.50, 1, 2, 5, 1, '2023-04-25 01:19:30', '2023-04-22 18:27:15', '2023-04-25 01:19:30'),
(59, 2, 30.00, 0, 2, 20, 1, '2023-04-25 01:19:30', '2023-04-22 18:27:30', '2023-04-25 01:19:30'),
(60, 1, 34.40, 0, 2, 22, 1, '2023-04-25 01:19:30', '2023-04-22 18:27:51', '2023-04-25 01:19:30'),
(61, 1, 35.50, 0, 2, 1, 1, '2023-04-25 01:19:30', '2023-04-22 18:28:03', '2023-04-25 01:19:30'),
(62, 1, 31.50, 0, 10, 5, 1, '2023-04-24 04:22:24', '2023-04-24 04:21:05', '2023-04-24 04:22:24'),
(63, 1, 30.00, 0, 2, 20, 1, '2023-04-25 01:22:58', '2023-04-25 01:20:53', '2023-04-25 01:22:58'),
(64, 1, 35.50, 0, 2, 1, 1, '2023-04-25 04:09:32', '2023-04-25 04:04:56', '2023-04-25 04:09:32'),
(65, 1, 35.50, 1, 2, 1, 1, '2023-05-23 22:25:08', '2023-05-23 22:22:20', '2023-05-23 22:25:08'),
(66, 2, 30.50, 1, 2, 5, 1, '2023-05-26 17:55:12', '2023-05-26 17:54:10', '2023-05-26 17:55:12'),
(67, 1, 30.50, 1, 2, 5, 1, '2023-05-26 17:55:38', '2023-05-26 17:55:26', '2023-05-26 17:55:38'),
(68, 1, 30.50, 0, 2, 5, 1, '2023-05-26 17:57:16', '2023-05-26 17:55:46', '2023-05-26 17:57:16'),
(69, 2, 27.00, 1, 2, 16, 3, '2023-06-09 04:09:04', '2023-06-09 04:06:36', '2023-06-09 04:09:04'),
(70, 2, 27.00, 1, 2, 13, 2, '2023-06-20 02:19:07', '2023-06-20 02:12:43', '2023-06-20 02:19:07'),
(71, 1, 31.50, 0, 2, 5, 1, '2023-06-20 02:24:14', '2023-06-20 02:23:05', '2023-06-20 02:24:14'),
(72, 1, 31.50, 0, 2, 5, 1, '2023-06-20 02:26:20', '2023-06-20 02:25:11', '2023-06-20 02:26:20'),
(73, 2, 31.50, 1, 2, 5, 1, '2023-06-22 02:40:42', '2023-06-22 02:40:22', '2023-06-22 02:40:42'),
(74, 1, 31.50, 0, 2, 5, 1, '2023-06-22 02:43:59', '2023-06-22 02:40:50', '2023-06-22 02:43:59'),
(75, 2, 31.50, 1, 2, 5, 1, '2023-08-05 17:39:38', '2023-08-05 17:31:31', '2023-08-05 17:39:38');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(10) UNSIGNED NOT NULL,
  `code_commande` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_commande` double(8,2) NOT NULL,
  `commentax` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_pharmacie` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacimento` date NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codzip` int(11) NOT NULL,
  `tel` int(11) NOT NULL,
  `ddd` int(11) NOT NULL,
  `n_apt` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `consolidation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id`, `code_commande`, `total_commande`, `commentax`, `id_user`, `id_pharmacie`, `firstname`, `name`, `nacimento`, `country`, `street`, `district`, `city`, `state`, `codzip`, `tel`, `ddd`, `n_apt`, `email`, `cpf`, `statut`, `created_at`, `updated_at`, `consolidation`) VALUES
(9, '1681237345EXP-K7883', 35.00, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '4', '2023-04-11 17:22:25', '2023-04-12 07:34:07', '0'),
(10, '1681240021EXP-K2322', 35.50, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '3', '2023-04-11 18:07:01', '2023-04-12 07:44:35', '1'),
(11, '1681315884EXP-K3532', 31.36, 'ola, eu estou precisando desse remerdio urgentemente.', 2, 3, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '3', '2023-04-12 15:11:24', '2023-04-14 14:58:35', '1'),
(12, '1681320952EXP-K3029', 31.88, NULL, 2, 6, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '3', '2023-04-12 16:35:52', '2023-04-12 18:46:03', '1'),
(13, '1681327999EXP-K9198', 44.64, NULL, 2, 6, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '4', '2023-04-12 18:33:19', '2023-04-12 18:43:25', '0'),
(14, '1681331319EXP-K2269', 34.30, NULL, 3, 1, 'Alcielena', 'Antonia', '1984-07-12', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 63900000, 854004747, 84, 24, 'alcielenaaraujo@gmail.com', '00620010355', '3', '2023-04-12 19:28:39', '2023-04-14 14:58:35', '1'),
(16, '1681399416EXP-K3010', 33.25, NULL, 2, 2, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '3', '2023-04-13 14:23:36', '2023-04-13 15:20:41', '1'),
(17, '1681485649EXP-K3799', 22.00, 'oi, por favor sera que voces conseguem entregar esse remerdio daqui 15 min? eu estou precisando urgentemente', 2, 3, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-04-14 14:20:49', '2023-04-14 14:24:10', '0'),
(18, '1681563019EXP-K2018', 26.50, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '3', '2023-04-15 11:50:19', '2023-04-15 12:01:37', '1'),
(19, '1681652325EXP-K5564', 33.20, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '3', '2023-04-16 12:38:45', '2023-04-24 02:29:22', '1'),
(21, '1681657898EXP-K1789', 30.00, NULL, 3, 1, 'Alcielena', 'Antonia', '1984-07-12', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 63900000, 854004747, 84, 84, 'alcielenaaraujo@gmail.com', '00620010355', '4', '2023-04-16 14:11:38', '2023-04-16 15:02:46', '0'),
(22, '1681658694EXP-K3000', 28.20, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '3', '2023-04-16 14:24:54', '2023-04-16 15:10:00', '1'),
(25, '1681665598EXP-K2747', 26.50, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '4', '2023-04-16 16:19:58', '2023-04-19 08:00:31', '0'),
(26, '1681876800EXP-K2209', 41.00, NULL, 2, 9, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-04-19 08:00:00', '2023-04-19 08:00:41', '0'),
(28, '1682089769EXP-K4510', 41.25, NULL, 2, 4, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-04-21 19:09:29', '2023-04-21 19:48:41', '0'),
(29, '1682106152EXP-K6196', 23.50, 'por favor esse remerdio preciso urgentemente', 2, 10, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-04-21 23:42:32', '2023-04-21 23:44:09', '0'),
(30, '1682109866EXP-K9306', 31.50, NULL, 2, 10, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-04-22 00:44:26', '2023-04-22 00:53:39', '0'),
(31, '1682111217EXP-K5025', 25.00, NULL, 2, 10, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-04-22 01:06:57', '2023-04-22 01:18:32', '0'),
(32, '1682115693EXP-K7461', 36.50, NULL, 2, 13, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-04-22 02:21:33', '2023-04-22 02:22:12', '0'),
(33, '1682116117EXP-K4664', 61.30, NULL, 2, 2, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-04-22 02:28:37', '2023-04-22 02:29:13', '0'),
(35, '1682171193EXP-K9079', 87.60, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-04-22 17:46:33', '2023-04-22 17:50:52', '0'),
(36, '1682172749EXP-K6877', 69.90, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-04-22 18:12:29', '2023-04-23 22:55:25', '0'),
(37, '1682173029EXP-K7054', 85.90, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-04-22 18:17:09', '2023-04-23 22:48:57', '0'),
(39, '1682371278EXP-K1295', 25.00, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '3', '2023-04-25 01:21:18', '2023-06-22 03:00:34', '1'),
(40, '1682381181EXP-K4316', 35.50, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '4', '2023-04-25 04:06:21', '2023-05-10 17:15:22', '0'),
(41, '1684866225EXP-K7289', 35.50, 'Ola tem como entrgar rapidinho??', 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '3', '2023-05-23 22:23:45', '2023-06-20 02:34:00', '1'),
(42, '1685109372EXP-K2240', 26.50, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '3', '2023-05-26 17:56:12', '2023-05-26 18:06:21', '1'),
(43, '1686269246EXP-K1354', 54.00, NULL, 2, 3, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-06-09 04:07:26', '2023-06-09 04:09:04', '0'),
(44, '1687212841EXP-K8122', 54.00, NULL, 2, 2, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-06-20 02:14:01', '2023-06-20 02:19:07', '0'),
(46, '1687387273EXP-K1862', 26.50, NULL, 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '3', '2023-06-22 02:41:13', '2023-06-22 03:00:34', '1'),
(47, '1691242362EXP-K6396', 63.00, 'ola, se puderem enviar logo, seria muito legal.agradeco', 2, 1, 'Mahouvi', 'Emmanuel', '1993-08-22', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 84, 'relaxmusik229@gmail.com', '71834413427', '1', '2023-08-05 17:32:42', '2023-08-05 17:39:38', '0');

-- --------------------------------------------------------

--
-- Structure de la table `contactos`
--

CREATE TABLE `contactos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `objet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_phar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_phar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_pharmacie` int(11) DEFAULT NULL,
  `id_adm` int(10) DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT 0,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contactos`
--

INSERT INTO `contactos` (`id`, `message`, `objet`, `name_phar`, `email_phar`, `id_pharmacie`, `id_adm`, `statut`, `photo`, `created_at`, `updated_at`) VALUES
(24, 'ola, tem como o senhor me mandar o comprovante', 'reclamaçao', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-14 07:38:10', '2023-04-14 07:42:35'),
(25, 'ola, sim voce queira de que mes?', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-14 07:42:36', '2023-04-14 07:42:36'),
(26, 'sim desse ultimo pagamento', 'pedido de esclarecimento', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-14 07:46:11', '2023-04-14 07:48:58'),
(27, 'tudo bem,é so aguardar para eu falar com o administrador la.', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-14 07:48:58', '2023-04-14 07:48:58'),
(28, 'tudo bem', 'reclamaçao', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 1, NULL, '2023-04-14 07:50:52', '2023-04-14 07:50:52'),
(29, 'mas tambem se tiver para todos ainda bem', 'reclamaçao', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-14 07:51:55', '2023-04-14 07:52:59'),
(30, 'sim, é so aguardar que resolvo', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-14 07:52:59', '2023-04-14 07:52:59'),
(31, 'ola, até agora nao recebi nada de comprovante', 'reclamaçao', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-14 10:46:22', '2023-04-14 12:57:18'),
(32, 'opa, sim descupe, acabamos recebendo muita mensagem', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-14 12:57:18', '2023-04-14 12:57:18'),
(33, 'tudo bem, acabei de ver o comprovante.Obrigado', 'reclamaçao', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-14 13:07:25', '2023-04-14 13:11:09'),
(34, 'foi um prazer ter ajudado', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-14 13:11:09', '2023-04-14 13:11:09'),
(35, 'ola, tem como me mandar o comprovante?', 'reclamaçao', 'Farmácia Farma Russas', 'farmaciafarma@gmail.com', 3, 1, 3, NULL, '2023-04-14 15:06:34', '2023-04-14 15:09:10'),
(36, 'ola, sim por favor so aguardar 15min para eu resolver', NULL, NULL, NULL, 3, 1, 0, NULL, '2023-04-14 15:09:10', '2023-04-14 15:09:10'),
(37, 'ah, tudo bem.vou aguardar entao', 'reclamaçao', 'Farmácia Farma Russas', 'farmaciafarma@gmail.com', 3, 1, 1, NULL, '2023-04-14 15:10:33', '2023-04-14 15:10:33'),
(38, 'mas se tiver for para todos ainda melhor', 'reclamaçao', 'Farmácia Farma Russas', 'farmaciafarma@gmail.com', 3, 1, 3, NULL, '2023-04-14 15:11:40', '2023-04-14 15:12:52'),
(39, 'pronto,veja ai se chegou no seu email', NULL, NULL, NULL, 3, 1, 0, NULL, '2023-04-14 15:12:52', '2023-04-14 15:12:52'),
(40, 'sim chegou.muito obrigado', 'reclamaçao', 'Farmácia Farma Russas', 'farmaciafarma@gmail.com', 3, 1, 3, NULL, '2023-04-14 15:13:38', '2023-04-14 15:14:54'),
(41, 'imagina, foi um prazer ter ajudado.', NULL, NULL, NULL, 3, 1, 0, NULL, '2023-04-14 15:14:55', '2023-04-14 15:14:55'),
(42, 'ola, o senhor esta ai?', 'reclamaçao', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-15 09:01:57', '2023-04-15 10:40:31'),
(43, 'opa, o senhor pode me responder rapidinho?', 'pedido de esclarecimento', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-15 10:17:22', '2023-04-15 10:39:25'),
(44, 'ola, sim colega pode falar', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-15 10:39:25', '2023-04-15 10:39:25'),
(45, 'estou te ouvindo.algum problema?', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-15 10:40:31', '2023-04-15 10:40:31'),
(46, 'tem como me explicar como funciona esse negocio da devoluçao?', 'pedido de esclarecimento', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-15 10:42:58', '2023-04-15 11:01:50'),
(47, 'no momento ,nos estamos lotado.aguarde mastarde', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-15 11:01:50', '2023-04-15 11:01:50'),
(48, 'ola, pronto ,esta livre agora?', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-15 11:19:43', '2023-04-15 11:19:43'),
(49, 'sim, o senhor pode falar agora', 'pedido de esclarecimento', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 1, NULL, '2023-04-15 11:24:59', '2023-04-15 11:24:59'),
(50, 'estou aqui', 'pedido de esclarecimento', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-15 11:25:43', '2023-04-15 11:27:08'),
(51, 'a devoluçao é aquele numero que fica se atualizando', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-15 11:27:08', '2023-04-15 11:27:08'),
(52, 'Ah tipo quer dizer aquele numero vermelho?', 'tirar duvida', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-16 17:11:08', '2023-04-16 17:14:37'),
(53, 'sim isso!', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-16 17:14:37', '2023-04-16 17:14:37'),
(54, 'ah pois beleza.Obrigado', 'reclamaçao', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-17 10:00:28', '2023-04-17 10:17:25'),
(55, 'tem ainda outra duvida?', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-17 10:17:25', '2023-04-17 10:17:25'),
(56, 'opa, outra duvida?', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-18 08:57:50', '2023-04-18 08:57:50'),
(57, 'de volta ksksk', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-19 08:00:13', '2023-04-19 08:00:13'),
(58, 'opa, por enquanto,esta tudo bem', 'reclamaçao', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 1, NULL, '2023-04-19 08:00:17', '2023-04-19 08:00:17'),
(59, 'O Senhor está aí ?', 'Ola', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 1, NULL, '2023-04-19 08:00:44', '2023-04-19 08:00:44'),
(60, 'ola', 'pedido de comprovante', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 1, NULL, '2023-04-21 16:51:06', '2023-04-21 16:51:06'),
(61, 'estou aguardando', 'pedido de comprovante', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-21 17:02:40', '2023-04-21 17:25:29'),
(62, 'opa,como posso ajudar a senhora?', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-21 17:25:29', '2023-04-21 17:25:29'),
(63, 'Eu não estou conseguindo entender essa numerotação em cima aqui', 'Réclamação', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-21 19:29:44', '2023-04-23 01:14:02'),
(64, 'oii', 'oi', 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, '1682196930.jpg', '2023-04-23 00:55:30', '2023-04-23 01:12:17'),
(65, 'opa', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-23 01:12:17', '2023-04-23 01:12:17'),
(66, 'é dessa a senhora esta falando?', NULL, NULL, NULL, 1, 1, 0, '1682198042.jpg', '2023-04-23 01:14:02', '2023-04-23 01:14:02'),
(67, 'Isso!!!, Era tudo onque quria', NULL, 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-23 01:48:31', '2023-04-24 02:02:31'),
(68, 'O Senhor consegue?', NULL, 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 1, NULL, '2023-04-23 01:56:06', '2023-04-23 01:56:06'),
(69, 'Oiiii', NULL, 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 1, NULL, '2023-04-23 02:00:00', '2023-04-23 02:00:00'),
(70, 'O Senhor está aí ?', NULL, 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 1, '1682200857.jpg', '2023-04-23 02:00:57', '2023-04-23 02:00:57'),
(71, 'Ola, eu ainda estou aqui porque a minha Loja ainda está alberta.vou fechar hoje Mastarde.', NULL, 'DROGASIL - RUSSAS', 'manuagondanou229@gmail.com', 1, 1, 3, NULL, '2023-04-23 03:19:17', '2023-04-24 02:25:17'),
(72, 'Opa', NULL, 'Farmácia Pague Menos', 'paguemenos@gmail.com', 2, 1, 3, NULL, '2023-04-23 13:25:38', '2023-04-24 02:16:02'),
(73, 'L\'accessibilité : financière, géographique. L\'acceptabilité : pour les usagers mais aussi pour les professionnels de santé et pour les financeurs. L\'efficacité technique et économique (efficience)', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-24 02:13:22', '2023-04-24 02:13:22'),
(74, '\r\n\r\nHenri Marion, \"Qu\'est-ce que la pédagogie ?\" (extrait de Lecons de psychologie appliquée à l\'éducation, 1882). Marion définit ici la pédagogie et l\'articule avec la morale, la psychologie, la logique. Il pose la question de savoir si la pédagogie est un art et quelles sont, dans ce domaine, les relations entre la théorie et la pratique. Un texte dont les problématiques sont, évidemment, toujours d\'actualité.\r\n\r\nHenri Marion, \"La méthode active\" (1888) : ce texte paru dans la Revue pédagogique (12 - I) reprend un cours donné à la Sorbonne dans le cadre de la chaire de \"science de l\'éducation\" que Marion fut le premier à occuper. C\'est un document fondateur à bien des égards, rédigé par un proche de Ferdinand ', NULL, NULL, NULL, 2, 1, 0, NULL, '2023-04-24 02:16:02', '2023-04-24 02:16:02'),
(75, 'olaaaa', NULL, NULL, NULL, 1, 1, 0, NULL, '2023-04-24 02:25:17', '2023-04-24 02:25:17');

-- --------------------------------------------------------

--
-- Structure de la table `devolutions`
--

CREATE TABLE `devolutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_commande` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `id_pharmacie` int(11) NOT NULL,
  `id_pagamento` int(11) NOT NULL,
  `qt_list` int(11) NOT NULL,
  `total_list` double(8,2) NOT NULL,
  `devolution_pharma` double(8,2) NOT NULL,
  `taxo` double(8,2) NOT NULL,
  `code_commande` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `devolutions`
--

INSERT INTO `devolutions` (`id`, `id_list`, `id_commande`, `id_user`, `id_medico`, `id_pharmacie`, `id_pagamento`, `qt_list`, `total_list`, `devolution_pharma`, `taxo`, `code_commande`, `statut`, `created_at`, `updated_at`) VALUES
(1, 7, 9, 2, 1, 1, 1, 1, 35.00, 3.50, 0.10, '1681237345EXP-K7883', 2, '2023-04-12 07:34:07', '2023-04-12 07:44:36'),
(2, 11, 13, 2, 9, 6, 5, 1, 44.64, 0.00, 0.00, '1681327999EXP-K9198', 2, '2023-04-12 18:43:26', '2023-04-12 18:46:03'),
(3, 19, 21, 3, 20, 1, 11, 1, 30.00, 1.50, 0.05, '1681657898EXP-K1789', 2, '2023-04-16 15:02:47', '2023-04-16 15:10:00'),
(4, 23, 25, 2, 5, 1, 15, 1, 26.50, 2.65, 0.10, '1681665598EXP-K2747', 2, '2023-04-19 08:00:31', '2023-04-24 02:29:22');

-- --------------------------------------------------------

--
-- Structure de la table `distances`
--

CREATE TABLE `distances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `distance` double(8,2) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `distances`
--

INSERT INTO `distances` (`id`, `distance`, `id_user`, `created_at`, `updated_at`, `statut`) VALUES
(2, 0.82, 2, '2023-04-11 16:40:40', '2023-08-05 17:30:46', 1),
(3, 0.81, 3, '2023-04-12 19:22:18', '2023-04-16 14:03:36', 1),
(4, 0.81, 10, '2023-04-24 04:20:50', '2023-04-24 04:20:50', 1);

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 1,
  `id_user` int(11) NOT NULL,
  `id_pharmacie` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`id`, `statut`, `id_user`, `id_pharmacie`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 1, '2023-04-11 18:02:35', '2023-04-11 18:02:35'),
(4, 1, 3, 1, '2023-04-12 19:18:47', '2023-04-12 19:18:47'),
(5, 1, 2, 3, '2023-04-19 08:00:40', '2023-04-19 08:00:40'),
(6, 1, 2, 8, '2023-04-19 08:00:07', '2023-04-19 08:00:07'),
(7, 1, 2, 6, '2023-04-19 08:00:21', '2023-04-19 08:00:21'),
(8, 1, 2, 4, '2023-04-19 08:00:39', '2023-04-19 08:00:39'),
(9, 1, 2, 2, '2023-04-19 08:00:15', '2023-04-19 08:00:15'),
(10, 1, 2, 7, '2023-04-20 23:25:28', '2023-04-20 23:25:28'),
(11, 1, 2, 10, '2023-04-21 20:00:51', '2023-04-21 20:00:51'),
(12, 1, 11, 9, '2023-05-25 21:52:31', '2023-05-25 21:52:31');

-- --------------------------------------------------------

--
-- Structure de la table `list_commandes`
--

CREATE TABLE `list_commandes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_commande` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_medico` int(10) UNSIGNED NOT NULL,
  `id_pharmacie` int(10) UNSIGNED NOT NULL,
  `prix` float DEFAULT NULL,
  `qt_list` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_list` double(8,2) NOT NULL,
  `desconte` int(11) NOT NULL,
  `distance` double(8,2) NOT NULL,
  `prix_frete` double(8,2) NOT NULL,
  `aller_retirer` int(11) NOT NULL,
  `verifier_statut_entrega` int(11) NOT NULL,
  `injection_map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `list_commandes`
--

INSERT INTO `list_commandes` (`id`, `id_commande`, `id_user`, `id_medico`, `id_pharmacie`, `prix`, `qt_list`, `total_list`, `desconte`, `distance`, `prix_frete`, `aller_retirer`, `verifier_statut_entrega`, `injection_map`, `statut`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 9, 2, 1, 1, 35, '1', 35.00, 0, 0.81, 35.00, 1, 1, NULL, 4, NULL, '2023-04-11 17:22:26', '2023-04-12 07:34:07'),
(8, 10, 2, 1, 1, 35.5, '1', 35.50, 0, 66.66, 39.50, 0, 0, NULL, 3, NULL, '2023-04-11 18:07:01', '2023-04-12 07:35:52'),
(9, 11, 2, 17, 3, 31.36, '1', 31.36, 2, 0.43, 31.36, 1, 1, NULL, 3, NULL, '2023-04-12 15:11:24', '2023-04-14 14:53:17'),
(10, 12, 2, 32, 6, 31.875, '1', 31.88, 15, 55.59, 38.67, 0, 0, NULL, 3, NULL, '2023-04-12 16:35:52', '2023-04-12 18:41:40'),
(11, 13, 2, 9, 6, 37.2, '1', 44.64, 7, 55.59, 44.64, 1, 1, NULL, 4, NULL, '2023-04-12 18:33:19', '2023-04-12 18:43:25'),
(12, 14, 3, 22, 1, 29.4, '1', 34.30, 2, 0.81, 34.30, 1, 1, NULL, 3, NULL, '2023-04-12 19:28:40', '2023-04-14 13:16:07'),
(14, 16, 2, 29, 2, 28.5, '1', 33.25, 5, 0.48, 33.25, 1, 1, NULL, 3, NULL, '2023-04-13 14:23:36', '2023-04-13 14:47:18'),
(15, 17, 2, 16, 3, 22, '1', 22.00, 0, 0.43, 27.00, 0, 0, NULL, 1, NULL, '2023-04-14 14:20:49', '2023-04-15 19:06:02'),
(16, 18, 2, 5, 1, 26.5, '1', 26.50, 0, 0.81, 31.50, 0, 0, NULL, 3, NULL, '2023-04-15 11:50:20', '2023-04-15 12:00:36'),
(17, 19, 2, 30, 1, 28.2, '1', 33.20, 6, 0.81, 33.20, 1, 1, NULL, 3, NULL, '2023-04-16 12:38:46', '2023-04-23 03:38:55'),
(19, 21, 3, 20, 1, 25, '1', 30.00, 0, 0.81, 30.00, 1, 1, NULL, 4, NULL, '2023-04-16 14:11:39', '2023-04-16 15:02:46'),
(20, 22, 2, 30, 1, 28.2, '1', 28.20, 6, 0.81, 33.20, 0, 0, NULL, 3, NULL, '2023-04-16 14:24:54', '2023-04-16 15:00:08'),
(23, 25, 2, 5, 1, 26.5, '1', 26.50, 0, 0.81, 31.50, 0, 0, NULL, 4, NULL, '2023-04-16 16:19:59', '2023-04-19 08:00:31'),
(24, 26, 2, 2, 9, 33, '1', 41.00, 0, 139.83, 41.00, 1, 1, NULL, 1, NULL, '2023-04-19 08:00:00', '2023-04-19 08:00:41'),
(26, 28, 2, 7, 4, 33.25, '1', 41.25, 5, 66.66, 41.25, 1, 1, NULL, 1, NULL, '2023-04-21 19:09:29', '2023-04-21 19:48:41'),
(27, 29, 2, 27, 10, 23.5, '1', 23.50, 6, 112.74, 31.50, 0, 0, NULL, 1, NULL, '2023-04-21 23:42:32', '2023-04-21 23:44:09'),
(28, 30, 2, 27, 10, 23.5, '1', 31.50, 6, 112.74, 31.50, 1, 1, NULL, 1, NULL, '2023-04-22 00:44:26', '2023-04-22 00:53:39'),
(29, 31, 2, 12, 10, 25, '1', 25.00, 0, 112.74, 33.00, 0, 0, NULL, 1, NULL, '2023-04-22 01:06:57', '2023-04-22 01:18:32'),
(30, 32, 2, 15, 13, 28.5, '1', 36.50, 5, 311.70, 36.50, 1, 1, NULL, 1, NULL, '2023-04-22 02:21:33', '2023-04-22 02:22:12'),
(31, 33, 2, 3, 2, 34.3, '1', 61.30, 2, 0.48, 34.30, 0, 0, NULL, 1, NULL, '2023-04-22 02:28:37', '2023-04-22 02:29:13'),
(32, 33, 2, 13, 2, 22, '1', 61.30, 0, 0.48, 27.00, 1, 1, NULL, 1, NULL, '2023-04-22 02:28:37', '2023-04-22 02:29:13'),
(34, 35, 2, 20, 1, 25, '1', 87.60, 0, 0.81, 30.00, 0, 0, NULL, 1, NULL, '2023-04-22 17:46:33', '2023-04-22 17:50:52'),
(35, 35, 2, 22, 1, 29.4, '1', 87.60, 2, 0.81, 34.40, 1, 1, NULL, 1, NULL, '2023-04-22 17:46:33', '2023-04-22 17:50:52'),
(36, 35, 2, 30, 1, 28.2, '1', 87.60, 6, 0.81, 33.20, 0, 1, NULL, 1, NULL, '2023-04-22 17:46:33', '2023-04-22 17:50:52'),
(37, 36, 2, 22, 1, 29.4, '1', 69.90, 2, 0.81, 34.40, 1, 1, NULL, 1, NULL, '2023-04-22 18:12:29', '2023-04-23 22:55:25'),
(38, 36, 2, 1, 1, 35.5, '1', 69.90, 0, 0.81, 35.50, 0, 1, NULL, 1, NULL, '2023-04-22 18:12:29', '2023-04-22 18:14:13'),
(39, 37, 2, 20, 1, 25, '1', 85.90, 0, 0.81, 30.00, 1, 1, NULL, 1, NULL, '2023-04-22 18:17:09', '2023-04-23 22:48:57'),
(40, 37, 2, 5, 1, 26.5, '1', 85.90, 0, 0.81, 31.50, 0, 1, NULL, 1, NULL, '2023-04-22 18:17:09', '2023-04-22 18:18:22'),
(41, 37, 2, 22, 1, 29.4, '1', 85.90, 2, 0.81, 34.40, 0, 1, NULL, 1, NULL, '2023-04-22 18:17:09', '2023-04-22 18:18:22'),
(47, 39, 2, 20, 1, 25, '1', 25.00, 0, 0.81, 30.00, 0, 0, NULL, 3, NULL, '2023-04-25 01:21:18', '2023-06-22 02:57:10'),
(48, 40, 2, 1, 1, 35.5, '1', 35.50, 0, 0.81, 35.50, 0, 0, NULL, 4, NULL, '2023-04-25 04:06:21', '2023-05-10 17:15:22'),
(49, 41, 2, 1, 1, 35.5, '1', 35.50, 0, 0.65, 35.50, 1, 1, NULL, 3, NULL, '2023-05-23 22:23:45', '2023-05-26 18:10:51'),
(50, 42, 2, 5, 1, 26.5, '1', 26.50, 0, 149.32, 30.50, 0, 0, NULL, 3, NULL, '2023-05-26 17:56:12', '2023-05-26 18:04:14'),
(51, 43, 2, 16, 3, 22, '2', 54.00, 0, 0.38, 27.00, 1, 1, NULL, 1, NULL, '2023-06-09 04:07:26', '2023-06-09 04:09:04'),
(52, 44, 2, 13, 2, 22, '2', 54.00, 0, 0.42, 27.00, 1, 1, NULL, 1, NULL, '2023-06-20 02:14:01', '2023-06-20 02:19:07'),
(54, 46, 2, 5, 1, 26.5, '1', 26.50, 0, 1.40, 31.50, 0, 0, NULL, 3, NULL, '2023-06-22 02:41:13', '2023-06-22 02:55:32'),
(55, 47, 2, 5, 1, 26.5, '2', 63.00, 0, 0.82, 31.50, 1, 1, NULL, 1, NULL, '2023-08-05 17:32:42', '2023-08-05 17:39:38');

-- --------------------------------------------------------

--
-- Structure de la table `medicos`
--

CREATE TABLE `medicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `Reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_pro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` float NOT NULL,
  `prix_desconte` int(11) DEFAULT NULL,
  `desconte` int(11) NOT NULL DEFAULT 0,
  `kilo` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `date_fabriq` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_expir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pharmacie` int(10) UNSIGNED NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `medicos`
--

INSERT INTO `medicos` (`id`, `Reference`, `nom_pro`, `desciption`, `prix`, `prix_desconte`, `desconte`, `kilo`, `stock`, `date_fabriq`, `date_expir`, `photo`, `id_pharmacie`, `statut`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Vitamin C 500mg + Arginine 500mg, Formula Premium - 60 capsules', 'Vitamin C + Arginine', 'Vitamin C 500mg + Arginine 500mg, Premium Formula\r\nIt is a perfect combination of mineral + vitamin, which acts by helping the immune system, combating or reducing the risks of infectious diseases, such as colds, and also combating physical and mental fatigue.', 35.5, NULL, 0, 500, 19, '2022-10-10', '2025-10-10', '1681229685.jpg', 1, '1', NULL, '2023-04-11 15:14:45', '2023-05-23 22:25:08'),
(2, 'Vitamin C 500mg + Arginine 500mg, Formula Premium - 60 capsules', 'Vitamin C + Arginine', 'Vitamin C 500mg + Arginine 500mg, Premium Formula\r\nIt is a perfect combination of mineral + vitamin, which acts by helping the immune system, combating or reducing the risks of infectious diseases, such as colds, and also combating physical and mental fatigue.', 33, NULL, 0, 500, 24, '2022-10-10', '2025-10-10', '1681311330.jpg', 9, '1', NULL, '2023-04-12 13:55:30', '2023-04-19 08:00:41'),
(3, 'Vitamin C 500mg + Arginine 500mg, Formula Premium - 60 capsules', 'Vitamin C + Arginine', 'Vitamin C 500mg + Arginine 500mg, Premium Formula\r\nIt is a perfect combination of mineral + vitamin, which acts by helping the immune system, combating or reducing the risks of infectious diseases, such as colds, and also combating physical and mental fatigue.', 35, NULL, 2, 500, 29, '2022-05-05', '2026-05-05', '1681311637.jpg', 2, '1', NULL, '2023-04-12 14:00:37', '2023-04-22 02:29:13'),
(4, 'Vitamin C 500mg + Arginine 500mg, Formula Premium - 60 capsules', 'Vitamin C + Arginine', 'Vitamin C 500mg + Arginine 500mg, Premium Formula\r\nIt is a perfect combination of mineral + vitamin, which acts by helping the immune system, combating or reducing the risks of infectious diseases, such as colds, and also combating physical and mental fatigue.', 35, NULL, 0, 500, 15, '2022-05-05', '2024-05-05', '1681311905.jpg', 4, '1', NULL, '2023-04-12 14:05:05', '2023-04-12 14:05:05'),
(5, 'Blue pill or capsule filled with vitamin B12', 'vitamin B12', 'A nutrient in the vitamin B complex that the body needs in small amounts to function and stay healthy. Vitamin B12 helps make red blood cells, DNA, RNA, energy, and tissues, and keeps nerve cells healthy. It is found in liver, meat, eggs, poultry, shellfish, milk, and milk products', 26.5, NULL, 0, 200, 22, '2022-10-10', '2026-10-10', '1681312673.jpg', 1, '1', NULL, '2023-04-12 14:17:53', '2023-08-05 17:39:38'),
(6, 'Blue pill or capsule filled with vitamin B12', 'vitamin B12', 'A nutrient in the vitamin B complex that the body needs in small amounts to function and stay healthy. Vitamin B12 helps make red blood cells, DNA, RNA, energy, and tissues, and keeps nerve cells healthy. It is found in liver, meat, eggs, poultry, shellfish, milk, and milk products', 30, NULL, 0, 200, 20, '2022-10-10', '2023-10-10', '1681312815.jpg', 3, '1', NULL, '2023-04-12 14:20:16', '2023-04-12 14:20:16'),
(7, 'Blue pill or capsule filled with vitamin B12', 'vitamin B12', 'A nutrient in the vitamin B complex that the body needs in small amounts to function and stay healthy. Vitamin B12 helps make red blood cells, DNA, RNA, energy, and tissues, and keeps nerve cells healthy. It is found in liver, meat, eggs, poultry, shellfish, milk, and milk products', 35, NULL, 5, 200, 29, '2022-10-10', '2025-10-10', '1681313102.jpg', 4, '1', NULL, '2023-04-12 14:25:02', '2023-04-21 19:48:41'),
(8, 'Blue pill or capsule filled with vitamin B12', 'vitamin B12', 'A nutrient in the vitamin B complex that the body needs in small amounts to function and stay healthy. Vitamin B12 helps make red blood cells, DNA, RNA, energy, and tissues, and keeps nerve cells healthy. It is found in liver, meat, eggs, poultry, shellfish, milk, and milk products', 35, NULL, 5, 200, 25, '2023-10-10', '2026-10-10', '1681313233.jpg', 5, '1', NULL, '2023-04-12 14:27:13', '2023-04-12 14:27:13'),
(9, 'Blue pill or capsule filled with vitamin B12', 'vitamin B12', 'A nutrient in the vitamin B complex that the body needs in small amounts to function and stay healthy. Vitamin B12 helps make red blood cells, DNA, RNA, energy, and tissues, and keeps nerve cells healthy. It is found in liver, meat, eggs, poultry, shellfish, milk, and milk products', 40, NULL, 7, 200, 14, '2022-10-10', '2025-02-20', '1681313408.jpg', 6, '1', NULL, '2023-04-12 14:30:08', '2023-04-12 18:34:18'),
(10, 'Blue pill or capsule filled with vitamin B12', 'vitamin B12', 'A nutrient in the vitamin B complex that the body needs in small amounts to function and stay healthy. Vitamin B12 helps make red blood cells, DNA, RNA, energy, and tissues, and keeps nerve cells healthy. It is found in liver, meat, eggs, poultry, shellfish, milk, and milk products', 33, NULL, 0, 200, 50, '2021-05-05', '2025-05-05', '1681313561.jpg', 8, '1', NULL, '2023-04-12 14:32:41', '2023-04-12 14:32:41'),
(11, 'Blue pill or capsule filled with vitamin B12', 'vitamin B12', 'A nutrient in the vitamin B complex that the body needs in small amounts to function and stay healthy. Vitamin B12 helps make red blood cells, DNA, RNA, energy, and tissues, and keeps nerve cells healthy. It is found in liver, meat, eggs, poultry, shellfish, milk, and milk products', 35, NULL, 2, 200, 25, '2022-10-20', '2026-10-20', '1681313734.jpg', 10, '1', NULL, '2023-04-12 14:35:34', '2023-04-12 14:35:34'),
(12, 'Vitamin C 200mg / ml Vitalion C Drops 20ml Caramel Flavor', 'Vitamin C', 'Vitamin C (also known as ascorbic acid and ascorbate) is a water-soluble vitamin found in citrus and other fruits and vegetables, also sold as a dietary supplement and as a topical \"serum\" ingredient to treat melasma (dark pigment spots) and wrinkles on the face. It is used to prevent and treat scurvy.', 25, NULL, 0, 200, 24, '2022-05-05', '2026-05-05', '1681314243.jpg', 10, '1', NULL, '2023-04-12 14:44:03', '2023-04-22 01:18:32'),
(13, 'Vitamin C 200mg / ml Vitalion C Drops 20ml Caramel Flavor', 'Vitamin C', 'Vitamin C (also known as ascorbic acid and ascorbate) is a water-soluble vitamin found in citrus and other fruits and vegetables, also sold as a dietary supplement and as a topical \"serum\" ingredient to treat melasma (dark pigment spots) and wrinkles on the face. It is used to prevent and treat scurvy.', 22, NULL, 0, 200, 17, '2021-04-04', '2026-04-04', '1681314381.jpg', 2, '1', NULL, '2023-04-12 14:46:21', '2023-06-20 02:19:07'),
(14, 'Vitamin C 200mg / ml Vitalion C Drops 20ml Caramel Flavor', 'Vitamin C', 'Vitamin C (also known as ascorbic acid and ascorbate) is a water-soluble vitamin found in citrus and other fruits and vegetables, also sold as a dietary supplement and as a topical \"serum\" ingredient to treat melasma (dark pigment spots) and wrinkles on the face. It is used to prevent and treat scurvy.', 25, NULL, 0, 200, 20, '2023-02-02', '2024-02-02', '1681314545.jpg', 12, '1', NULL, '2023-04-12 14:49:05', '2023-04-12 14:49:05'),
(15, 'Vitamin C 200mg / ml Vitalion C Drops 20ml Caramel Flavor', 'Vitamin C', 'Vitamin C (also known as ascorbic acid and ascorbate) is a water-soluble vitamin found in citrus and other fruits and vegetables, also sold as a dietary supplement and as a topical \"serum\" ingredient to treat melasma (dark pigment spots) and wrinkles on the face. It is used to prevent and treat scurvy.', 30, NULL, 5, 200, 14, '2022-04-04', '2024-05-04', '1681314707.jpg', 13, '1', NULL, '2023-04-12 14:51:47', '2023-04-22 02:22:12'),
(16, 'Vitamin C 200mg / ml Vitalion C Drops 20ml Caramel Flavor', 'Vitamin C', 'Vitamin C (also known as ascorbic acid and ascorbate) is a water-soluble vitamin found in citrus and other fruits and vegetables, also sold as a dietary supplement and as a topical \"serum\" ingredient to treat melasma (dark pigment spots) and wrinkles on the face. It is used to prevent and treat scurvy.', 22, NULL, 0, 200, 17, '2023-01-01', '2024-05-05', '1681314892.jpg', 3, '1', NULL, '2023-04-12 14:54:52', '2023-06-09 04:09:04'),
(17, 'Amoxicillin Oral Suspension 200 mg/5 ml, 100 ml', 'Amoxicillin', 'Amoxicillin Oral Suspension 200 mg/5 ml, 100 ml is a penicillin-like broad spectrum antibiotic used to treat bacterial infections caused by susceptible organisms in dogs and cats.', 32, NULL, 2, 200, 29, '2022-05-05', '0024-05-05', '1681315247.jpg', 3, '1', NULL, '2023-04-12 15:00:47', '2023-04-12 15:12:23'),
(18, 'Amoxicillin Oral Suspension 200 mg/5 ml, 100 ml', 'Amoxicillin', 'Amoxicillin Oral Suspension 200 mg/5 ml, 100 ml is a penicillin-like broad spectrum antibiotic used to treat bacterial infections caused by susceptible organisms in dogs and cats.', 35, NULL, 5, 200, 30, '2022-04-04', '2025-04-04', '1681315401.jpg', 4, '1', NULL, '2023-04-12 15:03:21', '2023-04-12 15:03:21'),
(19, 'Amoxicillin Oral Suspension 200 mg/5 ml, 100 ml', 'Amoxicillin', 'Amoxicillin Oral Suspension 200 mg/5 ml, 100 ml is a penicillin-like broad spectrum antibiotic used to treat bacterial infections caused by susceptible organisms in dogs and cats.', 25, NULL, 0, 200, 3, '2022-10-10', '2025-10-10', '1681315578.jpg', 11, '1', NULL, '2023-04-12 15:06:19', '2023-04-12 15:06:19'),
(20, 'Amoxicillin Oral Suspension 200 mg/5 ml, 100 ml', 'Amoxicillin', 'Amoxicillin Oral Suspension 200 mg/5 ml, 100 ml is a penicillin-like broad spectrum antibiotic used to treat bacterial infections caused by susceptible organisms in dogs and cats.', 25, NULL, 0, 200, 20, '2021-10-10', '2023-10-10', '1681315717.jpg', 1, '1', NULL, '2023-04-12 15:08:37', '2023-04-25 01:22:58'),
(21, 'Melatonin Panvel Vita 90 Orodispersible Tablets', 'Melatonin', 'Melatonin is a neurohormone, produced and released by the pineal gland. Melatonin production decreases with aging or does not happen properly when exposed to light stimuli at bedtime. Its main function is to inform the brain when it is time to sleep, reducing the time spent falling asleep and increasing total sleep time, favoring quality rest.', 35, NULL, 0, 200, 20, '2022-05-05', '2026-05-05', '1681316538.webp', 3, '1', NULL, '2023-04-12 15:22:18', '2023-04-12 15:27:21'),
(22, 'Melatonin Panvel Vita 90 Orodispersible Tablets', 'Melatonin', 'Melatonin is a neurohormone, produced and released by the pineal gland. Melatonin production decreases with aging or does not happen properly when exposed to light stimuli at bedtime. Its main function is to inform the brain when it is time to sleep, reducing the time spent falling asleep and increasing total sleep time, favoring quality rest.', 30, NULL, 2, 200, 9, '2021-02-02', '2025-02-02', '1681316709.webp', 1, '1', NULL, '2023-04-12 15:25:09', '2023-04-22 18:18:22'),
(23, 'Melatonin Panvel Vita 90 Orodispersible Tablets', 'Melatonin', 'Melatonin is a neurohormone, produced and released by the pineal gland. Melatonin production decreases with aging or does not happen properly when exposed to light stimuli at bedtime. Its main function is to inform the brain when it is time to sleep, reducing the time spent falling asleep and increasing total sleep time, favoring quality rest.', 25.05, NULL, 0, 200, 30, '2023-01-01', '2026-01-01', '1681317037.webp', 4, '1', NULL, '2023-04-12 15:30:38', '2023-04-12 15:30:38'),
(24, 'Melatonin Panvel Vita 90 Orodispersible Tablets', 'Melatonin', 'Melatonin is a neurohormone, produced and released by the pineal gland. Melatonin production decreases with aging or does not happen properly when exposed to light stimuli at bedtime. Its main function is to inform the brain when it is time to sleep, reducing the time spent falling asleep and increasing total sleep time, favoring quality rest.', 25, NULL, 2, 200, 12, '2022-02-02', '2024-02-02', '1681317214.webp', 7, '1', NULL, '2023-04-12 15:33:34', '2023-04-12 15:33:34'),
(25, 'Melatonin Panvel Vita 90 Orodispersible Tablets', 'Melatonin', 'Melatonin is a neurohormone, produced and released by the pineal gland. Melatonin production decreases with aging or does not happen properly when exposed to light stimuli at bedtime. Its main function is to inform the brain when it is time to sleep, reducing the time spent falling asleep and increasing total sleep time, favoring quality rest.', 23, NULL, 0, 200, 20, '2023-01-01', '2025-01-01', '1681317378.webp', 9, '1', NULL, '2023-04-12 15:36:18', '2023-04-12 15:36:18'),
(26, 'Novalgin-1g-box-with-10-pills Novalgina', 'Novalgin', 'This medicine is indicated as an analgesic (for pain) and antipyretic (for fever). Novalgin is a medicine based on dipyrone, used in the treatment of pain and fever. Median time to onset of action: 30 to 60 minutes after administration and usually lasts approximately 4 hours. IF SYMPTOMS PERSIST A DOCTOR SHOULD BE CONSULTED. DO NOT USE THIS MEDICINE DURING PREGNANCY AND IN CHILDREN UNDER THREE MONTHS OF AGE', 25, NULL, 0, 1000, 30, '2022-04-04', '2026-04-10', '1681318117.webp', 9, '1', NULL, '2023-04-12 15:48:37', '2023-04-12 15:48:37'),
(27, 'Generic drug', 'Generic drug', 'Generic Medicine is a medicine that has the same active principle, in the same dosage, same pharmaceutical indication and the same therapeutic action as the reference medicine. Regarding Generics in Brazil, Teuto occupies the 1st position in 12 states and disputes the leadership in other 9 states', 25, NULL, 6, 100, 8, '2022-10-10', '2025-10-10', '1681318700.jpg', 10, '1', NULL, '2023-04-12 15:58:20', '2023-04-22 00:53:39'),
(28, 'Dorflex Sanofi Analgesic Drops 20ml', 'Dorflex', 'Analgesic Dorflex Sanofi Drops 20ml is an analgesic and muscle relaxant medication indicated to relieve pain associated with muscle contractures caused by inflammation or trauma and to relieve tension headaches. Adult use. Read the leaflet before use.', 26, NULL, 0, 20, 25, '2022-10-10', '2024-10-10', '1681318979.webp', 5, '1', NULL, '2023-04-12 16:02:59', '2023-04-12 16:02:59'),
(29, 'Dorflex Sanofi Analgesic Drops 20ml', 'Dorflex', 'Analgesic Dorflex Sanofi Drops 20ml is an analgesic and muscle relaxant medication indicated to relieve pain associated with muscle contractures caused by inflammation or trauma and to relieve tension headaches. Adult use. Read the leaflet before use.', 30, NULL, 5, 20, 14, '2023-02-02', '2026-02-02', '1681319113.webp', 2, '1', NULL, '2023-04-12 16:05:13', '2023-04-13 16:16:33'),
(30, 'medicine for use in the first five days of symptoms of covid-19', 'Paxlovid', 'medicine for use in the first five days of symptoms of covid-19. The medication, sold under medical prescription, reduces the chances of the disease progressing to serious cases.', 30, NULL, 6, 100, 27, '2022-02-02', '2027-02-02', '1681319676.jpg', 1, '1', NULL, '2023-04-12 16:14:37', '2023-04-22 17:50:52'),
(31, 'Neolefrin 20 pills', 'Neolefrin', 'This medicine is indicated for the treatment of cold and flu symptoms, such as pain, fever, nasal congestion and runny nose.', 10, NULL, 0, 20, 15, '2022-02-02', '2024-02-02', '1681320424.webp', 4, '1', NULL, '2023-04-12 16:22:15', '2023-04-12 16:27:04'),
(32, 'Decongex Plus Children\'s Syrup with 120ml', 'Decongex', 'For children over 2 years old, whose formulation is composed of a fast-acting nasal decongestant and an anti-allergic, which control and reduce symptoms related to flu, cold, rhinitis and sinusitis, in addition to reducing excess secretion.', 37.5, NULL, 15, 120, 24, '2022-03-03', '2025-03-03', '1681320785.webp', 6, '1', NULL, '2023-04-12 16:33:05', '2023-04-12 16:37:07'),
(33, 'test', 'test', 'ele', 25, NULL, 0, 200, 5, '2022-10-10', '2023-10-10', '1681891506.jpg', 1, '1', '2023-04-21 18:59:22', '2023-04-19 07:05:06', '2023-04-21 18:59:22'),
(34, 'test', 'test', 'test', 50, NULL, 200, 200, 5, '2022-10-10', '2023-10-10', '1681876808.jpg', 1, '1', '2023-04-21 18:58:55', '2023-04-19 08:00:08', '2023-04-21 18:58:55');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_11_15_162352_create_pharmacies_table', 1),
(3, '2022_11_16_144737_create_medicos_table', 1),
(4, '2022_11_18_134250_create_users_table', 1),
(5, '2022_11_18_140459_create_position_users_table', 1),
(6, '2022_11_21_071301_create_avis_table', 1),
(7, '2022_11_24_124519_create_cards_table', 1),
(8, '2022_12_01_143512_create_pagamentos_table', 2),
(9, '2022_12_25_162948_create_notes_table', 2),
(10, '2023_01_15_170728_create_salaire_pharmacies_table', 2),
(11, '2023_03_09_155425_create_contactos_table', 2),
(12, '2023_03_20_074244_create_reclamation_clientes_table', 2),
(13, '2023_03_21_110651_create_devolutions_table', 2),
(14, '2023_03_22_160638_create_commandes_table', 2),
(15, '2023_03_22_161955_create_list_commandes_table', 2),
(16, '2023_03_23_075911_create_amins_table', 2),
(17, '2023_03_23_193723_create_calcul_total_devolutions_table', 2),
(18, '2023_03_25_094355_create_distances_table', 2),
(19, '2023_04_06_155408_create_likes_table', 2),
(20, '2023_04_10_120422_create_add_shippings_table', 3),
(21, '2023_04_11_181724_create_pagamentos_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 1,
  `id_pharmacie` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `messages`, `id_user`, `statut`, `id_pharmacie`, `created_at`, `updated_at`) VALUES
(1, 'gostei muito dessa plataforma', 2, 1, NULL, '2023-04-11 17:49:37', '2023-04-13 15:53:13'),
(2, 'valeu pela ajuda que trouxeram na cidade, agora a gente nem precisa mais se esquentar a cabeça antest de conseguir comprar remerdios', 3, 1, NULL, '2023-04-12 19:20:45', '2023-04-19 08:00:30'),
(3, 'nossa,gostei dessa plataforma.valeu', 2, 1, 3, '2023-04-14 15:32:28', '2023-04-14 15:32:28'),
(4, 'ola', 2, 0, NULL, '2023-04-20 23:39:00', '2023-04-21 08:53:44'),
(5, 'uma plataforma muito segura viu.valeu pela iniciativa', 2, 1, 3, '2023-04-20 23:48:15', '2023-04-20 23:48:15'),
(6, 'Ótimo sábado 🙌', 3, 1, NULL, '2023-04-22 05:12:58', '2023-04-22 05:12:58'),
(7, 'Show de bola man!\r\nIdeia muito top!!\r\nSucessos sempre❤️🙌🏾', 11, 1, NULL, '2023-05-25 21:53:20', '2023-05-25 21:53:20');

-- --------------------------------------------------------

--
-- Structure de la table `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ddd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nacimento` date DEFAULT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomecartao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ncredito` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ncvv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mesexp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anoexp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandeira` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nparcela` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalfinal` double(8,2) NOT NULL,
  `totalparcela` double(8,2) NOT NULL,
  `totalapagar` double(8,2) NOT NULL,
  `totalfinaliz` double(8,2) NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `id_list_com` int(11) NOT NULL,
  `id_pharmacie` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `email`, `cpf`, `ddd`, `tel`, `nacimento`, `firstname`, `nomecartao`, `ncredito`, `ncvv`, `mesexp`, `anoexp`, `bandeira`, `nparcela`, `totalfinal`, `totalparcela`, `totalapagar`, `totalfinaliz`, `statut`, `id_list_com`, `id_pharmacie`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '2', 35.00, 18.29, 36.58, 35.00, '3', 9, 1, 2, NULL, '2023-04-11 17:25:29', '2023-04-12 07:34:07'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '2', 35.50, 18.55, 37.10, 35.50, '2', 10, 1, 2, NULL, '2023-04-11 18:14:49', '2023-04-12 07:38:41'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, 'antonia Alcielena', '4111111111111111', '123', '12', '2030', 'visa', '2', 31.36, 16.39, 32.77, 31.36, '2', 11, 3, 2, NULL, '2023-04-12 15:12:22', '2023-04-14 14:58:35'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, 'antonia Alcielena', '4111111111111111', '123', '12', '2030', 'visa', '2', 31.88, 16.66, 33.32, 31.88, '2', 12, 6, 2, NULL, '2023-04-12 16:37:07', '2023-04-12 18:46:03'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 'antonia Alcielena', '4111111111111111', '123', '12', '2030', 'visa', '2', 44.64, 23.33, 46.65, 44.64, '3', 13, 6, 2, NULL, '2023-04-12 18:34:18', '2023-04-12 18:43:25'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 'antonia Alcielena', '4111111111111111', '123', '12', '2030', 'visa', '2', 34.30, 17.93, 35.85, 34.30, '2', 14, 1, 3, NULL, '2023-04-12 19:29:37', '2023-04-14 13:16:08'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, 'antonia Alcielena', '4111111111111111', '123', '12', '2030', 'visa', '2', 33.25, 17.38, 34.75, 33.25, '2', 16, 2, 2, NULL, '2023-04-13 14:26:54', '2023-04-13 15:20:41'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, 'antonia mendez', '4111111111111111', '123', '12', '2030', 'visa', '2', 22.00, 11.50, 22.99, 22.00, '1', 17, 3, 2, NULL, '2023-04-14 14:24:10', '2023-04-15 19:06:03'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '2', 26.50, 13.85, 27.70, 26.50, '2', 18, 1, 2, NULL, '2023-04-15 11:51:30', '2023-04-15 12:01:36'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, 'antonia Alcielena', '4111111111111111', '123', '12', '2030', 'visa', '2', 33.20, 17.35, 34.70, 33.20, '2', 19, 1, 2, NULL, '2023-04-16 12:40:35', '2023-04-24 02:29:22'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, 'antonia Alcielena', '4111111111111111', '123', '12', '2030', 'visa', '1', 30.00, 30.00, 30.00, 30.00, '3', 21, 1, 3, NULL, '2023-04-16 14:13:17', '2023-04-16 15:02:47'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, 'antonia Alcielena', '4111111111111111', '123', '12', '2030', 'visa', '1', 28.20, 28.20, 28.20, 28.20, '2', 22, 1, 2, NULL, '2023-04-16 14:25:58', '2023-04-16 15:10:00'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, 'antonia Alcielena', '4111111111111111', '123', '12', '2030', 'visa', '2', 30.00, 15.68, 31.35, 30.00, '1', 23, 1, 2, NULL, '2023-04-16 15:32:06', '2023-04-16 15:32:06'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, 'antonia Alcielena', '4111111111111111', '123', '12', '2030', 'visa', '2', 68.80, 35.95, 71.90, 68.80, '1', 24, 1, 2, NULL, '2023-04-16 16:12:18', '2023-04-16 16:12:18'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, 'antonia Alcielena', '4111111111111111', '123', '12', '2030', 'visa', '2', 26.50, 13.85, 27.70, 26.50, '3', 25, 1, 2, NULL, '2023-04-16 16:20:53', '2023-04-19 08:00:31'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, 'Alicia mendez', '4111111111111111', '123', '12', '2030', 'visa', '2', 41.00, 21.43, 42.85, 41.00, '1', 26, 9, 2, NULL, '2023-04-19 08:00:41', '2023-04-19 08:00:41'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '2', 41.25, 21.56, 43.11, 41.25, '1', 28, 4, 2, NULL, '2023-04-21 19:48:41', '2023-04-21 19:48:41'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '1', 23.50, 23.50, 23.50, 23.50, '1', 29, 10, 2, NULL, '2023-04-21 23:44:09', '2023-04-21 23:44:09'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '1', 31.50, 31.50, 31.50, 31.50, '1', 30, 10, 2, NULL, '2023-04-22 00:53:39', '2023-04-22 00:53:39'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '1', 25.00, 25.00, 25.00, 25.00, '1', 31, 10, 2, NULL, '2023-04-22 01:18:32', '2023-04-22 01:18:32'),
(21, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '2', 36.50, 19.08, 38.15, 36.50, '1', 32, 13, 2, NULL, '2023-04-22 02:22:12', '2023-04-22 02:22:12'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '2', 61.30, 32.03, 64.06, 61.30, '1', 33, 2, 2, NULL, '2023-04-22 02:29:13', '2023-04-22 02:29:13'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '1', 31.50, 31.50, 31.50, 31.50, '1', 34, 1, 2, NULL, '2023-04-22 03:38:13', '2023-04-22 03:38:13'),
(24, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '2', 87.60, 45.78, 91.55, 87.60, '1', 35, 1, 2, NULL, '2023-04-22 17:50:52', '2023-04-22 17:50:52'),
(25, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '1', 69.90, 69.90, 69.90, 69.90, '1', 36, 1, 2, NULL, '2023-04-22 18:14:13', '2023-04-23 22:55:25'),
(26, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia melane', '4111111111111111', '123', '12', '2030', 'visa', '2', 85.90, 44.89, 89.77, 85.90, '1', 37, 1, 2, NULL, '2023-04-22 18:18:22', '2023-04-23 22:48:57'),
(27, NULL, NULL, NULL, NULL, NULL, NULL, 'Lino Ventura', '4111111111111111', '123', '12', '2030', 'visa', '2', 25.00, 13.07, 26.13, 25.00, '2', 39, 1, 2, NULL, '2023-04-25 01:22:58', '2023-06-22 03:00:34'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, 'Vitoria alvez', '4111111111111111', '123', '12', '2030', 'visa', '1', 35.50, 35.50, 35.50, 35.50, '1', 40, 1, 2, NULL, '2023-04-25 04:09:32', '2023-04-25 04:09:32'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, 'Alicia mendez', '4111111111111111', '123', '12', '2023', 'visa', '2', 35.50, 18.55, 37.10, 35.50, '2', 41, 1, 2, NULL, '2023-05-23 22:25:08', '2023-06-20 02:34:00'),
(30, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia mendez', '4111111111111111', '123', '12', '2030', 'visa', '2', 26.50, 13.85, 27.70, 26.50, '2', 42, 1, 2, NULL, '2023-05-26 17:57:16', '2023-05-26 18:06:21'),
(31, NULL, NULL, NULL, NULL, NULL, NULL, 'Malicia enza', '4111111111111111', '123', '12', '2030', 'visa', '2', 54.00, 28.22, 56.44, 54.00, '1', 43, 3, 2, NULL, '2023-06-09 04:09:04', '2023-06-09 04:09:04'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, 'manu ilone', '4111111111111111', '123', '12', '2030', 'visa', '2', 54.00, 28.22, 56.44, 54.00, '1', 44, 2, 2, NULL, '2023-06-20 02:19:07', '2023-06-20 02:19:07'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, 'olivia mendez', '4111111111111111', '123', '12', '2030', 'visa', '2', 26.50, 13.85, 27.70, 26.50, '2', 46, 1, 2, NULL, '2023-06-22 02:43:59', '2023-06-22 03:00:34'),
(34, NULL, NULL, NULL, NULL, NULL, NULL, 'alicia nina', '4111111111111111', '123', '12', '2030', 'visa', '4', 63.00, 16.95, 67.78, 63.00, '1', 47, 1, 2, NULL, '2023-08-05 17:39:38', '2023-08-05 17:39:38');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pharmacies`
--

CREATE TABLE `pharmacies` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_pharma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `close_day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holiday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `on_time` time NOT NULL,
  `close_time` time NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `certificatx` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rastrear` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_fix` int(11) NOT NULL DEFAULT 0,
  `frete1` int(11) NOT NULL DEFAULT 0,
  `frete2` int(11) NOT NULL DEFAULT 0,
  `frete3` int(11) NOT NULL DEFAULT 0,
  `frete4` int(11) NOT NULL DEFAULT 0,
  `count_like` int(11) NOT NULL DEFAULT 0,
  `comission` float NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pharmacies`
--

INSERT INTO `pharmacies` (`id`, `email`, `password`, `name_pharma`, `open_day`, `close_day`, `holiday`, `address`, `on_time`, `close_time`, `longitude`, `latitude`, `cpf`, `tel`, `photo`, `statut`, `certificatx`, `rastrear`, `number_fix`, `frete1`, `frete2`, `frete3`, `frete4`, `count_like`, `comission`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'manuagondanou229@gmail.com', '4141', 'DROGASIL - RUSSAS', 'Monday', 'Saturday', 'Sunday', 'Av. Dom Lino, 1370 - Centro, Russas - CE, 62900-000', '10:30:00', '23:30:00', '-37.9778351,16z', '-4.9423538', '71634424517', '85 3291-2666', '1681137336.jpg', '1', NULL, 'https://www.google.com/maps/dir/-4.9410711,-37.9706608/drogasil+russas+ce/@-4.9419006,-37.9760327,17z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7b9829f85f983d9:0xfed3a91438eac1a1!2m2!1d-37.9764556!2d-4.9413308', 30, 0, 5, 5, 4, 2, 0, NULL, '2023-04-10 13:35:36', '2023-06-22 03:05:25'),
(2, 'paguemenos@gmail.com', '4141', 'Farmácia Pague Menos', 'Monday', 'Monday', 'Monday', 'Av. Dom Lino, 1116 - Centro, Russas - CE, 62900-000', '10:00:00', '21:00:00', '-37.9749542,17z', '-4.9409578', '74535425474', '884002-8282', '1681138489.jpg', '1', NULL, 'https://www.google.com/maps/dir/-4.9410747,-37.9706652/pague+menos+russas+ce/@-4.9409578,-37.9749542,17z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7b982a1bfe50291:0xfead6883eb7dd50a!2m2!1d-37.9748659!2d-4.9401575', 30, 0, 5, 5, 8, 1, 0.15, NULL, '2023-04-10 13:54:49', '2023-06-22 02:59:14'),
(3, 'farmaciafarma@gmail.com', '4141', 'Farmácia Farma Russas', 'Monday', 'Monday', 'Monday', 'R. Padre Raul Viêira, 513 - Centro, Russas - CE, 62900-000', '10:30:00', '23:30:00', '-37.9744401,17z', '-4.9400393', '74562541423', '(88) 99454-1821', '1681139031.jpeg', '1', NULL, 'https://www.google.com/maps/dir/-4.9408617,-37.970628/R.+Padre+Raul+Vi%C3%AAira,+513+-+Centro,+Russas+-+CE,+62900-000/@-4.940034,-37.9744401,17z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7b9836780b9870d:0x17392fb98b86c8e!2m2!1d-37.9745007!2d-4.9391602', 30, 0, 5, 5, 8, 1, 0.15, NULL, '2023-04-10 14:03:51', '2023-06-22 02:59:14'),
(4, 'farmaciabetel@gmail.com', '4141', 'Farmácia Betel | Doze Anos', 'Monday', 'Monday', 'Monday', 'Av. Diocesana, 2360 - Doze Anos, Mossoró - RN, 59603-200', '08:30:00', '22:30:00', '-37.4208734,12z', '-5.1849364', '71634424517', '(84) 98796-9131', '1681139807.webp', '1', NULL, 'https://www.google.com/maps/dir/-4.9410743,-37.9706622/Av.+Diocesana,+2360+-+Doze+Anos,+Mossor%C3%B3+-+RN,+59603-200/@-5.0606503,-37.940983,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7ba0135b809415d:0xe0ad9d73be624984!2m2!1d-37.3508328!2d-5.1849403', 30, 0, 5, 5, 8, 1, 0.15, NULL, '2023-04-10 14:16:47', '2023-06-22 02:59:14'),
(5, 'drogariamossoro@gmail.com', '4141', 'Drogaria Globo - Mossoró', 'Monday', 'Friday', 'Saturday', 'R. Idalino de Oliveira, 19 - Centro, Mossoró - RN, 59600-690', '08:30:00', '20:30:00', '-37.4119264,12z', '-5.1927305', '71634424517', '(84) 99987-2468', '1681141582.jpg', '1', NULL, 'https://www.google.com/maps/dir/-4.9410656,-37.9706568/R.+Idalino+de+Oliveira,+19+-+Centro,+Mossor%C3%B3+-+RN,+59600-690/@-5.0613344,-37.9363292,10z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7ba06e2464b565d:0x8493de20ad0d826d!2m2!1d-37.3418852!2d-5.1927354', 30, 0, 5, 5, 8, 1, 0.15, NULL, '2023-04-10 14:46:22', '2023-06-22 02:59:14'),
(6, 'padrecicero@gmail.com', '4141', 'Farmácia Padre Cicero - Morada Nova', 'Monday', 'Monday', 'Monday', 'R. Raimundo Nonato, 99 - Morada Nova, CE, 62940-000', '08:30:00', '21:30:00', '-38.4440573,12z', '-5.1070741', '74535425474', '(88) 99791-2210', '1681142045.jpg', '1', NULL, 'https://www.google.com/maps/dir/-4.9410791,-37.9706645/R.+Raimundo+Nonato,+99+-+Morada+Nova,+CE,+62940-000/@-5.0315607,-38.3124307,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7bbe6cf5654976b:0xa44b97a8003488a7!2m2!1d-38.3740074!2d-5.1070483', 30, 0, 5, 5, 8, 1, 0.15, NULL, '2023-04-10 14:54:05', '2023-06-22 02:59:14'),
(7, 'medfarma@gmail.com', '4141', 'Med Farma', 'Monday', 'Saturday', 'Monday', 'R. Raimundo Nonato, 81 - Centro, Morada Nova - CE, 62940-000', '08:30:00', '22:00:00', '-38.3796007,17z', '-5.1068396', '71634424517', '(88) 98867-6490', '1681142833.jpg', '1', NULL, 'https://www.google.com/maps/dir/-4.9411138,-37.9706578/Med+Farma+-+R.+Raimundo+Nonato,+81+-+Centro,+Morada+Nova+-+CE,+62940-000/@-5.0315607,-38.3139947,11z/data=!3m1!4b1!4m17!1m7!3m6!1s0x7bbe7aa39227961:0x6c77b142640d9439!2sMed+Farma!8m2!3d-5.1068396!4d-38.3753735!16s%2Fg%2F11ng6gn8yt!4m8!1m1!4e1!1m5!1m1!1s0x7bbe7aa39227961:0x6c77b142640d9439!2m2!1d-38.3753735!2d-5.1068396', 30, 0, 5, 5, 8, 1, 0.15, NULL, '2023-04-10 15:07:13', '2023-06-22 02:59:14'),
(8, 'farmaciafarmanato@gmail.com', '4141', 'Farmácia Farmanato Aracati', 'Monday', 'Monday', 'Monday', 'R. Cel. Alexandrino, 594 - A - Centro, Aracati - CE, 62800-000', '12:30:00', '16:30:00', '-37.8414927,12z', '-4.5638893', '74535425474', '(88) 99952-0031', '1681143796.jpeg', '1', NULL, 'https://www.google.com/maps/dir/-4.9410877,-37.9706636/R.+Cel.+Alexandrino,+594+-+A+-+Centro,+Aracati+-+CE,+62800-000/@-4.7524803,-38.0468441,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7b9b2fc07043f23:0xe8b09e48db4bc65c!2m2!1d-37.7714521!2d-4.5638927', 30, 0, 5, 5, 8, 1, 0.15, NULL, '2023-04-10 15:15:52', '2023-06-22 02:59:14'),
(9, 'planetapopular@gmail.com', '4141', 'Farmacia Planeta em Fortaleza', 'Monday', 'Monday', 'Monday', 'Avenida B, 291 Conj - Prefeito José Walter\r\nFortaleza / CE - CEP: 60750-010', '00:00:00', '23:59:00', '-38.5561982,17z', '-3.8273226', '74535425474', '(85) 3291-2666', '1681144630.webp', '1', NULL, 'https://www.google.pl/maps/dir/-4.9410623,-37.9706612/-3.8272134,-38.5539345/@-4.3837449,-38.9210279,9z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0', 30, 0, 5, 5, 8, 1, 0.15, NULL, '2023-04-10 15:33:32', '2023-06-22 02:59:14'),
(10, 'drogasiliguatemi@gmail.com', '4141', 'DROGASIL', 'Monday', 'Monday', 'Monday', 'Av. Washington Soares, 85 - Edson Queiroz, Fortaleza - CE, 60811-900', '11:00:00', '23:00:00', '-38.803852,9z', '-4.3593418', '71634424517', '(85) 98185-0062', '1681145107.jpg', '1', NULL, 'https://www.google.com/maps/dir/-4.9411771,-37.9709/farmacia+drogasil+shopping+iguatemi+fortaleza/@-4.3593418,-38.8037992,9z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7c74551b83eb46d:0x6db77ebfb4ea744c!2m2!1d-38.4810998!2d-3.7779221', 30, 0, 5, 5, 8, 1, 0.15, NULL, '2023-04-10 15:45:07', '2023-06-22 02:59:14'),
(11, 'famapindoretama@gmail.com', '4141', 'FARMACIA GAMA', 'Monday', 'Monday', 'Monday', 'R. Raimundo Nonato Costa, 739 - Pindoretama, CE, 62860-000', '09:30:00', '23:30:00', '-38.7001607,9z  -38.7001607,9z', '-4.4859104', '74535425474', '(85) 3375-1959', '1681145751.jpg', '1', NULL, 'https://www.google.com/maps/dir/-4.9410784,-37.9706604/farmacia+gama+pindoretama/@-4.4859234,-38.7001607,9z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7b89f447a0774f3:0xce16ad6d949b1de6!2m2!1d-38.3028934!2d-4.0312372', 30, 0, 5, 5, 8, 0, 0.15, NULL, '2023-04-10 15:55:51', '2023-06-22 02:59:14'),
(12, 'drogariapaiva@gmail.com', '4141', 'Drogaria Paiva', 'Monday', 'Monday', 'Monday', 'R. Maxaranguape, 621 - Tirol, Natal - RN, 59020-160', '10:00:00', '23:00:00', '-35.2695318,12z', '-5.7935202', '71634424517', '(84) 3212-2222', '1681146569.webp', '1', NULL, 'https://www.google.com/maps/dir/-4.9411183,-37.9706955/R.+Maxaranguape,+621+-+Tirol,+Natal+-+RN,+59020-160/@-5.4094161,-37.7065844,8z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7b3001138643ed7:0x18dfac38330c016f!2m2!1d-35.1994912!2d-5.7935245', 30, 0, 5, 5, 8, 0, 0.15, NULL, '2023-04-10 16:09:29', '2023-06-22 02:59:14'),
(13, 'drogariaglobo@gmail.com', '4141', 'Drogaria Globo - Parnamirim', 'Monday', 'Saturday', 'Sunday', 'Av. Brg. Everaldo Breves, 76 - Centro, Parnamirim - RN, 59140-200', '08:30:00', '23:30:00', '-35.3306848,12z', '-5.9162561', '74535425474', '(84) 99988-6782', '1681147351.jpg', '1', NULL, 'https://www.google.com/maps/dir/-4.9410706,-37.9706574/Av.+Brg.+Everaldo+Breves,+76+-+Centro,+Parnamirim+-+RN,+59140-200/@-5.421372,-37.7358675,8z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7b25707d8f94e07:0xeac311dd6722bae6!2m2!1d-35.2605862!2d-5.916289', 30, 0, 5, 5, 8, 0, 0.15, NULL, '2023-04-10 16:22:31', '2023-06-22 02:59:14');

-- --------------------------------------------------------

--
-- Structure de la table `position_users`
--

CREATE TABLE `position_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `id_user` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `position_users`
--

INSERT INTO `position_users` (`id`, `latitude`, `longitude`, `statut`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(10, '-4.94108', '-37.9706587', '1', 2, NULL, '2023-04-11 16:39:44', '2023-04-11 16:39:44'),
(11, '-4.9410801', '-37.9706575', '1', 2, NULL, '2023-04-11 16:50:01', '2023-04-11 16:50:01'),
(12, '-4.9466807', '-37.9746769', '1', 2, NULL, '2023-04-12 07:27:28', '2023-04-12 07:27:28'),
(13, '-4.9466724', '-37.9746607', '1', 2, NULL, '2023-04-12 07:50:40', '2023-04-12 07:50:40'),
(14, '-4.9410946', '-37.9706615', '1', 2, NULL, '2023-04-12 13:39:19', '2023-04-12 13:39:19'),
(15, '-4.9410946', '-37.9706615', '1', 2, NULL, '2023-04-12 13:39:39', '2023-04-12 13:39:39'),
(16, '-4.9410797', '-37.9706683', '1', 2, NULL, '2023-04-12 13:42:12', '2023-04-12 13:42:12'),
(17, '-4.9410859', '-37.9706608', '1', 3, NULL, '2023-04-12 19:05:51', '2023-04-12 19:05:51'),
(18, '-4.9466688', '-37.974647', '1', 2, NULL, '2023-04-13 08:06:13', '2023-04-13 08:06:13'),
(19, '-4.9410884', '-37.97066', '1', 2, NULL, '2023-04-13 09:34:41', '2023-04-13 09:34:41'),
(20, '-4.9410834', '-37.9706544', '1', 2, NULL, '2023-04-13 13:55:21', '2023-04-13 13:55:21'),
(21, '-4.9410856', '-37.9706553', '1', 2, NULL, '2023-04-13 15:40:35', '2023-04-13 15:40:35'),
(22, '-4.9410782', '-37.9706555', '1', 2, NULL, '2023-04-13 16:35:07', '2023-04-13 16:35:07'),
(23, '-4.9410714', '-37.9706628', '1', 2, NULL, '2023-04-14 13:22:24', '2023-04-14 13:22:24'),
(24, '-4.9410814', '-37.9706685', '1', 2, NULL, '2023-04-15 11:46:44', '2023-04-15 11:46:44'),
(25, '-4.9410789', '-37.9706591', '1', 2, NULL, '2023-04-16 09:48:04', '2023-04-16 09:48:04'),
(26, '-4.9410814', '-37.9706606', '1', 3, NULL, '2023-04-16 13:45:48', '2023-04-16 13:45:48'),
(27, '-4.9410813', '-37.9706535', '1', 2, NULL, '2023-04-16 14:20:28', '2023-04-16 14:20:28'),
(28, '-4.941077', '-37.9706539', '1', 2, NULL, '2023-04-19 08:00:20', '2023-04-19 08:00:20'),
(29, '-4.9410747', '-37.9706578', '1', 2, NULL, '2023-04-19 08:00:10', '2023-04-19 08:00:10'),
(30, '-4.9410868', '-37.9706571', '1', 2, NULL, '2023-04-19 08:00:52', '2023-04-19 08:00:52'),
(31, '-4.9410595', '-37.9706619', '1', 2, NULL, '2023-04-19 08:00:34', '2023-04-19 08:00:34'),
(32, '-4.9410911', '-37.9706379', '1', 2, NULL, '2023-04-19 08:00:19', '2023-04-19 08:00:19'),
(33, '-4.9410845', '-37.9706632', '1', 2, NULL, '2023-04-19 08:00:36', '2023-04-19 08:00:36'),
(34, '-4.9410866', '-37.9706567', '1', 2, NULL, '2023-04-20 06:35:29', '2023-04-20 06:35:29'),
(35, '-4.9410601', '-37.9706549', '1', 2, NULL, '2023-04-20 20:50:54', '2023-04-20 20:50:54'),
(38, '-4.941057', '-37.9706593', '1', 2, NULL, '2023-04-20 22:39:53', '2023-04-20 22:39:53'),
(39, '-4.9410761', '-37.9706603', '1', 2, NULL, '2023-04-20 22:49:57', '2023-04-20 22:49:57'),
(40, '-4.9410957', '-37.9706593', '1', 2, NULL, '2023-04-21 02:59:49', '2023-04-21 02:59:49'),
(41, '-4.9410777', '-37.9706556', '1', 2, NULL, '2023-04-21 08:48:46', '2023-04-21 08:48:46'),
(42, '-4.9410701', '-37.9706538', '1', 2, NULL, '2023-04-21 16:37:29', '2023-04-21 16:37:29'),
(43, '-4.9410475', '-37.9706656', '1', 2, NULL, '2023-04-21 17:50:46', '2023-04-21 17:50:46'),
(44, '-4.9410616', '-37.9706604', '1', 2, NULL, '2023-04-21 18:02:14', '2023-04-21 18:02:14'),
(45, '-4.9410618', '-37.9706621', '1', 2, NULL, '2023-04-21 18:51:17', '2023-04-21 18:51:17'),
(46, '-4.9410618', '-37.9706531', '1', 2, NULL, '2023-04-21 23:36:22', '2023-04-21 23:36:22'),
(47, '-4.9410618', '-37.9706531', '1', 2, NULL, '2023-04-22 02:17:30', '2023-04-22 02:17:30'),
(48, '-4.9410618', '-37.9706531', '1', 2, NULL, '2023-04-22 03:33:30', '2023-04-22 03:33:30'),
(49, '-4.942531', '-37.9680307', '1', 2, NULL, '2023-04-22 03:56:13', '2023-04-22 03:56:13'),
(50, '-3.7260769', '-38.4919933', '1', 3, NULL, '2023-04-22 05:04:41', '2023-04-22 05:04:41'),
(51, '-3.7260769', '-38.4919933', '1', 3, NULL, '2023-04-22 05:04:44', '2023-04-22 05:04:44'),
(52, '-3.7260459', '-38.4919852', '1', 3, NULL, '2023-04-22 05:06:05', '2023-04-22 05:06:05'),
(53, '-3.7259875', '-38.4920071', '1', 3, NULL, '2023-04-22 05:06:57', '2023-04-22 05:06:57'),
(54, '-3.7259875', '-38.4920071', '1', 3, NULL, '2023-04-22 05:06:59', '2023-04-22 05:06:59'),
(55, '-3.725613', '-38.4921993', '1', 3, NULL, '2023-04-22 05:09:24', '2023-04-22 05:09:24'),
(56, '-4.9410754', '-37.970664', '1', 2, NULL, '2023-04-22 17:29:05', '2023-04-22 17:29:05'),
(61, '-4.9410644', '-37.9706581', '1', 10, NULL, '2023-04-24 03:40:55', '2023-04-24 03:40:55'),
(62, '-4.9410622', '-37.9706678', '1', 10, NULL, '2023-04-24 03:51:59', '2023-04-24 03:51:59'),
(63, '-4.9410657', '-37.970667', '1', 10, NULL, '2023-04-24 04:03:20', '2023-04-24 04:03:20'),
(64, '-4.9410478', '-37.9706527', '1', 2, NULL, '2023-04-25 01:11:05', '2023-04-25 01:11:05'),
(65, '-4.9410778', '-37.9706698', '1', 2, NULL, '2023-04-25 01:19:42', '2023-04-25 01:19:42'),
(66, '-4.9410871', '-37.9706611', '1', 2, NULL, '2023-04-25 03:59:39', '2023-04-25 03:59:39'),
(67, '-4.9410461', '-37.9706697', '1', 2, NULL, '2023-04-25 23:10:31', '2023-04-25 23:10:31'),
(68, '-4.946824', '-37.9746668', '1', 2, NULL, '2023-05-10 15:48:59', '2023-05-10 15:48:59'),
(69, '-4.9468366', '-37.9740357', '1', 2, NULL, '2023-05-23 22:19:15', '2023-05-23 22:19:15'),
(70, '-4.946433634657857', '-37.97483833565509', '1', 11, NULL, '2023-05-25 21:44:03', '2023-05-25 21:44:03'),
(71, '-4.946647164719124', '-37.97474687296809', '1', 11, NULL, '2023-05-25 21:48:03', '2023-05-25 21:48:03'),
(72, '-3.717', '-38.5287', '1', 2, NULL, '2023-05-26 17:49:29', '2023-05-26 17:49:29'),
(73, '-4.9425799', '-37.9721738', '1', 2, NULL, '2023-06-09 04:03:22', '2023-06-09 04:03:22'),
(74, '-4.9446912', '-37.9748352', '1', 2, NULL, '2023-06-20 02:04:52', '2023-06-20 02:04:52'),
(75, '-4.9500441', '-37.9678548', '1', 2, NULL, '2023-06-22 02:35:17', '2023-06-22 02:35:17'),
(76, '-4.940573', '-37.970682', '1', 2, NULL, '2023-08-05 17:27:32', '2023-08-05 17:27:32'),
(77, '-4.9410949', '-37.9706406', '1', 2, NULL, '2023-08-06 00:02:28', '2023-08-06 00:02:28');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation_clientes`
--

CREATE TABLE `reclamation_clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objet` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reclamation_clientes`
--

INSERT INTO `reclamation_clientes` (`id`, `email`, `name`, `objet`, `message`, `id_user`, `statut`, `created_at`, `updated_at`) VALUES
(2, 'relaxmusik229@gmail.com', 'Emmanuel', 'solicitaçao', 'por favor, fiz uma encomenda  mas ate agora ainda nao chegou', 2, 0, '2023-04-13 15:54:40', '2023-04-13 15:54:40'),
(3, 'relaxmusik229@gmail.com', 'Emmanuel', 'pedido de comprovante', 'olaaaaaaaaaa', 2, 0, '2023-04-20 23:42:44', '2023-04-20 23:42:44'),
(4, 'relaxmusik229@gmail.com', 'Emmanuel', 'URGENCIA', 'Ola, fiz uma encomenda e ainda nao chegou até agora por que?', 2, 0, '2023-08-05 17:42:50', '2023-08-05 17:42:50');

-- --------------------------------------------------------

--
-- Structure de la table `salaire_pharmacies`
--

CREATE TABLE `salaire_pharmacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pharmacie` int(11) NOT NULL,
  `total_vente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefice_plat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefice_pharma` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comix` double(8,2) NOT NULL,
  `motiva` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `datax` date NOT NULL,
  `statut` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `salaire_pharmacies`
--

INSERT INTO `salaire_pharmacies` (`id`, `id_pharmacie`, `total_vente`, `benefice_plat`, `benefice_pharma`, `comix`, `motiva`, `datax`, `statut`, `created_at`, `updated_at`) VALUES
(3, 1, '29.00', '3', '32', 0.10, 'Rotina normal', '2023-04-12', 1, '2023-04-12 07:44:34', '2023-04-12 07:44:34'),
(4, 6, '28.69', '3', '31.88', 0.10, 'pagamento salario', '2023-04-12', 1, '2023-04-12 18:46:02', '2023-04-12 18:46:02'),
(5, 2, '30.25', '3', '33.25', 0.10, 'rotina normal', '2023-04-13', 1, '2023-04-13 15:20:41', '2023-04-13 15:20:41'),
(6, 3, '26.36', '5', '31.36', 0.15, 'rotina normal', '2023-04-14', 1, '2023-04-14 14:58:35', '2023-04-14 14:58:35'),
(7, 1, '26.5', '0', '26.5', 0.00, 'rotina normal', '2023-04-15', 1, '2023-04-15 12:01:36', '2023-04-15 12:01:36'),
(8, 1, '23.70', '3', '26.7', 0.10, 'rotina normal', '2023-04-16', 1, '2023-04-16 15:10:00', '2023-04-16 15:10:00'),
(9, 1, '27.55', '3', '30.55', 0.10, 'rotina normal', '2023-04-23', 1, '2023-04-24 02:29:22', '2023-04-24 02:29:22'),
(10, 1, '21.5', '5', '26.5', 0.20, 'pagamento do salario normal', '2023-05-26', 1, '2023-05-26 18:06:21', '2023-05-26 18:06:21'),
(11, 1, '31.5', '4', '35.5', 0.10, 'tudo certo', '2023-06-19', 1, '2023-06-20 02:34:00', '2023-06-20 02:34:00'),
(12, 1, '41.5', '10', '51.5', 0.20, 'rotina normal', '2023-06-21', 1, '2023-06-22 03:00:34', '2023-06-22 03:00:34');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codzip` int(11) DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `ddd` int(11) DEFAULT NULL,
  `n_apt` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_securite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nacimento` date DEFAULT NULL,
  `actif` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `name`, `country`, `street`, `district`, `city`, `state`, `codzip`, `tel`, `ddd`, `n_apt`, `email`, `password`, `cpf`, `photo`, `code_securite`, `email_verified_at`, `statut`, `remember_token`, `created_at`, `updated_at`, `nacimento`, `actif`) VALUES
(2, 'Mahouvi', 'Emmanuel', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 62900000, 999928818, 84, 412, 'relaxmusik229@gmail.com', '4141', '71834413427', '1681234784.PNG', '1691265748x-yGn~vi1383', NULL, '1', NULL, '2023-04-11 16:39:44', '2023-08-06 00:02:28', '1993-08-22', 1),
(3, 'Alcielena', 'Antonia', 'Brasil', 'Rua Mal cozinhaso Jose domingo de De-Souza', 'CE', 'Fortaleza', 'Ceará', 63900000, 854004747, 84, 24, 'alcielenaaraujo@gmail.com', '4141', '00620010355', '1681329951.jpg', '1682125764x-yGn~vi7300', NULL, '1', NULL, '2023-04-12 19:05:51', '2023-04-22 05:09:24', '1984-07-12', 0),
(10, NULL, 'farma', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'manuagondanou@alu.ufc.br', '4141', NULL, '1682293255.jpg', '1682294600x-yGn~vi3812', NULL, '1', NULL, '2023-04-24 03:40:55', '2023-04-24 04:22:24', NULL, 0),
(11, NULL, 'Breno Oliveira', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'brenol816@gmail.com', 'allblacks10', NULL, '1685036643.jpeg', '1685036883x-yGn~vi6266', NULL, '1', NULL, '2023-05-25 21:44:03', '2023-05-25 21:49:41', NULL, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `add_shippings`
--
ALTER TABLE `add_shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `add_shippings_id_commande_foreign` (`id_commande`);

--
-- Index pour la table `amins`
--
ALTER TABLE `amins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avis_id_user_foreign` (`id_user`);

--
-- Index pour la table `calcul_total_devolutions`
--
ALTER TABLE `calcul_total_devolutions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cards_id_user_foreign` (`id_user`),
  ADD KEY `cards_id_medico_foreign` (`id_medico`),
  ADD KEY `cards_id_pharmacie_foreign` (`id_pharmacie`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commandes_id_user_foreign` (`id_user`),
  ADD KEY `commandes_id_pharmacie_foreign` (`id_pharmacie`);

--
-- Index pour la table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `devolutions`
--
ALTER TABLE `devolutions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `distances`
--
ALTER TABLE `distances`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `list_commandes`
--
ALTER TABLE `list_commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `list_commandes_id_commande_foreign` (`id_commande`),
  ADD KEY `list_commandes_id_user_foreign` (`id_user`),
  ADD KEY `list_commandes_id_medico_foreign` (`id_medico`),
  ADD KEY `list_commandes_id_pharmacie_foreign` (`id_pharmacie`);

--
-- Index pour la table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medicos_id_pharmacie_foreign` (`id_pharmacie`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_id_user_foreign` (`id_user`);

--
-- Index pour la table `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `pharmacies`
--
ALTER TABLE `pharmacies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pharmacies_email_unique` (`email`);

--
-- Index pour la table `position_users`
--
ALTER TABLE `position_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `position_users_id_user_foreign` (`id_user`);

--
-- Index pour la table `reclamation_clientes`
--
ALTER TABLE `reclamation_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salaire_pharmacies`
--
ALTER TABLE `salaire_pharmacies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `add_shippings`
--
ALTER TABLE `add_shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `amins`
--
ALTER TABLE `amins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `calcul_total_devolutions`
--
ALTER TABLE `calcul_total_devolutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `devolutions`
--
ALTER TABLE `devolutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `distances`
--
ALTER TABLE `distances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `list_commandes`
--
ALTER TABLE `list_commandes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pharmacies`
--
ALTER TABLE `pharmacies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `position_users`
--
ALTER TABLE `position_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `reclamation_clientes`
--
ALTER TABLE `reclamation_clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `salaire_pharmacies`
--
ALTER TABLE `salaire_pharmacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `add_shippings`
--
ALTER TABLE `add_shippings`
  ADD CONSTRAINT `add_shippings_id_commande_foreign` FOREIGN KEY (`id_commande`) REFERENCES `commandes` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cards`
--
ALTER TABLE `cards`
  ADD CONSTRAINT `cards_id_medico_foreign` FOREIGN KEY (`id_medico`) REFERENCES `medicos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cards_id_pharmacie_foreign` FOREIGN KEY (`id_pharmacie`) REFERENCES `pharmacies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cards_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_id_pharmacie_foreign` FOREIGN KEY (`id_pharmacie`) REFERENCES `pharmacies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commandes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `list_commandes`
--
ALTER TABLE `list_commandes`
  ADD CONSTRAINT `list_commandes_id_commande_foreign` FOREIGN KEY (`id_commande`) REFERENCES `commandes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `list_commandes_id_medico_foreign` FOREIGN KEY (`id_medico`) REFERENCES `medicos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `list_commandes_id_pharmacie_foreign` FOREIGN KEY (`id_pharmacie`) REFERENCES `pharmacies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `list_commandes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `medicos`
--
ALTER TABLE `medicos`
  ADD CONSTRAINT `medicos_id_pharmacie_foreign` FOREIGN KEY (`id_pharmacie`) REFERENCES `pharmacies` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `position_users`
--
ALTER TABLE `position_users`
  ADD CONSTRAINT `position_users_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
