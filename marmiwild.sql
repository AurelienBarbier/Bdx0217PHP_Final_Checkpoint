-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 12 Juillet 2017 à 17:31
-- Version du serveur :  5.7.18-0ubuntu0.16.04.1
-- Version de PHP :  7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `marmiwild`
--

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ingredients`
--

INSERT INTO `ingredients` (`id`, `Name`) VALUES
(1, 'oeuf(s)');

-- --------------------------------------------------------

--
-- Structure de la table `ingredients_recipes`
--

CREATE TABLE `ingredients_recipes` (
  `ingredients_id` int(11) NOT NULL,
  `recipes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `WildChef` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Instructions` longtext COLLATE utf8_unicode_ci NOT NULL,
  `PreparationTime` time NOT NULL,
  `CookingTime` time NOT NULL,
  `Difficulty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `FedNumber` int(11) NOT NULL,
  `Quantities` int(11) NOT NULL,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `KeyWords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_original_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_mime_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `recipes`
--

INSERT INTO `recipes` (`id`, `Name`, `WildChef`, `Instructions`, `PreparationTime`, `CookingTime`, `Difficulty`, `FedNumber`, `Quantities`, `Type`, `KeyWords`, `updated_at`, `image_name`, `image_original_name`, `image_mime_type`, `image_size`) VALUES
(0, 'Ramequins fondants au chocolat', 'WildBear', 'Faites fondre dans une casserole le chocolat et le beurre, en remuant régulièrement pour former une pâte homogène et onctueuse.\r\nPréchauffez le four à 210°C (thermostat 7). Dans un saladier, mélangez les oeufs, le sucre et la farine.\r\nIncorporez la préparation chocolatée et mélangez.\r\nVersez 1/3 de la préparation dans des ramequins individuels.\r\nDéposez deux carrés de chocolat dans chacun des 4 ramequins,\r\npuis recouvrez-les avec le reste de la préparation chocolatée.\r\nPlacez les ramequins au four pendant environ 12 minutes, pas plus!\r\nDégustez de préférence chauds ou tièdes.\r\nMiam !', '00:10:00', '00:12:00', 'Easy', 4, 0, 'dessert', 'chocolat', '2017-07-12 15:08:28', '21702_w397h246c1cx2000cy3000.jpg', '21702_w397h246c1cx2000cy3000.jpg', 'image/jpeg', 33662),
(5, 'Blanquette de veau', 'WildLilia', 'Faire revenir la viande dans un peu de beurre doux jusqu\'à ce que les morceaux soient un peu dorés.\r\nSaupoudrer de 2 cuillères de farine. Bien remuer.\r\nAjouter 2 ou 3 verres d\'eau, les cubes de bouillon, le vin et remuer. Ajouter de l\'eau si nécessaire pour couvrir.\r\nCouper les carottes en rondelles et émincer les oignons puis les incorporer à la viande, ainsi que les champignons.\r\nLaisser mijoter à feu très doux environ 1h30 à 2h00 en remuant.\r\nSi nécessaire, ajouter de l\'eau de temps en temps.\r\nDans un bol, bien mélanger la crème fraîche, le jaune d’oeuf et le jus de citron. Ajouter ce mélange au dernier moment, bien remuer et servir tout de suite.', '00:15:00', '02:00:00', 'Easy', 4, 0, 'plat', 'veau viande', '2017-07-12 15:22:48', 'bveau.jpg', 'bveau.jpg', 'image/jpeg', 23393),
(6, 'Gougères au fromage', 'WildMarx', 'Préchauffez le four à 200°C (th 6-7).\r\nDans une casserole, portez 25 cl d\'eau à ébullition, avec le beurre coupé en morceaux + 1 cuillère à café de sel.\r\nHors du feu, ajoutez la farine d\'un coup.\r\nMélangez vivement, et faites dessécher pendant 1 min sur feu doux.\r\nLaissez tiédir quelques instants, et incorporez les oeufs un par un en mélangeant bien.\r\nAjoutez le gruyère râpé, la muscade, le sel et le poivre.\r\nDéposez cette pâte à l\'aide de 2 cuillères à café, en petits tas séparés, sur une plaque beurrée.\r\nVous pouvez dorer les petites gougères avec un jaune d\'oeuf, à l\'aide d\'un pinceau.\r\nEnfournez 25 min en surveillant.\r\nC\'est prêt', '00:20:00', '00:25:00', 'Easy', 6, 0, 'appetizers', 'yummy', '2017-07-12 15:39:12', 'gougeres.jpg', 'gougeres.jpg', 'image/jpeg', 30220);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_4B60114FFE11D138` (`Name`);

--
-- Index pour la table `ingredients_recipes`
--
ALTER TABLE `ingredients_recipes`
  ADD PRIMARY KEY (`ingredients_id`,`recipes_id`),
  ADD KEY `IDX_C1E222F13EC4DCE` (`ingredients_id`),
  ADD KEY `IDX_C1E222F1FDF2B1FA` (`recipes_id`);

--
-- Index pour la table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_A369E2B5FE11D138` (`Name`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `ingredients_recipes`
--
ALTER TABLE `ingredients_recipes`
  ADD CONSTRAINT `FK_C1E222F13EC4DCE` FOREIGN KEY (`ingredients_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C1E222F1FDF2B1FA` FOREIGN KEY (`recipes_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
