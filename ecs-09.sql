-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2022 a las 02:35:32
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecs-09`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `Codigo` text NOT NULL,
  `Nombre` text NOT NULL,
  `Marca` text NOT NULL,
  `PrecioCompra` int(11) NOT NULL,
  `PrecioVenta` int(11) NOT NULL,
  `Categoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Codigo`, `Nombre`, `Marca`, `PrecioCompra`, `PrecioVenta`, `Categoria`) VALUES
(1, 'A44651', 'CocaZero', 'CocaCola', 444, 555, 'Gaseosa'),
(2, 'A44651', 'CocaZero', 'CocaCola', 444, 555, 'Gaseosa'),
(3, 'A44651', 'CocaZero', 'CocaCola', 444, 555, 'Gaseosa'),
(4, '45456', 'CocaZero', 'CocaCola', 444, 555, 'Gaseosa'),
(5, 'A44651', 'CocaZero', 'CocaCola', 6, 555, 'Gaseosa'),
(6, 'A44651', 'CocaZero', 'CocaCola', 6, 555, 'Gaseosa'),
(7, 'A44651', 'CocaZero', 'CocaCola', 6, 555, 'Gaseosa'),
(8, 'A44651', 'CocaZero', 'CocaCola', 6, 556, 'Gaseosa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
