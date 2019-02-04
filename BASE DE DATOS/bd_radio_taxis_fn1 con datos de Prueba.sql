-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2019 a las 11:17:15
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
(7, 'Gualberto Pedro', 'Guzmán Heredia', 4, 'Calle Las Cuadras Nro. 700', 6936990, 4252517, '19/02/04', '11:12am'),
(8, 'Reynaldo Hipolito', 'Hinojosa Marquez', 5, 'Barrio El Jazmin s/n', 6088932, 4552281, '19/02/04', '11:12am'),
(9, 'Remberto Fernando', 'Soria Guaman', 5, 'Av. La Plata y calle Vaiven s/n', 7559866, 432655, '19/02/04', '11:12am');

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
(8, 7888588, 'Luis Marco', 'Butrón', 'C&M Editores', 'Calle Las Palmeras s/n', 7185999, 4552114, '19/01/25', '4:20am'),
(9, 7889591, 'Esteban Marcelo', 'Laredo Soria', 'La Pluma & Asociados', 'Av. Principal calle Velasco Edif. Miranda piso 6 of. 4', 78095412, 4356257, '19/01/27', '4:37am'),
(10, 7555410, 'Lusmila Gabriela', 'Danes Paila', 'Fotocopiadora \"Fassil\"', 'Av. Rumaypampa calle Albargatas s/n', 75889414, 432221, '19/01/30', '4:39am'),
(11, 6523217, 'Sinforoso', 'Melendres Pinto', '\"La Gata\" Producciones Audiovisuales', 'Calle \"Los Pardos\" entre \"Barrio Lujuana\" #445', 6989541, 458851, '19/01/30', '4:41am');

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
(1, 'Radiotaxis La Canija', 'Armado Cordova Alanez', 100058984, 2147483647, '18/12/21', '19/02/04', '4:22am');

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
(1, 'carrera', 7, 8, 'El cliente no quiso nit por alguna razon que dios sabra porque...', 4, 50, 50, 0, 0, '19/02/04', '11:10am'),
(2, 'transporte', 9, 10, 'Se quedo debiendo ese saldo de diez, dios sabe cuando pagara la doña..', 5, 100, 90, 10, 7555410, '19/02/04', '11:08am'),
(3, 'transporte', 9, 11, 'Un taxi de servicio realizo el transporte, algo no adecuado para el tipo de taxi, pero por urgencia se hizo, quedo un saldo de 5 Bs.', 4, 40, 35, 5, 6523217, '19/02/04', '11:08am');

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
(1, 'carrera', 7, 8, 'El Cliente llego 6 min tarde antes de lo establecido', 4, 50, 50, 0, '01/02/19', '9:42am'),
(2, 'transporte', 9, 10, 'Se transportó 5 cargas de lana de oveja del campo...  ', 5, 100, 90, 10, '19/02/04', '11:11am'),
(3, 'transporte', 9, 11, 'Se realizo el transporte de frutas en un yute. Eran papayas...                     ', 4, 40, 35, 5, '19/02/04', '11:11am'),
(4, 'carrera', 8, 10, 'Se llevo a la doña desde el condominio \"Las Bellucias\" hasta el condominio \"Las Torres\". No pidió recibo...', 4, 30, 30, 0, '19/02/04', '11:11am'),
(5, 'carrera', 7, 9, 'El cliente Esteban pidió que lo llevaran desde, el hotel donde se encontraba, hotel \"Las Americas\" hasta la plazuela \"Caracas\", fue una carrera corta. Tampoco pidió recibo..', 4, 15, 15, 0, '19/02/04', '11:11am');

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
(1, 78956125, 'AHY-784', 'Ipsum', 'Toyota', 'La vida es tan solo jugar y jugar, la vida es tan solo... PACMAN!', '19/02/04', '11:14am'),
(2, 7995412, 'ERG-455', 'Caldina', 'Nissan', 'Without A Face', '19/02/04', '11:13am'),
(3, 70555522, 'UUH-759', 'Cores', 'WMB', 'Eyes no face', '19/02/04', '11:13am');

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
(4, 'Servicio', '04/02/19', '11:15am'),
(5, 'Transporte', '04/02/19', '11:14am');

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
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'ADMINISTRADOR PRINCIPAL', 'DonGato');

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
  MODIFY `ID_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `ID_Factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `ID_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `ID_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `taxi`
--
ALTER TABLE `taxi`
  MODIFY `ID_taxi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `ID_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
