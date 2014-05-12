CREATE DATABASE  IF NOT EXISTS `fourcarrusdatabase` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fourcarrusdatabase`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: fourcarrusdatabase
-- ------------------------------------------------------
-- Server version	5.6.17-log

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
-- Table structure for table `tableautomaker`
--

DROP TABLE IF EXISTS `tableautomaker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tableautomaker` (
  `integerIdentificationAutomaker` int(11) NOT NULL AUTO_INCREMENT,
  `integerForeignKeyEnterprice` int(11) NOT NULL,
  PRIMARY KEY (`integerIdentificationAutomaker`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tableautomaker`
--

LOCK TABLES `tableautomaker` WRITE;
/*!40000 ALTER TABLE `tableautomaker` DISABLE KEYS */;
INSERT INTO `tableautomaker` VALUES (1,1),(2,2),(3,3);
/*!40000 ALTER TABLE `tableautomaker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabledealership`
--

DROP TABLE IF EXISTS `tabledealership`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabledealership` (
  `integerIdentificationDealership` int(11) NOT NULL AUTO_INCREMENT,
  `integerForeignKeyEnterprice` int(11) NOT NULL,
  PRIMARY KEY (`integerIdentificationDealership`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabledealership`
--

LOCK TABLES `tabledealership` WRITE;
/*!40000 ALTER TABLE `tabledealership` DISABLE KEYS */;
INSERT INTO `tabledealership` VALUES (1,4),(2,5),(3,6);
/*!40000 ALTER TABLE `tabledealership` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tablemodel`
--

DROP TABLE IF EXISTS `tablemodel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tablemodel` (
  `integerIdentificationModel` int(11) NOT NULL AUTO_INCREMENT,
  `integerForeignKeyTagBasicInformationModel` int(11) NOT NULL,
  `stringModelName` varchar(50) NOT NULL,
  `stringVehicleType` varchar(50) NOT NULL,
  PRIMARY KEY (`integerIdentificationModel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tablemodel`
--

LOCK TABLES `tablemodel` WRITE;
/*!40000 ALTER TABLE `tablemodel` DISABLE KEYS */;
INSERT INTO `tablemodel` VALUES (1,5,'Corolla','Car'),(2,6,'Civic','Car'),(3,7,'Cruze','Car');
/*!40000 ALTER TABLE `tablemodel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tablestore`
--

DROP TABLE IF EXISTS `tablestore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tablestore` (
  `integerIdentificationStore` int(11) NOT NULL AUTO_INCREMENT,
  `integerForeignKeyTagBasicInformationStore` int(11) NOT NULL,
  `integerForeignKeyDealership` int(11) NOT NULL,
  `stringStoreName` varchar(50) NOT NULL,
  PRIMARY KEY (`integerIdentificationStore`),
  KEY `integerForeignKeyDealershipIndex` (`integerForeignKeyDealership`),
  CONSTRAINT `integerForeignKeyDealership` FOREIGN KEY (`integerForeignKeyDealership`) REFERENCES `tabledealership` (`integerIdentificationDealership`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tablestore`
--

LOCK TABLES `tablestore` WRITE;
/*!40000 ALTER TABLE `tablestore` DISABLE KEYS */;
INSERT INTO `tablestore` VALUES (1,1,1,'Store11'),(2,2,1,'Store12'),(3,3,2,'Store21'),(4,4,3,'Store31');
/*!40000 ALTER TABLE `tablestore` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tablesubmodel`
--

DROP TABLE IF EXISTS `tablesubmodel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tablesubmodel` (
  `integerIdentificationSubModel` int(11) NOT NULL AUTO_INCREMENT,
  `integerForeignKeyTagBasicInformationSubModel` int(11) NOT NULL,
  `integerForeignKeyModel` int(11) NOT NULL,
  `stringSubModelName` varchar(50) NOT NULL,
  PRIMARY KEY (`integerIdentificationSubModel`),
  KEY `integerForeignKeyModelIndex` (`integerForeignKeyModel`),
  CONSTRAINT `integerForeignKeyModel` FOREIGN KEY (`integerForeignKeyModel`) REFERENCES `tablemodel` (`integerIdentificationModel`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tablesubmodel`
--

LOCK TABLES `tablesubmodel` WRITE;
/*!40000 ALTER TABLE `tablesubmodel` DISABLE KEYS */;
INSERT INTO `tablesubmodel` VALUES (1,8,1,'GLi'),(2,9,1,'XEi'),(3,10,2,'LXS'),(4,11,3,'LT');
/*!40000 ALTER TABLE `tablesubmodel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tablesubmodelautomakerrelation`
--

DROP TABLE IF EXISTS `tablesubmodelautomakerrelation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tablesubmodelautomakerrelation` (
  `integerForeignKeyAutomaker` int(11) NOT NULL,
  `integerForeignKeySubModel` int(11) NOT NULL,
  PRIMARY KEY (`integerForeignKeyAutomaker`,`integerForeignKeySubModel`),
  KEY `integerForeignKeySubModelIndex` (`integerForeignKeySubModel`),
  CONSTRAINT `integerForeignKeyAutomaker` FOREIGN KEY (`integerForeignKeyAutomaker`) REFERENCES `tableautomaker` (`integerIdentificationAutomaker`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `integerForeignKeySubModel` FOREIGN KEY (`integerForeignKeySubModel`) REFERENCES `tablesubmodel` (`integerIdentificationSubModel`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tablesubmodelautomakerrelation`
--

LOCK TABLES `tablesubmodelautomakerrelation` WRITE;
/*!40000 ALTER TABLE `tablesubmodelautomakerrelation` DISABLE KEYS */;
/*!40000 ALTER TABLE `tablesubmodelautomakerrelation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabletag`
--

DROP TABLE IF EXISTS `tabletag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabletag` (
  `integerIdentificationTag` int(11) NOT NULL AUTO_INCREMENT,
  `stringName` varchar(50) NOT NULL,
  `decimalValue` decimal(10,0) DEFAULT NULL,
  `stringEmail` varchar(50) DEFAULT NULL,
  `stringWebAddress` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`integerIdentificationTag`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabletag`
--

LOCK TABLES `tabletag` WRITE;
/*!40000 ALTER TABLE `tabletag` DISABLE KEYS */;
INSERT INTO `tabletag` VALUES (1,'Tag Basic Information Store',NULL,'store11@email.com','store11.com'),(2,'Tag Basic Information Store',NULL,'store12@email.com','store12.com'),(3,'Tag Basic Information Store',NULL,'store21@email.com','store21.com'),(4,'Tag Basic Information Store',NULL,'store31@email.com','store31.com'),(5,'Tag Basic Information Model',NULL,NULL,'wikipedia.com/corolla'),(6,'Tag Basic Information Model',NULL,NULL,'wikipedia.com/civic'),(7,'Tag Basic Information Model',NULL,NULL,'wikipedia.com/cruze'),(8,'Tag Basic Information Sub Model',NULL,NULL,'wikipedia.com/corolla'),(9,'Tag Basic Information Sub Model',NULL,NULL,'wikipedia.com/corolla'),(10,'Tag Basic Information Sub Model',NULL,NULL,'wikipedia.com/civic'),(11,'Tag Basic Information Sub Model',NULL,NULL,'wikipedia.com/cruze'),(12,'Tag Basic Information Vehicle',NULL,NULL,NULL),(13,'Tag Basic Information Vehicle',NULL,NULL,NULL),(14,'Tag Basic Information Vehicle',NULL,NULL,NULL),(15,'Tag Basic Information Vehicle',NULL,NULL,NULL),(16,'Tag Basic Information Vehicle',NULL,NULL,NULL),(17,'Tag Basic Information Vehicle Instance',NULL,NULL,NULL),(18,'Tag Basic Information Vehicle Instance',NULL,NULL,NULL),(19,'Tag Basic Information Vehicle Instance',NULL,NULL,NULL),(20,'Tag Basic Information Vehicle Instance',NULL,NULL,NULL),(21,'Tag Basic Information Vehicle Instance',NULL,NULL,NULL),(22,'Tag Basic Information Vehicle Instance',NULL,NULL,NULL),(23,'Tag Basic Information Vehicle Instance',NULL,NULL,NULL),(24,'Price Brazillian Real',70000,NULL,NULL),(25,'Price Brazillian Real',71000,NULL,NULL),(26,'Price Brazillian Real',72000,NULL,NULL),(27,'Price Brazillian Real',73000,NULL,NULL),(28,'Price Brazillian Real',74000,NULL,NULL),(29,'Price Brazillian Real',75000,NULL,NULL),(30,'Price Brazillian Real',76000,NULL,NULL),(31,'Traction',NULL,NULL,'wikipedia.com/traction'),(32,'Traction Front Wheel Drive',NULL,NULL,'wikipedia.com/tractionFWD'),(33,'Traction Rear Wheel Drive',NULL,NULL,'wikipedia.com/tractionRWD'),(34,'Traction All Wheel Drive',NULL,NULL,'wikipedia.com/tractionAWD'),(35,'Color',NULL,NULL,'wikipedia.com/color'),(36,'ColorType',NULL,NULL,'wikipedia.com/colorType'),(37,'ColorBasic',NULL,NULL,'wikipedia.com/colors'),(38,'Matte',NULL,NULL,'wikipedia.com/matte'),(39,'Metallic',NULL,NULL,'wikipedia.com/metallic'),(40,'Pearlescent',NULL,NULL,'wikipedia.com/pearlescent'),(41,'Solid',NULL,NULL,'wikipedia.com/solid'),(42,'White',NULL,NULL,'wikipedia.com/colorWhite'),(43,'Black',NULL,NULL,'wikipedia.com/colorBlack'),(44,'Red',NULL,NULL,'wikipedia.com/colorRed'),(45,'Orange',NULL,NULL,'wikipedia.com/colorOrange'),(46,'Yellow',NULL,NULL,'wikipedia.com/colorYellow'),(47,'Green',NULL,NULL,'wikipedia.com/colorGreen'),(48,'Blue',NULL,NULL,'wikipedia.com/colorBlue'),(49,'Indigo',NULL,NULL,'wikipedia.com/colorIndigo'),(50,'Violet',NULL,NULL,'wikipedia.com/colorViolet'),(51,'Cosmos',235235,NULL,NULL),(52,'Regular',234523,NULL,NULL),(53,'Polar',23452345,NULL,NULL),(54,'Galactic',23452445,NULL,NULL),(55,'Macaw',134124,NULL,NULL),(56,'Carbon Flash',12341324,NULL,NULL),(57,'Taffeta',234123,NULL,NULL);
/*!40000 ALTER TABLE `tabletag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabletagrelation`
--

DROP TABLE IF EXISTS `tabletagrelation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabletagrelation` (
  `integerForeignKeyTagFrom` int(11) NOT NULL AUTO_INCREMENT,
  `integerForeignKeyTagTo` int(11) NOT NULL,
  `integerForeignKeyTagRelationType` int(11) NOT NULL,
  PRIMARY KEY (`integerForeignKeyTagFrom`,`integerForeignKeyTagTo`,`integerForeignKeyTagRelationType`),
  KEY `integerForeignKeyTagToIndex` (`integerForeignKeyTagTo`),
  KEY `integerForeignKeyTagRelationTypeIndex` (`integerForeignKeyTagRelationType`),
  CONSTRAINT `integerForeignKeyTagFrom` FOREIGN KEY (`integerForeignKeyTagFrom`) REFERENCES `tabletag` (`integerIdentificationTag`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `integerForeignKeyTagRelationType` FOREIGN KEY (`integerForeignKeyTagRelationType`) REFERENCES `tabletagrelationtype` (`integerIdentificationTagRelationType`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `integerForeignKeyTagTo` FOREIGN KEY (`integerForeignKeyTagTo`) REFERENCES `tabletag` (`integerIdentificationTag`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabletagrelation`
--

LOCK TABLES `tabletagrelation` WRITE;
/*!40000 ALTER TABLE `tabletagrelation` DISABLE KEYS */;
INSERT INTO `tabletagrelation` VALUES (17,24,3),(18,25,3),(19,26,3),(20,27,3),(21,28,3),(22,29,3),(23,30,3),(17,32,3),(18,32,3),(19,32,3),(20,32,3),(21,32,3),(22,32,3),(23,32,3),(31,32,1),(31,33,1),(31,34,1),(35,36,3),(35,37,3),(36,38,1),(17,39,3),(20,39,3),(22,39,3),(23,39,3),(36,39,1),(18,40,3),(36,40,1),(19,41,3),(21,41,3),(36,41,1),(37,42,3),(37,43,3),(37,44,3),(37,45,3),(37,46,3),(37,47,3),(37,48,3),(37,49,3),(37,50,3),(17,51,3),(48,51,1),(18,52,3),(42,52,1),(19,53,3),(42,53,1),(20,54,3),(42,54,1),(43,54,1),(22,55,3),(48,55,1),(23,56,3),(43,56,1),(21,57,3),(42,57,1);
/*!40000 ALTER TABLE `tabletagrelation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabletagrelationtype`
--

DROP TABLE IF EXISTS `tabletagrelationtype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabletagrelationtype` (
  `integerIdentificationTagRelationType` int(11) NOT NULL AUTO_INCREMENT,
  `stringTagRelationType` varchar(50) NOT NULL,
  PRIMARY KEY (`integerIdentificationTagRelationType`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabletagrelationtype`
--

LOCK TABLES `tabletagrelationtype` WRITE;
/*!40000 ALTER TABLE `tabletagrelationtype` DISABLE KEYS */;
INSERT INTO `tabletagrelationtype` VALUES (1,'Instance'),(2,'Child'),(3,'Component');
/*!40000 ALTER TABLE `tabletagrelationtype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tablevehicle`
--

DROP TABLE IF EXISTS `tablevehicle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tablevehicle` (
  `integerIdentificationVehicle` int(11) NOT NULL AUTO_INCREMENT,
  `integerForeignKeyTagBasicInformationVehicle` int(11) NOT NULL,
  `integerForeignKeySubModel` int(11) NOT NULL,
  PRIMARY KEY (`integerIdentificationVehicle`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tablevehicle`
--

LOCK TABLES `tablevehicle` WRITE;
/*!40000 ALTER TABLE `tablevehicle` DISABLE KEYS */;
INSERT INTO `tablevehicle` VALUES (1,12,1),(2,13,1),(3,14,2),(4,15,3),(5,16,4);
/*!40000 ALTER TABLE `tablevehicle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tablevehicleinstace`
--

DROP TABLE IF EXISTS `tablevehicleinstace`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tablevehicleinstace` (
  `integerIdentificationVehicleInstance` int(11) NOT NULL AUTO_INCREMENT,
  `integerForeignKeyTagBasicInformationVehicleInstance` int(11) NOT NULL,
  `integerForeignKeyStore` int(11) NOT NULL,
  `integerForeignKeyVehicle` int(11) NOT NULL,
  PRIMARY KEY (`integerIdentificationVehicleInstance`),
  KEY `integerForeignKeyStoreIndex` (`integerForeignKeyStore`),
  KEY `integerForeignKeyVehicleIndex` (`integerForeignKeyVehicle`),
  CONSTRAINT `integerForeignKeyStore` FOREIGN KEY (`integerForeignKeyStore`) REFERENCES `tablestore` (`integerIdentificationStore`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `integerForeignKeyVehicle` FOREIGN KEY (`integerForeignKeyVehicle`) REFERENCES `tablevehicle` (`integerIdentificationVehicle`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tablevehicleinstace`
--

LOCK TABLES `tablevehicleinstace` WRITE;
/*!40000 ALTER TABLE `tablevehicleinstace` DISABLE KEYS */;
INSERT INTO `tablevehicleinstace` VALUES (1,17,1,1),(2,18,1,2),(3,19,1,3),(4,20,2,1),(5,21,3,4),(6,22,4,5),(7,23,4,5);
/*!40000 ALTER TABLE `tablevehicleinstace` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-26 18:10:29
