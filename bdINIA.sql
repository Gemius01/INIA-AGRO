-- MySQL dump 10.13  Distrib 5.5.61, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: iniadb
-- ------------------------------------------------------
-- Server version	5.5.61-0ubuntu0.14.04.1

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
-- Table structure for table `boletin_seccion`
--

DROP TABLE IF EXISTS `boletin_seccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boletin_seccion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contenido` text COLLATE utf8mb4_unicode_ci,
  `boletin_id` int(10) unsigned DEFAULT NULL,
  `seccion_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `boletin_seccion_boletin_id_foreign` (`boletin_id`),
  KEY `boletin_seccion_seccion_id_foreign` (`seccion_id`),
  CONSTRAINT `boletin_seccion_seccion_id_foreign` FOREIGN KEY (`seccion_id`) REFERENCES `seccions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `boletin_seccion_boletin_id_foreign` FOREIGN KEY (`boletin_id`) REFERENCES `boletines` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=641 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boletin_seccion`
--

LOCK TABLES `boletin_seccion` WRITE;
/*!40000 ALTER TABLE `boletin_seccion` DISABLE KEYS */;
INSERT INTO `boletin_seccion` VALUES (321,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN ARICA Y PARINACOTA</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      <span style=\"font-size: small;\"><strong><em>Pablo Gemio, Ingenierbro, Quilamapu</em></strong></span><br />\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',33,1,NULL,NULL),(322,'<p><img src=\"http://186.64.122.224/photos/shares/2018/Julio/Arica y Parinacota/Introducci&oacute;n/gatito.jpg\" alt=\"\" width=\"1412\" height=\"791\" />jhsdfjkldfjko&ntilde;sdfjklsdfjklsdf</p>',33,2,NULL,NULL),(323,'<p>Hola Claudio</p>',33,3,NULL,NULL),(324,NULL,33,4,NULL,NULL),(325,NULL,33,5,NULL,NULL),(326,NULL,33,6,NULL,NULL),(327,NULL,33,7,NULL,NULL),(328,NULL,33,8,NULL,NULL),(329,NULL,33,9,NULL,NULL),(330,NULL,33,10,NULL,NULL),(331,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN TARAPACÁ</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      <span style=\"font-size: small;\"><strong><em>Pablo Gemio, Ingenierbro, Quilamapu</em></strong></span><br />\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',34,1,NULL,NULL),(332,NULL,34,2,NULL,NULL),(333,NULL,34,3,NULL,NULL),(334,NULL,34,4,NULL,NULL),(335,NULL,34,5,NULL,NULL),(336,NULL,34,6,NULL,NULL),(337,NULL,34,7,NULL,NULL),(338,NULL,34,8,NULL,NULL),(339,NULL,34,9,NULL,NULL),(340,NULL,34,10,NULL,NULL),(341,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN ANTOFAGASTA</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      <span style=\"font-size: small;\"><strong><em>Pablo Gemio, Ingenierbro, Quilamapu</em></strong></span><br />\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',35,1,NULL,NULL),(342,NULL,35,2,NULL,NULL),(343,NULL,35,3,NULL,NULL),(344,NULL,35,4,NULL,NULL),(345,NULL,35,5,NULL,NULL),(346,NULL,35,6,NULL,NULL),(347,NULL,35,7,NULL,NULL),(348,NULL,35,8,NULL,NULL),(349,NULL,35,9,NULL,NULL),(350,NULL,35,10,NULL,NULL),(351,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN ATACAMA</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',36,1,NULL,NULL),(352,NULL,36,2,NULL,NULL),(353,NULL,36,3,NULL,NULL),(354,NULL,36,4,NULL,NULL),(355,NULL,36,5,NULL,NULL),(356,NULL,36,6,NULL,NULL),(357,NULL,36,7,NULL,NULL),(358,'<p>Respecto de la respuesta fisiol&oacute;gica de las plantas al efecto del clima, las im&aacute;genes satelitales reflejan la magnitud del crecimiento o disminuci&oacute;n de la cobertura vegetal en esta &eacute;poca del a&ntilde;o mediante el &iacute;ndice de vegetaci&oacute;n NDVI (Desviaci&oacute;n Normalizada del &iacute;ndice de Vegetaci&oacute;n) .</p>\n<p>Para esta quincena se observa un NDVI promedio regional de 0.11 mientras el a&ntilde;o pasado hab&iacute;a sido de 0.18. El valor promedio hist&oacute;rico para esta regi&oacute;n, en este per&iacute;odo del a&ntilde;o es de 0.11.</p>\n<p>El resumen regional en el contexto temporal se puede observar en el siguiente gr&aacute;fico.</p>\n<p><img src=\"http://200.54.96.8/informe/2018-8/NDVI/3/ValoresDelIndiceNDVIParaElMismoPeriodo-3.png\" width=\"800\" height=\"300\" /></p>\n<p>La situaci&oacute;n por comunas se presenta en el siguiente gr&aacute;fico, donde se presentan las comunas con &iacute;ndices m&aacute;s bajos.</p>\n<p><img src=\"http://200.54.96.8/informe/2018-8/NDVI/3/ValoresDelIndiceNDVIPara5Comunas-3.png\" width=\"800\" height=\"440\" /> <img src=\"http://200.54.96.8/informe/2018-8/NDVI/ndvi-03.png\" width=\"800\" height=\"800\" /> <img src=\"http://200.54.96.8/informe/2018-8/NDVI/anom-03.png\" width=\"800\" height=\"800\" /> <img src=\"http://200.54.96.8/informe/2018-8/NDVI/dif-03.png\" width=\"800\" height=\"800\" /></p>',36,8,NULL,NULL),(359,'<p>Para el monitoreo del estado de la vegetaci&oacute;n en la Regi&oacute;n de Atacama se utiliz&oacute; el &iacute;ndice de condici&oacute;n de la vegetaci&oacute;n, <em>VCI</em> (Kogan, 1990, 1995). Este &iacute;ndice se encuentra entre valores de 0% a 100%. Valores bajo 40% se asocian a una condici&oacute;n desfavorable en la vegetaci&oacute;n, siendo 0% la peor condici&oacute;n hist&oacute;rica y 100% la mejor (tabla 1).</p>\n<p>En t&eacute;rminos globales la Regi&oacute;n de Atacama present&oacute; un valor mediano de VCI de 34% para el per&iacute;odo comprendido desde el 28 julio a 12 agosto de 2018. A igual per&iacute;odo del a&ntilde;o pasado presentaba un VCI de 93% (Fig. 1). De acuerdo a la tabla 1 la regi&oacute;n, en t&eacute;rminos globales presenta una condici&oacute;n de sequ?a leve.</p>\n<p>Tabla 1. Clasificaci&oacute;n de la condici&oacute;n de la vegetaci&oacute;n de acuerdo a los valores del &iacute;ndice VCI.</p>\n<p><img src=\"http://200.54.96.8/informe/leyenda.png\" width=\"800\" height=\"130\" /><img src=\"http://200.54.96.8/informe/2018-8/VCI/ValoresDelIndiceVCIParaElMismoPeriodo-3.png\" width=\"800\" height=\"300\" /></p>\n<p>Figura 1. Valores del &iacute;ndice VCI para el mismo per&iacute;odo entre los a&ntilde;os 2001 al 2018 para la Regi&oacute;n de Atacama.</p>\n<p>A continuaci&oacute;n se presenta el mapa con los valores medianos de VCI en la Regi&oacute;n de Atacama. De acuerdo al mapa de la figura 2 en la tabla 2 se resumen las condiciones de la vegetaci&oacute;n comunales.</p>\n<p>Tabla 2.Resumen de la condici&oacute;n de la vegetaci&oacute;n comunal en la Regi&oacute;n de Atacama de acuerdo al an&aacute;lisis del &iacute;ndice VCI.</p>\n<p><img src=\"http://200.54.96.8/informe/2018-8/VCI/resumen-3.png\" width=\"800\" height=\"210\" /></p>\n<p>La respuesta de la vegetaci&oacute;n puede variar dependiendo del tipo de cobertura que exista sobre el suelo. Utilizando la clasificaci&oacute;n de usos de suelo de la Universidad de Maryland proporcionada por la NASA se obtuvieron por separado los valores de VCI promedio regional seg&uacute;n uso de suelo proporcionando los siguientes resultados.<img src=\"http://200.54.96.8/informe/2018-8/VCI/3/Matorrales-3.png\" width=\"800\" height=\"300\" /></p>\n<p>Figura 2. Valores promedio de VCI en matorrales en la Regi&oacute;n de Atacama.</p>\n<p><img src=\"http://200.54.96.8/informe/2018-8/VCI/3/Praderas-3.png\" width=\"800\" height=\"300\" /></p>\n<p>Figura 3. Valores promedio de VCI en praderas en la Regi&oacute;n de Atacama.</p>\n<p><img src=\"http://200.54.96.8/informe/2018-8/VCI/3/Agricola-3.png\" width=\"800\" height=\"300\" /></p>\n<p>Figura 4. Valores promedio de VCI en terrenos de uso agr&iacute;cola en la Regi&oacute;n de Atacama.</p>\n<p><img src=\"http://200.54.96.8/informe/2018-8/VCI/comunas-3.png\" width=\"800\" height=\"800\" /></p>\n<p>Figura 5. Valores comunales promedio de VCI en la Regi&oacute;n de Atacama de acuerdo a las clasificaci&oacute;n de la tabla 1.</p>\n<p>Las comunas que presentan los valores m&aacute;s bajos del &iacute;ndice VCI en la Regi&oacute;n de Atacama corresponden a Huasco, Caldera, Freirina, Copiapo y Vallenar con 18, 20, 25, 27 y 32% de VCI respectivamente.</p>\n<p><img src=\"http://200.54.96.8/informe/2018-8/VCI/ValoresDelIndiceVCIPara5Comunas-3.png\" width=\"800\" height=\"800\" /></p>\n<p>Figura 3. Valores del &iacute;ndice VCI para las 5 comunas con valores m&aacute;s bajos del &iacute;ndice del 28 julio a 12 agosto de 2018.</p>',36,9,NULL,NULL),(360,NULL,36,10,NULL,NULL),(361,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN COQUIMBO</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',37,1,NULL,NULL),(362,NULL,37,2,NULL,NULL),(363,NULL,37,3,NULL,NULL),(364,NULL,37,4,NULL,NULL),(365,NULL,37,5,NULL,NULL),(366,NULL,37,6,NULL,NULL),(367,NULL,37,7,NULL,NULL),(368,NULL,37,8,NULL,NULL),(369,NULL,37,9,NULL,NULL),(370,NULL,37,10,NULL,NULL),(371,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN VALPARAÍSO</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',38,1,NULL,NULL),(372,NULL,38,2,NULL,NULL),(373,NULL,38,3,NULL,NULL),(374,NULL,38,4,NULL,NULL),(375,NULL,38,5,NULL,NULL),(376,NULL,38,6,NULL,NULL),(377,NULL,38,7,NULL,NULL),(378,NULL,38,8,NULL,NULL),(379,NULL,38,9,NULL,NULL),(380,NULL,38,10,NULL,NULL),(381,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN O\'HIGGINS</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',39,1,NULL,NULL),(382,NULL,39,2,NULL,NULL),(383,NULL,39,3,NULL,NULL),(384,NULL,39,4,NULL,NULL),(385,NULL,39,5,NULL,NULL),(386,NULL,39,6,NULL,NULL),(387,NULL,39,7,NULL,NULL),(388,NULL,39,8,NULL,NULL),(389,'<p>Para el monitoreo del estado de la vegetaci&oacute;n en la Regi&oacute;n del Libertador General Bernardo O\'Higgins se utiliz&oacute; el &iacute;ndice de condici&oacute;n de la vegetaci&oacute;n, <em>VCI</em> (Kogan, 1990, 1995). Este &iacute;ndice se encuentra entre valores de 0% a 100%. Valores bajo 40% se asocian a una condici&oacute;n desfavorable en la vegetaci&oacute;n, siendo 0% la peor condici&oacute;n hist&oacute;rica y 100% la mejor (tabla 1).</p>\n<p>En t&eacute;rminos globales la Regi&oacute;n del Libertador General Bernardo O\'Higgins present&oacute; un valor mediano de VCI de 39% para el per&iacute;odo comprendido desde el 28 julio a 12 agosto de 2018. A igual per&iacute;odo del a&ntilde;o pasado presentaba un VCI de 74% (Fig. 1). De acuerdo a la tabla 1 la regi&oacute;n, en t&eacute;rminos globales presenta una condici&oacute;n de sequ?a leve.</p>\n<p>Tabla 1. Clasificaci&oacute;n de la condici&oacute;n de la vegetaci&oacute;n de acuerdo a los valores del &iacute;ndice VCI.</p>\n<p><img src=\"http://200.54.96.8/informe/leyenda.png\" width=\"800\" height=\"130\" /><img src=\"http://200.54.96.8/informe/2018-8/VCI/ValoresDelIndiceVCIParaElMismoPeriodo-6.png\" width=\"800\" height=\"300\" /></p>\n<p>Figura 1. Valores del &iacute;ndice VCI para el mismo per&iacute;odo entre los a&ntilde;os 2001 al 2018 para la Regi&oacute;n del Libertador General Bernardo O\'Higgins.</p>\n<p>A continuaci&oacute;n se presenta el mapa con los valores medianos de VCI en la Regi&oacute;n del Libertador General Bernardo O\'Higgins. De acuerdo al mapa de la figura 2 en la tabla 2 se resumen las condiciones de la vegetaci&oacute;n comunales.</p>\n<p>Tabla 2.Resumen de la condici&oacute;n de la vegetaci&oacute;n comunal en la Regi&oacute;n del Libertador General Bernardo O\'Higgins de acuerdo al an&aacute;lisis del &iacute;ndice VCI.</p>\n<p><img src=\"http://200.54.96.8/informe/2018-8/VCI/resumen-6.png\" width=\"800\" height=\"210\" /></p>\n<p>La respuesta de la vegetaci&oacute;n puede variar dependiendo del tipo de cobertura que exista sobre el suelo. Utilizando la clasificaci&oacute;n de usos de suelo de la Universidad de Maryland proporcionada por la NASA se obtuvieron por separado los valores de VCI promedio regional seg&uacute;n uso de suelo proporcionando los siguientes resultados.<img src=\"http://200.54.96.8/informe/2018-8/VCI/6/Matorrales-6.png\" width=\"800\" height=\"300\" /></p>\n<p>Figura 2. Valores promedio de VCI en matorrales en la Regi&oacute;n del Libertador General Bernardo O\'Higgins.</p>\n<p><img src=\"http://200.54.96.8/informe/2018-8/VCI/6/Praderas-6.png\" width=\"800\" height=\"300\" /></p>\n<p>Figura 3. Valores promedio de VCI en praderas en la Regi&oacute;n del Libertador General Bernardo O\'Higgins.</p>\n<p><img src=\"http://200.54.96.8/informe/2018-8/VCI/6/Agricola-6.png\" width=\"800\" height=\"300\" /></p>\n<p>Figura 4. Valores promedio de VCI en terrenos de uso agr&iacute;cola en la Regi&oacute;n del Libertador General Bernardo O\'Higgins.</p>\n<p><img src=\"http://200.54.96.8/informe/2018-8/VCI/comunas-6.png\" width=\"800\" height=\"800\" /></p>\n<p>Figura 5. Valores comunales promedio de VCI en la Regi&oacute;n del Libertador General Bernardo O\'Higgins de acuerdo a las clasificaci&oacute;n de la tabla 1.</p>\n<p>Las comunas que presentan los valores m&aacute;s bajos del &iacute;ndice VCI en la Regi&oacute;n del Libertador General Bernardo O\'Higgins corresponden a Olivar, Rengo, Palmilla, Graneros y Placilla con 24, 28, 30, 31 y 32% de VCI respectivamente.</p>\n<p><img src=\"http://200.54.96.8/informe/2018-8/VCI/ValoresDelIndiceVCIPara5Comunas-6.png\" width=\"800\" height=\"800\" /></p>\n<p>Figura 3. Valores del &iacute;ndice VCI para las 5 comunas con valores m&aacute;s bajos del &iacute;ndice del 28 julio a 12 agosto de 2018.</p>',39,9,NULL,NULL),(390,NULL,39,10,NULL,NULL),(391,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN MAULE</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',40,1,NULL,NULL),(392,NULL,40,2,NULL,NULL),(393,NULL,40,3,NULL,NULL),(394,NULL,40,4,NULL,NULL),(395,NULL,40,5,NULL,NULL),(396,NULL,40,6,NULL,NULL),(397,NULL,40,7,NULL,NULL),(398,NULL,40,8,NULL,NULL),(399,NULL,40,9,NULL,NULL),(400,NULL,40,10,NULL,NULL),(401,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN BÍO BÍO</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',41,1,NULL,NULL),(402,NULL,41,2,NULL,NULL),(403,NULL,41,3,NULL,NULL),(404,NULL,41,4,NULL,NULL),(405,NULL,41,5,NULL,NULL),(406,NULL,41,6,NULL,NULL),(407,NULL,41,7,NULL,NULL),(408,NULL,41,8,NULL,NULL),(409,NULL,41,9,NULL,NULL),(410,NULL,41,10,NULL,NULL),(411,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN ÑUBLE</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',42,1,NULL,NULL),(412,NULL,42,2,NULL,NULL),(413,NULL,42,3,NULL,NULL),(414,NULL,42,4,NULL,NULL),(415,NULL,42,5,NULL,NULL),(416,NULL,42,6,NULL,NULL),(417,NULL,42,7,NULL,NULL),(418,NULL,42,8,NULL,NULL),(419,NULL,42,9,NULL,NULL),(420,NULL,42,10,NULL,NULL),(421,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN ARAUCANÍA</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',43,1,NULL,NULL),(422,NULL,43,2,NULL,NULL),(423,NULL,43,3,NULL,NULL),(424,NULL,43,4,NULL,NULL),(425,NULL,43,5,NULL,NULL),(426,NULL,43,6,NULL,NULL),(427,NULL,43,7,NULL,NULL),(428,NULL,43,8,NULL,NULL),(429,NULL,43,9,NULL,NULL),(430,NULL,43,10,NULL,NULL),(431,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN LOS LAGOS</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',44,1,NULL,NULL),(432,NULL,44,2,NULL,NULL),(433,NULL,44,3,NULL,NULL),(434,NULL,44,4,NULL,NULL),(435,NULL,44,5,NULL,NULL),(436,NULL,44,6,NULL,NULL),(437,NULL,44,7,NULL,NULL),(438,NULL,44,8,NULL,NULL),(439,NULL,44,9,NULL,NULL),(440,NULL,44,10,NULL,NULL),(441,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN AYSÉN</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',45,1,NULL,NULL),(442,NULL,45,2,NULL,NULL),(443,NULL,45,3,NULL,NULL),(444,NULL,45,4,NULL,NULL),(445,NULL,45,5,NULL,NULL),(446,NULL,45,6,NULL,NULL),(447,NULL,45,7,NULL,NULL),(448,NULL,45,8,NULL,NULL),(449,NULL,45,9,NULL,NULL),(450,NULL,45,10,NULL,NULL),(451,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN MAGALLANES</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',46,1,NULL,NULL),(452,NULL,46,2,NULL,NULL),(453,NULL,46,3,NULL,NULL),(454,NULL,46,4,NULL,NULL),(455,NULL,46,5,NULL,NULL),(456,NULL,46,6,NULL,NULL),(457,NULL,46,7,NULL,NULL),(458,NULL,46,8,NULL,NULL),(459,NULL,46,9,NULL,NULL),(460,NULL,46,10,NULL,NULL),(461,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN METROPOLITANA</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',47,1,NULL,NULL),(462,NULL,47,2,NULL,NULL),(463,NULL,47,3,NULL,NULL),(464,NULL,47,4,NULL,NULL),(465,NULL,47,5,NULL,NULL),(466,NULL,47,6,NULL,NULL),(467,NULL,47,7,NULL,NULL),(468,NULL,47,8,NULL,NULL),(469,NULL,47,9,NULL,NULL),(470,NULL,47,10,NULL,NULL),(471,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>JULIO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN LOS RIOS</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',48,1,NULL,NULL),(472,NULL,48,2,NULL,NULL),(473,NULL,48,3,NULL,NULL),(474,NULL,48,4,NULL,NULL),(475,NULL,48,5,NULL,NULL),(476,NULL,48,6,NULL,NULL),(477,NULL,48,7,NULL,NULL),(478,NULL,48,8,NULL,NULL),(479,NULL,48,9,NULL,NULL),(480,NULL,48,10,NULL,NULL),(481,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN ARICA Y PARINACOTA</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      <span style=\"font-size: small;\"><strong><em>Pablo Gemio, Ingenierbro, Quilamapu</em></strong></span><br />\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',49,1,NULL,NULL),(482,NULL,49,2,NULL,NULL),(483,NULL,49,3,NULL,NULL),(484,NULL,49,4,NULL,NULL),(485,NULL,49,5,NULL,NULL),(486,NULL,49,6,NULL,NULL),(487,NULL,49,7,NULL,NULL),(488,NULL,49,8,NULL,NULL),(489,NULL,49,9,NULL,NULL),(490,NULL,49,10,NULL,NULL),(491,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN TARAPACÁ</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      <span style=\"font-size: small;\"><strong><em>Pablo Gemio, Ingenierbro, Quilamapu</em></strong></span><br />\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',50,1,NULL,NULL),(492,NULL,50,2,NULL,NULL),(493,NULL,50,3,NULL,NULL),(494,NULL,50,4,NULL,NULL),(495,NULL,50,5,NULL,NULL),(496,NULL,50,6,NULL,NULL),(497,NULL,50,7,NULL,NULL),(498,NULL,50,8,NULL,NULL),(499,NULL,50,9,NULL,NULL),(500,NULL,50,10,NULL,NULL),(501,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN ANTOFAGASTA</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      <span style=\"font-size: small;\"><strong><em>Pablo Gemio, Ingenierbro, Quilamapu</em></strong></span><br />\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',51,1,NULL,NULL),(502,NULL,51,2,NULL,NULL),(503,NULL,51,3,NULL,NULL),(504,NULL,51,4,NULL,NULL),(505,NULL,51,5,NULL,NULL),(506,NULL,51,6,NULL,NULL),(507,NULL,51,7,NULL,NULL),(508,NULL,51,8,NULL,NULL),(509,NULL,51,9,NULL,NULL),(510,NULL,51,10,NULL,NULL),(511,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN ATACAMA</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',52,1,NULL,NULL),(512,NULL,52,2,NULL,NULL),(513,NULL,52,3,NULL,NULL),(514,NULL,52,4,NULL,NULL),(515,NULL,52,5,NULL,NULL),(516,NULL,52,6,NULL,NULL),(517,NULL,52,7,NULL,NULL),(518,NULL,52,8,NULL,NULL),(519,NULL,52,9,NULL,NULL),(520,NULL,52,10,NULL,NULL),(521,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN COQUIMBO</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',53,1,NULL,NULL),(522,NULL,53,2,NULL,NULL),(523,NULL,53,3,NULL,NULL),(524,NULL,53,4,NULL,NULL),(525,NULL,53,5,NULL,NULL),(526,NULL,53,6,NULL,NULL),(527,NULL,53,7,NULL,NULL),(528,NULL,53,8,NULL,NULL),(529,NULL,53,9,NULL,NULL),(530,NULL,53,10,NULL,NULL),(531,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN VALPARAÍSO</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',54,1,NULL,NULL),(532,NULL,54,2,NULL,NULL),(533,NULL,54,3,NULL,NULL),(534,NULL,54,4,NULL,NULL),(535,NULL,54,5,NULL,NULL),(536,NULL,54,6,NULL,NULL),(537,NULL,54,7,NULL,NULL),(538,NULL,54,8,NULL,NULL),(539,NULL,54,9,NULL,NULL),(540,NULL,54,10,NULL,NULL),(541,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN O\'HIGGINS</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',55,1,NULL,NULL),(542,NULL,55,2,NULL,NULL),(543,NULL,55,3,NULL,NULL),(544,NULL,55,4,NULL,NULL),(545,NULL,55,5,NULL,NULL),(546,NULL,55,6,NULL,NULL),(547,NULL,55,7,NULL,NULL),(548,NULL,55,8,NULL,NULL),(549,NULL,55,9,NULL,NULL),(550,NULL,55,10,NULL,NULL),(551,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN MAULE</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',56,1,NULL,NULL),(552,NULL,56,2,NULL,NULL),(553,NULL,56,3,NULL,NULL),(554,NULL,56,4,NULL,NULL),(555,NULL,56,5,NULL,NULL),(556,NULL,56,6,NULL,NULL),(557,NULL,56,7,NULL,NULL),(558,NULL,56,8,NULL,NULL),(559,NULL,56,9,NULL,NULL),(560,NULL,56,10,NULL,NULL),(561,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN BÍO BÍO</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',57,1,NULL,NULL),(562,NULL,57,2,NULL,NULL),(563,NULL,57,3,NULL,NULL),(564,NULL,57,4,NULL,NULL),(565,NULL,57,5,NULL,NULL),(566,NULL,57,6,NULL,NULL),(567,NULL,57,7,NULL,NULL),(568,NULL,57,8,NULL,NULL),(569,NULL,57,9,NULL,NULL),(570,NULL,57,10,NULL,NULL),(571,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN ÑUBLE</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',58,1,NULL,NULL),(572,NULL,58,2,NULL,NULL),(573,NULL,58,3,NULL,NULL),(574,NULL,58,4,NULL,NULL),(575,NULL,58,5,NULL,NULL),(576,NULL,58,6,NULL,NULL),(577,NULL,58,7,NULL,NULL),(578,NULL,58,8,NULL,NULL),(579,NULL,58,9,NULL,NULL),(580,NULL,58,10,NULL,NULL),(581,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN ARAUCANÍA</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',59,1,NULL,NULL),(582,NULL,59,2,NULL,NULL),(583,NULL,59,3,NULL,NULL),(584,NULL,59,4,NULL,NULL),(585,NULL,59,5,NULL,NULL),(586,NULL,59,6,NULL,NULL),(587,NULL,59,7,NULL,NULL),(588,NULL,59,8,NULL,NULL),(589,NULL,59,9,NULL,NULL),(590,NULL,59,10,NULL,NULL),(591,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN LOS LAGOS</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',60,1,NULL,NULL),(592,NULL,60,2,NULL,NULL),(593,NULL,60,3,NULL,NULL),(594,NULL,60,4,NULL,NULL),(595,NULL,60,5,NULL,NULL),(596,NULL,60,6,NULL,NULL),(597,NULL,60,7,NULL,NULL),(598,NULL,60,8,NULL,NULL),(599,NULL,60,9,NULL,NULL),(600,NULL,60,10,NULL,NULL),(601,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN AYSÉN</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',61,1,NULL,NULL),(602,NULL,61,2,NULL,NULL),(603,NULL,61,3,NULL,NULL),(604,NULL,61,4,NULL,NULL),(605,NULL,61,5,NULL,NULL),(606,NULL,61,6,NULL,NULL),(607,NULL,61,7,NULL,NULL),(608,NULL,61,8,NULL,NULL),(609,NULL,61,9,NULL,NULL),(610,NULL,61,10,NULL,NULL),(611,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN MAGALLANES</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',62,1,NULL,NULL),(612,NULL,62,2,NULL,NULL),(613,NULL,62,3,NULL,NULL),(614,NULL,62,4,NULL,NULL),(615,NULL,62,5,NULL,NULL),(616,NULL,62,6,NULL,NULL),(617,NULL,62,7,NULL,NULL),(618,NULL,62,8,NULL,NULL),(619,NULL,62,9,NULL,NULL),(620,NULL,62,10,NULL,NULL),(621,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN METROPOLITANA</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',63,1,NULL,NULL),(622,NULL,63,2,NULL,NULL),(623,NULL,63,3,NULL,NULL),(624,NULL,63,4,NULL,NULL),(625,NULL,63,5,NULL,NULL),(626,NULL,63,6,NULL,NULL),(627,NULL,63,7,NULL,NULL),(628,NULL,63,8,NULL,NULL),(629,NULL,63,9,NULL,NULL),(630,NULL,63,10,NULL,NULL),(631,'<p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"../../images/logo-inia.png\" alt=\"\" width=\"585\" height=\"124\" /></strong></span></p>\n      <p style=\"padding-top: 40px; padding-bottom: 40px;\" align=\"center\">\n      <span style=\"color: red; font-size: 24px;\">\n      <strong>BOLETÍN NACIONAL DE ANÁLISIS DE RIESGOS AGROCLIMÁTICOS PARA LAS PRINCIPALES ESPECIES FRUTALES Y CULTIVOS, Y LA GANADERÍA</strong></span></p>\n      <p align=\"center\"><span style=\"color: red; font-size: 24px;\">\n      <strong>ENERO 2018</strong></span></p>\n      <p align=\"center\">\n      <span style=\"color: black; font-size: 24px;\"><strong>REGIÓN LOS RIOS</strong></span></p>\n      <p><br /><br /></p>\n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em>Autores INIA:</em></strong></span><br />\n      \n      \n      <p><span style=\"font-size: medium; color: green;\">\n      <strong><em></em></strong></span></p>\n      <p><span style=\"color: green; font-size: medium;\"><strong><em>Coordinador INIA:</em></strong></span><br /><span style=\"font-size: small;\"><strong><em></em></strong></span></p>',64,1,NULL,NULL),(632,NULL,64,2,NULL,NULL),(633,NULL,64,3,NULL,NULL),(634,NULL,64,4,NULL,NULL),(635,NULL,64,5,NULL,NULL),(636,NULL,64,6,NULL,NULL),(637,NULL,64,7,NULL,NULL),(638,NULL,64,8,NULL,NULL),(639,NULL,64,9,NULL,NULL),(640,NULL,64,10,NULL,NULL);
/*!40000 ALTER TABLE `boletin_seccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boletines`
--

DROP TABLE IF EXISTS `boletines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boletines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `publico` tinyint(1) NOT NULL DEFAULT '0',
  `region_id` int(10) unsigned DEFAULT NULL,
  `publicacion_id` int(10) unsigned DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `boletines_region_id_foreign` (`region_id`),
  KEY `boletines_publicacion_id_foreign` (`publicacion_id`),
  CONSTRAINT `boletines_publicacion_id_foreign` FOREIGN KEY (`publicacion_id`) REFERENCES `publicaciones` (`id`) ON DELETE CASCADE,
  CONSTRAINT `boletines_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boletines`
