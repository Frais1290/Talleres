-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-02-2019 a las 10:48:56
-- Versión del servidor: 5.5.40
-- Versión de PHP: 5.4.36-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Taller1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Equipos`
--

CREATE TABLE IF NOT EXISTS `Equipos` (
  `id_equipos` double NOT NULL,
  `Nombre_equipo` varchar(20) NOT NULL,
  `Numero_de_jugadores` double NOT NULL,
  `Capitan_de_equipo` varchar(20) NOT NULL,
  `id_partidos` double NOT NULL,
  PRIMARY KEY (`id_equipos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Equipos`
--

INSERT INTO `Equipos` (`id_equipos`, `Nombre_equipo`, `Numero_de_jugadores`, `Capitan_de_equipo`, `id_partidos`) VALUES
(1, 'Barcelona', 12, 'leonel Messi ', 1),
(2, 'Real Madrid', 12, 'Crintiano Ronaldo', 4),
(3, 'Milan', 15, 'Tony Espina', 5),
(4, 'Villa Real', 18, 'Gustavo Peña', 2),
(5, 'PSG', 20, 'Lumier the beast', 6),
(6, 'Palermo', 22, 'Gabo Lopez', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Jugadores`
--

CREATE TABLE IF NOT EXISTS `Jugadores` (
  `id_jugadores` double NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Edad` double NOT NULL,
  `id_equipos` double NOT NULL,
  PRIMARY KEY (`id_jugadores`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Jugadores`
--

INSERT INTO `Jugadores` (`id_jugadores`, `Nombre`, `Apellido`, `Edad`, `id_equipos`) VALUES
(5, 'Ricardo', 'Pique', 42, 4),
(8, 'Chris', 'Lopez', 47, 5),
(9, 'Alfonzo', 'Suarez', 0, 1),
(10, 'Leonel', 'Messie', 40, 1),
(12, 'Cristiano', 'Ronaldo', 35, 2),
(15, 'Ronaldo', 'Gomez', 37, 3),
(20, 'Alfredo', 'Matute', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Partidos`
--

CREATE TABLE IF NOT EXISTS `Partidos` (
  `id_partidos` double NOT NULL,
  `Fechas` date NOT NULL,
  `id_equipos1` double NOT NULL,
  `id_equipos2` double NOT NULL,
  PRIMARY KEY (`id_partidos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Partidos`
--

INSERT INTO `Partidos` (`id_partidos`, `Fechas`, `id_equipos1`, `id_equipos2`) VALUES
(1, '2019-01-10', 2, 4),
(2, '2019-02-01', 5, 1),
(3, '2019-01-17', 4, 2),
(4, '2019-02-03', 3, 5),
(5, '2019-01-23', 5, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
