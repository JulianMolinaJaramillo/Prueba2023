-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2023 a las 01:22:28
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gc_equipos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gce_caracteristicas`
--

CREATE TABLE `gce_caracteristicas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipoPlaca` varchar(50) NOT NULL,
  `modeloTorre` varchar(20) NOT NULL,
  `marcaProcesador` varchar(50) NOT NULL,
  `marcaTarjeta` varchar(50) NOT NULL,
  `tamañoRam` tinyint(4) NOT NULL,
  `modeloDisco` varchar(50) NOT NULL,
  `tipoTeclado` varchar(30) NOT NULL,
  `tipoMouse` varchar(50) NOT NULL,
  `tamañoPantalla` tinyint(4) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gce_caracteristicas`
--

INSERT INTO `gce_caracteristicas` (`id`, `nombre`, `tipoPlaca`, `modeloTorre`, `marcaProcesador`, `marcaTarjeta`, `tamañoRam`, `modeloDisco`, `tipoTeclado`, `tipoMouse`, `tamañoPantalla`, `estado`, `stock`) VALUES
(2, 'PC gaming', 'MICRO ATX', '2023', 'Rizen 7', '2090', 8, '1T', 'Mecanico', 'Gaming 2000', 64, '1', 25),
(3, 'Intel', 'MICRO ATX', '2022', 'Rizen 9', '2080', 32, '2T', 'Inalmabrico', 'Gamin 1992', 84, '0', 48),
(26, 'PC gaming', 'MICRO ATX', '2022', 'Rizen 9', '2080', 32, '1T', 'Mecanico', 'Gamin 1992', 84, '0', 2),
(27, 'PC gaming', 'MICRO ATX', '2022', 'Rizen 9', '2080', 32, '1T', 'Mecanico', 'Gamin 1992', 84, '1', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gce_caracteristicas`
--
ALTER TABLE `gce_caracteristicas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gce_caracteristicas`
--
ALTER TABLE `gce_caracteristicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