--

LOCK TABLES `boletines` WRITE;
/*!40000 ALTER TABLE `boletines` DISABLE KEYS */;
INSERT INTO `boletines` VALUES (33,1,2,3,1,'2018-08-13 17:09:06','2018-08-13 17:13:07'),(34,1,3,3,1,'2018-08-13 17:09:06','2018-08-13 17:55:47'),(35,1,4,3,1,'2018-08-13 17:09:06','2018-08-13 18:00:55'),(36,0,5,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(37,0,6,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(38,0,7,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(39,0,8,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(40,0,9,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(41,0,10,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(42,0,11,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(43,0,12,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(44,0,13,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(45,0,14,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(46,0,15,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(47,0,16,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(48,0,17,3,1,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(49,0,2,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(50,0,3,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(51,0,4,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(52,0,5,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(53,0,6,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(54,0,7,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(55,0,8,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(56,0,9,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(57,0,10,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(58,0,11,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(59,0,12,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(60,0,13,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(61,0,14,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(62,0,15,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(63,0,16,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(64,0,17,4,1,'2018-08-16 15:05:28','2018-08-16 15:05:28');
/*!40000 ALTER TABLE `boletines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Chile','2018-08-12 22:08:41','2018-08-12 22:08:41',NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eleccion`
--

DROP TABLE IF EXISTS `eleccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eleccion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `publicacion_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eleccion`
--

LOCK TABLES `eleccion` WRITE;
/*!40000 ALTER TABLE `eleccion` DISABLE KEYS */;
INSERT INTO `eleccion` VALUES (1,3,'2018-08-12 22:08:41','2018-08-13 17:11:38');
/*!40000 ALTER TABLE `eleccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `macrozona_subseccion`
--

DROP TABLE IF EXISTS `macrozona_subseccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `macrozona_subseccion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `macrozona_id` int(10) unsigned NOT NULL,
  `subseccion_id` int(10) unsigned NOT NULL,
  `resumen` text COLLATE utf8mb4_unicode_ci,
  `contenido` text COLLATE utf8mb4_unicode_ci,
  `autor` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `macrozona_subseccion_macrozona_id_index` (`macrozona_id`),
  KEY `macrozona_subseccion_subseccion_id_index` (`subseccion_id`),
  CONSTRAINT `macrozona_subseccion_subseccion_id_foreign` FOREIGN KEY (`subseccion_id`) REFERENCES `subsecciones` (`id`) ON DELETE CASCADE,
  CONSTRAINT `macrozona_subseccion_macrozona_id_foreign` FOREIGN KEY (`macrozona_id`) REFERENCES `macrozonas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=989 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `macrozona_subseccion`
--

LOCK TABLES `macrozona_subseccion` WRITE;
/*!40000 ALTER TABLE `macrozona_subseccion` DISABLE KEYS */;
INSERT INTO `macrozona_subseccion` VALUES (495,1,33,NULL,NULL,NULL,NULL,NULL,NULL),(496,2,33,NULL,NULL,NULL,NULL,NULL,NULL),(497,3,33,NULL,NULL,NULL,NULL,NULL,NULL),(498,4,33,NULL,NULL,NULL,NULL,NULL,NULL),(499,5,33,NULL,NULL,NULL,NULL,NULL,NULL),(500,6,33,NULL,NULL,NULL,NULL,NULL,NULL),(501,7,33,NULL,NULL,NULL,NULL,NULL,NULL),(502,8,33,NULL,NULL,NULL,NULL,NULL,NULL),(503,9,33,NULL,NULL,NULL,NULL,NULL,NULL),(504,10,35,NULL,NULL,NULL,NULL,NULL,NULL),(505,11,35,NULL,NULL,NULL,NULL,NULL,NULL),(506,12,35,NULL,NULL,NULL,NULL,NULL,NULL),(507,13,35,NULL,NULL,NULL,NULL,NULL,NULL),(508,14,35,NULL,NULL,NULL,NULL,NULL,NULL),(509,15,35,NULL,NULL,NULL,NULL,NULL,NULL),(510,16,35,NULL,NULL,NULL,NULL,NULL,NULL),(511,17,35,NULL,NULL,NULL,NULL,NULL,NULL),(512,18,36,NULL,NULL,NULL,NULL,NULL,NULL),(513,19,36,NULL,NULL,NULL,NULL,NULL,NULL),(514,20,36,NULL,NULL,NULL,NULL,NULL,NULL),(515,21,36,NULL,NULL,NULL,NULL,NULL,NULL),(516,22,36,NULL,NULL,NULL,NULL,NULL,NULL),(517,23,36,NULL,NULL,NULL,NULL,NULL,NULL),(518,24,36,NULL,NULL,NULL,NULL,NULL,NULL),(519,25,36,NULL,NULL,NULL,NULL,NULL,NULL),(520,26,36,NULL,NULL,NULL,NULL,NULL,NULL),(521,27,36,NULL,NULL,NULL,NULL,NULL,NULL),(522,28,36,NULL,NULL,NULL,NULL,NULL,NULL),(523,29,37,NULL,NULL,NULL,NULL,NULL,NULL),(524,30,37,NULL,NULL,NULL,NULL,NULL,NULL),(525,31,37,NULL,NULL,NULL,NULL,NULL,NULL),(526,32,37,NULL,NULL,NULL,NULL,NULL,NULL),(527,33,37,NULL,NULL,NULL,NULL,NULL,NULL),(528,34,37,NULL,NULL,NULL,NULL,NULL,NULL),(529,35,37,NULL,NULL,NULL,NULL,NULL,NULL),(530,36,37,NULL,NULL,NULL,NULL,NULL,NULL),(531,37,37,NULL,NULL,NULL,NULL,NULL,NULL),(532,38,37,NULL,NULL,NULL,NULL,NULL,NULL),(533,39,37,NULL,NULL,NULL,NULL,NULL,NULL),(534,40,37,NULL,NULL,NULL,NULL,NULL,NULL),(535,41,38,NULL,NULL,NULL,NULL,NULL,NULL),(536,42,38,NULL,NULL,NULL,NULL,NULL,NULL),(537,43,38,NULL,NULL,NULL,NULL,NULL,NULL),(538,44,38,NULL,NULL,NULL,NULL,NULL,NULL),(539,45,38,NULL,NULL,NULL,NULL,NULL,NULL),(540,46,38,NULL,NULL,NULL,NULL,NULL,NULL),(541,47,38,NULL,NULL,NULL,NULL,NULL,NULL),(542,48,38,NULL,NULL,NULL,NULL,NULL,NULL),(543,49,38,NULL,NULL,NULL,NULL,NULL,NULL),(544,50,38,NULL,NULL,NULL,NULL,NULL,NULL),(545,60,39,NULL,NULL,NULL,NULL,NULL,NULL),(546,61,39,NULL,NULL,NULL,NULL,NULL,NULL),(547,62,39,NULL,NULL,NULL,NULL,NULL,NULL),(548,63,39,NULL,NULL,NULL,NULL,NULL,NULL),(549,64,39,NULL,NULL,NULL,NULL,NULL,NULL),(550,65,39,NULL,NULL,NULL,NULL,NULL,NULL),(551,66,39,NULL,NULL,NULL,NULL,NULL,NULL),(552,67,39,NULL,NULL,NULL,NULL,NULL,NULL),(553,68,39,NULL,NULL,NULL,NULL,NULL,NULL),(554,69,39,NULL,NULL,NULL,NULL,NULL,NULL),(555,70,39,NULL,NULL,NULL,NULL,NULL,NULL),(556,71,39,NULL,NULL,NULL,NULL,NULL,NULL),(557,72,39,NULL,NULL,NULL,NULL,NULL,NULL),(558,73,39,NULL,NULL,NULL,NULL,NULL,NULL),(559,74,39,NULL,NULL,NULL,NULL,NULL,NULL),(560,75,39,NULL,NULL,NULL,NULL,NULL,NULL),(561,76,39,NULL,NULL,NULL,NULL,NULL,NULL),(562,77,39,NULL,NULL,NULL,NULL,NULL,NULL),(563,78,39,NULL,NULL,NULL,NULL,NULL,NULL),(564,79,39,NULL,NULL,NULL,NULL,NULL,NULL),(565,80,39,NULL,NULL,NULL,NULL,NULL,NULL),(566,81,39,NULL,NULL,NULL,NULL,NULL,NULL),(567,82,39,NULL,NULL,NULL,NULL,NULL,NULL),(568,83,39,NULL,NULL,NULL,NULL,NULL,NULL),(569,84,39,NULL,NULL,NULL,NULL,NULL,NULL),(570,85,39,NULL,NULL,NULL,NULL,NULL,NULL),(571,86,39,NULL,NULL,NULL,NULL,NULL,NULL),(572,87,39,NULL,NULL,NULL,NULL,NULL,NULL),(573,88,39,NULL,NULL,NULL,NULL,NULL,NULL),(574,89,39,NULL,NULL,NULL,NULL,NULL,NULL),(575,90,39,NULL,NULL,NULL,NULL,NULL,NULL),(576,91,39,NULL,NULL,NULL,NULL,NULL,NULL),(577,92,39,NULL,NULL,NULL,NULL,NULL,NULL),(578,93,39,NULL,NULL,NULL,NULL,NULL,NULL),(579,94,39,NULL,NULL,NULL,NULL,NULL,NULL),(580,95,39,NULL,NULL,NULL,NULL,NULL,NULL),(581,96,39,NULL,NULL,NULL,NULL,NULL,NULL),(582,97,39,NULL,NULL,NULL,NULL,NULL,NULL),(583,98,40,NULL,NULL,NULL,NULL,NULL,NULL),(584,99,40,NULL,NULL,NULL,NULL,NULL,NULL),(585,100,40,NULL,NULL,NULL,NULL,NULL,NULL),(586,101,40,NULL,NULL,NULL,NULL,NULL,NULL),(587,102,40,NULL,NULL,NULL,NULL,NULL,NULL),(588,103,40,NULL,NULL,NULL,NULL,NULL,NULL),(589,104,40,NULL,NULL,NULL,NULL,NULL,NULL),(590,105,40,NULL,NULL,NULL,NULL,NULL,NULL),(591,106,40,NULL,NULL,NULL,NULL,NULL,NULL),(592,107,40,NULL,NULL,NULL,NULL,NULL,NULL),(593,108,40,NULL,NULL,NULL,NULL,NULL,NULL),(594,109,40,NULL,NULL,NULL,NULL,NULL,NULL),(595,110,40,NULL,NULL,NULL,NULL,NULL,NULL),(596,111,41,NULL,NULL,NULL,NULL,NULL,NULL),(597,112,41,NULL,NULL,NULL,NULL,NULL,NULL),(598,113,41,NULL,NULL,NULL,NULL,NULL,NULL),(599,114,41,NULL,NULL,NULL,NULL,NULL,NULL),(600,115,41,NULL,NULL,NULL,NULL,NULL,NULL),(601,116,41,NULL,NULL,NULL,NULL,NULL,NULL),(602,117,41,NULL,NULL,NULL,NULL,NULL,NULL),(603,118,41,NULL,NULL,NULL,NULL,NULL,NULL),(604,119,41,NULL,NULL,NULL,NULL,NULL,NULL),(605,120,41,NULL,NULL,NULL,NULL,NULL,NULL),(606,121,41,NULL,NULL,NULL,NULL,NULL,NULL),(607,122,41,NULL,NULL,NULL,NULL,NULL,NULL),(608,123,41,NULL,NULL,NULL,NULL,NULL,NULL),(609,124,41,NULL,NULL,NULL,NULL,NULL,NULL),(610,125,41,NULL,NULL,NULL,NULL,NULL,NULL),(611,126,41,NULL,NULL,NULL,NULL,NULL,NULL),(612,127,41,NULL,NULL,NULL,NULL,NULL,NULL),(613,128,41,NULL,NULL,NULL,NULL,NULL,NULL),(614,129,41,NULL,NULL,NULL,NULL,NULL,NULL),(615,130,41,NULL,NULL,NULL,NULL,NULL,NULL),(616,131,41,NULL,NULL,NULL,NULL,NULL,NULL),(617,132,41,NULL,NULL,NULL,NULL,NULL,NULL),(618,226,42,NULL,NULL,NULL,NULL,NULL,NULL),(619,227,42,NULL,NULL,NULL,NULL,NULL,NULL),(620,228,42,NULL,NULL,NULL,NULL,NULL,NULL),(621,229,42,NULL,NULL,NULL,NULL,NULL,NULL),(622,230,42,NULL,NULL,NULL,NULL,NULL,NULL),(623,231,42,NULL,NULL,NULL,NULL,NULL,NULL),(624,232,42,NULL,NULL,NULL,NULL,NULL,NULL),(625,233,42,NULL,NULL,NULL,NULL,NULL,NULL),(626,234,42,NULL,NULL,NULL,NULL,NULL,NULL),(627,235,42,NULL,NULL,NULL,NULL,NULL,NULL),(628,236,42,NULL,NULL,NULL,NULL,NULL,NULL),(629,237,42,NULL,NULL,NULL,NULL,NULL,NULL),(630,238,42,NULL,NULL,NULL,NULL,NULL,NULL),(631,239,42,NULL,NULL,NULL,NULL,NULL,NULL),(632,240,42,NULL,NULL,NULL,NULL,NULL,NULL),(633,241,42,NULL,NULL,NULL,NULL,NULL,NULL),(634,242,42,NULL,NULL,NULL,NULL,NULL,NULL),(635,243,42,NULL,NULL,NULL,NULL,NULL,NULL),(636,244,42,NULL,NULL,NULL,NULL,NULL,NULL),(637,245,42,NULL,NULL,NULL,NULL,NULL,NULL),(638,246,42,NULL,NULL,NULL,NULL,NULL,NULL),(639,247,42,NULL,NULL,NULL,NULL,NULL,NULL),(640,133,43,NULL,NULL,NULL,NULL,NULL,NULL),(641,134,43,NULL,NULL,NULL,NULL,NULL,NULL),(642,135,43,NULL,NULL,NULL,NULL,NULL,NULL),(643,136,43,NULL,NULL,NULL,NULL,NULL,NULL),(644,137,43,NULL,NULL,NULL,NULL,NULL,NULL),(645,138,43,NULL,NULL,NULL,NULL,NULL,NULL),(646,139,43,NULL,NULL,NULL,NULL,NULL,NULL),(647,140,43,NULL,NULL,NULL,NULL,NULL,NULL),(648,141,43,NULL,NULL,NULL,NULL,NULL,NULL),(649,142,43,NULL,NULL,NULL,NULL,NULL,NULL),(650,143,43,NULL,NULL,NULL,NULL,NULL,NULL),(651,144,43,NULL,NULL,NULL,NULL,NULL,NULL),(652,145,43,NULL,NULL,NULL,NULL,NULL,NULL),(653,146,43,NULL,NULL,NULL,NULL,NULL,NULL),(654,147,43,NULL,NULL,NULL,NULL,NULL,NULL),(655,148,43,NULL,NULL,NULL,NULL,NULL,NULL),(656,149,43,NULL,NULL,NULL,NULL,NULL,NULL),(657,150,43,NULL,NULL,NULL,NULL,NULL,NULL),(658,151,43,NULL,NULL,NULL,NULL,NULL,NULL),(659,152,43,NULL,NULL,NULL,NULL,NULL,NULL),(660,153,43,NULL,NULL,NULL,NULL,NULL,NULL),(661,154,43,NULL,NULL,NULL,NULL,NULL,NULL),(662,155,43,NULL,NULL,NULL,NULL,NULL,NULL),(663,156,43,NULL,NULL,NULL,NULL,NULL,NULL),(664,157,43,NULL,NULL,NULL,NULL,NULL,NULL),(665,158,43,NULL,NULL,NULL,NULL,NULL,NULL),(666,159,43,NULL,NULL,NULL,NULL,NULL,NULL),(667,160,43,NULL,NULL,NULL,NULL,NULL,NULL),(668,161,43,NULL,NULL,NULL,NULL,NULL,NULL),(669,162,43,NULL,NULL,NULL,NULL,NULL,NULL),(670,163,43,NULL,NULL,NULL,NULL,NULL,NULL),(671,164,43,NULL,NULL,NULL,NULL,NULL,NULL),(672,165,43,NULL,NULL,NULL,NULL,NULL,NULL),(673,166,43,NULL,NULL,NULL,NULL,NULL,NULL),(674,167,43,NULL,NULL,NULL,NULL,NULL,NULL),(675,168,43,NULL,NULL,NULL,NULL,NULL,NULL),(676,169,43,NULL,NULL,NULL,NULL,NULL,NULL),(677,170,43,NULL,NULL,NULL,NULL,NULL,NULL),(678,171,43,NULL,NULL,NULL,NULL,NULL,NULL),(679,183,44,NULL,NULL,NULL,NULL,NULL,NULL),(680,184,44,NULL,NULL,NULL,NULL,NULL,NULL),(681,185,44,NULL,NULL,NULL,NULL,NULL,NULL),(682,186,44,NULL,NULL,NULL,NULL,NULL,NULL),(683,187,44,NULL,NULL,NULL,NULL,NULL,NULL),(684,188,44,NULL,NULL,NULL,NULL,NULL,NULL),(685,189,44,NULL,NULL,NULL,NULL,NULL,NULL),(686,190,44,NULL,NULL,NULL,NULL,NULL,NULL),(687,191,44,NULL,NULL,NULL,NULL,NULL,NULL),(688,192,44,NULL,NULL,NULL,NULL,NULL,NULL),(689,193,44,NULL,NULL,NULL,NULL,NULL,NULL),(690,194,44,NULL,NULL,NULL,NULL,NULL,NULL),(691,195,44,NULL,NULL,NULL,NULL,NULL,NULL),(692,196,44,NULL,NULL,NULL,NULL,NULL,NULL),(693,197,44,NULL,NULL,NULL,NULL,NULL,NULL),(694,198,44,NULL,NULL,NULL,NULL,NULL,NULL),(695,199,44,NULL,NULL,NULL,NULL,NULL,NULL),(696,200,44,NULL,NULL,NULL,NULL,NULL,NULL),(697,201,44,NULL,NULL,NULL,NULL,NULL,NULL),(698,202,44,NULL,NULL,NULL,NULL,NULL,NULL),(699,203,44,NULL,NULL,NULL,NULL,NULL,NULL),(700,204,44,NULL,NULL,NULL,NULL,NULL,NULL),(701,205,45,NULL,NULL,NULL,NULL,NULL,NULL),(702,206,45,NULL,NULL,NULL,NULL,NULL,NULL),(703,207,45,NULL,NULL,NULL,NULL,NULL,NULL),(704,208,45,NULL,NULL,NULL,NULL,NULL,NULL),(705,209,45,NULL,NULL,NULL,NULL,NULL,NULL),(706,210,45,NULL,NULL,NULL,NULL,NULL,NULL),(707,211,45,NULL,NULL,NULL,NULL,NULL,NULL),(708,212,45,NULL,NULL,NULL,NULL,NULL,NULL),(709,213,45,NULL,NULL,NULL,NULL,NULL,NULL),(710,214,45,NULL,NULL,NULL,NULL,NULL,NULL),(711,215,45,NULL,NULL,NULL,NULL,NULL,NULL),(712,216,46,NULL,NULL,NULL,NULL,NULL,NULL),(713,217,46,NULL,NULL,NULL,NULL,NULL,NULL),(714,218,46,NULL,NULL,NULL,NULL,NULL,NULL),(715,219,46,NULL,NULL,NULL,NULL,NULL,NULL),(716,220,46,NULL,NULL,NULL,NULL,NULL,NULL),(717,221,46,NULL,NULL,NULL,NULL,NULL,NULL),(718,222,46,NULL,NULL,NULL,NULL,NULL,NULL),(719,223,46,NULL,NULL,NULL,NULL,NULL,NULL),(720,224,46,NULL,NULL,NULL,NULL,NULL,NULL),(721,225,46,NULL,NULL,NULL,NULL,NULL,NULL),(722,51,47,NULL,NULL,NULL,NULL,NULL,NULL),(723,52,47,NULL,NULL,NULL,NULL,NULL,NULL),(724,53,47,NULL,NULL,NULL,NULL,NULL,NULL),(725,54,47,NULL,NULL,NULL,NULL,NULL,NULL),(726,55,47,NULL,NULL,NULL,NULL,NULL,NULL),(727,56,47,NULL,NULL,NULL,NULL,NULL,NULL),(728,57,47,NULL,NULL,NULL,NULL,NULL,NULL),(729,58,47,NULL,NULL,NULL,NULL,NULL,NULL),(730,59,47,NULL,NULL,NULL,NULL,NULL,NULL),(731,172,48,NULL,NULL,NULL,NULL,NULL,NULL),(732,173,48,NULL,NULL,NULL,NULL,NULL,NULL),(733,174,48,NULL,NULL,NULL,NULL,NULL,NULL),(734,175,48,NULL,NULL,NULL,NULL,NULL,NULL),(735,176,48,NULL,NULL,NULL,NULL,NULL,NULL),(736,177,48,NULL,NULL,NULL,NULL,NULL,NULL),(737,178,48,NULL,NULL,NULL,NULL,NULL,NULL),(738,179,48,NULL,NULL,NULL,NULL,NULL,NULL),(739,180,48,NULL,NULL,NULL,NULL,NULL,NULL),(740,181,48,NULL,NULL,NULL,NULL,NULL,NULL),(741,182,48,NULL,NULL,NULL,NULL,NULL,NULL),(742,1,49,NULL,NULL,NULL,NULL,NULL,NULL),(743,2,49,NULL,NULL,NULL,NULL,NULL,NULL),(744,3,49,NULL,NULL,NULL,NULL,NULL,NULL),(745,4,49,NULL,NULL,NULL,NULL,NULL,NULL),(746,5,49,NULL,NULL,NULL,NULL,NULL,NULL),(747,6,49,NULL,NULL,NULL,NULL,NULL,NULL),(748,7,49,NULL,NULL,NULL,NULL,NULL,NULL),(749,8,49,NULL,NULL,NULL,NULL,NULL,NULL),(750,9,49,NULL,NULL,NULL,NULL,NULL,NULL),(751,10,51,NULL,NULL,NULL,NULL,NULL,NULL),(752,11,51,NULL,NULL,NULL,NULL,NULL,NULL),(753,12,51,NULL,NULL,NULL,NULL,NULL,NULL),(754,13,51,NULL,NULL,NULL,NULL,NULL,NULL),(755,14,51,NULL,NULL,NULL,NULL,NULL,NULL),(756,15,51,NULL,NULL,NULL,NULL,NULL,NULL),(757,16,51,NULL,NULL,NULL,NULL,NULL,NULL),(758,17,51,NULL,NULL,NULL,NULL,NULL,NULL),(759,18,52,NULL,NULL,NULL,NULL,NULL,NULL),(760,19,52,NULL,NULL,NULL,NULL,NULL,NULL),(761,20,52,NULL,NULL,NULL,NULL,NULL,NULL),(762,21,52,NULL,NULL,NULL,NULL,NULL,NULL),(763,22,52,NULL,NULL,NULL,NULL,NULL,NULL),(764,23,52,NULL,NULL,NULL,NULL,NULL,NULL),(765,24,52,NULL,NULL,NULL,NULL,NULL,NULL),(766,25,52,NULL,NULL,NULL,NULL,NULL,NULL),(767,26,52,NULL,NULL,NULL,NULL,NULL,NULL),(768,27,52,NULL,NULL,NULL,NULL,NULL,NULL),(769,28,52,NULL,NULL,NULL,NULL,NULL,NULL),(770,29,53,NULL,NULL,NULL,NULL,NULL,NULL),(771,30,53,NULL,NULL,NULL,NULL,NULL,NULL),(772,31,53,NULL,NULL,NULL,NULL,NULL,NULL),(773,32,53,NULL,NULL,NULL,NULL,NULL,NULL),(774,33,53,NULL,NULL,NULL,NULL,NULL,NULL),(775,34,53,NULL,NULL,NULL,NULL,NULL,NULL),(776,35,53,NULL,NULL,NULL,NULL,NULL,NULL),(777,36,53,NULL,NULL,NULL,NULL,NULL,NULL),(778,37,53,NULL,NULL,NULL,NULL,NULL,NULL),(779,38,53,NULL,NULL,NULL,NULL,NULL,NULL),(780,39,53,NULL,NULL,NULL,NULL,NULL,NULL),(781,40,53,NULL,NULL,NULL,NULL,NULL,NULL),(782,41,54,NULL,NULL,NULL,NULL,NULL,NULL),(783,42,54,NULL,NULL,NULL,NULL,NULL,NULL),(784,43,54,NULL,NULL,NULL,NULL,NULL,NULL),(785,44,54,NULL,NULL,NULL,NULL,NULL,NULL),(786,45,54,NULL,NULL,NULL,NULL,NULL,NULL),(787,46,54,NULL,NULL,NULL,NULL,NULL,NULL),(788,47,54,NULL,NULL,NULL,NULL,NULL,NULL),(789,48,54,NULL,NULL,NULL,NULL,NULL,NULL),(790,49,54,NULL,NULL,NULL,NULL,NULL,NULL),(791,50,54,NULL,NULL,NULL,NULL,NULL,NULL),(792,60,55,NULL,NULL,NULL,NULL,NULL,NULL),(793,61,55,NULL,NULL,NULL,NULL,NULL,NULL),(794,62,55,NULL,NULL,NULL,NULL,NULL,NULL),(795,63,55,NULL,NULL,NULL,NULL,NULL,NULL),(796,64,55,NULL,NULL,NULL,NULL,NULL,NULL),(797,65,55,NULL,NULL,NULL,NULL,NULL,NULL),(798,66,55,NULL,NULL,NULL,NULL,NULL,NULL),(799,67,55,NULL,NULL,NULL,NULL,NULL,NULL),(800,68,55,NULL,NULL,NULL,NULL,NULL,NULL),(801,69,55,NULL,NULL,NULL,NULL,NULL,NULL),(802,70,55,NULL,NULL,NULL,NULL,NULL,NULL),(803,71,55,NULL,NULL,NULL,NULL,NULL,NULL),(804,72,55,NULL,NULL,NULL,NULL,NULL,NULL),(805,73,55,NULL,NULL,NULL,NULL,NULL,NULL),(806,74,55,NULL,NULL,NULL,NULL,NULL,NULL),(807,75,55,NULL,NULL,NULL,NULL,NULL,NULL),(808,76,55,NULL,NULL,NULL,NULL,NULL,NULL),(809,77,55,NULL,NULL,NULL,NULL,NULL,NULL),(810,78,55,NULL,NULL,NULL,NULL,NULL,NULL),(811,79,55,NULL,NULL,NULL,NULL,NULL,NULL),(812,80,55,NULL,NULL,NULL,NULL,NULL,NULL),(813,81,55,NULL,NULL,NULL,NULL,NULL,NULL),(814,82,55,NULL,NULL,NULL,NULL,NULL,NULL),(815,83,55,NULL,NULL,NULL,NULL,NULL,NULL),(816,84,55,NULL,NULL,NULL,NULL,NULL,NULL),(817,85,55,NULL,NULL,NULL,NULL,NULL,NULL),(818,86,55,NULL,NULL,NULL,NULL,NULL,NULL),(819,87,55,NULL,NULL,NULL,NULL,NULL,NULL),(820,88,55,NULL,NULL,NULL,NULL,NULL,NULL),(821,89,55,NULL,NULL,NULL,NULL,NULL,NULL),(822,90,55,NULL,NULL,NULL,NULL,NULL,NULL),(823,91,55,NULL,NULL,NULL,NULL,NULL,NULL),(824,92,55,NULL,NULL,NULL,NULL,NULL,NULL),(825,93,55,NULL,NULL,NULL,NULL,NULL,NULL),(826,94,55,NULL,NULL,NULL,NULL,NULL,NULL),(827,95,55,NULL,NULL,NULL,NULL,NULL,NULL),(828,96,55,NULL,NULL,NULL,NULL,NULL,NULL),(829,97,55,NULL,NULL,NULL,NULL,NULL,NULL),(830,98,56,NULL,NULL,NULL,NULL,NULL,NULL),(831,99,56,NULL,NULL,NULL,NULL,NULL,NULL),(832,100,56,NULL,NULL,NULL,NULL,NULL,NULL),(833,101,56,NULL,NULL,NULL,NULL,NULL,NULL),(834,102,56,NULL,NULL,NULL,NULL,NULL,NULL),(835,103,56,NULL,NULL,NULL,NULL,NULL,NULL),(836,104,56,NULL,NULL,NULL,NULL,NULL,NULL),(837,105,56,NULL,NULL,NULL,NULL,NULL,NULL),(838,106,56,NULL,NULL,NULL,NULL,NULL,NULL),(839,107,56,NULL,NULL,NULL,NULL,NULL,NULL),(840,108,56,NULL,NULL,NULL,NULL,NULL,NULL),(841,109,56,NULL,NULL,NULL,NULL,NULL,NULL),(842,110,56,NULL,NULL,NULL,NULL,NULL,NULL),(843,111,57,NULL,NULL,NULL,NULL,NULL,NULL),(844,112,57,NULL,NULL,NULL,NULL,NULL,NULL),(845,113,57,NULL,NULL,NULL,NULL,NULL,NULL),(846,114,57,NULL,NULL,NULL,NULL,NULL,NULL),(847,115,57,NULL,NULL,NULL,NULL,NULL,NULL),(848,116,57,NULL,NULL,NULL,NULL,NULL,NULL),(849,117,57,NULL,NULL,NULL,NULL,NULL,NULL),(850,118,57,NULL,NULL,NULL,NULL,NULL,NULL),(851,119,57,NULL,NULL,NULL,NULL,NULL,NULL),(852,120,57,NULL,NULL,NULL,NULL,NULL,NULL),(853,121,57,NULL,NULL,NULL,NULL,NULL,NULL),(854,122,57,NULL,NULL,NULL,NULL,NULL,NULL),(855,123,57,NULL,NULL,NULL,NULL,NULL,NULL),(856,124,57,NULL,NULL,NULL,NULL,NULL,NULL),(857,125,57,NULL,NULL,NULL,NULL,NULL,NULL),(858,126,57,NULL,NULL,NULL,NULL,NULL,NULL),(859,127,57,NULL,NULL,NULL,NULL,NULL,NULL),(860,128,57,NULL,NULL,NULL,NULL,NULL,NULL),(861,129,57,NULL,NULL,NULL,NULL,NULL,NULL),(862,130,57,NULL,NULL,NULL,NULL,NULL,NULL),(863,131,57,NULL,NULL,NULL,NULL,NULL,NULL),(864,132,57,NULL,NULL,NULL,NULL,NULL,NULL),(865,226,58,NULL,NULL,NULL,NULL,NULL,NULL),(866,227,58,NULL,NULL,NULL,NULL,NULL,NULL),(867,228,58,NULL,NULL,NULL,NULL,NULL,NULL),(868,229,58,NULL,NULL,NULL,NULL,NULL,NULL),(869,230,58,NULL,NULL,NULL,NULL,NULL,NULL),(870,231,58,NULL,NULL,NULL,NULL,NULL,NULL),(871,232,58,NULL,NULL,NULL,NULL,NULL,NULL),(872,233,58,NULL,NULL,NULL,NULL,NULL,NULL),(873,234,58,NULL,NULL,NULL,NULL,NULL,NULL),(874,235,58,NULL,NULL,NULL,NULL,NULL,NULL),(875,236,58,NULL,NULL,NULL,NULL,NULL,NULL),(876,237,58,NULL,NULL,NULL,NULL,NULL,NULL),(877,238,58,NULL,NULL,NULL,NULL,NULL,NULL),(878,239,58,NULL,NULL,NULL,NULL,NULL,NULL),(879,240,58,NULL,NULL,NULL,NULL,NULL,NULL),(880,241,58,NULL,NULL,NULL,NULL,NULL,NULL),(881,242,58,NULL,NULL,NULL,NULL,NULL,NULL),(882,243,58,NULL,NULL,NULL,NULL,NULL,NULL),(883,244,58,NULL,NULL,NULL,NULL,NULL,NULL),(884,245,58,NULL,NULL,NULL,NULL,NULL,NULL),(885,246,58,NULL,NULL,NULL,NULL,NULL,NULL),(886,247,58,NULL,NULL,NULL,NULL,NULL,NULL),(887,133,59,NULL,NULL,NULL,NULL,NULL,NULL),(888,134,59,NULL,NULL,NULL,NULL,NULL,NULL),(889,135,59,NULL,NULL,NULL,NULL,NULL,NULL),(890,136,59,NULL,NULL,NULL,NULL,NULL,NULL),(891,137,59,NULL,NULL,NULL,NULL,NULL,NULL),(892,138,59,NULL,NULL,NULL,NULL,NULL,NULL),(893,139,59,NULL,NULL,NULL,NULL,NULL,NULL),(894,140,59,NULL,NULL,NULL,NULL,NULL,NULL),(895,141,59,NULL,NULL,NULL,NULL,NULL,NULL),(896,142,59,NULL,NULL,NULL,NULL,NULL,NULL),(897,143,59,NULL,NULL,NULL,NULL,NULL,NULL),(898,144,59,NULL,NULL,NULL,NULL,NULL,NULL),(899,145,59,NULL,NULL,NULL,NULL,NULL,NULL),(900,146,59,NULL,NULL,NULL,NULL,NULL,NULL),(901,147,59,NULL,NULL,NULL,NULL,NULL,NULL),(902,148,59,NULL,NULL,NULL,NULL,NULL,NULL),(903,149,59,NULL,NULL,NULL,NULL,NULL,NULL),(904,150,59,NULL,NULL,NULL,NULL,NULL,NULL),(905,151,59,NULL,NULL,NULL,NULL,NULL,NULL),(906,152,59,NULL,NULL,NULL,NULL,NULL,NULL),(907,153,59,NULL,NULL,NULL,NULL,NULL,NULL),(908,154,59,NULL,NULL,NULL,NULL,NULL,NULL),(909,155,59,NULL,NULL,NULL,NULL,NULL,NULL),(910,156,59,NULL,NULL,NULL,NULL,NULL,NULL),(911,157,59,NULL,NULL,NULL,NULL,NULL,NULL),(912,158,59,NULL,NULL,NULL,NULL,NULL,NULL),(913,159,59,NULL,NULL,NULL,NULL,NULL,NULL),(914,160,59,NULL,NULL,NULL,NULL,NULL,NULL),(915,161,59,NULL,NULL,NULL,NULL,NULL,NULL),(916,162,59,NULL,NULL,NULL,NULL,NULL,NULL),(917,163,59,NULL,NULL,NULL,NULL,NULL,NULL),(918,164,59,NULL,NULL,NULL,NULL,NULL,NULL),(919,165,59,NULL,NULL,NULL,NULL,NULL,NULL),(920,166,59,NULL,NULL,NULL,NULL,NULL,NULL),(921,167,59,NULL,NULL,NULL,NULL,NULL,NULL),(922,168,59,NULL,NULL,NULL,NULL,NULL,NULL),(923,169,59,NULL,NULL,NULL,NULL,NULL,NULL),(924,170,59,NULL,NULL,NULL,NULL,NULL,NULL),(925,171,59,NULL,NULL,NULL,NULL,NULL,NULL),(926,183,60,NULL,NULL,NULL,NULL,NULL,NULL),(927,184,60,NULL,NULL,NULL,NULL,NULL,NULL),(928,185,60,NULL,NULL,NULL,NULL,NULL,NULL),(929,186,60,NULL,NULL,NULL,NULL,NULL,NULL),(930,187,60,NULL,NULL,NULL,NULL,NULL,NULL),(931,188,60,NULL,NULL,NULL,NULL,NULL,NULL),(932,189,60,NULL,NULL,NULL,NULL,NULL,NULL),(933,190,60,NULL,NULL,NULL,NULL,NULL,NULL),(934,191,60,NULL,NULL,NULL,NULL,NULL,NULL),(935,192,60,NULL,NULL,NULL,NULL,NULL,NULL),(936,193,60,NULL,NULL,NULL,NULL,NULL,NULL),(937,194,60,NULL,NULL,NULL,NULL,NULL,NULL),(938,195,60,NULL,NULL,NULL,NULL,NULL,NULL),(939,196,60,NULL,NULL,NULL,NULL,NULL,NULL),(940,197,60,NULL,NULL,NULL,NULL,NULL,NULL),(941,198,60,NULL,NULL,NULL,NULL,NULL,NULL),(942,199,60,NULL,NULL,NULL,NULL,NULL,NULL),(943,200,60,NULL,NULL,NULL,NULL,NULL,NULL),(944,201,60,NULL,NULL,NULL,NULL,NULL,NULL),(945,202,60,NULL,NULL,NULL,NULL,NULL,NULL),(946,203,60,NULL,NULL,NULL,NULL,NULL,NULL),(947,204,60,NULL,NULL,NULL,NULL,NULL,NULL),(948,205,61,NULL,NULL,NULL,NULL,NULL,NULL),(949,206,61,NULL,NULL,NULL,NULL,NULL,NULL),(950,207,61,NULL,NULL,NULL,NULL,NULL,NULL),(951,208,61,NULL,NULL,NULL,NULL,NULL,NULL),(952,209,61,NULL,NULL,NULL,NULL,NULL,NULL),(953,210,61,NULL,NULL,NULL,NULL,NULL,NULL),(954,211,61,NULL,NULL,NULL,NULL,NULL,NULL),(955,212,61,NULL,NULL,NULL,NULL,NULL,NULL),(956,213,61,NULL,NULL,NULL,NULL,NULL,NULL),(957,214,61,NULL,NULL,NULL,NULL,NULL,NULL),(958,215,61,NULL,NULL,NULL,NULL,NULL,NULL),(959,216,62,NULL,NULL,NULL,NULL,NULL,NULL),(960,217,62,NULL,NULL,NULL,NULL,NULL,NULL),(961,218,62,NULL,NULL,NULL,NULL,NULL,NULL),(962,219,62,NULL,NULL,NULL,NULL,NULL,NULL),(963,220,62,NULL,NULL,NULL,NULL,NULL,NULL),(964,221,62,NULL,NULL,NULL,NULL,NULL,NULL),(965,222,62,NULL,NULL,NULL,NULL,NULL,NULL),(966,223,62,NULL,NULL,NULL,NULL,NULL,NULL),(967,224,62,NULL,NULL,NULL,NULL,NULL,NULL),(968,225,62,NULL,NULL,NULL,NULL,NULL,NULL),(969,51,63,NULL,NULL,NULL,NULL,NULL,NULL),(970,52,63,NULL,NULL,NULL,NULL,NULL,NULL),(971,53,63,NULL,NULL,NULL,NULL,NULL,NULL),(972,54,63,NULL,NULL,NULL,NULL,NULL,NULL),(973,55,63,NULL,NULL,NULL,NULL,NULL,NULL),(974,56,63,NULL,NULL,NULL,NULL,NULL,NULL),(975,57,63,NULL,NULL,NULL,NULL,NULL,NULL),(976,58,63,NULL,NULL,NULL,NULL,NULL,NULL),(977,59,63,NULL,NULL,NULL,NULL,NULL,NULL),(978,172,64,NULL,NULL,NULL,NULL,NULL,NULL),(979,173,64,NULL,NULL,NULL,NULL,NULL,NULL),(980,174,64,NULL,NULL,NULL,NULL,NULL,NULL),(981,175,64,NULL,NULL,NULL,NULL,NULL,NULL),(982,176,64,NULL,NULL,NULL,NULL,NULL,NULL),(983,177,64,NULL,NULL,NULL,NULL,NULL,NULL),(984,178,64,NULL,NULL,NULL,NULL,NULL,NULL),(985,179,64,NULL,NULL,NULL,NULL,NULL,NULL),(986,180,64,NULL,NULL,NULL,NULL,NULL,NULL),(987,181,64,NULL,NULL,NULL,NULL,NULL,NULL),(988,182,64,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `macrozona_subseccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `macrozona_user`
--

DROP TABLE IF EXISTS `macrozona_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `macrozona_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `macrozona_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `macrozona_user_macrozona_id_index` (`macrozona_id`),
  KEY `macrozona_user_user_id_index` (`user_id`),
  CONSTRAINT `macrozona_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `macrozona_user_macrozona_id_foreign` FOREIGN KEY (`macrozona_id`) REFERENCES `macrozonas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `macrozona_user`
--

LOCK TABLES `macrozona_user` WRITE;
/*!40000 ALTER TABLE `macrozona_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `macrozona_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `macrozonas`
--

DROP TABLE IF EXISTS `macrozonas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `macrozonas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` int(10) unsigned DEFAULT NULL,
  `rubro_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `macrozonas_region_id_foreign` (`region_id`),
  KEY `macrozonas_rubro_id_foreign` (`rubro_id`),
  CONSTRAINT `macrozonas_rubro_id_foreign` FOREIGN KEY (`rubro_id`) REFERENCES `rubros` (`id`) ON DELETE CASCADE,
  CONSTRAINT `macrozonas_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `macrozonas`
--

LOCK TABLES `macrozonas` WRITE;
/*!40000 ALTER TABLE `macrozonas` DISABLE KEYS */;
INSERT INTO `macrozonas` VALUES (1,'Tundra',2,NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(2,'Desértico frío',2,1,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(3,'Desértico frío',2,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(4,'Desértico normal',2,1,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(5,'Desértico normal',2,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(6,'Desértico normal',2,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(7,'Desértico cálido con nublados abundantes',2,1,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(8,'Desértico cálido con nublados abundantes',2,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(9,'Desértico cálido con nublados abundantes',2,4,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(10,'Alto Loa',4,1,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(11,'Alto Loa',4,5,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(12,'Alto Loa',4,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(13,'Alto Loa',4,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(14,'Atacama La Grande',4,1,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(15,'Atacama La Grande',4,5,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(16,'Atacama La Grande',4,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(17,'Atacama La Grande',4,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(18,'Secano Norte Chico',5,NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(19,'Valle Copiapó',5,4,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(20,'Valle Copiapó',5,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(21,'Valle Copiapó',5,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(22,'Valle Huasco',5,4,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(23,'Valle Huasco',5,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(24,'Valle Huasco',5,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(25,'Secano Costero',5,NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(26,'Precordillera',5,4,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(27,'Precordillera',5,7,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(28,'Precordillera',5,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(29,'Secano Norte Chico',6,4,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(30,'Secano Norte Chico',6,8,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(31,'Secano Norte Chico',6,7,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(32,'Valle Transversal',6,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(33,'Secano Costero',6,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(34,'Precordillera',6,4,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(35,'Precordillera',6,8,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(36,'Precordillera',6,7,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(37,'Precordillera',6,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(38,'Cordillera',6,4,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(39,'Cordillera',6,8,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(40,'Cordillera',6,7,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(41,'Estepa Semiárida con Influencia Marina',7,9,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(42,'Estepa Semiárida Costera con Influencia Marina ',7,NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(43,'Estepa Semiárida Seca en Valle Central Interior',7,NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(44,'Templado Mediterráneo con Infuencia Marina en Valle Central',7,9,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(45,'Templado Mediterráneo con Infuencia Marina en Valle Central',7,10,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(46,'Templado Mediterráneo Costero Inferior',7,9,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(47,'Templado Mediterráneo Costero Inferior',7,11,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(48,'Templado Mediterráneo Costero Superior',7,NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(49,'Templado Mediterráneo en Precordillera Andina',7,NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(50,'Templado Mediterráneo en Valle Central Interior',7,11,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(51,'Valle Transversal',16,12,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(52,'Valle Transversal',16,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(53,'Valle Transversal',16,14,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(54,'Valle Transversal',16,15,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(55,'Valle Transversal',16,8,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(56,'Valle Transversal',16,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(57,'Valle Transversal',16,16,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(58,'Secano Interior',16,16,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(59,'Precordillera',16,16,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(60,'Secano Costero',8,17,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(61,'Secano Costero',8,18,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(62,'Secano Costero',8,12,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(63,'Secano Costero',8,19,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(64,'Secano Costero',8,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(65,'Secano Costero',8,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(66,'Secano Costero',8,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(67,'Secano Interior',8,14,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(68,'Secano Interior',8,8,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(69,'Secano Interior',8,4,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(70,'Secano Interior',8,20,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(71,'Secano Interior',8,21,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(72,'Secano Interior',8,17,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(73,'Secano Interior',8,18,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(74,'Secano Interior',8,12,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(75,'Secano Interior',8,19,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(76,'Secano Interior',8,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(77,'Secano Interior',8,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(78,'Secano Interior',8,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(79,'Secano Interior',8,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(80,'Secano Interior',8,16,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(81,'Depresión Intermedia',8,14,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(82,'Depresión Intermedia',8,8,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(83,'Depresión Intermedia',8,4,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(84,'Depresión Intermedia',8,20,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(85,'Depresión Intermedia',8,21,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(86,'Depresión Intermedia',8,17,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(87,'Depresión Intermedia',8,18,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(88,'Depresión Intermedia',8,12,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(89,'Depresión Intermedia',8,19,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(90,'Depresión Intermedia',8,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(91,'Depresión Intermedia',8,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(92,'Depresión Intermedia',8,16,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(93,'Precordillera',8,14,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(94,'Precordillera',8,4,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(95,'Precordillera',8,20,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(96,'Precordillera',8,21,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(97,'Precordillera',8,8,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(98,'Secano Costero',9,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(99,'Secano Costero',9,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(100,'Secano Interior',9,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(101,'Secano Interior',9,11,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(102,'Secano Interior',9,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(103,'Secano Interior',9,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(104,'Depresión Intermedia',9,23,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(105,'Depresión Intermedia',9,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(106,'Depresión Intermedia',9,24,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(107,'Depresión Intermedia',9,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(108,'Depresión Intermedia',9,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(109,'Depresión Intermedia',9,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(110,'Precordillera',9,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(111,'Secano Costero',10,25,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(112,'Secano Costero',10,26,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(113,'Secano Costero',10,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(114,'Secano Interior',10,26,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(115,'Secano Interior',10,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(116,'Secano Interior',10,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(117,'Secano Interior',10,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(118,'Depresión Intermedia',10,23,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(119,'Depresión Intermedia',10,25,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(120,'Depresión Intermedia',10,26,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(121,'Depresión Intermedia',10,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(122,'Depresión Intermedia',10,24,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(123,'Depresión Intermedia',10,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(124,'Depresión Intermedia',10,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(125,'Depresión Intermedia',10,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(126,'Precordillera',10,25,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(127,'Precordillera',10,26,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(128,'Precordillera',10,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(129,'Provincia de Arauco',10,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(130,'Provincia de Arauco',10,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(131,'Provincia de Arauco',10,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(132,'Provincia de Arauco',10,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(133,'Secano Costero',12,17,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(134,'Secano Costero',12,27,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(135,'Secano Costero',12,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(136,'Secano Costero',12,28,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(137,'Secano Costero',12,29,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(138,'Secano Costero',12,30,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(139,'Secano Costero',12,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(140,'Secano Costero',12,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(141,'Secano Costero',12,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(142,'Secano Interior',12,17,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(143,'Secano Interior',12,27,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(144,'Secano Interior',12,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(145,'Secano Interior',12,28,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(146,'Secano Interior',12,29,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(147,'Secano Interior',12,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(148,'Secano Interior',12,30,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(149,'Secano Interior',12,31,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(150,'Secano Interior',12,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(151,'Secano Interior',12,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(152,'Valle Secano',12,17,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(153,'Valle Secano',12,27,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(154,'Valle Secano',12,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(155,'Valle Secano',12,28,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(156,'Valle Secano',12,29,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(157,'Valle Secano',12,30,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(158,'Valle Secano',12,31,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(159,'Valle Secano',12,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(160,'Valle Secano',12,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(161,'Valle Secano',12,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(162,'Precordillera',12,17,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(163,'Precordillera',12,27,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(164,'Precordillera',12,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(165,'Precordillera',12,28,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(166,'Precordillera',12,29,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(167,'Precordillera',12,30,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(168,'Precordillera',12,31,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(169,'Precordillera',12,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(170,'Precordillera',12,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(171,'Precordillera',12,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(172,'Secano Costero',17,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(173,'Secano Interior',17,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(174,'Secano Interior',17,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(175,'Secano Interior',17,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(176,'Valle Secano',17,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(177,'Valle Secano',17,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(178,'Valle Secano',17,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(179,'Valle Secano',17,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(180,'Precordillera',17,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(181,'Precordillera',17,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(182,'Precordillera',17,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(183,'Secano Costero',13,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(184,'Secano Costero',13,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(185,'Secano Costero',13,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(186,'Secano Costero',13,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(187,'Secano Interior',13,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(188,'Secano Interior',13,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(189,'Secano Interior',13,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(190,'Secano Interior',13,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(191,'Isla de Chiloé',13,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(192,'Isla de Chiloé',13,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(193,'Isla de Chiloé',13,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(194,'Isla de Chiloé',13,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(195,'Valle Secano',13,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(196,'Valle Secano',13,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(197,'Valle Secano',13,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(198,'Valle Secano',13,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(199,'Ñadis',13,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(200,'Ñadis',13,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(201,'Ñadis',13,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(202,'Precordillera',13,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(203,'Precordillera',13,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(204,'Precordillera',13,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(205,'Zona Húmeda',14,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(206,'Zona Húmeda',14,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(207,'Zona Intermedia',14,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(208,'Zona Intermedia',14,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(209,'Zona Intermedia',14,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(210,'Zona Intermedia',14,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(211,'Zona de Estepa',14,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(212,'Zona de Estepa',14,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(213,'Zona de Microclima',14,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(214,'Zona de Microclima',14,32,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(215,'Zona de Microclima',14,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(216,'Zona Húmeda',15,24,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(217,'Zona Húmeda',15,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(218,'Zona Húmeda',15,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(219,'Zona Húmeda',15,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(220,'Zona de Transición',15,24,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(221,'Zona de Transición',15,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(222,'Zona de Transición',15,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(223,'Zona de Transición',15,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(224,'Zona de Estepa',15,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(225,'Zona de Estepa',15,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(226,'Secano Costero',11,25,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(227,'Secano Costero',11,26,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(228,'Secano Costero',11,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(229,'Secano Interior',11,26,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(230,'Secano Interior',11,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(231,'Secano Interior',11,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(232,'Secano Interior',11,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(233,'Depresión Intermedia',11,23,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(234,'Depresión Intermedia',11,25,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(235,'Depresión Intermedia',11,26,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(236,'Depresión Intermedia',11,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(237,'Depresión Intermedia',11,24,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(238,'Depresión Intermedia',11,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(239,'Depresión Intermedia',11,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(240,'Depresión Intermedia',11,2,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(241,'Precordillera',11,25,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(242,'Precordillera',11,26,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(243,'Precordillera',11,22,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(244,'Provincia de Arauco',11,13,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(245,'Provincia de Arauco',11,6,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(246,'Provincia de Arauco',11,3,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(247,'Provincia de Arauco',11,2,'2018-08-12 22:08:41','2018-08-12 22:08:41');
/*!40000 ALTER TABLE `macrozonas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meses`
--

DROP TABLE IF EXISTS `meses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fin` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meses`
--

LOCK TABLES `meses` WRITE;
/*!40000 ALTER TABLE `meses` DISABLE KEYS */;
INSERT INTO `meses` VALUES (1,'Enero','01-01','01-31','2018-08-12 22:08:41','2018-08-12 22:08:41'),(2,'Febrero','2-01','2-28','2018-08-12 22:08:41','2018-08-12 22:08:41'),(3,'Marzo','3-01','3-31','2018-08-12 22:08:41','2018-08-12 22:08:41'),(4,'Abril','4-01','4-30','2018-08-12 22:08:41','2018-08-12 22:08:41'),(5,'Mayo','5-01','5-31','2018-08-12 22:08:41','2018-08-12 22:08:41'),(6,'Junio','6-01','6-30','2018-08-12 22:08:41','2018-08-12 22:08:41'),(7,'Julio','7-01','7-31','2018-08-12 22:08:41','2018-08-12 22:08:41'),(8,'Agosto','8-01','28-31','2018-08-12 22:08:41','2018-08-12 22:08:41'),(9,'Septiembre','9-01','9-30','2018-08-12 22:08:41','2018-08-12 22:08:41'),(10,'Octubre','10-01','10-31','2018-08-12 22:08:41','2018-08-12 22:08:41'),(11,'Noviembre','11-01','11-30','2018-08-12 22:08:41','2018-08-12 22:08:41'),(12,'Diciembre','12-01','12-31','2018-08-12 22:08:41','2018-08-12 22:08:41');
/*!40000 ALTER TABLE `meses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_10_191735_create_countries_table',1),(2,'2014_10_10_191736_create_regions_table',1),(3,'2014_10_10_199500_create_users_table',1),(4,'2014_10_10_199501_create_region_user_table',1),(5,'2014_10_10_200000_create_rubros_table',1),(6,'2014_10_10_200001_create_seccions_table',1),(7,'2014_10_10_200002_create_seccion_user_table',1),(8,'2014_10_10_200003_create_meses_table',1),(9,'2014_10_10_200004_create_publicaciones_table',1),(10,'2014_10_10_200005_create_boletines_table',1),(11,'2014_10_10_200006_create_boletin_seccion_table',1),(12,'2014_10_12_100000_create_password_resets_table',1),(13,'2015_01_20_084450_create_roles_table',1),(14,'2015_01_20_084525_create_role_user_table',1),(15,'2015_01_24_080208_create_permissions_table',1),(16,'2015_01_24_080433_create_permission_role_table',1),(17,'2015_12_04_003040_add_special_role_column',1),(18,'2017_10_17_170735_create_permission_user_table',1),(19,'2018_06_27_032457_create_products_table',1),(20,'2018_07_04_220034_create_macrozonas_table',1),(21,'2018_07_04_221220_create_macrozona_user_table',1),(22,'2018_07_17_203712_create_eleccion_table',1),(23,'2018_07_19_182552_create_subsecciones_table',1),(24,'2018_07_19_184229_create_macrozona_subseccion_table',1),(25,'2018_07_20_003947_create_resumenes_table',1),(26,'2018_07_20_015007_create_region_resumen_table',1),(27,'2018_08_12_214852_create_visitas_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,16,3,NULL,NULL),(2,17,2,NULL,NULL),(3,16,2,NULL,NULL),(4,16,4,NULL,NULL),(5,18,4,NULL,NULL);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_user`
--

DROP TABLE IF EXISTS `permission_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permission_user_permission_id_index` (`permission_id`),
  KEY `permission_user_user_id_index` (`user_id`),
  CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_user`
--

LOCK TABLES `permission_user` WRITE;
/*!40000 ALTER TABLE `permission_user` DISABLE KEYS */;
INSERT INTO `permission_user` VALUES (1,20,2,'2018-08-12 22:11:44','2018-08-12 22:11:44');
/*!40000 ALTER TABLE `permission_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=276 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'Navegar Usuarios','users.index','Lista y navega todos los usuarios del sistema','2018-08-12 22:08:41','2018-08-12 22:08:41'),(2,'Ver Detalle de usuarios','users.show','Ver detalle en un usuario','2018-08-12 22:08:41','2018-08-12 22:08:41'),(3,'Editar Usuario','users.edit','Editar Cualquier usuario del sistema','2018-08-12 22:08:41','2018-08-12 22:08:41'),(4,'Eliminar Usuarios','users.destroy','Eliminar Cualquier usuario del sistema','2018-08-12 22:08:41','2018-08-12 22:08:41'),(5,'Navegar roles','roles.index','Lista y navega todos los roles del sistema','2018-08-12 22:08:41','2018-08-12 22:08:41'),(6,'Ver Detalle de rol','roles.show','Ver detalle en un rol','2018-08-12 22:08:41','2018-08-12 22:08:41'),(7,'Creacion de rol','roles.create','Crear rol en el sistema','2018-08-12 22:08:41','2018-08-12 22:08:41'),(8,'Editar rol','roles.edit','Editar Cualquier rol del sistema','2018-08-12 22:08:41','2018-08-12 22:08:41'),(9,'Eliminar rol','roles.destroy','Eliminar Cualquier rol del sistema','2018-08-12 22:08:41','2018-08-12 22:08:41'),(10,'Navegar productos','products.index','Lista y navega todos los roles del sistema','2018-08-12 22:08:41','2018-08-12 22:08:41'),(11,'Ver Detalle de producto','products.show','Ver detalle en un producto','2018-08-12 22:08:41','2018-08-12 22:08:41'),(12,'Creacion productos','products.create','Crear producto en el sistema','2018-08-12 22:08:41','2018-08-12 22:08:41'),(13,'Editar producto','products.edit','Editar Cualquier producto del sistema','2018-08-12 22:08:41','2018-08-12 22:08:41'),(14,'Eliminar producto','products.destroy','Eliminar Cualquier producto del sistema','2018-08-12 22:08:41','2018-08-12 22:08:41'),(15,'Ver Boletines','boletines.index','Ver boletines del sistema','2018-08-12 22:08:41','2018-08-12 22:08:41'),(16,'Ver Boletin en detalle','boletines.show','Lista las secciones del boletin clickeado','2018-08-12 22:08:41','2018-08-12 22:08:41'),(17,'Ver Resumen Nacional en detalle','resumen.show','Ver las secciones del Resumen nacional al clickearlo','2018-08-12 22:08:41','2018-08-12 22:08:41'),(18,'Ver mis colaboradores','colaboradores.index','Ver mis colaboradores y enviar correos','2018-08-12 22:08:41','2018-08-12 22:08:41'),(19,'seccion','seccion-1','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(20,'seccion','seccion-2','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(21,'seccion','seccion-3','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(22,'seccion','seccion-4','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(23,'seccion','seccion-5','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(24,'seccion','seccion-6','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(25,'seccion','seccion-7','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(26,'seccion','seccion-8','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(27,'seccion','seccion-9','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(28,'seccion','seccion-10','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(29,'macrozona','macrozona-1','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(30,'macrozona','macrozona-2','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(31,'macrozona','macrozona-3','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(32,'macrozona','macrozona-4','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(33,'macrozona','macrozona-5','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(34,'macrozona','macrozona-6','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(35,'macrozona','macrozona-7','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(36,'macrozona','macrozona-8','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(37,'macrozona','macrozona-9','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(38,'macrozona','macrozona-10','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(39,'macrozona','macrozona-11','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(40,'macrozona','macrozona-12','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(41,'macrozona','macrozona-13','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(42,'macrozona','macrozona-14','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(43,'macrozona','macrozona-15','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(44,'macrozona','macrozona-16','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(45,'macrozona','macrozona-17','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(46,'macrozona','macrozona-18','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(47,'macrozona','macrozona-19','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(48,'macrozona','macrozona-20','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(49,'macrozona','macrozona-21','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(50,'macrozona','macrozona-22','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(51,'macrozona','macrozona-23','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(52,'macrozona','macrozona-24','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(53,'macrozona','macrozona-25','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(54,'macrozona','macrozona-26','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(55,'macrozona','macrozona-27','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(56,'macrozona','macrozona-28','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(57,'macrozona','macrozona-29','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(58,'macrozona','macrozona-30','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(59,'macrozona','macrozona-31','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(60,'macrozona','macrozona-32','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(61,'macrozona','macrozona-33','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(62,'macrozona','macrozona-34','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(63,'macrozona','macrozona-35','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(64,'macrozona','macrozona-36','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(65,'macrozona','macrozona-37','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(66,'macrozona','macrozona-38','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(67,'macrozona','macrozona-39','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(68,'macrozona','macrozona-40','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(69,'macrozona','macrozona-41','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(70,'macrozona','macrozona-42','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(71,'macrozona','macrozona-43','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(72,'macrozona','macrozona-44','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(73,'macrozona','macrozona-45','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(74,'macrozona','macrozona-46','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(75,'macrozona','macrozona-47','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(76,'macrozona','macrozona-48','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(77,'macrozona','macrozona-49','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(78,'macrozona','macrozona-50','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(79,'macrozona','macrozona-51','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(80,'macrozona','macrozona-52','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(81,'macrozona','macrozona-53','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(82,'macrozona','macrozona-54','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(83,'macrozona','macrozona-55','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(84,'macrozona','macrozona-56','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(85,'macrozona','macrozona-57','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(86,'macrozona','macrozona-58','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(87,'macrozona','macrozona-59','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(88,'macrozona','macrozona-60','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(89,'macrozona','macrozona-61','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(90,'macrozona','macrozona-62','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(91,'macrozona','macrozona-63','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(92,'macrozona','macrozona-64','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(93,'macrozona','macrozona-65','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(94,'macrozona','macrozona-66','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(95,'macrozona','macrozona-67','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(96,'macrozona','macrozona-68','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(97,'macrozona','macrozona-69','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(98,'macrozona','macrozona-70','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(99,'macrozona','macrozona-71','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(100,'macrozona','macrozona-72','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(101,'macrozona','macrozona-73','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(102,'macrozona','macrozona-74','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(103,'macrozona','macrozona-75','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(104,'macrozona','macrozona-76','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(105,'macrozona','macrozona-77','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(106,'macrozona','macrozona-78','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(107,'macrozona','macrozona-79','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(108,'macrozona','macrozona-80','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(109,'macrozona','macrozona-81','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(110,'macrozona','macrozona-82','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(111,'macrozona','macrozona-83','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(112,'macrozona','macrozona-84','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(113,'macrozona','macrozona-85','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(114,'macrozona','macrozona-86','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(115,'macrozona','macrozona-87','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(116,'macrozona','macrozona-88','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(117,'macrozona','macrozona-89','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(118,'macrozona','macrozona-90','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(119,'macrozona','macrozona-91','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(120,'macrozona','macrozona-92','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(121,'macrozona','macrozona-93','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(122,'macrozona','macrozona-94','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(123,'macrozona','macrozona-95','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(124,'macrozona','macrozona-96','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(125,'macrozona','macrozona-97','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(126,'macrozona','macrozona-98','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(127,'macrozona','macrozona-99','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(128,'macrozona','macrozona-100','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(129,'macrozona','macrozona-101','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(130,'macrozona','macrozona-102','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(131,'macrozona','macrozona-103','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(132,'macrozona','macrozona-104','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(133,'macrozona','macrozona-105','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(134,'macrozona','macrozona-106','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(135,'macrozona','macrozona-107','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(136,'macrozona','macrozona-108','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(137,'macrozona','macrozona-109','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(138,'macrozona','macrozona-110','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(139,'macrozona','macrozona-111','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(140,'macrozona','macrozona-112','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(141,'macrozona','macrozona-113','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(142,'macrozona','macrozona-114','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(143,'macrozona','macrozona-115','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(144,'macrozona','macrozona-116','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(145,'macrozona','macrozona-117','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(146,'macrozona','macrozona-118','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(147,'macrozona','macrozona-119','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(148,'macrozona','macrozona-120','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(149,'macrozona','macrozona-121','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(150,'macrozona','macrozona-122','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(151,'macrozona','macrozona-123','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(152,'macrozona','macrozona-124','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(153,'macrozona','macrozona-125','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(154,'macrozona','macrozona-126','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(155,'macrozona','macrozona-127','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(156,'macrozona','macrozona-128','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(157,'macrozona','macrozona-129','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(158,'macrozona','macrozona-130','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(159,'macrozona','macrozona-131','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(160,'macrozona','macrozona-132','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(161,'macrozona','macrozona-133','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(162,'macrozona','macrozona-134','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(163,'macrozona','macrozona-135','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(164,'macrozona','macrozona-136','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(165,'macrozona','macrozona-137','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(166,'macrozona','macrozona-138','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(167,'macrozona','macrozona-139','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(168,'macrozona','macrozona-140','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(169,'macrozona','macrozona-141','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(170,'macrozona','macrozona-142','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(171,'macrozona','macrozona-143','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(172,'macrozona','macrozona-144','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(173,'macrozona','macrozona-145','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(174,'macrozona','macrozona-146','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(175,'macrozona','macrozona-147','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(176,'macrozona','macrozona-148','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(177,'macrozona','macrozona-149','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(178,'macrozona','macrozona-150','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(179,'macrozona','macrozona-151','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(180,'macrozona','macrozona-152','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(181,'macrozona','macrozona-153','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(182,'macrozona','macrozona-154','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(183,'macrozona','macrozona-155','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(184,'macrozona','macrozona-156','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(185,'macrozona','macrozona-157','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(186,'macrozona','macrozona-158','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(187,'macrozona','macrozona-159','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(188,'macrozona','macrozona-160','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(189,'macrozona','macrozona-161','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(190,'macrozona','macrozona-162','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(191,'macrozona','macrozona-163','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(192,'macrozona','macrozona-164','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(193,'macrozona','macrozona-165','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(194,'macrozona','macrozona-166','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(195,'macrozona','macrozona-167','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(196,'macrozona','macrozona-168','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(197,'macrozona','macrozona-169','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(198,'macrozona','macrozona-170','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(199,'macrozona','macrozona-171','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(200,'macrozona','macrozona-172','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(201,'macrozona','macrozona-173','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(202,'macrozona','macrozona-174','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(203,'macrozona','macrozona-175','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(204,'macrozona','macrozona-176','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(205,'macrozona','macrozona-177','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(206,'macrozona','macrozona-178','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(207,'macrozona','macrozona-179','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(208,'macrozona','macrozona-180','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(209,'macrozona','macrozona-181','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(210,'macrozona','macrozona-182','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(211,'macrozona','macrozona-183','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(212,'macrozona','macrozona-184','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(213,'macrozona','macrozona-185','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(214,'macrozona','macrozona-186','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(215,'macrozona','macrozona-187','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(216,'macrozona','macrozona-188','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(217,'macrozona','macrozona-189','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(218,'macrozona','macrozona-190','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(219,'macrozona','macrozona-191','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(220,'macrozona','macrozona-192','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(221,'macrozona','macrozona-193','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(222,'macrozona','macrozona-194','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(223,'macrozona','macrozona-195','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(224,'macrozona','macrozona-196','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(225,'macrozona','macrozona-197','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(226,'macrozona','macrozona-198','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(227,'macrozona','macrozona-199','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(228,'macrozona','macrozona-200','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(229,'macrozona','macrozona-201','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(230,'macrozona','macrozona-202','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(231,'macrozona','macrozona-203','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(232,'macrozona','macrozona-204','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(233,'macrozona','macrozona-205','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(234,'macrozona','macrozona-206','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(235,'macrozona','macrozona-207','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(236,'macrozona','macrozona-208','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(237,'macrozona','macrozona-209','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(238,'macrozona','macrozona-210','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(239,'macrozona','macrozona-211','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(240,'macrozona','macrozona-212','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(241,'macrozona','macrozona-213','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(242,'macrozona','macrozona-214','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(243,'macrozona','macrozona-215','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(244,'macrozona','macrozona-216','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(245,'macrozona','macrozona-217','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(246,'macrozona','macrozona-218','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(247,'macrozona','macrozona-219','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(248,'macrozona','macrozona-220','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(249,'macrozona','macrozona-221','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(250,'macrozona','macrozona-222','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(251,'macrozona','macrozona-223','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(252,'macrozona','macrozona-224','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(253,'macrozona','macrozona-225','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(254,'macrozona','macrozona-226','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(255,'macrozona','macrozona-227','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(256,'macrozona','macrozona-228','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(257,'macrozona','macrozona-229','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(258,'macrozona','macrozona-230','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(259,'macrozona','macrozona-231','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(260,'macrozona','macrozona-232','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(261,'macrozona','macrozona-233','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(262,'macrozona','macrozona-234','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(263,'macrozona','macrozona-235','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(264,'macrozona','macrozona-236','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(265,'macrozona','macrozona-237','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(266,'macrozona','macrozona-238','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(267,'macrozona','macrozona-239','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(268,'macrozona','macrozona-240','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(269,'macrozona','macrozona-241','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(270,'macrozona','macrozona-242','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(271,'macrozona','macrozona-243','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(272,'macrozona','macrozona-244','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(273,'macrozona','macrozona-245','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(274,'macrozona','macrozona-246','','2018-08-12 22:08:41','2018-08-12 22:08:41'),(275,'macrozona','macrozona-247','','2018-08-12 22:08:41','2018-08-12 22:08:41');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publicaciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `public` tinyint(1) NOT NULL DEFAULT '0',
  `mes_id` int(10) unsigned DEFAULT NULL,
  `año` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `publicaciones_mes_id_foreign` (`mes_id`),
  CONSTRAINT `publicaciones_mes_id_foreign` FOREIGN KEY (`mes_id`) REFERENCES `meses` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publicaciones`
--

LOCK TABLES `publicaciones` WRITE;
/*!40000 ALTER TABLE `publicaciones` DISABLE KEYS */;
INSERT INTO `publicaciones` VALUES (3,1,7,'2018','2018-08-13 17:09:06','2018-08-13 17:11:46'),(4,0,1,'2018','2018-08-16 15:05:28','2018-08-16 15:05:28');
/*!40000 ALTER TABLE `publicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region_resumen`
--

DROP TABLE IF EXISTS `region_resumen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region_resumen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `resumen_id` int(10) unsigned NOT NULL,
  `region_id` int(10) unsigned NOT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `region_resumen_resumen_id_index` (`resumen_id`),
  KEY `region_resumen_region_id_index` (`region_id`),
  CONSTRAINT `region_resumen_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `region_resumen_resumen_id_foreign` FOREIGN KEY (`resumen_id`) REFERENCES `resumenes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region_resumen`
--

LOCK TABLES `region_resumen` WRITE;
/*!40000 ALTER TABLE `region_resumen` DISABLE KEYS */;
INSERT INTO `region_resumen` VALUES (35,3,1,NULL,NULL,NULL),(36,3,2,NULL,NULL,NULL),(37,3,3,NULL,NULL,NULL),(38,3,4,NULL,NULL,NULL),(39,3,5,NULL,NULL,NULL),(40,3,6,NULL,NULL,NULL),(41,3,7,NULL,NULL,NULL),(42,3,8,NULL,NULL,NULL),(43,3,9,NULL,NULL,NULL),(44,3,10,NULL,NULL,NULL),(45,3,11,NULL,NULL,NULL),(46,3,12,NULL,NULL,NULL),(47,3,13,NULL,NULL,NULL),(48,3,14,NULL,NULL,NULL),(49,3,15,NULL,NULL,NULL),(50,3,16,NULL,NULL,NULL),(51,3,17,NULL,NULL,NULL),(52,4,1,NULL,NULL,NULL),(53,4,2,NULL,NULL,NULL),(54,4,3,NULL,NULL,NULL),(55,4,4,NULL,NULL,NULL),(56,4,5,NULL,NULL,NULL),(57,4,6,NULL,NULL,NULL),(58,4,7,NULL,NULL,NULL),(59,4,8,NULL,NULL,NULL),(60,4,9,NULL,NULL,NULL),(61,4,10,NULL,NULL,NULL),(62,4,11,NULL,NULL,NULL),(63,4,12,NULL,NULL,NULL),(64,4,13,NULL,NULL,NULL),(65,4,14,NULL,NULL,NULL),(66,4,15,NULL,NULL,NULL),(67,4,16,NULL,NULL,NULL),(68,4,17,NULL,NULL,NULL);
/*!40000 ALTER TABLE `region_resumen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `region_user`
--

DROP TABLE IF EXISTS `region_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `region_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `region_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `region_user_region_id_foreign` (`region_id`),
  KEY `region_user_user_id_foreign` (`user_id`),
  CONSTRAINT `region_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `region_user_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `region_user`
--

LOCK TABLES `region_user` WRITE;
/*!40000 ALTER TABLE `region_user` DISABLE KEYS */;
INSERT INTO `region_user` VALUES (1,2,2,NULL,NULL),(2,3,2,NULL,NULL),(3,4,2,NULL,NULL),(4,1,3,NULL,NULL);
/*!40000 ALTER TABLE `region_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `regions_country_id_foreign` (`country_id`),
  CONSTRAINT `regions_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'Nacional',0,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(2,'Arica y Parinacota',15,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(3,'Tarapacá',1,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(4,'Antofagasta',2,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(5,'Atacama',3,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(6,'Coquimbo',4,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(7,'Valparaíso',5,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(8,'O\'Higgins',6,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(9,'Maule',7,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(10,'Bío Bío',8,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(11,'Ñuble',16,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(12,'Araucanía',9,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(13,'Los Lagos',10,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(14,'Aysén',11,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(15,'Magallanes',12,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(16,'Metropolitana',13,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(17,'Los Rios',14,1,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL);
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resumenes`
--

DROP TABLE IF EXISTS `resumenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resumenes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `publicacion_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `resumenes_publicacion_id_index` (`publicacion_id`),
  CONSTRAINT `resumenes_publicacion_id_foreign` FOREIGN KEY (`publicacion_id`) REFERENCES `publicaciones` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resumenes`
--

LOCK TABLES `resumenes` WRITE;
/*!40000 ALTER TABLE `resumenes` DISABLE KEYS */;
INSERT INTO `resumenes` VALUES (3,3,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(4,4,'2018-08-16 15:05:28','2018-08-16 15:05:28');
/*!40000 ALTER TABLE `resumenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_role_id_index` (`role_id`),
  KEY `role_user_user_id_index` (`user_id`),
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,1,1,NULL,NULL),(2,3,2,'2018-08-12 22:09:52','2018-08-12 22:09:52'),(3,1,3,'2018-08-16 19:01:48','2018-08-16 19:01:48');
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','admin',NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41','all-access'),(2,'Editor','editor',NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(3,'Colaborador','colaborador',NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL),(4,'Encargado Regional','encargado',NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41',NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rubros`
--

DROP TABLE IF EXISTS `rubros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rubros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subrubro` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rubros`
--

LOCK TABLES `rubros` WRITE;
/*!40000 ALTER TABLE `rubros` DISABLE KEYS */;
INSERT INTO `rubros` VALUES (1,'Cultivos','Maíz choclero','2018-08-12 22:08:41','2018-08-12 22:08:41'),(2,'Praderas',NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(3,'Hortalizas',NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(4,'Frutales','Olivo','2018-08-12 22:08:41','2018-08-12 22:08:41'),(5,'Frutales',NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(6,'Ganadería',NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(7,'Frutales','Uva de mesa','2018-08-12 22:08:41','2018-08-12 22:08:41'),(8,'Frutales','Nogal','2018-08-12 22:08:41','2018-08-12 22:08:41'),(9,'Frutales','Palto','2018-08-12 22:08:41','2018-08-12 22:08:41'),(10,'Hortalizas','Tomate','2018-08-12 22:08:41','2018-08-12 22:08:41'),(11,'Frutales','Vides','2018-08-12 22:08:41','2018-08-12 22:08:41'),(12,'Cultivos','Maíz','2018-08-12 22:08:41','2018-08-12 22:08:41'),(13,'Cultivos','Papas','2018-08-12 22:08:41','2018-08-12 22:08:41'),(14,'Frutales','Carozos','2018-08-12 22:08:41','2018-08-12 22:08:41'),(15,'Frutales','Parrones','2018-08-12 22:08:41','2018-08-12 22:08:41'),(16,'Apicultura',NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(17,'Cultivos','Avena','2018-08-12 22:08:41','2018-08-12 22:08:41'),(18,'Cultivos','Cebada','2018-08-12 22:08:41','2018-08-12 22:08:41'),(19,'Cultivos','Quínoa','2018-08-12 22:08:41','2018-08-12 22:08:41'),(20,'Frutales','Pomáceas','2018-08-12 22:08:41','2018-08-12 22:08:41'),(21,'Frutales','Viñas','2018-08-12 22:08:41','2018-08-12 22:08:41'),(22,'Cultivos','Trigo','2018-08-12 22:08:41','2018-08-12 22:08:41'),(23,'Cultivos','Arroz','2018-08-12 22:08:41','2018-08-12 22:08:41'),(24,'Frutales Menores',NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(25,'Cultivos','Canola','2018-08-12 22:08:41','2018-08-12 22:08:41'),(26,'Cultivos','Leguminosas','2018-08-12 22:08:41','2018-08-12 22:08:41'),(27,'Cultivos','Lupino','2018-08-12 22:08:41','2018-08-12 22:08:41'),(28,'Cultivos','Raps','2018-08-12 22:08:41','2018-08-12 22:08:41'),(29,'Cultivos','Trigo y Tritricale','2018-08-12 22:08:41','2018-08-12 22:08:41'),(30,'Flores',NULL,'2018-08-12 22:08:41','2018-08-12 22:08:41'),(31,'Frutales','Avellano Europeo','2018-08-12 22:08:41','2018-08-12 22:08:41'),(32,'Frutales','Cerezo','2018-08-12 22:08:41','2018-08-12 22:08:41');
/*!40000 ALTER TABLE `rubros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seccion_user`
--

DROP TABLE IF EXISTS `seccion_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seccion_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `seccion_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seccion_user_seccion_id_foreign` (`seccion_id`),
  KEY `seccion_user_user_id_foreign` (`user_id`),
  CONSTRAINT `seccion_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `seccion_user_seccion_id_foreign` FOREIGN KEY (`seccion_id`) REFERENCES `seccions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seccion_user`
--

LOCK TABLES `seccion_user` WRITE;
/*!40000 ALTER TABLE `seccion_user` DISABLE KEYS */;
INSERT INTO `seccion_user` VALUES (1,2,2,NULL,NULL);
/*!40000 ALTER TABLE `seccion_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seccions`
--

DROP TABLE IF EXISTS `seccions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seccions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seccions`
--

LOCK TABLES `seccions` WRITE;
/*!40000 ALTER TABLE `seccions` DISABLE KEYS */;
INSERT INTO `seccions` VALUES (1,'Portada','2018-08-12 22:08:41','2018-08-12 22:08:41'),(2,'Introducción','2018-08-12 22:08:41','2018-08-12 22:08:41'),(3,'Resumen Ejecutivo','2018-08-12 22:08:41','2018-08-12 22:08:41'),(4,'Componente Meteorológico','2018-08-12 22:08:41','2018-08-12 22:08:41'),(5,'Componente Hidrológico','2018-08-12 22:08:41','2018-08-12 22:08:41'),(6,'Análisis de Posibles Riesgos Agroclimáticos en los Principales Rubros Agrícolas','2018-08-12 22:08:41','2018-08-12 22:08:41'),(7,'Disponibilidad de Agua','2018-08-12 22:08:41','2018-08-12 22:08:41'),(8,'Análisis Del Indice De Vegetación Normalizado (NDVI)','2018-08-12 22:08:41','2018-08-12 22:08:41'),(9,'Indice De Condición De La Vegetación (VCI) (En Evaluación)','2018-08-12 22:08:41','2018-08-12 22:08:41'),(10,'Análisis Del Índice De Vegetación Ajustado al Suelo (SAVI)','2018-08-12 22:08:41','2018-08-12 22:08:41');
/*!40000 ALTER TABLE `seccions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subsecciones`
--

DROP TABLE IF EXISTS `subsecciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subsecciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `seccion_id` int(10) unsigned NOT NULL,
  `boletin_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subsecciones_seccion_id_index` (`seccion_id`),
  KEY `subsecciones_boletin_id_index` (`boletin_id`),
  CONSTRAINT `subsecciones_boletin_id_foreign` FOREIGN KEY (`boletin_id`) REFERENCES `boletines` (`id`) ON DELETE CASCADE,
  CONSTRAINT `subsecciones_seccion_id_foreign` FOREIGN KEY (`seccion_id`) REFERENCES `seccions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subsecciones`
--

LOCK TABLES `subsecciones` WRITE;
/*!40000 ALTER TABLE `subsecciones` DISABLE KEYS */;
INSERT INTO `subsecciones` VALUES (33,6,33,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(34,6,34,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(35,6,35,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(36,6,36,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(37,6,37,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(38,6,38,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(39,6,39,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(40,6,40,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(41,6,41,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(42,6,42,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(43,6,43,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(44,6,44,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(45,6,45,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(46,6,46,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(47,6,47,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(48,6,48,'2018-08-13 17:09:06','2018-08-13 17:09:06'),(49,6,49,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(50,6,50,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(51,6,51,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(52,6,52,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(53,6,53,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(54,6,54,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(55,6,55,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(56,6,56,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(57,6,57,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(58,6,58,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(59,6,59,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(60,6,60,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(61,6,61,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(62,6,62,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(63,6,63,'2018-08-16 15:05:28','2018-08-16 15:05:28'),(64,6,64,'2018-08-16 15:05:28','2018-08-16 15:05:28');
/*!40000 ALTER TABLE `subsecciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cri` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'USUARIO ROOT','cargoROOT','CRIROOT','usuarioROOTINIA@inia.cl','$2y$10$wUG7gTKRnpQ2rB0Ehdu/qubJoiqWwnF1yjoQOMP.jea0h8wVgF1Xe','Pt8qtItDHlYvgKaNLePNtPMKrKbXbbqzOjigxT7EyCM9ynGbDKuzHnmrHG6i','2018-08-12 22:08:41','2018-08-12 22:08:41'),(2,'Pablo Gemio','Ingenierbro','Quilamapu','pablo.gemio01@gmail.com','$2y$10$SH0/yy7iz9f8EQKgjPcnnec2Eh4JAc6sfdC3h1qIzzZFQs8CMNdPi','d5NOuFD4ibXGl0gOMCko85u7w12vwrJsaHWHXppdM7muz4nXMxipYIJz6anw','2018-08-12 22:09:52','2018-08-12 22:10:00'),(3,'Cristobal Campos','Investigador','Quilamapu','cristobal.campos@inia.cl','$2y$10$zbYapXXa/MHSedhlWThid.rVRzPmF9ncQL4uyif.SjrrzYC7NMDQ.','1fAuxiWhP1xYZ7C6N3V0BiN4zkBDukzK21ESoLP6BSdsFbaJwgg3byvmfHTh','2018-08-16 19:01:48','2018-08-16 19:02:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitas`
--

DROP TABLE IF EXISTS `visitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contador` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitas`
--

LOCK TABLES `visitas` WRITE;
/*!40000 ALTER TABLE `visitas` DISABLE KEYS */;
INSERT INTO `visitas` VALUES (1,13,'2018-08-12 22:08:41','2018-08-17 15:20:22');
/*!40000 ALTER TABLE `visitas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-17 21:46:32
