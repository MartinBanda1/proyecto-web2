-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2022 a las 02:04:07
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_especial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_peliculas` int(11) NOT NULL,
  `nombre` varchar(140) NOT NULL,
  `duracion` float NOT NULL,
  `director` varchar(140) NOT NULL,
  `streaming_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_peliculas`, `nombre`, `duracion`, `director`, `streaming_fk`) VALUES
(4, 'Shutter Island', 138, 'Martin Scorsese', 1),
(5, 'Spider-Man: Into the Spider-Verse', 117, 'Bob Persichetti', 2),
(6, 'Fear and Loathing in Las Vegas', 118, 'Terry Gilliam', 3),
(22, 'the wolf of the wall street', 180, 'Martin Scorsese', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_de_streaming`
--

CREATE TABLE `servicio_de_streaming` (
  `id_streaming` int(11) NOT NULL,
  `nombre` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio_de_streaming`
--

INSERT INTO `servicio_de_streaming` (`id_streaming`, `nombre`) VALUES
(1, 'Netflix'),
(2, 'Disney+'),
(3, 'Prime video');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(140) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(4, 'martinbanda12@hotmail.com', '$2a$12$Q64BeAkwaNx.Z9vHVxbIo.iouX0xOlzMrGHdNMDuNMIVFszpxw3tC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_peliculas`),
  ADD KEY `streaming_fk` (`streaming_fk`) USING BTREE;

--
-- Indices de la tabla `servicio_de_streaming`
--
ALTER TABLE `servicio_de_streaming`
  ADD PRIMARY KEY (`id_streaming`) USING BTREE;

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_peliculas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `servicio_de_streaming`
--
ALTER TABLE `servicio_de_streaming`
  MODIFY `id_streaming` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`streaming_fk`) REFERENCES `servicio_de_streaming` (`id_streaming`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
