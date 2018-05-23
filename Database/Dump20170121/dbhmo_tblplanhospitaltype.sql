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
-- Table structure for table `tblplanhospitaltype`
--

DROP TABLE IF EXISTS `tblplanhospitaltype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblplanhospitaltype` (
  `planHospitalTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `intPlanID` int(11) NOT NULL,
  `intHospitalTypeID` int(11) NOT NULL,
  PRIMARY KEY (`planHospitalTypeID`),
  KEY `intPlanHospitalTypeID_idx` (`intPlanID`),
  KEY `intHospitalTypeID_idx` (`intHospitalTypeID`),
  CONSTRAINT `intHospitalTypeID` FOREIGN KEY (`intHospitalTypeID`) REFERENCES `tblhospitaltype` (`hospitalTypeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `intPlanHospitalTypeID` FOREIGN KEY (`intPlanID`) REFERENCES `tblplan` (`planID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblplanhospitaltype`
--

LOCK TABLES `tblplanhospitaltype` WRITE;
/*!40000 ALTER TABLE `tblplanhospitaltype` DISABLE KEYS */;
INSERT INTO `tblplanhospitaltype` VALUES (12,7,1),(13,2,1),(14,3,2),(15,7,1),(16,7,1),(17,8,1),(18,8,2),(22,1,1),(23,1,2),(24,1,1),(25,1,2),(32,11,1),(33,11,2),(34,9,1),(35,9,2),(37,12,2),(38,13,1),(39,13,2);
/*!40000 ALTER TABLE `tblplanhospitaltype` ENABLE KEYS */;
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
