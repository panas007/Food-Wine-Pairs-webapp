-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 01, 2022 at 12:04 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WinesDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `wineid` int DEFAULT NULL,
  `deskid` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `category`, `wineid`, `deskid`) VALUES
(1, 'Sirloin', 'meats', NULL, NULL),
(2, 'Ribeye', 'meats', NULL, NULL),
(3, 'Porterhouse & T-Bone', 'meats', NULL, NULL),
(4, 'Filet Mignon', 'meats', NULL, NULL),
(5, 'Strip', 'meats', NULL, NULL),
(6, 'Rump', 'meats', NULL, NULL),
(7, 'Flank & Skirt', 'meats', NULL, NULL),
(8, 'Brisket', 'meats', NULL, NULL),
(9, 'Lean and Flaky Fish', 'seafood', NULL, NULL),
(10, 'Medium-Textured Fish', 'seafood', NULL, NULL),
(11, 'Meaty Fish', 'seafood', NULL, NULL),
(12, 'Strongly Flavored Fish', 'seafood', NULL, NULL),
(13, 'Tomato-Based', 'pasta', NULL, NULL),
(14, 'Cheese', 'pasta', NULL, NULL),
(15, 'Seafood', 'pasta', NULL, NULL),
(16, 'Pesto', 'pasta', NULL, NULL),
(17, 'Primavera', 'pasta', NULL, NULL),
(18, 'Margherita', 'pizza', NULL, NULL),
(19, 'Pepperoni', 'pizza', NULL, NULL),
(20, 'Sausage', 'pizza', NULL, NULL),
(21, 'Hawaiian', 'pizza', NULL, NULL),
(22, 'White', 'pizza', NULL, NULL),
(23, 'Cheese Pizza', 'pizza', NULL, NULL),
(24, 'Barbecue Chicken', 'pizza', NULL, NULL),
(25, 'Salad', 'pizza', NULL, NULL),
(26, 'Fresh Fruit', 'vegetables', NULL, NULL),
(27, 'Root Vegetables', 'vegetables', NULL, NULL),
(28, 'Artichoke', 'vegetables', NULL, NULL),
(29, 'Parmigiano Reggiano', 'cheese', NULL, NULL),
(30, 'Pecorino', 'cheese', NULL, NULL),
(31, 'Roquefort', 'cheese', NULL, NULL),
(32, 'Stilton', 'cheese', NULL, NULL),
(33, 'Brie', 'cheese', NULL, NULL),
(34, 'Muenster', 'cheese', NULL, NULL),
(35, 'Camembert', 'cheese', NULL, NULL),
(36, 'Goat Cheese', 'cheese', NULL, NULL),
(37, 'Gouda', 'cheese', NULL, NULL),
(38, 'Swiss', 'cheese', NULL, NULL),
(39, 'Gruyère', 'cheese', NULL, NULL),
(40, 'Emmental', 'cheese', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pairs`
--

CREATE TABLE `pairs` (
  `foodid` int NOT NULL,
  `wineid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pairs`
--

INSERT INTO `pairs` (`foodid`, `wineid`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(3, 8),
(3, 9),
(3, 10),
(4, 11),
(4, 12),
(4, 13),
(5, 14),
(5, 15),
(5, 16),
(6, 17),
(6, 18),
(6, 19),
(7, 20),
(7, 21),
(7, 22),
(7, 23),
(8, 24),
(8, 25),
(8, 26),
(9, 27),
(9, 28),
(9, 29),
(9, 30),
(9, 31),
(9, 32),
(9, 33),
(9, 34),
(9, 35),
(9, 36),
(9, 37),
(9, 38),
(9, 39),
(10, 40),
(10, 41),
(10, 42),
(10, 43),
(10, 44),
(10, 45),
(10, 46),
(10, 47),
(10, 48),
(10, 49),
(11, 50),
(11, 51),
(11, 52),
(11, 53),
(11, 54),
(11, 55),
(11, 56),
(11, 57),
(11, 58),
(11, 59),
(12, 29),
(12, 36),
(12, 54),
(12, 58),
(12, 60),
(12, 61),
(12, 62),
(12, 63),
(13, 3),
(13, 5),
(13, 20),
(14, 8),
(14, 55),
(14, 62),
(15, 28),
(15, 33),
(15, 58),
(16, 37),
(16, 46),
(16, 48),
(17, 37),
(17, 48),
(18, 22),
(18, 54),
(19, 20),
(19, 21),
(20, 1),
(20, 25),
(21, 5),
(21, 49),
(21, 64),
(22, 40),
(22, 62),
(23, 3),
(23, 15),
(24, 12),
(24, 23),
(25, 27),
(25, 37),
(25, 38),
(26, 45),
(26, 46),
(26, 49),
(26, 51),
(26, 64),
(27, 5),
(27, 18),
(27, 21),
(27, 27),
(27, 37),
(29, 3),
(29, 19),
(30, 20),
(33, 29),
(33, 36),
(33, 52),
(33, 60),
(34, 29),
(34, 36),
(34, 52),
(36, 37),
(37, 3),
(37, 20),
(38, 14),
(38, 17),
(38, 25),
(38, 40),
(39, 1),
(39, 23),
(39, 26),
(40, 17),
(40, 23),
(40, 25);

-- --------------------------------------------------------

--
-- Table structure for table `usersips`
--

CREATE TABLE `usersips` (
  `idx` bigint UNSIGNED NOT NULL,
  `user_ip_address` varchar(50) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usersips`
--

INSERT INTO `usersips` (`idx`, `user_ip_address`, `country`, `date_time`) VALUES
(1, '192.168.1.1', NULL, '2022-07-18 23:29:36'),
(2, '192.168.1.1', NULL, '2022-07-20 13:17:32'),
(13, '192.168.1.1', NULL, '2022-07-20 13:18:29'),
(14, '192.168.1.1', NULL, '2022-07-20 16:02:42'),
(15, '192.168.1.1', NULL, '2022-07-28 12:28:56'),
(16, '192.168.1.1', NULL, '2022-07-30 00:41:13'),
(17, '192.168.1.1', NULL, '2022-07-30 23:32:13'),
(18, '192.168.1.1', NULL, '2022-07-31 23:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `wines`
--

CREATE TABLE `wines` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `type` text NOT NULL,
  `category` text NOT NULL,
  `priceapr` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wines`
--

INSERT INTO `wines` (`id`, `name`, `type`, `category`, `priceapr`) VALUES
(1, 'Rioja Reserva', 'French Syrah', 'red wine', 22),
(2, 'Leda Viñas Viejas Tempranillo 2018', 'Spanish tempranillo', 'red wine', 36.9),
(3, 'Montepulciano d’Abruzzo DOC Masciarelli', 'Montepulciano d’Abruzzo', 'red wine', 15.65),
(4, 'Ktima Karipidi Petraeus Cabernet Sauvigno', 'Cabernet Sauvignon', 'red wine', 15),
(5, 'Pedroncelli ‘Mother Clone’', 'Zinfandel', 'red wine', 20),
(6, 'Consorzio 2017', 'Amarone della Valpolicella', 'red wine', 35.6),
(7, 'Casa Vinicola Zonin 2018', 'Valpolicella superiore ripasso', 'red wine', 16),
(8, 'Beni Di Batasiolo', 'Nebbiolo', 'red wine', 14),
(9, 'ktima xatzimixali Aglianico', 'Aglianico', 'red wine', 15),
(10, 'ktima ALFA', 'Xinomavro', 'red wine', 17),
(11, 'Chateau Motte Maucourt', 'Merlot', 'red wine ', 12),
(12, 'Taylor\'s Port Fine Tawny', 'Touriga Nacional', 'red wine', 13),
(13, 'Losada Altos De Losada 2018', 'Mencía', 'red wine', 17),
(14, 'Josef Igler Reserve 2017', 'Blaufrankisch', 'red wine', 14),
(15, 'Le Grand Noir Black Sheep GSM', 'GSM Blend', 'red wine', 12),
(16, '2015 Vergelegen G.V.B Red', 'South African Bordeaux blend', 'red wines', 37),
(17, 'Chateau Pegau, Cotes Du Rhone Rouge Cuvee Maclura', 'Mourvedre', 'red wine', 14.5),
(18, 'Viu Manent Reserva Carmenere', 'Chilean Carménère', 'red wine', 10),
(19, NULL, 'Italian Dolcetto', 'red wine', NULL),
(20, 'Castellare di Castellina Chianti Classico', 'Sangiovese', 'red wine', 17),
(21, 'Chateau Du Courlat', 'Cabernet Franc', 'red wine', 16.7),
(22, 'Pietradolce Bodega Lanzaga LZ', 'Garnacha', 'red wine', 16),
(23, 'Altos Las Hormigas', 'Malbec', 'red wine', 11.5),
(24, 'Lungarotti Montefalco Sagrantino', 'Sagrantino', 'red wine', 38),
(25, 'Bessa Valley Petite Syrah 2018', 'Petite Sirah', 'red wine', 17),
(26, 'Yalumba Barossa Shiraz 2018', 'Australian Shiraz', 'red wine', 22),
(27, 'Nigl', 'Grüner Veltliner', 'white wine', 16),
(28, 'Bacoo Ciari', 'Pinot Grigio', 'white wine', 9),
(29, 'Moet & Chandon Imperial', 'Champagne', 'sparkling wine', 50),
(31, 'Aveleda', 'Vinho Verde', 'white wine', 7),
(32, '2020 Vigna Petrussa Friulano Colli Orientali del Friuli', 'Fruilano', 'white wine', 12),
(33, 'Domaine Les Hautes Noëlles', 'Muscadet', 'white wine', 28),
(34, 'Melissanthi 2021', 'Athiri, Assyrtiko', 'white wine', 11),
(35, 'Bodegas Faustino', 'Albarino', 'white wine', 25),
(36, 'Pares Balta', 'Cava', 'sparkling wine', 15),
(37, 'Ktima Vivlia Xora', 'Sauvignon Blanc', 'white wine', 11.5),
(38, 'Pata Negra', 'Verdejo', 'white wine', 15),
(39, 'Domaine Christian Moreau Chablis Chardonnay', 'Unoaked Chardonnay', 'white wine', 23),
(40, 'Ktima Vivlia Xora Plagios', 'Chardonnay', 'white wine', 16),
(41, 'Serge Dagueneau & Filles Tradition Pouilly Fume', 'Sauvignon Blanc', 'white wine', 17.5),
(42, 'Black Cottage Malborough', 'New Zealand Sauvignon Blanc', 'white wine', 15),
(43, 'Bodegas Muga', 'White Rioja', 'white wine', 12),
(44, 'Ktima Vivlia Xora Ovilos Lefko', 'Semillon', 'white wine', 22),
(45, 'Mullineux Kloof Street Chenin Blanc', 'Chenin Blanc', 'white wine', 15),
(46, 'Masso Antico Fiano', 'Fiano', 'white wine', 19),
(47, 'Ktima Tselepou Mantinia', 'Moschofilero', 'white wine', 7),
(48, 'Castello Banfi Badalei Vermentino', 'Vermentino', 'white wine', 14),
(49, 'Charles Smith Kung Fu Girl Riesling ', 'Dry Riesling', 'white wine', 23),
(50, '2019 Les Lunes Linda Vista Vineyard Chardonnay', 'Oaked Chardonnay', 'white wine', 32),
(51, 'Skouraw Viognier Cuvee ', 'Viognier', 'white wine', 10),
(52, 'Dom Pérignon Brut Vintage 2010', 'Vintage Champagne', 'sparkling wine', 250),
(53, 'Domaine Michaut Frères \'Le Jardin du Curé\' Chablis 2020', 'White Burgundy', 'white wine', 21),
(54, 'La Tour Melas Κρασί Idylle D\' Achinos', 'Dry Rosé', 'rose wine', 15),
(55, 'Castelforte Chardonnay', 'Italian Chardonnay', 'white wine', 12),
(56, 'Famille Perrin Cotes Du Rhone', 'Marsanne', 'white wine', 14),
(57, 'Manusakis Nostos Roussanne', 'Roussanne', 'white wine', 22),
(58, 'M. Chapoutier Luberon', 'Grenache Blanc', 'white wine', 9),
(59, 'La Vinicola del Titerno Falanghina', 'Falanghina', 'white wine', 7),
(60, 'Cantine Riondo Le Pier Prosecco', 'Crémant', 'sparkling wine', 11.5),
(61, 'Decordi Κρασί Lambrusco dell’Emilia', 'Dry Lambrusco Rosé', 'rose wine', 5.5),
(62, 'Maison Albert Bichot Bourgogne', 'Pinot Noir', 'red wine', 20),
(63, 'Joseph Drouhin Beaujolais Nouveau', 'Gamay', 'red wine', 9),
(64, 'Botte Buona Lambrusco dell’Emilia', 'Lambrusco', 'red wine', 10.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pairs`
--
ALTER TABLE `pairs`
  ADD PRIMARY KEY (`foodid`,`wineid`);

--
-- Indexes for table `usersips`
--
ALTER TABLE `usersips`
  ADD UNIQUE KEY `idx` (`idx`);

--
-- Indexes for table `wines`
--
ALTER TABLE `wines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usersips`
--
ALTER TABLE `usersips`
  MODIFY `idx` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
