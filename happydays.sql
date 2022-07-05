-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 05 juil. 2022 à 12:19
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
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id`, `name`, `date`, `description`, `image`) VALUES
(1, 'Sylla', '2022-06-30 08:00:00', 'fghjfguh', 'dtfygbuhnij'),
(2, 'rxdctfvghjkl', '2022-07-02 13:00:00', 'exdihoj,lm', 'bc8cf44065b770f9fbaafa750815d137.'),
(3, 'rxdctfvghjkl', '2022-07-02 13:00:00', 'exdihoj,lm', '3d1dbaf6745895c01d7873e593f780f1.'),
(4, 'Sylla', '2022-07-02 11:00:00', 'qsdfghjk', '7df21595e09bf5640d21f0429764b011.jpg'),
(5, 'Sylla', '2022-07-02 11:00:00', 'qsdfghjk', 'b4535b8241d3bb0625806a10e76f5e3d.jpg'),
(6, 'la grande laverie', '2022-07-07 11:00:00', 'Tournoi la grande Laverie', '741d5c46fdd37e1413d7ac31a7ace036.jpg'),
(7, 'la grande laverie', '2022-07-07 11:00:00', 'Tournoi la grande Laverie', 'e255b313827e0c22dcadd9d9a4166b0e.jpg');

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
  `member_state` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `civility`, `firstname`, `lastname`, `email`, `password`, `adress`, `zip_code`, `city`, `id_right`, `phone_number`, `member_state`) VALUES
(13, 'homme', 'sylla', 'ibrahim', 'ibrahim.sylla@outlook.fr', '$2y$10$qyJfRkR19O89VB8ewwqNuO2cAJh3R8rpTPxfIzIh7zRIRYnGaxlI6', '31 rue Danton', 13003, 'Marseille', 1, '0778045048', 0),
(14, 'homme', 'sylla', 'Ibrahim', 'ibrahim.sylla27@sylla.fr', '$2y$10$J3SgkeB49Nfy.rlhmgqv/.lp5J1oPewGd1NO77L7EQ929UBRMCSJK', '31 rue Danton', 13003, 'Marseille', 1, '0778045048', 0),
(9, 'homme', 'dcfghj', 'dctfvgh', 'ibrahim.sylla27@outlok.fr', '$2y$10$mHaKiww93pcokdfYgGDcYOB50uiy50j/P/Je95099oSXhg3hiuAw2', '31 rue Danton', 13003, 'Marseille', 1, '0778045048', 0),
(12, 'homme', 'ibra', 'sy', 'ibrahim@ibra.fr', '$2y$10$IyqPD/TE1XUr2WY48ajGWeYvuuvGQGDmJ4dEwALMmcxvRMeN9HqWO', '31 rue Danton', 13003, 'Marseille', 1, '0778045048', 0),
(8, 'homme', 'ibrahim27', 'bb', '?', '?', '?', 0, '?', 1, '?', 0),
(7, 'homme', 'ibrahim-sylla', 'bb', 'ibrahim.sylla@laplateforme.io', '', '31 rue', 13003, 'paris', 1, '0778045048', 0),
(6, 'homme', 'ibrahim-sylla', 'aa', 'ibrahim.sylla27@outlook.fr', '$2y$10$VhQa6VwtqO7zPmf96zgaI.kmba1JwRb1..UJm3zUt2yNbNQ/2mtA.', '31 rue Danton', 13003, 'Marseille', 1, '0778045048', 0),
(11, 'homme', 'cfvhgjbhkj', 'fgvhbkj', 'ib@outlook.fr', '$2y$10$UA9ciwRrf2KRIGAx7qxgpuzdJC5TrxZl3yzyFTVe7k1uIEKvDvj96', 'cyvtguih', 13003, 'Marseille', 1, '0778045048', 0),
(15, 'homme', 'ibrahim-sylla', 'le boss', 'ibrahim.27@outlook.fr', '$2y$10$2MvYT36QDwdHN/YUAwdXz.6psnGU/MZK7a22yiUGdloYuIe8R4TBq', '31 rue Danton', 13003, 'Marseille', 1, '0778045048', 0),
(16, '?????', '?????', '????', 'edtrfgyu', '......', 'swdxfctgyhu', 0, 'mars', 1, '0', 1),
(17, 'femme', 'Julie', 'Steiner', 'julie.steiner@laplateforme.io', '$2y$10$odU5Md5X.4Ka0Ygjz4115eX54pDqMN0rjB1Oyx1cmR/ID7Z2IE3FO', 'La plus belle', 13000, 'Marseille', 1, '0778045048', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
