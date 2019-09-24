-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Sep 2019 um 11:26
-- Server-Version: 10.4.6-MariaDB
-- PHP-Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `immobilien`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `immobilien`
--

CREATE TABLE `immobilien` (
  `id` int(32) NOT NULL,
  `Land` int(32) NOT NULL,
  `Ort` varchar(512) NOT NULL,
  `Preis` int(64) NOT NULL,
  `Baujahr` int(32) NOT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `immobilien`
--

INSERT INTO `immobilien` (`id`, `Land`, `Ort`, `Preis`, `Baujahr`, `lat`, `lng`) VALUES
(1, 5, '3749 E. Juniper Cir. Mesa, Arizona 85205', 1599000, 2018, 33.448479, -111.749863),
(2, 5, '43 N Lamerie Way The Woodlands, Texas 77382', 2950000, 2008, 30.190189, -95.53923),
(3, 5, '97 Brower Ave Rockville Center, New York 11570', 1200000, 2019, 40.66151, -73.632683),
(4, 5, '1321 E LAKESHORE DR Coeur dAlene, Idaho 83814', 7995000, 1922, 47.666545, -116.766582),
(5, 5, '216 ParkWood Pl Post Falls, Idaho 83854', 8495000, 1995, 47.703331, -116.926086),
(6, 5, '1089 Hwy 71 S Ashdown, Arkansas 71822', 1250000, 1997, 33.59465, -94.059158),
(7, 5, '7566 E GEM SHORES RD Hayden, Idaho 83835', 4195000, 2010, 47.78368, -116.686523),
(8, 5, '19710 Holly Court Magnolia, Texas 77355', 585000, 1997, 30.174749, -95.763367),
(9, 5, '5137 E STATE HWY 107 Edinburg, Texas 78542', 969900, 2004, 26.294161, -98.109818),
(10, 5, 'O Winnsboro, Texas 75494', 2400000, 2014, 32.939541, -95.276497),
(11, 5, '21539 S HOGHWAY 97 Harrison, Idaho 83833', 3900000, 2006, 47.613461, -116.767532),
(12, 5, '14065 Highway 83, Colorado Springs, Colorado, 80921', 8750000, 0, 39.035389, -104.773201),
(13, 5, '22 CrosslandRd, Colorado Springs, Colorado, 80906', 8000000, 0, 38.78231, -104.840919),
(14, 9, '75342 2nd Line EHS, Mono, Ontario, L9W 2Y8', 4900000, 0, 43.964249, -80.056557),
(15, 6, 'The Ridge, Woldingham, Surrey, Caterham CR3', 2098098, 0, 51.274872, -0.01852),
(16, 9, '108 Westbrook Drive, Edmonton, Alberta T6J 2E1', 6335372, 1998, 53.470188, -113.556831),
(17, 9, '2 Ennisclare Drive W, Oakville, Ontario L6J 4N2', 5655642, 0, 43.46172, -79.645531),
(18, 5, '15 AURIEMMA CT Landing, New Jersey 07850', 3999900, 2009, 40.91814, -74.653389),
(19, 5, '7515 Los Osos Valley Road San Luis Obispo, Kalifornien 93405', 6900000, 1932, 35.279621, -120.740646),
(20, 5, '168 Tobin Clark Drive Hillsborough, Kalifornien 94010', 7299000, 1990, 37.541809, -122.332573),
(21, 5, '3 Point Crescent Malba, New York 11357', 5988000, 1995, 40.791248, -73.830704),
(22, 5, '218 Shell Beach Dr Lake Charles, Louisiana 70601', 5250000, 2014, 30.217131, -93.236572),
(23, 5, '604 Edgecreek Dr. Myrtle Beach, South Carolina 29579', 539999, 2019, 33.74815, -78.869568),
(24, 5, '40 SE CR 4210 Mt Vernon, Texas 75457', 5950000, 2004, 33.068138, -95.134987),
(25, 5, '216 Hale Ave S Tampa, Florida 33609', 1250000, 2018, 27.941441, -82.510643),
(26, 9, 'Chelster Hall 1150 Lakeshore Rd E, Oakville, Ontario, L6l 1L2', 59000000, 0, 43.458111, -79.654648),
(27, 9, '232 Poplar Drive Oakville, Ontario L6J 4C8', 6598000, 0, 43.459229, -79.661758),
(28, 5, '193 Ranch House Rd Kerrville, Texas 78028', 2495000, 1997, 29.996651, -99.078049),
(29, 5, '7408 Braemar TERColleyville, Texas 76034', 1999900, 2002, 32.915489, -97.137207),
(30, 5, '712 Willow RidgeSan Marcos, Texas 78666', 1425000, 1980, 29.86832, -97.973541),
(31, 5, '22320 Bear Creek Drive NMurrieta, Kalifornien 92562', 1795000, 2007, 33.577801, -117.272797),
(32, 5, '19319 Calle JuanitoMurrieta, Kalifornien 92562', 7495000, 0, 33.520741, -117.323792),
(33, 6, 'Foscote Manor, BuckinghamshireBuckingham MK18', 8256363, 0, 52.012211, -0.97074),
(34, 5, '19319 Calle Juanito, Murrieta, Kalifornien 92562', 7495000, 0, 33.520741, -117.323792),
(35, 5, '1533 Tyler St, Hollywood, Florida 33020', 549000, 1947, 26.012911, -80.138161),
(36, 5, '20 Shuler Dr., Sumter, South Carolina 29150', 19500, 1952, 33.941872, -80.356354),
(37, 5, '3109 Cedar Ridge Drive, Richardson, Texas 75082', 458474, 2000, 33.002121, -96.662743),
(38, 5, '440 Atkins Avenue, Shreveport, Louisiana 71104', 136647, 1940, 32.481159, -93.738724),
(39, 5, '31 Netherfield WayThe Woodlands, Texas 77382', 4954000, 2006, 30.192249, -95.545868),
(40, 5, '16232 Noble Point Dr, Anchorage, Alaska 99516', 6495000, 2002, 61.073978, -149.791962),
(41, 5, '800 Wilpitz RoadBrookshire, Texas 77423', 10450000, 2012, 29.79981, -95.998947),
(42, 5, '1982 E Todd DrTempe, Arizona 85283', 535000, 1994, 33.353031, -111.90316),
(43, 5, '526 Camargo Club DriveLake in the Hills, Illinois 60153', 365000, 1999, 42.187859, -88.352097),
(44, 5, '3310 S 14 AVEYuma, Arizona 85364', 425000, 1997, 32.618809, -114.577301),
(45, 5, '325 W Palm LnPhoenix, Arizona 85003', 564900, 1935, 33.46917, -112.079651),
(46, 5, '1144 Johnson StHollywood, Florida 33019', 4899000, 1970, 26.019011, -80.130051),
(47, 5, '15912 Gulf BlvdRedington Beach, Florida 33708', 6495000, 0, 27.80896, -82.812714),
(48, 5, '601 N. Hollywood BlvdLas Vegas, Nevada 89110', 6000000, 2016, 36.17012, -115.028137),
(49, 5, '46920 Pontiac TrailCommerce Twp, Michigan 48390', 5500000, 1967, 43.924812, -84.633107),
(50, 5, '3456 Lynx Ridge RoadPaso Robles, Kalifornien 93446', 5400000, 0, 36.531544, -119.586168),
(51, 5, '218 Shell Beach DriveLake Charles, Louisiana 70601', 5250000, 2014, 30.220339, -93.22451),
(52, 5, '15 AURIEMMA CTLanding, New Jersey 07850', 5000000, 2009, 40.918444, -74.65284),
(53, 5, '5225 E Hwy 41Paso Robles, Kalifornien 93446', 5000000, 2001, 35.62664, -120.691),
(54, 5, '31 Netherfield WayThe Woodlands, Texa 77382', 4954000, 2006, 30.2106, -95.5257),
(55, 5, '2339 20th Avenue SE, Tuttle, North Dakota 58488', 1100000, 2016, 47.073981, -100.072856),
(56, 5, '1728 Union Hill Road, Ennis, Texa 75119', 1250000, 2006, 32.3321, -96.6224),
(57, 5, '709 EASTLAWN DR CELEBRATION, Florida 34747', 2475000, 2002, 28.3130363, -81.5459143);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `immobilien`
--
ALTER TABLE `immobilien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Ort` (`Ort`),
  ADD KEY `FK_immobilien_land` (`Land`);

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `immobilien`
--
ALTER TABLE `immobilien`
  ADD CONSTRAINT `FK_immobilien_land` FOREIGN KEY (`Land`) REFERENCES `land` (`LandID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
