-- Sample DB for MariaDB
--
-- Host: localhost    Database: mysqldb
-- ------------------------------------------------------

--
-- Table structure for table `tblDockerSample`
--

DROP TABLE IF EXISTS `tblDockerSample`;
CREATE TABLE `tblDockerSample` (
  `firstname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dockerSample`
--

LOCK TABLES `tblDockerSample` WRITE;
/*!40000 ALTER TABLE `tblDockerSample` DISABLE KEYS */;
INSERT INTO `tblDockerSample` VALUES ('John'),('Erika'),('Dennis');
/*!40000 ALTER TABLE `tblDockerSample` ENABLE KEYS */;
UNLOCK TABLES;
