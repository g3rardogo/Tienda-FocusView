-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2019 a las 05:50:00
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `focusview`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id_bitacora` int(10) UNSIGNED NOT NULL,
  `Producto` varchar(50) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Accion` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `Producto`, `Fecha`, `Accion`) VALUES
(5, 'FocusView Pro', '2019-07-09 09:08:34', 'Se agrego un nuevo producto'),
(6, 'FocusView ProX', '2019-07-09 09:08:59', 'Se agrego un nuevo producto'),
(7, 'Repuesto 1', '2019-07-09 09:09:16', 'Se agrego un nuevo producto'),
(8, 'Accesorio 1', '2019-07-09 09:09:33', 'Se agrego un nuevo producto'),
(9, 'Case', '2019-07-09 10:52:09', 'Se agrego un nuevo producto'),
(10, 'Accesorio 2', '2019-07-09 10:52:53', 'Se agrego un nuevo producto'),
(11, 'Accesorio 3', '2019-07-09 10:53:32', 'Se agrego un nuevo producto'),
(12, 'FocusView HOTH', '2019-07-09 10:54:08', 'Se agrego un nuevo producto'),
(13, 'Repuesto 2', '2019-07-09 10:54:39', 'Se agrego un nuevo producto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `Nombre_categoria` varchar(50) DEFAULT NULL,
  `Imagen_categoria` varchar(50) NOT NULL,
  `Descripcion_categoria` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `Nombre_categoria`, `Imagen_categoria`, `Descripcion_categoria`) VALUES
(4, 'Accesorios', '5d24ae6babb48.jpg', 'TEST'),
(5, 'Camaras', '5d24ae940f3b7.jpg', 'TEST'),
(6, 'Repuestos', '5d24aeb97bd35.jpg', 'TEST'),
(7, 'Extras', '5d24c61e81939.jpg', 'TEST');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `Nombre_cliente` varchar(50) NOT NULL,
  `Apellido_cliente` varchar(50) NOT NULL,
  `Usuario_cliente` varchar(20) NOT NULL,
  `Correo_cliente` varchar(100) NOT NULL,
  `Clave_cliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `Nombre_cliente`, `Apellido_cliente`, `Usuario_cliente`, `Correo_cliente`, `Clave_cliente`) VALUES
(30, 'Josue', 'Avalos', 'Ezejosue', 'josue@gmail.com', '$2y$10$vBEpHEmMYVP2HKLU3bNQFOBUURyXE8fv9Xs3jL3cwLbmvoOivPCt6'),
(31, 'Gerardo', 'Javier', 'Gerardo503', 'gerardo@gmail.com', '$2y$10$3uqCdQPQhHn40vBTiKlceOxZPpUeMV6CbJl.lfy5ZMz.MjetrS8Wi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_detalle` int(11) UNSIGNED NOT NULL,
  `id_pedido` int(10) UNSIGNED NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id_detalle`, `id_pedido`, `id_producto`, `cantidad`) VALUES
(5, 5, 8, 1),
(6, 5, 6, 1),
(7, 6, 5, 1),
(8, 7, 6, 1),
(9, 8, 6, 1),
(10, 9, 8, 2),
(11, 9, 13, 5),
(12, 10, 9, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(10) UNSIGNED NOT NULL,
  `Fecha_pedido` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `Estado_pedido` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `Fecha_pedido`, `id_cliente`, `Estado_pedido`) VALUES
(5, '2019-07-09 09:14:58', 31, 1),
(6, '2019-07-09 09:16:56', 31, 1),
(7, '2019-07-09 09:17:42', 31, 1),
(8, '2019-07-09 09:22:38', 30, 1),
(9, '2019-07-09 10:55:34', 31, 1),
(10, '2019-07-22 13:40:03', 30, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pre_pedido`
--

CREATE TABLE `pre_pedido` (
  `id_prepedido` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `id_producto` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(10) UNSIGNED NOT NULL,
  `Nombre_producto` varchar(50) DEFAULT NULL,
  `Descripcion_producto` varchar(200) DEFAULT NULL,
  `Precio_producto` decimal(5,2) NOT NULL DEFAULT '0.00',
  `Imagen_producto` varchar(50) NOT NULL,
  `Estado_producto` tinyint(1) NOT NULL DEFAULT '1',
  `id_categoria` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `Nombre_producto`, `Descripcion_producto`, `Precio_producto`, `Imagen_producto`, `Estado_producto`, `id_categoria`) VALUES
(5, 'FocusView Pro', 'TEST', '5.25', '5d24adf2af9f3.jpg', 1, 5),
(6, 'FocusView ProX', 'TEST', '25.15', '5d24ae0bbc611.jpg', 1, 5),
(7, 'Repuesto 1', 'TEST', '4.75', '5d24ae1c558f3.jpg', 1, 6),
(8, 'Accesorio 1', 'TEST', '6.35', '5d24ae2dc68b4.jpg', 1, 4),
(9, 'Case', 'TEST', '3.01', '5d24c6399c282.jpg', 1, 7),
(10, 'Accesorio 2', 'TEST', '0.05', '5d24c665e6ad5.jpg', 1, 4),
(11, 'Accesorio 3', 'TEST', '12.35', '5d24c68c6cee3.jpg', 1, 4),
(12, 'FocusView HOTH', 'TEST', '75.99', '5d24c6b0674cc.jpg', 1, 5),
(13, 'Repuesto 2', 'TEST', '2.00', '5d24c6cfdb362.jpg', 1, 6);

--
-- Disparadores `productos`
--
DELIMITER $$
CREATE TRIGGER `Llenar_bitacora` AFTER INSERT ON `productos` FOR EACH ROW INSERT INTO Bitacora(Producto, Fecha, Accion) Values (New.Nombre_producto, now(), 'Se agrego un nuevo producto')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Nombre_Usuario` varchar(20) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Clave` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `Nombre`, `Apellido`, `Nombre_Usuario`, `Correo`, `Clave`) VALUES
(18, 'Gerardo', 'Ramirez', 'Gerardo', 'gerardo@gmail.com', '$2y$10$lGj7vkBOrD0dSLa0CRnhjOE05400DMZBw3GrdAfPvwk5ncwjniV6m');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id_bitacora`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `Nombre_categoria` (`Nombre_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `Usuario_cliente` (`Usuario_cliente`),
  ADD UNIQUE KEY `Correo_cliente` (`Correo_cliente`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_pedido` (`id_pedido`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `pre_pedido`
--
ALTER TABLE `pre_pedido`
  ADD PRIMARY KEY (`id_prepedido`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `Nombre_producto` (`Nombre_producto`),
  ADD UNIQUE KEY `Nombre_producto_2` (`Nombre_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `Correo` (`Correo`),
  ADD UNIQUE KEY `Nombre_Usuario` (`Nombre_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id_bitacora` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detalle` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pre_pedido`
--
ALTER TABLE `pre_pedido`
  MODIFY `id_prepedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `detalle_pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `pre_pedido`
--
ALTER TABLE `pre_pedido`
  ADD CONSTRAINT `pre_pedido_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `pre_pedido_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
