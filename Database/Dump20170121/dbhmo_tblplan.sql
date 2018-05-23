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
-- Table structure for table `tblplan`
--

DROP TABLE IF EXISTS `tblplan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblplan` (
  `planID` int(11) NOT NULL AUTO_INCREMENT,
  `planName` varchar(45) NOT NULL,
  `planAnnualPayment` double NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`planID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblplan`
--

LOCK TABLES `tblplan` WRITE;
/*!40000 ALTER TABLE `tblplan` DISABLE KEYS */;
INSERT INTO `tblplan` VALUES (1,'Gold',9000,'Active'),(2,'Platinum',7000,'Active'),(3,'Silver',5000,'Active'),(4,'Jade Star',11250,'Inactive'),(5,'Silver Plan',100000,'Active'),(7,'Diamond',25000,'Inactive'),(8,'Indiv Plan',2800,'Active'),(9,'Junior',2900,'Active'),(10,'',0,'Inactive'),(11,'Emerald Plan',7000,'Active'),(12,'Test Plan',6500,'Active'),(13,'Platinum Circle',5000,'Active');
/*!40000 ALTER TABLE `tblplan` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-21  6:11:54
