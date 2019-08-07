-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2019 a las 03:14:56
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen1_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `idClientes` int(11) NOT NULL,
  `vNombreCompleto` varchar(100) NOT NULL,
  `iCedula` int(9) NOT NULL,
  `vTelefono` varchar(15) DEFAULT NULL,
  `vCorreo` varchar(100) NOT NULL,
  `vDireccion` varchar(200) DEFAULT NULL,
  `vProvincia` varchar(100) NOT NULL,
  `vCanton` varchar(100) NOT NULL,
  `vDistrito` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`idClientes`, `vNombreCompleto`, `iCedula`, `vTelefono`, `vCorreo`, `vDireccion`, `vProvincia`, `vCanton`, `vDistrito`) VALUES
(1, 'Hillary Obando herrera', 504290732, '87261224', 'hilla@gmail.com', '100 metros este y 50 sur de la Escuela Roosevelt, San Pedro de Montes de Oca', 'SJO', 'Montes de Oca', 'San Pedro'),
(5, 'Tommy Obando', 123456789, '123456789', 'tommy@gmail.com', '100m Norte gimnasio comunal Nuevo Arenal', 'Guana', 'Tila', 'Arenal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_facturas`
--

CREATE TABLE `tbl_facturas` (
  `idFactura` int(11) NOT NULL,
  `dFecha` date NOT NULL,
  `tHora` time NOT NULL,
  `iNumeroOrden` int(11) NOT NULL,
  `dSubtotal` decimal(9,2) NOT NULL,
  `dImpuestoServicio` decimal(9,2) NOT NULL,
  `dIVA` decimal(9,2) NOT NULL,
  `dTotal` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_facturas`
--

INSERT INTO `tbl_facturas` (`idFactura`, `dFecha`, `tHora`, `iNumeroOrden`, `dSubtotal`, `dImpuestoServicio`, `dIVA`, `dTotal`) VALUES
(1, '2019-07-04', '15:20:00', 100, '3500.00', '395.50', '455.00', '4350.50'),
(6, '2019-07-04', '15:20:00', 111, '5000.00', '500.00', '650.00', '6150.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ordenes`
--

CREATE TABLE `tbl_ordenes` (
  `idOrdenes` int(11) NOT NULL,
  `dFecha` date NOT NULL,
  `tHora` time NOT NULL,
  `tiNumeroMesa` tinyint(4) NOT NULL,
  `iCliente` int(11) NOT NULL,
  `iPlatillos` int(11) NOT NULL,
  `cEstado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_ordenes`
--

INSERT INTO `tbl_ordenes` (`idOrdenes`, `dFecha`, `tHora`, `tiNumeroMesa`, `iCliente`, `iPlatillos`, `cEstado`) VALUES
(111, '2019-07-05', '20:12:00', 8, 5, 3, 'E'),
(115, '2019-07-03', '15:15:00', 6, 1, 3, 'P'),
(116, '2019-07-01', '19:07:00', 8, 5, 3, 'L'),
(117, '2019-07-01', '19:07:00', 8, 5, 3, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_platillos`
--

CREATE TABLE `tbl_platillos` (
  `idPlatillos` int(11) NOT NULL,
  `vNombre` varchar(50) NOT NULL,
  `dPrecio` decimal(7,2) NOT NULL,
  `vDescripcion` varchar(200) NOT NULL,
  `vPresentacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_platillos`
--

INSERT INTO `tbl_platillos` (`idPlatillos`, `vNombre`, `dPrecio`, `vDescripcion`, `vPresentacion`) VALUES
(1, 'Casado', '3500.00', 'Platillo de arroz y frijoles con no se que mas lleva un casado...', 'presentacion del casado'),
(3, 'Pizza Hawaina', '6000.00', 'Pizza hawaiana con piÃ±a', 'presentacion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`idClientes`);

--
-- Indices de la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `iNumeroOrden` (`iNumeroOrden`);

--
-- Indices de la tabla `tbl_ordenes`
--
ALTER TABLE `tbl_ordenes`
  ADD PRIMARY KEY (`idOrdenes`),
  ADD UNIQUE KEY `idOrdenes` (`idOrdenes`),
  ADD KEY `iPlatillos` (`iPlatillos`),
  ADD KEY `iCliente` (`iCliente`);

--
-- Indices de la tabla `tbl_platillos`
--
ALTER TABLE `tbl_platillos`
  ADD PRIMARY KEY (`idPlatillos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbl_ordenes`
--
ALTER TABLE `tbl_ordenes`
  MODIFY `idOrdenes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT de la tabla `tbl_platillos`
--
ALTER TABLE `tbl_platillos`
  MODIFY `idPlatillos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_facturas`
--
ALTER TABLE `tbl_facturas`
  ADD CONSTRAINT `tbl_facturas_ibfk_1` FOREIGN KEY (`iNumeroOrden`) REFERENCES `tbl_ordenes` (`idOrdenes`);

--
-- Filtros para la tabla `tbl_ordenes`
--
ALTER TABLE `tbl_ordenes`
  ADD CONSTRAINT `tbl_ordenes_ibfk_1` FOREIGN KEY (`iPlatillos`) REFERENCES `tbl_platillos` (`idPlatillos`),
  ADD CONSTRAINT `tbl_ordenes_ibfk_2` FOREIGN KEY (`iCliente`) REFERENCES `tbl_clientes` (`idClientes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
