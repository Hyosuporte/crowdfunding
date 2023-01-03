-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 06:48 AM
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
-- Database: `bd_crowdfunding`
--
DROP DATABASE IF EXISTS `bd_crowdfunding`;
CREATE DATABASE IF NOT EXISTS `bd_crowdfunding` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_crowdfunding`;

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
-- Table structure for table `donacion`
--

DROP TABLE IF EXISTS `donacion`;
CREATE TABLE `donacion` (
  `id_donacion` varchar(250) NOT NULL,
  `monto` double NOT NULL,
  `id_usuario` bigint(255) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `fecha_donacion` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `estadoDonacion` varchar(20) NOT NULL,
  `tipoPago` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donacion`
--

INSERT INTO `donacion` (`id_donacion`, `monto`, `id_usuario`, `id_proyecto`, `fecha_donacion`, `estadoDonacion`, `tipoPago`) VALUES
('2', 23000, 2, 1, '2022-12-22 06:40:26.000000', 'En proceso', 'Debito'),
('donacion  1', 12000, 1, 1, '2022-12-21 02:49:12.000000', 'En proceso', 'Debito'),
('Donacion 2', 20000, 1, 2, '2022-12-20 02:49:12.000000', 'Confirmada', 'Credito');

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'Aprovado'),
(2, 'NoAprovado'),
(3, 'RevisionTecnica'),
(4, 'RevisionDocumental');

-- --------------------------------------------------------

--
-- Table structure for table `interesados`
--

