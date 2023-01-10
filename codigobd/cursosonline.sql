-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2023 a las 22:40:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursosonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(10) NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursoscompletados`
--

CREATE TABLE `cursoscompletados` (
  `id` int(10) NOT NULL,
  `fechaFinalizado` date NOT NULL,
  `usuarioid` int(10) NOT NULL,
  `cursosid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE `evaluaciones` (
  `id` int(10) NOT NULL,
  `evaluacion` varchar(255) NOT NULL,
  `cursosid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id` int(10) NOT NULL,
  `genero` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `genero`) VALUES
(1, 'femenino'),
(2, 'masculino'),
(3, 'otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(10) NOT NULL,
  `fechaDeRealizado` date DEFAULT NULL,
  `nota` int(10) DEFAULT NULL,
  `evaluacionesid` int(10) NOT NULL,
  `usuarioid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrosuscripcion`
--

CREATE TABLE `registrosuscripcion` (
  `reg` int(10) NOT NULL,
  `fechaDeSuscripcion` date NOT NULL,
  `fechaFinSuscripcion` date NOT NULL,
  `usuarioid` int(10) NOT NULL,
  `tiempoSuscripcionid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrosuscripcion`
--

INSERT INTO `registrosuscripcion` (`reg`, `fechaDeSuscripcion`, `fechaFinSuscripcion`, `usuarioid`, `tiempoSuscripcionid`) VALUES
(9, '2023-01-10', '2024-01-10', 1111, 365);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) NOT NULL,
  `rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(0, 'default'),
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiemposuscripcion`
--

CREATE TABLE `tiemposuscripcion` (
  `id` int(10) NOT NULL,
  `cantidadTiempo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiemposuscripcion`
--

INSERT INTO `tiemposuscripcion` (`id`, `cantidadTiempo`) VALUES
(180, '6 meses'),
(365, '1 año');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `fechaDeNacimiento` date NOT NULL,
  `pass` varchar(255) NOT NULL,
  `generoid` int(10) NOT NULL,
  `rol_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apellidos`, `correo`, `telefono`, `fechaDeNacimiento`, `pass`, `generoid`, `rol_id`) VALUES
(1002, 'usu002', 'prueba002', 'prueba@prueba.com', 3000000002, '2000-01-02', 'fba9d88164f3e2d9109ee770223212a0', 3, 0),
(1003, 'usu003', 'prueba003', 'prueba@prueba.com', 3000000003, '2000-01-03', 'aa68c75c4a77c87f97fb686b2f068676', 3, 0),
(1004, 'usu004', 'prueba004', 'prueba@prueba.com', 3000000004, '2000-01-04', 'fed33392d3a48aa149a87a38b875ba4a', 3, 0),
(1005, 'usu005', 'prueba005', 'prueba@prueba.com', 3000000005, '2000-01-05', '2387337ba1e0b0249ba90f55b2ba2521', 3, 0),
(1006, 'usu006', 'prueba006', 'prueba@prueba.com', 3000000006, '2000-01-06', '1006', 3, 0),
(1007, 'usu007', 'prueba007', 'prueba@prueba.com', 3000000007, '2000-01-07', '1007', 3, 0),
(1008, 'usu008', 'prueba008', 'prueba@prueba.com', 3000000008, '2000-01-08', '1008', 3, 0),
(1009, 'usu009', 'prueba009', 'prueba@prueba.com', 3000000009, '2000-01-09', '1009', 3, 0),
(1010, 'usu010', 'prueba010', 'prueba@prueba.com', 3000000010, '2000-01-10', '1010', 3, 0),
(1011, 'usu011', 'prueba011', 'prueba@prueba.com', 3000000011, '2000-01-11', '1011', 3, 0),
(1012, 'usu012', 'prueba012', 'prueba@prueba.com', 3000000012, '2000-01-12', '1012', 3, 0),
(1013, 'usu013', 'prueba013', 'prueba@prueba.com', 3000000013, '2000-01-13', '1013', 3, 0),
(1014, 'usu014', 'prueba014', 'prueba@prueba.com', 3000000014, '2000-01-14', '1014', 3, 0),
(1015, 'usu015', 'prueba015', 'prueba@prueba.com', 3000000015, '2000-01-15', '1015', 3, 0),
(1016, 'usu016', 'prueba016', 'prueba@prueba.com', 3000000016, '2000-01-16', '1016', 3, 0),
(1017, 'usu017', 'prueba017', 'prueba@prueba.com', 3000000017, '2000-01-17', '1017', 3, 0),
(1018, 'usu018', 'prueba018', 'prueba@prueba.com', 3000000018, '2000-01-18', '1018', 3, 0),
(1019, 'usu019', 'prueba019', 'prueba@prueba.com', 3000000019, '2000-01-19', '1019', 3, 0),
(1020, 'usu020', 'prueba020', 'prueba@prueba.com', 3000000020, '2000-01-20', '65cc2c8205a05d7379fa3a6386f710e1', 3, 0),
(1021, 'usu021', 'prueba021', 'prueba@prueba.com', 3000000021, '2000-01-21', '1021', 3, 0),
(1022, 'usu022', 'prueba022', 'prueba@prueba.com', 3000000022, '2000-01-22', '1022', 3, 0),
(1023, 'usu023', 'prueba023', 'prueba@prueba.com', 3000000023, '2000-01-23', '1023', 3, 0),
(1024, 'usu024', 'prueba024', 'prueba@prueba.com', 3000000024, '2000-01-24', '81dc9bdb52d04dc20036dbd8313ed055', 3, 0),
(1025, 'usu025', 'prueba025', 'prueba@prueba.com', 3000000025, '2000-01-25', '81dc9bdb52d04dc20036dbd8313ed055', 3, 0),
(1026, 'usu026', 'prueba026', 'prueba@prueba.com', 3000000026, '2000-01-26', '81dc9bdb52d04dc20036dbd8313ed055', 3, 0),
(1111, 'usuario2', 'prueba1', 'prueba@prueba.com', 5815759, '2022-12-29', 'd93591bdf7860e1e4ee2fca799911215', 3, 0),
(1234, 'usuario', 'prueba', 'prueba@prueba.com', 2147483647, '2022-12-29', '81dc9bdb52d04dc20036dbd8313ed055', 3, 0),
(5678, 'admin', 'prueba', 'prueba@prueba.com', 5678, '2022-12-30', '674f3c2c1a8a6f90461e8a66fb5550ba', 1, 0),
(5679, 'usu001', 'prueba001', 'prueba@prueba.com', 3000000001, '2000-01-01', '1001', 3, 0),
(1031150195, 'Yair', 'Millan Ramos', 'yairmillan1@gmail.com', 3017319798, '2023-01-04', '818a3035247139a77c4b600337a2c1e6', 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursoscompletados`
--
ALTER TABLE `cursoscompletados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cursosCompletados_usuario` (`usuarioid`),
  ADD KEY `fk_cursos_cursosCompletados` (`cursosid`);

--
-- Indices de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cursos_evaluaciones` (`cursosid`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_evaluaciones_notas` (`evaluacionesid`),
  ADD KEY `fk_notas_usuario` (`usuarioid`);

--
-- Indices de la tabla `registrosuscripcion`
--
ALTER TABLE `registrosuscripcion`
  ADD PRIMARY KEY (`reg`),
  ADD KEY `fk_usario_registro` (`usuarioid`),
  ADD KEY `FKregistroSu396489` (`tiempoSuscripcionid`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiemposuscripcion`
--
ALTER TABLE `tiemposuscripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_genero_usuario` (`generoid`),
  ADD KEY `fk_rol_usuario` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursoscompletados`
--
ALTER TABLE `cursoscompletados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registrosuscripcion`
--
ALTER TABLE `registrosuscripcion`
  MODIFY `reg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tiemposuscripcion`
--
ALTER TABLE `tiemposuscripcion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1031150196;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursoscompletados`
--
ALTER TABLE `cursoscompletados`
  ADD CONSTRAINT `fk_cursosCompletados_usuario` FOREIGN KEY (`usuarioid`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `fk_cursos_cursosCompletados` FOREIGN KEY (`cursosid`) REFERENCES `cursos` (`id`);

--
-- Filtros para la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD CONSTRAINT `fk_cursos_evaluaciones` FOREIGN KEY (`cursosid`) REFERENCES `cursos` (`id`);

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `fk_evaluaciones_notas` FOREIGN KEY (`evaluacionesid`) REFERENCES `evaluaciones` (`id`),
  ADD CONSTRAINT `fk_notas_usuario` FOREIGN KEY (`usuarioid`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `registrosuscripcion`
--
ALTER TABLE `registrosuscripcion`
  ADD CONSTRAINT `FKregistroSu396489` FOREIGN KEY (`tiempoSuscripcionid`) REFERENCES `tiemposuscripcion` (`id`),
  ADD CONSTRAINT `fk_usario_registro` FOREIGN KEY (`usuarioid`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_genero_usuario` FOREIGN KEY (`generoid`) REFERENCES `genero` (`id`),
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
