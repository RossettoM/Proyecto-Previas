-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2021 a las 22:36:12
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `dni` int(8) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `fecha nacimiento` date NOT NULL,
  `fecha ingreso` date NOT NULL,
  `turno` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`dni`, `telefono`, `direccion`, `nombres`, `apellido`, `fecha nacimiento`, `fecha ingreso`, `turno`) VALUES
(20, 656, '25', 'juan', 'we', '2019-09-03', '2019-09-18', 'mañana'),
(95, 478, '68', 'luis', 'trebejo', '2019-10-12', '2019-10-16', 'tarde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_adeuda`
--

CREATE TABLE `alumno_adeuda` (
  `alumno_dni` int(8) NOT NULL,
  `Materias_titulo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumno_adeuda`
--

INSERT INTO `alumno_adeuda` (`alumno_dni`, `Materias_titulo`) VALUES
(95, 'programacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `descripcion` varchar(45) DEFAULT NULL,
  `cant horas` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `turno` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`descripcion`, `cant horas`, `titulo`, `turno`) VALUES
('estudio universal', 2, 'fisica', 'mañana'),
('Estructurado', 1, 'programacion', 'tarde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan de estudios`
--

CREATE TABLE `plan de estudios` (
  `descripcion` varchar(255) NOT NULL,
  `Materias_titulo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `previas`
--

CREATE TABLE `previas` (
  `idprevias` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `profesor_nombre` varchar(45) NOT NULL,
  `Materias_titulo` varchar(45) NOT NULL,
  `turno` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `previas`
--

INSERT INTO `previas` (`idprevias`, `fecha`, `profesor_nombre`, `Materias_titulo`, `turno`) VALUES
(1, '2020-02-04', 'gomez', 'programacion', 'Mañana'),
(2, '2020-02-07', 'waldo', 'fisica', 'Tarde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `nombre` varchar(45) NOT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`nombre`, `mail`, `telefono`) VALUES
('gomez', 'gomezgo@gmail.com', '1147882222'),
('perez', 'perezprofe@hotmail.com', '1522036697'),
('waldo', 'waldon@hotmail.com', '1147700251');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `alumno_adeuda`
--
ALTER TABLE `alumno_adeuda`
  ADD PRIMARY KEY (`alumno_dni`,`Materias_titulo`),
  ADD KEY `fk_alumno_adeuda_alumno1_idx` (`alumno_dni`),
  ADD KEY `fk_alumno_adeuda_Materias1_idx` (`Materias_titulo`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`titulo`),
  ADD UNIQUE KEY `titulo_UNIQUE` (`titulo`);

--
-- Indices de la tabla `plan de estudios`
--
ALTER TABLE `plan de estudios`
  ADD KEY `fk_plan de estudios_Materias1_idx` (`Materias_titulo`);

--
-- Indices de la tabla `previas`
--
ALTER TABLE `previas`
  ADD PRIMARY KEY (`idprevias`),
  ADD KEY `fk_previas_profesor1_idx` (`profesor_nombre`),
  ADD KEY `fk_previas_Materias1_idx` (`Materias_titulo`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `previas`
--
ALTER TABLE `previas`
  MODIFY `idprevias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_adeuda`
--
ALTER TABLE `alumno_adeuda`
  ADD CONSTRAINT `fk_alumno_adeuda_Materias1` FOREIGN KEY (`Materias_titulo`) REFERENCES `materias` (`titulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_alumno_adeuda_alumno1` FOREIGN KEY (`alumno_dni`) REFERENCES `alumno` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plan de estudios`
--
ALTER TABLE `plan de estudios`
  ADD CONSTRAINT `fk_plan de estudios_Materias1` FOREIGN KEY (`Materias_titulo`) REFERENCES `materias` (`titulo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `previas`
--
ALTER TABLE `previas`
  ADD CONSTRAINT `fk_previas_Materias1` FOREIGN KEY (`Materias_titulo`) REFERENCES `materias` (`titulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_previas_profesor1` FOREIGN KEY (`profesor_nombre`) REFERENCES `profesor` (`nombre`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
