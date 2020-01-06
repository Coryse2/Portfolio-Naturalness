-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 06 Janvier 2020 à 15:51
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
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Soins capillaires', 'Des soins faciles à réaliser, idéaux pour les cheveux et cuirs chevelus fragiles. Shampoings et colorations naturels n\'auront plus de secrets.', '2019-12-09 18:44:47', NULL),
(2, 'Hygiène corporelle', 'Idéal pour en finir avec les produits bourrés de produits chimique et les tubes ou sprays difficiles à recycler.\r\nBons pour la peau et l\'environnement!', '2019-12-09 18:55:36', NULL),
(3, 'Hygiène dentaire', 'Fini les tubes!', '2019-12-09 18:55:36', NULL),
(4, 'Soin du linge', 'Economique et écologique', '2019-12-09 18:55:36', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `component`
--

CREATE TABLE `component` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `comment` varchar(800) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `component`
--

INSERT INTO `component` (`id`, `name`, `recipe_id`, `amount`, `comment`, `created_at`, `updated_at`) VALUES
(2, 'Cire d\'abeille', 2, '10 grammes', 'La cire va permettre de donner une consistance au déo, pour une alternative vegan vous pouvez remplacer par la même quantité de cire de calendula.', '2020-01-06 14:43:36', NULL),
(3, 'Huile de coco', 2, '40 grammes', '', '2020-01-06 14:44:21', NULL),
(4, 'Bicarbonate de soude', 2, '30 grammes', 'Le bicarbonate de soude neutralise les bactéries responsables de la mauvaise odeur de la sueur.', '2020-01-06 14:44:21', NULL),
(5, 'Fécule de maïs', 2, '20 grammes', 'La fécule de maïs va permettre d\'absorber l\'humidité.', '2020-01-06 14:44:47', NULL),
(6, 'Huile essentielle de menthe poivrée', 2, '10 gouttes', 'Optionnel, l\'utilisation des huiles essentielles n\'est pas obligatoire.', '2020-01-06 14:45:33', NULL),
(7, 'Henné (plusieurs teintes au choix)', 5, '100 grammes', 'Pour des cheveux mi-longs 100 grammes de poudre de henné suffisent. Adaptez en fonction de la longueur de vos cheveux. Si vous ne souhaitez pas de reflets roux-dorés il existe d\'autre plantes (ex: indigo pour le brun, camomille pour les blonds à mélanger à du henné neutre). Les cheveux blancs ne sont pas 100% couverts mais atténués et se fondent naturellement dans votre chevelure. Ex : le test de la teinte châtain-caramel (sur cheveux châtains) donne une couverture à 70/80% des cheveux blancs et des reflets auburn.', '2020-01-06 14:45:33', NULL),
(8, 'Huile végétale', 5, '1 cuillère à soupe', 'Mélangée au henné, l\'huile végétale (olive, chanvre, coco...) permet d\'éviter l\'assèchement de vos cheveux.', '2020-01-06 14:46:23', NULL),
(9, 'Eau chaude', 5, '250 ml', 'Faites chauffer votre eau avant de la mélanger à la poudre de henné. Laissez refroidir avant d\'appliquer la pâte obtenue sur vos cheveux.', '2020-01-06 14:46:23', NULL),
(10, 'Tensioactif SCI', 1, '20 grammes', 'C\'est ce qui fera mousser votre shampoing.', '2020-01-06 14:47:08', NULL),
(11, 'Huile de coco', 1, '10 grammes', 'Alternative : beurre d aloe.', '2020-01-06 14:47:08', NULL),
(12, 'Huile d olive', 1, '10 grammes', 'Nourrit les cheveux secs. Alternative : huile de brocoli (douceur et brillance).', '2020-01-06 14:47:55', NULL),
(13, 'Poudre de guimauve', 1, '5 grammes', 'Apporte volume et brillance.', '2020-01-06 14:47:55', NULL),
(14, 'Poudre de prêle', 5, '5 grammes', 'Fortifie les cheveux et stimule la pousse.', '2020-01-06 14:48:45', NULL),
(15, 'Lait d avoine', 5, '15 grammes', 'Protège la fibre capillaire, lisse et gaine.', '2020-01-06 14:48:45', NULL),
(16, 'Huile essentielle', 1, '15 gouttes', 'HE pour les cheveux secs, au choix, huile essentielle de bois de santal, sauge, lavande, géranium, romarin, ylang-ylang, palmarosa, bois de cade, cèdre.', '2020-01-06 14:49:13', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `material`
--

INSERT INTO `material` (`id`, `name`, `text`, `created_at`) VALUES
(1, 'Bol en inox', 'Le bol vous servira pour faire fondre vos ingrédients au bain-marie. Si vous n\'en avez pas il n\'est pas obligatoire d\'investir, prenez un bol résistant à la chaleur ou une casserole plus petite cela fera l\'affaire.', '2020-01-04 11:29:11'),
(2, 'Pot de conservation avec couvercle', 'Stockez votre dentifrice ou déodorant dans un pot hermétique. Pour mon déo j\'utilise un pot de crème hydratante, un pot de confiture, une boite de conservation alimentaire peuvent également servir de contenant.', '2020-01-04 11:31:09'),
(3, 'Spatule', 'Utilisez une spatule de type maryse pour mélangez et récupérer vos préparations.', '2020-01-04 11:38:26'),
(4, 'Boite / Bidon de lessive', 'Conservez votre lessive liquide dans un ancien bidon ou une bouteille d\'eau (notez bien de quoi il s\'agit dessus!!!). Pour la lessive en paillette, un carton, un bocal ... n\'importe quel contenant qui permet de maintenir la préparation au sec.', '2020-01-04 11:40:43'),
(5, 'Balance de cuisine', 'Indispensable pour peser tous vos ingrédients avant de les mélanger.', '2020-01-04 11:41:24'),
(6, 'Casserole', 'La plupart des préparations ont besoin d\'être chauffées au bain marie. Si vous n\'avez pas de plaques de cuisson vous pouvez chauffer de l\'eau à la bouilloire, la mettre dans un saladier et poser votre bain marie dedans.', '2020-01-04 11:42:55');

-- --------------------------------------------------------

--
-- Structure de la table `reason`
--

CREATE TABLE `reason` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `reason`
--

INSERT INTO `reason` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'pour les peaux sensibles et réactives aux produits de grande consommation', '2020-01-06 13:33:10', NULL),
(2, 'pour controller ce que vous mettez sur votre peau ', '2020-01-06 13:33:10', NULL),
(3, 'pour en finir avec les flacons qui prennent de la place et ne sont pas indispensables', '2020-01-06 13:33:10', NULL),
(4, 'par goût pour les créations personnelles et les soins sur-mesure', '2020-01-06 13:33:10', NULL),
(5, 'Bref, vous l\'aurez compris, il y a plein de bonnes raisons pour se lancer!', '2020-01-06 13:33:10', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `explanation` varchar(255) DEFAULT NULL,
  `shelf_life` varchar(64) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `explanation`, `shelf_life`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Shampoing cheveux secs', 'Un shampoing solide très facile à réaliser et doux pour vos cheveux', 'Pas de durée limite, A conserver au sec', 1, '2019-12-09 18:43:00', NULL),
(2, 'Déodorant', 'Testé et approuvé même lors d\'efforts intenses, se conserve environ 3 mois.\r\n ! Après avoir tenté la conservation en stick (très pratique en théorie), la solution de la conservation en pot est finalement la plus simple. ', '3 mois, en cas de forte chaleur à conserver au frais', 2, '2019-12-13 14:10:01', NULL),
(3, 'Dentifrice', 'Très facile et rapide à réaliser. Recette sur la base du un tiers , deux tiers (ex: 10g d\'argile / 20g d\'huile de coco)', '3 mois, en cas de forte chaleur à conserver au frais', 3, '2019-12-13 14:12:16', NULL),
(4, 'Lessive au savon de Marseille', 'Une lessive très économique! Vous pouvez trouver des paillettes de savon de Marseille de différentes senteurs pour varier', 'Pas de durée, garder la lessive en paillettes au sec', 4, '2019-12-13 14:12:16', NULL),
(5, 'Coloration végétale au henné', 'Assurez-vous que vos cheveux ne portent plus de trace de coloration chimique. Il est préférable de le laisser poser 1 heure au moins, de le rincer à l\'eau et d\'attendre quelques jours avant de faire un shampoing.', 'lorsque le henné est préparé il est à utiliser le jour même', 1, '2020-01-04 13:20:37', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT 'default 0 = user',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `component`
--
ALTER TABLE `component`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reason`
--
ALTER TABLE `reason`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `component`
--
ALTER TABLE `component`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `reason`
--
ALTER TABLE `reason`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
