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
-- Table structure for table `tblcompanyplan`
--

DROP TABLE IF EXISTS `tblcompanyplan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcompanyplan` (
  `intCompanyPlan` int(11) NOT NULL AUTO_INCREMENT,
  `intCompanyID` int(11) NOT NULL,
  `intPlanID` int(11) NOT NULL,
  PRIMARY KEY (`intCompanyPlan`),
  KEY `idxCompanyID_idx` (`intCompanyID`),
  KEY `idxCompanyPlan_idx` (`intPlanID`),
  CONSTRAINT `idxCompanyMainID` FOREIGN KEY (`intCompanyID`) REFERENCES `tblcompanymaintenance` (`companyMainID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxCompanyPlanID` FOREIGN KEY (`intPlanID`) REFERENCES `tblplan` (`planID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcompanyplan`
--

LOCK TABLES `tblcompanyplan` WRITE;
/*!40000 ALTER TABLE `tblcompanyplan` DISABLE KEYS */;
INSERT INTO `tblcompanyplan` VALUES (76,7,2),(77,6,1),(78,1,1),(79,1,4),(80,1,2),(90,2,4),(91,2,2),(104,5,1),(105,5,2),(116,10,1),(117,11,7),(118,11,1),(126,14,11),(127,14,1),(128,14,2),(151,15,11),(152,16,11),(153,8,1),(154,8,2),(156,4,11),(157,4,1),(165,3,1),(167,12,1),(172,17,11),(173,17,1),(178,13,1),(179,13,2),(180,18,11),(181,19,11),(182,19,1),(183,19,2),(184,20,2),(185,20,13);
/*!40000 ALTER TABLE `tblcompanyplan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-21  6:11:59
