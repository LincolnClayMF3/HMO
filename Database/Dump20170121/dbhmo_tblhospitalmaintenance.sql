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
-- Table structure for table `tblhospitalmaintenance`
--

DROP TABLE IF EXISTS `tblhospitalmaintenance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblhospitalmaintenance` (
  `hospitalMainID` int(11) NOT NULL AUTO_INCREMENT,
  `hospitalMainName` varchar(45) NOT NULL,
  `hospitalRegion` varchar(45) NOT NULL,
  `hospitalMainAddress` varchar(45) NOT NULL,
  `hospitalMainCoordinator` varchar(45) NOT NULL,
  `hospitalSpecification` varchar(45) NOT NULL,
  `hospitalMainTelephone` varchar(45) DEFAULT NULL,
  `hospitalMainMobile` varchar(45) DEFAULT NULL,
  `hospitalMainEmail` varchar(45) DEFAULT NULL,
  `hospitalEffectivityDate` date NOT NULL,
  `hospitalEndContract` varchar(60) NOT NULL,
  `hospitalNotify` int(11) NOT NULL,
  `hospitalMainReason` varchar(200) NOT NULL,
  `hospitalMainTerminator` varchar(60) NOT NULL,
  `hospitalDateTerminated` date DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`hospitalMainID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblhospitalmaintenance`
--

LOCK TABLES `tblhospitalmaintenance` WRITE;
/*!40000 ALTER TABLE `tblhospitalmaintenance` DISABLE KEYS */;
INSERT INTO `tblhospitalmaintenance` VALUES (2,'San Lazaro','8','Manila','Camille Justine Leonin','Minor','123-456-78','(0933) 766-736','onat@gmail.com','2015-12-12','2017-09-08',5,'None','None','0000-00-00','Active'),(5,'Saint Lukes Medical Center','7','Manila','Charles Canlas','Major','564-565-47','(0923) 344-546','slmc@gmail.com','2016-07-20','2017-09-07',0,'None','None','0000-00-00','Active'),(6,'Tondo General Hospital','3','Manila','Jonathan Del Prado','Minor','469-452-34','(0934) 935-8325','tgh@gmail.com','2016-09-05','2017-12-07',5,'None','None','0000-00-00','Active'),(9,'Saint James','3','Manila','Camille Justine Leonin','Major','123-123-21','(0192) 312-4234','sj@gmail.com','2016-08-24','Open End',0,'None','None','0000-00-00','Active'),(10,'Gold Hospital','3','Manila','Jonathan Del Prado','Major','123-412-41','(0912) 348-1341','gh@gmail.com','2016-09-09','Terminated',0,'sample\r\n','Jonathan Del Prado','2016-12-06','Inactive'),(11,'Davao Medical Center','17','Davao City','Daniel Longcop','Major','1231581','09274818481','longitud@gmail.com','2016-09-20','2017-12-06',0,'None','None','0000-00-00','Active'),(12,'Bulacan Medical Center','4','Bulacan','Jose Rizal','','123-123-2_','(0923) 858-123','rizal@yahoo.com','2016-09-22','2027-10-23',0,'None','None','0000-00-00','Active'),(13,'Philippine General Hospital','3','Manila','Daniel Longcop','Major','1231581','09274818481','longitud@gmail.com','2016-09-22','Open End',0,'None','None','0000-00-00','Active'),(14,'Jose Reyes Medical Center','3','Manila','Daniel Longcop','Minor','1231581','09274818481','longitud@gmail.com','2016-09-22','Open End',0,'None','None','0000-00-00','Active'),(15,'','','','','','','','','2016-09-23','Open End',0,'None','None','0000-00-00','Active'),(16,'Pearson Specter Litt General Hospital','3','New York Cubao Quezon City','Daniel Longcop','Major','1231581','09274818481','longitud@gmail.com','2016-09-24','Open End',0,'None','None','0000-00-00','Active'),(17,'PSE General Hospital','3','Ortigas','Jose Rizal','Major','1231232','09238581238','rizal@yahoo.com','2016-12-07','Open End',0,'None','None','0000-00-00','Active'),(18,'Manila Doctors Hospital','3','Manila','Jose Rizal','Major','1231232','09238581238','rizal@yahoo.com','2016-12-07','Open End',0,'None','None','0000-00-00','Active');
/*!40000 ALTER TABLE `tblhospitalmaintenance` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-21  6:11:58
