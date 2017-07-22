DELIMITER $$
DROP PROCEDURE IF EXISTS `set_empresa`$$
CREATE PROCEDURE `set_empresa` (
		in empresa_razonSocial varchar(200),
		in empresa_nombre varchar(200),
		in empresa_rfc varchar(200),
		in empresa_telefono varchar(200),
		in empresa_email1 varchar(200),
		in empresa_email2 varchar(200),
		in direccion_pais varchar(200),
		in direccion_estado varchar(200),
		in direccion_municipio varchar(200),
		in direccion_ciudad varchar(200),
		in direccion_colonia varchar(200),
		in direccion_codigoPostal varchar(200),
		in direccion_calle varchar(200),
		in direccion_numeroExterior varchar(200),
		in contacto_nombre varchar(200),
		in contacto_apellidoMaterno varchar(200),
		in contacto_apellidoPaterno varchar(200),
		in contacto_fotografía varchar(200),
		in contacto_teléfono varchar(200),
		in contacto_teléfonoMovil varchar(200),
		in contacto_email1 varchar(200),
		in contacto_email2 varchar(200),
		in empresa_empresa_id varchar(200),
		in empresa_direccion_id varchar(200),
		in empresa_contacto_id varchar(200)
	)
	BEGIN
		IF (SELECT COUNT(`empresa_id`) FROM `empresa` WHERE `empresa_id`=empresa_empresa_id) <> 0 THEN
			UPDATE `direccion`
				SET `direccion_pais`=direccion_pais,`direccion_estado`=direccion_estado,`direccion_municipio`=direccion_municipio,`direccion_ciudad`=direccion_ciudad,
					`direccion_colonia`=direccion_colonia,`direccion_codigoPostal`=direccion_codigoPostal,`direccion_calle`=direccion_calle,`direccion_numeroExterior`=direccion_numeroExterior
				WHERE `direccion_id`=empresa_direccion_id;
			UPDATE `contacto`
				SET `contacto_nombre`=contacto_nombre,`contacto_apellidoMaterno`=contacto_apellidoMaterno,`contacto_apellidoPaterno`=contacto_apellidoPaterno,`contacto_fotografía`=contacto_fotografía,
				`contacto_teléfono`=contacto_teléfono,`contacto_teléfonoMovil`=contacto_teléfonoMovil,`contacto_email1`=contacto_email1,`contacto_email2`=contacto_email2
				WHERE `contacto_id`=empresa_contacto_id;
			UPDATE `empresa`
				SET `empresa_razonSocial`=empresa_razonSocial,`empresa_nombre`=empresa_nombre,`empresa_rfc`=empresa_rfc,`empresa_telefono`=empresa_telefono,`empresa_email1`=empresa_email1,`empresa_email2`=empresa_email2
				WHERE `empresa_id`=empresa_empresa_id;
		ELSE
			INSERT INTO `direccion` VALUES
				(0,direccion_pais,direccion_estado,direccion_municipio,direccion_ciudad,direccion_colonia,direccion_codigoPostal,direccion_calle,direccion_numeroExterior);
				SELECT MAX(`direccion_id`) INTO empresa_direccion_id FROM `direccion`;
			INSERT INTO `contacto` VALUES
				(0,contacto_nombre,contacto_apellidoMaterno,contacto_apellidoPaterno,contacto_fotografía,contacto_teléfono,contacto_teléfonoMovil,contacto_email1,contacto_email2);
				SELECT MAX(`contacto_id`) INTO empresa_contacto_id FROM `contacto`;
			INSERT INTO `empresa` VALUES
				(0,empresa_razonSocial,empresa_nombre,empresa_rfc,empresa_telefono,empresa_email1,empresa_email2,empresa_direccion_id,empresa_contacto_id);
		END IF;	
	END$$