DROP TABLE IF EXISTS `interesados`;
CREATE TABLE `interesados` (
  `id_interesados` bigint(20) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `organizacion`
--

DROP TABLE IF EXISTS `organizacion`;
CREATE TABLE `organizacion` (
  `id_organizacion` int(11) NOT NULL,
  `nombre_org` varchar(30) CHARACTER SET utf8 NOT NULL,
  `pagina_web` varchar(250) NOT NULL,
  `redes_sociales` int(150) NOT NULL,
  `telefono_contacto` varchar(10) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `nro_cuenta` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organizacion`
--

INSERT INTO `organizacion` (`id_organizacion`, `nombre_org`, `pagina_web`, `redes_sociales`, `telefono_contacto`, `id_tipo`, `nro_cuenta`) VALUES
(1, 'Famizanar', '', 0, '', 3, ''),
(2, 'Exito', '', 0, '', 3, '');

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
  `camara_comercio` varchar(255) DEFAULT NULL,
  `RUT` varchar(250) DEFAULT NULL,
  `rep_legal` varchar(250) DEFAULT NULL,
  `cedula` varchar(250) DEFAULT NULL,
  `bancario` varchar(250) DEFAULT NULL,
  `aprob_donacion` varchar(250) DEFAULT NULL,
  `form_declaraciones` varchar(250) DEFAULT NULL,
  `keywords` varchar(100) NOT NULL,
  `tiempo_ejecucion` varchar(15) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `duracion_campana` varchar(10) NOT NULL,
  `fecha_comienzo` date NOT NULL DEFAULT current_timestamp(),
  `fecha_final` date NOT NULL,
  `abstrac` varchar(150) NOT NULL,
  `indicador_impacto` varchar(80) NOT NULL,
  `monto_financiacion` double NOT NULL,
  `video` varchar(250) NOT NULL,
  `id_estado` int(11) NOT NULL DEFAULT 3,
  `informacion_adicional` varchar(250) NOT NULL,
  `id_usuario` bigint(20) NOT NULL,
  `id_organizacion` int(11) NOT NULL,
  `observaciones` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `camara_comercio`, `RUT`, `rep_legal`, `cedula`, `bancario`, `aprob_donacion`, `form_declaraciones`, `keywords`, `tiempo_ejecucion`, `titulo`, `foto`, `duracion_campana`, `fecha_comienzo`, `fecha_final`, `abstrac`, `indicador_impacto`, `monto_financiacion`, `video`, `id_estado`, `informacion_adicional`, `id_usuario`, `id_organizacion`, `observaciones`) VALUES
(1, '', '', '', '', '', '', '', 'territorio', '3', 'mi proyecto', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\2.jpg', '3', '2022-10-19', '2022-12-20', 'hGASFJGfjFS', '3', 45000, '', 1, 'SDFSDFCSC', 1, 1, 'zzzzz'),
(2, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\2.jpg', 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\2.jpg', 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\2.jpg', 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\2.jpg', 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\2.jpg', 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\2.jpg', 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\2.jpg', 'Salud,EPS,Seguridad', '12', 'Famizanar', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\2.jpg', '12', '2022-12-16', '2022-12-23', 'Centro de salud para los colombianos', '80000', 80000, 'https://www.youtube.com', 1, 'Ninguna', 1, 2, ''),
(3, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\3.jpg', 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\3.jpg', 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\3.jpg', 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\3.jpg', 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\3.jpg', 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\3.jpg', 'VideoJuegos,Recreacion', '15', 'Nintendo', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\2.jpg', '16', '2022-12-16', '2022-12-29', 'Empresa de videojuegos con enfoque infantil para la comunidad joven', '7000', 95000, 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\3.jpg', 1, 'C:\\xampp\\htdocs\\crowdfunding\\uploadeddocuments\\3.jpg', 1, 1, ''),
(4, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'Proyecto de Ganyu', '12', 'UwU Ganyu', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', '12', '2022-12-22', '2022-12-22', 'Besto reina ganyu', '12', 75000, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 1, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 1, 1, ''),
(5, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 'No se wey', '176', 'Exito', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', '16', '2022-12-14', '2022-12-22', 'Aqui podemos ver a una humilde cabrita', '45', 95000, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 1, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\3.jpg', 1, 1, ''),
(6, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'Aleluya', '45', 'Left of dead 4', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', '15', '2022-12-22', '2022-12-22', 'un videojuego de zombies y no se que mas', '15', 45000, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 1, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 1, 2, 'Muy barato'),
(7, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 'LOL', '25', 'Liga de legendas', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', '67', '2022-12-14', '2022-12-22', 'Un lugar donde todos los inadactados sociales se reunen', '546', 48620, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 2, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\4.jpg', 1, 2, 'Ninguna'),
(8, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\5.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\5.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\5.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\5.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\5.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\5.jpg', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\5.jpg', 'Mucho texto', '13', 'Asus', 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\5.jpg', '67', '2022-12-15', '2022-12-30', 'Empresa de computadores de oficina y de gamen', '5', 86500, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\5.jpg', 1, 'http:\\\\localhost\\\\crowdfunding\\\\uploadeddocuments\\\\5.jpg', 1, 2, 'Por favor subir su video de youtube');

-- --------------------------------------------------------

--
-- Table structure for table `telefono`
--

DROP TABLE IF EXISTS `telefono`;
CREATE TABLE `telefono` (
  `id_telefono` varchar(12) NOT NULL,
  `id_usuario_telefono` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `telefono`
--

INSERT INTO `telefono` (`id_telefono`, `id_usuario_telefono`) VALUES
('3142005697', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipos_organizacion`
--

DROP TABLE IF EXISTS `tipos_organizacion`;
CREATE TABLE `tipos_organizacion` (
  `id_tipos` int(11) NOT NULL,
  `tipos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipos_organizacion`
--

INSERT INTO `tipos_organizacion` (`id_tipos`, `tipos`) VALUES
(1, 'ONG'),
(2, 'OSC'),
(3, 'Empresa'),
(4, 'Academia');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` bigint(255) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `password` varchar(250) NOT NULL,
  `id_ciudad` varchar(15) NOT NULL,
  `id_pais` int(11) NOT NULL,
  `rol` int(11) NOT NULL,
  `direccion` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `primer_nombre`, `primer_apellido`, `correo`, `password`, `id_ciudad`, `id_pais`, `rol`, `direccion`) VALUES
(1, ' Carlos Andres', ' Cuervo Galeano', 'cacuervo120@gmail.com', '$2y$12$tBNzEcqp6oXXNUuOhOtSD.wJc0eS2edzZ.d8VAef629uV/zH3hdgS', 'Col-1', 1, 2, 'calle'),
(2, 'Daniel Mauricio', 'Torres Martinez', 'ejemplo@gmail.com', '$2y$12$tBNzEcqp6oXXNUuOhOtSD.wJc0eS2edzZ.d8VAef629uV/zH3hdgS', 'Chi-1', 9, 1, 'Calle 2');

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
-- Indexes for table `interesados`
--
ALTER TABLE `interesados`
  ADD PRIMARY KEY (`id_interesados`);

--
-- Indexes for table `organizacion`
--
ALTER TABLE `organizacion`
  ADD PRIMARY KEY (`id_organizacion`),
  ADD UNIQUE KEY `nombre_org` (`nombre_org`),
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
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_organizacion` (`id_organizacion`);

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
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `id_ciudad` (`id_ciudad`,`id_pais`),
  ADD KEY `id_pais` (`id_pais`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `interesados`
--
ALTER TABLE `interesados`
  MODIFY `id_interesados` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `donacion_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `donacion_ibfk_4` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE CASCADE;

--
-- Constraints for table `organizacion`
--
ALTER TABLE `organizacion`
  ADD CONSTRAINT `organizacion_ibfk_1` FOREIGN KEY (`id_tipo`) REFERENCES `tipos_organizacion` (`id_tipos`) ON DELETE CASCADE;

--
-- Constraints for table `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE,
  ADD CONSTRAINT `proyecto_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `proyecto_ibfk_3` FOREIGN KEY (`id_organizacion`) REFERENCES `organizacion` (`id_organizacion`) ON DELETE CASCADE;

--
-- Constraints for table `telefono`
--
ALTER TABLE `telefono`
  ADD CONSTRAINT `telefono_ibfk_1` FOREIGN KEY (`id_usuario_telefono`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE;

--
-- Constraints for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_4` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
