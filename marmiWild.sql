-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2017 at 05:55 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marmiWild`
--

-- --------------------------------------------------------

--
-- Table structure for table `recettes`
--

CREATE TABLE `recettes` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ingredients` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preparation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `brochure` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recettes`
--

INSERT INTO `recettes` (`id`, `titre`, `ingredients`, `type`, `preparation`, `brochure`) VALUES
(2, 'Ramequins fondants au chocolat', '120 g de chocolat noir + 8 carrés (5 g) ,3  oeufs, 80 g de sucre semoule, 35 g de beurre doux', 'dessert', 'Faites fondre dans une casserole le chocolat et le beurre, en remuant régulièrement pour former une pâte homogène et onctueuse.\r\n    Préchauffez le four à 210°C (thermostat 7). Dans un saladier, mélangez les oeufs, le sucre et la farine.\r\n    Incorporez la préparation chocolatée et mélangez.\r\n    Versez 1/3 de la préparation dans des ramequins individuels.\r\n    Déposez deux carrés de chocolat dans chacun des 4 ramequins,\r\n    puis recouvrez-les avec le reste de la préparation chocolatée.\r\n    Placez les ramequins au four pendant environ 12 minutes, pas plus!\r\n    Dégustez de préférence chauds ou tièdes.\r\n    Miam !', ''),
(3, 'Entrée fraîcheur', '3  tomates, 200 g de chèvre frais, 4 cuillères à soupe de crème fraîche épaisse ,  3 tranches de jambon de Parme', 'entrée', 'Coupez les tomates en deux et videz-les. Découpez chaque tranche de jambon en quatre.\r\n    Disposez un morceau de jambon au fond de la tomate.\r\n    Mélangez la crème fraîche et le chèvre dans un bol.\r\n    Mettez-en environ une cuiller à soupe dans chaque moitié de tomate.\r\n    Ajoutez un deuxième morceau de jambon de Parme au-dessus de la crème de chèvre. Puis déposez une feuille de basilic.\r\n    Assaisonnez, puis dégustez !', ''),
(4, 'Palmiers pour l\'apéritif', '1 rouleau de pâte feuilletée, 4 tranches de jambon blanc, 100 g de gruyère râpé', 'apéritif', 'Dérouler la pâte feuilletée.\r\n    La recouvrir des tranches de jambon puis de gruyère râpé.\r\n    Rouler la pâte sur elle-même jusqu\'à la moitié. Faire de même avec l\'autre moitié pour réunir les 2 côtés.\r\n    Placer le tout au congélateur une dizaine de minutes afin de durcir la pâte (sinon elle serait impossible à découper).\r\n    Découper alors en petites lamelles: vous obtenez vos petits palmiers feuilletés prêts à cuire!\r\n    Cuisson environ 15 min à 200°, thermostat 6-7 (surveiller vos palmiers car tout dépend de votre four).\r\n    Servir dans un joli plat à l\'apéritif. Succès garanti!', ''),
(5, 'Oeufs au plat rapides', '2 oeufs, poivre, sel, herbe (de Provence, laurier, basilic...au choix)', 'plat', 'Casser les oeufs dans une boîte à large fond pouvant aller au micro-onde (les oeufs doivent s\'étaler sur tout le fond).\r\n    Parsemer avec sel, poivre et herbes.\r\n    Couvrir soit avec un couvercle (ne pas fermer hermétiquement), soit avec un film plastique percé.\r\n    Passer environ 1 minute au micro-ondes à pleine puissance. Réajuster la cuisson si nécessaire en prolongeant la cuisson quelques secondes.', ''),
(6, 'Boisson à l\'abricot', '500 g de abricot, 2  oranges, 3 cuillères à soupe de sucre, 3 sachets de sucre vanillé, 1  glaçon', 'boisson', 'Ebouillanter les abricots pour les peler.\r\nLes couper en deux, les dénoyauter et les écraser en fine purée. Ajouter le sucre, le sucre vanillé et le jus des deux oranges puis mélanger.\r\nServir avec les glaçons.', ''),
(8, 'Avocats garnis aux crevettes', '175 g crevettes cuites, 2 cuillères à soupe de ciboulette ciselée, 8,5 cl de mayonnaise, 1 cuillère à soupe de sauce Worcestershire, 2 cuillères à soupe de sauce chili, Sel, 2 avocats, 1 cuillère à soupe de jus de citron, Petites feuilles de salade pour la décoration, 1 cuillère à café de paprika, Poivrons rouges en bocal', 'entrée', 'Mélangez la mayonnaise, la sauce Worcestershire, la sauce chili, les crevettes et la ciboulette. Salez.\r\n    Déposez le mélange dans un demi-avocat et arrosez de jus de citron. Placez sur une feuille de salade saupoudrée de paprika et garnissez avec des poivrons rouges.', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recettes`
--
ALTER TABLE `recettes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recettes`
--
ALTER TABLE `recettes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
