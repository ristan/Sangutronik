-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-09-2013 a las 20:38:15
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sangutroniko`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CLIENTE`
--

CREATE TABLE IF NOT EXISTS `CLIENTE` (
  `RUT_CLIENTE` int(11) NOT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `CORREO` varchar(150) DEFAULT NULL,
  `DIRECCION` varchar(200) DEFAULT NULL,
  `FONO` int(11) DEFAULT NULL,
  `CLAVE` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`RUT_CLIENTE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `CLIENTE`
--

INSERT INTO `CLIENTE` (`RUT_CLIENTE`, `NOMBRE`, `CORREO`, `DIRECCION`, `FONO`, `CLAVE`) VALUES
(11632134, 'FELIPE MORALES PALACIOS', 'felipe_morales_palacios@hotmail.com', 'OCARROL 320 COLLIPULLI', 2812784, '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DETALLE_PEDIDO`
--

CREATE TABLE IF NOT EXISTS `DETALLE_PEDIDO` (
  `ID_DETALLE` int(11) NOT NULL,
  `ID_PEDIDO` int(11) DEFAULT NULL,
  `ID_PRODUCTO` int(11) DEFAULT NULL,
  `VALOR` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_DETALLE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ESTADO`
--

CREATE TABLE IF NOT EXISTS `ESTADO` (
  `ID_ESTADO` int(11) NOT NULL,
  `ESTADO` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ID_ESTADO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ESTADO`
--

INSERT INTO `ESTADO` (`ID_ESTADO`, `ESTADO`) VALUES
(1, 'PENDIENTE'),
(2, 'DESPACHADO'),
(3, 'PAGADO'),
(4, 'ENTREGADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `INVENTARIO`
--

CREATE TABLE IF NOT EXISTS `INVENTARIO` (
  `ID_ARTICULO` int(11) NOT NULL,
  `RUT_PROVEEDOR` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(100) DEFAULT NULL,
  `STOCK` int(11) DEFAULT NULL,
  `STOCK_MINIMO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_ARTICULO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `OPERADOR`
--

CREATE TABLE IF NOT EXISTS `OPERADOR` (
  `RUT_OPERADOR` int(11) NOT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `CLAVE` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`RUT_OPERADOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `OPERADOR`
--

INSERT INTO `OPERADOR` (`RUT_OPERADOR`, `NOMBRE`, `CLAVE`) VALUES
(11632134, 'FELIPE MORALES PALACIOS', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PEDIDO`
--

CREATE TABLE IF NOT EXISTS `PEDIDO` (
  `ID_PEDIDO` int(11) NOT NULL,
  `RUT_CLIENTE` int(11) DEFAULT NULL,
  `RUT_OPERADOR` int(11) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `HORA` time DEFAULT NULL,
  `ID_ESTADO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_PEDIDO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PRODUCTO`
--

CREATE TABLE IF NOT EXISTS `PRODUCTO` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `TIPO` varchar(1) DEFAULT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `VALOR` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_PRODUCTO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `PRODUCTO`
--

INSERT INTO `PRODUCTO` (`ID_PRODUCTO`, `TIPO`, `NOMBRE`, `VALOR`) VALUES
(1, 'S', 'AVE SOLITARIA', 1200),
(2, 'S', 'GRAN AVE', 2000),
(3, 'S', 'JARPA SIMPLE', 500),
(4, 'S', 'JARPA CRUJIENTE', 600),
(5, 'S', 'JARPA MARRAQUETA', 800),
(6, 'S', 'COMPLETO JUMBO', 1000),
(7, 'S', 'COMPLETO CHILENO', 1000),
(8, 'S', 'GRAN ITALIANO', 1000),
(9, 'S', 'CHURRASCO PREMIUM', 1500),
(10, 'S', 'CHURRASCO 2 PISOS', 2000),
(11, 'S', 'CHACARERO TRADICION', 1200),
(12, 'S', 'CHACARERO MARRAQUETA', 1800),
(13, 'S', 'CHACARERO GOLD', 2500),
(14, 'S', 'CHACARERO CRUJIENTE', 2500),
(15, 'S', 'CHACARERO TITANIUM', 2500),
(16, 'S', 'CHACARERO MAXIMUS', 2800),
(17, 'A', 'COCA-COLA 1/2 LITRO', 500),
(18, 'A', 'FANTA 1/2 LITRO', 500),
(19, 'A', 'SPRITE 1/2 LITRO', 500),
(20, 'A', 'PAPA FRITA GRANDE', 800),
(21, 'A', 'PAPA FRITA MEDIANA', 500),
(22, 'A', 'PAPA FRITA CHICA', 300),
(23, 'A', 'MAYONESA EXTRA', 200),
(24, 'A', 'TOMATE EXTRA', 200),
(25, 'A', 'PALTA EXTRA', 200),
(26, 'A', 'MOSTAZA EXTRA', 200),
(27, 'A', 'AJI EXTRA', 200),
(28, 'A', 'SALSA VERDE EXTRA', 200),
(29, 'A', 'KETCHUP EXTRA', 200),
(30, 'A', 'SALSA AJO EXTRA', 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PROVEEDOR`
--

CREATE TABLE IF NOT EXISTS `PROVEEDOR` (
  `RUT_PROVEEDOR` int(11) NOT NULL,
  `RAZON_SOCIAL` varchar(100) DEFAULT NULL,
  `CORREO` varchar(150) DEFAULT NULL,
  `DIRECCION` varchar(200) DEFAULT NULL,
  `CONTACTO` varchar(100) DEFAULT NULL,
  `FONO` int(11) DEFAULT NULL,
  PRIMARY KEY (`RUT_PROVEEDOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `PROVEEDOR`
--

INSERT INTO `PROVEEDOR` (`RUT_PROVEEDOR`, `RAZON_SOCIAL`, `CORREO`, `DIRECCION`, `CONTACTO`, `FONO`) VALUES
(69180500, 'SUPERMERCADO SANTA OLGA', 'VENTAS@SANTAOLGA.CL', 'SAAVEDRA SUR 6790 COLLIPULLI', 'MARTHA MONSALVE RAMIREZ', 2813450);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `VENTA`
--

CREATE TABLE IF NOT EXISTS `VENTA` (
  `ID_VENTA` int(11) NOT NULL,
  `ID_PEDIDO` int(11) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `HORA` time DEFAULT NULL,
  `ID_ESTADO` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_VENTA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