DELIMITER ;
-----------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS `get_empresa`$$
CREATE PROCEDURE `get_empresa` (
		in empresa_id int(11)
	)
	BEGIN
		IF empresa_id <> 0 THEN
			SELECT empresa.*,direccion.*,contacto.* FROM empresa 
			INNER JOIN direccion on empresa.empresa_direccion_id = direccion.direccion_id INNER JOIN contacto on empresa.empresa_contacto_id = contacto.contacto_id
			WHERE empresa.empresa_id = empresa_id;
		ELSE
			SELECT empresa.*,direccion.*,contacto.* FROM empresa 
			INNER JOIN direccion on empresa.empresa_direccion_id = direccion.direccion_id INNER JOIN contacto on empresa.empresa_contacto_id = contacto.contacto_id;
		END IF;
	END$$
DELIMITER ;
-----------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS `set_sucursal`$$
CREATE PROCEDURE `set_sucursal` (
		in sucursal_razónSocial varchar(200),
		in sucursal_nombre varchar(200),
		in sucursal_rfc varchar(200),
		in sucursal_teléfono varchar(200),
		in sucursal_email1 varchar(200),
		in sucursal_email2 varchar(200),
		in sucursal_empresa_id varchar(200),
		in direccion_pais varchar(200),
		in direccion_estado varchar(200),
		in direccion_municipio varchar(200),
		in direccion_ciudad varchar(200),
		in direccion_colonia varchar(200),
		in direccion_codigoPostal varchar(200),
		in direccion_calle varchar(200),
		in direccion_numeroExterior varchar(200),
		in contacto_nombre varchar(200),
		in contacto_apellidoMaterno varchar(200),
		in contacto_apellidoPaterno varchar(200),
		in contacto_fotografía varchar(200),
		in contacto_teléfono varchar(200),
		in contacto_teléfonoMovil varchar(200),
		in contacto_email1 varchar(200),
		in contacto_email2 varchar(200)
	)
	BEGIN
		DECLARE sucursal_direccion_id,sucursal_contacto_id INT DEFAULT 0;
		INSERT INTO `direccion` VALUES
		(0,direccion_pais,direccion_estado,direccion_municipio,direccion_ciudad,direccion_colonia,direccion_codigoPostal,direccion_calle,direccion_numeroExterior);
		SELECT MAX(direccion_id) INTO sucursal_direccion_id FROM direccion;

		INSERT INTO `contacto` VALUES
		(0,contacto_nombre,contacto_apellidoMaterno,contacto_apellidoPaterno,contacto_fotografía,contacto_teléfono,contacto_teléfonoMovil,contacto_email1,contacto_email2);
		SELECT MAX(contacto_id) INTO sucursal_contacto_id FROM contacto;

		INSERT INTO `sucursal` VALUES
		(0,sucursal_razónSocial,sucursal_nombre,sucursal_rfc,sucursal_teléfono,sucursal_email1,sucursal_email2,sucursal_direccion_id,sucursal_empresa_id,sucursal_contacto_id);
	END$$
DELIMITER ;
-----------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS `get_sucursal`$$
CREATE PROCEDURE `get_sucursal` (
		in sucursal_id int(11)
	)
	BEGIN
		SELECT sucursal.*,direccion.*,contacto.* FROM sucursal 
		INNER JOIN direccion on sucursal.sucursal_direccion_id = direccion.direccion_id INNER JOIN contacto on sucursal.sucursal_contacto_id = contacto.contacto_id
		WHERE sucursal.sucursal_id = sucursal_id;
	END$$
DELIMITER ;
-----------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS `set_departamento`$$
CREATE PROCEDURE `set_departamento` (
		in departamento_nombre varchar(200),
		in departamento_empresa_id varchar(200),
		in departamento_sucursal_id varchar(200),
		in departamento_telefono varchar(200),
		in departamento_email varchar(200),
		in contacto_nombre varchar(200),
		in contacto_apellidoMaterno varchar(200),
		in contacto_apellidoPaterno varchar(200),
		in contacto_fotografía varchar(200),
		in contacto_teléfono varchar(200),
		in contacto_teléfonoMovil varchar(200),
		in contacto_email1 varchar(200),
		in contacto_email2 varchar(200)
	)
	BEGIN
		DECLARE departamento_contacto_id INT DEFAULT 0;

		INSERT INTO `contacto` VALUES
		(0,contacto_nombre,contacto_apellidoMaterno,contacto_apellidoPaterno,contacto_fotografía,contacto_teléfono,contacto_teléfonoMovil,contacto_email1,contacto_email2);
		SELECT MAX(contacto_id) INTO departamento_contacto_id FROM contacto;

		INSERT INTO `departamento` VALUES
		(0,departamento_nombre,departamento_empresa_id,departamento_sucursal_id,departamento_telefono,departamento_email,departamento_contacto_id);
	END$$
