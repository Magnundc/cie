CREATE DATABASE  IF NOT EXISTS `cie` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cie`;
-- MySQL dump 10.13  Distrib 5.5.52, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: cie
-- ------------------------------------------------------
-- Server version	5.5.52-0ubuntu0.12.04.1

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
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(100) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `atribuicoes` longtext,
  `data_rec_mec` date DEFAULT NULL,
  `data_deferimento` date DEFAULT NULL,
  `nivel` varchar(45) DEFAULT NULL,
  `data_validade` date DEFAULT NULL,
  `instituicao_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cursos_instituicao_idx` (`instituicao_id`),
  CONSTRAINT `fk_cursos_instituicao` FOREIGN KEY (`instituicao_id`) REFERENCES `instituicoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (2,'Engenharia Civil','Engenheiro Civil','Artigo 7 da Resolução 218/73 do Confea','0000-00-00','0000-00-00','Superior','0000-00-00',1),(3,'Engenharia Elétrica','Engenheiro Eletricista','Artigos 8 e 9 da Resolução 218/73 do Confea.','0000-00-00','0000-00-00','Superior',NULL,1);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inicio` date DEFAULT NULL,
  `fim` date DEFAULT NULL,
  `atribuicoes` longtext,
  `cursos_id` int(11) NOT NULL,
  `processo_def` varchar(45) DEFAULT NULL,
  `decisao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_grade_cursos1_idx` (`cursos_id`),
  CONSTRAINT `fk_grade_cursos1` FOREIGN KEY (`cursos_id`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grades`
--

LOCK TABLES `grades` WRITE;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;
INSERT INTO `grades` VALUES (1,'2000-01-01','2020-01-01','Artigo 7 da Resolução 218/73 do Confea',2,'70123/2016','145 CEEA de 21/10/2016');
/*!40000 ALTER TABLE `grades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instituicoes`
--

DROP TABLE IF EXISTS `instituicoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instituicoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `nome_abreviado` varchar(45) DEFAULT NULL,
  `data_registro` date DEFAULT NULL,
  `nivel_ensino` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `complemento_endereco` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instituicoes`
--

LOCK TABLES `instituicoes` WRITE;
/*!40000 ALTER TABLE `instituicoes` DISABLE KEYS */;
INSERT INTO `instituicoes` VALUES (1,'UNIVERSIDADE FEDERAL DE GOIÁS','UFG','2016-10-27','Superior','Praça Universitária','Qd. 86 Lt. Área','Setor Leste Universitário','Goiânia','74605901','622020325','secretaria@ufg.br'),(2,'Pontifícia Universidade Católica de Goiás','PUC','2016-10-21','Superior','Avenida Universitária 1069','','Setor Leste Universitário','Goiânia','74605010','6239461070','prope@pucgoias.edu.br'),(4,'UNIVERSIDADE CANDIDO MENDES','CANDIDO MENDES','2016-11-23','SUPERIOR','R MATO GROSSO','ASD','CENTRO','GOIANIA','74605070','132154654','ASDASD@GMAIL.COM'),(5,'INSTITUTO FEDERAL DE EDUCAÇÃO, CIÊNCIA E TECNOLOGIA DE GOIÁS','IFG','2011-07-08','Híbrido','Rua 75, 46','','SETOR CENTRAL','GOIÂNIA','74055110','6232272700','gabienete@ifg.edu.br'),(7,'UNIVERSIDADE PAULISTA','UNIP','2007-05-07','Superior','RODOVIA BR-153 KM 503',NULL,'FAZENDA BOTAFOGO','GOIÂNIA','74845090','6232394000','pedrofrugoli@unip.br');
/*!40000 ALTER TABLE `instituicoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `listasegresso`
--

DROP TABLE IF EXISTS `listasegresso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `listasegresso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_egresso` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `colacao` date DEFAULT NULL,
  `cursos_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lista_egresso_cursos1_idx` (`cursos_id`),
  CONSTRAINT `fk_lista_egresso_cursos1` FOREIGN KEY (`cursos_id`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `listasegresso`
--

LOCK TABLES `listasegresso` WRITE;
/*!40000 ALTER TABLE `listasegresso` DISABLE KEYS */;
INSERT INTO `listasegresso` VALUES (1,'Fulano Beltrano','12345678912','2016-11-07',2);
/*!40000 ALTER TABLE `listasegresso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contatos`
--

DROP TABLE IF EXISTS `contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contatos` (
  `idcontatos` int(11) NOT NULL AUTO_INCREMENT,
  `nome_contato` varchar(45) DEFAULT NULL,
  `cargo_contato` varchar(45) DEFAULT NULL,
  `email_contato` varchar(45) DEFAULT NULL,
  `instituicoes_id` int(11) NOT NULL,
  PRIMARY KEY (`idcontatos`),
  KEY `fk_contatos_instituicoes1` (`instituicoes_id`),
  CONSTRAINT `fk_contatos_instituicoes1` FOREIGN KEY (`instituicoes_id`) REFERENCES `instituicoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contatos`
--

LOCK TABLES `contatos` WRITE;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` VALUES (1,'João','Secretário','joao.secretario@ufg.br',1);
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-24 17:01:35
