-- MySQL dump 10.16  Distrib 10.2.7-MariaDB, for osx10.12 (x86_64)
--
-- Host: localhost    Database: bootcamp
-- ------------------------------------------------------
-- Server version	10.2.7-MariaDB

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'POP','POP Music','2017-07-27 02:07:55'),(2,'ROCK','Rock Music','2017-07-27 02:08:32'),(3,'Dance','Dance Music','2017-07-27 02:08:49'),(4,'R\'n\'B','R\'n\'B Music','2017-07-27 02:09:12');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `track_id` int(11) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `body` blob DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'A','Good','2017-07-27 00:00:00'),(2,2,'B','Good','2017-07-27 00:00:00'),(3,3,'C','Good','2017-07-27 00:00:00'),(4,4,'D','Good','2017-07-27 00:00:00'),(5,1,'B','Bad','2017-07-27 00:00:00'),(6,2,'E','Bad','2017-07-27 00:00:00'),(7,4,'C','Bad','2017-07-27 00:00:00'),(8,5,'G','Bad','2017-07-27 00:00:00'),(9,3,'M','Good','2017-07-27 00:00:00'),(10,6,'A','Bad','2017-07-27 00:00:00');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `track`
--

DROP TABLE IF EXISTS `track`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `track` (
  `track_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `body` blob DEFAULT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`track_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `track`
--

LOCK TABLES `track` WRITE;
/*!40000 ALTER TABLE `track` DISABLE KEYS */;
INSERT INTO `track` VALUES (1,1,'There_for_you','My new single \'There For You\' with Troye Sivan out now!','Martin_Garrix&Troye_Sivan','2017-07-27 00:00:00','pNNMr5glICM'),(2,2,'Believer','Get Imagine Dragons’ new album Evolve, ft. ‘Believer,’ ‘Thunder,’ ‘Whatever It Takes’ and ‘Walking The Wire,’ out now: http://smarturl.it/EvolveID ','Imagine_Dragons','2017-07-27 00:00:00','7wtfhZwyrcc'),(3,3,'Islands','~ May Peace, Love And Wisdom Guides You ... Hahaha ~','Essential_Einaudi','2017-07-27 00:00:00','bb5wFnXJF7Y'),(4,4,'Strange_fruit','RnB Rare Live Footage of one of the firtst \n    anti rascism songs ever. good','Billie_Holiday','2017-07-27 00:00:00','h4ZyuULy9zs'),(5,4,'Lush_life','1963 album John Coltrane and Johnny Hartman','Johnny_Hartman','2017-08-02 09:42:53','0izjSUqCcSQ'),(6,1,'Whatever_it_takes','Get Imagine Dragons’ new album Evolve, ft. ‘Believer,’ ‘Thunder,’ ‘Whatever It Takes’ and ‘Walking The Wire,’ out now: http://smarturl.it/EvolveID ','Imagine_Dragons','2017-08-02 09:44:33','rGlEZpOVjGo'),(7,4,'God_bless_the_child','We McDonald\'s studio cover of \"God Bless the Child\" by Billie Holiday.','Billie_Holiday','2017-08-02 09:44:33','POWVA4FZsx0'),(8,3,'Believe','A sneak peek at every track on the album!','Jonathan_Antoine','2017-08-02 09:44:33','Q_sS7rSNaYA'),(9,4,'How_high_the_moon','One of Ella\'s eariler recording\'s of How High The Moon. ','Ella_Fitzgerald','2017-08-02 09:44:33','ntKwr_34MDI'),(10,2,'Thunder','Get Imagine Dragons’ new album Evolve, ft. ‘Believer,’ ‘Thunder,’ ‘Whatever It Takes’ and ‘Walking The Wire,’ out now: http://smarturl.it/EvolveID ','Imagine_Dragons','2017-08-02 09:44:33','fKopy74weus'),(11,2,'Feel_it_still','WOODSTOCK available now!','Portugal._The_Man','2017-08-02 09:44:52','pBkHHoOIIn8'),(12,2,'Heathens','twenty one pilots\' music video for ‘Heathens’ from Suicide Squad: The Album available now on Atlantic Records.','Twenty_One_Pilots','2017-08-02 09:44:52','UprcpdwuwCg'),(13,2,'In_the_end','Linkin Park\'s \"In The End\" off of the album HYBRID THEORY. Directed by Joe Hahn and Nathan \"Karma\" Cox.','Linkin_Park','2017-08-02 09:44:52','eVTXPUF4Oz4'),(14,2,'Numb','Linkin Park \"Numb\" off of the album METEORA. Directed by Joe Hahn.','Linkin_Park','2017-08-02 09:44:52','kXYiU_JCYtU'),(15,4,'Mack_the_knife','The melody, lyrics or picture belong to the right owners, not to me. I don\'t get any benefit for this in any direct or indirect way or benefit anyone by doing this. If you like the music, I encourage you to purchase original records.','Ella_Fitzgerald','2017-08-02 09:44:52','V8vbhXK-u_g'),(16,3,'Singing_my_dreams','Pre-order the debut album today https://carlypaoli.lnk.to/album','Carly_Paoli','2017-08-02 09:54:52','iJoppsVyMMw'),(17,4,'At_last','Any requests for more lyric videos please let me know by commenting below : )','Etta_James','2017-08-02 09:54:52','S-cbOl96RFM'),(18,1,'2U','BUY / LISTEN : https://Guetta.co/2U','David_Guetta&Justin_Bieber','2017-08-02 09:54:52','RqcjBLMaWCg'),(19,4,'What_a_wonderful_world','Good old song of Louis Armstrong - What a wonderful world.','Louis_Armstrong','2017-08-02 09:54:52','A3yCcXgbKrE'),(20,2,'Wish_I_knew_you','New album ‘Men Amongst Mountains’ available now!','The_Revivalists','2017-08-02 09:54:52','o0Pt7M0weUI'),(21,2,'Heavy','\"Heavy\" (feat. Kiiara). Directed by Tim Mattia.','Linkin_Prak&Kiiara','2017-08-02 09:54:54','5dmQ3QWpy1Q'),(22,4,'My_funny_valentine','Chet Baker - My Funny Valentine','Chet_Baker','2017-08-02 09:54:54','jvXywhJpOKs'),(23,1,'Ok','Get \"OK\" here: http://wmg.click/okAY','Robin_Schulz&James_Blunt','2017-08-02 09:54:54','P9-4xHVc7uk'),(24,4,'Girl_from_ipanema','The real deal is this.','Stan_Getz&Astrud_Gilberto','2017-08-02 09:54:54','UJkxFhFRFDA'),(25,1,'Know_no_better','THE NEW MAJOR LAZER EP - KNOW NO BETTER - LISTEN NOW ON YOUTUBE http://vid.io/xcQz','Major_Lazer&Travis_Scott','2017-08-02 09:54:54','DumuyU6SuaQ'),(26,4,'Fever','http://www.nuovacanaria.com/\nBonus Track cd 5','Peggy_Lee','2017-08-02 09:55:58','24O1IEOHlsk'),(27,3,'Elements','Ludovico Einaudi - Elements\nLive à la Maison de la Radio 13.12.2015','Ludovico_Einaudi','2017-08-02 09:55:58','P99h6iPRPN8'),(28,4,'Lullaby_of_birdland','Sarah Lois Vaughan was an American jazz singer described by music critic Scott Yanow as having one of the most wondrous voices of the 20th century.','Sarah_Vaughan','2017-08-02 09:55:58','S1mNPDwTo_o'),(29,3,'The_blue_notebooks','The Blue Notebooks 0:00\nOn the Nature of Daylight 1:20\nHorizon Variations 7:32','Max_Richter','2017-08-02 09:55:58','Nfy2fs01ZkI'),(30,1,'Tired','Listen to \"Tired\": https://AlanWalker.lnk.to/Tired\n\nFacebook: http://bit.ly/AlanWalker_Facebook','Alan_Walker&Gavin_James','2017-08-02 09:55:58','g4hGRvs6HHU');
/*!40000 ALTER TABLE `track` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-02 11:28:25
