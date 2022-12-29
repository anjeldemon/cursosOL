-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2022 a las 23:47:37
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
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_usuario`
--

CREATE TABLE `roles_usuario` (
  `rolesid` int(10) NOT NULL,
  `usuarioid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '1 año'),
(6, '6 meses');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  `fechaDeNacimiento` date NOT NULL,
  `pass` varchar(255) NOT NULL,
  `generoid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apellidos`, `correo`, `telefono`, `fechaDeNacimiento`, `pass`, `generoid`) VALUES
(1234, 'usuario', 'prueba', 'prueba@prueba.com', 0, '2022-12-29', '1234', 3);

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
-- Indices de la tabla `roles_usuario`
--
ALTER TABLE `roles_usuario`
  ADD PRIMARY KEY (`rolesid`,`usuarioid`),
  ADD KEY `fk_rolesUsuario_usuario` (`usuarioid`);

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
  ADD KEY `fk_genero_usuario` (`generoid`);

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
  MODIFY `reg` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tiemposuscripcion`
--
ALTER TABLE `tiemposuscripcion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

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
-- Filtros para la tabla `roles_usuario`
--
ALTER TABLE `roles_usuario`
  ADD CONSTRAINT `fk_rolesUsuario_usuario` FOREIGN KEY (`usuarioid`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `fk_roles_rolesUsuario` FOREIGN KEY (`rolesid`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_genero_usuario` FOREIGN KEY (`generoid`) REFERENCES `genero` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
