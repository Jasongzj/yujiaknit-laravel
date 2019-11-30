-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: yujiaknit
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.18.04.4

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
-- Table structure for table `admin_menu`
--

DROP TABLE IF EXISTS `admin_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'Index','fa-bar-chart','/',NULL,NULL),(2,0,8,'Admin','fa-tasks','',NULL,'2018-11-29 09:28:00'),(3,2,9,'Users','fa-users','auth/users',NULL,'2018-11-29 09:28:00'),(4,2,10,'Roles','fa-user','auth/roles',NULL,'2018-11-29 09:28:00'),(5,2,11,'Permission','fa-ban','auth/permissions',NULL,'2018-11-29 09:28:00'),(6,2,12,'Menu','fa-bars','auth/menu',NULL,'2018-11-29 09:28:00'),(7,2,13,'Operation log','fa-history','auth/logs',NULL,'2018-11-29 09:28:00'),(8,0,2,'Products','fa-cube','/products','2018-11-29 09:25:56','2018-11-29 09:49:01'),(9,0,3,'Categories','fa-folder-open-o','/categories','2018-11-29 09:26:06','2018-11-29 09:49:14'),(10,0,4,'Colors','fa-dashboard','/colors','2018-11-29 09:26:33','2018-11-29 09:28:00'),(11,0,5,'News','fa-newspaper-o','/news','2018-11-29 09:26:56','2018-11-29 09:28:00'),(12,0,6,'Inquiries','fa-shopping-basket','/inquiries','2018-11-29 09:27:27','2018-11-29 09:48:31'),(13,0,7,'Subscriptions','fa-paper-plane-o','/subscriptions','2018-11-29 09:27:52','2018-11-29 09:28:00');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_operation_log`
--

