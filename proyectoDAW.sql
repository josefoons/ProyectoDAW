-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2019 at 06:59 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyectoDAW`
--

-- --------------------------------------------------------

--
-- Table structure for table `elo`
--

CREATE TABLE `elo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `nombreArchivo` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `elo`
--

INSERT INTO `elo` (`id`, `nombre`, `nombreArchivo`) VALUES
(8, 'Bronce 1', 'bronze_1'),
(7, 'Bronce 2', 'bronze_2'),
(6, 'Bronce 3', 'bronze_3'),
(5, 'Bronce 4', 'bronze_4'),
(27, 'Challenger', 'challenger_1'),
(24, 'Diamante 1', 'diamond_1'),
(23, 'Diamante 2', 'diamond_2'),
(22, 'Diamante 3', 'diamond_3'),
(21, 'Diamante 4', 'diamond_4'),
(16, 'Gold 1', 'gold_1'),
(15, 'Gold 2', 'gold_2'),
(14, 'Gold 3', 'gold_3'),
(13, 'Gold 4', 'gold_4'),
(26, 'GrandMaster', 'grandmaster_1'),
(4, 'Hierro 1', 'iron_1'),
(3, 'Hierro 2', 'iron_2'),
(2, 'Hierro 3', 'iron_3'),
(1, 'Hierro 4', 'iron_4'),
(25, 'Master', 'master_1'),
(20, 'Platino 1', 'platinum_1'),
(19, 'Platino 2', 'platinum_2'),
(18, 'Platino 3', 'platinum_3'),
(17, 'Platino 4', 'platinum_4'),
(12, 'Plata 1', 'silver_1'),
(11, 'Plata 2', 'silver_2'),
(10, 'Plata 3', 'silver_3'),
(9, 'Plata 4', 'silver_4');

-- --------------------------------------------------------

--
-- Table structure for table `idioma`
--

CREATE TABLE `idioma` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigoIdioma` char(5) NOT NULL,
  `nombreIdioma` varchar(64) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `idioma`
--

INSERT INTO `idioma` (`id`, `codigoIdioma`, `nombreIdioma`) VALUES
(5, 'DE', 'Aleman'),
(1, 'EN', 'Ingles'),
(2, 'ESP', 'Espanyol'),
(4, 'FR', 'Frances'),
(3, 'IT', 'Italiano'),
(6, 'KR', 'Coreano'),
(7, 'ZH', 'Chino');

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

CREATE TABLE `pais` (
  `id` int(5) NOT NULL,
  `codigoPais` char(10) NOT NULL DEFAULT '',
  `nombrePais` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pais`
--

INSERT INTO `pais` (`id`, `codigoPais`, `nombrePais`) VALUES
(7, 'CN', 'China'),
(5, 'DE', 'Alemania'),
(2, 'ES', 'Espanya'),
(4, 'FR', 'Francia'),
(1, 'GB', 'Reino Unido'),
(3, 'IT', 'Italia'),
(6, 'KR', 'Corea Sud');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(5) NOT NULL,
  `codigoRegion` char(8) NOT NULL DEFAULT '',
  `nombreRegion` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `codigoRegion`, `nombreRegion`) VALUES
(1, 'BR', 'Brasil'),
(12, 'CN', 'China'),
(2, 'EUNE', 'Europa Este'),
(3, 'EUW', 'Europa Oeste'),
(10, 'JP', 'Japon'),
(11, 'KR', 'Corea'),
(4, 'LAN', 'Latinoamerica Norte'),
(5, 'LAS', 'Latinoamerica Sur'),
(6, 'NA', 'America del Norte'),
(7, 'OCE', 'Oceania'),
(8, 'RU', 'Rusia'),
(13, 'SEA', 'Sudeste Asia'),
(9, 'TR', 'Turquia');

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `codigoRol` char(4) CHARACTER SET latin1 NOT NULL,
  `rolNombre` varchar(64) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rol`
--

INSERT INTO `rol` (`id`, `codigoRol`, `rolNombre`) VALUES
(4, 'ADC', 'AdCarry'),
(2, 'JUNG', 'Jungler'),
(3, 'MID', 'MidLaner'),
(5, 'SUPP', 'Support'),
(1, 'TOP', 'TopLaner');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nick` varchar(64) CHARACTER SET latin1 NOT NULL,
  `password` binary(16) NOT NULL,
  `mail` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pais` char(10) NOT NULL,
  `idioma` char(5) NOT NULL,
  `elo` varchar(64) NOT NULL,
  `rolPreferido` varchar(64) CHARACTER SET latin1 NOT NULL,
  `rolBuscado` varchar(64) CHARACTER SET latin1 NOT NULL,
  `region` char(8) NOT NULL,
  `mensaje` text CHARACTER SET latin1 NOT NULL,
  `rolWeb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nick`, `password`, `mail`, `pais`, `idioma`, `elo`, `rolPreferido`, `rolBuscado`, `region`, `mensaje`, `rolWeb`) VALUES
(1, 'straxy', 0x35bc8cec895861697a0243c1304c7789, 'admin@josefons.es', 'ES', 'ESP', 'grandmaster_1', 'TOP', 'JUNG', 'EUW', 'asdfadf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elo`
--
ALTER TABLE `elo`
  ADD PRIMARY KEY (`nombreArchivo`);

--
-- Indexes for table `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`codigoIdioma`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`codigoPais`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`codigoRegion`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`codigoRol`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region` (`region`),
  ADD KEY `pais` (`pais`),
  ADD KEY `idioma` (`idioma`),
  ADD KEY `rolBuscado` (`rolBuscado`),
  ADD KEY `rolPreferido` (`rolPreferido`),
  ADD KEY `elo` (`elo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `elo` FOREIGN KEY (`elo`) REFERENCES `elo` (`nombreArchivo`),
  ADD CONSTRAINT `idioma` FOREIGN KEY (`idioma`) REFERENCES `idioma` (`codigoIdioma`),
  ADD CONSTRAINT `pais` FOREIGN KEY (`pais`) REFERENCES `pais` (`codigoPais`),
  ADD CONSTRAINT `region` FOREIGN KEY (`region`) REFERENCES `region` (`codigoRegion`),
  ADD CONSTRAINT `rolBuscado` FOREIGN KEY (`rolBuscado`) REFERENCES `rol` (`codigoRol`),
  ADD CONSTRAINT `rolPreferido` FOREIGN KEY (`rolPreferido`) REFERENCES `rol` (`codigoRol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
