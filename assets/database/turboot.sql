-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 okt 2022 om 22:56
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turboot`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(4, 'test', 'test@test.nl', 'tester', '$2y$10$AYPJItC9.4T3cCsk4CZ3WOjcpY/ZGNEEmo9C8xNdT3WerlGTRXYg2'),
(5, 'poeper', 'poep@poep.com', 'poeper', '$2y$10$ZzpUuJ9HH9E2kx7zcHGl8.M85uxWm3NMRpKubpt8vClDGPU8VpPaG'),
(6, 'henk', 'henky@henk.com', 'henkpaard', '$2y$10$lCzSuHkZx2.ehEnX1At00./fLTCWkcP2E9TrvOdMxm9jItHoVNTyS'),
(7, 'Thijs Herman', 'tc.herman@hotmail.com', 'Turboot', '$2y$10$cUULlIA/ws0IXXxymSrrn.mZdwPzKzaIJ4tv6w6M33sk3p.ApysFO'),
(8, 'Thijs Herman', 'tc.herman2002@gmail.com', 'Turfloop', '$2y$10$XGkO8i06J1rR9Ow2Vrmq1ercwQdrBWpURTNjx/SGPriv43QZUdlpq');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
