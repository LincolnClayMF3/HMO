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
-- Table structure for table `tbladditionalcoverage`
--

DROP TABLE IF EXISTS `tbladditionalcoverage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbladditionalcoverage` (
  `intAdditionalCoverageID` int(11) NOT NULL AUTO_INCREMENT,
  `intAdditionalID` int(11) NOT NULL,
  `intCoverageID` int(11) NOT NULL,
  PRIMARY KEY (`intAdditionalCoverageID`),
  KEY `idxAdditionalCoverageID_idx` (`intAdditionalID`),
  KEY `idxCoverageAdditional_idx` (`intCoverageID`),
  CONSTRAINT `idxAdditionalCoverageID` FOREIGN KEY (`intAdditionalID`) REFERENCES `tbladditional` (`additionalID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxCoverageAdditional` FOREIGN KEY (`intCoverageID`) REFERENCES `tblcoverage` (`coverageID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbladditionalcoverage`
--

LOCK TABLES `tbladditionalcoverage` WRITE;
/*!40000 ALTER TABLE `tbladditionalcoverage` DISABLE KEYS */;
INSERT INTO `tbladditionalcoverage` VALUES (1,2,1),(4,4,8),(5,1,1),(6,1,8),(7,5,1),(8,5,8),(9,5,10),(10,6,13);
/*!40000 ALTER TABLE `tbladditionalcoverage` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-21  6:12:00
