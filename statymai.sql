-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 02:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `statymai`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankai`
--

CREATE TABLE `bankai` (
  `saskNr` int(11) NOT NULL,
  `kodas` varchar(255) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL,
  `miesto_filialas` varchar(255) NOT NULL,
  `adresas` varchar(255) NOT NULL,
  `telefonas` int(11) NOT NULL,
  `e_pastas` varchar(255) NOT NULL,
  `fk_saskaita` int(11) NOT NULL,
  `fk_ISMOKA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bankai`
--

INSERT INTO `bankai` (`saskNr`, `kodas`, `pavadinimas`, `miesto_filialas`, `adresas`, `telefonas`, `e_pastas`, `fk_saskaita`, `fk_ISMOKA`) VALUES
(431245678, 'UKBALT22', 'Ukio ', 'Siauliai', 'Kauno g. 32', 86124534, 'ukio@bank.lt', 396072356, 4),
(1214567890, 'HABALT22', 'Swedbank', 'Vilnius', 'Kauno g. 12', 86413278, 'swed@bank.lt', 396072379, 7),
(1234564890, 'CITBALT22', 'Citadele', 'Utena', 'Vilniaus g. 37', 864512345, 'cit@bank.lt', 396072364, 5),
(1234566890, 'DABALT22', 'Danske', 'Vilnius', 'Kauno g. 97', 864123456, 'danske@bank.lt', 476072334, 9),
(1234567890, 'HABALT22', 'Swedbank', 'Kaunas', 'Vilniaus g. 12', 86666666, 'swed@bank.lt', 396072334, 1),
(1234568890, 'SEBALT22', 'SEB', 'Siauliai', 'Vilniaus g. 14', 864512347, 'seb@bank.lt', 396072380, 8),
(1234587890, 'SEBALT22', 'SEB', 'Vilnius', 'Kauno g. 12', 86464664, 'seb@bank.lt', 396072345, 2),
(1236547890, 'DABALT22', 'Danske', 'Klaipeda', 'Uosto g. 14', 864612345, 'danske@bank.lt', 396072346, 3),
(1239567890, 'SIAUBALT22', 'Siauliu', 'Siauliai', 'Banko g. 13', 864567823, 'siauliu@bank.lt', 396072378, 6);

-- --------------------------------------------------------

--
-- Table structure for table `darbuotojai`
--

CREATE TABLE `darbuotojai` (
  `id` int(11) NOT NULL,
  `vardas` varchar(255) NOT NULL,
  `pavarde` varchar(255) NOT NULL,
  `telefonas` int(11) NOT NULL,
  `e_pastas` varchar(255) NOT NULL,
  `fk_LAZYBU_BENDROVE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `darbuotojai`
--

