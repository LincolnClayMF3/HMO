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
-- Table structure for table `tbldoctorpatientclaim`
--

DROP TABLE IF EXISTS `tbldoctorpatientclaim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbldoctorpatientclaim` (
  `intPatientClaimID` int(11) NOT NULL AUTO_INCREMENT,
  `intClaimID` int(11) NOT NULL,
  `intPatientID` int(11) NOT NULL,
  PRIMARY KEY (`intPatientClaimID`),
  KEY `intClaimPatientID_idx` (`intClaimID`),
  KEY `intPatientClaimID_idx` (`intPatientID`),
  CONSTRAINT `intClaimPatientID` FOREIGN KEY (`intClaimID`) REFERENCES `tbldoctorclaim` (`claimID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `intPatientClaimID` FOREIGN KEY (`intPatientID`) REFERENCES `tbldoctorpatient` (`patientID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbldoctorpatientclaim`
--

LOCK TABLES `tbldoctorpatientclaim` WRITE;
/*!40000 ALTER TABLE `tbldoctorpatientclaim` DISABLE KEYS */;
INSERT INTO `tbldoctorpatientclaim` VALUES (16,1,18),(17,2,19),(18,2,20),(19,3,21),(20,3,22),(22,4,24),(23,5,25),(24,5,26);
/*!40000 ALTER TABLE `tbldoctorpatientclaim` ENABLE KEYS */;
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
