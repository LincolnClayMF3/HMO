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
-- Table structure for table `tblpec`
--

DROP TABLE IF EXISTS `tblpec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblpec` (
  `pecID` int(11) NOT NULL AUTO_INCREMENT,
  `pecName` varchar(60) NOT NULL,
  `pecDesc` varchar(600) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`pecID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblpec`
--

LOCK TABLES `tblpec` WRITE;
/*!40000 ALTER TABLE `tblpec` DISABLE KEYS */;
INSERT INTO `tblpec` VALUES (2,'Arthritis','Inflammation in the area where the bones meet.','Active'),(3,'Anemiaaaa','Red Blood Cells deficiencies','Inactive'),(4,'Hypertension','High Blood Pressure','Active'),(5,'Diabetes','Illness pertaining to High Blood Sugar','Active'),(6,'Tuberculosis','Serious disease that mainly affects the Lungs','Active'),(7,'High Blood','High level of sugar in the blood','Active'),(8,'Polio','a highly contagious virus ','Active'),(9,'Rheumatic Heart Disease','complication of rheumatic fever in which the heart valves are damaged','Active'),(10,'Asthma','a chronic lung disease','Active'),(11,'test','','Active'),(12,'Epilepsy','','Active');
/*!40000 ALTER TABLE `tblpec` ENABLE KEYS */;
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
