-- MySQL dump 10.13  Distrib 8.0.14, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: middleafrica
-- ------------------------------------------------------
-- Server version	8.0.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `festivales`
--

DROP TABLE IF EXISTS `festivales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `festivales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `foto1` varchar(300) DEFAULT NULL,
  `foto2` varchar(300) DEFAULT NULL,
  `foto3` varchar(300) DEFAULT NULL,
  `paises_id` int(11) DEFAULT NULL,
  `descripcion_foto1` varchar(200) DEFAULT NULL,
  `descripcion_foto2` varchar(200) DEFAULT NULL,
  `descripcion_foto3` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `festivales`
--

LOCK TABLES `festivales` WRITE;
/*!40000 ALTER TABLE `festivales` DISABLE KEYS */;
INSERT INTO `festivales` VALUES (1,'festival de prueba','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','NC5nOptKvVXSareZ7nnmYWebuYHQAme6nyUnzQaX.jpeg','WhDMyG6uUcPUcoXqim7flXb5THuV2YxyiJ7omi2D.jpeg','UsLFtbSLZ4nKv6x4waHyPPV7d700pl1LbgqBTu3z.jpeg',1,'texto foto1','texto foto2','texto foto3'),(2,'festival de prueba','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','0','0','0',2,'texto foto1','texto foto2','texto foto3'),(4,'EWTESW',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `festivales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `highlight`
--

DROP TABLE IF EXISTS `highlight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `highlight` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paises_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `highlight`
--

LOCK TABLES `highlight` WRITE;
/*!40000 ALTER TABLE `highlight` DISABLE KEYS */;
INSERT INTO `highlight` VALUES (1,'titulo de prueba','tV2eLzkrF7jkxCsbwYRm9VfwFkZJm93FjEQPESvb.jpeg',1);
/*!40000 ALTER TABLE `highlight` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospedaje`
--

DROP TABLE IF EXISTS `hospedaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `hospedaje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `foto1` varchar(300) DEFAULT NULL,
  `foto2` varchar(300) DEFAULT NULL,
  `foto3` varchar(300) DEFAULT NULL,
  `paises_id` int(11) DEFAULT NULL,
  `descripcion_foto1` varchar(200) DEFAULT NULL,
  `descripcion_foto2` varchar(200) DEFAULT NULL,
  `descripcion_foto3` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospedaje`
--

LOCK TABLES `hospedaje` WRITE;
/*!40000 ALTER TABLE `hospedaje` DISABLE KEYS */;
INSERT INTO `hospedaje` VALUES (1,'hospedaje de prueba','S7i3GOwmAjHxC5KcmF0Q4EhBSPNUewRc9R5U9bIV.jpeg','ZjPllF1kN4sPmiZXx3wMC1z46VmaA9xQLWTY8JCy.jpeg','v5UPJ9pS6ZltJwHmNBsfsEOKenBnozEuFZsPI4ls.jpeg',1,'descripcion de hospedaje 1','descripcionde hospedaje 2','descripcion de hospedaje 3'),(2,'hospedaje cameroon',NULL,NULL,NULL,2,'descripcion de hospedaje 1','descricpion de hospedaje 2','desccripcion de hospedaje 3');
/*!40000 ALTER TABLE `hospedaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lugaresturisticos`
--

DROP TABLE IF EXISTS `lugaresturisticos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `lugaresturisticos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(300) DEFAULT NULL,
  `foto1` varchar(300) DEFAULT NULL,
  `foto2` varchar(300) DEFAULT NULL,
  `foto3` varchar(300) DEFAULT NULL,
  `foto4` varchar(300) DEFAULT NULL,
  `paises_id` int(11) DEFAULT NULL,
  `descripcion_foto1` varchar(200) DEFAULT NULL,
  `descripcion_foto2` varchar(200) DEFAULT NULL,
  `descripcion_foto3` varchar(200) DEFAULT NULL,
  `descripcion_foto4` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lugaresturisticos`
--

LOCK TABLES `lugaresturisticos` WRITE;
/*!40000 ALTER TABLE `lugaresturisticos` DISABLE KEYS */;
INSERT INTO `lugaresturisticos` VALUES (1,'lugar de prueba','BpGh09pS5lMLGJKHvKKMWSj5Xkx70OIvnUubemUC.jpeg','z5zD9w4rQw6BxWQARIJTNhaXWlSON01tUKGjIRco.jpeg','VfJulQj8E6kGa3lBZqdsVBIgPNr41h2VGRcVX81y.jpeg','fvtjpaLydS58nV0FcFFypl1stjLbGTx6lIVQoT7V.jpeg',1,'descripcion lugar turistico 1','descripcion lugar turistico 2','descripcion lugar turistico 3','descripcion lugar turistico 4');
/*!40000 ALTER TABLE `lugaresturisticos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (3,'2014_10_12_000000_create_users_table',1),(4,'2014_10_12_100000_create_password_resets_table',1),(5,'2020_09_29_000247_create_naturaleza_table',2),(6,'2020_09_30_170616_create_highlight_table',3),(7,'2020_09_30_170954_agregar_campos_a_highlight',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `naturaleza`
--

DROP TABLE IF EXISTS `naturaleza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `naturaleza` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion_foto1` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion_foto2` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion_foto3` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paises_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `naturaleza`
--

LOCK TABLES `naturaleza` WRITE;
/*!40000 ALTER TABLE `naturaleza` DISABLE KEYS */;
INSERT INTO `naturaleza` VALUES (1,'nombre de prueba','descripcion de prueba','pcb4q1KXM2uyl0ftJxg9ohiGNGDHC9V28jBScrDb.jpeg','5MIX9P20Zm5KLHgwvmnXLl3jW3ziUPpvSwAL4KG0.jpeg','3OiY6VMqVnMHkhMnE1da8lPATR81Ze7cVEGuE2jY.jpeg','descripcion foto1 de naturaleza','descripcion foto 2 de naturaleza','descripcion foto 3 de naturaleza',1);
/*!40000 ALTER TABLE `naturaleza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paises`
--

DROP TABLE IF EXISTS `paises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icono` varchar(200) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(3000) DEFAULT NULL,
  `naturaleza` varchar(45) DEFAULT NULL,
  `tribu` varchar(45) DEFAULT NULL,
  `festivales` varchar(45) DEFAULT NULL,
  `vehiculo` varchar(45) DEFAULT NULL,
  `lugaresTuristicos` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paises`
--

LOCK TABLES `paises` WRITE;
/*!40000 ALTER TABLE `paises` DISABLE KEYS */;
INSERT INTO `paises` VALUES (1,'1','Angola','Situated in Central Africa, west of Zambia and north of Namibia, Angola is\r\nslowly realizing its potential as a tourist hotspot, after decades of civil war\r\nfollowing independence from Portugal in 1975.\r\nAfrica’s most untouched tribes, virgin ecosystems, unique cultural heritage, a\r\nstunning coastline strung with beautiful sandy beaches, and a mountainous\r\ninterior that gives way to deep gorges and tumbling waterfalls, Angola offers a\r\nwide array of opportunities for tourism to its visitors. Cultural diversity and\r\nnatural beauty aside, the country also boasts a rich gastronomy (fusion between\r\nAfrican, Portuguese and Brazilian cuisines) with delicious culinary specialties\r\nand a people that are known for their hospitality and friendliness.\r\nAs Angola is opening up to the rest of the world, more and more people are\r\ntaking advantage of the wonderful landscapes and unique tribal groups. To get\r\nthe most out of your trip, book with Middle-Africa. We have been operating\r\nsince 2014 and have pioneered the spots along the whole of Angola. We are\r\nconstantly adapting our styles to assist our guests in having the best possible\r\ntravel experience in Angola.','1','1','1','1','1'),(2,'2','Cameroon','Travelling to Cameroon is like travelling around the entire African Continent. Cameroon’s\r\ngeographical situation, between Lake Chad and the Equatorial Forests, allows the traveller to\r\nadmire all kinds of flora, fauna, and cultural groups in one sole country. The size of France,\r\nCameroon offers diversity, security, and virginity. Middle-Africa is a travel agency specialised in\r\nCameroon travel and is based in Douala. Since 2005 we have been operating in Cameroon and\r\nneighbouring countries. Middle Africa has seen the great potentials of Cameroon as a travel\r\ndestination for tourists that appreciate countries that receive little tourism and can offer great\r\nexperiences.','2','2','2','2','2'),(3,'3','Central African Republic','Dzanga-Ndoki National Park is the best place in Africa to observe Western Lowland Gorillas on\r\nthe wild, forest elephants, bongo antelopes, and grey parrots. We have become specialists in\r\norganizing trips from Yaoundé and Bangui to Dzanga-Ndoki since we first visited this National\r\nPark in 2007. We loved the conservation project, where the local population fully participates in\r\nthe protection of the flora and fauna of Dzanga-Ndoki, and we saw a great potential, since all\r\nanimal lovers will want to visit Dzanga-Ndoki sooner or later. We subscribe to National\r\nGeographic’s description of Dzanga-Ndoki Reserve as ‘Last Paradise on Earth’.\r\nDzanga-Ndoki National Park is a member of the Tri-National Sangha complex, currently in the\r\nprocess to become a UNESCO World Heritage Site. Roundtrips to the other National Parks\r\n(Lobeke in Cameroon and Nouabalé-Ndoki in Congo) can be organized with ease.','3','3','3','3','3'),(4,'4','Chad','Middle-Africa is one of the few travel agencies specialised in organising trips to Chad. Travelling\r\nto Chad is not easy, but it is one of Africa’s most rewarding destinations. In the year 2011, Chad is\r\na virgin travel destination, and this is without doubt one of its main attractions. The traveller that\r\nvisits the amazing Ennedi desert, considered the Sahara’s most beautiful territories. In Middle-\r\nAfrica we propose 2 itineraries in Chad: a longer one to the Ennedi desert and a shorter one to Lake\r\nChad and the Kotoko adobe villages.','4','4','4','4','4'),(5,'5','Democratic Republic of Congo','--','5','5','5','5','5'),(6,'6','Equatorial Guinea','--','6','6','6','6','6'),(7,'7','Gabon','Middle-Africa is a travel agency specialised in organising trips to Central and Western Africa.\r\nSince 2007 we have been organising trips to Gabon, a diverse and stable eco-tourisim destination.\r\nWe consider Gabon a great travel destination for nature lovers, and for those travellers looking for\r\nvirgin and unspoiled territories. Wildlife rich forests cover 80% of Gabon’s landmass (11%\r\ndeclared National Parks), its vast picturesque coastline is predominantly wild and unspoiled, and its\r\ninland and coastal waters teem with myriad species of fish, reptiles and marine mammals. Gabon is\r\na rare and exotic tropical gem, yet tourism here still remains relatively undeveloped. Get ready to\r\ntravel to Gabon with us!','7','7','7','7','7'),(8,'8','Republic of Congo','Nouabalé-Ndoki National Park is situated in the north of the Republic of Congo\r\n(Congo-Brazzaville). Nouabalé-Ndoki National Park was created in 1993 to conserve,\r\nin its natural state, one of the last examples of an untouched wilderness in the world.\r\nCovering an area of just under 4,000 km2, nearly double the size of Luxembourg, the\r\nNouabalé-Ndoki National Park is one of the largest parks in the forested regions of\r\nCentral Africa. In 2007 we visited both Dzanga-Ndoki and Nouabalé-Ndoki National\r\nParks and we where thrilled to observe that there were enough infrastructures to offer\r\nthis wildlife destination to our clients. A unique place in Africa where humans can\r\neasily observe western lowland gorillas calmly eating in the same spot as forest\r\nelephants is the right image of how things should be in wild Africa. Hopefully,\r\nresponsible tourism practices will help on protecting jungle paradises such as Nouabalé-\r\nNdoki National Park.\r\nNouabalé-Ndoki National Park is a member of the Tri-National Sangha complex,\r\ncurrently in the process to become a UNESCO World Heritage Site. Roundtrips to the\r\nother National Parks (Lobeke in Cameroon and Dzanga-Ndoki in Central African\r\nRepublic) can be organized with ease.','8','8','8','8','8'),(9,'9','Sao Tome & Principe Islands','Sao Tome Island, also known as ‘the Forgotten Island’, host the city of Sao Tomé, the\r\narchipelago’s capital. This young republic was a Portuguese colony till 1975 and has\r\nkept a specific charm due to the architecture, the mixing of Latin and African blood, the\r\ndiversity of its landscape from tropical beaches to high volcanic mountains. The main\r\ninterests there are cultural, bird life, humid mountain forests, fishing, diving and\r\ntrekking.\r\nPríncipe Island lies north-east of Sao Tomé. It’s a place where dense rainforests teem\r\nwith exotic birds, where whales sport playfully off unspoiled, deserted beaches, where\r\ncrystal-clear waterfalls cascade into the azure blue ocean, and where the people are,\r\nabove all, friendly and happy to meet you. Príncipe’s extraordinary landscape, an\r\nirregular scattering of soaring volcanic peaks, is 70% covered by primary forest where\r\nup to 20% of trees, orchids and birds are said to be endemic. It has still been barely\r\ntouched by the island’s 5,000 inhabitants or the outside world.','9','9','9','9','9');
/*!40000 ALTER TABLE `paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tribu`
--

DROP TABLE IF EXISTS `tribu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tribu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `foto1` varchar(300) DEFAULT '0',
  `foto2` varchar(300) DEFAULT '0',
  `foto3` varchar(300) DEFAULT '0',
  `paises_id` int(11) DEFAULT NULL,
  `descripcion_foto1` varchar(200) DEFAULT NULL,
  `descripcion_foto2` varchar(200) DEFAULT NULL,
  `descripcion_foto3` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tribu`
--

LOCK TABLES `tribu` WRITE;
/*!40000 ALTER TABLE `tribu` DISABLE KEYS */;
INSERT INTO `tribu` VALUES (1,'tribu de prueba','descripcion de tribu de prueba','6SpXDtKAQ7JXV7G9SLqDt0gXabhIptu3gLjBglTs.jpeg','ww1Z5YCedsAEE23sZ0Y7oYrmHdOnDy5EQWirfESu.jpeg','A23UU0SFO4E9VDVmguIOXO0N5xiQh36lRQf8UM5R.jpeg',1,'descripcion de foto 1 de tribu','descripcion de foto de tribu 2','descripcion de foto de tribu 3');
/*!40000 ALTER TABLE `tribu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'administrador','admin@admin.com',NULL,'$2y$10$3D.mtTLo4kf/p1nBk3aGReUvJSK1774J228rewU3YUBdpmM8wNiva',NULL,'2020-10-02 19:22:40','2020-10-02 19:22:40');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-27 21:58:03
