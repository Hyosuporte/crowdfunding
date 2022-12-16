-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2022 a las 02:44:42
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_crowdfunding`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `camara_comercio` varchar(255) NOT NULL,
  `RUT` varchar(250) NOT NULL,
  `rep_legal` varchar(250) NOT NULL,
  `cedula` varchar(250) NOT NULL,
  `bancario` varchar(250) NOT NULL,
  `aprob_donacion` varchar(250) NOT NULL,
  `form_declaraciones` varchar(250) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `tiempo_ejecucion` varchar(15) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `foto` int(255) NOT NULL,
  `duracion_campana` varchar(10) NOT NULL,
  `fecha_comienzo` date NOT NULL DEFAULT current_timestamp(),
  `fecha_final` date NOT NULL,
  `abstrac` varchar(150) NOT NULL,
  `indicador_impacto` varchar(80) NOT NULL,
  `monto_financiacion` double NOT NULL,
  `video` varchar(250) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `informacion_adicional` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `camara_comercio`, `RUT`, `rep_legal`, `cedula`, `bancario`, `aprob_donacion`, `form_declaraciones`, `keywords`, `tiempo_ejecucion`, `titulo`, `foto`, `duracion_campana`, `fecha_comienzo`, `fecha_final`, `abstrac`, `indicador_impacto`, `monto_financiacion`, `video`, `id_estado`, `informacion_adicional`) VALUES
(1, '', '', '', '', '', '', '', 'territorio', '3', 'mi proyecto', 0, '3', '2022-10-19', '2022-12-20', 'hGASFJGfjFS', '3', 45000, '', 2, 'SDFSDFCSC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
