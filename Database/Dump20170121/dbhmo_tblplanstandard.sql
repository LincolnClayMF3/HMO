CREATE DATABASE  IF NOT EXISTS `dbhmo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbhmo`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dbhmo
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

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
-- Table structure for table `tblplanstandard`
--

DROP TABLE IF EXISTS `tblplanstandard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblplanstandard` (
  `intPlanStandardID` int(11) NOT NULL AUTO_INCREMENT,
  `intPlanID` int(11) NOT NULL,
  `intStandardID` int(11) NOT NULL,
  PRIMARY KEY (`intPlanStandardID`),
  KEY `idxPlanID_idx` (`intPlanID`),
  KEY `idxServiceID_idx` (`intStandardID`),
  CONSTRAINT `idxPlanStandardID` FOREIGN KEY (`intPlanID`) REFERENCES `tblplan` (`planID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxStandardPlanID` FOREIGN KEY (`intStandardID`) REFERENCES `tblstandard` (`standardID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblplanstandard`
--

LOCK TABLES `tblplanstandard` WRITE;
/*!40000 ALTER TABLE `tblplanstandard` DISABLE KEYS */;
INSERT INTO `tblplanstandard` VALUES (13,2,3),(14,3,2),(17,7,3),(18,8,4),(19,8,2),(24,1,5),(25,1,4),(34,11,6),(35,11,5),(36,11,4),(37,9,4),(39,12,7),(40,13,8);
/*!40000 ALTER TABLE `tblplanstandard` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-21  6:11:56
