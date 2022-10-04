-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 03:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_crowdfundig`
--
CREATE DATABASE IF NOT EXISTS `bd_crowdfundig` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_crowdfundig`;

-- --------------------------------------------------------

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE `ciudad` (
  `id_ciudad` varchar(15) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `ciudad`, `id_pais`) VALUES
('Arg-1', 'Buenos Aires', 3),
('Bah-1', 'Nasu', 4),
('Bar-1', 'Bridgetown', 5),
('Belic-1', 'Belmopan', 6),
('Boli-1', 'La paz', 7),
('Bra-1', 'Brasilia', 8),
('Chi-1', 'Santiago', 9),
('Col-1', 'Bogota', 1),
('Cub-1', 'La Habana', 11),
('Ecu-1', 'Quito', 12),
('Gra-1', ' Andalucía', 14),
('Gua-1', 'Ciudad de Guatemala', 15),
('Guy-1', 'Guayaquil', 16),
('Hai-1', 'Puerto Príncipe', 17),
('Hon-1', 'Tegucigalpa', 18),
('Jai-1', 'Kingston', 19),
('Lucia-1', 'Castries', 25),
('Mex-1', 'Ciudad de México', 20),
('Nic-1', 'Managua', 21),
('Pan-1', 'Ciudad de Panamá', 22),
('Par-1', 'Asuncion', 23),
('Peru-', 'Lima', 24),
('Rica-1', 'San jose', 10),
('Sal-1', 'San Salvador', 13),
('Suri-1', 'Paramaribo', 26),
('uru-1', 'Montevideo', 27),
('Ven-1', 'Caracas', 2);

-- --------------------------------------------------------

--
-- Table structure for table `direccion`
--

DROP TABLE IF EXISTS `direccion`;
CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `barrio` varchar(11) NOT NULL,
  `casa` varchar(11) NOT NULL,
  `calle` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `direccion`
--

INSERT INTO `direccion` (`id_direccion`, `barrio`, `casa`, `calle`) VALUES
(1, 'bosa', 'roja', 'kr 1');

-- --------------------------------------------------------

--
-- Table structure for table `donacion`
--

DROP TABLE IF EXISTS `donacion`;
CREATE TABLE `donacion` (
  `id_donacion` int(11) NOT NULL,
  `monto` double NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organizacion`
--

DROP TABLE IF EXISTS `organizacion`;
CREATE TABLE `organizacion` (
  `id_organizacion` int(11) NOT NULL,
  `pagina_web` varchar(250) NOT NULL,
  `redes_sociales` int(150) NOT NULL,
  `telefono_contacto` varchar(10) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `nro_cuenta` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `pais` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pais`
--

INSERT INTO `pais` (`id_pais`, `pais`) VALUES
(1, 'Colombia'),
(2, 'Venezuela'),
(3, 'Argentina'),
(4, 'Bahamas'),
(5, 'Barbados'),
(6, 'Belice'),
(7, 'Bolivia'),
(8, 'Brasil'),
(9, 'Chile'),
(10, 'Costa Rica'),
(11, 'Cuba'),
(12, 'Ecuador'),
(13, 'El Salvador'),
(14, 'Granada'),
(15, 'Guatemala'),
(16, 'Guyana'),
(17, 'Haití'),
(18, 'Honduras'),
(19, 'Jamaica'),
(20, 'Mexico'),
(21, 'Nicaragua'),
(22, 'Panama'),
(23, 'Paraguay'),
(24, 'Peru'),
(25, 'Santa Lucia'),
(26, 'Surinam'),
(27, 'Uruguay');

-- --------------------------------------------------------

--
-- Table structure for table `proyecto`
--

DROP TABLE IF EXISTS `proyecto`;
CREATE TABLE `proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `camara_comercio` varchar(255) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `tiempo_ejecucion` date NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `fecha_final` date NOT NULL,
  `abstrac` varchar(150) NOT NULL,
  `indicador_impacto` varchar(80) NOT NULL,
  `monto_financiacion` double NOT NULL,
  `video` varchar(250) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `informacion_adicional` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `telefono`
--

DROP TABLE IF EXISTS `telefono`;
CREATE TABLE `telefono` (
  `id_telefono` int(11) NOT NULL,
  `id_usuario_telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipos_organizacion`
--

DROP TABLE IF EXISTS `tipos_organizacion`;
CREATE TABLE `tipos_organizacion` (
  `id_tipos` int(11) NOT NULL,
  `tipos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `id_ciudad` varchar(15) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `rol` int(11) NOT NULL,
  `id_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `primer_nombre`, `primer_apellido`, `correo`, `password`, `id_ciudad`, `id_pais`, `rol`, `id_direccion`) VALUES
(1, 'Daniel', 'Torres', 'daniel@gmail.com', '1234', 'Col-1', 1, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indexes for table `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indexes for table `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`id_donacion`),
  ADD KEY `id_usuario` (`id_usuario`,`id_proyecto`),
  ADD KEY `id_proyecto` (`id_proyecto`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indexes for table `organizacion`
--
ALTER TABLE `organizacion`
  ADD PRIMARY KEY (`id_organizacion`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indexes for table `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indexes for table `telefono`
--
ALTER TABLE `telefono`
  ADD KEY `id_usuario_telefono` (`id_usuario_telefono`);

--
-- Indexes for table `tipos_organizacion`
--
ALTER TABLE `tipos_organizacion`
  ADD PRIMARY KEY (`id_tipos`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_ciudad` (`id_ciudad`,`id_pais`,`id_direccion`),
  ADD KEY `id_direccion` (`id_direccion`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE CASCADE;

--
-- Constraints for table `donacion`
--
ALTER TABLE `donacion`
  ADD CONSTRAINT `donacion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `donacion_ibfk_2` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE CASCADE;

--
-- Constraints for table `organizacion`
--
ALTER TABLE `organizacion`
  ADD CONSTRAINT `organizacion_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipos_organizacion` (`id_tipos`) ON DELETE CASCADE;

--
-- Constraints for table `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `telefono_ibfk_1` FOREIGN KEY (`id_usuario_telefono`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_direccion`) REFERENCES `direccion` (`id_direccion`) ON DELETE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_4` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
