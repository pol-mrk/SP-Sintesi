-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: bd_camisetaspol
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `tbl_camisetas`
--

DROP TABLE IF EXISTS `tbl_camisetas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_camisetas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `modelo_camiseta` varchar(50) NOT NULL,
  `descripcion_camiseta` varchar(250) NOT NULL,
  `color_camiseta` varchar(50) NOT NULL,
  `talla_camiseta` varchar(50) NOT NULL,
  `precio_camiseta` varchar(50) NOT NULL,
  `foto_camiseta` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_camisetas`
--

LOCK TABLES `tbl_camisetas` WRITE;
/*!40000 ALTER TABLE `tbl_camisetas` DISABLE KEYS */;
INSERT INTO `tbl_camisetas` VALUES (1,'Dream on D Major','Camiseta 100% algodón impresa mediante serigrafía.\r\nConsigue camisetas gratis comprando esta camiseta.','Negro','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod1.png'),(2,'Summer Sushi','Camiseta 100% algodón impresa mediante serigrafía.','Amarillo / Blanco','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod2.png'),(3,'The Shield','Camiseta 100% algodón impresa mediante serigrafía.','Negro','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod3.png'),(4,'Cookie Fiction','Camiseta 100% algodón impresa mediante serigrafía.','Azul oscuro','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod4.png'),(5,'Antisocial','Camiseta 100% algodón impresa mediante serigrafía.','Azul oscuro','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod5.png'),(6,'Take Over the Galaxy','Camiseta 100% algodón impresa mediante serigrafía.','Negro','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod6.png'),(7,'Hero on Sunset','Camiseta 100% algodón impresa mediante serigrafía.','Azul oscuro','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod7.png'),(8,'Find Yourself','Camiseta 100% algodón impresa mediante serigrafía.','Gris','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod8.png'),(9,'Ghost Stories','Camiseta 100% algodón impresa mediante serigrafía.','Negro','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod9.png'),(10,'Shrimp Company','Camiseta 100% algodón impresa mediante serigrafía.','Azul oscuro','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod10.png'),(11,'Tokyo Biker','Camiseta 100% algodón impresa mediante serigrafía.','Negro','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod11.png'),(12,'Mars Adventure Camp','Camiseta 100% algodón impresa mediante serigrafía.','Azul oscuro','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod12.png'),(13,'Running Club','Camiseta 100% algodón impresa mediante serigrafía.','Gris','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod13.png'),(14,'Moonlight Pilot','Camiseta 100% algodón impresa mediante serigrafía.','Negro','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod14.png'),(15,'Mushroom Graffiti','Camiseta 100% algodón impresa mediante serigrafía.','Gris','S, M, L, XL, 2XL, 3XL','11,90€','../img/prod15.png'),(16,'Thunder Light Bulb','Camiseta 100% algodón impresa mediante serigrafía.','Negro','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod16.png'),(17,'Electric Art','Camiseta 100% algodón impresa mediante serigrafía.','Blanco','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod17.png'),(18,'Gamers Never Quit','Camiseta 100% algodón impresa mediante serigrafía.','Azul oscuro','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod18.png'),(19,'Doctor Mon','Camiseta 100% algodón impresa mediante serigrafía.','Blanco','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod19.png'),(20,'Kame Kanji','Camiseta 100% algodón impresa mediante serigrafía.','Naranja','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod20.png'),(21,'Strange Magic','Camiseta 100% algodón impresa mediante serigrafía.','Negro','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod21.png'),(22,'Wonderful Witchcraft','Camiseta 100% algodón impresa mediante serigrafía.','Negro','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod22.png'),(23,'Prince of Gold','Camiseta 100% algodón impresa mediante serigrafía.','Negro','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod23.png'),(24,'Elf Archery','Camiseta 100% algodón impresa mediante serigrafía.','Blanco','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod24.png'),(25,'I Hate Morning People','Camiseta 100% algodón impresa mediante serigrafía.','Blanco','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod25.png'),(26,'Make a Smile','Camiseta 100% algodón impresa mediante serigrafía.','Negro','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod26.png'),(27,'Lowcost','Camiseta 100% algodón impresa mediante serigrafía.','Azul oscuro','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod27.png'),(28,'Dark Side of the Coffee','Camiseta 100% algodón impresa mediante serigrafía.','Negro','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod28.png'),(29,'One Beer To Rule Them All','Camiseta 100% algodón impresa mediante serigrafía.','Gris oscuro','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod29.png'),(30,'Campfire Tales Of Dial Up Internet','Camiseta 100% algodón impresa mediante serigrafía.','Negro','S, M, L, XL, 2XL, 3XL','14,90€','../img/prod30.png');
/*!40000 ALTER TABLE `tbl_camisetas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_user` varchar(50) NOT NULL,
  `apellido_user` varchar(50) NOT NULL,
  `telefono_user` varchar(50) NOT NULL,
  `email_user` varchar(250) NOT NULL,
  `pass_user` varchar(50) NOT NULL,
  `tipo_user` enum('Administrador','Cliente') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,'Juan Antonio','Cortés','627482943','juanantonio@cliente.com','12345','Cliente'),(3,'Jota','Díaz Torres','627482943','jota@cliente.com','67890','Cliente'),(4,'Pol Marc','Montero Roca','627482943','polmarcmontero@administrador.com','56789','Administrador'),(5,'Pol Marc','Montero Roca','627482943','davidhompanera@administrador.com','30201','Administrador');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-23 23:15:02
