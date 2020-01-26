-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Jan 2020 um 18:15
-- Server-Version: 10.4.6-MariaDB
-- PHP-Version: 7.1.32

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
-- Tabellenstruktur für Tabelle `aktien`
--

CREATE TABLE `aktien` (
  `Aktien_ID` int(32) NOT NULL,
  `ISIN` varchar(32) NOT NULL,
  `WKN` varchar(16) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Land` int(32) NOT NULL,
  `Sparte` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `aktien`
--

INSERT INTO `aktien` (`Aktien_ID`, `ISIN`, `WKN`, `Name`, `Land`, `Sparte`) VALUES
(1, 'US0258161092', '850226', 'American Express Co. Registered Shares DL -,20', 5, 6),
(2, 'US0605051046', '858388', 'Bank of America Corp. Registered Shares DL 0,01', 5, 6),
(3, 'US38141G1040', '920332', 'Goldman Sachs Group Inc., The Registered Shares DL -,01', 5, 6),
(4, 'US46625H1005', '850628', 'JPMorgan Chase & Co. Registered Shares DL 1', 5, 6),
(5, 'US57636Q1040', 'A0F602', 'Mastercard Inc. Registered Shares A DL -,0001', 5, 6),
(6, 'US9497461015', '857949', 'Wells Fargo & Co. Registered Shares DL 1,666', 5, 6),
(7, 'US3696041033', '851144', 'General Electric Co. Registered Shares DL -,06', 5, 7),
(8, 'US64110L1061', '552484', 'Netflix Inc. Registered Shares DL -,001', 5, 12),
(9, 'DE000PSM7770', 'PSM777', 'ProSiebenSat.1 Media SE Namens-Aktien o.N.', 1, 12),
(10, 'US2546871060', '855686', 'Disney Co., The Walt Registered Shares DL -,01', 5, 12),
(11, 'US1912161007', '850663', 'Coca-Cola Co., The Registered Shares DL -,25', 5, 9),
(12, 'US5007541064', 'A14TU4', 'Kraft Heinz Co., The Registered Shares DL -,01', 5, 9),
(13, 'CH0038863350', 'A0Q4DC', 'Nestlé S.A. Namens-Aktien SF -,10', 3, 9),
(14, 'US9311421039', '860853', 'Walmart Inc. Registered Shares DL -,10', 5, 9),
(15, 'US0846701086', '854075', 'Berkshire Hathaway Inc. Registered Shares A DL 5', 5, 11),
(16, 'US0846707026', 'A0YJQ2', 'Berkshire Hathaway Inc. Reg.Shares B New DL -,00333', 5, 11),
(17, 'US0378331005', '865985', 'Apple Inc. Registered Shares o.N.', 5, 8),
(18, 'US5949181045', '870747', 'Microsoft Corp. Registered Shares DL-,00000625', 5, 8),
(19, 'US67066G1040', '918422', 'NVIDIA Corp. Registered Shares DL-,001', 5, 8),
(20, 'US7475251036', '883121', 'QUALCOMM Inc. Registered Shares DL -,0001', 5, 8),
(21, 'US0231351067', '906866', 'Amazon.com Inc. Registered Shares DL -,01', 5, 10),
(22, 'US6541061031', '866993', 'NIKE Inc. Registered Shares Class B o.N.', 5, 10),
(23, 'US5486611073', '859545', 'Lowes Companies Inc. Registered Shares DL -,50', 5, 10),
(24, 'US92826C8394', 'A0NC7B', 'VISA Inc. Reg. Shares Class A DL -,0001', 5, 6),
(25, 'US00206R1023', 'A0HL9Z', 'AT & T Inc. Registered Shares DL 1', 5, 8),
(26, 'US02079K3059', 'A14Y6F', 'Alphabet Inc. Reg. Shs Cl. A DL-,001', 5, 7),
(27, 'US30303M1027', 'A1JWVX', 'Facebook Inc. Reg.Shares Cl.A DL-,000006', 5, 7),
(28, 'GB00B3Y2J508', 'A0YA62', 'Galliford Try PLC Registered Shares LS -,50', 6, 4),
(29, 'IM00B1H1XF89', 'A0LGDU', 'Hansard Global PLC Registered Shares LS -,50', 6, 11),
(30, 'IM00BH3JLY32', 'A2PA03', 'RDI REIT PLC Registered Shares LS -,40', 6, 4),
(31, 'BMG5361W1047', 'A0HM5W', 'Lancashire Holdings Ltd. Registered Shares DL -,50', 25, 11),
(32, 'FR0000130809', '873403', 'Société Générale S.A. Actions Port. EO 1,25', 4, 6),
(33, 'US1720621010', '878440', 'Cincinnati Financial Corp. Registered Shares DL 2', 5, 11),
(34, 'US17275R1023', '878841', 'Cisco Systems Inc. Registered Shares DL-,001', 5, 8),
(35, 'US26614N1028', 'A2PLC7', 'Dowdupont Inc.', 5, 13),
(36, 'US46284V1017', 'A14MS9', 'Iron Mountain Inc. Registered Shares DL -,01', 5, 7),
(39, 'US6174464486', '885836', 'Morgan Stanley Registered Shares DL -,01', 5, 11),
(40, 'US8825081040', '852654', 'Texas Instruments Inc. Registered Shares DL 1', 5, 8),
(41, 'US9831341071', '663244', 'Wynn Resorts Ltd. Registered Shares DL -,01', 5, 8),
(42, 'US0311621009', '867900', 'Amgen Inc. Registered Shares DL -,0001', 5, 13),
(43, 'US2786421030', '916529', 'eBay Inc. Registered Shares DL -,001', 5, 8),
(44, 'US3453708600', '502391', 'Ford Motor Co. Registered Shares DL -,01', 5, 14),
(45, 'US4370761029', '866953', 'Home Depot Inc., The Registered Shares DL -,05', 5, 10),
(46, 'US5719032022', '913070', 'Marriott International Inc. Reg. Shares Class A DL -,01', 5, 8),
(47, 'US6556641008', '867804', 'Nordstrom Inc. Registered Shares o.N.', 5, 10),
(48, 'US9182041080', '857621', 'V.F. Corp. Registered Shares o.N.', 5, 10),
(49, 'US4404521001', '850875', 'Hormel Foods Corp. Registered Shares DL 0,01465', 5, 9),
(50, 'US2600031080', '853707', 'Dover Corp. Registered Shares DL 1', 5, 13),
(51, 'US7010941042', '855950', 'Parker-Hannifin Corp. Registered Shares DL-,50', 5, 13),
(52, 'US6556631025', '866725', 'Nordson Corp. Registered Shares o. N.', 5, 13),
(53, 'US8679141031', '871788', 'SunTrust Banks Inc. Registered Shares DL 1', 5, 6),
(54, 'US2910111044', '850981', 'Emerson Electric Co. Registered Shares DL -,50', 5, 8),
(55, 'US4781601046', '853260', 'Johnson & Johnson Registered Shares DL 1', 5, 13),
(56, 'US88579Y1010', '851745', '3M Co. Registered Shares DL -,01', 5, 10),
(57, 'US7427181091', '852062', 'Procter & Gamble Co., The Registered Shares o.N.', 5, 10),
(58, 'US0970231058', '850471', 'Boeing Co. Registered Shares DL 5', 5, 15),
(59, 'US7170811035', '852009', 'Pfizer Inc. Registered Shares DL -,05', 5, 13),
(60, 'US9113121068', '929198', 'United Parcel Service Inc. Reg. Shares Class B DL -,01', 5, 15),
(61, 'US4943681035', '855178', 'Kimberly-Clark Corp. Registered Shares DL 1,25', 5, 13),
(62, 'US1491231015', '850598', 'Caterpillar Inc. Registered Shares DL 1', 5, 13),
(63, 'US7551115071', '785159', 'Raytheon Co. Registered Shares DL -,01', 5, 15),
(64, 'US5398301094', '894648', 'Lockheed Martin Corp. Registered Shares DL 1', 5, 15),
(65, 'US3695501086', '851143', 'General Dynamics Corp. Registered Shares DL 1', 5, 15),
(66, 'US87236Y1082', 'A0H1BG', 'TD Ameritrade Holding Corp. Registered Shares DL -,01', 5, 11),
(67, 'US8552441094', '884437', 'Starbucks Corp. Reg. Shares DL -,001', 5, 9),
(68, 'US1729674242', 'A1H92V', 'Citigroup Inc. Registered Shares DL -,01', 5, 6),
(69, 'US5801351017', '856958', 'McDonalds Corp. Registered Shares DL-,01', 5, 9),
(70, 'US2655041000', 'A1JHGA', 'Dunkin Brands Group Inc. Registered Shares DL -,001', 5, 9),
(71, 'US7134481081', '851995', 'PepsiCo Inc. Registered Shares DL -,0166', 5, 9),
(72, 'US9884981013', '909190', 'Yum! Brands, Inc. Registered Shares o.N.', 5, 9),
(73, 'NL0000388619', 'A0JMQ9', 'Unilever N.V. Aandelen op naam EO -,16', 27, 10),
(74, 'GB00BYN59130', 'A2AHL0', 'Dominos Pizza Group PLC Registered Shares LS-,00520833', 6, 9),
(75, 'CA76131D1033', 'A12GMA', 'Restaurant Brands Intl Inc. Registered Shares o.N.', 9, 9),
(76, 'US95058W1009', 'A1JB8H', 'Wendys Co., The Reg. Shares Class A DL -,10', 5, 9),
(77, 'US5246601075', '883524', 'Leggett & Platt Inc. Registered Shares DL -,01', 5, 10),
(78, 'US1890541097', '856678', 'Clorox Co., The Registered Shares DL 1', 5, 10),
(81, 'US94106L1098', '893579', 'Waste Management Inc. (Del.) Registered Shares DL -,01', 5, 13),
(82, 'US00724F1012', '871981', 'Adobe Inc. Registered Shares o.N.', 5, 8),
(83, 'US0382221051', '865177', 'Applied Materials Inc. Registered Shares o.N.', 5, 8),
(84, 'US14149Y1082', '880206', 'Cardinal Health Inc. Registered Shares o.N.', 5, 10),
(85, 'US2644115055', '887674', 'Duke Realty Corp. Registered Shares DL -,01', 5, 4),
(86, 'US2473617023', 'A0MQV8', 'Delta Air Lines Inc. Registered Shares DL -,0001', 5, 14),
(87, 'US1344291091', '850561', 'Campbell Soup Co. Registered Shares DL -,0375', 5, 9),
(88, 'US3448491049', '877539', 'Foot Locker Inc. Registered Shares DL -,01', 5, 10),
(89, 'US68389X1054', '871460', 'Oracle Corp. Registered Shares DL -,01', 5, 8),
(90, 'US92343V1044', '868402', 'Verizon Communications Inc. Registered Shares DL -,10', 5, 8),
(91, 'US4592001014', '851399', 'Intl Business Machines Corp. Registered Shares DL -,20', 5, 8),
(92, 'US11135F1012', 'A2JG9Z', 'Broadcom Inc. Registered Shares o.N.', 28, 8),
(93, 'KYG237731073', '913867', 'Consolidated Water Co. Ltd. Registered Shares o.N.', 29, 2),
(94, 'US8318652091', '868323', 'Smith Corp., A.O. Registered Shares DL 1', 5, 2),
(95, 'IE00BLS09M33', 'A115FG', 'Pentair PLC Registered Shares DL -,01', 5, 2),
(96, 'US8910921084', '861568', 'Toro Co. Registered Shares DL 1', 5, 2),
(97, 'CA0158571053', 'A0YDAV', 'Algonquin Power&Utilities Corp Registered Shares o.N.', 9, 2),
(98, 'US98419M1009', 'A1JMBU', 'Xylem Inc. Registered Shares DL -,01', 5, 8),
(99, 'US3535141028', '877518', 'Franklin Electric Co. Inc. Registered Shares DL -,10', 5, 8),
(100, 'US6806652052', '851936', 'Olin Corp. Registered Shares DL 1', 5, 2),
(101, 'US6988131024', '896795', 'Papa Johns Intl Inc. Registered Shares DL -,01', 5, 9),
(102, 'US3703341046', '853862', 'General Mills Inc. Registered Shares DL -,10', 5, 9),
(103, 'US4581401001', '855681', 'Intel Corp. Registered Shares DL -,001', 5, 8),
(104, 'US02209S1033', '200417', 'Altria Group Inc. Registered Shares DL -,333', 5, 9),
(105, 'US5017971046', 'A1T7NF', 'L Brands Inc. Registered Shares DL -,50', 5, 16),
(106, 'US7512121010', 'A1JD3A', 'Ralph Lauren Corp. Reg. Shares Class A DL -,01', 5, 16),
(107, 'SE0000106270', '872318', 'H & M Hennes & Mauritz AB Namn-Aktier B SK 0,125', 30, 16),
(108, 'FR0000121014', '853292', 'LVMH Moët Henn. L. Vuitton SE Actions Port. (C.R.) EO 0,3', 4, 16),
(109, 'DE000A1PHFF7', 'A1PHFF', 'HUGO BOSS AG Namens-Aktien o.N.', 1, 16),
(110, 'US8865471085', '872811', 'Tiffany & Co. Registered Shares DL -,01', 5, 16),
(111, 'IT0003874101', 'A0NDNB', 'Prada S.p.A. Azioni nom. EO 1', 2, 16),
(112, 'US4016171054', '902204', 'Guess ? Inc. Registered Shares DL -,01', 5, 16),
(113, 'US1184401065', '884929', 'Buckle Inc. Registered Shares DL-,01', 5, 16),
(114, 'US3647601083', '863533', 'Gap Inc. Registered Shares DL -,05', 5, 16),
(115, 'US22160K1051', '888351', 'Costco Wholesale Corp. Registered Shares DL -,005', 5, 10),
(116, 'US6092071058', 'A1J4U0', 'Mondelez International Inc. Registered Shares Class A o.N.', 5, 9),
(117, 'US8718291078', '859121', 'Sysco Corp. Registered Shares DL 1', 5, 9),
(118, 'US87612E1064', '856243', 'Target Corp. Registered Shares DL -,0833', 5, 9),
(119, 'GB0007980591', '850517', 'BP PLC Registered Shares DL -,25', 6, 13),
(120, 'GB00B03MLX29', 'A0D94M', 'Royal Dutch Shell Reg. Shares Class A EO -,07', 6, 13),
(121, 'US9314271084', 'A12HJF', 'Walgreens Boots Alliance Inc. Reg. Shares DL -,01', 5, 6),
(122, 'US38526M1062', 'A0Q8E2', 'Grand Canyon Education Inc. Registered Shares o.N.', 5, 17),
(123, 'GB0030587504', '677485', 'HBOS', 6, 6);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `anleih`
--

CREATE TABLE `anleih` (
  `Anleih_ID` int(32) NOT NULL,
  `ISIN` varchar(32) NOT NULL,
  `WKN` varchar(16) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Land` int(32) NOT NULL,
  `EndJahr` varchar(16) NOT NULL,
  `Kupon` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `anleih`
--

INSERT INTO `anleih` (`Anleih_ID`, `ISIN`, `WKN`, `Name`, `Land`, `EndJahr`, `Kupon`) VALUES
(1, 'US025816AZ26', 'A0TS12', 'American Express', 5, '19.3.2038', '8.150'),
(2, 'US025816AU39', 'A0GWHV', 'American Express', 5, '1.9.2066', '6.800'),
(3, 'DE000A1RE1Q3', 'A1RE1Q', 'Allianz', 1, '17.10.2042', '5.625'),
(4, 'DE000A2DAHN6', 'A2DAHN', 'Allianz', 1, '6.7.2047', '3.099'),
(5, 'XS0177600920', '909459', 'Zurich Insurance', 3, '31.12.9999', '6.625'),
(6, 'CA12644MAA68', 'A1GJY9', 'CSS Insurance', 3, '31.7.2042', '6.915'),
(7, 'AT0000285473', 'A0GGCR', 'Raiffeisen Bank', 3, '28.9.2035', '4.5'),
(8, 'AT0000284955', 'A0AW8E', 'Raiffeisen Bank', 3, '26.6.2033', '5.75'),
(9, 'CH0236733827', ' UB99U5 ', 'UBS Bank', 3, '12.2.2026', '4.75'),
(10, 'CH0244100266', 'UB99VF', 'UBS Bank', 3, '15.5.2024', '5.125'),
(11, 'US36160UB519', 'A1ZY83', 'Goldman Sachs', 5, '16.11.2021', '2.9'),
(12, 'US38148PP843', 'A191US', 'Goldman Sachs', 5, '5.6.2020', '3.2'),
(13, 'US06050TJZ66', 'A0G0VX', 'Bank of America', 5, '15.10.2036', '6'),
(14, 'XS1752997426', 'A193FX', 'JPMorgan Chase', 5, '20.2.2048', '3.5'),
(15, 'XS0643733404', 'A1G24C', 'JPMorgan Chase', 5, '17.5.2041', '9.5'),
(16, 'XS1451213372', 'A1V4AT', 'JPMorgan Chase', 5, '14.3.2037', '5'),
(17, 'US191216AF75', '126751', 'Coca-Cola', 5, '29.7.2093', '7.375'),
(18, 'ARARGE03G712', 'A0VTZ3', 'Argentinien', 10, '31.12.2038', '10.76478'),
(19, 'US040114HN39', 'A190E8', 'Argentinien', 10, '28.6.2117', '7.125'),
(20, 'US549271AA22', 'A0DAEE', 'Berkshire Hathaway', 5, '15.6.2025', '7.25'),
(21, 'US549271AF19', 'A0DDKR', 'Berkshire Hatahway', 5, '1.10.2034', '6.5'),
(22, 'US084670BK32', 'A1HFXF', 'Berkshire Hatahway', 5, '11.2.2043', '4.5'),
(23, 'US037833DG20', 'A19R35', 'Apple', 5, '13.11.2047', '3.75'),
(24, 'US037833BX70', 'A18X83', 'Apple', 5, '23.2.2046', '4.65'),
(25, 'US594918CB81', 'A19CTT', 'Microsoft', 5, '6.2.2057', '4.5'),
(26, 'US594918AM64', 'A1GMCR', 'Microsoft', 5, '8.2.2041', '5.3'),
(27, 'US023135BK13', 'A19NAC', 'Amazon', 5, '22.8.2057', '4.25'),
(28, 'US023135BN51', 'A19UA4', 'Amazon', 5, '3.12.2025', '5.2'),
(29, 'US641062AN41', 'A2RR32', 'Nestlé', 3, '24.9.2048', '4'),
(30, 'US64110LAU08', 'A2R1KT', 'Netflix', 5, '15.11.2029', '5.375'),
(31, 'US64110LAR78', 'A2RTMZ', 'Netflix', 5, '15.5.2029', '6.375'),
(32, 'US02079KAB35', 'A18Z7Z', 'Alphabet', 5, '25.2.2024', '3.375'),
(33, 'US02079KAA51', 'A18Z7Y', 'Alphabet', 5, '19.5.2021', '3.625'),
(34, 'KR103503G899', 'A2RSQ2', 'Korea', 11, '10.9.2068', '2'),
(35, 'KR1035027WC3', 'A1AR32', 'Korea', 11, '10.12.2029', '5.5'),
(36, 'US900123CG37', 'A1ZDS6', 'Türkei', 12, '17.2.2045', '6.625'),
(37, 'TRT080328T15', 'A19YE2', 'Türkei', 12, '8.2.2028', '12.4'),
(38, 'PTOTEBOE0020', 'A1ZU1N', 'Potrugal', 13, '15.2.2045', '4.1'),
(39, 'PTOTEQOE0015', 'A1HKUP', 'Portugal', 13, '15.2.2024', '5.65'),
(40, 'ES00000128E2', 'A181RK', 'Spanien', 14, '30.7.2066', '3.45'),
(41, 'ES00000126D8', 'A1ZN7L', 'Spanien', 14, '31.10.2064', '4'),
(42, 'CA135087C939', 'A1ZHXN', 'Canada', 9, '1.12.2064', '2.75'),
(43, 'CA135087WV25', '354871', 'Canada', 9, '1.12.2031', '5.92672'),
(44, 'XS1218289103', 'A1ZZ0U', 'Mexico', 20, '15.3.2115', '4'),
(45, 'MX0MGO000102', 'A19ENN', 'Mexico', 20, '7.11.2047', '8'),
(46, 'MX0SGO0000E3', 'A1ZK0T', 'Mexico', 20, '8.11.2046', '24.788036'),
(47, 'MX0SGO000098', 'A1AZR9', 'Mexico', 20, '15.11.2040', '24.78836'),
(48, 'MX0SGO000023', 'A0LMQT', 'Mexico', 20, '22.11.2035', '27.8865405'),
(49, 'RU000A0JXU14', 'A19KJA', 'Russland', 15, '23.6.2047', '5.25'),
(50, 'RU000A0JV4N8', 'A18ZAP', 'Russland', 15, '5.5.2032', '10.5'),
(51, 'IN0020150077', 'A18WTM', 'Indien', 21, '26.10.2055', '7.72'),
(52, 'IN0020130079', 'A1ZDGC', 'Indien', 21, '23.12.2043', '9.23'),
(53, 'AU0000024044', 'A2RR3E', 'Australien', 19, '21.2.2050', '1.0155'),
(54, 'AU3TB0000135', 'A1GWKU', 'Australien', 19, '21.4.2027', '4.75'),
(55, 'JP1400111J52', 'A191TM', 'Japan', 17, '20.3.2058', '0.8'),
(56, 'JP1400041B55', 'A1GRTH', 'Japan', 17, '20.3.2051', '2.2'),
(57, 'US105756BY51', 'A1V1PE', 'Brasilien', 22, '21.2.2047', '5.625'),
(58, 'US105756AL40', '453122', 'Brasilien', 22, '6.3.2030', '12.25'),
(59, 'FR0013154028', 'A180CR', 'Frankreich', 4, '25.5.2066', '1.75'),
(60, 'FR0010870956', 'A1AUUV', 'Frankreich', 4, '25.4.2060', '4'),
(61, 'GB00BFMCN652', 'A1905D', 'England', 6, '22.10.2071', '1.625'),
(62, 'GB00B06YGN05', 'A0E5TB', 'England', 6, '7.12.2055', '4.25'),
(63, 'IT0005217390', 'A187GC', 'Italien', 2, '1.3.2067', '2.8'),
(64, 'XS0515753183', 'A1AX2L', 'Italien', 2, '11.6.2060', '4.85'),
(65, 'XS0292467775', 'A0N2TT', 'Griechenland', 16, '25.7.2057', '2.466263'),
(66, 'GR0138003695', 'A0VLH6', 'Griechenland', 16, '20.9.2037', '4.5'),
(67, 'DE0001108835', '110883', 'Deutschland', 1, '15.8.2048', '1.25'),
(68, ' DE0001135432', '113543', 'Deutschland', 1, '4.7.2042', '3.25'),
(69, 'US912810SH23', 'A2R1YM', 'USA', 5, '15.5.2049', '2.875'),
(70, 'US912810SE91', 'A2RT58', 'USA', 5, '15.11.2048', '3.375'),
(71, 'CH0224397148', 'A1ZYQG', 'Schweiz', 3, '25.6.2064', '2'),
(72, 'CH0009755197', '269202', 'Schweiz', 3, '6.1.2049', '4'),
(73, 'XS1916213017', 'A2RU0C', 'European Bank for Reconstruction and Development Anleihe', 10, '25.11.2020', '31'),
(74, 'XS1959968063', 'A2RYT2', 'European Bank for Reconstruction and Development Anleihe', 10, '1.3.2021', '31'),
(75, 'RU000A0ZYJT2', 'A2RXEX', 'LLC Mortgage Agent DOMRF Anleihe', 15, '28.4.2046', '11.5');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `etfs`
--

CREATE TABLE `etfs` (
  `ETF_ID` int(32) NOT NULL,
  `ISIN` varchar(32) NOT NULL,
  `Valorennumer` varchar(16) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Land` int(32) NOT NULL,
  `Sparte` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `etfs`
--

INSERT INTO `etfs` (`ETF_ID`, `ISIN`, `Valorennumer`, `Name`, `Land`, `Sparte`) VALUES
(1, 'DE000A1C9KL8', '-', 'HSBC MSCI World UCITS ETF USD', 1, 1),
(2, 'DE0005933956', '1174969', 'iShares EURO STOXX 50 UCITS ETF (DE)', 1, 1),
(4, 'DE000A0H08R2', '12980951', 'iShares STOXX\r\nEurope 600 Telecommunications UCITS ETF (DE)', 1, 1),
(5, 'DE000A0H08H3', '12980579', 'iShares STOXX\r\nEurope 600 Food & Beverage UCITS ETF (DE)', 1, 2),
(6, 'DE000A0H08M3', '12980919', 'iShares STOXX\r\nEurope 600 Oil & Gas UCITS ETF (DE)', 1, 2),
(7, 'FR0007056841', '1239077', 'Lyxor Dow\r\nJones Industrial Average UCITS ETF D-EUR', 4, 1),
(8, 'IE0032077012', '1527010', 'Invesco\r\nNASDAQ-100 UCITS ETF', 7, 1),
(9, 'IE00B5BMR087', '10737041', 'iShares Core\r\nS&P 500 UCITS ETF (Acc)', 7, 1),
(10, 'IE0031442068', '1396252', 'iShares Core\r\nS&P 500 UCITS ETF USD (Dist)', 7, 1),
(11, 'IE00B0M63953', '2308782', 'iShares MSCI\r\nEastern Europe Capped UCITS ETF', 7, 1),
(12, 'IE00B27YCK28', '3477137', 'iShares MSCI\r\nEM Latin America UCITS ETF (Dist)', 7, 1),
(13, 'IE00B14X4M10', '2585425', 'iShares MSCI\r\nNorth America UCITS ETF', 7, 1),
(14, 'IE00B0M62Q58', '2308773', 'iShares MSCI\r\nWorld UCITS ETF (Dist)', 7, 1),
(15, 'IE00B2QWCY14', '4218327', 'iShares\r\nS&P SmallCap 600 UCITS ETF', 7, 1),
(16, 'IE00B67B7N93', '12295266', 'PIMCO US\r\nDollar Short Maturity Source UCITS ETF A', 7, 1),
(17, 'IE00BDR55B48', 'A2H5CC', 'UBS ETF (IE)\r\nMSCI ACWI Socially Responsible UCITS ETF (hedged to GBP) A-dis', 7, 1),
(22, 'IE00B3XXRP09', '18575508', 'Vanguard\r\nS&P 500 UCITS ETF', 7, 1),
(23, 'IE00BCHWNW54', '38111394', 'Xtrackers\r\nMSCI USA Health Care Index UCITS ETF 1D', 7, 1),
(24, 'IE00B3F81R35', '10012767', 'iShares Core\r\nEuro Corporate Bond UCITS ETF (Dist)', 7, 3),
(26, 'IE00BCRY6557', '22592993', 'iShares Euro\r\nUltrashort Bond UCITS ETF', 7, 3),
(27, 'IE00BDQYWQ65', '35398779', 'iShares ICE\r\nTIPS 0-5 UCITS ETF', 7, 3),
(28, 'IE00B7LW6Y90', '18570307', 'iShares\r\nItaly Government Bond UCITS ETF EUR (Dist)', 7, 3),
(29, 'IE00B14X4S71', '2585461', 'iShares USD\r\nTreasury Bond 1-3yr UCITS ETF (Dist)', 7, 3),
(30, 'IE00B1FZS798', '2803820', 'iShares USD\r\nTreasury Bond 7-10yr UCITS ETF (Dist)', 7, 3),
(32, 'IE00B6YX5D40', '13976063', 'SPDR S&P\r\nUS Dividend Aristocrats UCITS ETF', 7, 5),
(36, 'IE00B1XNHC34', '3246465', 'iShares\r\nGlobal Clean Energy UCITS ETF', 7, 2),
(37, 'IE00BGQYRQ28', '38111581', 'Xtrackers\r\nMSCI USA Consumer Staples Index UCITS ETF 1D', 7, 2),
(38, 'LU0378438732', '4561632', 'ComStage DAX\r\nTR UCITS ETF', 8, 1),
(39, 'LU0378434079', '4561435', 'ComStage EURO\r\nSTOXX 50 NR UCITS ETF', 8, 1),
(40, 'LU1104574725', '25308000', 'ComStage\r\nMSCI Italy TRN UCITS ETF', 8, 1),
(41, 'LU0392494562', '4878086', 'ComStage MSCI\r\nWorld TRN UCITS ETF', 8, 1),
(42, 'LU0480132876', '10920548', 'UBS ETF (LU)\r\nMSCI Emerging Markets UCITS ETF (USD) A-dis', 8, 1),
(43, 'LU0274211217', '2825565', 'Xtrackers\r\nEURO STOXX 50 UCITS ETF 1D', 8, 1),
(44, 'LU0274221281', '2825604', 'Xtrackers Swiss\r\nLarge Cap UCITS ETF 1D', 8, 1),
(45, 'LU0879397742', '20557004', 'UBS ETF (LU)\r\nSBI Foreign AAA-BBB 1-5 UCITS ETF (CHF) A-dis', 8, 3),
(46, 'LU0468896575', '10935337', 'Xtrackers\r\nGermany Government Bond UCITS ETF 1D', 8, 3),
(47, 'LU0378437684', '4561617', 'ComStage\r\nCommerzbank EONIA Index TR UCITS ETF', 8, 5),
(48, 'LU0321464652', '3481945', 'Xtrackers\r\nSterling Cash UCITS ETF 1D', 8, 5),
(49, 'LU0419741177', '10239604', 'ComStage\r\nCommerzbank Commodity ex-Agriculture EW Index TR UCITS ETF', 8, 2),
(50, 'CH0237935652', '23793565', 'iShares Core\r\nSPI (CH)', 3, 1),
(51, 'CH0008899764', '889976', 'iShares SMI\r\n(CH)', 3, 1),
(52, 'CH0237935637', '23793563', 'iShares Swiss\r\nDividend (CH)', 3, 1),
(53, 'CH0226274212', '22627421', 'UBS ETF (CH)\r\nMSCI Switzerland hedged to USD (USD) A-dis', 3, 1),
(54, 'CH0017142719', '1714271', 'UBS ETF (CH) SMI\r\n(CHF) A-dis', 3, 1),
(55, 'CH0226976816', '22697681', 'iShares Core\r\nCHF Corporate Bond (CH)', 3, 3),
(56, 'CH0183136065', '18313606', 'ZKB\r\nPalladium ETF A (CHF)', 3, 5),
(57, 'CH0106027193', '10602719', 'UBS ETF (CH)\r\nGold (USD) A-dis', 3, 2),
(58, 'IE00B6R52259', '14137311', 'iShares MSCI\r\nACWI UCITS ETF (Acc)', 7, 1),
(59, 'IE00B44Z5B48', '12930745', 'SPDR MSCI\r\nACWI UCITS ETF', 7, 1),
(61, 'IE00BGHQ0G80', '23470971', 'Xtrackers\r\nMSCI AC World Index UCITS ETF 1C', 7, 1),
(63, 'IE00B3YLTY66', '12931413', 'SPDR MSCI\r\nACWI IMI UCITS ETF', 7, 1),
(64, 'PSEUDO042710', '42710', 'BLOOMBERG\r\nCOMMODITY INDEX 3 MONTH FORWARD TOTAL RETURN', 5, 2),
(65, 'DE000SLA34K2', 'SLA34K', 'Solactive GBS\r\nNorth America Large & Mid Cap USD Index NTR', 1, 1),
(66, 'DE000SLA34H8', 'SLA34H', 'Solactive GBS\r\nNorth America Large & Mid Cap USD Index PR', 1, 1),
(67, 'DE000SLA34J4', 'SLA34J', 'Solactive GBS\r\nNorth America Large & Mid Cap USD Index TR', 1, 1),
(68, 'DE000SLA4FZ1', 'SLA4FZ', 'Solactive GBS\r\nDeveloped Markets Europe Large & Mid Cap USD Index TR', 1, 1),
(69, 'DE000SLA4FY4', 'SLA4FY', 'Solactive GBS\r\nDeveloped Markets Europe Large & Mid Cap USD Index PR', 1, 1),
(70, 'DE000SLA4F04', 'SLA4F0', 'Solactive GBS\r\nDeveloped Markets Europe Large & Mid Cap USD Index NTR', 1, 1),
(71, 'DE000SLA4GE4', 'SLA4GE', 'Solactive GBS\r\nDeveloped Markets Europe Large & Mid Cap EUR Index TR', 1, 1),
(72, 'DE000SLA4GD6', 'SLA4GD', 'Solactive GBS\r\nDeveloped Markets Europe Large & Mid Cap EUR Index PR', 1, 1),
(73, 'DE000SLA4GF1', 'SLA4GF', 'Solactive GBS\r\nDeveloped Markets Europe Large & Mid Cap EUR Index NTR', 1, 1),
(74, 'DE000SLA3546', 'SLA354', 'Solactive GBS\r\nDeveloped Markets Pacific Large & Mid Cap USD Index NTR', 1, 1),
(75, 'DE000SLA3520', 'SLA352', 'Solactive GBS\r\nDeveloped Markets Pacific Large & Mid Cap USD Index PR', 1, 1),
(76, 'DE000SLA3538', 'SLA353', 'Solactive GBS\r\nDeveloped Markets Pacific Large & Mid Cap USD Index TR', 1, 1),
(77, 'DE000SLA5AU0', 'SLA5AU', 'Solactive\r\nEmerging Markets Large Cap USD Index GTR', 1, 1),
(78, 'DE000SLA5AS4', 'SLA5AS', 'Solactive Emerging\r\nMarkets Large Cap USD Index NTR', 1, 1),
(79, 'DE000SLA5AR6', 'SLA5AR', 'Solactive\r\nEmerging Markets Large Cap USD Index PR', 1, 1),
(80, 'DE000SLA44D6', 'SLA44D', 'Solactive\r\nEurozone Government Bond Index TR', 1, 3),
(81, 'IE00B2NPKV68', 'A0NECU', 'iShares J.P. Morgan\r\nUSD Emerging Markets Bond UCITS ETF (Dist)', 7, 1),
(90, 'IE00B00FV128', '1828018', 'iShares FTSE\r\n250 UCITS ETF', 7, 1),
(105, 'LU1107559459', '25381755', 'UBS ETF\r\n(LU) FTSE 100 UCITS ETF (GBP) A-Ukdis', 8, 1),
(106, 'LU0136242590', '1272999', 'UBS ETF (LU)\r\nFTSE 100 UCITS ETF (GBP) A-dis', 8, 1),
(107, 'IE00BD5FCF91', '41253706', 'SPDR FTSE\r\nUK All Share UCITS ETF (Dist)', 7, 1),
(108, 'IE00B7452L46', '14969108', 'SPDR FTSE\r\nUK All Share UCITS ETF', 7, 1),
(109, 'IE00BYZ28W67', '38600293', 'iShares\r\nCore FTSE 100 UCITS ETF USD Hedged (Acc)', 7, 1),
(111, 'IE00B810Q511', '18575566', 'Vanguard\r\nFTSE 100 UCITS ETF', 7, 1),
(112, 'LU0292097234', '3067170', 'Xtrackers\r\nFTSE 100 UCITS ETF Income 1D', 8, 1),
(113, 'LU0488316216', '11058139', 'ComStage\r\nFTSE 100 TR UCITS ETF', 8, 1),
(114, 'IE00B53HP851', '10737489', 'iShares\r\nCore FTSE 100 UCITS ETF GBP (Acc)', 7, 1),
(115, 'IE0005042456', '1083749', 'iShares Core\r\nFTSE 100 UCITS ETF (Dist)', 7, 1),
(116, 'IE00B42TW061', '10477499', 'HSBC FTSE\r\n100 UCITS ETF GBP', 7, 1),
(117, 'DE000A1C0BC5', '-', 'HSBC FTSE 100 UCITS\r\nETF GBP', 1, 1),
(123, 'IE00BKX55T58', '25116456', 'Vanguard\r\nFTSE Developed World UCITS ETF', 7, 1),
(124, 'IE00BKX55R35', '25115468', 'Vanguard\r\nFTSE North America UCITS ETF', 7, 1),
(126, 'IE0004855221', '1179040', 'iShares\r\nFTSEurofirst 80 UCITS ETF', 7, 1),
(127, 'IE0030974079', '1315453', 'iShares\r\nFTSEurofirst 100 UCITS ETF', 7, 1),
(130, 'IE00B945VV12', '20973873', 'Vanguard\r\nFTSE Developed Europe UCITS ETF', 7, 1),
(131, 'IE00B1W57M07', '3067362', 'iShares BRIC\r\n50 UCITS ETF', 7, 1),
(134, 'IE00B3VVMM84', '18575472', 'Vanguard\r\nFTSE Emerging Markets UCITS ETF', 7, 1),
(135, 'IE00B9F5YL18', '20974082', 'Vanguard\r\nFTSE Developed Asia Pacific ex Japan UCITS ETF', 7, 1),
(137, 'LU0274212538', '2825593', 'Xtrackers\r\nFTSE MIB UCITS ETF 1D', 8, 1),
(138, 'IE00B95PGT31', '20974096', 'Vanguard\r\nFTSE Japan UCITS ETF', 7, 1),
(141, 'IE00BKX55Q28', '25116447', 'Vanguard\r\nFTSE 250 UCITS ETF', 7, 1),
(142, 'IE00B02KXK85', '1963428', 'iShares\r\nChina Large Cap UCITS ETF', 7, 1),
(143, 'IE00BZ0CYG46', '28977162', 'Xtrackers\r\nFTSE 100 Equal Weight UCITS ETF 1D', 7, 1),
(145, 'IE00B23D8S39', '3550169', 'Invesco FTSE\r\nRAFI US 1000 UCITS ETF', 7, 1),
(147, 'IE00B23D8X81', '3567444', 'Invesco FTSE\r\nRAFI Europe UCITS ETF', 7, 1),
(148, 'IE00B23D8Y98', '3595387', 'Invesco FTSE\r\nRAFI Europe Mid-small UCITS ETF', 7, 1),
(150, 'IE00B0M63060', '2308843', 'iShares UK\r\nDividend UCITS ETF', 7, 1),
(153, 'IE00B1FZS467', '2758574', 'iShares\r\nGlobal Infrastructure UCITS ETF', 7, 4),
(154, 'LU1633262487', '37357699', 'Lyxor FTSE\r\nDeveloped Europe Core Infrastructure Capped UCITS ETF', 8, 4),
(156, 'LU1287023342', '31879455', 'Lyxor\r\nEuroMTS Highest Rated Macro-Weighted Government Bond DR UCITS ETF C-EUR', 8, 4),
(157, 'LU1829219986', '42764647', 'Lyxor\r\nEuroMTS Highest Rated Macro-Weighted Government Bond 5-7 (DR) UCITS ETF Acc', 8, 3),
(158, 'LU1829219713', '42764642', 'Lyxor\r\nEuroMTS Highest Rated Macro-Weighted Government Bond 3-5 (DR) UCITS ETF Acc', 8, 3),
(159, 'LU1829219556', '42764639', 'Lyxor\r\nEuroMTS Highest Rated Macro-Weighted Government Bond 1-3 (DR) UCITS ETF Acc', 8, 3),
(160, 'LU1650490474', '37749386', 'Lyxor\r\nEuroMTS All-Maturity Investment Grade (DR) UCITS ETF', 8, 1),
(162, 'LU1287023003', '31879097', 'Lyxor\r\nEuroMTS 5-7Y Investment Grade (DR) UCITS ETF C-EUR', 8, 1),
(163, 'LU1650488494', '37749203', 'Lyxor\r\nEuroMTS 3-5Y Investment Grade (DR) UCITS ETF', 8, 1),
(166, 'LU1650487413', '37749198', 'Lyxor\r\nEuroMTS 1-3Y Investment Grade (DR) UCITS ETF', 8, 1),
(167, 'LU1681046774', '38785045', 'Amundi\r\nGovernment Bond Lowest Rated EuroMTS Investment Grade UCITS ETF - EUR ©', 8, 1),
(168, 'LU1681046345', '38785141', 'Amundi\r\nGovernment Bond Lowest Rated EuroMTS Investment grade 1-3 UCITS ETF - EUR ©', 8, 1),
(169, 'LU1681046261', '38785146', 'Amundi\r\nGovernment Bond EuroMTS Broad Investment Grade UCITS ETF - EUR ©', 8, 1),
(170, 'LU1681046857', '38785049', 'Amundi ETF\r\nGovernment Bond Lowest Rated EuroMTS Investment Grade UCITS ETF - EUR (D)', 8, 3),
(172, 'LU1650489385', '37749187', 'Lyxor\r\nEuroMTS 10-15Y Investment Grade (DR) UCITS ETF', 8, 1),
(173, 'LU1287023268', '31879365', 'Lyxor\r\nEuroMTS 15+Y Investment Grade (DR) UCITS ETF C-EUR', 8, 1),
(174, 'LU1287023185', '31879362', 'Lyxor\r\nEuroMTS 7-10Y Investment Grade (DR) C-EUR', 8, 1),
(175, 'LU1650491282', '37749401', 'Lyxor\r\nEuroMTS Inflation Linked Investment Grade (DR) UCITS ETF', 8, 1),
(176, 'IE00B1FZSB30', '2803931', 'iShares Core\r\nUK Gilts UCITS ETF', 7, 1),
(177, 'LU1812091517', '42746015', 'Lyxor FTSE\r\nEPRA/NAREIT United States UCITS ETF Dist (USD)', 8, 1),
(178, 'LU1832418856', '42746016', 'Lyxor FTSE\r\nEPRA/NAREIT United States UCITS ETF Dist (EUR)', 8, 1),
(179, 'IE00B1FZSF77', '2778490', 'iShares US\r\nProperty Yield UCITS ETF', 7, 4),
(180, 'IE00B1TXLS18', '3007836', 'iShares UK\r\nProperty UCITS ETF', 7, 4),
(181, 'IE00BGDPWV87', '44630941', 'iShares\r\nAsia Property Yield UCITS ETF USD (Acc)', 7, 4),
(182, 'IE00B1FZS244', '2758517', 'iShares Asia\r\nProperty Yield UCITS ETF', 7, 4),
(183, 'LU0950381748', '21959270', 'BNP Paribas\r\nEasy FTSE EPRA/NAREIT Eurozone Capped UCITS ETF', 8, 1),
(185, 'IE00B0M63284', '2308855', 'iShares\r\nEuropean Property Yield UCITS ETF', 7, 4),
(186, 'LU0489337690', '11115497', 'Xtrackers\r\nFTSE EPRA/NAREIT Developed Europe Real Estate UCITS ETF 1C', 8, 4),
(187, 'IE00BSJCQV56', '29091268', 'SPDR FTSE\r\nEPRA Europe ex UK Real Estate UCITS ETF', 7, 4),
(188, 'IE00B1FZS350', '2758588', 'iShares\r\nDeveloped Markets Property Yield UCITS ETF', 7, 4),
(189, 'LU1812091350', '42746009', 'Lyxor FTSE\r\nEPRA/NAREIT Global Developed UCITS ETF Dist (USD)', 7, 1),
(190, 'LU1832418773', '42746011', 'Lyxor FTSE\r\nEPRA/NAREIT Global Developed UCITS ETF Dist (EUR)', 8, 1),
(191, 'IE00B23LNQ02', '3595652', 'Invesco FTSE\r\nRAFI All World 3000 UCITS ETF', 7, 1),
(192, 'IE00BM67HJ62', '27146311', 'Xtrackers\r\nFTSE All-World ex UK UCITS ETF 1C', 7, 1),
(193, 'IE00B8GKDB10', '20974572', 'Vanguard\r\nFTSE All-World High Dividend Yield UCITS ETF', 7, 1),
(195, 'LU0677077884', '41606309', 'Xtrackers\r\nUSD Emerging Markets Bond UCITS ETF 2D', 8, 3),
(196, 'IE00B23D9570', '3567338', 'Invesco FTSE\r\nRAFI Emerging Markets UCITS ETF', 7, 1),
(197, 'IE00BYYXBF44', '32412787', 'Invesco\r\nFTSE EM High Dividend Low Volatility UCITS ETF', 7, 1),
(198, 'LU1598688189', '37680163', 'Lyxor MSCI\r\nEMU Growth (DR) UCITS ETF D-EUR', 8, 1),
(199, 'IE00BKM4H197', '24365457', 'iShares MSCI\r\nEmerging Markets Consumer Growth UCITS ETF USD (Acc)', 7, 1),
(200, 'IE00B0M62V02', '2308814', 'iShares EURO\r\nTotal Market Growth Large UCITS ETF', 7, 1),
(201, 'IE00BYM11H29', '28650087', 'UBS ETF\r\n(IE) MSCI ACWI SF UCITS ETF (USD) A-acc', 7, 1),
(202, 'IE00BJXFZ989', '47127930', 'UBS ETFs\r\nplc ? MSCI ACWI SF UCITS ETF (USD) A-Ukdis', 7, 1),
(203, 'IE00B3RBWM25', '18575459', 'Vanguard\r\nFTSE All-World UCITS ETF', 7, 1),
(204, 'IE00BYXVGX24', '36095061', 'Fidelity US\r\nQuality Income UCITS ETF', 7, 1),
(205, 'IE00BYXVGY31', '36095063', 'Fidelity US\r\nQuality Income UCITS ETF (Acc)', 7, 1),
(206, 'IE00BYV1Y969', '38049386', 'Fidelity US\r\nQuality Income UCITS ETF Acc (EUR Hedged)', 7, 1),
(207, 'IE00BYV03C98', '38049380', 'Fidelity US\r\nQuality Income UCITS ETF GBP Hedged (Acc)', 7, 1),
(208, 'IE00BP3QZB59', '25546005', 'iShares Edge\r\nMSCI World Value Factor UCITS ETF', 7, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `immobilien`
--

CREATE TABLE `immobilien` (
  `id` int(32) NOT NULL,
  `Land` int(32) NOT NULL,
  `Ort` varchar(512) NOT NULL,
  `Preis` bigint(64) UNSIGNED NOT NULL,
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
(6, 5, '1089 Hwy 71 S Ashdown, Arkansas 71822 ', 1250000, 1997, 33.595346, -94.059017),
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
(22, 5, '218 Shell Beach DriveLake Charles, Louisiana 70601', 5250000, 2014, 30.217131, -93.236572),
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
(51, 5, '15 AURIEMMA CTLanding, New Jersey 07850', 5000000, 2009, 40.918444, -74.65284),
(52, 5, '5225 E Hwy 41Paso Robles, Kalifornien 93446', 5000000, 2001, 35.62664, -120.691),
(53, 5, '31 Netherfield WayThe Woodlands, Texa 77382', 4954000, 2006, 30.2106, -95.5257),
(54, 5, '2339 20th Avenue SE, Tuttle, North Dakota 58488', 1100000, 2016, 47.073981, -100.072856),
(55, 5, '1728 Union Hill Road, Ennis, Texa 75119', 1250000, 2006, 32.3321, -96.6224),
(56, 5, '709 EASTLAWN DR CELEBRATION, Florida 34747', 2475000, 2002, 28.3130363, -81.5459143);

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

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `reits`
--

CREATE TABLE `reits` (
  `REITs_ID` int(32) NOT NULL,
  `ISIN` varchar(32) NOT NULL,
  `WKN` varchar(16) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Land` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `reits`
--

INSERT INTO `reits` (`REITs_ID`, `ISIN`, `WKN`, `Name`, `Land`) VALUES
(1, 'US92936U1097', 'A1J5SB', 'W.P. Carey Inc. Registered Shares DL -,01', 5),
(2, 'US0357104092', '909823', 'Annaly Capital Management Inc. Registered Shares DL -,01', 5),
(3, 'US84860W3007', 'A2PAJV', 'Spirit Realty Capital Inc. Registered Shares DL -,05', 5),
(4, 'FR0000989923', 'A0JLFP', 'Oddo BHF Immobilier - DR EUR DIS', 4),
(5, 'DE0009763276', '976327', 'Ve-RI Listed Real Estate R', 1),
(6, 'US46284V1017', 'A14MS9', 'Iron Mountain Inc. Registered Shares DL -,01', 5),
(7, 'US6819361006', '890454', 'Omega Healthcare Invest. Inc. Registered Shares DL -,10', 5),
(8, 'US92276F1003', '878380', 'Ventas Inc. Registered Shares DL -,25', 5),
(9, 'US7561091049', '899744', 'Realty Income Corp. Registered Shares DL 1', 5),
(10, 'US85254J1025', 'A1C8BH', 'STAG Industrial Inc. Registered Shares DL -,01', 5),
(11, 'US49446R1095', '883111', 'Kimco Realty Corp. Registered Shares DL -,01', 5),
(12, 'US8754651060', '886676', 'Tanger Fact.Outlet Centrs Inc. Registered Shares DL -,01', 5),
(13, 'US95040Q1040', 'A1409D', 'Welltower Inc. Registered Shares DL 1', 5),
(14, 'US40414L1098', 'A0M2ZX', 'HCP Inc. Registered Shares DL 1', 5),
(15, 'US5021751020', '884625', 'LTC Properties Inc. Registered Shares DL -,01', 5),
(16, 'US26884U1097', 'A1J78V', 'EPR Properties Registered Shares DL -,01', 5),
(17, 'US09627J1025', 'A11027', 'Bluerock Resident. Growth REIT Registered Shares A o.N.', 5),
(18, 'US03784Y2000', 'A14VYT', 'Apple Hospitality REIT Inc. Registered Shares o.N.', 5),
(19, 'US00123Q1040', 'A2AR58', 'AGNC Investment Corp. Registered Shares DL -,001', 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sparte`
--

CREATE TABLE `sparte` (
  `Sparten_ID` int(32) NOT NULL,
  `Sparte` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `sparte`
--

INSERT INTO `sparte` (`Sparten_ID`, `Sparte`) VALUES
(1, 'Aktien'),
(3, 'Anleih'),
(6, 'Bank'),
(7, 'Diverses'),
(12, 'Entertainment'),
(14, 'Fahrzeuge'),
(16, 'Fashion'),
(9, 'Food'),
(4, 'Immobilien'),
(13, 'Industrie'),
(11, 'Invest'),
(8, 'IT'),
(15, 'Logistik'),
(2, 'Rohstoff'),
(10, 'Sales'),
(5, 'Währung'),
(17, 'Wissenvermittlung');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `aktien`
--
ALTER TABLE `aktien`
  ADD PRIMARY KEY (`Aktien_ID`),
  ADD UNIQUE KEY `ISIN` (`ISIN`),
  ADD KEY `FK_aktien_sparte` (`Sparte`),
  ADD KEY `FK_aktien_land` (`Land`);

--
-- Indizes für die Tabelle `anleih`
--
ALTER TABLE `anleih`
  ADD PRIMARY KEY (`Anleih_ID`),
  ADD UNIQUE KEY `ISIN` (`ISIN`),
  ADD KEY `FK_anleih_land` (`Land`);

--
-- Indizes für die Tabelle `etfs`
--
ALTER TABLE `etfs`
  ADD PRIMARY KEY (`ETF_ID`),
  ADD UNIQUE KEY `ISIN` (`ISIN`),
  ADD KEY `FK_etf_sparte` (`Sparte`),
  ADD KEY `FK_etf_land` (`Land`);

--
-- Indizes für die Tabelle `immobilien`
--
ALTER TABLE `immobilien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Ort` (`Ort`),
  ADD KEY `FK_immobilien_land` (`Land`);

--
-- Indizes für die Tabelle `land`
--
ALTER TABLE `land`
  ADD PRIMARY KEY (`LandID`),
  ADD UNIQUE KEY `Landname` (`Landname`);

--
-- Indizes für die Tabelle `reits`
--
ALTER TABLE `reits`
  ADD PRIMARY KEY (`REITs_ID`),
  ADD UNIQUE KEY `ISIN` (`ISIN`),
  ADD KEY `FK_REITs_land` (`Land`);

--
-- Indizes für die Tabelle `sparte`
--
ALTER TABLE `sparte`
  ADD PRIMARY KEY (`Sparten_ID`),
  ADD UNIQUE KEY `Sparte` (`Sparte`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `aktien`
--
ALTER TABLE `aktien`
  MODIFY `Aktien_ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500;

--
-- AUTO_INCREMENT für Tabelle `anleih`
--
ALTER TABLE `anleih`
  MODIFY `Anleih_ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500;

--
-- AUTO_INCREMENT für Tabelle `etfs`
--
ALTER TABLE `etfs`
  MODIFY `ETF_ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500;

--
-- AUTO_INCREMENT für Tabelle `immobilien`
--
ALTER TABLE `immobilien`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500;

--
-- AUTO_INCREMENT für Tabelle `reits`
--
ALTER TABLE `reits`
  MODIFY `REITs_ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=500;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `aktien`
--
ALTER TABLE `aktien`
  ADD CONSTRAINT `FK_aktien_land` FOREIGN KEY (`Land`) REFERENCES `land` (`LandID`),
  ADD CONSTRAINT `FK_aktien_sparte` FOREIGN KEY (`Sparte`) REFERENCES `sparte` (`Sparten_ID`);

--
-- Constraints der Tabelle `anleih`
--
ALTER TABLE `anleih`
  ADD CONSTRAINT `FK_anleih_land` FOREIGN KEY (`Land`) REFERENCES `land` (`LandID`);

--
-- Constraints der Tabelle `etfs`
--
ALTER TABLE `etfs`
  ADD CONSTRAINT `FK_etf_land` FOREIGN KEY (`Land`) REFERENCES `land` (`LandID`),
  ADD CONSTRAINT `FK_etf_sparte` FOREIGN KEY (`Sparte`) REFERENCES `sparte` (`Sparten_ID`);

--
-- Constraints der Tabelle `immobilien`
--
ALTER TABLE `immobilien`
  ADD CONSTRAINT `FK_immobilien_land` FOREIGN KEY (`Land`) REFERENCES `land` (`LandID`);

--
-- Constraints der Tabelle `reits`
--
ALTER TABLE `reits`
  ADD CONSTRAINT `FK_REITs_land` FOREIGN KEY (`Land`) REFERENCES `land` (`LandID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
