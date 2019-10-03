-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 22 sep. 2019 à 20:28
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

DROP TABLE IF EXISTS `candidats`;
CREATE TABLE IF NOT EXISTS `candidats` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` blob NOT NULL,
  `motivation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `candidats`
--

INSERT INTO `candidats` (`id`, `first_name`, `last_name`, `email`, `telephone`, `cv`, `motivation`, `created_at`, `updated_at`) VALUES
(1, 'mohssin', 'chebli', 'chebli@gmail.com', '0612345678', 0x433a5c5c77616d7036345c5c746d705c5c706870324638392e746d70, 'teyara', '2019-09-01 09:56:34', '2019-09-01 09:56:34');

-- --------------------------------------------------------

--
-- Structure de la table `cand_users`
--

DROP TABLE IF EXISTS `cand_users`;
CREATE TABLE IF NOT EXISTS `cand_users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cand_users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cand_users`
--

INSERT INTO `cand_users` (`id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(17, 'youssef', 'tauil', '0617545089', 'nike@gmail.com', '$2y$10$IuLezQ7wWo.UCAOxMKolMOBCVruMzKQpV7wIoAHI4rLrN3ui4PyFu', NULL, '2019-09-02 11:19:22', '2019-09-02 11:19:22'),
(18, 'youssef', 'tauil', '0617545089', 'tauil@gmail.com', '$2y$10$RhufIJTAIObOk1rx69TPe.1MVsPCftqSEYLWCwW.EQIGCvrMyAKgi', NULL, '2019-09-02 11:42:46', '2019-09-02 11:42:46');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_22_125414_create_user_social_table', 1),
(4, '2019_08_24_193401_create_projs_table', 2),
(5, '2019_08_26_150504_create_candidats_table', 2),
(6, '2019_09_01_113406_create_cand_users_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `projs`
--

DROP TABLE IF EXISTS `projs`;
CREATE TABLE IF NOT EXISTS `projs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studylevel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projs`
--

INSERT INTO `projs` (`id`, `etat`, `fonction`, `studylevel`, `experience`, `salary`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'stage', 'dev web', 'bac +4', 2, 8000, 'app web', 'laravel + nuxt', '2019-08-27 11:02:25', '2019-08-27 11:02:25'),
(2, 'emploi', 'dev web', 'bac +4', 2, 4000, 'app web', 'laravel + nuxt', '2019-08-27 11:03:31', '2019-08-27 11:03:31');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tauil', 'youssef1996@gmail.com', '$2y$10$BvRtPgvTdhkLpbgDqq8LPunAw390lWkfSs7ifG/JAL.sMLlpF8hky', NULL, '2019-08-22 10:39:13', '2019-08-22 10:39:13'),
(2, 'loubna', 'loubna@gmail.com', '$2y$10$8r.f22yRD5y5Qj14cR2Bse43yCF8yZVkOU7DDIMoXHaaa.iGTeYNu', NULL, '2019-08-22 10:41:52', '2019-08-22 10:41:52'),
(3, 'now', 'now@gmail.com', '$2y$10$Cun/p5PB8uw900Qkpv5WEeg1B.Y7YOVFYH4nqEd5Nysh.bhHrlTma', NULL, '2019-08-22 16:43:34', '2019-08-22 16:43:34'),
(4, 'before', 'before@gmail.com', '$2y$10$EPUMIzy2hHlwk925Ize1j.B5JjYKBiGTN5kX1IOS4d.eGTGNjg1Wa', NULL, '2019-08-22 17:03:28', '2019-08-22 17:03:28'),
(5, 'isaac', 'isaac@gmail.com', '$2y$10$Knk4j90/C8fsqxDtpPiMy./n28rq4quFjWa9Io2tUfjoyT4jFSK2W', NULL, '2019-08-23 08:51:46', '2019-08-23 08:51:46'),
(7, 'yos', 'yos@gmail.com', '$2y$10$Rlby01eY/ylHmXbuQ3z/OuwCoYDZAKWBHz0C6I2BWnUKYpFBxxJNK', NULL, '2019-08-27 14:09:45', '2019-08-27 14:09:45'),
(8, 'ana', 'ana@gmail.com', '$2y$10$mGkV8mgwi2nLPToqWfj1J.9pzdkhSvrM6WFBpWmFAvcQtanAzC2DC', NULL, '2019-09-01 11:19:35', '2019-09-01 11:19:35'),
(9, 'ana', 'hhh@gmail.com', '$2y$10$kB62hU0dXaaPGg2d9hyo7el1pvNx3jvqotRlFrZyTvGShFw99dkr2', NULL, '2019-09-01 12:09:04', '2019-09-01 12:09:04');

-- --------------------------------------------------------

--
-- Structure de la table `user_social`
--

DROP TABLE IF EXISTS `user_social`;
CREATE TABLE IF NOT EXISTS `user_social` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_social_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
