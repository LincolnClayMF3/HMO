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
-- Table structure for table `tblpatientclaim`
--

DROP TABLE IF EXISTS `tblpatientclaim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblpatientclaim` (
  `reimbursementID` int(11) NOT NULL AUTO_INCREMENT,
  `reimbursementPatientName` varchar(80) NOT NULL,
  `reimbursementCardID` varchar(45) NOT NULL,
  `reimbursementContact` varchar(45) DEFAULT NULL,
  `reimbursementTreatment` date NOT NULL,
  `reimbursementCoordinator` varchar(200) NOT NULL,
  `reimbursementHospital` varchar(60) NOT NULL,
  `reimbursementReason` varchar(500) NOT NULL,
  `reimbursementAmount` float NOT NULL,
  `reimbursementDate` date NOT NULL,
  `status` varchar(45) NOT NULL,
  `reimbursementDisapproved` varchar(200) NOT NULL,
  `reimbursementGracePeriod` varchar(45) NOT NULL,
  `reimbursementreqName` varchar(100) NOT NULL,
  `reimbursementreqPath` varchar(200) NOT NULL,
  PRIMARY KEY (`reimbursementID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblpatientclaim`
--

LOCK TABLES `tblpatientclaim` WRITE;
/*!40000 ALTER TABLE `tblpatientclaim` DISABLE KEYS */;
INSERT INTO `tblpatientclaim` VALUES (1,'Earl Limpin','080989','876584','2016-09-22','Jose Rizal','Starling City General Hospital','Xray\r\nUrinalysis',1500,'2016-09-27','Approved','None','None','Birth Certificate|Official Receipt|Medical Certificate|Physician Statement Letter','uploads/patient/css-cheat-sheet-1.png|uploads/patient/|uploads/patient/|uploads/patient/'),(2,'Charles Canlas','0000826','09169258301','2016-08-26','Daniel Longcop','Pearson Specter Litt Hospital','Checkup\r\nEye, ear, nose treatment\r\nXray',2300,'2016-09-27','Approved','None','None','Birth Certificate|Official Receipt|Medical Certificate|Physician Statement Letter','uploads/patient/css-cheat-sheet-1.png|uploads/patient/|uploads/patient/|uploads/patient/'),(3,'Charles Canlas','0000826','09169258301','2016-08-26','Daniel Longcop','Pearson Specter Litt Hospital','Checkup\r\nEye, ear, nose treatment\r\nXray',2300,'2016-09-27','Approved','None','None','Birth Certificate|Official Receipt|Medical Certificate|Physician Statement Letter','uploads/patient/css-cheat-sheet-1.png|uploads/patient/|uploads/patient/|uploads/patient/'),(6,'Mark Reymond Baldesco','123-313-23','09176667795','2016-09-14','Jose Rizal','Ospital ng Makati','Take portion of the policy',12000,'2016-09-27','Pending','None','None','Birth Certificate|Official Receipt|Medical Certificate|Physician Statement Letter','uploads/patient/|uploads/patient/|uploads/patient/|uploads/patient/'),(7,'Jonathan Del Prado','123456789','09235848231','2016-11-23','Jose Rizal','Bulacan Medical Center','Eye Checkup',1000,'2016-11-23','Received','None','None','Birth Certificate|Official Receipt|Medical Certificate|Physician Statement Letter','uploads/patient/black red revolution guy fawkes v for vendetta anarchism 4961x7016 wallpaper_www.wallpaperfo.com_92.jpg|uploads/patient/castlevania_lords_of_shadow_2-wallpaper-2880x1620.jpg|uploads/pa'),(8,'Jonathan Del Prado','123456789','09235848231','2016-11-28','Daniel Longcop','Pearson Specter Litt General Hospital','Dental Checkup',500,'2016-11-28','Disapproved','None','None','Birth Certificate|Official Receipt|Medical Certificate|Physician Statement Letter','uploads/patient/Add another record.png|uploads/patient/sample.PNG|uploads/patient/medal of honor cowboys.jpg|uploads/patient/black red revolution guy fawkes v for vendetta anarchism 4961x7016 wallpape'),(9,'Test Systema','1230419','9870987098','2016-12-07','Jose Rizal','PSE General Hospital','x ray\r\ncheck up',3000,'2016-12-07','Received','None','None','Birth Certificate|Official Receipt|Medical Certificate|Physician Statement Letter|test req','uploads/patient/black red revolution guy fawkes v for vendetta anarchism 4961x7016 wallpaper_www.wallpaperfo.com_92.jpg|uploads/patient/castlevania_lords_of_shadow_2-wallpaper-2880x1620.jpg|uploads/pa'),(10,'JP Obrien','1243281238','234234','2016-12-07','Jose Rizal','Manila Doctors Hospital','Chest Xray\r\nBlood Test',3000,'2016-12-07','Received','None','None','Birth Certificate|Official Receipt|Medical Certificate|Physician Statement Letter|test req|Medical A','uploads/patient/black red revolution guy fawkes v for vendetta anarchism 4961x7016 wallpaper_www.wallpaperfo.com_92.jpg|uploads/patient/medal of honor cowboys.jpg|uploads/patient/ghost_recon_future_so'),(11,'Chicay Reyes','1243281238','09282491231','2016-12-07','Jose Rizal','Manila Doctors Hospital','Sextuplets',201000,'2016-12-07','Approved','None','None','Birth Certificate|Official Receipt|Medical Certificate|Physician Statement Letter|test req|Medical A','uploads/patient/black red revolution guy fawkes v for vendetta anarchism 4961x7016 wallpaper_www.wallpaperfo.com_92.jpg|uploads/patient/castlevania_lords_of_shadow_2-wallpaper-2880x1620.jpg|uploads/pa');
/*!40000 ALTER TABLE `tblpatientclaim` ENABLE KEYS */;
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
