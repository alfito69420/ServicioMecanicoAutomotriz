-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2023 a las 09:53:05
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `serviciomecanico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cfdi_cat`
--

CREATE TABLE `cfdi_cat` (
  `id_motivo_factura` int(11) NOT NULL,
  `cfdi` varchar(50) NOT NULL,
  `datos_fiscales_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(11) NOT NULL,
  `fecha_cita` date NOT NULL,
  `reporte` varchar(200) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `refaccion_cat_fk` int(11) NOT NULL,
  `estatus_cat_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_fiscales`
--

CREATE TABLE `datos_fiscales` (
  `id_datos_fiscales` int(11) NOT NULL,
  `domicilio` varchar(200) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `razon_social` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus_cat`
--

CREATE TABLE `estatus_cat` (
  `id_estatus_cat` int(11) NOT NULL,
  `estatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramienta`
--

CREATE TABLE `herramienta` (
  `id_herramienta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramientas_cat`
--

CREATE TABLE `herramientas_cat` (
  `id_herramienta_cat` int(11) NOT NULL,
  `herramienta` varchar(200) NOT NULL,
  `herramienta_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca_cat`
--

CREATE TABLE `marca_cat` (
  `id_marca_cat` int(11) NOT NULL,
  `marca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `marca_cat`
--

INSERT INTO `marca_cat` (`id_marca_cat`, `marca`) VALUES
(1, 'Toyota'),
(2, 'Volkswagen'),
(3, 'Ford'),
(4, 'Chevrolet'),
(5, 'Honda'),
(6, 'Nissan'),
(7, 'BMW'),
(8, 'Mercedes-Benz'),
(9, 'Audi'),
(10, 'Hyundai'),
(11, 'Kia'),
(12, 'Mazda'),
(13, 'Subaru'),
(14, 'Volvo'),
(15, 'Tesla'),
(16, 'Land Rover'),
(17, 'Jeep'),
(18, 'Ferrari'),
(19, 'Lamborghini'),
(20, 'Porsche');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca_herramienta`
--

CREATE TABLE `marca_herramienta` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `marca_herramienta`
--

INSERT INTO `marca_herramienta` (`id_marca`, `marca`) VALUES
(1, 'Pretul'),
(2, 'Truper'),
(3, 'Stanley'),
(4, 'Bosch'),
(5, 'DeWalt'),
(6, 'Milwaukee');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo_cat`
--

CREATE TABLE `modelo_cat` (
  `id_modelo-cat` int(11) NOT NULL,
  `modelo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `modelo_cat`
--

INSERT INTO `modelo_cat` (`id_modelo-cat`, `modelo`) VALUES
(1, 'Corolla'),
(2, 'Camry'),
(3, 'Prius'),
(4, 'RAV4'),
(5, 'Highlander'),
(6, 'Tacoma'),
(7, 'Golf'),
(8, 'Polo'),
(9, 'Passat'),
(10, 'Tiguan'),
(11, 'Atlas'),
(12, 'Touareg'),
(13, 'Mustang'),
(14, 'F-150'),
(15, 'Focus'),
(16, 'Escape'),
(17, 'Explorer'),
(18, 'Expedition'),
(19, 'Camaro'),
(20, 'Silverado'),
(21, 'Equinox'),
(22, 'Traverse'),
(23, 'Malibu'),
(24, 'Tahoe'),
(25, 'Civic'),
(26, 'Accord'),
(27, 'CR-V'),
(28, 'Pilot'),
(29, 'HR-V'),
(30, 'Odyssey'),
(31, 'Altima'),
(32, 'Sentra'),
(33, 'Rogue'),
(34, 'Pathfinder'),
(35, 'Murano'),
(36, 'Titan'),
(37, '3 Series'),
(38, '5 Series'),
(39, 'X3'),
(40, 'X5'),
(41, '7 Series'),
(42, 'i3'),
(43, 'C-Class'),
(44, 'E-Class'),
(45, 'GLC'),
(46, 'GLE'),
(47, 'S-Class'),
(48, 'AMG GT'),
(49, 'A3'),
(50, 'A4'),
(51, 'Q5'),
(52, 'Q7'),
(53, 'A6'),
(54, 'R8'),
(55, 'Elantra'),
(56, 'Sonata'),
(57, 'Tucson'),
(58, 'Santa Fe'),
(59, 'Kona'),
(60, 'Palisade'),
(61, 'Forte'),
(62, 'Optima'),
(63, 'Sportage'),
(64, 'Sorento'),
(65, 'Soul'),
(66, 'Telluride'),
(67, 'CX-5'),
(68, 'CX-9'),
(69, ' MX-5 Miata'),
(70, 'CX-30'),
(71, 'Mazda3'),
(72, 'Mazda6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor_herramienta`
--

CREATE TABLE `proveedor_herramienta` (
  `id_proveedor` int(11) NOT NULL,
  `proveedor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor_herramienta`
--

INSERT INTO `proveedor_herramienta` (`id_proveedor`, `proveedor`) VALUES
(1, 'Ferreterías Calzada'),
(2, 'The Home Depot México'),
(3, 'Truper'),
(4, 'Cimaco'),
(5, 'Amazon México');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor_refaccion`
--

CREATE TABLE `proveedor_refaccion` (
  `id_proveedor_refaccion` int(11) NOT NULL,
  `proveedor` varchar(200) NOT NULL,
  `detalle_proveedor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor_refaccion`
--

INSERT INTO `proveedor_refaccion` (`id_proveedor_refaccion`, `proveedor`, `detalle_proveedor`) VALUES
(1, 'Autozone', 'Bujías, filtros, refrigerantes, aceites, amortiguadores, baterías y balatas.'),
(2, 'NAPA Auto Partes', 'Filtros de aire, aceite, gasolina y cabina, baterías, llantas y rines, pastillas, discos, tambores, calipers, mangueras y líquidos, amortiguadores, resortes, bujes, rótulas, barras estabilizadoras y b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `refaccion_cat`
--

CREATE TABLE `refaccion_cat` (
  `id_refaccuib_cat` int(11) NOT NULL,
  `costo` decimal(10,0) NOT NULL,
  `refaccion` varchar(200) NOT NULL,
  `proveedor_refaccion_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_cat`
--

CREATE TABLE `rol_cat` (
  `id_rol_cat` int(11) NOT NULL,
  `rol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `rol_cat`
--

INSERT INTO `rol_cat` (`id_rol_cat`, `rol`) VALUES
(1, 'regular'),
(2, 'admin'),
(7, 'mecanico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_cat`
--

CREATE TABLE `servicio_cat` (
  `id_servicio_cat` int(11) NOT NULL,
  `servicio` varchar(200) NOT NULL,
  `costo` decimal(10,0) NOT NULL,
  `cita_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_herramienta`
--

CREATE TABLE `tipo_herramienta` (
  `id_tipo_herramienta` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `proveedor_herramienta_fk` int(11) NOT NULL,
  `marca_herramienta_fk` int(11) NOT NULL,
  `herramientas_cat_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_persona_cat`
--

CREATE TABLE `tipo_persona_cat` (
  `id_tipo_persona` int(11) NOT NULL,
  `tipo_persona` varchar(50) NOT NULL,
  `datos_fiscales_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_cat`
--

CREATE TABLE `usuario_cat` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `primer_ap` varchar(200) NOT NULL,
  `segundo_ap` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `rol_fk` int(11) NOT NULL DEFAULT 1,
  `datos_fis_fk` int(11) DEFAULT NULL,
  `herramienta_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `usuario_cat`
--

INSERT INTO `usuario_cat` (`id_usuario`, `nombre`, `primer_ap`, `segundo_ap`, `correo`, `contrasena`, `rol_fk`, `datos_fis_fk`, `herramienta_fk`) VALUES
(2, 'SuperAdmin', 'Ultra', 'God', 'admin@god.com', '17c4520f6cfd1ab53d8745e84681eb49', 2, NULL, NULL),
(5, 'Normi', 'Regular', 'Equis', 'normi@regular.com', '123', 1, NULL, NULL),
(6, 'Normi 2', 'Regu', 'Equisde', 'equisde@xd.com', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', 1, NULL, NULL),
(9, 'Juan', 'Chambiador', 'Perez', 'chambiador2662@gmail.com', '202cb962ac59075b964b07152d234b70', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id_vehiculo` int(11) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `ano_automovil` int(11) NOT NULL,
  `marca_cat_fk` int(11) NOT NULL,
  `modelo_cat_fk` int(11) NOT NULL,
  `usuario_cat` int(11) NOT NULL,
  `cita_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo_usuario_cat`
--

CREATE TABLE `vehiculo_usuario_cat` (
  `id_usuario_cat` int(11) NOT NULL,
  `id_vehiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cfdi_cat`
--
ALTER TABLE `cfdi_cat`
  ADD PRIMARY KEY (`id_motivo_factura`),
  ADD KEY `datos_fiscales_fk` (`datos_fiscales_fk`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `estatus_cat_fk` (`estatus_cat_fk`),
  ADD KEY `refaccion_cat_fk` (`refaccion_cat_fk`);

--
-- Indices de la tabla `datos_fiscales`
--
ALTER TABLE `datos_fiscales`
  ADD PRIMARY KEY (`id_datos_fiscales`);

--
-- Indices de la tabla `estatus_cat`
--
ALTER TABLE `estatus_cat`
  ADD PRIMARY KEY (`id_estatus_cat`);

--
-- Indices de la tabla `herramienta`
--
ALTER TABLE `herramienta`
  ADD PRIMARY KEY (`id_herramienta`);

--
-- Indices de la tabla `herramientas_cat`
--
ALTER TABLE `herramientas_cat`
  ADD PRIMARY KEY (`id_herramienta_cat`),
  ADD KEY `herramienta_fk` (`herramienta_fk`);

--
-- Indices de la tabla `marca_cat`
--
ALTER TABLE `marca_cat`
  ADD PRIMARY KEY (`id_marca_cat`);

--
-- Indices de la tabla `marca_herramienta`
--
ALTER TABLE `marca_herramienta`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `modelo_cat`
--
ALTER TABLE `modelo_cat`
  ADD PRIMARY KEY (`id_modelo-cat`);

--
-- Indices de la tabla `proveedor_herramienta`
--
ALTER TABLE `proveedor_herramienta`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `proveedor_refaccion`
--
ALTER TABLE `proveedor_refaccion`
  ADD PRIMARY KEY (`id_proveedor_refaccion`);

--
-- Indices de la tabla `refaccion_cat`
--
ALTER TABLE `refaccion_cat`
  ADD PRIMARY KEY (`id_refaccuib_cat`),
  ADD KEY `proveedor_refaccion_fk` (`proveedor_refaccion_fk`);

--
-- Indices de la tabla `rol_cat`
--
ALTER TABLE `rol_cat`
  ADD PRIMARY KEY (`id_rol_cat`);

--
-- Indices de la tabla `servicio_cat`
--
ALTER TABLE `servicio_cat`
  ADD PRIMARY KEY (`id_servicio_cat`),
  ADD KEY `cita_fk` (`cita_fk`);

--
-- Indices de la tabla `tipo_herramienta`
--
ALTER TABLE `tipo_herramienta`
  ADD PRIMARY KEY (`id_tipo_herramienta`),
  ADD KEY `proveedor_herramienta_fk` (`proveedor_herramienta_fk`),
  ADD KEY `marca_herramienta_fk` (`marca_herramienta_fk`),
  ADD KEY `herramientas_cat_fk` (`herramientas_cat_fk`);

--
-- Indices de la tabla `tipo_persona_cat`
--
ALTER TABLE `tipo_persona_cat`
  ADD PRIMARY KEY (`id_tipo_persona`),
  ADD KEY `datos_fiscales_fk` (`datos_fiscales_fk`);

--
-- Indices de la tabla `usuario_cat`
--
ALTER TABLE `usuario_cat`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `usuario_cat_ibfk_1` (`rol_fk`),
  ADD KEY `datos_fis_fk` (`datos_fis_fk`),
  ADD KEY `herramienta_fk` (`herramienta_fk`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id_vehiculo`),
  ADD KEY `marca_cat_fk` (`marca_cat_fk`),
  ADD KEY `modelo_cat_fk` (`modelo_cat_fk`),
  ADD KEY `usuario_cat` (`usuario_cat`),
  ADD KEY `cita_fk` (`cita_fk`);

--
-- Indices de la tabla `vehiculo_usuario_cat`
--
ALTER TABLE `vehiculo_usuario_cat`
  ADD PRIMARY KEY (`id_usuario_cat`),
  ADD KEY `id_vehiculo` (`id_vehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cfdi_cat`
--
ALTER TABLE `cfdi_cat`
  MODIFY `id_motivo_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_fiscales`
--
ALTER TABLE `datos_fiscales`
  MODIFY `id_datos_fiscales` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estatus_cat`
--
ALTER TABLE `estatus_cat`
  MODIFY `id_estatus_cat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `herramienta`
--
ALTER TABLE `herramienta`
  MODIFY `id_herramienta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `herramientas_cat`
--
ALTER TABLE `herramientas_cat`
  MODIFY `id_herramienta_cat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca_cat`
--
ALTER TABLE `marca_cat`
  MODIFY `id_marca_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `marca_herramienta`
--
ALTER TABLE `marca_herramienta`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `modelo_cat`
--
ALTER TABLE `modelo_cat`
  MODIFY `id_modelo-cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `proveedor_herramienta`
--
ALTER TABLE `proveedor_herramienta`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proveedor_refaccion`
--
ALTER TABLE `proveedor_refaccion`
  MODIFY `id_proveedor_refaccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `refaccion_cat`
--
ALTER TABLE `refaccion_cat`
  MODIFY `id_refaccuib_cat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol_cat`
--
ALTER TABLE `rol_cat`
  MODIFY `id_rol_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `servicio_cat`
--
ALTER TABLE `servicio_cat`
  MODIFY `id_servicio_cat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_herramienta`
--
ALTER TABLE `tipo_herramienta`
  MODIFY `id_tipo_herramienta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_persona_cat`
--
ALTER TABLE `tipo_persona_cat`
  MODIFY `id_tipo_persona` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_cat`
--
ALTER TABLE `usuario_cat`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cfdi_cat`
--
ALTER TABLE `cfdi_cat`
  ADD CONSTRAINT `cfdi_cat_ibfk_1` FOREIGN KEY (`datos_fiscales_fk`) REFERENCES `datos_fiscales` (`id_datos_fiscales`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`estatus_cat_fk`) REFERENCES `estatus_cat` (`id_estatus_cat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`refaccion_cat_fk`) REFERENCES `refaccion_cat` (`id_refaccuib_cat`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `herramientas_cat`
--
ALTER TABLE `herramientas_cat`
  ADD CONSTRAINT `herramientas_cat_ibfk_1` FOREIGN KEY (`herramienta_fk`) REFERENCES `herramienta` (`id_herramienta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `refaccion_cat`
--
ALTER TABLE `refaccion_cat`
  ADD CONSTRAINT `refaccion_cat_ibfk_1` FOREIGN KEY (`proveedor_refaccion_fk`) REFERENCES `proveedor_refaccion` (`id_proveedor_refaccion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicio_cat`
--
ALTER TABLE `servicio_cat`
  ADD CONSTRAINT `servicio_cat_ibfk_1` FOREIGN KEY (`cita_fk`) REFERENCES `cita` (`id_cita`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipo_herramienta`
--
ALTER TABLE `tipo_herramienta`
  ADD CONSTRAINT `tipo_herramienta_ibfk_1` FOREIGN KEY (`proveedor_herramienta_fk`) REFERENCES `proveedor_herramienta` (`id_proveedor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tipo_herramienta_ibfk_2` FOREIGN KEY (`marca_herramienta_fk`) REFERENCES `marca_herramienta` (`id_marca`),
  ADD CONSTRAINT `tipo_herramienta_ibfk_3` FOREIGN KEY (`herramientas_cat_fk`) REFERENCES `herramientas_cat` (`id_herramienta_cat`);

--
-- Filtros para la tabla `tipo_persona_cat`
--
ALTER TABLE `tipo_persona_cat`
  ADD CONSTRAINT `tipo_persona_cat_ibfk_1` FOREIGN KEY (`datos_fiscales_fk`) REFERENCES `datos_fiscales` (`id_datos_fiscales`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario_cat`
--
ALTER TABLE `usuario_cat`
  ADD CONSTRAINT `usuario_cat_ibfk_1` FOREIGN KEY (`rol_fk`) REFERENCES `rol_cat` (`id_rol_cat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_cat_ibfk_2` FOREIGN KEY (`datos_fis_fk`) REFERENCES `datos_fiscales` (`id_datos_fiscales`),
  ADD CONSTRAINT `usuario_cat_ibfk_3` FOREIGN KEY (`herramienta_fk`) REFERENCES `herramienta` (`id_herramienta`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`marca_cat_fk`) REFERENCES `marca_cat` (`id_marca_cat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculo_ibfk_2` FOREIGN KEY (`modelo_cat_fk`) REFERENCES `modelo_cat` (`id_modelo-cat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculo_ibfk_3` FOREIGN KEY (`usuario_cat`) REFERENCES `usuario_cat` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculo_ibfk_4` FOREIGN KEY (`cita_fk`) REFERENCES `cita` (`id_cita`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculo_usuario_cat`
--
ALTER TABLE `vehiculo_usuario_cat`
  ADD CONSTRAINT `vehiculo_usuario_cat_ibfk_1` FOREIGN KEY (`id_usuario_cat`) REFERENCES `usuario_cat` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculo_usuario_cat_ibfk_2` FOREIGN KEY (`id_vehiculo`) REFERENCES `vehiculo` (`id_vehiculo`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
