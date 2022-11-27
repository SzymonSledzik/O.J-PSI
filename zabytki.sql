-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Lis 2022, 00:58
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zabytki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `ID` int(11) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `nazwisko` varchar(255) NOT NULL,
  `komentarz` varchar(255) NOT NULL,
  `strona` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `komentarze`
--

INSERT INTO `komentarze` (`ID`, `imie`, `nazwisko`, `komentarz`, `strona`) VALUES
(26, 'asdas', 'asdasd', 'asdas', 'bramaportowa'),
(27, 'asdas', 'asdasd', 'asdas', 'bramaportowa'),
(28, 'asdas', 'asdasd', 'asdas', 'bramaportowa'),
(29, 'asdas', 'asdasd', 'asdas', 'bramaportowa'),
(30, 'asdas', 'asdasd', 'asdas', 'bramaportowa'),
(31, 'Oski', 'Boski', 'Chuj', 'bramaportowa'),
(32, 'Oski', 'Boski', 'Chuj', 'bramaportowa'),
(33, 'Oski', 'Boski', 'Chuj', 'bramaportowa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lista_zabytkow`
--

CREATE TABLE `lista_zabytkow` (
  `ID` int(11) NOT NULL,
  `Nazwa` varchar(255) NOT NULL,
  `Data_powstania` varchar(255) NOT NULL,
  `strona` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `lista_zabytkow`
--

INSERT INTO `lista_zabytkow` (`ID`, `Nazwa`, `Data_powstania`, `strona`) VALUES
(1, 'Brama portowa', 'Jakaś data', 'bramaportowa');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `lista_zabytkow`
--
ALTER TABLE `lista_zabytkow`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT dla tabeli `lista_zabytkow`
--
ALTER TABLE `lista_zabytkow`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
