-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Sep 2019 um 13:09
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
-- Tabellenstruktur für Tabelle `land`
--

CREATE TABLE `land` (
  `LandID` int(32) NOT NULL,
  `Landname` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `land`
--

INSERT INTO `land` (`LandID`, `Landname`) VALUES
(10, 'Argentinien'),
(19, 'Australien'),
(25, 'Bermuda'),
(22, 'Brasilien'),
(9, 'Canada'),
(18, 'China'),
(24, 'Dänemark'),
(1, 'Deutschland'),
(26, 'Europa'),
(4, 'Frankreich'),
(16, 'Griechenland'),
(21, 'Indien'),
(7, 'Irland'),
(2, 'Italien'),
(17, 'Japan'),
(29, 'Kaiman Inseln'),
(11, 'Korea'),
(8, 'Luxenburg'),
(20, 'Mexico'),
(23, 'New Zeland'),
(27, 'Niederland'),
(13, 'Portugal'),
(15, 'Russland'),
(30, 'Schweden'),
(3, 'Schweiz'),
(28, 'Singapu'),
(14, 'Spanien'),
(12, 'Türkei'),
(6, 'UK'),
(5, 'USA');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`LandID`),
  ADD UNIQUE KEY `Landname` (`Landname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
