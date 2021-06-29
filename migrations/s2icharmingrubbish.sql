-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 29, 2021 alle 22:38
-- Versione del server: 10.4.19-MariaDB
-- Versione PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s2icharmingrubbish`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `rounds`
--


CREATE TABLE `rounds` (
  `ID_ROUNDS` int(11) NOT NULL,
  `ROUND` varchar(40) NOT NULL,
  `COLOR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `rounds`
--

INSERT INTO `rounds` (`ID_ROUNDS`, `ROUND`, `COLOR`) VALUES
(1, 'Umido Differenzialo', '(Nero)'),
(2, 'Secco Multimateriale Differenziato', '(Giallo)'),
(3, 'Secco Indifferenziato', '(Rosso)');

-- --------------------------------------------------------

--
-- Struttura della tabella `sciacca`
--

CREATE TABLE `sciacca` (
  `ID` int(11) NOT NULL,
  `DAY` varchar(3) NOT NULL,
  `ROUND` int(9) DEFAULT NULL,
  `TimeStart` time DEFAULT NULL,
  `TimeEnd` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `sciacca`
--

INSERT INTO `sciacca` (`ID`, `DAY`, `ROUND`, `TimeStart`, `TimeEnd`) VALUES
(1, 'Mon', 1, '06:00:00', '07:30:00'),
(2, 'Tue', 2, '06:00:00', '07:30:00'),
(3, 'Wed', 1, '06:00:00', '07:30:00'),
(4, 'Thu', 3, '06:00:00', '07:30:00'),
(5, 'Fri', 2, '06:00:00', '07:30:00'),
(6, 'Sat', 1, '06:00:00', '07:30:00'),
(7, 'Sun', NULL, NULL, NULL),
(8, 'Mon', 3, '06:00:00', '07:30:00'),
(10, 'Mon', 3, '06:00:00', '07:30:00'),
(11, 'Tue', 3, '06:00:00', '07:30:00');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `rounds`
--
ALTER TABLE `rounds`
  ADD PRIMARY KEY (`ID_ROUNDS`);

--
-- Indici per le tabelle `sciacca`
--
ALTER TABLE `sciacca`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `rounds`
--
ALTER TABLE `rounds`
  MODIFY `ID_ROUNDS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `sciacca`
--
ALTER TABLE `sciacca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
