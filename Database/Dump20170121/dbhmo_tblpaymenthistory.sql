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
-- Table structure for table `tblpaymenthistory`
--

DROP TABLE IF EXISTS `tblpaymenthistory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblpaymenthistory` (
  `paymentHistoryID` int(11) NOT NULL AUTO_INCREMENT,
  `paymentDate` date NOT NULL,
  `paymentMemberName` varchar(100) NOT NULL,
  `paymentPlan` varchar(45) NOT NULL,
  `paymentMode` varchar(45) NOT NULL,
  `paymentAmountPaid` float NOT NULL,
  `paymentBalance` float NOT NULL,
  PRIMARY KEY (`paymentHistoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblpaymenthistory`
--

LOCK TABLES `tblpaymenthistory` WRITE;
/*!40000 ALTER TABLE `tblpaymenthistory` DISABLE KEYS */;
INSERT INTO `tblpaymenthistory` VALUES (2,'2015-08-11','Jonathan Del Prado','Gold','Cash',5000,40000),(3,'2016-07-11','Jonathan Del Prado','Gold','Cash',5000,35000),(4,'2016-08-17','Jonathan Del Prado','Gold','Cash',787.5,34213),(6,'2016-08-17','Jonathan Del Prado','Gold','Cash',787.5,33426),(7,'2016-08-17','Jonathan Del Prado','Gold','Cash',5000,28426),(8,'2016-08-17','Earl Limpin','Platinum','Credit',656.25,59344),(9,'2016-08-20','Earl Limpin','Platinum','Cash',3000,56344),(10,'2016-08-26','Alex Uy','Gold','Cash',2340,42660),(11,'2016-08-26','Alex Uy','Gold','Cash',2362,40298),(12,'2016-09-02','Camille Justine Leonin','Gold','Cash',787.5,44213),(13,'2016-09-24','Camille Justine Leonin','Gold','Cash',765,43448),(14,'2016-12-07','Test Systema','Test Plan','Cash',2000,58000),(15,'2016-12-07','Chicay Reyes','Platinum Circle','Salary Deduction',5000,0);
/*!40000 ALTER TABLE `tblpaymenthistory` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-21  6:11:55