INSERT INTO `darbuotojai` (`id`, `vardas`, `pavarde`, `telefonas`, `e_pastas`, `fk_LAZYBU_BENDROVE`) VALUES
(1, 'Vaclovas', 'Vaclovaitis', 864123457, 'vaclovas@topsport.lt', 1),
(2, 'Petras', 'Petraitis', 863245678, 'petras@betsafe.lt', 2),
(3, 'Jonas', 'Jonaitis', 862513456, 'jonas@cbet.lt', 3),
(4, 'Antanas', 'Antanaitis', 869712456, 'antanas@unibet.lt', 4),
(5, 'Kazys', 'Kazaitis', 861237892, 'kazys@olybet.lt', 5),
(6, 'Giedrius', 'Gintautas', 861234576, 'giedrius@topsport.lt', 1),
(7, 'Povilas', 'Strazdas', 865546781, 'povilas@betsafe.lt', 2),
(8, 'Algis', 'Greitai', 861234567, 'algis@cbet.lt', 3),
(9, 'Rimas', 'Letai', 869876543, 'rimas@unibet.lt', 4),
(10, 'Jonas', 'Vileisis', 868545612, 'jonas@olybet.lt', 5),
(11, 'Antanas', 'Voruta', 864124678, 'voruta@topsport.lt', 1),
(12, 'Kazimieras', 'Petraitis', 864124634, 'petraitis@betsafe.lt', 2),
(13, 'Haroldas', 'Vaickus', 861234576, 'vaickus@cbet.lt', 3),
(14, 'Bronius', 'Vaicaitis', 864532178, 'vaicaitis@unibet.lt', 4),
(15, 'Nojus', 'Grudas', 865213456, 'grudas@olybet.lt', 5),
(16, 'Marius', 'Petrauskas', 864579321, 'petrauskas@beteasy.lt', 6),
(17, 'Antanas', 'Kavaliauskas', 86523478, 'kavaliauskas@bet365.lt', 7),
(18, 'Paulius', 'Jankunas', 866645781, 'jankunas@sportsbet.lt', 8),
(19, 'Antanas', 'Milaknis', 862345123, 'milaknis@madbookie.lt', 9),
(20, 'Edgaras', 'Ulanovas', 865428791, 'ulanovas@ladbrokes.lt', 10),
(21, 'Tomas', 'Tomaitis', 865412378, 'tomaitis@betstar.lt', 11),
(22, 'Robertas', 'Robaitis', 867832145, 'robaitis@neds.lt', 12),
(23, 'Valius', 'Valaitis', 864124781, 'valaitis@palmerbet.lt', 13),
(24, 'Gailius', 'Vailius', 862314567, 'vailius@beteasy.lt', 6),
(25, 'Dalius', 'Dalaitis', 864124685, 'dalaitis@bet365.lt', 7),
(26, 'Bronius', 'Bronaitis', 864124634, 'bronaitis@sportsbet.lt', 8),
(27, 'Kazys', 'Ablomaitis', 864124698, 'ablomaitis@madbookie.lt', 9),
(28, 'Lukas', 'Lukaitis', 865473157, 'lukaitis@ladbrokes.lt', 10),
(29, 'Rokas', 'Rokaitis', 865473124, 'rokaitis@betstar.lt', 11),
(30, 'Zenonas', 'Zenonaitis', 865473164, 'zenonaitis@neds.lt', 12),
(31, 'Paulius', 'Paulaitis', 865473197, 'paulaitis@palmerbet.lt', 13),
(32, 'Erikas', 'Erikaitis', 865473156, 'erikaitis@bet365.lt', 7),
(33, 'Tadas', 'Tadaitis', 865473175, 'tadaitis@bet365.lt', 7),
(34, 'Karolis', 'Karolaitis', 865473132, 'karolaitis@sportsbet.lt', 8),
(35, 'Almantas', 'Almaitis', 865473157, 'almaitis@madbookie.lt', 9),
(36, 'Azuolas', 'Azuolaitis', 865473186, 'azuolaitis@ladbrokes.lt', 10),
(37, 'Jeronimas', 'Milius', 865473178, 'milius@betstar.lt', 11),
(38, 'Ceslovas', 'Jursenas', 865473761, 'jursenas@neds.lt', 12),
(39, 'Algirdas Mykolas', 'Brazauskas', 865475978, 'brazauskas@palmerbet.lt', 13);

-- --------------------------------------------------------

--
-- Table structure for table `individualios_sporto_sakos`
--

