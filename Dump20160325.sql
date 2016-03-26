CREATE DATABASE  IF NOT EXISTS `pribantsa` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `pribantsa`;
-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: pribantsa
-- ------------------------------------------------------
-- Server version	5.5.47-0+deb8u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_bono`
--

DROP TABLE IF EXISTS `tbl_bono`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_bono` (
  `id_bono` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_tipo_bono` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_bono`),
  KEY `fk_bono_tipo_bono_idx` (`id_tipo_bono`),
  KEY `fk_bono_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_bono_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_bono_tipo_bono` FOREIGN KEY (`id_tipo_bono`) REFERENCES `tbl_tipo_bono` (`id_tipo_bono`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_bono`
--

LOCK TABLES `tbl_bono` WRITE;
/*!40000 ALTER TABLE `tbl_bono` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_bono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_capacitacion`
--

DROP TABLE IF EXISTS `tbl_capacitacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_capacitacion` (
  `id_capacitacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lugar` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_capacitacion`),
  KEY `fk_capacitacion_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_capacitacion_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_capacitacion`
--

LOCK TABLES `tbl_capacitacion` WRITE;
/*!40000 ALTER TABLE `tbl_capacitacion` DISABLE KEYS */;
INSERT INTO `tbl_capacitacion` VALUES (1,'Primeros Auxilios','Capacitacion en primeros auxilios.','Hospital San Juan de Dios','0000-00-00','0000-00-00',29),(2,'Chikungunya, Zika y Dengue','Capacitacion sobre la prevencion de las enfer','Hospital San Juan de Dios','0000-00-00','0000-00-00',29);
/*!40000 ALTER TABLE `tbl_capacitacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contrato`
--

DROP TABLE IF EXISTS `tbl_contrato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_contrato` (
  `id_contrato` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `tipo_contrato` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_contrato`),
  KEY `fk_contrato_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_contrato_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contrato`
--

LOCK TABLES `tbl_contrato` WRITE;
/*!40000 ALTER TABLE `tbl_contrato` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_contrato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_criterio`
--

DROP TABLE IF EXISTS `tbl_criterio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_criterio` (
  `id_criterio` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `peso` double NOT NULL,
  `id_puesto_trabajo` int(11) NOT NULL,
  PRIMARY KEY (`id_criterio`),
  KEY `fk_criterio_puesto_trabajo_idx` (`id_puesto_trabajo`),
  CONSTRAINT `fk_criterio_puesto_trabajo` FOREIGN KEY (`id_puesto_trabajo`) REFERENCES `tbl_puesto_trabajo` (`id_puesto_trabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_criterio`
--

LOCK TABLES `tbl_criterio` WRITE;
/*!40000 ALTER TABLE `tbl_criterio` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_criterio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_departamento`
--

DROP TABLE IF EXISTS `tbl_departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_departamento` (
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_departamento`
--

LOCK TABLES `tbl_departamento` WRITE;
/*!40000 ALTER TABLE `tbl_departamento` DISABLE KEYS */;
INSERT INTO `tbl_departamento` VALUES (1,'Informatica','Departamento encargado de Sistemas de InformaciÃ³n y Mantenimiento de Hardware.'),(2,'Contabilidad','Departamento encargado de la contabilidad y la planilla.'),(3,'Seguridad','Empleados encargados de la Seguridad del Banco'),(4,'Salud','Departamento de Salud, encargado de la clÃ­nica del ISSS');
/*!40000 ALTER TABLE `tbl_departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_descuento`
--

DROP TABLE IF EXISTS `tbl_descuento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_descuento` (
  `id_descuento` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `id_tipo_descuento` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_descuento`),
  KEY `fk_descuento_tipo_descuento_idx` (`id_tipo_descuento`),
  KEY `fk_descuento_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_descuento_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_descuento_tipo_descuento` FOREIGN KEY (`id_tipo_descuento`) REFERENCES `tbl_tipo_descuento` (`id_tipo_descuento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_descuento`
--

LOCK TABLES `tbl_descuento` WRITE;
/*!40000 ALTER TABLE `tbl_descuento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_descuento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_educacion`
--

DROP TABLE IF EXISTS `tbl_educacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_educacion` (
  `id_educacion` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_educacion`),
  KEY `fk_educacion_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_educacion_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_educacion`
--

LOCK TABLES `tbl_educacion` WRITE;
/*!40000 ALTER TABLE `tbl_educacion` DISABLE KEYS */;
INSERT INTO `tbl_educacion` VALUES (1,'Doctor en Medicina','2016-03-01','2016-03-31',29),(2,'Licenciada en Mercadeo','2016-03-01','2016-03-31',28);
/*!40000 ALTER TABLE `tbl_educacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_empleado`
--

DROP TABLE IF EXISTS `tbl_empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_empleado` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `dui` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(17) COLLATE utf8_spanish_ci NOT NULL,
  `isss` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `afp` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` char(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuenta` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `salario` double NOT NULL,
  `id_puesto_trabajo` int(11) NOT NULL,
  PRIMARY KEY (`id_empleado`),
  KEY `fk_empleado_puesto_trabajo_idx` (`id_puesto_trabajo`),
  CONSTRAINT `fk_empleado_puesto_trabajo` FOREIGN KEY (`id_puesto_trabajo`) REFERENCES `tbl_puesto_trabajo` (`id_puesto_trabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_empleado`
--

LOCK TABLES `tbl_empleado` WRITE;
/*!40000 ALTER TABLE `tbl_empleado` DISABLE KEYS */;
INSERT INTO `tbl_empleado` VALUES (28,'03997848-4','0210-161088-104-0','1234567890','0033445484','ANA ISABEL','MENENDEZ MONTES',NULL,'1234321','2016-02-09',500,1),(29,'03997848-4','0210-161088-104-0','1234567890','0033445484','REBECA NOEMI','SALAZAR AGUILAR',NULL,'1234321','1993-06-07',700,4);
/*!40000 ALTER TABLE `tbl_empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_evaluacion`
--

DROP TABLE IF EXISTS `tbl_evaluacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_evaluacion` (
  `id_evaluacion` int(11) NOT NULL AUTO_INCREMENT,
  `puntaje` double NOT NULL,
  `fecha` date NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_criterio` int(11) NOT NULL,
  PRIMARY KEY (`id_evaluacion`),
  KEY `fk_evaluacion_empleado_idx` (`id_empleado`),
  KEY `fk_evaluacion_criterio_idx` (`id_criterio`),
  CONSTRAINT `fk_evaluacion_criterio` FOREIGN KEY (`id_criterio`) REFERENCES `tbl_criterio` (`id_criterio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_evaluacion_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_evaluacion`
--

LOCK TABLES `tbl_evaluacion` WRITE;
/*!40000 ALTER TABLE `tbl_evaluacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_evaluacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_permiso`
--

DROP TABLE IF EXISTS `tbl_permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_permiso` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `remunerado` tinyint(4) NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime DEFAULT NULL,
  `tipo_permiso` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_permiso`),
  KEY `fk_permiso_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_permiso_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_permiso`
--

LOCK TABLES `tbl_permiso` WRITE;
/*!40000 ALTER TABLE `tbl_permiso` DISABLE KEYS */;
INSERT INTO `tbl_permiso` VALUES (1,1,'2016-03-24 08:30:00','2016-03-24 11:30:00','MEDICO',28);
/*!40000 ALTER TABLE `tbl_permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_planilla`
--

DROP TABLE IF EXISTS `tbl_planilla`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_planilla` (
  `id_planilla` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `planilla` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dias_trabajados` double DEFAULT NULL,
  `horas` double DEFAULT NULL,
  `extras_diurnas` double DEFAULT NULL,
  `extras_nocturnas` double DEFAULT NULL,
  `feriado` double DEFAULT NULL,
  `ajuste` double DEFAULT NULL,
  `total_descuento` double DEFAULT NULL,
  `salario_devengado` double DEFAULT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_planilla`),
  KEY `fk_planilla_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_planilla_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_planilla`
--

LOCK TABLES `tbl_planilla` WRITE;
/*!40000 ALTER TABLE `tbl_planilla` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_planilla` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_puesto_historico`
--

DROP TABLE IF EXISTS `tbl_puesto_historico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_puesto_historico` (
  `id_puesto_historico` int(11) NOT NULL AUTO_INCREMENT,
  `id_empleado` int(11) NOT NULL,
  `id_puesto_trabajo` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  PRIMARY KEY (`id_puesto_historico`),
  KEY `fk_puesto_trabajo_empleado_idx` (`id_empleado`),
  KEY `fk_puesto_historico_puesto_trabajo_idx` (`id_puesto_trabajo`),
  CONSTRAINT `fk_puesto_historico_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_puesto_historico_puesto_trabajo` FOREIGN KEY (`id_puesto_trabajo`) REFERENCES `tbl_puesto_trabajo` (`id_puesto_trabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_puesto_historico`
--

LOCK TABLES `tbl_puesto_historico` WRITE;
/*!40000 ALTER TABLE `tbl_puesto_historico` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_puesto_historico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_puesto_trabajo`
--

DROP TABLE IF EXISTS `tbl_puesto_trabajo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_puesto_trabajo` (
  `id_puesto_trabajo` int(11) NOT NULL AUTO_INCREMENT,
  `id_departamento` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `salario_min` double NOT NULL,
  `salario_max` double NOT NULL,
  PRIMARY KEY (`id_puesto_trabajo`),
  KEY `fk_puesto_trabajo_departamento_idx` (`id_departamento`),
  CONSTRAINT `fk_puesto_trabajo_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `tbl_departamento` (`id_departamento`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_puesto_trabajo`
--

LOCK TABLES `tbl_puesto_trabajo` WRITE;
/*!40000 ALTER TABLE `tbl_puesto_trabajo` DISABLE KEYS */;
INSERT INTO `tbl_puesto_trabajo` VALUES (1,1,'Programador','Programador de Sistemas en PHP',200,400),(2,2,'Contador General','Contador General encargado de todas las Ã¡reas.',400,800),(3,3,'Seguridad de Porteria','Personal de Seguridad encargado de la seguridad en la entrada.',250,250),(4,4,'Medico General','Encargado de la clÃ­nica del banco',600,800);
/*!40000 ALTER TABLE `tbl_puesto_trabajo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_reconocimiento`
--

DROP TABLE IF EXISTS `tbl_reconocimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_reconocimiento` (
  `id_reconocimiento` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_reconocimiento`),
  KEY `fk_reconocimiento_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_reconocimiento_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_reconocimiento`
--

LOCK TABLES `tbl_reconocimiento` WRITE;
/*!40000 ALTER TABLE `tbl_reconocimiento` DISABLE KEYS */;
INSERT INTO `tbl_reconocimiento` VALUES (1,'Participacion en la jornada de salud integral',29);
/*!40000 ALTER TABLE `tbl_reconocimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sancion`
--

DROP TABLE IF EXISTS `tbl_sancion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sancion` (
  `id_sancion` int(11) NOT NULL AUTO_INCREMENT,
  `gravedad` double NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_sancion`),
  KEY `fk_sancion_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_sancion_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sancion`
--

LOCK TABLES `tbl_sancion` WRITE;
/*!40000 ALTER TABLE `tbl_sancion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_sancion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_bono`
--

DROP TABLE IF EXISTS `tbl_tipo_bono`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipo_bono` (
  `id_tipo_bono` int(11) NOT NULL AUTO_INCREMENT,
  `id_puesto_trabajo` int(11) NOT NULL,
  `monto` double DEFAULT NULL,
  `porcentaje` double DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo_bono`),
  KEY `fk_tipo_bono_puesto_trabajo_idx` (`id_puesto_trabajo`),
  CONSTRAINT `fk_tipo_bono_puesto_trabajo` FOREIGN KEY (`id_puesto_trabajo`) REFERENCES `tbl_puesto_trabajo` (`id_puesto_trabajo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_bono`
--

LOCK TABLES `tbl_tipo_bono` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_bono` DISABLE KEYS */;
INSERT INTO `tbl_tipo_bono` VALUES (1,2,NULL,10,'Comision');
/*!40000 ALTER TABLE `tbl_tipo_bono` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_descuento`
--

DROP TABLE IF EXISTS `tbl_tipo_descuento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipo_descuento` (
  `id_tipo_descuento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `porcentaje` double DEFAULT NULL,
  `monto` double DEFAULT NULL,
  PRIMARY KEY (`id_tipo_descuento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_descuento`
--

LOCK TABLES `tbl_tipo_descuento` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_descuento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tipo_descuento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_empleado` int(11) NOT NULL,
  `contrasena` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `privilegio` int(11) NOT NULL,
  `usuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `fk_usuario_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_usuario_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario`
--

LOCK TABLES `tbl_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_usuario` DISABLE KEYS */;
INSERT INTO `tbl_usuario` VALUES (10,28,'9f9b30ae072a313eeb96c80b96df3252',5,'AMENENDEZ09'),(11,29,'d1ae9925a08dcc9b93ad03d4d72d8856',5,'RSALAZAR7');
/*!40000 ALTER TABLE `tbl_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_vacacion`
--

DROP TABLE IF EXISTS `tbl_vacacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_vacacion` (
  `id_vacacion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `id_empleado` int(11) NOT NULL,
  PRIMARY KEY (`id_vacacion`),
  KEY `fk_vacacion_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_vacacion_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_vacacion`
--

LOCK TABLES `tbl_vacacion` WRITE;
/*!40000 ALTER TABLE `tbl_vacacion` DISABLE KEYS */;
INSERT INTO `tbl_vacacion` VALUES (1,'2016-03-24 00:00:00','2016-03-25 00:00:00',28);
/*!40000 ALTER TABLE `tbl_vacacion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-25 22:53:03
