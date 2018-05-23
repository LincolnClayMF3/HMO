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
-- Table structure for table `tblcompanymaintenance`
--

DROP TABLE IF EXISTS `tblcompanymaintenance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcompanymaintenance` (
  `companyMainID` int(11) NOT NULL AUTO_INCREMENT,
  `companyMainName` varchar(45) NOT NULL,
  `companyType` varchar(45) NOT NULL,
  `companyMainAddress` varchar(45) NOT NULL,
  `companyMainTelephone` varchar(45) DEFAULT NULL,
  `companyMainMobile` varchar(45) DEFAULT NULL,
  `companyMainEmail` varchar(45) DEFAULT NULL,
  `companyEffectivityDate` date NOT NULL,
  `companyEndContract` varchar(60) NOT NULL,
  `companyNotify` int(11) DEFAULT NULL,
  `companyMainReason` varchar(200) NOT NULL,
  `companyMainTerminator` varchar(60) NOT NULL,
  `companyDateTerminated` date NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`companyMainID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcompanymaintenance`
--

LOCK TABLES `tblcompanymaintenance` WRITE;
/*!40000 ALTER TABLE `tblcompanymaintenance` DISABLE KEYS */;
INSERT INTO `tblcompanymaintenance` VALUES (1,'Kojima Production','Corporate','Japan','257-354-23','(0932) 456-281','kjmp@yahoo.com','2001-12-02','Open End',5,'None','None','0000-00-00','Active'),(2,'Naughty Dog','Corporate','Manila','903-345-12','(0923) 853-913','nd@yahoo.com','2014-01-02','2016-09-03',5,'None','None','0000-00-00','Expired'),(3,'Santa Monica Studio','Corporate','Pasig','342-124-23','(0943) 747-273','sms@yahoo.com','2002-12-12','2019-12-12',5,'None','None','0000-00-00','Active'),(4,'Square Enix','Corporate','Pasig','234-912-39','(0934) 359-214','sqx@gmail.com','2012-12-12','2020-12-12',5,'None','None','0000-00-00','Active'),(5,'Bethesda','Corporate','Makati','459-843-98','(0932) 424-537','bethesda@yahoo.com','2016-07-21','2016-12-06',5,'None','None','2016-12-06','Expired'),(6,'DontNod','Corporate','Mandaluyong','395-474-95','(0923) 584-568','dnd@gmail.com','2016-07-28','Open End',0,'None','None','0000-00-00','Active'),(7,'From Software','Corporate','Divisoria','123-123-12','(0912) 348-3483','fromsofware@gmail.com','2015-09-05','2016-09-05',0,'None','None','0000-00-00','Expired'),(8,'Bronze Company','Corporate','Manila','123-123-21','(0934) 124-812','bc@gmail.com','2016-09-09','2016-11-17',0,'None','None','2016-11-27','Expired'),(10,'Jollibee','Corporate','Manila','231-231-31','(0923) 128-314','jollibee@gmail.com','2016-09-22','Open End',0,'None','None','0000-00-00','Active'),(11,'Mcdonalds','Corporate','Pasig City','091-283-73','(0937) 254-133','j@yahoo.com','2016-09-23','Open End',0,'None','None','0000-00-00','Active'),(12,'Sutherland','Corporate','Makati City','293-829-74','(2476) 079-898','s@yahoo.com','2013-09-23','2017-12-06',0,'None','None','0000-00-00','Active'),(13,'Astrotel','Corporate','Pasig City','193-286-46','(0918) 364-545','a@yahoo.com','2016-09-23','2017-12-06',0,'None','None','0000-00-00','Active'),(14,'SITEL','Corporate','Ortigas Pasig CIty','093-840-29','(0984) 560-2954','sitel@yahoo.com','2013-09-27','2014-09-27',0,'None','None','0000-00-00','Expired'),(15,'CryTek','Corporate','San Juan','120-321-23','(0923) 183-1231','crytek@yahoo.com','2016-09-27','Open End',0,'None','None','0000-00-00','Active'),(16,'Capcom','Corporate','Quezon City','123-158-12','(0912) 314-8123','capcom@yahoo.com','2016-09-27','Open End',0,'None','None','0000-00-00','Active'),(17,'Bethesda','Corporate','Pasig','234-234-23','(0923) 215-2834','bethsoft@yahoo.com','2016-11-11','2017-12-06',0,'None','None','0000-00-00','Active'),(18,'Globe','Corporate','Manila','123-123-13','(1231) 212-3213','globe@gmail.com','2016-12-07','Open End',0,'None','None','0000-00-00','Active'),(19,'Unistar Credit and Finance','Corporate','Ortigas','987-696-59','(9898) 598-6867','unistar@yahoo.com','2016-12-07','Open End',0,'None','None','0000-00-00','Active'),(20,'UGPUP','Corporate','Sta Mesa','123-841-28','(0932) 590-6621','ugpup@gmail.com','2016-12-07','Open End',0,'None','None','0000-00-00','Active');
/*!40000 ALTER TABLE `tblcompanymaintenance` ENABLE KEYS */;
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
