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
-- Table structure for table `tblrequirement`
--

DROP TABLE IF EXISTS `tblrequirement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblrequirement` (
  `requirementID` int(11) NOT NULL AUTO_INCREMENT,
  `requirementName` varchar(45) NOT NULL,
  `requirementType` varchar(45) NOT NULL,
  `requirementDesc` varchar(100) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`requirementID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblrequirement`
--

LOCK TABLES `tblrequirement` WRITE;
/*!40000 ALTER TABLE `tblrequirement` DISABLE KEYS */;
INSERT INTO `tblrequirement` VALUES (1,'Birth Certificate','Patient Claim','For Identification purposes','Inactive'),(3,'Official Receipt','Patient Claim','Amount for services done','Active'),(4,'Patient Medical Result','Doctor Claim','Medical Result','Active'),(5,'Medical Certificate','Patient Claim','','Active'),(6,'Physician Statement Letter','Patient Claim','','Active'),(7,'List of Services Rendered','Doctor Claim','needed for claim','Active'),(8,'Birth Certificate','Doctor Claim','','Inactive'),(9,'test req','Patient Claim','','Active'),(10,'test req','Doctor Claim','','Active'),(11,'Medical Abstract','Patient Claim','','Active');
/*!40000 ALTER TABLE `tblrequirement` ENABLE KEYS */;
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