DELIMITER ;
-----------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS `get_departamento`$$
CREATE PROCEDURE `get_departamento` (
		in departamento_id int(11)
	)
	BEGIN
		SELECT departamento.*,contacto.* FROM departamento 
		INNER JOIN contacto on departamento.departamento_contacto_id = contacto.contacto_id
		WHERE departamento.departamento_id = sucursal_id;
	END$$
DELIMITER ;
-----------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------------------

















































-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2017 a las 18:39:31
-- Versión del servidor: 10.1.22-MariaDB
-- Versión de PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paras2`
--
CREATE DATABASE IF NOT EXISTS `paras2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `paras2`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp` ()  BEGIN
	CREATE TEMPORARY TABLE muesta (
	cat_bull_name varchar(50),
    bulletin_name varchar(250),
    bulletin_pdf varchar(250),
    cat_bull_id int(11)
    );
    INSERT INTO muesta 
		select category_bulletin.cat_bull_name,bulletin.bulletin_name,bulletin.bulletin_pdf,bulletin.cat_bull_id
			from category_bulletin LEFT JOIN bulletin on category_bulletin.cat_bull_id = bulletin.cat_bull_id;
    INSERT INTO muesta 
		select bulletin.bulletin_name,bulletin.bulletin_name,bulletin.bulletin_pdf,bulletin.cat_bull_id
        	from category_bulletin RIGHT JOIN bulletin on category_bulletin.cat_bull_id = bulletin.cat_bull_id;
	SELECT * FROM muesta GROUP BY bulletin_name ORDER BY cat_bull_name DESC;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bulletin`
--

