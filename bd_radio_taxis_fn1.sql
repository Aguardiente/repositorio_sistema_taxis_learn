-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2019 a las 18:19:20
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_radio_taxis_fn1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chofer`
--

CREATE TABLE `chofer` (
  `ID_chofer` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido` varchar(200) DEFAULT NULL,
  `tipo_taxi` int(11) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chofer`
--

INSERT INTO `chofer` (`ID_chofer`, `nombre`, `apellido`, `tipo_taxi`, `direccion`, `celular`, `telefono`, `fecha`, `hora`) VALUES
(5, 'alfredo epinafio', 'colque lora', 3, 'las palmas 3', 77554812, 4453210, '02/02/19', '1:57pm'),
(6, 'Fraile', 'Lujan Coia', 2, 'Av. Siempre viva', 6658411, 488080, '02/02/19', '8:58am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID_cliente` int(11) NOT NULL,
  `nit_ci` int(11) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido` varchar(200) DEFAULT NULL,
  `razon_social` varchar(50) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ID_cliente`, `nit_ci`, `nombre`, `apellido`, `razon_social`, `direccion`, `celular`, `telefono`, `fecha`, `hora`) VALUES
(4, 222222, 'Juan', 'Soliz Rivera', 'Burguer Srl.', 'av. Padro', 774512121, 4555521, '01/02/19', '9:53am'),
(5, 23432432, 'Eustacio', 'Maron Lauca', 'M Ltda.', 'Av. Las Maravillas', 7334324, 455676, '01/02/19', '9:51am'),
(6, 213213432, 'Ramiro Gabriel', 'Borgues Guzman', 'Causas Inc', 'Av. Militar', 7645635, 463636, '02/02/19', '9:52am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `ID_empresa` int(11) NOT NULL,
  `razon_social` varchar(50) DEFAULT NULL,
  `encargado` varchar(200) DEFAULT NULL,
  `nit` int(11) DEFAULT NULL,
  `num_autorizacion` int(11) DEFAULT NULL,
  `fecha_limite` varchar(50) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`ID_empresa`, `razon_social`, `encargado`, `nit`, `num_autorizacion`, `fecha_limite`, `fecha`, `hora`) VALUES
(1, 'EL Ltda.', 'lucio', 2132321, 21321321, '20/01/19', '24/01/19', '6:36pm'),
(2, 'devesa', 'miguel', 21321111, 11111, '01/02/19', '01/02/19', '12:12pm'),
(3, 'Susañeo srl.', 'pedro', 4445454, 657657, '02/02/19', '01/02/19', '12:15pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_Factura` int(11) NOT NULL,
  `servicio` varchar(50) DEFAULT NULL,
  `chofer` int(11) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `pago` int(11) DEFAULT NULL,
  `saldo` int(11) DEFAULT NULL,
  `nit_cliente` int(11) DEFAULT NULL,
  `fecha_emision` varchar(50) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`ID_Factura`, `servicio`, `chofer`, `cliente`, `descripcion`, `tipo`, `total`, `pago`, `saldo`, `nit_cliente`, `fecha_emision`, `hora`) VALUES
(1, '14', 5, 4, 'esta factura se hizo por motivos personales hhh', 3, 120, 800, 40, 445812221, '02/02/19', '6:25am'),
(6, 'carrera', 5, 4, 'fdgfdg', 1, 321, 213, 11, 223232, '02/02/19', '1:26am'),
(7, 'transporte', 5, 4, 'desesperada', 1, 221, 112, 333, 2147483647, '02/02/19', '1:29am'),
(8, 'carrera', 5, 4, 'sdadsa', 1, 32, 123, 333, 14543212, '02/02/19', '1:30am'),
(9, 'carrera', 5, 4, 'sdadsa', 1, 32, 123, 333, 14543212, '02/02/19', '1:30am'),
(10, 'transporte', 5, 4, 'mañuda', 2, 2000, 2525, 1515, 888888, '02/02/19', '6:48am'),
(11, 'carrera', 5, 4, 'sadsad', 1, 444, 3333, 55, 232132, '02/02/19', '1:39am'),
(12, 'carrera', 5, 4, 'sasda', 1, 321, 123, 23, 433434, '02/02/19', '1:41am'),
(13, 'transporte', 5, 4, 'sasdaAJA', 1, 321, 23, 123, 433434, '02/02/19', '6:46am');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `ID_reporte` int(11) NOT NULL,
  `cliente` varchar(50) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `fecha_inicio` varchar(50) DEFAULT NULL,
  `fecha_fin` varchar(50) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`ID_reporte`, `cliente`, `celular`, `telefono`, `fecha_inicio`, `fecha_fin`, `hora`) VALUES
(1, 'eustacio', 123213, 4444545, '2019-12-12', '2019-02-23', '7:31pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `ID_servicio` int(11) NOT NULL,
  `servicio` varchar(200) DEFAULT NULL,
  `chofer` int(11) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `pago` int(11) DEFAULT NULL,
  `saldo` int(11) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`ID_servicio`, `servicio`, `chofer`, `cliente`, `descripcion`, `tipo`, `total`, `pago`, `saldo`, `fecha`, `hora`) VALUES
