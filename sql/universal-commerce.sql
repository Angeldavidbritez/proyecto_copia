-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 21:09:23
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `universal-commerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contenido` varchar(1000) DEFAULT NULL,
  `valoracion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_emprendimientos`
--

CREATE TABLE `datos_emprendimientos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(5000) NOT NULL,
  `url` int(11) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `contacto` text NOT NULL,
  `logo` int(11) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emprendimientos`
--

CREATE TABLE `emprendimientos` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `creador_id` int(11) NOT NULL,
  `datos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_emprendimiento`
--

CREATE TABLE `info_emprendimiento` (
  `id` int(11) NOT NULL,
  `venta_mes` int(11) NOT NULL,
  `ultima_fecha` date NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inverciones`
--

CREATE TABLE `inverciones` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `emp_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `suma_invertida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'creador'),
(2, 'normal'),
(3, 'premiun');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_emprendimiento`
--

CREATE TABLE `tipo_emprendimiento` (
  `id` int(11) NOT NULL,
  `tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` char(35) NOT NULL,
  `apellido` char(35) NOT NULL,
  `mail` char(20) NOT NULL,
  `num_telefono` int(11) NOT NULL,
  `cuil` varchar(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `nom_usuario` char(30) NOT NULL,
  `password` char(50) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `mail`, `num_telefono`, `cuil`, `fecha_nacimiento`, `nom_usuario`, `password`, `rol_id`) VALUES
(1, 'angel', 'britez', 'angel@gmail.com', 1154731216, '12122133221', '0000-00-00', 'british', '12345678', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indices de la tabla `datos_emprendimientos`
--
ALTER TABLE `datos_emprendimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `emprendimientos`
--
ALTER TABLE `emprendimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datos_id` (`datos_id`),
  ADD KEY `creador_id` (`creador_id`);

--
-- Indices de la tabla `info_emprendimiento`
--
ALTER TABLE `info_emprendimiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indices de la tabla `inverciones`
--
ALTER TABLE `inverciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_id` (`emp_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_emprendimiento`
--
ALTER TABLE `tipo_emprendimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `emprendimientos`
--
ALTER TABLE `emprendimientos`
  ADD CONSTRAINT `emprendimientos_ibfk_1` FOREIGN KEY (`datos_id`) REFERENCES `datos_emprendimientos` (`id`),
  ADD CONSTRAINT `emprendimientos_ibfk_2` FOREIGN KEY (`creador_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `info_emprendimiento`
--
ALTER TABLE `info_emprendimiento`
  ADD CONSTRAINT `info_emprendimiento_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `emprendimientos` (`id`);

--
-- Filtros para la tabla `inverciones`
--
ALTER TABLE `inverciones`
  ADD CONSTRAINT `inverciones_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `emprendimientos` (`id`),
  ADD CONSTRAINT `inverciones_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
