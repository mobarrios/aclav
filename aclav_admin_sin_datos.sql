/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50628
 Source Host           : localhost
 Source Database       : aclav_admin

 Target Server Type    : MySQL
 Target Server Version : 50628
 File Encoding         : utf-8

 Date: 06/01/2017 10:03:02 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `arbitro`
-- ----------------------------
DROP TABLE IF EXISTS `arbitro`;
CREATE TABLE `arbitro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `dni` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `roles` varchar(45) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) NOT NULL,
  `pais_id` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL,
  `ciudad_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_arbitro_pais1_idx` (`pais_id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `archivo`
-- ----------------------------
DROP TABLE IF EXISTS `archivo`;
CREATE TABLE `archivo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titulo` varchar(45) NOT NULL,
  `archivo` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `autoridad`
-- ----------------------------
DROP TABLE IF EXISTS `autoridad`;
CREATE TABLE `autoridad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `club_actual` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `banner`
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `url` text,
  `imagen` varchar(45) NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `buena_fe`
-- ----------------------------
DROP TABLE IF EXISTS `buena_fe`;
CREATE TABLE `buena_fe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `o2_id` int(11) NOT NULL,
  `nro` int(11) NOT NULL,
  `jugador_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_desde` date NOT NULL,
  `fecha_hasta` date NOT NULL,
  `borrado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3369 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `buena_fe_bis`
-- ----------------------------
DROP TABLE IF EXISTS `buena_fe_bis`;
CREATE TABLE `buena_fe_bis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipo_id` int(11) NOT NULL,
  `partido_id` int(11) NOT NULL,
  `buena_fe_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11354 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `buena_fe_staff`
-- ----------------------------
DROP TABLE IF EXISTS `buena_fe_staff`;
CREATE TABLE `buena_fe_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `o2_id` int(11) NOT NULL,
  `nro` int(11) NOT NULL,
  `oficial_funcion_id` int(11) NOT NULL,
  `temporada_id` int(11) NOT NULL,
  `equipo_id` int(11) NOT NULL,
  `oficial_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_desde` date NOT NULL,
  `fecha_hasta` date NOT NULL,
  `borrado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1437 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `buena_fe_staff_bis`
-- ----------------------------
DROP TABLE IF EXISTS `buena_fe_staff_bis`;
CREATE TABLE `buena_fe_staff_bis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipo_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `partido_id` int(11) NOT NULL,
  `buena_fe_staff_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5055 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `ciudad`
-- ----------------------------
DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE `ciudad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ciudad_nombre` varchar(45) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `estado` varchar(45) NOT NULL,
  `provincia_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_ciudad_provincia1_idx` (`provincia_id`),
  CONSTRAINT `fk_ciudad_provincia1` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2382 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `ciudad_nueva`