DROP TABLE IF EXISTS `admin_operation_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_operation_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `admin_operation_log_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_operation_log`
--

LOCK TABLES `admin_operation_log` WRITE;
/*!40000 ALTER TABLE `admin_operation_log` DISABLE KEYS */;
INSERT INTO `admin_operation_log` VALUES (1,1,'admin','GET','116.25.40.205','[]','2018-11-29 09:24:54','2018-11-29 09:24:54'),(2,1,'admin/auth/menu','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:25:03','2018-11-29 09:25:03'),(3,1,'admin/auth/menu','POST','116.25.40.205','{\"parent_id\":\"0\",\"title\":\"Products\",\"icon\":\"fa-bars\",\"uri\":\"\\/products\",\"roles\":[null],\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\"}','2018-11-29 09:25:56','2018-11-29 09:25:56'),(4,1,'admin/auth/menu','GET','116.25.40.205','[]','2018-11-29 09:25:56','2018-11-29 09:25:56'),(5,1,'admin/auth/menu','POST','116.25.40.205','{\"parent_id\":\"0\",\"title\":\"Categories\",\"icon\":\"fa-bars\",\"uri\":\"\\/categories\",\"roles\":[null],\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\"}','2018-11-29 09:26:06','2018-11-29 09:26:06'),(6,1,'admin/auth/menu','GET','116.25.40.205','[]','2018-11-29 09:26:06','2018-11-29 09:26:06'),(7,1,'admin/auth/menu','POST','116.25.40.205','{\"parent_id\":\"0\",\"title\":\"Colors\",\"icon\":\"fa-dashboard\",\"uri\":\"\\/colors\",\"roles\":[null],\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\"}','2018-11-29 09:26:33','2018-11-29 09:26:33'),(8,1,'admin/auth/menu','GET','116.25.40.205','[]','2018-11-29 09:26:34','2018-11-29 09:26:34'),(9,1,'admin/auth/menu','POST','116.25.40.205','{\"parent_id\":\"0\",\"title\":\"News\",\"icon\":\"fa-newspaper-o\",\"uri\":\"\\/news\",\"roles\":[null],\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\"}','2018-11-29 09:26:56','2018-11-29 09:26:56'),(10,1,'admin/auth/menu','GET','116.25.40.205','[]','2018-11-29 09:26:56','2018-11-29 09:26:56'),(11,1,'admin/auth/menu','POST','116.25.40.205','{\"parent_id\":\"0\",\"title\":\"Inquiries\",\"icon\":\"fa-bars\",\"uri\":\"\\/Inquiries\",\"roles\":[null],\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\"}','2018-11-29 09:27:27','2018-11-29 09:27:27'),(12,1,'admin/auth/menu','GET','116.25.40.205','[]','2018-11-29 09:27:27','2018-11-29 09:27:27'),(13,1,'admin/auth/menu','POST','116.25.40.205','{\"parent_id\":\"0\",\"title\":\"Subscriptions\",\"icon\":\"fa-paper-plane-o\",\"uri\":\"\\/subscriptions\",\"roles\":[null],\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\"}','2018-11-29 09:27:52','2018-11-29 09:27:52'),(14,1,'admin/auth/menu','GET','116.25.40.205','[]','2018-11-29 09:27:53','2018-11-29 09:27:53'),(15,1,'admin/auth/menu','POST','116.25.40.205','{\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\",\"_order\":\"[{\\\"id\\\":1},{\\\"id\\\":8},{\\\"id\\\":9},{\\\"id\\\":10},{\\\"id\\\":11},{\\\"id\\\":12},{\\\"id\\\":13},{\\\"id\\\":2,\\\"children\\\":[{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6},{\\\"id\\\":7}]}]\"}','2018-11-29 09:28:00','2018-11-29 09:28:00'),(16,1,'admin/auth/menu','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:28:01','2018-11-29 09:28:01'),(17,1,'admin/auth/menu','POST','116.25.40.205','{\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\",\"_order\":\"[{\\\"id\\\":1},{\\\"id\\\":8},{\\\"id\\\":9},{\\\"id\\\":10},{\\\"id\\\":11},{\\\"id\\\":12},{\\\"id\\\":13},{\\\"id\\\":2,\\\"children\\\":[{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6},{\\\"id\\\":7}]}]\"}','2018-11-29 09:28:09','2018-11-29 09:28:09'),(18,1,'admin/auth/menu','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:28:09','2018-11-29 09:28:09'),(19,1,'admin/auth/menu','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:28:10','2018-11-29 09:28:10'),(20,1,'admin/auth/menu','GET','116.25.40.205','[]','2018-11-29 09:28:12','2018-11-29 09:28:12'),(21,1,'admin/products','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:28:17','2018-11-29 09:28:17'),(22,1,'admin/categories','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:28:24','2018-11-29 09:28:24'),(23,1,'admin/colors','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:28:35','2018-11-29 09:28:35'),(24,1,'admin/categories','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:28:37','2018-11-29 09:28:37'),(25,1,'admin/news','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:28:41','2018-11-29 09:28:41'),(26,1,'admin/news','GET','116.25.40.205','[]','2018-11-29 09:28:48','2018-11-29 09:28:48'),(27,1,'admin/subscriptions','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:28:50','2018-11-29 09:28:50'),(28,1,'admin/auth/menu','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:48:04','2018-11-29 09:48:04'),(29,1,'admin/auth/menu/12/edit','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:48:09','2018-11-29 09:48:09'),(30,1,'admin/auth/menu/12','PUT','116.25.40.205','{\"parent_id\":\"0\",\"title\":\"Inquiries\",\"icon\":\"fa-shopping-basket\",\"uri\":\"\\/inquiries\",\"roles\":[null],\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/www.yujiaknit.com\\/admin\\/auth\\/menu\"}','2018-11-29 09:48:31','2018-11-29 09:48:31'),(31,1,'admin/auth/menu','GET','116.25.40.205','[]','2018-11-29 09:48:32','2018-11-29 09:48:32'),(32,1,'admin/auth/menu/8/edit','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:48:40','2018-11-29 09:48:40'),(33,1,'admin/auth/menu/8','PUT','116.25.40.205','{\"parent_id\":\"0\",\"title\":\"Products\",\"icon\":\"fa-cube\",\"uri\":\"\\/products\",\"roles\":[null],\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/www.yujiaknit.com\\/admin\\/auth\\/menu\"}','2018-11-29 09:49:01','2018-11-29 09:49:01'),(34,1,'admin/auth/menu','GET','116.25.40.205','[]','2018-11-29 09:49:01','2018-11-29 09:49:01'),(35,1,'admin/auth/menu/9/edit','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 09:49:05','2018-11-29 09:49:05'),(36,1,'admin/auth/menu/9','PUT','116.25.40.205','{\"parent_id\":\"0\",\"title\":\"Categories\",\"icon\":\"fa-folder-open-o\",\"uri\":\"\\/categories\",\"roles\":[null],\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/www.yujiaknit.com\\/admin\\/auth\\/menu\"}','2018-11-29 09:49:14','2018-11-29 09:49:14'),(37,1,'admin/auth/menu','GET','116.25.40.205','[]','2018-11-29 09:49:14','2018-11-29 09:49:14'),(38,1,'admin/auth/menu','GET','116.25.40.205','[]','2018-11-29 09:49:17','2018-11-29 09:49:17'),(39,1,'admin/categories','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 10:08:04','2018-11-29 10:08:04'),(40,1,'admin/categories/3/edit','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 10:08:21','2018-11-29 10:08:21'),(41,1,'admin/inquiries','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 10:27:55','2018-11-29 10:27:55'),(42,1,'admin/inquiries/1','DELETE','116.25.40.205','{\"_method\":\"delete\",\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\"}','2018-11-29 10:28:00','2018-11-29 10:28:00'),(43,1,'admin/inquiries/1','DELETE','116.25.40.205','{\"_method\":\"delete\",\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\"}','2018-11-29 10:28:31','2018-11-29 10:28:31'),(44,1,'admin/inquiries','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 10:32:07','2018-11-29 10:32:07'),(45,1,'admin/inquiries/1','DELETE','116.25.40.205','{\"_method\":\"delete\",\"_token\":\"fkeY4sqHjpxjOpcmCp6Czyl47QhOL11atQH6Br9N\"}','2018-11-29 10:32:10','2018-11-29 10:32:10'),(46,1,'admin/inquiries','GET','116.25.40.205','{\"_pjax\":\"#pjax-container\"}','2018-11-29 10:32:11','2018-11-29 10:32:11');
/*!40000 ALTER TABLE `admin_operation_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_permissions`
--

DROP TABLE IF EXISTS `admin_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `http_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (1,'All permission','*','','*',NULL,NULL),(2,'Dashboard','dashboard','GET','/',NULL,NULL),(3,'Login','auth.login','','/auth/login\r\n/auth/logout',NULL,NULL),(4,'User setting','auth.setting','GET,PUT','/auth/setting',NULL,NULL),(5,'Auth management','auth.management','','/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs',NULL,NULL);
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_role_menu`
--

