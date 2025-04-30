-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2025 a las 22:34:53
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliotecamuzkiz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `DNI` varchar(9) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `APE1` varchar(25) NOT NULL,
  `APE2` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`DNI`, `NOMBRE`, `APE1`, `APE2`) VALUES
('12673645L', 'Ali', 'Hazelwood', NULL),
('22324785V', 'Julia', 'Navarro', NULL),
('22436467X', 'Jonas', 'Salzgeber', NULL),
('23847563S', 'Brandon', 'Sanderson', NULL),
('35468763A', 'Pablo', 'Bueno', NULL),
('64537453T', 'Leigh', 'Bardugo', NULL),
('65887324D', 'Jordan', 'Peterson', NULL),
('72443264G', 'Fujimoto', 'Tatsuki', NULL),
('73645324N', 'Terry ', 'Pratchett', NULL),
('73645362S', 'Patrick', 'Rothfuss', NULL),
('87354732M', 'Robert', 'Jordan', NULL),
('90853392F', 'Brian ', 'McClellan', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `ISBN` varchar(13) NOT NULL,
  `TITULO` varchar(52) NOT NULL,
  `PAGINAS` int(4) NOT NULL,
  `URLIMG` varchar(71) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ISBN`, `TITULO`, `PAGINAS`, `URLIMG`) VALUES
('9781408728864', 'Bride', 384, 'https://m.media-amazon.com/images/I/71A4FxmsL-L._SL1500_.jpg'),
('9788401022524', 'El Nombre Del Viento', 944, 'https://m.media-amazon.com/images/I/917h27nYxFL._SL1500_.jpg'),
('9788401027970', 'El Niño Que Perdió La Guerra', 640, 'https://m.media-amazon.com/images/I/81rVDjUau+L._SL1500_.jpg'),
('9788408193302', '12 Reglas Para Vivir', 512, 'https://m.media-amazon.com/images/I/71mxnGdOQqL._SL1500_.jpg'),
('9788412299229', 'Promesa De Sangre', 560, 'https://m.media-amazon.com/images/I/71PokmJpaHL._SL1280_.jpg'),
('9788413143194', 'El Imperio Final', 680, 'https://m.media-amazon.com/images/I/51g1HqUWLSL._SY445_SX342_.jpg'),
('9788413143736', 'El Pozo De La Ascensión', 784, 'https://m.media-amazon.com/images/I/81QpposWbPL._SL1500_.jpg'),
('9788413143941', 'El Archivo De Las Tormentas I El Camino De Los Reyes', 1200, 'https://m.media-amazon.com/images/I/81yNw7TJDOL._SY466_.jpg'),
('9788413143958', 'El Archivo De Las Tormentas II Palabras Radiantes', 1248, 'https://m.media-amazon.com/images/I/81LBim3i3HL._SL1500_.jpg'),
('9788413146591', 'El Archivo De Las Tormentas III Juramentada', 1408, 'https://m.media-amazon.com/images/I/91aS6KfXULL._SL1500_.jpg'),
('9788415988595', 'La Piedad Del Primero', 576, 'https://m.media-amazon.com/images/I/51Ivs7aq5IL._SL1499_.jpg'),
('9788418002496', 'Sombra Y Hueso', 416, 'https://m.media-amazon.com/images/I/71ApA-ao6RL._SL1200_.jpg'),
('9788445007006', 'La Rueda Del Tiempo El Ojo del Mundo', 832, 'https://m.media-amazon.com/images/I/91BrzYTawmL._SL1500_.jpg'),
('9788466658843', 'Elantris', 800, 'https://m.media-amazon.com/images/I/81XE08B76cL._SL1500_.jpg'),
('9788466658874', 'El Aliento De Los Dioses', 720, 'https://m.media-amazon.com/images/I/710ilWB4TDL._SL1500_.jpg'),
('9788466658911', 'El Heroe De Las Eras', 753, 'https://m.media-amazon.com/images/I/715MvNOVvPL._SL1500_.jpg'),
('9788466658928', 'Aleación De Ley', 351, 'https://m.media-amazon.com/images/I/81tA+z79OAL._SL1500_.jpg'),
('9788466662321', 'Arcanum Ilimitado: La Colección De Cosmere', 784, 'https://m.media-amazon.com/images/I/81FvPJ+SpcL._SL1500_.jpg'),
('9788467941159', 'Chainsaw Man', 192, 'https://m.media-amazon.com/images/I/81zijlool9L._SL1500_.jpg'),
('9788497596794', 'El Color De La Magia', 288, 'https://m.media-amazon.com/images/I/91c9RGsLWdL._SL1500_.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_autores`
--

CREATE TABLE `libros_autores` (
  `ISBN` varchar(13) NOT NULL,
  `DNI` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros_autores`
--

INSERT INTO `libros_autores` (`ISBN`, `DNI`) VALUES
('9781408728864', '12673645L'),
('9788401022524', '73645362S'),
('9788408193302', '65887324D'),
('9788412299229', '35468763A'),
('9788413143194', '23847563S'),
('9788413143736', '23847563S'),
('9788413143941', '23847563S'),
('9788413143958', '23847563S'),
('9788413146591', '23847563S'),
('9788415988595', '22324785V'),
('9788418002496', '64537453T'),
('9788445007006', '87354732M'),
('9788466658843', '23847563S'),
('9788466658874', '23847563S'),
('9788466658911', '23847563S'),
('9788466658928', '23847563S'),
('9788466662321', '23847563S'),
('9788467941159', '72443264G'),
('9788497596794', '73645324N');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `penalizaciones`
--

CREATE TABLE `penalizaciones` (
  `id` int(11) NOT NULL,
  `cod_usuario` int(11) DEFAULT NULL,
  `motivo` varchar(255) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `penalizaciones`
--

INSERT INTO `penalizaciones` (`id`, `cod_usuario`, `motivo`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 14, 'Excedió el límite de libros prestados en un día', '2025-01-30', '2025-02-28'),
(2, 15, 'Excedió el límite de libros prestados en un día', '2025-01-30', '2025-02-28'),
(3, 16, 'Excedió el límite de libros prestados en un día', '2025-01-30', '2025-02-28'),
(4, 17, 'Excedió el límite de libros prestados en un día', '2025-01-30', '2025-02-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `cod_usuario` int(11) DEFAULT NULL,
  `isbn` varchar(13) DEFAULT NULL,
  `fecha_reserva` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `cod_usuario`, `isbn`, `fecha_reserva`) VALUES
(1, 13, NULL, '2025-01-30 20:02:13'),
(2, 13, NULL, '2025-01-30 20:02:13'),
(3, 13, NULL, '2025-01-30 20:02:14'),
(4, 13, NULL, '2025-01-30 20:02:14'),
(5, 13, NULL, '2025-01-30 20:02:15'),
(6, 13, NULL, '2025-01-30 20:02:15'),
(7, 13, NULL, '2025-01-30 20:02:15'),
(8, 13, NULL, '2025-01-30 20:02:16'),
(9, 13, NULL, '2025-01-30 20:02:16'),
(10, 13, NULL, '2025-01-30 20:05:12'),
(11, 13, NULL, '2025-01-30 20:05:12'),
(12, 13, NULL, '2025-01-30 20:05:13'),
(13, 13, NULL, '2025-01-30 20:05:13'),
(14, 13, NULL, '2025-01-30 20:05:13'),
(15, 13, NULL, '2025-01-30 20:05:15'),
(16, 13, NULL, '2025-01-30 20:09:01'),
(17, 13, NULL, '2025-01-30 20:09:01'),
(18, 13, NULL, '2025-01-30 20:16:20'),
(19, 13, NULL, '2025-01-30 20:16:20'),
(20, 13, NULL, '2025-01-30 20:16:20'),
(21, 13, NULL, '2025-01-30 20:16:25'),
(22, 13, '9788415988595', '2025-01-30 20:22:42'),
(23, 13, '9788413146591', '2025-01-30 20:23:43'),
(24, 14, '9788466658928', '2025-01-30 20:37:45'),
(25, 14, NULL, '2025-01-30 20:49:47'),
(26, 14, NULL, '2025-01-30 20:49:48'),
(27, 15, NULL, '2025-01-30 21:06:01'),
(28, 15, NULL, '2025-01-30 21:06:02'),
(29, 15, NULL, '2025-01-30 21:06:02'),
(30, 16, NULL, '2025-01-30 21:10:05'),
(31, 16, NULL, '2025-01-30 21:10:07'),
(32, 16, NULL, '2025-01-30 21:10:08'),
(33, 17, NULL, '2025-01-30 21:33:46'),
(34, 17, NULL, '2025-01-30 21:33:51'),
(35, 17, NULL, '2025-01-30 21:33:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `COD_USUARIO` int(6) NOT NULL,
  `NOMBRE_USUARIO` varchar(20) NOT NULL,
  `CONTRASENA` varchar(12) NOT NULL,
  `TELEFONO` int(9) NOT NULL,
  `DIRECCION` varchar(40) DEFAULT NULL,
  `CORREO_ELEC` varchar(40) NOT NULL,
  `NUM_SS` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`COD_USUARIO`, `NOMBRE_USUARIO`, `CONTRASENA`, `TELEFONO`, `DIRECCION`, `CORREO_ELEC`, `NUM_SS`) VALUES
(1, 'JonIbarrola', 'hola123', 643764722, NULL, 'jon.ibarrola06@somo.eus', '123321456654'),
(2, 'AndoniMaroto', 'adios123', 688943521, NULL, 'andoni.maroto01@somo.eus', NULL),
(13, 'Prueba12', '123456', 67123612, 'Calle Somoo', 'pruebas@somo.eus', '12314566'),
(14, 'JonPepe', '123456', 61758123, 'calle somorrostro', 'jonpepe@somo.eus', '123813712'),
(15, 'Eliasprueba123', '1234', 61234125, 'calle muzkiz', 'eliasprueba123@somo.eus', '214155612431'),
(16, 'nuevo', '1234', 612312, 'callepepe', 'nuevo@somo.eus', '12312454'),
(17, 'PEPEJUAN', '1234', 2147483647, 'calle muzkis', 'PEPEJUAN@SOMO.EUS', '12315123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indices de la tabla `libros_autores`
--
ALTER TABLE `libros_autores`
  ADD PRIMARY KEY (`ISBN`,`DNI`),
  ADD KEY `DNI` (`DNI`);

--
-- Indices de la tabla `penalizaciones`
--
ALTER TABLE `penalizaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_usuario` (`cod_usuario`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_usuario` (`cod_usuario`),
  ADD KEY `isbn` (`isbn`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`COD_USUARIO`),
  ADD UNIQUE KEY `NOMBRE_USUARIO` (`NOMBRE_USUARIO`),
  ADD UNIQUE KEY `UNIQUE` (`NUM_SS`),
  ADD UNIQUE KEY `NUM_SS` (`NUM_SS`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `penalizaciones`
--
ALTER TABLE `penalizaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `COD_USUARIO` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros_autores`
--
ALTER TABLE `libros_autores`
  ADD CONSTRAINT `libros_autores_ibfk_1` FOREIGN KEY (`ISBN`) REFERENCES `libros` (`ISBN`),
  ADD CONSTRAINT `libros_autores_ibfk_2` FOREIGN KEY (`DNI`) REFERENCES `autores` (`DNI`);

--
-- Filtros para la tabla `penalizaciones`
--
ALTER TABLE `penalizaciones`
  ADD CONSTRAINT `penalizaciones_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`COD_USUARIO`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuarios` (`COD_USUARIO`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `libros` (`ISBN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
