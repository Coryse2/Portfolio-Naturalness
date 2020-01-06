-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 06 Janvier 2020 à 12:45
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.2.11-4+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `naturalness`
--

-- --------------------------------------------------------

--
-- Structure de la table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `explanation` varchar(255) DEFAULT NULL,
  `shelf_life` varchar(64) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `explanation`, `shelf_life`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Shampoing pour cheveux secs', 'Un shampoing solide très facile à réaliser et doux pour vos cheveux', 'Pas de durée limite, A conserver au sec', 1, '2019-12-09 19:43:00', NULL),
(2, 'Déodorant', 'Testé et approuvé même lors d\'efforts intenses, se conserve environ 3 mois.\r\n ! Après avoir tenté la conservation en stick (très pratique en théorie), la solution de la conservation en pot est finalement la plus simple. ', '3 mois, en cas de forte chaleur à conserver au frais', 2, '2019-12-13 15:10:01', NULL),
(3, 'Dentifrice', 'Très facile et rapide à réaliser. Recette sur la base du un tiers , deux tiers (ex: 10g d\'argile / 20g d\'huile de coco)', '3 mois, en cas de forte chaleur à conserver au frais', 3, '2019-12-13 15:12:16', NULL),
(4, 'Lessive au savon de Marseille', 'Une lessive très économique! Vous pouvez trouver des paillettes de savon de Marseille de différentes senteurs pour varier', 'Pas de durée, garder la lessive en paillettes au sec', 4, '2019-12-13 15:12:16', NULL),
(5, 'Coloration végétale au henné', 'Assurez-vous que vos cheveux ne portent plus de trace de coloration chimique. Il est préférable de le laisser poser 1 heure au moins, de le rincer à l\'eau et d\'attendre quelques jours avant de faire un shampoing.', 'lorsque le henné est préparé il est à utiliser le jour même', 1, '2020-01-04 14:20:37', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
