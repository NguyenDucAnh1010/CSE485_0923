-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.1.0 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for w3cms
CREATE DATABASE IF NOT EXISTS `w3cms` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `w3cms`;

-- Dumping structure for table w3cms.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `tittle` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`tittle`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table w3cms.blog: ~0 rows (approximately)
INSERT INTO `blog` (`id`, `tittle`, `created_at`) VALUES
	(9, '20 Feet from Stardom (Twenty Feet from Stardom)', '2023-04-21 13:05:31'),
	(10, 'Jar City (Mýrin)', '2023-07-06 02:04:41'),
	(11, 'Flicka', '2022-09-23 12:15:26'),
	(12, 'Foul Play', '2023-02-03 20:14:15'),
	(13, 'Confidentially Connie', '2023-08-17 23:22:05'),
	(14, 'Boy Eats Girl', '2022-12-23 06:39:34'),
	(15, 'Dragon Ball: Sleeping Princess in Devil\'s Castle (Doragon bôru: Majinjô no nemuri hime)', '2022-10-11 09:04:59'),
	(16, 'Best of Times, The (Mei li shi guang)', '2023-02-27 22:49:54'),
	(17, 'Snow Queen, The (Lumikuningatar)', '2023-02-04 21:30:15'),
	(18, 'Secuestro Express', '2022-10-18 16:28:39'),
	(19, 'Stepfather II', '2022-10-13 23:38:46'),
	(20, 'Shadows in an Empty Room', '2022-10-14 18:30:45'),
	(21, 'Dracula: Dead and Loving It', '2023-01-28 18:09:58'),
	(22, 'Man Named Pearl, A', '2022-12-04 01:48:07'),
	(23, 'Fast and the Furious, The', '2022-11-23 03:49:12'),
	(24, 'Night of the Zombies (a.k.a. Hell of the Living Dead) (Virus)', '2023-04-13 19:36:24'),
	(25, 'The Returned', '2023-03-13 19:04:41'),
	(26, 'Dad Savage', '2023-06-29 10:08:48'),
	(27, '180° South (180 Degrees South) (180° South: Conquerors of the Useless)', '2022-12-13 03:06:57'),
	(28, 'Message from Akira Kurosawa: For Beautiful Movies, A (Kurosawa Akira kara no messêji: Utsukushii eiga o)', '2023-02-21 02:02:14'),
	(29, 'I Am Trying to Break Your Heart', '2023-07-03 06:09:43'),
	(30, 'Atlas Shrugged: Part II', '2023-02-09 03:17:40'),
	(31, 'Cattle Queen of Montana', '2023-04-18 16:09:53'),
	(32, 'Fifty Pills', '2023-06-07 09:18:31'),
	(33, 'Ulysses\' Gaze (To Vlemma tou Odyssea)', '2023-01-08 01:38:24'),
	(34, 'White, Red and Verdone', '2022-11-01 23:03:13'),
	(35, 'Après lui', '2023-07-01 20:01:11'),
	(36, 'Shanghai Ghetto', '2022-09-19 08:44:54'),
	(37, 'Shadowing the Third Man', '2023-03-23 13:05:24'),
	(38, 'Rockaway', '2023-03-03 20:06:09'),
	(39, 'Howards of Virginia, The', '2023-07-26 23:18:32'),
	(40, 'Tree of Wooden Clogs, The (L\'albero degli zoccoli)', '2023-05-25 19:34:09'),
	(41, 'Pulp', '2022-11-29 09:36:16'),
	(42, 'Boogie (Boogie, el aceitoso)', '2023-03-10 03:12:52'),
	(43, 'True Story of Jesse James, The', '2023-07-17 18:13:18'),
	(44, 'Hudson Hawk', '2023-01-15 22:35:35'),
	(45, 'Save the Green Planet! (Jigureul jikyeora!)', '2023-04-01 01:10:31'),
	(46, 'Smilla\'s Sense of Snow', '2022-12-27 13:50:54'),
	(47, 'Home', '2023-09-13 15:01:43'),
	(48, 'Ivory Tower', '2023-03-19 15:27:33'),
	(49, 'Messengers 2: The Scarecrow', '2023-08-14 01:27:32'),
	(50, 'Detention', '2023-01-19 07:12:03'),
	(51, 'August Rush', '2023-07-12 23:52:37'),
	(52, 'Easy to Love', '2022-10-13 20:26:37'),
	(53, 'Lonely Wife, The (Charulata)', '2022-12-07 20:18:09'),
	(54, 'Better Living Through Chemistry', '2022-10-24 06:23:26'),
	(55, 'Crossfire Hurricane', '2023-04-17 09:12:44'),
	(56, 'High Tension (Haute tension) (Switchblade Romance)', '2023-01-25 04:12:05'),
	(57, 'H6: Diario de un asesino', '2022-11-07 09:21:11'),
	(58, 'Point Break', '2023-06-26 16:28:07'),
	(59, 'Luxo Jr.', '2023-08-11 06:35:44'),
	(60, 'Xuxa in Crystal Moon', '2022-12-30 17:51:47'),
	(61, 'Billy Elliot', '2022-12-11 08:26:17'),
	(62, 'Perfect Family, The', '2022-10-16 11:53:09'),
	(63, 'Acadia Acadia?!? (L\'acadie, l\'Acadie)', '2022-11-14 09:28:00'),
	(64, 'Dogwalker, The', '2022-12-25 01:21:57'),
	(65, 'Killer: A Journal of Murder', '2023-04-28 07:22:05'),
	(66, 'Citizen Kane', '2023-03-10 22:59:09'),
	(67, 'Duo (Pas de deux)', '2023-03-07 23:19:03'),
	(68, 'Borrowed Hearts (Borrowed Hearts: A Holiday Romance)', '2022-10-21 15:47:40'),
	(69, 'Last Days, The', '2022-10-07 00:33:20'),
	(70, 'After the Rehearsal (Efter repetitionen)', '2023-04-13 03:44:36'),
	(71, 'How to Cook Your Life', '2022-10-10 07:22:08'),
	(72, 'Impossible, The (Imposible, Lo)', '2023-08-22 19:46:57'),
	(73, 'The Monkey Hustle', '2023-03-28 04:47:04'),
	(74, 'Student Prince in Old Heidelberg, The', '2022-09-26 03:24:54'),
	(75, 'Four Horsemen', '2023-04-19 11:45:16'),
	(76, 'Toy Story That Time Forgot', '2023-09-09 04:39:21'),
	(77, 'World\'s Fastest Indian, The', '2022-11-19 09:34:28'),
	(78, 'MacGyver: Trail to Doomsday', '2022-11-15 16:31:31'),
	(79, 'Tanner Hall', '2023-06-21 08:36:35'),
	(80, 'Black White + Gray: A Portrait of Sam Wagstaff and Robert Mapplethorpe ', '2022-11-12 13:31:21'),
	(81, 'ChromeSkull: Laid to Rest 2', '2023-05-13 00:08:39'),
	(82, 'Man of Straw (Untertan, Der)', '2023-06-19 15:25:52'),
	(83, 'Great Ecstasy of Robert Carmichael, The', '2023-04-23 18:45:43'),
	(84, 'Document of the Dead', '2023-09-18 02:45:14'),
	(85, 'Madam Satan', '2023-03-30 06:14:58'),
	(86, 'Battle in Outer Space', '2023-07-23 07:36:41'),
	(87, 'Quand je serai petit', '2023-06-16 07:26:50'),
	(88, 'Wu Tang Master (Tian shi zhuang xie)', '2023-04-02 01:21:49'),
	(89, 'Too Late the Hero', '2022-12-06 10:28:36'),
	(90, 'House of Branching Love, The (Haarautuvan rakkauden talo)', '2022-09-25 20:38:17'),
	(91, 'London Conspiracy', '2023-08-21 17:12:42'),
	(92, 'Bride of Frankenstein, The (Bride of Frankenstein)', '2022-10-19 21:53:16'),
	(93, 'Brotherhood of Death', '2023-03-12 06:13:28'),
	(94, 'Winter\'s Tale', '2023-05-02 11:44:53'),
	(95, 'Assassination on the Tiber', '2023-04-01 04:08:03'),
	(96, 'Animals United', '2023-08-06 07:45:40'),
	(97, 'Le Mans', '2023-08-29 18:32:24'),
	(98, 'Marathon Family, The (Maratonci Trce Pocasni Krug)', '2023-01-18 20:16:31'),
	(99, '4.3.2.1', '2023-08-23 13:11:44'),
	(100, 'Dan in Real Life', '2023-04-25 23:43:49'),
	(101, 'Nashville', '2022-11-26 12:09:15'),
	(102, 'My Future Boyfriend', '2023-09-12 00:55:05'),
	(103, 'Long John Silver', '2023-01-21 16:18:11'),
	(104, 'Little Indian, Big City (Un indien dans la ville)', '2022-12-27 19:54:03'),
	(105, 'Kiss the Bride', '2022-11-26 14:19:52'),
	(106, 'In the Soup', '2022-12-11 18:01:38'),
	(107, 'Cat in Paris, A (Une vie de chat)', '2023-02-28 07:09:47'),
	(108, 'A Mulher Invisível', '2023-07-14 09:49:49');

