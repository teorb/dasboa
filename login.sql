-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2023 a las 08:22:49
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(56) NOT NULL,
  `nombre` varchar(56) NOT NULL,
  `email` varchar(56) NOT NULL,
  `fecha_reg` varchar(56) NOT NULL,
  `telefono` varchar(56) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `direccion` varchar(56) NOT NULL,
  `no_documento` bigint(56) NOT NULL,
  `rol` varchar(45) NOT NULL,
  `tipo_de_documento` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `email`, `fecha_reg`, `telefono`, `contraseña`, `direccion`, `no_documento`, `rol`, `tipo_de_documento`) VALUES
(1, 'olga1015', 'olga@gmail.com', '07/08/23', '3008051718', '1001', 'manantial', 10043121455, 'administrador', 'cedula de ciudadania'),
(2, 'teorb', 'riverateo51@gmail.com', '07/08/23', '3245913121', '0925', 'manantial', 1043121373, 'aprendiz', 'cedula de ciudadania'),
(3, 'alvarotps35', 'alvaro@gmail.com', '08/08/23', '37890867', '12345', 'cra 12-78', 1111111111, 'instructor', 'cedula de ciudadania'),
(4, 'teo rivera', 'riverateo51@gmail.com', '08/08/23', '3245913121', '123456789', 'moras', 123456666, 'administrador', 'tarjeta de identidad'),
(5, 'teo rivera', 'riverateo51@gmail.com', '08/08/23', '3245913121', '123456789', 'moras', 123456666, 'administrador', 'tarjeta de identidad'),
(6, 'juan david plata villareal', 'platagay@gmail.com', '08/08/23', '3005678900', 'juanplata45', 'los nogales', 1001345678, 'aprendiz', 'cedula de ciudadania');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contraseña`) VALUES
(2, 'teorb', '0925');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(56) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
