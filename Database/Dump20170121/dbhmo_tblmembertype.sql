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
-- Table structure for table `tblmembertype`
--

DROP TABLE IF EXISTS `tblmembertype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblmembertype` (
  `intMemberTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `intMemberID` int(11) NOT NULL,
  `intMembershipID` int(11) NOT NULL,
  PRIMARY KEY (`intMemberTypeID`),
  KEY `idxMemberTypeID_idx` (`intMemberID`),
  KEY `idxMembershipID_idx` (`intMembershipID`),
  CONSTRAINT `idxMemberTypeID` FOREIGN KEY (`intMemberID`) REFERENCES `tblmembertransaction` (`memberTransID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxMembershipID` FOREIGN KEY (`intMembershipID`) REFERENCES `tblmembershiptype` (`membershipID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmembertype`
--

LOCK TABLES `tblmembertype` WRITE;
/*!40000 ALTER TABLE `tblmembertype` DISABLE KEYS */;
INSERT INTO `tblmembertype` VALUES (2,2,7),(3,3,7),(4,4,7),(5,5,7),(6,6,4),(7,7,7),(8,8,7),(9,9,7),(10,10,7),(11,11,7),(12,12,7),(13,13,7),(14,14,7),(22,15,7),(24,16,4),(25,17,7),(26,18,7),(27,19,11),(28,20,4),(30,21,4);
/*!40000 ALTER TABLE `tblmembertype` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-21  6:11:53
