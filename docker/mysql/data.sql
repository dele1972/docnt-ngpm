-- Sample DB for MariaDB
--
-- Host: localhost    Database: mysqldb
-- ------------------------------------------------------

--
-- Table structure for table `tblDockerSample`
--

DROP TABLE IF EXISTS `mysqldb`.`tblDockerSample`;
CREATE TABLE `mysqldb`.`tblDockerSample` (
  `firstname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dockerSample`
--

LOCK TABLES `mysqldb`.`tblDockerSample` WRITE;
/*!40000 ALTER TABLE `tblDockerSample` DISABLE KEYS */;
INSERT INTO `mysqldb`.`tblDockerSample` VALUES ('John'),('Erika'),('Dennis');
/*!40000 ALTER TABLE `tblDockerSample` ENABLE KEYS */;
UNLOCK TABLES;
