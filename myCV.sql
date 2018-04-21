-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: myCV
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenmuc` varchar(255) DEFAULT NULL,
  `idmenu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `danhmuc`
--

LOCK TABLES `danhmuc` WRITE;
/*!40000 ALTER TABLE `danhmuc` DISABLE KEYS */;
INSERT INTO `danhmuc` VALUES (1,'Profile','hoso'),(2,'Experience','kinhnghiem'),(3,'Music','nhac'),(4,'Books','sach'),(5,'Contacts','diachi');
/*!40000 ALTER TABLE `danhmuc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kinhnghiem`
--

DROP TABLE IF EXISTS `kinhnghiem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kinhnghiem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `laptrinh` varchar(255) DEFAULT NULL,
  `duongdan` varchar(255) DEFAULT NULL,
  `urlHinh` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kinhnghiem`
--

LOCK TABLES `kinhnghiem` WRITE;
/*!40000 ALTER TABLE `kinhnghiem` DISABLE KEYS */;
INSERT INTO `kinhnghiem` VALUES (1,'algorithm','https://github.com/quangns/test/tree/master/algorithm','../files/algorithm.pdf'),(2,'ansible','https://github.com/quangns/test/tree/master/ansible','../files/ansible.pdf'),(3,'java','https://github.com/quangns/LibrarySystem','../files/java.pdf'),(4,'nodejs+express+socket.io','https://github.com/quangns/nodejs_and_socket.io','../files/nodejs.pdf');
/*!40000 ALTER TABLE `kinhnghiem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nguoidung`
--

DROP TABLE IF EXISTS `nguoidung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nguoidung`
--

LOCK TABLES `nguoidung` WRITE;
/*!40000 ALTER TABLE `nguoidung` DISABLE KEYS */;
/*!40000 ALTER TABLE `nguoidung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nhac`
--

DROP TABLE IF EXISTS `nhac`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nhac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenbaihat` varchar(255) DEFAULT NULL,
  `tenbaihat_khongdau` varchar(255) DEFAULT NULL,
  `casi` varchar(255) DEFAULT NULL,
  `theloai` varchar(255) DEFAULT NULL,
  `duongdan` varchar(255) DEFAULT NULL,
  `urlHinh` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nhac`
--

LOCK TABLES `nhac` WRITE;
/*!40000 ALTER TABLE `nhac` DISABLE KEYS */;
/*!40000 ALTER TABLE `nhac` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sach`
--

DROP TABLE IF EXISTS `sach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sach` (
  `id` int(11) NOT NULL,
  `tensach` varchar(255) DEFAULT NULL,
  `tensach_khongdau` varchar(255) DEFAULT NULL,
  `tacgia` varchar(255) DEFAULT NULL,
  `theloai` varchar(255) DEFAULT NULL,
  `duongdan` varchar(255) DEFAULT NULL,
  `idsach` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sach`
--

LOCK TABLES `sach` WRITE;
/*!40000 ALTER TABLE `sach` DISABLE KEYS */;
/*!40000 ALTER TABLE `sach` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sothich`
--

DROP TABLE IF EXISTS `sothich`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sothich` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(255) DEFAULT NULL,
  `tieude_khongdau` varchar(255) DEFAULT NULL,
  `urlHinh` varchar(255) DEFAULT NULL,
  `duongdan` varchar(255) DEFAULT NULL,
  `id_danhmuc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sothich`
--

LOCK TABLES `sothich` WRITE;
/*!40000 ALTER TABLE `sothich` DISABLE KEYS */;
INSERT INTO `sothich` VALUES (1,'In the end- Linkin Park',NULL,'../hinh/hqdefault.jpg','https://www.youtube.com/embed/eVTXPUF4Oz4',3),(2,'Numb - Linkin Park',NULL,'../hinh/hqdefault.jpg','https://www.youtube.com/embed/kXYiU_JCYtU',3);
/*!40000 ALTER TABLE `sothich` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-21  7:14:04