-- Dumping structure for table w3cms.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mobilephone` char(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table w3cms.user: ~20 rows (approximately)
INSERT INTO `user` (`id`, `username`, `password`, `email`, `mobilephone`) VALUES
	(29, 'gattreedw', 'xM1\'9oQW=r', 'rkintzelw@examiner.com', '1305004666'),
	(30, 'wjirux', 'wE7{eX0rLe4W0F#', 'kfranzenx@businesswire.com', '5151877280'),
	(31, 'pwayleny', 'aN5&aPn*Mm/4', 'ckavanaghy@census.gov', '9995315366'),
	(32, 'wcarberryz', 'oG4"qjDJA', 'rrowetz@skyrock.com', '6118976581'),
	(33, 'ewisham10', 'jU2(&uuW~Nx?9pJX', 'ufrankton10@plala.or.jp', '6825492575'),
	(34, 'dgoranov11', 'lC4/.\'67', 'ddrysdell11@sfgate.com', '6869737044'),
	(35, 'closty12', 'uA2)hufi', 'jingon12@360.cn', '1186911945'),
	(36, 'bgarie13', 'dI9`}OR~Ni', 'afarnell13@chicagotribune.com', '4023668737'),
	(37, 'cmcarte14', 'uW2{.1=sART"by', 'qluckhurst14@comsenz.com', '2935707185'),
	(38, 'ahamblin15', 'aI7>_(S2/AL2O6', 'kverrills15@google.de', '1715970685'),
	(39, 'hgregorowicz16', 'wS8#(E!0rV7"', 'aedlington16@twitpic.com', '1001631934'),
	(40, 'ipoole17', 'tC9_W>Kl?K/fOS2', 'cmcleoid17@mozilla.org', '2683255261'),
	(41, 'svanleijs18', 'uF9=i&RC|X@toi', 'ascott18@narod.ru', '8719940961'),
	(42, 'mblackah19', 'wT5\'kICs\'b$', 'kstubbert19@freewebs.com', '3295362051'),
	(43, 'kharniman1a', 'tO8&>q?kY', 'cgovey1a@craigslist.org', '5342426577'),
	(44, 'ccrossthwaite1b', 'fN0<|9"ao', 'abarnsdale1b@springer.com', '4593608134'),
	(45, 'caireton1c', 'nH9!L6G5z', 'eroncelli1c@narod.ru', '8365876234'),
	(46, 'sberends1d', 'dA1!C,AN&*lU', 'ablackster1d@psu.edu', '3081837460'),
	(47, '12343', '1111', '2qwq@gmail.com', '2232112'),
	(53, '12322', '1111', '2qwq@gmail.com', '2232112');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
