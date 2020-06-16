-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 15 jun 2020 om 11:54
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamingzone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `brand`
--

CREATE TABLE `brand` (
  `brandId` int(5) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `brandDescription` text NOT NULL,
  `brandImage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `brand`
--

INSERT INTO `brand` (`brandId`, `brandName`, `brandDescription`, `brandImage`) VALUES
(1, 'Rockstar', 'Makes games.', 'rockstar.jpg'),
(2, 'EA', 'This brand makes a lot of different games', 'EA.png'),
(3, 'Ubisoft', 'Makes games', 'ubisoft.png'),
(4, 'Activision', 'Makes games', 'activision.png'),
(5, 'Corsair', 'This brand makes headsets, keyboard and mouses and many more.', 'corsair.png'),
(6, 'Logitech', 'This brand makes headsets, keyboard and mouses and many more.', 'logitech.png'),
(7, 'Razer', 'This brand makes headsets, keyboard and mouses and many more.', 'razer.png'),
(8, 'MOJANG', 'Makes games.', 'mojang.jpg'),
(9, 'KONAMI', 'Makes games.', 'konami.jpg'),
(10, 'Frontier Developments', 'Makes games.', 'frontier.png'),
(11, 'Sony', 'Brand that makes consoles and more things.', 'sony.png'),
(12, 'Microsoft', 'Brand that makes games and makes more stuff.', 'microsoft.png'),
(13, 'Intel', 'Makes CPU\'s.', 'intel.png'),
(14, 'Nvidia', 'Makes computer conpoments.', 'nvidia.png'),
(15, 'ASUS', 'Makes computer conpoments.', 'asus.png'),
(16, 'NZXT', 'Makes cases.', 'nzxt.png'),
(17, 'Steelseries', 'Makes game assessoires', 'steelseries.png'),
(18, 'Sony', 'Makes consoles and stuff.', 'sony.png'),
(19, 'Microsoft', 'Makes consoles and stuff.', 'microsoft.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `console`
--

CREATE TABLE `console` (
  `consoleId` int(5) NOT NULL,
  `consoleType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `console`
--

INSERT INTO `console` (`consoleId`, `consoleType`) VALUES
(1, 'PS4'),
(2, 'Xbox One'),
(3, 'Pc');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `productId` int(5) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productPrice` int(5) NOT NULL,
  `productDescription` text NOT NULL,
  `productReleaseDate` date NOT NULL,
  `productImage` varchar(100) NOT NULL,
  `brandId` int(5) NOT NULL,
  `productTypeId` int(5) NOT NULL,
  `consoleId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`productId`, `productName`, `productPrice`, `productDescription`, `productReleaseDate`, `productImage`, `brandId`, `productTypeId`, `consoleId`) VALUES
(1, 'FIFA 20', 39, 'This is game where you can play football.', '2019-09-24', 'fifa20.jpg', 2, 1, 1),
(2, 'Grand Theft Auto V', 50, 'This is a game', '2013-09-17', 'gta5.jpg', 1, 1, 1),
(3, 'Red Dead Redemption 2', 30, 'This game is about shooting other people.', '2018-10-26', 'red-dead-redemption-2.jpg', 1, 1, 2),
(4, 'Grand Theft Auto: San Andreas', 11, 'This is a game where you can drive and shoot people.', '2004-10-26', 'gta-sanandreas.jpg', 1, 1, 3),
(5, 'Assassin\'s Creed: Odyssey', 28, 'This is a game about murdering people.', '2018-10-05', 'ac-odyssey.jpg', 3, 1, 2),
(6, 'Minecraft', 27, 'Game with blocks.', '2009-05-17', 'minecraft.jpg', 8, 1, 3),
(7, 'eFootball PES 2020', 50, 'This is a football game.', '2019-09-10', 'pes2020.jpg', 9, 1, 1),
(8, 'Star Wars Jedi: Fallen Order', 40, 'This is a game about Star Wars', '2019-11-15', 'sw-fallenorder.jpg', 2, 1, 2),
(9, 'Planet Coaster', 38, 'Game about building a themepark.', '2016-11-16', 'planet-coaster.jpg', 10, 1, 3),
(10, 'Logitech Mouse: G502 Hero', 60, 'This is a mouse', '2020-06-08', 'g502-hero.png', 6, 4, 3),
(11, 'SteelSeries Rival 600', 90, 'This is a mouse.', '2020-06-15', 'rival600.jpg', 17, 4, 3),
(12, 'Corsair Harpoon RGB Pro', 30, 'This is a mouse.', '2020-06-15', 'harpoon-pro.jpg', 5, 4, 3),
(13, 'Razer Ornata Chroma', 105, 'This is a keyboard.', '2020-06-15', 'ornata-chroma.jpg', 7, 2, 3),
(14, 'SteelSeries Apex 7 Red Gaming Toetsenbord', 190, 'This is a keyboard.', '2020-06-15', 'apex7-red.jpg', 17, 2, 3),
(15, 'Logitech G910 Orion Spectrum', 170, 'This is a keyboard.', '2020-06-15', 'orion-spectrum.jpg', 6, 2, 3),
(16, 'PlayStation 4 Slim (500 GB)', 329, 'Console to play games.', '2013-11-15', 'ps4-slim.jpg', 18, 3, 1),
(17, 'Playstation 4 Pro (1 TB)', 399, 'Console to play games.', '2013-11-15', 'ps4-pro.jpg', 18, 3, 1),
(18, 'Xbox One S (1 TB)', 229, 'Console to play games.', '2013-11-22', 'xboxone-s.jpg', 19, 3, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_type`
--

CREATE TABLE `product_type` (
  `productTypeId` int(5) NOT NULL,
  `productTypeName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product_type`
--

INSERT INTO `product_type` (`productTypeId`, `productTypeName`) VALUES
(1, 'Games'),
(2, 'Keyboards'),
(3, 'Consoles'),
(4, 'Mouses'),
(5, 'Headsets'),
(6, 'Cases'),
(7, 'Graphics Cards'),
(8, 'CPU\'s'),
(9, 'Motherboards'),
(10, 'Memory');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `userId` int(5) NOT NULL,
  `userAdmin` tinyint(1) NOT NULL,
  `userFirstName` varchar(100) NOT NULL,
  `userLastName` varchar(100) NOT NULL,
  `userAge` int(5) NOT NULL,
  `userAddress` varchar(100) NOT NULL,
  `userStreet` varchar(100) NOT NULL,
  `userStreetNumber` varchar(100) NOT NULL,
  `userMail` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexen voor tabel `console`
--
ALTER TABLE `console`
  ADD PRIMARY KEY (`consoleId`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `fk_brand` (`brandId`),
  ADD KEY `fk_product_type` (`productTypeId`),
  ADD KEY `fk_console` (`consoleId`);

--
-- Indexen voor tabel `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`productTypeId`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `brand`
--
ALTER TABLE `brand`
  MODIFY `brandId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT voor een tabel `console`
--
ALTER TABLE `console`
  MODIFY `consoleId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT voor een tabel `product_type`
--
ALTER TABLE `product_type`
  MODIFY `productTypeId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(5) NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_brand` FOREIGN KEY (`brandId`) REFERENCES `brand` (`brandId`),
  ADD CONSTRAINT `fk_console` FOREIGN KEY (`consoleId`) REFERENCES `console` (`consoleId`),
  ADD CONSTRAINT `fk_product_type` FOREIGN KEY (`productTypeId`) REFERENCES `product_type` (`productTypeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
