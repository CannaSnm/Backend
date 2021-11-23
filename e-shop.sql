-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 00:54:21
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `e-shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `Id_carrito` int(11) NOT NULL,
  `DNI` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`Id_carrito`, `DNI`) VALUES
(10, '68828306');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_producto` int(11) NOT NULL,
  `Titul` varchar(50) NOT NULL,
  `URL_imagen` varchar(256) NOT NULL,
  `Descripción` varchar(256) NOT NULL,
  `Habilitado` tinyint(1) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_producto`, `Titul`, `URL_imagen`, `Descripción`, `Habilitado`, `Precio`) VALUES
(1, 'papas fritas', 'https://www.eltiempo.com/uploads/2021/04/15/6078c68c2f49b.jpeg', 'papas fritas, con verdeo y salsa de la casa', 1, 100),
(3, 'Ensaladas', 'https://www.comedera.com/wp-content/uploads/2015/10/ensalada-de-pollo.jpg', 'Ensalada de pollo, con tomate, palta en colchon verde.', 1, 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_por_carrito`
--

CREATE TABLE `producto_por_carrito` (
  `Id_carrito` int(11) NOT NULL,
  `Id_producto` int(11) NOT NULL,
  `Cantidad_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto_por_carrito`
--

INSERT INTO `producto_por_carrito` (`Id_carrito`, `Id_producto`, `Cantidad_producto`) VALUES
(9, 3, 1),
(9, 1, 2),
(9, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `DNI` varchar(8) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `Calle` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Habilitado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`DNI`, `Apellido`, `Nombre`, `Mail`, `Telefono`, `Ciudad`, `Calle`, `Password`, `Habilitado`) VALUES
('', '', '', '', '', '', '', '$2y$10$LRGhK9bwP/9RnuHnm21qru.Gg06m8tVuvnzPcTwZS/gN1uIrU2LZS', 1),
('37260085', 'Federico', 'Canavery', 'canavery.federico@gmail.com', '02215603558', 'La Plata', '1 e 2', '$2y$10$pJiAMYy9aX02bAbEN2BMkeOlD.Wf5ORY8BrZcgDBuLI70mtko2JWm', 1),
('68828306', 'Tina', 'Canavery', 'tina@gmail.com', '421307', 'la plata', '1', '$2y$10$4ppxwjB72dx2t/XHaJSpVuIUl2FYOKZYn7Ce7.sloHnceOdEpdxeK', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`Id_carrito`),
  ADD KEY `DNI` (`DNI`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `Id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `usuarios` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
