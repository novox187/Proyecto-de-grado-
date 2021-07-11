-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2021 a las 23:57:25
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contenido` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `img` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `contenido`, `img`, `autor`, `fecha`) VALUES
(1, 'Graduacion de los Alumnos de Tercer año de bachill', 'Un momento muy bonito para los familiares y amigos de los alumnos al ver que cumplen una meta mas de su vida, pasando a ser unos vachilleres y dandoles todos los animos y deseos para que continuen estudiando Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis laudantium vero voluptatibus maxime illo odio recusandae impedit placeat porro eligendi ut quae animi omnis ea commodi dolores, consequuntur facere, similique esse illum? Delectus voluptas in sequi enim iste debitis odit! Cumque dolorem natus eaque corrupti possimus jsjass.asdasdasdasdasdasdasdasdsdasdasdasdasdas jaskdjaks', 'imagen 2.jpg', 'Harrison Ochoa', '2021-06-10 03:26:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estracto` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `autor` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cards`
--

INSERT INTO `cards` (`id`, `titulo`, `estracto`, `img`, `contenido`, `fecha`, `autor`) VALUES
(1, 'Dia del Maestro', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque ist- Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque ist- Voluptate similique et laboriosam nisi rerum distincti', 'imagen 3.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.', '2021-05-20 22:29:38', 'Harrison Ochoa'),
(2, 'Dia de La interculturalidad', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque ist- Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque ist- Voluptate similique et laboriosam nisi rerum distincti', 'imagen 5.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.', '2021-05-21 03:34:36', 'Harrison Ochoa'),
(3, 'Juegos Internos', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque ist- Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque ist- Voluptate similique et laboriosam nisi rerum distincti', 'imagen 4.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.', '2021-05-20 18:00:31', 'Harrison Ochoa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mision_vision`
--

CREATE TABLE `mision_vision` (
  `id` int(11) NOT NULL,
  `mision` text COLLATE utf8_unicode_ci NOT NULL,
  `vision` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mision_vision`
--

INSERT INTO `mision_vision` (`id`, `mision`, `vision`) VALUES
(1, 'Somos la Unidad Educativa “Francisco de Orellana” donde formamos bachilleres y brindamos una educación de calidad y calidez con propuestas pedagógicas innovadoras. Para que nuestra juventud obtenga liderazgo, y se desenvuelvan en un ambiente saludable.', 'Ser Institución Educativa de reconocimiento social, líder en calidad y excelencia en la provincia de Orellana y la región, que sirva como pilar fundamental para el desarrollo tecnológico y humanista con profundo respeto al medio ambiente y que sean gestores del buen vivir.\r\n\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `panel_control`
--

CREATE TABLE `panel_control` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link_nuevo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `link_editar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `seccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `panel_control`
--

INSERT INTO `panel_control` (`id`, `nombre`, `link_nuevo`, `link_editar`, `seccion`) VALUES
(1, 'BANNER', 'nuevo_banner.php', 'editar_banner.php', 'INICIO'),
(6, 'VISIÓN - MISION', 'nuevo_myv.php', 'editar_myv.php', 'INICIO'),
(8, 'ARTICULOS', 'nuevo_card.php', 'editar_card.php', 'INICIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `nombre`) VALUES
(1, 'INICIO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mision_vision`
--
ALTER TABLE `mision_vision`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `panel_control`
--
ALTER TABLE `panel_control`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `mision_vision`
--
ALTER TABLE `mision_vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `panel_control`
--
ALTER TABLE `panel_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
