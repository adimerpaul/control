-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2020 a las 16:15:04
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `iddocente` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` varchar(10) NOT NULL DEFAULT 'ACTIVO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`iddocente`, `nombre`, `usuario`, `password`, `fecha`, `estado`) VALUES
(1, 'ING.CHAMBI AJATA ADIMER PAUL', 'adimer', '123456', '2020-02-26 21:27:10', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `idevaluacion` int(11) NOT NULL,
  `facultad` varchar(155) NOT NULL,
  `carrera` varchar(155) NOT NULL,
  `asignatura` varchar(155) NOT NULL,
  `sigla` varchar(155) NOT NULL,
  `gestion` varchar(155) NOT NULL,
  `nombredocente` varchar(155) NOT NULL,
  `fechapresentacion` date NOT NULL,
  `fechainicio` date NOT NULL,
  `fechaconclusion` date NOT NULL,
  `justificacion` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `iddocente` int(11) NOT NULL,
  `paralelo` varchar(4) NOT NULL,
  `cumplimiento` varchar(255) NOT NULL,
  `comentario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`idevaluacion`, `facultad`, `carrera`, `asignatura`, `sigla`, `gestion`, `nombredocente`, `fechapresentacion`, `fechainicio`, `fechaconclusion`, `justificacion`, `fecha`, `iddocente`, `paralelo`, `cumplimiento`, `comentario`) VALUES
