-- MySQL dump 10.16  Distrib 10.3.9-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: tryingCMS
-- ------------------------------------------------------
-- Server version	10.3.9-MariaDB-1:10.3.9+maria~bionic-log

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Hello, this my first content!','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in leo ut magna laoreet feugiat ut in massa. Donec varius sed lacus eu vehicula. Praesent diam leo, feugiat id gravida ac, blandit elementum lacus. Praesent faucibus laoreet mattis. Nullam blandit libero posuere pretium convallis. In dui urna, pharetra non volutpat eu, consectetur quis tellus. Nam aliquam purus purus, eget hendrerit lectus scelerisque at. Vestibulum finibus vitae diam sagittis pulvinar. Proin sagittis, odio quis accumsan cursus, lectus lacus fringilla lacus, sed molestie turpis arcu tempor arcu. Maecenas vehicula leo quis nisl porta, ac sagittis ante rhoncus.</p><p>Donec ut placerat nunc, a luctus dui. Aenean in eros sit amet urna vulputate sagittis. Proin vehicula bibendum dapibus. Praesent fermentum, augue vel venenatis maximus, nisl mi finibus lectus, non tempus nisl ante vitae purus. Nam condimentum eget augue eget bibendum. In id nulla lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec viverra vel enim sed molestie. Nullam fringilla dignissim lorem, a hendrerit ante consequat a.</p><p>Quisque metus nisi, luctus nec lectus eu, tempor commodo lectus. In nec arcu sed nulla ullamcorper finibus eu quis turpis. Praesent nisi nunc, suscipit a enim et, faucibus commodo augue. Cras efficitur sed massa in viverra. Maecenas mi tortor, convallis ut efficitur id, pellentesque id nisl. Sed pretium lobortis lacinia. Proin non nisl fermentum, pulvinar risus eleifend, mollis neque.</p><p>Phasellus elementum eleifend tincidunt. Praesent bibendum malesuada est id dictum. Sed vel fringilla ipsum. Nam rhoncus, ante ac vehicula pellentesque, orci erat tristique nulla, eu euismod mauris ex non erat. Duis et euismod ipsum. Maecenas mattis ligula et eros semper imperdiet. Etiam nec interdum leo, tincidunt aliquet quam. Mauris at lobortis tortor. Fusce nec magna vel sem pulvinar feugiat volutpat sed augue.</p><p>Morbi eget ipsum eros. Praesent felis ligula, lacinia id mi id, gravida mattis magna. Fusce quis erat ut erat egestas posuere. Nam lacus dolor, semper sed ex sed, hendrerit suscipit dolor. In sed vestibulum metus, sed dapibus magna. Morbi imperdiet libero sem, at convallis arcu molestie eu. Suspendisse et quam lorem. Pellentesque auctor libero eget ultrices lobortis. Sed ac nibh ante. Donec interdum augue eu tellus aliquet malesuada.</p>','2018-09-08 19:03:00');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','8b6bc5d8046c8466359d3ac43ce362ab');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-10 10:10:24
