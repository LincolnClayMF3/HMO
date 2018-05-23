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
-- Table structure for table `tblstandardcoverage`
--

DROP TABLE IF EXISTS `tblstandardcoverage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblstandardcoverage` (
  `intStandardCoverageID` int(11) NOT NULL AUTO_INCREMENT,
  `intStandardID` int(11) NOT NULL,
  `intCoverageID` int(11) NOT NULL,
  PRIMARY KEY (`intStandardCoverageID`),
  KEY `idxSerCovSerID_idx` (`intStandardID`),
  KEY `idxCoverageName_idx` (`intCoverageID`),
  CONSTRAINT `idxCoverageID` FOREIGN KEY (`intCoverageID`) REFERENCES `tblcoverage` (`coverageID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxStandardID` FOREIGN KEY (`intStandardID`) REFERENCES `tblstandard` (`standardID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstandardcoverage`
--

LOCK TABLES `tblstandardcoverage` WRITE;
/*!40000 ALTER TABLE `tblstandardcoverage` DISABLE KEYS */;
INSERT INTO `tblstandardcoverage` VALUES (10,3,3),(11,3,2),(12,5,2),(13,5,6),(25,6,4),(26,6,3),(27,6,2),(28,6,6),(29,4,4),(30,4,3),(31,4,2),(32,7,3),(33,8,3),(34,8,4),(35,8,11);
/*!40000 ALTER TABLE `tblstandardcoverage` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-21  6:11:57
