-- MySQL dump 10.13  Distrib 5.7.32, for osx10.15 (x86_64)
--
-- Host: localhost    Database: keyBlank
-- ------------------------------------------------------
-- Server version	5.7.32

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
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `balance` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (1,'checking','2626.52'),(2,'savings','1110.37');
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `p1` longtext,
  `p2` longtext,
  `img_path` varchar(45) DEFAULT NULL,
  `small_text` varchar(255) DEFAULT NULL,
  `btn_text` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ads`
--

LOCK TABLES `ads` WRITE;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` VALUES (1,'Invest in Dogecoin Today!','Halve your investment in as little as 8 hours with the much wow of this many trustful doggo!','Dogecoin uses much innovation combined with all new \"good boy\" technology to bork the value of your monies.','Dogecoin.png','Current Value: 1 Dogecoin = 1 Dogecoin','Buy the Dip!'),(2, 'Need to secure your savings?', "Protect your life\'s earnings by storing it in our patented \"vouchers\" designed specifically for extracting the liquid assets of elderly citizens.", "We\'ve paired with Google to provide \"vouchers\"  through which we can retrieve your savings. Simply purchase as many Google Play Gift Cards as you can from any local store, and enter the provided codes using the link below to lock in your savings!", 'play.png', 'Exchanged \"vouchers\" are non-refundable and exchanging said \"voucher\" does not entitle you to any monetary compensation.', 'Redeem \"Vouchers\" Now!'), (3, 'Checking your bank too often?', 'Try setting a login cooldown on your bank account! This new subscription-based feature from KeyBlank allows you to control how often you can log in to your online bank account.', "This feature was developed to help combat our users\' compulsion to check their account far more often than necessary. For a small fee every month we can fight the urge for you! Why do something yourself when you can pay somebody else to do it for you?", 'clock.png', 'Login cooldown subscriptions start at $99.95/month', 'Subscribe Now!'), (4, 'Feeling Drained?', '', 'p2', 'carrot.png', 'small_text', 'btn_text'), (5, 'Want to be Your OWN BOSS?', 'Are you tired of working a 9 to 5 job? Do you want to travel the world, live the lifestyle you want, and get paid to do nothing? Then all you need to do is start a team here at NotAPryamidScheme Inc!', "Assemble a team of your friends & family to buy and sell our... product! You\'ll get paid for every sale they make, and they can even start their own teams! Everyone can live their dream by joining us here at NotAPyramidScheme Inc!", 'notAPyramidScheme.png', "Multi-Level Marketing is totally not a pyramid scheme... <br>We promise.", 'Join A Team Now!');
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transfers`
--

DROP TABLE IF EXISTS `transfers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transfers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bankType` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transfers`
--

LOCK TABLES `transfers` WRITE;
/*!40000 ALTER TABLE `transfers` DISABLE KEYS */;
/*!40000 ALTER TABLE `transfers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-23 14:29:53
