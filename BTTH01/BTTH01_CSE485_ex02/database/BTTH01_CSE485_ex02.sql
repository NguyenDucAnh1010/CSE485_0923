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


-- Dumping database structure for btth01_cse485
CREATE DATABASE IF NOT EXISTS `btth01_cse485` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `btth01_cse485`;

-- Dumping structure for table btth01_cse485.baiviet
CREATE TABLE IF NOT EXISTS `baiviet` (
  `ma_bviet` int unsigned NOT NULL,
  `tieude` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ten_bhat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ma_tloai` int unsigned NOT NULL,
  `tomtat` text COLLATE utf8mb4_general_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_general_ci,
  `ma_tgia` int unsigned NOT NULL,
  `ngayviet` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hinhanh` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ma_bviet`),
  KEY `ma_tloai` (`ma_tloai`),
  KEY `ma_tgia` (`ma_tgia`),
  CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`),
  CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table btth01_cse485.tacgia
CREATE TABLE IF NOT EXISTS `tacgia` (
  `ma_tgia` int unsigned NOT NULL,
  `ten_tgia` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `hinh_tgia` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`ma_tgia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

-- Dumping structure for table btth01_cse485.theloai
CREATE TABLE IF NOT EXISTS `theloai` (
  `ma_tloai` int unsigned NOT NULL,
  `ten_tloai` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ma_tloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