-- ----------------------------
DROP TABLE IF EXISTS `ciudad_nueva`;
CREATE TABLE `ciudad_nueva` (
  `id` int(4) NOT NULL,
  `ciudad_nueva_nombre` varchar(60) NOT NULL,
  `cp` int(4) NOT NULL,
  `provincia_nueva_id` smallint(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `cp` (`cp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `club`
-- ----------------------------
DROP TABLE IF EXISTS `club`;
CREATE TABLE `club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `federacion` varchar(45) DEFAULT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `denominacion` varchar(45) DEFAULT NULL,
  `escudo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `contacto`
-- ----------------------------
DROP TABLE IF EXISTS `contacto`;
CREATE TABLE `contacto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `telefono` text NOT NULL,
  `direccion` text NOT NULL,
  `email` varchar(45) NOT NULL,
  `mapa` text NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `costo`
-- ----------------------------
DROP TABLE IF EXISTS `costo`;
CREATE TABLE `costo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `partido_id` int(11) NOT NULL,
  `costo_item_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `equipo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `costo_item`
-- ----------------------------
DROP TABLE IF EXISTS `costo_item`;
CREATE TABLE `costo_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `detalle` varchar(50) NOT NULL,
  `importe` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `designaciones`
-- ----------------------------
DROP TABLE IF EXISTS `designaciones`;
CREATE TABLE `designaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `partido_id` int(11) NOT NULL,
  `arbitro_1_id` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `observaciones` text NOT NULL,
  `supervisor_1_id` int(11) NOT NULL,
  `arbitro_2_id` int(11) NOT NULL,
  `supervisor_2_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1248 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `entrevista`
-- ----------------------------
DROP TABLE IF EXISTS `entrevista`;
CREATE TABLE `entrevista` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) NOT NULL,
  `copete` varchar(200) NOT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `equipo`
-- ----------------------------
DROP TABLE IF EXISTS `equipo`;
CREATE TABLE `equipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL,
  `sigla` varchar(5) NOT NULL,
  `escudo` varchar(50) NOT NULL,
  `historia` text NOT NULL,
  `o2` tinyint(1) NOT NULL,
  `o2_creado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_equipo_club1_idx` (`club_id`),
  CONSTRAINT `fk_equipo_club1` FOREIGN KEY (`club_id`) REFERENCES `club` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `especial`
-- ----------------------------
DROP TABLE IF EXISTS `especial`;
CREATE TABLE `especial` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titulo` varchar(45) NOT NULL,
  `copete` varchar(200) NOT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `estadio`
-- ----------------------------
DROP TABLE IF EXISTS `estadio`;
CREATE TABLE `estadio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `provincia` varchar(50) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `capacidad` varchar(45) DEFAULT NULL,
  `telefono` text NOT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `imagen1` varchar(45) DEFAULT NULL,
  `imagen2` varchar(45) DEFAULT NULL,
  `imagen3` varchar(45) DEFAULT NULL,
  `imagen4` varchar(45) DEFAULT NULL,
  `mapa` text,
  `estado` int(11) DEFAULT NULL,
  `ciudad_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_estadios_ciudad1_idx` (`ciudad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `estadisticac`
-- ----------------------------
DROP TABLE IF EXISTS `estadisticac`;
CREATE TABLE `estadisticac` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `estadisticae`
-- ----------------------------
DROP TABLE IF EXISTS `estadisticae`;
CREATE TABLE `estadisticae` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `estadisticai`
-- ----------------------------
DROP TABLE IF EXISTS `estadisticai`;
CREATE TABLE `estadisticai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `estadisticaj`
-- ----------------------------
DROP TABLE IF EXISTS `estadisticaj`;
CREATE TABLE `estadisticaj` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `estadisticao`
-- ----------------------------
DROP TABLE IF EXISTS `estadisticao`;
CREATE TABLE `estadisticao` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `estadisticar`
-- ----------------------------
DROP TABLE IF EXISTS `estadisticar`;
CREATE TABLE `estadisticar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `fase`
-- ----------------------------
DROP TABLE IF EXISTS `fase`;
CREATE TABLE `fase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre_fase` varchar(45) DEFAULT NULL,
  `torneo_equipo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_fase_torneo_equipo1_idx` (`torneo_equipo_id`),
  CONSTRAINT `fk_fase_torneo_equipo1` FOREIGN KEY (`torneo_equipo_id`) REFERENCES `torneo_equipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `flyer`
-- ----------------------------
DROP TABLE IF EXISTS `flyer`;
CREATE TABLE `flyer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagen1` varchar(45) DEFAULT NULL,
  `imagen2` varchar(45) DEFAULT NULL,
  `imagen3` varchar(45) DEFAULT NULL,
  `imagen4` varchar(45) DEFAULT NULL,
  `imagen5` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `formulacopaa`
-- ----------------------------
DROP TABLE IF EXISTS `formulacopaa`;
CREATE TABLE `formulacopaa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `formulacopab`
-- ----------------------------
DROP TABLE IF EXISTS `formulacopab`;
CREATE TABLE `formulacopab` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `formulacopac`
-- ----------------------------
DROP TABLE IF EXISTS `formulacopac`;
CREATE TABLE `formulacopac` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `formulacopad`
-- ----------------------------
DROP TABLE IF EXISTS `formulacopad`;
CREATE TABLE `formulacopad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `formulacopae`
-- ----------------------------
DROP TABLE IF EXISTS `formulacopae`;
CREATE TABLE `formulacopae` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `formulacopaf`
-- ----------------------------
DROP TABLE IF EXISTS `formulacopaf`;
CREATE TABLE `formulacopaf` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `formulario`
-- ----------------------------
DROP TABLE IF EXISTS `formulario`;
CREATE TABLE `formulario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_formulario` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=169 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `formulario_equipo`
-- ----------------------------
DROP TABLE IF EXISTS `formulario_equipo`;
CREATE TABLE `formulario_equipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formulario_id` int(11) NOT NULL,
  `equipo_id` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `file` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `galeria`
-- ----------------------------
DROP TABLE IF EXISTS `galeria`;
CREATE TABLE `galeria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titulo` text,
  `imagen` varchar(45) DEFAULT NULL,
  `fuente` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `galeria_imagenes`
-- ----------------------------
DROP TABLE IF EXISTS `galeria_imagenes`;
CREATE TABLE `galeria_imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `galeria_sub_id` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `owner` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2001 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `galeria_sub`
-- ----------------------------
DROP TABLE IF EXISTS `galeria_sub`;
CREATE TABLE `galeria_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `galeria_id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `fuente` varchar(50) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `goleador`
-- ----------------------------
DROP TABLE IF EXISTS `goleador`;
CREATE TABLE `goleador` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `habilitaciones`
-- ----------------------------
DROP TABLE IF EXISTS `habilitaciones`;
CREATE TABLE `habilitaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `buena_fe_id` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `m4` int(11) NOT NULL,
  `m8` int(11) NOT NULL,
  `feva_af` int(11) NOT NULL,
  `feva_tr` int(11) NOT NULL,
  `feva_tr_tipo` int(11) NOT NULL,
  `ld` int(11) NOT NULL,
  `condicion` int(11) NOT NULL,
  `carnet` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3130 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `habilitaciones_staff`
-- ----------------------------
DROP TABLE IF EXISTS `habilitaciones_staff`;
CREATE TABLE `habilitaciones_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `buena_fe_staff_id` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `tit` int(11) NOT NULL,
  `m8` int(11) NOT NULL,
  `feva_af` int(11) NOT NULL,
  `mat` int(11) NOT NULL,
  `des` int(11) NOT NULL,
  `condicion` int(11) NOT NULL,
  `carnet` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1355 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `historia`
-- ----------------------------
DROP TABLE IF EXISTS `historia`;
CREATE TABLE `historia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `intercambio`
-- ----------------------------
DROP TABLE IF EXISTS `intercambio`;
CREATE TABLE `intercambio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `partidoid` int(10) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `jugador`
-- ----------------------------
DROP TABLE IF EXISTS `jugador`;
CREATE TABLE `jugador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `dni` varchar(45) DEFAULT NULL,
  `lugar_nacimiento` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `notas` varchar(45) DEFAULT NULL,
  `equipo_id` int(11) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL,
  `pais_id` int(11) DEFAULT NULL,
  `altura` double(10,0) NOT NULL,
  `peso` double(10,0) NOT NULL,
  `alcance_ataque` double(10,0) NOT NULL,
  `alcance_bloqueo` double(10,0) NOT NULL,
  `n_camiseta` int(11) NOT NULL,
  `posicion` varchar(11) NOT NULL,
  `sub_21` tinyint(1) NOT NULL DEFAULT '0',
  `club_origen` varchar(50) NOT NULL,
  `alta_torneo` date NOT NULL,
  `baja_torneo` date NOT NULL,
  `nacionalidad` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dni_UNIQUE` (`dni`),
  KEY `fk_jugadores_club1_idx` (`club_id`),
  KEY `fk_jugadores_pais1_idx` (`pais_id`),
  CONSTRAINT `fk_jugadores_club1` FOREIGN KEY (`club_id`) REFERENCES `club` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jugadores_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=377 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `marketing`
-- ----------------------------
DROP TABLE IF EXISTS `marketing`;
CREATE TABLE `marketing` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `mensaje`
-- ----------------------------
DROP TABLE IF EXISTS `mensaje`;
CREATE TABLE `mensaje` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mensaje` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `modulos_id` int(250) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `sub` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `menu_web`
-- ----------------------------
DROP TABLE IF EXISTS `menu_web`;
CREATE TABLE `menu_web` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `menu` varchar(45) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `modulos`
-- ----------------------------
DROP TABLE IF EXISTS `modulos`;
CREATE TABLE `modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `multa`
-- ----------------------------
DROP TABLE IF EXISTS `multa`;
CREATE TABLE `multa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `torneo` varchar(45) DEFAULT NULL COMMENT 'torneo lo trae de la tabla torneos hay que linkearla aun',
  `partido` varchar(45) DEFAULT NULL COMMENT 'igual que torneos',
  `num_medida` decimal(10,0) DEFAULT NULL,
  `multa` decimal(10,0) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_multas_club1_idx` (`club_id`),
  CONSTRAINT `fk_multas_club1` FOREIGN KEY (`club_id`) REFERENCES `club` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `newsletter`
-- ----------------------------
DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE `newsletter` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=510 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `noticias`
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(103) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fecha` date NOT NULL,
  `copete` varchar(195) DEFAULT NULL,
  `cuerpo` text,
  `fuente` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  `web_noticia` tinyint(1) NOT NULL,
  `web_accion` tinyint(1) NOT NULL,
  `web_social` tinyint(1) NOT NULL,
  `web_especial` tinyint(1) NOT NULL,
  `web_entrevista` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1782 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `noticias_club`
-- ----------------------------
DROP TABLE IF EXISTS `noticias_club`;
CREATE TABLE `noticias_club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `noticias_id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19745 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `noticias_posicion`
-- ----------------------------
DROP TABLE IF EXISTS `noticias_posicion`;
CREATE TABLE `noticias_posicion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `posicion_web` int(11) NOT NULL,
  `noticias_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `o2`
-- ----------------------------
DROP TABLE IF EXISTS `o2`;
CREATE TABLE `o2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `torneos_id` int(11) NOT NULL,
  `fecha_desde` date NOT NULL,
  `fecha_hasta` date NOT NULL,
  `presentado` tinyint(1) NOT NULL,
  `equipo_id` int(11) NOT NULL,
  `uniforme_claro_camiseta` varchar(50) NOT NULL,
  `uniforme_claro_short` varchar(50) NOT NULL,
  `uniforme_oscuro_camiseta` varchar(50) NOT NULL,
  `uniforme_oscuro_short` varchar(50) NOT NULL,
  `uniforme_tv_camiseta` varchar(50) NOT NULL,
  `uniforme_tv_short` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=202 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `oficial`
-- ----------------------------
DROP TABLE IF EXISTS `oficial`;
CREATE TABLE `oficial` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `funcion_id` varchar(45) DEFAULT NULL,
  `dni` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `oficial_funcion`
-- ----------------------------
DROP TABLE IF EXISTS `oficial_funcion`;
CREATE TABLE `oficial_funcion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `funcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `otro`
-- ----------------------------
DROP TABLE IF EXISTS `otro`;
CREATE TABLE `otro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `roles` varchar(50) NOT NULL,
  `tipo` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `pais_id` int(11) NOT NULL,
  `ciudad_id` int(11) NOT NULL,
  `provincia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `pais`
-- ----------------------------
DROP TABLE IF EXISTS `pais`;
CREATE TABLE `pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iso` char(2) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=242 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `partido`
-- ----------------------------
DROP TABLE IF EXISTS `partido`;
CREATE TABLE `partido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `numero_partido` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `hora` varchar(5) NOT NULL,
  `local_equipo_id` int(11) NOT NULL,
  `visita_equipo_id` int(11) NOT NULL,
  `arbitro_1_id` int(11) NOT NULL,
  `arbitro_2_id` int(11) NOT NULL,
  `supervisor_1_id` int(11) NOT NULL,
  `supervisor_2_id` int(11) NOT NULL,
  `estadio_id` int(11) NOT NULL,
  `local_set` int(11) NOT NULL,
  `visita_set` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `designacion` tinyint(1) NOT NULL,
  `riesgo` varchar(50) NOT NULL,
  `pxp` tinyint(1) NOT NULL,
  `televisado` int(11) NOT NULL,
  `reporte` varchar(100) NOT NULL,
  `informe_sup_01` varchar(50) NOT NULL,
  `informe_o4` varchar(50) NOT NULL,
  `informe_sup` varchar(50) NOT NULL,
  `informe_recomendaciones` varchar(50) NOT NULL,
  `condicional` tinyint(1) NOT NULL,
  `local_text` varchar(100) NOT NULL,
  `visita_text` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=581 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `partido_costo`
-- ----------------------------
DROP TABLE IF EXISTS `partido_costo`;
CREATE TABLE `partido_costo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `partido_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=351 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `partido_costo_item`
-- ----------------------------
DROP TABLE IF EXISTS `partido_costo_item`;
CREATE TABLE `partido_costo_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `partido_costo_id` int(11) NOT NULL,
  `costo_item_id` int(11) NOT NULL,
  `equipo_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `arbitro_id` int(11) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `traslado_detalle` varchar(100) NOT NULL,
  `traslado_importe` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3588 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `partido_punto`
-- ----------------------------
DROP TABLE IF EXISTS `partido_punto`;
CREATE TABLE `partido_punto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `partido_id` int(11) NOT NULL,
  `set_numero` int(11) NOT NULL,
  `set_actual` tinyint(1) NOT NULL,
  `puntos_local` int(11) NOT NULL,
  `puntos_visita` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2479 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `playoffweb`
-- ----------------------------
DROP TABLE IF EXISTS `playoffweb`;
CREATE TABLE `playoffweb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `cuerpo` text NOT NULL,
  `fuente` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `profiles`
-- ----------------------------
DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(45) DEFAULT NULL,
  `is_equipo` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_arbitro` tinyint(1) NOT NULL,
  `is_supervisor` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `profiles_modulos`
-- ----------------------------
DROP TABLE IF EXISTS `profiles_modulos`;
CREATE TABLE `profiles_modulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `crear` varchar(45) DEFAULT NULL,
  `borrar` varchar(45) DEFAULT NULL,
  `editar` varchar(45) DEFAULT NULL,
  `listar` varchar(45) DEFAULT NULL,
  `modulos_id` int(11) NOT NULL,
  `profiles_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_profiles_modulos_modulos1_idx` (`modulos_id`),
  KEY `fk_profiles_modulos_profiles1_idx` (`profiles_id`),
  CONSTRAINT `fk_profiles_modulos_modulos1` FOREIGN KEY (`modulos_id`) REFERENCES `modulos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_profiles_modulos_profiles1` FOREIGN KEY (`profiles_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1153 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `provincia`
-- ----------------------------
DROP TABLE IF EXISTS `provincia`;
CREATE TABLE `provincia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `provincia_nombre` varchar(45) DEFAULT NULL,
  `estado` varchar(45) NOT NULL,
  `pais_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_provincia_pais1_idx` (`pais_id`),
  CONSTRAINT `fk_provincia_pais1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `provincia_nueva`
-- ----------------------------
DROP TABLE IF EXISTS `provincia_nueva`;
CREATE TABLE `provincia_nueva` (
  `id` smallint(2) NOT NULL,
  `provincia_nueva_nombre` varchar(50) NOT NULL,
  `pais_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `riesgo_partido`
-- ----------------------------
DROP TABLE IF EXISTS `riesgo_partido`;
CREATE TABLE `riesgo_partido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `riesgo` varchar(45) DEFAULT NULL,
  `torneo` varchar(45) DEFAULT NULL COMMENT 'torneo linkea con la tabla torneos',
  `partido` varchar(45) DEFAULT NULL COMMENT 'linkea con el fixture',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `serie`
-- ----------------------------
DROP TABLE IF EXISTS `serie`;
CREATE TABLE `serie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `nombre_serie` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `sistema_punto`
-- ----------------------------
DROP TABLE IF EXISTS `sistema_punto`;
CREATE TABLE `sistema_punto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `cantidad_set` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `sistema_punto_asignacion`
-- ----------------------------
DROP TABLE IF EXISTS `sistema_punto_asignacion`;
CREATE TABLE `sistema_punto_asignacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sistema_punto_id` int(11) NOT NULL,
  `set_gana` int(11) NOT NULL,
  `set_pierde` int(11) NOT NULL,
  `punto_gana` int(11) NOT NULL,
  `punto_pierde` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `social`
-- ----------------------------
DROP TABLE IF EXISTS `social`;
CREATE TABLE `social` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `copete` varchar(200) DEFAULT NULL,
  `cuerpo` text,
  `fuente` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `sponsor`
-- ----------------------------
DROP TABLE IF EXISTS `sponsor`;
CREATE TABLE `sponsor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `staff`
-- ----------------------------
DROP TABLE IF EXISTS `staff`;
CREATE TABLE `staff` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `tel` text NOT NULL,
  `imagen` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `sub_menu`
-- ----------------------------
DROP TABLE IF EXISTS `sub_menu`;
CREATE TABLE `sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `modulos_id` int(11) NOT NULL,
  `icon` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `submenu_web`
-- ----------------------------
DROP TABLE IF EXISTS `submenu_web`;
CREATE TABLE `submenu_web` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `submenu` varchar(45) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `supervisor`
-- ----------------------------
DROP TABLE IF EXISTS `supervisor`;
CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `provincia_id` int(11) NOT NULL,
  `ciudad_id` int(11) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `tabla_posicion`
-- ----------------------------
DROP TABLE IF EXISTS `tabla_posicion`;
CREATE TABLE `tabla_posicion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `fase_id` int(11) NOT NULL,
  `equipo_id` int(11) NOT NULL,
  `puntos` int(11) NOT NULL,
  `partido_ganado` int(11) NOT NULL,
  `partido_perdido` int(11) NOT NULL,
  `partido_total` int(11) NOT NULL,
  `set_ganado` int(11) NOT NULL,
  `set_perdido` int(11) NOT NULL,
  `set_coeficiente` double(10,3) NOT NULL,
  `punto_ganado` int(11) NOT NULL,
  `punto_perdido` int(11) NOT NULL,
  `punto_coeficiente` double(10,3) NOT NULL,
  `racha` int(11) NOT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `temporada`
-- ----------------------------
DROP TABLE IF EXISTS `temporada`;
CREATE TABLE `temporada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre_temporada` varchar(45) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `actual` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `ticket`
-- ----------------------------
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE `ticket` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(103) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cuerpo` text,
  `estado` int(11) NOT NULL,
  `web_noticia` tinyint(1) NOT NULL,
  `web_accion` tinyint(1) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `tipo_fase`
-- ----------------------------
DROP TABLE IF EXISTS `tipo_fase`;
CREATE TABLE `tipo_fase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `grupos` tinyint(1) NOT NULL,
  `playoff` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `torneo`
-- ----------------------------
DROP TABLE IF EXISTS `torneo`;
CREATE TABLE `torneo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `temporada_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `posicion` int(11) NOT NULL,
  `nombre_torneo` varchar(45) DEFAULT NULL,
  `serie_id` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `actualiza_o2` tinyint(1) NOT NULL,
  `actualiza_o2_cantidad` int(11) NOT NULL,
  `muestra_web` tinyint(1) NOT NULL,
  `actualiza_o2_fecha_inicio` date NOT NULL,
  `actualiza_o2_fecha_final` date NOT NULL,
  `presenta_o2` tinyint(1) NOT NULL,
  `o2_web` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_torneo_serie1_idx` (`serie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `torneo_equipo`
-- ----------------------------
DROP TABLE IF EXISTS `torneo_equipo`;
CREATE TABLE `torneo_equipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipo_id` int(11) NOT NULL,
  `torneo_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `fk_torneo_equipo_equipo1_idx` (`equipo_id`),
  KEY `fk_torneo_equipo_torneo1_idx` (`torneo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `torneo_fase`
-- ----------------------------
DROP TABLE IF EXISTS `torneo_fase`;
CREATE TABLE `torneo_fase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `torneo_id` int(11) NOT NULL,
  `tipo_fase_id` int(11) NOT NULL,
  `sistema_punto_id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cant_grupos` int(11) NOT NULL,
  `tabla_web` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `torneo_fase_equipo`
-- ----------------------------
DROP TABLE IF EXISTS `torneo_fase_equipo`;
CREATE TABLE `torneo_fase_equipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `torneo_fase_id` int(11) NOT NULL,
  `equipo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=296 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `torneo_fase_leg`
-- ----------------------------
DROP TABLE IF EXISTS `torneo_fase_leg`;
CREATE TABLE `torneo_fase_leg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nombre` varchar(20) NOT NULL,
  `torneo_fase_id` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `tipo_leg_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `torneo_fase_leg_partido`
-- ----------------------------
DROP TABLE IF EXISTS `torneo_fase_leg_partido`;
CREATE TABLE `torneo_fase_leg_partido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `torneo_fase_leg_id` int(11) NOT NULL,
  `partido_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=581 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `tribunal`
-- ----------------------------
DROP TABLE IF EXISTS `tribunal`;
CREATE TABLE `tribunal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jugador` text,
  `sancion` text NOT NULL,
  `resolucion` text,
  `observacion` text NOT NULL,
  `estado` int(11) NOT NULL,
  `vencimiento_sanc` date NOT NULL,
  `cant_fecha` varchar(45) NOT NULL,
  `serie_id` int(11) NOT NULL,
  `temporada_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `profiles_id` int(11) NOT NULL,
  `equipo_id` int(11) NOT NULL,
  `arbitro_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(200) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `usuario` (`usuario`),
  KEY `fk_usuarios_profiles1_idx` (`profiles_id`),
  CONSTRAINT `fk_usuarios_profiles1` FOREIGN KEY (`profiles_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `video`
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `object` text,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
