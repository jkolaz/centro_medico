-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2015 a las 16:24:37
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `centro_medico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cm_administrador`
--

CREATE TABLE IF NOT EXISTS `cm_administrador` (
`adm_id` int(11) NOT NULL,
  `adm_nombre` varchar(30) NOT NULL,
  `adm_apellido` varchar(40) NOT NULL,
  `adm_usuario` varchar(45) NOT NULL,
  `adm_correo` varchar(45) NOT NULL,
  `adm_clave` varchar(45) NOT NULL,
  `adm_fecha_resgitro` datetime DEFAULT NULL,
  `adm_fecha_modificacion` datetime DEFAULT NULL,
  `adm_fecha_cambio_clave` datetime DEFAULT NULL,
  `adm_clave_reset` varchar(60) NOT NULL,
  `adm_status` int(11) DEFAULT '1',
  `adm_ta_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cm_administrador`
--

INSERT INTO `cm_administrador` (`adm_id`, `adm_nombre`, `adm_apellido`, `adm_usuario`, `adm_correo`, `adm_clave`, `adm_fecha_resgitro`, `adm_fecha_modificacion`, `adm_fecha_cambio_clave`, `adm_clave_reset`, `adm_status`, `adm_ta_id`) VALUES
(1, 'Alex Alcides', 'Salsavilca Perez', 'Admin', 'j.salsavilca@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2015-10-14 10:48:59', NULL, NULL, 'CM_562a96c62aaec', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cm_modulo`
--

CREATE TABLE IF NOT EXISTS `cm_modulo` (
`mod_id` int(11) NOT NULL,
  `mod_nombre` varchar(45) NOT NULL,
  `mod_fecha_registro` datetime DEFAULT NULL,
  `mod_fecha_modificacion` datetime DEFAULT NULL,
  `mod_status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cm_paciente`
--

CREATE TABLE IF NOT EXISTS `cm_paciente` (
`pac_id` int(11) NOT NULL,
  `pac_nombre` varchar(30) NOT NULL,
  `pac_apellido_paterno` varchar(30) NOT NULL,
  `pac_apellido_materno` varchar(30) NOT NULL,
  `pac_tipo_doc` int(1) NOT NULL DEFAULT '1',
  `pac_dni` varchar(8) NOT NULL,
  `pac_fecha_nac` date NOT NULL,
  `pac_sexo` enum('M','F') NOT NULL DEFAULT 'M',
  `pac_correo` varchar(40) NOT NULL,
  `pac_direccion` varchar(60) NOT NULL,
  `pac_fecha_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pac_fecha_modificacion` datetime NOT NULL,
  `pac_status` int(11) NOT NULL DEFAULT '1',
  `pac_adm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cm_pagina`
--

CREATE TABLE IF NOT EXISTS `cm_pagina` (
`pag_id` int(11) NOT NULL,
  `pag_nombre` varchar(45) NOT NULL,
  `pag_fecha_registro` datetime DEFAULT NULL,
  `pag_fecha_modificacion` datetime DEFAULT NULL,
  `pag_status` int(11) DEFAULT '1',
  `pag_mod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cm_secciones`
--

CREATE TABLE IF NOT EXISTS `cm_secciones` (
  `sec_id` int(11) NOT NULL,
  `sec_nombre` varchar(45) NOT NULL,
  `sec_fecha_registro` datetime DEFAULT NULL,
  `sec_fecha_modificacion` datetime DEFAULT NULL,
  `sec_status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cm_secciones_pagina`
--

CREATE TABLE IF NOT EXISTS `cm_secciones_pagina` (
`sp_id` int(11) NOT NULL,
  `sp_fecha_registro` datetime DEFAULT NULL,
  `sp_fecha_modificacion` datetime DEFAULT NULL,
  `sp_status` int(11) DEFAULT '1',
  `sp_pag_id` int(11) NOT NULL,
  `sp_sec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cm_tipo_administrador`
--

CREATE TABLE IF NOT EXISTS `cm_tipo_administrador` (
`ta_id(11)` int(11) NOT NULL,
  `ta_nombre` varchar(45) NOT NULL,
  `ta_fecha_registro` datetime DEFAULT NULL,
  `ta_fecha_modificacion` datetime DEFAULT NULL,
  `ta_status` int(11) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cm_tipo_administrador`
--

INSERT INTO `cm_tipo_administrador` (`ta_id(11)`, `ta_nombre`, `ta_fecha_registro`, `ta_fecha_modificacion`, `ta_status`) VALUES
(1, 'Administrador', '2015-10-14 10:44:18', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cm_tipo_administrador_pagina`
--

CREATE TABLE IF NOT EXISTS `cm_tipo_administrador_pagina` (
`tap_id` int(11) NOT NULL,
  `tap_fecha_registro` datetime DEFAULT NULL,
  `tap_fecha_modificacion` datetime DEFAULT NULL,
  `tap_status` int(11) DEFAULT '1',
  `tap_ta_id(11)` int(11) NOT NULL,
  `tap_pag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cm_administrador`
--
ALTER TABLE `cm_administrador`
 ADD PRIMARY KEY (`adm_id`), ADD KEY `fk_cm_administrador_cm_tipo_administrador_idx` (`adm_ta_id`);

--
-- Indices de la tabla `cm_modulo`
--
ALTER TABLE `cm_modulo`
 ADD PRIMARY KEY (`mod_id`);

--
-- Indices de la tabla `cm_paciente`
--
ALTER TABLE `cm_paciente`
 ADD PRIMARY KEY (`pac_id`);

--
-- Indices de la tabla `cm_pagina`
--
ALTER TABLE `cm_pagina`
 ADD PRIMARY KEY (`pag_id`), ADD KEY `fk_cm_pagina_cm_modulo1_idx` (`pag_mod_id`);

--
-- Indices de la tabla `cm_secciones`
--
ALTER TABLE `cm_secciones`
 ADD PRIMARY KEY (`sec_id`);

--
-- Indices de la tabla `cm_secciones_pagina`
--
ALTER TABLE `cm_secciones_pagina`
 ADD PRIMARY KEY (`sp_id`), ADD KEY `fk_cm_secciones_pagina_cm_pagina1_idx` (`sp_pag_id`), ADD KEY `fk_cm_secciones_pagina_cm_secciones1_idx` (`sp_sec_id`);

--
-- Indices de la tabla `cm_tipo_administrador`
--
ALTER TABLE `cm_tipo_administrador`
 ADD PRIMARY KEY (`ta_id(11)`);

--
-- Indices de la tabla `cm_tipo_administrador_pagina`
--
ALTER TABLE `cm_tipo_administrador_pagina`
 ADD PRIMARY KEY (`tap_id`), ADD KEY `fk_cm_tipo_administrador_pagina_cm_tipo_administrador1_idx` (`tap_ta_id(11)`), ADD KEY `fk_cm_tipo_administrador_pagina_cm_pagina1_idx` (`tap_pag_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cm_administrador`
--
ALTER TABLE `cm_administrador`
MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cm_modulo`
--
ALTER TABLE `cm_modulo`
MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cm_paciente`
--
ALTER TABLE `cm_paciente`
MODIFY `pac_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cm_pagina`
--
ALTER TABLE `cm_pagina`
MODIFY `pag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cm_secciones_pagina`
--
ALTER TABLE `cm_secciones_pagina`
MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cm_tipo_administrador`
--
ALTER TABLE `cm_tipo_administrador`
MODIFY `ta_id(11)` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cm_tipo_administrador_pagina`
--
ALTER TABLE `cm_tipo_administrador_pagina`
MODIFY `tap_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cm_administrador`
--
ALTER TABLE `cm_administrador`
ADD CONSTRAINT `fk_cm_administrador_cm_tipo_administrador` FOREIGN KEY (`adm_ta_id`) REFERENCES `cm_tipo_administrador` (`ta_id(11)`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cm_pagina`
--
ALTER TABLE `cm_pagina`
ADD CONSTRAINT `fk_cm_pagina_cm_modulo1` FOREIGN KEY (`pag_mod_id`) REFERENCES `cm_modulo` (`mod_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cm_secciones_pagina`
--
ALTER TABLE `cm_secciones_pagina`
ADD CONSTRAINT `fk_cm_secciones_pagina_cm_pagina1` FOREIGN KEY (`sp_pag_id`) REFERENCES `cm_pagina` (`pag_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cm_secciones_pagina_cm_secciones1` FOREIGN KEY (`sp_sec_id`) REFERENCES `cm_secciones` (`sec_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cm_tipo_administrador_pagina`
--
ALTER TABLE `cm_tipo_administrador_pagina`
ADD CONSTRAINT `fk_cm_tipo_administrador_pagina_cm_pagina1` FOREIGN KEY (`tap_pag_id`) REFERENCES `cm_pagina` (`pag_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cm_tipo_administrador_pagina_cm_tipo_administrador1` FOREIGN KEY (`tap_ta_id(11)`) REFERENCES `cm_tipo_administrador` (`ta_id(11)`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
