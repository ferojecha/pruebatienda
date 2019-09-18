-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-09-2019 a las 07:02:09
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

DROP TABLE IF EXISTS `inventario`;
CREATE TABLE IF NOT EXISTS `inventario` (
  `REFERENCIA` varchar(3) DEFAULT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `IMAGEN` varchar(18) DEFAULT NULL,
  `EXISTENCIAS` int(2) DEFAULT NULL,
  `DESCRIPCION` varchar(70) DEFAULT NULL,
  `CLASIFICACION` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`REFERENCIA`, `NOMBRE`, `IMAGEN`, `EXISTENCIAS`, `DESCRIPCION`, `CLASIFICACION`) VALUES
('A1', 'Escritorio roble', 'escritorio1.png', 10, 'Escritorio de madera de roble con medidas 105x150x75', 'MD'),
('A2', 'Expositor negro', 'expositor1.png', 11, 'Expositor negro con medidas tal por tal por tal', 'ET'),
('A3', 'mesa clara', 'mesa3.png', 12, 'mesa de madera de pino con dimensiones AxBxC.', 'MD'),
('A4', 'Pizarra Verde', 'pizarra1.png', 13, 'pizarra de color verde con medidas tal por tal por tal.', 'PD'),
('A5', 'Silla vintage', 'silla1.png', 14, 'silla estilo vintage de madera de maple y dimensiones tanto por tanto.', 'SD'),
('A6', 'Sillon oficina negro', 'sillonoficina1.png', 15, 'sillon ergonómico tapicería negra.', 'SD'),
('A7', 'Sillon oficina vino', 'sillonoficina2.png', 16, 'sillón ergonómico tapicería vino.', 'SD'),
('A8', 'tarima negra', 'tarima1.png', 17, 'Tarima dimensiones tanto por tanto por tanto.', 'TT'),
('A9', 'Mesa marrón', 'mesa1.png', 22, 'Mesa color marrón ocre con medidas x y z.', 'MT'),
('A10', 'Mesa blanca', 'mesa2.png', 7, 'Mesa blanca aluminio medias xyz. Especial para dibujo técnico.', 'MT'),
('A11', 'Mesa antigua', 'mesa4.png', 4, 'Mesa hierro color madera medidas xyz.', 'MD'),
('A12', 'Silla oficina verde', 'sillaV1.png', 7, 'Silla verde medidas tal por tal por tal', 'SD');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
