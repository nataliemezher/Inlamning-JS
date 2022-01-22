-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 22 jan 2022 kl 21:00
-- Serverversion: 5.7.24
-- PHP-version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `projektsept`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `blogposts`
--

CREATE TABLE `blogposts` (
  `postid` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(40) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `description` varchar(250) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `visible` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `blogposts`
--

INSERT INTO `blogposts` (`postid`, `image`, `title`, `userid`, `description`, `time`, `visible`) VALUES
(1, 'Natalie/plantsPrayer.jpg', 'Prayer plants', 1, 'Cool text about plants', '2022-01-22 20:54:29', 1),
(2, 'Natalie/plantsEp&sci.jpg', 'Plants this', 1, 'Plants that', '2022-01-22 20:58:38', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(55) NOT NULL,
  `message` varchar(455) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellstruktur `user`
--

CREATE TABLE `user` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'Natalie', 'natalie@live.se', '$2y$10$JsaLlB5qtXTMKuV8C/TRAeTp4zpE4FYXC8/CdeWmC9Spg2Rt8zO4G'),
(2, 'Mikko', 'mikko@live.se', '$2y$10$m.w4tvxFHColsK8CoJjISOBcDdvXaFsS0kGLwAp9Os/r6/o5c1wWq');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `blogposts`
--
ALTER TABLE `blogposts`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `userid` (`userid`);

--
-- Index för tabell `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `blogposts`
--
ALTER TABLE `blogposts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT för tabell `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT för tabell `user`
--
ALTER TABLE `user`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `blogposts`
--
ALTER TABLE `blogposts`
  ADD CONSTRAINT `blogposts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
