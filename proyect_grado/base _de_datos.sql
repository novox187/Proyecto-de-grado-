-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql301.epizy.com
-- Tiempo de generación: 15-07-2021 a las 17:52:12
-- Versión del servidor: 5.6.48-88.0
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `epiz_29142918_FDOdatabase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoridades`
--

CREATE TABLE `autoridades` (
  `id` int(11) NOT NULL,
  `nombres_apellidos` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `titulacion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `autoridades`
--

INSERT INTO `autoridades` (`id`, `nombres_apellidos`, `titulo`, `cargo`, `titulacion`, `especialidad`, `img`) VALUES
(780, 'OBANDO  SANTA ', 'Licenciado en Ciencias de la EducaciÃ³n', 'RECTOR', 'LIC', 'SupervisiÃ³n y administraciÃ³n educativa22', NULL),
(781, 'GUASHPA WILLIAN', 'Licenciado en Ciencias de la EducaciÃ³n', 'VICERECTOR', 'LIC', 'EducaciÃ³n BÃ¡sica', NULL),
(782, 'MIRANDA ÃNGELA', 'BACHILLER: HUMANIDADES', 'VICERRECTOR', 'BR', 'QuÃ­mico biolÃ³gicas', NULL),
(783, 'LADINEZ LEORENA', 'Licenciada en Ciencias de la EducaciÃ³n BÃ¡sica Superior', 'INSPECTOR GENERAL', 'LIC', 'EducaciÃ³n bÃ¡sica superior', NULL),
(784, 'BARZALLO TITO', 'IngenierÃ­a en GestiÃ³n de Gobiernos Seccionales', 'SUBINSPECTOR GENERAL', 'ING', 'AdministraciÃ³n publica', NULL);

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
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `contenido`, `img`, `autor`, `fecha`) VALUES
(1, 'GrÃduaciÃ“n de los Alumnos de Tercero de bachille', 'Un momento muy bonito para los familiares y amigos de los alumnos al ver que cumplen una meta mas de su vida, pasando a ser unos vachilleres y dandoles todos los Ã¡nimos y deseos para que continÃºen estudiando ', 'imagen 2.jpg', 'Harrison Ochoa', '2021-07-15 17:25:02');

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
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `autor` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cards`
--

INSERT INTO `cards` (`id`, `titulo`, `estracto`, `img`, `contenido`, `fecha`, `autor`) VALUES
(1, 'Dia del Maestro', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque ist- Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque ist- Voluptate similique et laboriosam nisi rerum distincti', 'imagen 3.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.', '2021-05-20 22:29:38', 'Harrison Ochoa'),
(2, 'Dia de La interculturalidad', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque ist- Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque ist- Voluptate similique et laboriosam nisi rerum distincti', 'imagen 5.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.', '2021-05-21 03:34:36', 'Harrison Ochoa'),
(3, 'Juegos Internos', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque ist- Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque ist- Voluptate similique et laboriosam nisi rerum distincti', 'imagen 4.jpg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque iste. Ut culpa quae optio?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, voluptate vero. Voluptate similique et laboriosam nisi rerum distinctio adipisci non officiis, delectus accusantium tempora eaque.', '2021-05-20 18:00:31', 'Harrison Ochoa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `nombres_apellidos` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `asignatura` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `titulacion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombres_apellidos`, `titulo`, `especialidad`, `cargo`, `asignatura`, `titulacion`, `img`) VALUES
(763, 'CHARCO  FANNY ', 'INGENIERA EN CONTABILIDAD Y AUDITORIA CPA', 'Bachillerato', 'DOCENTE', 'FormaciÃ³n y OrientaciÃ³n laboral', 'ING', NULL),
(765, 'NOA DAVID', 'LICENCIADO EN CIENCIAS DE LA EDUCACIÃ“N', 'InformÃ¡tica educativa', 'DOCENTE y DOCENTE TICS', 'Soporte TÃ©cnico', 'LIC', NULL),
(766, 'CEDEÃ‘O FERNANDA', 'INGENIERA', 'Turismo sostenible', 'DOCENTE', 'Ingles', 'ING', NULL),
(767, 'MANCHAY GUIDO', 'LICENCIADO EN CIENCIAS DE LA EDUCACIÃ“N', 'MatemÃ¡ticas', 'DOCENTE', 'FÃ­sica', 'LIC', NULL),
(768, 'TAGLE DAVID', 'INGENIERO EN MEDIO AMBIENTE ', 'Medio Ambiente', 'DOCENTE', 'QuÃ­mica', 'ING', NULL),
(769, 'SAEZ LUPE', 'LICENCIADO EN CIENCIAS DE LA EDUCACIÃ“N', 'EducaciÃ³n bÃ¡sica superior', 'DOCENTE', 'BiologÃ­a', 'LIC', NULL),
(770, 'JIMÃ‰NEZ PATRICIA', 'LICENCIADA EN COMERCIO Y MARKETING', 'Bachillerato', 'DOCENTE', 'Emprendimiento', 'LIC', NULL),
(771, 'BALDEON ANGEL', 'PROFESOR EN CIENCIAS DE A EDUCACION', 'Historia y geografÃ­a', 'DOCENTE', 'Historia', 'LIC', NULL),
(772, 'CEDEÃ‘O ALIDA', 'INGENIERA INFORMATICOS', 'TÃ­tulos informÃ¡ticos', 'DOCENTE', 'DiseÃ±o y Desarrollo Web', 'ING', NULL),
(773, 'MANCHAY GUIDO', 'LICENCIADO EN CIENCIAS DE LA EDUCACIÃ“N', 'MatemÃ¡ticas', 'DOCENTE', 'MatemÃ¡ticas', 'LIC', NULL),
(774, 'ESCOBAR KLEBER', 'LICENCIATURA EN CIENCIAS HUMANAS Y DE LA EDUCACIÃ“N', 'InformÃ¡tica', 'DOCENTE', 'Sistemas Operativos y Redes', 'LIC', NULL),
(775, 'RODAS DIEGO', 'LICENCIADO EN CIENCIAS DE LA EDUCACIÃ“N', 'Cultura FÃ­sica Y Deportes', 'DOCENTE', 'EducaciÃ³n FÃ­sica', 'LIC', NULL),
(776, 'VILLARROEL ANGEL', 'LICENCIADO EN CIENCIAS DE LA EDUCACIÃ“N', 'Profesor de informÃ¡tica aplicada a la educaciÃ³n', 'DOCENTE', 'ProgramaciÃ³n y Base de Datos', 'LIC', NULL),
(777, 'RAMÃREZ MARÃA', 'LICENCIADA EN ADMINISTRACIÃ“N DE EMPRESAS', 'AdministraciÃ³n de empresas', 'DOCENTE', 'Lenguaje y Literatura', 'LIC', NULL),
(778, 'TORRES ALVARO', 'INGENIERO EN ECOTURISMO', 'BiologÃ­a', 'DOCENTE', 'Aplicaciones OfimÃ¡ticas', 'ING', NULL),
(779, 'CHARCO  FANNY ', 'INGENIERA EN CONTABILIDAD Y AUDITORIA CPA', 'Bachillerato', 'DOCENTE', 'EducaciÃ³n cultural y artÃ­stica', 'ING', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mision_vision`
--

CREATE TABLE `mision_vision` (
  `id` int(11) NOT NULL,
  `mision` text COLLATE utf8_unicode_ci NOT NULL,
  `vision` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `mision_vision`
--

INSERT INTO `mision_vision` (`id`, `mision`, `vision`) VALUES
(1, 'Somos la Unidad Educativa Francisco de Orellana donde formamos bachilleres y brindamos una educaciÃ³n de calidad y calidez con propuestas pedagÃ³gicas innovadoras. Para que nuestra juventud obtenga liderazgo, y se desenvuelvan en un ambiente saludable.', 'Ser InstituciÃ³n Educativa de reconocimiento social, lÃ­der en calidad y excelencia en la provincia de Orellana y la regiÃ³n, que sirva como pilar fundamental para el desarrollo tecnolÃ³gico y humanista con profundo respeto al medio ambiente y que sean gestores del buen vivir.\r\n\r\n');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `panel_control`
--

INSERT INTO `panel_control` (`id`, `nombre`, `link_nuevo`, `link_editar`, `seccion`) VALUES
(1, 'BANNER', 'nuevo_banner.php', 'editar_banner.php', 'INICIO'),
(6, 'VISION - MISION', 'nuevo_myv.php', 'editar_myv.php', 'INICIO'),
(8, 'ARTICULOS', 'nuevo_card.php', 'editar_card.php', 'INICIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `nombre`) VALUES
(1, 'INICIO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autoridades`
--
ALTER TABLE `autoridades`
  ADD PRIMARY KEY (`id`) USING BTREE;

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
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
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
-- AUTO_INCREMENT de la tabla `autoridades`
--
ALTER TABLE `autoridades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=785;

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
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=780;

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