(1, 'FACULTAD NACIONAL DE INGENIERÍA', 'INGENIERÍA DE SISTEMAS', 'ACTUALIZACIONES TECNOLOGICAS', 'SIS2420', '2/2020', 'ING.CHAMBI AJATA ADIMER PAUL', '2020-02-27', '2020-02-27', '2020-02-27', 'AL MARGEN DE LOS TYEMAS', '2020-02-27 15:04:04', 1, 'A', '70 - 89%', 'FALTA DE FERIADOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `idexamen` int(11) NOT NULL,
  `examen` varchar(155) NOT NULL,
  `fecha` date NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `idevaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `examen`
--

INSERT INTO `examen` (`idexamen`, `examen`, `fecha`, `date`, `idevaluacion`) VALUES
(1, 'PRIMER PARCIAL', '2012-02-01', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex`
--

CREATE TABLE `kardex` (
  `idkardex` int(11) NOT NULL,
  `stdinicio` decimal(11,2) NOT NULL,
  `ingreso` int(11) NOT NULL,
  `salida` int(11) NOT NULL,
  `stdfinal` decimal(11,2) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo` varchar(55) NOT NULL,
  `responsable` varchar(155) NOT NULL,
  `dia` date NOT NULL,
  `turno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `kardex`
--

INSERT INTO `kardex` (`idkardex`, `stdinicio`, `ingreso`, `salida`, `stdfinal`, `idusuario`, `fecha`, `tipo`, `responsable`, `dia`, `turno`) VALUES
(1, '0.00', 0, 0, '220.00', 1, '2020-02-09 02:53:21', 'CAL HIDRATADA', 'Adminitrador', '2020-01-31', '22 a 06'),
(2, '0.00', 0, 0, '5.50', 1, '2020-02-09 02:53:54', 'FLOCULANTE 933', 'Administrador', '2020-01-31', '22 a 06'),
(3, '0.00', 0, 0, '27.90', 1, '2020-02-09 02:54:43', 'COAGULANTE 958', 'Administrador', '2020-01-31', '22 a 06'),
(4, '0.00', 0, 0, '123.30', 1, '2020-02-09 02:55:39', 'ACIDO SULFURICO', 'Administrador', '2020-01-31', '22 a 06'),
(5, '0.00', 0, 0, '0.00', 1, '2020-02-09 02:55:39', 'SAL', 'Administrador', '2020-01-31', '22 a 06'),
(10, '220.00', 0, 20, '200.00', 1, '2020-02-09 03:23:15', 'CAL HIDRATADA', 'Administrador', '2020-02-08', '22 a 06'),
(11, '5.50', 0, 0, '5.50', 1, '2020-02-09 03:25:24', 'FLOCULANTE 933', 'Administrador', '2020-02-08', '22 a 06'),
(13, '0.00', 0, 0, '0.00', 1, '2020-02-09 03:48:51', 'SAL', 'Administrador', '2020-02-08', '22 a 06'),
(14, '200.00', 0, 0, '200.00', 3, '2020-02-09 05:02:08', 'CAL HIDRATADA', 'maria jose', '2020-02-09', '06 a 14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practica`
--

CREATE TABLE `practica` (
  `idpractica` int(11) NOT NULL,
  `practica` varchar(155) NOT NULL,
  `fecha` date NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `idevaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `practica`
--

INSERT INTO `practica` (`idpractica`, `practica`, `fecha`, `date`, `idevaluacion`) VALUES
(1, 'PRACTICA 1', '2020-01-01', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `idproyecto` int(11) NOT NULL,
  `proyecto` varchar(155) NOT NULL,
  `fecha` date NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `idevaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`idproyecto`, `proyecto`, `fecha`, `date`, `idevaluacion`) VALUES
(1, 'PROYECTO DE SISTEMAS', '2020-01-01', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

CREATE TABLE `tema` (
  `idtema` int(11) NOT NULL,
  `nombre` varchar(155) NOT NULL,
  `estado` varchar(155) NOT NULL DEFAULT 'AVANZADO',
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `idevaluacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`idtema`, `nombre`, `estado`, `fecha`, `idevaluacion`) VALUES
(1, 'TOERIA DEL TODO', 'Avanzado', '2020-02-27 15:04:04', 1),
(2, 'BASE DE DATOS', 'Avanzado', '2020-02-27 15:04:04', 1),
(3, 'SQL DDL', 'Avanzado', '2020-02-27 15:04:04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporaltema`
--

CREATE TABLE `temporaltema` (
  `idtemporaltema` int(11) NOT NULL,
  `nombre` varchar(155) NOT NULL,
  `estado` varchar(155) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `usuario` varchar(55) NOT NULL,
  `clave` varchar(55) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `estado` varchar(10) NOT NULL DEFAULT 'ACTIVO',
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `turno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `usuario`, `clave`, `tipo`, `estado`, `fecha`, `turno`) VALUES
(1, 'Administrador', 'admin', '123456', 'admin', 'ACTIVO', '2020-02-09 01:49:15', '22 a 06'),
(3, 'maria jose', 'maria', 'maria', 'trabajador', 'ACTIVO', '2020-02-09 04:31:43', '06 a 14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`iddocente`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`idevaluacion`),
  ADD KEY `iddocente` (`iddocente`);

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`idexamen`);

--
-- Indices de la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD PRIMARY KEY (`idkardex`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `practica`
--
ALTER TABLE `practica`
  ADD PRIMARY KEY (`idpractica`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`idproyecto`);

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`idtema`),
  ADD KEY `idevaluacion` (`idevaluacion`);

--
-- Indices de la tabla `temporaltema`
--
ALTER TABLE `temporaltema`
  ADD PRIMARY KEY (`idtemporaltema`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `iddocente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `idevaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `examen`
--
ALTER TABLE `examen`
  MODIFY `idexamen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `kardex`
--
ALTER TABLE `kardex`
  MODIFY `idkardex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `practica`
--
ALTER TABLE `practica`
  MODIFY `idpractica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `idproyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `idtema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `temporaltema`
--
ALTER TABLE `temporaltema`
  MODIFY `idtemporaltema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `evaluacion_ibfk_1` FOREIGN KEY (`iddocente`) REFERENCES `docente` (`iddocente`);

--
-- Filtros para la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD CONSTRAINT `kardex_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `tema_ibfk_1` FOREIGN KEY (`idevaluacion`) REFERENCES `evaluacion` (`idevaluacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
