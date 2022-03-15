/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.33 : Database - armt
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `about_sections` */

DROP TABLE IF EXISTS `about_sections`;

CREATE TABLE `about_sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `thumb` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `about_sections` */

insert  into `about_sections`(`id`,`thumb`,`image`,`thumb_image`,`video_id`,`title`,`sub_title`,`description`,`created_at`,`updated_at`) values (1,'ABOUT US','/upload/settings/about-section.png','/upload/settings/thumb-image1.jpg','virz_HpW304xNTlo','SSG for Humanity ',NULL,'<p>During the pandemic, people from every class suffered a lot. Especially the poor underprivileged people suffered from the food crisis. In this dire situation, Super Star Group the patron of ARMT decided to come forward and share the same food that they provide for their regular employees. This initiative still continues and every month from SSG a great amount of food is distributed to the poor underprivileged people of the society.\n</p><p>Super Star Group the patron of ARMT always works for the wellbeing of underprivileged people of the society. And in the future, it has a plan to make this happen on a very large scale.\n</p>','2022-03-14 03:32:50','2022-03-14 03:32:50');

/*Table structure for table `event_sections` */

DROP TABLE IF EXISTS `event_sections`;

CREATE TABLE `event_sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `thumb` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `event_sections` */

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `events` */

insert  into `events`(`id`,`image`,`date`,`start_at`,`end_at`,`location`,`title`,`description`,`deleted_at`,`created_at`,`updated_at`) values (1,'/upload/events/The-Quest-to-Provide-Safe-Drinking-Water-for-All_320X165.jpg','2020-04-01','09:00:00','10:00:00','Bangladesh','The Quest to Provide Safe Drinking Water for All - Water Project!','<p>The world may have marched into the 21st century with plenty of economic, cultural, and technological advancements, but there continue to be areas of the planet which still lack the most basic of resources or amenities. There are still entire regions that lack a supply of one of the most vital elements required for life to survive — water. </p>\r\n\r\n                <p>While the average human being needs several gallons of water per day to lead what is considered a normal life, it is important for at least 2-3 liters of that to be clean, safe, adulterant-free drinkable water. If a person does not have access to this, they run the risk of dehydration, electrolyte imbalance, and developing kidney problems such as stones or outright failure. At the same time, they may try to quench their thirst using unclean or unsafe water, which may lead to deadly diseases such as cholera, diarrhea, and dysentery.</p>\r\n\r\n                <p>However, this can be extremely difficult to get in remote areas of underdeveloped or developing countries, and Bangladesh is one such country. Roughly 10% of the nearly 170-million-strong population do not have a source of clean water available to them.</p> \r\n\r\n                <p>The plight of this group of people — who can be found in almost all parts of the country — is as extreme as it is unfortunate, with some people having to walk many kilometers to and from a source of clean water, with the weight of the water adding to the difficulty of the task on the way back. </p>\r\n\r\n                <p>Alternatively, other families have to pay exorbitant amounts to exploitative groups which only allow these marginalized people to use their deep-bore tube wells and pumps for a price, leveraging their need for this basic resource to make money. In many cases, some of these families are forced to pay such sums despite making a paltry living as they do not have anyone able enough to make a regular journey to acquire water.</p>\r\n\r\n                <p>In such dire circumstances, the Abdur Rahim Memorial Trust has come forward to stand by such groups. Using their own resources, the Trust has set up pumps, tube wells, pipes, and tanks for anyone and everyone to use. In order to maintain absolute neutrality, the Trust had most of these watering stations built inside the perimeters of mosques, where they are beyond the reach of the ill-intent of any influential locals. Along with extensive plumbing facilities (some of which include tube wells as deep as 280 feet), the organization has also built oju khanas — separate areas for Muslims to cleanse themselves before prayer — for some of the mosques.</p> ',NULL,NULL,NULL),(2,'/upload/events/SSG-for-Humanity.jpg','2020-04-01','09:00:00','10:00:00','Bangladesh','SSG for Humanity','<p>During the pandemic, people from every class suffered a lot. Especially the poor underprivileged people suffered from the food crisis. In this dire situation, Super Star Group the patron of ARMT decided to come forward and share the same food that they provide for their regular employees. This initiative still continues and every month from SSG a great amount of food is distributed to the poor underprivileged people of the society.</p> \r\n                <p>Super Star Group the patron of ARMT always works for the wellbeing of underprivileged people of the society. And in the future, it has a plan to make this happen on a very large scale. </p> ',NULL,NULL,NULL),(3,'/upload/events/A-Haven-of-Health-for-Those-in Need_320X165.jpg','2020-04-01','09:00:00','10:00:00','Bangladesh','A Haven of Health for Those in Need','<p>A clean bill of health is all that most of us ask for, yet few of us get. Illnesses, conditions, and accidents are part and parcel of life, and when they strike, one can only hope that medical care is accessible.</p>\r\n\r\n                <p>In the remote village of Patdal, which falls under Bhumkhara union of Naria upazila in Shariatpur, there is no such care available. In order to seek even the most basic medical attention, residents of this remote village have to travel a very long way to reach even the closest hospital. As things stand, it is especially difficult for children, pregnant women, and the elderly to avail medical care without a great delay and a painstaking journey.</p>\r\n\r\n                <p>However, there is a project under way that could see a hospital built right in Patdal. Featuring a wide array of facilities, this hospital could be the answer to the prayers of the caring, hardworking people of this small village. </p>\r\n\r\n                <p>The proposed project for this hospital has been named the “Abdur Rahim Memorial Hospital,” and it has been slated to feature both certain designated areas upon the premises and a number of important services.</p>\r\n\r\n                <h5>Infrastructural Facilities</h5>\r\n\r\n                <p>Like any healthcare facility, the ARMH will have a reception area where patients will be guided to other areas of the premises. </p>\r\n\r\n                <p>The hospital will, importantly, have an emergency care center with a doctor and nurses at the ready. </p>\r\n\r\n                <p>Doctors will also have their own chambers, while a waiting room will be built so that any staff member or patient can wait or rest. There will also be clean toilets available for all to use.</p>\r\n\r\n                <p>A collection counter for blood and other samples will make the compartmentalization of hospital procedures easier, and lastly, an on-site pharmacy will ensure that patients readily have access to whatever medicines they require.</p>\r\n\r\n\r\n\r\n\r\n                <h5>Offered Services</h5>\r\n\r\n                <p>One of the biggest predicaments faced by patients outside of cities is a lack of ambulances. ARMH plans to address this with a 24/7 ambulance service. This will be further bolstered by the constant presence of a well-trained doctor no matter what the hour. </p>\r\n\r\n                <p>For those facing more complicated issues, weekly visits from specialists will be scheduled to address all kinds of conditions and illnesses. </p>\r\n\r\n                <p>In order to maintain healthy lives for the residents of the village, basic tests such as blood group, blood sugar, and diabetes will be available at the hospital. The health center will also be equipped to carry out procedures such as circumcision, and have trained personnel who can carry out basic stitching and bandaging. Other services such as vaccination and family planning sessions will also be available.</p>\r\n\r\n                <p>Should a patient arrive in or deteriorate to a condition which goes beyond the treatment limits of the hospital, there will be facilities to transport them to the Upazila Health Complex or even hospitals in Dhaka.</p>\r\n\r\n                <h5>Future Improvements</h5>\r\n\r\n                <p>The aforementioned facilities are only the proposed initial attributes of the hospital, and there are many upgrades planned. These include converting the hospital to a 10-bed facility, employing trained doctors who can perform more complex operations such as C-Sections, adding ECG and X-ray facilities, a larger pathological lab with disease detection capabilities, and providing blood transfusion services.</p>\r\n\r\n                <p>Of the 1 Crore 15 Lakh estimated budget, roughly Tk 6,775,000 has been raised, with another TK 4,725,000 required. Should this requirement be met, the lives of not only the people of Patdal, but also those living in villages nearby will be transformed.</p>\r\n                ',NULL,NULL,NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `features` */

DROP TABLE IF EXISTS `features`;

CREATE TABLE `features` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `features` */

/*Table structure for table `general_settings` */

DROP TABLE IF EXISTS `general_settings`;

CREATE TABLE `general_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `general_settings` */

insert  into `general_settings`(`id`,`logo`,`about`,`address`,`phone`,`email`,`banner_image`,`created_at`,`updated_at`) values (1,'/upload/settings/Logo_240x50.png','SSG FOR Humanity.','UCEP Cheyne Tower (3rd Floor), 25 Segunbagicha 1000 Ramna, Dhaka Division, Bangladesh','+8809610-774774','info@ssgbd.com','/settings/upload/MASTER-TEMPLET_1920X350.png','2022-03-15 02:55:49','2022-03-15 02:55:49');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(15,'2022_02_27_025715_create_general_settings_table',2),(16,'2022_02_27_030240_create_shocial_media_links_table',2),(17,'2022_02_27_033448_create_sliders_table',2),(18,'2022_02_27_042555_create_about_sections_table',2),(19,'2022_02_27_045412_create_features_table',2),(20,'2022_02_27_045808_create_projects_table',2),(21,'2022_02_27_050124_create_project_sections_table',2),(22,'2022_02_27_050341_create_events_table',2),(23,'2022_02_27_050646_create_event_sections_table',2),(24,'2022_02_27_051058_create_partners_table',2);

/*Table structure for table `partners` */

DROP TABLE IF EXISTS `partners`;

CREATE TABLE `partners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `po_index` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `partners` */

insert  into `partners`(`id`,`po_index`,`image`,`deleted_at`,`created_at`,`updated_at`) values (1,1,'upload/partners/Picture1.png',NULL,NULL,NULL),(2,2,'upload/partners/Picture2.png',NULL,NULL,NULL),(3,3,'upload/partners/Picture3.png',NULL,NULL,NULL),(4,4,'upload/partners/Picture4.png',NULL,NULL,NULL),(5,5,'upload/partners/Picture5.png',NULL,NULL,NULL),(6,6,'upload/partners/Picture6.png',NULL,NULL,NULL),(7,7,'upload/partners/Picture7.png',NULL,NULL,NULL),(8,8,'upload/partners/Picture8.png',NULL,NULL,NULL),(9,9,'upload/partners/Picture9.png',NULL,NULL,NULL),(10,10,'upload/partners/Picture10.png',NULL,NULL,NULL);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `project_sections` */

DROP TABLE IF EXISTS `project_sections`;

CREATE TABLE `project_sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `thumb` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `project_sections` */

/*Table structure for table `projects` */

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `projects` */

/*Table structure for table `shocial_media_links` */

DROP TABLE IF EXISTS `shocial_media_links`;

CREATE TABLE `shocial_media_links` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tweeter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `shocial_media_links` */

/*Table structure for table `sliders` */

DROP TABLE IF EXISTS `sliders`;

CREATE TABLE `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `thumb` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sliders` */

insert  into `sliders`(`id`,`thumb`,`title`,`sub_title`,`btn_text`,`btn_url`,`image`,`deleted_at`,`created_at`,`updated_at`) values (1,'GO FOR HELP','They Are Wait For Some Food.','It is a long established fact that a reader will be distracted the readable content of a page when looking at its layout point of using of letters, as opposed.',NULL,NULL,'/upload/sliders/slider1.jpg',NULL,NULL,NULL),(2,'GO FOR HELP','They Are Wait For Some Food.','It is a long established fact that a reader will be distracted the readable content of a page when looking at its layout point of using of letters, as opposed.',NULL,NULL,'/upload/sliders/slider2.jpg',NULL,NULL,NULL),(3,'GO FOR HELP','They Are Wait For Some Food.','It is a long established fact that a reader will be distracted the readable content of a page when looking at its layout point of using of letters, as opposed.',NULL,NULL,'/upload/sliders/slider3.jpg',NULL,NULL,NULL),(4,'GO FOR HELP','They Are Wait For Some Food.','It is a long established fact that a reader will be distracted the readable content of a page when looking at its layout point of using of letters, as opposed.',NULL,NULL,'/upload/sliders/slider4.jpg',NULL,NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
