-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: donate
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `address` varchar(1500) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `bloodgroup` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `verificationcode` varchar(10) DEFAULT NULL,
  `statuscode` varchar(10) DEFAULT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `opinion_id` int(11) DEFAULT NULL,
  `tockenno` int(10) DEFAULT NULL,
  `report` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_donor_hospital1_idx` (`hospital_id`),
  KEY `fk_donor_opinion1_idx` (`opinion_id`),
  CONSTRAINT `fk_donor_hospital1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_donor_opinion1` FOREIGN KEY (`opinion_id`) REFERENCES `opinion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donor`
--

LOCK TABLES `donor` WRITE;
/*!40000 ALTER TABLE `donor` DISABLE KEYS */;
INSERT INTO `donor` VALUES (24,'donor1','khkjhlk','1975-01-01','male','b+','test@test.com','85212',NULL,NULL,NULL,'1',4,26,0,'true'),(25,'jhhkjKJ','XDFIJ','1975-01-01','male','a+','test@test.com','8756456456',NULL,NULL,NULL,'FALSE',1,NULL,NULL,NULL),(26,'kdfdfr','sdf','1975-01-01','male','b+','','dfsdfs',NULL,NULL,NULL,'1',3,27,NULL,NULL),(27,'ZZX','ZXZX','1975-01-01','on','b+','test@test.com','55646',NULL,NULL,NULL,'0',3,NULL,NULL,NULL),(28,'kjn','vcxvcxvcx','1975-01-01','male','0+','test@test.com','12345',NULL,NULL,NULL,'0',1,NULL,NULL,NULL),(29,'xcc','cxxxccx','1975-01-01','male','ab+','test@test.com','123456',NULL,NULL,NULL,'0',2,NULL,NULL,NULL);
/*!40000 ALTER TABLE `donor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospital`
--

DROP TABLE IF EXISTS `hospital`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doctors` varchar(250) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `contact` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospital`
--

LOCK TABLES `hospital` WRITE;
/*!40000 ALTER TABLE `hospital` DISABLE KEYS */;
INSERT INTO `hospital` VALUES (1,NULL,'hospital3','00215','ngvhgbknl','mm@gh.com','8445','hospital3','hospital3'),(2,NULL,'fdxfgc','123','fgvjn','abc@gmail.com','123654','asdd','qwert'),(3,NULL,'fw','23','fva','abc@gmail.com','1213','wrfdsc','wfWD'),(4,NULL,'42334dfyg','3543','fgjjhgbhgGgg','abc@gmail.com','12365','dyghc','dtdfuy'),(5,NULL,'KMCT','123243','kozhikode','info@gmail.com','1236547890','kkmmcctt','kmct@123'),(6,NULL,'MES','perinthelmanna','wefwafv','info@klkk.com','123543','asdf','qweeadzgv'),(7,NULL,'qwert','12345','sfxdgcbv','info@klkk.comgreshytr','12345','dfxgcngv','asdfgvbn'),(8,NULL,'adf','a234','dgt','asdfadf@asdaasda','fbgh','rsgrsfhd','xrhygfnxr');
/*!40000 ALTER TABLE `hospital` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opinion`
--

DROP TABLE IF EXISTS `opinion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opinion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(100) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opinion`
--

LOCK TABLES `opinion` WRITE;
/*!40000 ALTER TABLE `opinion` DISABLE KEYS */;
INSERT INTO `opinion` VALUES (1,'admin','inuf'),(2,'admin','sdfg'),(3,'admin',''),(4,'admin','sdsfgh'),(5,'admin','dxfchghkj'),(6,'admin','dyfyg'),(7,'admin',''),(8,'admin','xfgd'),(9,'admin','dzrfgdrthj'),(10,'admin','qaaxs'),(11,'admin','zfsf'),(12,'admin','goooodddd'),(13,'admin','dgfx'),(14,'admin',''),(15,'admin','sdfvdsv'),(16,'admin','good'),(17,'admin',' hjnh'),(18,'admin','asfzcdxv'),(19,'admin','asd'),(20,'admin','efgerg'),(21,'admin','sadwf'),(22,'admin','cvnc'),(23,'admin','sxgsdv'),(24,'admin','fszg'),(25,'admin','xfgbdfxhb'),(26,'admin','client'),(27,'admin','');
/*!40000 ALTER TABLE `opinion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `testdate` date DEFAULT NULL,
  `testtime` time DEFAULT NULL,
  `tokenno` int(11) DEFAULT NULL,
  `forwadedby` varchar(150) DEFAULT NULL,
  `medicalreport` varchar(1500) DEFAULT NULL,
  `verifiedby` varchar(45) DEFAULT NULL,
  `donor_id` int(10) unsigned NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `forwadedto` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_report_donor_idx` (`donor_id`),
  KEY `fk_report_hospital1_idx` (`hospital_id`),
  CONSTRAINT `fk_report_donor` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_report_hospital1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `report`
--

LOCK TABLES `report` WRITE;
/*!40000 ALTER TABLE `report` DISABLE KEYS */;
INSERT INTO `report` VALUES (14,NULL,NULL,NULL,NULL,'kjnlkjnlkn;lksa','attneder',24,4,NULL);
/*!40000 ALTER TABLE `report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tocken_details`
--

DROP TABLE IF EXISTS `tocken_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tocken_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `verificationcode` int(10) unsigned DEFAULT NULL,
  `donor_id` int(10) unsigned NOT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `testtime` time DEFAULT NULL,
  `testdate` date DEFAULT NULL,
  `tockenno` int(10) DEFAULT NULL,
  `report` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_donor_details_donor1_idx` (`donor_id`),
  KEY `fk_tocken_details_hospital1_idx` (`hospital_id`),
  CONSTRAINT `fk_donor_details_donor1` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tocken_details_hospital1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tocken_details`
--

LOCK TABLES `tocken_details` WRITE;
/*!40000 ALTER TABLE `tocken_details` DISABLE KEYS */;
INSERT INTO `tocken_details` VALUES (57,9132508,24,4,'00:13:23','0000-00-00',1331,'false'),(58,0,0,0,'00:00:00','0000-00-00',124,'false'),(59,3427658,0,0,'00:00:00','0000-00-00',0,'false'),(60,5102698,0,0,'00:00:00','0000-00-00',0,'false'),(61,7365149,0,0,'00:00:00','0000-00-00',0,'false');
/*!40000 ALTER TABLE `tocken_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

-- DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(100) DEFAULT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'hospital','hospital1','21232f297a57a5a743894a0e4a801fc3'),(2,'hospital','hospital2','hospital2'),(3,'hospital','hospital2','hospital2'),(4,'hospital','hospital2','hospital2'),(5,'admin','admin','21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-12 17:06:27
