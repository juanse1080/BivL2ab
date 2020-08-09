-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: bivlab
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.04.1

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
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `pk_course` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_course`),
  UNIQUE KEY `courses_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datasets`
--

DROP TABLE IF EXISTS `datasets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datasets` (
  `pk_dataset` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_dataset`),
  UNIQUE KEY `datasets_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datasets`
--

LOCK TABLES `datasets` WRITE;
/*!40000 ALTER TABLE `datasets` DISABLE KEYS */;
/*!40000 ALTER TABLE `datasets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `education` (
  `pk_education` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `school` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date DEFAULT NULL,
  `fk_usr` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_education`),
  KEY `education_fk_usr_foreign` (`fk_usr`),
  CONSTRAINT `education_fk_usr_foreign` FOREIGN KEY (`fk_usr`) REFERENCES `usrs` (`pk_usr`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `education`
--

LOCK TABLES `education` WRITE;
/*!40000 ALTER TABLE `education` DISABLE KEYS */;
INSERT INTO `education` VALUES (1,'Université de Paris-Saclay','U2IS/Robotics-Vision, LIMSI-CNRS. Postdoctor','Postdoctor','2014-11-01','2016-05-01',1,'2019-06-11 08:39:58','2019-06-11 08:39:58'),(2,'NATIONAL UNIVERSITY OF COLOMBIA','Doctorate in Systems and Computing Engineering','Doctor','2010-02-01','2015-03-01',1,'2019-06-11 08:39:58','2019-06-11 08:39:58'),(3,'NATIONAL UNIVERSITY OF COLOMBIA','Biomedical','Master','2009-09-01','2007-02-01',1,'2019-06-11 08:39:58','2019-06-11 08:39:58'),(4,'UNIVERSITY OF PAMPLONA','Mechatronics Engineering','Undergrade','2001-01-01','2006-01-01',1,'2019-06-11 08:39:58','2019-06-11 08:39:58'),(5,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2014-08-27',NULL,3,'2019-06-11 08:51:12','2019-06-11 08:51:12'),(7,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','1996-01-15','2003-01-17',2,'2019-06-11 09:11:25','2019-06-11 09:11:25'),(8,'UPRM','Computer engineering','Master','2004-08-09','2007-06-15',2,'2019-06-11 09:14:19','2019-06-11 09:14:19'),(9,'Université de Nice Sophia-Antipolis','Computer Science','Doctor','2013-11-11','2017-06-16',2,'2019-06-11 09:17:27','2019-06-11 09:17:27'),(10,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2015-03-16',NULL,4,'2019-06-11 09:21:17','2019-06-11 09:21:17'),(11,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2015-08-31',NULL,5,'2019-06-11 09:24:36','2019-06-11 09:24:36'),(12,'UPRM','Systems Engineer','Undergraduate','2014-04-01',NULL,6,'2019-06-11 09:30:40','2019-06-11 09:30:40'),(13,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2015-08-31',NULL,7,'2019-06-11 09:32:44','2019-06-11 09:32:44'),(14,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2014-01-13',NULL,8,'2019-06-11 09:37:37','2019-06-11 09:37:37'),(15,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2011-09-06','2017-09-22',9,'2019-06-11 09:39:17','2019-06-11 09:39:17'),(16,'Universidad Industrial de Santander','Systems Engineer','Master','2018-08-06',NULL,9,'2019-06-11 09:41:23','2019-06-11 09:41:23'),(17,'Universidad Industrial de Santander','Electronic Engineer','Undergraduate','2012-02-25','2018-11-01',10,'2019-06-11 09:45:03','2019-06-11 09:45:03'),(18,'Universidad Industrial de Santander','Applied Mathematics','Master','2019-02-11',NULL,10,'2019-06-11 09:46:25','2019-06-11 09:46:25'),(19,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2014-10-06',NULL,11,'2019-06-11 09:47:37','2019-06-11 09:47:37'),(20,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2015-03-16',NULL,12,'2019-06-11 09:49:01','2019-06-11 09:49:01'),(21,'Universidad Industrial de Santander','Electronic Engineer','Undergraduate','2006-07-20','2012-12-12',13,'2019-06-11 09:52:52','2019-06-11 09:52:52'),(22,'Universidad Industrial de Santander','Electronic Engineer','Master','2013-07-01','2016-07-01',13,'2019-06-11 09:54:09','2019-06-11 09:54:09'),(23,'Universidad Industrial de Santander','Mathematics','Undergraduate','2016-01-04',NULL,14,'2019-06-11 09:55:16','2019-06-11 09:55:16'),(24,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2015-09-12',NULL,15,'2019-06-11 10:12:42','2019-06-11 10:12:42'),(25,'Universidad Industrial de Santander','Electronic Engineer','Undergraduate','2012-10-01','2017-12-15',16,'2019-06-11 10:13:51','2019-06-11 10:13:51'),(26,'Universidad Industrial de Santander','Systems Engineer','Master','2018-02-01',NULL,16,'2019-06-11 10:14:38','2019-06-11 10:14:38'),(27,'Universidad Industrial de Santander','Mathematics','Undergraduate','2015-10-20',NULL,17,'2019-06-11 10:15:38','2019-06-11 10:15:38'),(28,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2015-03-16',NULL,18,'2019-06-11 10:18:23','2019-06-11 10:18:23'),(29,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2013-11-03','2018-06-12',19,'2019-06-11 10:22:08','2019-06-11 10:22:08'),(30,'Universidad Industrial de Santander','Systems Engineer','Master','2018-08-10',NULL,19,'2019-06-11 10:23:46','2019-06-11 10:23:46'),(31,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2015-08-31',NULL,20,'2019-06-11 10:32:20','2019-06-11 10:32:20'),(32,'Universidad Industrial de Santander','Systems Engineer','Undergraduate','2014-10-06',NULL,21,'2019-06-11 12:55:53','2019-06-11 12:55:53');
/*!40000 ALTER TABLE `education` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lines`
--

DROP TABLE IF EXISTS `lines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lines` (
  `pk_line` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_line`),
  UNIQUE KEY `lines_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lines`
--

LOCK TABLES `lines` WRITE;
/*!40000 ALTER TABLE `lines` DISABLE KEYS */;
INSERT INTO `lines` VALUES (1,'Imaging and Inverse Problems','1','2019-06-11 08:39:57','2019-06-11 08:39:57'),(2,'Motion Understanding','2','2019-06-11 08:39:57','2019-06-11 08:39:57'),(3,'Learning and Image Representation','3','2019-06-11 08:39:57','2019-06-11 08:39:57');
/*!40000 ALTER TABLE `lines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_100000_create_password_resets_table',1),(2,'2019_05_30_105230_create_usrs_table',1),(3,'2019_05_30_105250_create_datasets_table',1),(4,'2019_05_30_105255_create_projects_table',1),(5,'2019_05_30_105257_create_resources_table',1),(6,'2019_05_30_105328_create_sub_lines_table',1),(7,'2019_05_30_105333_create_lines_table',1),(8,'2019_05_30_105344_create_news_table',1),(9,'2019_05_30_105350_create_courses_table',1),(10,'2019_05_30_110353_create_education_table',1),(11,'2019_05_30_200055_create_sessions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `pk_new` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_new`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `production_dataset`
--

DROP TABLE IF EXISTS `production_dataset`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `production_dataset` (
  `pk_dataset` int(10) unsigned NOT NULL,
  `pk_production` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pk_dataset`,`pk_production`),
  KEY `production_dataset_pk_production_foreign` (`pk_production`),
  CONSTRAINT `production_dataset_pk_dataset_foreign` FOREIGN KEY (`pk_dataset`) REFERENCES `datasets` (`pk_dataset`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `production_dataset_pk_production_foreign` FOREIGN KEY (`pk_production`) REFERENCES `productions` (`pk_production`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `production_dataset`
--

LOCK TABLES `production_dataset` WRITE;
/*!40000 ALTER TABLE `production_dataset` DISABLE KEYS */;
/*!40000 ALTER TABLE `production_dataset` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `production_sublines`
--

DROP TABLE IF EXISTS `production_sublines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `production_sublines` (
  `pk_production` int(10) unsigned NOT NULL,
  `pk_subline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pk_production`,`pk_subline`),
  KEY `production_sublines_pk_subline_foreign` (`pk_subline`),
  CONSTRAINT `production_sublines_pk_production_foreign` FOREIGN KEY (`pk_production`) REFERENCES `productions` (`pk_production`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `production_sublines_pk_subline_foreign` FOREIGN KEY (`pk_subline`) REFERENCES `sublines` (`pk_subline`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `production_sublines`
--

LOCK TABLES `production_sublines` WRITE;
/*!40000 ALTER TABLE `production_sublines` DISABLE KEYS */;
INSERT INTO `production_sublines` VALUES (8,1),(9,1),(8,2),(3,4),(4,4),(1,6),(2,6),(7,6),(10,6),(5,7),(6,7);
/*!40000 ALTER TABLE `production_sublines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `production_usr`
--

DROP TABLE IF EXISTS `production_usr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `production_usr` (
  `pk_usr` int(10) unsigned NOT NULL,
  `pk_production` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pk_usr`,`pk_production`),
  KEY `production_usr_pk_production_foreign` (`pk_production`),
  CONSTRAINT `production_usr_pk_production_foreign` FOREIGN KEY (`pk_production`) REFERENCES `productions` (`pk_production`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `production_usr_pk_usr_foreign` FOREIGN KEY (`pk_usr`) REFERENCES `usrs` (`pk_usr`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `production_usr`
--

LOCK TABLES `production_usr` WRITE;
/*!40000 ALTER TABLE `production_usr` DISABLE KEYS */;
INSERT INTO `production_usr` VALUES (1,1),(21,1),(22,1),(1,2),(10,2),(20,2),(13,3),(13,4),(1,5),(19,5),(1,6),(16,6),(1,7),(22,7),(1,8),(5,8),(16,8),(1,9),(5,9),(1,10),(7,10),(19,10);
/*!40000 ALTER TABLE `production_usr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productions`
--

DROP TABLE IF EXISTS `productions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productions` (
  `pk_production` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `external` tinyint(1) NOT NULL DEFAULT '0',
  `ext_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_project` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_production`),
  KEY `productions_fk_project_foreign` (`fk_project`),
  CONSTRAINT `productions_fk_project_foreign` FOREIGN KEY (`fk_project`) REFERENCES `projects` (`pk_project`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productions`
--

LOCK TABLES `productions` WRITE;
/*!40000 ALTER TABLE `productions` DISABLE KEYS */;
INSERT INTO `productions` VALUES (1,'Paper','Towards clinical significance prediction using k trans evidences in prostate cancer',0,NULL,'storage/productions/towards_clinical_significance_prediction_using_k_trans_evidences_in_prostate_cancer_.jpeg','https://github.com/yesid08/Prostatex-1/tree/master/Notebooks','Dataset: https://wiki.cancerimagingarchive.net/display/Public/SPIE-AAPM-NCI+PROSTATEx+Challenges\r\n\r\nCurrently, Ktrans coefficient maps have emerged to characterize tumor biology and treatment response. Salient localized coefficient on Ktrans allows to detect and localize tumor regions from non-invasive MRI scanners. Nevertheless, such identified lesions on Ktrans maps are highly variable and in much of the cases result in false positive indicators. In this work a set of labeled Ktrans regions are processed into a supervised framework to correctly find true positive regions that are prostate cancer indicators. Three different algorithms were implemented to perform the classification: K-Nearest Neighbors (k-NN), Support vector machine (SVM), and Random forest (RaF). On a public dataset with 339 Ktrans images on peripheral, transitional and anterior fibromuscular stroma regions, the SVM achieved an average accuracy of 80.83% with a ROC AUC of 0.68 on true evidence identification.','storage/productions/towards_clinical_significance_prediction_using_k_trans_evidences_in_prostate_cancer_.pdf',2,'2019-06-11 13:06:50','2019-06-11 13:06:50'),(2,'Paper','Automatic polyp detection from a regional appearance model and a robust dense Hough coding',0,NULL,'storage/productions/automatic_polyp_detection_from_a_regional_appearance_model_and_a_robust_dense_hough_coding_.png','https://github.com','Polyps are the main biomarker to diagnose colorectal cancer. These polyps are protuberant masses that namely appear around intestinal tract. Currently, the automatic polyp detection is a challenging task because the high shape and appearance variability. Additionally, the videos captured during colonoscopies are namely distorted because the clinical procedure, presenting strong camera motions and illumination changes. This work introduces an automatic strategy to detect polyps by using a pixel level characterization of orientation and curvatures, which are coded using a dense Hough transform. Because the complexity of polyp modelling, an additional appearance model was herein implemented, allowing to filter and to find potential polyp regions. The proposed strategy was evaluated over real sequences of ASU-Mayo Clinic Colonoscopy Video dataset, reporting in average 81% of precision on polyp detection task. This strategy is also able to online track polyps in long sequences, requiring only a first frame delineation.\r\n\r\nDataset: https://polyp.grand-challenge.org/AsuMayo/','storage/productions/automatic_polyp_detection_from_a_regional_appearance_model_and_a_robust_dense_hough_coding_.pdf',6,'2019-06-11 13:47:33','2019-06-11 13:47:33'),(3,'Paper','A Maximum Power Point Tracking Algorithm for Photovoltaic Systems under Partially Shaded Conditions',1,'María Alejandra Mantilla , Jaime Barrero Perez, Johan Petitt Suarez, Gabriel Ordoñez Plata.','storage/productions/a_maximum_power_point_tracking_algorithm_for_photovoltaic_systems_under_partially_shaded_conditions_.jpeg','https://github.com','This paper shows a modification of the traditional ‘perturb and observe’ algorithm used to the maximum power point tracking in photovoltaic systems. The proposal is justified by the need of algorithms to track the global maximum power point in solar panels connected in series under partially shaded conditions. The proposal tracks the global maximum power point avoiding the previous iterative search in local maximums. The algorithm performance is evaluated by simulations in the software PSIM and its behavior is compared with the traditional perturb and observe algorithm. The results show the outstanding performance of the modified algorithm in the tracking of the global maximum power point under different non uniform conditions of temperature and irradiance in the solar array.','storage/productions/a_maximum_power_point_tracking_algorithm_for_photovoltaic_systems_under_partially_shaded_conditions_.pdf',9,'2019-06-11 13:55:05','2019-06-11 13:55:05'),(4,'Paper','Prototype for the Characterization of Photovoltaic Panels based on a SEPIC Converter',1,'Jose Chacón, Reynaldo Ortiz, María Mantilla, Monica Botero, Johan Petitt','storage/productions/prototype_for_the_characterization_of_photovoltaic_panels_based_on_a_sepic_converter_.jpeg','https://github.com','This paper presents the design and implementation of a prototype based on a SEPIC (Single-Ended Primary Inductance Converter) used to measure the characteristic curves of photovoltaic (PV) panels. The SEPIC is controlled to emulate a variable resistance at the output ofthe PV panel in order to obtain a set of values (voltages and currents) for different operating points at the output of the paneL The set of voltages and currents are stored and sent to a computer in order to display the characteristic curves in real-time. The performance of the prototype is fIrstly evaluated though simulations in PSIM and subsequently by experimental results. The results show the outstanding performance of the SEPIC converter and its suitable use for this kind of applications due to its low input current ripple and its operation as a buck-boost converter. The resulting prototype allows the characterization of PV panels up to 500 W.','storage/productions/prototype_for_the_characterization_of_photovoltaic_panels_based_on_a_sepic_converter_.pdf',9,'2019-06-11 13:57:37','2019-06-11 13:57:37'),(5,'Paper','A kinematic gesture representation based on Shape Difference VLAD for Sign language recognition',0,NULL,'storage/productions/a_kinematic_gesture_representation_based_on_shape_difference_vlad_for_sign_language_recognition_.png','https://github.com','Deaf community and people with some auditive limitation around world is\r\nestimated in more than 466 millions according to world health organization\r\n(WHO) [3]. This community had achieved to structure different natural sign languages as spatio-temporal gestures, developed by articulated motions of upper\r\nlimbs that together with facial expressions and trunk postures allows communication and interaction','storage/productions/a_kinematic_gesture_representation_based_on_shape_difference_vlad_for_sign_language_recognition_.pdf',12,'2019-06-11 14:40:23','2019-06-11 14:40:23'),(6,'Paper','Parkinsonian Ocular Fixation Patterns from Magnified Videos and CNN Features.',0,'Prof. Said Pertuz, Médico William Contreras.','storage/productions/parkinsonian_ocular_fixation_patterns_from_magnified_videos_and_cnn_features._.png','https://github.com','Recent neurological studies suggest that oculomotor alterations are one of the most important biomarkers to detect and characterize Parkinson\'s disease (PD), even on asymptomatic stages. Nevertheless, only global and simplified gaze trajectories, obtained from tracking devices, are generally used to represent the complex eye dynamics. Besides, such acquisition procedures often require sophisticated calibration and invasive configuration schemes. This work introduces a novel approach for the utilization of very subtle ocular fixational movements, recorded with conventional cameras, as an imaging biomarker for PD assessment. For this purpose, an acceleration video magnification is performed to enhance small fixational patterns on standard gaze video recordings of test subjects. Subsequently, feature maps are derived from spatio-temporal video slices by means of convolutional layer responses of known pre-trained CNN architectures, allowing to describe the depicted oculomotor cues. The set of extracted CNN features are then efficiently coded by means of covariance matrices in order to train a support vector machine and perform an automated disease classification. Promising results were obtained through a leave-one-patient-out cross-validation scheme, showing a proper PD characterization from fixational eye motion patterns in ordinary sequences.','storage/productions/parkinsonian_ocular_fixation_patterns_from_magnified_videos_and_cnn_features._.pdf',13,'2019-06-11 14:46:22','2019-06-11 14:46:22'),(7,'Paper','A fast action recognition strategy based on motion trajectory occurrences',0,NULL,'storage/productions/a_fast_action_recognition_strategy_based_on_motion_trajectory_occurrences_.jpeg','https://github.com','Datasets: Link de los datos utilizados para el desarrollo del producto.\r\n1) KTH dataset\r\nhttp://www.nada.kth.se/cvap/actions/\r\n\r\n2) UT-Interaction dataset\r\nhttp://cvrc.ece.utexas.edu/SDHA2010/Human_Interaction.html\r\n\r\n3) Weizmann dataset\r\nhttp://www.wisdom.weizmann.ac.il/~vision/SpaceTimeActions.html\r\n\r\nA few light stimuli coherently distributed in the space and time are the essential input that a visual system needs to perceive motion. Inspired in such fact, a compact motion descriptor is herein proposed to describe patterns of neighboring trajectories for human action recognition. The proposed method introduces a strategy that models the local distribution of neighboring points by defining a spatial point process around motion trajectories. Particularly, a two-level occurrence analysis is carried out to discover motion patterns that underlying on trajectory points representation. Firstly, local occurrence words are computed over a circular grid layout that is centered in a fixed position for each trajectory. Then, a regional occurrence description is achieved by representing actions as the most frequent local words that occur in a particular video. This second occurrence layer could be computed for the entire video or by each frame to achieve an online recognition. This compact descriptor, with local size of 72 and sequence descriptor size of 400, acquires importance in real-time applications and environments with hardware restrictions. The proposed strategy was evaluated on KTH and Weizmann dataset, achieving an average accuracy of 91.2% and 78%, respectively. Moreover, a further online recognition was performed over UT-Interaction achieving an accuracy of 67% by using only the first 25% of video sequences.','storage/productions/a_fast_action_recognition_strategy_based_on_motion_trajectory_occurrences_.pdf',14,'2019-06-11 14:56:46','2019-06-11 14:56:46'),(8,'Paper','Lagrangian center of mass (CoMt) magnification to stand out main parkinsonian gait events.',0,NULL,'storage/productions/lagrangian_center_of_mass_(comt)_magnification_to_stand_out_main_parkinsonian_gait_events._.png','https://github.com','Gait  analysis  is  crucial  in  Parkinson’s  disease  (PD)diagnosis  to  clinically  observe  and  quantify  abnormal  motorpatterns.   A   primary   gait   biomarker   is   the   center   of   masstrajectory (CoMt) that express the global coordination of forces,neuromotor  commands  and  musculoskeletical  poses.  Also,  fromsuch trajectories is possible to analyze main locomotion moments(LM),   such   as   forefoot,   midfoot   and   heel   strike,   commonlyaltered  in  PD.  However,  the  CoMtrequires  additional  devices,e.g.  force  platforms,  limited  to  only  a  few  steps  or  markersassociated  in  video  analysis  but  altering  the  natural  motiongesture  and  losing  description  of  LM.  This  work  introducesa  markerless  approach  to  compute  the  CoMtfollowed  by  aLagrangian global magnification. Additionally, a magnified videoreconstruction  allows  to  better  observe  gait  patterns,  useful  formedical observation analysis. The Evaluation was performed ona  control  (7  patients)  and  PD  (7  patients)  video  set,  achieving  aproper  LM  description  w.r.t  raw  CoMtcaptured  in  videos.Index  Terms—Center  of  Mass  Magnification,  ParkinsonianMovements,  Lagrangian  Motion  Magnification','storage/productions/lagrangian_center_of_mass_(comt)_magnification_to_stand_out_main_parkinsonian_gait_events._.pdf',19,'2019-06-11 15:09:51','2019-06-11 15:09:51'),(9,'Paper','Analysis of worn surface images using gradient-based descriptors',0,'Cristian Víafara','storage/productions/analysis_of_worn_surface_images_using_gradient-based_descriptors_.jpeg','https://github.com','Failures of mechanical systems are strongly relatedwith  wear  of  interacting  surfaces  in  machine  elements.  Hence,wear monitoring is fundamental to avoid energy and time losses,as well as to prevent definite failures on machines. Wear monitor-ing can be achieved by capturing worn surfaces images, in whichmass losses are represented as non-uniform texture patterns. Thiswork introduces a computational framework to characterize andpredict  mild  or  severe  wear  regimes  by  using  gradient-baseddescriptors. The HoG and Daisy descriptors were used to codifywear  morphologies  of  worn  surfaces  images.  Once  images  werecoded  as  gradient  patterns,  the  corresponding  descriptors  weremapped to a previously trained Support Vector Machine (SVM),allowing  to  automatically  associate  a  wear  regime  label.  A  setof  Scanning  Electron  Microscopy  (SEM)  images  of  abrasionworn  surfaces  were  used  to  validate  this  work.  The  proposedframework achieves accuracy results of94%and96%using theHog  and  Daisy  descriptors,  respectively.Wear  monitoring,  Abrasive  wear  regimes,  HoG  descriptor,Daisy  descriptor.','storage/productions/analysis_of_worn_surface_images_using_gradient-based_descriptors_.pdf',20,'2019-06-11 15:15:09','2019-06-11 15:15:09'),(10,'Paper','Regional multiscale motion representation for cardiac disease prediction',0,NULL,'storage/productions/regional_multiscale_motion_representation_for_cardiac_disease_prediction_.png','https://github.com/AlejandraM97/STSIVA-CODE','Heart characterization is a challenging task due to the non-linear dynamic performance and the strong shape deformation during the cardiac cycle. This work presents a regional multiscale motion representation of cardiac structures that is able to recognize pathologies on cine-MRI sequences. Firstly, a dense optical flow that considers large displacements was computed to obtain a velocity field representation. Then, regional dynamic patterns are coded into a multiscale scheme, from coarse to fine, emerging the most relevant cardiac patterns that remain along the different scales. The resulting motion descriptor is then formed by a set of flow orientation occurrences computed in whole multiscale regions. This descriptor is mapped to a previously trained Random forest classifier to obtain a prediction of the cardiac condition. The proposed strategy was evaluated over a set of 45 cine-MRI volumes achieving an average F1-score of  77.83% on the task of binary classification of among fourth cardiac conditions.\r\n\r\nDataset: https://smial.sri.utoronto.ca/LV_Challenge/Home.html','storage/productions/regional_multiscale_motion_representation_for_cardiac_disease_prediction_.pdf',21,'2019-06-11 15:19:52','2019-06-11 15:19:52');
/*!40000 ALTER TABLE `productions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_sublines`
--

DROP TABLE IF EXISTS `project_sublines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_sublines` (
  `pk_project` int(10) unsigned NOT NULL,
  `pk_subline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pk_project`,`pk_subline`),
  KEY `project_sublines_pk_subline_foreign` (`pk_subline`),
  CONSTRAINT `project_sublines_pk_project_foreign` FOREIGN KEY (`pk_project`) REFERENCES `projects` (`pk_project`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `project_sublines_pk_subline_foreign` FOREIGN KEY (`pk_subline`) REFERENCES `sublines` (`pk_subline`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_sublines`
--

LOCK TABLES `project_sublines` WRITE;
/*!40000 ALTER TABLE `project_sublines` DISABLE KEYS */;
INSERT INTO `project_sublines` VALUES (19,1),(11,2),(19,2),(3,4),(5,4),(9,4),(17,4),(3,5),(13,5),(2,6),(6,6),(11,6),(14,6),(16,6),(21,6),(3,7),(7,7),(8,7),(10,7),(11,7),(12,7),(18,7),(20,7),(1,8),(4,8),(7,8),(8,8),(18,8),(20,8),(13,9);
/*!40000 ALTER TABLE `project_sublines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_usr`
--

DROP TABLE IF EXISTS `project_usr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_usr` (
  `pk_project` int(10) unsigned NOT NULL,
  `pk_usr` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pk_project`,`pk_usr`),
  KEY `project_usr_pk_usr_foreign` (`pk_usr`),
  CONSTRAINT `project_usr_pk_project_foreign` FOREIGN KEY (`pk_project`) REFERENCES `projects` (`pk_project`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `project_usr_pk_usr_foreign` FOREIGN KEY (`pk_usr`) REFERENCES `usrs` (`pk_usr`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_usr`
--

LOCK TABLES `project_usr` WRITE;
/*!40000 ALTER TABLE `project_usr` DISABLE KEYS */;
INSERT INTO `project_usr` VALUES (1,1),(2,1),(3,1),(4,1),(6,1),(7,1),(8,1),(11,1),(12,1),(13,1),(14,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(3,3),(7,4),(19,5),(20,5),(18,6),(21,7),(5,9),(16,11),(4,12),(9,13),(10,13),(11,13),(8,14),(12,15),(13,16),(1,17),(17,18),(12,19),(6,20),(2,21),(14,22);
/*!40000 ALTER TABLE `project_usr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `pk_project` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_project`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Undergraduate','Análisis topológico de primitivas cinemáticas para el modelamiento del Parkinson','storage/projects/análisis_topológico_de_primitivas_cinemáticas_para_el_modelamiento_del_parkinson_.png','Through the data analysis, we can deduce information from samples of a Parkinson modeling to estimate topological properties.','2019-06-11 12:48:24','2019-06-11 12:48:24'),(2,'Undergraduate','Towards clinical significance prediction using k trans evidences in prostate cancer Tipo: Undergraduate','storage/projects/towards_clinical_significance_prediction_using_k_trans_evidences_in_prostate_cancer_tipo:_undergraduate_.jpeg','Currently, Ktrans coefficient maps have emerged to characterize tumor biology and treatment response. Salient localized coefficient on Ktrans allows to detect and localize tumor regions from non-invasive MRI scanners. Nevertheless, such identified lesions on Ktrans maps are highly variable and in much of the cases result in false positive indicators. In this work a set of labeled Ktrans regions are processed into a supervised framework to correctly find true positive regions that are prostate cancer indicators. Three different algorithms were implemented to perform the classification: K-Nearest Neighbors (k-NN), Support vector machine (SVM), and Random forest (RaF). On a public dataset with 339 Ktrans images on peripheral, transitional and anterior fibromuscular stroma regions, the SVM achieved an average accuracy of 80.83% with a ROC AUC of 0.68 on true evidence identification.','2019-06-11 12:58:40','2019-06-11 12:58:40'),(3,'Undergraduate','Generating cine-MRI sequences with Deep Learning generative models','storage/projects/generating_cine-mri_sequences_with_deep_learning_generative_models_.png','Cardiovascular diseases are the greater cause of death in the world with a total of 17.9 million people per year according to the World Health Organization (WHO). Early detection, tracing and quantification of cardiac alterations are fundamental for effective treatments. Cine-MRI sequences are ideal sequences that provide dynamic and anatomic visualization for the heart','2019-06-11 13:34:49','2019-06-11 13:34:49'),(4,'Undergraduate','Video activity recognition using a local volumetric covariance descriptor','storage/projects/video_activity_recognition_using_a_local_volumetric_covariance_descriptor_.png','In this work, we are going to propose a descriptor based on the features covariance that allows us to describe actions in a robust and compact way.','2019-06-11 13:41:49','2019-06-11 13:41:49'),(5,'Undergraduate','Machine learning for the prediction of time-series in world development indicators','storage/projects/machine_learning_for_the_prediction_of_time-series_in_world_development_indicators_.png','The World Development Indicators are a statistical database of the World Bank that gives a global perspective of development. The World Bank groups the indicators in sets by themes, namely: Agriculture and rural development, Climate change, Economy and growth, etc. In this project, machine learning is applied to determine the degree of prediction, relationships and dependencies between sets of indicators for Colombia and South America. A workflow was designed where a Base Set consisting of development indicators is used to predict the value of each indicator of a Target Set. Initially the data is preprocessed, and each set, Base and Target iterated, by three estimators, and the mean\r\nof the Coefficient of Determination for each set were determined.','2019-06-11 13:43:13','2019-06-11 13:43:13'),(6,'Undergraduate','Automatic polyp detection from a regional appearance model.','storage/projects/automatic_polyp_detection_from_a_regional_appearance_model._.png','Polyps are the main biomarker to diagnose colorectal cancer. These polyps are protuberant masses that namely appear around intestinal tract. Currently, the automatic polyp detection is a challenging task because the high shape and appearance variability. Additionally, the videos captured during colonoscopies are namely distorted because the clinical procedure, presenting strong camera motions and illumination changes.','2019-06-11 13:45:10','2019-06-11 13:45:10'),(7,'Undergraduate','Cuantificación de patrones parkinsonianos en cabeza y ojos','storage/projects/cuantificación_de_patrones_parkinsonianos_en_cabeza_y_ojos_.jpeg','Estudios recientes han mostrado una fuerte correlación entre las alteraciones de ciertos movimientos oculares y la deficiencia de dopamina, neurotransmisor causante de la enfermedad de parkinson (EP). Este biomarcador esta presente incluso en etapas iniciales de la enfermedad, lo cual lo hace bastante relevante para un diagnostico temprano.\r\n\r\nObjetivos: \r\n\r\nRecolectar un conjunto de datos de pacientes control y parkinson para el desarrollo del trabajo. \r\nRepresentar patrones mediante descriptores de movimiento. \r\nCuantificar descriptores de movimiento para definir la correlaci´on de los patrones parkinsonianos en cabeza y ojos.','2019-06-11 13:49:47','2019-06-11 13:49:47'),(8,'Undergraduate','Cálculo de una media geométrica de matrices simétricas semidefinidas positivas.','storage/projects/cálculo_de_una_media_geométrica_de_matrices_simétricas_semidefinidas_positivas._.png','El proyecto consiste en estudiar el algoritmo para el cálculo de medias geométricas propuesto por P. Thomas Fletcher en el año 2007 en su artículo  “Riemannian Geometry for the Statistical Analysis of Diffusion Tensor Data”. Particularmente, una media de matrices de covarianza, que resultan ser matrices simétricas semidefinidas positivas nos va a brindar un gran panorama de las ventajas, desventajas y alcances en cuanto a la descripción compacta de videos para la clasificación y reconocimiento de acciones. Por otra parte, al explicar la media es necesario hacer un estudio que permita entender y explicar matemáticamente el cálculo de esta media junto a propiedades algebraicas y geométricas, a fin de poder reconocer criterios para el uso de esta media.','2019-06-11 13:51:07','2019-06-11 13:51:07'),(9,'Master','IMPLEMENTACIÓN DE UN CONVERTIDOR SEPIC PARA EL SEGUIMIENTO DEL PUNTO DE MÁXIMA POTENCIA EN SISTEMAS FOTOVOLTAICOS','storage/projects/implementaciÓn_de_un_convertidor_sepic_para_el_seguimiento_del_punto_de_mÁxima_potencia_en_sistemas_fotovoltaicos_.png','Se realiza la implementación de la etapa de conversión DC-DC para un sistema fotovoltaico conectado a la red eléctrica. Esta etapa de conversión está conformada por cuatro sistemas principales: circuito de disparo, convertidor SEPIC, sistema de medición y sistema de control. En lo que respecta al sistema de control, éste se enfoca en garantizar la operación del generador fotovoltaico en el punto de máxima potencia. En este trabajo se implementaron, en una tarjeta de control digital, dos técnicas para el seguimiento del punto de máxima potencia (MPPT): la técnica de perturbar y observar (P&O) tradicional y la técnicaP&O con red de compensación. La red de compensación es diseñada buscando disminuir las variaciones de tensión en los paneles debido a oscilaciones en el capacitor de salida del convertidor SEPIC, para aumentar la vida útil de los paneles y la eficiencia delsistema.Además, se propuso un nuevo algoritmo para el seguimiento del punto de máxima potencia bajo condiciones de sombras parciales, es decir, las sombras parciales ocurren algunos paneles del arreglo fotovoltaico presentan diferentes radiaciones respecto a los demás paneles, la anterior situación conlleva a la presencia de máximos locales de potencia en la curva potencia-tensión del arreglo fotovoltaico, el objetivo del algoritmo es encontrar el máximo global de potencia y evitar la oscilación en máximos locales. El funcionamiento del algoritmo propuesto se verificó mediante simulaciones en el softwarePSIM.En este trabajo también se describe el dimensionamiento, diseño y análisis de los diferentes componentes de la etapa de conversión DC-DC. El funcionamiento de la etapa se verificó en simulación en el softwarePSIM y los resultados obtenidos en la implementación corroboran el correcto funcionamiento de la etapa al operar integrada a un sistema fotovoltaico conectado a la red eléctrica.','2019-06-11 13:52:49','2019-06-11 13:52:49'),(10,'Master','Elaboración de Biodisel a partir de aceite de Cocina: Una Prospectiva de educación Ambiental.','storage/projects/elaboración_de_biodisel_a_partir_de_aceite_de_cocina:_una_prospectiva_de_educación_ambiental._.jpeg','Desde un punto de vista ambiental y a nivel de pequeña escala se propone la transformación del aceite de cocina en Biodisel','2019-06-11 14:22:28','2019-06-11 14:22:28'),(11,'Doctor','MODELO MULTIMODAL PARA LA CUANTIFICACIÓN Y CARACTERIZACIÓN DE PATRONES PARKINSONIANOS','storage/projects/modelo_multimodal_para_la_cuantificaciÓn_y_caracterizaciÓn_de_patrones_parkinsonianos_.bin','Proponer y validar un modelo multimodal que aproveche diferentes observaciones e implemente descriptores basados en patrones motores relacionados con la enfermedad del Parkinson.','2019-06-11 14:25:47','2019-06-11 14:25:47'),(12,'Undergraduate','Sign Language','storage/projects/sign_language_.png','Sign languages (also known as signed languages) are languages that use the visual-manual modality to convey meaning. Language is expressed via the manual signstream in combination with non-manual elements.','2019-06-11 14:34:12','2019-06-11 14:34:12'),(13,'Master','Amplificación visual de signos óculo-motores para el reconocimien- to de patrones parkinsonianos.','storage/projects/amplificación_visual_de_signos_óculo-motores_para_el_reconocimien-_to_de_patrones_parkinsonianos._.png','El diagnóstico clínico de la enfermedad de Parkinson (EP) por lo general está basado en la evaluación y cuantificación de patrones de movimientos anormales en los miembros superiores e inferiores. Sin embargo, tales análisis son subjetivos y poco sensibles en estadios tempranos de la enfermedad. Recientemente, investigaciones relevantes han evidenciado una fuerte correlación entre las alteraciones de ciertos movimientos oculares y la disminución en los niveles del neurotransmisor dopamina, causa principal de la EP. La presencia de estos movimientos como un potencial biomarcador de la EP se ha confirmado incluso en fases iniciales del trastorno, habilitando la posibilidad de un diagnóstico oportuno. No obstante, las anomalías en la función óculo-motora pueden exhibir amplitudes sutiles e imperceptibles, lo cual dificulta su correcta valoración a partir de la tradicional observación clínica. Por otra parte, los dispositivos diseñados para registrar estos movimientos son sofisticados y pueden llegar a ser invasivos. Ante tales problemáticas, el presente trabajo pretende proponer una herramienta computacional para facilitar el análisis y descripción de aquellos movimientos oculares en la caracterización de la EP. Para ello resultan de particular interés los nuevos enfoques en magnificación de video, técnica que sugiere la facultad para amplificar visualmente signos óculo-motores en videos convencionales. Así, con los resultados obtenidos, se espera evaluar la eficacia de los signos amplificados en la diferenciación entre pacientes parkinsonianos y pacientes control, proveyendo apoyo y asistencia en el diagnóstico de la EP.','2019-06-11 14:43:20','2019-06-11 14:43:20'),(14,'Master','A fast action recognition strategy based on motion trajectory occurrences','storage/projects/a_fast_action_recognition_strategy_based_on_motion_trajectory_occurrences_.jpeg','A few light stimuli coherently distributed in the space and time are the essential input that a visual system needs to perceive motion. Inspired in such fact, a compact motion descriptor is herein proposed to describe patterns of neighboring trajectories for human action recognition. The proposed method introduces a strategy that models the local distribution of neighboring points by defining a spatial point process around motion trajectories. Particularly, a two-level occurrence analysis is carried out to discover motion patterns that underlying on trajectory points representation. Firstly, local occurrence words are computed over a circular grid layout that is centered in a fixed position for each trajectory. Then, a regional occurrence description is achieved by representing actions as the most frequent local words that occur in a particular video. This second occurrence layer could be computed for the entire video or by each frame to achieve an online recognition. This compact descriptor, with local size of 72 and sequence descriptor size of 400, acquires importance in real-time applications and environments with hardware restrictions. The proposed strategy was evaluated on KTH and Weizmann dataset, achieving an average accuracy of 91.2% and 78%, respectively. Moreover, a further online recognition was performed over UT-Interaction achieving an accuracy of 67% by using only the first 25% of video sequences.','2019-06-11 14:54:53','2019-06-11 14:54:53'),(16,'Undergraduate','Characterization and quantification of polyps using outgoing map learning.','storage/projects/characterization_and_quantification_of_polyps_using_outgoing_map_learning._.png','Colorectal cancer is postulated as one of the three most silent diseases that are most charged in life worldwide. The fact of being able to detect it in its first states can represent about 90% of survival probabilities, while a late diagnśtico can abruptly reduce these probabilities to only 10%. This is why the motivation is born to implement a vision system, integrated with methods of machine learning and deep learning that is able to detect, characterize and quantify in real time, the different types of polyps present in a procedure Colonoscópico routine. \r\n\r\nThis in order to give the health care professional, a tool that will provide your medical differential and the rate of loss of detection is significantly reduced causing the patient\'s eventual well-being.','2019-06-11 14:59:17','2019-06-11 14:59:17'),(17,'Master','Movement Neural Network','storage/projects/movement_neural_network_.png','The main idea is to create a Movement Neural Network using 3D convolutions','2019-06-11 15:03:58','2019-06-11 15:03:58'),(18,'Undergraduate','Analysis and regional characterization of the types of wear on steel surfaces for the mining industry','storage/projects/analysis_and_regional_characterization_of_the_types_of_wear_on_steel_surfaces_for_the_mining_industry_.png','In the mining sector, a problem is the transport of ore by ribbons and hoppers since the latter are exposed to impacts and slippage of mineral material, which causes structural wear and breakage of the steel sheets through which it moves, causing Product loss This wear of the plates of the hoppers makes it necessary that they must be disassembled and changed every three or six months according to the wear, since this is not homogenous in all the plates. Therefore, efforts have been made to quantify the types of wear that affect the sheets and thus have a better criterion for the laboratory to study if the behavior of the materials can be improved, but this analysis of wear is not yet precise that the marking and identification of the different types of wear is wasteful and also varies in interpretation since it is done visually.\r\nThat is why it is necessary to implement new techniques in this classification in order to offer a tool that makes the detection process more reliable and accurate.','2019-06-11 15:05:41','2019-06-11 15:05:41'),(19,'Undergraduate','Lagrangian center of mass (CoMt) magnification to stand out main parkinsonian gait events.','storage/projects/lagrangian_center_of_mass_(comt)_magnification_to_stand_out_main_parkinsonian_gait_events._.png','Gait  analysis  is  crucial  in  Parkinson’s  disease  (PD)diagnosis  to  clinically  observe  and  quantify  abnormal  motorpatterns.   A   primary   gait   biomarker   is   the   center   of   masstrajectory (CoMt) that express the global coordination of forces,neuromotor  commands  and  musculoskeletical  poses.  Also,  fromsuch trajectories is possible to analyze main locomotion moments(LM),   such   as   forefoot,   midfoot   and   heel   strike,   commonlyaltered  in  PD.  However,  the  CoMtrequires  additional  devices,e.g.  force  platforms,  limited  to  only  a  few  steps  or  markersassociated  in  video  analysis  but  altering  the  natural  motiongesture  and  losing  description  of  LM.  This  work  introducesa  markerless  approach  to  compute  the  CoMtfollowed  by  aLagrangian global magnification. Additionally, a magnified videoreconstruction  allows  to  better  observe  gait  patterns,  useful  formedical observation analysis. The Evaluation was performed ona  control  (7  patients)  and  PD  (7  patients)  video  set,  achieving  aproper  LM  description  w.r.t  raw  CoMtcaptured  in  videos.Index  Terms—Center  of  Mass  Magnification,  ParkinsonianMovements,  Lagrangian  Motion  Magnification','2019-06-11 15:07:48','2019-06-11 15:07:48'),(20,'Undergraduate','Analysis of worn surface images using gradient-based descriptors','storage/projects/analysis_of_worn_surface_images_using_gradient-based_descriptors_.jpeg','Failures of mechanical systems are strongly relatedwith  wear  of  interacting  surfaces  in  machine  elements.  Hence,wear monitoring is fundamental to avoid energy and time losses,as well as to prevent definite failures on machines. Wear monitor-ing can be achieved by capturing worn surfaces images, in whichmass losses are represented as non-uniform texture patterns. Thiswork introduces a computational framework to characterize andpredict  mild  or  severe  wear  regimes  by  using  gradient-baseddescriptors. The HoG and Daisy descriptors were used to codifywear  morphologies  of  worn  surfaces  images.  Once  images  werecoded  as  gradient  patterns,  the  corresponding  descriptors  weremapped to a previously trained Support Vector Machine (SVM),allowing  to  automatically  associate  a  wear  regime  label.  A  setof  Scanning  Electron  Microscopy  (SEM)  images  of  abrasionworn  surfaces  were  used  to  validate  this  work.  The  proposedframework achieves accuracy results of94%and96%using theHog  and  Daisy  descriptors,  respectively.Wear  monitoring,  Abrasive  wear  regimes,  HoG  descriptor,Daisy  descriptor.','2019-06-11 15:12:44','2019-06-11 15:12:44'),(21,'Undergraduate','Cardiac disease prediction regarding motion patterns in MRI','storage/projects/cardiac_disease_prediction_regarding_motion_patterns_in_mri_.jpeg','Heart characterization is a challenging task due to the non-linear dynamic performance and the strong shape deformation during the cardiac cycle. These limitations prevent an accurate characterization of cardiac structures by conventional computational methods and even restrict observational analysis by a clinical expert. Thus, it is necessary to describe heart motion to develop a computational approach using motion patterns to describe, characterize, and quantify heart disease in cine-MRI sequences.','2019-06-11 15:16:09','2019-06-11 15:16:09');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sublines`
--

DROP TABLE IF EXISTS `sublines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sublines` (
  `pk_subline` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_line` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_subline`),
  UNIQUE KEY `sublines_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sublines`
--

LOCK TABLES `sublines` WRITE;
/*!40000 ALTER TABLE `sublines` DISABLE KEYS */;
INSERT INTO `sublines` VALUES (1,'Motion Magnification','1',2,'2019-06-11 08:39:57','2019-06-11 08:39:57'),(2,'Gait Analysis','2',2,'2019-06-11 08:39:57','2019-06-11 08:39:57'),(3,'Tracking and Temporal Segmentation','3',2,'2019-06-11 08:39:57','2019-06-11 08:39:57'),(4,'Image Formation Models','4',1,'2019-06-11 08:39:57','2019-06-11 08:39:57'),(5,'Image Reconstruction','5',1,'2019-06-11 08:39:57','2019-06-11 08:39:57'),(6,'Biomedical Image Reconstruction','6',1,'2019-06-11 08:39:57','2019-06-11 08:39:57'),(7,'Learning Models','7',3,'2019-06-11 08:39:57','2019-06-11 08:39:57'),(8,'Image Data Analytics','8',3,'2019-06-11 08:39:57','2019-06-11 08:39:57'),(9,'Fusion Models','9',3,'2019-06-11 08:39:57','2019-06-11 08:39:57');
/*!40000 ALTER TABLE `sublines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usrs`
--

DROP TABLE IF EXISTS `usrs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usrs` (
  `pk_usr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'storage/usrs/default.png',
  `biography` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pk_usr`),
  UNIQUE KEY `usrs_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usrs`
--

LOCK TABLES `usrs` WRITE;
/*!40000 ALTER TABLE `usrs` DISABLE KEYS */;
INSERT INTO `usrs` VALUES (1,'Fabio','Martinez Carrillo','2019-06-11','famarcar@saber.uis.edu.co','$2y$10$DCmUSDF2BC5zlfDF.4U2gOsxjrwT1Lj4IOHzzWfigcwufmJvnmu/2','0','storage/usrs/fabio_1.png','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',NULL,'2019-06-11 08:39:54','2019-06-11 12:04:11',NULL),(2,'Lola Xiomara','Bautista Rozo','2019-06-11','lxbautis@uis.edu.co','$2y$10$rpaRKI9upXmBxCfu9i5pEeZoo.a.FleEX4m5X0oaJHlhfiNdnIzb.','0','storage/usrs/lola_xiomara_2.png','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',NULL,'2019-06-11 08:39:54','2019-06-11 12:04:33',NULL),(3,'Santiago','Gomez Hernández','2019-06-11','santgohe@gmail.com','$2y$10$5vJuoy461y/qAczPoqYWEeWBljERY338zDjprkOxX64GgW.c/b1Q.','0','storage/usrs/santiago_3.png','My name is Santiago Gómez Hernández. I\'m a Systems engineering student at Universidad Industrial de Santander. Fan of everything related to coding, animals, and sports. My current work is connected to Deep Learning, specially GANs.',NULL,'2019-06-11 08:39:55','2019-06-11 11:58:46',NULL),(4,'Juan Sebastian','Marcon Caballero','2019-06-11','juanmarcon1080@gmail.com','$2y$10$NcviEekeegcB/.uBBHjCzulAciHZOmMVUtNUW0hqH7NUh.1PZsz0y','0','storage/usrs/juan_sebastian_4.png','My name is Juan Marcon and I\'m currently a candidate for undergraduate in Systems Engineering and Informatics at Universidad Industrial de Santander (Colombia). I\'m very passionate about computer vision, web development, and basketball.',NULL,'2019-06-11 08:39:55','2019-06-11 11:24:25',NULL),(5,'Brayan Camilo','Valenzuela Rincón','1997-09-10','b.rayancamilo97@hotmail.com','$2y$10$ve7HMRzCbtZR2xxaxcO6guHGPdP7Q68rlbuPPhAFUOQde4fsMyji2','0','storage/usrs/brayan_camilo_5.png','Colombian, born in the city of bucaramanga. Main hoobies are: programming, artificial intelligence, basketball, travel and cycling. At the moment I am systems engineering student in the UIS (Universidad industrial de Santander).',NULL,'2019-06-11 08:39:55','2019-06-11 11:24:49',NULL),(6,'Camilo Andrés','Lozano Carvajal','1991-12-15','clozanocarvajal@gmail.com','$2y$10$QA5Wc2F/25cRzaVz8TQyaeeeQLOvfclK60AQtbCy.lWtXzDcAsadO','0','storage/usrs/camilo_andrés_6.png','Currently I\'m a undergraduate of system and informatic engineer, I\'m an enthusiast about technology and science, nowadays I\'m working on classification of several kinds of wear on worn surface at metal plates.',NULL,'2019-06-11 08:39:55','2019-06-11 11:59:14',NULL),(7,'Alejandra','Moreno Tarazona','1997-10-27','alejandramoreno.97@hotmail.com','$2y$10$3.KyYdnaWVtfQTg4wlZgRecNxc6IX9.jMIYCAauHEa8wf2FoWeLYG','1','storage/usrs/alejandra_7.png','Alejandra Moreno is currently an undergraduate candidate in Systems Engineering at the Universidad Industrial de Santander (Colombia). She\'s assosiated at Biomedical Imaging, Vision and Learning Laboratory group (BIVL2ab). Her research interest has been focused mainly on the classification of heart motion in MRI.',NULL,'2019-06-11 08:39:55','2019-06-11 11:25:13',NULL),(8,'Fabian Andres','Leon Perez','1996-10-01','fabianandresleon96@gmail.com','$2y$10$lJ7i8vO9u/I0oJvmCJuuA.7eqMSsoazshUmeiJNQsTUABy3hgLB/i','1','storage/usrs/fabian_andres_8.png','Hello, my name is Fabian Andres Leon Perez. I\'m a system engineering student at Universidad Industrial de Santander.',NULL,'2019-06-11 08:39:55','2019-06-11 11:25:39',NULL),(9,'Miguel Alberto','Plazas Wadynski','1991-02-20','miguel.plazas@saber.uis.edu.co','$2y$10$os0UTvxCKbVx25cGsd6eO.sHJn/ZKbc7F9Vqb5gRzDY0W7XfJcWwW','2','storage/usrs/miguel_alberto_9.png','Miguel Plazas is currently a candidate for Master in Systems Engineering and Informatics at Universidad Industrial de Santander. Very passionate about technology',NULL,'2019-06-11 08:39:55','2019-06-11 11:23:11',NULL),(10,'Luis Carlos','Guayacán Chaparro','1992-02-08','luis.guayacan@saber.uis.edu.co','$2y$10$1EcAeoq0LikqXa0f0IthTOilwDxmPZr6PW7ywbzYftm4E8c0VcdMG','2','storage/usrs/luis_carlos_10.png','Electronic Engineer from Universidad Industrial de Santander - UIS and active member of the research group of the \'Bioengineering, Vision and Learning Lab\' (BivL2ab). His areas of work include computer vision, machine learning, video analysis, bioengineering (with particular experience with Parkinson\'s disease), among others. He is currently continuing his formation as a researcher with a master\'s degree in applied mathematics.',NULL,'2019-06-11 08:39:55','2019-06-11 12:09:09',NULL),(11,'Franklin Samuel','Sierra Jerez','1995-07-14','franklinsierrajer@gmail.com','$2y$10$KeN1isuozIhOTVYAuG2ceuZcHbkYEXjIF5WrIgTuVebbQv7ywrT06','2','storage/usrs/franklin_samuel_11.png','My name is Franklin Samuel Sierra Jerez. I\'m 23 years old. I was born in Bogotá but I have live in Bucaramanga since 2011. I study systems engineer at Universidad Industrial de Santander. I love machine learning, artificial intelligence and to learn every single day.',NULL,'2019-06-11 08:39:56','2019-06-11 11:25:57',NULL),(12,'Oscar Mauricio','Mendoza Casas','1998-02-21','oscameca.1998@gmail.com','$2y$10$YSPaT1wKXWJNnQM9wGTlfeaeyAQTEl772taAftLNPigf24Q10SC0C','2','storage/usrs/oscar_mauricio_12.png','Systems engineering student at Universidad Industrial de Santander, from Bucaramanga, Colombia. Passionate about science, tecnology, nature, animals and traveling, currently working on action recognition.',NULL,'2019-06-11 08:39:56','2019-06-11 11:26:24',NULL),(13,'John Edinson','Archila Valderrama','1989-12-07','john.archila.valderrama@gmail.com','$2y$10$BqFjARXs9hJa5tf6PA7Mo.3YmjckIhlGtTooxczCKKACjc1ugy89a','2','storage/usrs/john_edinson_13.png','I like to investigate in areas such as education, renewable energies and computer vision. I am a PhD student at Biomedical Imaging, Vision and Learning Laboratory (BivL²ab).',NULL,'2019-06-11 08:39:56','2019-06-11 11:21:20',NULL),(14,'Juan Andrés','Olmos Rojas','1999-03-06','juandolmos63@gmail.com','$2y$10$TChzweM0y/1duOShEa1HRexcs0s9R2E5UW9ggkaXmEGRU7xo49Mne','2','storage/usrs/juan_andrés_14.png','Currently i\'m studying mathematics in Universidad Industrial de Santander UIS, im working on my pregraduate thesis and basically its about explain how calculate means of tensors to recognize actions.',NULL,'2019-06-11 08:39:56','2019-06-11 11:26:47',NULL),(15,'Juan Felipe','Chacón Lopez','1996-05-07','juanfe0705@gmail.com','$2y$10$ClVtHY0rWmZZftKwlBPile0ICj1Ut/NfjvxQz8E/SyYy4WO9u4Ym.','2','storage/usrs/juan_felipe_15.png','I\'m a Systems Engineering student at Universidad Industrial de Santander. Currently I\'m working with BivL²ab collecting Sign Language data in video format.',NULL,'2019-06-11 08:39:56','2019-06-11 12:00:11',NULL),(16,'Isail','Salazar Acosta','1995-04-08','isail.salazar@saber.uis.edu.co','$2y$10$b0CqfHu57M4uA7BImSWHieBo01x7LIJ.xySGxmZm32TSLH7tIikBa','2','storage/usrs/isail_16.png','Isail Salazar is currently a candidate for master in systems engineering and informatics at Universidad Industrial de Santander (Colombia), where he\'s associated at the Biomedical Imaging, Vision and Learning Laboratory (BIVL2ab) and Motion Analysis and Computer Vision (MACV) collective. He received his BS in electronic engineering in 2017. His research work has been focused mainly in image segmentation, RGB-D image processing, eye movement analysis and motion magnification.',NULL,'2019-06-11 08:39:56','2019-06-11 11:02:53',NULL),(17,'Yessica Carolina','Castrillon Gamboa','1997-08-08','yessica.castrillon08@gmail.com','$2y$10$JBXJtoMfFh/lVEN5Z1H0LuGTDTO7Cz.ugdutKVBxvnTT1q1xT9blG','2','storage/usrs/yessica_carolina_17.png','Yessica is currently a undergraduate degree in Mathematics at Universidad Industrial de Santander (Colombia), where she\'s associated at Biomedical Imaging, Vision and Learning Laboratory (BIVL2ab). Her research interests are topological data analysis and computer vision.',NULL,'2019-06-11 08:39:56','2019-06-11 11:27:15',NULL),(18,'Edgar Yesid','Rangel Pieschacon','1997-08-21','jefelitman@gmail.com','$2y$10$4QSK0y39YSf0GtfwRHtBdePwX.fju8crRUDZzi87XdFX3Rub/xVqu','2','storage/usrs/edgar_yesid_18.png','I am a computer science student of Industrial University of Santander',NULL,'2019-06-11 08:39:56','2019-06-11 11:27:39',NULL),(19,'Jefferson David','Rodriguez Chivatá','1994-09-22','jefferson.rodriguez2@saber.uis.edu.co','$2y$10$Wla73XNXT8b8NqZzUfCrtudHNPSpgJqleZsObUsa7x4y.2KbUQFXu','2','storage/usrs/jefferson_david_19.png','I\'m from Bucaramanga in Colombia. Passionate about artificial vision, technology, travel, football, and cycling. Currently, I am a student of a Master in Computer Science, and I work in Biomedical Imaging, Vision and Learning Laboratory (BivL2ab) building models, based on deep learning, for the learning and recognition of gestures in video.\r\n\r\nTake a look at my page: https://www.jeffersonrodriguez.co/',NULL,'2019-06-11 08:39:57','2019-06-11 11:23:40',NULL),(20,'Lina Marcela','Ruiz García','1998-01-10','linamarug@hotmail.com','$2y$10$b7zYppV5QDBDFCiEME0uQOOIgEFWQxoaZsFP.1TcMQsSsgJMGEe5K','2','storage/usrs/lina_marcela_20.png','Lina Ruiz is a currently a candidate for undergraduate in Systems Engineering and Informatics at Universidad Industrial de Santander (Colombia). She is  passionate about computer vision, travel, and different sports.  She works at Biomedical Imaging, Vision and Learning Laboratory (BivL²ab)',NULL,'2019-06-11 08:39:57','2019-06-11 11:28:08',NULL),(21,'Yesid Alfonso','Gutierrez Guate','1997-03-01','yesidgutierrez.08@gmail.com','$2y$10$moK82YZ5XcWGa4wv6euzOOOdE9r3n9uubhdaaGht/nHLgMczxDjcK','2','storage/usrs/yesid_alfonso_21.png','My name is Yesid Gutierrez. I\'m currently working at Biomedical Imaging, Vision and Learning Laboratory.',NULL,'2019-06-11 12:51:47','2019-06-11 12:55:02',NULL),(22,'Gustavo','Garzón Villamizar','1990-05-06','gustavo.garzon@saber.uis.edu.co','$2y$10$tsQCcM0Sh7igLryWALtM1eWsjIc.gqHAub3rYNrmLf/ZswwbQaVVu','2','storage/usrs/gustavo_22.png','Gustavo Garzón is currently a candidate for Master in Systems Engineering and Informatics at Universidad Industrial de Santander (Colombia). His research interests include: action recognition, pattern recognition, computer vision, motion analysis, image processing and machine learning. He works at BIVLab as Research Assistant and helps with student advising on computer vision related areas.',NULL,'2019-06-11 13:03:07','2019-06-11 13:04:38',NULL);
/*!40000 ALTER TABLE `usrs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-11  5:20:57
