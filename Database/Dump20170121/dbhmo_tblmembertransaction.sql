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
-- Table structure for table `tblmembertransaction`
--

DROP TABLE IF EXISTS `tblmembertransaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblmembertransaction` (
  `memberTransID` int(11) NOT NULL AUTO_INCREMENT,
  `memberTransName` varchar(70) NOT NULL,
  `memberTransBday` date NOT NULL,
  `memberTransAge` int(11) NOT NULL,
  `memberTransHeight` float NOT NULL,
  `memberTransWeight` float NOT NULL,
  `memberGender` varchar(45) NOT NULL,
  `memberCivilStatus` varchar(45) NOT NULL,
  `memberTransAddress` varchar(300) NOT NULL,
  `memberTransTelephone` varchar(50) DEFAULT NULL,
  `memberTransMobile` varchar(50) DEFAULT NULL,
  `memberTransEmail` varchar(100) NOT NULL,
  `memberTransOccupation` varchar(100) NOT NULL,
  `memberSpecification` varchar(45) NOT NULL,
  `memberTransPlanAmount` double NOT NULL,
  `memberAnnualPayment` double NOT NULL,
  `memberFrequency` varchar(45) DEFAULT NULL,
  `memberTransAmountToPay` double NOT NULL,
  `memberMode` varchar(45) NOT NULL,
  `memberBalance` double DEFAULT NULL,
  `memberEffectivityDate` date NOT NULL,
  `memberEndContract` date NOT NULL,
  `memberTransReason` varchar(100) NOT NULL,
  `memberTransTerminator` varchar(60) NOT NULL,
  `memberDateTerminated` date NOT NULL,
  `memberCardID` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`memberTransID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmembertransaction`
--

LOCK TABLES `tblmembertransaction` WRITE;
/*!40000 ALTER TABLE `tblmembertransaction` DISABLE KEYS */;
INSERT INTO `tblmembertransaction` VALUES (2,'Jonathan Del Prado','1995-10-01',20,5.6,60,'Male','Single','Tondo Manila','349596','09235848231','onat@gmail.com','Pulis Pangkalawakan','Principal',45000,9000,'Monthly',787.5,'Cash',28426,'2015-08-08','2018-08-07','None','None','0000-00-00','123456789','Active'),(3,'Earl Limpin','1995-12-12',19,5.5,60,'Male','Single','Makati','2342479','09335653875','earl.limpin@gmail.com','Programmer','Principal',60000,7500,'Monthly',656.25,'Cash',56344,'2016-08-17','2018-08-18','None','None','0000-00-00','987654321','Active'),(4,'Alex Uy','1988-03-19',28,6,60,'Male','Single','Manila','123123','091231284','alexuy@gmail.com','Professor','Principal',45000,9000,'Quarterly',2362.5,'Cash',40298,'2016-08-24','2016-09-05','None','None','0000-00-00','471835728','Inactive'),(5,'Mark Reymond Baldesco','1996-12-12',19,5.5,50,'Male','Single','Manila','2312523','09238413821','baldesco@gmail.com','Programmer','Principal',45000,9000,'Quarterly',2362.5,'Cash',45000,'2016-08-27','2018-08-30','None','None','0000-00-00','347234583','Active'),(6,'Charles Canlas','1997-08-27',19,5.5,60,'Male','Single','Pasig','234943','09238485831','canlas@yahoo.com','System Analyst','Principal',45000,9000,'Annual',9000,'Salary Deduction',45000,'2016-06-29','2017-08-29','None','None','0000-00-00','234712342','Active'),(7,'Patek Jude Dijos','1997-12-12',19,5.4,50,'Male','Single','Manila','123909','09348581921','dijos@rocketmail.com','System Analyst','Principal',60000,7500,'Monthly',656.25,'Cash',60000,'2016-07-29','2016-09-04','None','None','0000-00-00','348234993','Inactive'),(8,'Camille Justine Leonin','1997-12-12',19,5.3,45,'Male','Single','Manila','129383','09348537181','leonin@gmail.com','System Analyst','Principal',45000,9000,'Monthly',787.5,'Cash',43448,'2016-09-05','2017-08-29','None','None','0000-00-00','481343293','Active'),(9,'Elijah','1996-08-16',19,6,56,'Male','Single','Makati CIty','092347','09138475365','elijah_meds@yahoo.com','Designer','Principal',45000,9000,'Monthly',787.5,'Cash',45000,'2016-09-08','2017-09-08','sample','Jonathan Del Prado','2016-09-24','547649324','Inactive'),(10,'Juan Dela Cruz','1986-10-10',29,5,50,'Male','Single','Manila','1238421','09234614628','juan@yahoo.com','Programmer','Principal',100000,100000,'Monthly',8750,'Cash',100000,'2016-09-09','2017-09-09','None','None','0000-00-00','408349302','Active'),(11,'Oliver Queen','1997-08-26',19,5.6,83,'Male','Single','Starling City','093274836','092387645','canlasraymundcharles@gmail.com','Archer','Principal',45000,9000,'Monthly',787.5,'',45000,'2016-09-23','2017-09-23','None','None','0000-00-00','493484822','Active'),(12,'Nikko Cruz','1997-10-02',20,5.5,80,'Male','Single','Taguig CIty','02849837564','','','Programmer','Principal',600000,7000,'Monthly',612.5,'',600000,'2016-09-23','2014-09-23','None','None','0000-00-00','492384239','Inactive'),(13,'test','2016-09-28',12,12,121,'Male','Married','12121','1212','1212','121@g','12121','Principal',30000,5000,'Monthly',437.5,'',30000,'2016-09-23','2017-09-23','None','None','0000-00-00','482348239','Inactive'),(14,'Jose Rizal','1994-12-12',21,5,50,'Male','Single','Manila','342542','09238418491','rizal@gmail.com','Programmer','Principal',45000,9000,'Monthly',787.5,'',45000,'2016-09-24','2017-09-24','walang pambayad','Jonathan Del Prado','2016-11-27','984350234','Inactive'),(15,'Al Qaeda','1995-01-01',21,21,21,'Male','Single','Iraq','123','123','alqaeda@gmail.com','terrorist','Principal',70000,9000,'Monthly',787.5,'Cash',70000,'2016-12-07','2017-12-07','None','None','0000-00-00','12304190','Active'),(16,'Andres Bonifacio','1995-01-01',21,150,45,'Male','Single','Tondo Manila','1291249','09325906621','kkk@gmail.com','Katipunero','Principal',70000,9000,'Annual',9000,'Salary Deduction',70000,'2016-12-07','2017-12-07','None','None','0000-00-00','1243281238','Active'),(17,'Nathan Drake','1994-12-01',22,150,52,'Male','Married','Manila','123','2134','nathan@yahoo.com','Adventurer','Principal',70000,9000,'Monthly',787.5,'Cash',70000,'2016-12-07','2017-12-07','None','None','0000-00-00','1230419','Active'),(18,'Phoebe Buffay','1965-09-13',51,234,67,'Female','Single','Central Perk Pasig CIty','987698769','87698769876','phoebe@yahoo.com','IT technical support','Principal',600000,7000,'Monthly',612.5,'Cash',600000,'2016-12-07','2017-12-07','None','None','0000-00-00','1230419','Active'),(19,'Test Systema','1997-08-26',19,5.6,80,'Female','Single','Makati','098709870','9870987098','test@yahoo.com','Teacher','Principal',60000,6500,'Quarterly',1673.75,'Cash',58000,'2016-12-07','2017-12-07','None','None','0000-00-00','1230419','Active'),(20,'Chicay Reyes','1995-12-01',21,6,40,'Female','Single','Manila','12413123','09282491231','chicay@gmail.com','Teacher','Principal',200000,5000,'Annual',5000,'Salary Deduction',0,'2016-12-07','2017-12-07','None','None','0000-00-00','1243281238','Active'),(21,'JP Obrien','1995-12-12',21,5,50,'Male','Single','Manila','324234','234234','jp@yahoo.com','Clerk','Principal',600000,7000,'Annual',7000,'Salary Deduction',600000,'2016-12-07','2017-12-07','None','None','0000-00-00','1243281238','Active');
/*!40000 ALTER TABLE `tblmembertransaction` ENABLE KEYS */;
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