CREATE TABLE `individualios_sporto_sakos` (
  `id_` int(11) NOT NULL,
  `name` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `individualios_sporto_sakos`
--

INSERT INTO `individualios_sporto_sakos` (`id_`, `name`) VALUES
(1, 'lauko_tenisas'),
(2, 'boksas'),
(3, 'golfas'),
(4, 'plaukimas'),
(5, 'stalo_tenisas'),
(6, 'biatlonas');

-- --------------------------------------------------------

--
-- Table structure for table `ismokos`
--

CREATE TABLE `ismokos` (
  `id` int(11) NOT NULL,
  `suma` float DEFAULT NULL,
  `data` int(11) NOT NULL,
  `laikas` float NOT NULL,
  `fk_STATYMAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ismokos`
--

INSERT INTO `ismokos` (`id`, `suma`, `data`, `laikas`, `fk_STATYMAS`) VALUES
(1, 24, 20190114, 13, 1),
(2, 0, 20180113, 17, 2),
(3, 0, 20190117, 12, 3),
(4, 0, 20170113, 13, 4),
(5, 0, 20180213, 15, 5),
(6, 0, 201901303, 17, 6),
(7, 3546, 20180613, 16, 7),
(8, 0, 20120113, 13, 8),
(9, 100, 20180513, 12, 9),
(10, 0, 20190305, 12, 10),
(11, 0, 20090301, 17, 11),
(12, NULL, 20190224, 14, 12),
(13, NULL, 20180313, 11, 13),
(14, 178, 20120113, 12, 14),
(15, 87, 20190213, 13, 15),
(16, NULL, 20180222, 16, 16),
(17, NULL, 20120713, 13, 17),
(18, 1387, 20180813, 12, 18);

-- --------------------------------------------------------

--
-- Table structure for table `klientai`
--

CREATE TABLE `klientai` (
  `asmens_kodas` int(11) NOT NULL,
  `vardas` varchar(255) NOT NULL,
  `pavarde` varchar(255) NOT NULL,
  `lytis` varchar(255) NOT NULL,
  `gimimo_metai` int(11) NOT NULL,
  `adresas` varchar(255) NOT NULL,
  `telefonas` int(11) NOT NULL,
  `e_pastas` varchar(255) NOT NULL,
  `fk_DARBUOTOJAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klientai`
--

INSERT INTO `klientai` (`asmens_kodas`, `vardas`, `pavarde`, `lytis`, `gimimo_metai`, `adresas`, `telefonas`, `e_pastas`, `fk_DARBUOTOJAS`) VALUES
(31877746, 'Darius', 'Daraitis', 'Vyras', 19780509, 'Telsiai, Telsiu g. 54', 861271345, 'daraitis@gmail.com', 34),
(41211122, 'Ugne', 'Ugnaite', 'Moteris', 19920201, 'Vilnius, Kauno g. 56', 8662331, 'ugnaite@gmail.com', 19),
(41553832, 'Dalia', 'Dalaite', 'Moteris', 19910212, 'Kaunas, Vilniaus g. 7', 86698378, 'dalaite@gmail.com', 18),
(310945846, 'Vytautas', 'Vytautaitis', 'Vyras', 19720504, 'Anyksciai, Puntuko g. 57', 861274135, 'vytautaitis@gmail.com', 39),
(318001846, 'Petras', 'Kazuotis', 'Vyras', 19560809, 'Jonava, Vilniaus g. 12', 864571237, 'kazuotis@gmail.com', 36),
(318300546, 'Dalius', 'Petronaitis', 'Vyras', 19890504, 'Vilnius, Kauno g. 54', 866231467, 'petronaitis@gmail.com', 38),
(318311144, 'Jonas', 'Halaitis', 'Vyras', 19540604, 'Kaunas, Vilniaus g. 54', 864512783, 'halaitis@gmail.com', 31),
(318337084, 'Jonas', 'Fantaitis', 'Vyras', 19910504, 'Kaunas, Savanoriu pr. 127', 86614278, 'fantaitis@gmail.com', 35),
(318345006, 'Linas', 'Linaitis', 'Vyras', 19920506, 'Lazdijai, Lazdiju g. 12', 866781345, 'linaitis@gmail.com', 37),
(318355196, 'Haroldas', 'Vaickus', 'Vyras', 19780523, 'Plunge, Plunges g. 45', 865412391, 'vaickush@gmail.com', 33),
(318557844, 'Karolis', 'Kandis', 'Vyras', 19910506, 'Kaunas, Kauno g. 54', 861245783, 'kandis@gmail.com', 30),
(318885846, 'Antanas', 'Milaknis', 'Vyras', 19910504, 'Kaunas, Vilniaus g. 56', 86123378, 'milaknis@gmail.com', 29),
(333337846, 'Tomas', 'Janaitis', 'Vyras', 19920508, 'Siauliai, Vilniaus g. 54', 861245783, 'janaitis@gmail.com', 32),
(396072334, 'Vacys', 'Doleris', 'Vyras', 19950430, 'Vilnius, sukimosi g. 64', 861245798, 'vacys@pinigai.lt', 2),
(396072345, 'Jonas', 'Valanciunas', 'Vyras', 19920312, 'Utena, Krepsinio g.45', 866632145, 'jonas@valanciunas.lt', 1),
(396072346, 'Kazys', 'Vileisis', 'Vyras', 19840623, 'Siauliai, Utenos g. 56', 862231456, 'vileisis@kazys.lt', 7),
(396072356, 'Rasa', 'Geguzyte', 'Moteris', 19950407, 'Kaunas, Vilniaus g. 63', 865614236, 'rasa@gmail.com', 5),
(396072364, 'Mante', 'Petrauskaite', 'Moteris', 19940631, 'Vilnius, Kauno g. 25', 86612345, 'mante@gmail.com', 6),
(396072378, 'Antanas', 'Kazlaitis', 'Vyras', 19890512, 'Siauliai, Petraicio g. 15', 864145786, 'antanas@gmail.com', 3),
(396072379, 'Kazys', 'Vacaitis', 'Vyras', 19791231, 'Klaipeda, Uosto g. 13', 86612347, 'kazys@gmail.com', 4),
(396072380, 'Joana', 'Grazioji', 'Moteris', 19690223, 'Vilnius, Mados g. 187', 86632145, 'joana@gmail.com', 8),
(412256632, 'Brone', 'Bronaite', 'Moteris', 19370503, 'Kaunas, Vilniaus g. 56', 86612737, 'bronaite@gmail.com', 23),
(412456846, 'Paulina', 'Paulaite', 'Moteris', 19650508, 'Kaunas, Vilniaus g. 65', 8612345, 'paulaite@gmail.com', 25),
(412522222, 'Mante', 'Mantitaite', 'Moteris', 19650507, 'Klaipeda, Vilniaus g. 67', 866126247, 'mantitaite@gmail.com', 21),
(412543214, 'Antanina', 'Antaite', 'Moteris', 19231223, 'Kaunas, Vilniaus g. 56', 86123454, 'antaite@gmail.com', 14),
(412547772, 'Joana', 'Jonaite', 'Moteris', 19560523, 'Klaipeda, Vilniaus g. 56', 86456664, 'jonaite@gmail.com', 15),
(412547832, 'Paulius', 'Motiejunas', 'Vyras', 19840623, 'Kaunas, Vilniaus g. 45', 86123432, 'paulius@motiejunas.lt', 11),
(412633532, 'Giedre', 'Giedraite', 'Moteris', 19920314, 'Klaipeda, Vilniaus g. 56', 86612745, 'giedraite@gmail.com', 13),
(412736446, 'Lina', 'Linaite', 'Moteris', 19920504, 'Siauliai, Kauno g. 45', 86612379, 'linaite@gmail.com', 24),
(412745846, 'Karolina', 'Fajaite', 'Moteris', 19910504, 'Kaunas, Vilniaus g. 54', 8662245, 'fajaite@gmail.com', 28),
(412773323, 'Sima', 'Simaite', 'Moteris', 19780201, 'Vilnius, Kauno g. 2', 866247813, 'simaite@gmail.com', 22),
(412897832, 'Monika', 'Monikaite', 'Moteris', 19450623, 'Vilnius, Kauno g. 54', 86123456, 'monikaite@gmail.com', 12),
(414466832, 'Greta', 'Gretaite', 'Moteris', 19910523, 'Klaipeda, Vilniaus g. 56', 86612777, 'gretaite@gmail.com', 17),
(416479832, 'Freda', 'Fredaite', 'Moteris', 19780623, 'Jonava, Vilniaus g. 56', 864512378, 'fredaite@gmail.com', 16),
(418345846, 'Zita', 'Zitaite', 'Moteris', 19780504, 'Vilnius, Kauno g. 35', 86612687, 'zitaite@gmail.com', 27),
(418637846, 'Irma', 'Zalaite', 'Moteris', 19940506, 'Kaunas, Vilniaus g. 98', 86464245, 'zalaite@gmail.com', 26),
(425467832, 'Inga', 'Ingaite', 'Moteris', 19930605, 'Kaunas, Kauno g. 3', 866645798, 'ingaite@gmail.com', 20),
(476072334, 'Jonas', 'Antanaitis', 'Vyras', 19600513, 'Kaunas, Vilniaus g. 457', 866145723, 'antanaitis@gmail.com', 10),
(496072334, 'Brigita', 'Brigaite', 'Moteris', 19601231, 'Kaunas, Kauno g. 15', 86123456, 'brigita@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `komandines_sporto_sakos`
--

CREATE TABLE `komandines_sporto_sakos` (
  `id_` int(11) NOT NULL,
  `name` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komandines_sporto_sakos`
--

INSERT INTO `komandines_sporto_sakos` (`id_`, `name`) VALUES
(1, 'krepsinis'),
(2, 'futbolas'),
(3, 'beisbolas'),
(4, 'regbis'),
(5, 'ledo_Ritulys'),
(6, 'kriketas'),
(7, 'rankinis'),
(8, 'tinklinis');

-- --------------------------------------------------------

--
-- Table structure for table `lazybu_bendroves`
--

CREATE TABLE `lazybu_bendroves` (
  `pavadinimas` varchar(255) NOT NULL,
  `miesto_filialas` varchar(255) NOT NULL,
  `adresas` varchar(255) NOT NULL,
  `telefonas` int(11) NOT NULL,
  `e_pastas` varchar(255) NOT NULL,
  `id_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lazybu_bendroves`
--

INSERT INTO `lazybu_bendroves` (`pavadinimas`, `miesto_filialas`, `adresas`, `telefonas`, `e_pastas`, `id_`) VALUES
('TopSports', 'Kaunas', 'Kauno g. 134', 86666666, 'top@sport.lt', 1),
('BETSAFE', 'Vilnius', 'Gedimino g. 54', 866666566, 'bet@safe.lt', 2),
('CBET', 'Kaunas', 'Savanoriu pr. 157', 866666665, 'c@bet.lt', 3),
('UniBET', 'Siauliai', 'Vilniaus g. 64', 866412345, 'uni@bet.lt', 4),
('OlyBet', 'Klaipeda', 'Uosto g. 31', 866414785, 'oly@bet.lt', 5),
('BetEasy', 'Kaunas', 'Vilniaus g. 45', 866412345, 'bet@easy.lt', 6),
('bet365', 'Vilnius', 'Aguonu g. 145', 86612745, 'bet@365.lt', 7),
('sportsBet', 'Vilnius', 'Kauno g. 48', 86612378, 'sports@bet.lt', 8),
('madBookie', 'Siauliai', 'Kryziu kalnas', 86624567, 'mad@bookie.lt', 9),
('ladBrokes', 'Panevezys', 'Kauno g. 45', 864124657, 'lad@brokes.lt', 10),
('betStar', 'Klaipeda', 'Uosto g. 31', 86612645, 'bet@star.lt', 11),
('neds', 'Kaunas', 'Vilniaus g. 45', 86612364, 'ne@ds.lt', 12),
('palmerBet', 'Kaunas', 'Kauno g. 45', 86612389, 'palmer@bet.lt', 13),
('Bet', 'Kaunas', 'Kauno g. 32', 824123742, 'bet@com.com', 15);

-- --------------------------------------------------------

--
-- Table structure for table `mokejimai`
--

CREATE TABLE `mokejimai` (
  `klientoID` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `laikas` float NOT NULL,
  `suma` float NOT NULL,
  `fk_klientas` int(11) NOT NULL,
  `fk_SASKAITA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mokejimai`
--

INSERT INTO `mokejimai` (`klientoID`, `data`, `laikas`, `suma`, `fk_klientas`, `fk_SASKAITA`) VALUES
(1, 20190123, 12, 64, 1234564890, 1),
(2, 20180113, 14, 25, 1234566890, 2),
(3, 20170113, 15, 343, 1236547890, 3),
(4, 20180303, 18, 1345, 1214567890, 4),
(5, 20120113, 12, 123, 1234567890, 5),
(6, 20130113, 17, 8, 1234587890, 6),
(7, 20180114, 16, 88, 1234568890, 7),
(8, 20120131, 13, 77, 1239567890, 8),
(9, 20180413, 12, 1337, 431245678, 9),
(10, 20190304, 7, 65, 1234564890, 1),
(11, 20180113, 21, 15, 1234566890, 2),
(12, 200604313, 2, 247, 1239567890, 12),
(13, 20140114, 9, 124, 1234568890, 13),
(14, 20150306, 1, 127, 431245678, 14),
(15, 20090804, 9, 157, 1234567890, 15),
(16, 20190224, 4, 278, 1236547890, 16);

-- --------------------------------------------------------

--
-- Table structure for table `saskaitos`
--

CREATE TABLE `saskaitos` (
  `id` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `laikas` float NOT NULL,
  `suma` float NOT NULL,
  `fk_STATYMAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saskaitos`
--

INSERT INTO `saskaitos` (`id`, `data`, `laikas`, `suma`, `fk_STATYMAS`) VALUES
(1, 20190113, 17, 99, 1),
(2, 20190114, 15, 13, 2),
(3, 20190224, 12, 343, 3),
(4, 20190313, 11, 1345, 4),
(5, 20190113, 12, 123, 5),
(6, 20190213, 24, 8, 6),
(7, 20180114, 10, 88, 7),
(8, 20120113, 14, 77, 8),
(9, 20180413, 12, 1337, 9),
(10, 20190306, 12, 279, 10),
(11, 20160304, 13, 279, 11),
(12, 20190305, 6, 247, 12),
(13, 20060313, 12, 124, 13),
(14, 20070313, 5, 189, 14),
(15, 20050313, 17, 189, 15),
(16, 20010313, 18, 246, 16),
(20, 2019, 12, 1337, 21);

-- --------------------------------------------------------

--
-- Table structure for table `sporto_sakos`
--

CREATE TABLE `sporto_sakos` (
  `komandine` int(11) DEFAULT NULL,
  `individuali` int(11) DEFAULT NULL,
  `id_` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sporto_sakos`
--

INSERT INTO `sporto_sakos` (`komandine`, `individuali`, `id_`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 1, 7),
(8, 5, 8),
(1, 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `statymai`
--

CREATE TABLE `statymai` (
  `nr` int(11) NOT NULL,
  `statymo_data` varchar(255) NOT NULL,
  `laikas` float NOT NULL,
  `suma` float NOT NULL,
  `sporto_sakos_tipas` varchar(255) DEFAULT NULL,
  `koeficientas` float NOT NULL,
  `kiekis` int(11) NOT NULL,
  `busena` int(11) DEFAULT NULL,
  `fk_KLIENTAS` int(11) NOT NULL,
  `fk_SPORTO_SAKA` int(11) NOT NULL,
  `fk_DARBUOTOJAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statymai`
--

INSERT INTO `statymai` (`nr`, `statymo_data`, `laikas`, `suma`, `sporto_sakos_tipas`, `koeficientas`, `kiekis`, `busena`, `fk_KLIENTAS`, `fk_SPORTO_SAKA`, `fk_DARBUOTOJAS`) VALUES
(1, '20190113', 20, 25, '1', 2, 3, 4, 396072334, 1, 1),
(2, '20190114', 12, 99, '2', 1.2, 9, 4, 396072345, 2, 2),
(3, '20190224', 13, 45.5, '3', 2.5, 6, 2, 396072346, 3, 3),
(4, '20190303', 20, 1337, '4', 8.8, 7, 4, 396072356, 4, 4),
(5, '20170113', 17, 177, '5', 7, 8, 1, 396072364, 5, 5),
(6, '20190213', 24, 24, '6', 1.1, 15, 1, 396072378, 6, 6),
(7, '20180114', 9, 364, '7', 5.5, 1, 3, 396072379, 7, 7),
(8, '20120113', 15, 354.5, '8', 2.2, 2, 1, 396072380, 8, 8),
(9, '20180413', 21, 88, '9', 1.3, 2, 2, 476072334, 9, 9),
(10, '20190304', 12, 54, '1', 1.5, 6, 4, 412522222, 1, 39),
(11, '20180304', 9, 776, '2', 5, 5, 1, 412897832, 2, 8),
(12, '20190302', 7, 45, '3', 7, 9, 1, 418637846, 3, 35),
(13, '20090304', 6, 75, '4', 10, 4, 4, 41211122, 4, 29),
(14, '20010504', 5, 55, '6', 1.1, 1, 1, 412256632, 5, 17),
(15, '20190405', 13, 15, '7', 2.2, 2, 3, 418345846, 6, 11),
(16, '20160304', 4, 11, '8', 1.1, 4, 2, 412543214, 7, 4),
(17, '20140304', 11, 1560, '9', 3.3, 1, 3, 318557844, 8, 20),
(18, '20100304', 18, 20, '1', 5.1, 3, 2, 412736446, 9, 36),
(19, '20160404', 3, 33, '1', 5, 7, 4, 412633532, 1, 26),
(20, '20140304', 13, 172, '2', 2.2, 1, 3, 412745846, 2, 14),
(21, '20170304', 12, 131, '5', 1.5, 2, 1, 318355196, 3, 38);

-- --------------------------------------------------------

--
-- Table structure for table `statymo__busenos`
--

CREATE TABLE `statymo__busenos` (
  `id_` int(11) NOT NULL,
  `name` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statymo__busenos`
--

INSERT INTO `statymo__busenos` (`id_`, `name`) VALUES
(1, 'uzsakyta'),
(2, 'patvirtina'),
(3, 'nutraukta'),
(4, 'uzbaigta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankai`
--
ALTER TABLE `bankai`
  ADD PRIMARY KEY (`saskNr`),
  ADD KEY `turi` (`fk_saskaita`),
  ADD KEY `mokama` (`fk_ISMOKA`);

--
-- Indexes for table `darbuotojai`
--
ALTER TABLE `darbuotojai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dirba` (`fk_LAZYBU_BENDROVE`);

--
-- Indexes for table `individualios_sporto_sakos`
--
ALTER TABLE `individualios_sporto_sakos`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `ismokos`
--
ALTER TABLE `ismokos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sudaro` (`fk_STATYMAS`);

--
-- Indexes for table `klientai`
--
ALTER TABLE `klientai`
  ADD PRIMARY KEY (`asmens_kodas`),
  ADD KEY `aptarnauja` (`fk_DARBUOTOJAS`);

--
-- Indexes for table `komandines_sporto_sakos`
--
ALTER TABLE `komandines_sporto_sakos`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `lazybu_bendroves`
--
ALTER TABLE `lazybu_bendroves`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `mokejimai`
--
ALTER TABLE `mokejimai`
  ADD PRIMARY KEY (`klientoID`),
  ADD KEY `perveda` (`fk_klientas`),
  ADD KEY `sumoka` (`fk_SASKAITA`);

--
-- Indexes for table `saskaitos`
--
ALTER TABLE `saskaitos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suformuota` (`fk_STATYMAS`);

--
-- Indexes for table `sporto_sakos`
--
ALTER TABLE `sporto_sakos`
  ADD PRIMARY KEY (`id_`),
  ADD KEY `komandine` (`komandine`),
  ADD KEY `individuali` (`individuali`);

--
-- Indexes for table `statymai`
--
ALTER TABLE `statymai`
  ADD PRIMARY KEY (`nr`),
  ADD UNIQUE KEY `fk_KLIENTAS` (`fk_KLIENTAS`),
  ADD KEY `busena` (`busena`),
  ADD KEY `ieina` (`fk_SPORTO_SAKA`),
  ADD KEY `patvirtina` (`fk_DARBUOTOJAS`);

--
-- Indexes for table `statymo__busenos`
--
ALTER TABLE `statymo__busenos`
  ADD PRIMARY KEY (`id_`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bankai`
--
ALTER TABLE `bankai`
  ADD CONSTRAINT `mokama` FOREIGN KEY (`fk_ISMOKA`) REFERENCES `ismokos` (`id`),
  ADD CONSTRAINT `turi` FOREIGN KEY (`fk_saskaita`) REFERENCES `klientai` (`asmens_kodas`);

--
-- Constraints for table `darbuotojai`
--
ALTER TABLE `darbuotojai`
  ADD CONSTRAINT `dirba` FOREIGN KEY (`fk_LAZYBU_BENDROVE`) REFERENCES `lazybu_bendroves` (`id_`);

--
-- Constraints for table `ismokos`
--
ALTER TABLE `ismokos`
  ADD CONSTRAINT `sudaro` FOREIGN KEY (`fk_STATYMAS`) REFERENCES `statymai` (`nr`);

--
-- Constraints for table `klientai`
--
ALTER TABLE `klientai`
  ADD CONSTRAINT `aptarnauja` FOREIGN KEY (`fk_DARBUOTOJAS`) REFERENCES `darbuotojai` (`id`);

--
-- Constraints for table `mokejimai`
--
ALTER TABLE `mokejimai`
  ADD CONSTRAINT `perveda` FOREIGN KEY (`fk_klientas`) REFERENCES `bankai` (`saskNr`),
  ADD CONSTRAINT `sumoka` FOREIGN KEY (`fk_SASKAITA`) REFERENCES `saskaitos` (`id`);

--
-- Constraints for table `saskaitos`
--
ALTER TABLE `saskaitos`
  ADD CONSTRAINT `suformuota` FOREIGN KEY (`fk_STATYMAS`) REFERENCES `statymai` (`nr`);

--
-- Constraints for table `sporto_sakos`
--
ALTER TABLE `sporto_sakos`
  ADD CONSTRAINT `sporto_sakos_ibfk_1` FOREIGN KEY (`komandine`) REFERENCES `komandines_sporto_sakos` (`id_`),
  ADD CONSTRAINT `sporto_sakos_ibfk_2` FOREIGN KEY (`individuali`) REFERENCES `individualios_sporto_sakos` (`id_`);

--
-- Constraints for table `statymai`
--
ALTER TABLE `statymai`
  ADD CONSTRAINT `ieina` FOREIGN KEY (`fk_SPORTO_SAKA`) REFERENCES `sporto_sakos` (`id_`),
  ADD CONSTRAINT `pasirenka` FOREIGN KEY (`fk_KLIENTAS`) REFERENCES `klientai` (`asmens_kodas`),
  ADD CONSTRAINT `patvirtina` FOREIGN KEY (`fk_DARBUOTOJAS`) REFERENCES `darbuotojai` (`id`),
  ADD CONSTRAINT `statymai_ibfk_1` FOREIGN KEY (`busena`) REFERENCES `statymo__busenos` (`id_`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