(14, 'transporte', 5, 4, 'aqui hay oro', 1, 150, 120, 30, '11/02/2018', '10:20am'),
(15, 'transporte', 5, 4, 'pachanga                            ', 2, 10, 20, 30, '02/02/19', '7:53am'),
(18, 'transporte', 6, 5, 'Transporte de carga de frutas              ', 2, 123, 321, 111, '02/02/19', '2:54pm'),
(19, 'carrera', 5, 6, 'Carrera simple de lugar X a lugar Y              ', 1, 400, 100, 300, '02/02/19', '2:56pm'),
(20, 'carrera', 6, 6, 'Carga de instrumentos musicales', 2, 700, 400, 300, '02/02/19', '2:57pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taxi`
--

CREATE TABLE `taxi` (
  `ID_taxi` int(11) NOT NULL,
  `numero_movil` int(11) DEFAULT NULL,
  `placa` varchar(200) DEFAULT NULL,
  `modelo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `taxi`
--

INSERT INTO `taxi` (`ID_taxi`, `numero_movil`, `placa`, `modelo`, `marca`, `descripcion`, `fecha`, `hora`) VALUES
(1, 12321321, 'sadsadsad', 'caldina', 'toyota', 'sadsadad', '24/01/19', '1:57pm'),
(2, 213, 'asd', 'sadsadsa', 'dsadsa', 'sad', '01/02/19', '10:49pm'),
(3, 2321, 'AER-112', 'WB', 'Toyota', 'El material de este auto es el cromo', '02/02/19', '2:00pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `ID_tipo` int(11) NOT NULL,
  `tipo_taxi` varchar(200) DEFAULT NULL,
  `fecha` varchar(50) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`ID_tipo`, `tipo_taxi`, `fecha`, `hora`) VALUES
(1, 'servicio', '24/01/19', '6:49pm'),
(2, 'transporte', '26/01/19', '7:08pm'),
(3, 'carga', '02/02/19', '2:12pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_administrador`
--

CREATE TABLE `usuario_administrador` (
  `ID_usuario_administrador` int(11) NOT NULL,
  `email` varchar(300) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `cargo` varchar(200) DEFAULT NULL,
  `alias` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_administrador`
--

INSERT INTO `usuario_administrador` (`ID_usuario_administrador`, `email`, `password`, `cargo`, `alias`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'tooreentezXXXXXXT', 'mazamorra');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chofer`
--
ALTER TABLE `chofer`
  ADD PRIMARY KEY (`ID_chofer`),
  ADD KEY `restriccion_chofer_tipo` (`tipo_taxi`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_cliente`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ID_empresa`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID_Factura`),
  ADD KEY `restriccion_factura_servicio` (`servicio`),
  ADD KEY `restriccion_factura_chofer` (`chofer`),
  ADD KEY `restriccion_factura_cliente` (`cliente`),
  ADD KEY `restriccion_factura_tipo` (`tipo`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`ID_reporte`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`ID_servicio`),
  ADD KEY `restriccion_servicio_chofer` (`chofer`),
  ADD KEY `restriccion_servicio_cliente` (`cliente`),
  ADD KEY `restriccion_servicio_tipo` (`tipo`);

--
-- Indices de la tabla `taxi`
--
ALTER TABLE `taxi`
  ADD PRIMARY KEY (`ID_taxi`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`ID_tipo`);

--
-- Indices de la tabla `usuario_administrador`
--
ALTER TABLE `usuario_administrador`
  ADD PRIMARY KEY (`ID_usuario_administrador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chofer`
--
ALTER TABLE `chofer`
  MODIFY `ID_chofer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `ID_Factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `ID_reporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `ID_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `taxi`
--
ALTER TABLE `taxi`
  MODIFY `ID_taxi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `ID_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario_administrador`
--
ALTER TABLE `usuario_administrador`
  MODIFY `ID_usuario_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `chofer`
--
ALTER TABLE `chofer`
  ADD CONSTRAINT `restriccion_chofer_tipo` FOREIGN KEY (`tipo_taxi`) REFERENCES `tipo` (`ID_tipo`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `restriccion_factura_chofer` FOREIGN KEY (`chofer`) REFERENCES `chofer` (`ID_chofer`),
  ADD CONSTRAINT `restriccion_factura_cliente` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`ID_cliente`),
  ADD CONSTRAINT `restriccion_factura_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`ID_tipo`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `restriccion_servicio_chofer` FOREIGN KEY (`chofer`) REFERENCES `chofer` (`ID_chofer`),
  ADD CONSTRAINT `restriccion_servicio_cliente` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`ID_cliente`),
  ADD CONSTRAINT `restriccion_servicio_tipo` FOREIGN KEY (`tipo`) REFERENCES `tipo` (`ID_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