DROP TABLE IF EXISTS `bulletin`;
CREATE TABLE `bulletin` (
  `bulletin_id` int(11) NOT NULL,
  `bulletin_name` varchar(250) NOT NULL,
  `bulletin_pdf` varchar(250) NOT NULL,
  `cat_bull_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bulletin`
--

INSERT INTO `bulletin` (`bulletin_id`, `bulletin_name`, `bulletin_pdf`, `cat_bull_id`) VALUES
(1, 'Estudio de la Reforma Fiscal 2014', 'Reforma-Fiscal-2014.pdf', 0),
(2, 'Estudio de la Reforma Fiscal 2013', 'Reforma-Fiscal-2013.pdf', 0),
(3, 'Estudio de la Reforma Fiscal 2012', 'Reforma-Fiscal-2012_1380738937.pdf', 0),
(4, 'Estudio de la Reforma Fiscal 2011', 'Reforma-Fiscal-2011_1380738951.pdf', 0),
(5, 'Estudio de la Reforma Fiscal 2005', 'Reforma-Fiscal-2005_1380739573.pdf', 0),
(6, 'Estudio de la Reforma Fiscal 2004', 'Reforma-Fiscal-2004_1380739583.pdf', 0),
(7, 'Estudio de la Reforma Fiscal 2003', 'Reforma-Fiscal-2003_1380739594.pdf', 0),
(8, 'Estudio de la Reforma Fiscal 2002', 'Reforma-Fiscal-2002_1380739604.pdf', 0),
(9, 'Estudio de la Reforma Fiscal 2010', 'Reforma-Fiscal-2010_1380738966.pdf', 1),
(10, 'Presentación del Estudio de la Reforma Fiscal 2010', 'Platica-Reforma-Fiscal-2010_1380738992.pdf', 1),
(13, 'Estudio de la Reforma Fiscal 2009', 'Reforma-Fiscal-2009_1380739348.pdf', 5),
(14, 'Precedentes PJF 2009', 'Precedentes-PJF-2009_1380739369.pdf', 5),
(15, 'Estudio de la Reforma Fiscal 2008', 'Reforma-Fiscal-2008_1380739400.pdf', 2),
(16, 'Presentación del Estudio de la Reforma Fiscal 2008', 'presentacion-2008_1380739437.pdf', 2),
(17, 'Reforma Predial 2008 Código Financiero del D.F.', 'Reforma-Predial-2008_1380739457.pdf', 2),
(18, 'Estudio de la Reforma Fiscal 2007', 'Reforma-Fiscal-2007_1380739473.pdf', 4),
(19, 'Reforma a la Ley del Impuesto al Activo 2007', 'LIMPAC_1380739492.pdf', 4),
(21, 'Estudio de la Reforma Fiscal 2006', 'Reforma-Fiscal-2006_1380739531.pdf', 3),
(22, 'Estudio de la Reforma Fiscal del Segundo Semestre 2006', 'Circular-2006-2semestre_1380739556.pdf', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category_bulletin`
--

DROP TABLE IF EXISTS `category_bulletin`;
CREATE TABLE `category_bulletin` (
  `cat_bull_id` int(11) NOT NULL,
  `cat_bull_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `category_bulletin`
--

INSERT INTO `category_bulletin` (`cat_bull_id`, `cat_bull_name`) VALUES
(1, 'Estudio de la Reforma Fiscal 2010'),
(2, 'Estudio de la Reforma Fiscal 2008'),
(3, 'Estudio de la Reforma Fiscal 2006'),
(4, 'Estudio de la Reforma Fiscal 2007'),
(5, 'Estudio de la Reforma Fiscal 2009');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partner`
--

DROP TABLE IF EXISTS `partner`;
CREATE TABLE `partner` (
  `partner_id` int(11) NOT NULL,
  `partner_name` varchar(50) NOT NULL,
  `partner_info` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `partner`
--

INSERT INTO `partner` (`partner_id`, `partner_name`, `partner_info`) VALUES
(1, 'Jorge Covarrubias Bravo', '<p>Jorge Covarrubias Bravo es miembro de la firma desde 1980, quien es altamente respetado en su profesi&oacute;n. Graduado de la Escuela Libre de Derecho (1978), especializado en consultor&iacute;a y litigio fiscal, siendo este &uacute;ltimo segmento de su pr&aacute;ctica en la que ha obtenido muchas resoluciones judiciales que constituyen importantes precedentes fiscales.</p>\r\n\r\n<p>Ha tenido una participaci&oacute;n importante como representante del sector empresarial ante de las autoridades fiscales mexicanas, como miembro del Consejo T&eacute;cnico del Centro de Estudios Econ&oacute;micos del Sector Privado (CEESP).</p>\r\n\r\n<p>En el a&ntilde;o de 2000, por designaci&oacute;n de M&eacute;xico, fue miembro del panel arbitral en el caso de protecci&oacute;n a inversores de Feldman contra los Estados Unidos Mexicanos seguido bajo el marco legal del TLCAN. Actualmente, asiste al Consejo Coordinador Empresarial (CCE) en plantear los puntos de vista del sector privado a las autoridades fiscales y legislativas, en cuanto a la propuesta de reformas y otros asuntos relevantes para su fiscalizaci&oacute;n, como est&iacute;mulos o subsidios. Ha impartido c&aacute;tedra en licenciatura y es profesor de impuesto sobre la renta en los estudios de posgrado, ambos en la Escuela Libre de Derecho.</p>\r\n'),
(2, 'Ernesto Padilla González', '                                		<p>\r\n                                			Ernesto Padilla González es Contador Público y Licenciado en Administración por el Instituto Tecnológico Autónomo de México, institución donde también cursó un diplomado en Asesoría Corporativa. Es socio de la firma a partir de 2010.\r\n                                		</p>\r\n																		<p>\r\n																			Se especializa en planeación fiscal, reestructura corporativa y en la atención de auditorías frente a las autoridades fiscales federales y locales. Su práctica también incluye consultoría en impuestos corporativos.\r\n																		</p>\r\n																		<p>\r\n																			Es miembro del Colegio de Contadores Públicos A.C.\r\n																		</p>'),
(3, 'Alejandro J. Sánchez Calderón', '                                		<p>\r\n                                			Alejandro Javier Sánchez Calderón es contador público certificado del Instituto Tecnológico Autónomo de México desde 1977 y socio de la firma desde 1980. Se especializa en consultoría fiscal y en el cumplimiento de obligaciones fiscales.\r\n                                		</p>\r\n																		<p>\r\n																			Conduce el área de la firma dedicada al cumplimiento de obligaciones fiscales por personas físicas residentes en México, como en el extranjero.\r\n																		</p>\r\n																		<p>\r\n																			El C.P. Sánchez es miembro activo del Colegio de Contadores Públicos de México, A.C., y presidido su Comisión de Investigación Fiscal.\r\n																		</p>'),
(4, 'Alejandro Guízar Acosta', '                                		<p>\r\n                                			Alejandro Guízar Acosta es abogado titulado con mención honorífica por la Universidad Iberoamericana, donde se graduó en el año 2007. Se especializa en litigio y consultoría fiscal.\r\n																			Se integró a la firma en el año 2004 y es socio de la misma a partir del año 2016.\r\n                                		</p>\r\n																		<p>\r\n																			Ha cursado estudios de posgrado en materia de contabilidad, finanzas e impuestos en el Instituto Técnico Autónomo de México y en el Centro de Estudios Fiscales.\r\n																			Es profesor titular en el posgrado de Derecho Tributario de la “Escuela Libre de Derecho”.\r\n																		</p>\r\n																		<p>\r\n																			Es miembro de la Barra Mexicana de Abogados y del Colegio de Contadores Públicos de México, en donde participa como miembro de la Comisión de Investigación Fiscal.\r\n																		</p>'),
(5, 'Martín Martínez Ayala', '                                		<p>\r\n                                			Licenciado en Derecho por el Instituto Tecnológico Autónomo de México, titulado en el año 1999. Maestría en Derecho Fiscal por la Universidad Panamericana, 2001; Diplomado \"El Nuevo Juicio de Amparo y la Protección Efectiva de los Derechos Humanos\" UNAM, 2012.\r\n                                		</p>\r\n																		<p>\r\n																			Es miembro de la Barra Mexicana Colegio de Abogados, A.C. Su práctica se especializa en litigio.\r\n																			Es Coautor del libro “Reforma Fiscal Integral” publicado por el Instituto Mexicano de Ejecutivos en Finanzas (IMEF).\r\n																		</p>\r\n																		<p>\r\n																			Es Socio del despacho a partir del 2016.\r\n																		</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `service`
--

INSERT INTO `service` (`service_id`, `service_name`) VALUES
(1, 'Asesoría y planeación fiscal.'),
(2, 'Litigio en materia fiscal.'),
(3, 'Atención a revisiones o auditorías realizadas por las autoridades fiscales federales y locales.'),
(4, 'Solicitudes y trámites ante autoridades fiscales federales y locales.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_porfile` varchar(100) NOT NULL,
  `user_mail` varchar(100) NOT NULL,
  `user_password` varchar(150) NOT NULL,
  `user_expires` date NOT NULL,
  `user_registrationDate` date NOT NULL,
  `user_sex` int(1) NOT NULL,
  `user_photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_porfile`, `user_mail`, `user_password`, `user_expires`, `user_registrationDate`, `user_sex`, `user_photo`) VALUES
(4, 'admin', 'admin', 'admin@netweb.com.mx', 'c4ca4238a0b923820dcc509a6f75849b', '2017-12-31', '2016-12-31', 1, 'Koala.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`bulletin_id`),
  ADD KEY `cat_bull_id` (`cat_bull_id`);

--
-- Indices de la tabla `category_bulletin`
--
ALTER TABLE `category_bulletin`
  ADD PRIMARY KEY (`cat_bull_id`);

--
-- Indices de la tabla `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indices de la tabla `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `bulletin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `category_bulletin`
--
ALTER TABLE `category_bulletin`
  MODIFY `cat_bull_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `partner`
--
ALTER TABLE `partner`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
