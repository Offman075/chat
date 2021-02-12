-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ptt_chat
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `amis`
--

DROP TABLE IF EXISTS `amis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `amis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL,
  `confrm` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amis`
--

LOCK TABLES `amis` WRITE;
/*!40000 ALTER TABLE `amis` DISABLE KEYS */;
INSERT INTO `amis` VALUES (11,2,4,1),(12,5,4,1);
/*!40000 ALTER TABLE `amis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disc1`
--

DROP TABLE IF EXISTS `disc1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disc1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` varchar(11) NOT NULL,
  `id_user1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL,
  `id_last_mes` int(11) NOT NULL,
  `verif` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disc1`
--

LOCK TABLES `disc1` WRITE;
/*!40000 ALTER TABLE `disc1` DISABLE KEYS */;
INSERT INTO `disc1` VALUES (53,'2_4',4,2,102,1),(54,'4_5',5,4,98,1),(55,'4_6',4,6,101,1),(56,'1_4',1,4,103,1),(57,'1_6',1,6,106,1);
/*!40000 ALTER TABLE `disc1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `envoi`
--

DROP TABLE IF EXISTS `envoi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `envoi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `envoi`
--

LOCK TABLES `envoi` WRITE;
/*!40000 ALTER TABLE `envoi` DISABLE KEYS */;
INSERT INTO `envoi` VALUES (1,1,2),(2,3,2);
/*!40000 ALTER TABLE `envoi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `espace_membre`
--

DROP TABLE IF EXISTS `espace_membre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `espace_membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `espace_membre`
--

LOCK TABLES `espace_membre` WRITE;
/*!40000 ALTER TABLE `espace_membre` DISABLE KEYS */;
INSERT INTO `espace_membre` VALUES (1,'offma','dddsssssssss','123'),(2,'off','ss','123'),(3,'Bienvenu','dddd','123'),(4,'offman','ssssss','123'),(5,'qfds','fsfds','123'),(6,'rakoto','iii','123');
/*!40000 ALTER TABLE `espace_membre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membre`
--

DROP TABLE IF EXISTS `membre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membre` (
  `id_disc` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membre`
--

LOCK TABLES `membre` WRITE;
/*!40000 ALTER TABLE `membre` DISABLE KEYS */;
INSERT INTO `membre` VALUES (20,2),(20,4),(21,2),(21,4),(22,2),(22,3),(23,2),(23,4),(24,2),(24,5);
/*!40000 ALTER TABLE `membre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mes1`
--

DROP TABLE IF EXISTS `mes1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mes1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `id_user1` int(11) NOT NULL,
  `id_disc` int(11) NOT NULL,
  `dati` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mes1`
--

LOCK TABLES `mes1` WRITE;
/*!40000 ALTER TABLE `mes1` DISABLE KEYS */;
INSERT INTO `mes1` VALUES (97,'cc',2,53,'2021-02-09 10:05:12'),(98,'cv?',5,54,'2021-02-09 10:05:34'),(99,'slt',4,53,'2021-02-09 10:12:54'),(100,'de aon',2,53,'2021-02-09 10:13:25'),(101,'aiz e',4,55,'2021-02-09 10:20:30'),(102,'mm',4,53,'2021-02-09 10:35:27'),(103,'ccc',1,56,'2021-02-09 10:58:47'),(104,'salut rakoto!',1,57,'2021-02-09 13:12:56'),(105,'de aon ee',6,57,'2021-02-09 13:13:28'),(106,'kkkk',1,57,'2021-02-12 14:37:23');
/*!40000 ALTER TABLE `mes1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `new_mes`
--

DROP TABLE IF EXISTS `new_mes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `new_mes` (
  `id_recepteur` int(11) NOT NULL,
  `id_disc` int(11) NOT NULL,
  `nb_mes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `new_mes`
--

LOCK TABLES `new_mes` WRITE;
/*!40000 ALTER TABLE `new_mes` DISABLE KEYS */;
INSERT INTO `new_mes` VALUES (4,53,0),(5,54,0),(6,55,1),(4,56,1),(1,57,0);
/*!40000 ALTER TABLE `new_mes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recois`
--

DROP TABLE IF EXISTS `recois`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recois` (
  `id` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recois`
--

LOCK TABLES `recois` WRITE;
/*!40000 ALTER TABLE `recois` DISABLE KEYS */;
/*!40000 ALTER TABLE `recois` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-12 15:50:23
