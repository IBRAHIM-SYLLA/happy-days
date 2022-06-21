-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 21 juin 2022 à 13:47
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `happydays`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civility` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `id_right` int(11) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `civility`, `firstname`, `lastname`, `email`, `password`, `adress`, `zip_code`, `city`, `id_right`, `phone_number`) VALUES
(10, 'homme', 'ibrahim-sylla', 'jjn', 'ibrahim.sylla@outlook.fr', '$2y$10$AqDEROU.qGEEhn54WbPzV.zHMFnHSIDAzfue5lnBzZ6gs6/wWAjfS', 'hbj', 13003, 'Marseille', -1, '0778045048'),
(9, 'homme', 'dcfghj', 'dctfvgh', 'ibrahim.sylla27@outlok.fr', '$2y$10$mHaKiww93pcokdfYgGDcYOB50uiy50j/P/Je95099oSXhg3hiuAw2', '31 rue Danton', 13003, 'Marseille', 1, '0778045048'),
(8, 'homme', 'ibrahim27', 'bb', 'ibrahim.sylla27r', '$2y$10$fxMTRL8AgsshWeUHK1FbJutcsUGUbmJfVV8UuQ8GYfTZDQKNDAAfe', '31 rue Danton', 13003, 'Marseille', 1, '0778045048'),
(7, 'homme', 'ibrahim-sylla', 'bb', 'ibrahim.sylla@laplateforme.io', '$2y$10$9PjvG2jujEWhuRrRjlnmjOnBmMN2hwfMVND6AkYg0ebBk5Vr15fbi', '31 rue Danton', 13003, 'Marseille', 1, '0778045048'),
(6, 'homme', 'ibrahim-sylla', 'aa', 'ibrahim.sylla27@outlook.fr', '$2y$10$VhQa6VwtqO7zPmf96zgaI.kmba1JwRb1..UJm3zUt2yNbNQ/2mtA.', '31 rue Danton', 13003, 'Marseille', 1, '0778045048'),
(11, 'homme', 'cfvhgjbhkj', 'fgvhbkj', 'ib@outlook.fr', '$2y$10$UA9ciwRrf2KRIGAx7qxgpuzdJC5TrxZl3yzyFTVe7k1uIEKvDvj96', 'cyvtguih', 13003, 'Marseille', 1, '0778045048');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;