DROP TABLE IF EXISTS `admin_role_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_role_menu`
--

LOCK TABLES `admin_role_menu` WRITE;
/*!40000 ALTER TABLE `admin_role_menu` DISABLE KEYS */;
INSERT INTO `admin_role_menu` VALUES (1,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_role_permissions`
--

DROP TABLE IF EXISTS `admin_role_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_role_permissions`
--

LOCK TABLES `admin_role_permissions` WRITE;
/*!40000 ALTER TABLE `admin_role_permissions` DISABLE KEYS */;
INSERT INTO `admin_role_permissions` VALUES (1,1,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_role_users`
--

DROP TABLE IF EXISTS `admin_role_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_role_users`
--

LOCK TABLES `admin_role_users` WRITE;
/*!40000 ALTER TABLE `admin_role_users` DISABLE KEYS */;
INSERT INTO `admin_role_users` VALUES (1,1,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_roles`
--

DROP TABLE IF EXISTS `admin_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'Administrator','administrator','2018-11-29 09:24:34','2018-11-29 09:24:34');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_user_permissions`
--

DROP TABLE IF EXISTS `admin_user_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_user_permissions` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_user_permissions`
--

LOCK TABLES `admin_user_permissions` WRITE;
/*!40000 ALTER TABLE `admin_user_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','$2y$10$Ab1SmJ2bEyAuA1SRC90E/unTy4qSDQtUnAkmXzlFrfuXL1InwkGVS','Administrator',NULL,NULL,'2018-11-29 09:24:34','2018-11-29 09:24:34');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名称',
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '目录图标',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_name_index` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='目录表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (3,'POLO','categories/polo1.jpg',0,'2018-10-11 03:15:49','2018-10-11 03:15:49'),(4,'T-SHIRT','categories/spandex_t-shirt.jpg',0,'2018-10-11 03:17:44','2018-10-11 03:17:44'),(5,'VEST','categories/vest1.jpg',0,'2018-10-11 03:18:23','2018-10-11 03:18:23'),(6,'SWEATER','categories/basic_sweater.jpg',0,'2018-10-11 03:21:36','2018-10-11 03:21:36'),(7,'HOODY','categories/basic_hoody.jpg',0,'2018-10-11 03:21:57','2018-10-11 03:21:57'),(9,'LONG SLEEVES','categories/basic_long_sleeves.jpg',0,'2018-10-11 07:55:38','2018-10-11 07:55:38');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_color`
--

DROP TABLE IF EXISTS `category_color`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_color` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL COMMENT '品类id',
  `color_id` int(10) unsigned NOT NULL COMMENT '颜色id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='产品-颜色关系表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_color`
--

LOCK TABLES `category_color` WRITE;
/*!40000 ALTER TABLE `category_color` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_color` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_colors`
--

DROP TABLE IF EXISTS `category_colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL COMMENT '品类id',
  `color_id` int(10) unsigned NOT NULL COMMENT '颜色id',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='产品-颜色关系表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_colors`
--

LOCK TABLES `category_colors` WRITE;
/*!40000 ALTER TABLE `category_colors` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '颜色值名称',
  `rgb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'rgb 值',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序值',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='颜色表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
INSERT INTO `colors` VALUES (1,'Yellow','#ffe52b',0,'2018-10-11 07:59:10','2018-10-11 08:45:59'),(2,'Navy','#22395e',0,'2018-10-11 07:59:44','2018-10-11 07:59:44'),(3,'Orange','#ff6d00',0,'2018-10-11 08:00:20','2018-10-11 08:00:20'),(4,'Sky','#8cbed6',0,'2018-10-11 08:01:22','2018-10-11 08:01:22'),(5,'Lemon','#68ff47',0,'2018-10-11 08:02:01','2018-10-11 08:02:01'),(6,'Grey','#818287',0,'2018-10-11 08:02:44','2018-10-11 08:02:44'),(7,'Khaki','#a18e5d',0,'2018-10-11 08:03:44','2018-10-11 08:03:44'),(8,'Purple','#bb28bb',0,'2018-10-11 08:04:06','2018-10-11 08:04:06'),(9,'Pink','#d62597',0,'2018-10-11 08:04:43','2018-10-11 08:04:43'),(10,'Emerald','#00997b',0,'2018-10-11 08:05:20','2018-10-11 08:05:44'),(11,'Red','#f32f28',0,'2018-10-11 08:06:31','2018-10-11 08:06:31'),(12,'Green','#17b917',0,'2018-10-11 08:07:10','2018-10-11 08:07:10'),(13,'Blue','#0043cc',0,'2018-10-11 08:07:33','2018-10-11 08:07:33'),(14,'Black','#000000',0,'2018-10-11 08:07:53','2018-10-11 08:07:53'),(15,'White','#ffffff',0,'2018-10-11 08:08:18','2018-10-11 08:08:39');
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '名字',
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '姓氏',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '邮箱地址',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '联系电话',
  `continent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '所在大洲',
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '信息',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='意向联系表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inquiries`
--

DROP TABLE IF EXISTS `inquiries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inquiries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL COMMENT '商品id',
  `intential_products` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '意向产品',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '联系人',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '联系邮箱',
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '意向数量',
  `market` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '目标市场（xx, xx, xx）',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='询盘表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inquiries`
--

LOCK TABLES `inquiries` WRITE;
/*!40000 ALTER TABLE `inquiries` DISABLE KEYS */;
/*!40000 ALTER TABLE `inquiries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (34,'2014_10_12_000000_create_users_table',1),(35,'2014_10_12_100000_create_password_resets_table',1),(36,'2016_01_04_173148_create_admin_tables',1),(37,'2018_09_30_023959_create_categories_table',1),(38,'2018_09_30_030419_create_category_color_table',1),(39,'2018_09_30_032018_create_colors_table',1),(40,'2018_09_30_032356_create_contacts_table',1),(41,'2018_09_30_033701_create_inquiries_table',1),(42,'2018_09_30_034340_create_news_table',1),(43,'2018_09_30_035024_create_products_table',1),(44,'2018_09_30_035827_create_subscriptions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '标题',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '作者',
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '来源',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '概要',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '内容详情',
  `view_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '阅读数',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序值',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_view_count_index` (`view_count`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='新闻表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '商品名称',
  `category_id` int(10) unsigned NOT NULL COMMENT '所属品类id',
  `fabric` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '布料',
  `gsm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '原料成分',
  `attach` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '首图链接',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_index` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='产品表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (2,'Basic Polo',3,'Pique','180gsm','65%ployester 35%cotton',NULL,'products/basic_polo.jpg','2018-10-15 05:59:08','2018-10-15 05:59:08'),(3,'Single Jersey Polo',3,'single jersey','180gsm','100%cotton',NULL,'products/single_jersey_polo.jpg','2018-10-15 07:30:54','2018-10-15 07:30:54'),(4,'School Polo',3,'Pique','180gsm','100%ployester','children size','products/school_polo.jpg','2018-10-15 07:33:26','2018-10-15 07:33:26'),(5,'Staff Polo',3,'Pique','180gsm','65%ployester 35%cotton','embroider','products/staff_polo.jpg','2018-10-15 07:34:18','2018-10-15 07:34:18'),(6,'Basic T-shirt',4,'single jersey','160gsm','100%cotton',NULL,'products/basic_t-shirt.jpg','2018-10-15 07:52:14','2018-10-15 07:52:14'),(7,'Basic V-way T-shirt',4,'single jersey','160gsm','100%cotton',NULL,'products/basic_v-way_t-shirt.jpg','2018-10-15 08:06:41','2018-10-15 08:06:41'),(8,'Spendex T-shirt',4,'single jersey','160gsm','95%cotton 5%spendex',NULL,'products/spandex_t-shirt.jpg','2018-10-15 08:07:23','2018-10-15 08:07:23'),(9,'Basic Vest',5,'single jersey','160gsm','100%cotton',NULL,'products/basic_vest.jpg','2018-10-15 08:08:07','2018-10-15 08:08:07'),(10,'Ribbed Vest',5,'1x1 ribbed','160gsm','100%cotton',NULL,'products/ribbed_vest.png','2018-10-15 08:12:25','2018-10-15 08:12:25'),(11,'Girl Baby Vest',5,'single jersey','160gsm','100%cotton',NULL,'products/girl_baby_vest.png','2018-10-15 08:13:58','2018-10-15 08:13:58'),(12,'Boy Baby Vest',5,'single jersey','160gsm','100%cotton',NULL,'products/boy_baby_vest.png','2018-10-15 08:14:31','2018-10-15 08:14:31'),(13,'Basic Sweater',6,'brushed fleece','260gsm','100%cotton',NULL,'products/basic_sweater.jpg','2018-10-15 08:15:20','2018-10-15 08:15:20'),(14,'Winter Sweater',6,'polar fleece','260gsm','100%cotton',NULL,'products/winter_sweater.jpg','2018-10-15 08:16:22','2018-10-15 08:16:22'),(15,'Basic Hoody',7,'brushed fleece','260gsm','100%cotton',NULL,'products/basic_hoody.jpg','2018-10-15 08:16:59','2018-10-15 08:16:59'),(16,'Basic Sleeves',9,'single jersey','160gsm','100%cotton',NULL,'products/basic_long_sleeves.jpg','2018-10-15 08:18:28','2018-10-15 08:18:28'),(17,'Worker Long Sleeves',9,'single jersey','160gsm','65%ployester 35%cotton',NULL,'products/worker_long_sleeves.jpg','2018-10-15 08:19:25','2018-10-15 08:19:25'),(18,'Spendex V-way T-shirt',4,'single jersey','160gsm','95%cotton 5%spendex',NULL,'products/spandex_v-way_t-shirt.jpg','2018-10-15 08:21:38','2018-10-15 08:21:38');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '订阅邮箱',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='订阅表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2019-11-30 14:36:01
