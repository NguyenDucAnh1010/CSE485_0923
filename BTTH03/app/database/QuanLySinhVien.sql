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


-- Dumping database structure for quanlysinhvien
CREATE DATABASE IF NOT EXISTS `quanlysinhvien` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `quanlysinhvien`;

-- Dumping structure for table quanlysinhvien.lop
CREATE TABLE IF NOT EXISTS `lop` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tenLop` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table quanlysinhvien.lop: ~50 rows (approximately)
INSERT INTO `lop` (`id`, `tenLop`) VALUES
	(1, 'omacpeake0'),
	(2, 'wqeddww'),
	(3, 'fpotkin2'),
	(4, 'phaxell3'),
	(5, 'ffriedenbach4'),
	(6, 'mcroxford5'),
	(7, 'gtwomey6'),
	(8, 'cgunson7'),
	(9, 'cmcilenna8'),
	(10, 'jfilipyev9'),
	(11, 'drabiera'),
	(12, 'iclemob'),
	(13, 'lhucksc'),
	(14, 'eburrowd'),
	(15, 'bmartineaue'),
	(16, 'cridderf'),
	(17, 'aalgoreg'),
	(18, 'dbredeeh'),
	(19, 'gocorriganei'),
	(20, 'cledramj'),
	(21, 'lvannahk'),
	(22, 'ccluckiel'),
	(23, 'kheretym'),
	(24, 'emassien'),
	(25, 'gclinto'),
	(26, 'cfassbindlerp'),
	(27, 'vchettleq'),
	(28, 'arosemanr'),
	(29, 'ddictes'),
	(30, 'bblaszczynskit'),
	(31, 'sduffynu'),
	(32, 'tboulterv'),
	(33, 'lfarishw'),
	(34, 'jcosbeyx'),
	(35, 'bleasony'),
	(36, 'ehuebnerz'),
	(37, 'cpendrick10'),
	(38, 'lsongist11'),
	(39, 'swhitely12'),
	(40, 'troads13'),
	(41, 'rnary14'),
	(42, 'korman15'),
	(43, 'evink16'),
	(44, 'rblumson17'),
	(45, 'kbearblock18'),
	(46, 'siannuzzelli19'),
	(47, 'tkline1a'),
	(48, 'zreggiani1b'),
	(49, 'lcollingworth1c'),
	(50, 'jpaz1d');

-- Dumping structure for table quanlysinhvien.sinhvien
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tenSinhVien` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `ngaySinh` date NOT NULL,
  `idLop` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_sinhvien_lop` (`idLop`),
  CONSTRAINT `FK_sinhvien_lop` FOREIGN KEY (`idLop`) REFERENCES `lop` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table quanlysinhvien.sinhvien: ~50 rows (approximately)
INSERT INTO `sinhvien` (`id`, `tenSinhVien`, `email`, `ngaySinh`, `idLop`) VALUES
	(1, 'mishaki0', 'pbelz0@ox.ac.uk', '2003-04-03', 1),
	(2, 'anhzai', 'mstrognell1@ezinearticles.com', '2022-12-09', 2),
	(3, 'wwalker2', 'chulk2@baidu.com', '2023-01-04', 3),
	(4, 'wyannikov3', 'gmoyers3@amazon.co.jp', '2023-04-10', 4),
	(5, 'cgagie4', 'pmckerron4@flickr.com', '2023-03-16', 5),
	(6, 'nway5', 'daddess5@usgs.gov', '2023-03-01', 6),
	(7, 'mludlow6', 'hsaintpierre6@nasa.gov', '2023-03-30', 7),
	(8, 'nmuttock7', 'emanning7@ovh.net', '2022-12-19', 8),
	(9, 'lgoburn8', 'wwiltshire8@cdc.gov', '2022-10-18', 9),
	(10, 'bbechley9', 'rbraidford9@usnews.com', '2022-12-18', 10),
	(11, 'steasa', 'ttaaffea@netvibes.com', '2023-02-17', 11),
	(12, 'nfenbyb', 'jellerbeckb@ucoz.com', '2023-01-25', 12),
	(13, 'hriddifordc', 'fmoffatc@economist.com', '2023-04-06', 13),
	(14, 'fcaldesd', 'agellertd@altervista.org', '2023-08-02', 14),
	(15, 'javrahame', 'awaterhousee@ehow.com', '2023-03-10', 15),
	(16, 'xinworthf', 'lrathef@ifeng.com', '2023-03-16', 16),
	(17, 'sadamkiewiczg', 'agaugeg@google.co.uk', '2023-07-25', 17),
	(18, 'scuttlesh', 'daslamh@wordpress.com', '2023-04-09', 18),
	(19, 'rdeardeni', 'jwesselli@yale.edu', '2023-08-03', 19),
	(20, 'astefij', 'jvasilyonokj@upenn.edu', '2023-05-31', 20),
	(21, 'ldowdallk', 'sarmingerk@dyndns.org', '2023-09-01', 21),
	(22, 'eestevezl', 'tlethbyl@thetimes.co.uk', '2022-10-22', 22),
	(23, 'mcarillom', 'dverlindenm@epa.gov', '2023-09-24', 23),
	(24, 'ctebbetn', 'vhancelln@ucoz.ru', '2023-05-19', 24),
	(25, 'bhowtopreserveo', 'bbealtono@sphinn.com', '2023-07-26', 25),
	(26, 'lmarap', 'vmccroryp@over-blog.com', '2023-02-06', 26),
	(27, 'cmordieq', 'rdermottq@wix.com', '2023-08-27', 27),
	(28, 'kspriggr', 'mpossar@foxnews.com', '2022-11-13', 28),
	(29, 'gmcwilliamss', 'jrandlesomes@barnesandnoble.com', '2023-06-01', 29),
	(30, 'rguerrot', 'hnorwayt@latimes.com', '2023-03-27', 30),
	(31, 'npinkneyu', 'eiacomou@discuz.net', '2022-11-10', 31),
	(32, 'lkleebornv', 'pmeecherv@cdc.gov', '2023-06-03', 32),
	(33, 'msimmonettw', 'dcommussow@virginia.edu', '2023-07-07', 33),
	(34, 'ssinesx', 'ckrolikx@soundcloud.com', '2023-08-08', 34),
	(35, 'abesnardeauy', 'rkitchenery@pagesperso-orange.fr', '2022-11-24', 35),
	(36, 'dmilaz', 'vgoddmanz@samsung.com', '2023-08-10', 36),
	(37, 'itowll10', 'tbaxster10@list-manage.com', '2023-08-24', 37),
	(38, 'bkevlin11', 'sclemits11@salon.com', '2023-08-13', 38),
	(39, 'jrosiello12', 'aboyce12@howstuffworks.com', '2022-12-22', 39),
	(40, 'bcovelle13', 'lassender13@mapy.cz', '2023-05-21', 40),
	(41, 'htees14', 'vwyrall14@china.com.cn', '2023-03-06', 41),
	(42, 'dcherrington15', 'shawksley15@prlog.org', '2023-02-03', 42),
	(43, 'jlaurand16', 'mnazer16@plala.or.jp', '2023-04-30', 43),
	(44, 'jbarnwille17', 'rwoolatt17@tripod.com', '2023-01-13', 44),
	(45, 'dlamprecht18', 'cfonteyne18@fotki.com', '2022-11-13', 45),
	(46, 'bdwelley19', 'cessame19@usatoday.com', '2022-10-29', 46),
	(47, 'upedycan1a', 'hlyfe1a@yale.edu', '2022-12-05', 47),
	(48, 'ibloxholm1b', 'jbartosch1b@alexa.com', '2023-08-06', 48),
	(49, 'mveazey1c', 'dclery1c@guardian.co.uk', '2023-04-18', 49),
	(50, 'mhawtry1d', 'fludlem1d@apple.com', '2022-12-19', 50);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
