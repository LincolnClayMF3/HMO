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
-- Table structure for table `tbladditional`
--

DROP TABLE IF EXISTS `tbladditional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbladditional` (
  `additionalID` int(11) NOT NULL AUTO_INCREMENT,
  `additionalName` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`additionalID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbladditional`
--

LOCK TABLES `tbladditional` WRITE;
/*!40000 ALTER TABLE `tbladditional` DISABLE KEYS */;
INSERT INTO `tbladditional` VALUES (1,'Massage','Active'),(2,'Dental Services','Active'),(4,'Skin and Body','Active'),(5,'test ulet','Active'),(6,'Maternity Additional','Active');
/*!40000 ALTER TABLE `tbladditional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbladditionalcoverage`
--

DROP TABLE IF EXISTS `tbladditionalcoverage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbladditionalcoverage` (
  `intAdditionalCoverageID` int(11) NOT NULL AUTO_INCREMENT,
  `intAdditionalID` int(11) NOT NULL,
  `intCoverageID` int(11) NOT NULL,
  PRIMARY KEY (`intAdditionalCoverageID`),
  KEY `idxAdditionalCoverageID_idx` (`intAdditionalID`),
  KEY `idxCoverageAdditional_idx` (`intCoverageID`),
  CONSTRAINT `idxAdditionalCoverageID` FOREIGN KEY (`intAdditionalID`) REFERENCES `tbladditional` (`additionalID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxCoverageAdditional` FOREIGN KEY (`intCoverageID`) REFERENCES `tblcoverage` (`coverageID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbladditionalcoverage`
--

LOCK TABLES `tbladditionalcoverage` WRITE;
/*!40000 ALTER TABLE `tbladditionalcoverage` DISABLE KEYS */;
INSERT INTO `tbladditionalcoverage` VALUES (1,2,1),(4,4,8),(5,1,1),(6,1,8),(7,5,1),(8,5,8),(9,5,10),(10,6,13);
/*!40000 ALTER TABLE `tbladditionalcoverage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcategory`
--

DROP TABLE IF EXISTS `tblcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcategory` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryType` varchar(45) NOT NULL,
  `categoryDesc` varchar(45) DEFAULT NULL,
  `classification` varchar(45) NOT NULL,
  `specification` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcategory`
--

LOCK TABLES `tblcategory` WRITE;
/*!40000 ALTER TABLE `tblcategory` DISABLE KEYS */;
INSERT INTO `tblcategory` VALUES (12,'Vaccine','All Kinds of Vaccines','Standard','Per Year','Active'),(13,'Blood Test','All Kinds of Blood Tests','Standard','Per Illness','Active'),(15,'Physical Examination','All types of Examinations','Standard','Per Illness','Active'),(16,'X-Ray','All Types of X-Ray','Standard','Per Illness','Active'),(17,'Stress Test','All Types of Stress Test','Standard','Per Year','Active'),(21,'Urine Examination','All types of Urine Examinations','Standard','Per Illness','Active'),(22,'Dental','All Kinds of Dental Services','Additional','Per Year','Inactive'),(24,'Dental Care','','Addtional','Per Year','Inactive'),(25,'Skin and Body','Skin and Body Treatments','Additional','Per Year','Active'),(26,'Dental','','Additional','Per Year','Active'),(27,'test','','Standard','Per Illness','Active'),(28,'test 2','','Additional','Per Year','Active'),(29,'Maternity','','Standard','Per Year','Active'),(30,'Maternity Additional','','Additional','Per Year','Active');
/*!40000 ALTER TABLE `tblcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblclassificationcoverage`
--

DROP TABLE IF EXISTS `tblclassificationcoverage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblclassificationcoverage` (
  `classificationCoverageID` int(11) NOT NULL,
  `classificationCoverageName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`classificationCoverageID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblclassificationcoverage`
--

LOCK TABLES `tblclassificationcoverage` WRITE;
/*!40000 ALTER TABLE `tblclassificationcoverage` DISABLE KEYS */;
INSERT INTO `tblclassificationcoverage` VALUES (1,'Standard'),(2,'Additional');
/*!40000 ALTER TABLE `tblclassificationcoverage` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tblcompanyplan`
--

DROP TABLE IF EXISTS `tblcompanyplan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcompanyplan` (
  `intCompanyPlan` int(11) NOT NULL AUTO_INCREMENT,
  `intCompanyID` int(11) NOT NULL,
  `intPlanID` int(11) NOT NULL,
  PRIMARY KEY (`intCompanyPlan`),
  KEY `idxCompanyID_idx` (`intCompanyID`),
  KEY `idxCompanyPlan_idx` (`intPlanID`),
  CONSTRAINT `idxCompanyMainID` FOREIGN KEY (`intCompanyID`) REFERENCES `tblcompanymaintenance` (`companyMainID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxCompanyPlanID` FOREIGN KEY (`intPlanID`) REFERENCES `tblplan` (`planID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcompanyplan`
--

LOCK TABLES `tblcompanyplan` WRITE;
/*!40000 ALTER TABLE `tblcompanyplan` DISABLE KEYS */;
INSERT INTO `tblcompanyplan` VALUES (76,7,2),(77,6,1),(78,1,1),(79,1,4),(80,1,2),(90,2,4),(91,2,2),(104,5,1),(105,5,2),(116,10,1),(117,11,7),(118,11,1),(126,14,11),(127,14,1),(128,14,2),(151,15,11),(152,16,11),(153,8,1),(154,8,2),(156,4,11),(157,4,1),(165,3,1),(167,12,1),(172,17,11),(173,17,1),(178,13,1),(179,13,2),(180,18,11),(181,19,11),(182,19,1),(183,19,2),(184,20,2),(185,20,13);
/*!40000 ALTER TABLE `tblcompanyplan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcoverage`
--

DROP TABLE IF EXISTS `tblcoverage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcoverage` (
  `coverageID` int(11) NOT NULL AUTO_INCREMENT,
  `coverageName` varchar(45) NOT NULL,
  `coverageDesc` varchar(150) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`coverageID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcoverage`
--

LOCK TABLES `tblcoverage` WRITE;
/*!40000 ALTER TABLE `tblcoverage` DISABLE KEYS */;
INSERT INTO `tblcoverage` VALUES (1,'Oral Prophyaxis','','Active'),(2,'Chest Xray','            ','Active'),(3,'Complete Blood Count',NULL,'Active'),(4,'Red Blood Cells Count','            ','Active'),(5,'Teeth Whitening','            ','Active'),(6,'Lateral xray','            ','Active'),(7,'','            ','Active'),(8,'Face lifting','            to look younger','Active'),(9,'hello hello','            ','Active'),(10,'hi hi','            ','Active'),(11,'Pre natal checkup','            ','Active'),(12,'Ultrasound','            ','Inactive'),(13,'Ultrasound','            ','Active');
/*!40000 ALTER TABLE `tblcoverage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcoveragecategory`
--

DROP TABLE IF EXISTS `tblcoveragecategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcoveragecategory` (
  `intCatCovID` int(11) NOT NULL AUTO_INCREMENT,
  `intCategoryID` int(11) NOT NULL,
  `intCoverageID` int(11) NOT NULL,
  PRIMARY KEY (`intCatCovID`),
  KEY `idxCatID_idx` (`intCategoryID`),
  KEY `idxCovID_idx` (`intCoverageID`),
  CONSTRAINT `idxCatID` FOREIGN KEY (`intCategoryID`) REFERENCES `tblcategory` (`categoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxCovID` FOREIGN KEY (`intCoverageID`) REFERENCES `tblcoverage` (`coverageID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcoveragecategory`
--

LOCK TABLES `tblcoveragecategory` WRITE;
/*!40000 ALTER TABLE `tblcoveragecategory` DISABLE KEYS */;
INSERT INTO `tblcoveragecategory` VALUES (3,22,1),(6,13,3),(11,13,4),(13,16,2),(14,24,5),(15,16,6),(16,25,8),(17,27,9),(18,28,10),(19,29,11),(20,29,12),(21,30,13);
/*!40000 ALTER TABLE `tblcoveragecategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcoverageclassification`
--

DROP TABLE IF EXISTS `tblcoverageclassification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcoverageclassification` (
  `intCoverageClassificationID` int(11) NOT NULL AUTO_INCREMENT,
  `intClassificationCoverageID` int(11) DEFAULT NULL,
  `intCoverageID` int(11) DEFAULT NULL,
  PRIMARY KEY (`intCoverageClassificationID`),
  KEY `intCoverageClassification_idx` (`intClassificationCoverageID`),
  KEY `intCcoverageClassification_idx` (`intCoverageID`),
  CONSTRAINT `intCcoverageClassification` FOREIGN KEY (`intCoverageID`) REFERENCES `tblcoverage` (`coverageID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `intClassificationCoverage` FOREIGN KEY (`intClassificationCoverageID`) REFERENCES `tblclassificationcoverage` (`classificationCoverageID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcoverageclassification`
--

LOCK TABLES `tblcoverageclassification` WRITE;
/*!40000 ALTER TABLE `tblcoverageclassification` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblcoverageclassification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbldependents`
--

DROP TABLE IF EXISTS `tbldependents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbldependents` (
  `dependentID` int(11) NOT NULL AUTO_INCREMENT,
  `dependentName` varchar(60) NOT NULL,
  `dependentBday` date NOT NULL,
  `dependentRelationship` varchar(80) NOT NULL,
  `dependentCivilStatus` varchar(45) NOT NULL,
  PRIMARY KEY (`dependentID`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbldependents`
--

LOCK TABLES `tbldependents` WRITE;
/*!40000 ALTER TABLE `tbldependents` DISABLE KEYS */;
INSERT INTO `tbldependents` VALUES (86,'Faustino Del Prado','1959-05-07','Father','Married'),(87,'Winifreda Cabantog','1938-09-01','Grandmother','Widowed'),(88,'Daniel Longcop','1996-12-12','Brother','Single'),(89,'Patek Jude Dijos','1996-12-12','Brother','Single'),(90,'Earl Test','1995-11-12','Brother','Single'),(91,'sample','2002-01-01','Father','Single'),(92,'Chico Reyes','1960-12-12','Father','Married'),(93,'PJ O\'brien','1990-10-10','Brother','Single'),(94,'PJ Obrien','1990-10-10','Brother','Single');
/*!40000 ALTER TABLE `tbldependents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbldoctorclaim`
--

DROP TABLE IF EXISTS `tbldoctorclaim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbldoctorclaim` (
  `claimID` int(11) NOT NULL AUTO_INCREMENT,
  `claimDoctorName` varchar(45) NOT NULL,
  `claimPhoneNo` varchar(45) DEFAULT NULL,
  `claimHospitalName` varchar(45) NOT NULL,
  `claimHospitalAddress` varchar(45) NOT NULL,
  `claimHospitalCoordinator` varchar(45) NOT NULL,
  `claimDate` date NOT NULL,
  `status` varchar(45) NOT NULL,
  `claimReason` varchar(200) NOT NULL,
  `claimGracePeriod` varchar(45) NOT NULL,
  PRIMARY KEY (`claimID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbldoctorclaim`
--

LOCK TABLES `tbldoctorclaim` WRITE;
/*!40000 ALTER TABLE `tbldoctorclaim` DISABLE KEYS */;
INSERT INTO `tbldoctorclaim` VALUES (1,'Jonathan Del Prado','09239512951','San Lazaro','Manila','Daniel Longcop','2016-08-24','Disapproved','Incomplete List','2'),(2,'Jose Rizal','12314','Jose Reyes Medical Center','Laguna','Daniel Longcop','2016-08-27','Approved','None','None'),(3,'Faustino Del Prado','092393192','Philippine General Hospital','Manila','Jose Rizal','2016-08-27','Disbursed','None','None'),(4,'Jonathan Del Prado','09325906621','Bulacan Medical Center','Bulacan','Jose Rizal','2016-11-11','Pending','None','None'),(5,'Sissy Nissy','1234','Manila Doctors Hospital','Manila','Jose Rizal','2016-12-07','Received','None','None');
/*!40000 ALTER TABLE `tbldoctorclaim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbldoctorpatient`
--

DROP TABLE IF EXISTS `tbldoctorpatient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbldoctorpatient` (
  `patientID` int(11) NOT NULL AUTO_INCREMENT,
  `patientName` varchar(80) NOT NULL,
  `patientServices` varchar(80) NOT NULL,
  `patientAmount` decimal(10,0) NOT NULL,
  PRIMARY KEY (`patientID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbldoctorpatient`
--

LOCK TABLES `tbldoctorpatient` WRITE;
/*!40000 ALTER TABLE `tbldoctorpatient` DISABLE KEYS */;
INSERT INTO `tbldoctorpatient` VALUES (18,'Apolinario Mabini','Bone Checkup',3500),(19,'Josephine Bracken','Surgery',100000),(20,'Michael Jordan','Ankle Breaker',50000),(21,'Winifreda Cabantog','Checkup',1000),(22,'Jonathan Del Prado','Haircut',500),(24,'Camille Justine Leonin','Eye Checkup',1000),(25,'Chicay Reyes','Delivery',5000),(26,'JP Obrien','Surgery',10000);
/*!40000 ALTER TABLE `tbldoctorpatient` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tblhospitaltype`
--

DROP TABLE IF EXISTS `tblhospitaltype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblhospitaltype` (
  `hospitalTypeID` int(11) NOT NULL,
  `hospitalType` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`hospitalTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblhospitaltype`
--

LOCK TABLES `tblhospitaltype` WRITE;
/*!40000 ALTER TABLE `tblhospitaltype` DISABLE KEYS */;
INSERT INTO `tblhospitaltype` VALUES (1,'Major'),(2,'Minor');
/*!40000 ALTER TABLE `tblhospitaltype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbllogo`
--

DROP TABLE IF EXISTS `tbllogo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbllogo` (
  `utilitylogoID` int(11) NOT NULL,
  `utilitylogoName` varchar(100) NOT NULL,
  `utilitylogoPath` varchar(200) NOT NULL,
  `utilitylogoType` varchar(100) NOT NULL,
  PRIMARY KEY (`utilitylogoID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbllogo`
--

LOCK TABLES `tbllogo` WRITE;
/*!40000 ALTER TABLE `tbllogo` DISABLE KEYS */;
INSERT INTO `tbllogo` VALUES (1,'logo.png','uploads/system/logo.png','image/png');
/*!40000 ALTER TABLE `tbllogo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblmembercompany`
--

DROP TABLE IF EXISTS `tblmembercompany`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblmembercompany` (
  `intMemberCompanyID` int(11) NOT NULL AUTO_INCREMENT,
  `intMemberID` int(11) DEFAULT NULL,
  `intCompanyID` int(11) DEFAULT NULL,
  PRIMARY KEY (`intMemberCompanyID`),
  KEY `idxMemberCompanyID_idx` (`intMemberID`),
  KEY `idxCompanyID_idx` (`intCompanyID`),
  CONSTRAINT `idxCompanyMemberID` FOREIGN KEY (`intCompanyID`) REFERENCES `tblcompanymaintenance` (`companyMainID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxMemberCompanyID` FOREIGN KEY (`intMemberID`) REFERENCES `tblmembertransaction` (`memberTransID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmembercompany`
--

LOCK TABLES `tblmembercompany` WRITE;
/*!40000 ALTER TABLE `tblmembercompany` DISABLE KEYS */;
INSERT INTO `tblmembercompany` VALUES (1,6,3),(5,16,1),(6,20,20),(8,21,20);
/*!40000 ALTER TABLE `tblmembercompany` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblmemberdependents`
--

DROP TABLE IF EXISTS `tblmemberdependents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblmemberdependents` (
  `intMemberDependentID` int(11) NOT NULL AUTO_INCREMENT,
  `intMemberID` int(11) NOT NULL,
  `intDependentID` int(11) NOT NULL,
  PRIMARY KEY (`intMemberDependentID`),
  KEY `idxMemberDependentID_idx` (`intMemberID`),
  KEY `idxDependentMemberID_idx` (`intDependentID`),
  CONSTRAINT `idxDependentMemberID` FOREIGN KEY (`intDependentID`) REFERENCES `tbldependents` (`dependentID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxMemberDependentID` FOREIGN KEY (`intMemberID`) REFERENCES `tblmembertransaction` (`memberTransID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmemberdependents`
--

LOCK TABLES `tblmemberdependents` WRITE;
/*!40000 ALTER TABLE `tblmemberdependents` DISABLE KEYS */;
INSERT INTO `tblmemberdependents` VALUES (3,2,86),(4,2,87),(5,3,88),(6,5,89),(9,20,92),(11,21,94);
/*!40000 ALTER TABLE `tblmemberdependents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblmemberpec`
--

DROP TABLE IF EXISTS `tblmemberpec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblmemberpec` (
  `intMemberPECID` int(11) NOT NULL AUTO_INCREMENT,
  `intMemberID` int(11) DEFAULT NULL,
  `intPECMemberID` int(11) DEFAULT NULL,
  PRIMARY KEY (`intMemberPECID`),
  KEY `idxMemberPECID_idx` (`intMemberID`),
  KEY `idxPECMemberID_idx` (`intPECMemberID`),
  CONSTRAINT `idxMemberPECID` FOREIGN KEY (`intMemberID`) REFERENCES `tblmembertransaction` (`memberTransID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxPECMemberID` FOREIGN KEY (`intPECMemberID`) REFERENCES `tblpec` (`pecID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmemberpec`
--

LOCK TABLES `tblmemberpec` WRITE;
/*!40000 ALTER TABLE `tblmemberpec` DISABLE KEYS */;
INSERT INTO `tblmemberpec` VALUES (1,2,2),(2,2,3),(3,3,2),(4,5,2),(5,9,2),(6,11,2),(8,15,2),(9,20,7),(11,21,2);
/*!40000 ALTER TABLE `tblmemberpec` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblmemberplan`
--

DROP TABLE IF EXISTS `tblmemberplan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblmemberplan` (
  `intMemberPlanID` int(11) NOT NULL AUTO_INCREMENT,
  `intMemberID` int(11) NOT NULL,
  `intPlanID` int(11) NOT NULL,
  PRIMARY KEY (`intMemberPlanID`),
  KEY `idxMemberPlanID_idx` (`intMemberID`),
  KEY `idxPlanMemberId_idx` (`intPlanID`),
  CONSTRAINT `idxMemberPlanID` FOREIGN KEY (`intMemberID`) REFERENCES `tblmembertransaction` (`memberTransID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxPlanMemberId` FOREIGN KEY (`intPlanID`) REFERENCES `tblplan` (`planID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmemberplan`
--

LOCK TABLES `tblmemberplan` WRITE;
/*!40000 ALTER TABLE `tblmemberplan` DISABLE KEYS */;
INSERT INTO `tblmemberplan` VALUES (1,2,1),(2,3,2),(3,4,1),(4,5,1),(5,6,1),(6,7,2),(7,8,1),(8,9,1),(9,10,5),(10,11,1),(11,12,2),(12,13,3),(13,14,1),(21,15,1),(23,16,1),(24,17,1),(25,18,2),(26,19,12),(27,20,13),(29,21,2);
/*!40000 ALTER TABLE `tblmemberplan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblmembershiptype`
--

DROP TABLE IF EXISTS `tblmembershiptype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblmembershiptype` (
  `membershipID` int(11) NOT NULL AUTO_INCREMENT,
  `membershipName` varchar(45) NOT NULL,
  `membershipPercentage` float NOT NULL,
  `membershipDesc` varchar(60) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`membershipID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmembershiptype`
--

LOCK TABLES `tblmembershiptype` WRITE;
/*!40000 ALTER TABLE `tblmembershiptype` DISABLE KEYS */;
INSERT INTO `tblmembershiptype` VALUES (4,'Corporate',5,'Large number of Principal Member','Active'),(5,'Family',10,'Dependents consist of relatives etc.','Inactive'),(7,'Individual',15,'Principal Member','Active'),(8,'VIP',30,'Good Services Offered','Active'),(9,'Group',10,'Services good for group of Individuals','Active'),(10,'SVIP',30,'','Inactive'),(11,'Special',3,'','Active');
/*!40000 ALTER TABLE `tblmembershiptype` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tblplanadditional`
--

DROP TABLE IF EXISTS `tblplanadditional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblplanadditional` (
  `intPlanAdditional` int(11) NOT NULL AUTO_INCREMENT,
  `intPlanID` int(11) NOT NULL,
  `intAdditionalID` int(11) NOT NULL,
  PRIMARY KEY (`intPlanAdditional`),
  KEY `idxPlanAdditionalID_idx` (`intPlanID`),
  KEY `idxAdditionalPlanId_idx` (`intAdditionalID`),
  CONSTRAINT `idxAdditionalPlanId` FOREIGN KEY (`intAdditionalID`) REFERENCES `tbladditional` (`additionalID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxPlanAdditionalID` FOREIGN KEY (`intPlanID`) REFERENCES `tblplan` (`planID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblplanadditional`
--

LOCK TABLES `tblplanadditional` WRITE;
/*!40000 ALTER TABLE `tblplanadditional` DISABLE KEYS */;
INSERT INTO `tblplanadditional` VALUES (5,2,2),(8,7,2),(9,8,2),(13,1,1),(18,11,4),(19,9,1),(21,12,5),(22,13,6);
/*!40000 ALTER TABLE `tblplanadditional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblplanamountlimit`
--

DROP TABLE IF EXISTS `tblplanamountlimit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblplanamountlimit` (
  `intPlanAmountLimitID` int(11) NOT NULL AUTO_INCREMENT,
  `intPlanID` int(11) NOT NULL,
  `intPlanLimitID` int(11) NOT NULL,
  PRIMARY KEY (`intPlanAmountLimitID`),
  KEY `intPlanAmountID_idx` (`intPlanID`),
  KEY `intPlanAmountLimitID_idx` (`intPlanLimitID`),
  CONSTRAINT `intPlanAmountID` FOREIGN KEY (`intPlanID`) REFERENCES `tblplan` (`planID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `intPlanAmountLimitID` FOREIGN KEY (`intPlanLimitID`) REFERENCES `tblplanlimit` (`planLimitID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblplanamountlimit`
--

LOCK TABLES `tblplanamountlimit` WRITE;
/*!40000 ALTER TABLE `tblplanamountlimit` DISABLE KEYS */;
INSERT INTO `tblplanamountlimit` VALUES (86,4,4),(89,5,6),(99,2,2),(100,3,3),(103,7,9),(104,8,10),(109,1,1),(114,11,13),(115,9,11),(117,12,14),(118,13,15);
/*!40000 ALTER TABLE `tblplanamountlimit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblplanhospitaltype`
--

DROP TABLE IF EXISTS `tblplanhospitaltype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblplanhospitaltype` (
  `planHospitalTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `intPlanID` int(11) NOT NULL,
  `intHospitalTypeID` int(11) NOT NULL,
  PRIMARY KEY (`planHospitalTypeID`),
  KEY `intPlanHospitalTypeID_idx` (`intPlanID`),
  KEY `intHospitalTypeID_idx` (`intHospitalTypeID`),
  CONSTRAINT `intHospitalTypeID` FOREIGN KEY (`intHospitalTypeID`) REFERENCES `tblhospitaltype` (`hospitalTypeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `intPlanHospitalTypeID` FOREIGN KEY (`intPlanID`) REFERENCES `tblplan` (`planID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblplanhospitaltype`
--

LOCK TABLES `tblplanhospitaltype` WRITE;
/*!40000 ALTER TABLE `tblplanhospitaltype` DISABLE KEYS */;
INSERT INTO `tblplanhospitaltype` VALUES (12,7,1),(13,2,1),(14,3,2),(15,7,1),(16,7,1),(17,8,1),(18,8,2),(22,1,1),(23,1,2),(24,1,1),(25,1,2),(32,11,1),(33,11,2),(34,9,1),(35,9,2),(37,12,2),(38,13,1),(39,13,2);
/*!40000 ALTER TABLE `tblplanhospitaltype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblplanlimit`
--

DROP TABLE IF EXISTS `tblplanlimit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblplanlimit` (
  `planLimitID` int(11) NOT NULL,
  `planAmountLimit` double NOT NULL,
  PRIMARY KEY (`planLimitID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblplanlimit`
--

LOCK TABLES `tblplanlimit` WRITE;
/*!40000 ALTER TABLE `tblplanlimit` DISABLE KEYS */;
INSERT INTO `tblplanlimit` VALUES (1,70000),(2,600000),(3,30000),(4,90000),(5,10000),(6,100000),(7,10000),(9,600000),(10,50000),(11,60000.95),(13,90000.95),(14,60000),(15,200000);
/*!40000 ALTER TABLE `tblplanlimit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblplanpec`
--

DROP TABLE IF EXISTS `tblplanpec`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblplanpec` (
  `intPlanPEC` int(11) NOT NULL AUTO_INCREMENT,
  `intPlanID` int(11) NOT NULL,
  `intPECID` int(11) NOT NULL,
  PRIMARY KEY (`intPlanPEC`),
  KEY `idxPlanPECID_idx` (`intPlanID`),
  KEY `idxPECID_idx` (`intPECID`),
  CONSTRAINT `idxPECID` FOREIGN KEY (`intPECID`) REFERENCES `tblpec` (`pecID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxPlanPECID` FOREIGN KEY (`intPlanID`) REFERENCES `tblplan` (`planID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblplanpec`
--

LOCK TABLES `tblplanpec` WRITE;
/*!40000 ALTER TABLE `tblplanpec` DISABLE KEYS */;
INSERT INTO `tblplanpec` VALUES (167,4,5),(168,4,6),(171,2,3),(172,3,2),(173,3,4),(174,8,2),(176,1,2),(177,13,5),(178,13,12);
/*!40000 ALTER TABLE `tblplanpec` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblplanstandard`
--

DROP TABLE IF EXISTS `tblplanstandard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblplanstandard` (
  `intPlanStandardID` int(11) NOT NULL AUTO_INCREMENT,
  `intPlanID` int(11) NOT NULL,
  `intStandardID` int(11) NOT NULL,
  PRIMARY KEY (`intPlanStandardID`),
  KEY `idxPlanID_idx` (`intPlanID`),
  KEY `idxServiceID_idx` (`intStandardID`),
  CONSTRAINT `idxPlanStandardID` FOREIGN KEY (`intPlanID`) REFERENCES `tblplan` (`planID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxStandardPlanID` FOREIGN KEY (`intStandardID`) REFERENCES `tblstandard` (`standardID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblplanstandard`
--

LOCK TABLES `tblplanstandard` WRITE;
/*!40000 ALTER TABLE `tblplanstandard` DISABLE KEYS */;
INSERT INTO `tblplanstandard` VALUES (13,2,3),(14,3,2),(17,7,3),(18,8,4),(19,8,2),(24,1,5),(25,1,4),(34,11,6),(35,11,5),(36,11,4),(37,9,4),(39,12,7),(40,13,8);
/*!40000 ALTER TABLE `tblplanstandard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblplantype`
--

DROP TABLE IF EXISTS `tblplantype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblplantype` (
  `intPlanTypeID` int(11) NOT NULL AUTO_INCREMENT,
  `intPlanID` int(11) NOT NULL,
  `intTypeID` int(11) NOT NULL,
  PRIMARY KEY (`intPlanTypeID`),
  KEY `intPlanTypeID_idx` (`intTypeID`),
  KEY `intPlanTypeID_idx1` (`intPlanID`),
  CONSTRAINT `intPlanTypeID` FOREIGN KEY (`intPlanID`) REFERENCES `tblplan` (`planID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `intTypePlanID` FOREIGN KEY (`intTypeID`) REFERENCES `tblmembershiptype` (`membershipID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblplantype`
--

LOCK TABLES `tblplantype` WRITE;
/*!40000 ALTER TABLE `tblplantype` DISABLE KEYS */;
INSERT INTO `tblplantype` VALUES (76,4,4),(77,4,8),(84,5,7),(96,2,4),(97,2,8),(98,3,5),(99,3,7),(104,7,4),(105,7,8),(106,8,7),(114,1,4),(115,1,7),(126,11,4),(127,11,9),(128,11,7),(129,11,8),(130,9,9),(132,12,11),(133,13,4),(134,13,7);
/*!40000 ALTER TABLE `tblplantype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblregion`
--

DROP TABLE IF EXISTS `tblregion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblregion` (
  `regionID` int(11) NOT NULL,
  `regionName` varchar(45) NOT NULL,
  PRIMARY KEY (`regionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblregion`
--

LOCK TABLES `tblregion` WRITE;
/*!40000 ALTER TABLE `tblregion` DISABLE KEYS */;
INSERT INTO `tblregion` VALUES (1,'ARMM'),(2,'CAR'),(3,'NCR'),(4,'Region 1'),(5,'Region 2'),(6,'Region 3'),(7,'Region 4-A'),(8,'Region 4-B'),(9,'Region 5'),(10,'Region 6'),(11,'Region 7'),(12,'Region 8'),(13,'Region 9'),(14,'Region 10'),(15,'Region 11'),(16,'Region 12'),(17,'Region 13');
/*!40000 ALTER TABLE `tblregion` ENABLE KEYS */;
UNLOCK TABLES;

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

--
-- Table structure for table `tblroom`
--

DROP TABLE IF EXISTS `tblroom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblroom` (
  `roomID` int(11) NOT NULL AUTO_INCREMENT,
  `roomType` varchar(45) NOT NULL,
  `roomDesc` varchar(100) DEFAULT NULL,
  `roomAmount` double NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`roomID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblroom`
--

LOCK TABLES `tblroom` WRITE;
/*!40000 ALTER TABLE `tblroom` DISABLE KEYS */;
INSERT INTO `tblroom` VALUES (8,'Ward','Small Room',1000,'Active'),(9,'Private','Luxury Rooms',10000.01,'Active'),(10,'Semi Private','Decent',5000.09,'Active'),(11,'Small Private','',1000,'Active'),(12,'test room','testing lang haha',9000,'Active'),(13,'Suite','',10000,'Active');
/*!40000 ALTER TABLE `tblroom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblskins`
--

DROP TABLE IF EXISTS `tblskins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblskins` (
  `utilitiesID` int(11) NOT NULL,
  `utilitiesskin` varchar(20) NOT NULL,
  PRIMARY KEY (`utilitiesID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblskins`
--

LOCK TABLES `tblskins` WRITE;
/*!40000 ALTER TABLE `tblskins` DISABLE KEYS */;
INSERT INTO `tblskins` VALUES (1,'skin-yellow');
/*!40000 ALTER TABLE `tblskins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblstandard`
--

DROP TABLE IF EXISTS `tblstandard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblstandard` (
  `standardID` int(11) NOT NULL AUTO_INCREMENT,
  `standardName` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`standardID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstandard`
--

LOCK TABLES `tblstandard` WRITE;
/*!40000 ALTER TABLE `tblstandard` DISABLE KEYS */;
INSERT INTO `tblstandard` VALUES (1,'Out-Patient','Inactive'),(2,'In-Patient','Inactive'),(3,'Emergency Care','Inactive'),(4,'Out Patient Service','Active'),(5,'Medical Examination','Active'),(6,'In Patient','Active'),(7,'test','Active'),(8,'Maternity','Active');
/*!40000 ALTER TABLE `tblstandard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblstandardcoverage`
--

DROP TABLE IF EXISTS `tblstandardcoverage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblstandardcoverage` (
  `intStandardCoverageID` int(11) NOT NULL AUTO_INCREMENT,
  `intStandardID` int(11) NOT NULL,
  `intCoverageID` int(11) NOT NULL,
  PRIMARY KEY (`intStandardCoverageID`),
  KEY `idxSerCovSerID_idx` (`intStandardID`),
  KEY `idxCoverageName_idx` (`intCoverageID`),
  CONSTRAINT `idxCoverageID` FOREIGN KEY (`intCoverageID`) REFERENCES `tblcoverage` (`coverageID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idxStandardID` FOREIGN KEY (`intStandardID`) REFERENCES `tblstandard` (`standardID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblstandardcoverage`
--

LOCK TABLES `tblstandardcoverage` WRITE;
/*!40000 ALTER TABLE `tblstandardcoverage` DISABLE KEYS */;
INSERT INTO `tblstandardcoverage` VALUES (10,3,3),(11,3,2),(12,5,2),(13,5,6),(25,6,4),(26,6,3),(27,6,2),(28,6,6),(29,4,4),(30,4,3),(31,4,2),(32,7,3),(33,8,3),(34,8,4),(35,8,11);
/*!40000 ALTER TABLE `tblstandardcoverage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbluser` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userLastName` varchar(45) NOT NULL,
  `userFirstName` varchar(80) NOT NULL,
  `userMiddleName` varchar(45) DEFAULT NULL,
  `userTelephone` varchar(45) NOT NULL,
  `userMobile` varchar(45) NOT NULL,
  `userEmail` varchar(45) NOT NULL,
  `userBday` date NOT NULL,
  `userType` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluser`
--

LOCK TABLES `tbluser` WRITE;
/*!40000 ALTER TABLE `tbluser` DISABLE KEYS */;
INSERT INTO `tbluser` VALUES (2,'Del Prado','Jonathan','Chua','123456','09325906621','onat@gmail.com','1995-10-01','Administrator','jonathan','delprado','Active'),(3,'Limpin','Earl','GitGud','1239412','09238428182','limpin@gmail.com','1996-01-01','Administrator','earl','limpin','Active'),(4,'Canlas','Charles','PakGanern','1231481','09439239121','canlas@gmail.com','1997-01-01','Administrator','charles','canlas','Active'),(5,'Longcop','Daniel','Tejada','1231581','09274818481','longitud@gmail.com','1932-11-01','Coordinator','daniel','longcop','Active'),(6,'Rizal','Jose','Bayani','1231232','09238581238','rizal@yahoo.com','1995-12-01','Coordinator','jose','rizal','Active'),(7,'Uy','Alex','sample','2312312','02932138131','alex@gmail.com','1988-12-12','Administrator','alex','alex','Active');
/*!40000 ALTER TABLE `tbluser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'dbhmo'
--
/*!50106 SET @save_time_zone= @@TIME_ZONE */ ;
/*!50106 DROP EVENT IF EXISTS `company` */;
DELIMITER ;;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;;
/*!50003 SET character_set_client  = utf8 */ ;;
/*!50003 SET character_set_results = utf8 */ ;;
/*!50003 SET collation_connection  = utf8_general_ci */ ;;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;;
/*!50003 SET @saved_time_zone      = @@time_zone */ ;;
/*!50003 SET time_zone             = 'SYSTEM' */ ;;
/*!50106 CREATE*/ /*!50117 DEFINER=`root`@`localhost`*/ /*!50106 EVENT `company` ON SCHEDULE EVERY 10 SECOND STARTS '2016-12-07 03:37:02' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN

    UPDATE tblcompanymaintenance SET status = 'Expired' 
			WHERE companyEndContract != 'Open End' AND
            companyEndContract != 'Terminated' AND companyEndContract < NOW();

	END */ ;;
/*!50003 SET time_zone             = @saved_time_zone */ ;;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;;
/*!50003 SET character_set_client  = @saved_cs_client */ ;;
/*!50003 SET character_set_results = @saved_cs_results */ ;;
/*!50003 SET collation_connection  = @saved_col_connection */ ;;
/*!50106 DROP EVENT IF EXISTS `hospital` */;;
DELIMITER ;;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;;
/*!50003 SET character_set_client  = utf8 */ ;;
/*!50003 SET character_set_results = utf8 */ ;;
/*!50003 SET collation_connection  = utf8_general_ci */ ;;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;;
/*!50003 SET @saved_time_zone      = @@time_zone */ ;;
/*!50003 SET time_zone             = 'SYSTEM' */ ;;
/*!50106 CREATE*/ /*!50117 DEFINER=`root`@`localhost`*/ /*!50106 EVENT `hospital` ON SCHEDULE EVERY 10 SECOND STARTS '2016-12-07 03:17:18' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN

    UPDATE tblhospitalmaintenance SET status = 'Expired'
			WHERE hospitalEndContract != 'Open End' AND
            hospitalEndContract != 'Terminated' AND hospitalEndContract < NOW();

	END */ ;;
/*!50003 SET time_zone             = @saved_time_zone */ ;;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;;
/*!50003 SET character_set_client  = @saved_cs_client */ ;;
/*!50003 SET character_set_results = @saved_cs_results */ ;;
/*!50003 SET collation_connection  = @saved_col_connection */ ;;
/*!50106 DROP EVENT IF EXISTS `member` */;;
DELIMITER ;;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;;
/*!50003 SET character_set_client  = utf8 */ ;;
/*!50003 SET character_set_results = utf8 */ ;;
/*!50003 SET collation_connection  = utf8_general_ci */ ;;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;;
/*!50003 SET @saved_time_zone      = @@time_zone */ ;;
/*!50003 SET time_zone             = 'SYSTEM' */ ;;
/*!50106 CREATE*/ /*!50117 DEFINER=`root`@`localhost`*/ /*!50106 EVENT `member` ON SCHEDULE EVERY 10 SECOND STARTS '2016-09-08 01:15:35' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN

    UPDATE tblmembertransaction SET status = 'Inactive' WHERE memberEndContract < NOW();

	END */ ;;
/*!50003 SET time_zone             = @saved_time_zone */ ;;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;;
/*!50003 SET character_set_client  = @saved_cs_client */ ;;
/*!50003 SET character_set_results = @saved_cs_results */ ;;
/*!50003 SET collation_connection  = @saved_col_connection */ ;;
DELIMITER ;
/*!50106 SET TIME_ZONE= @save_time_zone */ ;

--
-- Dumping routines for database 'dbhmo'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-21  6:11:08
