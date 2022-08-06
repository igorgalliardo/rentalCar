-- MySQL dump 10.13  Distrib 8.0.20, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: rentalcar
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbcarro`
--

DROP TABLE IF EXISTS `tbcarro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbcarro` (
  `id_carro` int(11) NOT NULL AUTO_INCREMENT,
  `nome_carro` varchar(45) NOT NULL,
  `modelo_carro` varchar(45) NOT NULL,
  `ano_carro` int(11) NOT NULL,
  `cor_carro` varchar(45) NOT NULL,
  PRIMARY KEY (`id_carro`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbcarro`
--

LOCK TABLES `tbcarro` WRITE;
/*!40000 ALTER TABLE `tbcarro` DISABLE KEYS */;
INSERT INTO `tbcarro` VALUES (1,'Fusca','Hat',1981,'Branco'),(5,'Jippe Renegade','Jippe',2020,'Branco'),(3,'Uno','Fiat',2000,'Verde'),(6,'Fox','Volkwagen',2022,'Preto');
/*!40000 ALTER TABLE `tbcarro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbcliente`
--

DROP TABLE IF EXISTS `tbcliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbcliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(45) NOT NULL,
  `telefone_cliente` varchar(45) NOT NULL,
  `email_cliente` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbcliente`
--

LOCK TABLES `tbcliente` WRITE;
/*!40000 ALTER TABLE `tbcliente` DISABLE KEYS */;
INSERT INTO `tbcliente` VALUES (1,'Igor Silva','123456789','igorgalliardo@gmail.com'),(2,'Joao Ferreira da Silva','994333876','jfsilva@gmail.com'),(3,'Paola Eichemberge Lima','993333641','paolaeichembergue@gmail.com'),(6,'Vitor Henrique Galliardo da Silva','1999933378','vitor.henr1999@hotmail.com'),(5,'Thiago Eichembergue Lima','888888888','thiago.eichembergue@gmail.com'),(7,'Jose Alfim','111111111','jalfim@outlook.com.br');
/*!40000 ALTER TABLE `tbcliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbreservas`
--

DROP TABLE IF EXISTS `tbreservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbreservas` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente_reserva` int(11) NOT NULL,
  `id_carro_reserva` int(11) NOT NULL,
  `data_reserva` varchar(45) NOT NULL,
  `data_devolucao` varchar(45) NOT NULL,
  `valor_reserva` varchar(45) NOT NULL,
  PRIMARY KEY (`id_reserva`),
  KEY `id_carro_reserva_idx` (`id_carro_reserva`),
  KEY `id_cliente_reserva` (`id_cliente_reserva`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbreservas`
--

LOCK TABLES `tbreservas` WRITE;
/*!40000 ALTER TABLE `tbreservas` DISABLE KEYS */;
INSERT INTO `tbreservas` VALUES (3,1,1,'31/07/2022','05/08/2022','45'),(2,2,6,'05/08/2022','10/08/2022','890'),(6,6,1,'2022-10-11','2023-01-01','120000'),(5,3,5,'2022-08-16','2022-08-31','560');
/*!40000 ALTER TABLE `tbreservas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-06 18:59:52
