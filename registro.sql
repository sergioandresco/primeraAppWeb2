-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2021 a las 15:37:50
-- Versión del servidor: 8.0.23
-- Versión de PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int NOT NULL,
  `Nombre` varchar(155) NOT NULL,
  `Apellidos` varchar(155) NOT NULL,
  `Edad` int NOT NULL,
  `Tipo_identificacion` varchar(155) NOT NULL,
  `Numero_identificacion` int NOT NULL,
  `Carrera` varchar(155) NOT NULL,
  `Sede` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `Nombre`, `Apellidos`, `Edad`, `Tipo_identificacion`, `Numero_identificacion`, `Carrera`, `Sede`) VALUES
(1, 'Sergio', 'Cobos', 22, 'cc', 1014307516, 'Ingenieria Industrial', 'Bogota Sur'),
(2, 'Dylan', 'Castillo', 20, 'cc', 1000383151, 'Licenciatura en Deportes', 'Bogota Norte'),
(3, 'snopy', 'antonio', 20, 'ti', 1234567890, 'Psicologia', 'Sede Soacha'),
(4, 'Ingrid', 'gutierrez', 22, 'cc', 1000383151, 'Licenciatura en Ingles', 'Bogota Sur'),
(5, 'Joselito', 'Perez', 34, 'cc', 1014978255, 'Licenciatura en Ingles', 'Bogota Sur');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
