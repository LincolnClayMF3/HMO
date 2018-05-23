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
-- Table structure for table `tblcoveragecategory`
--

DROP TABLE IF EXISTS `tblcoveragecategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcoveragecategory` (
  `intCatCovID` int(11) NOT NULL AUTO_INCREMENT,
  `intCategoryID` int(11) NOT NULL,
  `intCoverageID` int(11) NOT NULL,
  PRIMARY KEY (`intCatCovID`),
  KEY `idxCatID_idx` (`intCategoryID`),
  KEY `idxCovID_idx` (`intCoverageID`),
  CONSTRAINT `idxCatID` FOREIGN KEY (`intCategoryID`) REFERENCES `tblcategory` (`categoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxCovID` FOREIGN KEY (`intCoverageID`) REFERENCES `tblcoverage` (`coverageID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcoveragecategory`
--

LOCK TABLES `tblcoveragecategory` WRITE;
/*!40000 ALTER TABLE `tblcoveragecategory` DISABLE KEYS */;
INSERT INTO `tblcoveragecategory` VALUES (3,22,1),(6,13,3),(11,13,4),(13,16,2),(14,24,5),(15,16,6),(16,25,8),(17,27,9),(18,28,10),(19,29,11),(20,29,12),(21,30,13);
/*!40000 ALTER TABLE `tblcoveragecategory` ENABLE KEYS */;
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
