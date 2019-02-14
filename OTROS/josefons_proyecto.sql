-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2019 at 08:05 PM
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
-- Table structure for table `mensajesPrivados`
--

CREATE TABLE `mensajesPrivados` (
  `id` int(11) NOT NULL,
  `idEmisor` int(11) NOT NULL,
  `idReceptor` int(11) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mensajesPrivados`
--

INSERT INTO `mensajesPrivados` (`id`, `idEmisor`, `idReceptor`, `titulo`, `mensaje`, `fecha`) VALUES
(24, 8, 12, 'adfasf', 'adfasfd', '2019-02-05 17:35:02'),
(25, 8, 12, 'adfasf', 'adfasfd', '2019-02-05 17:35:14'),
(26, 11, 8, 'gvaf', 'asdfasfd', '2019-02-14 14:44:25');

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
-- Table structure for table `puntuacion`
--

CREATE TABLE `puntuacion` (
  `idPuntuacion` int(11) NOT NULL,
  `idPerfil` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `puntuacion` int(11) NOT NULL COMMENT '0 - NADA // 1 - LIKE // 2 - DISLIKE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puntuacion`
--

INSERT INTO `puntuacion` (`idPuntuacion`, `idPerfil`, `idUsuario`, `puntuacion`) VALUES
(2, 12, 8, 1),
(3, 10, 8, 1),
(4, 11, 8, 2),
(5, 13, 8, 1),
(6, 14, 8, 2),
(7, 14, 16, 1),
(8, 8, 16, 1),
(9, 12, 11, 1),
(10, 18, 8, 2),
(11, 16, 8, 1),
(13, 20, 8, 2),
(14, 17, 8, 2);

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
-- Table structure for table `reporte`
--

CREATE TABLE `reporte` (
  `idReporte` int(11) NOT NULL,
  `idUsuarioReportado` int(11) NOT NULL,
  `idUsuarioCreado` int(11) NOT NULL,
  `razon` varchar(64) NOT NULL,
  `comentario` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporte`
--

INSERT INTO `reporte` (`idReporte`, `idUsuarioReportado`, `idUsuarioCreado`, `razon`, `comentario`, `fecha`) VALUES
(8, 16, 8, 'trollDuoQ', 'CABRON', '2019-02-08 16:48:30'),
(9, 11, 8, 'trollDuoQ', 'sdagfzx', '2019-02-13 19:28:24');

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
  `password` char(64) NOT NULL,
  `mail` varchar(100) CHARACTER SET latin1 NOT NULL,
  `pais` char(10) NOT NULL,
  `idioma` char(5) NOT NULL,
  `elo` varchar(64) NOT NULL,
  `rolPreferido` varchar(64) CHARACTER SET latin1 NOT NULL,
  `rolBuscado` varchar(64) CHARACTER SET latin1 NOT NULL,
  `region` char(8) NOT NULL,
  `mensaje` text CHARACTER SET latin1 NOT NULL,
  `imgPerfil` varchar(16) DEFAULT NULL,
  `rolWeb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nick`, `password`, `mail`, `pais`, `idioma`, `elo`, `rolPreferido`, `rolBuscado`, `region`, `mensaje`, `imgPerfil`, `rolWeb`) VALUES
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@josefons.es', 'CN', 'DE', 'diamond_4', 'ADC', 'ADC', 'BR', 'pass: admin', '8_imgPerfil.jpg', 1),
(10, 'Straxy', 'f3b0c7503c0f48e689bef6be6882e01c', 'straxy@josefons.es', 'ES', 'ESP', 'challenger_1', 'SUPP', 'ADC', 'EUW', 'pass: Straxy111', '10_imgPerfil.jpg', 0),
(11, '7Rogue', 'e9974a62f6638820e2079173859c9ff3', 'prueba1@josefons.es', 'ES', 'ESP', 'bronze_3', 'MID', 'JUNG', 'EUW', 'pass: PruebaPrueba2', 'no_pic.jpg', 0),
(12, 'SGladiator', 'd6ca16872a9fce6cdea5d9b1d8ce8476', 'sgladiator@josefons.es', 'ES', 'ESP', 'gold_4', 'ADC', 'SUPP', 'EUW', 'pass: Passbasura1', 'no_pic.jpg', 0),
(13, 'Hide on bush', 'd6ca16872a9fce6cdea5d9b1d8ce8476', 'safasf@dsfai.com', 'KR', 'KR', 'diamond_1', 'MID', 'JUNG', 'KR', 'pass Passbasura1', 'no_pic.jpg', 0),
(14, 'sfasf', '6ffbeffcdee43e01aa7323b6593b061e', 'nosequefd@josefons.es', 'GB', 'EN', 'silver_2', 'TOP', 'TOP', 'BR', 'pass: ContraseÃ±aFalsa1', 'no_pic.jpg', 0),
(16, 'kjbdnfi', 'c0df3576cfb9d843f03cd52ac0d02052', 'ofna@gmail.com', 'GB', 'EN', 'iron_4', 'TOP', 'TOP', 'BR', 'pass: PassFalsa1', 'no_pic.jpg', 0),
(17, 'dafdsf', '30bf2e5a9a84427f09c1ec2358e38f2e', 'fans@josefons.es', 'GB', 'EN', 'iron_4', 'TOP', 'TOP', 'BR', 'pass: PatatasConQueso1', 'no_pic.jpg', 0),
(18, 'prueba23', 'f67b12b20866938a84507796fe1f22d6', 'fsaf@josefons.es', 'GB', 'EN', 'iron_4', 'TOP', 'TOP', 'BR', 'pass: PatatasSinQueso1', 'no_pic.jpg', 0),
(20, 'dnfasfo', '14ac218c41b454fe0fe5ccc6f191f2d9', 'fasdfasfaf@josefons.es', 'GB', 'EN', 'iron_4', 'TOP', 'TOP', 'BR', 'pass: OtroUsuarioMas1', 'no_pic.jpg', 0);

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
-- Indexes for table `mensajesPrivados`
--
ALTER TABLE `mensajesPrivados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idReceptor` (`idReceptor`),
  ADD KEY `idEmisor` (`idEmisor`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`codigoPais`);

--
-- Indexes for table `puntuacion`
--
ALTER TABLE `puntuacion`
  ADD PRIMARY KEY (`idPuntuacion`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPerfil` (`idPerfil`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`codigoRegion`);

--
-- Indexes for table `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`idReporte`),
  ADD KEY `idUsuarioReportado` (`idUsuarioReportado`),
  ADD KEY `idUsuarioCreador` (`idUsuarioCreado`);

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
-- AUTO_INCREMENT for table `mensajesPrivados`
--
ALTER TABLE `mensajesPrivados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `puntuacion`
--
ALTER TABLE `puntuacion`
  MODIFY `idPuntuacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `reporte`
--
ALTER TABLE `reporte`
  MODIFY `idReporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `mensajesPrivados`
--
ALTER TABLE `mensajesPrivados`
  ADD CONSTRAINT `idEmisor` FOREIGN KEY (`idEmisor`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `idReceptor` FOREIGN KEY (`idReceptor`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `puntuacion`
--
ALTER TABLE `puntuacion`
  ADD CONSTRAINT `idPerfil` FOREIGN KEY (`idPerfil`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Constraints for table `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `idUsuarioCreador` FOREIGN KEY (`idUsuarioCreado`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `idUsuarioReportado` FOREIGN KEY (`idUsuarioReportado`) REFERENCES `usuario` (`id`);

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
