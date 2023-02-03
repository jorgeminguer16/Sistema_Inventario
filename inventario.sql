-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-02-2023 a las 20:07:08
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_almacenes`
--

CREATE TABLE `cat_almacenes` (
  `id_almacen` bigint NOT NULL,
  `nombre_almacen` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `localizacion` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `responsable` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tipo` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cat_almacenes`
--

INSERT INTO `cat_almacenes` (`id_almacen`, `nombre_almacen`, `localizacion`, `responsable`, `tipo`) VALUES
(1, 'Cocina', 'Chetumal', 'Menganito ', 'Fisico '),
(2, 'Bodega', 'Chetumal', 'Fulanito', 'Virtual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_productos`
--

CREATE TABLE `cat_productos` (
  `id_producto` bigint NOT NULL,
  `sku` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_general_ci NOT NULL,
  `marca` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cat_productos`
--

INSERT INTO `cat_productos` (`id_producto`, `sku`, `descripcion`, `marca`, `color`, `precio`) VALUES
(1, '10258934', 'Jabon', 'Fulanito', 'Rosa', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `existencias`
--

CREATE TABLE `existencias` (
  `id_existencias` bigint NOT NULL,
  `id_producto` bigint DEFAULT NULL,
  `id_almacen` bigint DEFAULT NULL,
  `existencias` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `existencias`
--

INSERT INTO `existencias` (`id_existencias`, `id_producto`, `id_almacen`, `existencias`) VALUES
(1, 1, 1, '50'),
(2, 1, 2, '100');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_almacenes`
--
ALTER TABLE `cat_almacenes`
  ADD PRIMARY KEY (`id_almacen`);

--
-- Indices de la tabla `cat_productos`
--
ALTER TABLE `cat_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `existencias`
--
ALTER TABLE `existencias`
  ADD PRIMARY KEY (`id_existencias`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_almacen` (`id_almacen`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `existencias`
--
ALTER TABLE `existencias`
  ADD CONSTRAINT `existencias_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `cat_productos` (`id_producto`),
  ADD CONSTRAINT `existencias_ibfk_2` FOREIGN KEY (`id_almacen`) REFERENCES `cat_almacenes` (`id_almacen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
